<x-app-layout>
    <x-slot name="header">{{$quiz->title}} Sonucu</x-slot>
    <div class="card">
     <div class="card-body">

      <h2 style="background-color:#A3C0FF;">Puan:<strong>{{$quiz->my_result->point}}</strong></h2>
      <br>
       <div class="alert alert-warning">
           <span>◎:Senin Cevabın</span>
           <br>
           <span>➤:Doğru Cevap</span>
       </div>
       <p class="card-text">

        @foreach ($quiz->questions as $question)
          <small style="color:gray;">Başarı Oranı:<strong>%{{$question->true_percent}}</strong></small>
          <br>
          @if($question->correct_answer==$question->my_answer->answer)
          <span>&#10004;</span>
            @else
           <span>❌</span>
         @endif
          <strong>{{$loop->iteration}}. </strong>{{$question->question}}
          @if($question->image)
          <img src="{{asset($question->image)}}"  class="img-responsive">
        @endif
          <div class="form-check mt-2">
          @if('answer1'==$question->correct_answer)
            <span>➤</span>
          @elseif('answer1'==$question->my_answer->answer)
            <span>◎</span>
          @endif
            <label class="form-check-label" for="quiz{{$question->id}}1">
              {{$question->answer1}}
           </label>
          </div>
          <div class="form-check">
          @if('answer2'==$question->correct_answer)
            <span>➤</span>
          @elseif('answer2'==$question->my_answer->answer)
            <span>◎</span>
          @endif
            <label class="form-check-label" for="quiz{{$question->id}}2">
              {{$question->answer2}}
           </label>
          </div>
          <div class="form-check">
          @if('answer3'==$question->correct_answer)
            <span>➤</span>
          @elseif('answer3'==$question->my_answer->answer)
            <span>◎</span>
          @endif
            <label class="form-check-label" for="quiz{{$question->id}}3">
              {{$question->answer3}}
           </label>
          </div>
          <div class="form-check">
            @if('answer4'==$question->correct_answer)
              <span>➤</span>
            @elseif('answer4'==$question->my_answer->answer)
              <span>◎</span>
            @endif
            <label class="form-check-label" for="quiz{{$question->id}}4">
              {{$question->answer4}}
           </label>
          </div>
          @if(!$loop->last)
            <hr>
          @endif
        @endforeach
        <br>

      </p>
    </div>
   </div>
</x-app-layout>
