<?php
class Clase extends Model
{
   public $clase_id = null;
   public $nombre = null;
   public $disponibles = null;
   public $totales = null;

   function __construct($data = [])
   {
      if (isset($data['clase_id'])) $this->clase_id = $data['clase_id'];
      if (isset($data['nombre'])) $this->nombre = $data['nombre'];
      if (isset($data['disponibles'])) $this->disponibles = $data['disponibles'];
      if (isset($data['totales'])) $this->totales = $data['totales'];
   }
}