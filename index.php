<?php 
	# Stop Hacking attempt
	define('__APP__', TRUE);
	
	# Start session
    session_start();
	
	# Database connection
	include ("dbconn.php");
	
	# Variables MUST BE INTEGERS
    if(isset($_GET['menu'])) { $menu   = (int)$_GET['menu']; }
	if(isset($_GET['action'])) { $action   = (int)$_GET['action']; }
	
	# Variables MUST BE STRINGS A-Z
    if(!isset($_POST['_action_']))  { $_POST['_action_'] = FALSE;  }
	
	if (!isset($menu)) { $menu = 1; }
	
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <meta name="description" content="some description">
        <meta name="keywords" content="keyword 1, keyword 2, keyword 3, keyword 4, ...">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
		<link rel="stylesheet" href="style.css">
        
		
    <title>Crud app</title>
</head>
<body>
    <header>
            <div class="nav-container">
                <?php include("menu.php") ?>
            </div>
    </header> 
<main>
       <?php
       if (isset($_SESSION['message'])) {
        print $_SESSION['message'];
        unset($_SESSION['message']);
    }

# Homepage
if (!isset($menu) || $menu == 1) { include("home.php"); }

# News
else if ($menu == 2) { include("news.php"); }

# About
else if ($menu == 3) { include("about.php"); }

# About us
else if ($menu == 4) { include("contact.php"); }

# Register
else if ($menu == 5) { include("register.php"); }

# Signin
else if ($menu == 6) { include("signin.php"); }

# Admin webpage
else if ($menu == 7) { include("admin.php"); }
       ?>
        

</main>
<footer class="navbar fixed-bottom">
        <div class="container-fluid">
         <div class="footer-link">
             <?php
echo "<p>Copyright 2020 - " . date("Y") . " <a target='_blank' href='https://github.com/tkarnas/' >tkarnas</a> &copy;</p>";
?>  
</div>
        </div>
</footer>

</body>
</html>