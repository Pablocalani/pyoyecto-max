@extends('adminlte::page')
@section('content')
    <table class="table">
        <thead class="table-warning">
            <th>Nombre</th>
            <th>Destino</th>
            <th>Whatsapp</th>
            <th>Referencia</th>
            <th>Cobrar</th>
            <th>Descripcion</th>
            <th>Foto</th>
            <th>Cordenadax</th>
            <th>Cordenaday</th>
        </thead>
        <tbody>
            @foreach ($clientes as $cliente)
            <tr>
                <td>{{ $cliente->nombre }}</td>
                <td class="table-warning"><a href="{{ $cliente->urldestino }}">{{ $cliente->urldestino }}</a> </td>
                <td><a href="{{ "https://wa.me/591".$cliente->whatsapp }}" class="">{{ $cliente->whatsapp }} <i class="fab fa-whatsapp"></i></a></td>
                <td class="table-warning">{{ $cliente->referencia }}</td>
                <td>{{ $cliente->cobrar }}</td>
                <td class="table-warning">{{ $cliente->descripcion }}</td>
                <td>{{ $cliente->foto }}</td>
                <td class="table-warning">{{ $cliente->cordenadax }}</td>
                <td>{{ $cliente->cordenaday }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    @stop