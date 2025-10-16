<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class StepController extends Controller
{

    public function create()
    {
        return Inertia::render('step/form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'desc' => 'required|string|max:150',
            'completed' => 'required|boolean',
            '',
            '',
        ]);
    }

    public function edit()
    {
        return Inertia::render(
            'task/form');
    }
}
