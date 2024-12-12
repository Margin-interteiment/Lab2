"use strict";
class User {
  constructor(id, name, email) {
    this.id = id;
    this.name = name;
    this.email = email;
  }
}

class Librarian extends User {
  constructor(id, name, email) {
    super(id, name, email);
  }

  addBook() {}
  removeBook() {}
}

class Reader extends User {
  constructor(id, name, email) {
    super(id, name, email);
  }

  borrowBook(book) {
    if (!book.borrow()) {
      console.log("Користувач може взяти книгу, вона є в наяності");
    } else {
      console.log("Користувач не може взяти книгу");
    }
  }

  returnBook(loan) {
    if (loan.checkOfDate(new Date().toISOString().split("T")[0])) {
      console.log("Книга повернена вчасно");
    } else {
      console.log("Книга повернена не вчасно");
    }
  }
}

class Loan {
  constructor(book, reader, dueDate) {
    this.book = book;
    this.reader = reader;
    this.dueDate = dueDate;
  }

  checkOfDate(checkOfData) {
    const currentDate = new Date().toISOString().split("T")[0];
    const formattedCheckDate = new Date(checkOfData)
      .toISOString()
      .split("T")[0];

    if (formattedCheckDate === currentDate) {
      console.log("Дати співпали");
      return true;
    } else {
      console.log("Дати не співпали");
      return false;
    }
  }
}

class Book {
  constructor(title, author) {
    this.title = title;
    this.author = author;
    this.isAvailable = true;
  }

  borrow() {
    if (this.isAvailable) {
      this.isAvailable = false;
      console.log("Книга була взята із бібліотеки");
      return true;
    } else {
      return false;
    }
  }

  return() {
    if (!this.isAvailable) {
      this.isAvailable = true;
      console.log("Книга повернена в бібліотеку");
    }
  }
}

class Library extends Librarian {
  constructor(id, name, email) {
    super(id, name, email);
    this.booksOfLib = [];
    this.readerOfLib = [];
    this.loans = [];
  }

  addBook(book) {
    this.booksOfLib.push(book);
    console.log("Книга успішно додана до бібліотеки!");
  }

  removeBook(book) {
    const removeBooks = this.booksOfLib.indexOf(book);

    if (removeBooks > -1) {
      this.booksOfLib.splice(removeBooks, 1);
      console.log("Книга успішно видалена із бібліотеки!");
    } else {
      console.log("Такої книги не має!");
    }
  }

  addReaders(reader) {
    if (reader != null) {
      this.readerOfLib.push(reader);
      console.log("Нового читателя добавлено!");
    }
  }

  addLoan(loan) {
    this.loans.push(loan);
    console.log("Позика успішно додана!");
  }

  removeLoan(loan) {
    const index = this.loans.indexOf(loan);

    if (index > -1) {
      this.loans.splice(index, 1);
      console.log("Позика успішно видалена!");
    } else {
      console.log("Такої позики не має");
    }
  }
}

const lib1 = new Library(1, "Alex", "hd@gmail.com");
const reader1 = new Reader(2, "Yuki", "gj@gmail.com");
const book1 = new Book("Romeo", "K.N.Hodkins");
const loan1 = new Loan(book1, reader1, "2024-10-29");

loan1.checkOfDate("2024-10-29");

reader1.borrowBook(book1);
reader1.returnBook(loan1);

lib1.addBook(book1);
lib1.removeBook(book1);
lib1.addReaders(reader1);
lib1.addLoan(loan1);
lib1.removeLoan(loan1);
