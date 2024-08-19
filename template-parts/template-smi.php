<div class="stkh-smi my-5 py-0 py-xl-5">
    <div class="container">
        <h2 class="euro-medium h2 text-center mb-5">СМИ о нас</h2>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-4 row-gap-4">

			<?php
			if ( false === $posts = get_transient( 'stkh_smi_remote_cache' ) ) {
				$response = wp_remote_get(
					add_query_arg(
						array(
							'per_page' => 20,
							//'page'     => $current_page, // 1, 2, etc
							'orderby'  => 'title',
							'order'    => 'asc',
						),
						'https://stakhanovets.ru/wp-json/wp/v2/smi'
					)
				);

				if ( 200 === wp_remote_retrieve_response_code( $response ) ) {
					$posts = json_decode( wp_remote_retrieve_body( $response ), true );
					set_transient( 'stkh_smi_remote_cache', $posts, HOUR_IN_SECONDS );
				}
			}

			if ( $posts ) :
				foreach ( $posts as $post ) :
					?>
                    <div class="col">

                        <div class="card card__smi position-relative">
                            <a href="<?php echo $post['link'] ?>" class="text-decoration-none d-flex" target="_blank">

                                <div class="card__smi-bg position-absolute h-100 w-100">

                                </div>

                                <img src="<?php echo 'https://stakhanovets.ru' . $post['featured_image_src'] ?>"
                                     class="object-fit-cover img-fluid" alt="Фоновое изображение">
                                <img src="<?php echo 'https://stakhanovets.ru' . $post['carbon_image_logo'] ?>"
                                     class="object-fit-cover img-fluid d-none" alt="Logo">
                                <div class="card-body position-absolute">
                                    <p class="card-title small-12"><?php echo $post['title']['rendered'] ?></p>
                                    <p class="card-text"><?php echo $post['title']['rendered'] ?></p>
                                </div>
                            </a>
                        </div>
                    </div>
				<?php
				endforeach;

			endif;
			?>
        </div>
    </div>
</div>


<?php //dd( $posts ); ?>
