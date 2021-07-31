<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Cabecera del documento -->
	<title><?=$title;?></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<style>
		body, h1, h2, h3, h4, h5, h6 { font-family: Arial, Helvetica, sans-serif; }
	</style>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-3TR3FE4K4J"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag(\'js\', new Date());

		gtag(\'config\', \'G-3TR3FE4K4J\');
	</script>
</head>
<body>
<header class="w3-hide-small" style="background-image: url('/core/templates/images/header.png'); height:120px; background-size: cover;">
    <h1 style="text-align:center; padding-top: 20px; margin:0px; font-family: Times New Roman;"><?=$title;?></h1>
</header>
<header class="w3-hide-medium w3-hide-large" style="background-image: url('/core/templates/images/header.png'); height: 80px; background-size: cover;">
	<h1 style="text-align:center; padding-top: 20px; margin:0px; font-family: Times New Roman;"><?=$title;?></h1>
</header>