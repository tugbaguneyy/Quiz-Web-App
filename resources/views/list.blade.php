<x-app-layout>
    <x-slot name="header">Quizler</x-slot>

    <div class="card">
      <div class="card-body">
        <h5 class="card-title">
           <a href={{route('quizzes.create')}} class="btn btn-sm btn-primary">Quiz oluştur</a>
        </h5>
        <table class="table table-bordered">
<thead>
  <tr>
    <th scope="col">Quiz</th>
    <th scope="col">Soru Sayısı</th>
    <th scope="col">Durum</th>
    <th scope="col">Bitiş Tarihi</th>
    <th scope="col">İşlemler</th>
  </tr>
</thead>
<tbody>
      @foreach($quizzes as $quiz)
    <tr>
    <td >{{$quiz->title}}</td>
    <td >{{$quiz->questions_count}}</td>
    <td >
      @switch($quiz->status)
        @case('publish')
         <span style="color:green">Aktif</span>
        @break
        @case('passive')
        <span style="color:red">Pasif</span>
        @break
        @case('draft')
         <span style="color:gray">Taslak</span>
         @break

       @endswitch
    </td>
    <td >{{$quiz->finished_at}}</td>
    <td>
      <a href='{{route('questions.index',$quiz->id)}}' class="btn btn-sm btn-warning">Soru+<i class="fa fa-questions"></i></a>
      <a href='{{route('quizzes.edit',$quiz->id)}}' class="btn btn-sm btn-primary">Düzenle<i class="fa fa-edit"></i></a>
      <a href='{{route('quizzes.destroy',$quiz->id)}}' class="btn btn-sm btn-danger">Sil<i class="fa fa-times"></i></a>
    </td>
  </tr>
@endforeach
</tbody>
</table>
{{$quizzes->links()}}
      </div>
    </div>
</x-app-layout>
