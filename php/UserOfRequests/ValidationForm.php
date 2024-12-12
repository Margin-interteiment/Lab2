<?php 

require_once '../php/TasksOfData/connectToDatabase.php';

$dbInstance = DatabaseConnection::getInstance();
$conn = $dbInstance->getConnection();



class FormValidation{

    private $errors = [];


    public function validate()
    {


        if (!empty($_POST['inputOfName'])) {
            $inputOfName = htmlspecialchars(trim($_POST['inputOfName']));
        } else {
            $this->errors[] = "Поле Ім'я обов'язкове для заповнення.";
        }

     
        if (!empty($_POST['selectOfGender'])) {
            $selectOfGender = htmlspecialchars($_POST['selectOfGender']);
        } else {
            $this->errors[] = "Поле Стать обов'язкове для заповнення.";
        }

        
        if (!empty($_POST['inputOfNum'])) {
            $inputOfNum = htmlspecialchars(trim($_POST['inputOfNum']));
        } else {
            $this->errors[] = "Поле Номер телефону обов'язкове для заповнення.";
        }

        
        if (!empty($_POST['inputOfEmail'])) {
            $inputOfEmail = htmlspecialchars(trim($_POST['inputOfEmail']));
        } else {
            $this->errors[] = "Поле Email обов'язкове для заповнення.";
        }

    }

    public function hasErrors()
    {
        return !empty($this->errors);
    }

    public function getErrors()
    {
        return $this->errors;
    }
}

// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     $validator = new FormValidation();
//     $validator->validate($_POST);

//     if ($validator->hasErrors()) {
//         foreach ($validator->getErrors() as $error) {
//             echo "<p style='color: red;'>$error</p>";
//         }
//     } else {
//         echo "Всі дані були заповнені вірно!.";
        
//     }
// }












?>