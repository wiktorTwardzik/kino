<?php
//include auth_session.php file on all user panel pages
include("includes/auth_session.php");
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="booking.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <script src="script.js" defer></script>
    <title>Movie Seat Booking</title>
  </head>
  <body>
    <header>
      <a href="index.php" class="logo">
        <i class='bx bxs-movie' ></i>Cinema Village
      </a>
      
      <div class="bx bx-menu" id="menu-icon"></div>
      <ul class="navbar">
        <li><a href="index.php" class="home-active">Home</a></li>
        <li><a href="index.php">Movies</a></li>
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
  <main id="form1">
  <div class="location-container" id="location">
    <form>  
    <label>Select city:</label>
    <select id="city">
      <option hidden selected>Select</option>
      <option >Gliwice</option>
      <option >Białystok</option>
      <option >Pehapowice</option>
    </select>
  </div>
    <div class="movie-container" id="movie1">
    <label>Select movie:</label>
      <select id="movie">
        <option hidden selected>Select</option>
        <option value="10">Spider-Man: No Way Home ($10)</option>
        <option value="12">Dr.Strange ($12)</option>
        <option value="8">John Wick 2 ($8)</option>
        <option value="9">Aquaman ($9)</option>
        <option value="13">Black Panther ($13)</option>
        <option value="11">Uncharted ($11)</option>
      </select>
    </div>
    <label>Select time</label>
      <select class="time-container" id="time">
      <option hidden selected>Select</option>
        <option class="time">11:40</option>
        <option class="time">14:20</option>
        <option class="time">16:10</option>
      </select>  
    <ul class="showcase">
      <li>
        <div class="seat"></div>
        <small>N/A</small>
      </li>

      <li>
        <div class="seat selected"></div>
        <small>Selected</small>
      </li>

      <li>
        <div class="seat occupied"></div>
        <small>Occupied</small>
      </li>
    </ul>

    <div class="container">
      <div class="screen"></div>
      <div class="row">
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
      </div>
      <div class="row">
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat occupied"></div>
        <div class="seat occupied"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
      </div>

      <div class="row">
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat occupied"></div>
        <div class="seat occupied"></div>
      </div>


      <div class="row">
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
      </div>

      <div class="row">
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat occupied"></div>
        <div class="seat occupied"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
      </div>

      <div class="row">
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat occupied"></div>
        <div class="seat occupied"></div>
        <div class="seat occupied"></div>
        <div class="seat"></div>
      </div>
    </div>

    <p class="text">
      You have selected <span id="count">0</span> seats for a price of $<span id="total">0</span>
    </p>
    <button type="button" id="SummaryButton">See Summary</button>
      </form>
      </main>
      <h2 id="display1" class="display">You have selected <a id="selectedmovie"></a> in <a id="selectedday"></a> at <a id="selectedhour"></a>.</h2>
        <h2 id="display2" class="display">You have bought <a id="ticketnumber"></a> tickets for <a id="ticketprice"></a>$</h2>
    <div class="copyright">
      <p>&#169;Cinema Village  ALl Right Reserved</p>
   </div>
  </body>
</html>
