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
	         ->add_fields( array(
		         Field::make( 'text', 'crb_text', 'Text Field' ),
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
		         Field::make( 'text', 'promo_title2', 'Подзаголовок' ),
		         Field::make( 'html', 'promo_information_text' )
		              ->set_html( '<h2 id="promo-blocks">Блоки 4 шт.</h2>' ),
		         Field::make( 'complex', 'stakh_promo_blocks' )
		              ->add_fields( 'reviews', array(
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
}


add_action( 'after_setup_theme', 'stkh_crb_load' );
function stkh_crb_load() {
	require_once get_theme_file_path( 'vendor/autoload.php' );
	\Carbon_Fields\Carbon_Fields::boot();
}


