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
														<div class="blog archives">
														
															<?php 
																											
															$paged = (get_query_var('paged')) ? get_query_var('paged') : 1; 
																											
															if (is_category()) { $archive_postcount = $option['category_postcount']; $post_meta_enabled = $option['category_postmeta']; $title_links = $option['category_titlelink']; $title = $option['category_title']; $post_meta_author = $option['category_postmeta_author']; $post_meta_date = $option['category_postmeta_date']; $post_meta_comments = $option['category_postmeta_comments']; $content_display = $option['category_contentdis']; }
															if (is_day() || is_month() || is_year() || is_author()) { $archive_postcount = $option['archive_postcount']; $post_meta_enabled = $option['archive_postmeta']; $title_links = $option['archive_titlelink']; $title = $option['archive_title']; $post_meta_author = $option['archive_postmeta_author']; $post_meta_date = $option['archive_postmeta_date']; $post_meta_comments = $option['archive_postmeta_comments']; $content_display = $option['archive_contentdis']; }
															if (is_tag()) { $archive_postcount = $option['tag_postcount']; $post_meta_enabled = $option['tag_postmeta']; $title_links = $option['tag_titlelink']; $title = $option['tag_title']; $post_meta_author = $option['tag_postmeta_author']; $post_meta_date = $option['tag_postmeta_date']; $post_meta_comments = $option['tag_postmeta_comments']; $content_display = $option['tag_contentdis']; }
																						
															?>
																											
															<?php query_posts($query_string.'&posts_per_page='.$archive_postcount.'&paged='.$paged); ?>
															<?php if (have_posts()) : ?>
																					
															<div class="article-rel-wrapper">
	    																										
	    													<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
                    										<?php /* If this is a category archive */ if (is_category()) { ?>
                    											<h2 class="componentheading"><?php _re('Category:'); ?> <?php single_cat_title(); ?></h2>
                    										<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
                    											<h2 class="componentheading"><?php _re('Posts Tagged'); ?> &#8216;<?php single_tag_title(); ?>&#8217;</h2>
                    										<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
                    											<h2 class="componentheading"><?php _re('Archive for'); ?> <?php the_time('F jS, Y'); ?></h2>
                  	  										<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
                    											<h2 class="componentheading"><?php _re('Archive for'); ?> <?php the_time('F, Y'); ?></h2>
                    										<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
                    											<h2 class="componentheading"><?php _re('Archive for'); ?> <?php the_time('Y'); ?></h2>
                    										<?php /* If this is an author archive */ } elseif (is_author()) { ?>
                    											<h2 class="componentheading"><?php _re('Author Archive'); ?></h2>
                    										<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
                   												<h2 class="componentheading"><?php _re('Blog Archives'); ?></h2>
                   											<?php } ?>
                   																							
	    													</div>
	    																									
	    													<?php while (have_posts()) : the_post(); ?>
														
															<!-- Begin Post -->

															<div class="leading">		
																<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
																
																	<?php if ($title == 'true') { ?>
																	
																	<!-- Begin Title -->
																
	   																<div class="article-rel-wrapper">
	   																
	   																	<?php if ($title_links == 'true') { ?>
	   																
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
																	
																	<?php if ($post_meta_enabled == 'true') { ?>
																	
																	<!-- Begin Meta -->
																	
																	<div class="article-info-surround">
																	
																		<?php if ($post_meta_author == 'true' || $post_meta_comments == 'true') { ?>
																	
																		<div class="article-info-right">
																		
																			<?php if ($post_meta_author == 'true') { ?>
																		
																			<span class="createdby"><?php the_author(); ?></span>
																			
																			<?php } ?>
																			
																			<?php if ($post_meta_comments == 'true') { ?>
																			
																			<p class="buttonheading">
																				<a title="<?php comments_number(_r('No Comments'), _r('1 Comment'), _r('% Comments')); ?>" href="<?php the_permalink(); ?>#comments">
																					<span class="icon pdf">&nbsp;</span>
																				</a>
																			</p>
																			
																			<?php } ?>
																			
																		</div>
																		
																		<?php } ?>
																		
																		<?php if ($post_meta_date == 'true') { ?>
																		
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
																			
																		<?php if ($content_display == 'content') { ?>
																							
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
																
															<?php else : ?>
																											
															<span class="attention"><?php _re("Sorry, but there aren't any posts matching your query."); ?></span>
																											
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