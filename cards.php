<?php
session_start();
use browser\Browser;
use Template\Template;

require_once 'Version_1/magic_Templates/Template.php';
require_once 'Version_1/browser/Browser.php';?>
<?php $t=new Browser('cards')?>


<?php ob_start(); ?>
<div id="selection">
    <h1>Cards:<span id="prize"></span></h1>
    <form method="post" action="cards.php">
    <button type="submit" class="update hidden" id="update">Update</button>


<div class="main" id="cards-shop">
<?php

$val=0;
$tab=[];

/*if(isset($_POST['number'])){

    foreach ($_POST['number'] as $number){

    }
}*/

if(isset($_POST['check'])){
    $i=-1;
    foreach ($_POST['check'] as $deco){
        $i++;
        $array=json_decode($deco,true);
        if(!empty($_SESSION['images'])){
            if(in_array($array['src'],$_SESSION['images'])){
                $j=0;
                while ($array['src']!=$_SESSION['images'][$j]){
                    $j++;
                }
                $_SESSION['number'][$j]=$_SESSION['number'][$j]+1;
            }
            else{
                $_SESSION['images'][]=$array['src'];
                $_SESSION['title'][]=$array['title'];
                $_SESSION['number'][]=1;
            }

        }
        else{
            $_SESSION['images'][]=$array['src'];
            $_SESSION['title'][]=$array['title'];
            $_SESSION['number'][]=1;
        }





    }
}
else if(isset($_POST['number'])){
 $i=-1;
    foreach($_POST['number'] as $number){
        $i++;
        $_SESSION['number'][$i]=$number;
    }

}
$j=0;
if(isset($_SESSION['number'])){

    foreach ($_SESSION['number'] as $session){

        if($session<=0){
            unset($_SESSION['images'][$j]);
            unset($_SESSION['number'][$j]);
            unset($_SESSION['title'][$j]);
            rsort($_SESSION['images']);
            rsort($_SESSION['number']);
            rsort($_SESSION['title']);
        }

        $j++;

    }
}

$i=-1;
if(isset($_SESSION['images'])){
foreach ($_SESSION['images'] as $src){
$i++;
if($_SESSION['number'][$i]>0){?>
    <div class="magic card-class" >
        <div id="image"><img src="<?= $src ?>" class="images"></div>
        <legend >
            <label class="title"><?= $_SESSION['title'][$i] ?></label>
            <input type="number" name="number[<?= $i ?>]" class="check prix" value="<?= $_SESSION['number'][$i]?>">
    </form><?php


    ?>

    </legend>

</div><?php

}

}
}






?>

</div>
</div>
<script src="prizes.js"></script>
<?php $content=ob_get_clean(); ?>
<?php Template::render($content); ?>
