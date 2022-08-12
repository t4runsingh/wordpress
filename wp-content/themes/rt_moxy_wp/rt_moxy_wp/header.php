<?php $option = get_option('moxy-options'); ?>
<?php require(TEMPLATEPATH.'/styles.php'); ?>
<?php
	global $stylesList, $presetstyle, $headerstyle, $bodystyle;	
	rok_switcher();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
	<head>
		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
		<meta name="description" content="<?php bloginfo('description'); ?>" />
		
		<title><?php wp_title('-',true,'right'); ?> <?php bloginfo('name'); ?></title>

		<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
		<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
		<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
		
		<?php if ($option['rokbox_enabled'] == 'true') { ?>
		
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/js/rokbox/themes/<?php echo $option['rokbox_style']; ?>/rokbox-style.css" type="text/css" />
		
		<!--[if lte IE 6]>
			<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/js/rokbox/themes/<?php echo $option['rokbox_style']; ?>/rokbox-style-ie6.css" type="text/css" />
		<![endif]-->
		<!--[if IE 7]>
			<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/js/rokbox/themes/<?php echo $option['rokbox_style']; ?>/rokbox-style-ie7.css" type="text/css" />
		<![endif]-->
		<!--[if IE 8]>
			<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/js/rokbox/themes/<?php echo $option['rokbox_style']; ?>/rokbox-style-ie8.css" type="text/css" />
		<![endif]-->
		
		<?php } ?>
		
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/template.css" type="text/css" />
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/header-<?php echo $headerstyle; ?>.css" type="text/css" />
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/body-<?php echo $bodystyle; ?>.css" type="text/css" />
		
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/typography.css" type="text/css" />
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/menu-fusion.css" type="text/css" />
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/js/rokstories/css/rokstories.css" type="text/css" />
		
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/wp.css" type="text/css" />
		
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

		<style type="text/css">
		<!--
		
		<?php 
		
			$double = $option['left_sidebar_w']+$option['right_sidebar_w'];
			$ie_col3 = $option['right_sidebar_w'] + 20;
			
		?>

		div.wrapper { margin: 0 auto; width: <?php echo $option['site_width']; ?>px;padding:0;}
		body { min-width:<?php echo $option['site_width']; ?>px;}
		#inset-block-left { width:0px;padding:0;}
		#inset-block-right { width:0px;padding:0;}
		#maincontent-block { margin-right:0px;margin-left:0px;}
	
		.s-c-s .colmid { left:<?php echo $option['left_sidebar_w']; ?>px;}
		.s-c-s .colright { margin-left:-<?php echo $double; ?>px;}
		.s-c-s .col1pad { margin-left:<?php echo $double; ?>px;}
		.s-c-s .col2 { left:<?php echo $option['right_sidebar_w']; ?>px;width:<?php echo $option['left_sidebar_w']; ?>px;}
		.s-c-s .col3 { width:<?php echo $option['right_sidebar_w']; ?>px;}
	
		.s-c-x .colright { left:<?php echo $option['left_sidebar_w']; ?>px;}
		.s-c-x .col1wrap { right:<?php echo $option['left_sidebar_w']; ?>px;}
		.s-c-x .col1 { margin-left:<?php echo $option['left_sidebar_w']; ?>px;}
		.s-c-x .col2 { right:<?php echo $option['left_sidebar_w']; ?>px;width:<?php echo $option['left_sidebar_w']; ?>px;}
	
		.x-c-s .colright { margin-left:-<?php echo $option['right_sidebar_w']; ?>px;}
		.x-c-s .col1 { margin-left:<?php echo $option['right_sidebar_w']; ?>px;}
		.x-c-s .col3 { left:<?php if(rok_isIe(6)) { echo $ie_col3; } else { echo $option['right_sidebar_w']; } ?>px;width:<?php echo $option['right_sidebar_w']; ?>px;}
 	 	
 	 	-->
		</style>
		
		<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/mootools.js"></script>
		
		<?php if (rok_isIe()) :?>
		<!--[if IE 8]>
		<style type="text/css">
			#horizmenu-surround {width: auto !important;}
		</style>
		<![endif]-->
		<!--[if IE 7]>
		<link href="<?php bloginfo('template_directory'); ?>/css/template_ie7.css" rel="stylesheet" type="text/css" />	
		<![endif]-->	
		<?php endif; ?>
		
		<?php if (rok_isIe(6)) :?>
		<!--[if lte IE 6]>
		<link href="<?php bloginfo('template_directory'); ?>/css/template_ie6.css" rel="stylesheet" type="text/css" />
		<script src="<?php bloginfo('template_directory'); ?>/js/DD_belatedPNG.js"></script>
		<script type="text/javascript">
			var pngClasses = ['.png', '#logo', '#horiz-menu', '#footer .readon1-l', '#footer .readon1-m', '#footer .readon1-r', '#showcase-section .readon1-l', '#showcase-section .readon1-m', '#showcase-section .readon1-r', '#rocket', '.module-top', '.module-top2', '.module-top3', '.module-inner', '.module-bottom', '.module-bottom2', '.module-bottom3', '.fusion-pill-l', '.fusion-pill-r', 'span.tabtext', '.feature-circles-sub', '.feature-circles .active', '.feature-block-top', '.feature-block-top2', '.feature-block-top3', '.feature-block-inner', '.feature-block-bottom', '.feature-block-bottom2', '.feature-block-bottom3'];
	
			window.addEvent('domready', function() {
			pngClasses.each(function(fixMePlease) {
				DD_belatedPNG.fix(fixMePlease);
			});
			});
		</script>
		<style type="text/css">
		.round .module-surround5, .round2 .module-surround5, .round3 .module-surround5, .round4 .module-surround5, .round5 .module-surround5 {
		right: expression((this.offsetParent.offsetWidth % 2) ? '-2px' : '-1px');
		bottom: expression((this.offsetParent.offsetHeight % 2) ? '-2px' : '-1px');
		}
		.round .module-surround3, .round2 .module-surround3, .round3 .module-surround3, .round4 .module-surround3, .round5 .module-surround3, .module-surround5 {
		right: expression((this.offsetParent.offsetWidth % 2) ? '-2px' : '-1px');
		}
		.round .module-surround4, .round2 .module-surround4, .round3 .module-surround4, .round4 .module-surround4, .round5 .module-surround4, .module-surround4 {
		bottom: expression((this.offsetParent.offsetHeight % 2) ? '-2px' : '-1px');
		}
		</style>
		<![endif]-->
		<?php endif; ?>

		<?php if ($option['rokbox_enabled'] == 'true') { ?>
  		
  			<script type="text/javascript">var rokboxPath = "<?php bloginfo('template_directory'); ?>/js/rokbox/";</script>
  			<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/rokbox/rokbox.js"></script>
  			<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/rokbox/themes/<?php echo $option['rokbox_style']; ?>/rokbox-config.js"></script>
  			
  		<?php } ?>

		<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/rokfonts.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/rokutils.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/rokutils.inputs.js"></script>
		
		<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/roktabs/roktabs.js"></script>
 		
 		<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/rokstories/js/rokstories.js"></script>
 		<script type="text/javascript">var RokStoriesImage = {}, RokStoriesLinks = {};</script>
 		
 		<?php if(rok_isIe(6) && $option['ie_warning'] == 'true') : ?>
 		
  			<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/rokie6warn.js"></script>
  			
		<?php endif; ?>

		<script type="text/javascript">	
		window.addEvent('domready', function() {
			var modules = ['side-mod', 'showcase-panel', 'moduletable', 'article-rel-wrapper'];
			var header = ['h3','h2','h1'];
			GantryBuildSpans(modules, header);
		});
		InputsExclusion.push('.content_vote')
		</script>
  
		<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
		
		<?php wp_head(); ?>
		
	</head>
	
	<body id="<?php echo $option['font_face']; ?>" class="<?php echo $option['font_size']; ?> <?php echo $presetstyle; ?> body-<?php echo $bodystyle; ?> head-<?php echo $headerstyle; ?> iehandle">
	
		<!-- Begin Header -->
	
		<div id="header-bg">
		
			<?php if(is_active_sidebar('top_menu')) { ?>
		
			<!-- Begin Horizontal Menu -->
				
			<div id="horiz-menu" class="fusion">
				<div class="wrapper">
					<div class="padding">
						<div id="horizmenu-surround">
							
							<?php dynamic_sidebar('Top Menu'); ?>
							
						</div>
						<div class="clr"></div>
					</div>
				</div>
			</div>
		
			<!-- End Horizontal Menu -->
			
			<?php } ?>
		
			<!-- Begin Showcase -->
			
			<div class="wrapper">
				<div id="showcase-section">
				
					<?php if($option['site_logo'] == 'true' || $option['top_blogroll'] == 'true' || is_active_sidebar('logo')) { ?>

					<!-- Begin Logo Module -->
								
					<div class="logo-module">
						
						<?php if ($option['site_logo'] == 'true') { ?>
			
						<!-- Begin Logo -->
				
						<a href="<?php bloginfo('url'); ?>" id="logo"></a>
					
						<!--End Logo-->
					
						<?php } ?>
						
						<?php if(is_front_page()) { ?>
						
							<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Logo')) : ?>
						
								<?php if($option['top_blogroll'] == 'true') { ?>
							
								<div class="moduletable">
									<ul class="logo-list">
								
										<?php wp_list_bookmarks('title_li=&orderby='.$option['top_blogroll_order'].'&limit='.$option['top_blogroll_limit'].'&link_before=<span>&link_after=</span>&categorize=0&category='.$option['top_blogroll_category']); ?>
								
									</ul>
								</div>
						
								<?php } ?>
						
							<?php endif; ?>
						
						<?php } ?>
						
					</div>
				
					<!-- End Logo Module -->
					
					<?php } ?>
					
					<?php if(is_front_page() && is_active_sidebar('top_banner')) { ?>
					
					<!-- Begin Top Banner -->
								
					<div class="feature-module">				
						<div class="moduletable">
							<div class="module-top">
								<div class="module-top2"></div>
								<div class="module-top3"></div>
							</div>
							<div class="module-inner">
							
								<?php dynamic_sidebar('Top Banner'); ?>
							
							</div>
							<div class="module-bottom">
								<div class="module-bottom2"></div>
								<div class="module-bottom3"></div>
							</div>
						</div>
					</div>
					
					<!-- End Top Banner -->
					
					<div class="clr"></div>
					
					<?php } ?>
					
					<?php if(is_front_page() && (is_active_sidebar('showcase_1') || is_active_sidebar('showcase_2') || is_active_sidebar('showcase_3'))) { ?>
					
					<div class="spacer w33" id="showmodules">
					
						<?php if(is_active_sidebar('showcase_1')) { ?>
					
						<!-- Begin Showcase 1 Widget -->
					
						<div class="block first">
							<div class="">
								<div class="moduletable">
									<div class="module-top">
										<div class="module-top2"></div>
										<div class="module-top3"></div>
									</div>
									<div class="module-inner">
										
										<?php dynamic_sidebar('Showcase 1'); ?>
										
									</div>
									<div class="module-bottom">
										<div class="module-bottom2"></div>
										<div class="module-bottom3"></div>
									</div>
								</div>
							</div>
						</div>
						
						<!-- End Showcase 1 Widget -->
						
						<?php } ?>
						
						<?php if(is_active_sidebar('showcase_2')) { ?>
						
						<!-- Begin Showcase 2 Widget -->
					
						<div class="block middle">
							<div class="">
								<div class="moduletable">
									<div class="module-top">
										<div class="module-top2"></div>
										<div class="module-top3"></div>
									</div>
									<div class="module-inner">
										
										<?php dynamic_sidebar('Showcase 2'); ?>
										
									</div>
									<div class="module-bottom">
										<div class="module-bottom2"></div>
										<div class="module-bottom3"></div>
									</div>
								</div>
							</div>
						</div>
						
						<!-- End Showcase 2 Widget -->
						
						<?php } ?>
						
						<?php if(is_active_sidebar('showcase_3')) { ?>
						
						<!-- Begin Showcase 3 Widget -->
					
						<div class="block last">
							<div class="">
								<div class="moduletable">
									<div class="module-top">
										<div class="module-top2"></div>
										<div class="module-top3"></div>
									</div>
									<div class="module-inner">
										
										<?php dynamic_sidebar('Showcase 3'); ?>
										
									</div>
									<div class="module-bottom">
										<div class="module-bottom2"></div>
										<div class="module-bottom3"></div>
									</div>
								</div>
							</div>
						</div>
						
						<!-- End Showcase 3 Widget -->
						
						<?php } ?>

					</div>
					
					<?php } ?>
					
					<div class="clr"></div>
			
				</div>
			</div>
			
			<!-- End Showcase -->

		</div>
	
		<!-- End Header -->
		
		<!-- Begin Top Bar -->
		
		<div id="top-bar">
			<div class="wrapper">
				<div class="padding">
				
					<?php if ($option['top_date'] == 'true') { ?>
			
					<!-- Begin Date -->
				
					<div class="date-block">
	   					<span class="date1"><?php echo date_i18n('l'); ?></span>
	   					<span class="date2"><?php echo date_i18n('F'); ?></span>
	   					<span class="date3"><?php echo date_i18n('d , '); ?></span>
	   					<span class="date4"><?php echo date_i18n('Y'); ?></span>
					</div>
					
					<!-- End Date -->
					
					<?php } ?>
					
					<?php if ($option['search_box'] == 'true') { ?>
				
					<!-- Begin Search -->
					
					<div id="searchmod">
						<div class="moduletable">
							<div id="searchmod-surround">
								<form name="rokajaxsearch" id="rokajaxsearch" class="blue" action="<?php bloginfo('home'); ?>/" method="get">
									<div class="rokajaxsearch">
										<input id="roksearch_search_str" name="s" type="text" class="inputbox" value=" <?php _re('Search...'); ?>" onblur="if(this.value=='') this.value=' <?php _re('Search...'); ?>';" onfocus="if(this.value==' <?php _re('Search...'); ?>') this.value='';" />
										<input type="hidden" name="task" value="search" />
									</div>
								</form>
							</div>
						</div>
					</div>
					
					<!-- End Search -->
					
					<?php } ?>
					
					<div class="clr"></div>
				</div>
			</div>
		</div>
		
		<!-- End Top Bar -->