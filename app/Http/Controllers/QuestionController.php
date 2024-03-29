<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;
use App\Http\Requests\QuestionCreateRequest;
use App\Http\Requests\QuestionUpdateRequest;
use Illuminate\Support\Str;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
       $quiz=Quiz::whereId($id)->with('questions')->first() ?? abort(404,'Quiz Bulunamadı.');
        return view('qlist',compact('quiz'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $quiz=Quiz::find($id);
        return view('qcreate',compact('quiz'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(QuestionCreateRequest $request,$id)
    {
        if($request->hasFile('image')){
          $fileName=Str::slug($request->question).'.'.$request->image->extension();
          $fileNameWithUpload='upload/'.$fileName;
          $request->image->move(public_path('upload'),$fileName);
          $request->merge(['image'=>$fileNameWithUpload]);
        }
        Quiz::find($id)->questions()->create($request->post());
        return redirect()->route('questions.index',$id)->withSuccess('Soru oluşturuldu');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($quiz_id,$id)
    {
        //return $quiz_id.$id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($quiz_id,$question_id)
    {
        $question=Quiz::find($quiz_id)->questions()->whereId($question_id)->first()?? abort(404,'Quiz ya da Soru Bulunamadı.');
        return view('qedit',compact('question'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(QuestionUpdateRequest $request, $quiz_id,$question_id)
    {
      if($request->hasFile('image')){
        $fileName=Str::slug($request->question).'.'.$request->image->extension();
        $fileNameWithUpload='upload/'.$fileName;
        $request->image->move(public_path('upload'),$fileName);
        $request->merge(['image'=>$fileNameWithUpload]);
      }
      Quiz::find($quiz_id)->questions()->whereId($question_id)->first()->update($request->post());
      return redirect()->route('questions.index',$quiz_id)->withSuccess('Soru güncellendi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($quiz_id,$question_id)
    {
        Quiz::find($quiz_id)->questions()->whereId($question_id)->delete();
        return redirect()->route('questions.index',$quiz_id)->withSuccess('Soru Silindi');
    }
}
