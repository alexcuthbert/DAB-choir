<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<meta charset="utf-8">
		<meta name="keywords" content="">
		<meta name="description" content="">
		<link rel="stylesheet" type="text/css" href="">

		<script type="text/javascript"></script>
	</head>
	<body>
		<main>
			<header>
				<h1></h1>
			</header>
			<?php

$finishes = ['beech', 'maple', 'gloss', 'light oak', 'black slate', 'slate', 'cherry', 'silver', 'walnut', 'swiss elm', 'concrete'];

$products = ['furniture', 'desks', 'cupboards', 'tambours', 'tables', 'bookcases', 'pedestals', 'drawers', 'counters'];
?>
				<ul>
				<?php forEach ($finishes as $finish){
					forEach ($products as $product){ ?>
						<li><?php echo $finish . $product; ?> </li>
					<?php endforEach;	}
	 			endforEach; } ?>
	 			</ul>
		</main>
		<footer>

			<script type="text/javascript"></script>
		</footer>
	</body>
</html>

