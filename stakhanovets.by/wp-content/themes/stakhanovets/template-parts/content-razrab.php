<?php

$id = get_the_ID();

$rzrb_title  = carbon_get_post_meta( $id, 'rzrb_title' );
$rzrb_desc   = carbon_get_post_meta( $id, 'rzrb_desc' );
$rzrb_blocks = carbon_get_post_meta( $id, 'rzrb_blocks' );
$rzrb_logo   = carbon_get_post_meta( $id, 'rzrb_logo' );

?>

<div class="stkh-dev my-5 pt-0 pt-lg-5">
    <div class="container">
        <h2 id="three" class="euro-medium text-center h2 mt-5"><?php echo wp_kses( $rzrb_title, 'post' ); ?></h2>

    </div>
    <div class="container rounded py-5 position-relative">
        <div class="row">
            <div class="stkh-dev__bg bg-primary rounded py-5 position-absolute z-1">

            </div>
            <div class="col-12 col-xxl-10 offset-xxl-1 mt-5 z-2">
                <div class="bg-white rounded shadow p-4 pb-2">
                    <div class="lead text-center"><?php echo wpautop( $rzrb_desc ); ?></div>
                </div>

				<?php if ( $rzrb_blocks ) : ?>
                    <div class="row row-gap-3 mt-5">
						<?php foreach ( $rzrb_blocks as $block ) {
							?>
                            <div class="col-12 col-sm-6 col-xxl-3">
                                <div class="bg-white rounded shadow euro-medium text-center py-4 px-3">
                                    <span class="d-block display-5 text-primary"><?php echo wp_kses( $block['num'], 'post' ); ?></span>
                                    <span class="d-block h6"><?php echo wp_kses( $block['text'], 'post' ); ?></span>
                                </div>
                            </div>
							<?php
						} ?>
                    </div>
				<?php endif; ?>

            </div>

            <div class="col-12 col-xl-10 offset-xl-1 mt-5 z-2">
				<?php if ( $rzrb_logo ) : ?>
                    <!-- Slider main container -->
                    <div class="marqueeSwiper swiper marquee">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper d-flex align-items-stretch">

							<?php foreach ( $rzrb_logo as $logo ) {
								?>
                                <!-- Slide -->
                                <div class="swiper-slide d-flex align-items-center">
                                    <img src="<?php echo esc_url( $logo['how_img'] ); ?>"
                                         alt="Logo" class="img-fluid">
                                </div>
								<?php
							} ?>
                        </div>
                    </div>
				<?php endif; ?>
            </div>
        </div>

        <!-- Кнопка редактирования для Админов -->
		<?php stkhBtnEdit( '#carbon_fields_container_595fecc4', 'text-dark' ); ?>
    </div>
</div>