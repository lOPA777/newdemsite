
@extends('Layout')   <!-- унаследуй файл Layout.blade.php  -->

@section('title', 'Посты автора') <!-- создаем сектию и обращаемся к title и меняем название Layout.blade.php  -->
<!-- Page Content -->

@section('content')

    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <h1 class="my-4">Все посты автора
                    <small>{{$author->name}}</small>
                </h1>


            @foreach($author->newsbd as $new)
                <!-- Blog Post -->
                    <div class="card mb-4">
                        <img class="card-img-top" src="{{$new->img}}" alt="Card image cap">
                        <div class="card-body">
                            <h2 class="card-title">{{$new->title}}</h2>
                            <p class="card-text">{{$new->bodytext}}</p>
                            <a href="#" class="btn btn-primary">Читать дальше &rarr;</a>
                        </div>
                        <div class="card-footer text-muted">
                            Опубликовано {{$new->created_at}} автором
                        </div>
                        <div class="card-footer text-muted">
                            <span>Категории:  </span>
                            @foreach($new->category as $cate)
                                <a href="{{route('new_in_category', $cate->key)}}" style="margin-right: 10px;margin-right: 10px;border-radius: 50px;padding: 10px;background-color: gainsboro;text-decoration: none;">{{$cate->category}}</a>
                            @endforeach

                        </div>
                    </div>
            @endforeach



            <!-- Pagination -->
                <ul class="pagination justify-content-center mb-4">
                    <li class="page-item">
                        <a class="page-link" href="#">&larr; Older</a>
                    </li>
                    <li class="page-item disabled">
                        <a class="page-link" href="#">Newer &rarr;</a>
                    </li>
                </ul>

            </div>

            @endsection
