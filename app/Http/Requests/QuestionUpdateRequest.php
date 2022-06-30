<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuestionUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
     public function rules()
     {
         return [
             'question'=>'required|min:3',
             'image'=>'image|nullable|max:1024|mimes:jpg,png,jpeg',
             'answer1'=>'min:1|required',
             'answer2'=>'min:1|required',
             'answer3'=>'min:1|required',
             'answer4'=>'min:1|required',
             'correct_answer'=>'required',
         ];
     }
     public function attributes()
     {
         return [
             'question'=>'Soru',
             'image'=>'Soru Fotoğrafı',
             'answer1'=>'1. cevap',
             'answer2'=>'2. cevap',
             'answer3'=>'3. cevap',
             'answer4'=>'4. cevap',
             'correct_answer'=>'Doğru cevap',
         ];
     }
}
