<?php

namespace App\Http\Controllers;

use App\Models\BloodType;
use App\Models\City;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function create(){
        return view('pages.home');
    }

    // public function searchPage(){
    //     return view('pages.cherche');
    // }

    public function apropos(){
        return view('pages.apropos');
    }
//---------------------view blood type----------------------

    public function aplus(){
        return view('pages.blood.Aplus');
    }
    public function amoins(){
        return view('pages.blood.Amoins');
    }
    public function bplus(){
        return view('pages.blood.Bplus');
    }
    public function bmoins(){
        return view('pages.blood.Bmoins');
    }
    public function abplus(){
        return view('pages.blood.ABplus');
    }
    public function abmoins(){
        return view('pages.blood.ABmoins');
    }
    public function oplus(){
        return view('pages.blood.Oplus');
    }
    public function omoins(){
        return view('pages.blood.Omoins');
    }
//------------------------end view blood type---------------------



    //-------------- list donneurs---------------

    public function showUsers(Request $users)
    {
        $users = User::all();
        $bloods = BloodType::all();
        $cities = City::all();

        return view('pages.cherche', compact('users','bloods','cities'));
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

    public function updateUserRole(Request $request, $id)
    {
        $user = User::find($id);

        $user->role_id = $request->input('role');
        $user->save();

        return redirect()->back()->with('success', 'User updated successfully!');
    }

}
