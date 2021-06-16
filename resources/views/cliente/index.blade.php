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
                <td class="table-warning">{{ $cliente->urldestino }}</td>
                <td>{{ $cliente->whatsapp }}</td>
                <td>{{ $cliente->referencia }}</td>
                <td>{{ $cliente->cobrar }}</td>
                <td>{{ $cliente->descripcion }}</td>
                <td>{{ $cliente->foto }}</td>
                <td>{{ $cliente->cordenadax }}</td>
                <td>{{ $cliente->cordenaday }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    @stop