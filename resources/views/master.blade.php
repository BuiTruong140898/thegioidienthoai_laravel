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
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="{{route('trang-chu')}}">Thế giới điện thoại</a>
         <form class="form-inline" action="/action_page.php">
    <input class="form-control mr-sm-2" type="text" placeholder="Search">
    <button class="btn btn-success" type="submit">Search</button>
  </form>
       
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            
            @foreach($loai_sp as $loai_sp)
               <li class="nav-item">

               <a class="nav-link" href="{{route('sanphamtheoloai',$loai_sp->id)}}" >{{$loai_sp->name}}</a>
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
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="source/vendor/jquery/jquery.min.js"></script>
    <script src="source/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
