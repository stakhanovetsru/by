"use strict";

const stkhA = document.getElementById('stkh-analytics__divs');

for (let i = 0; i < stkhA.children.length; i++) {

    (function (index) {
        stkhA.children[i].addEventListener("click", myScript);

        function myScript() {
            let num = index + 1;

            //const divA = document.getElementById("pills-a" + num + "-tab");
            const divIn = document.getElementById("pills-a" + num);
            divIn.scrollIntoView({behavior: "smooth", block: "center", inline: "nearest"});
            //console.log(divA);
            //divA.appendChild(divIn);
            //alert(stkhA.children[i]);
            //console.log(index + 1);
        }
    })(i);
}