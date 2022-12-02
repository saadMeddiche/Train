<?php
if (isset($_POST["signUpBtn"])) {

    //Grab the data frim the inputs
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $passwordConfirm = $_POQT["confirm-password"];

    //Instantiate signupControl Class
    include "../Register/register-controle-classes.php";
    $signup = new registerControle($name,$email,$password,$passwordConfirm);
}
