<?php
/**
 * Registering meta boxes
 *
 * All the definitions of meta boxes are listed below with comments.
 * Please read them CAREFULLY.
 *
 * You also should read the changelog to know what has been changed before updating.
 *
 * For more information, please visit:
 * @link http://metabox.io/docs/registering-meta-boxes/
 */
add_filter( 'rwmb_meta_boxes', 'bluevideo_register_meta_boxes' );
/**
 * Register meta boxes
 *
 * Remember to change "your_prefix" to actual prefix in your project
 *
 * @param array $meta_boxes List of meta boxes
 *
 * @return array
 */
function bluevideo_register_meta_boxes( $meta_boxes )
{
	/**
	 * prefix of meta keys (optional)
	 * Use underscore (_) at the beginning to make keys hidden
	 * Alt.: You also can make prefix empty to disable it
	 */
	// Better has an underscore as last sign
	$prefix = 'bluevideo_';
	// 1st meta box
	$meta_boxes[] = array(
		// Meta box id, UNIQUE per meta box. Optional since 4.1.5
		'id'         => 'standard',
		// Meta box title - Will appear at the drag and drop handle bar. Required.
		'title'      => __( 'Tùy chọn hiển thị video', 'bluevideo' ),
		// Post types, accept custom post types as well - DEFAULT is 'post'. Can be array (multiple post types) or string (1 post type). Optional.
		'post_types' => array( 'post', 'page' ),
		// Where the meta box appear: normal (default), advanced, side. Optional.
		'context'    => 'normal',
		// Order of meta box: high (default), low. Optional.
		'priority'   => 'high',
		// Auto save: true, false (default). Optional.
		'autosave'   => true,
		// List of meta fields
		'fields'     => array(	
			// SELECT ADVANCED BOX
			array(
				'name'        => __( 'Chọn kênh Video', 'bluevideo' ),
				'id'          => "{$prefix}channel",
				'type'        => 'select_advanced',
				'options'     => array(
					'value1' => __( 'Youtube', 'bluevideo' ),
					'value2' => __( 'Vimeo', 'bluevideo' ),
					'value3' => __( 'My Video', 'bluevideo' ),
				),
				'multiple'    => false,
				'std'         => 'value1', // Default value, optional
				'placeholder' => __( 'Select an Item', 'bluevideo' ),
			),
			// OEMBED
			array(
				'name' => __( 'Link Youtube', 'bluevideo' ),
				'id'   => "{$prefix}youtube",
				'desc' => __( 'Preview', 'bluevideo' ),
				'type' => 'oembed',
			),
			// URL 1 (MP4 file)
			array(
				'name' => __( 'Link', 'bluevideo' ),
				'id'   => "{$prefix}mp4",
				'desc' => __( 'Gắn link URL Video', 'bluevideo' ),
				'type' => 'url',
				'std'  => '',
			),
			// CHECKBOX
			array(
				'name' => __( 'Có file Caption?', 'bluevideo' ),
				'id'   => "{$prefix}check_caption",
				'type' => 'checkbox',
				// Value can be 0 or 1
				'std'  => 0,
			),
			// URL 2 (Caption File)
			array(
				'name' => __( 'File Caption', 'bluevideo' ),
				'id'   => "{$prefix}captionurl",
				'desc' => __( 'Gắn link URL file Caption', 'bluevideo' ),
				'type' => 'url',
				'std'  => '',
			),

		),
	);
	
	return $meta_boxes;
}
