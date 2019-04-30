 @extends('master')
 @section('content')
 <div class="col-lg-9">      
          <div class="row">
            <h2 style="width: 100%">Các sản phẩm của {{$loaisanpham->name}}</h2>
            @foreach($sanphamtheoloai as $pro)
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="{{route('chitiet_sp',$pro->id)}}"><img class="card-img-top" src="products/{{$pro->image}}" alt=""></a>
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
