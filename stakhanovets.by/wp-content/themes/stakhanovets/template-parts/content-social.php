<div class="row row-cols-4 row-gap-4 mb-3  site-social-icons">
    <div class="col-auto">
        <a href="https://t.me/stakhanovets_ru"
           class="d-flex align-items-center justify-content-center rounded-2 border-2 d-inline-block border p-1 h-100"
           rel="noopener nofollow noindex" target="_blank">
            <img src="<?php echo esc_url( get_theme_file_uri( 'build/images/social/tm.svg' ) ); ?>" width="30"
                 alt="Иконка">
        </a>
    </div>
    <div class="col-auto">
        <a href="https://vk.com/stakhanovets_ru"
           class="d-flex align-items-center justify-content-center rounded-2 border-2 d-inline-block border p-1 h-100"
           rel="noopener nofollow noindex" target="_blank">
            <img src="<?php echo esc_url( get_theme_file_uri( 'build/images/social/vk.svg' ) ); ?>" width="30"
                 alt="Иконка">
        </a>
    </div>
    <div class="col-auto">
        <a href="https://www.youtube.com/channel/UC48Naih74Ar9Yusu6NI191w"
           class="d-flex align-items-center justify-content-center rounded-2 border-2 d-inline-block border p-1 h-100"
           rel="noopener nofollow noindex"
           target="_blank">
            <img src="<?php echo esc_url( get_theme_file_uri( 'build/images/social/yt.svg' ) ); ?>" width="30"
                 alt="Иконка">
        </a>
    </div>
    <div class="col-auto">
        <a href="https://rutube.ru/channel/38603342/"
           class="d-flex align-items-center justify-content-center rounded-2 border-2 d-inline-block border p-1 h-100"
           rel="noopener nofollow noindex" target="_blank">
            <img src="<?php echo esc_url( get_theme_file_uri( 'build/images/social/rt.svg' ) ); ?>" width="30"
                 alt="Иконка">
        </a>
    </div>
</div>


<style>
    .site-social-icons a {
        width: 45px;
        transition: filter .25s ease-in-out;
    }

    .site-social-icons img {
        transition: filter .25s ease-in-out;
        -webkit-filter: grayscale(100%);
        filter: grayscale(100%);
    }

    .site-social-icons a:hover {
        background-color: #dee2e6;
    }

    .site-social-icons a:hover img {
        -webkit-filter: grayscale(0%);
        filter: grayscale(0%);
    }
</style>