<?php

namespace Template;






class Template
{
    public static function render($content):void{?>

        <!doctype html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <link href="../../others/cards.css" rel="stylesheet">
            <title>Magic store</title>
        </head>
        <body>


            <?php include "header.php"?>
            <div id="injected">
                <?php echo $content ?>
            </div>
            <?php include "footer.php"; ?>

            <script src="../../others/logout.js"></script>
        </body>

        </html>
        <?php
    }
}