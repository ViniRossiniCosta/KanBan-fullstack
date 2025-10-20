<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Board;
use App\Models\User;

class BoardController extends Controller
{
public function index(Request $request)
    {
        $user = $request->user();
        $Board = $user->boards()->with('positions.tasks')->get();
        if (!$Board) {
            return Inertia::render('Board', [
                'title' => 'Board not found',
                'positions' => [],
                'tasks' => [],
            ]);
        }

        return Inertia::render('Board', [
            'Board' => $Board
        ]);
    }

    public function create() {

    }

    public function store() {
        // $data = $request
    }
}
