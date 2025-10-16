<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class CommentController extends Controller
{
    public function create() {
        return Inertia::render('step/form');
    }

    public function store() {

    }

    public function show() {

    }
}
