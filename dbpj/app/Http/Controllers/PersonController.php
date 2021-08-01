<?php

namespace App\Http\Controllers;

use App\Models\person;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PersonController extends Controller
{
    public function create(Request $request)
    {
        $form = $request->all();
        todo::create($form->content);
        return redirect('/');
    }
    
}    
