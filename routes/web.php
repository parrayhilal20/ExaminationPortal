<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::post('/home', 'HomeController@addquestion')->name('home');

Route::resource('/questionpaper','Questionpaper\QuestionPapersController');

Route::resource('/studentdetails','StudentDetail\StudentdetailController');

Route::get('/validatestudent','Validate\ValidateStudentController@validateview');

Route::get('/validate','Validate\ValidateStudentController@validatestudent');

Route::resource('/authentic','Validate\AuthenticStudentController');

Route::resource('/employeedetails','Employee\EmployeedetailController');

Route::resource('/employeelist','Employee\EmployeeListController');

Route::resource('/addexamschedule','Admin\AddExamScheduleController');

Route::resource('/examschedules','Admin\ExamSchedulesController');

Route::resource('/import', 'Admin\ImportController');

Route::resource('/selectexam','Questionpaper\SelectExamController');

Route::resource('/finalizepaper','Questionpaper\FinalizeQuestionpaperController');