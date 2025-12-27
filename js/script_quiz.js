//Simple Quiz
 function quizResult(){
    let score = 0;

    if(document.getElementById("correct1").checked){
      score++;
    }
    if(document.getElementById("correct2").checked){
      score++;
    }
    if(document.getElementById("correct3").checked){
      score++;
    }

    document.getElementById("score").innerHTML = "Your score is: " +score;

    let percentage = score/3*100;
    document.getElementById("percentage").innerHTML ="Your percentage is: " +percentage;
  }
