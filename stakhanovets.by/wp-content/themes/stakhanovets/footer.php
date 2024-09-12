<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package stakhanovets
 */

$id = get_the_ID();

$footer_text   = carbon_get_theme_option( 'footer_text' );
$footer_block1 = carbon_get_theme_option( 'footer_block1' );
$footer_block2 = carbon_get_theme_option( 'footer_block2' );
$footer_block3 = carbon_get_theme_option( 'footer_block3' );

$footer_p    = carbon_get_theme_option( 'footer_p' );
$footer_k    = carbon_get_theme_option( 'footer_k' );
$footer_l    = carbon_get_theme_option( 'footer_l' );
$footer_copy = carbon_get_theme_option( 'footer_copy' );

?>

<!-- Форма подписки -->
<?php get_template_part( 'template-parts/template', 'subscribe' ); ?>

<footer id="colophon" class="site-footer">
    <div class="container pt-5 pb-3 border-dark border-top border-bottom">
        <div class="row">
            <div class="col-12 col-sm-6 col-lg-5 col-xl-3">
				<?php
				the_custom_logo();
				?>
                <h3 class="display-6 euro-medium mt-5">Контакты</h3>
                <ul class="list-unstyled">
                    <li class="mb-1"><a href="/#one" class="text-decoration-none text-dark">Сертификат ОАЦ</a></li>
                    <li class="mb-1"><a href="/#two" class="text-decoration-none text-dark">О продукте</a></li>
                    <li class="mb-1"><a href="/#three" class="text-decoration-none text-dark">О компании</a></li>
                    <li class="mb-1"><a href="/#four" class="text-decoration-none text-dark">Возможности</a></li>
                    <li class="mb-1"><a href="/#five" class="text-decoration-none text-dark">Контакты</a></li>
                    <li class="mb-1"><a href="/#six" class="text-decoration-none text-dark">Отзывы и публикации</a></li>
                    <li class="mb-1"><a href="/#seven" class="text-decoration-none text-dark">FAQ</a></li>
                </ul>

                <!-- Иконки социальных сетей -->
				<?php get_template_part( 'template-parts/content', 'social' ); ?>
            </div>

            <div class="col-12 col-sm-6 col-lg-7 col-xl-9">
                <div class="row row-gap-5">
                    <div class="col-12 xl-4">
						<?php echo wpautop( $footer_text ); ?>
                    </div>
                    <div class="col-12 col-xl-4">
						<?php echo wpautop( $footer_block1 ); ?>
                    </div>
                    <div class="col-12 col-xl-4">
                        <p class="lead euro-medium">Официальный дистрибьютор</p>
						<?php echo wpautop( $footer_block2 ); ?>
                    </div>
                    <div class="col-12 col-xl-4">
                        <p class="lead euro-medium">Доверенный партнер</p>
						<?php echo wpautop( $footer_block3 ); ?>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .site-info -->

    <div class="container py-4">
        <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4 row-gap-3 align-items-center">
			<?php if ( $footer_p ): ?>
                <div class="col">
                    <p class="m-0 lead fw-bold d-flex align-items-center">
                        <a href="<?php echo esc_url( $footer_p ); ?>"
                           target="_blank" class="text-decoration-none text-info">
                            <img
                                    src="<?php echo esc_url( get_theme_file_uri( 'assets/images/page.svg' ) ); ?>"
                                    alt="Картинка для дизайна" class="img-fluid me-2"
                                    width="15"><span class="align-middle">Скачать презентацию</span>
                        </a></p>
                </div>
			<?php endif; ?>
			<?php if ( $footer_k ): ?>
                <div class="col">
                    <p class="m-0 small-12 d-flex align-items-center">
                        <a href="<?php echo esc_url( $footer_k ); ?>" target="_blank" rel="noopener"
                           class="text-decoration-none text-dark"><img
                                    src="<?php echo esc_url( get_theme_file_uri( 'assets/images/info.svg' ) ); ?>"
                                    alt="Иконка" class="img-fluid me-2" width=""><span class="align-middle">Политика конфиденциальности</span></a>
                    </p>
                </div>
			<?php endif; ?>
			<?php if ( $footer_l ): ?>
                <div class="col">
                    <p class="m-0 small-12 d-flex align-items-center"><a href="<?php echo esc_url( $footer_l ); ?>"
                                                                         rel="noopener"
                                                                         target="_blank"
                                                                         class="text-decoration-none text-dark"><img
                                    src="<?php echo esc_url( get_theme_file_uri( 'assets/images/check.svg' ) ); ?>"
                                    alt="Иконка" class="img-fluid me-2" width=""><span class="align-middle">Лицензионное соглашение</span></a>
                    </p>
                </div>
			<?php endif; ?>
            <div class="col">
                <p class="m-0 small-12 d-flex align-items-center"><img
                            src="<?php echo esc_url( get_theme_file_uri( 'assets/images/copy.svg' ) ); ?>"
                            alt="Иконка" class="img-fluid me-2" width=""><?php echo wp_kses( $footer_copy, 'post' ); ?>
                </p>
            </div>
        </div>
		<?php if ( is_user_logged_in() ): ?>
            <a href="https://stakhanovets.by/wp-admin/admin.php?page=crb_carbon_fields_container_01d32f78.php"
               data-bs-toggle="tooltip" title="Ссылка для Леоны"
               class="btn btn-link text-dark my-3">Изменить</a>
		<?php endif; ?>
    </div>
</footer><!-- #colophon -->
</div><!-- #page -->

<!-- Принятие кукис -->
<?php get_template_part( 'template-parts/content', 'cookies' ); ?>

<script>
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();

            document.querySelector(this.getAttribute('href')).scrollIntoView({block: "center", behavior: "smooth"});

        });

    });
</script>

<?php wp_footer(); ?>
</body>
</html>
