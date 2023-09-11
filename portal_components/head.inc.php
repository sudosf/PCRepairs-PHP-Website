<?php
	session_start();
	include("server/secure.php");
 
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
 ?>

<!-- Main Head for all pages -->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta http-equiv="x-ua-compatible" content="ie=edge" />
	<!-- MDB icon -->
	<link rel="icon" href="img/icons/logo.png" type="image/x-icon" />
	<!-- Font Awesome -->
	<link
	rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
	/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- Google Fonts Roboto -->
	<link
	rel="stylesheet"
	href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
	/>

	<link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet"
    >

	<!-- Custom styles for this page -->
	<link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
	<link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Bootstrap core CSS -->
	<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

	<!-- MDB -->
	<link rel="stylesheet" href="css/mdb.min.css"/>

	<style>
        .bg-grad-custom {
            background: #000046;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to left, #1196bb, #000046);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to left, #1196bb, #000046); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        }

		.bg-grad-login {
            background: #000046;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to left, #1196bb, #000046);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to left, #1196bb, #000046); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        }

    </style>
