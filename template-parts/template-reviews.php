<div class="stkh-reviews my-5 py-0 py-xl-5">
    <div class="container">
        <h2 id="six" class="euro-medium h2 text-center">Отзывы и публикации о системе Стахановец</h2>
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
							$reviews = carbon_get_the_post_meta( 'crb_media' );
							// [review_logo]
							// [review_text]
							// [review_name]
							// [review_desc]
							// [review_photo]
							// [review_link]
							// [review_file]

							foreach ( $reviews as $review )  : ?>
                                <div class="swiper-slide">
                                    <div class="row">
                                        <div class="col-12">
                                            <img src="<?php echo esc_url( $review['review_logo'] ); ?>" alt="Логотип"
                                                 class="img-fluid">
                                        </div>
                                        <div class="col-12 col-xl-10">
                                            <p class="lead my-5"><?php echo esc_textarea( $review['review_text'] ); ?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-auto">
                                            <img src="<?php echo esc_url( $review['review_photo'] ); ?>" alt="Логотип"
                                                 class="img-fluid">
                                        </div>
                                        <div class="col">
                                            <p class="euro-medium lead mb-2"><?php echo esc_textarea( $review['review_name'] ); ?></p>
                                            <p class="small-12 text-uppercase mb-2"><?php echo esc_textarea( $review['review_desc'] ); ?></p>
                                            <p class="small-12 mb-2"><?php echo esc_url( $review['review_link'] ); ?></p>
                                        </div>
                                        <div class="col d-flex align-items-end">

                                            <p class="d-flex align-items-center m-0">
                                                <img src="<?php echo esc_url( get_theme_file_uri( 'build/images/file-pdf.svg' ) ); ?>"
                                                     alt="Icon" class="img-fluid me-2"><span class="text-primary">Благодарность</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
							<?php endforeach; ?>

                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-pagination"></div>
                    </div>

                    <!-- Initialize Swiper -->
                    <script type="module">
                        import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.mjs';

                        const swiper = new Swiper(".reviews-swiper", {
                            pagination: {
                                el: ".swiper-pagination",
                                type: "fraction",
                            },
                            navigation: {
                                nextEl: ".swiper-button-next",
                                prevEl: ".swiper-button-prev",
                            },
                        });
                    </script>
                </div>
                <div class="col-12 col-xl-2">
                    <img src="<?php echo esc_url( get_theme_file_uri( 'build/images/qq.svg' ) ); ?>"
                         alt="Icon" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</div>