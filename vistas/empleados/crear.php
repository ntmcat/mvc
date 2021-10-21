
    <form class="container-fluid w-25 mt-5 custom" action="" method ="post">
         <div class="row">
             <div class="col-12 m-auto mb-4" >
                <h2 class="text-center">Registro </h2>
                 <!-- Nombre -->
                <div class="row">
                    <div class="col-12">
                        <label for="" class="form-label">Nombre</label>
                        <input type="text"  name="nombre" class="form-control" id="nombre" required>
                     </div>
                </div>
                 <!-- Apellidos -->
                 <div class="row">
                    <div class="col-12">
                        <label for="" class="form-label">Apellidos</label>
                        <input type="text" class="form-control" name="input_apellidos" id="input_apellidos" required>
                     </div>
                </div>
                <!-- Select TipoDoc-->
                <div class="row">
                    <div class="col-12 my-2">
                        <label for="">Tipo de Documento</label>
                        <select class="form-select form-select " aria-label=".form-select-lg example" name="select_tipoDoc" id="select_tipoDoc" required>
                            <option selected>Elija su documento</option>
                            <option value="CC">CC</option>
                            <option value="TI">TI</option>
                            <option value="Otro">Otro</option>
                          </select>
                    </div>
                </div>
                <!-- documento -->
                <div class="row">
                    <div class="col-12">
                        <label for="" class="form-label">Documento</label>
                        <input type="text" class="form-control" id="input_num_doc" name="input_num_doc" required >
                     </div>
                </div> 
                <!-- Fecha -->
                <div class="row">
                    <div class="col-12">
                        <label for="" class="form-label">Fecha de nacimiento</label>
                        <input type="date"  class="form-control" name="input_fecha" id="input_fecha" required>
                     </div>
                </div>  
                <!-- correo -->
                <div class="row">
                    <div class="col-12">
                        <label for="" class="form-label">Correo</label>
                        <input type="text"  class="form-control" name="input_correo" id="input_correo" required> 
                     </div>
                </div> 
                <!--Telefono -->
                <div class="row">
                    <div class="col-12">
                        <label for="" class="form-label">Telefono</label>
                        <input type="text"  class="form-control" name="input_telefono" id="input_telefono" required>
                     </div>
                </div> 
                <!-- Usuario -->
                <div class="row">
                    <div class="col-12">
                        <label for="" class="form-label">Usuario</label>
                        <input type="text"  class="form-control" name="input_usuario" id="input_usuario" required>
                     </div>
                </div> 
                <!-- Contraseña -->
                <div class="row">
                    <div class="col-12">
                        <label for="" class="form-label">Contraseña</label>
                        <input type="password"  class="form-control" name="input_contraseña" id="input_contraseña" required>
                     </div>
                </div> 
                <!-- Contraseña repeat -->
                <div class="row">
                    <div class="col-12">
                        <label for="" class="form-label">Confirmar contraseña</label>
                        <input type="password"  class="form-control" name="input_contraseña_repeat" id="input_contraseña_repeat" required>
                     </div>
                </div> 
                <!-- Lugar de residencia  -->
                <div class="row">
                    <div class="col-12 my-3">
                        <select class="form-select form-select- " aria-label=".form-select-lg example" name="select_doc" required >
                            <option selected>Lugar de residencia</option>
                            <option value="Bucaramanga">Bucaramanga</option>
                            <option value="Giron">Giron</option>
                            <option value="Piedecuesta">Piedecuesta</option>
                          </select>
                    </div>
                </div>
                <!-- Boton -->
                <div class="row">
                    <div class="col-12  d-flex justify-content-center">
                        <input type="submit" class="btn btn-lg btn-primary" value="Registrar" >
                    </div>
                </div>
         </div>
    </form>
</body>
