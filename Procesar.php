<?php
 $error;
        if(!empty($_POST["nickname"])&& !empty($_POST["password"])){
            $nickname = $_POST["nickname"];;
            $password = $_POST["password"];
            if($nickname == "123" && $password == "asd"){
                echo "accedio";
                $error = "OK";
                header("location:   Menu.php");


            } else{

                echo"usuario o contraseña incorrectas"; 
                $error="Contraseña incorrecta";
            header("location:   index.php?error=$error");
            }


        }
        else {

                echo "los datos estan vacios";
                $error="Campos vacios";
                header("location:   index.php?error=$error");
        }

