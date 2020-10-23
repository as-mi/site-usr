<?php


/**
 * Tools for contact page
 * 
 */


// Register contact setting
function register_contact_in_theme_settings_fields() {
    add_settings_section("contact-section", "Contact", null, "contact-options");
    add_settings_field("contact_email", "Email Address", "display_contact", "contact-options", "contact-section");
    add_settings_field("contact_google_key", "ReCaptcha API key", "display_contact_google_key", "contact-options", "contact-section");
    
    $args = array(
        'type' => 'string', 
        'default' => NULL,
        );

    register_setting("contact-section", "contact_email", $args);
    register_setting("contact-section", "contact_google_key", $args);
}

// Text displayed in settings page on contact tab
function display_contact() {
    ?>
        <p>All messages from contact page will be redirected to this email:</p>
        </br>
        <input 
            type="email" 
            name="contact_email"
            value="<?php echo esc_attr( get_option('contact_email') ); ?>" 
        
        /> 
   <?php
}

function display_contact_google_key() {
    ?>
    <p>Protect contact form with recaptcha by google. </br> 
    More details about service and how to get the key <a href="https://developers.google.com/recaptcha/docs/v3"> here</a>.
    </br>
    <input 
        type="text"
        name="contact_google_key"
        value="<?php echo esc_attr( get_option('contact_google_key') ); ?>" 
    <?php
}

add_action("admin_init", "register_contact_in_theme_settings_fields");