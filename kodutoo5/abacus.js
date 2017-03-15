window.onload = function() {
    // lehe laadimine lõpetatud. Siia funktsiooni sisse kirjutan elementide mõjutamise käsud
    var a = document.getElementsByClassName('bead');

    for (var i = 0; i < a.length; i++) {
        a[i].onclick = function () {
            muudaPoolt(this);
        }
    }
}

function muudaPoolt(proov) {
    if (proov.style.cssFloat == "right") {
        proov.style.cssFloat = "left";
    } else {
        proov.style.cssFloat = "right";
    }
}