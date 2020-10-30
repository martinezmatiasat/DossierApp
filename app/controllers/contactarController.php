<?php

class contactarController
{
   public function index()
   {
      if (!isset($_SESSION['user'])) go_to('login');
      $data = ['title' => 'Contactar clientes'];
      View::render('contactar', $data);
   }
}