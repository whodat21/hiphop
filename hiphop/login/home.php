<?php
include 'db.inc.php';
session_start();

if(!isset($_SESSION['id'])) {
    header("Location: form.php");
}
$sql = "SELECT * FROM users WHERE id='".$_SESSION['id']."'";
$query = mysqli_query($sql);
$row = mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="main.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">
</head>

<body>
<script src="https://unpkg.com/swiper/js/swiper.min.js"></script>
<header>
    <div class="logo">
        <a href="index.html"><img class="graficlogo" src="logo-black.svg" alt="Logo"></a>
    </div>
    <nav class="topnav" id="myTopnav">
        <div class="nav-links">
            <a href="index.html">HOME</a>
            <a href="videos.html">VIDEOS</a>
            <a href="login/form.php">LOGIN</a>
            <a href="contact.html">CONTACT</a>
            <a href="about.html">ABOUT</a>
            <a href="location.html">LOCATION</a>
            <a href="location.html">SOMETHING</a>
            <a id="menu" href="javascript:void(0);" class="icon">&#9776;</a>
        </div>
    </nav>
</header>
<h2>Welcome <?php echo $row['username']; ?></h2>

<main>
    <!--------------------------------------------------------  !!!СЛАЙДЕР!!!  ------------------------------------------------------------>
    <div class="swiper-container" id="slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="https://i0.wp.com/sova.ponominalu.ru/wp-content/uploads/2019/08/qc.jpg?fit=1920%2C1080&ssl=1" alt="" class="mw-100">
            </div>
            <div class="swiper-slide">
                <img src="https://i.pinimg.com/originals/d8/73/9d/d8739d43bc93ad382750d46aa499df65.png" alt="" class="mw-100">
            </div>
            <div class="swiper-slide">
                <img src="https://i.pinimg.com/originals/fd/6b/fc/fd6bfc8f5af35d70444635eb575214fc.jpg" alt="" class="mw-100">
            </div>
            <div class="swiper-slide">
                <img src="https://images.complex.com/complex/images/c_limit,h_1080,w_1920/mmvwehc1ordq68e00vfn/drake-song-previews" alt="" class="mw-100">
            </div>
            <div class="swiper-slide">
                <img src="https://www.provokr.com/wp-content/uploads/2020/05/young-thug-lil-wayne-conflitto-outpump-1920x1080-1.jpg" alt="" class="mw-100">
            </div>
            <div class="swiper-slide">
                <img src="https://www.ps4wallpapers.com/wp-content/uploads/2020/03/2020-03-10_5e66f84a17563_00BAA9EC-F4C7-46D8-891A-CDE9A3CD128C.png" alt="" class="mw-100">
            </div>
        </div>

    </div>
    <!-------------------------------------------------  !!!НОВОСТИ!!!  ------------------------------------------------------------------->
    <div class="advantages_container">
        <div class="advantages">
            <div class="advantages_item">
                <img src="https://static.hiphopdx.com/2020/05/2020-05-08-drake-220x165.jpg" alt="">
                <h2>Drake's 10-Year Billboard Streak Broken By Kenny Chesney</h2>
                <p>The Boy was knocked off his course by a country singer.</p>
            </div>
            <div class="advantages_item">
                <img src="https://static.hiphopdx.com/2020/05/LeeorWild-CHIKA-3-1-220x165.jpg" alt="">
                <h2>Chika Admits She Was Initially Hesitant To Call Herself A Rapper — But Look At Her Now</h2>
                <p>The Alabama native's journey from viral Instagram rapper to Warner Music Group artist is nothing short of inspiring.</p>
            </div>
            <div class="advantages_item">
                <img src="https://static.hiphopdx.com/2019/12/eminem-nick-cannon-mariah-e1575602539758-220x165.jpg" alt="">
                <h2>Eminem Will Appear On Lil Wayne's 'Young Money Radio' Tonight</h2>
                <p>The interview follows Weezy's in-depth chat with Drake.</p>
            </div>
            <div class="advantages_item">
                <img src="https://static.hiphopdx.com/2020/05/200508-Ray-J-Princess-Love-getty-220x165.jpg" alt="">
                <h2>'Love & Hip Hop: Hollywood's' Princess Love Files For Divorce From Ray J</h2>
                <p>The couple just welcomed their second child in January but have been estranged in subsequent months.</p>
            </div>
            <div class="advantages_item">
                <img src="https://static.hiphopdx.com/2017/11/Jeezy-220x165.jpg" alt="">
                <h2>Jeezy Saluted By BMF's Southwest T Following 50 Cent's Blast</h2>
                <p>T just wanted to get in touch with Jeezy, and it looks like the mission has been accomplished.</p>
            </div>
            <div class="advantages_item">
                <img src="https://static.hiphopdx.com/2020/05/200507-Tekashi-6ix9ine-220x165.jpg" alt="">
                <h2>Tekashi 6ix9ine Apologizes For Snitching During Record-Breaking Instagram Live</h2>
                <p>He also blasts his haters, saying they "don't want to understand" why he did what he did.</p>
            </div>
        </div>
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
<script src="js/script.js"></script>
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
