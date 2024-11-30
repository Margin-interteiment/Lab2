<?php

//  Задача №1 

// $counter = 0;

// function playGame($countOfNum)
// {
//   $randomNumber = rand(1, 100);

//   function validate($inputParam)
//   {
//     if ($inputParam != null) {
//       echo "Дані введені коректно.Ведіть наступне число\n";
//       return true;
//     } else {
//       echo "Дані введені не коректно.Ведіть правильні дані\n";
//       return false;
//     }
//   }

//   $playGameFull = function ($enterNum, $randomNum) use (&$counter) {
//     if ($enterNum > $randomNum) {
//       echo "Спробуй менше\n";
//     } elseif ($enterNum < $randomNum) {
//       echo "Спробуй більше\n";
//     } elseif ($enterNum == $randomNum) {
//       echo "Ви вгадали, вітаю! Ваша кількість спроб: $counter\n";
//       exit;
//     }
//   };

//   for ($counter = 0; $counter < $countOfNum; $counter++) {

//     do {
//       echo "Введіть Ваше число: ";
//       $numOne = trim(fgets(STDIN));
//     } while (!validate($numOne));

//     $playGameFull($numOne, $randomNumber);

//     if ($counter == $countOfNum - 1) {
//       echo "Ви програли, правильне число було: $randomNumber\n";
//     }
//   }
// }

// playGame(7);


// Задача №3 

// function calculate()
// {
//   echo "Введіть Ваше перше число: \n";
//   $numOne = trim(fgets(STDIN));

//   echo "Введіть Ваше друге число: \n";
//   $numTwo = trim(fgets(STDIN));

//   echo "Оберіть дію, яку Ви б хотіли зробити.Приклади доступних дій: +, -, *, /, **, % \n";
//   $operation = trim(fgets(STDIN));

//   function validate($num1, $num2, $operator)
//   {
//     if (is_numeric($num1) && is_numeric($num2) && !empty($operator)) {
//       echo "Дані введені коректно.\n";
//       return true;
//     } else {
//       echo "Дані введено некоректно, спробуйте ще раз!\n";
//       return false;
//     }
//   }

//   if (!validate($numOne, $numTwo, $operation)) {
//     return;
//   }

//   $funcOfPlus = function ($numOne, $numTwo) {
//     return $numOne + $numTwo;
//   };

//   $funcOfMinus = function ($numOne, $numTwo) {
//     return $numOne - $numTwo;
//   };

//   $funcOfMultiplication = function ($numOne, $numTwo) {
//     return $numOne * $numTwo;
//   };

//   $funcOfDivision = function ($numOne, $numTwo) {
//     if ($numTwo == 0) {
//       return "Помилка: ділити на 0 не можна";
//     }
//     return $numOne / $numTwo;
//   };

//   $funcOfDegree = function ($numOne, $numTwo) {
//     return $numOne ** $numTwo;
//   };

//   $funcOfRemainder = function ($numOne, $numTwo) {
//     if ($numTwo == 0) {
//       return "Помилка: ділити на 0 не можна";
//     }
//     return $numOne % $numTwo;
//   };

//   $result = null;

//   switch ($operation) {
//     case '+':
//       $result = $funcOfPlus($numOne, $numTwo);
//       break;
//     case '-':
//       $result = $funcOfMinus($numOne, $numTwo);
//       break;
//     case '*':
//       $result = $funcOfMultiplication($numOne, $numTwo);
//       break;
//     case '/':
//       $result = $funcOfDivision($numOne, $numTwo);
//       break;
//     case '**':
//       $result = $funcOfDegree($numOne, $numTwo);
//       break;
//     case '%':
//       $result = $funcOfRemainder($numOne, $numTwo);
//       break;
//     default:
//       echo "Такої операції не знайдено, спробуйте ще раз\n";
//       return;
//   }

//   echo "Результат: $result\n";
// }

// calculate();



//  Задача №2


// $counterOfUser = 0;
// $counterOfPc = 0;

// function validate($userChoice, $arrayOfGame)
// {
//   if (in_array($userChoice, $arrayOfGame)) {
//     echo "Дані введені коректно \n";
//     return true;
//   } else {
//     echo "Дані введені не коректно \n";
//     return false;
//   }
// }

// function playRound()
// {
//   global $counterOfUser, $counterOfPc;

//   $arrayOfGame = ["камінь", "ножиці", "папір"];

//   echo "Введіть ваш вибір (камінь, ножиці, папір): ";
//   $userChoice = readline();
//   // $userChoice = trim(fgets(STDIN));
//   $userChoice = strtolower($userChoice);

//   var_dump($userChoice);

//   if (!validate($userChoice, $arrayOfGame)) {
//     return;
//   }

//   $pcFuncChoice = function ($array) {
//     $pcChoice = $array[array_rand($array)];
//     echo "Комп'ютер вибрав: $pcChoice\n";
//     return $pcChoice;
//   };


//   $pcChoice = $pcFuncChoice($arrayOfGame);

//   if ($pcChoice === $userChoice) {
//     echo "Нічия!\n";
//   } elseif (
//     ($userChoice === "камінь" && $pcChoice === "ножиці") ||
//     ($userChoice === "ножиці" && $pcChoice === "папір") ||
//     ($userChoice === "папір" && $pcChoice === "камінь")
//   ) {
//     echo "Вітаю, Ви перемогли!\n";
//     $counterOfUser++;
//   } else {
//     echo "Переміг компьютер!\n";
//     $counterOfPc++;
//   }
// }

// for ($counterOfGame = 0; $counterOfGame < 3; $counterOfGame++) {
//   playRound();
// }

// echo "Кількість виграшів користувача: $counterOfUser\n";
// echo "Кількість виграшів компьютера: $counterOfPc\n";