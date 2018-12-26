<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TutorialsController extends Controller
{
    public function allTutorials()
    {
        return \App\Tutorial::all();
    }

    public function topicsList() {
        return view('pages.topics', ['tutorials' => $this->allTutorials()]);
    }

    public function getTutorialByTopic($topic)
    {
        $tutorial = \App\Tutorial::where('Topic', $topic)->get()->first();
        return view('pages.tutorial', [
            'tutorialbytopic'=>$tutorial,
            'tutorials' => $this->allTutorials()
        ]);
    }
    public function newTutorial() {
        return view('pages.newTutorial', ['tutorials' => $this->allTutorials()]);
    }
}

