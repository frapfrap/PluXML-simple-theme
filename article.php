<?php include(dirname(__FILE__).'/header.php'); ?>
	
	<div id="section" class="row">
		<?php include(dirname(__FILE__).'/sidebar.php'); ?>
		<div id="article" class="columns ten offset-by-one">
		
				<div class="article row">
					<!--
					<div id="leftbar" class="columns three alpha">
						<ul>
							<li><?php $plxShow->lang('CLASSIFIED_IN') ?>: <span class="bold"><?php $plxShow->artCat(); ?></span></li>
							<li> <span class="bold"><?php $plxShow->artNbCom('#nb'); ?></span></li>
							<li><?php $plxShow->artDate('#num_day.#num_month.#num_year(2)'); ?> <span class="bold"><?php $plxShow->artAuthor() ?></span></li>
							<li><a href="#" class="lecture"></a><a href="#" class="rss"></a></li>
							<li class="elementrss"><?php $plxShow->comFeed('rss',$plxShow->artId()); ?></li>
						<ul>
					</div>
					-->
					
						<h2><?php $plxShow->artTitle(''); ?></h2>
						<div class="art-chapo"><?php $plxShow->artContent(); ?></div>
						<p class="art-infos">
							<a href="https://twitter.com/share" class="twitter-share-button" data-via="Fpoteau" data-lang="fr" data-count="none">Tweeter</a><br />
							<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
 <?php $plxShow->artDate('#num_day.#num_month.#num_year(2)'); ?> - <?php $plxShow->artCat(); ?> -  <?php $plxShow->artTags(); ?>  						</p>
						<div>
							
						</div>
					<?php $plxShow->artAuthorInfos('<div class="author-infos">#art_authorinfos</div>'); ?>
				</div>
				
					
			<?php include(dirname(__FILE__).'/commentaires.php'); ?>
			
			
		</div>
		
	</div>
	

<?php include(dirname(__FILE__).'/footer.php'); ?>

