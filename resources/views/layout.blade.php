<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{asset("css/animate.min.css")}} ">
    <link rel="stylesheet" href="{{asset("css/bootstrap.css")}} ">
  <link rel="stylesheet" href="{{asset("css/bootstrap.css.map")}} ">
  <link rel="stylesheet" href="{{asset("css/layout.css")}} ">
  <link rel="stylesheet" href="{{asset("css/owl.carousel.css")}} ">
  <link rel="stylesheet" href="{{asset("css/owl.theme.default.css")}} ">
  <link rel="stylesheet" href="{{asset("css/welcome.css")}} ">
</head>
<body>
    <div class="container">
        <h1 class="text-center">Dashboard</h1>

        <div class="row">
            <div class="col-md-4 wow animate__backInLeft"  data-wow-duration="2s">
                <div class="card">
                    <div class="card-header d-flex">
                        <div class="p-2 flex-grow-1">
                          <p class="fw-bold">
                          Users
                            </p>
                        </div>
                        <div class="p-2">
                            <button type="button" class="btn btn-secondary ">
                                <a href="{{url('edituser')}}" class="text-decoration-none text-light">
                                       edit
                                </a>

                            </button>
                        </div>

                    </div>
                    <div class="card-body ">
                        <h5 class="card-title">{{ $users }}</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4 wow animate__backInDown"  data-wow-duration="2s">
                <div class="card">
                    <div class="card-header d-flex">
                        <div class="p-2 flex-grow-1">
                          <p class="fw-bold">
                          Sites
                        </p>
                        </div>
                        <div class="p-2">
                            <button type="button" class="btn btn-secondary">
                                <a href="{{url('editsite')}}" class="text-decoration-none text-light">
                                       edit
                                </a>

                            </button>
                        </div>

                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $sites }}</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4  wow animate__backInRight"  data-wow-duration="2s">
                <div class="card">
                    <div class="card-header d-flex">
                        <div class="p-2 flex-grow-1">
                          <p class="fw-bold">

                            Admins
                        </p>
                        </div>
                        <div class="p-2">
                            <button type="button" class="btn btn-secondary">
                                <a href="{{url('editadmin')}}" class="text-decoration-none text-light">
                                       edit
                                </a>

                            </button>
                        </div>

                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $admins }}</h5>
                    </div>
                </div>
            </div>
        </div>


        <div class="card-body">
            @yield('body-content')
        </div>




    </div>



    <script src="{{asset("js/wow.min.js")}}"></script>
      <script src="{{asset("js/jquery-3.6.1.min.js")}}"></script>
      <script src="{{asset("js/bootstrap.bundle.min.js")}}"></script>
      <script src="{{asset("js/all.min.js")}}"></script>
            <script src="{{asset("js/app.js")}}"></script>
<script src="{{asset("js/bootstrap.bundle.min.js.map")}}"></script>
<script src="{{asset("js/owl.carousel.js")}}"></script>
<script>
    new WOW().init();
    </script>
<script>
  $(".owl-carousel").owlCarousel();
</script>


</body>
</html>
