<?php

namespace App\Http\Controllers;

use App\Models\todo;
use Illuminate\Http\Request;

class todoController extends Controller
{
    public function index()
    {
        return view('todoFolder.index');
    }

    public function create()
    {
        return view('todoFolder.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|max:255',
            'description' => 'max:255',
        ]);

        $user_id = auth()->user()->id;

        $createTodo = todo::create([
            'title' => $data['title'],
            'description' => $data['description'],
            'user_id' => $user_id,
        ]);

        return redirect(route('todoFolder.index'));
    }
}
