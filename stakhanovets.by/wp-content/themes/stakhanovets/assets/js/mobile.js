"use strict";

function divScroll(divElms, letter) {
    for (let i = 0; i < divElms.children.length; i++) {

        (function (index) {
            divElms.children[i].addEventListener("click", myScript);

            function myScript() {
                let num = index + 1;

                //const divA = document.getElementById("pills-a" + num + "-tab");
                const divIn = document.getElementById("pills-" + letter + num);
                divIn.scrollIntoView({behavior: "smooth", block: "center", inline: "nearest"});
                //console.log(divA);
                //divA.appendChild(divIn);
                //alert(stkhA.children[i]);
                //console.log(index + 1);
            }
        })(i);
    }
}

if (window.matchMedia("(max-width: 768px)").matches) {
    const stkhA = document.getElementById('pills-tab-a');
    const stkhB = document.getElementById('pills-tab-b');
    const stkhC = document.getElementById('pills-tab-c');
    const stkhD = document.getElementById('pills-tab-d');

    divScroll(stkhA, 'a');
    divScroll(stkhB, 'b');
    divScroll(stkhC, 'c');
    divScroll(stkhD, 'd');

}

