<?php
	include_once("helpers/url.php");
	include_once("data/posts.php");
	include_once("data/categories.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Blog Studing PHP</title>
	<link rel="stylesheet" href="<?= $BASE_URL ?>css/styles.css" >
</head>
<body>
    <header>
        <a href="<?= $BASE_URL ?>" id="logo">
			<img src="<?= $BASE_URL ?>/img/logo.svg" alt="Blog Icone">
		</a>
		<nav>
			<ul id="navbar">
				<li><a href="<?= $BASE_URL ?>" class="nav-link">Home</a></li>
				<li><a href="#" class="nav-link">Categorias</a></li>
				<li><a href="#" class="nav-link">Sobre</a></li>
				<li><a href="<?= $BASE_URL ?>/contato.php" class="nav-link">Contato</a></li>
			</ul>
		</nav>
    </header>