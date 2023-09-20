<?php
	include("components/head.inc.php");
?>

	<title> Testing </title>
</head>

<body>


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
		
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" enctype="multipart/form-data">
			Select image to upload:
			<input type="file" name="fileToUpload" id="fileToUpload">
			<input type="submit" value="Upload Image" name="submit">
		</form>


		<?php
		// upload to database
		$row = $_SESSION['userData'];
		$username = $row['username'];

		echo $username;

		if (isset($_POST['submit'])) {
			require('server/util.php');
			// utility functions
			$util = new Util();
			$conn = $util->conn;

			$target_dir = "uploads/";
			$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
			$uploadOk = 1;
			$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

			// Check if image file is a actual image or fake image
			$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
			if ($check !== false) {
				echo "File is an image - " . $check["mime"] . ".";
				$uploadOk = 1;
			} else {
				echo "File is not an image.";
				$uploadOk = 0;
			}

			// Check if file already exists
			if (file_exists($target_file)) {
				echo "Sorry, file already exists.";
				$uploadOk = 0;
			}

			// Check file size
			// if ($_FILES["fileToUpload"]["size"] > 500000) {
			// 	echo "Sorry, your file is too large.";
			// 	$uploadOk = 0;
			// }

			// Allow certain file formats
			if ($imageFileType != "jpg" && $imageFileType != "png"
			 	&& $imageFileType != "jpeg" && $imageFileType != "gif" ) {
				echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
				$uploadOk = 0;
			}

			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
				echo "Sorry, your file was not uploaded.";
			} else {
				// if everything is ok, try to upload file
				if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
					echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
				} else {
					echo "Sorry, there was an error uploading your file.";
				}
			}

		}
		?>



		</div>
		<!-- End of Main Content -->

	</div> <!-- End of Content Wrapper -->

	<?php include("portal_components/scripts.inc.php"); ?>
	<!-- End your project here-->
</body>
</html>
