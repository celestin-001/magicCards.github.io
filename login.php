<?php

use Template\Template;
use Version_1\Login;
require_once "Version_1/Login.php";
require_once 'Version_1/magic_Templates/Template.php';
session_start();
$log=new Login();
ob_start();

if(isset($_POST['login']) && isset($_POST['password'])){
    $login = $_POST['login'];
    $password=$_POST['password'];
    $m=$log->verification($login,$password);

    $_SESSION['login'] = $login ;
    $_SESSION['granted']=$m['granted'];

    if(isset($m['error'])){?>
        <div id="login">
        <div id="error" ><?= $m['error'] ?></div>
        <?php
    }
    $log->generateLogin();?></div><?php

    if($m['granted']){
        header("Location:shop.php");
    }


}else{
    $log->generateLogin();
}
$content=ob_get_clean();
Template::render($content);