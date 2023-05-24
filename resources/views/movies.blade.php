@extends('layouts.app')

@section('content')

<section id="movies">
    <div class="container pt-5 pb-3">
        <div class="row row-cols-2 row-cols-lg-4 g-2 g-lg-3 pb-4">
            @foreach($movies as $movie)
            <div class="col h-100">
                <div class="movie card shadow h-100">
                    <img class="card-img-top" src="{{ $movie->poster }}" alt="{{ $movie->title }}">
                    <div class="card-body">
                        <h4 class="card-title">{{ $movie->title }}</h4>
                    </div>
                    <!-- /.card-body -->
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">{{ $movie->original_title }}</li>
                        <li class="list-group-item">{{ $movie->nationality }}</li>
                        <li class="list-group-item">{{ $movie->date }}</li>
                        <li class="list-group-item">{{ $movie->vote }}</li>
                    </ul>
                    <!-- /.list-group -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
            @endforeach
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /#movies -->

@endsection