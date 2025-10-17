// header.js
class MyHeader extends HTMLElement {
  connectedCallback() {
    this.innerHTML = `<header>

  <!-- Header -->
  <div class="header">
    <div class="header-left">
      <img src="images/cdgi.jpg" alt="CDGI Logo" width="100" height="100" />
    </div>

    <div class="header-center">
      <h1>Chameli Devi Group of Institutions, Indore</h1>
      <h2>Web Development</h2>
    </div>

    <div class="header-right">
      <img src="images/Dayanand.jpg" alt="GitHub" width="100" height="100" />
    </div>
  </div>

  <!-- Navigation Bar -->
  <div class="navbar">
      <a href="index.html"><img src="images/home.ico" alt=""></a>
      <a href="contact.html">Contact</a>
      <a href="login_admin.html">Admin Login</a>
      <a href="login_user.html">User Login</a>
      <a href="form.html">Sign Up</a>
  </div>
  
    </header>`;
  }
}
customElements.define('my-header', MyHeader);