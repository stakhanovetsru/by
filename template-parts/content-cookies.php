<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasCookies"
        aria-controls="offcanvasCookies">Toggle bottom offcanvas
</button>

<div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasCookies" aria-labelledby="offcanvasCookiesomLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Offcanvas bottom</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body small">
        ...
    </div>
</div>


<script>


    document.addEventListener("DOMContentLoaded", (event) => {
        const myOffcanvas = document.getElementById('offcanvasCookies');
        console.log("DOM start");
        myOffcanvas.show();
        console.log("END");
    });
</script>