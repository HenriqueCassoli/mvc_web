<?php

namespace HenriqueCassoli\Controllers;

class  RegistrarController {
    
      public function index(){
           if (isset($_post['registrar'])) {
                $nome=$_POST['nome'];
                $email=$_POST['email'];
                $senha=$_POST['senha'];
                
                if (filter_var( $email,FILTER_VALIDATE_EMAIL)) {
                    \HenriqueCassoli\Utilidades::alerta("email errado");
                    \HenriqueCassoli\Utilidades::redirect('\mvc_web\HenriqueCassoli\Views\pages\registrar.php');
                }else if (strlen($senha)<6) {
                    \HenriqueCassoli\Utilidades::alerta("senha curta");
                    \HenriqueCassoli\Utilidades::redirect('\mvc_web\HenriqueCassoli\Views\pages\registrar.php');
                }else if(\HenriqueCassoli\Models\UsuariosModel::emailExists($email)){
                    \HenriqueCassoli\Utilidades::alerta("email ja usado");
                    \HenriqueCassoli\Utilidades::redirect('\mvc_web\HenriqueCassoli\Views\pages\registrar.php');
                }else{
                     $senha=\HenriqueCassoli\Bcrypt::hash($senha);
                     $registro=\HenriqueCassoli\MySql::connect()->prepare("INSERT INTO `usuarios` Values ('',?,?,?)");
                     $registro->excute(array($nome,$email,$senha));

                     \HenriqueCassoli\Utilidades::alerta('registrado');
                     \HenriqueCassoli\Utilidades::redirect('\mvc_web\HenriqueCassoli\Views\pages');
                }
           }

          \HenriqueCassoli\Views\MainViews::render('Registrar');
        
      }


}


?>