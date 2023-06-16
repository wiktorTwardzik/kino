<?php
include("includes/auth_session.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinema Village</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
</head>
<body>
    <header>
        <a href="#home" class="logo">
            <i class='bx bxs-movie' ></i>Cinema Village
        </a>
        <div class="bx bx-menu" id="menu-icon"></div>
        <ul class="navbar">
            <li><a href="#home" class="home-active">Home</a></li>
            <li><a href="#movies">Movies</a></li>
        </ul>
        <?php 
        if (isset($_SESSION['username'])){
            echo '<p>Signed as: '. $_SESSION['username'].' </p>';
            echo '<a href="logout.php" class="btn">Logout</a>';
        }else{
            echo '<a href="login.php" class="btn">Sign In</a>';

        }
        
        
        
        
        ?>
    </header>
    <section class="home swiper" id="home">
        <div class="swiper-wrapper">
            <div class="swiper-slide container">
                <img src="./img/home3.jpg" alt="">
                <div class="home-text">
                    <span>Marvel Universe</span>
                    <h1>Spider-Man: <br>No Way Home</h1>
                    <a href="booking.php" class="btn">Book Now</a>
                    <a href="spider-man.php" class="play">
                        <i class='bx bx-dollar'></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    </section>
    <section class="movies" id="movies">
      <h2 class="heading">Movies</h2>
      <div class="movies-container">
        <div class="box">
            <a href="dr-strange.html">
            <div class="box-img">
                <img src="./img/m1.jpg" alt="">
            </div>
            <h3>Dr.Strange</h3>
            <span>120 min | Action</span>
            </a>
        </div>
        <div class="box">
            <a href="john-wick.php">
            <div class="box-img">
                <img src="./img/m4.jpg" alt="">
            </div>
            <h3>John Wick</h3>
            <span>120 min | Adventure</span>
            </a>
        </div>
        <div class="box">
            <a href="aquman.php">
            <div class="box-img">
                <img src="./img/m5.jpg" alt="">
            </div>
            <h3>Aquaman</h3>
            <span>120 min | Action</span>
            </a>
        </div>
        <div class="box">
            <a href="panther.php">
            <div class="box-img">
                <img src="./img/m6.jpg" alt="">
            </div>
            <h3>Black Panther</h3>
            <span>120 min | Thriller</span>
            </a>
        </div>
        <div class="box">
            <a href="uncharted.php">
            <div class="box-img">
                <img src="./img/m7.jpg" alt="">
            </div>
            <h3>Uncharted</h3>
            <span>120 min | Adventure</span>
            </a>
        </div>
</section>

<section class="coming" id="coming">
    <h2 class="heading">Coming Soon</h2>
    <div class="coming-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide container">
                <img src="./img/home2.png" alt="">
                <div class="home-text">
                    <span>Marvel Universe</span>
                    <h1>Thor Love and Thunder<br></h1>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="footer">
    <a href="" class="logo">
        <i class="bx bxs-movie"></i>Cinema Village
    </a>
    <div class="social">
        <a href=""><i class='bx bxl-facebook'></i></a>
        <a href=""><i class='bx bxl-twitter'></i></a>
        <a href=""><i class='bx bxl-instagram'></i></a>
    </div>
</section>

 <div class="copyright">
    <p>&#169;Cinema Village  ALl Right Reserved</p>
 </div>

  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  <script src="main.js"></script>

</body>
</html>