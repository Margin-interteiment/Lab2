<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

// include 'connectToDatabase.php';


require_once 'TasksOfData/connectToDatabase.php';

$dbInstance = DatabaseConnection::getInstance();
$conn = $dbInstance->getConnection();



class DeleteFromDatabase{

    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function deleteRegistration($id)
    {


        if (!is_numeric($id)) {
            echo "Невірний ID.";
            return;
        }

        $stmt = $this->conn->prepare("DELETE FROM registration WHERE id = ?");
        if (!$stmt) {
            echo "Помилка підготовки запиту: " . $this->conn->error;
            return;
        }

        $stmt->bind_param("i", $id);

        if ($stmt->execute()) {
            echo "Запис успішно видалено.";
        } else {
            echo "Помилка: " . $stmt->error;
        }

        $stmt->close();
    }



    public function __destruct()
    {
        $this->conn->close();
    }

    
}


if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

   
    $handler = new DeleteFromDatabase($conn);
    $handler->deleteRegistration($id);
} else {
    echo "ID не знайдено.";
}







// if (isset($_GET['id'])) {
//     $id = intval($_GET['id']); 

 
//     $stmt = $conn->prepare("DELETE FROM registration WHERE id = ?");
//     $stmt->bind_param("i", $id);

//     if ($stmt->execute()) {
//         echo "Запис успішно видалено.";
       
//     }
//      else {
        
//         echo "Помилка: " . $stmt->error;
//     }

//     $stmt->close();
// } else {
//     echo "ID не знайдено.";
// }

// $conn->close();







?>