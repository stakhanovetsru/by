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

<form id="calcform" class="stkh-calc" name="calcform">

    <div class="row row-gap-5">
        <div class="col-12 col-md-6">
            <div class="px-4 px-xl-5">
                <h2
                        class="display-7"><?php esc_html_e( 'Онлайн клиенты', 'sth' ); ?></h2>
                <div class="row">
                    <div class="col-12 col-xxl-6 py-2 py-xxl-4">
                        <label class="form-label"
                               for="num_onlines"><?php esc_html_e( 'Количество клиентов', 'sth' ); ?></label>
                        <input class="form-control form-control-lg rounded-1" name="num_onlines"
                               id="num_onlines"
                               type="text"
                               value="500">
                    </div>
                    <div class="col-12 col-xxl-6 py-2 py-xxl-4">
                        <label class="form-label"
                               for="onlines_sshots_interval"><?php esc_html_e( 'Интервал съема скриншотов (сек)', 'sth' ); ?></label>
                        <input class="form-control form-control-lg rounded-1" name="onlines_sshots_interval"
                               id="onlines_sshots_interval" type="text" value="300">
                    </div>
                    <div class="col-12">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="onlines_audio"
                                   id="onlines_audio">
                            <label class="form-check-label"
                                   for="onlines_audio"><?php esc_html_e( 'Вести постоянную аудиозапись (передача на сервер)', 'sth' ); ?></label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="px-4 px-xl-5">
                <h2 class="display-7">
					<?php esc_html_e( 'Отложенные клиенты', 'sth' ); ?></h2>
                <div class="row">
                    <div class="col-12 col-xxl-6 py-2 py-xxl-4">
                        <label class="form-label"
                               for="num_pp"><?php esc_html_e( 'Количество клиентов', 'sth' ); ?><sup
                                    class="fields-calc__sup">1</sup></label>
                        <input class="form-control form-control-lg rounded-1" name="num_pp" id="num_pp"
                               type="text"
                               value="0">
                    </div>
                    <div class="col-12 col-xxl-6 py-2 py-xxl-4">
                        <label class="form-label"
                               for="pp_sshots_interval"><?php esc_html_e( 'Интервал съема скриншотов (сек)', 'sth' ); ?></label>
                        <input class="form-control form-control-lg rounded-1" name="pp_sshots_interval"
                               id="pp_sshots_interval"
                               type="text" value="300">
                    </div>
                    <div class="col-12">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="pp_audio" id="pp_audio">
                            <label class="form-check-label"
                                   for="pp_audio"><?php esc_html_e( 'Вести постоянную аудиозапись (передача на сервер)', 'sth' ); ?></label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 my-4">
            <div class="px-4 px-xl-5 bg-body-tertiary py-4 rounded">
                <div class="row row-gap-4 row-cols-1 row-cols-xl-5">
                    <div class="col d-flex flex-column">
                        <label class="fields-calc__label" for="avg_sshot_size">
							<?php esc_html_e( 'Средний размер скриншота (КБ)', 'sth' ); ?>
                            <span
                                    class="small d-block"><?php esc_html_e( 'Зависит от качества (минимум 25 КБ)', 'sth' ); ?></span>
                        </label>
                        <input class="form-control form-control-lg rounded-1 mt-auto" name="avg_sshot_size"
                               id="avg_sshot_size"
                               type="text" value="75">
                    </div>
                    <div class="col d-flex flex-column">
                        <label class="fields-calc__label"
                               for="avg_sc_size"><?php esc_html_e( 'Средний объем файлов теневых копий исходяшего трафика (МБ)', 'sth' ); ?>
                            <sup class="fields-calc__sup">2</sup></label>
                        <input class="form-control form-control-lg rounded-1 mt-auto" name="avg_sc_size"
                               id="avg_sc_size" type="text"
                               value="3">
                    </div>
                    <div class="col d-flex flex-column">
                        <label class="fields-calc__label"
                               for="retro"><?php esc_html_e( 'Ретроспектива хранения (дней)', 'sth' ); ?></label>
                        <input class="form-control form-control-lg rounded-1 mt-auto" name="retro"
                               id="retro" type="text" value="30">
                    </div>
                    <div class="col d-flex flex-column">
                        <label class="fields-calc__label"
                               for="workdays"><?php esc_html_e( 'Рабочих дней в неделе', 'sth' ); ?></label>

                        <div class="item-select site-form__input mt-auto">
                            <select class="form-select form-select-lg" aria-label="Large select">
                                <option value="4" data-value="4">4</option>
                                <option value="5" data-value="5" selected>5</option>
                                <option value="6" data-value="6">6</option>
                                <option value="7" data-value="7">7</option>
                            </select>
                            <input type="hidden" name="workdays" id="workdays" value="5"
                                   class="item-select__hidden">
                        </div>
                    </div>
                    <div class="col d-flex flex-column">
                        <label class="fields-calc__label"
                               for="sql_shared"><?php esc_html_e( 'Расположение SQL-сервера', 'sth' ); ?></label>
                        <div class="form-check form-switch mt-auto">
                            <input type="checkbox" class="form-check-input" name="sql_shared"
                                   id="sql_shared" role="switch" checked>
                            <label class="form-check-label"
                                   for="sql_shared"><?php esc_html_e( 'На одной машине с сервером комплекса', 'sth' ); ?></label>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center my-5">
                    <input class="btn btn-primary btn-lg text-white rounded-1" onclick="CalculateAll()"
                           type="button"
                           value="<?php esc_html_e( 'Рассчитать', 'sth' ); ?>"/>
                </div>
                <div class="border rounded-1 p-4 bg-white">
                    <div class="row">
                        <div class="col-12 col-sm-6 border-end">
                            <p class="small px-2 m-0"><sup class="fields-calc__sup">1</sup><span>Отложенные клиенты - работающие в режиме отложенного мониторинга, они накапливают данные локально и передают на сервер только по запросу (при построении соотв. отчета).</span>
                            </p>
                        </div>
                        <div class="col-12 col-sm-6">
                            <p class="small px-3 m-0"><sup class="fields-calc__sup">2</sup><span>Укажите примерный средний объем отправляемых в Интернет/e-mail/flash файлов на человека в день.</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="" id="results" style="display: none;">
        <div class="row">
            <div class="col-12 my-5">
                <h2 class="display-6 px-4 px-xl-5"><?php esc_html_e( 'Итоговый расчет', 'sth' ); ?>
                    :
                </h2>
            </div>
            <div class="col-12">
                <div class="p-4 p-xl-5 bg-body-tertiary rounded">
                    <div class="row row-gap-4 stkh-calc-results">
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <label class="form-label"
                                   for="res_onlines_traffic"><?php _e( 'Трафик от одного онлайн-клиента к серверу', 'sth' ); ?></label>
                            <input class="form-control form-control-lg rounded-1 mt-auto" readonly
                                   name="res_onlines_traffic"
                                   id="res_onlines_traffic" type="text" value="">
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <label class="form-label"
                                   for="res_pp_traffic"><?php _e( 'Трафик от одного отложенного-клиента к серверу', 'sth' ); ?></label>
                            <input class="form-control form-control-lg rounded-1 mt-auto" readonly
                                   name="res_pp_traffic"
                                   id="res_pp_traffic"
                                   type="text" value="">
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <label class="form-label"
                                   for="res_summary_traffic"><?php esc_html_e( 'Суммарный трафик от всех клиентов к серверу', 'sth' ); ?></label>
                            <input class="form-control form-control-lg rounded-1 mt-auto" readonly
                                   name="res_summary_traffic"
                                   id="res_summary_traffic" type="text" value="">
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <label class="form-label"
                                   for="res_pp_space"><?php esc_html_e( 'Необходимое место на отложенных машинах', 'sth' ); ?></label>
                            <input class="form-control form-control-lg rounded-1 mt-auto" readonly
                                   name="res_pp_space"
                                   id="res_pp_space"
                                   type="text" value="">
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <label class="form-label"
                                   for="res_server_space"><?php esc_html_e( 'Необходимое место на сервере для теневых копий', 'sth' ); ?></label>
                            <input class="form-control form-control-lg rounded-1 mt-auto" readonly
                                   name="res_server_space"
                                   id="res_server_space" type="text" value="">
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <label class="form-label"
                                   for="res_server_drive"><?php esc_html_e( 'Тип диска на сервере для теневых копий', 'sth' ); ?></label>
                            <input class="form-control form-control-lg rounded-1 mt-auto" readonly
                                   name="res_server_drive"
                                   id="res_server_drive" type="text" value="">
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <label class="form-label"
                                   for="res_sql_space"><?php esc_html_e( 'Ориентировочный размер БД SQL', 'sth' ); ?></label>
                            <input class="form-control form-control-lg rounded-1 mt-auto" readonly
                                   name="res_sql_space"
                                   id="res_sql_space"
                                   type="text" value="">
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <label class="form-label"
                                   for="res_sql_drive"><?php esc_html_e( 'Рекомендуемый тип диска для БД SQL', 'sth' ); ?></label>
                            <input class="form-control form-control-lg rounded-1 mt-auto" readonly
                                   name="res_sql_drive"
                                   id="res_sql_drive"
                                   type="text" value="">
                        </div>
                        <div class="col-12 col-sm-8 col-lg-4">
                            <label class="form-label"
                                   for="res_sql_edition"><?php esc_html_e( 'Рекомендуемая редакция SQL-сервера', 'sth' ); ?></label>
                            <input class="form-control form-control-lg rounded-1 mt-auto" readonly
                                   name="res_sql_edition"
                                   id="res_sql_edition" type="text" value="">
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <label class="form-label"
                                   for="res_server_cores"><?php esc_html_e( 'Рекомендуемое кол-во ядер CPU-сервера', 'sth' ); ?></label>
                            <input class="form-control form-control-lg rounded-1 mt-auto" readonly
                                   name="res_server_cores"
                                   id="res_server_cores" type="text" value="">
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <label class="form-label"
                                   for="res_server_ram"><?php esc_html_e( 'Рекомендуемый объем RAM сервера (ГБ)', 'sth' ); ?></label>
                            <input class="form-control form-control-lg rounded-1 mt-auto" readonly
                                   name="res_server_ram"
                                   id="res_server_ram"
                                   type="text" value="">
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3" id="res_sql_cores"
                             style="display: none;">
                            <label
                                    class="form-label"><?php esc_html_e( 'Рекомендуемое кол-во ядер CPU SQL-сервера', 'sth' ); ?>
                            </label>
                            <input class="form-control form-control-lg rounded-1 mt-auto" readonly
                                   name="res_sql_cores"
                                   type="text"
                                   value="">
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3" id="res_sql_ram" style="display: none;">
                            <label
                                    class="form-label"><?php esc_html_e( 'Рекомендуемый объем RAM SQL-сервера (ГБ)', 'sth' ); ?>
                            </label>
                            <input class="form-control form-control-lg rounded-1 mt-auto" readonly
                                   name="res_sql_ram"
                                   type="text" value="">
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
</form>
