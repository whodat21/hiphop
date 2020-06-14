<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="constyle.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">
</head>

<body>
    <script src="https://unpkg.com/swiper/js/swiper.min.js"></script>
    <header>
        <div class="logo">
            <a href="index.html"><img class="graficlogo" src="../logo-black.svg" alt="Logo"></a>
        </div>
        <nav class="topnav" id="myTopnav">
            <div class="nav-links">
                <a href="../index.html">HOME</a>
                <a href="videos.html">VIDEOS</a>
                <a href="../login/form.php">LOGIN</a>
                <a href="contact.php">CONTACT</a>
                <a href="about.html">ABOUT</a>
                <a href="location.html">LOCATION</a>
                <a href="location.html">SOMETHING</a>
                <a id="menu" href="javascript:void(0);" class="icon">&#9776;</a>
                </div>
        </nav>
    </header>
    
<main>  
<div class="container">
    
    <h3>CONTACT FORM</h3>
<form action="check.php" method="post">
    <input type="email" name="email" placeholder="Type Your Email" autocomplete="off" class="form-control">
    <br>
    <textarea name="message" maxlength="100" rows="5" cols="50" placeholder="Type Your Message" autocomplete="off" class="form-control"></textarea>
    <br>
    <p>We will contact you in 24 hours</p>
    <br>
    <button type="submit" name="button" class="btn btn-success">Send</button>
    <br>
</form>
</div>


</main>
<footer>

    <!------------------------------------------  !!! ФУТЕР !!! ----------------------------------------------------------------->
    <div class="footer">
        <h4>This project made by Adil Rakhmetov and Miras Satybai.</h4>
        <p>The site was made solely for the purpose of studying web development. Address your all arising questions to developers (Miras and Adil).</p>
        <p>Contact and support us on</p>
          <p><a href="https://vk.com/playbabushkaboi">vk</a></p>
          <p><a href="https://www.instagram.com/adil_rkhm">instagram</a></p>
          <p><a href="https://twitter.com/">twitter</a></p>
        <p>Copyright © 2020 HipHopDXAll Rights Reserved</p>
      </div>
    
</footer>
    <script src="../js/script.js"></script>
    <script>
        var swiper = new Swiper('.swiper-container', {
          spaceBetween: 0,
          centeredSlides: true,
          autoplay: {
            delay: 4000,
            disableOnInteraction: false,
          },
          pagination: {
            el: '.swiper-pagination',
            clickable: true,
          },
          navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
          },
        });
      </script>
</body>
</html>