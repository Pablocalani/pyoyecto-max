     
     
          <div class="row">
          <div class="col-xs-6 col-sm-6 col-md-5 col-lg-12">
               <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="urldestino" id="floatingInput" placeholder="Coloca tu URL de Destino">
                    <label for="floatingInput">URL</label>
               </div>
          </div>
          </div>
     
          <div>
     @if($errors->has("whatsapp"))
          <span class="text-danger">{{ $errors->first("whatsapp") }}</span>
          
     @endif
          </div>
          <div class="row">
          <div class="col-xs-6 col-sm-6 col-md-5 col-lg-12">
               <div class="form-floating mb-3">
                    <input type="number" class="form-control @error("whatsapp") is-invalid @enderror" value="{{ old("whatsapp") }}" name="whatsapp" id="floatingInput" placeholder="ejemplo: 70010125">
                    <label for="floatingInput">Coloca tu whatsapp</label>
               </div>
          </div>
          </div>
     
     
          <div class="row">
          <div class="col-xs-6 col-sm-6 col-md-5 col-lg-12">
               <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="nombre" id="floatingInput" placeholder="pepito perez">
                    <label for="floatingInput">Coloca el nombre del cliente</label>
               </div>
          </div>
          </div>
     
     
          <div class="row">
          <div class="col-xs-6 col-sm-6 col-md-5 col-lg-12">
               <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="referencia" id="floatingInput" placeholder="calle b sin numero">
                    <label for="floatingInput">referencia del domicilio</label>
               </div>
          </div>
          </div>
     
     
          <div class="row">
          <div class="col-xs-6 col-sm-6 col-md-5 col-lg-12">
               <div class="form-floating mb-3">
                    <input type="number" class="form-control" name="cobrar" id="floatingInput" placeholder="cobrar 140bs">
                    <label for="floatingInput">monto a cobrar</label>
               </div>
          </div>
          </div>
     
     
          <div class="row">
          <div class="col-xs-6 col-sm-6 col-md-5 col-lg-12">
               <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="descripcion" id="floatingInput" placeholder="caja con galletas">
                    <label for="floatingInput">descripcion del paquete</label>
               </div>
          </div>
          </div>
     
     
          <div class="row">
          <div class="col-xs-6 col-sm-6 col-md-5 col-lg-12">
               <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="foto" id="floatingInput" placeholder="coloca tu foto">
                    <label for="floatingInput">foto</label>
               </div>
          </div>
          </div>
     
     
          <div class="row">
          <div class="col-xs-6 col-sm-6 col-md-5 col-lg-12">
               <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="cordenadax" id="floatingInput" placeholder="tu cordenada">
                    <label for="floatingInput">cordenadax</label>
               </div>
          </div>
          </div>
     
     
          <div class="row">
          <div class="col-xs-6 col-sm-6 col-md-5 col-lg-12">
               <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="cordenaday" id="floatingInput" placeholder="tu cordenada">
                    <label for="floatingInput">cordenaday</label>
               </div>
          </div>
          </div>

     <button type="submit" class="btn btn-warning">ENVIAR DATOS</button>