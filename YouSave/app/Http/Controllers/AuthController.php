<?php

namespace App\Http\Controllers;

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
     * Store a newly created resource in storage.
     */


    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'tele' => 'required|min:8|max:11|regex:/^([0-9\s\-\+\(\)]*)$/',
            'genre' => 'required',
            'disponibility' => 'required',
            'city' => 'required',
            'blood_type' => 'required',
        ]);
        // dd($request->input('tele'));

        $user =  User::create([
            'nom' => $request->input('nom'),
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
/**
 * Update the specified resource in storage.
 */
public function updateProfile(Request $request)
{
    $user = Auth::user();

    $user->nom = $request->nom;
    $user->prenom = $request->prenom;
    $user->tele = $request->tele;
    $user->genre = $request->genre;
    $user->disponibility = $request->disponibility;
    $user->city_id = $request->city_id;
    $user->blood_type_id = $request->blood_type_id;

    $user->save();

    return redirect()->route('user.profil')->with('success', 'profil updated');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
