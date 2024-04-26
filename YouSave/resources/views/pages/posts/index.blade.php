@extends('layouts.main')

@section('content')
    <style>
        .card-header {
            background-color: rgba(255, 1, 1, 0.29);
        }

        .content-container {
            margin-top: 4em;
        }
    </style>

    <div class="container content-container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div id="imageCarousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="./../images/1.jpg" class="d-block w-100" alt="Image 1">
                        </div>
                        <div class="carousel-item">
                            <img src="./../images/apro2.jpg" class="d-block w-100" alt="Image 2">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#imageCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#imageCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header custom-card">Publier une demande de don de sang</div>
                    <div class="card-body custom-card">
                        <form method="post" action="{{ route('posts.store') }}">
                            @csrf
                            <div class="form-group">
                                <textarea class="form-control" name="content" placeholder="Exprimez votre besoin de don de sang..."></textarea>
                            </div>
                            <button type="submit" class="btn btn-danger">Publier</button>
                        </form>
                    </div>
                </div>

                <div class="card mt-4 custom-card">
                    <div class="card-header custom-card">Demandes de don de sang</div>

                    @foreach($posts as $post)
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="profile-options d-flex justify-content-between align-items-start mb-3">
                                    <div class="profile-info d-flex align-items-center">
                                        @if ($post->user->genre == "Femme")
                                            <img src="./../images/profilF.avif" alt="avatar" class="rounded-circle img-fluid" style="width: 80px; height: 80px;">
                                        @else
                                            <img src="./../images/homme.png" alt="avatar" class="rounded-circle img-fluid" style="width: 80px; height: 80px;">
                                        @endif
                                        <h5 class="ml-3">{{ $post->user->nom }} {{ $post->user->prenom }}</h5>
                                    </div>
                                    <div class="dropdown">
                                        <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#editModal{{ $post->id }}">Modifier</a>
                                            <form action="{{ route('posts.delete', $post->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="dropdown-item">Supprimer</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <p class="card-text">{{ $post->content }}</p>
                                <hr>
                                @foreach($post->comments as $comment)
                                    <div class="comment d-flex justify-content-between align-items-start">
                                        <div class="profile-info d-flex align-items-center">
                                            @if ($comment->user->genre == "Femme")
                                                <img src="./../images/profilF.avif" alt="avatar" class="rounded-circle img-fluid" style="width: 40px; height: 40px;">
                                            @else
                                                <img src="./../images/homme.png" alt="avatar" class="rounded-circle img-fluid" style="width: 40px; height: 40px;">
                                            @endif
                                            <h5 class="ml-2">{{ $comment->user->nom }} {{ $comment->user->prenom }}</h5>
                                        </div>
                                        <div class="dropdown">
                                            {{-- @if(Auth::check() && Auth::user()->id === $post->user_id) --}}
                                            <button class="btn btn-danger dropdown-toggle" type="button" id="commentDropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </button>

                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="commentDropdownMenu">
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#editCommentModal{{ $comment->id }}">Modifier</a>
                                                {{-- @if(Auth::user()->role[0]->id == 1) --}}
                                                <form action="{{ route('deleteComment', $comment->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="dropdown-item">Supprimer</button>
                                                </form>
                                                {{-- @endif --}}
                                            </div>
                                            {{-- @endif --}}
                                        </div>
                                    </div>
                                    <div class="comment-content">
                                        <p>{{ $comment->comment }}</p>
                                    </div>
                                    <hr>
                                    <div class="modal fade" id="editCommentModal{{ $comment->id }}" tabindex="-1" role="dialog" aria-labelledby="editCommentModalLabel{{ $comment->id }}" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="editCommentModalLabel{{ $comment->id }}">Modifier le commentaire</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="{{ route('updateComment', $comment->id) }}">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="form-group">
                                                            <label for="editedComment">Commentaire</label>
                                                            <textarea class="form-control" id="comment" name="comment" rows="3">{{ $comment->comment }}</textarea>
                                                        </div>
                                                        <button type="submit" class="btn btn-danger">Enregistrer les modifications</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                {{ $comments->links()}}
                                <div class="mt-3">
                                    <form action="{{ route('addComment', ['postId' => $post->id]) }}" method="post">
                                        @csrf
                                        <textarea class="form-control" name="comment" placeholder="Ajouter un commentaire..."></textarea>
                                        <button type="submit" class="btn btn-danger mt-2">Commenter</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="editModal{{ $post->id }}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel{{ $post->id }}" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="editModalLabel{{ $post->id }}">Modifier le post</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" action="{{ route('posts.update', $post->id) }}">
                                            @csrf
                                            @method('PUT')
                                            <div class="form-group">
                                                <label for="content">Contenu du post</label>
                                                <textarea class="form-control" id="content" name="content" rows="3">{{ $post->content }}</textarea>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection