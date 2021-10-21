<form class="container-fluid w-25 mt-5 custom" action="" method ="post">
         <div class="row">
             <div class="col-12 m-auto mb-4" >
                <h2 class="text-center">Editar Registro </h2>
                <div class="row">
                    <div class="col-12">
                        <label for="" class="form-label">ID</label>
                        <input type="text"  name="id" class="form-control" id="id" value="<?php echo $empleado->id ?>" readonly>
                     </div>
                </div>
                 <!-- Nombre -->
                <div class="row">
                    <div class="col-12">
                        <label for="" class="form-label">Nombre</label>
                        <input type="text" value="<?php echo $empleado->nombre ?>" name="nombre" class="form-control" id="nombre" required >
                     </div>
                </div>
                 <!-- Apellidos -->
                 <div class="row">
                    <div class="col-12">
                        <label for="" class="form-label">Apellidos</label>
                        <input type="text" class="form-control" name="input_apellidos" id="input_apellidos" value="<?php echo $empleado->apellidos?>"  required >
                     </div>
                </div>
                <!-- Select TipoDoc-->
                <div class="row">
                    <div class="col-12 my-2">
                        <label for="">Tipo de Documento</label>
                        <select class="form-select form-select " aria-label=".form-select-lg example" name="select_tipoDoc" id="select_tipoDoc"  required>
                            <option selected value="<?php echo $empleado->tipo_documento?>"><?php echo $empleado->tipo_documento?></option>
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
                        <input type="text" class="form-control" id="input_num_doc" name="input_num_doc" value="<?php echo $empleado->documento?>" required >
                     </div>
                </div> 
                <!-- Fecha -->
                <div class="row">
                    <div class="col-12">
                        <label for="" class="form-label">Fecha de nacimiento</label>
                        <input type="date"  class="form-control" name="input_fecha" id="input_fecha" value="<?php echo $empleado->fecha?>" required>
                     </div>
                </div>  
                <!-- correo -->
                <div class="row">
                    <div class="col-12">
                        <label for="" class="form-label">Correo</label>
                        <input type="text"  class="form-control" name="input_correo" id="input_correo" value="<?php echo $empleado->correo?>" required> 
                     </div>
                </div> 
                <!--Telefono -->
                <div class="row">
                    <div class="col-12">
                        <label for="" class="form-label">Telefono</label>
                        <input type="text"  class="form-control" name="input_telefono" id="input_telefono" value="<?php echo $empleado->telefono?>" required>
                     </div>
                </div> 
                <!-- Usuario -->
                <div class="row">
                    <div class="col-12">
                        <label for="" class="form-label">Usuario</label>
                        <input type="text"  class="form-control" name="input_usuario" id="input_usuario" value="<?php echo $empleado->usuario?>" required>
                     </div>
                </div> 
                <!-- Contraseña -->
                <div class="row">
                    <div class="col-12">
                        <label for="" class="form-label">Contraseña</label>
                        <input type="text"  class="form-control" name="input_contraseña" id="input_contraseña" value="<?php echo $empleado->contraseña?>" required>
                     </div>
                </div> 
                <!-- Contraseña repeat -->
                <div class="row">
                    <div class="col-12">
                        <label for="" class="form-label">Confirmar contraseña</label>
                        <input type="text"  class="form-control" name="input_contraseña_repeat" id="input_contraseña_repeat" value="<?php echo $empleado->contraseña_repeat?>" required>
                     </div>
                </div> 
                <!-- Lugar de residencia  -->
                <div class="row">
                    <div class="col-12 my-3">
                        <select class="form-select form-select- " aria-label=".form-select-lg example" name="select_doc" required >
                            <option selected value="<?php echo $empleado->residencia?>"><?php echo $empleado->residencia?></option>
                            <option value="1">Bucaramanga</option>
                            <option value="2">Giron</option>
                            <option value="3">Piedecuesta</option>
                          </select>
                    </div>
                </div>
                <!-- Boton -->
                <div class="row">
                    <div class="col-12  d-flex justify-content-center">
                        <div class="col-6">
                        <input type="submit" class="btn btn-lg btn-success " value="Guardar Cambios" >
                        </div>
                        <div class="col-6 "><a href="?controlador=empleados&accion=inicio" class="btn btn-lg btn-primary">Cancelar</a></div>
                        
                    </div>
                </div>
         </div>
    </form>
</body>