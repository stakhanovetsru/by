<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package stakhanovets
 */

$id = get_the_ID();

$promo_title  = carbon_get_post_meta( $id, 'promo_title' );
$promo_desc   = carbon_get_post_meta( $id, 'promo_desc' );
$promo_blocks = carbon_get_post_meta( $id, 'stakh_promo_blocks' );

?>
    <div class="w-100 stkh-promo bg-primary z-1 py-5">
        <div class="container">
            <div class="row pb-5 py-xl-5">
                <div class="col-12 col-xl-8">
                    <h1 class="text-white fw-bold"><?php echo wp_kses( $promo_title, 'post' ); ?></h1>
                    <p class="h3 text-white euro-medium mt-4"><?php echo wp_kses( $promo_desc, 'post' ); ?></p>
                    <div class="stkh-promo__buttons row row-gap-4 mt-5">
                        <div class="col col-lg-3">
                            <a href="#five" class="btn btn-primary p-13 text-white rounded-1 fw-bold d-block"
                               type="button">Купить
                            </a>
                        </div>
                        <div class="col col-lg-3">
                            <a href="https://stakhanovets.ru/demo/" target="_blank"
                               class="btn btn-outline-light p-13 text-white rounded-1 d-block fw-normal"
                               type="button">Онлайн демо
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Кнопка редактирования для Админов -->
			<?php stkhBtnEdit( '#carbon_fields_container_a3a1b702' ); ?>
        </div>
    </div>

<?php if ( $promo_blocks ) : ?>
    <div class="stkh-features bg-white shadow rounded mt-n5 z-2 p-3 p-lg-4 p-xl-5">
        <div class="container">
            <div class="row row-gap-4">

				<?php foreach ( $promo_blocks as $block ) {
					?>
                    <div class="col-12 col-md-6 col-xl-3">
                        <div class="d-flex flex-row">
                            <div class="stkh-feature__square bg-primary rounded d-flex justify-content-center align-items-center">
                                <img src="<?php echo esc_url( $block['icon'] ); ?>"
                                     alt="Icon" width="54">
                            </div>
                            <div class="stkh-feature__txt ps-4">
                                <span class="euro-medium"><?php echo wp_kses( $block['text'], 'post' ); ?></span>
                            </div>
                        </div>
                    </div>
					<?php
				} ?>

            </div>
        </div>
    </div>
<?php endif; ?>