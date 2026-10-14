<?php
	// This section defines the variables that will be used to
	// configure the page.
	$title = "Driftwoood Fish and Chips jobs page";
	$description = "Job inquiry page for Driftwood Fish and Chips. Come work with us.";
	$author = "Seth Richardson" ;
	$mainheading = "Driftwood Fish and Chips" ;
	
	// This inserts the beginning part of the HTML into the page
	include "includes/header.php" ;

	// This inserts the HTML for the navigation into the page.
	include "includes/nav.php" ;
?>
<!-- Your HTML for the main content of the page will go here. -->
<main>
	<h2>Come work with us</h2>
	<p>
		We are always looking for great people to join our amazing team. 
		If you are ready for a fast paced and rewarding career opportunity 
		this might be an amazing opportunity.
	</p>
	<article class="form">
		<form action="/~tpollard/csci202/forms/form_results.php">
			<h3>Job Inquiry</h3>
			<p>
				<label for="name">NAME </label>
				<input type="text" id="name" name="name" required pattern="[A-Za-z]+" placeholder="Full name">
			</p>
			<p>
				<label for="email">EMAIL </label>
				<input type="email" id="email" name="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="Email Address">
			</p>
			<p>
				<button type="submit">Submit</button>
			</p>
		</form>
	</article>
	<figure>
			<picture>
				<source media="(min-width: 60em)" srcset="images/capers.webp">
				<source media="(min-width: 40em)" srcset="images/capers-700.webp">
				<source media="(min-width: 20em)" srcset="images/capers-500.webp">
				<img src="images/capers.jpg" alt="Close up picture of capers.">
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