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
			<div class="animsition" data-animsition-in-class="fade-in-up-sm" data-animsition-out-class="fade-out-right-sm">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-12">
							<h2>About</h2>
							<p>This is some content right here.</p>
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