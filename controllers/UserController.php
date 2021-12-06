<?php


class UserController
{

    public function actionRegister(){
require_once (ROOT.'/view/register.php');
        return true;
    }
    public function actionSaveUser(){


        User::saveUser($_POST);
        return true;
    }
    public function actionLogin(){
        require_once (ROOT.'/view/login.php');
        return true;
    }
    public function actionAuth(){

        $user=User::getUserById($_POST['login'],$_POST['password']);
if ($user){
    $_SESSION['user']=$user;

    require_once (ROOT.'/view/cabinet.php');
    return true;
}
       return header('Location:login');
    }
    public function actionLogout(){
        if (isset($_SESSION)){
            session_unset();


        return header('Location:/nav');
        }
        return header('Location:/nav');
    }

}