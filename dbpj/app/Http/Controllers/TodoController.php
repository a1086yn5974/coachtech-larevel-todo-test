<?php

namespace App\Http\Controllers;

use App\Models\todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TodoController extends Controller
{
    public function index()
    {
        $items = todo::all();
        return view('index', ['items' => $items]);
    }

    public function create(Request $request)
    {
        $this->validate($request, todo::$rules);
        $form = $request->all();
        todo::create($form);
        return redirect('/');
    }

    public function update(Request $request)
    {
        $this->validate($request, todo::$rules);
        $items = todo::find($request->id);
        $items->content = $request->content;
        $items->save();

        $items = todo::all();
        return view('index', ['items' => $items]);
    }

    public function delete(Request $request)
    {
        $item = todo::find($request->id);
        $item->delete();

        $items = todo::all();
        return view('index', ['items' => $items]);
    }
}
