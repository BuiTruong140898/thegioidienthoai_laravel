<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shop Homepage - Start Bootstrap Template</title>

    <base href="{{asset('')}}">

    <!-- Bootstrap core CSS -->
    <link href="source/vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="source/css/shop-homepage.css" rel="stylesheet">

  </head>
  
  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background: #fed700">
      <div class="container">
        <a class="navbar-brand" href="{{route('trang-chu')}}">Thế giới điện thoại</a>
        
       <form class="navbar-form navbar-left">
      <div class="input-group" style="z-index:1">
        <input type="text" class="form-control" placeholder="Search">
        <div class="input-group-btn">
          <button style="padding-top:6px"  type="submit"><svg class="octicon octicon-search" viewBox="0 0 16 16" version="1.1" width="22" aria-hidden="true"><path fill-rule="evenodd" d="M15.7 13.3l-3.81-3.83A5.93 5.93 0 0 0 13 6c0-3.31-2.69-6-6-6S1 2.69 1 6s2.69 6 6 6c1.3 0 2.48-.41 3.47-1.11l3.83 3.81c.19.2.45.3.7.3.25 0 .52-.09.7-.3a.996.996 0 0 0 0-1.41v.01zM7 10.7c-2.59 0-4.7-2.11-4.7-4.7 0-2.59 2.11-4.7 4.7-4.7 2.59 0 4.7 2.11 4.7 4.7 0 2.59-2.11 4.7-4.7 4.7z"></path></svg></button>
        </div>
      </div>
    </form>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            
            @foreach($loai_sp as $loai_sp)
               <li class="nav-item">
               <a class="nav-link" style="color: gray" href="{{route('sanphamtheoloai',$loai_sp->id)}}" >{{$loai_sp->name}}</a>
               </li>
            @endforeach
            
          </ul>
        </div>
    
      </div>
      {{-- /container --}}
      </nav>

      <!-- Page Content -->
    <div class="container">

      <div class="row">

      @yield('content')


    </div>
    <!-- /.container -->
  

    <!-- Footer -->
    <div style="margin-bottom: 30px"></div>
    <footer class="py-2 " style=" background: #fed700;position: fixed;  left: 0;  bottom: 0;  width: 100%">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Truongbui_140898 2019</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="source/vendor/jquery/jquery.min.js"></script>
    <script src="source/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
