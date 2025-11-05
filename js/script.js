
        // function to check Password
        function checkpwd() {
            var p1 = document.f1.password.value;
            var p2 = document.f1.cpassword.value;

            if (p1 == p2) {
                return true;
            }

            else {
                document.getElementById("pwdmsg").innerHTML = "Password Mismatch";
                document.getElementById("pwdmsg").style.color = "#f20f0fff";
                return false;
            }
        }


        // function Show Password
        function showpwd() {
            var x = document.getElementById("pwd");

            if (x.type === "password") {
                x.type = "text";
            }
            else {
                x.type = "password";
            }
        }
