<?php

namespace App\Http\Controllers;

use App\Models\BloodType;
use App\Models\City;
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

//-----------------profil view------------------------------------

    public function profil(){
        $user = Auth::user();
        return view('pages.profil', compact('user'));
    }

    //---------------update profil---------------

    public function updateProfile(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            // 'tele' => 'required|string|max:255',
            // 'genre' => 'required|string|max:255',
            // 'disponibility' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'city_id' => 'required|exists:cities,id',
            'blood_type_id' => 'required|exists:blood_types,id',
        ]);

        $user = auth()->user();
        $user->update($request->all());

        return redirect()->back()->with('success', 'Mise à jour du profil réussie');
    }


    //-------------- list donneurs---------------

    public function showUsers(Request $users)
    {
        $users = User::all();
        $bloods = BloodType::all();
        $cities = City::all();

        return view('pages.cherche', compact('users','bloods','cities'));
    }

}
