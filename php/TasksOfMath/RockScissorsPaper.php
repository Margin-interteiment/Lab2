<?php

//  Задача №2


$counterOfUser = 0;
$counterOfPc = 0;

function validate($userChoice, $arrayOfGame)
{
  if (in_array($userChoice, $arrayOfGame)) {
    echo "Дані введені коректно \n";
    return true;
  } else {
    echo "Дані введені не коректно \n";
    return false;
  }
}

function playRound()
{
  global $counterOfUser, $counterOfPc;

  $arrayOfGame = ["камінь", "ножиці", "папір"];

  echo "Введіть ваш вибір (камінь, ножиці, папір): ";
  $userChoice = trim(fgets(STDIN));
  $userChoice = strtolower($userChoice);

  if (!validate($userChoice, $arrayOfGame)) {
    return;
  }

  $pcFuncChoice = function ($array) {
    $pcChoice = $array[array_rand($array)];
    echo "Комп'ютер вибрав: $pcChoice\n";
    return $pcChoice;
  };


  $pcChoice = $pcFuncChoice($arrayOfGame);

  if ($pcChoice === $userChoice) {
    echo "Нічия!\n";
  } elseif (
    ($userChoice === "камінь" && $pcChoice === "ножиці") ||
    ($userChoice === "ножиці" && $pcChoice === "папір") ||
    ($userChoice === "папір" && $pcChoice === "камінь")
  ) {
    echo "Вітаю, Ви перемогли!\n";
    $counterOfUser++;
  } else {
    echo "Переміг компьютер!\n";
    $counterOfPc++;
  }
}

for ($counterOfGame = 0; $counterOfGame < 3; $counterOfGame++) {
  playRound();
}

echo "Кількість виграшів користувача: $counterOfUser\n";
echo "Кількість виграшів компьютера: $counterOfPc\n";
