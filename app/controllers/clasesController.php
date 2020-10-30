<?php

class clasesController
{
   public function index()
   {
      if (!isset($_SESSION['user'])) go_to('login');
      $data = ['title' => 'Clases'];
      View::render('clases', $data);
   }
}