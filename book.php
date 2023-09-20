<?php
	include("components/head.inc.php");
	include("server/secure.php");
?>

	<title> PCRepairs - Booking </title>
</head>

<body>
	<!-- Start your project here-->

	<header class="" style="height: 5%">
		<!-- Navbar -->
		<nav class="navbar navbar-expand-lg navbar-light fixed-top mask-custom shadow-0 p-0">
		<div class="container">
			<?php
				include('components/logo.inc.php');
			 	include('components/hamtoggler.php');
			?>

			<!-- Navbar items -->
			<div class="collapse navbar-collapse h5 fw-semibold"  id="navbarSupportedContent">
			<!-- Navbar Links -->
			<ul class="navbar-nav me-auto">
				<li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
				<li class="nav-item"><a class="nav-link" href="services.php">Services</a></li>
				<li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
				<li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
			</ul> <!-- Navbar Links -->

      <?php 
	  	// include('components/nav.rightside.inc.php'); 
		?>

			</div> <!-- Navbar items -->
		</div> <!-- container -->
		</nav> <!-- Navbar -->
	</header>

    <!-- Begin Page Content -->
	<?php include("components/book.section.inc.php") ?>
    <!-- End of Main Content -->

	<?php include("components/footer.inc.php"); ?>
	<?php include("components/logout.modal.inc.php"); ?>
	<?php include("components/scripts.inc.php"); ?>
	<!-- End your project here-->
</body>
</html>
