// To include header footer on each page
async function loadComponent(id, file) {
  const response = await fetch(file);       // fetch the external HTML file
  document.getElementById(id).innerHTML =   // find the target element by id
    await response.text();                  // insert the fetched HTML content
}

loadComponent("header", "/header.html");     // load header.html into <div id="header">
loadComponent("footer", "/footer.html");     // load footer.html into <div id="footer">


//Calculator
function addition() {
  let num1 = parseFloat(document.getElementById("num1").value);
  let num2 = parseFloat(document.getElementById("num2").value);

  let sum = num1 + num2;

  document.getElementById("result").innerHTML = sum;
}


function substraction() {
  let num1 = parseFloat(document.getElementById("num1").value);
  let num2 = parseFloat(document.getElementById("num2").value);

  let diff = num1 - num2;

  document.getElementById("result").innerHTML = diff;
}

function multiply() {
  let num1 = parseFloat(document.getElementById("num1").value);
  let num2 = parseFloat(document.getElementById("num2").value);

  let mult = num1 * num2;

  document.getElementById("result").innerHTML = mult;
}


function division() {
  let num1 = parseFloat(document.getElementById("num1").value);
  let num2 = parseFloat(document.getElementById("num2").value);

  let div = num1 / num2;

  document.getElementById("result").innerHTML = div;
}


//Check Password & Show Password
function checkpwd() {
  let p1 = document.f1.password.value;
  let p2 = document.f1.cpassword.value;

  if (p1 == p2) {
    return true;
  }

  else {

    document.getElementById("demo").innerHTML = "Password Mismatch";
    document.getElementById("demo").style.color = "red";
    return false;
  }
}

function showpwd() {
  let x = document.getElementById("pwd");

  if (x.type == "password") {
    x.type = "text";
  }
  else {
    x.type = "password";
  }
}


//Rock Paper Scissor simple
// my move rock
function rock() {
  const randomNumber = Math.random();

  let computerMove = "";

  if (randomNumber >= 0 && randomNumber < 1 / 3) {
    computerMove = "Rock";
  } else if (randomNumber >= 1 / 3 && randomNumber < 2 / 3) {
    computerMove = "Paper";
  } else if (randomNumber >= 2 / 3 && randomNumber < 1) {
    computerMove = "Scissor";
  }

  let result = "";

  if (computerMove === "Rock") {
    result = "Tie";
  } else if (computerMove === "Paper") {
    result = "Computer Win";
  } else if (computerMove === "Scissor") {
    result = "You win";
  }

  document.getElementById("result").innerHTML = `You select Rock. Computer select ${computerMove}. Result: ${result}`;
}

// My Move Paper
function paper() {
  const randomNumber = Math.random();

  let computerMove = "";

  if (randomNumber >= 0 && randomNumber < 1 / 3) {
    computerMove = "Rock";
  } else if (randomNumber >= 1 / 3 && randomNumber < 2 / 3) {
    computerMove = "Paper";
  } else if (randomNumber >= 2 / 3 && randomNumber < 1) {
    computerMove = "Scissor";
  }

  let result = "";

  if (computerMove === "Rock") {
    result = "You Win";
  } else if (computerMove === "Paper") {
    result = "Tie";
  } else if (computerMove === "Scissor") {
    result = "Computer Win";
  }

  document.getElementById("result").innerHTML = `You select Paper. Computer select ${computerMove}. Result: ${result}`;
}

// My Move Scissor 
function scissor() {
  const randomNumber = Math.random();

  let computerMove = "";

  if (randomNumber >= 0 && randomNumber < 1 / 3) {
    computerMove = "Rock";
  } else if (randomNumber >= 1 / 3 && randomNumber < 2 / 3) {
    computerMove = "Paper";
  } else if (randomNumber >= 2 / 3 && randomNumber < 1) {
    computerMove = "Scissor";
  }

  let result = "";

  if (computerMove === "Rock") {
    result = "Computer Win";
  } else if (computerMove === "Paper") {
    result = "You Win";
  } else if (computerMove === "Scissor") {
    result = "Tie";
  }

  document.getElementById("result").innerHTML = `You select Scissor. Computer Select ${computerMove}. Result: ${result}`;

  // document.writeln(`You select Scissor. Computer select ${computerMove}. Result is ${result}`);
}


//Rock Paper Scissor with Graphics
function rockNew() {

  let score = JSON.parse(localStorage.getItem('score')) ||
    { wins: 0, losses: 0, ties: 0 };

  const randomNumber = Math.random();

  console.log(randomNumber);

  let computerMove = "";

  if (randomNumber >= 0 && randomNumber < 1 / 3) {
    computerMove = "Rock";
    document.getElementById("imgCompMove").src = "/images/rock.png"
  }
  else if (randomNumber >= 1 / 3 && randomNumber < 2 / 3) {
    computerMove = "Paper";
    document.getElementById("imgCompMove").src = "/images/paper.png";
  }
  else if (randomNumber >= 2 / 3 && randomNumber < 1) {
    computerMove = "Scissor";
    document.getElementById("imgCompMove").src = "/images/Scissors.png";
  }

  let result = "";

  if (computerMove === "Rock") {
    result = "Tie";
  }
  else if (computerMove === "Paper") {
    result = "You Lose";
  }
  else if (computerMove === "Scissor") {
    result = "You Win"
  }

  if (result == "You Win") {
    score.wins += 1;
  } else if (result == "You Lose") {
    score.losses += 1;
  } else if (result == "Tie") {
    score.ties += 1;
  }

  localStorage.setItem('score', JSON.stringify(score));

  document.getElementById("demo").innerHTML = `You Select Rock. Computer Select ${computerMove}. ${result}. Wins: ${score.wins}. Losses: ${score.losses}. Ties: ${score.ties}`;
}

function paperNew() {

  let score = JSON.parse(localStorage.getItem('score')) ||
    { wins: 0, losses: 0, ties: 0 };

  const randomNumber = Math.random();

  console.log(randomNumber);

  let computerMove = "";

  if (randomNumber >= 0 && randomNumber < 1 / 3) {
    computerMove = "Rock";
    document.getElementById("imgCompMove").src = "/images/rock.png"
  }
  else if (randomNumber >= 1 / 3 && randomNumber < 2 / 3) {
    computerMove = "Paper";
    document.getElementById("imgCompMove").src = "/images/paper.png";
  }
  else if (randomNumber >= 2 / 3 && randomNumber < 1) {
    computerMove = "Scissor";
    document.getElementById("imgCompMove").src = "/images/Scissors.png";
  }

  let result = "";

  if (computerMove === "Rock") {
    result = "You Win";
  }
  else if (computerMove === "Paper") {
    result = "Tie";
  }
  else if (computerMove === "Scissor") {
    result = "You Lose"
  }

  if (result == "You Win") {
    score.wins += 1;
  } else if (result == "You Lose") {
    score.losses += 1;
  } else if (result == "Tie") {
    score.ties += 1;
  }

  localStorage.setItem('score', JSON.stringify(score));

  document.getElementById("demo").innerHTML = `You Select Rock. Computer Select ${computerMove}. ${result}. Wins: ${score.wins}. Losses: ${score.losses}. Ties: ${score.ties}`;
}

function scissorNew() {

  let score = JSON.parse(localStorage.getItem('score')) ||
    { wins: 0, losses: 0, ties: 0 };

  const randomNumber = Math.random();

  console.log(randomNumber);

  let computerMove = "";

  if (randomNumber >= 0 && randomNumber < 1 / 3) {
    computerMove = "Rock";
    document.getElementById("imgCompMove").src = "/images/rock.png"
  }
  else if (randomNumber >= 1 / 3 && randomNumber < 2 / 3) {
    computerMove = "Paper";
    document.getElementById("imgCompMove").src = "/images/paper.png";
  }
  else if (randomNumber >= 2 / 3 && randomNumber < 1) {
    computerMove = "Scissor";
    document.getElementById("imgCompMove").src = "/images/Scissors.png";
  }

  let result = "";

  if (computerMove === "Rock") {
    result = "You Lose";
  }
  else if (computerMove === "Paper") {
    result = "You Win";
  }
  else if (computerMove === "Scissor") {
    result = "Tie"
  }

  if (result == "You Win") {
    score.wins += 1;
  } else if (result == "You Lose") {
    score.losses += 1;
  } else if (result == "Tie") {
    score.ties += 1;
  }

  localStorage.setItem('score', JSON.stringify(score));

  document.getElementById("demo").innerHTML = `You Select Rock. Computer Select ${computerMove}. ${result}. Wins: ${score.wins}. Losses: ${score.losses}. Ties: ${score.ties}`;
}


//Simple Quiz
function quizResult() {
  let score = 0;

  if (document.getElementById("correct1").checked) {
    score++;
  }
  if (document.getElementById("correct2").checked) {
    score++;
  }
  if (document.getElementById("correct3").checked) {
    score++;
  }

  document.getElementById("score").innerHTML = "Your score is: " + score;

  let percentage = score / 3 * 100;
  document.getElementById("percentage").innerHTML = "Your percentage is: " + percentage;
}



//Shopping cart
//cart
let cart = []; //global

function addCart(item, price) {
  let existingItem = cart.find(c => c.item === item); //local variable

  if (existingItem) {
    cart[i].quantity += 1;
  }
  cart.push({ item, price, quantity: 1 });
  renderCart(); //nested function
}

function renderCart() {
  let cartItem = document.getElementById('cartItems');
  cartItem.innerHTML = "";

  let totalPrice = document.getElementById('totalPrice');

  let total = 0;

  for (let i = 0; i <= cart.length; i++) {
    let li = document.createElement('li');
    li.textContent = `${cart[i].item} (x ${cart[i].quantity}): ${cart[i].price * cart[i].quantity}`;
    cartItem.appendChild(li);
    total = total + cart[i].price * cart[i].quantity;

    let btnIncrement = document.createElement('button');
    btnIncrement.textContent = '+';
    li.appendChild(btnIncrement);

    btnIncrement.onclick = () => {
      cart[i].quantity += 1;
      renderCart();
    }

    let btnDecrement = document.createElement('button');
    btnDecrement.textContent = '-';
    li.appendChild(btnDecrement);

    btnDecrement.onclick = () => {

      if (cart[i].quantity > 1) {
        cart[i].quantity -= 1;
      } else {
        cart.splice(i, 1);
      }
      renderCart();
    }
    totalPrice.innerHTML = 'Total Price: ' + total;
  }

}






