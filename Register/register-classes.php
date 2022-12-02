<?php
class register extends DataBase
{
    protected function checkUser($name, $email)
    {
        $stmt = $this->connect()->prepare("SELECT * FROM `users` WHERE name=? OR email=? ;");

        if (!$stmt->execute($name, $email)) {
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
