<?php get_header(); ?>

		<?php $option = get_option('moxy-options'); ?>
	
		<!-- Begin Main Body -->
		
		<div id="main-body">
			<div id="main-content" class="<?php echo $option['layout_subpage']; ?>">
		 		<div class="colmask leftmenu <?php if (rok_isIe(6)) echo 'wrapper'; ?>">
		 			<?php if (!rok_isIe(6)):?><div class="wrapper"><?php endif; ?>
		 				<div class="colmid">
		    	    		<div class="colright">
				       
				      	 		<!-- Begin Main Column (col1wrap) -->   
					    		
					    		<div class="col1wrap">
							        <div class="col1pad">
							            <div class="col1">
									        <div id="maincol">
									        	
									        	<?php if($option['breadcrumbs'] == 'true') { ?>
												
													<div id="breadcrumbs">
													
														<a href="<?php bloginfo('url'); ?>" id="breadcrumbs-home"></a>
														
		                    							<span class="breadcrumbs pathway">
		                    																
														<?php
                    													
															$breadcrumbs_path = get_bloginfo('template_directory');
															$parent_id  = $post->post_parent;
                    										$breadcrumbs = array();
                    										while ($parent_id) {
                    											$page = get_page($parent_id);
                    											$breadcrumbs[] = '<a href="'.get_permalink($page->ID).'" title="" class="pathway">'.get_the_title($page->ID).'</a>';
                    											$parent_id  = $page->post_parent;
                    										}
           													$breadcrumbs = array_reverse($breadcrumbs);
                    										foreach ($breadcrumbs as $crumb) echo $crumb.'<img alt="" src="'.$breadcrumbs_path.'/images/arrow.png"/>';
                    													
                    										?>
																								
															<span class="no-link"><?php the_title(); ?></span>
																						
														</span>

	    											</div>
	    											
	    										<?php } ?>
									        
												<div class="bodycontent">
    												<div id="maincontent-block">
														<div class="blog custom-page">
														
															<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
														
															<!-- Begin Post -->

															<div class="leading">		
																<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
																
																	<?php if ($option['page_title'] == 'true') { ?>
																	
																	<!-- Begin Title -->
																
	   																<div class="article-rel-wrapper">
																			
																		<h2 class="contentheading">
																			<?php the_title(); ?>
																		</h2>
																			
																	</div>
																		
																	<!-- End Title -->
																		
																	<?php } ?>
																	
																	<?php if ($option['page_meta'] == 'true') { ?>
																	
																	<!-- Begin Meta -->
																	
																	<div class="article-info-surround">
																	
																		<?php if ($option['page_meta_author'] == 'true' || $option['page_meta_comments'] == 'true') { ?>
																	
																		<div class="article-info-right">
																		
																			<?php if ($option['page_meta_author'] == 'true') { ?>
																		
																			<span class="createdby"><?php the_author(); ?></span>
																			
																			<?php } ?>
																			
																			<?php if ($option['page_meta_comments'] == 'true') { ?>
																			
																			<p class="buttonheading">
																				<a title="<?php comments_number(_r('No Comments'), _r('1 Comment'), _r('% Comments')); ?>" href="<?php the_permalink(); ?>#comments">
																					<span class="icon pdf">&nbsp;</span>
																				</a>
																			</p>
																			
																			<?php } ?>
																			
																		</div>
																		
																		<?php } ?>
																		
																		<?php if ($option['page_meta_date'] == 'true') { ?>
																		
																		<div class="iteminfo">
																			<div class="article-info-left">
																				<span class="createdate">
																					<span class="date1"><?php the_time('M j'); ?></span>
																					<span class="date2">
																						<span class="date-div">|</span><?php the_time('H:i'); ?>
																					</span>
																				</span>
																				<div class="clr"></div>
																			</div>
																		</div>
																		
																		<?php } ?>
																		
																	</div>
		
																	<!-- End Meta -->
																	
																	<?php } ?>
	
																	<!-- Begin Content -->
																		
																	<div class="main-text">
																			
																		<?php if($option['page_tweetmeme'] == 'true') { ?>
	    																									
	    																<div class="tweetmeme png"><script type="text/javascript" src="http://tweetmeme.com/i/scripts/button.js"></script></div>
	    																									
	    																<?php } ?>
																							
																		<?php the_content(); ?>
																			
																		<div class="clr"></div>
																			
																		<?php wp_link_pages('before=<div class="pagination"><span class="pagination-name">'._r('Pages:').'</span><span class="pagination-numbers">&after=</span></div><br />'); ?>
																											
																		<?php edit_post_link(_r('Edit this entry.'), '', ''); ?>
																			
																		<?php if(comments_open()) { ?>
													
																		<a name="comments"></a>
																												
																		<?php comments_template(); ?>
																		
																		<?php } ?>
																			
																	</div>
																	
																	<div class="clr"></div>
																	
																	<!-- End Content -->

																</div>
															</div>
															<span class="leading_separator">&nbsp;</span>
															
															<!-- End Post -->
															
															<?php endwhile; ?>
																
															<?php else : ?>
																
															<span class="attention"><?php _re('Sorry, no pages matched your criteria.'); ?></span>
																
															<?php endif; ?>
	
														</div>
		    										</div>
		    									</div>
    											<div class="clr"></div>

       										</div>    
										</div>
					      			</div>
					    		</div>
					    
					    		<!-- End Main Column (col1wrap) -->
				        
				        		<!-- Begin Left Column (col2) -->
				        		
				        		<?php if($option['left_sub_sidebar'] == 'true') { ?>
						    		
								<?php get_sidebar('left-sub'); ?>
									
								<?php } ?>
				         
					   			<!-- End Left Column (col2) -->
					    		
					    		<!-- Begin Right Column (col3) -->

								<?php if($option['right_sub_sidebar'] == 'true') { ?>
						    		
								<?php get_sidebar('right-sub'); ?>
									
								<?php } ?>
					     
					    		<!-- End Right Column (col3) -->

							</div>
						</div>
					<?php if (!rok_isIe(6)):?></div><?php endif; ?>
				</div>
			</div>
			
		</div>
		
		<!-- End Main Body -->
	
		<?php if(is_active_sidebar('user_5')) { ?>
	
		<!-- Begin Bottom Section -->
		
		<div id="bottom">
			<div class="wrapper">
				<div id="mainmodules4" class="spacer w99">
					<div class="block full">
						<div class="moduletable">
						
							<!-- Begin User 5 Widget -->
						
							<?php dynamic_sidebar('User 5'); ?>
							
							<!-- End User 5 Widget -->
							
							<h2 class="contentheading">&nbsp;</h2>
						
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- End Bottom Section -->
		
		<?php } ?>

<?php get_footer(); ?>