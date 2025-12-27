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

function showpwd(){
    let x = document.getElementById("pwd");

    if(x.type == "password")
    {
      x.type = "text";
    }
    else {
      x.type = "password";
    }
  }
