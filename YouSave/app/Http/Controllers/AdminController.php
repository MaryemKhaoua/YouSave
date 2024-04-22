<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // public function create(){
    //     return view('admin.dashboard');
    // }

    public function error()
    {
        return view('admin.403');
    }

    public function statistics()
    {
        $userCount = User::count();
        $cityCount = City::count();
        $bannedCount = User::where('status', 0)->count();

        return view('admin.dashboard', compact('userCount', 'cityCount', 'bannedCount'));
    }





    // public function statistics() {
    //     // Retrieve users with at least one city
    //     $usersWithCities = User::whereHas('city')->get();

    //     // Count users in each city
    //     $cityCounts = $usersWithCities->groupBy('city_id')->map->count();

    //     // Prepare data for chart
    //     $cityLabels = $cityCounts->keys()->map(function($cityId) {
    //         return City::findOrFail($cityId)->name;
    //     });
    //     $cityData = $cityCounts->values();

    //     // Total user count
    //     $userCount = $usersWithCities->count();

    //     return view('admin.dashboard', compact('userCount', 'cityLabels', 'cityData'));
    // }

}
