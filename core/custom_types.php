<?php
	/**
	 * Include and setup custom metaboxes and fields. (make sure you copy this file to outside the CMB2 directory)
	 *
	 * Be sure to replace all instances of 'yourprefix_' with your project's prefix.
	 * http://nacin.com/2010/05/11/in-wordpress-prefix-everything/
	 *
	 * @category YourThemeOrPlugin
	 * @package  Demo_CMB2
	 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
	 * @link     https://github.com/CMB2/CMB2
	 */

	/**
	 * Get the bootstrap! If using the plugin from wordpress.org, REMOVE THIS!
	 */

	if ( file_exists( dirname( __FILE__ ) . '/cmb2/init.php' ) ) {
		require_once dirname( __FILE__ ) . '/cmb2/init.php';
	} elseif ( file_exists( dirname( __FILE__ ) . '/CMB2/init.php' ) ) {
		require_once dirname( __FILE__ ) . '/CMB2/init.php';
	}

	/**
	 * Conditionally displays a metabox when used as a callback in the 'show_on_cb' cmb2_box parameter
	 *
	 * @param  CMB2 $cmb CMB2 object.
	 *
	 * @return bool      True if metabox should show
	 */
	function yourprefix_show_if_front_page( $cmb ) {
		// Don't show this metabox if it's not the front page template.
		if ( get_option( 'page_on_front' ) !== $cmb->object_id ) {
			return false;
		}

		return true;
	}

	/**
	 * Conditionally displays a field when used as a callback in the 'show_on_cb' field parameter
	 *
	 * @param  CMB2_Field $field Field object.
	 *
	 * @return bool              True if metabox should show
	 */
	function yourprefix_hide_if_no_cats( $field ) {
		// Don't show this field if not in the cats category.
		if ( ! has_tag( 'cats', $field->object_id ) ) {
			return false;
		}

		return true;
	}

	/**
	 * Manually render a field.
	 *
	 * @param  array $field_args Array of field arguments.
	 * @param  CMB2_Field $field The field object.
	 */
	function yourprefix_render_row_cb( $field_args, $field ) {
		$classes     = $field->row_classes();
		$id          = $field->args( 'id' );
		$label       = $field->args( 'name' );
		$name        = $field->args( '_name' );
		$value       = $field->escaped_value();
		$description = $field->args( 'description' );
		?>
        <div class="custom-field-row <?php echo esc_attr( $classes ); ?>">
            <p><label for="<?php echo esc_attr( $id ); ?>"><?php echo esc_html( $label ); ?></label></p>
            <p><input id="<?php echo esc_attr( $id ); ?>" type="text" name="<?php echo esc_attr( $name ); ?>"
                      value="<?php echo $value; ?>"/></p>
            <p class="description"><?php echo esc_html( $description ); ?></p>
        </div>
		<?php
	}

	/**
	 * Manually render a field column display.
	 *
	 * @param  array $field_args Array of field arguments.
	 * @param  CMB2_Field $field The field object.
	 */
	function yourprefix_display_text_small_column( $field_args, $field ) {
		?>
        <div class="custom-column-display <?php echo esc_attr( $field->row_classes() ); ?>">
            <p><?php echo $field->escaped_value(); ?></p>
            <p class="description"><?php echo esc_html( $field->args( 'description' ) ); ?></p>
        </div>
		<?php
	}

	/**
	 * Conditionally displays a message if the $post_id is 2
	 *
	 * @param  array $field_args Array of field parameters.
	 * @param  CMB2_Field $field Field object.
	 */
	function yourprefix_before_row_if_2( $field_args, $field ) {
		if ( 2 == $field->object_id ) {
			echo '<p>Testing <b>"before_row"</b> parameter (on $post_id 2)</p>';
		} else {
			echo '<p>Testing <b>"before_row"</b> parameter (<b>NOT</b> on $post_id 2)</p>';
		}
	}

//	add_action( 'cmb2_admin_init', 'molotok_register_company_metabox' );
	/**
	 * Hook in and add a demo metabox. Can only happen on the 'cmb2_admin_init' or 'cmb2_init' hook.
	 */
	function molotok_register_company_metabox() {
		$prefix = 'molotok_';

		/**
		 * Sample metabox to demonstrate each field type included
		 */
		$cmb_demo = new_cmb2_box( array(
			'id'           => $prefix . 'company',
			'title'        => esc_html__( 'Компания', 'molotok' ),
			'object_types' => array( 'company' ), // Post type
		) );

		$cmb_demo->add_field( array(
			'name' => esc_html__( 'Company phone', 'molotok' ),
			'desc' => esc_html__( 'Company phone (+375 17 233 45 71)', 'molotok' ),
			'id'   => $prefix . 'company_phone',
			'type' => 'text_medium',
		) );

		$cmb_demo->add_field( array(
			'name' => esc_html__( 'Website URL', 'molotok' ),
			'desc' => esc_html__( 'Website URL (optional)', 'molotok' ),
			'id'   => $prefix . 'company_url',
			'type' => 'text_url',
			// 'protocols' => array('http', 'https', 'ftp', 'ftps', 'mailto', 'news', 'irc', 'gopher', 'nntp', 'feed', 'telnet'), // Array of allowed protocols
			// 'repeatable' => true,
		) );

		$cmb_demo->add_field( array(
			'name' => esc_html__( 'About products', 'molotok' ),
			'desc' => esc_html__( 'About products (optional)', 'molotok' ),
			'id'   => $prefix . 'company_products',
			'type' => 'textarea_small',
		) );

		$cmb_demo->add_field( array(
			'name' => esc_html__( 'Subscription', 'molotok' ),
			'desc' => esc_html__( 'Subscription (optional)', 'molotok' ),
			'id'   => $prefix . 'company_subscription',
			'type' => 'textarea_small',
		) );

		$cmb_demo->add_field( array(
			'name'    => esc_html__( 'Days counts', 'molotok' ),
			'desc'    => esc_html__( 'Days counts (optional)', 'molotok' ),
			'id'      => $prefix . 'company_days',
			'type'    => 'multicheck',
			// 'multiple' => true, // Store values in individual rows
			'options' => array(
				'30' => esc_html__( '30', 'molotok' ),
				'60' => esc_html__( '60', 'molotok' ),
				'90' => esc_html__( '90', 'molotok' ),
			),
			'inline'  => true, // Toggles display to inline
		) );
	}

//add_action( 'cmb2_admin_init', 'yourprefix_register_about_page_metabox' );
	/**
	 * Hook in and add a metabox that only appears on the 'About' page
	 */
	function yourprefix_register_about_page_metabox() {
		$prefix = 'yourprefix_about_';

		/**
		 * Metabox to be displayed on a single page ID
		 */
		$cmb_about_page = new_cmb2_box( array(
			'id'           => $prefix . 'metabox',
			'title'        => esc_html__( 'About Page Metabox', 'cmb2' ),
			'object_types' => array( 'page' ), // Post type
			'context'      => 'normal',
			'priority'     => 'high',
			'show_names'   => true, // Show field names on the left
			'show_on'      => array(
				'id' => array( 2 ),
			), // Specific post IDs to display this metabox
		) );

		$cmb_about_page->add_field( array(
			'name' => esc_html__( 'Test Text', 'cmb2' ),
			'desc' => esc_html__( 'field description (optional)', 'cmb2' ),
			'id'   => $prefix . 'text',
			'type' => 'text',
		) );

	}

//add_action( 'cmb2_admin_init', 'yourprefix_register_repeatable_group_field_metabox' );
	/**
	 * Hook in and add a metabox to demonstrate repeatable grouped fields
	 */
	function yourprefix_register_repeatable_group_field_metabox() {
		$prefix = 'yourprefix_group_';

		/**
		 * Repeatable Field Groups
		 */
		$cmb_group = new_cmb2_box( array(
			'id'           => $prefix . 'metabox',
			'title'        => esc_html__( 'Repeating Field Group', 'cmb2' ),
			'object_types' => array( 'page' ),
		) );

		// $group_field_id is the field id string, so in this case: $prefix . 'demo'
		$group_field_id = $cmb_group->add_field( array(
			'id'          => $prefix . 'demo',
			'type'        => 'group',
			'description' => esc_html__( 'Generates reusable form entries', 'cmb2' ),
			'options'     => array(
				'group_title'   => esc_html__( 'Entry {#}', 'cmb2' ), // {#} gets replaced by row number
				'add_button'    => esc_html__( 'Add Another Entry', 'cmb2' ),
				'remove_button' => esc_html__( 'Remove Entry', 'cmb2' ),
				'sortable'      => true,
				// 'closed'     => true, // true to have the groups closed by default
			),
		) );

		/**
		 * Group fields works the same, except ids only need
		 * to be unique to the group. Prefix is not needed.
		 *
		 * The parent field's id needs to be passed as the first argument.
		 */
		$cmb_group->add_group_field( $group_field_id, array(
			'name' => esc_html__( 'Entry Title', 'cmb2' ),
			'id'   => 'title',
			'type' => 'text',
			// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
		) );

		$cmb_group->add_group_field( $group_field_id, array(
			'name'        => esc_html__( 'Description', 'cmb2' ),
			'description' => esc_html__( 'Write a short description for this entry', 'cmb2' ),
			'id'          => 'description',
			'type'        => 'textarea_small',
		) );

		$cmb_group->add_group_field( $group_field_id, array(
			'name' => esc_html__( 'Entry Image', 'cmb2' ),
			'id'   => 'image',
			'type' => 'file',
		) );

		$cmb_group->add_group_field( $group_field_id, array(
			'name' => esc_html__( 'Image Caption', 'cmb2' ),
			'id'   => 'image_caption',
			'type' => 'text',
		) );

	}

//add_action( 'cmb2_admin_init', 'yourprefix_register_user_profile_metabox' );
	/**
	 * Hook in and add a metabox to add fields to the user profile pages
	 */
	function yourprefix_register_user_profile_metabox() {
		$prefix = 'yourprefix_user_';

		/**
		 * Metabox for the user profile screen
		 */
		$cmb_user = new_cmb2_box( array(
			'id'               => $prefix . 'edit',
			'title'            => esc_html__( 'User Profile Metabox', 'cmb2' ),
			// Doesn't output for user boxes
			'object_types'     => array( 'user' ),
			// Tells CMB2 to use user_meta vs post_meta
			'show_names'       => true,
			'new_user_section' => 'add-new-user',
			// where form will show on new user page. 'add-existing-user' is only other valid option.
		) );

		$cmb_user->add_field( array(
			'name'     => esc_html__( 'Extra Info', 'cmb2' ),
			'desc'     => esc_html__( 'field description (optional)', 'cmb2' ),
			'id'       => $prefix . 'extra_info',
			'type'     => 'title',
			'on_front' => false,
		) );

		$cmb_user->add_field( array(
			'name' => esc_html__( 'Avatar', 'cmb2' ),
			'desc' => esc_html__( 'field description (optional)', 'cmb2' ),
			'id'   => $prefix . 'avatar',
			'type' => 'file',
		) );

		$cmb_user->add_field( array(
			'name' => esc_html__( 'Facebook URL', 'cmb2' ),
			'desc' => esc_html__( 'field description (optional)', 'cmb2' ),
			'id'   => $prefix . 'facebookurl',
			'type' => 'text_url',
		) );

		$cmb_user->add_field( array(
			'name' => esc_html__( 'Twitter URL', 'cmb2' ),
			'desc' => esc_html__( 'field description (optional)', 'cmb2' ),
			'id'   => $prefix . 'twitterurl',
			'type' => 'text_url',
		) );

		$cmb_user->add_field( array(
			'name' => esc_html__( 'Google+ URL', 'cmb2' ),
			'desc' => esc_html__( 'field description (optional)', 'cmb2' ),
			'id'   => $prefix . 'googleplusurl',
			'type' => 'text_url',
		) );

		$cmb_user->add_field( array(
			'name' => esc_html__( 'Linkedin URL', 'cmb2' ),
			'desc' => esc_html__( 'field description (optional)', 'cmb2' ),
			'id'   => $prefix . 'linkedinurl',
			'type' => 'text_url',
		) );

		$cmb_user->add_field( array(
			'name' => esc_html__( 'User Field', 'cmb2' ),
			'desc' => esc_html__( 'field description (optional)', 'cmb2' ),
			'id'   => $prefix . 'user_text_field',
			'type' => 'text',
		) );

	}

//add_action( 'cmb2_admin_init', 'molotok_company_category_taxonomy_metabox' );
	/**
	 * Hook in and add a metabox to add fields to taxonomy terms
	 */
	function molotok_company_category_taxonomy_metabox() {
		$prefix = 'molotok_';

		/**
		 * Metabox to add fields to categories and tags
		 */
		$cmb_term = new_cmb2_box( array(
			'id'           => $prefix . 'company_category',
			'title'        => esc_html__( 'Категория', 'molotok' ), // Doesn't output for term boxes
			'object_types' => array( 'term' ), // Tells CMB2 to use term_meta vs post_meta
			'taxonomies'   => array( 'company-category' ), // Tells CMB2 which taxonomies should have these fields
			// 'new_term_section' => true, // Will display in the "Add New Category" section
		) );

		$cmb_term->add_field( array(
			'name' => esc_html__( 'Картинка', 'molotok' ),
			'desc' => esc_html__( 'Картинка (optional)', 'molotok' ),
			'id'   => $prefix . 'company_category_avatar',
			'type' => 'file',
		) );

	}

	add_action( 'cmb2_admin_init', 'mastak_register_theme_options_metabox' );
	/**
	 * Hook in and register a metabox to handle a theme options page and adds a menu item.
	 */
	function mastak_register_theme_options_metabox() {
		$prefix = THEME_NAME . '_theme_options_';
		/**
		 * Registers options page menu item and form.
		 */
		$cmb_options = new_cmb2_box( array(
			'id'           => $prefix . 'page',
			'title'        => esc_html__( 'Theme Settings', THEME_NAME ),
			'object_types' => array( 'options-page' ),

			/*
			 * The following parameters are specific to the options-page box
			 * Several of these parameters are passed along to add_menu_page()/add_submenu_page().
			 */

			'option_key' => 'mastak_theme_options',
			// The option key and admin menu page slug.
			'icon_url'   => 'dashicons-palmtree',
			// Menu icon. Only applicable if 'parent_slug' is left empty.
			// 'menu_title'      => esc_html__( 'Options', 'cmb2' ), // Falls back to 'title' (above).
			// 'parent_slug'     => 'themes.php', // Make options page a submenu item of the themes menu.
			// 'capability'      => 'manage_options', // Cap required to view options-page.
			// 'position'        => 1, // Menu position. Only applicable if 'parent_slug' is left empty.
			// 'admin_menu_hook' => 'network_admin_menu', // 'network_admin_menu' to add network-level options page.
			// 'display_cb'      => false, // Override the options-page form output (CMB2_Hookup::options_page_output()).
			// 'save_button'     => esc_html__( 'Save Theme Options', 'cmb2' ), // The text for the options-page save button. Defaults to 'Save'.
			// 'disable_settings_errors' => true, // On settings pages (not options-general.php sub-pages), allows disabling.
			// 'message_cb'      => 'yourprefix_options_page_message_callback',
			// 'tab_group'       => '', // Tab-group identifier, enables options page tab navigation.
			// 'tab_title'       => null, // Falls back to 'title' (above).
			// 'autoload'        => false, // Defaults to true, the options-page option will be autloaded.
		) );

		/**
		 * Options fields ids only need
		 * to be unique within this box.
		 * Prefix is not needed.
		 */

		$cmb_options->add_field( array(
			'name' => esc_html__( 'Email', THEME_NAME ),
			'desc' => esc_html__( 'Email (info@mastakstudio.com)', THEME_NAME ),
			'id'   => $prefix . 'email',
			'type' => 'text_email',
		) );

		$cmb_options->add_field( array(
			'name'         => 'Download presentation about us',
			'desc'         => 'Upload an file or enter an URL.',
			'id'           => 'presentation',
			'type'         => 'file',
			// Optional:
			'options'      => array(
				'url' => false, // Hide the text input for the url
			),
			'text'         => array(
				'add_upload_file_text' => 'Add File' // Change upload button text. Default: "Add or Upload File"
			),
			// query_args are passed to wp.media's library query.
			'query_args'   => array(
				'type' => 'application/pdf', // Make library only display PDFs.
				// Or only allow gif, jpg, or png images
				// 'type' => array(
				// 	'image/gif',
				// 	'image/jpeg',
				// 	'image/png',
				// ),
			),
			'preview_size' => 'large', // Image size to use when previewing in the admin.
		) );
	}

	/**
	 * Callback to define the optionss-saved message.
	 *
	 * @param CMB2 $cmb The CMB2 object.
	 * @param array $args {
	 *     An array of message arguments
	 *
	 * @type bool $is_options_page Whether current page is this options page.
	 * @type bool $should_notify Whether options were saved and we should be notified.
	 * @type bool $is_updated Whether options were updated with save (or stayed the same).
	 * @type string $setting For add_settings_error(), Slug title of the setting to which
	 *                                   this error applies.
	 * @type string $code For add_settings_error(), Slug-name to identify the error.
	 *                                   Used as part of 'id' attribute in HTML output.
	 * @type string $message For add_settings_error(), The formatted message text to display
	 *                                   to the user (will be shown inside styled `<div>` and `<p>` tags).
	 *                                   Will be 'Settings updated.' if $is_updated is true, else 'Nothing to update.'
	 * @type string $type For add_settings_error(), Message type, controls HTML class.
	 *                                   Accepts 'error', 'updated', '', 'notice-warning', etc.
	 *                                   Will be 'updated' if $is_updated is true, else 'notice-warning'.
	 * }
	 */
	function yourprefix_options_page_message_callback( $cmb, $args ) {
		if ( ! empty( $args['should_notify'] ) ) {

			if ( $args['is_updated'] ) {

				// Modify the updated message.
				$args['message'] = sprintf( esc_html__( '%s &mdash; Updated!', 'cmb2' ), $cmb->prop( 'title' ) );
			}

			add_settings_error( $args['setting'], $args['code'], $args['message'], $args['type'] );
		}
	}

	/**
	 * Only show this box in the CMB2 REST API if the user is logged in.
	 *
	 * @param  bool $is_allowed Whether this box and its fields are allowed to be viewed.
	 * @param  CMB2_REST_Controller $cmb_controller The controller object.
	 *                                              CMB2 object available via `$cmb_controller->rest_box->cmb`.
	 *
	 * @return bool                 Whether this box and its fields are allowed to be viewed.
	 */
	function yourprefix_limit_rest_view_to_logged_in_users( $is_allowed, $cmb_controller ) {
		if ( ! is_user_logged_in() ) {
			$is_allowed = false;
		}

		return $is_allowed;
	}

//add_action( 'cmb2_init', 'yourprefix_register_rest_api_box' );
	/**
	 * Hook in and add a box to be available in the CMB2 REST API. Can only happen on the 'cmb2_init' hook.
	 * More info: https://github.com/CMB2/CMB2/wiki/REST-API
	 */
	function yourprefix_register_rest_api_box() {
		$prefix = 'yourprefix_rest_';

		$cmb_rest = new_cmb2_box( array(
			'id'           => $prefix . 'metabox',
			'title'        => esc_html__( 'REST Test Box', 'cmb2' ),
			'object_types' => array( 'page' ),
			// Post type
			'show_in_rest' => WP_REST_Server::ALLMETHODS,
			// WP_REST_Server::READABLE|WP_REST_Server::EDITABLE, // Determines which HTTP methods the box is visible in.
			// Optional callback to limit box visibility.
			// See: https://github.com/CMB2/CMB2/wiki/REST-API#permissions
			// 'get_box_permissions_check_cb' => 'yourprefix_limit_rest_view_to_logged_in_users',
		) );

		$cmb_rest->add_field( array(
			'name' => esc_html__( 'REST Test Text', 'cmb2' ),
			'desc' => esc_html__( 'Will show in the REST API for this box and for pages.', 'cmb2' ),
			'id'   => $prefix . 'text',
			'type' => 'text',
		) );

		$cmb_rest->add_field( array(
			'name'         => esc_html__( 'REST Editable Test Text', 'cmb2' ),
			'desc'         => esc_html__( 'Will show in REST API "editable" contexts only (`POST` requests).', 'cmb2' ),
			'id'           => $prefix . 'editable_text',
			'type'         => 'text',
			'show_in_rest' => WP_REST_Server::EDITABLE,
			// WP_REST_Server::ALLMETHODS|WP_REST_Server::READABLE, // Determines which HTTP methods the field is visible in. Will override the cmb2_box 'show_in_rest' param.
		) );
	}
