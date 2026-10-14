<?php
	// This section defines the variables that will be used to
	// configure the page.
	$title = "Driftwoood Fish and Chips online ordering page";
	$description = "Online ordering page for Driftwood Fish and Chips.";
	$author = "Seth Richardson" ;
	$mainheading = "Driftwood Fish and Chips" ;
	
	// This inserts the beginning part of the HTML into the page
	include "includes/header.php" ;

	// This inserts the HTML for the navigation into the page.
	include "includes/nav.php" ;
?>
<!-- Your HTML for the main content of the page will go here. -->
<main class="slideshow">
	<picture class="slide">
		<source media="(min-width: 60em)" srcset="images/carrots2.webp">
		<source media="(min-width: 40em)" srcset="images/carrots-700.webp">
		<source media="(min-width: 20em)" srcset="images/carrots-500.webp">
		<img src="images/carrots.jpg" alt="Close up picture of carrots freshly pulled from the ground.">
	</picture>
	<picture class="slide">
			<source media="(min-width: 60em)" srcset="images/fishandchips2.webp">
			<source media="(min-width: 40em)" srcset="images/fishandchips2-700.webp">
			<source media="(min-width: 20em)" srcset="images/fishandchips2-500.webp">
			<img src="images/fishandchips2.jpg" alt="Two pieces of beer battered fish and chips on top of a pile of french fries.">
	</picture>
	<picture class="slide">
			<source media="(min-width: 60em)" srcset="images/halibut.webp">
			<source media="(min-width: 40em)" srcset="images/halibut-700.webp">
			<source media="(min-width: 20em)" srcset="images/halibut-500.webp">
			<img src="images/halibut.jpg" alt="Beer Battered halibut on newspaper wiht lemon wedges and a side of tartar sauce.">
	</picture>
	<picture class="slide">
			<source media="(min-width: 60em)" srcset="images/chowder.webp">
			<source media="(min-width: 40em)" srcset="images/chowder-700.webp">
			<source media="(min-width: 20em)" srcset="images/chowder-500.webp">
			<img src="images/chowder.jpg" alt="Top down picture of a bowl of new england style clam chowder. Garnished with bacon and parsley.">
	</picture>
	<picture class="slide">
			<source media="(min-width: 60em)" srcset="images/cioppino.webp">
			<source media="(min-width: 40em)" srcset="images/cioppino-700.webp">
			<source media="(min-width: 20em)" srcset="images/cioppino-500.webp">
			<img src="images/cioppino.jpg" alt="Top down picture of a cioppino with shrimp, clams, mussels in a tomato broth.">
	</picture>
	<picture class='slide'>
			<source media="(min-width: 60em)" srcset="images/Burgspec.webp">
			<source media="(min-width: 40em)" srcset="images/Burgspec-700.webp">
			<source media="(min-width: 20em)" srcset="images/Burgspec-500.webp">
			<img src="images/Burgspec.jpg" alt="Double cheeseburger with bacon and American cheese.">
	</picture>
</main>
<aside>
	<h2>Online Ordering</h2>
</aside>
<figure class="menugrid">
	<figure>
		<picture>
			<source media="(min-width: 60em)" srcset="images/fishandchips2.webp">
			<source media="(min-width: 40em)" srcset="images/fishandchips2-700.webp">
			<source media="(min-width: 20em)" srcset="images/fishandchips2-500.webp">
			<img src="images/fishandchips2.jpg" alt="Two pieces of beer battered fish and chips on top of a pile of french fries.">
			</picture>
		<figcaption>
			<p>Beer Battered Pacific Cod and Chips $16</p>
			<button type="button">Add to Cart $16.00</button>
		</figcaption>
	</figure>
	<figure>
		<picture>
			<source media="(min-width: 60em)" srcset="images/halibut.webp">
			<source media="(min-width: 40em)" srcset="images/halibut-700.webp">
			<source media="(min-width: 20em)" srcset="images/halibut-500.webp">
			<img src="images/halibut.jpg" alt="Beer Battered halibut on newspaper wiht lemon wedges and a side of tartar sauce.">
		</picture>
		<figcaption>
			<p>Beer Battered Alaska Halibut $22</p>
			<button type="button">Add to Cart $22.00</button>
		</figcaption>
	</figure>
	<figure>
		<picture>
			<source media="(min-width: 60em)" srcset="images/salmon.webp">
			<source media="(min-width: 40em)" srcset="images/salmon-700.webp">
			<source media="(min-width: 20em)" srcset="images/salmon-500.webp">
			<img src="images/salmon.jpg" alt="Close up of beer battered salmon wrapped in parchment paper.">
		</picture>
		<figcaption>
			<p>Beer Battered local sockeye Salmon $21</p>
			<button type="button">Add to Cart $21.00</button>
		</figcaption>
	</figure>
	<figure>
		<picture>
			<source media="(min-width: 60em)" srcset="images/chowder.webp">
			<source media="(min-width: 40em)" srcset="images/chowder-700.webp">
			<source media="(min-width: 20em)" srcset="images/chowder-500.webp">
			<img src="images/chowder.jpg" alt="Top down picture of a bowl of new england style clam chowder. Garnished with bacon and parsley.">
		</picture>
		<figcaption>
			<p>New England Style Clam Chowder $10</p>
			<button type="button">Add to Cart $10.00</button>
		</figcaption>	
	</figure>
	<figure>
		<picture>
			<source media="(min-width: 60em)" srcset="images/clams.webp">
			<source media="(min-width: 40em)" srcset="images/clams-700.webp">
			<source media="(min-width: 20em)" srcset="images/clams-500.webp">
			<img src="images/clams.jpg" alt="Close up of manilla clams cooked in white wine and herbs.">
		</picture>
		<figcaption>
			<p>1lb of steamer clams $15</p>
			<button type="button">Add to Cart $15.00</button>
		</figcaption>
	</figure>
	<figure>
		<picture>
			<source media="(min-width: 60em)" srcset="images/cioppino.webp">
			<source media="(min-width: 40em)" srcset="images/cioppino-700.webp">
			<source media="(min-width: 20em)" srcset="images/cioppino-500.webp">
			<img src="images/cioppino.jpg" alt="Top down picture of a cioppino with shrimp, clams, mussels in a tomato broth.">
		</picture>
		<figcaption>
			<p>Cioppino $19</p>
			<button type="button">Add to Cart $19.00</button>
		</figcaption>
	</figure>
	<figure>
		<picture>
			<source media="(min-width: 60em)" srcset="images/fishtaco.webp">
			<source media="(min-width: 40em)" srcset="images/fishtaco-700.webp">
			<source media="(min-width: 20em)" srcset="images/fishtaco-500.webp">
			<img src="images/fishtaco.jpg" alt="Beer battered fish tacos on a corn tortilla with jalapenos, cilantro, onions.">
		</picture>
		<figcaption>
			<p>Crispy fish tacos 3/$11</p>		
			<button type="button">Add to Cart $11.00</button>
		</figcaption>
	</figure>
	<figure>
		<picture>
			<source media="(min-width: 60em)" srcset="images/calamari.webp">
			<source media="(min-width: 40em)" srcset="images/calamari-700.webp">
			<source media="(min-width: 20em)" srcset="images/calamari-500.webp">
			<img src="images/calamari.jpg" alt="Close up picture of breaded and fried calamari rings.">
		</picture>
		<figcaption>
			<p>Crispy Calamari $11</p>
			<button type="button">Add to Cart $11.00</button>
		</figcaption>
	</figure>
	<figure>
		<picture>
			<source media="(min-width: 60em)" srcset="images/bbqshrimp.webp">
			<source media="(min-width: 40em)" srcset="images/bbqshrimp-700.webp">
			<source media="(min-width: 20em)" srcset="images/bbqshrimp-500.webp">
			<img src="images/bbqshrimp.jpg" alt="Beer Battered fish sandwich with coleslaw and tartar sauce. Served on a seeded bun.">
		</picture>
		<figcaption>
			<p>Creole seasoned BBQ shrimp $12</p>
			<button type="button">Add to Cart $12.00</button>
		</figcaption>
	</figure>
	<figure>
		<picture>
			<source media="(min-width: 60em)" srcset="images/Burgspec.webp">
			<source media="(min-width: 40em)" srcset="images/Burgspec-700.webp">
			<source media="(min-width: 20em)" srcset="images/Burgspec-500.webp">
			<img src="images/Burgspec.jpg" alt="Double cheeseburger with bacon and American cheese. Served on a seeded bun.">
		</picture>
		<figcaption>
			<p>Double Bacon cheeseburger $11</p>
			<button type="button">Add to Cart $11.00</button>
		</figcaption>
	</figure>
	<figure>
		<picture>
			<source media="(min-width: 60em)" srcset="images/Fishwich.webp">
			<source media="(min-width: 40em)" srcset="images/Fishwich-700.webp">
			<source media="(min-width: 20em)" srcset="images/Fishwich-500.webp">
			<img src="images/fishwich.jpg" alt="Beer Battered fish sandwich with coleslaw and tartar sauce.">
		</picture>
		<figcaption>
			<p>Fried Cod Sandwich $12</p>
			<button type="button">Add to Cart $12.00 </button>
		</figcaption>
	</figure>
	<figure>
		<picture>
			<source media="(min-width: 60em)" srcset="images/fries.webp">
			<source media="(min-width: 40em)" srcset="images/fries-700.webp">
			<source media="(min-width: 20em)" srcset="images/fries-500.webp">
			<img src="images/fries.jpg" alt="Close up of fresh cut french fries fried to golden brown.">
		</picture>
		<figcaption>
			<p>French fries $6</p>
			<button type="button">Add to Cart $6.00</button>
		</figcaption>
	</figure>
</figure>

<?php
	// This inserts the ending of the HTML into the page.
	include "includes/footer.php" ;
?>