<?php

$id = get_the_ID();

$vzm_title  = carbon_get_post_meta( $id, 'vzm_title' );
$vzm_blocks = carbon_get_post_meta( $id, 'vzm_blocks' );

?>

<div class="stkh-funcs my-5 pt-5">
    <div class="container">
        <h2 id="four" class="euro-medium text-center mb-5 h2"><?php echo wp_kses( $vzm_title, 'post' ); ?></h2>
		<?php if ( $vzm_blocks ) : ?>
            <div class="row row-gap-4">

				<?php foreach ( $vzm_blocks as $block ) {
					?>
                    <div class="col-12 col-md-6 col-xxl-4 d-flex align-items-stretch">
                        <div class="rounded shadow p-4 py-xl-5">
                            <div class="row">
                                <div class="col-auto">
                                    <img src="<?php echo esc_url( $block['img'] ); ?>"
                                         alt="Icon" class="img-fluid">
                                </div>
                                <div class="col">
                                    <h3 class="stkh-funcs__title euro-medium h5"><?php echo wp_kses( $block['num'], 'post' ); ?></h3>
                                </div>
                                <div class="col-12">
									<?php echo wpautop( $block['text'] ); ?>
                                </div>
                            </div>
                        </div>
                    </div>
					<?php
				} ?>

            </div>
		<?php endif; ?>
        <!-- Кнопка редактирования для Админов -->
		<?php stkhBtnEdit( '#carbon_fields_container_f88ee1d2', 'text-dark' ); ?>
    </div>
</div>