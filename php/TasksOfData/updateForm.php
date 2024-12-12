 <?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);



// include '../php/connectToDatabase.php';

require_once '../php/TasksOfData/connectToDatabase.php';

$dbInstance = DatabaseConnection::getInstance();
$conn = $dbInstance->getConnection();


class DatabaseHandler{

private $conn;

public function __construct($connection) {
    $this->conn = $connection;
}



public function updateToDB(){

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
    

        if (!empty($_POST['inputOfId'])) {
            $inputOfId = htmlspecialchars($_POST['inputOfId']);
        }
       
    

        $sql = $this->conn->prepare("UPDATE registration SET name = ?, gender = ?, countOfNFT = ?, email = ? WHERE id = ?");
        if (!$sql) {
            die("Помилка підготовки запиту: " . $this->conn->error);
        }
        $sql->bind_param("ssisi", $inputOfName, $selectOfGender, $inputOfNum, $inputOfEmail, $inputOfId);

       
        if ($sql->execute()) {
            echo "Дані успішно оновлені у базі!";
        } else {
            echo "Помилка: " . $sql->error;
        }

        $sql->close();
    } else {
        echo "Помилка: відсутні необхідні дані.";
    }



}
public function __destruct() {
    $this->conn->close();
}
};



// $dbHandler = new DatabaseHandler($conn);
// $dbHandler->updateToDB();






// updateToDBb($conn);



// include '../php/connectToDatabase.php';

// function updateToDBb() {
//     global $conn;

//     if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        
//         $inputOfId = intval($_POST['inputOfId']);
//     $inputOfName = htmlspecialchars($_POST['inputOfName']);
//     $selectOfGender = htmlspecialchars($_POST['selectOfGender']);
//     $inputOfNum = intval($_POST['inputOfNum']);
//     $inputOfEmail = htmlspecialchars($_POST['inputOfEmail']);
//         if ($inputOfId === 0 || !$inputOfName || !$selectOfGender || !$inputOfEmail) {
//             echo "Помилка: Всі обов'язкові поля мають бути заповнені!";
//             return;
//         }

        

       
//         $sql = $conn->prepare("UPDATE registration SET name = ?, gender = ?, countOfNFT = ?, email = ? WHERE id = $inputOfId");

//         if (!$sql) {
//             die("Помилка підготовки запиту: " . $conn->error);
//         }

//         $sql->bind_param("ssisi", $inputOfName, $selectOfGender, $inputOfNum, $inputOfEmail);

//         if ($sql->execute()) {
//             echo "Дані успішно оновлені у базі!";
//         } else {
//             echo "Помилка: " . $sql->error;
//         }

//         $sql->close();
//         $conn->close();
//     }
// }






?>





