<?php
	// This section defines the variables that will be used to
	// configure the page.
	$title = "Driftwoood Fish and Chips ingredients";
	$description = "Ingredients page for driftwood fish and chips. Highlighting the ingredients used at the restaurant." ;
	$author = "Seth Richardson" ;
	$mainheading = "Driftwood Fish and Chips" ;
	
	// This inserts the beginning part of the HTML into the page
	include "includes/header.php" ;

	// This inserts the HTML for the navigation into the page.
	include "includes/nav.php" ;
?>
<!-- Your HTML for the main content of the page will go here. -->
<main>
		<h2>
			Only the best ingredients
		</h2>
	<section>
		<picture>
			<source media="(min-width: 60em)" srcset="images/wholefish.webp">
			<source media="(min-width: 40em)" srcset="images/wholefish-700.webp">
			<source media="(min-width: 20em)" srcset="images/wholefish-500.webp">
			<img src="images/wholefish.jpg" alt="Fresh caught fish laying in a pile.">
		</picture>
		<h3>Pacific True Cod</h3>
		<p>
			At Driftwood Fish and Chips, we only use the best quality cod available. 
			It is freshly caught and never frozen, and it is caught less than 150 miles away from our location. 
			The wild-caught Pacific cod fishery is considered a smart choice through NOAA (National Oceanic and 
			Atmospheric Administration) fisheries. It is sustainably managed and responsibly harvested under U.S. 
			regulations.
		</p>
	</section>
	<section>
		<picture>
			<source media="(min-width: 60em)" srcset="images/clams.webp">
			<source media="(min-width: 40em)" srcset="images/clams-700.webp">
			<source media="(min-width: 20em)" srcset="images/clams-500.webp">
			<img src="images/clams.jpg" alt="Close up of manilla clams cooked in white wine and herbs.">
		</picture>
		<h3>Manilla Clams</h3>
		<p>
			Manilla clams offer a sweet and tender meat that has a distinct delicate flavor, 
			making it perfect for our clam chowder or just sauteed with white wine and herbs.
			We use manilla clams only from Taylor Shellfish where they are locally harvested. 
			Manilla clams have a fast growth rate and a high reproductive capacity which makes it a 
			great for a sustainable seafood choice. 
		</p>
	</section>
	<section>
		<picture>
			<source media="(min-width: 60em)" srcset="images/potatoOlsen.webp">
			<source media="(min-width: 40em)" srcset="images/potatoOlsen-700.webp">
			<source media="(min-width: 20em)" srcset="images/potatoOlsen-500.webp">
			<img src="images/potatoOlsen.jpg" alt="Six varieties of potatoes laid out on a gray cloth. One of the varities is labeld Norkotah Russet.">
		</picture>
		<h3>Kennebec Potatoes</h3>
		<p>
			We only use the finest Kennebec potatoes harvested from Olsen farms in Colville, WA. 
			Their smooth, creamy texture makes them one of the absolute best for our hand-cut French fries. 
			They are never sprayed with pesticides or fungicides and are raised organically. 
			Kennebec potatoes also have a long shelf, so they maintain their quality during storage, 
			and it helps eliminate the potential for food waste. 
		</p>
	</section>	
	</main>


<?php
	// This inserts the ending of the HTML into the page.
	include "includes/footer.php" ;
?>