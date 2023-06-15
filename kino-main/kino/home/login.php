<?php 

include_once 'includes/db.php'

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
    <link rel="stylesheet" href="login.css">
	<link rel="stylesheet" type="text/css" href="slide navbar style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
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
    </header>
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">
		
		
			<div class="register" method="post">
			<?php
    require('includes/db.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);    // removes backslashes
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `users` WHERE username='$username'
                     AND password='$password'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows >= 1) {
            $_SESSION['username'] = $username;
            // Redirect to user dashboard page
            header("Location: index.php");
        } else {
            echo "
                  <h3>Incorrect Username/password.</h3><br/>
                  <a href='login.php'><button>Click here to Login again.</button></a>
                  ";
			
        }
    } else {
?>
    <form class="form" method="post" name="login">
	<label for="chk" aria-hidden="true">Login</label>
        <input type="text" class="login-input" name="username" placeholder="Username" autofocus="true" required/>
        <input type="password" class="login-input" name="password" placeholder="Password" required/>
        <button>Login</button>
		<a href="register.php"><button type="button">Register here</button><a>
        
  </form>
<?php
    }
?>
			</div>
	</div>
     <div class="copyright">
        <p>&#169;Cinema Village  ALl Right Reserved</p>
     </div>
</body>
</html>