$(document).ready(function () {

    if ($(window).width() > 700)
    {
        $('#mobile-nav').remove();
    }

    function nav() {
        var navItems = document.querySelectorAll(".mobile-bottom-nav__item");
        navItems.forEach(function(e, i) {
            e.addEventListener("click", function(e) {
                navItems.forEach(function(e2, i2) {
                    e2.classList.remove("mobile-bottom-nav__item--active");
                })
                this.classList.add("mobile-bottom-nav__item--active");
            });
        });


        if ($(window).width() < 700)
        {
            var link = document.createElement('link');
            link.rel = 'stylesheet';
            link.href = $('#bottomUrl').val();
            document.head.appendChild(link);
        }
    }

    window.onload = function(){
        setInterval(function(){
            nav();
        }, 1000);
    };
});
