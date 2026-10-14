<?php
	// This section defines the variables that will be used to
	// configure the page.
	$title = "Driftwoood Fish and Chips catering page";
	$description = "Catering page with details about the various packages offered for Driftwood Fish and Chips.";
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
			<source media="(min-width: 60em)" srcset="images/cookingcrabs2.webp">
			<source media="(min-width: 40em)" srcset="images/cookingcrabs2-700.webp">
			<source media="(min-width: 20em)" srcset="images/cookingcrabs-500.webp">
			<img src="imgages/cookingcrabs2.jpg" alt="Crabs being pulled out of boiling water with a large metal strainer.">
		</picture>
		<h2>We love to cater</h2>
		<p>
			Driftwood Fish and Chips is not just about fried fish and delicious chips. 
			We also offer various catering packages to help enhance your next party. 
			Some of our offerings include:
		</p>
		<ul>
			<li>Crab boil</li>
			<li>Open flame grilled seafood experience</li>
			<li>fish and chip package</li>
			<li>Clam Chowder and fresh baked bread</li>
			<li>Shrimp and sausage Boil</li>
		</ul>
		<table>
			<caption>Catering Options</caption>
			<thead>
				<tr>
					<th scope="col">Catering Package</th>
					<th scope="col">Seasonal Availability</th>
					<th scope="col">Price Per Person</th>
					<th scope="col">Drop-off Available</th>
					<th scope="col">On-site Cooking</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Crab boil</td>
					<td>April-October</td>
					<td>$90.00</td>
					<td>No</td>
					<td>Yes</td>
				</tr>
				<tr>
					<td>Grilled Seafood Feast</td>
					<td>April-October</td>
					<td>$75.00</td>
					<td>Yes</td>
					<td>No</td>
				</tr>
				<tr>
					<td>Fish and chips</td>
					<td>All year round</td>
					<td>$30.00</td>
					<td>Yes</td>
					<td>No</td>
				</tr>
				<tr>
					<td>Clam chowder and bread</td>
					<td>All year round</td>
					<td>$20.00</td>
					<td>Yes</td>
					<td>Yes</td>
				</tr>
				<tr>
					<td>Shrimp and sausage boil</td>
					<td>All year round</td>
					<td>$80.00</td>
					<td>No</td>
					<td>Yes</td>
				</tr>
			</tbody>
			<tfoot>
				<tr>
					<td>Any special requests please inquire</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
			</tfoot>
		</table>
		<picture>
			<source media="(min-width: 60em)" srcset="images/lemons.webp">
			<source media="(min-width: 40em)" srcset="images/lemons-700.webp">
			<source media="(min-width: 20em)" srcset="images/lemons-500.webp">
			<img src="images/lemons.jpg" alt="Close up image of grilled lemons cut in half.">
		</picture>
	</main>

<?php
	// This inserts the ending of the HTML into the page.
	include "includes/footer.php" ;
?>