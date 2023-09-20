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
	<div id="content-wrapper" class="container">

		<!-- Main Content -->
		<div id="content">

		<?php 
		require('server/util.php');
		// utility functions
		$util = new Util();
		$conn = $util->conn;

		$row = $_SESSION['userData'];
		$userID = $row['id'];

		$query = "SELECT * 
					FROM users
					WHERE id = '$userID'";
		$result = $util->getTableData($query);

		if ($result != false) {
			while ($row = mysqli_fetch_array($result)) {

				$profile_img = $row['profile_img'];
				echo "<div class='container mb-5'>
					<img src='uploads/$profile_img' class='w-25' alt='profile-picture'>
					</div>";
			}    
		} else {
			// operation failed
			echo "<div class='alert alert-danger my-2 p-2 text-center' role='alert'>
				unable to upload image to database, please try again later
			</div>";
		}
		?>
		
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" enctype="multipart/form-data">
			Select image to upload:
			<input type="file" name="fileToUpload" id="fileToUpload">
			<input type="submit" value="Upload Image" name="submit">
		</form>


		<?php
		if (isset($_POST['submit'])) {

			$target_dir = "uploads/";
			$filename = time(). basename($_FILES["fileToUpload"]["name"]);
			$target_file = $target_dir . $filename;
			$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

			$uploadOk = true;

			// Check if image file is a actual image or fake image
			$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
			if ($check !== false) {
				echo "File is an image - " . $check["mime"] . ".";
				$uploadOk = true;
			} else {
				echo "File is not an image.";
				$uploadOk = false;
			}

			// Allow certain file formats
			if ($imageFileType != "jpg" && $imageFileType != "png"
				&& $imageFileType != "jpeg" && $imageFileType != "gif" ) {
				echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
				$uploadOk = false;
			}

			if ($uploadOk == true) {
				// if everything is ok, try to upload file
				$result = move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
				if ($result == true) {
					echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
				} else {
					echo "Sorry, there was an error uploading your file.";
				}
				$uploadOk = false;
			} else {
				echo "Sorry, your file was not uploaded.";
			}

			// save file reference to database
			$query = "UPDATE users SET profile_img = '$filename'
			WHERE id = '$userID';";

			$result = $conn->query($query);

			if ($result == false) {
				// operation failed
				echo "<div class='alert alert-danger my-2 p-2 text-center' role='alert'>
					unable to upload image to database, please try again later
				</div>";
			} else {
				// operation successful
				// redirect to status.php
				$error_code = 0;
				$message = "profile picture successfully updated";
				
				// echo "<script>location.replace('status.php?error_code=$error_code&message=$message'); </script>";
			}
		}
		?>

		</div>
		<!-- End of Main Content -->

	</div> <!-- End of Content Wrapper -->

	<?php include("components/scripts.inc.php"); ?>
	<!-- End your project here-->
</body>
</html>
