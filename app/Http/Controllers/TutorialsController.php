<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TutorialsController extends Controller
{
    public function getAllTutorials() {
        $tutorials = \App\Tutorial::all();
        return view('pages.tutorial', $tutorials);
    }

    public function getTutorialByTopic($topic)
    {
        $tutorial = \App\Tutorial::where('Topic', $topic)->get()->first();
        return view('pages.tutorial', $tutorial);
    }
}

