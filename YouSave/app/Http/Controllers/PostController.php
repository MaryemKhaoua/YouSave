<?php

namespace App\Http\Controllers;

use App\repositories\IcommentRepository;
use App\repositories\IPostRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{

    protected $post;
    protected $comment;

    public function __construct(IPostRepository $post, IcommentRepository $comment)
    {
        $this->post = $post;
        $this->comment = $comment;
    }

    public function index()
    {
        $posts = $this->post->getAllPosts();
        $comments = $this->comment->getAllComments();
        $user = Auth::user();


        return view('pages.posts.index', compact('posts', 'user', 'comments'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required'
        ]);

        if (auth()->check()) {
            $user = auth()->user();

            if ($user->status == 0) {
                return redirect()->back()->with('error', 'Vous êtes interdit de publier des posts.');
            }

            $data = $request->all();
            $data['user_id'] = $user->id;

            $this->post->createPosts($data);

            return redirect('/posts')->with('success', 'Post created successfully!');
        } else {
            return redirect()->route('login')->with('error', 'Vous devez être connecté pour ajouter un post');
        }
    }



    public function update(Request $request, $id)
    {
        $request->validate([
            'content' => 'required|string',
        ]);

        $data = $request->all();
        $this->post->updatePosts($id, $data);

        return redirect()->back()->with('success', 'Post mis à jour avec succès');
    }

    public function destroy($id)
    {
        $deleted = $this->post->deletePosts($id);

        if ($deleted) {
            return redirect()->back()->with('success', 'Post supprimé avec succès');
        } else {
            return redirect()->back()->with('error', 'Le post que vous essayez de supprimer n\'existe pas');
        }
    }
    //--------------------comments section-----------------------

    public function addComment(Request $request, $postId)
    {
        $request->validate([
            'comment' => 'required'
        ]);

        $user = auth()->user();
        if ($user) {
            $data = [
                'comment' => $request->input('comment'),
                'user_id' => $user->id,
                'post_id' => $postId
            ];

            $this->comment->createComments($data);

            return redirect('/posts');
        } else {

            return redirect()->route('login')->with('error', 'Vous devez être connecté pour ajouter un commentaire');
        }
    }

    public function updateComment(Request $request, $id)
    {
        $request->validate([
            'comment' => 'required'
        ]);

        $comment = $this->comment->findCommentById($id);

        if ($comment) {
            $data = [
                'comment' => $request->input('comment')
            ];
            $this->comment->updateComments($id, $data);

            return redirect()->back()->with('success', 'Commentaire mis à jour avec succès');
        } else {
            return redirect()->back()->with('error', 'Le commentaire que vous essayez de mettre à jour n\'existe pas');
        }
    }

    public function deleteComment($id)
    {
        $deleted = $this->comment->deletecomments($id);

        if ($deleted) {
            return redirect()->back()->with('success', 'comment supprimé avec succès');
        } else {
            return redirect()->back()->with('error', 'Le comment que vous essayez de supprimer n\'existe pas');
        }
    }
}
