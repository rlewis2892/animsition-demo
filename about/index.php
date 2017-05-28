<?php

/*grab current directory*/
$CURRENT_DIR = __DIR__;

/*set page title here*/
$PAGE_TITLE = "Animsition | Page 2";

/*inject the entire head tag via php */
require_once(dirname(__DIR__) . "/php/head-utils.php");
?>

<body class="sfooter">
	<div class="sfooter-content">

		<!-- inject navbar -->
		<?php require_once(dirname(__DIR__) . "/php/navbar.php"); ?>

		<!-- BEGIN ANIMSITION PAGE TRANSITIONS -->
		<main>
			<!-- custom animation set on element using data-animsition attributes -->
			<div class="animsition" data-animsition-in-class="fade-in-down-sm" data-animsition-out-class="fade-out-left-sm">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-12">
							<h2>About</h2>
							<p>This is some content right here.</p>
							<p>Chase dog then run away i could pee on this if i had the energy but howl on top of tall thing so meowwww. Intrigued by the shower paw at your fat belly chase red laser dot annoy owner until he gives you food say meow repeatedly until belly rubs, feels good. Hack up furballs climb a tree, wait for a fireman jump to fireman then scratch his face or i am the best. I am the best eat prawns daintily with a claw then lick paws clean wash down prawns with a lap of carnation milk then retire to the warmest spot on the couch to claw at the fabric before taking a catnap lick arm hair, so poop in litter box, scratch the walls. Meow for food, then when human fills food dish, take a few bites of food and continue meowing thug cat for cats making all the muffins. Howl uncontrollably for no reason. Slap kitten brother with paw spread kitty litter all over house for poop in litter box, scratch the walls. Eat all the power cords ignore the squirrels, you'll never catch them anyway purr while eating. </p>
						</div>
					</div>
				</div>
			</div>
		</main>
	</div><!--/.sfooter-content-->

	<!-- inject footer -->
	<?php require_once(dirname(__DIR__) . "/php/footer.php"); ?>
</body>
</html>