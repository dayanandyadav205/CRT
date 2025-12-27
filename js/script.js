// To include header footer on each page
    async function loadComponent(id, file) {
      const response = await fetch(file);       // fetch the external HTML file
      document.getElementById(id).innerHTML =   // find the target element by id
        await response.text();                  // insert the fetched HTML content
    }

    loadComponent("header", "/header.html");     // load header.html into <div id="header">
    loadComponent("footer", "/footer.html");     // load footer.html into <div id="footer">
    