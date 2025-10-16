<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class TaskController extends Controller
{
    public function create() {
        return Inertia::render('task/Form');
    }

    public function store(Request $request) {
        $request->validate([
            'nome' => 'required|string|max:120',
            'dt_start' => 'required|datetime',
            'dt_end' => 'required|datetime'
        ]);

        // $task = ::create([
        //     'nome' => $request->nome,
        //     'dt_start' => $request->dt_start,
        //     'dt_end' => $request->dt_end,
        // ]);
    }

    public function edit() {
        return Inertia::render('task/form');
    }

    // public function update() {


    //     return back();
    // }
}
