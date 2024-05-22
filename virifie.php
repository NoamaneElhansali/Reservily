<?php
if(isset($_POST["signin"])){
    $email = $_POST["email"];
    $password = $_POST["password"];
    if(!empty($email) && !empty($password)){
        if($email == "admin@gmail.com" && $password == "admin"){
            session_start();
            $_SESSION["em_vl"] = "admin@gmail.com";
            header("location:index.php");
        }else{
            session_start();
            $mes = "<div class='alert alert-danger m-1' role='alert'>
                            email ou mot de passe invalid !!
                            </div>";
            $_SESSION["vi_us"] = $mes;
            header("location:authentication-login.php");
        }
    }else{
        session_start();
            $mes = "<div class='alert alert-danger m-1' role='alert'>
                            rempler tout les champ !!
                            </div>";
            $_SESSION["vi_us"] = $mes;
            header("location:authentication-login.php");
    }
}