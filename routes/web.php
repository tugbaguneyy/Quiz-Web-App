<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\App;
/*use App\Http\Controllers\Yonet;
use App\Http\Controllers\Formslemleri;
use App\Http\Controllers\VeritabaniIslemleri;
use App\Http\Controllers\ModelISlemleri;
use App\Http\Controllers\Iletisim;
use App\Http\Controllers\ResimYukle;*/
use App\Http\Controllers\quizController;
use App\Http\Controllers\QuestionController;

Route::get('/', function () {return view('welcome');});

/*Route::get('/anasayfa',[App::class,'index']);
Route::get('/hakkimizda',[App::class,'hakkimizda']);
Route::get('/uye/{isim}',[App::class,'uye']);
Route::get('/deneme',function () {  return view('ornek');});
Route::get('/isimgonder/{isim}',[App::class,'isim_gonder']);*/

/*Route::get('/web',[Yonet::class,'site'])->name('web');
Route::get('/form',[Formslemleri::class,'gorunum']);
Route::middleware('arakontrol')->post('/form-sonuc',[Formslemleri::class,'sonuc'])->name('sonuc');
Route::get('/ekle',[VeritabaniIslemleri::class,'ekle']);
Route::get('/guncelle',[VeritabaniIslemleri::class,'guncelle']);
Route::get('/sil',[VeritabaniIslemleri::class,'sil']);
Route::get('/yazdir',[VeritabaniIslemleri::class,'yazdir']);
Route::get('/liste',[ModelISlemleri::class,'liste']);
Route::get('/modelleEkle',[ModelISlemleri::class,'ekle']);
Route::get('/modelleGuncelle',[ModelISlemleri::class,'guncelle']);
Route::get('/modelleSil',[ModelISlemleri::class,'sil']);
Route::get('/iletisim',[Iletisim::class,'index']);
Route::post('/iletisim-sonuc',[Iletisim::class,'ekleme'])->name("iletisim-sonuc");
Route::get('/upload',function(){
  return view('upload');
});
Route::post('/resim-yukle',[ResimYukle::class,'resimYukleme'])->name('yukle');
Route::get('/uye',function(){
  return view('uyelik');
});
//farklı kullanım
Route::post('/uye-kayit',[App\Http\Controllers\uyelik_islemleri::class,'uyekayit'])->name('uyekayit');
Route::get('/tema',function(){
  return view('sayfalar.home');
});
Route::get('/galeri',function(){
  return view('sayfalar.galeri');
});
Route::get('/hizmetler',function(){
  return view('sayfalar.hizmetler');
});
*/
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/panel', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::group(['middleware'=>['auth','isAdmin'],'prefix'=>'admin'],function () {
Route::get('quizzes/{id}',[quizcontroller::class,'destroy'])->whereNumber('id')->name('quizzes.destroy');
Route::get('quiz/{quiz_id}/questions/{id}',[QuestionController::class,'destroy'])->whereNumber('id')->name('questions.destroy');
Route::resource('quizzes',quizController::class);
Route::resource('quiz/{quiz_id}/questions',QuestionController::class);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
