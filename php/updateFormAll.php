<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

require_once '../php/TasksOfData/connectToDatabase.php';

$dbInstance = DatabaseConnection::getInstance();
$conn = $dbInstance->getConnection();


require_once '../php/TasksOfData/updateForm.php';

$dbHandler = new DatabaseHandler($conn);
$dbHandler->updateToDB();






?>