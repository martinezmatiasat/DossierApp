<?php require_once INCLUDES . 'header.php' ?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">

   <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2"><?php echo $data['title'] ?></h1>
      <div class="btn-toolbar mb-2 mb-md-0">
         <a class="btn btn-sm btn-success btnAgregar" href="<?php echo URL.'usuarios/agregar'; ?>">
            <span data-feather="user-plus"></span>
            Agregar
         </a>
      </div>
   </div>
   <div class="table-responsive" id="divUsuarios">
      <table class="table table-striped" id="tablaUsuarios">
         <thead>
            <tr>
               <th>Id</th>
               <th>Dni</th>
               <th>Nombre/s</th>
               <th>Apellido/s</th>
               <th>Entrenador</th>
               <th>Editar</th>
               <th>Eliminar</th>
            </tr>
         </thead>
         <tbody>
            <?php if ($data['usuarios']) {
               foreach ($data['usuarios'] as $u) { ?>
               <tr>
                  <td><?php echo $u->usuario_id; ?></td>
                  <td><?php echo $u->dni; ?></td>
                  <td><?php echo $u->nombres; ?></td>
                  <td><?php echo $u->apellidos; ?></td>
                  <td><?php echo $u->entrenador; ?></td>
                  <td><a class="option btnEditar" href="<?php echo URL.'usuarios/editar/'.$u->usuario_id; ?>"><span data-feather="edit"></span></a></td>
                  <td><a class="erase btnEliminar" href="<?php echo URL.'usuarios/eliminar/'.$u->usuario_id; ?>"><span data-feather="trash-2"></span></a></td>
               </tr>
            <?php } 
            } ?>
         </tbody>
      </table>
   </div>
   <div>
   </div>

</main>
<?php
$includeFiles = ['usuariosDataTable.js', 'usuarios.js'];
require_once INCLUDES . 'footer.php';
?>