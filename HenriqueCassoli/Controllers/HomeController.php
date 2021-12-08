<?php

namespace HenriqueCassoli\Controllers;

class HomeController {
    
      public function index(){
             if (isset($_SESSION['login'])) {
                 \HenriqueCassoli\Views\MainViews::render('home');
             }else {
                   if (isset($_post['login'])) {
                       $login = $_post['email'];
                       $senha = $_post['senha'];

                       $verifica=\HenriqueCassoli\MySql::connect()->prepare("SELECT * FROM usuarios WHERE = ?");
                       $verifica->execute(array($login));

                       if ($verifica->rowCount() == 0) {
                        \HenriqueCassoli\Utilidades::alerta('não existe usuario');
                        \HenriqueCassoli\Utilidades::redirect('\mvc_web\HenriqueCassoli\Views\pages');
                       }else{
                              $dados= $verifica->fetch();
                             $senhaBanco=$dados['senha'];
                             if(\HenriqueCassoli\Bcrypt::check($senha, $senhaBanco)){
                                 $_SESSION['login'] =$dados['email'];
                                 \HenriqueCassoli\Utilidades::alerta('senha errada');
                                 \HenriqueCassoli\Utilidades::redirect('\mvc_web\HenriqueCassoli\Views\pages');
                             }else {
                                \HenriqueCassoli\Utilidades::alerta('senha errada');
                                \HenriqueCassoli\Utilidades::redirect('\mvc_web\HenriqueCassoli\Views\pages');
                             }
                       }
                   }
                  \HenriqueCassoli\Views\MainViews::render('login');
             }
      }


}


?>