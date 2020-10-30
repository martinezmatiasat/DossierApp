<?php
class Evento extends Model
{
   public $evento_id = null;
   public $nombre = null;
   public $dia = null;
   public $hora = null;
   public $disponibles = null;
   public $totales  = null;
   public $cartel = null;

   function __construct($data = [])
   {
      if (isset($data['evento_id'])) $this->evento_id = $data['evento_id'];
      if (isset($data['nombre'])) $this->nombre = $data['nombre'];
      if (isset($data['dia'])) $this->dia = $data['dia'];
      if (isset($data['hora'])) $this->hora = $data['hora'];
      if (isset($data['disponibles'])) $this->disponibles = $data['disponibles'];
      if (isset($data['totales '])) $this->totales  = $data['totales '];
      if (isset($data['cartel'])) $this->cartel = $data['cartel'];
   }
}