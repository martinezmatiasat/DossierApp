<?php require_once CLASSES.'Db.php';
require_once CLASSES.'Model.php';

   $result = Model::get_list('Usuario', 'usuarios');
   echo json_encode($result);