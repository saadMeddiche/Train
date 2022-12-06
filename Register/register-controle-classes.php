<?php

class registerControle extends register
{
    private $name;
    private $email;
    private $password;
    private $passwordConfirm;

    public function __construct($name, $email, $password, $passwordConfirm)
    {
        $this->name  = $name;
        $this->email  = $email;
        $this->password  = $password;
        $this->passwordConfirm  = $passwordConfirm;
    } 

    private function emptyInput()
    {

        $result;

        if (empty($this->name) || empty($this->email) || empty($this->password) || empty($this->passwordConfirm))
        {
            $result = false;
        } else {
            $result = true;
        }

        return $result;
    }

    private function invalideName()
    {
        $result;
        if(!preg_match("/^[a-zA-Z0-9]*$/",$this->name))
        {
            $result = false;
        }
        else
        {
            $result = true;
        }
        return $result;
    }

    private function invalideEmail()
    {
        $result;
        if(!filter_var($this->email,FILTER_VALIDATE_EMAIL))
        {
            $result = false;
        }
        else
        {
            $result = true;
        }
        return $result;
    }

    private function confirmationOfThePassword()
    {
        $result;

        if($this->password !== $this->passwordConfirm)
        {
            $result = false;
        }
        else
        {
            $result = true;
        }
        return $result;
    }

    private function confirmationOfTheName()
    { 

        
        if(!$this->checkUser($this->name , $this->email))
        {
            $result = false;
        }
        else
        {
            $result = true;
        }
        return $result;
    }

    public function confirmationOfSingnUp(){ 

        if($this->emptyInput()==false){
            header("Location:../Register/register.php?error=empty");
            exit();
        }

        if($this->invalideName()==false){
            header("Location:../Register/register.php?error=invalideName");
            exit();
        }

        if($this->invalideEmail()==false){
            header("Location:../Register/register.php?error=invalideEmail");
            exit();
        }

        if($this->invalideEmail()==false){
            header("Location:../Register/register.php?error=confirmationOfThePassword");
            exit();
        }

        $this->setUser($this->name,$this->password,$this->email);
    }
}
