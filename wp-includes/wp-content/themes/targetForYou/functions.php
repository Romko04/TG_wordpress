<?php 
function add_my_assets(){
    wp_enqueue_style( 'maincss', get_template_directory_uri() . '/assets/css/style.css' );
    wp_enqueue_script('swiper',"https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js");
    wp_enqueue_script( 'mainscript', get_template_directory_uri() . '/assets/js/script.js', array(), null, true );
}
add_action( 'wp_enqueue_scripts', 'add_my_assets' );

add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');

add_filter( 'upload_mimes', 'svg_upload_allow' );

# Добавляет SVG в список разрешенных для загрузки файлов.
function svg_upload_allow( $mimes ) {
	$mimes['svg']  = 'image/svg+xml';

	return $mimes;
}
add_filter( 'wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 5 );

# Исправление MIME типа для SVG файлов.
function fix_svg_mime_type( $data, $file, $filename, $mimes, $real_mime = '' ){

	// WP 5.1 +
	if( version_compare( $GLOBALS['wp_version'], '5.1.0', '>=' ) ){
		$dosvg = in_array( $real_mime, [ 'image/svg', 'image/svg+xml' ] );
	}
	else {
		$dosvg = ( '.svg' === strtolower( substr( $filename, -4 ) ) );
	}

	// mime тип был обнулен, поправим его
	// а также проверим право пользователя
	if( $dosvg ){

		// разрешим
		if( current_user_can('manage_options') ){

			$data['ext']  = 'svg';
			$data['type'] = 'image/svg+xml';
		}
		// запретим
		else {
			$data['ext']  = false;
			$data['type'] = false;
		}

	}

	return $data;
}

add_action( 'init', function() {
	register_post_type( 'service', array(
	'labels' => array(
		'name' => 'Наші послуги',
		'singular_name' => 'Послуга',
		'menu_name' => 'Наші послуги',
		'all_items' => 'Всі Наші послуги',
		'edit_item' => 'Редагувати Послугу',
		'view_item' => 'Дивитися Послуга',
		'view_items' => 'Дивитися Наші послуги',
		'add_new_item' => 'Додати нову Послуга',
		'new_item' => 'Нова Послуга',
	),
	'public' => true,
	'show_in_rest' => true,
	'supports' => array(
		0 => 'title',
		1 => 'editor',
		2 => 'thumbnail',
	),
	'delete_with_user' => false,
) );
} );

add_action( 'init', function() {
	register_post_type( 'bannner_posts', array(
	'labels' => array(
		'name' => 'Пости В Банері',
		'singular_name' => 'Банер',
		'menu_name' => 'Пости В Банері',
		'all_items' => 'Всі Пости В Банері',
		'edit_item' => 'Редагувати пост в Банері',
		'view_item' => 'Подивитися пост в Банері',
		'view_items' => 'Подивитися Пости В Банері',
		'add_new_item' => 'Додати Новий пост Банер',
		'new_item' => 'New Банер',
		'parent_item_colon' => 'Parent Банер:',
		'search_items' => 'Search Пости В Банері',
		'not_found' => 'No пости в банері found',
		'not_found_in_trash' => 'No пости в банері found in Trash',
		'archives' => 'Банер Archives',
		'attributes' => 'Банер Attributes',
		'insert_into_item' => 'Insert into банер',
		'uploaded_to_this_item' => 'Uploaded to this банер',
		'filter_items_list' => 'Filter пости в банері list',
		'filter_by_date' => 'Filter пости в банері by date',
		'items_list_navigation' => 'Пости В Банері list navigation',
		'items_list' => 'Пости В Банері list',
		'item_published' => 'Банер published.',
		'item_published_privately' => 'Банер published privately.',
		'item_reverted_to_draft' => 'Банер reverted to draft.',
		'item_scheduled' => 'Банер scheduled.',
		'item_updated' => 'Банер updated.',
		'item_link' => 'Банер Link',
		'item_link_description' => 'A link to a банер.',
	),
	'public' => true,
	'show_in_rest' => true,
	'supports' => array(
		0 => 'title',
		1 => 'editor',
		2 => 'thumbnail',
	),
	'delete_with_user' => false,
) );
} );


add_action( 'init', 'register_post_types' );

function register_post_types(){

	register_post_type( 'prices', [
		'label'  => null,
		'labels' => [
			'name'               => 'Карточки Цін', // основное название для типа записи
			'singular_name'      => 'Карточка Ціни', // название для одной записи этого типа
			'add_new'            => 'Добавить Карточку', // для добавления новой записи
			'add_new_item'       => 'Добавити Нову Карточку', // заголовка у вновь создаваемой записи в админ-панели.
		],
		'description'            => '',
		'public'                 => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => true, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_menu'           => true, // показывать ли в меню админки
		'show_in_admin_bar'   => true, // зависит от show_in_menu
		'show_in_rest'        => true, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 4,
		'menu_icon'           => null,
		'hierarchical'        => false,
		'supports'            => [ 'title','editor','thumbnail','excerpt','custom-fields'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	] );
}



