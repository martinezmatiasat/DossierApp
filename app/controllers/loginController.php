<?php

class loginController extends Controller
{
   function index()
   {
      $data = ['tittle' => 'Login'];
      View::render('login', $data);
   }

   function login()
   {
      $data = ['tittle' => 'Login'];
      if (!isset($_REQUEST['csrf_token']) || !isset($_SESSION['csrf_token'])
         || $_REQUEST['csrf_token'] != $_SESSION['csrf_token']['token']) {
         View::render('login', $data);
      }
      if (!isset($_POST['email']) || !isset($_POST['clave'])) {
         Alert::set_msg('Falta completar datos', 'danger');
         View::render('login', $data);
      }
      $admin = Admin::get_by_email($_POST['email']);
      if (!$admin || $admin->clave != sha1($_POST['clave'])) {
         Alert::set_msg('Identificaci&oacute;n incorrecta', 'danger');
         View::render('login', $data);
      }
      if ($admin->olvido_clave == 1) {
         $data['tittle'] = 'Cambio de clave';
         $data['admin'] = $admin;
         View::render('cambioClave', $data);
      }
      UserSession::set_current_user($admin);
      go_to('usuarios');
   }

   function logout()
   {
      session_unset();
      session_destroy();
      session_write_close();
      setcookie(session_name(), '', 0, '/');
      go_to('login');
   }

   function olvide_clave()
   {
      if (!isset($_POST['email'])) {
         $data = ['tittle' => 'Olvid&eacute; mi clave'];
         View::render('olvideClave', $data);
      }
      $admin = Admin::get_by_email($_POST['email']);
      if (!$admin) {
         Alert::set_msg('El email no está registrado', 'danger');
         $data = ['tittle' => 'Olvid&eacute; mi clave'];
         View::render('olvideClave', $data);
      } else {
         $clave_prov = substr(md5(rand()), 0, 7);
         $encrypted = sha1($clave_prov);
         $admin->clave = $encrypted;
         $admin->olvido_clave = 1;
         Admin::update($admin);
         //Admin::sendPassEmail($_POST['email'], $clave_prov);
         Alert::set_msg($clave_prov, 'danger');
         go_to('login');
      }
   }

   function cambio_clave()
   {
      if (!isset($_POST['email'])) {
         View::render('login', ['tittle' => 'Login']);
      }
      if (!isset($_POST['nueva-clave']) || !isset($_POST['confirmar-clave'])) {
         Alert::set_msg('La nueva clave y su confirmaci&oacute;n no coinciden', 'danger');
         $data['tittle'] = 'Cambio de clave';
         $data['admin'] = $_POST;
         View::render('cambioClave', $data);
      }
      if ($_POST['nueva-clave'] != $_POST['confirmar-clave']) {
         unset($_POST['nueva-clave']);
         unset($_POST['confirmar-clave']);
         Alert::set_msg('La nueva clave y su confirmaci&oacute;n no coinciden', 'danger');
         $data['tittle'] = 'Cambio de clave';
         $data['admin'] = $_POST;
         View::render('cambioClave', $data);
      }
      $admin['admin_id'] = $_POST['admin_id'];
      $admin['nombre'] = $_POST['nombre'];
      $admin['email'] = $_POST['email'];
      $admin['clave'] = sha1($_POST['nueva-clave']);
      $admin['olvido_clave'] = 0;
      Admin::update_arr($admin);
      Alert::set_msg('Clave modificada con &eacute;xito', 'succes');
      View::render('login', ['tittle' => 'Login']);
   }
}
