<?php
if(!isset($_SESSION['username'])){
?>
<!-- navigation -->
<header class="navigation bg-tertiary">
	<nav class="navbar navbar-expand-xl navbar-light text-center py-3">
		<div class="container">
			<a class="navbar-brand" href="index.php">
				Pak Elite Stunting
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mx-auto mb-2 mb-lg-0">
					<li class="nav-item"> <a class="nav-link" href="index.php">Home</a>
					</li>
          <li class="nav-item"> <a class="nav-link" href="index.php">Accounts</a>
					</li>
          <li class="nav-item"> <a class="nav-link" href="#">Items</a>
					</li>
          <li class="nav-item"> <a class="nav-link" href="#">About Us</a>
					</li>
				</ul>
				<!-- account btn --> <a href="login.php" class="btn btn-primary ms-2 ms-lg-3" style="background-color: #44771b;">Start Selling</a>
		
			</div>
		</div>
	</nav>
</header>
<!-- /navigation -->
<?php
}
?>
<?php
include('connect.php');
if(isset($_SESSION['username'])){	
?>
<!-- navigation -->
<header class="navigation bg-tertiary">
	<nav class="navbar navbar-expand-xl navbar-light text-center py-3">
		<div class="container">
			<a class="navbar-brand" href="index.php">
				Game Trading
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mx-auto mb-2 mb-lg-0">
					<li class="nav-item"> <a class="nav-link" href="index.php">Home</a>
					</li>
          <li class="nav-item"> <a class="nav-link" href="accounts.php">Accounts</a>
					</li>
          <li class="nav-item"> <a class="nav-link" href="#">Items</a>
					</li>
          <li class="nav-item"> <a class="nav-link" href="#">About Us</a>
					</li>
				</ul>
				
				<!-- account btn --> <p>Logged in as:  <u><a href="profile.php?Profile=<?=$_SESSION['username'];?>"><?=$_SESSION['username'];?></a></u>
		<a href="logout.php" style="color:red;"><p><img src="images/logout.png" height="55px" width="55px" style="padding-left:2rem;">logout</p></a>
			</div>
		</div>
	</nav>
</header>
<!-- /navigation -->
<?php
}
?>
