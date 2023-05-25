@extends('layouts.app')

@section('content')

<section id="trains">
    <div class="container pt-5 pb-3">
        <div class="row row-cols-2 row-cols-lg-4 g-2 g-lg-4 pb-4">
            @foreach($trains as $train)
            <div class="col h-100">
                <div class="train card shadow h-100">
{{--                     <img class="card-img-top" src="{{ $train->poster }}" alt="{{ $train->title }}"> --}}
{{--                     <div class="card-body">
                        <h4 class="card-title">{{ $train->title }}</h4>
                    </div> --}}
                    <!-- /.card-body -->
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <span class="fw-bold">company: </span>
                            <span>{{ $train->company }}</span>
                        </li>
                        <li class="list-group-item">
                            <span class="fw-bold">departure_station: </span>
                            <span>{{ $train->departure_station }}</span>
                        </li>
                        <li class="list-group-item">
                            <span class="fw-bold">arrival_station:</span>
                            <span>{{ $train->arrival_station }}</span>
                        </li>
                        <li class="list-group-item">
                            <span class="fw-bold">time_station: </span>
                            <span>{{ $train->time_station }}</span>
                        </li>
                        <li class="list-group-item">
                            <span class="fw-bold">time_arrival: </span>
                            <span>{{ $train->time_arrival }}</span>
                        </li>
                        <li class="list-group-item">
                            <span class="fw-bold">train_code: </span>
                            <span>{{ $train->train_code }}</span>
                        </li>
                        <li class="list-group-item">
                            <span class="fw-bold">carriage: </span>
                            <span>{{ $train->carriage }}</span>
                        </li>
                        <li class="list-group-item">
                            <span class="fw-bold">in_time: </span>
                            <span>{{ $train->in_time }}</span>
                        </li>
                        <li class="list-group-item">
                            <span class="fw-bold">cancelled: </span>
                            <span>{{ $train->cancelled }}</span>
                        </li>
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
<!-- /#trains -->

@endsection