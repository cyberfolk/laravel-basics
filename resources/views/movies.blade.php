@extends('layouts.app')

@section('content')

<section id="movies">
    <div class="container pt-5 pb-3">
        <div class="row row-cols-2 row-cols-lg-6 g-2 g-lg-3 pb-4">
            @foreach($movies as $movie)
            <div class="col">
                <div class="movie">
                    <div class="title">{{ $movie->title }}</div>
                </div>
            </div>
            @endforeach
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /#movies -->

@endsection