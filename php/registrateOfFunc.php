<?php 

include '../php/connectToDatabase.php';



function registrationToDb() {

    global $conn;

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (!empty($_POST['inputOfName'])) {
        $inputOfName = htmlspecialchars($_POST['inputOfName']);
        }
       
        if (!empty($_POST['selectOfGender'])) {
            $selectOfGender = htmlspecialchars($_POST['selectOfGender']);
        }
    
        if (!empty($_POST['inputOfNum'])) {
            $inputOfNum = htmlspecialchars($_POST['inputOfNum']);
        }
    
        if (!empty($_POST['inputOfEmail'])) {
            $inputOfEmail = htmlspecialchars($_POST['inputOfEmail']);
        }
    

        $sql = $conn->prepare("INSERT INTO registration (name, gender, countOfNFT, email) VALUES (?, ?, ?, ?)");
        $sql->bind_param("ssis",  $inputOfName, $selectOfGender, $inputOfNum, $inputOfEmail); 
        
        
        if ($sql->execute()) {
            echo "Дані успішно додані до бази!";
        } else {
            echo "Помилка: " . $sql->error;
        }
        
        
        $sql->close();
        $conn->close();
        };


        



};



?>






