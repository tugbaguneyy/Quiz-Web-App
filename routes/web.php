<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\quizController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\MainController;

Route::get('/', function () {return view('welcome');});


Route::group(['middleware'=>'auth'],function(){
    Route::get('panel',[MainController::class,'dashboard'])->name('dashboard');
    Route::get('quiz/detay/{quiz_id}',[MainController::class,'quiz_detail'])->name('quiz.detail');
    Route::get('quiz/{quiz_id}',[MainController::class,'quiz'])->name('quiz.join');
    Route::post('quiz/{quiz_id}/result',[MainController::class,'result'])->name('quiz.result');
});

Route::group(['middleware'=>['auth','isAdmin'],'prefix'=>'admin'],function () {
Route::get('quizzes/{id}',[quizcontroller::class,'destroy'])->whereNumber('id')->name('quizzes.destroy');
Route::get('quiz/{quiz_id}/questions/{id}',[QuestionController::class,'destroy'])->whereNumber('id')->name('questions.destroy');
Route::resource('quizzes',quizController::class);
Route::resource('quiz/{quiz_id}/questions',QuestionController::class);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
