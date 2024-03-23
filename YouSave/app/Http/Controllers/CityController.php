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
    public function show($id)
    {
        $city = City::findOrFail($id);
        return view('cities.show', compact('city'));
    }

    public function edit($id)
    {
        $city = City::findOrFail($id);
        return view('cities.edit', compact('city'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|unique:cities|max:255',
        ]);

        $city = City::findOrFail($id);
        $city->update($request->all());

        return redirect()->route('cities.index')
            ->with('success', 'Les détails de la ville ont été mis à jour avec succès.');
    }

    public function destroy($id)
    {
        $city = City::findOrFail($id);
        $city->delete();

        return redirect()->route('cities.index')
            ->with('success', 'La ville a été supprimée avec succès.');
    }

}
