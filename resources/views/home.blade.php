@extends('layouts.app')

@section('main_content')
    <h1>
        Offerte Viaggi Last minute
    </h1>

    @foreach ($travels as $travel)
        <li>
            Destinazione: {{ $travel->destination }}
            
        </li>

        <li>
            Tipo di soggiorno: {{ $travel->accommodation }}
        </li>

        <li>
            Durata: {{ $travel->duration }} giorni
        </li>

        <li>
            Descrizione: {{ $travel->description }}
        </li>

        <li>
            Rimborsabile: @if ($travel->refundable == 1) Si @else No @endif
        </li>

        <li>
            Prezzo: {{ $travel->price }} euro
        </li>

        <br>
    @endforeach
@endsection