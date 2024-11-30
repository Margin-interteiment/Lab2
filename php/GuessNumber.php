<?php
//  Задача №1 

$counter = 0;

function playGame($countOfNum)
{
  $randomNumber = rand(1, 100);

  function validate($inputParam)
  {
    if ($inputParam != null) {
      echo "Дані введені коректно.Ведіть наступне число\n";
      return true;
    } else {
      echo "Дані введені не коректно.Ведіть правильні дані\n";
      return false;
    }
  }

  $playGameFull = function ($enterNum, $randomNum) use (&$counter) {
    if ($enterNum > $randomNum) {
      echo "Спробуй менше\n";
    } elseif ($enterNum < $randomNum) {
      echo "Спробуй більше\n";
    } elseif ($enterNum == $randomNum) {
      echo "Ви вгадали, вітаю! Ваша кількість спроб: $counter\n";
      exit;
    }
  };

  for ($counter = 0; $counter < $countOfNum; $counter++) {

    do {
      echo "Введіть Ваше число: ";
      $numOne = trim(fgets(STDIN));
    } while (!validate($numOne));

    $playGameFull($numOne, $randomNumber);

    if ($counter == $countOfNum - 1) {
      echo "Ви програли, правильне число було: $randomNumber\n";
    }
  }
}

playGame(7);
