<?php
class Usuario extends Model
{
   public $usuario_id = null;
   public $dni = null;
   public $nombres = null;
   public $apellidos = null;
   public $email = null;
   public $telefono = null;
   public $direccion = null;
   public $localidad = null;
   public $provincia = null;
   public $cp = null;
   public $peso = null;
   public $altura = null;
   public $foto = null;
   public $entrenador = null;
   public $entrenamiento = null;
   public $dieta = null;

   function __construct($data = [])
   {
      if (isset($data['usuario_id'])) $this->usuario_id = $data['usuario_id'];
      if (isset($data['dni'])) $this->dni = $data['dni'];
      if (isset($data['nombres'])) $this->nombres = $data['nombres'];
      if (isset($data['apellidos'])) $this->apellidos = $data['apellidos'];
      if (isset($data['email'])) $this->email = $data['email'];
      if (isset($data['telefono'])) $this->telefono = $data['telefono'];
      if (isset($data['direccion'])) $this->direccion = $data['direccion'];
      if (isset($data['localidad'])) $this->localidad = $data['localidad'];
      if (isset($data['provincia'])) $this->provincia = $data['provincia'];
      if (isset($data['cp'])) $this->cp = $data['cp'];
      if (isset($data['peso'])) $this->peso = $data['peso'];
      if (isset($data['altura'])) $this->altura = $data['altura'];
      if (isset($data['foto'])) $this->foto = $data['foto'];
      if (isset($data['entrenador'])) $this->entrenador = $data['entrenador'];
      if (isset($data['entrenamiento'])) $this->entrenamiento = $data['entrenamiento'];
      if (isset($data['dieta'])) $this->dieta = $data['dieta'];
   }

   public static function get_all()
   {
      $result = parent::get_list('Usuario', 'usuarios');
      return $result;
   }

   public static function get_usuario($data)
   {
      $result = parent::get('Usuario', 'usuarios', $data);
      return $result;
   }

   public static function get_by_id($id)
   {
      $params = ['usuario_id' => $id];
      $result = parent::get('Usuario', 'usuarios', $params);
      return $result;
   }

   public static function exists_by($key, $value)
   {
      $params = [ $key => $value ];
      $result = parent::exists('usuarios', $params);
      return $result;
   }

   public static function insert_arr($data)
   {
      $result = parent::insert_array('usuarios', $data);
      return $result;
   }

   public static function update($data)
   {
      $condition = ['usuario_id = '.$data['usuario_id']];
      $result = parent::update_array('usuarios', $data, $condition);
      return $result;
   }

   public static function delete_usuario($id)
   {
      $condition = ['usuario_id = '.$id];
      $result = parent::delete('usuarios', $condition);
      return $result;
   }
}