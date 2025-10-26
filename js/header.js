// header.js
class MyHeader extends HTMLElement {
  connectedCallback() {
    this.innerHTML = `<header>

<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
</head>

  <!-- Header -->
  <div class="header">
    <div>
      <img src="images/cdgi.jpg" alt="CDGI Logo" width="100" height="100" />
    </div>

    <div>
      <h1>Chameli Devi Group of Institutions, Indore</h1>
      <h2>Web Development</h2>
    </div>

    <div>

    </div>
 </div>
  <!-- Navigation Bar -->
  <div class="navbar">
          <a href="index.html"><i class="fa-solid fa-house"></i></a>
          <a href="contact.html">Contact Us</a>
          <a href="login_admin.html">Admin Login</a>
          <a href="login_user.html">User Login</a>
          <a href="form.html">Sign Up</a>
  </div>
  
    </header>`;
  }
}
customElements.define('my-header', MyHeader);