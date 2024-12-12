const elementOfForm = document.getElementById("orderForm");
  



elementOfForm.addEventListener("submit", function (event) {
    const inputOfName = document.getElementById("inputOfName");
    const selectOfGender = document.getElementById("selectOfGender");
    const inputOfNum = document.getElementById("inputOfNum");
    const inputOfEmail = document.getElementById("inputOfEmail");
    const inputOfId = document.getElementById("inputOfId");
  
    const errorName = document.getElementById("errorName");
    const errorGender = document.getElementById("errorGender");
    const errorNum = document.getElementById("errorNum");
    const errorEmail = document.getElementById("errorEmail");
    const errorId = document.getElementById("errorId");
   

    let isValid = true;
  
  
    if (inputOfId.value.trim() === "" || isNaN(inputOfId.value.trim())) {
      errorId.textContent = "Будь ласка, введіть коректні дані для ID";
      errorId.style.color = "red";
      isValid = false;
  } else {
      errorId.textContent = "";
  }

    

    if (inputOfName.value.trim() === "") {
      errorName.textContent = "Будь ласка, введіть коректні ім'я та прізвище.";
      errorName.style.color = "red";
      isValid = false;
    } else {
      errorName.textContent = "";
    }
  
    
    if (selectOfGender.value.trim() === "") {
      errorGender.textContent = "Будь ласка, виберіть стать.";
      errorName.style.color = "red";
      isValid = false;
    } else {
      errorGender.textContent = "";
    }
  
    
    if (inputOfNum.value.trim() === "") {
      errorNum.textContent = "Будь ласка, виберіть коректні числові дані.";
      errorName.style.color = "red";
      isValid = false;
    } else {
      errorNum.textContent = "";
    }
  
   
    if (inputOfEmail.value.trim() === "") {
      errorEmail.textContent = "Будь ласка, введіть коректний email.";
      errorName.style.color = "red";                        
      isValid = false;
    } else {
      errorEmail.textContent = "";
    }
  
    
    if (!isValid) {
      event.preventDefault();
    }
  });
  












