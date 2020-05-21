
@extends('Layout')   <!-- унаследуй файл Layout.blade.php  -->

@section('title', 'Главная') <!-- создаем сектию и обращаемся к title и меняем название Layout.blade.php  -->
    <!-- Page Content -->

@section('content')

    <div class="container">

      <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

          <h1 class="my-4">Новостная лента</small>
          </h1>

          @foreach($newsbd as $new)
          <!-- Blog Post -->
          <div class="card mb-4">
            <img class="card-img-top" src="{{$new->img}}" alt="Card image cap">
            <div class="card-body">
              <h2 class="card-title">{{$new->title}}</h2>
              <p class="card-text">{{mb_substr($new->bodytext, 0, 200)}}...</p>
              <a href="{{route('One_new', $new->id)}}" class="btn btn-primary">Читать дальше &rarr;</a>
            </div>
            <div class="card-footer text-muted">
              Опубликовано {{$new->created_at}} автором
              <a href="{{route('new_url_author', $new->author->key)}}">{{$new->author->name}}p</a>
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
             @if($newsbd->currentPage() !=1)
               <li class="page-item">
                   <a class="page-link" href="?page=1">Начало</a>
               </li>
                   <li class="page-item">
                       <a class="page-link" href="{{$newsbd->previousPageUrl()}}"> <=</a>
                   </li>
            @endif

                @if($newsbd->count()>1)
                    @for($count = 1; $count <= $newsbd->lastPage(); $count++)
                        @if($count > $newsbd->currentPage() - 4 and $count < $newsbd->currentPage() + 4)
                         <li class="page-item @if($count == $newsbd->currentPage()) active @endif")>
                             <a class="page-link" href="?page={{$count}}">{{$count}}</a>
                         </li>
                         @endif
                     @endfor
                     @endif
                 @if($newsbd->currentPage() != $newsbd->lastPage())
                 <li class="page-item">
                     <a class="page-link" href="{{$newsbd->nextPageUrl()}}">=></a>
                 </li>
                    <li class="page-item">
                        <a class="page-link" href="?page={{$newsbd->lastPage()}}">Конец</a>
                    </li>
                     @endif
          </ul>

        </div>



        @endsection


