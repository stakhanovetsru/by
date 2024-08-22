<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;


add_action( 'carbon_fields_register_fields', 'stkh_attach_theme_options' );
function stkh_attach_theme_options() {
	/*
	 * *************************
	 * Общие настройки для сайта
	 * **************************
	 */
	Container::make( 'theme_options', __( 'Theme Options' ) )
	         ->add_fields( array(
		         Field::make( 'text', 'crb_text', 'Text Field' ),
	         ) );

	/*
	 * *************************
	 * Front Page Slider Reviews
	 * **************************
	 */
	Container::make( 'post_meta', 'Slider Отзывы' )
	         ->where( 'post_type', '=', 'page' )
	         ->where( 'post_id', '=', get_option( 'page_on_front' ) )
	         ->add_fields( array(
		         Field::make( 'complex', 'crb_media' )
		              ->add_fields( 'reviews', array(
			              Field::make( 'image', 'review_logo', 'Логотип Компании' )
			                   ->set_value_type( 'url' ),
			              Field::make( 'textarea', 'review_text', 'Текст отзыва' ),
			              Field::make( 'html', 'review_information_text' )
			                   ->set_html( '<h2>Автор отзыва</h2>' ),
			              Field::make( 'text', 'review_name', 'Имя (Название)' ),
			              Field::make( 'text', 'review_desc', 'Описание' ),
			              Field::make( 'image', 'review_photo', 'Фото' )
			                   ->set_value_type( 'url' ),
			              Field::make( 'text', 'review_link', 'Ссылка на сайт' ),
			              Field::make( 'file', 'review_file', 'Файл' )
			                   ->set_value_type( 'url' ),
		              ) )
	         ) );
}


add_action( 'after_setup_theme', 'stkh_crb_load' );
function stkh_crb_load() {
	require_once get_theme_file_path( 'vendor/autoload.php' );
	\Carbon_Fields\Carbon_Fields::boot();
}