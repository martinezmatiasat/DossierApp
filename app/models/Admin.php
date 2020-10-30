<?php
class Admin extends Model
{
   public $admin_id = null;
   public $nombre = null;
   public $email = null;
   public $clave = null;
   public $olvido_clave = null;

   function __construct($data = [])
   {
      if (isset($data['admin_id'])) $this->admin_id = $data['admin_id'];
      if (isset($data['nombre'])) $this->nombre = $data['nombre'];
      if (isset($data['email'])) $this->email = $data['email'];
      if (isset($data['clave'])) $this->clave = $data['clave'];
      if (isset($data['olvido_clave'])) $this->olvido_clave = $data['olvido_clave'];
   }

   public static function get_by_email($email)
   {
      $params = [
         'email' => $email
      ];
      $result = parent::get('Admin', 'admins', $params);
      return $result;
   }

   public static function update($data)
   {
      $condition = ['admin_id = '.$data->admin_id];
      $result = parent::update_object('admins', $data, $condition);
      return $result;
   }

   public static function update_arr($data)
   {
      $condition = ['admin_id = '.$data['admin_id']];
      $result = parent::update_array('admins', $data, $condition);
      return $result;
   }

   public static function sendPassEmail($email, $clave)
   {
      $eol = PHP_EOL;
      $asunto = 'Modificaci&oacute;n de clave suscriptor';
      $mensaje = 'Esta es la clave provisoria que deber&aacute; ingresar:' . $eol;
      $mensaje .= $clave;
      $header = 'From: no-responder@empresa.com' . $eol;
      $header .= 'Reply-To: info@empresa.com' . $eol;
      $header .= 'X-Mailer: PHP/' . phpversion();
      
      $mail = mail($email, $asunto, $mensaje, $header);
      if ($mail) {
         Alert::set_msg('Clave enviada con &eacute;xito', 'success');
      } else {
         Alert::set_msg('Disculpe. No se pudo enviar el email', 'danger');
      }
      
      return;
   }
}
