<!doctype html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="">
   <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
   <meta name="generator" content="Jekyll v4.0.1">
   <title>Dashboard Template · Bootstrap</title>
   <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/dashboard/">
   <!-- Bootstrap core CSS -->
   <link href=<?php echo CSS."bootstrap.css" ?> rel="stylesheet">

   <!-- Estilo Data Tables -->
   <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
   
   <link rel="stylesheet" href=<?php echo CSS."toastr.min.css" ?>>

   <!-- Iconos en: https://feathericons.com/ -->

   <style>
      .bd-placeholder-img {
         font-size: 1.125rem;
         text-anchor: middle;
         -webkit-user-select: none;
         -moz-user-select: none;
         -ms-user-select: none;
         user-select: none;
      }

      @media (min-width: 768px) {
         .bd-placeholder-img-lg {
            font-size: 3.5rem;
         }
      }
   </style>
   <!-- Custom styles for this template -->
   <link href=<?php echo CSS."dashboard.css" ?> rel="stylesheet">
</head>

<body>
   
   <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
      
      <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">LOGO</a>
      
      <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse"
         data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
      </button>
      
      <ul class="navbar-nav px-3">
         <li class="nav-item text-nowrap">
            <a class="nav-link" href="<?php echo URL.'login/logout' ?>">Cerrar Sesi&oacute;n  <span data-feather="log-out"></span></a>
         </li>
      </ul>
      
   </nav>
   
   <div class="container-fluid">
      <div class="row">
         <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="sidebar-sticky pt-3">
               <ul class="nav flex-column">
                  <li class="nav-item">
                     <a class="nav-link" id="menuUsuarios" href="<?php echo URL.'usuarios' ?>">
                        <span data-feather="users"></span>
                        Usuarios
                     </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" id="menuClases" href="<?php echo URL.'clases' ?>">
                        <span data-feather="clipboard"></span>
                        Clases
                     </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" id="menuEventos" href="<?php echo URL.'eventos' ?>">
                        <span data-feather="calendar"></span>
                        Eventos
                     </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" id="menuContactar" href="<?php echo URL.'contactar' ?>">
                        <span data-feather="mail"></span>
                        Contactar con clientes
                     </a>
                  </li>
               </ul>
            </div>
         </nav>