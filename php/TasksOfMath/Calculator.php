<?php

// Задача №3 

function calculate()
{
  echo "Введіть Ваше перше число: \n";
  $numOne = trim(fgets(STDIN));

  echo "Введіть Ваше друге число: \n";
  $numTwo = trim(fgets(STDIN));

  echo "Оберіть дію, яку Ви б хотіли зробити.Приклади доступних дій: +, -, *, /, **, % \n";
  $operation = trim(fgets(STDIN));

  function validate($num1, $num2, $operator)
  {
    if (is_numeric($num1) && is_numeric($num2) && !empty($operator)) {
      echo "Дані введені коректно.\n";
      return true;
    } else {
      echo "Дані введено некоректно, спробуйте ще раз!\n";
      return false;
    }
  }

  if (!validate($numOne, $numTwo, $operation)) {
    return;
  }

  $funcOfPlus = function ($numOne, $numTwo) {
    return $numOne + $numTwo;
  };

  $funcOfMinus = function ($numOne, $numTwo) {
    return $numOne - $numTwo;
  };

  $funcOfMultiplication = function ($numOne, $numTwo) {
    return $numOne * $numTwo;
  };

  $funcOfDivision = function ($numOne, $numTwo) {
    if ($numTwo == 0) {
      return "Помилка: ділити на 0 не можна";
    }
    return $numOne / $numTwo;
  };

  $funcOfDegree = function ($numOne, $numTwo) {
    return $numOne ** $numTwo;
  };

  $funcOfRemainder = function ($numOne, $numTwo) {
    if ($numTwo == 0) {
      return "Помилка: ділити на 0 не можна";
    }
    return $numOne % $numTwo;
  };

  $result = null;

  switch ($operation) {
    case '+':
      $result = $funcOfPlus($numOne, $numTwo);
      break;
    case '-':
      $result = $funcOfMinus($numOne, $numTwo);
      break;
    case '*':
      $result = $funcOfMultiplication($numOne, $numTwo);
      break;
    case '/':
      $result = $funcOfDivision($numOne, $numTwo);
      break;
    case '**':
      $result = $funcOfDegree($numOne, $numTwo);
      break;
    case '%':
      $result = $funcOfRemainder($numOne, $numTwo);
      break;
    default:
      echo "Такої операції не знайдено, спробуйте ще раз\n";
      return;
  }

  echo "Результат: $result\n";
}

calculate();
