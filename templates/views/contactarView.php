<?php require_once INCLUDES . 'header.php' ?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
   <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Usuarios</h1>
      <div class="btn-toolbar mb-2 mb-md-0">
         <button type="button" class="btn btn-sm btn-outline-success">
            <span data-feather="plus"></span>
            Agregar
         </button>
         <button type="button" class="btn btn-sm btn-outline-primary">
            <span data-feather="edit-2"></span>
            Editar
         </button>
         <button type="button" class="btn btn-sm btn-outline-danger">
            <span data-feather="x"></span>
            Eliminar
         </button>
      </div>
   </div>

   <div class="table-responsive">
      
   </div>
</main>

<?php
$includeFiles = ['usuariosDataTable.js', 'contactar.js'];
require_once INCLUDES . 'footer.php';
?>