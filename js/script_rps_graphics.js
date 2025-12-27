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

