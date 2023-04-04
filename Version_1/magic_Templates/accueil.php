<?php
?>
<div class="main"><?php
if(isset($_SESSION['login'] )){
$login = $_SESSION['login'] ;?>


    <h1>HI <?= $login ?>,</h1>
    <?php
}?>
<h1>WELCOME TO THE MAGIC STORE</h1>
    <img src="../../images/MagicLogo4.png">
</div>


