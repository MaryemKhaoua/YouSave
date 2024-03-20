<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;

class CityController extends Controller
{
    public function index(Request $cities)
    {
        $cities = City::all();
        return view('admin.createCity', compact('cities'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:cities|max:255',
        ]);

        City::create($request->all());

        return redirect()->route('cities.index')
            ->with('success', 'La ville a été créée avec succès.');
    }
}
