<x-app-layout>
    <x-slot name="header">{{$quiz->title}}</x-slot>
    <div class="card">
  <div class="card-body">
    <p class="card-text">
      <div class="row">
        <h5 class="card-title">
           <a href={{route('quizzes.index')}} class="btn btn-sm btn-secondary" align="left">Quiz Sayfası</a>
  
        </h5>
        <div class="col-md-4">
          <ul class="list-group">

          <!--  @if($quiz->finished_at)
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Son Katılım Tarihi
              <span style="color:blue;">{{$quiz->finished_at}}</span>
            </li>
          @endif-->
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Soru Sayısı
              <span style="color:blue;"><b>{{$quiz->questions_count}}</b></span>
            </li>
            @if($quiz->details)
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Katılımcı Sayısı
              <span style="color:blue;"><b>{{$quiz->details['join_count']}}</b></span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Ortalama Puan
              <span style="color:blue;"><b>{{$quiz->details['average']}}</b></span>
            </li>
          @endif
          </ul>

          @if(Count($quiz->topTen)>0)
          <div class="card mt-3">
            <div class="card-body">
              <h5 class="card-title">İlk 10</h5>
              <ul class="list-group">
                @foreach($quiz->topTen as $result)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  <img class="w-8 rounded-full" src="{{$result->user->profile_photo_url}}">
                  <span @if(auth()->user()->id==$result->user_id) class="text-danger" @endif>  {{$result->user->name}}</span>
                  <span style="color:purple;"><b>{{$result->point}}</b></span>
                </li>
                @endforeach
              </ul>

            </div>

          </div>
        @endif
        </div>
        <div class="col-md-8">
          {{$quiz->description}}
          <table class="table table-bordered mt-3">
  <thead>
    <tr>
      <th scope="col">Ad Soyad</th>
      <th scope="col">Puan</th>
      <th scope="col">Doğru</th>
      <th scope="col">Yanlış</th>

    </tr>
  </thead>
  <tbody>
    @foreach($quiz->results as $result)
    <tr>
      <td>{{$result->user->name}}</td>
      <td>{{$result->point}}</td>
      <td>{{$result->correct}}</td>
      <td>{{$result->wrong}}</td>


    </tr>
    @endforeach
  </tbody>
</table>
        </p>
        <br>
        </div>
      </div>

  </div>
</div>
</x-app-layout>
