$(window).on('scroll', function () {
    var scrollTop = $(window).scrollTop();
    if (scrollTop >= 100) {
        $('.navbar').removeClass('py-3')
        $('.navbar svg').attr('width', '147px').attr('height', '37px');
    } else {
        $('.navbar').addClass('py-3')
        $('.navbar svg').attr('width', '170px').attr('height', '50px');
    }
});