<?php
if (isset($_POST["signUpBtn"])) {

    //Grab the data frim the inputs
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $passwordConfirm = $_POST["confirm-password"];

    //Instantiate signupControl Class
    include "../connection.php";
    include "../Register/register-classes.php";
    include "../Register/register-controle-classes.php";
    $signup = new registerControle($name,$email,$password,$passwordConfirm);

    //Check if there are errors
    $signup->confirmationOfSingnUp();

    header("Location: ../Register/register.php?error=none");
}
