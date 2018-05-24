<?php
/**
 * Include and setup custom metaboxes and fields.
 *
 * @category YourThemeOrPlugin
 * @package  Metaboxes
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     https://github.com/webdevstudios/Custom-Metaboxes-and-Fields-for-WordPress
 */

add_filter( 'cmb_meta_boxes', 'cmb_sample_metaboxes' );
/**
 * Define the metabox and field configurations.
 *
 * @param  array $meta_boxes
 * @return array
 */
function cmb_sample_metaboxes( array $meta_boxes ) {

	// Start with an underscore to hide fields from custom fields list
	$prefix = '_cmb_';

	/**
	 * Metabox to be displayed on a single page ID
	 */
	$meta_boxes['our_way_forward'] = array(
		'id'         => 'our_way_forward',
		'title'      => __( 'Stategy Digital Marketing List', 'cmb' ),
		'pages'      => array( 'page', ), // Post type
		'context'    => 'normal',
		'priority'   => 'high',
		'show_names' => true, // Show field names on the left
		'show_on'    => array( 'key' => 'id', 'value' => array( 2, ), ), // Specific post IDs to display this metabox
		'fields'     => array(
			array(
				'name' => __( 'Heading', 'cmb' ),
				'desc' => __( 'Heading', 'cmb' ),
				'id'   => $prefix . 'wayforward_heading',
				'type' => 'text',
			),
			array(
				'name' => __( 'Description', 'cmb' ),
				'desc' => __( 'address', 'cmb' ),
				'id'   => $prefix . 'wayforward_desc',
				'type' => 'textarea',
			),
			array(
				'id'          => $prefix . 'services_list_inner',
				'type'        => 'group',
				'description' => __( 'Generates reusable form entries', 'cmb' ),
				'options'     => array(
					'group_title'   => __( 'Services {#}', 'cmb' ), // {#} gets replaced by row number
					'add_button'    => __( 'Add Another Services', 'cmb' ),
					'remove_button' => __( 'Remove Services', 'cmb' ),
					'sortable'      => true, // beta
				),
				// Fields array works the same, except id's only need to be unique for this group. Prefix is not needed.
				'fields'      => array(
					array(
						'name' => 'Services Title',
						'id'   => 'title',
						'type' => 'text',
						// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
					),
					array(
						'name' => 'Services Image',
						'id'   => 'image',
						'type' => 'file',
					),
					array(
						'name' => 'Benifit Caption',
						'id'   => 'image_caption',
						'type' => 'text',
					),
				),
			),						
		)
	);

	$meta_boxes['cta_our_way_forward'] = array(
		'id'         => 'cta_our_way_forward',
		'title'      => __( 'Call To Action', 'cmb' ),
		'pages'      => array( 'page', ), // Post type
		'context'    => 'normal',
		'priority'   => 'high',
		'show_names' => true, // Show field names on the left
		'show_on'    => array( 'key' => 'id', 'value' => array( 2, ), ), // Specific post IDs to display this metabox
		'fields'     => array(
			array(
				'name' => __( 'Url', 'cmb' ),
				'desc' => __( 'Url', 'cmb' ),
				'id'   => $prefix . 'wayforward_heading_cta_url',
				'type' => 'text',
			),
			array(
				'name' => __( 'Description', 'cmb' ),
				'desc' => __( 'address', 'cmb' ),
				'id'   => $prefix . 'wayforward_cta_desc',
				'type' => 'textarea',
			),					
		)
	);	

	$meta_boxes['branding_creative'] = array(
		'id'         => 'branding_creative',
		'title'      => __( 'BRANDING & CREATIVE SERVICES', 'cmb' ),
		'pages'      => array( 'page', ), // Post type
		'context'    => 'normal',
		'priority'   => 'high',
		'show_names' => true, // Show field names on the left
		'show_on'    => array( 'key' => 'id', 'value' => array( 2, ), ), // Specific post IDs to display this metabox
		'fields'     => array(
			array(
				'name' => __( 'Heading', 'cmb' ),
				'desc' => __( 'Heading', 'cmb' ),
				'id'   => $prefix . 'branding_heading',
				'type' => 'text',
			),
			array(
				'name' => __( 'Description', 'cmb' ),
				'desc' => __( 'address', 'cmb' ),
				'id'   => $prefix . 'branding_desc',
				'type' => 'textarea',
			),
			array(
				'id'          => $prefix . 'branding_list_inner',
				'type'        => 'group',
				'description' => __( 'Generates reusable form entries', 'cmb' ),
				'options'     => array(
					'group_title'   => __( 'Branding {#}', 'cmb' ), // {#} gets replaced by row number
					'add_button'    => __( 'Add Another Branding', 'cmb' ),
					'remove_button' => __( 'Remove Branding', 'cmb' ),
					'sortable'      => true, // beta
				),
				// Fields array works the same, except id's only need to be unique for this group. Prefix is not needed.
				'fields'      => array(
					array(
						'name' => 'Branding Title',
						'id'   => 'title',
						'type' => 'text',
						// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
					),
					array(
						'name' => 'Branding Image',
						'id'   => 'image',
						'type' => 'file',
					),
					array(
						'name' => 'Branding Caption',
						'id'   => 'image_caption',
						'type' => 'text',
					),
				),
			),						
		)
	);

	$meta_boxes['field_group'] = array(
		'id'         => 'field_group',
		'title'      => __( 'Benifits List', 'cmb' ),
		'pages'      => array( 'page', ),
		'show_on'    => array( 'key' => 'id', 'value' => array( 6, ), ), // Specific post IDs to display this 
		'fields'     => array(
			array(
				'id'          => $prefix . 'repeat_group',
				'type'        => 'group',
				'description' => __( 'Generates reusable form entries', 'cmb' ),
				'options'     => array(
					'group_title'   => __( 'Benifit {#}', 'cmb' ), // {#} gets replaced by row number
					'add_button'    => __( 'Add Another Benifit', 'cmb' ),
					'remove_button' => __( 'Remove Benifit', 'cmb' ),
					'sortable'      => true, // beta
				),
				// Fields array works the same, except id's only need to be unique for this group. Prefix is not needed.
				'fields'      => array(
					array(
						'name' => 'Benifit Title',
						'id'   => 'title',
						'type' => 'text',
						// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
					),
					array(
						'name' => 'Benifit Description',
						'description' => 'Write a short description for this entry',
						'id'   => 'description',
						'type' => 'textarea_small',
					),
					array(
						'name' => 'Benifit Image',
						'id'   => 'image',
						'type' => 'file',
					),
					array(
						'name' => 'Benifit Caption',
						'id'   => 'image_caption',
						'type' => 'text',
					),
				),
			),
		),
	);

	$meta_boxes['career_page'] = array(
		'id'         => 'career_page',
		'title'      => __( 'Introduction Text', 'cmb' ),
		'pages'      => array( 'page', ), // Post type
		'context'    => 'normal',
		'priority'   => 'high',
		'show_names' => true, // Show field names on the left
		'show_on'    => array( 'key' => 'id', 'value' => array( 6, ), ), // Specific post IDs to display this metabox
		'fields'     => array(
			array(
				'name' => __( 'Title Introduction', 'cmb' ),
				'desc' => __( 'Title', 'cmb' ),
				'id'   => $prefix . 'career_title_introduction',
				'type' => 'text',
			),
			array(
				'name' => __( 'Text Changer ', 'cmb' ),
				'desc' => __( 'spinning text seprate by ,', 'cmb' ),
				'id'   => $prefix . 'carrer_spinning',
				'type' => 'text',
			),
			array(
				'name' => __( 'Url ', 'cmb' ),
				'desc' => __( 'link', 'cmb' ),
				'id'   => $prefix . 'carrer_url',
				'type' => 'text',
			)			
		)
	);

	$meta_boxes['benifit_section'] = array(
		'id'         => 'benifit_section',
		'title'      => __( 'Benifit Section', 'cmb' ),
		'pages'      => array( 'page', ), // Post type
		'context'    => 'normal',
		'priority'   => 'high',
		'show_names' => true, // Show field names on the left
		'show_on'    => array( 'key' => 'id', 'value' => array( 6, ), ), // Specific post IDs to display this metabox
		'fields'     => array(
			array(
				'name' => __( 'Title Introduction', 'cmb' ),
				'desc' => __( 'Title', 'cmb' ),
				'id'   => $prefix . 'benifit_title',
				'type' => 'text',
			),
			array(
				'name' => __( 'Text Changer ', 'cmb' ),
				'desc' => __( 'spinning text seprate by ,', 'cmb' ),
				'id'   => $prefix . 'benifit_desc',
				'type' => 'textarea',
			)
		
		)
	);	
	/**
	 * Metabox for an options page. Will not be added automatically, but needs to be called with
	 * the `cmb_metabox_form` helper function. See wiki for more info.
	 */

	// Add other metaboxes as needed

	return $meta_boxes;
}

add_action( 'init', 'cmb_initialize_cmb_meta_boxes', 9999 );
/**
 * Initialize the metabox class.
 */
function cmb_initialize_cmb_meta_boxes() {

	if ( ! class_exists( 'cmb_Meta_Box' ) )
		require_once 'init.php';
}