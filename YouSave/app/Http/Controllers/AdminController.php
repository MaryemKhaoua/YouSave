<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{


    public function statistics()
    {
        $userCount = User::count();
        $cityCount = City::count();
        $bannedCount = User::where('status', 0)->count();

        return view('admin.dashboard', compact('userCount', 'cityCount', 'bannedCount'));
    }

    public function gestionUser()
    {
        $users = User::paginate(5);
        $roles = Role::all();

        return view('admin.gestionUser',compact('users', 'roles'));
    }

    public function BanUser($id)
    {
        $user = User::find($id);

        $user->status = 0;
        $user->save();

        return redirect()->back()->with('success', 'User Banned successfully!');
    }

    public function unbanUser($id)
    {
        $user = User::find($id);

        if (!$user) {
            return redirect()->back()->with('error', 'Utilisateur non trouvé.');
        }

        if ($user->status == 0) {
            $user->status = 1;
            $user->save();

            return redirect()->back()->with('success', 'utilisateur débanni avec succès!');
        } else {
            return redirect()->back()->with('error', 'cet utilisateur nest pas actuellement banni.');
        }
    }


    public function updateUserRole(Request $request, $id)
    {
        $user = User::find($id);

        $user->role()->sync([$request->input('role_id')]);
        // dd($request->input('role'));
        $user->save();

        return redirect()->back()->with('success', 'User updated successfully!');
    }

}
