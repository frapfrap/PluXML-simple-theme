<?php if(!defined('PLX_ROOT')) exit; ?>
	<div id="sidebar">
		<div id="sidebar-content" class="columns four container menu-more">
			<div id="sidebar-fixed">
			<h4 class="home"><?php $plxShow->mainTitle('link'); ?></h4>
			<h4><?php $plxShow->lang('CATEGORIES') ?></h4>
			<ul>
				<?php $plxShow->catList('','<li id="#cat_id" class="#cat_status"><a href="#cat_url" title="#cat_name">#cat_name <span class="squared">#art_nb</span></a></li>'); ?>
			</ul>
			<h4><?php $plxShow->lang('LAST_ARTICLES') ?></h4>
			<ul>
				<?php $plxShow->lastArtList('<li class="#art_status"><a href="#art_url" title="#art_title">#art_title</a></li>',10); ?>
			</ul>
			<h4><?php $plxShow->lang('ARCHIVES') ?></h4>
			<ul>
				<?php $plxShow->archList('<li id="#archives_id" class="#archives_status"><a href="#archives_url" title="#archives_name">#archives_name <span class="squared">#archives_nbart</span></a></li>'); ?>
			</ul>
			<h4><?php $plxShow->lang('TAGS') ?></h4>
			<ul id="tagCloud">
				<?php eval($plxShow->callHook('tagCloud', array('<li class="#tag_status"><a href="#tag_url" title="#tag_name">#tag_name</a></li>', '20', true))); ?>
				<?php //$plxShow->tagList('<a href="#tag_url" title="#tag_name">#tag_name </a>', 20); ?>
				<li class="clear"></li>
			</ul>
			<div class="clear"></div>
			<h4><?php $plxShow->lang('LAST_COMMENTS') ?></h4>
			<ul>
				<?php $plxShow->lastComList('<li><a href="#com_url">#com_author '.$plxShow->getLang('SAID').' : #com_content(150)</a></li>'); ?>
				
			</ul>
			<div class="contact">
				<!-- <h4><a href="http://portfolio.francoispoteau.com/" title="Services de François POTEAU, Développeur web">Mes services</a></h4> -->
				<h4><a href="http://francoispoteau.com/static2/contact" title="Contactez-moi">Contactez-moi</a></h4>
			
			</div>
			<div>
				<form method="post" id="searchform" action="<?php $plxShow->urlRewrite('?static4/recherche') ?>">
				<input type="hidden" name="search" value="search"  />
				<input type="text" class="searchfield" name="searchfield" value="Rechercher..." onblur="if(this.value=='') this.value='Rechercher...';" onfocus="if(this.value=='Rechercher...') this.value='';" /> 
			</form>
			</div>
			<div id="twitter">
			<h4>Twitter</h4>
			<div id="tweet">
			</div>
			</div>
			
			
			<br class="clear" />
		</div>
		</div>
		
	</div>
	<div id="buttons" class="columns one container">
		<div id="show-menu"><img src="<?php $plxShow->template(); ?>/img/lines.png" /></div>
		<div id="show-twitter"><a href="https://twitter.com/Fpoteau"><img src="<?php $plxShow->template(); ?>/img/twitterblack.png" /></a></div>
	</div>