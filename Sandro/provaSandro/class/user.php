<?php 
    require_once "./config/connect.php";
    $conn = new Connect;

    class Users extends Connect {
        public function searchDate() {  // LISTAR
            $stmt = $this->connection->prepare("SELECT * FROM users ORDER BY id ASC");

            $stmt->execute();

            $results = $stmt->fetchALL(PDO::FETCH_ASSOC);
            
            return $results;
        }

        public function insertUser($name, $email, $pass) {  // INSERIR
            $stmt = $this->connection->prepare("INSERT INTO users (nameBanc, emailBanc, passwordBanc) 
            VALUES (:NAME, :EMAIL, :PASS)");

            $stmt->bindParam(":NAME", $name);
            $stmt->bindParam(":EMAIL", $email);
            $stmt->bindParam(":PASS", $pass);

            $stmt->execute();

            return true;

            header("Location: ../index.php");
        }

        public function deleteUser($id) {
            $stmt = $this->connection->prepare("DELETE FROM users WHERE id = :ID");

            $stmt->bindParam(":ID", $id);

            $stmt->execute();

            header("Location: ../index.php");
        }

        public function updateUser($id, $newName, $newEmail, $newPass) {
            $stmt = $this->connection->prepare("UPDATE users SET nameBanc = :name, emailBanc = :email, passwordBanc = :password
            WHERE id = :id");
    
            $stmt->bindParam(":id", $id);
            $stmt->bindParam(":name", $newName);
            $stmt->bindParam(":email", $newEmail);
            $stmt->bindParam(":password", $newPass); 
        
            $stmt->execute();
        
            header("Location: ../index.php");
        }
    }   
?>