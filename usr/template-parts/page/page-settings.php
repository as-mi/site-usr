<?php
/**
 * Add componenets of settings page
 */
require_once(get_template_directory() . "/inc/components/parteners.php");
 

/**
 * Add Settings Page to menu
 */

function add_theme_menu_item() {
    add_menu_page("USR Settings", "USR Settings", "manage_options", "parteners-panel", "theme_settings_page", null, 99);
}

add_action("admin_menu", "add_theme_menu_item");

/**
 * Template of settings page
 */

function theme_settings_page()
{
?>

        <div class="wrap">
	    <h1>USR Theme Settings</h1>
	    <form method="post" action="options.php" enctype='multipart/form-data'>
	        <?php
	            settings_fields("parteners-section");
	            do_settings_sections("parteners-options");      
	            submit_button(); 
	        ?>          
	    </form>
		</div>

<?php
}