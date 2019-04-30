 @extends('master')
 @section('content')
 <div class="col-lg-9">

          <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <img class="d-block img-fluid" src="source/images/slides/hinh4.png" alt="First slide">
              </div>
              @foreach($slide as $sl)
              <div class="carousel-item">
                <img class="d-block img-fluid" src="source/images/slides/{{$sl->image}}" alt="Second slide">
              </div>
              @endforeach
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>

          <div class="row">
            @foreach($product as $pro)
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="{{route('chitiet_sp',$pro->id)}}"><img class="card-img-top" src="source/images/products/{{$pro->image}}" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">{{$pro->name}}</a>
                  </h4>
                  <h5>{{$pro->unit_price}}.đ</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>
            @endforeach
          </div>
          <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->
 @endsection('content')
