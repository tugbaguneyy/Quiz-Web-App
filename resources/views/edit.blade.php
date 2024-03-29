<x-app-layout>
  <x-slot name="header">Quiz Güncelle</xslot>

    <div class="card">
      <div class="card-body">
        <form method="POST" action="{{route('quizzes.update',$quiz->id)}}">
             @method('PUT')
          @csrf
          <div class="form-group">
            <label>Quiz Başlığı</label>
            <input type="text" name="title" class="form-control" value="{{$quiz->title}}">
          </div>
          <div class="form-group">
            <label>Quiz Açıklama</label>
          <textarea name="description" class="form-control" rows="4">{{$quiz->description}}</textarea>
          </div>
          <div class="form-group">
            <label>Quiz Durumu</label>
            <select name="status" class="form-control">
              <option @if($quiz->status==='publish') selected @endif value="publish">Aktif</option>
              <option @if($quiz->status==='passive') selected @endif value="passive">Pasif</option>
              <option @if($quiz->status==='draft') selected @endif value="draft">Taslak</option>
            </select>
          </div>
          <div class="form-group">
            <input type="checkbox" @if($quiz->finished_at) checked @endif >
            <label>Quiz Bitiş Tarihi Ekle</label>
          </div>
            <div class="form-group">
              <label>Quiz Bitiş Tarihi</label>
               <input type="datetime-local" name="finished_at" @if($quiz->finished_at) value="{{date('Y-m-d\TH:i',strtotime($quiz->finished_at))}}" @endif class="form-control">
            </div>
            <div class="form-group">
              <br>
              <button type="submit" class="btn btn-outline-success">Quiz Güncelle</button>
            </div>
        </form>
      </div>
    </div>

</x-app-layout>
