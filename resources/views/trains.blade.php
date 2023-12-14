@extends('layouts.app')

@section('content')
    <section class="container">
        <div class="row">
            @foreach ($trains as $train)
                <div class="col-3">
                    <ul class="card">
                        <li>{{$train->wagons_number}}</li>
                        <li>{{$train->company}}</li>
                        <li>{{$train->departure_station}}</li>
                        <li>{{$train->arrival_station}}</li>
                        <li>{{$train->departure_time}}</li>
                        <li>{{$train->arrival_time}}</li>
                        <li>{{$train->train_code}}</li>
                        <li>{{$train->on_time}}</li>
                        <li>{{$train->cancelled}}</li>
                    </ul>
                </div>
            @endforeach
            

        </div>
    </section>
@endsection