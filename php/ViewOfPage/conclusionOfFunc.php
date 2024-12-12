<?php 
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');


// include 'connectToDatabase.php';

include 'filterFunction.php';




function conclusionOfFunction() {
    global $conn;

    $sql = "SELECT id, name, gender, countOfNFT, email, created_at FROM registration";
    $sql = filterParamsOfFunction($sql);
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        echo "<table class='border-collapse border border-gray-300 w-full mt-[40px]'>";
        echo "<tr>
                <th class='p-3 border border-gray-300'>ID</th>
                <th class='p-3 border border-gray-300'>Ім'я</th>
                <th class='p-3 border border-gray-300'>Стать</th>
                <th class='p-3 border border-gray-300'>Кількість NFT</th>
                <th class='p-3 border border-gray-300'>Email</th>
                <th class='p-3 border border-gray-300'>Поточний час</th>
                <th class='p-3 border border-gray-300'>Дії</th>
              </tr>";
    
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td class='p-3 border border-gray-300'>" . $row["id"] . "</td>
                    <td class='p-3 border border-gray-300'>" . $row["name"] . "</td>
                    <td class='p-3 border border-gray-300'>" . $row["gender"] . "</td>
                    <td class='p-3 border border-gray-300'>" . $row["countOfNFT"] . "</td>
                    <td class='p-3 border border-gray-300'>" . $row["email"] . "</td>
                    <td class='p-3 border border-gray-300'>" . $row["created_at"] . "</td>
                    <td class='p-3 border border-gray-300'>
    <a href='../update.php?id=" . $row["id"] . "' class='px-4 py-2  inline-block text-center'>Редагувати</a>
     <a href='./deleteAll.php?id=" . $row["id"] . "' class='px-4 py-2 text-red-500 inline-block text-center'>Видалити</a>
</td>

                  </tr>";
        }
    
        echo "</table>";
    } else {
        echo "Немає даних для відображення.";
    }
}







?>