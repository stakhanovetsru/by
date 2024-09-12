<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;
use Carbon_Fields\Block;

add_action( 'carbon_fields_register_fields', 'stkh_attach_theme_options' );
function stkh_attach_theme_options() {
	/*
	 * **************************
	 * Общие настройки для сайта
	 * **************************
	 */
	Container::make( 'theme_options', 'Общие настройки' )
	         ->add_tab( __( 'Футер сайта' ), array(
		         Field::make( 'rich_text', 'footer_text', 'Текст в футере' ),
		         Field::make( 'rich_text', 'footer_block1', '1/3 Реквизиты' )->set_width( 33 ),
		         Field::make( 'rich_text', 'footer_block2', '2/3 Официальный дистрибьютор' )->set_width( 33 ),
		         Field::make( 'rich_text', 'footer_block3', '3/3 Доверенный партнёр' )->set_width( 33 ),
		         Field::make( 'text', 'footer_p', 'Ссылка на презентацию' )->set_width( 100 ),
		         Field::make( 'text', 'footer_k', 'Ссылка на Политику конфиденциальности' )->set_width( 100 ),
		         Field::make( 'text', 'footer_l', 'Ссылка на Лицензионное соглашение' )->set_width( 100 ),
		         Field::make( 'text', 'footer_copy', 'Copyright ' )->set_width( 100 ),
	         ) )
	         ->add_tab( __( 'Разное' ), array(
		         Field::make( 'header_scripts', 'crb_header_scripts', __( 'Header Scripts' ) ),
		         Field::make( 'footer_scripts', 'crb_footer_scripts', __( 'Footer Scripts' ) )
	         ) );

	/*
	 * ***********************
	 * Front Page Promo block
	 * ***********************
	 */
	Container::make( 'post_meta', 'Промо блок' )
	         ->where( 'post_type', '=', 'page' )
	         ->where( 'post_id', '=', get_option( 'page_on_front' ) )
	         ->add_fields( array(
		         Field::make( 'text', 'promo_title', 'Заголовок' ),
		         Field::make( 'text', 'promo_desc', 'Подзаголовок' ),
		         Field::make( 'html', 'promo_information_text' )
		              ->set_html( '<h2 id="promo-blocks">Блоки 4 шт.</h2>' ),
		         Field::make( 'complex', 'stakh_promo_blocks' )
		              ->add_fields( array(
			              Field::make( 'image', 'icon', 'Иконка' )
			                   ->set_value_type( 'url' ),
			              Field::make( 'textarea', 'text', 'Текст' ),
		              ) )
	         ) );

	/*
	 * ****************************
	 * Front Page Gutenberg Blocks
	 * ****************************
	 */
	Block::make( __( 'Test Gutenberg Block' ) )
	     ->add_fields( array(
		     Field::make( 'text', 'heading', __( 'Block Heading' ) ),
		     Field::make( 'image', 'image', __( 'Block Image' ) ),
		     Field::make( 'rich_text', 'content', __( 'Block Content' ) ),
	     ) )
	     ->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
		     ?>

             <div class="block">
                 <div class="block__heading">
                     <h1><?php echo esc_html( $fields['heading'] ); ?></h1>
                 </div><!-- /.block__heading -->

                 <div class="block__image">
				     <?php echo wp_get_attachment_image( $fields['image'], 'full' ); ?>
                 </div><!-- /.block__image -->

                 <div class="block__content">
				     <?php echo apply_filters( 'the_content', $fields['content'] ); ?>
                 </div><!-- /.block__content -->
             </div><!-- /.block -->

		     <?php
	     } );

	/*
     * *************************
     * Front Page Sertif-t block
     * *************************
     */
	Container::make( 'post_meta', 'Сертификат блок' )
	         ->where( 'post_type', '=', 'page' )
	         ->where( 'post_id', '=', get_option( 'page_on_front' ) )
	         ->add_fields( array(
		         Field::make( 'text', 'sert_title', 'Заголовок' ),
		         Field::make( 'textarea', 'sert_desc', 'Подзаголовок' ),
		         Field::make( 'rich_text', 'sert_richtext', 'Текст' ),
		         Field::make( 'image', 'sert_image', 'Изображение сертификата' )
		              ->set_value_type( 'url' )
	         ) );

	/*
     * ******************************
     * Front Page System About block
     * ******************************
     */
	Container::make( 'post_meta', 'О системе блок' )
	         ->where( 'post_type', '=', 'page' )
	         ->where( 'post_id', '=', get_option( 'page_on_front' ) )
	         ->add_fields( array(
		         Field::make( 'text', 'sys_title', 'Заголовок' ),
		         Field::make( 'rich_text', 'sys_desc', 'Текст' ),
		         Field::make( 'text', 'sys_link', 'Ссылка на презу' )
		              ->set_required(),
		         Field::make( 'text', 'sys_video', 'Ссылка на видеоролик .mp4' )
		              ->set_required(),
		         Field::make( 'html', 'sys_info_text' )
		              ->set_html( '<h2>Блоки 4 шт.</h2>' ),
		         Field::make( 'complex', 'sys_bloks' )
		              ->add_fields( array(
			              Field::make( 'text', 'num', 'Цифра' )
			                   ->set_width( 25 ),
			              Field::make( 'text', 'text', 'Текст' )
			                   ->set_width( 75 ),
		              ) )
	         ) );

	/*
     * ********************
     * Front Page блок Фич
     * ********************
     */
	Container::make( 'post_meta', 'Фичи системы' )
	         ->where( 'post_type', '=', 'page' )
	         ->where( 'post_id', '=', get_option( 'page_on_front' ) )
	         ->add_fields( array(
		         Field::make( 'text', 'ficha_title', 'Заголовок' ),
		         Field::make( 'complex', 'ficha_data' )
		              ->add_fields( array(
			              Field::make( 'text', 'text', 'Текст' )
			                   ->set_width( 100 ),
		              ) )
	         ) );


	/*
	 * ***********************************************
	 * Front Page Как работает DLP система Стахановец
	 * ***********************************************
	 */
	Container::make( 'post_meta', 'Как работает DLP система Стахановец' )
	         ->where( 'post_type', '=', 'page' )
	         ->where( 'post_id', '=', get_option( 'page_on_front' ) )
	         ->add_fields( array(
		         Field::make( 'text', 'how_title', 'Заголовок' ),
		         Field::make( 'image', 'how_img', 'Картинка' )
		              ->set_value_type( 'url' ),
	         ) );


	/*
	 * ***************************************************
	 * Front Page Совместимость с программными продуктами
	 * ***************************************************
	 */
	Container::make( 'post_meta', 'Совместимость с программными продуктами' )
	         ->where( 'post_type', '=', 'page' )
	         ->where( 'post_id', '=', get_option( 'page_on_front' ) )
	         ->add_fields( array(
		         Field::make( 'text', 'sovm_title', 'Заголовок' ),
		         Field::make( 'image', 'sovm_img', 'Картинка' )
		              ->set_value_type( 'url' ),
	         ) );

	/*
	 * ***********************
	 * Front Page Калькулятор
	 * ***********************
	 */
	Container::make( 'post_meta', 'Калькулятор' )
	         ->where( 'post_type', '=', 'page' )
	         ->where( 'post_id', '=', get_option( 'page_on_front' ) )
	         ->add_fields( array(
		         Field::make( 'text', 'calc_title', 'Заголовок' ),
		         Field::make( 'text', 'calc_decrp', 'Описание' ),
	         ) );

	/*
     * *************************
     * Front Page Разработчик ПО
     * *************************
     */
	Container::make( 'post_meta', 'Разработчик ПО' )
	         ->where( 'post_type', '=', 'page' )
	         ->where( 'post_id', '=', get_option( 'page_on_front' ) )
	         ->add_fields( array(
		         Field::make( 'text', 'rzrb_title', 'Заголовок' ),
		         Field::make( 'rich_text', 'rzrb_desc', 'Описание' ),
		         Field::make( 'complex', 'rzrb_blocks' )
		              ->add_fields( array(
			              Field::make( 'text', 'num', 'Цифра' )
			                   ->set_width( 25 ),
			              Field::make( 'text', 'text', 'Текст' )
			                   ->set_width( 75 ),
		              ) ),
		         Field::make( 'complex', 'rzrb_logo' )
		              ->add_fields( array(
			              Field::make( 'image', 'how_img', 'Картинка' )
			                   ->set_value_type( 'url' ),
		              ) ),
	         ) );


	/*
	* ***********************************
	* Front Page Возможности DLP-системы
	* ***********************************
	*/
	Container::make( 'post_meta', 'Возможности  системы' )
	         ->where( 'post_type', '=', 'page' )
	         ->where( 'post_id', '=', get_option( 'page_on_front' ) )
	         ->add_fields( array(
		         Field::make( 'text', 'vzm_title', 'Заголовок' ),
		         Field::make( 'complex', 'vzm_blocks' )
		              ->add_fields( array(
			              Field::make( 'image', 'img', 'Иконка' )
			                   ->set_width( 25 )
			                   ->set_value_type( 'url' ),
			              Field::make( 'text', 'num', 'Заголовок' )
			                   ->set_width( 25 ),
			              Field::make( 'rich_text', 'text', 'Текст' )
			                   ->set_width( 50 ),
		              ) )
	         ) );

	/*
	* ***********************************
	* Front Page Связаться с менеджером
	* ***********************************
	*/
	Container::make( 'post_meta', 'Связаться с менеджером' )
	         ->where( 'post_type', '=', 'page' )
	         ->where( 'post_id', '=', get_option( 'page_on_front' ) )
	         ->add_fields( array(
		         Field::make( 'text', 'price_title', 'Заголовок' ),
		         Field::make( 'text', 'price_desc', 'Описание' ),
		         Field::make( 'textarea', 'price_form', 'Код формы Б24' ),
	         ) );


	/*
	* ********************************************************
	* Front Page Официальный дистрибьютор / Доверенный партнёр
	* ********************************************************
	*/
	Container::make( 'post_meta', 'Официальный дистрибьютор или Доверенный партнёр' )
	         ->where( 'post_type', '=', 'page' )
	         ->where( 'post_id', '=', get_option( 'page_on_front' ) )
	         ->add_fields( array(
		         Field::make( 'complex', 'crb_contacts_uz', 'Данные партнеров' )
		              ->add_fields( array(
			              Field::make( 'radio', 'radio', 'Выбор типа партнера' )
			                   ->set_options( array(
				                   'd' => 'Доверенный партнёр',
				                   'o' => 'Официальный дистрибьютор',
			                   ) ),
			              Field::make( 'text', 'co_name', 'Название компании' ),
			              Field::make( 'text', 'co_mail', 'E-mail' ),
			              Field::make( 'text', 'co_tel', 'Телефон' ),
			              Field::make( 'image', 'co_photo', 'Логотип партнера' ),
			              Field::make( 'text', 'co_link', 'Ссылка на партнера' )->set_attribute( 'type', 'url' ),
		              ) )
	         ) );
}


add_action( 'after_setup_theme', 'stkh_crb_load' );
function stkh_crb_load() {
	require_once get_theme_file_path( 'vendor/autoload.php' );
	\Carbon_Fields\Carbon_Fields::boot();
}


