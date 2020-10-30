<?php

class usuariosController
{
   public function index()
   {
      if (!isset($_SESSION['user'])) go_to('login');
      $data = ['title' => 'Usuarios'];
      $data['usuarios'] = Usuario::get_all();
      View::render('usuarios', $data);
      return;
   }

   public function agregar()
   {
      if (!isset($_SESSION['user'])) go_to('login');
      if (!$_POST) {
         $data = ['title' => 'Agregar usuario'];
         View::render('agregarUsuario', $data);
         return;
      }
      if (!isset($_POST['csrf_token']) || $_POST['csrf_token']  != $_SESSION['csrf_token']['token']) {
         Alert::throw_msg('La sesión expiró. Por favor vuelva a ingresar', 'danger');
         go_to('usuarios');
      }
      if (isset($_FILES['foto'])) {
         self::guardar_img($_FILES['foto']['name'], $_FILES['foto']['type'], $_FILES['foto']['size'], $_FILES['foto']['tmp_name']);
      }
      if (!isset($_POST['nombres']) || !isset($_POST['apellidos']) || !isset($_POST['dni']) || !isset($_POST['email'])) {
         Alert::throw_msg('Falta completar datos', 'danger');
         $data = ['title' => 'Agregar usuario'];
         View::render('agregarUsuario', $data);
      }
      if (Usuario::exists_by('dni', $_POST['dni']) && Usuario::exists_by('email', $_POST['email'])) {
         Alert::throw_msg('Ya hay un usuario registrado con estos datos', 'danger');
         go_to('usuarios');
      }
      unset($_POST['csrf_token']);
      $result = Usuario::insert_arr($_POST);
      if (!is_numeric($result)) {
         Alert::throw_msg('Disculpe, no se pudo agregar al usuario', 'danger');
      } else {
         Alert::throw_msg('Usuario agregado con éxito', 'success');
      }
      go_to('usuarios');
   }

   public function editar($usuario_id)
   {
      if (!isset($_SESSION['user'])) go_to('login');
      if (!$_POST) {
         $data['usuario'] = Usuario::get_by_id($usuario_id);
         $data['title'] = 'Editar usuario';
         View::render('editarUsuario', $data);
         return;
      }
      if (!isset($_POST['csrf_token']) || $_POST['csrf_token']  != $_SESSION['csrf_token']['token']) {
         Alert::throw_msg('La sesión expiró. Por favor vuelva a ingresar', 'danger');
         go_to('usuarios');
      }
      if (!isset($_POST['nombres']) || !isset($_POST['apellidos']) || !isset($_POST['dni']) || !isset($_POST['email'])) {
         Alert::throw_msg('Falta completar datos', 'danger');
         go_to('usuarios');
      }
      unset($_POST['csrf_token']);
      $result = Usuario::update($_POST);
      if ($result !== true) {
         Alert::throw_msg('Disculpe, no se pudo modificar al usuario', 'danger');
      } else {
         Alert::throw_msg('Usuario modificado con éxito', 'success');
      }
      go_to('usuarios');
   }

   public function eliminar($usuario_id)
   {
      if (!isset($_SESSION['user'])) go_to('login');
      $result = Usuario::delete_usuario($usuario_id);
      if ($result !== true) {
         Alert::throw_msg('Disculpe, no se pudo eliminar al usuario', 'error');
      } else {
         Alert::throw_msg('Usuario eliminado con éxito', 'success');
      }
      go_to('usuarios');
   }

   public static function guardar_img($filename, $filetype, $filesize, $tmpname)
   {
      if (!((strpos($filetype, "gif") || strpos($filetype, "jpeg")) && ($filesize < 3145728))) {
         Alert::throw_msg('Extensión o tamaño de archivo invalidos. Sólo archivos gif, jpg o png de 3 Mb máximo.', 'error');
      } else {
         $destination = 'assets/images/'.$filename;
         if (move_uploaded_file($tmpname, $destination)) {       
            Alert::throw_msg('El archivo ha sido cargado correctamente', 'success');
         } else {
            Alert::throw_msg('Disculpe, no se pudo guardar el archivo', 'error');
         }
      }
      return;
   }

   public static function preview_img()
   {
   }
}
