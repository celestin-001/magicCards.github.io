<?php

namespace Browser;
class Browser
{
    private $cards;


    public function __construct($file)
    {

        $json = file_get_contents($file . '.json');
        $this->cards = json_decode($json);
    }

    public function generateCards(): void
    {?>


        <div id="selection">

            <h1><a href="login.php" >Please login to shop</a></h1>
            <form action="../../cards.php" method="post" autocomplete="off">


            <?php
            if(isset($_SESSION)){?>
                <div id="add-card">
                    <div id="sel">Selection:<span id="span">none</span></div>
                    <button id="add" type="submit" class="add-class">Add to card</button></div><?php
            }
            ?>

        <div id="cards" ><?php

        $i=-1;
        foreach ($this->cards as $card) {

        $i++;

        ?>

        <div class="magic leg">
        <div id="image"><img src="<?= $card->image_uris->small ?>" class="images"></div>
        <legend >
            <label class="title"><?= $card->name ?></label>
            <?php
            if(isset($_SESSION)){
                $value = array(
                    'src' => $card->image_uris->small,
                    'title' => $card->name
                );
                $json=json_encode($value);?>
                <input type="checkbox" name="check[<?= $i ?>]" class="check" value="<?= htmlspecialchars($json) ?>"><?php

            }
            ?>

        </legend>

        </div><?php
    }?>

        </div>
            </form>
        </div>




        <?php

        /*$i=-1;
        foreach ($this->cards as $card) {
            $i++;
            ?>

            <div id="cards" class="magic">
            <img src="<?= $card->image_uris->normal ?>" class="image">
            <legend >
                <label id="title"><?= $card->name ?></label>
            <?php
            if(isset($_SESSION)){?>
                <input type="checkbox" name="check[<?= $i ?>]" class="check"><?php
            }
            ?>

            </legend>

            </div><?php
        }*/
    }

}?>


