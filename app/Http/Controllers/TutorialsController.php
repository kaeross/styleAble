<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TutorialsController extends Controller
{
    public function topicsList() {
        $tutorials = \App\Tutorial::all();
        return view('pages.topics', ['tutorials' => $tutorials]);
    }

    public function getTutorialByTopic($topic)
    {
        $tutorials = \App\Tutorial::all();
        $tutorial = \App\Tutorial::where('Topic', $topic)->get()->first();
        return view('pages.tutorial', [
            'tutorialbytopic'=>$tutorial,
            'tutorials' => $tutorials
        ]);
    }
}

