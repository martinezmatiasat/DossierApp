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
   <form class="form-signin" action=<?php echo URL . 'login/login'; ?> method="post">
      <input type="hidden" name="csrf_token" value=<?php echo $_SESSION['csrf_token']['token']; ?>>
      <img class="mb-4" src="../assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Inicio Sesión</h1>
      <input type="hidden" name="csrf_token" value=<?php echo $_SESSION['csrf_token']['token']; ?>>
      <label for="inputEmail" class="sr-only">Email</label>
      <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus>
      <label for="inputPassword" class="sr-only">Clave</label>
      <input type="password" name="clave" id="inputPassword" class="form-control" placeholder="Clave" required>
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