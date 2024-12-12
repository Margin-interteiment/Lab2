<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
$currentSort = isset($_GET['sort']) ? $_GET['sort'] : 'asc';
?>

<!DOCTYPE html>
<html lang="ua">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Результат</title>
  <link rel="stylesheet" href="../css/style.css">
  <script src="../js/sort.js" defer></script>
</head>

<body class="bg-black">



  <? include './php/header.php'; ?>


  <main class="main">

    <section class="result ">

      <div class="result__content text-white ">

        <?php include '../php/resultOfProgram.php'; ?>




        <div class="result__btn flex">
          <button type="submit"
            class="filter__btn bg-black text-white border-2 border-white p-5 w-[173px] h-[58px] transition-all duration-300 hover:bg-white hover:border-purple-500 hover:text-black flex items-center justify-center text-center mt-[30px] ml-[30px]"
            id="filter__btn" onclick="changeSortOrder('<?= $currentSort; ?>')">Фільтрувати</button>
          <button type="button"
            class="main__btn bg-black text-white border-2 border-white p-5 w-[173px] h-[58px] transition-all duration-300 hover:bg-white hover:border-purple-500 hover:text-black flex items-center justify-center text-center mt-[30px] ml-[30px]"
            id="main__btn">
            <a href="../index.html">На головну</a>
          </button>
        </div>
      </div>

    </section>


  </main>



</body>

</html>