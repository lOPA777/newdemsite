<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>

    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/blog-home.css" rel="stylesheet">

  </head>

  <body>


    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="{{route('Main')}}">Новости 1+1</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{route('Main')}}">Home
                <span class="sr-only">(current)</span>
              </a>

            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('About')}}">О нас </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('Contacts')}}">Контакты</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>




@yield('content')





  <!-- Sidebar Widgets Column -->
    <div class="col-md-4">

      <!-- Search Widget -->

      <div class="card my-4">
        <h5 class="card-header">Курс валют</h5>
        <div class="card-body">
          <div class="input-group">

            @inject('curs', '\App\Get_api_curs')
            {{$curs->swow_curs()}}



          </div>
        </div>
      </div>





      <!-- Categories Widget -->
      <div class="card my-4">
        <h5 class="card-header">Новости</h5>
        <div class="card-body">
          <div class="row">
            <div class="col-lg-6">
              <ul class="list-unstyled mb-0">


                @inject('categories_news', '\App\Category')
                      @foreach($categories_news->show_categories_news() as $category)
                <li>
                  <a href="{{route('new_in_category', $category->key)}}">{{$category->category}}</a>
                </li>
                      @endforeach

              </ul>
            </div>
          </div>
        </div>
      </div>


      <!-- Side Widget -->
      <div class="card my-4">
        <h5 class="card-header">Мы в соцсетях</h5>
        <div class="card-body">


            @inject('socialbd', '\App\Social')
            @foreach($socialbd->show_social() as $bdsoc)

                <a class="socium" style="margin-right:10px; background-repeat: no-repeat; background-size: contain; width: 40px; display: inline-block; height: 40px; background-image:url({{$bdsoc->img_social}})" href="{{$bdsoc->url_social}}"></a>

            @endforeach


         <span class="socialbac"></span>
        </div>
      </div>



    </div>

  </div>
  <!-- /.row -->

</div>

<!-- /.container -->

<!-- Footer -->
<footer class="py-5 bg-dark">
  <div class="container">
    <p class="m-0 text-center text-white">Copyright &copy; demsite.com 2020</p>
  </div>
  <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="/vendor/jquery/jquery.min.js"></script>
<script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
