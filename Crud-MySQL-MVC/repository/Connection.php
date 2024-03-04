<?php 

    class Connection{

        private $connection;

        public function __construct() {

            $dsn = "mysql:host=localhost:3306;dbname=crud_php_mvc";

            $connection = new PDO($dsn, "root", "1234");
        }
    }
?>