<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create(){
        return view('pages.home');
    }

    public function searchPage(){
        return view('pages.cherche');
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
//------------------------end view blood type
}
