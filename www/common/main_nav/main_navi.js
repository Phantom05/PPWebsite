$(document).ready(function () {
    $('.nav-hamberger').click(function () {
        $('.main-nav').toggleClass('main-nav-open');
        $('.title_nav_text').toggleClass('title_nav_text_open');
    });

    $('.mobile-nav > li > h4').click(function () {
        $('.mobile-MS_submenu').toggleClass('mobile-MS_submenu-open');
    });
});

var button = document.querySelector('.menu-icon');
button.addEventListener('click', function () {
    button.classList.toggle('open');
});


/* 모바일 슬라이드 */

$(function () {
    var Accordion = function (el, multiple) {
        this.el = el || {};
        this.multiple = multiple || false;

        // Variables privadas
        var links = this.el.find('.link');
        // Evento
        links.on('click', {
            el: this.el,
            multiple: this.multiple
        }, this.dropdown)
    }

    Accordion.prototype.dropdown = function (e) {
        var $el = e.data.el;
        $this = $(this),
            $next = $this.next();

        $next.slideToggle();
        $this.parent().toggleClass('open');

        if (!e.data.multiple) {
            $el.find('.submenu').not($next).slideUp().parent().removeClass('open');
        };
    }

    var accordion = new Accordion($('#accordion'), false);
});
