<?php

/*grab current directory*/
$CURRENT_DIR = __DIR__;

/*set page title here*/
$PAGE_TITLE = "Animsition Demo | Home";

/*load head-utils.php*/
require_once("php/head-utils.php");
?>

	<body class="sfooter">
		<div class="sfooter-content">

			<!-- inject navbar -->
			<?php require_once("php/navbar.php"); ?>

			<!-- BEGIN ANIMSITION PAGE TRANSITIONS -->
			<main>
				<div class="animsition">
					<div class="container-fluid">
						<div class="row">
							<div class="col-xs-12">
								<h2>Home Page</h2>
							</div>
						</div>
					</div>
				</div>
			</main>
		</div><!--/.sfooter-content-->

		<!-- inject footer -->
		<?php require_once("php/footer.php"); ?>
	</body>
</html>