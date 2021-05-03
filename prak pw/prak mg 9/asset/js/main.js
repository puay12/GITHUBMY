$('.link2').on('click', function() {
    $('.link1').removeClass('active');
    $('.link3').removeClass('active');
    $('.link2').addClass('active');
});

$('.link3').on('click', function() {
    $('.link1').removeClass('active');
    $('.link2').removeClass('active');
    $('.link3').addClass('active');
});

$('.link1').on('click', function() {
    $('.link2').removeClass('active');
    $('.link3').removeClass('active');
    $('.link1').addClass('active');
});