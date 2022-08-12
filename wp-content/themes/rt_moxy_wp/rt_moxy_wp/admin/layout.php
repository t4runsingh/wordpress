<?php

	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'layout.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

?>

	<?php $option = get_option('moxy-options'); ?>	
	
	<div class="general-wrapper">

		<div class="tabbar">
		
			<div class="tab1 singletab">
				<div class="tabl"></div>
				<div class="tabr"><a href="#front"><?php _re('Front Page'); ?></a></div>
			</div>
			
			<div class="tab3 singletab">
				<div class="tabl"></div>
				<div class="tabr"><a href="#sub"><?php _re('Subpages'); ?></a></div>
			</div>
			
			<div class="tab3 singletab">
				<div class="tabl"></div>
				<div class="tabr"><a href="#leftside"><?php _re('Left Sidebar'); ?></a></div>
			</div>
			
			<div class="tab4 singletab">
				<div class="tabl"></div>
				<div class="tabr"><a href="#rightside"><?php _re('Right Sidebar'); ?></a></div>
			</div>
			
			<div class="tab5 singletab">
				<div class="tabl"></div>
				<div class="tabr"><a href="#leftsidesub"><?php _re('Left Sidebar Subpage'); ?></a></div>
			</div>
			
			<div class="tab6 singletab">
				<div class="tabl"></div>
				<div class="tabr"><a href="#rightsidesub"><?php _re('Right Sidebar Subpage'); ?></a></div>
			</div>
	
		</div>
		<div class="clr"></div>
					
		<div class="main-general">
		
			<div class="inner-tabber">
			<a name="front"></a>
			
			<span class="section-title"><?php _re('Front Page'); ?></span><br /><br />
		
			<table class="options_table layout_chooser">
				<tr>
					<td class="bigcol">
						<div class="scx<?php if(rok_isIE(6)) { echo ' ie6margin'; } ?>">
							<input id="scx" type="radio" <?php if ($option['layout_front'] == "s-c-x") : ?>checked="checked"<?php endif; ?> value="s-c-x" name="moxy-options[layout_front]"/>
							<label for="scx" class="layout-title"><?php if(rok_isIE(6)) { _re('Sidebar - Content - X'); } ?></label>
						</div>
						<div class="xcs<?php if(rok_isIE(6)) { echo ' ie6margin'; } ?>">
							<input id="xcs" type="radio" <?php if ($option['layout_front'] == "x-c-s") : ?>checked="checked"<?php endif; ?> value="x-c-s" name="moxy-options[layout_front]"/>
							<label for="xcs" class="layout-title"><?php if(rok_isIE(6)) { _re('X - Content - Sidebar'); } ?></label>
						</div>
						<div class="scs<?php if(rok_isIE(6)) { echo ' ie6margin'; } ?>">
							<input id="scs" type="radio" <?php if ($option['layout_front'] == "s-c-s") : ?>checked="checked"<?php endif; ?> value="s-c-s" name="moxy-options[layout_front]"/>
							<label for="scs" class="layout-title"><?php if(rok_isIE(6)) { _re('Sidebar - Content - Sidebar'); } ?></label>
						</div>
						<div class="xcx<?php if(rok_isIE(6)) { echo ' ie6margin'; } ?>">
							<input id="xcx" type="radio" <?php if ($option['layout_front'] == "x-c-x") : ?>checked="checked"<?php endif; ?> value="x-c-x" name="moxy-options[layout_front]"/>
							<label for="xcx" class="layout-title"><?php if(rok_isIE(6)) { _re('X - Content - X'); } ?></label>
						</div>
					</td>
				</tr>
			</table>
			</div>
			
			<div class="inner-tabber">
			<a name="sub"></a>
			
			<span class="section-title"><?php _re('Subpages'); ?></span><br /><br />
		
			<table class="options_table layout_chooser">
				<tr>
					<td class="bigcol">
						<div class="sub-scx<?php if(rok_isIE(6)) { echo ' ie6margin'; } ?>">
							<input id="sub-scx" type="radio" <?php if ($option['layout_subpage'] == "s-c-x") : ?>checked="checked"<?php endif; ?> value="s-c-x" name="moxy-options[layout_subpage]"/>
							<label for="sub-scx" class="layout-title"><?php if(rok_isIE(6)) { _re('Sidebar - Content - X'); } ?></label>
						</div>
						<div class="sub-xcs<?php if(rok_isIE(6)) { echo ' ie6margin'; } ?>">
							<input id="sub-xcs" type="radio" <?php if ($option['layout_subpage'] == "x-c-s") : ?>checked="checked"<?php endif; ?> value="x-c-s" name="moxy-options[layout_subpage]"/>
							<label for="sub-xcs" class="layout-title"><?php if(rok_isIE(6)) { _re('X - Content - Sidebar'); } ?></label>
						</div>
						<div class="sub-scs<?php if(rok_isIE(6)) { echo ' ie6margin'; } ?>">
							<input id="sub-scs" type="radio" <?php if ($option['layout_subpage'] == "s-c-s") : ?>checked="checked"<?php endif; ?> value="s-c-s" name="moxy-options[layout_subpage]"/>
							<label for="sub-scs" class="layout-title"><?php if(rok_isIE(6)) { _re('Sidebar - Content - Sidebar'); } ?></label>
						</div>
						<div class="sub-xcx<?php if(rok_isIE(6)) { echo ' ie6margin'; } ?>">
							<input id="sub-xcx" type="radio" <?php if ($option['layout_subpage'] == "x-c-x") : ?>checked="checked"<?php endif; ?> value="x-c-x" name="moxy-options[layout_subpage]"/>
							<label for="sub-xcx" class="layout-title"><?php if(rok_isIE(6)) { _re('X - Content - X'); } ?></label>
						</div>
					</td>
				</tr>
			</table>
			</div>
			
			<div class="inner-tabber">
			<a name="leftside"></a>
			
			<span class="section-title"><?php _re('Left Sidebar:'); ?></span><br /><br />
		
			<table class="options_table">
				<tr>
					<td class="firstcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Sidebar File:'); ?>
							</div>
							<div class="paramcheck">
								<label class="left_front_side_file">
									<input class="textbox" id="left_front_side_file" type="text" size="16" maxlength="255" name="moxy-options[left_front_side_file]" value="<?php echo $option['left_front_side_file']; ?>" />
                   				</label>
                   				<a href="#" rel="rokbox[350 70][module=op-left_front_side_file]"><span class="help">Help</span></a>
							</div>
							<div id="op-left_front_side_file" class="rthide"><?php _re('Name of the file that holds all default sidebar content. File is located inside theme/includes directory.'); ?></div>
						</div>
					</td>
					<td class="secondcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Authors:'); ?>
							</div>
							<div class="paramcheck onlycheck">
								<?php if(rok_isIE()) { ?><label class="sidebar_left_front_authors"><?php } ?><input type="checkbox" value="true" class="checkbox" name="moxy-options[sidebar_left_front_authors]" id="sidebar_left_front_authors" <?php if($option['sidebar_left_front_authors'] == 'true') { ?>checked="checked"<?php } ?> /><?php if(rok_isIE()) { ?></label><?php } ?>
								<?php if(!rok_isIE()) { ?><label class="sidebar_left_front_authors" for="sidebar_left_front_authors"></label><?php } ?>
								<a href="#" rel="rokbox[350 70][module=op-sidebar_left_front_authors]"><span class="help">Help</span></a>
							</div>
							<div id="op-sidebar_left_front_authors" class="rthide"><?php _re('Displays authors in left sidebar.'); ?></div>
						</div>
					</td>
				</tr>
				<tr>
					<td class="firstcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Exclude Admin:'); ?>
							</div>
							<div class="paramcheck onlycheck">
								<?php if(rok_isIE()) { ?><label class="sidebar_left_front_authors_exadmin"><?php } ?><input type="checkbox" value="1" class="checkbox" name="moxy-options[sidebar_left_front_authors_exadmin]" id="sidebar_left_front_authors_exadmin" <?php if($option['sidebar_left_front_authors_exadmin'] == '1') { ?>checked="checked"<?php } ?> /><?php if(rok_isIE()) { ?></label><?php } ?>
								<?php if(!rok_isIE()) { ?><label class="sidebar_left_front_authors_exadmin" for="sidebar_left_front_authors_exadmin"></label><?php } ?>
								<a href="#" rel="rokbox[350 70][module=op-sidebar_left_front_authors_exadmin]"><span class="help">Help</span></a>
							</div>
							<div id="op-sidebar_left_front_authors_exadmin" class="rthide"><?php _re('Excludes admin from the author list.'); ?></div>
						</div>
					</td>
					<td class="secondcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Author Full Name:'); ?>
							</div>
							<div class="paramcheck onlycheck">
								<?php if(rok_isIE()) { ?><label class="sidebar_left_front_authors_fullname"><?php } ?><input type="checkbox" value="1" class="checkbox" name="moxy-options[sidebar_left_front_authors_fullname]" id="sidebar_left_front_authors_fullname" <?php if($option['sidebar_left_front_authors_fullname'] == '1') { ?>checked="checked"<?php } ?> /><?php if(rok_isIE()) { ?></label><?php } ?>
								<?php if(!rok_isIE()) { ?><label class="sidebar_left_front_authors_fullname" for="sidebar_left_front_authors_fullname"></label><?php } ?>
								<a href="#" rel="rokbox[350 70][module=op-sidebar_left_front_authors_fullname]"><span class="help">Help</span></a>
							</div>
							<div id="op-sidebar_left_front_authors_fullname" class="rthide"><?php _re('Display / hide full name of author.'); ?></div>
						</div>
					</td>
				</tr>
				<tr>
					<td class="firstcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Blogroll:'); ?>
							</div>
							<div class="paramcheck onlycheck">
								<?php if(rok_isIE()) { ?><label class="sidebar_left_front_blogroll"><?php } ?><input type="checkbox" value="true" class="checkbox" name="moxy-options[sidebar_left_front_blogroll]" id="sidebar_left_front_blogroll" <?php if($option['sidebar_left_front_blogroll'] == 'true') { ?>checked="checked"<?php } ?> /><?php if(rok_isIE()) { ?></label><?php } ?>
								<?php if(!rok_isIE()) { ?><label class="sidebar_left_front_blogroll" for="sidebar_left_front_blogroll"></label><?php } ?>
								<a href="#" rel="rokbox[350 70][module=op-sidebar_left_front_blogroll]"><span class="help">Help</span></a>
							</div>
							<div id="op-sidebar_left_front_blogroll" class="rthide"><?php _re('Displays blogroll in left sidebar.'); ?></div>
						</div>
					</td>
					<td class="secondcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Blogroll Order:'); ?>
							</div>
							<div class="paramcheck">
								<label class="sidebar_left_front_blogroll_order">
									<select id="sidebar_left_front_blogroll_order" name="moxy-options[sidebar_left_front_blogroll_order]">
      			   						<option value="ID" <?php if ($option['sidebar_left_front_blogroll_order'] == "ID") : ?>selected="selected"<?php endif; ?>>ID</option>    	
      			   						<option value="url" <?php if ($option['sidebar_left_front_blogroll_order'] == "url") : ?>selected="selected"<?php endif; ?>><?php _re('URL'); ?></option> 
      			   						<option value="name" <?php if ($option['sidebar_left_front_blogroll_order'] == "name") : ?>selected="selected"<?php endif; ?>><?php _re('Name'); ?></option> 
      			   						<option value="target" <?php if ($option['sidebar_left_front_blogroll_order'] == "target") : ?>selected="selected"<?php endif; ?>><?php _re('Target'); ?></option>
      			   						<option value="rating" <?php if ($option['sidebar_left_front_blogroll_order'] == "rating") : ?>selected="selected"<?php endif; ?>><?php _re('Rating'); ?></option>
      			   						<option value="updated" <?php if ($option['sidebar_left_front_blogroll_order'] == "updated") : ?>selected="selected"<?php endif; ?>><?php _re('Updated'); ?></option>
      			   						<option value="rss" <?php if ($option['sidebar_left_front_blogroll_order'] == "rss") : ?>selected="selected"<?php endif; ?>><?php _re('RSS'); ?></option>
      			   						<option value="lenght" <?php if ($option['sidebar_left_front_blogroll_order'] == "lenght") : ?>selected="selected"<?php endif; ?>><?php _re('Lenght'); ?></option>
      			   						<option value="rand" <?php if ($option['sidebar_left_front_blogroll_order'] == "rand") : ?>selected="selected"<?php endif; ?>><?php _re('Random'); ?></option>	    				
      			     				</select>
      			     			</label>
      			     			<a href="#" rel="rokbox[350 70][module=op-sidebar_left_front_blogroll_order]"><span class="help">Help</span></a>
							</div>
							<div id="op-sidebar_left_front_blogroll_order" class="rthide"><?php _re('Changes blogroll order in left sidebar.'); ?></div>
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
								<label class="sidebar_left_front_blogroll_limit">
									<input class="textbox" id="sidebar_left_front_blogroll_limit" type="text" size="3" maxlength="255" name="moxy-options[sidebar_left_front_blogroll_limit]" value="<?php echo $option['sidebar_left_front_blogroll_limit']; ?>" />
                   				</label>
                   				<a href="#" rel="rokbox[350 50][module=op-sidebar_left_front_blogroll_limit]"><span class="help">Help</span></a>
							</div>
							<div id="op-sidebar_left_front_blogroll_limit" class="rthide"><?php _re('Here you can limit the number of displayed links in blogroll, -1 displays all links.'); ?></div>
						</div>
					</td>
					<td class="secondcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Blogroll Categorize:'); ?>
							</div>
							<div class="paramcheck">
								<label class="sidebar_left_front_blogroll_categorize">
									<select id="sidebar_left_front_blogroll_categorize" name="moxy-options[sidebar_left_front_blogroll_categorize]" style="width: 100px !important;">
      			   						<option value="1" <?php if ($option['sidebar_left_front_blogroll_categorize'] == "1") : ?>selected="selected"<?php endif; ?>><?php _re('On'); ?></option>    	
      			   						<option value="0" <?php if ($option['sidebar_left_front_blogroll_categorize'] == "0") : ?>selected="selected"<?php endif; ?>><?php _re('Off'); ?></option> 	    				
      			     				</select>
      			     			</label>
      			     			<a href="#" rel="rokbox[350 70][module=op-sidebar_left_front_blogroll_categorize]"><span class="help">Help</span></a>
							</div>
							<div id="op-sidebar_left_front_blogroll_categorize" class="rthide"><?php _re('Bookmarks should be shown within their assigned Categories or not.'); ?></div>
						</div>
					</td>
				</tr>
				<tr>
					<td class="firstcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Blogroll Category:'); ?>
							</div>
							<div class="paramcheck">
								<label class="sidebar_left_front_blogroll_category">
									<input class="textbox" id="sidebar_left_front_blogroll_category" type="text" size="3" maxlength="255" name="moxy-options[sidebar_left_front_blogroll_category]" value="<?php echo $option['sidebar_left_front_blogroll_category']; ?>" />
                   				</label>
                   				<a href="#" rel="rokbox[350 50][module=op-sidebar_left_front_blogroll_category]"><span class="help">Help</span></a>
							</div>
							<div id="op-sidebar_left_front_blogroll_category" class="rthide"><?php _re('Comma separated list of numeric Category IDs to be displayed. If none is specified, all Categories with bookmarks are shown.'); ?></div>
						</div>
					</td>
					<td class="secondcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Display Meta:'); ?>
							</div>
							<div class="paramcheck onlycheck">
								<?php if(rok_isIE()) { ?><label class="sidebar_left_front_meta"><?php } ?><input type="checkbox" value="true" class="checkbox" name="moxy-options[sidebar_left_front_meta]" id="sidebar_left_front_meta" <?php if($option['sidebar_left_front_meta'] == 'true') { ?>checked="checked"<?php } ?> /><?php if(rok_isIE()) { ?></label><?php } ?>
								<?php if(!rok_isIE()) { ?><label class="sidebar_left_front_meta" for="sidebar_left_front_meta"></label><?php } ?>
								<a href="#" rel="rokbox[350 70][module=op-sidebar_left_front_meta]"><span class="help">Help</span></a>
							</div>
							<div id="op-sidebar_left_front_meta" class="rthide"><?php _re('Display Meta in left sidebar.'); ?></div>
						</div>
					</td>
				</tr>
			</table>
			</div>
			
			<div class="inner-tabber">
			<a name="rightside"></a>
			
			<span class="section-title"><?php _re('Right Sidebar:'); ?></span><br /><br />
		
			<table class="options_table">
				<tr>
					<td class="firstcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Sidebar File:'); ?>
							</div>
							<div class="paramcheck">
								<label class="right_front_side_file">
									<input class="textbox" id="right_front_side_file" type="text" size="16" maxlength="255" name="moxy-options[right_front_side_file]" value="<?php echo $option['right_front_side_file']; ?>" />
                   				</label>
                   				<a href="#" rel="rokbox[350 70][module=op-right_front_side_file]"><span class="help">Help</span></a>
							</div>
							<div id="op-right_front_side_file" class="rthide"><?php _re('Name of the file that holds all default sidebar content. File is located inside theme/includes directory.'); ?></div>
						</div>
					</td>
					<td class="secondcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Categories:'); ?>
							</div>
							<div class="paramcheck onlycheck">
								<?php if(rok_isIE()) { ?><label class="sidebar_right_front_categories"><?php } ?><input type="checkbox" value="true" class="checkbox" name="moxy-options[sidebar_right_front_categories]" id="sidebar_right_front_categories" <?php if($option['sidebar_right_front_categories'] == 'true') { ?>checked="checked"<?php } ?> /><?php if(rok_isIE()) { ?></label><?php } ?>
								<?php if(!rok_isIE()) { ?><label class="sidebar_right_front_categories" for="sidebar_right_front_categories"></label><?php } ?>
								<a href="#" rel="rokbox[350 70][module=op-sidebar_right_front_categories]"><span class="help">Help</span></a>
							</div>
							<div id="op-sidebar_right_front_categories" class="rthide"><?php _re('Displays categories in right sidebar.'); ?></div>
						</div>
					</td>
				</tr>
				<tr>
					<td class="firstcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Empty Categories:'); ?>
							</div>
							<div class="paramcheck onlycheck">
								<?php if(rok_isIE()) { ?><label class="sidebar_right_front_categories_empty"><?php } ?><input type="checkbox" value="1" class="checkbox" name="moxy-options[sidebar_right_front_categories_empty]" id="sidebar_right_front_categories_empty" <?php if($option['sidebar_right_front_categories_empty'] == '1') { ?>checked="checked"<?php } ?> /><?php if(rok_isIE()) { ?></label><?php } ?>
								<?php if(!rok_isIE()) { ?><label class="sidebar_right_front_categories_empty" for="sidebar_right_front_categories_empty"></label><?php } ?>
								<a href="#" rel="rokbox[350 70][module=op-sidebar_right_front_categories_empty]"><span class="help">Help</span></a>
							</div>
							<div id="op-sidebar_right_front_categories_empty" class="rthide"><?php _re('Display / hide empty categories in right sidebar.'); ?></div>
						</div>
					</td>
					<td class="secondcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Categories Order:'); ?>
							</div>
							<div class="paramcheck stubborn">
								<label class="sidebar_right_front_categories_order">
									<select id="sidebar_right_front_categories_order" name="moxy-options[sidebar_right_front_categories_order]">
      			   						<option value="ID" <?php if ($option['sidebar_right_front_categories_order'] == "ID") : ?>selected="selected"<?php endif; ?>>ID</option>    	
      			   						<option value="name" <?php if ($option['sidebar_right_front_categories_order'] == "name") : ?>selected="selected"<?php endif; ?>><?php _re('Name'); ?></option> 
      			   						<option value="slug" <?php if ($option['sidebar_right_front_categories_order'] == "slug") : ?>selected="selected"<?php endif; ?>><?php _re('Slug'); ?></option> 
      			   						<option value="count" <?php if ($option['sidebar_right_front_categories_order'] == "count") : ?>selected="selected"<?php endif; ?>><?php _re('Count'); ?></option>		    				
      			     				</select>
      			     			</label>
      			     			<a href="#" rel="rokbox[350 70][module=op-sidebar_right_front_categories_order]"><span class="help">Help</span></a>
							</div>
							<div id="op-sidebar_right_front_categories_order" class="rthide"><?php _re('You can change order of the categories.'); ?></div>
						</div>
					</td>
				</tr>
				<tr>
					<td class="firstcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Categories Exclude:'); ?>
							</div>
							<div class="paramcheck">
								<label class="sidebar_right_front_categories_exclude">
									<input class="textbox" id="sidebar_right_front_categories_exclude" type="text" size="10" maxlength="255" name="moxy-options[sidebar_right_front_categories_exclude]" value="<?php echo $option['sidebar_right_front_categories_exclude']; ?>" />
                   				</label>
                   				<a href="#" rel="rokbox[350 70][module=op-sidebar_right_front_categories_exclude]"><span class="help">Help</span></a>
							</div>
							<div id="op-sidebar_right_front_categories_exclude" class="rthide"><?php _re('ID of categories that you wish to exclude from the list in the sidebar. Please split categories with comma.'); ?></div>
						</div>
					</td>
					<td class="secondcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Archives:'); ?>
							</div>
							<div class="paramcheck onlycheck">
								<?php if(rok_isIE()) { ?><label class="sidebar_right_front_archives"><?php } ?><input type="checkbox" value="true" class="checkbox" name="moxy-options[sidebar_right_front_archives]" id="sidebar_right_front_archives" <?php if($option['sidebar_right_front_archives'] == 'true') { ?>checked="checked"<?php } ?> /><?php if(rok_isIE()) { ?></label><?php } ?>
								<?php if(!rok_isIE()) { ?><label class="sidebar_right_front_archives" for="sidebar_right_front_archives"></label><?php } ?>
								<a href="#" rel="rokbox[350 70][module=op-sidebar_right_front_archives]"><span class="help">Help</span></a>
							</div>
							<div id="op-sidebar_right_front_archives" class="rthide"><?php _re('Displays archives in right sidebar.'); ?></div>
						</div>
					</td>
				</tr>
				<tr>
					<td class="firstcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Archives Type:'); ?>
							</div>
							<div class="paramcheck">
								<label class="sidebar_right_front_archives_type">
									<select id="sidebar_right_front_archives_type" name="moxy-options[sidebar_right_front_archives_type]">
      			   						<option value="yearly" <?php if ($option['sidebar_right_front_archives_type'] == "yearly") : ?>selected="selected"<?php endif; ?>><?php _re('Yearly'); ?></option>    	
      			   						<option value="monthly" <?php if ($option['sidebar_right_front_archives_type'] == "monthly") : ?>selected="selected"<?php endif; ?>><?php _re('Monthly'); ?></option> 
      			   						<option value="daily" <?php if ($option['sidebar_right_front_archives_type'] == "daily") : ?>selected="selected"<?php endif; ?>><?php _re('Daily'); ?></option> 
      			   						<option value="weekly" <?php if ($option['sidebar_right_front_archives_type'] == "weekly") : ?>selected="selected"<?php endif; ?>><?php _re('Weekly'); ?></option>
      			   						<option value="postbypost" <?php if ($option['sidebar_right_front_archives_type'] == "postbypost") : ?>selected="selected"<?php endif; ?>><?php _re('Post By Post'); ?></option>		    				
      			     				</select>
      			     			</label>
      			     			<a href="#" rel="rokbox[350 70][module=op-sidebar_right_front_archives_type]"><span class="help">Help</span></a>
							</div>
							<div id="op-sidebar_right_front_archives_type" class="rthide"><?php _re('Type of displayed archives.'); ?></div>
						</div>
					</td>
					<td class="secondcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Archives Limit:'); ?>
							</div>
							<div class="paramcheck">
								<label class="sidebar_right_front_archives_limit">
									<input class="textbox" id="sidebar_right_front_archives_limit" type="text" size="3" maxlength="255" name="moxy-options[sidebar_right_front_archives_limit]" value="<?php echo $option['sidebar_right_front_archives_limit']; ?>" />
                   				</label>
                   				<a href="#" rel="rokbox[350 50][module=op-sidebar_right_front_archives_limit]"><span class="help">Help</span></a>
							</div>
							<div id="op-sidebar_right_front_archives_limit" class="rthide"><?php _re('Here you can limit the number of displayed archives.'); ?></div>
						</div>
					</td>
				</tr>
				<tr>
					<td class="firstcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Tags:'); ?>
							</div>
							<div class="paramcheck onlycheck">
								<?php if(rok_isIE()) { ?><label class="sidebar_right_front_tags"><?php } ?><input type="checkbox" value="true" class="checkbox" name="moxy-options[sidebar_right_front_tags]" id="sidebar_right_front_tags" <?php if($option['sidebar_right_front_tags'] == 'true') { ?>checked="checked"<?php } ?> /><?php if(rok_isIE()) { ?></label><?php } ?>
								<?php if(!rok_isIE()) { ?><label class="sidebar_right_front_tags" for="sidebar_right_front_tags"></label><?php } ?>
								<a href="#" rel="rokbox[350 70][module=op-sidebar_right_front_tags]"><span class="help">Help</span></a>
							</div>
							<div id="op-sidebar_right_front_tags" class="rthide"><?php _re('Displays tags in right sidebar.'); ?></div>
						</div>
					</td>
					<td class="secondcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Tags Order:'); ?>
							</div>
							<div class="paramcheck">
								<label class="sidebar_right_front_tags_order">
									<select id="sidebar_right_front_tags_order" name="moxy-options[sidebar_right_front_tags_order]">
      			   						<option value="name" <?php if ($option['sidebar_right_front_tags_order'] == "name") : ?>selected="selected"<?php endif; ?>><?php _re('Name'); ?></option>    	
      			   						<option value="count" <?php if ($option['sidebar_right_front_tags_order'] == "count") : ?>selected="selected"<?php endif; ?>><?php _re('Count'); ?></option> 	    				
      			     				</select>
      			     			</label>
      			     			<a href="#" rel="rokbox[350 70][module=op-sidebar_right_front_tags_order]"><span class="help">Help</span></a>
							</div>
							<div id="op-sidebar_right_front_tags_order" class="rthide"><?php _re('Order of tags.'); ?></div>
						</div>
					</td>
				</tr>
			</table>
			</div>
			
			<div class="inner-tabber">
			<a name="leftsidesub"></a>
			
			<span class="section-title"><?php _re('Left Subpage Sidebar:'); ?></span><br /><br />
		
			<table class="options_table">
				<tr>
					<td class="firstcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Sidebar File:'); ?>
							</div>
							<div class="paramcheck">
								<label class="left_sub_side_file">
									<input class="textbox" id="left_sub_side_file" type="text" size="16" maxlength="255" name="moxy-options[left_sub_side_file]" value="<?php echo $option['left_sub_side_file']; ?>" />
                   				</label>
                   				<a href="#" rel="rokbox[350 70][module=op-left_sub_side_file]"><span class="help">Help</span></a>
							</div>
							<div id="op-left_sub_side_file" class="rthide"><?php _re('Name of the file that holds all default sidebar content. File is located inside theme/includes directory.'); ?></div>
						</div>
					</td>
					<td class="secondcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Categories:'); ?>
							</div>
							<div class="paramcheck onlycheck">
								<?php if(rok_isIE()) { ?><label class="sidebar_left_sub_categories"><?php } ?><input type="checkbox" value="true" class="checkbox" name="moxy-options[sidebar_left_sub_categories]" id="sidebar_left_sub_categories" <?php if($option['sidebar_left_sub_categories'] == 'true') { ?>checked="checked"<?php } ?> /><?php if(rok_isIE()) { ?></label><?php } ?>
								<?php if(!rok_isIE()) { ?><label class="sidebar_left_sub_categories" for="sidebar_left_sub_categories"></label><?php } ?>
								<a href="#" rel="rokbox[350 70][module=op-sidebar_left_sub_categories]"><span class="help">Help</span></a>
							</div>
							<div id="op-sidebar_left_sub_categories" class="rthide"><?php _re('Displays categories in left subpage sidebar.'); ?></div>
						</div>
					</td>
				</tr>
				<tr>
					<td class="firstcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Empty Categories:'); ?>
							</div>
							<div class="paramcheck onlycheck">
								<?php if(rok_isIE()) { ?><label class="sidebar_left_sub_categories_empty"><?php } ?><input type="checkbox" value="1" class="checkbox" name="moxy-options[sidebar_left_sub_categories_empty]" id="sidebar_left_sub_categories_empty" <?php if($option['sidebar_left_sub_categories_empty'] == '1') { ?>checked="checked"<?php } ?> /><?php if(rok_isIE()) { ?></label><?php } ?>
								<?php if(!rok_isIE()) { ?><label class="sidebar_left_sub_categories_empty" for="sidebar_left_sub_categories_empty"></label><?php } ?>
								<a href="#" rel="rokbox[350 70][module=op-sidebar_left_sub_categories_empty]"><span class="help">Help</span></a>
							</div>
							<div id="op-sidebar_left_sub_categories_empty" class="rthide"><?php _re('Display / hide empty categories in left subpage sidebar.'); ?></div>
						</div>
					</td>
					<td class="secondcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Categories Order:'); ?>
							</div>
							<div class="paramcheck stubborn">
								<label class="sidebar_left_sub_categories_order">
									<select id="sidebar_left_sub_categories_order" name="moxy-options[sidebar_left_sub_categories_order]">
      			   						<option value="ID" <?php if ($option['sidebar_left_sub_categories_order'] == "ID") : ?>selected="selected"<?php endif; ?>>ID</option>    	
      			   						<option value="name" <?php if ($option['sidebar_left_sub_categories_order'] == "name") : ?>selected="selected"<?php endif; ?>><?php _re('Name'); ?></option> 
      			   						<option value="slug" <?php if ($option['sidebar_left_sub_categories_order'] == "slug") : ?>selected="selected"<?php endif; ?>><?php _re('Slug'); ?></option> 
      			   						<option value="count" <?php if ($option['sidebar_left_sub_categories_order'] == "count") : ?>selected="selected"<?php endif; ?>><?php _re('Count'); ?></option>		    				
      			     				</select>
      			     			</label>
      			     			<a href="#" rel="rokbox[350 70][module=op-sidebar_left_sub_categories_order]"><span class="help">Help</span></a>
							</div>
							<div id="op-sidebar_left_sub_categories_order" class="rthide"><?php _re('You can change order of the categories.'); ?></div>
						</div>
					</td>
				</tr>
				<tr>
					<td class="firstcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Categories Exclude:'); ?>
							</div>
							<div class="paramcheck">
								<label class="sidebar_left_sub_categories_exclude">
									<input class="textbox" id="sidebar_left_sub_categories_exclude" type="text" size="10" maxlength="255" name="moxy-options[sidebar_left_sub_categories_exclude]" value="<?php echo $option['sidebar_left_sub_categories_exclude']; ?>" />
                   				</label>
                   				<a href="#" rel="rokbox[350 70][module=op-sidebar_left_sub_categories_exclude]"><span class="help">Help</span></a>
							</div>
							<div id="op-sidebar_left_sub_categories_exclude" class="rthide"><?php _re('ID of categories that you wish to exclude from the list in the sidebar. Please split categories with comma.'); ?></div>
						</div>
					</td>
					<td class="secondcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Archives:'); ?>
							</div>
							<div class="paramcheck onlycheck">
								<?php if(rok_isIE()) { ?><label class="sidebar_left_sub_archives"><?php } ?><input type="checkbox" value="true" class="checkbox" name="moxy-options[sidebar_left_sub_archives]" id="sidebar_left_sub_archives" <?php if($option['sidebar_left_sub_archives'] == 'true') { ?>checked="checked"<?php } ?> /><?php if(rok_isIE()) { ?></label><?php } ?>
								<?php if(!rok_isIE()) { ?><label class="sidebar_left_sub_archives" for="sidebar_left_sub_archives"></label><?php } ?>
								<a href="#" rel="rokbox[350 70][module=op-sidebar_left_sub_archives]"><span class="help">Help</span></a>
							</div>
							<div id="op-sidebar_left_sub_archives" class="rthide"><?php _re('Displays archives in left subpage sidebar.'); ?></div>
						</div>
					</td>
				</tr>
				<tr>
					<td class="firstcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Archives Type:'); ?>
							</div>
							<div class="paramcheck">
								<label class="sidebar_left_sub_archives_type">
									<select id="sidebar_left_sub_archives_type" name="moxy-options[sidebar_left_sub_archives_type]">
      			   						<option value="yearly" <?php if ($option['sidebar_left_sub_archives_type'] == "yearly") : ?>selected="selected"<?php endif; ?>><?php _re('Yearly'); ?></option>    	
      			   						<option value="monthly" <?php if ($option['sidebar_left_sub_archives_type'] == "monthly") : ?>selected="selected"<?php endif; ?>><?php _re('Monthly'); ?></option> 
      			   						<option value="daily" <?php if ($option['sidebar_left_sub_archives_type'] == "daily") : ?>selected="selected"<?php endif; ?>><?php _re('Daily'); ?></option> 
      			   						<option value="weekly" <?php if ($option['sidebar_left_sub_archives_type'] == "weekly") : ?>selected="selected"<?php endif; ?>><?php _re('Weekly'); ?></option>
      			   						<option value="postbypost" <?php if ($option['sidebar_left_sub_archives_type'] == "postbypost") : ?>selected="selected"<?php endif; ?>><?php _re('Post By Post'); ?></option>		    				
      			     				</select>
      			     			</label>
      			     			<a href="#" rel="rokbox[350 70][module=op-sidebar_left_sub_archives_type]"><span class="help">Help</span></a>
							</div>
							<div id="op-sidebar_left_sub_archives_type" class="rthide"><?php _re('Type of displayed archives.'); ?></div>
						</div>
					</td>
					<td class="secondcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Archives Limit:'); ?>
							</div>
							<div class="paramcheck">
								<label class="sidebar_left_sub_archives_limit">
									<input class="textbox" id="sidebar_left_sub_archives_limit" type="text" size="3" maxlength="255" name="moxy-options[sidebar_left_sub_archives_limit]" value="<?php echo $option['sidebar_left_sub_archives_limit']; ?>" />
                   				</label>
                   				<a href="#" rel="rokbox[350 50][module=op-sidebar_left_sub_archives_limit]"><span class="help">Help</span></a>
							</div>
							<div id="op-sidebar_left_sub_archives_limit" class="rthide"><?php _re('Here you can limit the number of displayed archives.'); ?></div>
						</div>
					</td>
				</tr>
				<tr>
					<td class="firstcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Tags:'); ?>
							</div>
							<div class="paramcheck onlycheck">
								<?php if(rok_isIE()) { ?><label class="sidebar_left_sub_tags"><?php } ?><input type="checkbox" value="true" class="checkbox" name="moxy-options[sidebar_left_sub_tags]" id="sidebar_left_sub_tags" <?php if($option['sidebar_left_sub_tags'] == 'true') { ?>checked="checked"<?php } ?> /><?php if(rok_isIE()) { ?></label><?php } ?>
								<?php if(!rok_isIE()) { ?><label class="sidebar_left_sub_tags" for="sidebar_left_sub_tags"></label><?php } ?>
								<a href="#" rel="rokbox[350 70][module=op-sidebar_left_sub_tags]"><span class="help">Help</span></a>
							</div>
							<div id="op-sidebar_left_sub_tags" class="rthide"><?php _re('Displays tags in left subpage sidebar.'); ?></div>
						</div>
					</td>
					<td class="secondcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Tags Order:'); ?>
							</div>
							<div class="paramcheck">
								<label class="sidebar_left_sub_tags_order">
									<select id="sidebar_left_sub_tags_order" name="moxy-options[sidebar_left_sub_tags_order]">
      			   						<option value="name" <?php if ($option['sidebar_left_sub_tags_order'] == "name") : ?>selected="selected"<?php endif; ?>><?php _re('Name'); ?></option>    	
      			   						<option value="count" <?php if ($option['sidebar_left_sub_tags_order'] == "count") : ?>selected="selected"<?php endif; ?>><?php _re('Count'); ?></option> 	    				
      			     				</select>
      			     			</label>
      			     			<a href="#" rel="rokbox[350 70][module=op-sidebar_left_sub_tags_order]"><span class="help">Help</span></a>
							</div>
							<div id="op-sidebar_left_sub_tags_order" class="rthide"><?php _re('Order of tags.'); ?></div>
						</div>
					</td>
				</tr>
			</table>
			</div>
			
			<div class="inner-tabber">
			<a name="rightsidesub"></a>
			
			<span class="section-title"><?php _re('Right Subpage Sidebar:'); ?></span><br /><br />
		
			<table class="options_table">
				<tr>
					<td class="firstcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Sidebar File:'); ?>
							</div>
							<div class="paramcheck">
								<label class="right_sub_side_file">
									<input class="textbox" id="right_sub_side_file" type="text" size="16" maxlength="255" name="moxy-options[right_sub_side_file]" value="<?php echo $option['right_sub_side_file']; ?>" />
                   				</label>
                   				<a href="#" rel="rokbox[350 70][module=op-right_sub_side_file]"><span class="help">Help</span></a>
							</div>
							<div id="op-right_sub_side_file" class="rthide"><?php _re('Name of the file that holds all default sidebar content. File is located inside theme/includes directory.'); ?></div>
						</div>
					</td>
					<td class="secondcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Authors:'); ?>
							</div>
							<div class="paramcheck onlycheck">
								<?php if(rok_isIE()) { ?><label class="sidebar_right_sub_authors"><?php } ?><input type="checkbox" value="true" class="checkbox" name="moxy-options[sidebar_right_sub_authors]" id="sidebar_right_sub_authors" <?php if($option['sidebar_right_sub_authors'] == 'true') { ?>checked="checked"<?php } ?> /><?php if(rok_isIE()) { ?></label><?php } ?>
								<?php if(!rok_isIE()) { ?><label class="sidebar_right_sub_authors" for="sidebar_right_sub_authors"></label><?php } ?>
								<a href="#" rel="rokbox[350 70][module=op-sidebar_right_sub_authors]"><span class="help">Help</span></a>
							</div>
							<div id="op-sidebar_right_sub_authors" class="rthide"><?php _re('Displays authors in right subpage sidebar.'); ?></div>
						</div>
					</td>
				</tr>
				<tr>
					<td class="firstcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Exclude Admin:'); ?>
							</div>
							<div class="paramcheck onlycheck">
								<?php if(rok_isIE()) { ?><label class="sidebar_right_sub_authors_exadmin"><?php } ?><input type="checkbox" value="1" class="checkbox" name="moxy-options[sidebar_right_sub_authors_exadmin]" id="sidebar_right_sub_authors_exadmin" <?php if($option['sidebar_right_sub_authors_exadmin'] == '1') { ?>checked="checked"<?php } ?> /><?php if(rok_isIE()) { ?></label><?php } ?>
								<?php if(!rok_isIE()) { ?><label class="sidebar_right_sub_authors_exadmin" for="sidebar_right_sub_authors_exadmin"></label><?php } ?>
								<a href="#" rel="rokbox[350 70][module=op-sidebar_right_sub_authors_exadmin]"><span class="help">Help</span></a>
							</div>
							<div id="op-sidebar_right_sub_authors_exadmin" class="rthide"><?php _re('Excludes admin from the author list.'); ?></div>
						</div>
					</td>
					<td class="secondcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Author Full Name:'); ?>
							</div>
							<div class="paramcheck onlycheck">
								<?php if(rok_isIE()) { ?><label class="sidebar_right_sub_authors_fullname"><?php } ?><input type="checkbox" value="1" class="checkbox" name="moxy-options[sidebar_right_sub_authors_fullname]" id="sidebar_right_sub_authors_fullname" <?php if($option['sidebar_right_sub_authors_fullname'] == '1') { ?>checked="checked"<?php } ?> /><?php if(rok_isIE()) { ?></label><?php } ?>
								<?php if(!rok_isIE()) { ?><label class="sidebar_right_sub_authors_fullname" for="sidebar_right_sub_authors_fullname"></label><?php } ?>
								<a href="#" rel="rokbox[350 70][module=op-sidebar_right_sub_authors_fullname]"><span class="help">Help</span></a>
							</div>
							<div id="op-sidebar_right_sub_authors_fullname" class="rthide"><?php _re('Display / hide full name of author.'); ?></div>
						</div>
					</td>
				</tr>
				<tr>
					<td class="firstcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Blogroll:'); ?>
							</div>
							<div class="paramcheck onlycheck">
								<?php if(rok_isIE()) { ?><label class="sidebar_right_sub_blogroll"><?php } ?><input type="checkbox" value="true" class="checkbox" name="moxy-options[sidebar_right_sub_blogroll]" id="sidebar_right_sub_blogroll" <?php if($option['sidebar_right_sub_blogroll'] == 'true') { ?>checked="checked"<?php } ?> /><?php if(rok_isIE()) { ?></label><?php } ?>
								<?php if(!rok_isIE()) { ?><label class="sidebar_right_sub_blogroll" for="sidebar_right_sub_blogroll"></label><?php } ?>
								<a href="#" rel="rokbox[350 70][module=op-sidebar_right_sub_blogroll]"><span class="help">Help</span></a>
							</div>
							<div id="op-sidebar_right_sub_blogroll" class="rthide"><?php _re('Displays blogroll in right subpage sidebar.'); ?></div>
						</div>
					</td>
					<td class="secondcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Blogroll Order:'); ?>
							</div>
							<div class="paramcheck">
								<label class="sidebar_right_sub_blogroll_order">
									<select id="sidebar_right_sub_blogroll_order" name="moxy-options[sidebar_right_sub_blogroll_order]">
      			   						<option value="ID" <?php if ($option['sidebar_right_sub_blogroll_order'] == "ID") : ?>selected="selected"<?php endif; ?>>ID</option>    	
      			   						<option value="url" <?php if ($option['sidebar_right_sub_blogroll_order'] == "url") : ?>selected="selected"<?php endif; ?>><?php _re('URL'); ?></option> 
      			   						<option value="name" <?php if ($option['sidebar_right_sub_blogroll_order'] == "name") : ?>selected="selected"<?php endif; ?>><?php _re('Name'); ?></option> 
      			   						<option value="target" <?php if ($option['sidebar_right_sub_blogroll_order'] == "target") : ?>selected="selected"<?php endif; ?>><?php _re('Target'); ?></option>
      			   						<option value="rating" <?php if ($option['sidebar_right_sub_blogroll_order'] == "rating") : ?>selected="selected"<?php endif; ?>><?php _re('Rating'); ?></option>
      			   						<option value="updated" <?php if ($option['sidebar_right_sub_blogroll_order'] == "updated") : ?>selected="selected"<?php endif; ?>><?php _re('Updated'); ?></option>
      			   						<option value="rss" <?php if ($option['sidebar_right_sub_blogroll_order'] == "rss") : ?>selected="selected"<?php endif; ?>><?php _re('RSS'); ?></option>
      			   						<option value="lenght" <?php if ($option['sidebar_right_sub_blogroll_order'] == "lenght") : ?>selected="selected"<?php endif; ?>><?php _re('Lenght'); ?></option>
      			   						<option value="rand" <?php if ($option['sidebar_right_sub_blogroll_order'] == "rand") : ?>selected="selected"<?php endif; ?>><?php _re('Random'); ?></option>	    				
      			     				</select>
      			     			</label>
      			     			<a href="#" rel="rokbox[350 70][module=op-sidebar_right_sub_blogroll_order]"><span class="help">Help</span></a>
							</div>
							<div id="op-sidebar_right_sub_blogroll_order" class="rthide"><?php _re('Changes blogroll order in right subpage sidebar.'); ?></div>
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
								<label class="sidebar_right_sub_blogroll_limit">
									<input class="textbox" id="sidebar_right_sub_blogroll_limit" type="text" size="3" maxlength="255" name="moxy-options[sidebar_right_sub_blogroll_limit]" value="<?php echo $option['sidebar_right_sub_blogroll_limit']; ?>" />
                   				</label>
                   				<a href="#" rel="rokbox[350 50][module=op-sidebar_right_sub_blogroll_limit]"><span class="help">Help</span></a>
							</div>
							<div id="op-sidebar_right_sub_blogroll_limit" class="rthide"><?php _re('Here you can limit the number of displayed links in blogroll, -1 displays all links.'); ?></div>
						</div>
					</td>
					<td class="secondcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Blogroll Categorize:'); ?>
							</div>
							<div class="paramcheck">
								<label class="sidebar_right_sub_blogroll_categorize">
									<select id="sidebar_right_sub_blogroll_categorize" name="moxy-options[sidebar_right_sub_blogroll_categorize]" style="width: 100px !important;">
      			   						<option value="1" <?php if ($option['sidebar_right_sub_blogroll_categorize'] == "1") : ?>selected="selected"<?php endif; ?>><?php _re('On'); ?></option>    	
      			   						<option value="0" <?php if ($option['sidebar_right_sub_blogroll_categorize'] == "0") : ?>selected="selected"<?php endif; ?>><?php _re('Off'); ?></option> 	    				
      			     				</select>
      			     			</label>
      			     			<a href="#" rel="rokbox[350 70][module=op-sidebar_right_sub_blogroll_categorize]"><span class="help">Help</span></a>
							</div>
							<div id="op-sidebar_right_sub_blogroll_categorize" class="rthide"><?php _re('Bookmarks should be shown within their assigned Categories or not.'); ?></div>
						</div>
					</td>
				</tr>
				<tr>
					<td class="firstcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Blogroll Category:'); ?>
							</div>
							<div class="paramcheck">
								<label class="sidebar_right_sub_blogroll_category">
									<input class="textbox" id="sidebar_right_sub_blogroll_category" type="text" size="3" maxlength="255" name="moxy-options[sidebar_right_sub_blogroll_category]" value="<?php echo $option['sidebar_right_sub_blogroll_category']; ?>" />
                   				</label>
                   				<a href="#" rel="rokbox[350 50][module=op-sidebar_right_sub_blogroll_category]"><span class="help">Help</span></a>
							</div>
							<div id="op-sidebar_right_sub_blogroll_category" class="rthide"><?php _re('Comma separated list of numeric Category IDs to be displayed. If none is specified, all Categories with bookmarks are shown.'); ?></div>
						</div>
					</td>
					<td class="secondcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Display Meta:'); ?>
							</div>
							<div class="paramcheck onlycheck">
								<?php if(rok_isIE()) { ?><label class="sidebar_right_sub_meta"><?php } ?><input type="checkbox" value="true" class="checkbox" name="moxy-options[sidebar_right_sub_meta]" id="sidebar_right_sub_meta" <?php if($option['sidebar_right_sub_meta'] == 'true') { ?>checked="checked"<?php } ?> /><?php if(rok_isIE()) { ?></label><?php } ?>
								<?php if(!rok_isIE()) { ?><label class="sidebar_right_sub_meta" for="sidebar_right_sub_meta"></label><?php } ?>
								<a href="#" rel="rokbox[350 70][module=op-sidebar_right_sub_meta]"><span class="help">Help</span></a>
							</div>
							<div id="op-sidebar_right_sub_meta" class="rthide"><?php _re('Display Meta in right subapge sidebar.'); ?></div>
						</div>
					</td>
				</tr>
			</table>
			</div>
										
		</div>
		<div class="clr"></div>
		
	</div>