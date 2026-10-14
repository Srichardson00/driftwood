<?php
	// This section defines the variables that will be used to
	// configure the page.
	$title = "Driftwoood Fish and Chips main page";
	$description = "Business website for Driftwood Fish and Chips. Main page." ;
	$author = "Seth Richardson" ;
	$mainheading = "Driftwood Fish and Chips" ;
	
	// This inserts the beginning part of the HTML into the page
	include "includes/header.php" ;

	// This inserts the HTML for the navigation into the page.
	include "includes/nav.php" ;
?>
<!-- Your HTML for the main content of the page will go here. -->
	<main>
		<picture>
			<source media="(min-width: 60em)" srcset="images/bayfront.webp">
			<source media="(min-width: 40em)" srcset="images/bayfront-700.webp">
			<source media="(min-width: 20em)" srcset="images/bayfront-500.webp">
			<img src="images/bayfront.jpg" alt="Wide shot picutre of boats sitting in harbor overlooking a bridge.">
		</picture>
		<h2>Sustainable deliciousness</h2>
		<p>Serving thoughtful seafood offerings in a casual neighborhood setting.</p>
		<a href="onlineordering.php">Order Now</a>
		<picture>
			<source media="(min-width: 60em)" srcset="images/fishandchip.webp">
			<source media="(min-width: 40em)" srcset="images/fishandchip-700.webp">
			<source media="(min-width: 20em)" srcset="images/fishandchip-500.avif">
			<img src="images/fishandchip.jpg" alt="Beer battered fish and chips sitting on top of a piece of newspaper.">
		</picture>
		<h3>Our Values</h3>
		<p> Ethical sourcing, minimal waste. Community engagement, local support. Transparent practices, quality ingredients</p>
		<p>There's more to food then just taste.</p>
	</main>
	<figure>
		<picture>
			<source media="(min-width: 60em)" srcset="images/wholefish.webp">
			<source media="(min-width: 40em)" srcset="images/wholefish-700.webp">
			<source media="(min-width: 20em)" srcset="images/wholefish-500.webp">
			<img src="images/wholefish.jpg" alt="Fresh caught fish laying in a pile.">
		</picture>
		<picture>
			<source media="(min-width: 60em)" srcset="images/fishandchips2.webp">
			<source media="(min-width: 40em)" srcset="images/fishandchips2-700.webp">
			<source media="(min-width: 20em)" srcset="images/fishandchips2-500.webp">
			<img src="images/fishandchips2.jpg" alt="Two pieces of beer battered fish and chips on top of a pile of french fries.">
		</picture>
		<picture>
			<source media="(min-width: 60em)" srcset="images/Prawns.webp">
			<source media="(min-width: 40em)" srcset="images/Prawns-700.webp">
			<source media="(min-width: 20em)" srcset="images/Prawns-500.webp">
			<img src="images/Prawns.jpg" alt="Fresh red prawns just caught out of the ocean sitting in a pile.">
		</picture>
		<picture>
			<source media="(min-width: 60em)" srcset="images/potato.webp">
			<source media="(min-width: 40em)" srcset="images/potato-700.webp">
			<source media="(min-width: 20em)" srcset="images/potato-500.webp">
			<img src="images/potato.jpg" alt="Pile of raw yukon gold potatoes">
		</picture>
		<picture>
			<source media="(min-width: 60em)" srcset="images/parsley.webp">
			<source media="(min-width: 40em)" srcset="images/parsley-700.webp">
			<source media="(min-width: 20em)" srcset="images/parsley-500.webp">
			<img src="images/parsley.jpg" alt="Close up image of a bush of flat leaf parsely.">
		</picture>
		<picture>
			<source media="(min-width: 60em)" srcset="images/lemons.webp">
			<source media="(min-width: 40em)" srcset="images/lemons-700.webp">
			<source media="(min-width: 20em)" srcset="images/lemons-500.webp">
			<img src="images/lemons.jpg" alt="Close up image of grilled lemons cut in half.">
		</picture>
	</figure>
	<article>
		<h4>Things to know</h4>
		<aside>
			<h4>Hours</h4> 
			<p>Monday-Sunday 11am-9pm</p>
		</aside>
		<aside>
			<h4>Phone</h4>
			<p>(555) 555-FISH</p>
		</aside>
		<aside>
			<h4>Location</h4>
			<p>To Be Determined</p>
		</aside>
	</article>


<?php
	// This inserts the ending of the HTML into the page.
	include "includes/footer.php" ;
?>