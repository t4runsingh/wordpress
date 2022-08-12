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
												<div class="bodycontent">
    												<div id="maincontent-block">
														<div class="blog search">
														
															<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
																											
															<?php query_posts($query_string.'&posts_per_page='.$option['search_postcount'].'&paged='.$paged); ?>
															<?php if (have_posts()) : ?>
																						
															<div class="article-rel-wrapper">
	    																										
                   												<h2 class="componentheading"><?php _re('Search Results for '); ?>&#8216;<?php the_search_query(); ?>&#8217;</h2>
                    																							
	    													</div>
	    																									
	    													<?php while (have_posts()) : the_post(); ?>
															
															<!-- Begin Post -->
																
															<?php
	    																							
	    													$title 	= get_the_title();
	    													$content = get_the_content(false);
	    													$excerpt = get_the_excerpt();
	    													$keys = explode(" ",$s);
	    													$title = preg_replace('/('.implode('|', $keys) .')/iu', '<span class="search-excerpt">\0</span>', $title);
	    													$content = preg_replace('/('.implode('|', $keys) .')/iu', '<span class="search-excerpt">\0</span>', $content);
	    													$excerpt = preg_replace('/('.implode('|', $keys) .')/iu', '<span class="search-excerpt">\0</span>', $excerpt);
	    																														
	    													?>

															<div class="leading">		
																<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
																
																	<?php if ($option['search_title'] == 'true') { ?>
																	
																	<!-- Begin Title -->
																
	   																<div class="article-rel-wrapper">
	   																
	   																	<?php if ($option['search_titlelink'] == 'true') { ?>
	   																
																		<h2 class="contentheading">
																			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php echo $title; ?></a>
																		</h2>
																			
																		<?php } else { ?>
																			
																		<h2 class="contentheading">
																			<?php echo $title; ?>
																		</h2>
																			
																		<?php } ?>
																			
																	</div>
																		
																	<!-- End Title -->
																		
																	<?php } ?>
																	
																	<?php if ($option['search_postmeta'] == 'true') { ?>
																	
																	<!-- Begin Meta -->
																	
																	<div class="article-info-surround">
																	
																		<?php if ($option['search_postmeta_author'] == 'true' || $option['search_postmeta_comments'] == 'true') { ?>
																	
																		<div class="article-info-right">
																		
																			<?php if ($option['search_postmeta_author'] == 'true') { ?>
																		
																			<span class="createdby"><?php the_author(); ?></span>
																			
																			<?php } ?>
																			
																			<?php if ($option['search_postmeta_comments'] == 'true') { ?>
																			
																			<p class="buttonheading">
																				<a title="<?php comments_number(_r('No Comments'), _r('1 Comment'), _r('% Comments')); ?>" href="<?php the_permalink(); ?>#comments">
																					<span class="icon pdf">&nbsp;</span>
																				</a>
																			</p>
																			
																			<?php } ?>
																			
																		</div>
																		
																		<?php } ?>
																		
																		<?php if ($option['search_postmeta_date'] == 'true') { ?>
																		
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
																			
																		<?php if ($option['search_contentdis'] == 'content') { ?>
																							
																		<?php echo $content; ?>
																							
																		<?php } else { ?>
																							
																		<?php echo $excerpt; ?>
																								
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
																
															<?php else : ?>
																											
															<span class="attention"><?php _re("No posts found. Try a different search?"); ?></span>
																											
															<?php endif; ?>
																											
															<?php wp_reset_query(); ?>
	
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