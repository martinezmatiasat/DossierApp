<?php require_once INCLUDES . 'header.php' ?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">

   <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2"><?php echo $data['title']; ?></h1>
   </div>

   <form class="container rounded bg-white mt-4" id="formEditarUsuario" action="<?php echo URL . 'usuarios/editar/' . $data['usuario']->usuario_id; ?>" method="post">
      <input type="hidden" name="csrf_token" value=<?php echo $_SESSION['csrf_token']['token']; ?>>
      <input type="hidden" name="usuario_id" value="<?php echo $data['usuario']->usuario_id ?>">
      <div class="row">
         <div class="col-md-3">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
               <img class="" src="<?php echo IMAGES.'no_image_available_1.png' ?>" style="width: 15em;" name="foto" id="foto">
               <input type="file" name="foto" id="foto" value="<?php echo $data['usuario']->foto ?>">
               <span> </span>
            </div>
         </div>
         <div class="col-md-9">
            <div class="form-row">
               <div class="form-group col-md-6">
                  <label for="inputEmail4">Nombre/s</label>
                  <input type="text" class="form-control" name="nombres" id="nombres" value="<?php echo $data['usuario']->nombres ?>" required>
               </div>
               <div class="form-group col-md-6">
                  <label for="inputPassword4">Apellido/s</label>
                  <input type="text" class="form-control" name="apellidos" id="apellidos" value="<?php echo $data['usuario']->apellidos ?>" required>
               </div>
            </div>
            <div class="form-row">
               <div class="form-group col-md-3">
                  <label for="inputEmail4">DNI</label>
                  <input type="text" class="form-control" name="dni" id="dni" value="<?php echo $data['usuario']->dni ?>" required>
               </div>
               <div class="form-group col-md-6">
                  <label for="inputEmail4">Email</label>
                  <input type="email" class="form-control" name="email" id="email" value="<?php echo $data['usuario']->email ?>" required>
               </div>
               <div class="form-group col-md-3">
                  <label for="inputPassword4">Tel&eacute;fono</label>
                  <input type="password" class="form-control" name="telefono" id="telefono" value="<?php echo $data['usuario']->telefono ?>">
               </div>
            </div>
            <div class="form-row">
               <div class="form-group col-md-8">
                  <label for="inputZip">Direcci&oacute;n</label>
                  <input type="text" class="form-control" name="direccion" id="direccion" value="<?php echo $data['usuario']->direccion ?>">
               </div>
               <div class="form-group col-md-4">
                  <label for="inputZip">C&oacute;digo Postal</label>
                  <input type="text" class="form-control" name="cp" id="cp" value="<?php echo $data['usuario']->cp ?>">
               </div>
            </div>
            <div class="form-row">
               <div class="form-group col-md-6">
                  <label for="inputZip">Localidad</label>
                  <input type="text" class="form-control" name="localidad" id="localidad" value="<?php echo $data['usuario']->localidad ?>">
               </div>
               <div class="form-group col-md-6">
                  <label for="inputZip">Provincia</label>
                  <input type="text" class="form-control" name="provincia" id="provincia" value="<?php echo $data['usuario']->provincia ?>">
               </div>
            </div>
            <div class="form-row">
               <div class="form-group col-md-3">
                  <label for="inputCity">Peso</label>
                  <input type="text" class="form-control" name="peso" id="peso" value="<?php echo $data['usuario']->peso ?>">
               </div>
               <div class="form-group col-md-3">
                  <label for="inputCity">Altura</label>
                  <input type="text" class="form-control" name="altura" id="altura" value="<?php echo $data['usuario']->altura ?>">
               </div>
               <div class="form-group col-md-6">
                  <label for="inputCity">Entrenador</label>
                  <input type="text" class="form-control" name="entrenador" id="entrenador" value="<?php echo $data['usuario']->entrenador ?>">
               </div>
            </div>
            <div class="form-row">
               <div class="col-md-6">
                  <label for="inputCity">Entrenamiento</label>
                  <div class="custom-file">
                     <input type="file" class="custom-file-input" name="entrenamiento" id="entrenamiento" value="<?php echo $data['usuario']->entrenamiento ?>">
                     <label class="custom-file-label" for="customFile">Choose file</label>
                  </div>
               </div>
               <div class="col-md-6">
                  <label for="inputCity">Dieta</label>
                  <div class="custom-file">
                     <input type="file" class="custom-file-input" name="dieta" id="dieta" value="<?php echo $data['usuario']->dieta ?>">
                     <label class="custom-file-label" for="customFile">Choose file</label>
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