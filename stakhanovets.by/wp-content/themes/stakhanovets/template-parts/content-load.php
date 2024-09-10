<div id="preloader"
     class="position-fixed stkh-preloader w-100 h-100 d-flex flex-column align-items-center justify-content-center overflow-hidden">
    <img src="https://stakhanovets.by/wp-content/uploads/2024/09/Стахановец.-Логотип.-Веб_белый.svg" width="300"
         class="img-fluid"/>
    <p class="text-white lead">Идёт загрузка ...</p>
</div>


<script>
    const preloader = document.getElementById("preloader");
    preloader.style.zIndex = "10000";
    preloader.classList.add("bg-primary");

    <!-- Прелоадер -->
    window.addEventListener('load', function () {
        preloader.style.cssText += 'display: none !important;';
        preloader.remove();
        document.body.style.overflow = 'auto'
    });
</script>