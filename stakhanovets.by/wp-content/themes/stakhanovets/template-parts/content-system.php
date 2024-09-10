<?php

$id = get_the_ID();

$sys_title  = carbon_get_post_meta( $id, 'sys_title' );
$sys_desc   = carbon_get_post_meta( $id, 'sys_desc' );
$sys_link   = carbon_get_post_meta( $id, 'sys_link' );
$sys_video  = carbon_get_post_meta( $id, 'sys_video' );
$sys_blocks = carbon_get_post_meta( $id, 'sys_bloks' );

?>

<div class="stkh-system my-5 pt-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-xl-6">
                <h2 id="two" class="h2 euro-medium"><?php echo wp_kses( $sys_title, 'post' ); ?></h2>
                <div class="mt-5 h5 euro-medium pe-xxl-5">
					<?php echo wp_kses( $sys_desc, 'post' ); ?>
                </div>
                <div class="row mt-5 mb-5 mb-xl-0">
                    <div class="col-12 col-xl-6">
                        <a href="<?php echo esc_url( $sys_link ); ?>"
                           class="btn btn-lg btn-primary w-100 rounded-1 text-white fw-bold p-13" target="_blank">
                            Скачать презентацию
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-6">
                <video class="object-fit-cover rounded shadow-sm" controls
                       autoplay
                       playsinline
                       muted>
                    <source src="<?php echo esc_url( $sys_video ); ?>" type="video/mp4">
                    <source src="https://stakhanovets.by/wp-content/uploads/2024/08/Безопасность_10.03.2022.webm"
                            type="video/webm">
                </video>
            </div>
        </div>
    </div>

	<?php if ( $sys_blocks ) : ?>
        <div class="container bg-white shadow rounded my-5">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 row-gap-4 py-5">
				<?php foreach ( $sys_blocks as $block ) {
					?>
                    <div class="col">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-5 col-md-12 d-flex align-items-center justify-content-center">
                                <img src="<?php echo esc_url( get_theme_file_uri( 'build/images/snezhinka.svg' ) ); ?>"
                                     alt="Картинка для дизайна" class="img-fluid me-2" width="36">
                                <span class="stkh-system__num h1 fw-bold text-primary mb-0">
                                    <?php echo wp_kses( $block['num'], 'post' ); ?>
                                </span>
                            </div>
                            <div class="col-7 col-md-12 euro-medium lead text-md-center">
								<?php echo wp_kses( $block['text'], 'post' ); ?>
                            </div>
                        </div>
                    </div>
					<?php
				} ?>
            </div>
        </div>
	<?php endif; ?>

    <div class="container">
        <!-- Кнопка редактирования для Админов -->
		<?php stkhBtnEdit( '#carbon_fields_container_7536d15e', 'text-dark' ); ?>
    </div>
</div>