$('a').click(function() {
    $('html, body').animate({
        scrollTop: $($.attr(this, 'href') ).offset().top
    }, 1000);

    return false;
});

$(window).scroll(function(){
    const bannerMenu = $('#banner-menu'),
    home = $('#abrir-home'),
    scroll = $(window).scrollTop();
  
    if (scroll >= 100){
        bannerMenu.addClass('fixed');
        home.show();
    }else{
        bannerMenu.removeClass('fixed');
        home.hide();
    } 
});

$("#menu-mobile").click(function() {
    $("#abrir-menu-mobile").slideToggle();
});

const options = {
    strings: [
        'Desenvolvimento <b class="titulo-port-main">WEB</b>',
        'Desenvolvimento <b class="titulo-port-main">MOBILE</b>',
        'Desenvolvimento <b class="titulo-port-main">DESKTOP</b>',
        'Desenvolvedor <b class="titulo-port-main">WEB | MOBILE | DESKTOP</b>'
    ],
    typeSpeed: 80,
};

const typed = new Typed('#digitar', options);