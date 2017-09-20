<?php
$title = "Products";
//$ = var for declaring a variable
//bring in the header
include 'header.php';
?>

<main>
	<h1><?php print $title; ?></h1>

	<?php if ($title === "Products") {
		echo '<p>products content</p>';
		//echo means display and . is same as + in JS
	} else {
		echo '<p>page content goes here</p>';
	}
	?>
</main>

<?php
include 'sidebar.php';
include 'footer.php';
?>