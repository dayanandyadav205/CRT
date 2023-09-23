
function myFunction() {
    var x = document.getElementById("pwd");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }


 
  function validate()
  {
     
      var isFirstNameValid = true;

      if(document.getElementById("fname").value=="")
      {
        isFirstNameValid=false;
          document.getElementById("spnIsFirstNameValid").innerHTML="Please Enter User Name";
          document.getElementById("spnIsFirstNameValid").style.color="red";
      }
      else
      {
          return true;
      }

      if(isFirstNameValid==false)
      {
          return false;
      }
      else
      {
          return true;
      }
  }
