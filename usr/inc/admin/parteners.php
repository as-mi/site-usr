<?php
require_once(get_template_directory() . "/inc/utils/image.php");

/**
 * Tools for parteners management
 * 
 */


// Register parteners bulk creation as setting
function register_theme_settings_fields() {
    add_settings_section("parteners-section", "Parteners", null, "parteners-options");
    add_settings_field("bulk_parteners", "Upload Bulk Parteners", "display_bulk_parteners", "parteners-options", "parteners-section");
    
    $args = array(
        'type' => 'string', 
        'sanitize_callback' => 'handle_bulk_parteners_upload',
        'default' => NULL,
        );
    register_setting("parteners-section", "bulk_parteners", $args);
}

// Text displayed in settings page for parteners csv upload
function display_bulk_parteners() {
    ?>
        <p>In order to upload more parteners upload a csv in the following format:</p>
        <code>name | about | location | imageId | imageUrl</code>
        <p>Csv separator is <code>,</code>, no header should be included, <code>imageId</code> is value generated from wordpress media upload,
         if <code>imageId</code> is set to 0 we will use <code>imageUrl</code>.
        </p> 
        </br>
        <input type="file" name="parteners" /> 
   <?php
}

add_action("admin_init", "register_theme_settings_fields");

// parse csv with bunch of parteners
function handle_bulk_parteners_upload() {
    
    if(!empty($_FILES['parteners']['tmp_name'])) {
        if(($handle = fopen($_FILES['parteners']['tmp_name'], 'r')) !== FALSE) {
            $lineNumber = 0;
            while(($line = fgetcsv($handle, 1000, ",")) !== FALSE) {
                try {
                    
                    $image = is_numeric($line[3]) && (int) $line[3] == 0 ? usr_upload_image($line[4], $line[0]) : $line[3];

                    $postData = [
                        'name'      => $line[0],
                        'about'     => $line[1],
                        'location'  => $line[2],
                        'image'     => $image
                    ];
                    create_partener($postData);
                } catch (Exception $e) {
                    continue;
                }

            }
        }
    }
    return "success";
}

function create_partener(array $partenerData) {
    $partenerId = wp_insert_post(
        [
            'post_title'    => $partenerData['name'],
            'post_content'  => $partenerData['about'],
            'post_status'   => 'publish',
            'post_type'     => 'parteners'
        ]
    );

    if($partenerId != 0) {
        wp_set_post_terms($partenerId, 'partener-' . $partenerData['location'], 'post_tag');
        set_post_thumbnail($partenerId, $partenerData['image']);
        
    }
}


