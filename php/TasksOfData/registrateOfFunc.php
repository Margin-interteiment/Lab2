<?php 

// include '../php/connectToDatabase.php';

require_once '../php/TasksOfData/connectToDatabase.php';

$dbInstance = DatabaseConnection::getInstance();
$conn = $dbInstance->getConnection();


require_once '../php/UserOfRequests/ValidationForm.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $validator = new FormValidation();
    $validator->validate($_POST);

    if ($validator->hasErrors()) {
        foreach ($validator->getErrors() as $error) {
            echo "<p style='color: red;'>$error</p>";
        }
    }
}



class Registration {
 private $conn;

 public function __construct($conn) {
    $this->conn = $conn;
}

 public function registrationToDb() {

   

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
    

        $sql = $this->conn->prepare("INSERT INTO registration (name, gender, countOfNFT, email) VALUES (?, ?, ?, ?)");
        $sql->bind_param("ssis",  $inputOfName, $selectOfGender, $inputOfNum, $inputOfEmail); 
        
        
        if ($sql->execute()) {
            echo "Дані успішно додані до бази!";
        } else {
            echo "Помилка: " . $sql->error;
        }
        
        
        $sql->close();

        
    } else {
        echo "Помилка: Усі поля повинні бути заповнені!";
    }

    $this->conn->close();
}

};

// $registration = new Registration($conn);
// $registration->registrationToDb();


?>






