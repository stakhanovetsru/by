<?php
$calc_cta_text    = get_query_var( 'calc_cta_text' );
$calc_cta_url     = get_query_var( 'calc_cta_url' );
$calc_cta_isblank = get_query_var( 'calc_cta_isblank' );
?>
<script src="https://stakhanovets.ru/rescalc/rescalc.js" id='script-rescalc-js'></script>
<script>
    function CalculateAll() {
        var rescalc = new ResCalc();
        var numOnlines = document.getElementById("num_onlines");
        const divResults = document.getElementById("results");

        const validate = rescalc.Calc();

        if (validate === undefined) {
            divResults.style.display = "block";
            divResults.scrollIntoView({behavior: "smooth", block: "start", inline: "start"});
        } else {
            divResults.style.display = "none";
        }
    }

    function RefreshAll() {
        document.getElementById('results').style.display = 'none';
        document.getElementById('calcform').scrollIntoView({behavior: "smooth", block: "start", inline: "start"});
    }
</script>

<form class="stakh__calc" id="calcform" name="calcform">

    <div class="stakh__calc_row">
        <div class="stakh__calc_left stakh__calc_left_top">
            <label class="stakh__calc_caption"
                   for="sql_shared"><?php esc_html_e( 'Расположение SQL-сервера', 'sth' ); ?></label>
            <div class="stakh__switch">
                <label class="checkbox-ios" for="sql_shared">
                    <span class="stakh__switch_label"><?php esc_html_e( 'На одной машине с сервером комплекса', 'sth' ); ?></span>
                    <input type="checkbox" name="sql_shared" id="sql_shared" checked>
                    <span class="checkbox-ios-switch"></span>
                </label>
            </div>
            <div class="stakh__calc_tl">
                <div class="stakh__input">
                    <div class="stakh__label">
                        <div class="stakh__label_wrap">
                            <label for="num_onlines"><?php esc_html_e( 'Количество клиентов', 'sth' ); ?></label>
                            <div data-type="stakh-tip">
                                <div>Укажите планируемое количество<br>
                                    клиентов в организации для наблюдения
                                </div>
                            </div>
                        </div>
                    </div>
                    <input name="num_onlines" id="num_onlines" type="text" value="500">
                </div>
                <div class="stakh__input">
                    <div class="stakh__label">
                        <div class="stakh__label_wrap">
                            <label for="onlines_sshots_interval"><?php esc_html_e( 'Интервал съема скриншотов (сек)', 'sth' ); ?></label>
                            <div data-type="stakh-tip">
                                <div>Укажите временной интервал<br>
                                    через который будет производиться<br>
                                    съемка экранов на клиентах<
                                </div>
                            </div>
                        </div>
                    </div>
                    <input name="onlines_sshots_interval" id="onlines_sshots_interval" type="text" value="300">
                </div>
            </div>
            <div class="stakh__switch">
                <label class="checkbox-ios" for="onlines_audio">
                    <span class="stakh__switch_label"><?php esc_html_e( 'Вести постоянную аудиозапись (передача на сервер)', 'sth' ); ?></span>
                    <input type="checkbox" name="onlines_audio" id="onlines_audio">
                    <span class="checkbox-ios-switch"></span>
                </label>
            </div>
        </div>

        <div class="stakh__calc_right stakh__calc_right_top">
            <div class="stakh__calc_tr">
                <div class="stakh__input">
                    <div class="stakh__label">
                        <div class="stakh__label_wrap">
                            <label for="avg_sshot_size"><?php esc_html_e( 'Средний размер скриншота (КБ)', 'sth' ); ?></label>
                            <div data-type="stakh-tip">
                                <div>Зависит от качества (минимум 25 КБ)</div>
                            </div>
                        </div>
                    </div>
                    <input name="avg_sshot_size" id="avg_sshot_size" type="text" value="75">
                </div>
                <div class="stakh__input">
                    <div class="stakh__label">
                        <div class="stakh__label_wrap">
                            <label for="retro"><?php esc_html_e( 'Ретроспектива хранения (дней)', 'sth' ); ?></label>
                            <div data-type="stakh-tip">
                                <div>Укажите интервал хранения<br>
                                    истории записываемых действий<br>
                                    в базе данных
                                </div>
                            </div>
                        </div>
                    </div>
                    <input name="retro" id="retro" type="text" value="30">
                </div>
            </div>

            <div class="stakh__calc_tr">
                <div class="stakh__input">
                    <div class="stakh__label">
                        <div class="stakh__label_wrap">
                            <label for="avg_sc_size"><?php esc_html_e( 'Средний объем файлов теневых копий (МБ)', 'sth' ); ?></label>
                            <div data-type="stakh-tip">
                                <div>Укажите примерный средний объем<br>
                                    отправляемых в Интернет/e-mail/flash<br>
                                    файлов на человека в день.
                                </div>
                            </div>
                        </div>
                    </div>
                    <input name="avg_sc_size" id="avg_sc_size" type="text" value="3">
                </div>

                <div class="fields-calc__item stakh__input">
                    <div class="stakh__label">
                        <div class="stakh__label_wrap">
                            <label class="fields-calc__label"
                                   for="workdays"><?php esc_html_e( 'Рабочих дней в неделе', 'sth' ); ?></label>
                            <div data-type="stakh-tip">
                                <div>Укажите количество <br>
                                    рабочих дней в неделе
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item-select site-form__input stakh__select">
                        <div class="item-select__current">5</div>
                        <div class="item-select__list">
                            <div class="item-select__option" data-value="4">4</div>
                            <div class="item-select__option" data-value="5">5</div>
                            <div class="item-select__option" data-value="6">6</div>
                            <div class="item-select__option" data-value="7">7</div>
                        </div>
                        <input type="hidden" name="workdays" id="workdays" value="5" class="item-select__hidden">
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="stakh__calc_row stakh__calc_row_lower">
        <div class="stakh__calc_left">

            <div class="stakh-collapsed" data-type="stakh-collapsed">
                <button type="button" class="stakh-btn-collapsed" data-type="stakh-btn-collapsed">
                    <span><?php esc_html_e( 'Отложенные клиенты', 'sth' ); ?></span>
					<?php get_template_part( "/template-parts/svg/dropdown-arrow" ) ?>
                </button>

                <div class="stakh-collapsed-content" data-type="stakh-collapsed-content">
                    <div class="stakh__calc_subtitle">Отложенные клиенты</div>
                    <span>Накапливают данные локально и передают на сервер только по запросу</span>
                    <div class="stakh__calc_tl">
                        <div class="stakh__input">
                            <div class="stakh__label">
                                <div class="stakh__label_wrap">
                                    <label for="num_pp"><?php esc_html_e( 'Количество клиентов', 'sth' ); ?></label>
                                    <div data-type="stakh-tip">
                                        <div>Отложенные клиенты - работающие в режиме<br>
                                            отложенного мониторинга, накапливают данные<br> локально и передают их на
                                            сервер
                                            <br>только по запросу (при построении отчетов).
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input name="num_pp" id="num_pp" type="text" value="0">
                        </div>
                        <div class="stakh__input">
                            <div class="stakh__label">
                                <div class="stakh__label_wrap">
                                    <label for="pp_sshots_interval"><?php esc_html_e( 'Интервал съема скриншотов (сек)', 'sth' ); ?></label>
                                    <div data-type="stakh-tip">
                                        <div>Укажите временной интервал<br>
                                            через который будет производиться<br>
                                            съемка экранов на клиентах
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input name="pp_sshots_interval" id="pp_sshots_interval" type="text" value="300">
                        </div>
                    </div>
                    <div class="stakh__switch">
                        <label class="checkbox-ios" for="pp_audio">
                            <span class="stakh__switch_label"><?php esc_html_e( 'Вести постоянную аудиозапись (передача на сервер)', 'sth' ); ?></span>
                            <input type="checkbox" name="pp_audio" id="pp_audio">
                            <span class="checkbox-ios-switch"></span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="stakh__calc_right">
        </div>
    </div>

    <div class="stakh__calc_row stakh__calc_submit">
        <input class="ver__btn" onclick="CalculateAll()" type="button"
               value="<?php esc_html_e( 'Рассчитать', 'sth' ); ?>"/>
    </div>

    <section id="results" style="display: none;">

        <div class="stakh__calc_subtitle stakh__calc_results"><?php esc_html_e( 'Итоговый расчет', 'sth' ); ?>:</div>

        <div class="stakh__calc_res">
            <div class="stakh__input stakh__input_readonly">
                <div class="stakh__label">
                    <div class="stakh__label_wrap">
                        <label for="res_onlines_traffic"><?php _e( 'Трафик от одного онлайн-клиента к серверу', 'sth' ); ?></label>
                        <div data-type="stakh-tip">
                            <div>Подсказка</div>
                        </div>
                    </div>
                </div>
                <input readonly name="res_onlines_traffic" id="res_onlines_traffic" type="text" value="">
            </div>

            <div class="stakh__input stakh__input_readonly">
                <div class="stakh__label">
                    <div class="stakh__label_wrap">
                        <label for="res_pp_traffic"><?php _e( 'Трафик от одного отложенного-клиента к серверу', 'sth' ); ?></label>
                        <div data-type="stakh-tip">
                            <div>Подсказка</div>
                        </div>
                    </div>
                </div>
                <input readonly name="res_pp_traffic" id="res_pp_traffic" type="text" value="">
            </div>

            <div class="stakh__input stakh__input_readonly">
                <div class="stakh__label">
                    <div class="stakh__label_wrap">
                        <label for="res_summary_traffic"><?php esc_html_e( 'Суммарный трафик от всех клиентов к серверу', 'sth' ); ?></label>
                        <div data-type="stakh-tip">
                            <div>Подсказка</div>
                        </div>
                    </div>
                </div>
                <input readonly name="res_summary_traffic" id="res_summary_traffic" type="text" value="">
            </div>

            <div class="stakh__input stakh__input_readonly">
                <div class="stakh__label">
                    <div class="stakh__label_wrap">
                        <label for="res_pp_space"><?php esc_html_e( 'Необходимое место на отложенных машинах', 'sth' ); ?></label>
                        <div data-type="stakh-tip">
                            <div>Подсказка</div>
                        </div>
                    </div>
                </div>
                <input readonly name="res_pp_space" id="res_pp_space" type="text" value="">
            </div>

            <div class="stakh__input stakh__input_readonly">
                <div class="stakh__label">
                    <div class="stakh__label_wrap">
                        <label for="res_server_space"><?php esc_html_e( 'Необходимое место на сервере для теневых копий', 'sth' ); ?></label>
                        <div data-type="stakh-tip">
                            <div>Подсказка</div>
                        </div>
                    </div>
                </div>
                <input readonly name="res_server_space" id="res_server_space" type="text" value="">
            </div>

            <div class="stakh__input stakh__input_readonly">
                <div class="stakh__label">
                    <div class="stakh__label_wrap">
                        <label for="res_server_drive"><?php esc_html_e( 'Тип диска на сервере для теневых копий', 'sth' ); ?></label>
                        <div data-type="stakh-tip">
                            <div>Подсказка</div>
                        </div>
                    </div>
                </div>
                <input readonly name="res_server_drive" id="res_server_drive" type="text" value="">
            </div>

            <div class="stakh__input stakh__input_readonly">
                <div class="stakh__label">
                    <div class="stakh__label_wrap">
                        <label for="res_sql_space"><?php esc_html_e( 'Ориентировочный размер БД SQL', 'sth' ); ?></label>
                        <div data-type="stakh-tip">
                            <div>Подсказка</div>
                        </div>
                    </div>
                </div>
                <input readonly name="res_sql_space" id="res_sql_space" type="text" value="">
            </div>

            <div class="stakh__input stakh__input_readonly">
                <div class="stakh__label">
                    <div class="stakh__label_wrap">
                        <label for="res_sql_drive"><?php esc_html_e( 'Рекомендуемый тип диска для БД SQL', 'sth' ); ?></label>
                        <div data-type="stakh-tip">
                            <div>Подсказка</div>
                        </div>
                    </div>
                </div>
                <input readonly name="res_sql_drive" id="res_sql_drive" type="text" value="">
            </div>

            <div class="stakh__input stakh__input_readonly">
                <div class="stakh__label">
                    <div class="stakh__label_wrap">
                        <label for="res_sql_edition"><?php esc_html_e( 'Рекомендуемая редакция SQL-сервера', 'sth' ); ?></label>
                        <div data-type="stakh-tip">
                            <div>Подсказка</div>
                        </div>
                    </div>
                </div>
                <input readonly name="res_sql_edition" id="res_sql_edition" type="text" value="">
            </div>

            <div class="stakh__input stakh__input_readonly">
                <div class="stakh__label">
                    <div class="stakh__label_wrap">
                        <label for="res_server_cores"><?php esc_html_e( 'Рекомендуемое кол-во ядер CPU-сервера', 'sth' ); ?></label>
                        <div data-type="stakh-tip">
                            <div>Подсказка</div>
                        </div>
                    </div>
                </div>
                <input readonly name="res_server_cores" id="res_server_cores" type="text" value="">
            </div>

            <div class="stakh__input stakh__input_readonly">
                <div class="stakh__label">
                    <div class="stakh__label_wrap">
                        <label for="res_server_ram"><?php esc_html_e( 'Рекомендуемый объем RAM сервера (ГБ)', 'sth' ); ?></label>
                        <div data-type="stakh-tip">
                            <div>Подсказка</div>
                        </div>
                    </div>
                </div>
                <input readonly name="res_server_ram" id="res_server_ram" type="text" value="">
            </div>

            <div class="stakh__input stakh__input_readonly" id="res_sql_cores" style="display: none;">
                <div class="stakh__label">
                    <div class="stakh__label_wrap">
                        <label><?php esc_html_e( 'Рекомендуемое кол-во ядер CPU SQL-сервера', 'sth' ); ?></label>
                        <div data-type="stakh-tip">
                            <div>Подсказка</div>
                        </div>
                    </div>
                </div>
                <input readonly name="res_sql_cores" type="text" value="">
            </div>

            <div class="stakh__input stakh__input_readonly" id="res_sql_ram" style="display: none;">
                <div class="stakh__label">
                    <div class="stakh__label_wrap">
                        <label><?php esc_html_e( 'Рекомендуемый объем RAM SQL-сервера (ГБ)', 'sth' ); ?></label>
                        <div data-type="stakh-tip">
                            <div>Подсказка</div>
                        </div>
                    </div>
                </div>
                <input readonly name="res_sql_ram" type="text" value="">
            </div>
        </div>

        <div class="stakh__calc_row stakh__calc_refresh">
            <input class="ver__btn" onclick="RefreshAll()" type="button"
                   value="<?php esc_html_e( 'Скрыть', 'sth' ); ?>"/>
			<?php if ( strlen( $calc_cta_text ) ) { ?>
                <a target="<?= isset( $calc_cta_isblank ) ? '_blank' : '_self' ?>" rel="nofollow noopener noreferrer"
                   href="<?= $calc_cta_url ?>"
                   class="btn-site btn-bg index-video__btn pak__main_cta dlp__main_cta dlp__secondary_cta">
                    <span><?= $calc_cta_text ?></span>
                </a>
			<?php } ?>
        </div>

    </section>
</form>