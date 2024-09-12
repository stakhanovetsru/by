<?php

if ( false === $body = get_transient( 'stkh_by_ugroza' ) ) {
	$response = wp_remote_get(
		'https://stakhanovets.ru/wp-json/wp/v2/pages/39124',
		[
			'timeout'     => 120,
			'httpversion' => '1.1'
		]
	);

	if ( wp_remote_retrieve_response_code( $response ) === 200 ) {
		$body = wp_remote_retrieve_body( $response );
		set_transient( 'stkh_by_ugroza', $body, HOUR_IN_SECONDS );
	}
}

$data = $body ? json_decode( $body, true ) : [];
//dd( $data );
?>


<div class="stkh-predot my-5 pt-5">
    <div class="container">
        <h2 id=""
            class="euro-medium text-center display-6"><?php echo $data['dlp_prevent_h2'] ?? 'Предотвращение внутренних угроз'; ?></h2>
        <p class="small-text text-center"><?php echo $data['dlp_prevent_h3'] ?? 'Защитите данные компании от случайных и умышленных действий персонала'; ?></p>
    </div>
    <div class="container mt-5">

        <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 row-gap-4 mb-3" id="pills-tab-b" role="tablist">

			<?php
			$dataB = [];

			foreach ( $data['dlp_prevent_tabs'] as $t => $tab ) {
				$dataB[ $t + 1 ] = $tab;
			}

			// Сопоставление данных
			$dataB_ = [
				1 => [
					'title'   => 'Уведомления о нарушениях',
					'content' => 'В случае инцидента, комплекс мгновенно присылает руководителю или службе 
безопасности уведомление в окне браузера. 
Также можно настроить оповещения по SMS и электронной почте.',
					'image'   => 'https://stakhanovets.by/wp-content/uploads/2024/08/Босс-онлайн-1.jpg',
				],
				2 => [
					'title'   => 'Контроль печати документов',
					'content' => 'ПО перехватывает конфиденциальные документы, отправленные на печать. Это позволяет вовремя обнаружить и остановить утечку информации.',
					'image'   => 'https://stakhanovets.by/wp-content/uploads/2024/08/printer_1.png',
				],
				3 => [
					'title'   => 'Мониторинг файловых операций',
					'content' => 'Система отслеживает копирование, перенос, удаление файлов. Перехватывает документы, отправляемые через электронную почту, мессенджеры и социальные сети.',
					'image'   => 'https://stakhanovets.by/wp-content/uploads/2024/08/Файловые-операции.jpg',
				],
				4 => [
					'title'   => 'Мониторинг буфера обмена',
					'content' => 'Система контролирует текст, файлы и изображения, вставленные из буфера обмена. Можно установить полный запрет на буфер обмена или только клавиши PrintScreen.',
					'image'   => 'https://stakhanovets.by/wp-content/uploads/2024/08/clipboard_1.jpg',
				],
				5 => [
					'title'   => 'Глобальный поиск',
					'content' => 'Отчет, который, в случае инцидента, помогает 
пошагово восстановить картину событий, 
отслеживая хронологию. По ключевым словам 
можно произвести поиск по всей базе данных 
текста и найти скриншоты активности сотрудника за конкретный период.',
					'image'   => 'https://stakhanovets.by/wp-content/uploads/2024/08/text_monitoring_1.png',
				],
				6 => [
					'title'   => '«Антифото» (Защита от фотографирования экрана)',
					'content' => 'ПО отслеживает поведение сотрудников: при попытке сделать фото, скрывает окно с ценной информацией, блокирует ПК и направляет уведомление Службе безопасности. Эта инновационная опция на основе нейросети в разы увеличивает защиту информации от утечек.',
					'image'   => 'https://stakhanovets.by/wp-content/uploads/2024/08/antiphoto_1.jpg',
				],

			];
			$b      = 1;
			while ( $b <= count( $dataB ) ): ?>

                <div class="col" role="presentation">
                    <a class="h-100 w-100 shadow rounded text-decoration-none p-4 <?php echo $b == 1 ? ' active' : ''; ?>"
                       id="pills-b<?php echo $b; ?>-tab"
                       data-bs-toggle="pill"
                       data-bs-target="#pills-b<?php echo $b; ?>" type="button" role="tab"
                       aria-controls="pills-b<?php echo $b; ?>"
                       aria-selected="true">
                        <h3 class="display-7 euro-medium"><?php echo $dataB[ $b ]['title'] ?? $dataB_[ $b ]['title']; ?></h3>
                        <p class="mt-3 mb-0"><?php echo $dataB[ $b ]['description'] ?? $dataB_[ $b ]['content']; ?></p>
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
                               data-src="<?php echo $dataB_[ $b ]['image']; ?>"
                               data-caption="<?php echo $dataB[ $b ]['title']; ?>"
                            >
                                <img src="<?php echo $dataB_[ $b ]['image']; ?>"
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
        <a href="https://stakhanovets.by/wp-content/uploads/2024/08/2024.-Стахановец.-РБ.-DLP-СИСТЕМА-ДЛЯ-ЗАЩИТЫ-ИНФОРМАЦИИ.pdf"
           class="btn btn-primary p-13 text-white rounded-1 fw-bold px-5" target="_blank">Скачать</a>
    </div>

</div>