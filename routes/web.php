<?php


Route::get('/{topic}', 'TutorialsController@getTutorialByTopic');

Route::get('/', 'TutorialsController@topicsList');
