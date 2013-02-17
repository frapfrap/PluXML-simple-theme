<?php include(dirname(__FILE__).'/header.php'); ?>
	
	<div id="section" class="row">
		<?php include(dirname(__FILE__).'/sidebar.php'); ?>
		<div id="article" class="columns ten offset-by-one">
			<?php while($plxShow->plxMotor->plxRecord_arts->loop()): ?>
				<div class="article row">
						<h2><?php $plxShow->artTitle('link'); ?></h2>
						<div class="art-chapo"><?php $plxShow->artChapo(); ?></div>
						<p class="art-infos"><?php $plxShow->artCat(); ?> - <?php $plxShow->artTags(); ?> - <?php $plxShow->artNbCom(); ?></p>
				</div>
			<?php endwhile; ?>
			<p id="pagination"><?php $plxShow->pagination(); ?></p>

		</div>
		

	</div>

<?php include(dirname(__FILE__).'/footer.php'); ?>>

