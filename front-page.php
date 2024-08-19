<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package stakhanovets
 */

get_header();
?>

    <!-- Промо -->
<?php get_template_part( 'template-parts/content', 'promo' ); ?>


    <!-- Сертификат -->
    <div class="stkh-sert my-5 pt-0 pt-lg-5">
        <div class="container">
            <h2 id="one" class="h1 fw-bold text-center my-5">Сертификат ОАЦ</h2>
            <div class="row">
                <div class="col-12 col-md-7">
                    <div class="sert-block shadow rounded">
                        <div class="sert-block__top bg-primary rounded px-3 py-5 px-lg-4 px-xl-5">
                            <span class="text-white euro-medium h4">Сертификат Оперативно-аналитического центра (ОАЦ) при Президенте Республики Беларусь</span>
                        </div>
                        <div class="sert-block__bottom px-3 px-lg-4 px-xl-5">
                            <ul class="h5 euro-medium p-5 ps-4">
                                <li class="mb-3 ps-4">сертификат BY/112 02.02</li>
                                <li class="mb-3 ps-4">соответствует требованиям ТР 2013/027/BY</li>
                                <li class="mb-3 ps-4">
                                    сертификат BY/112 02.02
                                    соответствует требованиям ТР 2013/027/BY
                                    продукт для информационных систем типовых классов: «3-ин», «3-спец», «3-бг», «3-юл»,
                                    «3-дсп», «4-ин»,«4-спец», «4-бг», «4-юл», «4-дсп», «5-частн», «5-гос», «6-частн» и
                                    «6-гос»
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-5 col-xl-4 offset-xl-1 mt-3 mt-md-0">
                    <img src="<?php echo esc_url( get_theme_file_uri( 'build/images/Rectangle.jpg' ) ); ?>"
                         alt="Сертификат" class="img-fluid">
                </div>
            </div>
        </div>
    </div>


    <!-- О системе -->
    <div class="stkh-system my-5 pt-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <h2 id="two" class="h2 euro-medium">О системе информационной безопасности Стахановец</h2>
                    <p class="mt-5 h5 euro-medium">
                        Программный комплекс «Стахановец»
                        разработан как для задач повыявлению и предотвращению утечек информации (DLP), так и для анализа
                        эффективности и вовлеченности сотрудников в рабочие процессы
                    </p>
                    <div class="row mt-5 mb-5 mb-lg-0">
                        <div class="col-12 col-lg-6">
                            <a href="#" class="btn btn-lg btn-primary w-100 rounded-1 text-white fw-bold p-13">
                                Скачать презентацию
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <img src="<?php echo esc_url( get_theme_file_uri( 'build/images/system.jpg' ) ); ?>"
                         alt="Картинка для дизайна" class="img-fluid">
                </div>
            </div>
        </div>

        <div class="container bg-white shadow rounded my-5">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 row-gap-4 py-5">
                <div class="col">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-5 col-md-12 d-flex align-items-center justify-content-center">
                            <img src="<?php echo esc_url( get_theme_file_uri( 'build/images/snezhinka.svg' ) ); ?>"
                                 alt="Картинка для дизайна" class="img-fluid me-2" width="36">
                            <span class="stkh-system__num h1 fw-bold text-primary mb-0">
                            100
                            </span>
                        </div>
                        <div class="col-7 col-md-12 euro-medium lead text-md-center">
                            функций
                            на борту
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="row align-items-center">
                        <div class="col-5 col-md-12 d-flex align-items-center justify-content-center">
                            <img src="<?php echo esc_url( get_theme_file_uri( 'build/images/snezhinka.svg' ) ); ?>"
                                 alt="Картинка для дизайна" class="img-fluid me-3" width="36">
                            <span class="stkh-system__num h1 fw-bold text-primary mb-0">
                            50
                        </span>
                        </div>

                        <div class="col-7 col-md-12 euro-medium lead text-md-center">
                            видов
                            настроек
                        </div>

                    </div>
                </div>
                <div class="col">
                    <div class="row align-items-center">
                        <div class="col-5 col-md-12 d-flex align-items-center justify-content-center">
                            <img src="<?php echo esc_url( get_theme_file_uri( 'build/images/snezhinka.svg' ) ); ?>"
                                 alt="Картинка для дизайна" class="img-fluid me-3" width="36">
                            <span class="stkh-system__num h1 fw-bold text-primary mb-0">
                            43
                        </span>
                        </div>
                        <div class="col-7 col-md-12 euro-medium lead text-md-center">
                            аналитических
                            отчета
                        </div>

                    </div>
                </div>
                <div class="col">
                    <div class="row align-items-center">
                        <div class="col-5 col-md-12 d-flex align-items-center justify-content-center">
                            <img src="<?php echo esc_url( get_theme_file_uri( 'build/images/snezhinka.svg' ) ); ?>"
                                 alt="Картинка для дизайна" class="img-fluid me-3" width="36">
                            <span class="stkh-system__num h1 fw-bold text-primary mb-0">
                            25
                        </span>
                        </div>
                        <div class="col-7 col-md-12 euro-medium lead text-md-center">
                            каналов
                            перехвата
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Преимущества -->
    <div class="stkh-preumuzh my-5 pt-5">
        <div class="container">
            <h2 id="" class="euro-medium h3 text-center">Преимущества DLP-системы Стахановец</h2>
        </div>

        <div class="container stkh-numbers">

            <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3">
				<?php
				$data = [
					1 => 'Высокая производительность при минимальных системных требованиях к серверу и end-point клиентам',
					2 => 'Наличие всех основных DLP-функции, которых достаточно для большинства компаний',
					3 => 'Уникальный функционал на основе машинного обучения',
					4 => 'Поддерживает скрытую установку клиентской части',
					5 => 'Возможность развернуть комплекс за несколько часов',
					6 => 'Оперативная техническая поддержка',
				];
				$i    = 1;
				while ( $i <= count( $data ) ): ?>
                    <div class="col my-xl-5">
                        <div class="row">
                            <div class="col-12 col-md-auto">
                                <div class="stkh-numbers__num rounded d-flex align-items-center justify-content-center text-white bg-warning h2">
									<?php echo $i; ?>
                                </div>
                            </div>
                            <div class="col">
								<?php echo "<p class='lead euro-medium'>{$data[$i]}</p>"; ?>
                            </div>
                        </div>

                    </div>
					<?php
					$i ++;
				endwhile;
				?>
            </div>

        </div>
    </div>


    <!-- Как работает -->
    <div class="stkh-works my-5 pt-0 pt-lg-5">
        <div class="container">
            <h2 id="" class="euro-medium text-center h2 mt-5">Как работает<br>
                DLP система Стахановец</h2>

        </div>
        <div class="container rounded stkh-works__wrap mt-5 py-5">
            <div class="row py-4">
                <div class="col col-xl-10 offset-xl-1">
                    <img src="<?php echo esc_url( get_theme_file_uri( 'build/images/shema.svg' ) ); ?>"
                         alt="Картинка для дизайна" class="img-fluid">
                </div>
            </div>
        </div>
    </div>


    <!-- Совместимость -->
    <div class="stkh-sovmstm my-5 pt-5">
        <div class="container">
            <h2 id="" class="euro-medium text-center h3">Совместимость с программными продуктами</h2>

        </div>
        <div class="container rounded shadow mt-5 py-5">
            <div class="row py-4">
                <div class="col col-xl-10 offset-xl-1">
                    <img src="<?php echo esc_url( get_theme_file_uri( 'build/images/logos.svg' ) ); ?>"
                         alt="Картинка для дизайна" class="img-fluid">
                </div>
            </div>
        </div>
    </div>


    <!-- Калькулятор -->
    <div class="stkh-sovmstm my-5 pt-5">
        <div class="container">
            <h2 id="" class="euro-medium text-center h3">Калькулятор ресурсов сервера и клиентов</h2>
            <p class="small-text text-center">Данный расчет является примерным и служит только для ориентира, реальные
                цифры всегда
                будут отличаться от расчетных</p>
        </div>
        <div class="container rounded shadow mt-5 py-5">
            <div class="row">
                <div class="dlp__calc">
					<?php
					set_query_var( 'calc_cta_text', 1 );
					set_query_var( 'calc_cta_url', 1 );
					set_query_var( 'calc_cta_isblank', 1 );
					?>
                    <h2></h2>
                    <h3></h3>
					<?php get_template_part( '/template-parts/template-calc' ) ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Разработчик программного -->
    <div class="stkh-dev my-5 pt-0 pt-lg-5">
        <div class="container">
            <h2 id="" class="euro-medium text-center h2 mt-5">Разработчик программного<br>
                продукта Стахановец</h2>

        </div>
        <div class="container rounded py-5 position-relative">
            <div class="row">
                <div class="stkh-dev__bg bg-primary rounded py-5 position-absolute z-1">

                </div>
                <div class="col-12 col-xxl-10 offset-xxl-1 mt-5 z-2">
                    <div class="bg-white rounded shadow p-4">
                        <span class="lead text-center">«Стахановец» — это российская DLP-система, обладающая широким спектром инструментов защиты, отслеживания и анализа важной информации. «Стахановец» позволяет не только выявить инсайдеров и предупредить утечку данных по различным каналам связи, но также имеет в своем составе запатентованные интеллектуальные модули на базе машинного обучения, выводящие защиту информации на новый уровень. Решение контролирует личные и коммерческие данные, защищает корпоративную информацию, а также отслеживает активность и продуктивность сотрудников.</span>
                    </div>

                    <div class="row row-gap-3 mt-5">
                        <div class="col-12 col-sm-6 col-xxl-3">
                            <div class="bg-white rounded shadow euro-medium text-center py-4 px-3">
                                <span class="d-block display-5 text-primary">15 лет</span>
                                <span class="d-block h6">на IT-рынке</span>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-xxl-3">
                            <div class="bg-white rounded shadow euro-medium text-center py-4 px-3">
                                <span class="d-block display-5 text-primary">18 000</span>
                                <span class="d-block h6">клиентов</span>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-xxl-3">
                            <div class="bg-white rounded shadow euro-medium text-center py-4 px-3">
                                <span class="d-block display-5 text-primary">1,9+ млн</span>
                                <span class="d-block h6">установок</span>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-xxl-3">
                            <div class="bg-white rounded shadow euro-medium text-center py-4 px-3">
                                <span class="d-block display-5 text-primary">35 000+</span>
                                <span class="d-block h6">масштабируемость</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-xl-10 offset-xl-1 mt-5 z-2">

                    <!-- Slider main container -->
                    <div class="marqueeSwiper swiper marquee">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper d-flex align-items-stretch">
                            <!-- Slides -->
                            <div class="swiper-slide d-flex align-items-center">
                                <img src="<?php echo esc_url( get_theme_file_uri( 'build/images/rusoft.svg' ) ); ?>"
                                     alt="Logo" class="img-fluid">
                            </div>
                            <div class="swiper-slide d-flex align-items-center">
                                <img src="<?php echo esc_url( get_theme_file_uri( 'build/images/sk.svg' ) ); ?>"
                                     alt="Logo" class="img-fluid">
                            </div>
                            <div class="swiper-slide  d-flex align-items-center">
                                <img src="<?php echo esc_url( get_theme_file_uri( 'build/images/cnews.svg' ) ); ?>"
                                     alt="Logo" class="img-fluid">
                            </div>
                            <div class="swiper-slide d-flex align-items-center">
                                <img src="<?php echo esc_url( get_theme_file_uri( 'build/images/fstek.svg' ) ); ?>"
                                     alt="Logo" class="img-fluid">
                            </div>
                            <div class="swiper-slide d-flex align-items-center">
                                <img src="<?php echo esc_url( get_theme_file_uri( 'build/images/rossreestr_black 2.svg' ) ); ?>"
                                     alt="Logo" class="img-fluid">
                            </div>
                            <div class="swiper-slide d-flex align-items-center">
                                <img src="<?php echo esc_url( get_theme_file_uri( 'build/images/cnews-top.svg' ) ); ?>"
                                     alt="Logo" class="img-fluid">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <!-- Возможности -->
    <div class="stkh-funcs my-5 pt-5">
        <div class="container">
            <h2 id="" class="euro-medium text-center mb-5 h2">Возможности DLP-системы Стахановец</h2>

            <div class="row row-gap-4">
                <div class="col-12 col-md-6 col-xxl-4 d-flex align-items-stretch">
                    <div class="rounded shadow p-4 py-xl-5">
                        <div class="row">
                            <div class="col-auto">
                                <img src="<?php echo esc_url( get_theme_file_uri( 'build/images/v1.svg' ) ); ?>"
                                     alt="Icon" class="img-fluid">
                            </div>
                            <div class="col">
                                <h3 class="stkh-funcs__title euro-medium h5">Обнаружение нежелательных действий</h3>
                            </div>
                            <div class="col-12">
                                <p>Комплекс анализирует активность персонала и обнаруживает действия, которые могут
                                    нанести
                                    компании ущерб:</p>
                                <ul>
                                    <li>выявление утечек информации</li>
                                    <li>поиск работы сотрудниками</li>
                                    <li>снижение эффективности труда</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-xxl-4 d-flex align-items-stretch">
                    <div class="rounded shadow p-4 py-xl-5">
                        <div class="row">
                            <div class="col-auto">
                                <img src="<?php echo esc_url( get_theme_file_uri( 'build/images/v2.svg' ) ); ?>"
                                     alt="Icon" class="img-fluid">
                            </div>
                            <div class="col">
                                <h3 class="stkh-funcs__title euro-medium h5">Аналитика поведения пользователей</h3>
                            </div>
                            <div class="col-12">
                                <p class="mb-0">Если работник совершает подозрительные действия или набирает
                                    сомнительный текст, ПО
                                    мгновенно присылает оповещение.
                                    Алерты DLP-системы служба безопасности может настроить по словам-маркерам, подбирая
                                    их под особенности бизнеса.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-xxl-4 d-flex align-items-stretch">
                    <div class="rounded shadow p-4 py-xl-5">
                        <div class="row">
                            <div class="col-auto">
                                <img src="<?php echo esc_url( get_theme_file_uri( 'build/images/v3.svg' ) ); ?>"
                                     alt="Icon" class="img-fluid">
                            </div>
                            <div class="col">
                                <h3 class="stkh-funcs__title euro-medium h5">Предотвращение внутренних угроз</h3>
                            </div>
                            <div class="col-12">
                                <p class="mb-0">DLP-система Стахановец контролирует все
                                    операции с корпоративными документами,
                                    позволяет установить запрет на пересылку и копирование файлов. Также блокирует
                                    попытки сфотографировать монитор с ценной информацией, чтобы снизить риск утечки
                                    данных.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-xxl-4 d-flex align-items-stretch">
                    <div class="rounded shadow p-4 py-xl-5">
                        <div class="row">
                            <div class="col-auto">
                                <img src="<?php echo esc_url( get_theme_file_uri( 'build/images/v4.svg' ) ); ?>"
                                     alt="Icon" class="img-fluid">
                            </div>
                            <div class="col">
                                <h3 class="stkh-funcs__title euro-medium h5">Непрерывный мониторинг данных</h3>
                            </div>
                            <div class="col-12">
                                <p class="mb-0">Система фиксирует все действия
                                    сотрудников за корпоративной учетной записью. Благодаря этому, в случае ЧП, можно
                                    осуществить поиск утечки данных, установить детали произошедшего и выявить
                                    причастных лиц.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-xxl-4 d-flex align-items-stretch">
                    <div class="rounded shadow p-4 py-xl-5">
                        <div class="row">
                            <div class="col-auto">
                                <img src="<?php echo esc_url( get_theme_file_uri( 'build/images/v5.svg' ) ); ?>"
                                     alt="Icon" class="img-fluid">
                            </div>
                            <div class="col">
                                <h3 class="stkh-funcs__title euro-medium h5">Мониторинг сотрудников</h3>
                            </div>
                            <div class="col-12">
                                <p class="mb-0">DLP-система анализирует поведение персонала более чем по 40 параметрам.
                                    Это позволяет
                                    контролировать рабочую активность, сравнивать показатели эффективности и проводить
                                    кадровый анализ.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-xxl-4 d-flex align-items-stretch">
                    <div class="rounded shadow px-4 py-xl-5">
                        <div class="row">
                            <div class="col-auto">
                                <img src="<?php echo esc_url( get_theme_file_uri( 'build/images/v6.svg' ) ); ?>"
                                     alt="Icon" class="img-fluid">
                            </div>
                            <div class="col">
                                <h3 class="stkh-funcs__title euro-medium h5">Расследование инцидентов и сбор
                                    доказательной базы</h3>
                            </div>
                            <div class="col-12">
                                <p class="mb-0">Отчеты системы позволяют провести расследование инцидентов и нарушения
                                    политик, а
                                    беспрерывное логирование сохраняет историю поведения сотрудника для формирования
                                    доказательной базы. Кейсы судебной практики с применением DLP-системы Стахановец
                                    можно посмотреть тут.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <!-- Обнаружение действий -->
    <div class="stkh-action my-5 pt-5">
        <div class="container">
            <div class="row">
                <h2 id="" class="euro-medium text-center h3">Обнаружение неправомерных действий с данными</h2>
                <p class="lead stkh-action__desc m-auto">Повысьте защиту корпоративной информации от утечки, выявив
                    мошеннические действия со стороны
                    сотрудников</p>

                <nav class="mt-5 overflow-auto">
                    <div class="row stkh-action__row" id="nav-tab" role="tablist">

                        <div class="col-2 pb-2">
                            <button class="nav-link active" id="nav-one" data-bs-toggle="tab" data-bs-target="#nav-1"
                                    type="button" role="tab" aria-controls="nav-1" aria-selected="true">Маркирование
                                документов
                            </button>
                        </div>
                        <div class="col-2 pb-2">
                            <button class="nav-link" id="nav-two" data-bs-toggle="tab" data-bs-target="#nav-2"
                                    type="button" role="tab" aria-controls="nav-2" aria-selected="false">Скрытые
                                водяные знаки
                            </button>
                        </div>
                        <div class="col-2 pb-2">
                            <button class="nav-link" id="nav-three" data-bs-toggle="tab" data-bs-target="#nav-3"
                                    type="button" role="tab" aria-controls="nav-3" aria-selected="false">Технология
                                цифровых
                                отпечатков
                            </button>
                        </div>
                        <div class="col-2 pb-2">
                            <button class="nav-link" id="nav-fore" data-bs-toggle="tab" data-bs-target="#nav-4"
                                    type="button" role="tab" aria-controls="nav-4" aria-selected="false">Распознавание
                                лиц
                            </button>
                        </div>
                        <div class="col-2 pb-2">
                            <button class="nav-link" id="nav-five" data-bs-toggle="tab" data-bs-target="#nav-5"
                                    type="button" role="tab" aria-controls="nav-5" aria-selected="false">Преобразование
                                речи
                                в текст
                            </button>
                        </div>
                        <div class="col-2 pb-2">
                            <button class="nav-link" id="nav-six" data-bs-toggle="tab" data-bs-target="#nav-6"
                                    type="button" role="tab" aria-controls="nav-6" aria-selected="false">Запрет съемных
                                носителей
                            </button>
                        </div>

                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-1" role="tabpanel" aria-labelledby="nav-one"
                         tabindex="0">
                        <div class="row my-5 py-4 bg-brand-gradient rounded d-flex align-items-center">
                            <div class="col col-xl-5 offset-xl-1">
                                <h3 class="text-white">Маркирование документов</h3>
                            </div>
                            <div class="col col-xl-5 d-flex align-items-center">
                                <p class="euro-medium text-white m-0">В системе можно проставить метки на
                                    конфиденциальные
                                    документы.
                                    Благодаря этому сотрудники не смогут их переслать по интернету, сохранить на съемный
                                    носитель или отправить на печать.</p>
                            </div>
                        </div>
                        <img src="<?php echo esc_url( get_theme_file_uri( 'build/images/marked_files_1.jpg' ) ); ?>"
                             alt="Демонстрация фото" class="img-fluid">
                    </div>
                    <div class="tab-pane fade" id="nav-2" role="tabpanel" aria-labelledby="nav-two" tabindex="0">
                        <div class="row my-5 py-4 bg-brand-gradient rounded d-flex align-items-center">
                            <div class="col col-xl-5 offset-xl-1">
                                <h3 class="text-white">Скрытые водяные знаки</h3>
                            </div>
                            <div class="col col-xl-5 d-flex align-items-center">
                                <p class="euro-medium text-white m-0">Комплекс незаметно маркирует скриншоты, что
                                    помогает идентифицировать сотрудника и выявить канал утечки информации, если снимок
                                    оказывается в открытых источниках.</p>
                            </div>
                        </div>
                        <img src="<?php echo esc_url( get_theme_file_uri( 'build/images/screen_mark_1.jpg' ) ); ?>"
                             alt="Демонстрация фото" class="img-fluid">
                    </div>
                    <div class="tab-pane fade" id="nav-3" role="tabpanel" aria-labelledby="nav-three" tabindex="0">
                        <div class="row my-5 py-4 bg-brand-gradient rounded d-flex align-items-center">
                            <div class="col col-xl-5 offset-xl-1">
                                <h3 class="text-white">Технология цифровых отпечатков</h3>
                            </div>
                            <div class="col col-xl-5 d-flex align-items-center">
                                <p class="euro-medium text-white m-0">Стахановец создает цифровые копии документов,
                                    которые выходят за периметр компании, и блокирует отправку документов с
                                    конфиденциальной информацией.</p>
                            </div>
                        </div>
                        <img src="<?php echo esc_url( get_theme_file_uri( 'build/images/shadow_copy_enable_1.jpg' ) ); ?>"
                             alt="Демонстрация фото" class="img-fluid">
                    </div>
                    <div class="tab-pane fade" id="nav-4" role="tabpanel" aria-labelledby="nav-four" tabindex="0">
                        <div class="row my-5 py-4 bg-brand-gradient rounded d-flex align-items-center">
                            <div class="col col-xl-5 offset-xl-1">
                                <h3 class="text-white">Распознавание лиц</h3>
                            </div>
                            <div class="col col-xl-5 d-flex align-items-center">
                                <p class="euro-medium text-white m-0">Опция позволяет идентифицировать каждого
                                    специалиста за рабочим местом и ретроспективно установить, кто работал за ноутбуком
                                    в конкретное время и какие операции совершал. Также можно автоматически выявлять
                                    случаи подмены владельца учетной записи.</p>
                            </div>
                        </div>
                        <img src="<?php echo esc_url( get_theme_file_uri( 'build/images/face_recognition_1.png' ) ); ?>"
                             alt="Демонстрация фото" class="img-fluid">
                    </div>
                    <div class="tab-pane fade" id="nav-5" role="tabpanel" aria-labelledby="nav-five" tabindex="0">
                        <div class="row my-5 py-4 bg-brand-gradient rounded d-flex align-items-center">
                            <div class="col col-xl-5 offset-xl-1">
                                <h3 class="text-white">Преобразование речи в текст</h3>
                            </div>
                            <div class="col col-xl-5 d-flex align-items-center">
                                <p class="euro-medium text-white m-0">Программа перехватывает разговоры персонала и
                                    расшифровывает их в текст. Если сотрудник во время диалога через мессенджеры
                                    произносит подозрительные слова, система распознает угрозы и мгновенно оповещает СБ,
                                    отправляя расшифрованный диалог.</p>
                            </div>
                        </div>
                        <img src="<?php echo esc_url( get_theme_file_uri( 'build/images/Транскрибация-разговора-в-текст.jpg' ) ); ?>"
                             alt="Демонстрация фото" class="img-fluid">
                    </div>
                    <div class="tab-pane fade" id="nav-6" role="tabpanel" aria-labelledby="nav-six" tabindex="0">
                        <div class="row my-5 py-4 bg-brand-gradient rounded d-flex align-items-center">
                            <div class="col col-xl-5 offset-xl-1">
                                <h3 class="text-white">Запрет съемных носителей</h3>
                            </div>
                            <div class="col col-xl-5 d-flex align-items-center">
                                <p class="euro-medium text-white m-0">ПО может блокировать использование
                                    флеш-накопителей, фотоаппаратов, смартфонов, съемных дисков с целью предотвращения
                                    копирования ценных сведений и утечки баз данных. Также можно создать список
                                    разрешенных устройств по Flash ID.</p>
                            </div>
                        </div>
                        <img src="<?php echo esc_url( get_theme_file_uri( 'build/images/Транскрибация-разговора-в-текст.jpg' ) ); ?>"
                             alt="Демонстрация фото" class="img-fluid">
                    </div>
                </div>
            </div>

            <!-- Кнопки -->
            <div class="row mt-5">
                <div class="col-12 col-sm-6 col-lg-3 offset-lg-3">
                    <a href="" class="stkh_action__link btn btn-primary fw-bold text-white rounded-1 p-13 w-100">
                        Попробовать бесплатно
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <a href="" class="stkh_action__link btn btn-outline-primary fw-bold rounded-1 p-13 w-100">
                        Онлайн-демо
                    </a>
                </div>
            </div>

        </div>
    </div>

    <!-- Аналитика поведения -->
    <div class="stkh-analytics my-5 pt-5">
        <div class="container">
            <h2 id="" class="euro-medium text-center display-6">Аналитика поведения пользователей (UBA)</h2>
            <p class="small-text text-center">Анализируйте поведение персонала с помощью мониторинга активности</p>
        </div>
        <div class="container mt-5">

            <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 row-gap-4 mb-3" id="pills-tab" role="tablist">

				<?php
				$dataA = [
					1 => [
						'title'   => 'Расчет персональных рисков',
						'content' => 'Софт анализирует поведение сотрудников
                                и определяет уровень потенциальной
                                опасности для работодателя. Возможный риск по каждому специалисту программа высчитывает
                                по десятибалльной шкале.',
						'image'   => 'https://by.stakhanovets.com/wp-content/uploads/2024/08/Анализатор-рисков-досье-сотрудника.jpg',
					],
					2 => [
						'title'   => 'Отслеживание вводимого текста',
						'content' => 'Система перехватывает любой вводимый
                            текст и диалоги в приложениях, мессенджерах, что позволяет предотвратить утечку информации в
                            Телеграм, WhatsApp, Skype, Microsoft Teams и др.',
						'image'   => 'https://by.stakhanovets.com/wp-content/uploads/2024/08/Чаты-и-звонки-перехват-сообщений-1.jpg',
					],
					3 => [
						'title'   => 'Веб-мониторинг',
						'content' => 'ПО показывает все запросы сотрудников
                            в Яндекс, Google и других поисковиках, мониторит посещенные сайты.',
						'image'   => 'https://by.stakhanovets.com/wp-content/uploads/2024/08/web_sites_1.png',
					],
					4 => [
						'title'   => 'Контроль использования CPU/GPU',
						'content' => 'Система составляет график нагрузки
                            центрального процессора и видеокарты
                            для выявления возможного майнинга или банального гейминга.',
						'image'   => 'https://by.stakhanovets.com/wp-content/uploads/2024/08/machine_time_1.png',
					],
					5 => [
						'title'   => 'Выявление нетипичного поведения',
						'content' => 'DLP-cистема фиксирует все отклонения в поведении персонала, формируя отчеты, в которых детально отражает активность и отклонения от средних значений.',
						'image'   => 'https://by.stakhanovets.com/wp-content/uploads/2024/08/graph_1.png',
					],
					6 => [
						'title'   => 'Граф связей',
						'content' => 'По анализу переписок, звонков и сообщений
                            в почте программа визуализирует, с кем
                            и как регулярно сотрудник взаимодействует
                            в компании и за ее пределами.',
						'image'   => 'https://by.stakhanovets.com/wp-content/uploads/2024/08/category_1.png',
					],

				];
				$a     = 1;
				while ( $a <= count( $dataA ) ): ?>

                    <div class="col" role="presentation">
                        <a class="h-100 w-100 shadow rounded text-decoration-none p-4 <?php echo $a == 1 ? ' active' : ''; ?>"
                           id="pills-a<?php echo $a; ?>-tab"
                           data-bs-toggle="pill"
                           data-bs-target="#pills-a<?php echo $a; ?>" type="button" role="tab"
                           aria-controls="pills-a<?php echo $a; ?>"
                           aria-selected="true">
                            <h3 class="display-7 euro-medium"><?php echo $dataA[ $a ]['title']; ?></h3>
                            <p class="mt-3 mb-0"><?php echo $dataA[ $a ]['content']; ?></p>
                        </a>
                    </div>
					<?php
					$a ++;
				endwhile;
				?>
            </div>

            <div class="tab-content mt-5" id="pills-tabContent">
				<?php
				$a = 1;
				while ( $a <= count( $dataA ) ): ?>

                    <div class="tab-pane fade <?php echo $a == 1 ? ' show active' : ''; ?>"
                         id="pills-a<?php echo $a; ?>" role="tabpanel"
                         aria-labelledby="pills-a<?php echo $a; ?>-tab" tabindex="0">
                        <div class=row">
                            <div class="col-12 col-xl-10 offset-xl-1">
                                <a class="text-decoration-none"
                                   data-fancybox="gallery"
                                   data-src="<?php echo $dataA[ $a ]['image']; ?>"
                                   data-caption="<?php echo $dataA[ $a ]['title']; ?>"
                                >
                                    <img src="<?php echo $dataA[ $a ]['image']; ?>"
                                         class="img-fluid border rounded border-primary" alt="Изображение">
                                </a>
                            </div>

                        </div>
                    </div>

					<?php
					$a ++;
				endwhile;
				?>
            </div>
        </div>

        <div class="container text-center mt-5">
            <a href="" class="btn btn-primary btn__test-online p-13 text-white rounded-1 fw-bold w-100">Тестировать
                онлайн</a>
        </div>

    </div>

    <!-- Предотвращение внутренних угроз -->
    <div class="stkh-predot my-5 pt-5">
        <div class="container">
            <h2 id="" class="euro-medium text-center display-6">Предотвращение внутренних угроз</h2>
            <p class="small-text text-center">Защитите данные компании от случайных и умышленных действий персонала</p>
        </div>
        <div class="container mt-5">

            <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 row-gap-4 mb-3" id="pills-tab2" role="tablist">

				<?php
				$dataB = [
					1 => [
						'title'   => 'Уведомления о нарушениях',
						'content' => 'В случае инцидента, комплекс мгновенно присылает руководителю или службе 
безопасности уведомление в окне браузера. 
Также можно настроить оповещения по SMS и электронной почте.',
						'image'   => 'https://by.stakhanovets.com/wp-content/uploads/2024/08/Босс-онлайн-1.jpg',
					],
					2 => [
						'title'   => 'Глобальный поиск',
						'content' => 'Отчет, который, в случае инцидента, помогает 
пошагово восстановить картину событий, 
отслеживая хронологию. По ключевым словам 
можно произвести поиск по всей базе данных 
текста и найти скриншоты активности сотрудника за конкретный период.',
						'image'   => 'https://by.stakhanovets.com/wp-content/uploads/2024/08/printer_1.png',
					],
					3 => [
						'title'   => 'Мониторинг файловых операций',
						'content' => 'Система отслеживает копирование, перенос, удаление файлов. Перехватывает документы, отправляемые через электронную почту, мессенджеры и социальные сети.',
						'image'   => 'https://by.stakhanovets.com/wp-content/uploads/2024/08/text_monitoring_1.png',
					],
					4 => [
						'title'   => 'Мониторинг буфера обмена',
						'content' => 'Система контролирует текст, файлы и изображения, вставленные из буфера обмена. Можно установить полный запрет на буфер обмена или только клавиши PrintScreen.',
						'image'   => 'https://by.stakhanovets.com/wp-content/uploads/2024/08/clipboard_1.jpg',
					],
					5 => [
						'title'   => '«Антифото» (Защита от фотографирования экрана)',
						'content' => 'ПО отслеживает поведение сотрудников: при попытке сделать фото, скрывает окно с ценной информацией, блокирует ПК и направляет уведомление Службе безопасности. Эта инновационная опция на основе нейросети в разы увеличивает защиту информации от утечек.',
						'image'   => 'https://by.stakhanovets.com/wp-content/uploads/2024/08/Файловые-операции.jpg',
					],
					6 => [
						'title'   => 'Контроль печати документов',
						'content' => 'ПО перехватывает конфиденциальные документы, отправленные на печать. Это позволяет вовремя обнаружить и остановить утечку информации.',
						'image'   => 'https://by.stakhanovets.com/wp-content/uploads/2024/08/antiphoto_1.jpg',
					],

				];
				$b     = 1;
				while ( $b <= count( $dataB ) ): ?>

                    <div class="col" role="presentation">
                        <a class="h-100 w-100 shadow rounded text-decoration-none p-4 <?php echo $b == 1 ? ' active' : ''; ?>"
                           id="pills-b<?php echo $b; ?>-tab"
                           data-bs-toggle="pill"
                           data-bs-target="#pills-b<?php echo $b; ?>" type="button" role="tab"
                           aria-controls="pills-b<?php echo $b; ?>"
                           aria-selected="true">
                            <h3 class="display-7 euro-medium"><?php echo $dataB[ $b ]['title']; ?></h3>
                            <p class="mt-3 mb-0"><?php echo $dataB[ $b ]['content']; ?></p>
                        </a>
                    </div>
					<?php
					$b ++;
				endwhile;
				?>
            </div>

            <div class="tab-content mt-5" id="pills-tabContentB">
				<?php
				$b = 1;
				while ( $b <= count( $dataB ) ): ?>

                    <div class="tab-pane fade <?php echo $b == 1 ? ' show active' : ''; ?>"
                         id="pills-b<?php echo $b; ?>" role="tabpanel"
                         aria-labelledby="pills-b<?php echo $b; ?>-tab" tabindex="0">
                        <div class=row">
                            <div class="col-12 col-xl-10 offset-xl-1">
                                <a class="text-decoration-none"
                                   data-fancybox="gallery"
                                   data-src="<?php echo $dataB[ $b ]['image']; ?>"
                                   data-caption="<?php echo $dataB[ $b ]['title']; ?>"
                                >
                                    <img src="<?php echo $dataB[ $b ]['image']; ?>"
                                         class="img-fluid border rounded border-primary" alt="Изображение">
                                </a>

                            </div>
                        </div>
                    </div>

					<?php
					$b ++;
				endwhile;
				?>
            </div>
        </div>

        <div class="container text-center mt-5">
            <a href="" class="btn btn-primary p-13 text-white rounded-1 fw-bold px-5 ">Скачать</a>
        </div>

    </div>

    <!-- Непрерывный мониторинг -->
    <div class="stkh-monitor my-5 pt-5">
        <div class="container">
            <h2 id="" class="euro-medium text-center display-6">Непрерывный мониторинг данных</h2>
            <p class="small-text text-center">Обеспечьте надежную защиту корпоративных данных, отслеживая коммуникацию,
                местонахождение и состояние сотрудников.</p>
        </div>
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 col-xl-10 col-xxl-8 offset-xl-1 offset-xxl-2">
                    <div class="row row-cols-1 row-cols-md-2 row-gap-4 mb-3" id="pills-tab2" role="tablist">

						<?php
						$dataC = [
							1 => [
								'title'   => 'Мониторинг мессенджеров, почты и соцсетей',
								'content' => 'Система фиксирует начало и окончание 
рабочего дня, переработки, прогулы. 
Отделяет продуктивную активность 
от неэффективной, ведя учет фактически отработанного времени, и показывает неравномерную загрузку.',
								'image'   => 'https://by.stakhanovets.com/wp-content/uploads/2024/08/user_time_activity_1.png',
							],
							2 => [
								'title'   => 'Геолокация',
								'content' => 'Стахановец устанавливает точное местонахождение сотрудника даже при включенном VPN. Система опрашивает внутренние и внешние IP-адреса, сверяя данные с GPS, беспроводных точек доступа и вышек сотовой связи.',
								'image'   => 'https://by.stakhanovets.com/wp-content/uploads/2024/08/Геолокация.jpg',
							],
							3 => [
								'title'   => 'Клавиатурный почерк',
								'content' => 'Опция помогает выявить сотрудников в алкогольном и наркотическом опьянении, состоянии стресса и паники, а также узнавать авторов конкретных документов по манере набора текста.',
								'image'   => 'https://by.stakhanovets.com/wp-content/uploads/2024/08/handwriter_keyboard_1.jpg',
							],
							4 => [
								'title'   => 'Краулер',
								'content' => 'Позволяет провести сквозной поиск по всем информационным активам компании и узнать, что хранится на компьютерах работников. Краулер выявляет также зашифрованные архивы под видом нейтральных документов.',
								'image'   => 'https://by.stakhanovets.com/wp-content/uploads/2024/08/crawler_3.jpg',
							],

						];
						$c     = 1;
						while ( $c <= count( $dataC ) ): ?>

                            <div class="col" role="presentation">
                                <a class="h-100 w-100 shadow rounded text-decoration-none p-4 <?php echo $c == 1 ? ' active' : ''; ?>"
                                   id="pills-c<?php echo $c; ?>-tab"
                                   data-bs-toggle="pill"
                                   data-bs-target="#pills-c<?php echo $c; ?>" type="button" role="tab"
                                   aria-controls="pills-c<?php echo $c; ?>"
                                   aria-selected="true">
                                    <h3 class="display-7 euro-medium"><?php echo $dataC[ $c ]['title']; ?></h3>
                                    <p class="mt-3 mb-0"><?php echo $dataC[ $c ]['content']; ?></p>
                                </a>
                            </div>
							<?php
							$c ++;
						endwhile;
						?>
                    </div>

                    <div class="tab-content mt-5" id="pills-tabContentC">
						<?php
						$c = 1;
						while ( $c <= count( $dataC ) ): ?>

                            <div class="tab-pane fade <?php echo $c == 1 ? ' show active' : ''; ?>"
                                 id="pills-c<?php echo $c; ?>" role="tabpanel"
                                 aria-labelledby="pills-c<?php echo $c; ?>-tab" tabindex="0">
                                <a class="text-decoration-none"
                                   data-fancybox="gallery"
                                   data-src="<?php echo $dataC[ $c ]['image']; ?>"
                                   data-caption="<?php echo $dataC[ $c ]['title']; ?>"
                                >
                                    <img src="<?php echo $dataC[ $c ]['image']; ?>"
                                         class="img-fluid border rounded border-primary" alt="Изображение">
                                </a>
                            </div>

							<?php
							$c ++;
						endwhile;
						?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Мониторинг сотрудников -->
    <div class="stkh-monitoring my-5 pt-5">
        <div class="container">
            <h2 id="" class="euro-medium text-center display-6">Мониторинг сотрудников</h2>
            <p class="small-text text-center">Контролируйте персонал, чтобы повысить продуктивность команды,
                оптимизировать рабочие процессы и увеличить производительность бизнеса.</p>
        </div>
        <div class="container mt-5">
            <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 row-gap-4 mb-3" id="pills-tab2" role="tablist">

				<?php
				$dataD = [
					1 => [
						'title'   => 'Учет рабочего времени',
						'content' => 'Система фиксирует начало и окончание рабочего дня, переработки, прогулы. Отделяет продуктивную активность от неэффективной, ведя учет фактически отработанного времени, и показывает неравномерную загрузку.',
						'image'   => 'https://by.stakhanovets.com/wp-content/uploads/2024/08/Табель-УРВ.jpg',
					],
					2 => [
						'title'   => 'Скриншоты',
						'content' => 'Программа делает снимки экрана рабочего компьютера согласно заданному интервалу, 
что позволяет детально просмотреть работу каждого специалиста, зафиксировать инциденты и сэкономить место в хранилище. При необходимости снимки можно 
делать ежесекундно.',
						'image'   => 'https://by.stakhanovets.com/wp-content/uploads/2024/08/Снимки-экранов.png',
					],
					3 => [
						'title'   => 'Отклонения в активности',
						'content' => 'Комплекс по объективным критериям сравниваетспециалистов, подразделения и филиалы. Поэтому внедрение DLP-системы позволяет узнать, сколько времени персонал проводит в интернете и рабочих программах.',
						'image'   => 'https://by.stakhanovets.com/wp-content/uploads/2024/08/Захват-экрана-пользователя.jpg',
					],
					4 => [
						'title'   => 'Карта рабочего дня',
						'content' => 'Отчет детально отражает на что ежедневно уходит время каждого сотрудника: на работу, простой или развлекательные ресурсы.',
						'image'   => 'https://by.stakhanovets.com/wp-content/uploads/2024/08/Лента-активности.jpg',
					],
					5 => [
						'title'   => 'Онлайн-наблюдение экрана',
						'content' => 'Руководитель может подключаться к монитору сотрудников и контролировать активность каждого подчиненного в реальном времени.',
						'image'   => 'https://by.stakhanovets.com/wp-content/uploads/2024/08/user_analitycs_deviation_1.png',
					],
				];
				$d     = 1;
				while ( $d <= count( $dataD ) ): ?>

                    <div class="col <?php echo $d == 4 ? ' offset-xl-2' : ''; ?>" role="presentation">
                        <a class="h-100 w-100 shadow rounded text-decoration-none p-4 <?php echo $d == 1 ? ' active' : ''; ?>"
                           id="pills-d<?php echo $d; ?>-tab"
                           data-bs-toggle="pill"
                           data-bs-target="#pills-d<?php echo $d; ?>" type="button" role="tab"
                           aria-controls="pills-d<?php echo $d; ?>"
                           aria-selected="true">
                            <h3 class="display-7 euro-medium"><?php echo $dataD[ $d ]['title']; ?></h3>
                            <p class="mt-3 mb-0"><?php echo $dataD[ $d ]['content']; ?></p>
                        </a>
                    </div>
					<?php
					$d ++;
				endwhile;
				?>
            </div>

            <div class="tab-content mt-5" id="pills-tabContentD">
				<?php
				$d = 1;
				while ( $d <= count( $dataD ) ): ?>

                    <div class="tab-pane fade <?php echo $d == 1 ? ' show active' : ''; ?>"
                         id="pills-d<?php echo $d; ?>" role="tabpanel"
                         aria-labelledby="pills-d<?php echo $d; ?>-tab" tabindex="0">
                        <div class=row">
                            <div class="col-12 col-xl-10 offset-xl-1">
                                <a class="text-decoration-none"
                                   data-fancybox="gallery"
                                   data-src="<?php echo $dataD[ $d ]['image']; ?>"
                                   data-caption="<?php echo $dataD[ $d ]['title']; ?>"
                                >
                                    <img src="<?php echo $dataD[ $d ]['image']; ?>"
                                         class="img-fluid border rounded border-primary" alt="Изображение">
                                </a>
                            </div>
                        </div>
                    </div>

					<?php
					$d ++;
				endwhile;
				?>
            </div>

        </div>
    </div>

    <!-- Рассчитать стоимость -->
    <div class="stkh-price my-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 d-flex align-items-center">
                    <div class="bg-primary stkh-price__bg p-3 p-lg-4 p-xl-5 rounded">
                        <p class="m-0 text-white h4 px-0 px-xl-5">
                            <span class="ps-xl-4 d-inline-block">Чтобы получить информацию
                            по стоимости и возможностям комплекса «Стахановец», пожалуйста, заполните форму</span>
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-xl-4 offset-xl-1">
                    <h2 class="euro-medium h3">Рассчитать стоимость</h2>
                    <p class="lead text-danger">@TODO создать отдельную форму в Битрикс</p>
                    <script data-b24-form="inline/75/si2z9c" data-skip-moving="true">(function (w, d, u) {
                            var s = d.createElement('script');
                            s.async = true;
                            s.src = u + '?' + (Date.now() / 180000 | 0);
                            var h = d.getElementsByTagName('script')[0];
                            h.parentNode.insertBefore(s, h);
                        })(window, document, 'https://crm.stakhanovets.ru/upload/crm/form/loader_75_si2z9c.js');</script>
					<?php //echo do_shortcode( '[contact-form-7 id="0a92d7b" title="Контактная форма 1"]' ) ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Блок с партнёрами -->
    <div class="stkh-partner my-5">
        <div class="container">
            <div class="row row-gap-4 stkh-partner__bg rounded py-5">
                <div class="col-12 col-md-5 d-flex align-items-stretch offset-md-1">
                    <div class="bg-white rounded p-4 w-100">
                        <h2 class="fw-bold display-7 mb-4">Официальный дистрибьютор</h2>
                        <div class="row">
                            <div class="col">
                                <p class="mb-2">ООО «Аксофт Интернейшнл»</p>
                                <p class="mb-2">+7 (499) 110-64-10</p>
                                <p class="mb-2">sales.belarus@axoftglobal.com</p>
                            </div>
                            <div class="col-auto d-flex align-items-end">

                                <a href=""
                                   target="_parent" rel="noopener nofollow">

                                    <img src="https://stakhanovets.ru/wp-content/uploads/2024/07/axsoft-logo.png"
                                         alt="Logo" class="img-fluid" width="150">

                                </a>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-5 d-flex align-items-stretch">
                    <div class="bg-white rounded p-4 w-100">
                        <h2 class="fw-bold display-7 mb-4">Доверенный партнёр</h2>
                        <div class="row">
                            <div class="col">
                                <p class="mb-2">«NextNetwork»</p>
                                <p class="mb-2">8 (044) 794 77 31</p>
                                <p class="mb-2">info@nextnet.by</p>
                            </div>
                            <div class="col-auto d-flex align-items-end">

                                <a href=""
                                   target="_parent" rel="noopener nofollow">

                                    <img src="https://stakhanovets.ru/wp-content/uploads/2024/07/logo-nekt-netvork.svg"
                                         alt="Logo" class="img-fluid" width="150">

                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Отзывы и публикации -->
<?php get_template_part( 'template-parts/template', 'reviews' ); ?>

    <!-- СМИ о нас -->
<?php get_template_part( 'template-parts/template', 'smi' ); ?>

    <!-- Вопрос-ответ -->
<?php get_template_part( 'template-parts/template', 'faq' ); ?>

    <!-- Модули ES -->
<?php stakhanovets_es_module(); ?>


    <script type="module">
        import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.mjs';

        // init Swiper:
        const swiperMarquee = new Swiper('.marqueeSwiper', {
            // Optional parameters
            slidesPerView: 3,
            spaceBetween: 30,
            centeredSlides: true,
            speed: 6000,
            autoplay: {
                delay: 1,
            },
            loop: true,
            allowTouchMove: false,
            disableOnInteraction: true
        });


    </script>

<?php
get_footer();
