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
        @if(!$quiz->finished_at)
          <span style="color:green">Aktif</span>
        @elseif( $quiz->finished_at>now())
         <span style="color:green">Aktif</span>
       @else
         <span style="color:brown">Son kullanım tarihi geçti.</span>
      @endif
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
      <a href="{{route('quizzes.details',$quiz->id)}}" class="btn btn-sm btn-secondary">Bilgi</a>
      <a href='{{route('questions.index',$quiz->id)}}' class="btn btn-sm btn-warning">Soru+<i class="fa fa-questions"></i></a>
      <a href='{{route('quizzes.edit',$quiz->id)}}' class="btn btn-sm btn-primary">Düzenle<i class="fa fa-edit"></i></a>
      <a href='{{route('quizzes.destroy',$quiz->id)}}' class="btn btn-sm btn-danger">Sil<i class="fa fa-times"></i></a>
    </td>
  </tr>
@endforeach
</tbody>
</table>
{{$quizzes->withQueryString()->links()}}
<br>

<form method="GET" action="">
  <div class="form-row">
    <div class="col-md-2">
      <input type="text" name="title" value="{{request()->get('title')}}" placeholder="Quiz Adı" class="form-control">
    </div>
    <div class="col-md-2">
      <select class="form-control" onchange="this.form.submit()" name="status">
        <option value="">Durum Seçiniz</option>
        <option @if(request()->get('status')=='publish' ) selected @endif value="publish">Aktif</option>
        <option @if(request()->get('status')=='passive' ) selected @endif value="passive">Pasif</option>
        <option @if(request()->get('status')=='draft' ) selected @endif value="draft">Taslak</option>
      </select>
    </div>
    @if(request()->get('title') || request()->get('status') )
    <br>
    <div class="colm-md-4">
      <a href="{{route('quizzes.index')}}" class="btn btn-primary btn-sm">Sıfırla</a>
    </div>
   @endif

  </div>

</form>
<br>
      </div>
    </div>

</x-app-layout>
