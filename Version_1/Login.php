<?php

namespace Version_1;

class Login
{
    private string $login="nicky_larson";
    private string $password="marteau";
    public function generateLogin():void{?>
            <div id="generate">
                <form id="form" method="post">
                    <legend id="label" class="marge">Please Login</legend>
                    <input type="text" placeholder="username" name="login"  class="marge" autofocus>
                    <input type="password" placeholder="password" name="password" class="marge">
                    <button class="marge" id="button">Login</button>
                </form>
            </div>
            <?php

    }

    public function verification($login,$password):array{
        $result=null;
        $pass=null;
        $granted=false;
        $error=null;
        if($login==$this->login && $password==$this->password){
            $result=$login;
            $pass=$password;
            $granted=true;
        }
        else {
            if(empty($login)){
                $error="username is empty";
            }

            else if(empty($password)){
                $error="password is empty";
            }
            else{
                $error="Authentication failed";
            }

        }

        return array('result'=>$result,'pass'=>$pass,'granted'=>$granted,'error'=>$error);

    }

}

