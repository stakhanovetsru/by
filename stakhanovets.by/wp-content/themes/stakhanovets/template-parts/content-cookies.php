<?php

if ( ! is_user_logged_in() ) {
	//return;
}

?>


<div class="w-100 py-4 border-top border-1 border-info position-fixed z-3 site-cookies bg-white"
     id="divCookies">
    <div class="container">
        <h2 class="offcanvas-title text-black display-7 mb-1" id="offcanvasScrollingLabel">Политика использования файлов
            cookie</h2>

        <p class="small">Мы используем файлы cookie, чтобы сделать работу с сайтом удобнее. Продолжая находиться на
            сайте, вы
            соглашаетесь с этим. Подробную информацию о файлах cookie можно прочитать <a href="/privacy-policy/"
                                                                                         target="_blank" rel="noopener">здесь</a>.
            Вы можете запретить
            сохранение Cookie в настройках своего браузера.</p>
        <a href="#" id="btnCookies" class="btn btn-sm px-4 text-white btn-primary rounded-1">Принять</a>
    </div>
</div>

<script>

    const divCookies = document.getElementById('divCookies');

    const btnCookies = document.getElementById('btnCookies');

    //console.log(getCookie("stakh_cookies"));

    window.setTimeout(function () {
        if (getCookie("stakh_cookies") === "yes") {
            return;
        }
        divCookies.classList.add("cookies-show");
    }, 1500);


    btnCookies.addEventListener("click", function (e) {
        divCookies.classList.remove("cookies-show");
        setCookie('stakh_cookies', 'yes', {secure: true, 'max-age': -1});
    });

    function setCookie(cname, cvalue, exdays) {
        const d = new Date();
        d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
        let expires = "expires=" + d.toUTCString();
        document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    }

    function getCookie(cname) {
        let name = cname + "=";
        let ca = document.cookie.split(';');
        for (let i = 0; i < ca.length; i++) {
            let c = ca[i];
            while (c.charAt(0) == ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
            }
        }
        return "";
    }

    function checkCookie() {
        let user = getCookie("username");
        if (user != "") {
            alert("Welcome again " + user);
        } else {
            user = prompt("Please enter your name:", "");
            if (user != "" && user != null) {
                setCookie("username", user, 365);
            }
        }
    }
</script>