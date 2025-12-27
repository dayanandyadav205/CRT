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

