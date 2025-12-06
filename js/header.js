// header.js
class MyHeader extends HTMLElement {
  connectedCallback() {
    this.innerHTML = `<header>

<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">

</head>

  <!-- Header -->
  <div class="header">
    <div>
      <img src="images/iwt5.png" alt="IWT5 Logo"/>
    </div>

    <div>
      <h1>Internet and Web Technology</h1>
    </div>

     <div>
     
    </div>

 </div>
  <!-- Navigation Bar -->
  <div class="navbar">
          <a href="index.html"><i class="fa-solid fa-house"></i></a>
         
          <a href="login_admin.html">Admin Login</a>
          <a href="login_user.html">User Login</a>
          <a href="form.html">Sign Up</a>
           <a href="contact.html">Our Contact</a>
  </div>
  
    </header>`;
  }
}
customElements.define('my-header', MyHeader);