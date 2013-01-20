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
            $('#container').css('marginTop', offset + 20 + 'px');
        } else {
            $('#header').css({ 
                position: 'static',
                border: 'none',
                boxShadow: 'none'
            });
            $('#container').css('marginTop', '0px');
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
