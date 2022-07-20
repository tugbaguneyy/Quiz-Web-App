<x-app-layout>
    <x-slot name="header">{{$quiz->title}}</x-slot>
    <div class="card">
  <div class="card-body">
    <p class="card-text">
      <div class="row">
        <div class="col-md-4">
          <ul class="list-group">
            @if($quiz->my_rank)
              <li class="list-group-item d-flex justify-content-between align-items-center">
                Sen Neredesin?
                <span style="color:#FF0080;"><b>#{{$quiz->my_rank}}</b></span>
              </li>
            @endif
            @if($quiz->my_result)
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Puan
              <span style="color:green;"><b>{{$quiz->my_result->point}}</b></span>
            </li>

            <li class="list-group-item d-flex justify-content-between align-items-center">
              Doğru / Yanlış
              <span style="color:orange;"><b>{{$quiz->my_result->correct}} / {{$quiz->my_result->wrong}}</b></span>
            </li>
              @endif
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
          {{$quiz->description}}</p>
        <br>
        @if($quiz->my_result)
        <a href="{{route('quiz.join',$quiz->id)}}" class="btn btn-secondary">Sonucu Görüntüle</a>
      @elseif($quiz->finished_at>now())
        <a href="{{route('quiz.join',$quiz->id)}}" class="btn btn-primary">Başla</a>
      @else
        <a href="{{route('quiz.join',$quiz->id)}}" class="btn btn-primary">Başla</a>
        @endif
        </div>
      </div>

  </div>
</div>
</x-app-layout>
