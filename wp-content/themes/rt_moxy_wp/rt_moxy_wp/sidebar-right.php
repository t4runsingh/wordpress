									<?php $option = get_option('moxy-options'); ?>						    		
						    		
						    		<div class="col3">
										<div id="rightcol">
											<div id="rightcol-padding">
											
												<!-- Begin Over Right Front Sidebar -->
									
												<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Over Right Front Sidebar') ) : ?>
												<?php endif; ?>
									
												<!-- End Over Right Front Sidebar -->
			                              	                  
			                              	 	<!-- Begin Right Front Sidebar -->
			                                                	
			                                    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Right Front Sidebar') ) : ?>
			                                  	             
	                							<?php include(TEMPLATEPATH . '/includes/' . $option['right_front_side_file']); ?>
																
												<?php endif; ?>
																
												<!-- End Right Front Sidebar -->
																
												<!-- Begin Under Right Front Sidebar -->
									
												<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Under Right Front Sidebar') ) : ?>
												<?php endif; ?>
									
												<!-- End Under Right Front Sidebar -->
									
											</div>
										</div>
						    		</div>