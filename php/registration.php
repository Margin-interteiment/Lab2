<?php  

include '../php/connectToDatabase.php';


include '../php/registrateOfFunc.php';

registrationToDb();

// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     if (!empty($_POST['inputOfName'])) {
//         $inputOfName = htmlspecialchars($_POST['inputOfName']);
//     }

//     if (!empty($_POST['selectOfGender'])) {
//         $selectOfGender = htmlspecialchars($_POST['selectOfGender']);
//     }

//     if (!empty($_POST['inputOfNum'])) {
//         $inputOfNum = htmlspecialchars($_POST['inputOfNum']);
//     }

//     if (!empty($_POST['inputOfEmail'])) {
//         $inputOfEmail = htmlspecialchars($_POST['inputOfEmail']);
//     }



// $conn = new mysqli("localhost", "root", "7535", "reg_db");
// if ($conn->connect_error) {
// die("Помилка підключення: " . $conn->connect_error);
// }



// $sql = $conn->prepare("INSERT INTO registration (name, gender, countOfNFT, email) VALUES (?, ?, ?, ?)");
// $sql->bind_param("ssis",  $inputOfName, $selectOfGender, $inputOfNum, $inputOfEmail); 


// if ($sql->execute()) {
//     echo "Дані успішно додані!";
// } else {
//     echo "Помилка: " . $sql->error;
// }


// $sql->close();
// $conn->close();
// };
?>