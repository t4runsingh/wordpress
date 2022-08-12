									<?php $option = get_option('moxy-options'); ?>						    		
						    		
						    		<div class="col2">
										<div id="leftcol">
											<div id="leftcol-padding">
											
												<!-- Begin Over Left Front Sidebar -->
									
												<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Over Left Front Sidebar') ) : ?>
												<?php endif; ?>
									
												<!-- End Over Left Front Sidebar -->
			                              	                  
			                              	 	<!-- Begin Left Front Sidebar -->
			                                                	
			                                    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Left Front Sidebar') ) : ?>
			                                  	             
	                							<?php include(TEMPLATEPATH . '/includes/' . $option['left_front_side_file']); ?>
																
												<?php endif; ?>
																
												<!-- End Left Front Sidebar -->
																
												<!-- Begin Under Left Front Sidebar -->
									
												<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Under Left Front Sidebar') ) : ?>
												<?php endif; ?>
									
												<!-- End Under Left Front Sidebar -->
									
											</div>
										</div>
						    		</div>