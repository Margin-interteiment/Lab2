<?php 


class DatabaseConnection {

    private static $instance = null;
    private $connection;

    private function __construct() {

        $this->connection = new mysqli("localhost", "root", "7535", "reg_db");
    if ($this->connection->connect_error) {
    die("Помилка підключення: " . $this->connection->connect_error);
    }

    }

    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new DatabaseConnection();
        }
        return self::$instance;
    }

    public function getConnection() {
        return $this->connection;
    }

};

// $dbInstance = DatabaseConnection::getInstance();
// $conn = $dbInstance->getConnection();









?>
