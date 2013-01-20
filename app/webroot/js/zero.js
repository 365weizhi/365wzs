var baseurl = '/~Aquietzero/365wzs';

$(function() {
    // Initialize show message widget.
    Zhelper.showMessage(Lightbox);

    // Initialize the cascade container.
    var $container = $('#cascade-container');
    $container.imagesLoaded(function(){
        $container.masonry({
            itemSelector : '.image-block'
        });
    });

    // Initialize lightbox
    $('body').append(Lightbox.$el);

    // Adjustment
    adjustment();
    var listenResizeEvent = function() {
        var self = this;
        var rtime = new Date(1, 1, 2000, 12,00,00);
        var timeout = false;
        var delta = 200;
        $(window).resize(function() {
            rtime = new Date();
            if (timeout === false) {
                timeout = true;
                setTimeout(resizeend, delta);
            }
        });

        function resizeend() {
            if (new Date() - rtime < delta) {
                setTimeout(resizeend, delta);
            } else {
                timeout = false;
                adjustment();
            }               
        }
    }
    listenResizeEvent();

    // Initialize the scroll event.
    $(window).scroll(function() {
        var scrollTop = $(window).scrollTop();

        var nav_h = $('#navigator').height();
        var p_h = $('#navigator p').height();
        var margin = parseInt($('#navigator').css('margin-top'));
        var offset = (nav_h - p_h) - 20 + margin;

        if (scrollTop >= offset) {
            $('#header').css({
                position: 'fixed',
                top: -offset + 'px',
                borderBottom: 'solid 1px #ddd',
                boxShadow: '0 0 10px #ddd'
            });
            $('#slider').css('marginTop', offset + 20 + 'px');
        } else {
            $('#header').css({ 
                position: 'static',
                border: 'none',
                boxShadow: 'none'
            });
            $('#slider').css('marginTop', '0px');
        }
    });    

    $('.favor').click(function() {
        Zhelper.createLikeForm(Lightbox, this);
        Lightbox.show();
    });
    $('.at').click(function() {
        Zhelper.createAtForm(Lightbox, this);
        Lightbox.show();
    });

});

function adjustment() {
    var $first_block = $($('.image-block')[0]);
    var content_width = $('#cascade-container').width();
    var unit_width = $first_block.width();
    var margin = 10;

    var num = Math.floor(content_width / (unit_width + 2*margin));
    var padding = (content_width - num * (unit_width + 2*margin)) / 2;
    $('#cascade-container').css('paddingLeft', padding - 5);
}
