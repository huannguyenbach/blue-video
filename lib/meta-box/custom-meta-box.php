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
			// SELECT BOX
			array(
				'name'        => __( 'Chọn kênh Video', 'bluevideo' ),
				'id'          => "{$prefix}channel",
				'type'        => 'select',
				// Array of 'value' => 'Label' pairs for select box
				'options'     => array(
					'value1' => __( 'Youtube', 'bluevideo' ),
					'value2' => __( 'Vimeo', 'bluevideo' ),
					'value3' => __( 'My Video (MP4, flash)', 'bluevideo' ),
				),
				// Select multiple values, optional. Default is false.
				'multiple'    => false,
				'std'         => 'value1',
			),
			// OEMBED
			array(
				'name' => __( 'Link Video', 'bluevideo' ),
				'id'   => "{$prefix}embed",
				'desc' => __( 'Gắn link đúng với kênh channel, nếu không video sẽ không hoạt động', 'bluevideo' ),
				'type' => 'oembed',
			),
			// CHECKBOX
			array(
				'name' => __( 'Có file Subtitle?', 'bluevideo' ),
				'id'   => "{$prefix}check_sub",
				'type' => 'checkbox',
				// Value can be 0 or 1
				'std'  => 0,
				'desc' => __( 'Chỉ sử dụng cho video tự host, không với Youtube và Vimeo', 'bluevideo' ),
			),
			// URL
			array(
				'name' => __( 'Link Subtitle (.vtt, .srt)', 'bluevideo' ),
				'id'   => "{$prefix}sub_url",
				'desc' => __( 'Gắn link file subtitle', 'bluevideo' ),
				'type' => 'url',
				'std'  => '',
			),
			
		),
	);
	
	return $meta_boxes;
}
