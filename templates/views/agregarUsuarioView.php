<?php require_once INCLUDES . 'header.php' ?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">

   <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2"><?php echo $data['title'] ?></h1>
   </div>

   <form class="container rounded bg-white mt-4" id="formAgregarUsuario" action="<?php echo URL . 'usuarios/agregar'; ?>" method="post" enctype="multipart/form-data">
      <input type="hidden" name="csrf_token" value=<?php echo $_SESSION['csrf_token']['token']; ?>>
      <div class="row">
         <div class="col-md-3">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
               <img class="preview" src="<?php echo IMAGES.'no_image_available_1.png' ?>" style="width: 15em;">
               <input type="file" name="foto">
               <span> </span>
            </div>
         </div>
         <div class="col-md-9">
            <div class="form-row">
               <div class="form-group col-md-6">
                  <label for="nombres">Nombre/s</label>
                  <input type="text" class="form-control nombres" name="nombres" id="nombres" required>
               </div>
               <div class="form-group col-md-6">
                  <label for="apellidos">Apellido/s</label>
                  <input type="text" class="form-control apellidos" name="apellidos" id="apellidos" required>
               </div>
            </div>
            <div class="form-row">
               <div class="form-group col-md-3">
                  <label for="dni">DNI</label>
                  <input type="text" class="form-control dni" name="dni" id="dni" required>
               </div>
               <div class="form-group col-md-6">
                  <label for="email">Email</label>
                  <input type="email" class="form-control email" name="email" id="email" required>
               </div>
               <div class="form-group col-md-3">
                  <label for="telefono">Tel&eacute;fono</label>
                  <input type="text" class="form-control telefono" name="telefono" id="telefono">
               </div>
            </div>
            <div class="form-row">
               <div class="form-group col-md-8">
                  <label for="direccion">Direcci&oacute;n</label>
                  <input type="text" class="form-control direccion" name="direccion" id="direccion">
               </div>
               <div class="form-group col-md-4">
                  <label for="cp">C&oacute;digo Postal</label>
                  <input type="text" class="form-control cp" name="cp" id="cp">
               </div>
            </div>
            <div class="form-row">
               <div class="form-group col-md-6">
                  <label for="localidad">Localidad</label>
                  <input type="text" class="form-control localidad" name="localidad" id="localidad">
               </div>
               <div class="form-group col-md-6">
                  <label for="provincia">Provincia</label>
                  <input type="text" class="form-control provincia" name="provincia" id="provincia">
               </div>
            </div>
            <div class="form-row">
               <div class="form-group col-md-3">
                  <label for="peso">Peso</label>
                  <input type="text" class="form-control peso" name="peso" id="peso">
               </div>
               <div class="form-group col-md-3">
                  <label for="altura">Altura</label>
                  <input type="text" class="form-control altura" name="altura" id="altura">
               </div>
               <div class="form-group col-md-6">
                  <label for="entrenador">Entrenador</label>
                  <input type="text" class="form-control entrenador" name="entrenador" id="entrenador">
               </div>
            </div>
            <div class="form-row">
               <div class="col-md-4">
                  <label for="entrenamiento">Entrenamiento</label>
                  <div class="custom-file">
                     <input type="file" class="custom-file-input entrenamiento" name="entrenamiento" id="entrenamiento">
                     <label class="custom-file-label" for="entrenamiento">Cargar archivo</label>
                  </div>
               </div>
               <div class="col-md-4">
                  <label for="dieta">Dieta</label>
                  <div class="custom-file">
                     <input type="file" class="custom-file-input dieta" name="dieta" id="dieta">
                     <label class="custom-file-label" for="dieta">Cargar archivo</label>
                  </div>
               </div>
            </div>
            <button type="submit" class="btn btn-success btnAceptar">Aceptar</button>
            <a class="btn btn-danger btnCancelar" href="<?php echo URL . 'usuarios'; ?>">Cancelar</a>
         </div>
      </div>
   </form>

</main>

<?php
$includeFiles = ['usuariosDataTable.js', 'usuarios.js'];
require_once INCLUDES . 'footer.php';
?>