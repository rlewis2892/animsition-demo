<?php

/*grab current directory*/
$CURRENT_DIR = __DIR__;

/*set page title here*/
$PAGE_TITLE = "Animsition | Home";

/*inject the entire head tag via php */
require_once("php/head-utils.php");
?>

<body class="sfooter">
	<div class="sfooter-content">

		<!-- inject navbar via php -->
		<?php require_once("php/navbar.php"); ?>

		<!-- BEGIN ANIMSITION PAGE TRANSITIONS -->
		<main>
			<!-- custom animation set on element using data-animsition attributes -->
			<div class="animsition home" data-animsition-in-class="fade-in-down-sm" data-animsition-out-class="fade-out-left-sm">
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-8 col-sm-offset-2">
							<div class="jumbotron text-center">
								<h1>&nbsp;Animsition Demo&nbsp;</h1>
								<hr>
								<p class="lead">This is a multi-page static website that uses the <a href="http://git.blivesta.com/animsition/" target="_blank">Animsition</a> plugin to create animated page transitions.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>

	</div><!--/.sfooter-content-->

	<!-- inject footer via php -->
	<?php require_once("php/footer.php"); ?>
</body>
</html>