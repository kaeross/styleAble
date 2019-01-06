<?php


Route::get('/topic/{topic}', 'TutorialsController@getTutorialByTopic');

Route::post('/', 'TutorialsController@store');

Route::get('/', 'TutorialsController@index');

Route::get('/new', 'TutorialsController@create');
