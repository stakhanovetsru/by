<?php

$id = get_the_ID();

$sert_title    = carbon_get_post_meta( $id, 'sert_title' );
$sert_desc     = carbon_get_post_meta( $id, 'sert_desc' );
$sert_richtext = carbon_get_post_meta( $id, 'sert_richtext' );
$sert_image    = carbon_get_post_meta( $id, 'sert_image' );

?>


<div class="stkh-sert my-5 pt-0 pt-lg-5">
    <div class="container">
        <h1 id="one" class="h1 fw-bold text-center my-5"><?php echo wp_kses( $sert_title, 'post' ); ?></h1>
        <div class="row">
            <div class="col-12 col-md-7">
                <div class="sert-block shadow rounded">
                    <div class="sert-block__top bg-primary rounded px-3 py-5 px-lg-4 px-xl-5">
                        <span class="text-white euro-medium h4"><?php echo wp_kses( $sert_desc, 'post' ); ?></span>
                    </div>
                    <div class="sert-block__bottom h5 euro-medium p-3 p-lg-4 p-xl-5">

						<?php echo wp_kses( $sert_richtext, 'post' ); ?>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-5 col-xl-4 offset-xl-1 mt-3 mt-md-0">
                <a href="<?php echo esc_url( $sert_image ); ?>">
                    <img src="<?php echo esc_url( $sert_image ); ?>"
                         alt="Сертификат" class="img-fluid">
                </a>
            </div>
        </div>
        <!-- Кнопка редактирования для Админов -->
		<?php stkhBtnEdit( '#carbon_fields_container_137c4b99', 'text-dark' ); ?>
    </div>
</div>