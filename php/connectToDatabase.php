<?php 


$conn = new mysqli("localhost", "root", "7535", "reg_db");
if ($conn->connect_error) {
die("Помилка підключення: " . $conn->connect_error);
}

?>
