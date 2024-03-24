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

        if (City::where('name', $request->name)->exists()) {
            return redirect()->route('cities.index')
            ->with('error', 'Une ville avec ce nom existe déjà');
        }

        City::create($request->all());

        return redirect()->route('cities.index')
            ->with('success', 'La ville a été créée avec succès');
    }

    public function edit(string $id)
    {
        $city = City::findOrfail($id);

        return view('admin.editCity',compact('city'));
    }

    public function updateCity(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|unique:cities|max:255',
        ]);

        $city = City::findOrFail($id);
        $city->update($request->all());

        return redirect()->route('cities.index')
            ->with('success', 'Les détails de la ville ont été mis à jour avec succès');
    }

    public function destroy($id)
    {
        $city = City::findOrFail($id);
        $city->delete();

        return redirect()->route('cities.index')
            ->with('success', 'La ville a été supprimée avec succès');
    }

}
