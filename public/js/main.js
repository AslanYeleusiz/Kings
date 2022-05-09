let $wsize = $(window).width();
$(window).mousemove(function (event) {
    //  console.log(event.pageX + ", " + event.pageY);
    if ($wsize > 769) {
        var $coordX = (event.pageX * 100 / $(window).width());
        var $coordY = (event.pageY * 100 / $(window).height());
        $('.v1').css({
            backgroundPosition: $coordX + '% ' + $coordY + '%'
        });
        $('.v2').css({
            backgroundPosition: ($coordX) + '% ' + ($coordY) + '%'
        });
    }
});
