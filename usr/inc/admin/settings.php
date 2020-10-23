<?php
/**
 * Add componenets of settings page
 */
require_once(get_template_directory() . "/inc/admin/parteners.php");
require_once(get_template_directory() . "/inc/admin/contact.php"); 

/**
 * Add Settings Page to menu
 */

function add_theme_menu_item() {
    add_menu_page("USR Settings", "USR Settings", "manage_options", "settings", "theme_settings_page", null, 99);
}

add_action("admin_menu", "add_theme_menu_item");

/**
 * Template of settings page
 */

function theme_settings_page()
{

	$tab = isset($_GET['tab']) ? $_GET['tab'] : null;

?>

        <div class="wrap">
	    <h1>USR Theme Settings</h1>
		<div class="wrap">

		<nav class="nav-tab-wrapper">
			<a href="?page=settings" class="nav-tab <?php if($tab===null):?>nav-tab-active<?php endif; ?>">General</a>
			<a href="?page=settings&tab=parteners" class="nav-tab <?php if($tab==='parteners'):?>nav-tab-active<?php endif; ?>">Parteners</a>
			<a href="?page=settings&tab=contact" class="nav-tab <?php if($tab==='contact'):?>nav-tab-active<?php endif; ?>">Contact</a>
    	</nav>

		</div>
	    <form method="post" action="options.php" enctype='multipart/form-data'>
	        <?php
			switch($tab) {
				case 'parteners':
					settings_fields("parteners-section");
					do_settings_sections("parteners-options");      
					submit_button("Upload"); 
					break;
				case 'contact':
					settings_fields("contact-section");
					do_settings_sections("contact-options");  
					submit_button(); 
					break;
				default:
					echo '<h1>General settings</h1>';
			
			}
	            
				
	        ?>          
	    </form>
		</div>

<?php
}