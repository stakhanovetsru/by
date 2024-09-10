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
                        <p>Компания «Стахановец» — ведущий российский разработчик одноименного программного комплекса
                            для защиты коммерческих данных, разрабатывает решения более 15 лет, является аккредитованной
                            ИТ-компанией от МинЦифры.
                            Запатентованное ПО «Стахановец» предназначено для выявления и предотвращения утечек
                            информации (DLP), проведения расследований, включая оценку поведения сотрудников на рабочем
                            месте и анализатор рисков.</p>
                    </div>
                    <div class="col-12 col-xl-4">
                        <p class="mb-1">ООО «Стахановец»</p>
                        <p class="mb-1">ИНН 7725836290</p>
                        <p class="mb-1">ОГРН 1147746831220</p>
                    </div>
                    <div class="col-12 col-xl-4">
                        <p class="lead euro-medium">Официальный дистрибьютор</p>
                        <p class="mb-1">ООО «Аксофт Интернейшнл»</p>
                        <p class="mb-1"><a href="tel:+" class="text-decoration-none text-dark"></a></p>
                        <p class="mb-1"><a href="mailto:sales.belarus@axoftglobal.com"
                                           class="text-decoration-none text-dark">sales.belarus@axoftglobal.com</a></p>
                    </div>
                    <div class="col-12 col-xl-4">
                        <p class="lead euro-medium">Доверенный партнер</p>
                        <p class="mb-1">ООО «Некст Нетворк»</p>
                        <p class="mb-1"><a href="tel:+375173997347" class="text-decoration-none text-dark">+375 17
                                399-73-47</a></p>
                        <p class="mb-1"><a href="mailto:info@nextnet.by" class="text-decoration-none text-dark">info@nextnet.by</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .site-info -->

    <div class="container py-4">
        <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4 row-gap-3 align-items-center">
            <div class="col">
                <p class="m-0 lead fw-bold d-flex align-items-center">
                    <a href="/wp-content/uploads/2024/08/2024.-Стахановец.-РБ.-DLP-СИСТЕМА-ДЛЯ-ЗАЩИТЫ-ИНФОРМАЦИИ.pdf"
                       target="_blank" class="text-decoration-none text-info">
                        <img
                                src="<?php echo esc_url( get_theme_file_uri( 'assets/images/page.svg' ) ); ?>"
                                alt="Картинка для дизайна" class="img-fluid me-2"
                                width="15"><span class="align-middle">Скачать презентацию</span>
                    </a></p>
            </div>
            <div class="col">
                <p class="m-0 small-12 d-flex align-items-center">
                    <a href="/privacy-policy/" target="_blank" rel="noopener"
                       class="text-decoration-none text-dark"><img
                                src="<?php echo esc_url( get_theme_file_uri( 'assets/images/info.svg' ) ); ?>"
                                alt="Иконка" class="img-fluid me-2" width=""><span class="align-middle">Политика конфиденциальности</span></a>
                </p>
            </div>
            <div class="col">
                <p class="m-0 small-12 d-flex align-items-center"><a href="/license-agreement/" rel="noopener"
                                                                     target="_blank"
                                                                     class="text-decoration-none text-dark"><img
                                src="<?php echo esc_url( get_theme_file_uri( 'assets/images/check.svg' ) ); ?>"
                                alt="Иконка" class="img-fluid me-2" width=""><span class="align-middle">Лицензионное соглашение</span></a>
                </p>
            </div>
            <div class="col">
                <p class="m-0 small-12 d-flex align-items-center"><img
                            src="<?php echo esc_url( get_theme_file_uri( 'assets/images/copy.svg' ) ); ?>"
                            alt="Иконка" class="img-fluid me-2" width="">Copyright 2024 Стахановец. Все права
                    защищены. 18+</p>
            </div>
        </div>
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
