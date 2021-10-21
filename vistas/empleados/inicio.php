<!--/* Adaptar a nuestro proyecto*/-->
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellidos</th>
      <th scope="col">Tipo de Documento</th>
      <th scope="col">Documento</th>
      <th scope="col">Fecha</th>
      <th scope="col">Correo</th>
      <th scope="col">Telefono</th>
      <th scope="col">Usuario</th>
      <th scope="col">Contraseña</th>
      <th scope="col">Contraseña Repeat</th>
      <th scope="col">Residencia</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>


  <?php
  

  // Imprimiendo los datos 

  
   foreach($empleados as $empleado){ ?>
      <tr>
         <td> <?php echo  $empleado->id; ?> </td>
          <td><?php echo $empleado->nombre; ?> </td>
          <td><?php echo $empleado->apellidos; ?> </td>
          <td> <?php echo  $empleado->tipo_documento; ?> </td>
          <td><?php echo $empleado->documento; ?> </td>
          <td><?php echo $empleado->fecha; ?> </td>
          <td> <?php echo  $empleado->correo; ?> </td>
          <td><?php echo $empleado->telefono; ?> </td>
          <td><?php echo $empleado->usuario; ?> </td>
          <td> <?php echo  $empleado->contraseña; ?> </td>
          <td><?php echo $empleado->contraseña_repeat; ?> </td>
          <td><?php echo $empleado->residencia; ?> </td>
          <td>
           <a href="?controlador=empleados&accion=editar&id=<?php echo  $empleado->id; ?>" class="btn btn-success me-1">Editar</a>
           <a href="?controlador=empleados&accion=borrar&id=<?php echo  $empleado->id; ?> " class="btn btn-danger">Borrar</a>
         </td>
      </tr>
   
  
  <?php } ?>
    
  </tbody>
  
</table>
