<?php include(dirname(__FILE__).'/header.php'); ?>
	<?php include(dirname(__FILE__).'/sidebar.php'); ?>
	<div id="section" class="row">
		<div id="article" class="columns ten offset-by-one add-bottom">
		
			<?php while($plxShow->plxMotor->plxRecord_arts->loop()): ?>
				<div class="article row">
						<h2><?php $plxShow->artTitle('link'); ?></h2>
						<p class="art-infos">
							<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
 <?php $plxShow->artDate('#num_day.#num_month.#num_year(2)'); ?> - Catégorie: <?php $plxShow->artCat(); ?> -  Mots clés: <?php $plxShow->artTags(); ?>  						</p>
						<div class="art-chapo"><?php $plxShow->artContent(); ?></div>
						<a href="https://twitter.com/share" class="twitter-share-button" data-via="Fpoteau" data-lang="fr" data-count="none">Tweeter</a><br />
				</div>
			<?php endwhile; ?>

			<p id="pagination"><?php $plxShow->pagination(); ?></p>

		</div>
		
	</div>

<?php include(dirname(__FILE__).'/footer.php'); ?>
