<?php

class eventosController
{
   public function index()
   {
      if (!isset($_SESSION['user'])) go_to('login');
      $data = ['title' => 'Eventos'];
      View::render('eventos', $data);
   }
}