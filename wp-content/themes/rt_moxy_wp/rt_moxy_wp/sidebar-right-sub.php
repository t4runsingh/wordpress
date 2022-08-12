									<?php $option = get_option('moxy-options'); ?>						    		
						    		
						    		<div class="col3">
										<div id="rightcol">
											<div id="rightcol-padding">
											
												<!-- Begin Over Right Subpage Sidebar -->
									
												<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Over Right Subpage Sidebar') ) : ?>
												<?php endif; ?>
									
												<!-- End Over Right Subpage Sidebar -->
			                              	                  
			                              	 	<!-- Begin Right Subpage Sidebar -->
			                                                	
			                                    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Right Subpage Sidebar') ) : ?>
			                                  	             
	                							<?php include(TEMPLATEPATH . '/includes/' . $option['right_sub_side_file']); ?>
																
												<?php endif; ?>
																
												<!-- End Right Subpage Sidebar -->
																
												<!-- Begin Under Right Subpage Sidebar -->
									
												<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Under Right Subpage Sidebar') ) : ?>
												<?php endif; ?>
									
												<!-- End Under Right Subpage Sidebar -->
									
											</div>
										</div>
						    		</div>