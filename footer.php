<?php if(!defined('PLX_ROOT')) exit; ?>

		<div id="footer" class="columns ten offset-by-five">
			<div><?php $plxShow->staticList($plxShow->getLang('HOME'),' <a href="#static_url" class="#static_status #static_class" title="#static_name">#static_name</a> '); ?></div>
			<p>&copy; <?php $plxShow->mainTitle('link'); ?> -
				<?php $plxShow->lang('POWERED_BY') ?> <a href="http://pluxml.org" title="<?php $plxShow->lang('PLUXML_DESCRIPTION') ?>">PluXml</a>
				<?php $plxShow->lang('IN') ?> <?php $plxShow->chrono(); ?>
				<?php $plxShow->httpEncoding() ?>
				- <span><a class="admin" rel="nofollow" href="<?php $plxShow->urlRewrite('core/admin/') ?>" title="<?php $plxShow->lang('ADMINISTRATION') ?>"><?php $plxShow->lang('ADMINISTRATION') ?></a> -
				<a class="top" href="<?php echo $plxShow->urlRewrite('#top') ?>" title="<?php $plxShow->lang('GOTO_TOP') ?>"><?php $plxShow->lang('TOP') ?></a></span>
				<br />
				Thème par <a href="http://www.francoispoteau.com/" title="François POTEAU">François POTEAU</a>
				<br />
				<p>Love <a href="http://www.getskeleton.com/" title="Get Skeleton !">Skeleton</a></p>
			</p>

		</div>
	</div>
</body>
</html>
