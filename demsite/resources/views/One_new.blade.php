
@extends('Layout')   <!-- унаследуй файл Layout.blade.php  -->

@section('title', $newsbd->title) <!-- создаем сектию и обращаемся к title и меняем название Layout.blade.php  -->
<!-- Page Content -->

@section('content')

    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <h1 class="my-4">Page Heading
                    <small>Secondary Text</small>
                </h1>


                <!-- Blog Post -->
                    <div class="card mb-4">
                        <img class="card-img-top" src="{{$newsbd->img}}" alt="Card image cap">
                        <div class="card-body">
                            <h2 class="card-title">{{$newsbd->title}}</h2>
                            <p class="card-text">{{$newsbd->bodytext}}</p>
                        </div>
                        <div class="card-footer text-muted">
                            Опубликовано {{$newsbd->created_at}} автором
                            <a href="{{route('new_url_author', $newsbd->author->key)}}">{{$newsbd->author->name}}p</a>
                        </div>
                    </div>

            <!-- Pagination -->

            </div>



            @endsection


            @section('search')
                <div class="card my-4">
                    <h5 class="card-header">Search</h5>
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
