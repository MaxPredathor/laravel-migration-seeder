@extends('layouts.app')

@section('title', 'Home')

@section('content')
<main>
    <h1>I like trains</h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Azienda</th>
            <th scope="col">Stazione di Partenza</th>
            <th scope="col">Stazione Di Arrivo</th>
            <th scope="col">Orario di Partenza</th>
            <th scope="col">Orario di Arrivo</th>
            <th scope="col">Giorno di Partenza</th>
            <th scope="col">Giorno di Arrivo</th>
            <th scope="col">Codice Treno</th>
            <th scope="col">Numero Carrozze</th>
            <th scope="col">In Orario</th>
            <th scope="col">Cancellato</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($trains as $train)
        <tr>
            <th scope="row">1</th>
            <td>{{ $train->azienda }}</td>
            <td>{{ $train->stazione_di_partenza }}</td>
            <td>{{ $train->stazione_di_arrivo }}</td>
            <td>{{ $train->orario_di_partenza }}</td>
            <td>{{ $train->orario_di_arrivo }}</td>
            <td>{{ $train->giorno_di_partenza }}</td>
            <td>{{ $train->giorno_di_arrivo }}</td>
            <td>{{ $train->codice_treno }}</td>
            <td>{{ $train->numero_carrozze }}</td>
            <td>{{ $train->in_orario }}</td>
            <td>{{ $train->cancellato }}</td>
        </tr>
        @endforeach
        </tbody>
      </table>
</main>

@endsection
