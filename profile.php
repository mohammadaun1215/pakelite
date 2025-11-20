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
        .card mb-4 mb-lg-0
        {
            display: none!important;
        }
        </style>
</head>

<body>

<?php
include("header.php");
include('connect.php');
?>

<section style="background-color: #eee;">
  <div class="container py-5">
    <div class="row">
      <div class="col">
        <nav aria-label="breadcrumb" class="bg-body-tertiary rounded-3 p-3 mb-4">
          <ol class="breadcrumb mb-0">
          </ol>
        </nav>
      </div>
    </div>
<?php

// check if id exists
if (!isset($_GET['id'])) {
    die("No player selected.");
}

$id = intval($_GET['id']);

$query = mysqli_query($conn, "SELECT * FROM players WHERE Id = $id");

if (mysqli_num_rows($query) == 0) {
    die("Player not found.");
}

$player = mysqli_fetch_assoc($query);

$skinFile = $player['SkinID'];   // or $player[10] depending on your DB
$skinPath = "skins/" . $skinFile;



?>
    <div class="row">
      <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-body text-center">
            <img src="<?=$skinPath;?>.png" alt="avatar"
              class=" img-fluid" style="width: 80px;">
            <h5 class="my-3"><?=$player['Username'];?></h5>
            <p class="text-muted mb-1">Hours Played: <?=$player['Hours'];?></p>
            <p class="text-muted mb-4">Admin Level: <?=$player['Level'];?></p>
            <div class="d-flex justify-content-center mb-2">
              <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary">Join Game</button>
            </div>
          </div>
        </div>
        <div class="card mb-4 mb-lg-0">
          <div class="card-body p-0">
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Score</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?=$player['Score'];?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Kills</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?=$player['Kills'];?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Deaths</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?=$player['Deaths'];?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Money</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?=$player['Money'];?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Races Won</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?=$player['Raceswon'];?></p>
              </div>
            </div>
          </div>
        </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

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

