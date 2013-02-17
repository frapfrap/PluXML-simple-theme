<?php if(!defined('PLX_ROOT')) exit; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--[if lt IE 7 ]><html class="ie ie6" xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php $plxShow->defaultLang() ?>" lang="<?php $plxShow->defaultLang() ?>> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php $plxShow->defaultLang() ?>" lang="<?php $plxShow->defaultLang() ?>> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php $plxShow->defaultLang() ?>" lang="<?php $plxShow->defaultLang() ?>> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php $plxShow->defaultLang() ?>" lang="<?php $plxShow->defaultLang() ?>"> <!--<![endif]-->


<head>
	<title><?php $plxShow->pageTitle(); ?></title>

	<meta http-equiv="Content-Type" content="text/html; charset=<?php $plxShow->charset(); ?>" />
	<?php $plxShow->meta('description') ?>
	<?php $plxShow->meta('keywords') ?>
	<?php $plxShow->meta('author') ?>
		<!-- Mobile Specific Metas
		================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	
	<link rel="icon" href="<?php $plxShow->template(); ?>/img/favicon.png" />
	<link rel="stylesheet" href="<?php $plxShow->template(); ?>/skeleton/stylesheets/base.css">
	<link rel="stylesheet" href="<?php $plxShow->template(); ?>/skeleton/stylesheets/skeleton.css">
	<link rel="stylesheet" href="<?php $plxShow->template(); ?>/skeleton/stylesheets/layout.css">
	<?php $plxShow->templateCss() ?>
	
	<link rel="apple-touch-icon" href="<?php $plxShow->template(); ?>/img/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php $plxShow->template(); ?>/img/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php $plxShow->template(); ?>/img/apple-touch-icon-114x114.png">

	<link rel="alternate" type="application/rss+xml" title="<?php $plxShow->lang('ARTICLES_RSS_FEEDS') ?>" href="<?php $plxShow->urlRewrite('feed.php?rss') ?>" />
	<link rel="alternate" type="application/rss+xml" title="<?php $plxShow->lang('COMMENTS_RSS_FEEDS') ?>" href="<?php $plxShow->urlRewrite('feed.php?rss/commentaires') ?>" />
	<link rel="stylesheet" href="<?php $plxShow->template(); ?>/highlight/styles/zenburn.css">
	<script type="text/javascript" src="<?php $plxShow->template(); ?>/highlight/highlight.pack.js"></script>
	
</head>
<body>
	<script src="<?php $plxShow->template(); ?>/js/jquery.tweet.js" charset="utf-8"></script>
	<script type="text/javascript">
	$(document).ready(function(){
       $("#tweet").tweet({
          username: "fpoteau",
          page: 1,
          avatar_size: 0,
          count: 20,
          loading_text: "loading ..."
        }).bind("loaded", function() {
          var ul = $(this).find(".tweet_list");
          var ticker = function() {
            setTimeout(function() {
              ul.find('li:first').animate( {marginTop: '-150px'}, 500, function() {
                $(this).detach().appendTo(ul).removeAttr('style');
              });
              ticker();
            }, 10000);
          };
          ticker();
        });
      });
	</script>
	<script type="text/javascript">

		function absolutifyCode() {
			// for each text code
			$('code').each(function(i) {
    			var x = $(this).offset().left;
				// -20px for scrollbar
				$(this).css('width',$(window).width() - x - 20);
				// height of pre before 
				var height = $(this).parents('pre').filter(':first').height();
				// absolute position to avoid overflow
				$(this).css('position','absolute');
				// restore height of pre
				var pre = $(this).parents('pre').filter(':first');
				$(pre).height(height).width('100%');
			});
		}
		// responsive ?
		$(window).resize(function() {
			// for each text code
			$('code').each(function(i) {
    			if($(this).offset().left + $(this).width() < ($(window).width() - 20)) { absolutifyCode(); }
    			else { $(this).width('100%').css('position','relative'); }
			});
		});
		$(document).ready(function() {
			$('#sidebar h4, #show-menu, #show-twitter').mouseover(function() { $(this).css('cursor','pointer'); });
			$('#sidebar h4').click(function() {
				$('#sidebar ul').hide('slow');
				$(this).next('ul').show('slow');
				if($(this).next('div').attr('id') == 'tweet') {
					$('.tweet_list').show('slow');
				}	
			});
			$('#show-menu').click(function() {
				
				if($('#sidebar').css('display') == 'none') {
					
					$('#sidebar').css('opacity','0');
					$('#sidebar').css('display','block');
					$('#sidebar').animate({ 'opacity': '100' }, 15000, function() { } );
					//$('#buttons').css('margin-left','250px');
					$('#buttons').animate({
    					'margin-left' : '250px'
  						}, 500, function() {}
  					);
				}
				else {
					
					$('#sidebar').hide();
					$('#sidebar').css('display','none');
					$('#sidebar').css('opacity','0');
					$('#buttons').animate({
    					'margin-left' : '10px'
  						}, 50, function() {}
  					);
				}
				absolutifyCode();
				return;
			});
			$('pre > code').each(function(i, e) {hljs.highlightBlock(e, '    ')});
			absolutifyCode();
		});
		$(window).scroll(function() {
			if($(window).scrollTop() > 100) {
				if($(window).width() > 767) {
					//$('.minilogo').show("fast","linear");
					//$('#menu_important_title').show("fast","linear");
					
				}
			}
			else { 
				//$('.minilogo').hide("fast","linear"); 
				//$('#menu_important_title').hide("fast","linear"); 
			}
			$('#menu_important').css('opacity','0.95');
		}); 
	</script>
	<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-21693468-1']);
  _gaq.push(['_setDomainName', 'francoispoteau.com']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
	<div id="menu_important">
		<div class="container">
			<div class="alpha four columns"><a href="http://francoispoteau.com" class="minilogo"><img src="<?php $plxShow->template(); ?>/img/logo32px.png" /></a></div>
			<a href="http://francoispoteau.com/static2/contact" title="Contactez-moi">Contactez-moi</a>
			<a href="http://portfolio.francoispoteau.com/" title="Services de François POTEAU, Développeur web">Mes services</a>
		</div>
	</div>
	<div id="firstcontainer" class="container">
		<div id="header" class="sixteen columns">
			<div class="row remove-bottom">
					<br class="clear" />
					
			</div>
			<br class="clear" />
		</div>