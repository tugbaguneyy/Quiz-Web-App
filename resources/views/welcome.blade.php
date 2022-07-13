<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
    .footer{
    background-color: #404244;
    margin-top: 55px;
    margin-bottom: 0;
    width: 100%;
    height: 100%;
}
.footer p{
    text-align: center;
    font-size: large;
    font-family: 'Times New Roman', Times, serif;
    color: white;
}
    </style>
  </head>
  <body>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.html">Quiz</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.html">Anasayfa</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#hakkimizda">Hakkımızda</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#sunduklarimiz">Size Sunduklarımız</a>
              </li>

            </ul>
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ route('dashboard') }}" class="btn btn-outline-primary">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-outline-primary">Giriş</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-outline-primary">Kayıt Ol</a>
                        @endif
                    @endauth
                </div>
            @endif

          </div>
        </div>
      </nav>
      <!--Navbarın Bitşi-->
   <!--Slider-->
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{URL::asset('image/slider.png')}}" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{URL::asset('image/slider.png')}}" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{URL::asset('image/slider.png')}}" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          <!--Slider Bitişi-->
      <!--Container-->
      <div class="container">
        <div id="sunduklarimiz" class="row row-cols-1 row-cols-md-4 g-4 mt-5">
            <div class="col mb-5">
              <div class="card">
                <img src="{{URL::asset('image/ücretsiz.png')}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">DEĞİŞİM</h5>
                  <p class="card-text">Eski dönem kitaplardan soru çözmeye son vererek siz öğrencilerimize ücretsiz test imkanı sunuyoruz.</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="{{URL::asset('image/arayüz.png')}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">ARAYÜZ</h5>
                  <p class="card-text">Kullanımı kolay arayüz sayesinde test sonuçlarınıza kolayca erişip eksiklerinizi görebilirsiniz.</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="{{URL::asset('image/test.png')}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">SONUÇLAR</h5>
                  <p class="card-text">Yeni geliştirdiğimiz teknolojiler sayesinde test sonuçlarınızı ve doğru yanlışlarınızı hemen görebilirsiniz.</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="{{URL::asset('image/adam.png')}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">KATKI</h5>
                  <p class="card-text">Siz de tüm kullanıcılar için soru ekleyebilir ve ücretsiz test ekosistemimize katkıda bulunabilirsiniz.</p>
                </div>
              </div>
            </div>
          </div>
        <div id="hakkimizda">

        </div>
      </div>

      <footer class="footer">
        <p>© 2022 QUİZ UYGULAMASI</p>
      </footer>
      <!--Container Bitişi-->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>