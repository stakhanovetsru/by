<?php

$id = get_the_ID();

$how_title = carbon_get_post_meta( $id, 'how_title' );
$how_img   = carbon_get_post_meta( $id, 'how_img' );

if ( ! $how_title ) {
	return;
}

?>

<div class="stkh-works my-5 pt-0 pt-lg-5">
    <div class="container">
        <h2 id="" class="euro-medium text-center h2 mt-5"><?php echo wp_kses( $how_title, 'post' ) ?></h2>

    </div>
    <div class="container rounded stkh-works__wrap mt-5 py-5">
        <div class="row py-4">
            <div class="col col-xl-10 offset-xl-1">
                <img src="<?php echo esc_url( $how_img ); ?>"
                     alt="Картинка для дизайна" class="img-fluid">
            </div>
        </div>

        <!-- Кнопка редактирования для Админов -->
		<?php stkhBtnEdit( '#carbon_fields_container__dlp_', 'text-dark' ); ?>
    </div>
</div>