//Calculator
function addition(){

    let num1 =  parseFloat(document.getElementById("num1").value);

    let num2 = parseFloat(document.getElementById("num2").value);

    let sum = num1 + num2;

    document.getElementById("result").innerHTML = sum;
    }


    function substraction(){

    let num1 =  parseFloat(document.getElementById("num1").value);

    let num2 = parseFloat(document.getElementById("num2").value);

    let diff = num1 - num2;

    document.getElementById("result").innerHTML = diff;
    }

    function multiply(){

    let num1 =  parseFloat(document.getElementById("num1").value);

    let num2 = parseFloat(document.getElementById("num2").value);

    let mult = num1 * num2;

    document.getElementById("result").innerHTML = mult;
    }


    function division(){

    let num1 =  parseFloat(document.getElementById("num1").value);

    let num2 = parseFloat(document.getElementById("num2").value);

    let div = num1 / num2;

    document.getElementById("result").innerHTML = div;
    }

