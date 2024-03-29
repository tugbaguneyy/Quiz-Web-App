<x-app-layout>
  <x-slot name="header">Quiz Oluştur</xslot>

    <div class="card">
      <div class="card-body">
        <form method="POST" action="{{route('quizzes.store')}}">
          @csrf
          <div class="form-group">
            <label>Quiz Başlığı</label>
            <input type="text" name="title" class="form-control" value="{{old('title')}}">
          </div>
          <div class="form-group">
            <label>Quiz Açıklama</label>
          <textarea name="description" class="form-control" rows="4">{{old('description')}}</textarea>
          </div>
          <div class="form-group">
            <input type="checkbox" @if(old('finished_at')) checked @endif >
            <label>Quiz Bitiş Tarihi Ekle</label>
          </div>
            <div class="form-group">
              <label>Quiz Bitiş Tarihi</label>
               <input type="datetime-local" name="finished_at" value="{{old('finished_at')}}" class="form-control">
            </div>
            <div class="form-group">
              <br>
              <button type="submit" class="btn btn-outline-success">Quiz Oluştur</button>
            </div>
        </form>
      </div>
    </div>

</x-app-layout>
