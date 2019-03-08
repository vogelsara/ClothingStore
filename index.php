<<<<<<< HEAD
<?php include ('includes/header.php') ?>
<body>
<?php 
	include('functions.php');

	if (!isLoggedIn()) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Clothing Store</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="homePage.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="cart.js"></script>
    <script>
        $(document).ready(function(){
            $("#dropbtn1").click(function(){
                $("#dropdown-content1").toggle();
            });
            $(".mainBody, h1, footer").click(function(){
                $("#dropdown-content1").hide();
            })
        });
    </script>
</head>
<body>
<header>
    <h1 id="headerh1">Clothing Store
    
		<!-- notification message -->
	<div class="inline">	<?php if (isset($_SESSION['success'])) : ?>
			
				
					<?php 
						//echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				
			
		<?php endif ?>
		<!-- logged in user information -->
		
			

			
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['username']; ?></strong>

					<small>
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<br>
						<a href="index.php?logout='1'" style="color: red;">logout</a>
					</small>

				<?php endif ?>
                </div>
			</h1>
                
	
    <a id="cartLink "href="cart.php"><i id="cart" class="fas fa-shopping-cart"></i></a>
    <nav>
        <div class="dropdown">
            <i id="dropbtn1" class="dropbtn fas fa-bars"></i>

        </div>
        <div id="dropdown-content1" class="dropdown-content">
            <a href="clothes.php">Clothes</a>
            <a href="accesories.php">Accesories</a>
            <a href="shoes.php">Shoes</a>
            <a href="register.php">Register</a>
        </div>
    </nav>
</header>
<div class="mainBody">
    <img src="clothingStoreImg.jpg" alt="imageHomePage">
    <h2>Our Values</h2>
    <p id= "valuesText">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium provident labore, repellendus voluptate alias quod, obcaecati vitae nihil distinctio ipsum accusamus! Nisi harum rem reprehenderit ipsam numquam voluptatum nostrum dicta?</p>
</div>
</body>
<?php include ('includes/footer.php') ?>
</html>

=======
<?php include ('includes/header.php') ?>
<body>
<!DOCTYPE html>
<html lang="en">
<body>
<header>
    
		<!-- notification message -->
	<div class="inline">	<?php if (isset($_SESSION['success'])) : ?>
			
				
					<?php 
						//echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				
			
		<?php endif ?>
		<!-- logged in user information -->

				<?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['username']; ?></strong>

					<small>
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<br>
						<a href="index.php?logout='1'" style="color: red;">logout</a>
					</small>

				<?php endif ?>
                </div>
			</h1>         
	
    <a id="cartLink "href="cart.php"><i id="cart" class="fas fa-shopping-cart"></i></a>
    <nav>
        <div class="dropdown">
            <i id="dropbtn1" class="dropbtn fas fa-bars"></i>

        </div>
        <div id="dropdown-content1" class="dropdown-content">
            <a href="clothes.php">Clothes</a>
            <a href="accesories.php">Accesories</a>
            <a href="shoes.php">Shoes</a>
            <a href="register.php">Register</a>
            <a href="newsletter.html">Subscribe for newsletter</a>
        </div>
    </nav>

</header>
<div class="mainBody">
      <img id="headerImage" src="clothingStoreImg.jpg" alt="imageHomePage">
        <img id="fullSizeImg" src="clothingStoreImg.jpg" alt="imageHomePage">
        <img id="croppedImg" src="croppedImg.png" alt="imageHomePage">

    <h2>Our Values</h2>
    <p id= "valuesText">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium provident labore, repellendus voluptate alias quod, obcaecati vitae nihil distinctio ipsum accusamus! Nisi harum rem reprehenderit ipsam numquam voluptatum nostrum dicta?</p>
</div>
</body>
<?php include ('includes/footer.php') ?>
</html>

>>>>>>> master
