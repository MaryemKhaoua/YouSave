<?php

namespace App\Http\Controllers;

use App\Models\BloodType;
use App\Services\BloodServiceInterface;
use Illuminate\Http\Request;


class BloodTypeController extends Controller
{
    protected $bloodService;

    public function __construct(BloodServiceInterface $bloodService)
    {
        $this->bloodService = $bloodService;
    }

    public function index()
    {
        $bloods = $this->bloodService->getAllBlood();
        return view('admin.createBlood', compact('bloods'));
    }

    public function show($id)
    {
        return $this->bloodService->getBlood($id);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'type' => 'required|string',
        ]);

        $result = $this->bloodService->createBlood($data);

        if ($result === 'exists') {
            return redirect()->back()->with('error', 'Groupe sanguin déjà existant.');
        }

        return redirect()->back()->with('success', 'Groupe sanguin ajouté avec succès.');
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'type' => 'required|string',
        ]);

         $this->bloodService->updateBlood($id, $data);
        return redirect()->back()->with('success', 'Groupe sanguin mis à jour avec succès.');

    }

    public function destroy($id)
    {
        $this->bloodService->deleteBlood($id);

        return redirect()->back()->with('success', 'Groupe sanguin supprimé avec succès.');
    }
}
