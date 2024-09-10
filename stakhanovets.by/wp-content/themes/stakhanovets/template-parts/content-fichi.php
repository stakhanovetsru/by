<?php

$id = get_the_ID();

$ficha_title = carbon_get_post_meta( $id, 'ficha_title' );
$ficha_data  = carbon_get_post_meta( $id, 'ficha_data' );

if ( ! $ficha_data ) {
	return;
}

?>

<div class="stkh-preumuzh my-5 pt-5">
    <div class="container">
        <h2 id="" class="euro-medium h3 text-center"><?php echo wp_kses( $ficha_title, 'post' ); ?></h2>
    </div>

    <div class="container stkh-numbers mt-5">

        <div class="row row-cols-1 row-cols-lg-2 row-cols-xxl-3 row-gap-5">
			<?php

			foreach ( $ficha_data as $el ) {
				$data[] = $el['text'];
			}
			// меняем индекс с 0 на 1
			$data = array_filter( array_merge( array( 0 ), $data ) );

			$i = 1;
			while ( $i <= count( $data ) ): ?>
                <div class="col d-flex align-items-stretch">
                    <div class="shadow rounded w-100">
                        <div class="row d-flex align-items-center">
                            <div class="col-12 col-sm-auto">
                                <div class="stkh-numbers__num m-auto m-sm-0 rounded d-flex align-items-center justify-content-center text-white bg-warning h2">
									<?php echo $i; ?>
                                </div>
                            </div>
                            <div class="col">
								<?php echo "<p class='euro-medium lh-sm text-info text-center text-sm-start m-0 p-4 ps-xl-0 py-lg-0'>{$data[$i]}</p>"; ?>
                            </div>
                        </div>
                    </div>
                </div>
				<?php
				$i ++;
			endwhile;
			?>
        </div>

        <!-- Кнопка редактирования для Админов -->
		<?php stkhBtnEdit( '#carbon_fields_container_3b0ae411', 'text-dark' ); ?>
    </div>
</div>