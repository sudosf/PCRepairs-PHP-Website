<?php
	include("components/head.inc.php");
?>

	<title> Testing </title>
</head>

<style>
	.img-cover{
  		object-fit: cover;
  		object-position: center;
	}
</style>

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
         $to = "nkunaf.sf@gmail.com";
         $subject = "This is subject";
         
         $message = "<b>This is HTML message.</b>";
         $message .= "<h1>This is headline.</h1>";
         
         $header = "nkunaf.sf@gmail.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...".$retval;
         }
      ?>

		</div>
		<!-- End of Main Content -->

	</div> <!-- End of Content Wrapper -->

	<?php include("components/scripts.inc.php"); ?>
	<!-- End your project here-->
</body>
</html>
