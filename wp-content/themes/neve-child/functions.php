<?php
//Child Theme Functions File
add_action( "wp_enqueue_scripts", "enqueue_wp_child_theme", 99 );
function enqueue_wp_child_theme() 
{
    if((esc_attr(get_option("childthemewpdotcom_setting_x")) != "Yes")) 
    {
		//This is your parent stylesheet you can choose to include or exclude this by going to your Child Theme Settings under the "Settings" in your WP Dashboard
		wp_enqueue_style("parent-css", get_template_directory_uri()."/style.css" );
		wp_enqueue_style("fontawesome-css", "https://pro.fontawesome.com/releases/v5.10.0/css/all.css" );
		wp_enqueue_style("custom-css", get_stylesheet_directory_uri()."/assets/css/custom.css" );
		wp_enqueue_style("responsive-css", get_stylesheet_directory_uri()."/assets/css/responsive.css" ); 
    }

	//This is your child theme stylesheet = style.css
	wp_enqueue_style("child-css", get_stylesheet_uri());

	//This is your child theme js file = js/script.js
	wp_enqueue_script("child-js", get_stylesheet_directory_uri() . "/js/script.js", array( "jquery" ), "1.0", true );
}
 

// ChildThemeWP.com Settings 
function childthemewpdotcom_register_settings() 
{ 
	register_setting( "childthemewpdotcom_theme_options_group", "childthemewpdotcom_setting_x", "ctwp_callback" );
}
add_action( "admin_init", "childthemewpdotcom_register_settings" );

//ChildThemeWP.com Options Page
function childthemewpdotcom_register_options_page() 
{
	add_options_page("Child Theme Settings", "My Child Theme", "manage_options", "childthemewpdotcom", "childthemewpdotcom_theme_options_page");
}
add_action("admin_menu", "childthemewpdotcom_register_options_page");

//ChildThemeWP.com Options Form
function childthemewpdotcom_theme_options_page()
{ 
?>
<div>
	<style>
		table.childthemewpdotcom {table-layout: fixed ;  width: 100%; vertical-align:top; }
		table.childthemewpdotcom td { width:50%; vertical-align:top; padding:0px 20px; }
		#childthemewpdotcom_settings { padding:0px 20px; }
	</style> 
	<div id="childthemewpdotcom_settings">
		<h1>Child Theme Options</h1>
	</div>
	<table class="childthemewpdotcom">
		<tr>
			<td>
                <form method="post" action="options.php">
                	<h2>Parent Theme Stylesheet Include or Exclude</h2>
                	<?php settings_fields( "childthemewpdotcom_theme_options_group" ); ?>
					<p><label><input size="76" type="checkbox" name="childthemewpdotcom_setting_x" id="childthemewpdotcom_setting_x"
					<?php if((esc_attr(get_option("childthemewpdotcom_setting_x")) == "Yes")) {   echo " checked='checked' ";  }  ?>
					value="Yes" > 
					TICK To DISABLE The Parent Stylesheet style.css In Your Site HTML<br><br>
                    ONLY TICK This Box If When You Inspect Your Source Code It Contains Your Parent Stylesheet style.css Two Times. Ticking This Box Will Only Include It Once.</label></p>
					<?php submit_button(); ?>
				</form>	
			</td>
			<td>
				<h2>More From The Author</h2>
                <p><b>Would you like your website speed to be faster?</b> I used WP Engine to build one of the fastest WordPress websites in the World <a href="https://shareasale.com/r.cfm?b=779590&u=1897845&m=41388&urllink=&afftrack=">WP Engine - Get 3 months free on annual plans</a> [affiliate link]</p>
				<p><b>Find out about how I built one fo the fastest WordPress websites in the World</b> <a href="https://www.wpspeedupoptimisation.com?ref=ChildThemeWP" target="_blank">I followed these steps</a></p>
			</td>
		</tr>
	</table>
</div>
<?php
} 

//Footer Link
function childthemewpdotcom_footerlink() 
{  
	//if((is_home()) || (is_front_page()))
	{
	?>
		<!-- <div id="footerlinktochildthemewp" style="text-align:center;"><p><a href="https://childthemewp.com" target="_blank" style="font-size:10px;">child theme wp</a></p></div> -->
		<?php
	}
}
add_action("wp_footer", "childthemewpdotcom_footerlink");



function cc_mime_types($mimes) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
  }
  add_filter('upload_mimes', 'cc_mime_types');


  



