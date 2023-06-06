<?php 
    class Connect {
        private $host = "localhost";
        private $user = "root";
        private $database = "cadastro_poo";
        private $pass;
        protected $connection;

        public function __construct() {
            $this->connectDatabase();
        }

        public function connectDatabase() {
            try {
                $this->connection = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->database, 
                $this->user, $this->pass);

            } catch (PDOException $e) {
                echo "Erro: " . $e->getMessage();
            }
        }

       /*  public function insert() {
            if(isset($_POST['submit'])) {
                echo "OK";
            }
        } */
    }
?>