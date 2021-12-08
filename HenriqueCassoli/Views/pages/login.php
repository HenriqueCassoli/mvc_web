<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">      
      <link rel="stylesheet" href="/mvc_web/HenriqueCassoli/Views/estilos/style.css">
    <title>Login</title>
</head>
<body>
     <div class="sidebar"></div><!--sidebar-->

     <div class="form-container">
         <div class="logo-chamada-login">
              <h2>Henrique Cassoli</h2>
              <p>Lorem ipsum, or lipsum as it is </p>
         </div><!--logo-chamado-login--->
         
         <div class="form-login">
               <form method="POST">
                      <input type="text" name="email" placeholder="email...">
                     <input type="password" name="senha" placeholder="senha....">
                      <a class="ok"href="/mvc_web/HenriqueCassoli/Views/pages/home.php">logar!!!</a>
                     <input type="hidden" name="login">
              </form>
              <p><a href="/mvc_web/HenriqueCassoli/Views/pages/registrar.php">Criar Conta!</a></p>
         </div>
     </div>
</body>
</html>



