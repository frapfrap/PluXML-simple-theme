<?php include(dirname(__FILE__).'/header.php'); ?>

	<div id="section" class="row">
		<?php include(dirname(__FILE__).'/sidebar.php'); ?>
		<div id="article" class="columns ten offset-by-one">>

				<h2><?php $plxShow->lang('ERROR') ?> :</h2>
				<div class="error-content"><?php $plxShow->erreurMessage(); ?></div>

		</div>
	</div>
		

	</div>

<?php include(dirname(__FILE__).'/footer.php'); ?>

