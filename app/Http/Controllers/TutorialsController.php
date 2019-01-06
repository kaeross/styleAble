<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TutorialsController extends Controller
{
    public function allTutorials()
    {
        return \App\Tutorial::all();
    }

    public function index() {
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
    public function create() {


        return view('pages.newTutorial', ['tutorials' => $this->allTutorials()]);
    }
    public function store() {

        $tutorial = new Tutorial();

        $tutorial->topic = request('Topic');
        $tutorial->subtitle = request('Subtitle');
        $tutorial->overview = request('Overview');
        $tutorial->example = request('Example');

        $tutorial->save();
    }
}

