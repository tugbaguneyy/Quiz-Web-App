<x-app-layout>
    <x-slot name="header">{{$quiz->title}}</x-slot>
    <div class="card">
  <div class="card-body">
    <p class="card-text">
      <div class="row">
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
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Ortalama Puan
              <span style="color:blue;"><b>4</b></span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Katılımcı Sayısı
              <span style="color:blue;"><b>1</b></span>
            </li>
          </ul>
        </div>
        <div class="col-md-8">
          {{$quiz->description}}</p>
        <br>
        <a href="{{route('quiz.join',$quiz->id)}}" class="btn btn-primary">Başla</a>
        </div>
      </div>

  </div>
</div>
</x-app-layout>
