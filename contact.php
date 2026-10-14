<?php
	// This section defines the variables that will be used to
	// configure the page.
	$title = "Driftwoood Fish and Chips Contact Page";
	$description = "Contact form for Driftwood fish and chips" ;
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
		<h2>We'd love to hear from you</h2>
		<p>Your Feedback Is Important to Us: Please reach out for anything</p>
		<p>Or come visit us at our location</p>
		<a href="findus.php">Come find us</a>
	</main>
	<article class="form">
		<form action="/~tpollard/csci202/forms/form_results.php">
			<h3>Contact Form</h3>
			<p>
				<label for="name">NAME </label>
				<input type="text" id="name" name="name" required pattern="[A-Za-z]+" placeholder="Full name">
			</p>
			<p>
				<label for="email">EMAIL </label>
				<input type="email" id="email" name="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="Email Address">
			</p>
			<p>
				<label for="phone">PHONE </label>
				<input type="tel" id="phone" name="phone" pattern='[0-9]{3}-[0-9]{3}-[0-9]{4}' placeholder="555-555-5555">
			</p>
			<p>
				<label for="message_subject">SUBJECT</label>
				<input type="text" id="message_subject" name="message subject" placeholder="Subject">
			</p>
			<p>
				<label for="message">MESSAGE</label>
				<textarea id="message" name="message" rows="5" cols="33"></textarea>
			</p>
			<p>
				<button type="submit">Submit</button>
			</p>
		</form>
	</article>
	<aside>
		<picture>
			<source media="(min-width: 60em)" srcset="images/oceansun.webp">
			<source media="(min-width: 40em)" srcset="images/oceansun-700.webp">
			<source media="(min-width: 20em)" srcset="images/oceansun-500.webp">
			<img src="oceansun.jpg" alt="Sunset over the ocean.">
		</picture>
	</aside>

<?php
	// This inserts the ending of the HTML into the page.
	include "includes/footer.php" ;
?>