<?php

add_action( 'wp_enqueue_scripts', 'selschool_style' );
add_action( 'wp_enqueue_scripts', 'selschool_script' );
add_action('init', 'register_post_types');
// add_action( 'after_setup_theme', 'theme_register_nav_menu' );


function selschool_style() {
	// Подключаю стили билда сайта
	wp_enqueue_style( 'selschool-style', get_template_directory_uri() . '/assets/css/style.min.css' );
	// Этот хук всегда должен быть последним
	wp_enqueue_style( 'wp-style', get_stylesheet_uri() );
	
}

function selschool_script(){
	wp_enqueue_script('jquery');
	wp_enqueue_script( 'selschool-script', get_template_directory_uri() . '/assets/js/main.js' , array('jquery'), null, true);
}



function register_post_types(){
	register_post_type('marquee', array(
		'labels'             => array(
			'name'               => 'Бегущая строка', // Основное название типа записи
			'singular_name'      => 'Бегущая строка', // отдельное название записи типа Book
			'add_new'            => 'Добавить новую',
			'add_new_item'       => 'Добавить новую строку',
			'edit_item'          => 'Редактировать строку',
			'new_item'           => 'Новая карточка',
			'view_item'          => 'Посмотреть строку',
			'search_items'       => 'Найти строку',
			'not_found'          => 'Строк не найдено',
			'not_found_in_trash' => 'В корзине Строк не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Бегущая строка'

		),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'menu_icon'			 => 'dashicons-megaphone',
		'supports'           => array(
									'title',
									// 'editor',
									// 'author',
									// 'thumbnail',
									// 'excerpt',
									// 'comments'
									)
	) );

	register_post_type('contacts_cards', array(
			'labels'             => array(
				'name'               => 'Карточки контактов', // Основное название типа записи
				'singular_name'      => 'Карточка контактов', // отдельное название записи типа Book
				'add_new'            => 'Добавить новую',
				'add_new_item'       => 'Добавить новую карточку',
				'edit_item'          => 'Редактировать карточку',
				'new_item'           => 'Новая карточка',
				'view_item'          => 'Посмотреть карточку',
				'search_items'       => 'Найти карточку',
				'not_found'          => 'Карточек не найдено',
				'not_found_in_trash' => 'В корзине карточек не найдено',
				'parent_item_colon'  => '',
				'menu_name'          => 'Карточки контактов'

			),
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => true,
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => null,
			'menu_icon'			 => 'dashicons-text-page',
			'supports'           => array(
										'title',
										// 'editor',
										// 'author',
										'thumbnail',
										// 'excerpt',
										// 'comments'
										)
	) );

	register_post_type('main_slider', array(
		'labels'             => array(
			'name'               => 'Главная страница, блок №1 (слайдер)', // Основное название типа записи
			'singular_name'      => 'Страница слайдера', // отдельное название записи типа Book
			'add_new'            => 'Добавить новую страницу',
			'add_new_item'       => 'Добавить новую страницу',
			'edit_item'          => 'Редактировать страницу',
			'new_item'           => 'Новая страницу',
			'view_item'          => 'Посмотреть страницу',
			'search_items'       => 'Найти страницу',
			'not_found'          => 'Страниц не найдено',
			'not_found_in_trash' => 'В корзине страниц не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Главная страница (блок №1 слайдер)'

		),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'menu_icon'			 => 'dashicons-format-gallery',
		'supports'           => array(
									'title',
									// 'editor',
									// 'author',
									// 'thumbnail',
									// 'excerpt',
									// 'comments'
									)
	) );

	// Главная страница, список карточек №2
	register_post_type('services_cards', array(
		'labels'             => array(
			'name'               => 'Главная страница, блок №2 (список карточек)', // Основное название типа записи
			'singular_name'      => 'Карточка', // отдельное название записи типа Book
			'add_new'            => 'Добавить новую карточку',
			'add_new_item'       => 'Добавить новую карточку',
			'edit_item'          => 'Редактировать карточку',
			'new_item'           => 'Новая карточка',
			'view_item'          => 'Посмотреть карточку',
			'search_items'       => 'Найти карточку',
			'not_found'          => 'Карточек не найдено',
			'not_found_in_trash' => 'В корзине карточек не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Главная страница, блок №2 (список карточек)'

		),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'menu_icon'			 => 'dashicons-text-page',
		'supports'           => array(
									'title',
									// 'editor',
									// 'author',
									// 'thumbnail',
									// 'excerpt',
									// 'comments'
									)
	) );

	register_post_type('reviews_slider', array(
		'labels'             => array(
			'name'               => 'Главная страница, блок №3 (двойной слайдер)', // Основное название типа записи
			'singular_name'      => 'Главная страница, двойной слайдер', // отдельное название записи типа Book
			'add_new'            => 'Добавить новую страницу слайдера',
			'add_new_item'       => 'Добавить новую страницу слайдера',
			'edit_item'          => 'Редактировать страницу слайдера',
			'new_item'           => 'Новая страница слайдера',
			'view_item'          => 'Посмотреть страницу слайдера',
			'search_items'       => 'Найти страницу слайдера',
			'not_found'          => 'Страниц слайдера не найдено',
			'not_found_in_trash' => 'В корзине страниц слайдера не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Главная страница, блок №3 (двойной слайдер)'

		),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'menu_icon'			 => 'dashicons-format-gallery',
		'supports'           => array(
									'title',
									// 'editor',
									// 'author',
									// 'thumbnail',
									// 'excerpt',
									// 'comments'
									)
	) );

	register_post_type('chooseus_accordion', array(
		'labels'             => array(
			'name'               => 'Главная страница, блок №3 (аккордеон)', // Основное название типа записи
			'singular_name'      => 'Главная страница, аккордеон', // отдельное название записи типа Book
			'add_new'            => 'Добавить новую страницу аккордеона',
			'add_new_item'       => 'Добавить новую страницу аккордеона',
			'edit_item'          => 'Редактировать страницу аккордеона',
			'new_item'           => 'Новая страница аккордеона',
			'view_item'          => 'Посмотреть страницу аккордеона',
			'search_items'       => 'Найти страницу аккордеона',
			'not_found'          => 'Страниц аккордеона не найдено',
			'not_found_in_trash' => 'В корзине страниц аккордеона не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Главная страница, блок №3 (аккордеон)'

		),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'menu_icon'			 => 'dashicons-menu-alt3',
		'supports'           => array(
									'title',
									// 'editor',
									// 'author',
									// 'thumbnail',
									// 'excerpt',
									// 'comments'
									)
	) );

	// Главная страница, список карточек №4
	register_post_type('aboutus_cards', array(
		'labels'             => array(
			'name'               => 'Главная страница, блок №4 (список карточек, рамки)', // Основное название типа записи
			'singular_name'      => 'Список карточек', // отдельное название записи типа Book
			'add_new'            => 'Добавить новую карточку',
			'add_new_item'       => 'Добавить новую карточку',
			'edit_item'          => 'Редактировать карточку',
			'new_item'           => 'Новая карточка',
			'view_item'          => 'Посмотреть карточку',
			'search_items'       => 'Найти карточку',
			'not_found'          => 'Карточек не найдено',
			'not_found_in_trash' => 'В корзине карточек не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Главная страница, блок №4 (список карточек, рамки)'

		),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'menu_icon'			 => 'dashicons-text-page',
		'supports'           => array(
									'title',
									// 'editor',
									// 'author',
									// 'thumbnail',
									// 'excerpt',
									// 'comments'
									)
	) );

	// Главная страница, список карточек №5
	register_post_type('theme_cards', array(
		'labels'             => array(
			'name'               => 'Главная страница, блок №5 (список карточек)', // Основное название типа записи
			'singular_name'      => 'Список карточек', // отдельное название записи типа Book
			'add_new'            => 'Добавить новую карточку',
			'add_new_item'       => 'Добавить новую карточку',
			'edit_item'          => 'Редактировать карточку',
			'new_item'           => 'Новая карточка',
			'view_item'          => 'Посмотреть карточку',
			'search_items'       => 'Найти карточку',
			'not_found'          => 'Карточек не найдено',
			'not_found_in_trash' => 'В корзине карточек не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Главная страница, блок №5 (список карточек)'

		),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'menu_icon'			 => 'dashicons-text-page',
		'supports'           => array(
									'title',
									// 'editor',
									// 'author',
									// 'thumbnail',
									// 'excerpt',
									// 'comments'
									)
	) );

	register_post_type('clients_slider', array(
		'labels'             => array(
			'name'               => 'Главная страница, блок №6 (нижний слайдер)', // Основное название типа записи
			'singular_name'      => 'Нижний слайдер', // отдельное название записи типа Book
			'add_new'            => 'Добавить новую страницу слайдера',
			'add_new_item'       => 'Добавить новую страницу слайдера',
			'edit_item'          => 'Редактировать страницу слайдера',
			'new_item'           => 'Новая страница слайдера',
			'view_item'          => 'Посмотреть страницу слайдера',
			'search_items'       => 'Найти страницу слайдера',
			'not_found'          => 'Страниц слайдера не найдено',
			'not_found_in_trash' => 'В корзине страниц слайдера не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Главная страница, блок №6 (нижний слайдер)'

		),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'menu_icon'			 => 'dashicons-format-gallery',
		'supports'           => array(
									'title',
									// 'editor',
									// 'author',
									// 'thumbnail',
									// 'excerpt',
									// 'comments'
									)
	) );

	

	register_post_type('team_members_admins', array(
		'labels'             => array(
			'name'               => 'Администрация лицея', // Основное название типа записи
			'singular_name'      => 'Администрация лицея', // отдельное название записи типа Book
			'add_new'            => 'Добавить новую карточку',
			'add_new_item'       => 'Добавить новую карточку',
			'edit_item'          => 'Редактировать карточку',
			'new_item'           => 'Новая карточка',
			'view_item'          => 'Посмотреть карточку',
			'search_items'       => 'Найти карточку',
			'not_found'          => 'Карточек не найдено',
			'not_found_in_trash' => 'В корзине карточек не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Администрация лицея'

		),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'menu_icon'			 => 'dashicons-businessman',
		'supports'           => array(
									'title',
									// 'editor',
									// 'author',
									// 'thumbnail',
									// 'excerpt',
									// 'comments'
									)
	) );

	register_post_type('team_members', array(
		'labels'             => array(
			'name'               => 'Педагогический коллектив', // Основное название типа записи
			'singular_name'      => 'Педагогический коллектив', // отдельное название записи типа Book
			'add_new'            => 'Добавить новую карточку',
			'add_new_item'       => 'Добавить новую карточку',
			'edit_item'          => 'Редактировать карточку',
			'new_item'           => 'Новая карточка',
			'view_item'          => 'Посмотреть карточку',
			'search_items'       => 'Найти карточку',
			'not_found'          => 'Карточек не найдено',
			'not_found_in_trash' => 'В корзине карточек не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Педагогический коллектив'

		),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'menu_icon'			 => 'dashicons-welcome-learn-more',
		'supports'           => array(
									'title',
									// 'editor',
									// 'author',
									// 'thumbnail',
									// 'excerpt',
									// 'comments'
									)
	) );
}
// Поддержка картинок превью для постов
// add_theme_support( 'post-thumbnails' );




add_action( 'after_setup_theme', function () {

	register_nav_menus( [
		'header_menu'    => 'Меню в шапке',
		'footer_menu'	 => 'Меню в подвале',
	] );

	add_theme_support( 'post-thumbnails', array( 'post' ) );

} );




// ДОбавляем классы ссылкам и класс активной ссылке
add_filter( 'nav_menu_link_attributes', 'filter_nav_menu_link_attributes', 10, 4 );
function filter_nav_menu_link_attributes( $atts, $item, $args, $depth ) {
	if ( $args->theme_location === 'header_menu' ) {
		$atts['class'] = null;
		if ( $item->current ) {
			$atts['class'] .= 'header__menu-item_selected';
		}
	}
	if ( $args->theme_location === 'footer_menu' ) {
		$atts['class'] = null;
		if ( $item->current ) {
			$atts['class'] .= 'header__menu-item_selected';
		}
	}
	return $atts;
}

// Переименовываем классы
add_filter( 'nav_menu_submenu_css_class', 'change_wp_nav_menu', 10, 3 );
function change_wp_nav_menu( $classes, $args, $depth ) {
	// Идет проверка в какой области расположено меню и изменение классов в меню этой области 
	if ( $args->theme_location == 'header_menu' ){
		foreach ( $classes as $key => $class ) {
			if ( $class == 'sub-menu' ) {
				$classes[ $key ] = 'header__menu-sub';
			}
			if ( $class == 'menu-item-has-children' ) {
				$classes[ $key ] = 'header__menu-has-children';
			}
		}
	}

	if ( $args->theme_location == 'footer_menu' ){
		foreach ( $classes as $key => $class ) {
			if ( $class == 'sub-menu' ) {
				$classes[ $key ] = 'footer__menu-sub';
			}
			// if ( $class == 'menu-item-has-children' ) {
			// 	$classes[ $key ] = 'header__menu-has-children';
			// }
		}
	}
	return $classes;
}

// Изменяем атрибут class у тега li, проверка на уровни вложенности depth
add_filter( 'nav_menu_css_class', 'filter_nav_menu_css_classes', 10, 4 );
function filter_nav_menu_css_classes( $classes, $item, $args, $depth ) {
	if ( $args->theme_location === 'header_menu' ) {
		if ( $depth == 0 ){
			$classes [] = 'header__menu-item';
		}
		else {
			$classes [] = 'header__menu-sub-item';
		}
	}

	if ( $args->theme_location === 'footer_menu' ) {
		if ( $depth == 0 ){
			$classes [] = 'footer__menu-item';
		}
		else {
			$classes [] = 'footer__menu-sub-item';
		}
	}
	return $classes;
}


// Фильтр пагинации
add_filter('navigation_markup_template', 'my_navigation_template', 10, 2 );
function my_navigation_template( $template, $class ){
	return '
	<nav class="navigation %1$s" role="navigation">
		<div class="nav-links">%3$s</div>
	</nav>    
	';
}