@extends('layouts.app')

@section('content')
    <section class="container">
        <div class="row">
                <div class="col-12">
                    <table>
                        <caption>
                            <p>I treni</p>
                        </caption>
                        <thead>
                            <tr>
                                <th>Compagnia</th>
                                <th>Stazione di arrivo</th>
                                <th>Stazione di partenza</th>
                                <th>Orario di arrivo</th>
                                <th>Orario di partenza</th>
                                <th>Codice treno</th>
                                <th>Numero vagoni</th>
                                <th>Cancellato</th>
                                <th>In orario</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($trains as $train)

                            <tr>
                                <td>{{$train->wagons_number}}</td>
                                <td>{{$train->company}}</td>
                                <td>{{$train->departure_station}}</td>
                                <td>{{$train->arrival_station}}</td>
                                <td>{{$train->departure_time}}</td>
                                <td>{{$train->arrival_time}}</td>
                                <td>{{$train->train_code}}</td>
                                <td>{{$train->on_time}}</td>
                                <td>{{$train->cancelled}}</td>
                            </tr>

                            @endforeach

                        </tbody>
                    </table>
                </div>
            
            
            
        </div>
    </section>
@endsection