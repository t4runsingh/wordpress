									<?php $option = get_option('moxy-options'); ?>						    		
						    		
						    		<div class="col2">
										<div id="leftcol">
											<div id="leftcol-padding">
											
												<!-- Begin Over Left Subpage Sidebar -->
									
												<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Over Left Subpage Sidebar') ) : ?>
												<?php endif; ?>
									
												<!-- End Over Left Subpage Sidebar -->
			                              	                  
			                              	 	<!-- Begin Left Subpage Sidebar -->
			                                                	
			                                    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Left Subpage Sidebar') ) : ?>
			                                  	             
	                							<?php include(TEMPLATEPATH . '/includes/' . $option['left_sub_side_file']); ?>
																
												<?php endif; ?>
																
												<!-- End Left Subpage Sidebar -->
																
												<!-- Begin Under Left Subpage Sidebar -->
									
												<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Under Left Subpage Sidebar') ) : ?>
												<?php endif; ?>
									
												<!-- End Under Left Subpage Sidebar -->
									
											</div>
										</div>
						    		</div>