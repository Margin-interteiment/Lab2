const dropdown = document.getElementById("dropdown");
const cards = document.querySelectorAll(".artist__item");
const countOfElement = document.getElementById("count");

const mainForm = document.getElementById("main-form");

const formOfBtn = document.getElementById("form-btn-one");
const sectionOfArtists = document.getElementById("artists__inner");

const comOfInput = document.getElementById("comment");
const emaOfInput = document.getElementById("email");

const parentDiv = document.createElement("div");
parentDiv.style.display = "grid";
parentDiv.style.gridTemplateColumns = "repeat(3, 3fr)";
parentDiv.style.maxWidth = "1361px";
parentDiv.style.marginLeft = "190px";

const container = document.getElementById("container");
container.appendChild(parentDiv);

formOfBtn.addEventListener("click", function (event) {
  event.preventDefault();

  let feeldOfInput = comOfInput.value;
  let emailOfInput = emaOfInput.value;
  let optOfSelect = dropdown.value;

  let newDiv = document.createElement("div");
  newDiv.classList.add("artist__item");

  let newImg = document.createElement("img");

  newImg.src = optOfSelect;
  newImg.style.width = "244px";
  newImg.style.height = "239px";
  newImg.style.display = "block";

  newImg.style.marginBottom = "87px";
  newImg.style.marginLeft = "7px";

  newDiv.style.display = "flex";
  newDiv.style.flexDirection = "column";
  newDiv.style.justifyContent = "center";
  newDiv.style.alignItems = "center";
  newDiv.style.color = "white";
  newDiv.style.border = "1px solid white";
  newDiv.style.maxWidth = "294px";
  newDiv.style.height = "432px";
  newDiv.style.marginTop = "20px";
  newDiv.style.marginLeft = "17px";

  let textNode = document.createElement("p");
  textNode.classList.add("comment");
  textNode.innerText = feeldOfInput;
  textNode.style.color = "white";
  textNode.style.position = "relative";
  textNode.style.top = "70%";
  newDiv.appendChild(textNode);

  let pOfEmail = document.createElement("p");
  pOfEmail.classList.add("emails");
  pOfEmail.innerText = emailOfInput;
  pOfEmail.style.color = "white";

  pOfEmail.style.position = "relative";
  pOfEmail.style.top = "70%";

  newDiv.appendChild(pOfEmail);

  let newFormBtn = document.createElement("button");

  newFormBtn.style.paddingRight = "32px";
  newFormBtn.style.paddingLeft = "26px";
  newFormBtn.style.paddingTop = "8px";
  newFormBtn.style.paddingBottom = "8px";
  newFormBtn.style.marginBottom = "12px";

  newFormBtn.innerText = "Remove";
  newFormBtn.style.border = "2px solid white";
  newFormBtn.style.color = "white";

  let cards = document.querySelectorAll(".artist__item");
  let cardsOfLength = "Кількість карток на сайті: " + [cards.length + 1];
  countOfElement.textContent = cardsOfLength;
  countOfElement.style.color = "white";
  countOfElement.style.marginLeft = "1300px";
  countOfElement.style.marginTop = "20px";

  newFormBtn.addEventListener("click", function () {
    newDiv.remove();
    let cardsOfLength = "Кількість карток на сайті: " + cards.length;
    countOfElement.textContent = cardsOfLength;
    countOfElement.style.color = "white";
  });

  mainForm.reset();

  newDiv.appendChild(newImg);
  newDiv.appendChild(newFormBtn);
  parentDiv.appendChild(newDiv);
  sectionOfArtists.appendChild("countOfElement");
});
