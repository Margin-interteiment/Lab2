<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
// include './php/connectToDatabase.php';

require_once './php/TasksOfData/connectToDatabase.php';

$dbInstance = DatabaseConnection::getInstance();
$conn = $dbInstance->getConnection();


$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

if ($id > 0) {
    $stmt = $conn->prepare("SELECT * FROM registration WHERE id = ?");
    $stmt->bind_param("i", $id); 
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        
        $row = $result->fetch_assoc();
    } else {
        echo "Даних не знайдено";
        exit;
    }
    $stmt->close();
} else {
    echo "Некоректний ID.";
    exit;
}
$conn->close();

?>








<!DOCTYPE html>
<html lang="ua">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Page</title>
    <link rel="stylesheet" href="/Lab2-master/css/style.css">
</head>
<body class="bg-black">

    <main class="main">

    <section class="bg-cover bg-center h-screen w-full mt-[100px]" style="background-image: url('/Lab2-master/images/bg.jpeg');">
        <div class="container">
          <div class="order__main flex items-center justify-between">
            <div class="order__title text-white text-[70px] max-w-[595px] relative left-[221px] animate-slideInLeft"> Сторінка для оновлення даних</div>
            <div class="order__content bg-black w-[573px] h-[659px] text-white font-bold py-2 px-4  transition-all duration-300 shadow-lg shadow-purple-500   relative bottom-[-186px] left-[63px] rounded-[5%] animate-slideInRight">
              <form class="order__form" action="php/updateFormAll.php" method="POST" id="orderForm">
  
                <h1 class="text-white text-[30px] border-b-2 border-white pb-[5px] w-[112px]">Update</h1>
               
                <div class="divOfId mt-[30px]">
                    <label class="text-white " for="inputOfName">Ваш id</label>
                    <input class="bg-transparent border-b-2 border-purple-500 w-full p-2 focus:outline-none text-white" type="number" name="inputOfId" id="inputOfId" value="<?php echo htmlspecialchars($row['id'])?>" >
                    <span class="errorMessage text-red-500 text-xs block mt-1" id="errorId"></span>
                  </div>
               
               
                <div class="divOfInput mt-[30px]">
                  <label class="text-white " for="inputOfName">Ваше ім'я та прізвище</label>
                  <input class="bg-transparent border-b-2 border-purple-500 w-full p-2 focus:outline-none text-white" type="text" name="inputOfName" id="inputOfName" value="<?php echo htmlspecialchars($row['name'])?>">
                  <span class="errorMessage text-red-500 text-xs block mt-1" id="errorName"></span>
                </div>


                <div class="divOfSelect mt-[30px]">
                 <label class="text-white" for="selectOfgender">Оберіть Вашу стать</label>
                 <select class="bg-black text-white border-b-2 border-purple-500 w-full focus:outline-none appearance-none p-2" name="selectOfGender" id="selectOfGender">
                     <option value="" class="text-white" disabled <?php echo empty($row['gender']) ? 'selected' : ''; ?> ></option>
                     <option value="male" class="text-white" <?php echo ($row['gender'] === 'Male') ? 'selected' : ''; ?>>Чоловіча</option>
                     <option value="female" class="text-white" <?php echo ($row['gender'] === 'Female') ? 'selected' : ''; ?>>Жіноча</option>
                 </select>
                 <span class="errorMessage text-red-500 text-xs block mt-1" id="errorGender"></span>
                </div>

                <div class="divOfNum mt-[30px]">
                  <label class="text-white" for="inputOfNum">Оберіть бажану кількість NFT</label>
                  <input class="bg-transparent border-b-2 border-purple-500 w-full p-2 focus:outline-none text-white" type="number" name="inputOfNum" id="inputOfNum" value="<?php echo htmlspecialchars($row['countOfNFT'])?>">
                  <span class="errorMessage text-red-500 text-xs block mt-1" id="errorNum" ></span>
                </div>
  
                <div class="divOfEmail mt-[30px]">
                  <label class="text-white" for="inputOfEmail">Ваш email</label>
                  <input class="bg-black text-white border-b-2 border-purple-500 w-full p-2 focus:outline-none" type="email" name="inputOfEmail" id="inputOfEmail" value="<?php echo htmlspecialchars($row['email'])?>">
                  <span class="errorMessage text-red-500 text-xs block mt-1" id="errorEmail"></span>
                </div>
                <div class="buttons flex">
                  <button class="bg-black text-white border-2 border-white p-5 w-[173px] h-[58px] transition-all duration-300 hover:bg-white hover:border-purple-500 hover:text-black flex items-center justify-center text-center mt-[30px]" id="btnSubmit" >Оновити</button>
                  <button class="bg-black text-white border-2 border-white p-5 w-[228px] h-[58px] transition-all duration-300 hover:bg-white hover:border-purple-500 hover:text-black flex items-center justify-center text-center mt-[30px] ml-[20px]" id="btnPage">
                    <a  href="php/result.php">Переглянути результат</a>
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
  
      </section>

    </main>

    <script src="js/main.js"></script>
    <script src="js/registration.js"></script>
</body>
</html>