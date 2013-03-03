@App = @App ? {}

App.BASEURL = '/~Aquietzero/365wzs'

$ ->
    # Initialize show message widget.
    Zhelper.showMessage App.Lightbox

    # Initialize the cascade container.
    $container = $('#cascade-container')
    $container.imagesLoaded ->
        $container.masonry
            itemSelector: '.image-block'

    # Initialize lightbox
    $('body').append App.Lightbox.$el

    # Adjustment
    adjustment()
    listenResizeEvent = ->
        rtime = new Date 1, 1, 2000, 12, 0, 0
        timeout = false
        delta = 200
        $(window).resize ->
            rtime = new Date()
            if timeout is false
                timeout = true
                setTimeout resizeend, delta

        resizeend = ->
            if new Date() - rtime < delta
                setTimeout resizeend, delta
            else
                timeout = false
                adjustment()
    listenResizeEvent()

    # Initialize the scroll event.
    $(window).scroll ->
        scrollTop = $(window).scrollTop()

        nav_h = $('#navigator').height()
        p_h = $('#navigator p').height()
        margin = parseInt($('#navigator').css('margin-top'))
        offset = (nav_h - p_h) - 20 + margin

        if scrollTop >= offset
            $('#header').css
                position: 'fixed'
                top: -offset + 'px'
                borderBottom: 'solid 1px #ddd'
                boxShadow: '0 0 10px #ddd'
            $('#slider').css 'marginTop', "#{offset + 20}px"
        else
            $('#header').css
                position: 'static'
                border: 'none'
                boxShadow: 'none'
            $('#slider').css 'marginTop', '0px'

    $('.favor').click ->
        console.log 'click!'
        Zhelper.createLikeForm App.Lightbox, App
        App.Lightbox.show()
    $('.at').click ->
        Zhelper.createAtForm App.Lightbox, App
        App.Lightbox.show()

adjustment = ->
    $first_block = $($('.image-block')[0])
    content_width = $('#cascade-container').width()
    unit_width = $first_block.width()
    margin = 10

    num = Math.floor(content_width / (unit_width + 2*margin))
    padding = (content_width - num * (unit_width + 2*margin)) / 2
    $('#cascade-container').css 'paddingLeft', padding - 5
