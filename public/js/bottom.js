$(document).ready(function () {
    var navItems = document.querySelectorAll(".mobile-bottom-nav__item");
    navItems.forEach(function(e, i) {
        e.addEventListener("click", function(e) {
            navItems.forEach(function(e2, i2) {
                e2.classList.remove("mobile-bottom-nav__item--active");
            })
            this.classList.add("mobile-bottom-nav__item--active");
        });
    });

    if ($(window).width() > 700)
    {
        $('#mobile-nav').remove();
    }

    if ($(window).width() < 700)
    {
        var link = document.createElement('link');
        link.rel = 'stylesheet';
        link.href = './css/bottom.css';
        document.head.appendChild(link);

    }
});
