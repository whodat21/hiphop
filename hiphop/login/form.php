
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="logstyle.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
</head>
<body>
    <script src="https://unpkg.com/swiper/js/swiper.min.js"></script>
    <header>
        <div class="logo">
            <a href="../index.html"><img class="graficlogo" src="../logo-black.svg" alt="Logo" style="opacity: 1;"></a>
        </div>

    </header>
    
<main>
<div class="loginbox">
    <h1>SIGNIN PANNEL</h1>
    <form method="POST" action="login.php">
        <p><i class="fa fa-user" aria-hidden="true"></i> user email</p>
        <input type="text" name="username" placeholder="Enter Email" autocomplete="off" id="username">
        <p><i class="fa fa-key" aria-hidden="true"></i> password</p>
        <input type="password" name="password" placeholder="Enter Password" autocomplete="off" id="password">
        <span class="eye" onclick="iconShowHide();">
            <i id="enable" class="fa fa-eye" aria-hidden="true"></i>
            <i id="disable" class="fa fa-eye-slash" aria-hidden="true"></i>
        </span>
        <button type="submit" name="loginbtn">LOGIN</button>
<!--        <input type="button" name="loginbtn" value="LOGIN">-->
        <a href="#">Forgotten Password?</a><br><br>
<!--        <form>-->
<!--            <input type="submit" name="registersbt" value="REGISTER">  -->
<!--        </form>-->
    </form>
</div>

</main>
<footer>
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

    function iconShowHide(){
        var x = document.getElementById("password");
        var y = document.getElementById("enable");
        var z = document.getElementById("disable");

        if (x.type === 'password'){
            x.type = "text";
            y.style.display ="block";
            z.style.display ="none";
        }else{
            x.type = "password";
            y.style.display ="none";
            z.style.display ="block";
        }
    }

</script>

</body>
</html>

