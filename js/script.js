// To include header footer on each page
    async function loadComponent(id, file) {
      const response = await fetch(file);       // fetch the external HTML file
      document.getElementById(id).innerHTML =   // find the target element by id
        await response.text();                  // insert the fetched HTML content
    }

    loadComponent("header", "/header.html");     // load header.html into <div id="header">
    loadComponent("footer", "/footer.html");     // load footer.html into <div id="footer">
  

 //js for pawd show
        function showpwd() {
            let pwd = document.getElementById('pwd');

            if (pwd.type == 'password') {
                pwd.type = 'text';
            }
            else {
                pwd.type = 'password';
            }
        }

        // js for pwd match
        function chkpwd() {
            let p1 = document.f1.password.value;
            let p2 = document.f1.cpassword.value;

            if (p1 == p2) {
                return true;
            }
            else {
                alert("Password Mismach");
                return false;
            }
        }