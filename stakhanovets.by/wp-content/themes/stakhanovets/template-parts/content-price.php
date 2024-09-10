<?php

$id = get_the_ID();

$price_title = carbon_get_post_meta( $id, 'price_title' );
$price_desc  = carbon_get_post_meta( $id, 'price_desc' );
$price_form  = carbon_get_post_meta( $id, 'price_form' );

if ( ! $price_form ) {
	return;
}

?>

<div class="stkh-price my-5 pt-0 pt-lg-5">
    <div class="container">
        <h2 id="five" class="euro-medium text-center display-5 mt-5"><?php echo wp_kses( $price_title, 'post' ); ?></h2>

        <div class="row">
            <div class="col-12 col-md-6 d-flex align-items-center">
                <div class="bg-primary stkh-price__bg p-3 p-lg-4 p-xl-5 pe-xl-0 rounded">
                    <p class="m-0 text-white h4 px-0 px-xl-5">
                        <span class="ps-xl-4 d-inline-block"><?php echo wp_kses( $price_desc, 'post' ); ?>у</span>
                    </p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-xl-4 offset-xl-1">
				<?php echo $price_form; ?>
				<?php //echo do_shortcode( '[contact-form-7 id="0a92d7b" title="Контактная форма 1"]' ) ?>

            </div>
        </div>

        <!-- Кнопка редактирования для Админов -->
		<?php stkhBtnEdit( '#carbon_fields_container_1876bef7', 'text-dark' ); ?>
    </div>
</div>
<!--ХАК :) -->
<style>
    .b24-form-field-agreement {
        display: none !important;
    }

    .b24-form-btn-block::after {
        content: "Нажимая «Отправить», вы даете согласие на обработку своих персональных данных.";
        display: block;
        font-size: 13px;
        color: #9b9b9b;
        margin-top: 10px;
    }
</style>