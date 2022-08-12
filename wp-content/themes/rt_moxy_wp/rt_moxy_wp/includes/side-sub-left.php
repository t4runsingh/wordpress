												<?php $option = get_option('moxy-options'); ?>	
												
												<!-- Begin Categories -->
												
												<?php if ($option['sidebar_left_sub_categories'] == 'true') { ?>
											
												<div class="round">
													<div class="moduletable">
														<div class="module-surround">
															<div class="module-grad"></div>
															<div class="module-surround2"></div>
															<div class="module-surround3"></div>
															<div class="module-surround4"></div>
															<div class="module-surround5"></div>
															<div class="module-inner">
															
																<h3 class="module-title"><?php _re('Categories'); ?></h3>
															
																<!-- Begin Widget Content -->
																	
																<ul class="menu">
																			
																	<?php echo preg_replace('@\<li class="([^>]*)>\<a([^>]*)>(.*?)\<\/a>@i', '<li class="$1><a$2><span>$3</span></a>', wp_list_categories('echo=0&title_li=&use_desc_for_title=0&orderby='.$option['sidebar_left_sub_categories_order'].'&hide_empty='.$option['sidebar_left_sub_categories_empty'].'&exclude='.$option['sidebar_left_sub_categories_exclude'])); ?>
										
																</ul>
																
																<!-- End Widget Content -->
															
															</div>				
														</div>
													</div>
												</div>
												
												<?php } ?>
												
												<!-- End Categories -->
												
												<!-- Begin Archives -->
												
												<?php if ($option['sidebar_left_sub_archives'] == 'true') { ?>
											
												<div class="round4">
													<div class="moduletable">
														<div class="module-surround">
															<div class="module-grad"></div>
															<div class="module-surround2"></div>
															<div class="module-surround3"></div>
															<div class="module-surround4"></div>
															<div class="module-surround5"></div>
															<div class="module-inner">
															
																<h3 class="module-title"><?php _re('Archives'); ?></h3>
															
																<!-- Begin Widget Content -->
																	
																<ul class="menu">
																			
																	<?php wp_get_archives('type='.$option['sidebar_left_sub_archives_type'].'&limit='.$option['sidebar_left_sub_archives_limit']); ?>
										
																</ul>
																
																<!-- End Widget Content -->
															
															</div>				
														</div>
													</div>
												</div>
												
												<?php } ?>
												
												<!-- End Archives -->
												
												<!-- Begin Tags -->
												
												<?php if ($option['sidebar_left_sub_tags'] == 'true') { ?>
											
												<div class="round5">
													<div class="moduletable">
														<div class="module-surround">
															<div class="module-grad"></div>
															<div class="module-surround2"></div>
															<div class="module-surround3"></div>
															<div class="module-surround4"></div>
															<div class="module-surround5"></div>
															<div class="module-inner">
															
																<h3 class="module-title"><?php _re('Tags'); ?></h3>
															
																<!-- Begin Widget Content -->
																	
																<?php wp_tag_cloud('orderby='.$option['sidebar_left_sub_tags_order']); ?>
																
																<!-- End Widget Content -->
															
															</div>				
														</div>
													</div>
												</div>
												
												<?php } ?>
												
												<!-- End Tags -->