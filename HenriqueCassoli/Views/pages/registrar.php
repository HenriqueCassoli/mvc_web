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
         
         <div style="text-align:center" class="form-login">
              <h3>Crie sua conta!!!</h3>
               <form method="get">
                    <input type="text" name="nome" placeholder="seu nome....">
                     <input type="text" name="email" placeholder="email...">
                     <input type="password" name="senha" placeholder="senha....">
                     <input type="submit" name="acao" value="Criar conta">
                     <input type="hidden" name="registrar" value="registrar"/>
              </form>
             
         </div>
     </div>
</body>
</html>