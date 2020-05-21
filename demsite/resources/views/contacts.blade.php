
@extends('Layout')   <!-- унаследуй файл Layout.blade.php  -->

@section('title', 'Контакты') <!-- создаем сектию и обращаемся к title и меняем название Layout.blade.php  -->
    <!-- Page Content -->

@section('content')

    <div class="container">

      <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

          <h1 class="my-4">Контакты +380888333</small>
          </h1>


        </div>

        @endsection


        @section('search')
           <div class="card my-4">
            <h5 class="card-header">Контакты телефоны</h5>
            <div class="card-body">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
                  <button class="btn btn-secondary" type="button">Go!</button>
                </span>
              </div>
            </div>
          </div>
            @endsection
