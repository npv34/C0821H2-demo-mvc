<?php
namespace App\Models;

use PDO;
use PDOException;

class Database
{
    private $username;
    private $password;

    public function __construct($username, $password)
    {
        $this->username = $username;
        $this->password = $password;
    }

    function connect() {
        try {
            return new PDO('mysql:host=127.0.0.1;dbname=library_laravel',$this->username,$this->password);
        }catch (PDOException $PDOException) {
            echo "loi database";
            exit();
        }
    }
}