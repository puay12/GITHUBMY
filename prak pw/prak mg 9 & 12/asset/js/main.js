$('.link1').on('click', function() {
    $('.link2').removeClass('active');
    $('.link3').removeClass('active');
    $('.link1').addClass('active');
    $('.content-datmhs').removeClass('show').addClass('hides');
    $('.content-datugas').removeClass('show').addClass('hides');
    $('.content-profil').removeClass('hides').addClass('show');
});

$('.link2').on('click', function() {
    $('.link1').removeClass('active');
    $('.link3').removeClass('active');
    $('.link2').addClass('active');
    $('.content-profil').removeClass('show').addClass('hides');
    $('.content-datugas').removeClass('show').addClass('hides');
    $('.content-datmhs').removeClass('hides').addClass('show');
});

$('.link3').on('click', function() {
    $('.link1').removeClass('active');
    $('.link2').removeClass('active');
    $('.link3').addClass('active');
    $('.content-profil').removeClass('show').addClass('hides');
    $('.content-datmhs').removeClass('show').addClass('hides');
    $('.content-datugas').removeClass('hides').addClass('show');
});