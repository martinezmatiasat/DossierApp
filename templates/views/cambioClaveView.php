<!doctype html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="">
   <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
   <meta name="generator" content="Jekyll v4.0.1">
   <title>Signin Template · Bootstrap</title>

   <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/sign-in/">

   <!-- Bootstrap core CSS -->
   <link href=<?php echo CSS . 'bootstrap.css' ?> rel="stylesheet">

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
   <link href=<?php echo CSS . 'signin.css' ?> rel="stylesheet">
</head>

<body class="text-center">
   <form class="form-signin" action=<?php echo URL . 'login/cambio_clave'; ?> method="post">
      <input type="hidden" name="csrf_token" value=<?php echo $_SESSION['csrf_token']['token']; ?>>
      <img class="mb-4" src="../assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Cambio de clave</h1>
      <input type="hidden" name="csrf_token" value=<?php echo $_SESSION['csrf_token']['token']; ?>>

      <input type="hidden" name="admin_id" value=<?php echo $data['admin']->admin_id; ?>>
      <input type="hidden" name="nombre" value=<?php echo $data['admin']->nombre; ?>>
      <input type="hidden" name="email" value=<?php echo $data['admin']->email; ?>>
      <input type="hidden" name="clave" value=<?php echo $data['admin']->clave; ?>>
      <input type="hidden" name="olvido_clave" value=<?php $data['admin']->olvido_clave; ?>>

      <label for="inputPassword" class="sr-only">Nueva clave</label>
      <input type="password" name="nueva-clave" id="inputPassword" class="form-control" placeholder="Nueva clave" required>
      <label for="inputPassword2" class="sr-only">Confirmar clave</label>
      <input type="password" name="confirmar-clave" id="inputPassword2" class="form-control" placeholder="Confirmar clave" required>
      <div class="checkbox mb-3">
         <div>
            <?php echo Alert::show_msg(); ?>
         </div>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>
      <br>
      <a href=<?php echo URL.'login/olvide_clave'; ?>>Olvid&eacute; mi clave</a>
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2020 // 2M Web Development</p>

   </form>
</body>

</html>