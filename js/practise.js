"use strict";

// Виконання завдання №1

(function InvokedFunc() {
  console.log(window.clientInformation.userAgent);
})();

// Виконання завдання №2

const arrayOfStudent = [
  { firstName: "Noana", lastName: "Miller", grade: 75 },
  { firstName: "Emily", lastName: "Carter", grade: 80 },
  { firstName: "Oliver", lastName: "Bennett", grade: 95 },
  { firstName: "Sophie", lastName: "Turner", grade: 65 },
  { firstName: "Liam", lastName: "Harrison", grade: 82 },
];

const resultOfStudent = arrayOfStudent.find((element) => element.grade === 80);
console.log(resultOfStudent);

// Виконання завдання №3

function multiplyAll(...num) {
  const sum = num.reduce((num1, num2) => num1 * num2);
  return sum;
}

console.log(`Загальна сума: ${multiplyAll(1, 3, 4)}`);

// Виконання завдання №4

const collectionOfSet = new Set([2, 4, 1, 2, 4, 6]);

for (const value of collectionOfSet) {
  console.log(`Set-колекція: ${value}`);
}

// Виконання завдання №5

const person = {
  age: 12,

  getAge() {
    return this.age;
  },
};

const child = {
  age: 23,
};

const resultOfObjects = person.getAge.bind(child);

console.log(`Вік: ${resultOfObjects()}`);

// Виконання завдання №6

const greeting = "Доброго дня";
const nameOfUsers = "Margo";

function createGreeting(greeting) {
  return function fullGreeting(nameOfUsers) {
    console.log(`${greeting}, ${nameOfUsers}`);
  };
}

createGreeting(greeting)(nameOfUsers);
