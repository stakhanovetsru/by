<div class="stkh-reviews my-5 py-0 py-lg-5">
    <div class="container">
        <h2 id="six" class="euro-medium h2 text-center mt-5">Отзывы и публикации о системе Стахановец</h2>
        <p class="h4 text-center">Нам доверяют более 18 000 клиентов </p>
        <div class="row">
            <div class="col-12 col-xl-10 offset-xl-1">
                <div class="row row-cols-2 row-cols-lg-3 row-gap-4 py-5">
                    <div class="col">
                        <img src="<?php echo esc_url( get_theme_file_uri( 'build/images/r1.svg' ) ); ?>"
                             alt="Logo" class="img-fluid">
                    </div>
                    <div class="col">
                        <img src="<?php echo esc_url( get_theme_file_uri( 'build/images/r2.svg' ) ); ?>"
                             alt="Logo" class="img-fluid">
                    </div>
                    <div class="col">
                        <img src="<?php echo esc_url( get_theme_file_uri( 'build/images/r3.svg' ) ); ?>"
                             alt="Logo" class="img-fluid">
                    </div>
                </div>

                <div class="row row-cols-2 row-cols-xl-4 row-gap-4 py-5 border-bottom">
                    <div class="col border-end d-flex align-items-center justify-content-center">
                        <img src="<?php echo esc_url( get_theme_file_uri( 'build/images/RT_logo-horizontal_main_ru.svg' ) ); ?>"
                             alt="Logo" class="img-fluid">
                    </div>
                    <div class="col border-end d-flex align-items-center justify-content-center">
                        <img src="<?php echo esc_url( get_theme_file_uri( 'build/images/logo-rosneft.svg' ) ); ?>"
                             alt="Logo" class="img-fluid">
                    </div>
                    <div class="col border-end d-flex align-items-center justify-content-center">
                        <img src="<?php echo esc_url( get_theme_file_uri( 'build/images/_rostex.svg' ) ); ?>"
                             alt="Logo" class="img-fluid">
                    </div>
                    <div class="col d-flex align-items-center justify-content-center">
                        <img src="<?php echo esc_url( get_theme_file_uri( 'build/images/roscosmos-logo.svg' ) ); ?>"
                             alt="Logo" class="img-fluid">
                    </div>
                </div>

                <div class="row row-cols-2 row-cols-xl-4 row-gap-4 py-5">
                    <div class="col border-end d-flex align-items-center justify-content-center">
                        <img src="<?php echo esc_url( get_theme_file_uri( 'build/images/logo-main_.svg' ) ); ?>"
                             alt="Logo" class="img-fluid">
                    </div>
                    <div class="col border-end d-flex align-items-center justify-content-center">
                        <img src="<?php echo esc_url( get_theme_file_uri( 'build/images/sogaz.svg' ) ); ?>"
                             alt="Logo" class="img-fluid">
                    </div>
                    <div class="col border-end d-flex align-items-center justify-content-center">
                        <img src="<?php echo esc_url( get_theme_file_uri( 'build/images/авито.svg' ) ); ?>"
                             alt="Logo" class="img-fluid">
                    </div>
                    <div class="col d-flex align-items-center justify-content-center">
                        <img src="<?php echo esc_url( get_theme_file_uri( 'build/images/Logo_rus_horizontal.svg' ) ); ?>"
                             alt="Logo" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>

        <!--Slider Reviews-->
        <div class="stkh-rivews__slider shadow rounded my-5 py-5">
            <div class="row">
                <div class="col-12 col-xl-8 offset-xl-1">

                    <!-- Swiper -->
                    <div class="swiper reviews-swiper">
                        <div class="swiper-wrapper">

							<?php
							//if ( false === $posts = get_transient( 'stkh_reviews_cache' ) ) {
							$response = wp_remote_get(
								add_query_arg(
									array(
										'per_page' => 18,
										'orderby'  => 'date',
										'order'    => 'asc',
									),
									'https://stakhanovets.ru/wp-json/wp/v2/reviews'
								)
							);

							if ( 200 === wp_remote_retrieve_response_code( $response ) ) {
								$posts = json_decode( wp_remote_retrieve_body( $response ), true );
								//set_transient( 'stkh_reviews_cache', $posts, HOUR_IN_SECONDS );
							}
							//}

							//dd( $posts );

							if ( $posts ) :
								foreach ( $posts as $post ) : ?>
                                    <div class="swiper-slide">
                                        <div class="row">
                                            <div class="col-12">
                                                <img src="https://stakhanovets.by/wp-content/uploads/2024/08/stkh-logo.svg"
                                                     alt="Логотип"
                                                     class="img-fluid">
                                            </div>
                                            <div class="col-12 col-xl-10">
                                                <p class="lead my-5"><?php echo wp_kses( $post['content']['rendered'], 'post' ); ?></p>
                                            </div>
                                        </div>
                                        <div class="row d-flex fl align-items-center mt-5">
                                            <div class="col-auto">
                                                <img src="https://stakhanovets.by/wp-content/uploads/2024/08/review_user_avatar.svg"
                                                     alt="Логотип"
                                                     class="img-fluid rounded-circle" width="81">
                                            </div>
                                            <div class="col">
                                                <p class="euro-medium lead mb-2"><?php echo esc_textarea( $post['name'] ); ?></p>
                                                <p class="small-12 text-uppercase mb-2"><?php echo esc_textarea( $post['title']['rendered'] ); ?></p>
                                                <p class="small-12 mb-2"><?php echo esc_url( $review['review_link'] ); ?></p>
                                            </div>
                                            <div class="col d-flex align-items-end">

                                                <p class="m-0">
                                                    <a href="<?php echo 'https://stakhanovets.ru' . $post['reviews_scan'] ?>"
                                                       target="_blank"
                                                       class="text-decoration-none d-flex align-items-center">
                                                        <img src="<?php echo esc_url( get_theme_file_uri( 'build/images/file-pdf.svg' ) ); ?>"
                                                             alt="Icon" class="img-fluid me-2"><span
                                                                class="text-primary">Благодарность</span>
                                                    </a>

                                                </p>
                                            </div>
                                        </div>
                                    </div>
								<?php endforeach; endif; ?>

                        </div>
                    </div>

                    <!-- Initialize Swiper -->
                    <script type="module">
                        import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.mjs';

                        const swiper = new Swiper(".reviews-swiper", {
                            navigation: {
                                nextEl: "._swiper-button-next",
                                prevEl: "._swiper-button-prev",
                            },
                        });
                    </script>
                </div>
                <div class="col-12 col-xl-2 d-flex align-items-start flex-column ">
                    <img src="<?php echo esc_url( get_theme_file_uri( 'build/images/qq.svg' ) ); ?>"
                         alt="Icon" class="img-fluid">

                    <div class="d-flex mt-auto mb-5">
                        <div class="_swiper-button-next mx-2">
                            <img src="<?php echo esc_url( get_theme_file_uri( 'build/images/arrow-left-square.svg' ) ); ?>"
                                 alt="icon" class="">
                        </div>

                        <div class="_swiper-button-prev mx-2">
                            <img src="<?php echo esc_url( get_theme_file_uri( 'build/images/arrow-right-square.svg' ) ); ?>"
                                 alt="icon" class="">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>