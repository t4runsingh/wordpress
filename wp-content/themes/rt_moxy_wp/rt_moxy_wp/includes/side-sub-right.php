												<?php $option = get_option('moxy-options'); ?>	
												
												<!-- Begin Authors -->
												
												<?php if ($option['sidebar_right_sub_authors'] == 'true') { ?>
											
												<div class="round">
													<div class="moduletable">
														<div class="module-surround">
															<div class="module-grad"></div>
															<div class="module-surround2"></div>
															<div class="module-surround3"></div>
															<div class="module-surround4"></div>
															<div class="module-surround5"></div>
															<div class="module-inner">
															
																<h3 class="module-title"><?php _re('Authors'); ?></h3>
															
																<!-- Begin Widget Content -->
																	
																<ul class="menu">
																			
																<?php wp_list_authors('show_fullname='.$option['sidebar_right_sub_authors_fullname'].'&exclude_admin='.$option['sidebar_right_sub_authors_exadmin']); ?>
										
																</ul>
																
																<!-- End Widget Content -->
															
															</div>				
														</div>
													</div>
												</div>
												
												<?php } ?>
												
												<!-- End Authors -->
												
												<!-- Begin Blogroll -->
												
												<?php if ($option['sidebar_right_sub_blogroll'] == 'true') { ?>
											
												<div class="round2">
													<div class="moduletable">
														<div class="module-surround">
															<div class="module-grad"></div>
															<div class="module-surround2"></div>
															<div class="module-surround3"></div>
															<div class="module-surround4"></div>
															<div class="module-surround5"></div>
															<div class="module-inner">
															
																<h3 class="module-title"><?php _re('Blogroll'); ?></h3>
															
																<!-- Begin Widget Content -->
																	
																<ul class="menu">
																			
																<?php wp_list_bookmarks('title_li=&orderby='.$option['sidebar_right_sub_blogroll_order'].'&limit='.$option['sidebar_right_sub_blogroll_limit'].'&title_before=<h4>&title_after=</h4>&categorize='.$option['sidebar_right_sub_blogroll_categorize'].'&category='.$option['sidebar_right_sub_blogroll_category']); ?>
										
																</ul>
																
																<!-- End Widget Content -->
															
															</div>				
														</div>
													</div>
												</div>
												
												<?php } ?>
												
												<!-- End Blogroll -->
												
												<!-- Begin Meta -->
												
												<?php if ($option['sidebar_right_sub_meta'] == 'true') { ?>
											
												<div class="round3">
													<div class="moduletable">
														<div class="module-surround">
															<div class="module-grad"></div>
															<div class="module-surround2"></div>
															<div class="module-surround3"></div>
															<div class="module-surround4"></div>
															<div class="module-surround5"></div>
															<div class="module-inner">
															
																<h3 class="module-title"><?php _re('Meta'); ?></h3>
															
																<!-- Begin Widget Content -->
																	
																<ul class="menu">
																			
																	<li><?php wp_loginout(); ?></li>
																	<li><a href="http://validator.w3.org/check/referer" title="This page validates as XHTML 1.0 Transitional"><?php _re('Valid'); ?> <abbr title="eXtensible HyperText Markup Language">XHTML</abbr></a></li>
																	<li><a href="http://gmpg.org/xfn/"><abbr title="XHTML Friends Network">XFN</abbr></a></li>
																	<li><a href="http://wordpress.org/" title="Powered by WordPress, state-of-the-art semantic personal publishing platform.">WordPress</a></li>
																	<?php wp_meta(); ?>
										
																</ul>
																
																<!-- End Widget Content -->
															
															</div>				
														</div>
													</div>
												</div>
												
												<?php } ?>
												
												<!-- End Meta -->