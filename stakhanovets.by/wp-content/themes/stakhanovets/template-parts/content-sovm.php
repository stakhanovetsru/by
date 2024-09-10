<?php

$id = get_the_ID();

$sovm_title = carbon_get_post_meta( $id, 'sovm_title' );
$sovm_img   = carbon_get_post_meta( $id, 'sovm_img' );

if ( ! $sovm_title ) {
	return;
}

?>

<div class="stkh-sovmstm my-5 pt-5">
    <div class="container">
        <h2 id="" class="euro-medium text-center h3"><?php echo wp_kses( $sovm_title, 'post' ) ?></h2>

    </div>
    <div class="container rounded shadow mt-5 py-5">
        <div class="row py-4">
            <div class="col col-xl-10 offset-xl-1">
                <img src="<?php echo esc_url( $sovm_img ); ?>"
                     alt="Картинка для дизайна" class="img-fluid">
            </div>
        </div>

        <!-- Кнопка редактирования для Админов -->
		<?php stkhBtnEdit( '#carbon_fields_container_7b015f1b', 'text-dark' ); ?>
    </div>
</div>