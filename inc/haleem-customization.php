<?php


//panel
new \Kirki\Panel(
	'Theme_options',
	[
		'priority'    => 10,
		'title'       => esc_html__( 'My Panel', 'wp-haleem' ),
		'description' => esc_html__( 'My Panel Description.', 'wp-haleem' ),
	]
);

//section 

new \Kirki\Section(
	'header_section',
	[
		'title'       => esc_html__( 'Header Title', 'wp-haleem' ),
		'description' => esc_html__( 'My Section Description.', 'wp-haleem' ),
		'panel'       => 'Theme_options',
		'priority'    => 160,
	]
);


new \Kirki\Section(
	'header_section_two',
	[
		'title'       => esc_html__( 'Header text', 'wp-haleem' ),
		'description' => esc_html__( 'My Section Description.', 'wp-haleem' ),
		'panel'       => 'Theme_options',
		'priority'    => 160,
	]
);
//controll area

new \Kirki\Field\Text(
	[
		'settings' => 'first_text',
		'label'    => esc_html__( 'Text Control', 'wp-haleem' ),
		'section'  => 'header_section',
		'default'  => esc_html__( 'This is a default value', 'wp-haleem' ),
		'priority' => 10,
	]
);


new \Kirki\Field\Textarea(
	[
		'settings'    => 'textarea_setting',
		'label'       => esc_html__( 'Textarea Control', 'kirki' ),
		'section'     => 'header_section',
		'default'     => esc_html__( 'This is a default value', 'kirki' ),
	]
);


//control: header_section_two

new \Kirki\Field\Text(
	[
		'settings' => 'first_text',
		'label'    => esc_html__( 'Text Control', 'wp-haleem' ),
		'section'  => 'header_section_two',
		'default'  => esc_html__( 'This is a default value', 'wp-haleem' ),
		'priority' => 10,
	]
);
