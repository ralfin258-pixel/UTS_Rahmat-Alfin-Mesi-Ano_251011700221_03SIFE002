<?php

namespace App\Http\Controllers;

use App\Models\Plant;

class PlantController extends Controller
{
    public function index()
    {
        $plants = Plant::all();

        return view('plants.index', compact('plants'));
    }

    public function show(Plant $plant)
    {
        return view('plants.show', compact('plant'));
    }
}
