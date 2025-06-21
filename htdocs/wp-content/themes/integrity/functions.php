<?php
/**
 * Integrity functions and definitions
 *
 * @package Integrity
 */

if ( ! function_exists( 'integrity_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function integrity_setup() {
	
	if ( ! isset( $content_width ) )
		$content_width = 640; /* pixels */

	load_theme_textdomain( 'integrity', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'custom-logo', array(
		'height'      => 240,
		'width'       => 240,
		'flex-height' => true,
	) );
	
	add_theme_support( 'custom-background', array(
		'default-color' => 'ffffff'
	) );
	
	// Add support for Block Styles.
	add_theme_support( 'wp-block-styles' );

	// Add support for full and wide align images.
	add_theme_support( 'align-wide' );
	
	add_filter('use_widgets_block_editor', '__return_false');
	
	/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
				'navigation-widgets',
			)
		);
	
	// Add support for responsive embedded content.
	add_theme_support( 'responsive-embeds' );
	
}
endif; // integrity_setup
add_action( 'after_setup_theme', 'integrity_setup' );


function integrity_scripts() {
	wp_enqueue_style( 'integrity-basic-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'integrity_scripts' );

/**
 * Use front-page.php when Front page displays is set to a static page.
 *
 *
 * @param string $template front-page.php.
 *
 * @return string The template to be used: blank if is_home() is true (defaults to index.php), else $template.
 */
function integrity_front_page_template( $template ) {
	return is_home() ? '' : $template;
}
add_filter( 'frontpage_template',  'integrity_front_page_template' );

/* Redirect on theme activation */
add_action( 'admin_init', 'integrity_theme_activation_redirect' );

/**
 * Redirect to "Install Plugins" page on activation
 */
function integrity_theme_activation_redirect() {
	global $pagenow;
	if ( "themes.php" == $pagenow && is_admin() && isset( $_GET['activated'] ) ) {
		wp_redirect( esc_url_raw( add_query_arg( 'page', 'integrity-theme', admin_url( 'themes.php' ) ) ) );
	}
}

/**
 * Customizer additions.
 */

// Block Patterns.
require get_template_directory() . '/block-patterns.php';

// Theme About Page
require get_template_directory() . '/inc/about.php';


add_filter('use_widgets_block_editor', '__return_false');

// **********************
// Customizations
// **********************

function clinic_options_page() {
    add_menu_page(
        'Clinic Information',     // Page title
        'Clinic Info',            // Menu title
        'manage_options',         // Capability (admin-only)
        'clinic-info',            // Menu slug
        'clinic_options_page_html', // Callback function
        'dashicons-admin-home',   // Icon (WordPress dashicon)
        20                        // Position in the menu
    );
}
add_action('admin_menu', 'clinic_options_page');

function clinic_options_page_html() {
    if (!current_user_can('manage_options')) {
        return;
    }

    // Save settings when submitted
    if (isset($_POST['submit'])) {
        update_option('clinic_address', sanitize_text_field($_POST['clinic_address']));
        update_option('clinic_address_hyperlink', sanitize_textarea_field($_POST['clinic_address_hyperlink']));
        update_option('clinic_phone', sanitize_text_field($_POST['clinic_phone']));
        update_option('clinic_hours_mon', sanitize_text_field($_POST['clinic_hours_mon']));
        update_option('clinic_hours_tue', sanitize_text_field($_POST['clinic_hours_tue']));
        update_option('clinic_hours_wed', sanitize_text_field($_POST['clinic_hours_wed']));
        update_option('clinic_hours_thu', sanitize_text_field($_POST['clinic_hours_thu']));
        update_option('clinic_hours_fri', sanitize_text_field($_POST['clinic_hours_fri']));
        update_option('clinic_hours_sat', sanitize_text_field($_POST['clinic_hours_sat']));
        update_option('clinic_hours_sun', sanitize_text_field($_POST['clinic_hours_sun']));
        echo '<div class="updated"><p>Settings saved.</p></div>';
    }

    // Retrieve stored values
    $clinic_address = get_option('clinic_address', '');
    $clinic_phone = get_option('clinic_phone', '');
	$clinic_address_hyperlink = get_option('clinic_address_hyperlink', '');
    $clinic_hours_mon = get_option('clinic_hours_mon', '');
    $clinic_hours_tue = get_option('clinic_hours_tue', '');
    $clinic_hours_wed = get_option('clinic_hours_wed', '');
    $clinic_hours_thu = get_option('clinic_hours_thu', '');
    $clinic_hours_fri = get_option('clinic_hours_fri', '');
    $clinic_hours_sat = get_option('clinic_hours_sat', '');
    $clinic_hours_sun = get_option('clinic_hours_sun', '');

    ?>
    <div class="wrap">
        <h1>Clinic Information Settings</h1>
        <form method="post">
            <table class="form-table">
                <tr>
                    <th scope="row"><label for="clinic_address">Clinic Address</label></th>
                    <td><input type="text" id="clinic_address" name="clinic_address" value="<?php echo esc_attr($clinic_address); ?>" class="regular-text"></td>
                </tr>
				<tr>
                    <th scope="row"><label for="clinic_address_hyperlink">Clinic Address Hyperlink</label></th>
                    <td><input type="text" id="clinic_address_hyperlink" name="clinic_address_hyperlink" value="<?php echo esc_attr($clinic_address_hyperlink); ?>" class="regular-text"></td>
                </tr>
				
                <tr>
                    <th scope="row"><label for="clinic_phone">Clinic Phone</label></th>
                    <td><input type="text" id="clinic_phone" name="clinic_phone" value="<?php echo esc_attr($clinic_phone); ?>" class="regular-text"></td>
                </tr>
                <tr>
                    <th scope="row"><label for="clinic_hours_mon">Clinic Hours - Mon</label></th>
                    <td><input type="text" id="clinic_hours_mon" name="clinic_hours_mon" value="<?php echo esc_attr($clinic_hours_mon); ?>" class="regular-text"></td>
                </tr>
				<tr>
                    <th scope="row"><label for="clinic_hours_tue">Clinic Hours - Tue</label></th>
                    <td><input type="text" id="clinic_hours_tue" name="clinic_hours_tue" value="<?php echo esc_attr($clinic_hours_tue); ?>" class="regular-text"></td>
                </tr>
				<tr>
                    <th scope="row"><label for="clinic_hours_wed">Clinic Hours - Wed</label></th>
                    <td><input type="text" id="clinic_hours_wed" name="clinic_hours_wed" value="<?php echo esc_attr($clinic_hours_wed); ?>" class="regular-text"></td>
                </tr>
				<tr>
                    <th scope="row"><label for="clinic_hours_thu">Clinic Hours - Thu</label></th>
                    <td><input type="text" id="clinic_hours_thu" name="clinic_hours_thu" value="<?php echo esc_attr($clinic_hours_thu); ?>" class="regular-text"></td>
                </tr>
				<tr>
                    <th scope="row"><label for="clinic_hours_fri">Clinic Hours - Fri</label></th>
                    <td><input type="text" id="clinic_hours_fri" name="clinic_hours_fri" value="<?php echo esc_attr($clinic_hours_fri); ?>" class="regular-text"></td>
                </tr>
				<tr>
                    <th scope="row"><label for="clinic_hours_sat">Clinic Hours - Sat</label></th>
                    <td><input type="text" id="clinic_hours_sat" name="clinic_hours_sat" value="<?php echo esc_attr($clinic_hours_sat); ?>" class="regular-text"></td>
                </tr>
				<tr>
                    <th scope="row"><label for="clinic_hours_sun">Clinic Hours - Sun</label></th>
                    <td><input type="text" id="clinic_hours_sun" name="clinic_hours_sun" value="<?php echo esc_attr($clinic_hours_sun); ?>" class="regular-text"></td>
                </tr>
            </table>
            <?php submit_button(); ?>
        </form>
    </div>
    <?php
}


function clinic_address_shortcode() {
    return get_option('clinic_address', 'Not Set');
}
add_shortcode('clinic_address', 'clinic_address_shortcode');

function clinic_address_hyperlink_shortcode() {
    return wp_kses_post(get_option('clinic_address_hyperlink', 'Not Set'));
}
add_shortcode('clinic_address_hyperlink', 'clinic_address_hyperlink_shortcode');

function clinic_phone_shortcode() {
    return get_option('clinic_phone', 'Not Set');
}
add_shortcode('clinic_phone', 'clinic_phone_shortcode');


function clinic_hours_mon_shortcode() {
    return get_option('clinic_hours_mon', 'Not Set');
}
add_shortcode('clinic_hours_mon', 'clinic_hours_mon_shortcode');

function clinic_hours_tue_shortcode() {
    return get_option('clinic_hours_tue', 'Not Set');
}
add_shortcode('clinic_hours_tue', 'clinic_hours_tue_shortcode');

function clinic_hours_wed_shortcode() {
    return get_option('clinic_hours_wed', 'Not Set');
}
add_shortcode('clinic_hours_wed', 'clinic_hours_wed_shortcode');
function clinic_hours_thu_shortcode() {
    return get_option('clinic_hours_thu', 'Not Set');
}
add_shortcode('clinic_hours_thu', 'clinic_hours_thu_shortcode');
function clinic_hours_fri_shortcode() {
    return get_option('clinic_hours_fri', 'Not Set');
}
add_shortcode('clinic_hours_fri', 'clinic_hours_fri_shortcode');
function clinic_hours_sat_shortcode() {
    return get_option('clinic_hours_sat', 'Not Set');
}
add_shortcode('clinic_hours_sat', 'clinic_hours_sat_shortcode');
function clinic_hours_sun_shortcode() {
    return get_option('clinic_hours_sun', 'Not Set');
}
add_shortcode('clinic_hours_sun', 'clinic_hours_sun_shortcode');