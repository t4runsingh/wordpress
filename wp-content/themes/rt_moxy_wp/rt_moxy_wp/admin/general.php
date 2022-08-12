<?php

	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'general.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

?>

	<?php $option = get_option('moxy-options'); ?>	
	
	<div class="general-wrapper">

		<div class="tabbar">
		
			<div class="tab1 singletab">
				<div class="tabl"></div>
				<div class="tabr"><a href="#main"><?php _re('Main'); ?></a></div>
			</div>
			
			<div class="tab2 singletab">
				<div class="tabl"></div>
				<div class="tabr"><a href="#blog"><?php _re('Blog'); ?></a></div>
			</div>
			
			<div class="tab3 singletab">
				<div class="tabl"></div>
				<div class="tabr"><a href="#header"><?php _re('Header'); ?></a></div>
			</div>
			
			<div class="tab4 singletab">
				<div class="tabl"></div>
				<div class="tabr"><a href="#footer"><?php _re('Footer'); ?></a></div>
			</div>
			
			<div class="tab5 singletab">
				<div class="tabl"></div>
				<div class="tabr"><a href="#dimensions"><?php _re('Dimensions'); ?></a></div>
			</div>
			
			<div class="tab6 singletab">
				<div class="tabl"></div>
				<div class="tabr"><a href="#rokbox"><?php _re('RokBox'); ?></a></div>
			</div>
	
		</div>
		<div class="clr"></div>
					
		<div class="main-general">
		
		<div class="inner-tabber">	
			<a name="main"></a>
			
			<span class="section-title"><?php _re('Main'); ?></span><br /><br />
		
			<table class="options_table">
				<tr>
					<td class="firstcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Breadcrumbs:'); ?>
							</div>
							<div class="paramcheck onlycheck">
								<?php if(rok_isIE()) { ?><label class="breadcrumbs"><?php } ?><input type="checkbox" value="true" class="checkbox" name="moxy-options[breadcrumbs]" id="breadcrumbs" <?php if($option['breadcrumbs'] == 'true') { ?>checked="checked"<?php } ?> /><?php if(rok_isIE()) { ?></label><?php } ?>
								<?php if(!rok_isIE()) { ?><label class="breadcrumbs" for="breadcrumbs"></label><?php } ?>
								<a href="#" rel="rokbox[350 70][module=op-breadcrumbs]"><span class="help">Help</span></a>
							</div>
							<div id="op-breadcrumbs" class="rthide"><?php _re('Displays breadcrumbs on single posts and pages.'); ?></div>
						</div>
					</td>
					<td class="secondcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('IE6 Warning:'); ?>
							</div>
							<div class="paramcheck onlycheck">
								<?php if(rok_isIE()) { ?><label class="ie_warning"><?php } ?><input type="checkbox" value="true" class="checkbox" name="moxy-options[ie_warning]" id="ie_warning" <?php if($option['ie_warning'] == 'true') { ?>checked="checked"<?php } ?> /><?php if(rok_isIE()) { ?></label><?php } ?>
								<?php if(!rok_isIE()) { ?><label class="ie_warning" for="ie_warning"></label><?php } ?>
								<a href="#" rel="rokbox[350 50][module=op-ie6-warn]"><span class="help">Help</span></a>
							</div>
							<div id="op-ie6-warn" class="rthide"><?php _re('Displays visitors a message that they\'re using IE6 and they should upgrade their browser to a newer version.'); ?></div>
						</div>
					</td>
				</tr>
				<tr>
					<td class="firstcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Font Face:'); ?>
							</div>
							<div class="paramcheck">
								<label class="font_face">
									<select id="font_face" name="moxy-options[font_face]">
      			   						<option value="ff-moxy" <?php if ($option['font_face'] == "ff-moxy") : ?>selected="selected"<?php endif; ?>>Moxy</option>
      			   						<option value="ff-bebas" <?php if ($option['font_face'] == "ff-bebas") : ?>selected="selected"<?php endif; ?>>Bebas</option>
      			   						<option value="ff-continuum" <?php if ($option['font_face'] == "ff-continuum") : ?>selected="selected"<?php endif; ?>>Continuum</option>
      			     					<option value="ff-geneva" <?php if ($option['font_face'] == "ff-geneva") : ?>selected="selected"<?php endif; ?>>Geneva</option>
      			    					<option value="ff-optima" <?php if ($option['font_face'] == "ff-optima") : ?>selected="selected"<?php endif; ?>>Optima</option>
      							   		<option value="ff-helvetica" <?php if ($option['font_face'] == "ff-helvetica") : ?>selected="selected"<?php endif; ?>>Helvetica</option>
      			     					<option value="ff-trebuchet" <?php if ($option['font_face'] == "ff-trebuchet") : ?>selected="selected"<?php endif; ?>>Trebuchet</option>
      			      					<option value="ff-lucida" <?php if ($option['font_face'] == "ff-lucida") : ?>selected="selected"<?php endif; ?>>Lucida</option>
      			      					<option value="ff-georgia" <?php if ($option['font_face'] == "ff-georgia") : ?>selected="selected"<?php endif; ?>>Georgia</option>
      			     					<option value="ff-palatino" <?php if ($option['font_face'] == "ff-palatino") : ?>selected="selected"<?php endif; ?>>Palatino</option>
                   					</select>
                   				</label>
                   				<a href="#" rel="rokbox[350 50][module=op-font-face]"><span class="help">Help</span></a>
							</div>	
							<div id="op-font-face" class="rthide"><?php _re('Choose the font you wish to use on your site.'); ?></div>
						</div>
					</td>
					<td class="secondcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Font Size:'); ?>
							</div>
							<div class="paramcheck">
								<label class="font_size">
									<select id="font_size" name="moxy-options[font_size]">
      			     					<option value="f-small" <?php if ($option['font_size'] == "f-small") : ?>selected="selected"<?php endif; ?>><?php _re('Smaller'); ?></option>
      			     					<option value="f-default" <?php if ($option['font_size'] == "f-default") : ?>selected="selected"<?php endif; ?>><?php _re('Default'); ?></option>
      			   						<option value="f-large" <?php if ($option['font_size'] == "f-large") : ?>selected="selected"<?php endif; ?>><?php _re('Larger'); ?></option>
                   					</select>
                   				</label>
                   				<a href="#" rel="rokbox[350 50][module=op-font-size]"><span class="help">Help</span></a>
							</div>
							<div id="op-font-size" class="rthide"><?php _re('Choose the font size you wish to use on your site.'); ?></div>
						</div>
					</td>
				</tr>
				<tr>
					<td class="firstcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Thumbnail Size:'); ?>
							</div>
							<div class="paramcheck doublefield">
								<div>
									<input class="textbox" id="thumb_width" type="text" size="3" maxlength="255" name="moxy-options[thumb_width]" value="<?php echo $option['thumb_width']; ?>" />
									<span style="margin-left:8px; line-height: 20px;">x</span>
									<input class="textbox" id="thumb_height" type="text" size="3" maxlength="255" name="moxy-options[thumb_height]" value="<?php echo $option['thumb_height']; ?>" />
                   				</div>
                   				<a href="#" rel="rokbox[350 50][module=op-thumb-size]"><span class="help">Help</span></a>
							</div>
							<div id="op-thumb-size" class="rthide"><?php _re('All images used as a thumbnails will be cropped to this size.'); ?></div>
						</div>
					</td>
					<td class="secondcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Display Search:'); ?>
							</div>
							<div class="paramcheck onlycheck">
								<?php if(rok_isIE()) { ?><label class="search_box"><?php } ?><input type="checkbox" value="true" class="checkbox" name="moxy-options[search_box]" id="search_box" <?php if($option['search_box'] == 'true') { ?>checked="checked"<?php } ?> /><?php if(rok_isIE()) { ?></label><?php } ?>
								<?php if(!rok_isIE()) { ?><label class="search_box" for="search_box"></label><?php } ?>
								<a href="#" rel="rokbox[350 50][module=op-search]"><span class="help">Help</span></a>
							</div>
							<div id="op-search" class="rthide"><?php _re('Displays search box in the top.'); ?></div>
						</div>
					</td>
				</tr>
				<tr>
					<td class="firstcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Top Logo:'); ?>
							</div>
							<div class="paramcheck onlycheck">
								<?php if(rok_isIE()) { ?><label class="site_logo"><?php } ?><input type="checkbox" value="true" class="checkbox" name="moxy-options[site_logo]" id="site_logo" <?php if($option['site_logo'] == 'true') { ?>checked="checked"<?php } ?> /><?php if(rok_isIE()) { ?></label><?php } ?>
								<?php if(!rok_isIE()) { ?><label class="site_logo" for="site_logo"></label><?php } ?>
								<a href="#" rel="rokbox[350 50][module=op-logo_enabled]"><span class="help">Help</span></a>
							</div>
							<div id="op-logo_enabled" class="rthide"><?php _re('Displays site logo in header.'); ?></div>
						</div>
					</td>
					<td class="secondcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Display Top Date:'); ?>
							</div>
							<div class="paramcheck onlycheck">
								<?php if(rok_isIE()) { ?><label class="top_date"><?php } ?><input type="checkbox" value="true" class="checkbox" name="moxy-options[top_date]" id="top_date" <?php if($option['top_date'] == 'true') { ?>checked="checked"<?php } ?> /><?php if(rok_isIE()) { ?></label><?php } ?>
								<?php if(!rok_isIE()) { ?><label class="top_date" for="top_date"></label><?php } ?>
								<a href="#" rel="rokbox[350 50][module=op-top_date]"><span class="help">Help</span></a>
							</div>
							<div id="op-top_date" class="rthide"><?php _re('Displays current date in the top bar.'); ?></div>
						</div>
					</td>
				</tr>
				<tr>
					<td class="firstcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('RocketTheme Logo:'); ?>
							</div>
							<div class="paramcheck onlycheck">
								<?php if(rok_isIE()) { ?><label class="footer_logo"><?php } ?><input type="checkbox" value="true" class="checkbox" name="moxy-options[footer_logo]" id="footer_logo" <?php if($option['footer_logo'] == 'true') { ?>checked="checked"<?php } ?> /><?php if(rok_isIE()) { ?></label><?php } ?>
								<?php if(!rok_isIE()) { ?><label class="footer_logo" for="footer_logo"></label><?php } ?>
								<a href="#" rel="rokbox[350 50][module=op-rocket_logo]"><span class="help">Help</span></a>
							</div>
							<div id="op-rocket_logo" class="rthide"><?php _re('Displays RocketTheme logo in the footer.'); ?></div>
						</div>
					</td>
					<td class="secondcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('"Back To Top" Button:'); ?>
							</div>
							<div class="paramcheck onlycheck">
								<?php if(rok_isIE()) { ?><label class="footer_backtop"><?php } ?><input type="checkbox" value="true" class="checkbox" name="moxy-options[footer_backtop]" id="footer_backtop" <?php if($option['footer_backtop'] == 'true') { ?>checked="checked"<?php } ?> /><?php if(rok_isIE()) { ?></label><?php } ?>
								<?php if(!rok_isIE()) { ?><label class="footer_backtop" for="footer_backtop"></label><?php } ?>
								<a href="#" rel="rokbox[350 50][module=op-back_top]"><span class="help">Help</span></a>
							</div>
							<div id="op-back_top" class="rthide">Displays "Back To Top" button at the bottom of the page.</div>
						</div>
					</td>
				</tr>
				<tr>
					<td class="firstcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Display Copyright:'); ?>
							</div>
							<div class="paramcheck onlycheck">
								<?php if(rok_isIE()) { ?><label class="footer_copyright"><?php } ?><input type="checkbox" value="true" class="checkbox" name="moxy-options[footer_copyright]" id="footer_copyright" <?php if($option['footer_copyright'] == 'true') { ?>checked="checked"<?php } ?> /><?php if(rok_isIE()) { ?></label><?php } ?>
								<?php if(!rok_isIE()) { ?><label class="footer_copyright" for="footer_copyright"></label><?php } ?>
								<a href="#" rel="rokbox[350 50][module=op-copyright]"><span class="help">Help</span></a>
							</div>
							<div id="op-copyright" class="rthide"><?php _re('Displays copyright in the footer.'); ?></div>
						</div>
					</td>
					<td class="secondcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Copyright Text:'); ?>
							</div>
							<div class="paramcheck">
								<label class="footer_copyright_text">
									<input class="textbox" id="footer_copyright_text" type="text" size="15" maxlength="255" name="moxy-options[footer_copyright_text]" value="<?php echo $option['footer_copyright_text']; ?>" />
                   				</label>
                   				<a href="#" rel="rokbox[450 50][module=op-copyright_text]"><span class="help">Help</span></a>
							</div>
							<div id="op-copyright_text" class="rthide"><?php _re('Here you can change the text that appears as copyright.'); ?></div>
						</div>
					</td>
				</tr>
			</table>
			</div>
			
			<div class="inner-tabber">
			<a name="blog"></a>
			
			<span class="section-title"><?php _re('Blog'); ?></span><br /><br />
		
			<table class="options_table">
				<tr>
					<td class="firstcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Blog Post Order:'); ?>
							</div>
							<div class="paramcheck">
								<label class="blog_order">
									<select id="blog_order" name="moxy-options[blog_order]">
      			   						<option value="author" <?php if ($option['blog_order'] == "author") : ?>selected="selected"<?php endif; ?>><?php _re('Author'); ?></option>    	
      			   						<option value="date" <?php if ($option['blog_order'] == "date") : ?>selected="selected"<?php endif; ?>><?php _re('Date'); ?></option> 
      			   						<option value="title" <?php if ($option['blog_order'] == "title") : ?>selected="selected"<?php endif; ?>><?php _re('Title'); ?></option> 
      			   						<option value="modified" <?php if ($option['blog_order'] == "modified") : ?>selected="selected"<?php endif; ?>><?php _re('Modified'); ?></option> 
      			   						<option value="ID" <?php if ($option['blog_order'] == "ID") : ?>selected="selected"<?php endif; ?>>ID</option>
      			   						<option value="rand" <?php if ($option['blog_order'] == "rand") : ?>selected="selected"<?php endif; ?>><?php _re('Random'); ?></option> 		    				
      			     				</select>
      			     			</label>
      			     			<a href="#" rel="rokbox[350 50][module=op-blog_orderby]"><span class="help">Help</span></a>
							</div>
							<div id="op-blog_orderby" class="rthide"><?php _re('Here you can change in what order your posts will be displayed on the front page.'); ?></div>
						</div>
					</td>
					<td class="secondcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Display Posts'); ?>
							</div>
							<div class="paramcheck">
								<label class="blog_content">
									<select id="blog_content" name="moxy-options[blog_content]">
      			   						<option value="content" <?php if ($option['blog_content'] == "content") : ?>selected="selected"<?php endif; ?>><?php _re('Content'); ?></option>    	
      			   						<option value="excerpt" <?php if ($option['blog_content'] == "excerpt") : ?>selected="selected"<?php endif; ?>><?php _re('Excerpt'); ?></option> 	    				
      			     				</select>
      			     			</label>
      			     			<a href="#" rel="rokbox[350 50][module=op-blog_content]"><span class="help">Help</span></a>
							</div>
							<div id="op-blog_content" class="rthide"><?php _re('Here you can change whether blog should display posts content or excerpt.'); ?></div>
						</div>
					</td>
				</tr>
				<tr>
					<td class="firstcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Blog Category ID:'); ?>
							</div>
							<div class="paramcheck">
								<label class="blog_cat">
									<input class="textbox" id="blog_cat" type="text" size="15" maxlength="255" name="moxy-options[blog_cat]" value="<?php echo $option['blog_cat']; ?>" />
                   				</label>
                   				<a href="#" rel="rokbox[450 110][module=op-blog_cat]"><span class="help">Help</span></a>
							</div>
							<div id="op-blog_cat" class="rthide"><?php _re('Here you can set the categories IDs that should be displayed on the blog page. Also you can exclude the categories from being displayed on the blog page by setting the - (minus) character before the category ID.<br /><b>Please remember that all category IDs should be separated by the comma!</b>'); ?></div>
						</div>
					</td>
					<td class="secondcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Display Post Title:'); ?>
							</div>
							<div class="paramcheck onlycheck">
								<?php if(rok_isIE()) { ?><label class="blog_title"><?php } ?><input type="checkbox" value="true" class="checkbox" name="moxy-options[blog_title]" id="blog_title" <?php if($option['blog_title'] == 'true') { ?>checked="checked"<?php } ?> /><?php if(rok_isIE()) { ?></label><?php } ?>
								<?php if(!rok_isIE()) { ?><label class="blog_title" for="blog_title"></label><?php } ?>
								<a href="#" rel="rokbox[350 50][module=op-blog_post_title]"><span class="help">Help</span></a>
							</div>
							<div id="op-blog_post_title" class="rthide"><?php _re('Displays post title in the blog view.'); ?></div>
						</div>
					</td>
				</tr>
				<tr>
					<td class="firstcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Link Post Title:'); ?>
							</div>
							<div class="paramcheck onlycheck">
								<?php if(rok_isIE()) { ?><label class="blog_title_link"><?php } ?><input type="checkbox" value="true" class="checkbox" name="moxy-options[blog_title_link]" id="blog_title_link" <?php if($option['blog_title_link'] == 'true') { ?>checked="checked"<?php } ?> /><?php if(rok_isIE()) { ?></label><?php } ?>
								<?php if(!rok_isIE()) { ?><label class="blog_title_link" for="blog_title_link"></label><?php } ?>
								<a href="#" rel="rokbox[350 50][module=op-blog_post_title_link]"><span class="help">Help</span></a>
							</div>
							<div id="op-blog_post_title_link" class="rthide"><?php _re('Link post titles in the blog view.'); ?></div>
						</div>
					</td>
					<td class="secondcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Post Meta:'); ?>
							</div>
							<div class="paramcheck onlycheck">
								<?php if(rok_isIE()) { ?><label class="blog_meta"><?php } ?><input type="checkbox" value="true" class="checkbox" name="moxy-options[blog_meta]" id="blog_meta" <?php if($option['blog_meta'] == 'true') { ?>checked="checked"<?php } ?> /><?php if(rok_isIE()) { ?></label><?php } ?>
								<?php if(!rok_isIE()) { ?><label class="blog_meta" for="blog_meta"></label><?php } ?>
								<a href="#" rel="rokbox[350 50][module=op-blog_post_meta]"><span class="help">Help</span></a>
							</div>
							<div id="op-blog_post_meta" class="rthide"><?php _re('Displays post meta in the blog view.'); ?></div>
						</div>
					</td>
				</tr>
				<tr>
					<td class="firstcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Comments Icon:'); ?>
							</div>
							<div class="paramcheck onlycheck">
								<?php if(rok_isIE()) { ?><label class="blog_comments_icon"><?php } ?><input type="checkbox" value="true" class="checkbox" name="moxy-options[blog_comments_icon]" id="blog_comments_icon" <?php if($option['blog_comments_icon'] == 'true') { ?>checked="checked"<?php } ?> /><?php if(rok_isIE()) { ?></label><?php } ?>
								<?php if(!rok_isIE()) { ?><label class="blog_comments_icon" for="blog_comments_icon"></label><?php } ?>
								<a href="#" rel="rokbox[350 50][module=op-blog_post_meta_comment]"><span class="help">Help</span></a>
							</div>
							<div id="op-blog_post_meta_comment" class="rthide"><?php _re('Displays comments icon in meta in the blog view.'); ?></div>
						</div>
					</td>
					<td class="secondcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Post Date:'); ?>
							</div>
							<div class="paramcheck onlycheck">
								<?php if(rok_isIE()) { ?><label class="blog_date"><?php } ?><input type="checkbox" value="true" class="checkbox" name="moxy-options[blog_date]" id="blog_date" <?php if($option['blog_date'] == 'true') { ?>checked="checked"<?php } ?> /><?php if(rok_isIE()) { ?></label><?php } ?>
								<?php if(!rok_isIE()) { ?><label class="blog_date" for="blog_date"></label><?php } ?>
								<a href="#" rel="rokbox[350 50][module=op-blog_date]"><span class="help">Help</span></a>
							</div>
							<div id="op-blog_date" class="rthide"><?php _re('Displays post date in meta in the blog view.'); ?></div>
						</div>
					</td>
				</tr>
				<tr>
					<td class="firstcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Post Author:'); ?>
							</div>
							<div class="paramcheck onlycheck">
								<?php if(rok_isIE()) { ?><label class="blog_author"><?php } ?><input type="checkbox" value="true" class="checkbox" name="moxy-options[blog_author]" id="blog_author" <?php if($option['blog_author'] == 'true') { ?>checked="checked"<?php } ?> /><?php if(rok_isIE()) { ?></label><?php } ?>
								<?php if(!rok_isIE()) { ?><label class="blog_author" for="blog_author"></label><?php } ?>
								<a href="#" rel="rokbox[350 50][module=op-blog_author]"><span class="help">Help</span></a>
							</div>
							<div id="op-blog_author" class="rthide"><?php _re('Displays post author in meta in the blog view.'); ?></div>
						</div>
					</td>
					<td class="secondcol">
					</td>
				</tr>
			</table>
			</div>
			
			<div class="inner-tabber">
			<a name="header"></a>
			
			<span class="section-title"><?php _re('Header'); ?></span><br /><br />
		
			<table class="options_table">
				<tr>
					<td class="firstcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Header Blogroll:'); ?>
							</div>
							<div class="paramcheck onlycheck">
								<?php if(rok_isIE()) { ?><label class="top_blogroll"><?php } ?><input type="checkbox" value="true" class="checkbox" name="moxy-options[top_blogroll]" id="top_blogroll" <?php if($option['top_blogroll'] == 'true') { ?>checked="checked"<?php } ?> /><?php if(rok_isIE()) { ?></label><?php } ?>
								<?php if(!rok_isIE()) { ?><label class="top_blogroll" for="top_blogroll"></label><?php } ?>
								<a href="#" rel="rokbox[350 50][module=op-top_blogroll]"><span class="help">Help</span></a>
							</div>
							<div id="op-top_blogroll" class="rthide"><?php _re('Displays the blogroll in the header.'); ?></div>
						</div>
					</td>
					<td class="secondcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Blogroll Order:'); ?>
							</div>
							<div class="paramcheck">
								<label class="top_blogroll_order">
									<select id="top_blogroll_order" name="moxy-options[top_blogroll_order]">
      			   						<option value="ID" <?php if ($option['top_blogroll_order'] == "ID") : ?>selected="selected"<?php endif; ?>>ID</option>    	
      			   						<option value="url" <?php if ($option['top_blogroll_order'] == "url") : ?>selected="selected"<?php endif; ?>><?php _re('URL'); ?></option> 
      			   						<option value="name" <?php if ($option['top_blogroll_order'] == "name") : ?>selected="selected"<?php endif; ?>><?php _re('Name'); ?></option> 
      			   						<option value="target" <?php if ($option['top_blogroll_order'] == "target") : ?>selected="selected"<?php endif; ?>><?php _re('Target'); ?></option>
      			   						<option value="rating" <?php if ($option['top_blogroll_order'] == "rating") : ?>selected="selected"<?php endif; ?>><?php _re('Rating'); ?></option>
      			   						<option value="updated" <?php if ($option['top_blogroll_order'] == "updated") : ?>selected="selected"<?php endif; ?>><?php _re('Updated'); ?></option>
      			   						<option value="rss" <?php if ($option['top_blogroll_order'] == "rss") : ?>selected="selected"<?php endif; ?>><?php _re('RSS'); ?></option>
      			   						<option value="lenght" <?php if ($option['top_blogroll_order'] == "lenght") : ?>selected="selected"<?php endif; ?>><?php _re('Lenght'); ?></option>
      			   						<option value="rand" <?php if ($option['top_blogroll_order'] == "rand") : ?>selected="selected"<?php endif; ?>><?php _re('Random'); ?></option>	    				
      			     				</select>
      			     			</label>
      			     			<a href="#" rel="rokbox[350 70][module=op-top_blogroll_order]"><span class="help">Help</span></a>
							</div>
							<div id="op-top_blogroll_order" class="rthide">Changes blogroll order in the header.</div>
						</div>
					</td>
				</tr>
				<tr>
					<td class="firstcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Blogroll Limit:'); ?>
							</div>
							<div class="paramcheck">
								<label class="top_blogroll_limit">
									<input class="textbox" id="top_blogroll_limit" type="text" size="3" maxlength="255" name="moxy-options[top_blogroll_limit]" value="<?php echo $option['top_blogroll_limit']; ?>" />
                   				</label>
                   				<a href="#" rel="rokbox[350 50][module=op-top_blogroll_limit]"><span class="help">Help</span></a>
							</div>
							<div id="op-top_blogroll_limit" class="rthide">Here you can limit the number of displayed links in blogroll, -1 displays all links.</div>
						</div>
					</td>
					<td class="secondcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Blogroll Category:'); ?>
							</div>
							<div class="paramcheck">
								<label class="top_blogroll_category">
									<input class="textbox" id="top_blogroll_category" type="text" size="3" maxlength="255" name="moxy-options[top_blogroll_category]" value="<?php echo $option['top_blogroll_category']; ?>" />
                   				</label>
                   				<a href="#" rel="rokbox[350 50][module=op-top_blogroll_category]"><span class="help">Help</span></a>
							</div>
							<div id="op-top_blogroll_category" class="rthide">Comma separated list of numeric Category IDs to be displayed. If none is specified, all Categories with bookmarks are shown.</div>
						</div>
					</td>
				</tr>
			</table>
			</div>
			
			<div class="inner-tabber">
			<a name="footer"></a>
			
			<span class="section-title"><?php _re('Footer'); ?></span><br /><br />
		
			<table class="options_table">
				<tr>
					<td class="firstcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Footer Display:'); ?>
							</div>
							<div class="paramcheck onlycheck">
								<?php if(rok_isIE()) { ?><label class="footer_enabled"><?php } ?><input type="checkbox" value="true" class="checkbox" name="moxy-options[footer_enabled]" id="footer_enabled" <?php if($option['footer_enabled'] == 'true') { ?>checked="checked"<?php } ?> /><?php if(rok_isIE()) { ?></label><?php } ?>
								<?php if(!rok_isIE()) { ?><label class="footer_enabled" for="footer_enabled"></label><?php } ?>
								<a href="#" rel="rokbox[350 50][module=op-footer_enabled]"><span class="help">Help</span></a>
							</div>
							<div id="op-footer_enabled" class="rthide"><?php _re('Enable / disable footer display.'); ?></div>
						</div>
					</td>
					<td class="secondcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Footer Order:'); ?>
							</div>
							<div class="paramcheck">
								<label class="footer_order">
									<select id="footer_order" name="moxy-options[footer_order]">
      			   						<option value="author" <?php if ($option['footer_order'] == "author") : ?>selected="selected"<?php endif; ?>><?php _re('Author'); ?></option>    	
      			   						<option value="date" <?php if ($option['footer_order'] == "date") : ?>selected="selected"<?php endif; ?>><?php _re('Date'); ?></option> 
      			   						<option value="title" <?php if ($option['footer_order'] == "title") : ?>selected="selected"<?php endif; ?>><?php _re('Title'); ?></option> 
      			   						<option value="modified" <?php if ($option['footer_order'] == "modified") : ?>selected="selected"<?php endif; ?>><?php _re('Modified'); ?></option> 
      			   						<option value="ID" <?php if ($option['footer_order'] == "ID") : ?>selected="selected"<?php endif; ?>>ID</option>
      			   						<option value="rand" <?php if ($option['footer_order'] == "rand") : ?>selected="selected"<?php endif; ?>><?php _re('Random'); ?></option> 		    				
      			     				</select>
      			     			</label>
      			     			<a href="#" rel="rokbox[350 50][module=op-footer_order]"><span class="help">Help</span></a>
							</div>
							<div id="op-footer_order" class="rthide"><?php _re('Display order of the Footer posts.'); ?></div>
						</div>
					</td>
				</tr>
				<tr>
					<td class="firstcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Category:'); ?>
							</div>
							<div class="paramcheck">
								<label class="footer_cat">
									<?php wp_dropdown_categories('show_option_none=None&hide_empty=0&name=moxy-options[footer_cat]&exclude=1&orderby=name&selected='.$option['footer_cat']); ?>
      			     			</label>
      			     			<a href="#" rel="rokbox[350 50][module=op-footer_cat]"><span class="help">Help</span></a>
							</div>
							<div id="op-footer_cat" class="rthide"><?php _re('Here you can change the category that will be responsible for all your Footer posts.'); ?></div>
						</div>
					</td>
					<td class="secondcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('List Items:'); ?>
							</div>
							<div class="paramcheck">
								<label class="footer_post_count">
									<input class="textbox" id="footer_post_count" type="text" size="3" maxlength="255" name="moxy-options[footer_post_count]" value="<?php echo $option['footer_post_count']; ?>" />
                   				</label>
                   				<a href="#" rel="rokbox[350 50][module=op-footer_post_count]"><span class="help">Help</span></a>
							</div>
							<div id="op-footer_post_count" class="rthide"><?php _re('Sets number of list items to display in the footer.'); ?></div>
						</div>
					</td>
				</tr>
				<tr>
					<td class="firstcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Popular:'); ?>
							</div>
							<div class="paramcheck onlycheck">
								<?php if(rok_isIE()) { ?><label class="footer_popular_enabled"><?php } ?><input type="checkbox" value="true" class="checkbox" name="moxy-options[footer_popular_enabled]" id="footer_popular_enabled" <?php if($option['footer_popular_enabled'] == 'true') { ?>checked="checked"<?php } ?> /><?php if(rok_isIE()) { ?></label><?php } ?>
								<?php if(!rok_isIE()) { ?><label class="footer_popular_enabled" for="footer_popular_enabled"></label><?php } ?>
								<a href="#" rel="rokbox[350 50][module=op-footer_popular_enabled]"><span class="help">Help</span></a>
							</div>
							<div id="op-footer_popular_enabled" class="rthide"><?php _re('Enable / disable list of popular posts in footer.'); ?></div>
						</div>
					</td>
					<td class="secondcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Recent:'); ?>
							</div>
							<div class="paramcheck onlycheck">
								<?php if(rok_isIE()) { ?><label class="footer_recent_enabled"><?php } ?><input type="checkbox" value="true" class="checkbox" name="moxy-options[footer_recent_enabled]" id="footer_recent_enabled" <?php if($option['footer_recent_enabled'] == 'true') { ?>checked="checked"<?php } ?> /><?php if(rok_isIE()) { ?></label><?php } ?>
								<?php if(!rok_isIE()) { ?><label class="footer_recent_enabled" for="footer_recent_enabled"></label><?php } ?>
								<a href="#" rel="rokbox[350 50][module=op-footer_recent_enabled]"><span class="help">Help</span></a>
							</div>
							<div id="op-footer_recent_enabled" class="rthide"><?php _re('Enable / disable list of recent posts in footer.'); ?></div>
						</div>
					</td>
				</tr>
				<tr>
					<td class="firstcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Last Modified:'); ?>
							</div>
							<div class="paramcheck onlycheck">
								<?php if(rok_isIE()) { ?><label class="footer_modified_enabled"><?php } ?><input type="checkbox" value="true" class="checkbox" name="moxy-options[footer_modified_enabled]" id="footer_modified_enabled" <?php if($option['footer_modified_enabled'] == 'true') { ?>checked="checked"<?php } ?> /><?php if(rok_isIE()) { ?></label><?php } ?>
								<?php if(!rok_isIE()) { ?><label class="footer_modified_enabled" for="footer_modified_enabled"></label><?php } ?>
								<a href="#" rel="rokbox[350 50][module=op-footer_modified_enabled]"><span class="help">Help</span></a>
							</div>
							<div id="op-footer_modified_enabled" class="rthide"><?php _re('Enable / disable list of last modified posts in footer.'); ?></div>
						</div>
					</td>
					<td class="secondcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Display Posts'); ?>
							</div>
							<div class="paramcheck">
								<label class="footer_content">
									<select id="footer_content" name="moxy-options[footer_content]">
      			   						<option value="content" <?php if ($option['footer_content'] == "content") : ?>selected="selected"<?php endif; ?>><?php _re('Content'); ?></option>    	
      			   						<option value="excerpt" <?php if ($option['footer_content'] == "excerpt") : ?>selected="selected"<?php endif; ?>><?php _re('Excerpt'); ?></option> 	    				
      			     				</select>
      			     			</label>
      			     			<a href="#" rel="rokbox[350 50][module=op-footer_content]"><span class="help">Help</span></a>
							</div>
							<div id="op-footer_content" class="rthide"><?php _re('Here you can change whether posts in footer should display it\'s content or excerpt.'); ?></div>
						</div>
					</td>
				</tr>
			</table>
			</div>
			
			<div class="inner-tabber">
			<a name="dimensions"></a>
			
			<span class="section-title"><?php _re('Dimensions'); ?></span><br /><br />
		
			<table class="options_table">
				<tr>
					<td class="firstcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Site Width:'); ?>
							</div>
							<div class="paramcheck">
								<label class="site_width">
									<input class="textbox" id="site_width" type="text" size="3" maxlength="255" name="moxy-options[site_width]" value="<?php echo $option['site_width']; ?>" />px
                   				</label>
                   				<a href="#" rel="rokbox[350 70][module=op-site_width]"><span class="help">Help</span></a>
							</div>
							<div id="op-site_width" class="rthide"><?php _re('Here you can change the site width.'); ?></div>
						</div>
					</td>
					<td class="secondcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Left Column Width:'); ?>
							</div>
							<div class="paramcheck">
								<label class="left_sidebar_w">
									<input class="textbox" id="left_sidebar_w" type="text" size="3" maxlength="255" name="moxy-options[left_sidebar_w]" value="<?php echo $option['left_sidebar_w']; ?>" />px
                   				</label>
                   				<a href="#" rel="rokbox[350 70][module=op-sidebar_left_width]"><span class="help">Help</span></a>
							</div>
							<div id="op-sidebar_left_width" class="rthide"><?php _re('Here you can change width of the left sidebar.'); ?></div>
						</div>
					</td>
				</tr>
				<tr>
					<td class="firstcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Right Column Width:'); ?>
							</div>
							<div class="paramcheck">
								<label class="right_sidebar_w">
									<input class="textbox" id="right_sidebar_w" type="text" size="3" maxlength="255" name="moxy-options[right_sidebar_w]" value="<?php echo $option['right_sidebar_w']; ?>" />px
                   				</label>
                   				<a href="#" rel="rokbox[350 70][module=op-sidebar_right_width]"><span class="help">Help</span></a>
							</div>
							<div id="op-sidebar_right_width" class="rthide"><?php _re('Here you can change width of the right sidebar.'); ?></div>
						</div>
					</td>
					<td class="secondcol">
					</td>
				</tr>
			</table>
			</div>
			
			<div class="inner-tabber">
			<a name="rokbox"></a>
			
			<span class="section-title">RokBox</span><br /><br />
		
			<table class="options_table">
				<tr>
					<td class="firstcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('RokBox:'); ?>
							</div>
							<div class="paramcheck onlycheck">
								<?php if(rok_isIE()) { ?><label class="rokbox_enabled"><?php } ?><input type="checkbox" value="true" class="checkbox" name="moxy-options[rokbox_enabled]" id="rokbox_enabled" <?php if($option['rokbox_enabled'] == 'true') { ?>checked="checked"<?php } ?> /><?php if(rok_isIE()) { ?></label><?php } ?>
								<?php if(!rok_isIE()) { ?><label class="rokbox_enabled" for="rokbox_enabled"></label><?php } ?>
								<a href="#" rel="rokbox[350 70][module=op-rokbox]"><span class="help">Help</span></a>
							</div>
							<div id="op-rokbox" class="rthide"><?php _re('RokBox is a mootools powered JavaScript slideshow that allows you to quickly and easily display multiple media formats including images, videos (video sharing services also) and music.'); ?></div>
						</div>
					</td>
					<td class="secondcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('RokBox Style:'); ?>
							</div>
							<div class="paramcheck">
								<label class="rokbox_style">
									<select id="rokbox_style" name="moxy-options[rokbox_style]">
      			      					<option value="light" <?php if ($option['rokbox_style'] == "light") : ?>selected="selected"<?php endif; ?>><?php _re('Light'); ?></option>
      			    					<option value="dark" <?php if ($option['rokbox_style'] == "dark") : ?>selected="selected"<?php endif; ?>><?php _re('Dark'); ?></option>
      			    					<option value="mynxx" <?php if ($option['rokbox_style'] == "mynxx") : ?>selected="selected"<?php endif; ?>><?php _re('Mynxx'); ?></option>
                   					</select>
								</label>
								<a href="#" rel="rokbox[350 50][module=op-rokbox-style]"><span class="help">Help</span></a>
							</div>
							<div id="op-rokbox-style" class="rthide"><?php _re('Your media can be displayed using one of the three great styles for RokBox.'); ?></div>
						</div>
					</td>
				</tr>
			</table>
			</div>
										
		</div>
		<div class="clr"></div>
		
	</div>