<?php

class registerControle
{
    private $name;
    private $email;
    private $password;
    private $passwordConfirm;

    public function __construct($name, $email, $password, $passwordConfirm)
    {
        $this->$name  = $name;
        $this->$email  = $email;
        $this->$password  = $password;
        $this->$passwordConfirm  = $passwordConfirm;
    }

    private function emptyInput()
    {

        $result;

        if (empty($this->$name) || $this->$email || $this->$password || $this->$passwordConfirm) {
            $result = false;
        } else {
            $result = true;
        }

        return $result;
    }

    private function invalideName()
    {
        $result;
        if(!preg_match("/^[a-zA-Z0-9]*$/",$this->$name))
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
        if(!filter_var($this->$email,FILTER_VALIDATE_EMAIL))
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

        if($this->$password !== $this->$passwordConfirm)
        {
            $result = false;
        }
        else
        {
            $result = true;
        }
        return $result;
    }

    

    private function confirmationOfTheName($id)
    {
        $result;

         connect()->prepare("SELECT * FROM `users` WHERE id='$id';");

        if($this->$name !== $this->$passwordConfirm)
        {
            $result = false;
        }
        else
        {
            $result = true;
        }
        return $result;
    }
}
