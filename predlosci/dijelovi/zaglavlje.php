<!DOCTYPE html>
<html>
<head>
	<title>Oglasnik Poslova</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="css/core.css">
	<link rel="stylesheet" href="css/styles.css">
</head>
<body>
	<div class="container">
		<div class="header clearfix">
		    <nav>
		      <ul class="nav nav-pills pull-right">
		        <li role="presentation"><a href="index.php">Home</a></li>
		        <li role="presentation"><a href="napravi_novi.php">Napravi oglas</a></li>
		      </ul>
		    </nav>
		    <h3 class="text-muted"><?php echo NASLOV_APP; ?></h3>
		</div>

		<?php pokaziPoruku(); ?>