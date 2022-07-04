<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;

class MainController extends Controller
{
  public function dashboard(){
    $quizzes=Quiz::where('status','publish')->withCount('questions')->paginate(5);
    return view('dashboard',compact('quizzes'));
  }
  public function quiz($quiz_id)
  {
    $quiz=Quiz::whereId($quiz_id)->with('questions')->first();
    return view('quiz',compact('quiz'));
  }
  public function quiz_detail($quiz_id)
  {
    $quiz=Quiz::whereId($quiz_id)->withCount('questions')->first() ?? abort(404,'Quiz Bulunamadı');
    return view('quiz_detail',compact('quiz'));
  }
  public function result(Request $request,$quiz_id)
  {
    return $request->post();
  }

}
