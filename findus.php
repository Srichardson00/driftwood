<?php
	// This section defines the variables that will be used to
	// configure the page.
	$title = "Driftwoood Fish and Chips location and hours page.";
	$description = "Hours of operation and map to locationfor Driftwood Fish and Chips.";
	$author = "Seth Richardson" ;
	$mainheading = "Driftwood Fish and Chips" ;
	
	// This inserts the beginning part of the HTML into the page
	include "includes/header.php" ;

	// This inserts the HTML for the navigation into the page.
	include "includes/nav.php" ;
?>
<!-- Your HTML for the main content of the page will go here. -->
<main class="find">
	<picture>
		<source media="(min-width: 60em)" srcset="images/fishandchips2.webp">
		<source media="(min-width: 40em)" srcset="images/fishandchips2-700.webp">
		 <source media="(min-width: 20em)" srcset="images/fishandchips2-500.webp">
		<img src="images/fishandchips2.jpg" alt="Two pieces of beer battered fish and chips on top of a pile of french fries.">
	</picture>
	<section>
		<h2>Visit us</h2>
		<h3>Location</h3>
		<p>To be determined</p>
		<h4>Hours</h4> 
		<p>Monday-Sunday 11am-9pm</p>
		<h4>Phone</h4>
		<p>(555) 555-FISH</p>
	</section>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1265508.979969174!2d-60.8469159361538!3d-51.72028159809483!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xbc2a89b94491e3a3%3A0x322aaaff8dd9c53a!2sFIQQ%201ZZ%2C%20Falkland%20Islands%20(Islas%20Malvinas)!5e0!3m2!1sen!2sus!4v1717605567637!5m2!1sen!2sus" 
			width="600" height="480" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	
</main>

<?php
	// This inserts the ending of the HTML into the page.
	include "includes/footer.php" ;
?>