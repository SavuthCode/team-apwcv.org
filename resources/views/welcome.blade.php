<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                <div class="wrapper-content" style="position:absolute;z-index:-34">
    <div class="slid-content">

    </div>

    <div class="content-lission">
      <div class="row">
        <div class="col-md-4 box" style="background-color:white;padding:10px;">
          <div class="row">
            <div class="col-sm-2" style="border-right: solid 1px red;">
              <div class="icon" style="width:50px;height:40px;">
                <i class="fas fa-home fa-3x" style="color:red"></i>
              </div>
            </div>
            <div class="col-sm-10" style="margin-top:10px">
              <div class="list float-left">
              <h5 class="text-danger">Content</h5>
              </div>
              <div class="humberger float-right">
              <i class="fas fa-bars fa-2x" style="color:red"></i>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-8 box" style="background-color:white;padding:5px;">
        <div class="col-xs-12 ">
            <nav>
              <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Lastest News</a>
                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Book</a>
                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Mp3</a>
                <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab" aria-controls="nav-about" aria-selected="false">Video</a>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>

    <div class="content" style="margin-top:-5px">
      <div class="row">
        <div class="col-md-4 box sidebar" style="background-color:white;padding:10px;">

        <!-- ==========================Menu side left=================================== -->
        @include('pages.sidebar-left')
          
        <!-- Content right side -->

        <div class="col-md-8 box" style="background-color:white;padding:5px;">
          <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
            <!--============================================= Tab last new===================================-->
                @include("pages.tabs.last-new.index")
            <!--=========================================== End Tab last new ================================-->

            <!-- ========================================= Tab Book ========================================= -->
              @include("pages.tabs.book.index")
            <!-- ========================================= End Tab Book =====================================-->

            <!-- ========================================= Tab MP3 ========================================= -->
              @include("pages.tabs.mp3.index")
            <!-- ========================================= End Tab MP3 =====================================-->

            <!-- ========================================= Tab videos ========================================= -->
              @include("pages.tabs.videos.index")
            <!-- ========================================= End Tab videos =====================================-->
          </div>
        </div>
      </div>

      <div class="row" >
        <div class="col-sm-12" style="padding-left:15px;padding-right:15px;">
        <div class="card">
          <div class="card-body">
          <div class="row">
            <div class="col-sm-12">
            <div id="myCarouselw" class="carouselww slidewwwww" data-ride="carousel">
              <!-- Indicators -->
              <ul class="carousel-indicatorsww">
                <li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
                <!-- <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li> -->
              </ul>

              <!-- The slideshow -->
              <div class="carousel-innewwr">
                <div class="carousel-itemw active">
                  <div class="row" style="margin-left: 25px;margin-right: 24px;">
                    <div class="col-sm-2 col2-slide">
                      <img src="{{asset('images/new/s1.jpg')}}" alt="Chicago">
                    </div>
                    <div class="col-sm-2 col2-slide">
                    <img src="{{asset('images/new/s2.jpg')}}" alt="Chicago">
                    </div>
                    <div class="col-sm-2 col2-slide">
                      <img src="{{asset('images/new/s3.jpg')}}" alt="Chicago">
                    </div>
                    <div class="col-sm-2 col2-slide">
                      <img src="{{asset('images/new/s4.png')}}" alt="Chicago">
                    </div>
                    <div class="col-sm-2 col2-slide">
                      <img src="{{asset('images/new/s5.jpg')}}" alt="Chicago">
                    </div>
                    <div class="col-sm-2 col2-slide">
                      <img src="{{asset('images/new/s6.jpg')}}" alt="Chicago">
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                <div class="row" style="margin-left: 0px;margin-right: 0px;">
                <div class="row" style="margin-left: 0px;margin-right: 0px;">
                <div class="col-sm-2 col2-slide">
                      <img src="{{asset('images/new/s1.jpg')}}" alt="Chicago">
                    </div>
                    <div class="col-sm-2 col2-slide">
                    <img src="{{asset('images/new/s2.jpg')}}" alt="Chicago">
                    </div>
                    <div class="col-sm-2 col2-slide">
                      <img src="{{asset('images/new/s3.jpg')}}" alt="Chicago">
                    </div>
                    <div class="col-sm-2 col2-slide">
                      <img src="{{asset('images/new/s4.png')}}" alt="Chicago">
                    </div>
                    <div class="col-sm-2 col2-slide">
                      <img src="{{asset('images/new/s5.jpg')}}" alt="Chicago">
                    </div>
                    <div class="col-sm-2 col2-slide">
                      <img src="{{asset('images/new/s6.jpg')}}" alt="Chicago">
                    </div>
                  </div>
                  </div>
                </div>
                <div class="carousel-item">
                <div class="row" style="margin-left: 0px;margin-right: 0px;">
                <div class="row" style="margin-left: 0px;margin-right: 0px;">
                    <div class="col-sm-2 col2-slide">
                      <img src="{{asset('images/new/s1.jpg')}}" alt="Chicago">
                    </div>
                    <div class="col-sm-2 col2-slide">
                    <img src="{{asset('images/new/s2.jpg')}}" alt="Chicago">
                    </div>
                    <div class="col-sm-2 col2-slide">
                      <img src="{{asset('images/new/s3.jpg')}}" alt="Chicago">
                    </div>
                    <div class="col-sm-2 col2-slide">
                      <img src="{{asset('images/new/s4.png')}}" alt="Chicago">
                    </div>
                    <div class="col-sm-2 col2-slide">
                      <img src="{{asset('images/new/s5.jpg')}}" alt="Chicago">
                    </div>
                    <div class="col-sm-2 col2-slide">
                      <img src="{{asset('images/new/s6.jpg')}}" alt="Chicago">
                    </div>
                  </div>
                  </div>
                </div>
              </div>

              <!-- Left and right controls -->
              <a class="carousel-control-prev" href="#myCarousel" data-slide="prev" >
                <span class="carousel-control-prev-icon" ></span>
              </a>
              <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                <span class="carousel-control-next-icon"></span>
              </a>
              </div>
            </div>
          </div>
          </div>
        </div>
        </div>
      </div>
    <br>
      <div class="row recommend-website">
        <div class="col-sm-12">
        <div class="card">
          <div class="card-body">
            <ul class="nav nav-tabs">
              <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#home"><i class="fa fa-heart"></i>  Recomment Website</a>
              </li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content" style="margin-top:-40px;">
              <div id="home" class="container tab-pane active"><br>
                <div class="row">
                  <div class="col-sm-2 clo2-recoment">
                    <a class="thumb" href="#"><img src="{{asset('images/img1.jpg')}}" alt="" style="width:100%;height:100%">
                      <span>
                        <div class="lightbox">
                            <div class="text-center">
                              <img src="{{asset('images/img1.jpg')}}" alt="" style="width:70%;margin-top:30px;">
                              <h5 style="color:white;margin-top:5px;">http://test-xom-rtete-rrrr.com</h5>
                            </div>
                        </div>
                      </span>
                    </a>
                  </div>
                  <div class="col-sm-2 clo2-recoment">
                    <a class="thumb" href="#"><img src="{{asset('images/img4.png')}}" alt="" style="width:100%;height:100%">
                      <span>
                        <div class="lightbox">
                            <div class="text-center">
                              <img src="{{asset('images/img4.png')}}" alt="" style="width:70%;margin-top:10px;">
                              <h5 style="color:white;margin-top:5px;">http://test-xom-rtete-rrrr.com</h5>
                            </div>
                        </div>
                      </span>
                    </a>
                  </div>

                  <div class="col-sm-2 clo2-recoment">
                    <a class="thumb" href="#"><img src="{{asset('images/img5.png')}}" alt="" style="width:100%;height:100%">
                      <span>
                        <div class="lightbox">
                            <div class="text-center">
                              <img src="{{asset('images/img5.png')}}" alt="" style="width:70%;height:100%;margin-top:10px;">
                              <h5 style="color:white;margin-top:5px;">http://test-xom-rtete-rrrr.com</h5>
                            </div>
                        </div>
                      </span>
                    </a>
                  </div>

                  <div class="col-sm-2 clo2-recoment">
                    <a class="thumb" href="#"><img src="{{asset('images/img4.png')}}" alt="" style="width:100%;height:100%">
                      <span>
                        <div class="lightbox">
                            <div class="text-center">
                              <img src="{{asset('images/img4.png')}}" alt="" style="width:70%;margin-top:10px;">
                              <h5 style="color:white;margin-top:5px;">http://test-xom-rtete-rrrr.com</h5>
                            </div>
                        </div>
                      </span>
                    </a>
                  </div>

                  <div class="col-sm-2 clo2-recoment">
                    <a class="thumb" href="#"><img src="{{asset('images/img5.png')}}" alt="" style="width:100%;height:100%">
                      <span>
                        <div class="lightbox">
                            <div class="text-center">
                              <img src="{{asset('images/img5.png')}}" alt="" style="width:70%;height:100%;margin-top:10px;">
                              <h5 style="color:white;margin-top:5px;">http://test-xom-rtete-rrrr.com</h5>
                            </div>
                        </div>
                      </span>
                    </a>
                  </div>

                  <div class="col-sm-2 clo2-recoment">
                    <a class="thumb" href="#"><img src="{{asset('images/img4.png')}}" alt="" style="width:100%;height:100%">
                      <span>
                        <div class="lightbox">
                            <div class="text-center">
                              <img src="{{asset('images/img4.png')}}" alt="" style="width:70%;margin-top:10px;">
                              <h5 style="color:white;margin-top:5px;">http://test-xom-rtete-rrrr.com</h5>
                            </div>
                        </div>
                      </span>
                    </a>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-2 clo2-recoment">
                    <a class="thumb" href="#"><img src="{{asset('images/img1.jpg')}}" alt="" style="width:100%;height:100%">
                      <span>
                        <div class="lightbox">
                            <div class="text-center">
                              <img src="{{asset('images/img1.jpg')}}" alt="" style="width:70%;margin-top:30px;">
                              <h5 style="color:white;margin-top:5px;">http://test-xom-rtete-rrrr.com</h5>
                            </div>
                        </div>
                      </span>
                    </a>
                  </div>
                  <div class="col-sm-2 clo2-recoment">
                    <a class="thumb" href="#"><img src="{{asset('images/img4.png')}}" alt="" style="width:100%;height:100%">
                      <span>
                        <div class="lightbox">
                            <div class="text-center">
                              <img src="{{asset('images/img4.png')}}" alt="" style="width:70%;margin-top:10px;">
                              <h5 style="color:white;margin-top:5px;">http://test-xom-rtete-rrrr.com</h5>
                            </div>
                        </div>
                      </span>
                    </a>
                  </div>

                  <div class="col-sm-2 clo2-recoment">
                    <a class="thumb" href="#"><img src="{{asset('images/img5.png')}}" alt="" style="width:100%;height:100%">
                      <span>
                        <div class="lightbox">
                            <div class="text-center">
                              <img src="{{asset('images/img5.png')}}" alt="" style="width:70%;height:100%;margin-top:10px;">
                              <h5 style="color:white;margin-top:5px;">http://test-xom-rtete-rrrr.com</h5>
                            </div>
                        </div>
                      </span>
                    </a>
                  </div>

                  <div class="col-sm-2 clo2-recoment">
                    <a class="thumb" href="#"><img src="{{asset('images/img4.png')}}" alt="" style="width:100%;height:100%">
                      <span>
                        <div class="lightbox">
                            <div class="text-center">
                              <img src="{{asset('images/img4.png')}}" alt="" style="width:70%;margin-top:10px;">
                              <h5 style="color:white;margin-top:5px;">http://test-xom-rtete-rrrr.com</h5>
                            </div>
                        </div>
                      </span>
                    </a>
                  </div>

                  <div class="col-sm-2 clo2-recoment">
                    <a class="thumb" href="#"><img src="{{asset('images/img5.png')}}" alt="" style="width:100%;height:100%">
                      <span>
                        <div class="lightbox">
                            <div class="text-center">
                              <img src="{{asset('images/img5.png')}}" alt="" style="width:70%;height:100%;margin-top:10px;">
                              <h5 style="color:white;margin-top:5px;">http://test-xom-rtete-rrrr.com</h5>
                            </div> 
                        </div>
                      </span>
                    </a>
                  </div>

                  <div class="col-sm-2 clo2-recoment">
                    <a class="thumb" href="#"><img src="{{asset('images/img4.png')}}" alt="" style="width:100%;height:100%">
                      <span>
                        <div class="lightbox">
                            <div class="text-center">
                              <img src="{{asset('images/img4.png')}}" alt="" style="width:70%;margin-top:10px;">
                              <h5 style="color:white;margin-top:5px;">http://test-xom-rtete-rrrr.com</h5>
                            </div>
                        </div>
                      </span>
                    </a>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
        </div>
      </div>
      <br>

      @include('pages.footer')
    </div>
  </div>
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>

<!-- <div class="content-homee" >
          <div class="col2-home" style="font-size:30px;">
            <i class="fa fa-home"></i>
          </div>
          <div class="content-center">
            <h5>Enter Content here...</h5>
          </div>
          <div class="col-right">
            <img src="{{asset('images/icon-menu.png')}}" width="100%"/>
          </div>
        </div>  sdsd -->
        <ul class="list-group">
          <li class="list-group-item d-flex justify-content-between align-items-center">
            <div class="icon-menu" style="width:40px;height:40px;border:solid 1px gray;border-radius:50%;">
              <img src="{{asset('images/new/1.png')}}"/ style="width:100%">
            </div>
            Please write text menu
            <span class="	fas fa-caret-right"></span>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center">
            <div class="icon-menu" style="width:40px;height:40px;border:solid 1px gray;border-radius:50%;">
              <img src="{{asset('images/new/1.png')}}"/ style="width:100%">
            </div>
            Please write text menu
            <span class="	fas fa-caret-right"></span>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center">
            <div class="icon-menu" style="width:40px;height:40px;border:solid 1px gray;border-radius:50%;">
              <img src="{{asset('images/new/1.png')}}"/ style="width:100%">
            </div>
            Please write text menuw
            <span class="	fas fa-caret-right"></span>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center">
            <div class="icon-menu" style="width:40px;height:40px;border:solid 1px gray;border-radius:50%;">
              <img src="{{asset('images/new/1.png')}}"/ style="width:100%">
            </div>
            Please write text menu
            <span class="	fas fa-caret-right"></span>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center">
            <div class="icon-menu" style="width:40px;height:40px;border:solid 1px gray;border-radius:50%;">
              <img src="{{asset('images/new/1.png')}}"/ style="width:100%">
            </div>
            Please write text menu
            <span class="	fas fa-caret-right"></span>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center">
            <div class="icon-menu" style="width:40px;height:40px;border:solid 1px gray;border-radius:50%;">
              <img src="{{asset('images/new/1.png')}}"/ style="width:100%">
            </div>
            Please write text menu
            <span class="	fas fa-caret-right"></span>
          </li>
        </ul>
