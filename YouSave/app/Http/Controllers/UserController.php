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
        // dd(Auth::user()->role[0]->id==1);
        return view('pages.home');
    }

 

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

    public function profil(){
        $user = Auth::user();
        $cities = City::all();
        $bloods = BloodType::all();
        return view('pages.profil', compact('user','cities','bloods'));
    }




    //filter

    public function filter(Request $request)
    {
        $selectedCity = $request->input('city_id');
        $selectedBlood = $request->input('blood_type_id');

        if ($selectedCity && $selectedBlood) {
            $users = User::where('city_id', $selectedCity)
                         ->where('blood_type_id', $selectedBlood)
                         ->get();
        } else {
            $users = User::all();
        }

        $cities = City::all();
        $bloods = BloodType::all();

        return view('pages.cherche', compact('users', 'cities', 'bloods'));
    }

}
