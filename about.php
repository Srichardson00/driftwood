<?php
	// This section defines the variables that will be used to
	// configure the page.
	$title = "Driftwoood Fish and Chips about";
	$description = "The about section of the Driftwood fish and chips restaurant." ;
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
			<source media="(min-width: 60em)" srcset="images/Driftwood2.webp">
			<source media="(min-width: 40em)" srcset="images/Driftwood2-700.webp">
			<source media="(min-width: 20em)" srcset="images/Driftwood2-500.webp">
			<img src="images/driftwood.jpg" alt="Picture of driftwood laying on the beach with the ocean in the far background.">
		</picture>
		<h2>Who we are</h2>
		<p>
			At Driftwood Fish and Chips, we believe in more than just serving delicious seafood. 
			We source our seafood exclusively from certified sustainable fisheries that have minimal environmental 
			impact, so our oceans stay healthy for future generations. But the ocean is not our only concern to help minimize 
			landfill usage we also use 100% biodegradable packaging and all our produce is farmed using organic practices. 
		</p>
		<aside>
			<h3>
				We believe there is more to food then just flavor.
			</h3>
		</aside>
		<figure>
			<picture>
				<source media="(min-width: 60em)" srcset="images/fishandchips2.webp">
				<source media="(min-width: 40em)" srcset="images/fishandchips2-700.webp">
				<source media="(min-width: 20em)" srcset="images/fishandchips2-500.webp">
				<img src="images/fishandchips2.jpg" alt="Two pieces of beer battered fish and chips on top of a pile of french fries.">
			</picture>
			<picture>
				<source media="(min-width: 60em)" srcset="images/chowder.webp">
				<source media="(min-width: 40em)" srcset="images/chowder-700.webp">
				<source media="(min-width: 20em)" srcset="images/chowder-500.webp">
				<img src="images/chowder.jpg" alt="Top down picture of a bowl of new england style clam chowder. Garnished with bacon and parsley.">
			</picture>
		</figure>
	</main>

<?php
	// This inserts the ending of the HTML into the page.
	include "includes/footer.php" ;
?>