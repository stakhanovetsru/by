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
                    <li class="mb-1">Сертификат ОАЦ</li>
                    <li class="mb-1">О продукте</li>
                    <li class="mb-1">О компании</li>
                    <li class="mb-1">Возможности</li>
                    <li class="mb-1">Контакты</li>
                    <li class="mb-1">Отзывы и публикации</li>
                    <li class="mb-1">FAQ</li>
                </ul>
            </div>

            <div class="col-12 col-sm-6 col-lg-7 col-xl-9">
                <div class="row">
                    <div class="col-12 mb-4">
                        <p>Компания «Стахановец» — ведущий российский разработчик одноименного программного комплекса
                            для защиты коммерческих данных, разрабатывает решения более 15 лет, является аккредитованной
                            ИТ-компанией от МинЦифры.
                            Запатентованное ПО «Стахановец» предназначено для выявления и предотвращения утечек
                            информации (DLP), проведения расследований, включая оценку поведения сотрудников на рабочем
                            месте и анализатор рисков.</p>
                    </div>
                    <div class="col-12 col-md-4">
                        <p class="mb-1">ООО «Стахановец»</p>
                        <p class="mb-1">ИНН 7725836290</p>
                        <p class="mb-1">ОГРН 1147746831220</p>
                    </div>
                    <div class="col-12 col-md-4">
                        <p class="lead euro-medium">Официальный дистрибьютор</p>
                        <p class="mb-1">ООО «Аксофт Интернейшнл»</p>
                        <p class="mb-1">+7 (499) 110-64-10</p>
                        <p class="mb-1">sales.belarus@axoftglobal.com</p>
                    </div>
                    <div class="col-12 col-md-4">
                        <p class="lead euro-medium">Доверенный партнер</p>
                        <p class="mb-1">ООО «Некст Нетворк»</p>
                        <p class="mb-1">+375 17 399-73-47</p>
                        <p class="mb-1">info@nextnet.by</p>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .site-info -->

    <div class="container py-4">
        <div class="row  align-items-center">
            <div class="col">
                <p class="m-0 lead fw-bold d-flex align-items-center"><img
                            src="<?php echo esc_url( get_theme_file_uri( 'assets/images/page.svg' ) ); ?>"
                            alt="Картинка для дизайна" class="img-fluid me-2" width="15">Скачать презентацию</p>
            </div>
            <div class="col">
                <p class="m-0 small-12 d-flex align-items-center"><img
                            src="<?php echo esc_url( get_theme_file_uri( 'assets/images/info.svg' ) ); ?>"
                            alt="Иконка" class="img-fluid me-2" width="">Политика конфиденциальности</p>
            </div>
            <div class="col">
                <p class="m-0 small-12 d-flex align-items-center"><img
                            src="<?php echo esc_url( get_theme_file_uri( 'assets/images/check.svg' ) ); ?>"
                            alt="Иконка" class="img-fluid me-2" width="">Лицензионное соглашение</p>
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

<?php wp_footer(); ?>
</body>
</html>
