{{--  this will be the css file referrence  --}}
<link rel="stylesheet" href="{{ URL::asset('css/carotheme.css') }}" />

{{--  below is the carousel  --}}
<div class="container">
      
        <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="1500">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>
      
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
              <img src="https://heera.it/wp-content/uploads/2014/01/laravel.png" alt="laravel01" style="width:100%;">
              <div class="carousel-caption">Laravel 01</div>
            </div>
      
            <div class="item">
              <img src="http://1.bp.blogspot.com/-YLBooeer-pI/VXlj2Q9IJ9I/AAAAAAAAAIU/_k3dNy26HsM/s1600/laravel-development.jpg" alt="laravel02" style="width:100%;">
              <div class="carousel-caption">Laravel 02</div>
            </div>
          
            <div class="item">
              <img src="http://www.advaanz.com/blog/wp-content/uploads/2014/11/BANNER.png" alt="laravel03" style="width:100%;">
              <div class="carousel-caption">Laravel 03</div>
            </div>
          </div>
      
          <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>