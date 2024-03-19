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
}
