<?php


Route::get('/topic/{topic}', 'TutorialsController@getTutorialByTopic');

Route::get('/', 'TutorialsController@topicsList');

Route::get('/new', 'TutorialsController@newTutorial');
