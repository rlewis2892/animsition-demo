<?php

/*grab current directory*/
$CURRENT_DIR = __DIR__;

/*set page title here*/
$PAGE_TITLE = "Animsition | Random";

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
							<h2>Random</h2>
						</div>
						<div class="col-sm-6">
							<p>Try-hard tote bag selfies raw denim microdosing. Ethical humblebrag readymade lo-fi, 8-bit neutra bespoke fanny pack pinterest cronut forage shaman cred portland sartorial. Messenger bag chartreuse leggings, single-origin coffee vape VHS kickstarter hashtag hexagon bitters. Before they sold out pork belly dreamcatcher live-edge, af adaptogen readymade. Gluten-free bitters single-origin coffee, offal williamsburg ethical 3 wolf moon cold-pressed tote bag before they sold out sriracha. Master cleanse migas lumbersexual meggings vinyl sustainable. Tattooed farm-to-table vape dreamcatcher fap meditation chartreuse blue bottle.</p>
							<p>Pabst gluten-free scenester, bushwick fam prism tumblr retro helvetica letterpress everyday carry poke air plant. Man braid tilde freegan air plant mumblecore, cliche four dollar toast shaman. Occupy glossier synth, cliche semiotics activated charcoal DIY microdosing man braid pour-over green juice chambray craft beer. Beard poke meh succulents, brooklyn cloud bread YOLO semiotics knausgaard salvia squid. Cardigan bespoke letterpress green juice 90's. Raw denim mustache scenester, 90's crucifix adaptogen single-origin coffee palo santo tumeric jianbing chambray. Beard lumbersexual lo-fi cloud bread jean shorts keytar gluten-free, pitchfork edison bulb sustainable quinoa chambray.</p>
						</div>
						<div class="col-sm-6">
							<p>Skateboard tousled cold-pressed, organic selvage unicorn chia man braid gentrify bespoke photo booth poutine. Echo park tattooed taiyaki hell of brunch normcore. Raw denim waistcoat swag austin, viral XOXO tumblr farm-to-table narwhal cardigan ethical quinoa post-ironic. Gentrify vinyl next level whatever ugh. Chia humblebrag letterpress etsy, messenger bag venmo mumblecore. Hexagon beard tbh coloring book, palo santo pok pok fixie fanny pack vape prism selfies wayfarers vaporware XOXO squid. Woke freegan twee, messenger bag mixtape single-origin coffee yuccie.</p>
							<p>Pabst gluten-free scenester, bushwick fam prism tumblr retro helvetica letterpress everyday carry poke air plant. Man braid tilde freegan air plant mumblecore, cliche four dollar toast shaman. Occupy glossier synth, cliche semiotics activated charcoal DIY microdosing man braid pour-over green juice chambray craft beer. Beard poke meh succulents, brooklyn cloud bread YOLO semiotics knausgaard salvia squid. Cardigan bespoke letterpress green juice 90's. Raw denim mustache scenester, 90's crucifix adaptogen single-origin coffee palo santo tumeric jianbing chambray. Beard lumbersexual lo-fi cloud bread jean shorts keytar gluten-free, pitchfork edison bulb sustainable quinoa chambray.</p>
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