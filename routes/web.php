<?php
Route::get('/', 'HomeController@index')->name('admin_home');


//Project
Route::get('/project','ProjectsController@index')->name('project_list');
Route::get('/project/{project}','ProjectsController@show')->name('project_show');
Route::get('/project/create','ProjectsController@create')->name('project_form');
Route::post('/project/create','ProjectsController@store')->name('project_save');
Route::delete('/project/{id}', 'ProjectsController@destroy')->name('project_delete');

//Institution
Route::get('/institution','InstitutionsController@index')->name('institution_list');
Route::get('/institution/create','InstitutionsController@create')->name('institution_form');
Route::get('/institution/{id}','InstitutionsController@show')->name('institution_show');
Route::post('/institution/create','InstitutionsController@store')->name('institution_save');
Route::delete('/institution/{id}', 'InstitutionsController@destroy')->name('institution_delete');

//Experience
Route::get('/experience','ExperiencesController@index')->name('experience_list');
Route::get('/experience/create','ExperiencesController@create')->name('experience_form');
Route::get('/experience/{id}','ExperiencesController@show')->name('experience_show');
Route::post('/experience/create','ExperiencesController@store')->name('experience_save');
Route::delete('/experience/{id}', 'ExperiencesController@destroy')->name('experience_delete');



// Technology
Route::post('/project/{project}/technology','TechnologiesController@store')->name('technology_save');
Route::delete('/technology/{id}', 'TechnologiesController@destroy')->name('technology_delete');

//Duty
Route::post('/experience/{experience}/duty','DutiesController@store')->name('duty_save');
Route::delete('/duty/{id}', 'DutiesController@destroy')->name('duty_delete');

//Subjects
Route::post('/institution/{institution}/subjects','SubjectsController@store')->name('subject_save');
Route::delete('/subject/{id}', 'SubjectsController@destroy')->name('subject_delete');

Auth::routes();
