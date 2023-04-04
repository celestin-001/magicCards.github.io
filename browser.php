<?php

use browser\Browser;
use Template\Template;

require_once 'Version_1/magic_Templates/Template.php';
require_once 'Version_1/browser/Browser.php';
$t=new Browser('cards');?>
<?php ob_start(); ?>
<?php $t->generateCards();?>

<?php $content=ob_get_clean(); ?>
<?php Template::render($content); ?>
