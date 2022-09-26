<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link class="favicon" rel="icon" type="image/x-icon" href="{{asset('front/images/رمز-2.png')}}" />
  <link rel="stylesheet" href="{{asset('front/css/bootstrap.min.css')}}" />
  <link rel="stylesheet" href="{{asset('front/css/all.min.css')}}" />
  <link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
/>
  <link rel="stylesheet" href="{{asset('front/css/animate.css')}}">
  <link rel="stylesheet" href="{{asset('front/css/hover-min.css')}}" />
  <link rel="stylesheet" href="{{asset('front/css/main.css')}}" />
  <title> @yield('title') | شريك أعمالك الجديد في التصميم والتسويق BombasticMedia </title>
</head>

<body>
  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand" href="/"><img src="{{ asset('front/images/logo.png') }}" alt="" /></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">الرئيسية</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-scroll="ourServices"  href="#">خدماتنا</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-scroll="ourWork" href="#">اعمالنا</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-scroll="about" href="{{ route('about') }}">من نحن</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-scroll="" href="{{ route('fornt.blogs') }}">المدونة</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-scroll="contact" href="#">اتصل بنا</a>
          </li>
        </ul>

        <a href="https://forms.monday.com/forms/96471629b5c89f652efd60eea03ef544?r=use1" class="btn getService">اطلب خدمتك</a>

      </div>
    </div>
  </nav>
  @yield('content')


  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-12 col-sm-12">
          <div class="footer-col wow animate__fadeInUp">
            <div class="footer-img">
              <a href="/"><img src="{{ asset('front/images/logo.png') }}" alt="" /></a>
            </div>
            <p class="copyRights">جميع الحقوق محفوظة &copy; 2022</p>
          </div>
        </div>

        <div class="col-lg-6 col-12 col-sm-12 d-flex justify-content-end align-items-center">
          <div class="footer-col wow animate__fadeInUp">
            <p class="mb-2"><span>التسـويــــق بشـغــــف</span>bombastic.ps</p>
            <div class="footer-soial">
              <p class="mail ms-1">info@bombastic.ps</p>

              <div class="soial-icons">
                <a href="https://www.facebook.com/bombasticps"><i class="fab fa-facebook"></i></a>
                <a href="https://www.instagram.com/bombastic.ps/"><i class="fab fa-instagram"></i></a>
                <a href="https://www.behance.net/bombasticps"><i class="fab fa-behance"></i></a>
                <a href=""><i class="fal fa-envelope"></i></a>
                <a href="https://www.linkedin.com/in/bombastic-media-62a5b8228/"><i class="fab fa-linkedin-in"></i></a>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
    integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="{{asset('front/js/all.min.js')}}"></script>
  <script src="{{asset('front/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('front/js/wow.min.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"
    integrity="sha512-ElRFoEQdI5Ht6kZvyzXhYG9NqjtkmlkfYk0wr6wHxU9JEHakS7UJZNeml5ALk+8IKlU6jDgMabC3vkumRokgJA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="{{asset('front/js/main.js')}}"></script>
</body>

</html>