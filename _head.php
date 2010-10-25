<!DOCTYPE html>
<html class="no-js">
<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<link rel="stylesheet" href="reset.css" />
	<link rel="stylesheet" href="style.css" />
	<script src="modernizr-1.5.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script>
	<script>
$(function () {
	$('nav a').mouseover(function (ev) {
		$(this).animate({
			'letter-spacing': '0.5em'
		}, {queue: false});
	});
	$('nav a').mouseout(function (ev) {
		$(this).animate({
			'letter-spacing': '0em'
		}, {queue: false});
	});
});
	</script>
	<title>LAZERBERUS</title>
</head>
<body>
<div id="bgimg"><img src="laserbackground-web.jpg" alt="Laser Background Image" /></div>
<div id="everything">
<header>
	<a href="index.html"><div id="h1"><h1>LAZERBERUS</h1></div></a>
	<div id="subtitle">– das Blog über unser Hochschulprojekt zum Thema Projektion –</div>
</header>
<nav>
	<img src="logo.png" alt="Logo Image"/>
	<ul>
		<li><a href="about.html">über uns</a></li>
		<li><a href="photos.html">Fotos</a></li>
	</ul>
</nav>
<div id="content">
