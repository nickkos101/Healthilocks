<div id="search">
			<form method="get" id="searchform" class="searchform"  action="<?php bloginfo('home'); ?>" >
				<input id="s" type="text" name="s" class="search_field"  value="Search" onfocus="if (this.value == 'Search') this.value = '';" onblur="if (this.value == '') this.value = 'Search';" />
			<input id="searchsubmit" type="submit" value="" class="search_btn" />
			</form>
</div>
<?php //echo wp_specialchars($s, 1); ?>