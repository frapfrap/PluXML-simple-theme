<?php if(!defined('PLX_ROOT')) exit; ?>
	<?php if($plxShow->plxMotor->plxRecord_coms): ?>
		
		<div id="comments" class="columns ten row alpha">
		
			<div class="columns seven alpha offset-by-three"><h4><?php echo $plxShow->artNbCom() ?></h4></div>
			<br class="clear" />
			<?php while($plxShow->plxMotor->plxRecord_coms->loop()): # On boucle sur les commentaires ?>
				<div id="<?php $plxShow->comId(); ?>" class="comment row">
					<div class="columns three alpha first">
						<div class="author"><?php $plxShow->comAuthor('link'); ?></div>
						<?php if($plxShow->callHook('hamGravatar')) { ?><img src="<?php eval($plxShow->callHook('hamGravatar')) ?>" class="avatar" /><?php } ?>
						
					</div>
					<div class="columns seven omega">
							<p><?php $plxShow->comDate(); ?></p>
							<p class="content_com type-<?php $plxShow->comType(); ?>"><?php $plxShow->comContent() ?></p>
					</div>
				</div>
			<?php endwhile; # Fin de la boucle sur les commentaires ?>
		</div>
	<?php endif; ?>
	<?php if($plxShow->plxMotor->plxRecord_arts->f('allow_com') AND $plxShow->plxMotor->aConf['allow_com']): ?>
	<div id="form">
			<div class="columns seven omega offset-by-three"><h4><?php $plxShow->lang('WRITE_A_COMMENT') ?></h4></div>
			<p></p>
			<form action="<?php $plxShow->artUrl(); ?>#form" method="post">
							<div class="columns seven omega offset-by-three add-bottom">Hello ! j'apprécie les commentaires, surtout ceux qui sont sincères, alors éviter le spam flagrant :)</div>
							
							<div class="columns three alpha"><label for="id_name"><?php $plxShow->lang('NAME') ?>&nbsp;:</label></div>
							<div class="columns seven omega"><input id="id_name" name="name" type="text" size="20" value="<?php $plxShow->comGet('name',''); ?>" maxlength="30" /></div>
					
							<div class="columns three alpha"><label for="id_site"><?php $plxShow->lang('WEBSITE') ?>&nbsp;:</label></div>
							<div class="columns seven omega"><input id="id_site" name="site" type="text" size="20" value="<?php $plxShow->comGet('site',''); ?>" /></div>
				
							<div class="columns three alpha"><label for="id_mail"><?php $plxShow->lang('EMAIL') ?>&nbsp;:</label></div>
							<div class="columns seven omega"><input id="id_mail" name="mail" type="text" size="20" value="<?php $plxShow->comGet('mail',''); ?>" /></div>


							<?php if($plxShow->plxMotor->aConf['capcha']): ?>
							<div class="columns three alpha"><label for="id_rep"><strong><?php echo $plxShow->lang('ANTISPAM_WARNING') ?></strong>&nbsp;:</label></div>
							<div class="columns seven omega"><p><?php $plxShow->capchaQ(); ?>&nbsp;:&nbsp;<input id="id_rep" name="rep" type="text" size="10" /></p>
							<input name="rep2" type="hidden" value="<?php $plxShow->capchaR(); ?>" /></div>
							<?php endif; ?>
							
							
							<div class="columns three alpha"><label for="id_content" class="lab_com"><?php $plxShow->lang('COMMENT') ?>&nbsp;:</label></div>
							<div class="columns seven omega"><textarea id="id_content" name="content" cols="35" rows="6"><?php $plxShow->comGet('content',''); ?></textarea></div>

							<div class="columns seven offset-by-three alpha">
								<input type="submit" value="<?php $plxShow->lang('SEND') ?>" /><p class="com-alert"><?php $plxShow->comMessage(); ?></p>
							</div>
			</form>
		</div>
	<?php else: ?>
		<p><?php $plxShow->lang('COMMENTS_CLOSED') ?>.</p>
	<?php endif; # Fin du if sur l'autorisation des commentaires ?>
