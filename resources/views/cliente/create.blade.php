

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<div class="container"> 
  <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
    <div class="card-header">Formulario Cliente</div>
    <div class="card-body">
    <form action="dire">
      <form>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">URL destino</label>
              <input type="url" class="form-control" placeholder="coloca URL de destino">
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">Whatsapp</label>
              <input type="text" class="form-control" id="inputPassword4" placeholder="coloca tu Whatsapp">
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">Nombre</label>
              <input type="text" class="form-control" id="inputPassword4" placeholder="coloca tu Nombre">
            </div>
          </div>
          <div class="form-group">
            <label for="inputAddress">Referencia</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="Referencia del domicilio">
          </div>
          <div class="form-row">
            <label for="inputAddress">Cobrar</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="Monto a cobrar">
          </div>
          <div class="form-group">
            <label for="inputAddress2">Descripcion del Producto</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="Descripcion del Producto">
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputCity">Ciudad</label>
              <input type="text" class="form-control" id="inputCity" placeholder="cual es tu ciudad">
            </div>
            <div class="form-group col-md-6">
              <label for="inputCity">eres hombre o mujer</label>
              <input type="text" class="form-control" id="inputCity" placeholder="eres hombre o mujer">
            </div>
            <div class="form-group col-md-2">
              <label for="inputZip">Zip</label>
              <input type="text" class="form-control" id="inputZip">
            </div>
          <div class="form-group">
          </div>
          <button type="submit" class="btn btn-primary mt-3">Aceptar</button>
        </form>
  </form>
    </div>
  </div>
</div>
  
  </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop























