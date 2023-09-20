<?php
	include("components/head.inc.php");
?>

	<title> PCRepairs - Status </title>
</head>

<body>

	<input type="hidden" name="error_code" value="">
	<input type="hidden" name="message" value="">

	<!-- Start your project here-->

	<header class="container-fluid p-5" style="height: 5%">
		<!-- Navbar -->
		<nav class="container navbar navbar-expand navbar-light bg-white topbar fixed-top shadow">
		</nav>
	</header>

	<!-- Content Wrapper -->
	<div id="content-wrapper" class="container-fluid my-5">

		<!-- Main Content -->
		<div id="content">

			<?php

				$error_code = (int) $_REQUEST['error_code'];
				$message = $_REQUEST['message'];

				if (!$error_code && !$message) {
					echo "<script>location.replace('index.php'); </script>"; 
				}

				if ($error_code === 0) {
					// operation successful
					// success Text
					echo"
					<div class='text-center'>
						<div class='mx-auto display-2 fw-bold text-success' >Success!</div>
						<p class='lead text-gray-800 mb-5'>$message</p>
					</div>";
				} else {
					// operation failed
					// Error Text
					echo "
					<div class='text-center'>
						<div class='error mx-auto' data-text='Error'>Error</div>
						<p class='text-gray-500 mb-0'>$message</p>
					</div>";
				}

				echo "
				<div class='text-center'>
					<a class='btn btn-primary' href='dashboard.php'>&larr; Go to Dashboard</a>
					<br><br>
					<a class='text-dark' href='index.php'>&larr; Back to Home</a>
				</div>";
			
			?>
		</div> <!-- End of Main Content -->

	</div> <!-- End of Content Wrapper -->

	<?php include("components/footer.inc.php"); ?>
	<?php include("portal_components/logout.modal.inc.php"); ?>
	<?php include("portal_components/scripts.inc.php"); ?>
	<!-- End your project here-->
</body>
</html>
