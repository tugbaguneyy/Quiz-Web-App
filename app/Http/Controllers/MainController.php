<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;
use App\Models\Answer;
use App\Models\Result;

class MainController extends Controller
{
  public function dashboard(){
    $quizzes=Quiz::where('status','publish')->where(function($query){
      $query->whereNull('finished_at')->orWhere('finished_at','>',now());
    })->withCount('questions')->paginate(5);
    $results=auth()->user()->results;
    return view('dashboard',compact('quizzes','results'));
  }
  public function quiz($quiz_id)
  {
     $quiz=Quiz::whereId($quiz_id)->with('questions.my_answer','my_result')->first()  ?? abort(404,'Quiz Bulunamadı');
    if($quiz->my_result){
      return view('quiz_result',compact('quiz'));
    }
    return view('quiz',compact('quiz'));
  }
  public function quiz_detail($quiz_id)
  {

    $quiz=Quiz::whereId($quiz_id)->with('my_result','topTen.user')->withCount('questions')->first() ?? abort(404,'Quiz Bulunamadı');
    return view('quiz_detail',compact('quiz'));
  }
  public function result(Request $request,$quiz_id)
  {
     $quiz=Quiz::with('questions')->whereId($quiz_id)->first() ?? abort(404,'Quiz Bulunamadı');
     $correct=0;
     if($quiz->my_result) {
       abort(404,"Bu quize daha önce katıldınız");
     }
    foreach($quiz->questions as $question) {
      Answer::create([
        'user_id'=>auth()->user()->id,
        'question_id'=>$question->id,
        'answer'=>$request->post($question->id)
      ]);
      //echo $question->correct_answer.' '.$request->post($question->id);

      if($question->correct_answer===$request->post($question->id)){
        $correct+=1;
      }
    }
    $point=round((100/count($quiz->questions))*$correct);
    $wrong=count($quiz->questions)-$correct;
      Result::create([
      'user_id'=>auth()->user()->id,
      'quiz_id'=>$quiz->id,
      'point'=>$point,
      'correct'=>$correct,
      'wrong'=>$wrong,
    ]);

     return redirect()->route('quiz.detail',$quiz->id)->withSuccess('Quiz Tamamlandı. Puan:'.$point);

    //print_r($request->post());
  }

}
