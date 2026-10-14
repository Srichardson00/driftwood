<?php
	// This section defines the variables that will be used to
	// configure the page.
	$title = "Driftwoood Fish and Chips vendor highlights page";
	$description = "Page dedicated to sharing information about the wonderful vendors Drfitwood fish and chips uses." ;
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
			Our Partners
		</h2>
	<section>
		<picture>
			<source media="(min-width: 60em)" srcset="images/fishing.webp">
			<source media="(min-width: 40em)" srcset="images/fishing-700.webp">
			<source media="(min-width: 20em)" srcset="images/fishing-500.webp">
			<img src="images/fishing.jpg" alt="Fisherman on a boat out in the sea placing a line of rope on a hook.">
		</picture>
		<h3>Emerald City Seafood</h3>
		<p>
			At Emerald City Seafood we are dedicated to ensuring eco-friendly practices, 
			protecting marine ecosystems, and supporting long-term fish population health. 
			That’s why we only partner with individual fishing vessels that share our passion 
			for conserving the beauty of the ocean.
		</p>
	</section>
	<section>
		<picture>
			<source media="(min-width: 60em)" srcset="images/potatoOlsen.webp">
			<source media="(min-width: 40em)" srcset="images/potatoOlsen-700.webp">
			<source media="(min-width: 20em)" srcset="images/potatoOlsen-500.webp">
			<img src="images/potatoOlsen.jpg" alt="Six varieties of potatoes laid out on a gray cloth. One of the varities is labeld Norkotah Russet.">
		</picture>
		<h3>Olsen Farms</h3>
		<p>
			Olsen Farms specializes in 15 varieties of potatoes on 20+ acres of land. 
			All naturally grown, they aim to bring the widest variety with the boldest flavors and textures around. 
			All the while you can feel great knowing that your potato will never have been sprayed with any pesticide, fungicide, 
			or anti-growth chemicals. Every week Olsen Farms washes and packs each potato order with quality control and care to ensure 
			that only the utmost quality spuds makes it to the customer. 
		</p>
	</section>
	<section>
		<picture>
			<source media="(min-width: 60em)" srcset="images/taylor.webp">
			<source media="(min-width: 40em)" srcset="images/taylor-700.webp">
			<source media="(min-width: 20em)" srcset="images/taylor-500.webp">
			<img src="images/taylor.jpg" alt="Close up images of ">
		</picture>
		<h3>Taylor Shellfish</h3>
		<p>
			Taylor shellfish has long been a leading force in being a steward of the marine environment. 
			Sustainability in all aspects is key in all day-to-day operations. 
			The driving goal for Taylor Shellfish is to preserve the ocean environment so future 
			generations can continue to enjoy the bounty of the sea. All Talyor Shellfish products 
			are certified by Food Alliance, a sustainable agriculture third-party certifier. 
		</p>
	</section>	
	</main>

<?php
	// This inserts the ending of the HTML into the page.
	include "includes/footer.php" ;
?>