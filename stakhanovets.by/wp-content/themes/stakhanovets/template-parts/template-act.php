<div class="stkh-action my-5 pt-5">
    <div class="container">
        <div class="row">
            <h2 id=""
                class="euro-medium text-center h3">
				<?php echo $data['dlp_detect_h2'] ?? 'Обнаружение неправомерных действий с данными'; ?>
            </h2>
            <p class="lead stkh-action__desc m-auto">
				<?php echo $data['dlp_detect_h3'] ?? 'Повысьте защиту корпоративной информации от утечки, выявив мошеннические действия со стороны сотрудников'; ?>
            </p>

            <nav class="mt-5 overflow-auto">
                <div class="row stkh-action__row" id="nav-tab" role="tablist">
					<?php
					//if ( is_user_logged_in() ) {

					$response = wp_remote_get(
						'https://stakhanovets.ru/wp-json/wp/v2/pages/39124',
						[
							'timeout'     => 120,
							'httpversion' => '1.1'
						]
					);

					if ( wp_remote_retrieve_response_code( $response ) === 200 ) {
						$body = wp_remote_retrieve_body( $response );
					}

					$data = $body ? json_decode( $body, true ) : [];

					$n = 0;
					// сопоставление
					$replace = [
						"1" => "one",
						"2" => "two",
						"3" => "three",
						"4" => "four",
						"5" => "five",
						"6" => "six"
					];

					foreach ( $data['dlp_detect_tabs'] as $tab ) {
						$n ++;
						$nn = str_replace( array_keys( $replace ), array_values( $replace ), $n );
						?>
                        <div class="col-2 pb-2">
                            <button class="nav-link <?php echo $n == 1 ? ' active' : ''; ?>"
                                    id="nav-<?php echo $nn; ?>"
                                    data-bs-toggle="tab"
                                    data-bs-target="#nav-<?php echo $n; ?>"
                                    type="button" role="tab" aria-controls="nav-<?php echo $n; ?>"
                                    aria-selected="true">
								<?php echo $tab['tab_title']; ?>
                            </button>
                        </div>
						<?php
					}
					//}
					?>
                </div>
            </nav>

            <div class="tab-content" id="nav-tabContent">


				<?php
				//if ( is_user_logged_in() ) {

				$t = 0;

				foreach ( $data['dlp_detect_tabs'] as $tab ) {

					$t ++;
					$tt = str_replace( array_keys( $replace ), array_values( $replace ), $t );
					?>

                    <div class="tab-pane fade show <?php echo $t == 1 ? ' active' : ''; ?>"
                         id="nav-<?php echo $t; ?>"
                         role="tabpanel" aria-labelledby="nav-<?php echo $tt; ?>"
                         tabindex="0">
                        <div class="row my-5 py-4 bg-brand-gradient rounded d-flex align-items-center">
                            <div class="col-12 col-xl-5 offset-xl-1">
                                <h3 class="text-white"><?php echo $tab['title']; ?></h3>
                            </div>
                            <div class="col-12 col-xl-5 d-flex align-items-center">
                                <p class="euro-medium text-white m-0"><?php echo $tab['description']; ?></p>
                            </div>
                        </div>
                        <!-- HTML Image Dinamic -->
                        <div id="image-<?php echo (int) $t; ?>"></div>
                    </div>


                    <script async>
                        fetch("https://stakhanovets.ru/wp-json/wp/v2/media/<?php echo (int) $tab ['image']; ?>", {
                            method: 'GET',
                            body: JSON.stringify(),
                            headers: {
                                'Content-type': 'application/json; charset=UTF-8',
                            },
                        })
                            .then((response) => response.json())
                            .then((data) => {
                                    let img = document.createElement("img");
                                    img.src = data.source_url;
                                    img.classList.add("img-fluid");
                                    document.getElementById('image-<?php echo (int) $t; ?>').append(img);
                                    //console.log(img)
                                }
                            )
                            .catch((e) => {
                                    console.log(e)
                                }
                            )
                    </script>

					<?php
				}

				//}
				?>

            </div>
        </div>

        <!-- Кнопки -->
        <div class="row row-gap-4 mt-5">
            <div class="col-12 col-sm-6 col-lg-3 offset-lg-3 text-center">
                <a href="#five" class="stkh_action__link btn btn-primary fw-bold text-white rounded-1 p-13 w-100">
                    Попробовать бесплатно
                </a>
            </div>
            <div class="col-12 col-sm-6 col-lg-3 text-center">
                <a href="https://stakhanovets.ru/demo/" target="_blank"
                   class="stkh_action__link btn btn-outline-primary fw-bold rounded-1 p-13 w-100">
                    Онлайн-демо
                </a>
            </div>
        </div>

    </div>
</div>