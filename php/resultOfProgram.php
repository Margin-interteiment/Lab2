<?php

// include './php/connectToDatabase.php';

// include '../php/connectToDatabase.php';

require_once '../php/TasksOfData/connectToDatabase.php';

$dbInstance = DatabaseConnection::getInstance();
$conn = $dbInstance->getConnection();


if (!$conn) {
    die("Ошибка: Подключение к базе данных не установлено.");
}

// include './php/conclusionOfFunc.php';

include '../php/ViewOfPage/conclusionOfFunc.php';


conclusionOfFunction();


// $conn = new mysqli("localhost", "root", "7535", "reg_db");
// if ($conn->connect_error) {
//     die("Помилка підключення: " . $conn->connect_error);
// }

// $sql = "SELECT id, name, gender, countOfNFT, email, created_at FROM registration";
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
//     echo "<table class='border-collapse border border-gray-300 w-full mt-[40px]'>";
//     echo "<tr>
//             <th class='p-3 border border-gray-300'>ID</th>
//             <th class='p-3 border border-gray-300'>Ім'я</th>
//             <th class='p-3 border border-gray-300'>Стать</th>
//             <th class='p-3 border border-gray-300'>Кількість NFT</th>
//             <th class='p-3 border border-gray-300'>Email</th>
//             <th class='p-3 border border-gray-300'>Поточний час</th>
//           </tr>";

//     while ($row = $result->fetch_assoc()) {
//         echo "<tr>
//                 <td class='p-3 border border-gray-300'>" . $row["id"] . "</td>
//                 <td class='p-3 border border-gray-300'>" . $row["name"] . "</td>
//                 <td class='p-3 border border-gray-300'>" . $row["gender"] . "</td>
//                 <td class='p-3 border border-gray-300'>" . $row["countOfNFT"] . "</td>
//                 <td class='p-3 border border-gray-300'>" . $row["email"] . "</td>
//                 <td class='p-3 border border-gray-300'>" . $row["created_at"] . "</td>
//               </tr>";
//     }

//     echo "</table>";
// } else {
//     echo "Немає даних для відображення.";
// }

?>
