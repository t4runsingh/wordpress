<?php get_header(); ?>

		<?php $option = get_option('moxy-options'); ?>
	
		<!-- Begin Main Body -->
		
		<div id="main-body">
			<div id="main-content" class="<?php echo $option['layout_front']; ?>">
		 		<div class="colmask leftmenu <?php if (rok_isIe(6)) echo 'wrapper'; ?>">
		 			<?php if (!rok_isIe(6)):?><div class="wrapper"><?php endif; ?>
		 				<div class="colmid">
		    	    		<div class="colright">
				       
				      	 		<!-- Begin Main Column (col1wrap) -->   
					    		
					    		<div class="col1wrap">
							        <div class="col1pad">
							            <div class="col1">
									        <div id="maincol">
												<div class="bodycontent">
    												<div id="maincontent-block">
														<div class="blog">
														
															<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
															query_posts('paged='.$paged.'&orderby='.$option['blog_order'].'&cat='.$option['blog_cat']); ?>

															<?php while (have_posts()) : the_post(); ?>
														
															<!-- Begin Post -->

															<div class="leading">		
																<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
																
																	<?php if ($option['blog_title'] == 'true') { ?>
																	
																	<!-- Begin Title -->
																
	   																<div class="article-rel-wrapper">
	   																
	   																	<?php if ($option['blog_title_link'] == 'true') { ?>
	   																
																		<h2 class="contentheading">
																			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
																		</h2>
																			
																		<?php } else { ?>
																			
																		<h2 class="contentheading">
																			<?php the_title(); ?>
																		</h2>
																			
																		<?php } ?>
																			
																	</div>
																		
																	<!-- End Title -->
																		
																	<?php } ?>
																	
																	<?php if ($option['blog_meta'] == 'true') { ?>
																	
																	<!-- Begin Meta -->
																	
																	<div class="article-info-surround">
																	
																		<?php if ($option['blog_author'] == 'true' || $option['blog_comments_icon'] == 'true') { ?>
																	
																		<div class="article-info-right">
																		
																			<?php if ($option['blog_author'] == 'true') { ?>
																		
																			<span class="createdby"><?php the_author(); ?></span>
																			
																			<?php } ?>
																			
																			<?php if ($option['blog_comments_icon'] == 'true') { ?>
																			
																			<p class="buttonheading">
																				<a title="<?php comments_number(_r('No Comments'), _r('1 Comment'), _r('% Comments')); ?>" href="<?php the_permalink(); ?>#comments">
																					<span class="icon pdf">&nbsp;</span>
																				</a>
																			</p>
																			
																			<?php } ?>
																			
																		</div>
																		
																		<?php } ?>
																		
																		<?php if ($option['blog_date'] == 'true') { ?>
																		
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
																	
																	<?php $thumb = get_post_meta($post->ID, 'thumb', TRUE); ?>
																	<?php if(function_exists('has_post_thumbnail') && has_post_thumbnail()) { ?>
																		
																	<!-- Begin Post Image -->
		
																	<div class="image-main-surround">
																		<?php the_post_thumbnail(); ?>
																	</div>
																		
																	<!-- End Post Image -->
																		
																	<?php } else { ?>
																		
																		<?php if ($thumb != '') { ?>
																		
																		<!-- Begin Post Image -->
		
																		<div class="image-main-surround">
																			<img src="<?php bloginfo('template_directory'); ?>/timthumb.php?src=<?php echo $thumb ?>&amp;w=<?php echo $option['thumb_width']; ?>&amp;h=<?php echo $option['thumb_height']; ?>&amp;zc=1&amp;q=75" alt="<?php the_title(); ?>" />
																		</div>
																		
																		<!-- End Post Image -->
																		
																		<?php } ?>
																		
																	<?php } ?>
	
																	<!-- Begin Content -->
																		
																	<div class="main-text">
																			
																		<?php if ($option['blog_content'] == 'content') { ?>
																							
																		<?php the_content(false); ?>
																							
																		<?php } else { ?>
																							
																		<?php the_excerpt(); ?>
																								
																		<?php } ?>
																		
																		<div class="clr"></div>
																			
																		<?php if(preg_match('/<!--more(.*?)?-->/', $post->post_content)) { ?>
																			
																		<div class="readon-wrap1">
																			<div class="readon1-l"></div>
																			<a href="<?php the_permalink(); ?>" class="readon-main">
																				<span class="readon1-m">
																					<span class="readon1-r">
																						<?php _re('More Information'); ?>
																					</span>
																				</span>
																			</a>
																		</div>
																			
																		<div class="clr"></div>
																			
																		<?php } ?>
																			
																	</div>
																		
																	<div class="clr"></div>
																	
																	<!-- End Content -->

																</div>
															</div>
															<span class="leading_separator">&nbsp;</span>
															
															<!-- End Post -->
															
															<?php endwhile;?>
																											
															<?php global $wp_query; $total_pages = $wp_query->max_num_pages; if ( $total_pages > 1 ) { ?>
																	
															<div class="pagination nav">
																<div class="alignleft">
																	<?php next_posts_link('&laquo; '._r('Older Entries')); ?>
																</div>
																<div class="alignright">
																	<?php previous_posts_link(_r('Newer Entries').' &raquo;') ?>
																</div>
																<div class="clr"></div>
															</div>
																		
															<?php } ?>	
	
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
				        		
				        		<?php if($option['left_front_sidebar'] == 'true') { ?>
						    		
								<?php get_sidebar('left'); ?>
									
								<?php } ?>
				         
					   			<!-- End Left Column (col2) -->
					    		
					    		<!-- Begin Right Column (col3) -->

								<?php if($option['right_front_sidebar'] == 'true') { ?>
						    		
								<?php get_sidebar('right'); ?>
									
								<?php } ?>
					     
					    		<!-- End Right Column (col3) -->

							</div>
						</div>
					<?php if (!rok_isIe(6)):?></div><?php endif; ?>
				</div>
			</div>
			
			<?php if(is_active_sidebar('user_1') || is_active_sidebar('user_2') || is_active_sidebar('user_3') || is_active_sidebar('user_4')) { ?>
			
			<!-- Begin Main Bottom -->
			
			<div id="bottom-main">
				<div class="wrapper">
					<div id="mainmodules3" class="spacer w99">
						<div class="block full">
							<div class="moduletable" style="padding: 15px 0;">
							
								<?php if(is_active_sidebar('user_1')) { ?>
								
								<!-- Begin User 1 Widget -->
								
								<div class="demo-submain-block">
									<div class="demo-submain-text">
								
										<?php dynamic_sidebar('User 1'); ?>
										
									</div>
								</div>
								
								<!-- End User 1 Widget -->
								
								<?php } ?>
								
								<?php if(is_active_sidebar('user_2')) { ?>
								
								<!-- Begin User 2 Widget -->
								
								<div class="demo-submain-block">
									<div class="demo-submain-text">
								
										<?php dynamic_sidebar('User 2'); ?>
										
									</div>
								</div>
								
								<!-- End User 2 Widget -->
								
								<?php } ?>
								
								<?php if(is_active_sidebar('user_3')) { ?>
								
								<!-- Begin User 3 Widget -->
								
								<div class="demo-submain-block">
									<div class="demo-submain-text">
								
										<?php dynamic_sidebar('User 3'); ?>
										
									</div>
								</div>
								
								<!-- End User 3 Widget -->
								
								<?php } ?>
								
								<?php if(is_active_sidebar('user_4')) { ?>
								
								<!-- Begin User 4 Widget -->
								
								<div class="demo-submain-block">
									<div class="demo-submain-text">
								
										<?php dynamic_sidebar('User 4'); ?>
										
									</div>
								</div>
								
								<!-- End User 4 Widget -->
								
								<?php } ?>

								<div class="clr"></div>
								
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<!-- End Main Bottom -->
			
			<?php } ?>
			
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