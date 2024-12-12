<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);


require_once 'TasksOfData/connectToDatabase.php';

$dbInstance = DatabaseConnection::getInstance();
$conn = $dbInstance->getConnection();


require_once 'TasksOfData/delete.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

   
    $handler = new DeleteFromDatabase($conn);
    $handler->deleteRegistration($id);
} else {
    echo "ID не знайдено.";
}


?>