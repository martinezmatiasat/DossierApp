<?php require_once 'header.php' ?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
   <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Principal</h1>
      <div class="btn-toolbar mb-2 mb-md-0">
         <div class="btn-group mr-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Compartir</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Exportar</button>
         </div>
         <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
            Esta semana
         </button>
      </div>
   </div>

   <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
</main>

<?php require_once 'footer.php' ?>