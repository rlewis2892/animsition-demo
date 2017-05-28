<?php

/*grab current directory*/
$CURRENT_DIR = __DIR__;

/*set page title here*/
$PAGE_TITLE = "Animsition | Instructions";

/*inject the entire head tag via php */
require_once(dirname(__DIR__) . "/php/head-utils.php");
?>

<body class="sfooter">
	<div class="sfooter-content">

		<!-- inject navbar -->
		<?php require_once(dirname(__DIR__) . "/php/navbar.php"); ?>

		<!-- BEGIN ANIMSITION PAGE TRANSITIONS -->
		<main>
			<div class="animsition">
				<div class="container-fluid">

					<div class="row">
						<div class="col-xs-12">
							<h2>Instructions</h2>
						</div>
					</div><!--/.row-->

					<div class="row">
						<div class="col-sm-6 col-md-4">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4>Dependencies</h4>
								</div>
								<div class="panel-body">
									<ul>
										<li><a href="http://git.blivesta.com/animsition/" target="_blank">Animsition</a> JavaScript and CSS (minified)</li>
										<li>Custom JS file to initialize Animsition <br>(see <a href="https://github.com/rlewis2892/animsition-demo/blob/master/js/animsition-custom.js" target="_blank">animsition-custom.js</a>)</li>
									</ul>
								</div>
							</div><!-- end top panel -->

							<div class="panel panel-default">
								<div class="panel-heading">
									<h4>Development</h4>
								</div>
								<div class="panel-body">
									<ul>
										<li>This example uses the php "Root Path" solution to enable simple templating of this multi-page layout using the php <code>require_once()</code> function. See instructions here:
											<a href="https://bootcamp-coders.cnm.edu/class-materials/php/relative-path/" target="_blank">PHP Root Path</a>.</li>
										<li>Repeated sections of the layout (&lt;head&gt; tag, navbar, footer) have been kept <strong>D.R.Y.</strong> by isolating them in the <code>/php</code> directory, and injecting them in the appropriate place using <code>require_once()</code></li>
									</ul>
								</div>
							</div><!-- end bottom panel -->
						</div>

						<div class="col-sm-6 col-md-8">
							<div class="panel panel-danger">
								<div class="panel-heading">
									<h4><i class="fa fa-exclamation-triangle"></i>&nbsp;Important Note</h4>
								</div>
								<div class="panel-body">
									<p>Animsition requires jQuery version 1.11.0, version 3.x will not work. See <code>head-utils.php</code>.</p>
								</div>
							</div><!-- end top panel -->
						</div>
					</div><!--/.row-->

				</div>
			</div>
		</main>
	</div><!--/.sfooter-content-->

	<!-- inject footer -->
	<?php require_once(dirname(__DIR__) . "/php/footer.php"); ?>
</body>
</html>