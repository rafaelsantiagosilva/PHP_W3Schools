<!DOCTYPE html>
<html lang="pt-BR">
     <head>
          <meta charset="UTF-8" />
          <meta name="viewport" content="width=device-width, initial-scale=1.0" />
          <title>Formulários em PHP</title>
          <link
               rel="stylesheet"
               href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          />
     </head>
     <body class="container">
          <h1 class="text-center m-2 text-primary">Formulários em PHP</h1>

          <?php
          $userName = $_POST["name"];
          $userEmail = $_POST["email"];
          ?>

          <?php echo "<p class='bg-info p-2 rounded text-light'>Bem-vindo $userName! Seu email é $userEmail</p>" ?>

          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
     </body>
</html>
