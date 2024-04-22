<?php

namespace App\Http\Controllers;

use App\Models\Blood;
use App\Models\BloodType;
use App\Models\City;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bloods = BloodType::all();
        $cities = City::all();

        return view('pages.auth.register', compact('bloods', 'cities'));
    }


    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
    //     $bloods = BloodType::all();

    //     return view('pages.auth.register', compact('bloods'));

    // }

    /**
     * Store a newly created resource in storage.
     */


    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'tele' => 'required|min:8|max:11|regex:/^([0-9\s\-\+\(\)]*)$/',
        ]);
        // dd($request->input('tele'));

        $user =  User::create([
            'nom' => $request->nom,
            'prenom' => $request->input('prenom'),
            'tele' => $request->input('tele'),
            'genre' => $request->input('genre'),
            'disponibility' => $request->input('disponibility'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'city_id' => $request->input('city'),
            'blood_type_id' => $request->input('blood_type'),
        ]);
        $user->role()->attach(2);

        $user->tele = $request->input('tele');
        $user->save();
        return redirect()->route('user.login');
    }


    /**
     * Display the specified resource.
     */
    public function showLoginForm()
    {
        return view('pages.auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/');
        }

        return back()->withErrors([
            'email' => 'The provided credentials don t match',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('user.login');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
