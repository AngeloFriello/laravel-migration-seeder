@extends('layouts.layouts')

@section('content')
    <section class="container">
        <div class="row">
            @forelse ($trains as $train)
                <div class="col-3">
                    <ul class="card">
                        <li>{{$train['Azienda']}}</li>
                        <li>{{$train['created_at']}}</li>
                        <li>{{$train['update_at']}}</li>
                        <li>{{$train['id']}}</li>
                        <li>{{$train['stato_di_partenza']}}</li>
                        <li>{{$train['stato_di_arrivo']}}</li>
                        <li>{{$train['orario_di_partenza']}}</li>
                        <li>{{$train['Orario_di_arrivo']}}</li>
                    </ul>
                </div>
            @empty
                non c'è nessun film
            @endforelse
            

        </div>
    </section>
@endsection