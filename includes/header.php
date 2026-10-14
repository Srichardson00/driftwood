<!DOCTYPE html>
<html dir="ltr" lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title><?php echo $title; ?></title>
		<meta name="description" content="<?php echo $description; ?>">
		<meta name="author" content="Seth Richardson">
		<link rel='icon' type='image/png' href='images/favicon-16x16.png'>
		<link rel='icon' type='image/png' href='images/favicon-32x32.png'>
		<link rel="stylesheet" href="styles/final.css?v=1.0">
		<link rel="stylesheet" href="styles/styles.css?v=1.0">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Recursive:wght@300..1000&display=swap" rel="stylesheet">
	</head>
	<body>
		<!-- This is the HTML for the page header. -->
		<header>
			<picture>
				<source media="(min-width: 60em)" srcset="images/driftwoodlogo.png">
				<source media="(min-width: 40em)" srcset="images/driftwoodlogo-300.png">
				<source media="(min-width: 20em)" srcset="images/driftwoodlogo-150.png">
				<img src="images/driftwoodlogo.png" alt="Logo for driftwood fish and chips. Shows a circle with a fish inside.">
			</picture>
			<h1><?php echo $mainheading; ?></h1>
		</header>
