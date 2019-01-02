<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreateTutorial extends Controller
{
    public function form()
    {
        $tutorials = \App\Tutorial::all();
        var_dump('test');
    }
}
