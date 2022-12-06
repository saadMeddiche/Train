<?php
class register extends DataBase
{
    protected function setUser($name,$password, $email)
    {
        $stmt = $this->connect()->prepare("INSERT INTO `users`(`name`, `email`, `password`, `rank`) VALUES (?,?,?,?);");

        $haschPassWord = password_hash($password,PASSWORD_DEFAULT);

        //If it is failed
        if (!$stmt->execute(array($name, $email,$haschPassWord,'0'))) {
            $stmt = null;
            header("location:../Register/register.php");
            exit();
        }

        $stmt = null;

 
        

    }
    protected function checkUser($name, $email)
    {
        $stmt = $this->connect()->prepare("SELECT name FROM `users` WHERE name=? OR email=? ;");

        // If it is failed
        if (!$stmt->execute(array($name, $email))) {
            $stmt = null;
            header("location:../Register/register.php");
            exit();
        }
 
        $resultcheck;

        if ($stmt->rowCount() > 0) {
            $resultcheck = false;
        } else {
            $resultcheck = true;

        }

        return $resultcheck;

    }
}
