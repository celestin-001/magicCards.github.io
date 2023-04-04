<header>



    <?php



    if(isset($_SESSION['granted'] ) && $_SESSION['granted']){?>
        <a href="shop.php" role="button" class="href add-class"><span class="shop">Shop</span></a>
        <div class="space"></div>
        <a href="cards.php"><img src="../../images/panier.png" height="80px" id="panier"></a>
        <form id="form-select">
            <select id="select" name="select" class="add-class">


                <option selected disabled hidden="hidden" name="login"><?= $_SESSION['login'] ?></option>
                <option name="logout" style="color: black">Logout</option>



            </select>
        </form>
        <?php
    }
    else{?>

        <a href="browser.php" role="button" class="href add-class"><span class="shop">Browser</span></a>
        <div class="space"></div>
        <a href="login.php" class="href add-class"><span class="shop">Login</span></a><?php
    }

    ?>



</header>


