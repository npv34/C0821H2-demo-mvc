<?php
namespace App\Models;

use App\Models\Database;
use PDOException;

class CategoryModel
{
        private $pdo;

        public function __construct()
        {
            $database = new Database('root', '123456@Abc');
            $this->pdo = $database->connect();
        }

        function add($name) {
            try {
                $sql = "CALL addCategory(:name)";
                $stmt = $this->pdo->prepare($sql);
                $stmt->bindParam('name', $name);
                $stmt->execute();
            }catch (PDOException $PDOException) {
                echo $PDOException->getMessage();
                exit();
            }
        }

        function getAll() {
            try {
                $sql = "CALL getAll()";
                $stmt = $this->pdo->prepare($sql);
                $stmt->execute();
                return $stmt->fetchAll();
            }catch (PDOException $PDOException) {
                echo $PDOException->getMessage();
                exit();
            }
        }

        function destroy($id) {
            try {
                $sql = "DELETE FROM categories WHERE id = :id";
                $stmt = $this->pdo->prepare($sql);
                $stmt->bindParam('id', $id);
                $stmt->execute();
            }catch (PDOException $PDOException) {
                echo $PDOException->getMessage();
                exit();
            }
        }
}