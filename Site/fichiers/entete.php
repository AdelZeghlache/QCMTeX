<?php
	if(!isset($_SESSION['time'])) // si c'est une nouvelle session alors on supprime les anciens fichiers pour éviter de saturer le serveur de fichiers
		deleteAllOldFiles();
	$_SESSION['time'] = 0;
?>
<!doctype html>
<html>
	<head>
		<title><?php echo $title; ?></title>
		<meta charset="utf8">
		<link href='http://fonts.googleapis.com/css?family=Actor' rel='stylesheet' type='text/css'>
		<link href='dist/css/bootstrap.css' rel='stylesheet' type='text/css'>
		<link href='dist/css/style.css' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<header>
			<h1>QCMTeX</h1>
		</header>
		<section>
			<div role="tabpanel">
				<ul class="nav nav-tabs" role="tablist" id="myTab">
					<li role="presentation" <?php if($title =='QCMTeX  - Génération') echo 'class="active"'; ?> ><a href="index.php">Générer</a></li>
					<li role="presentation" <?php if($title =='QCMTeX  - Correction') echo 'class="active"'; ?> ><a href="correction.php">Corriger</a></li>
					<li role="presentation" ><a href="https://github.com/ChristopherBLESCHET/QCMTeX#qcmtex-projet-s3---iut-villetaneuse" target="_blank">Configuration du server</a></li>
				</ul>
				<div class="tab-content">	
					<div role="tabpanel" class="content">