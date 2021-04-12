<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<meta name="description" content="google details">
<meta name="keywords" content="HTML, CSS, JavaScript, PHP">
<meta name="author" content="Scott James">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Greeting Cards</title>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
<link rel=stylesheet type="text/css" href="styles.css">
</head>

<body>

<header>
  <!-- Header background image -->
  <div class="header-image"></div>

  <!-- Header parent element -->
  <div id="header-content">

    <!-- Navigation bar -->
    <nav>
      <ul>
        <li><a href="#contact">Contact</a></li>
        <li><a href="gallery.html">Gallery</a></li>
        <li><a href="#services">Services</a></li>
        <li><a href="index.html">Home</a></li>
      </ul>
    </nav>

    <!-- Header text -->
    <div class="header-text">
      <h1 class="animate__animated animate__fadeIn">Neque porro<br>
        <span>quisquam est qui dolorem</span>
          <br>ipsum quia dolor sit amet consectetur<br>
            <a href="#contact">Contact</a></h1>
    </div>

  </div>
</header>

<main>

  <!-- Parent element -->
  <div id="content">

    <!-- About element -->
    <div class="about">
      <div class="about-image"><img src="about.jpg"></div>
      <div class="about-text">
        <p><span>Hi there!</span>
        <br><br>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam non justo vel mauris volutpat bibendum id sit amet ligula. Mauris.</p></div>
    </div>

    <!-- Services element -->
    <div class="services" id="services">
      <div class="services-text"><h2><span>What</span> I do</h2><br><br><p><b>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam non justo vel mauris volutpat bibendum id sit amet ligula. Mauris.</b><br><br>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam non justo vel mauris volutpat bibendum id sit amet ligula. Mauris. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam non justo vel mauris volutpat bibendum id sit amet ligula. Mauris.</p>
        <a href="#contact">Contact</a></div>
      <div class="services-detailed">
        <i class="fas fa-splotch"></i><h2>Bespoke designs</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam non justo vel mauris volutpat bibendum id sit amet ligula. Mauris.</p><br>
        <i class="fas fa-splotch"></i><h2>Completely handmade</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam non justo vel mauris volutpat bibendum id sit amet ligula. Mauris.</p><br>
        <i class="fas fa-splotch"></i><h2>All occasions</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam non justo vel mauris volutpat bibendum id sit amet ligula. Mauris.</p>
      </div>
    </div>

    <!-- Awards element -->
    <div class="awards">
      <div class="awards-text"><h2>Award Winning Designs</h2><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam non justo vel mauris volutpat bibendum id sit amet ligula. Mauris.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam non justo vel mauris volutpat bibendum id sit amet ligula. Mauris.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam non justo vel mauris volutpat bibendum id sit amet ligula. Mauris.</p>
      <a href="gallery.html">Gallery</a></div>
      <div class="awards-image"><img src="magazines.png"></div>
    </div>
</main>
</div>

<footer>
    <div id="contact">
      <h3>GET IN CONTACT</h3>
      <p>Please use English language for your messages. If you have a problem with English, you can use <a href="https://translate.google.co.uk/" target="_blank">Google Translate</a></p>
      <form id="contact-form" action="form.php" method="POST">
        <input type="text" placeholder="Name" id="name" name="name" required>
        <input type="text" placeholder="Email" id="email" name="email" required>
        <textarea type="text" placeholder="Message..." id="message" name="message" rows="4"></textarea>
        <input type="submit" placeholder="submit" id="submit" name="submit" required>
      </form>
      <a href="https://www.facebook.com/pugcards1/" target="_blank"><i class='fab fa-facebook-square'></i></a>
    </div>
</footer>
</body>
</html>