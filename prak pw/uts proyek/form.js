$('#nextbtn').on('click', function() {
    $('.step').addClass('hide-form').removeClass('show-form');
    $('.step2').addClass('show-form').removeClass('hide-form');
});

$('#prevbtn').on('click', function() {
    $('.step2').addClass('hide-form').removeClass('show-form');
    $('.step').addClass('show-form').removeClass('hide-form');
});