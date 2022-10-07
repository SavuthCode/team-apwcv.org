<!DOCTYPE html>
<html lang="en">
<head>
  <title>Demo website</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link rel="stylesheet" href="{{asset('style.css')}}" />
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
</head>

<body style="background-color:#e9eaed">
@include('pages.header')
<div class="container">
  <div class="slid-content">
    <img src="{{asset('images/Landscape.jpg')}}" style="width:100%"/>
  </div>
  <div class="wrapper-content" >
    <div class="row introduction">
      <div class="col-md-4" style="overflow:hidden">
        <div class="list-group">
          <a href="#" class="list-group-item list-group-item-action" style="padding:10px;">
            <div class="icon-menu float-left" style="width:30px;height:30px;border:solid 1px gray;border-radius:50%;">
              <img src="{{asset('images/new/1.png')}}"/ style="width:100%">
            </div>&nbsp;
            <div class="text-list float-left" style="margin-top:10px;margin-left:10px;">
                First item
            </div>
            <div class="list-icon float-right" style="margin-top: 8px;">
              <span class="	fas fa-caret-right"></span>
            </div>
          </a>

          <a href="#" class="list-group-item list-group-item-action" style="padding:10px;">
            <div class="icon-menu float-left" style="width:30px;height:30px;border:solid 1px gray;border-radius:50%;">
              <img src="{{asset('images/new/1.png')}}"/ style="width:100%">
            </div>&nbsp;
            <div class="text-list float-left" style="margin-top:10px;margin-left:10px;">
                First item
            </div>
            <div class="list-icon float-right" style="margin-top: 8px;">
              <span class="	fas fa-caret-right"></span>
            </div>
          </a>

          <a href="#" class="list-group-item list-group-item-action" style="padding:10px;">
            <div class="icon-menu float-left" style="width:30px;height:30px;border:solid 1px gray;border-radius:50%;">
              <img src="{{asset('images/new/1.png')}}"/ style="width:100%">
            </div>&nbsp;
            <div class="text-list float-left" style="margin-top:10px;margin-left:10px;">
                First item
            </div>
            <div class="list-icon float-right" style="margin-top: 8px;">
              <span class="	fas fa-caret-right"></span>
            </div>
          </a>

          <a href="#" class="list-group-item list-group-item-action" style="padding:10px;">
            <div class="icon-menu float-left" style="width:30px;height:30px;border:solid 1px gray;border-radius:50%;">
              <img src="{{asset('images/new/1.png')}}"/ style="width:100%">
            </div>&nbsp;
            <div class="text-list float-left" style="margin-top:10px;margin-left:10px;">
                First item
            </div>
            <div class="list-icon float-right" style="margin-top: 8px;">
              <span class="	fas fa-caret-right"></span>
            </div>
          </a>

          <a href="#" class="list-group-item list-group-item-action" style="padding:10px;">
            <div class="icon-menu float-left" style="width:30px;height:30px;border:solid 1px gray;border-radius:50%;">
              <img src="{{asset('images/new/1.png')}}"/ style="width:100%">
            </div>&nbsp;
            <div class="text-list float-left" style="margin-top:10px;margin-left:10px;">
                First item
            </div>
            <div class="list-icon float-right" style="margin-top: 8px;">
              <span class="	fas fa-caret-right"></span>
            </div>
          </a>
        </div>
        <br>
        <div class="menu-keyword">
          <div class="card">
            <div class="card-header">
              <div class="float-left text-danger"><h5><i class="fa fa-tags"></i>  Keyword</h5></div>
              <div class="refresh-icons float-right text-danger"><i class="fa fa-refresh fa-lg"></i></div>
            </div>
            <div class="card-body" style="padding:5px;">
              <div>
                <span class="badge badge-secondary" style="padding:5px;">ព្រះគុណពុកម៉ែ</span>
                <span class="badge badge-secondary" style="padding:5px;">ទ្រង់ប្រារព្ធលោលភិក្ខុម</span>
                <span class="badge badge-secondary" style="padding:5px;">ទំនួញប្រែត</span>
                <span class="badge badge-secondary" style="padding:5px;">ទំនួញសុវណ្ណសាម</span>
                <span class="badge badge-secondary" style="padding:5px;">ធម្មទេសនា</span>
              </div>
            </div>
          </div>
        </div><br>
        <div class="menu-recently-read">
          <div class="card">
            <div class="card-header">
              <div class="float-left text-danger"><h5><i class="fa fa-history"></i>  Recently List / Read</h5></div>
              <div class="refresh-icons float-right text-danger"><i class="fa fa-refresh fa-lg"></i></div>
            </div>
            <div class="card-body" style="padding:5px;">
              <div class="row">
                <div class="col-sm-5">
                  <div class="img-read">
                  <img class="card-img-bottom" src="{{asset('images/image-content1.jpg')}}" alt="Card image" style="width:100%;">
                  
                  </div>
                </div>
                <div class="col-sm-7" style="padding-left: 0px;">
                  <h5 class="text-danger"><a>Asia's richest man sees isolation for Chin</a></h5>
                  <p>inside the box. Note that this will add a scrollbar both horizontally and vertically</p>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-sm-5">
                  <div class="img-read">
                    <img class="card-img-bottom" src="{{asset('images/new.jpg')}}" alt="Card image" style="width:100%;">
                  </div>
                </div>
                <div class="col-sm-7" style="padding-left: 0px;">
                  <h5 class="text-danger"><a>Tampa Bay Buccaneers moving practice</a></h5>
                  <p>inside the box. Note that this will add a scrollbar both horizontally and vertically</p>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-sm-5">
                  <div class="img-read">
                  <img class="card-img-bottom" src="{{asset('images/hqdefault.jpg')}}" alt="Card image" style="width:100%;">
                  
                  </div>
                </div>
                <div class="col-sm-7" style="padding-left: 0px;">
                  <h5 class="text-danger"><a>Asia's richest man sees isolation for China</a></h5>
                  <p>inside the box. Note that this will add a scrollbar both horizontally and vertically</p>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-sm-5">
                  <div class="img-read">
                  <img class="card-img-bottom" src="{{asset('images/220926004314-putin-0926-large-tease.jpg')}}" alt="Card image" style="width:100%;">
                  
                  </div>
                </div>
                <div class="col-sm-7" style="padding-left: 0px;">
                  <h5 class="text-danger"><a>ererererer</a></h5>
                  <p>inside the box. Note that this will add a scrollbar both horizontally and vertically</p>
                </div>
              </div>
            </div>
          </div>
        </div><br>
        <!-- ================================advertisement ========================================== -->
        <div class="card" style="width:100%;height:auto;">
          <div class="card-body" style="padding:0px;">
            <div>
              <img src="https://iotcdn.oss-ap-southeast-1.aliyuncs.com/shampoo.jpg"/ style="width:100%">
            </div>
          </div>
        </div>
        
      </div>
      <div class="col-md-8">
        <div class="tab" >
          <ul class="nav nav-pills" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="pill" href="#home">ប្រកាសថ្មីៗ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="pill" href="#book">សៀវភៅ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="pill" href="#mp3">សម្លេងធម៏</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="pill" href="#menu2">វីដេអូធម៏s</a>
            </li>
          </ul>
          <!-- tab content -->
          <div class="tab-content">
          @include('pages.tabs.last-new.index')
          @include('pages.tabs.book.index')
          @include('pages.tabs.mp3.index')
        </div>
        </div>
      </div>
    </div>
    <br>
    <div class="slider">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs">
      <li class="nav-item" >
        <a class="nav-link google-play active" data-toggle="tab" href="#menu1" style="padding: 0.5rem 6rem;display:block;color:black;">បញ្ចូលកម្មវិធីទូរស័ព្ទ​ andriod <img class="img-google-play" src="{{asset('images/google-play.png')}}" style="width: 130px;
    height: 35px;"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link app-store" data-toggle="tab" href="#menu2" style="padding: 0.5rem 5rem;display:block;color:black;">បញ្ចូលកម្មវិធីទូរស័ព្ទ​ IOS <img class="img-app-store" src="{{asset('images/app-store.png')}}" style="width: 130px;
    height: 35px;"></a>
      </li>
    </ul>
    <br>
    <!-- Tab panes -->
    <div class="tab-content">

      <div class="tab-pane container active" id="menu1">
        <div class="owl-carousel">
          <div>
            <img src="{{asset('images/new/n1.jpg')}}" style="height:100px;border-radius:10%;">
          </div>
          <div>
          <img src="{{asset('images/new/n1.jpg')}}" style="height:100px;border-radius:10%;">
          </div>
          <div>
          <img src="{{asset('images/new/n1.jpg')}}" style="height:100px;border-radius:10%;">
          </div>
          <div>
          <img src="{{asset('images/new/n1.jpg')}}" style="height:100px;border-radius:10%;">
          </div>
          <div>
          <img src="{{asset('images/new/n1.jpg')}}" style="height:100px;border-radius:10%;">
          </div>
        </div>
      </div>
      <div class="tab-pane container fade" id="menu2">
        <div class="owl-carousel">
          <div>
            <img src="{{asset('images/new/n1.jpg')}}" style="height:100px;border-radius:10%;">
          </div>
          <div>
          <img src="{{asset('images/new/n1.jpg')}}" style="height:100px;border-radius:10%;">
          </div>
          <div>
          <img src="{{asset('images/new/n1.jpg')}}" style="height:100px;border-radius:10%;">
          </div>
          <div>
          <img src="{{asset('images/new/n1.jpg')}}" style="height:100px;border-radius:10%;">
          </div>
          <div>
          <img src="{{asset('images/new/n1.jpg')}}" style="height:100px;border-radius:10%;">
          </div>
        </div>
      </div>
    </div>

    <div class="footer">
      <p class="text-center" style="color:white;margin-top:20px;">៥០០០ឆ្នាំ ស្ថាបនាក្នុងខែពិសាខ ព.ស.២៥៥៥ ។ ផ្សាយជាធម្មទាន ៕</p>
    </div>
  </div>
</div>
</body>
<script src="jquery.min.js"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>

</script>
<script>

$(document).ready(function(){
  $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:3000,
    responsive:{
        0:{
            items:3
        },
        600:{
            items:3
        },
        1000:{
            items:6
        }
    }
  })
});
// When the user scrolls down 20px from the top of the document, slide down the navbar
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    document.getElementById("navbar").style.padding = "5px";
    document.getElementById("logo").style.fontSize = "10px";
  } else {
    document.getElementById("navbar").style.padding = "0px";
    document.getElementById("logo").style.fontSize = "10px";
  }
}

</script>
</html>
