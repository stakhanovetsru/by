<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package stakhanovets
 */

?>
<div class="w-100 stkh-promo bg-primary z-1 py-5">
    <div class="container">
        <div class="row pb-5 py-xl-5">
            <div class="col-12 col-xl-8">
                <h1 class="text-white fw-bold">Система информационной безопасности Стахановец</h1>
                <p class="h3 text-white euro-medium mt-4">Сертификат Оперативно-аналитического центра (ОАЦ) при
                    Президенте
                    Республики
                    Беларусь</p>
                <div class="stkh-promo__buttons row row-gap-4 mt-5">
                    <div class="col col-lg-3">
                        <a href="#five" class="btn btn-primary p-13 text-white rounded-1 fw-bold d-block"
                           type="button">Купить
                        </a>
                    </div>
                    <div class="col col-lg-3">
                        <a href="https://stakhanovets.ru/demo/" target="_blank"
                           class="btn btn-outline-light p-13 text-white rounded-1 d-block fw-normal"
                           type="button">Онлайн демо
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="stkh-features bg-white shadow rounded mt-n5 z-2 p-3 p-lg-4 p-xl-5">
    <div class="container">
        <div class="row row-gap-4">
            <div class="col-12 col-md-6 col-xl-3 mb-4 mb-md-0">
                <div class="d-flex flex-row">
                    <div class="stkh-feature__square bg-primary rounded d-flex justify-content-center align-items-center">
                        <img src="<?php echo esc_url( get_theme_file_uri( 'build/images/check-square.svg' ) ); ?>"
                             alt="Icon" width="54">
                    </div>
                    <div class="stkh-feature__txt ps-4">
                        <span class="euro-medium">Предотвращение неправомерного доступа к информации</span>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-xl-3 mb-4 mb-md-0">
                <div class="d-flex flex-row">
                    <div class="stkh-feature__square bg-primary rounded d-flex justify-content-center align-items-center">
                        <img src="<?php echo esc_url( get_theme_file_uri( 'build/images/check-square.svg' ) ); ?>"
                             alt="Icon" width="54">
                    </div>
                    <div class="stkh-feature__txt ps-4">
                        <span class="euro-medium">Обнаружение и предупреждение угроз информационной безопасности</span>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-xl-3 mb-4 mb-md-0">
                <div class="d-flex flex-row">
                    <div class="stkh-feature__square bg-primary rounded d-flex justify-content-center align-items-center">
                        <img src="<?php echo esc_url( get_theme_file_uri( 'build/images/check-square.svg' ) ); ?>"
                             alt="Icon" width="54">
                    </div>
                    <div class="stkh-feature__txt ps-4">
                        <span class="euro-medium">Создание и хранения резервных копий информации</span>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-xl-3">
                <div class="d-flex flex-row">
                    <div class="stkh-feature__square bg-primary rounded d-flex justify-content-center align-items-center">
                        <img src="<?php echo esc_url( get_theme_file_uri( 'build/images/check-square.svg' ) ); ?>"
                             alt="Icon" width="54">
                    </div>
                    <div class="stkh-feature__txt ps-4">
                        <span class="euro-medium">Уменьшение рисков информационной безопасности</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
