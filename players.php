<?php
session_start();

?>
<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="en-us">

<head>
	<meta charset="utf-8">
	<title>Pak Elite Stunting | Pakistani Samp Server</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
	<meta name="description" content="This is meta description">
	<meta name="author" content="Themefisher">
	<link rel="shortcut icon" href="#" type="image/x-icon">
	<link rel="icon" href="#" type="image/x-icon">
  
  <!-- theme meta -->
  <meta name="theme-name" content="wallet" />

	<!-- # Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;700&display=swap" rel="stylesheet">

	<!-- # CSS Plugins -->
	<link rel="stylesheet" href="plugins/slick/slick.css">
	<link rel="stylesheet" href="plugins/font-awesome/fontawesome.min.css">
	<link rel="stylesheet" href="plugins/font-awesome/brands.css">
	<link rel="stylesheet" href="plugins/font-awesome/solid.css">

	<!-- # Main Style Sheet -->
	<link rel="stylesheet" href="css/style.css">

<style>
   @import url('https://fonts.googleapis.com/css?family=Poppins&display=swap');

body {
    background: #f2f2f2;
    font-family: 'Poppins', sans-serif;
}

.social-box .box {
    background: #FFF;
    border-radius: 10px; 
    cursor: pointer;
    margin: 20px 0;
    padding: 40px 10px;
    transition: all 0.5s ease-out;
}

.social-box .box:hover {
   box-shadow: 0 0 6px #4183D7;
}

.social-box .box-text {
    font-size: 15px;
    line-height: 30px;
    margin: 20px 0;
}

.social-box .box-btn a {
    color: #4183D7;
    font-size: 16px;
    text-decoration: none;
}

.social-box .fa {
    color: #4183D7;
}

.avatar-img {
    width: 80px;
    height: 80px;
    object-position: center top;
    border-radius: 55%;
    object-fit: cover;
    border:3px solid #059100ff;
    margin: 0 auto 15px auto; /* centers horizontally */
    display: block; /* required for auto margin centering */
}
.box {
    display: flex;
    flex-direction: column;
    align-items: center;
}
</style>
<script>

</script>
</head>

<body>

<?php
include("header.php");
include('connect.php');
?>

<div class="social-box">
    <div class="container">
     	<div class="row">
<?php
$fetch=mysqli_query($conn,"SELECT * FROM players");
while($row=mysqli_fetch_array($fetch)){
    $skinFile = $row[10];
    $skinPath = "skins/" . $skinFile;
?>
		    <div class="col-lg-4 col-xs-12 text-center">
				<div class="box">
                    <img src="<?=$skinPath;?>.png" class="avatar-img" alt="avatar" style='padding-top:-50px;'>
                    <i class="fa fa-behance fa-3x" aria-hidden="true"></i>
					<div class="box-title">
						<h3><?=$row[1];?></h3>
					</div>
					<div class="box-text">
						<span>Admin Level <?=$row[6];?></span>
					</div>
					<div class="box-btn">
					    <a href="#">View player's stats</a>
					</div>
				 </div>
			</div>	 
            <?php
}
?>
		</div>		
    </div>
</div>

<?php
include("footer.php");
?>

<!-- # JS Plugins -->
<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/bootstrap/bootstrap.min.js"></script>
<script src="plugins/slick/slick.min.js"></script>
<script src="plugins/scrollmenu/scrollmenu.min.js"></script>

<!-- Main Script -->
<script src="js/script.js"></script>

</body>
</html>

