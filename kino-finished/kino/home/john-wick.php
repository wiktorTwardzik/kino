<?php
include("includes/auth_session.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <title>Document</title>
</head>
<body>
    <header>
        <a href="index.php" class="logo">
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
                <img src="./img/wick.jpg" alt="">
                <div class="home-text">
                    <span>John wick</span>
                    <h1>John Wick 2</h1>
                    <a href="booking.php" class="btn">Book Now</a>
                </div>
            </div>
        </div>
    </section>
    <section class="desc-container">
        <h2 class="heading">Description</h2>
        <div class="desc">
            <p>In the film, retired hitman John Wick is forced back into his old life to fulfill a blood oath to crime lord Santino D'Antonio (Scamarcio). Following the box office success of the previous film, Stahelski and the first film's uncredited co-director David Leitch said a sequel film begun development in February 2015.</p>
        </div>
    </section>
    <section class="movies" id="movies">
        <h2 class="heading">More Movies</h2>
        <div class="movies-container">
            <div class="box">
                <div class="box-img">
                    <img src="./img/m1.jpg" alt="">
                </div>
                <h3><a href="dr-strange.php">Dr.Strange</h3>
                <span>120 min | Action</span>
                </a>
            </div>
          <div class="box">
              <div class="box-img">
                  <img src="./img/m5.jpg" alt="">
              </div>
              <h3><a href="aquman.php">Aquaman</h3>
                <span>120 min | Action</span>
                </a>
          </div>
          <div class="box">
              <div class="box-img">
                  <img src="./img/m6.jpg" alt="">
              </div>
              <h3><a href="panther.php">Black Panther</h3>
                <span>120 min | Thriller</span>
                </a>
          </div>
          <div class="box">
              <div class="box-img">
                  <img src="./img/m7.jpg" alt="">
              </div>
              <h3><a href="uncharted.php">Uncharted</h3>
                <span>120 min | Adventure</span>
                </a>
          </div>
  </section>
  <section class="footer">
    <a href="" class="logo">
        <i class="bx bxs-movie"></i>Cinema Village
    </a>
    <div class="social">
        <a href="https://www.facebook.com/facebook/?locale=pl_PL"><i class='bx bxl-facebook'></i></a>
        <a href="https://twitter.com/explore"><i class='bx bxl-twitter'></i></a>
        <a href="https://www.instagram.com/instagram/"><i class='bx bxl-instagram'></i></a>
    </div>
</section>

 <div class="copyright">
    <p>&#169;Cinema Village  ALl Right Reserved</p>
 </div>

  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  <script src="main.js"></script>
</body>
</html>