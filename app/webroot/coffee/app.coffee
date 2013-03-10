@App = window.App ? {}

App.BASEURL = '/~Aquietzero/365wzs'
App.TEST_IMAGES = [
    '/~Aquietzero/365wzs/img/ads/1.jpg'
    '/~Aquietzero/365wzs/img/ads/2.png'
    '/~Aquietzero/365wzs/img/ads/3.jpeg'
    '/~Aquietzero/365wzs/img/ads/4.jpg'
    '/~Aquietzero/365wzs/img/ads/5.png'
    '/~Aquietzero/365wzs/img/ads/6.png'
    '/~Aquietzero/365wzs/img/ads/7.jpg'
    '/~Aquietzero/365wzs/img/ads/8.png'
    '/~Aquietzero/365wzs/img/ads/9.jpg'
    '/~Aquietzero/365wzs/img/ads/10.jpg'
    '/~Aquietzero/365wzs/img/ads/11.jpg'
    '/~Aquietzero/365wzs/img/ads/12.png'
    '/~Aquietzero/365wzs/img/ads/13.png'
    '/~Aquietzero/365wzs/img/ads/14.png'
    '/~Aquietzero/365wzs/img/ads/15.jpg'
    # '/~Aquietzero/365wzs/img/ads/16.jpg'
    # '/~Aquietzero/365wzs/img/ads/17.png'
    # '/~Aquietzero/365wzs/img/ads/18.jpg'
    # '/~Aquietzero/365wzs/img/ads/19.png'
    # '/~Aquietzero/365wzs/img/ads/20.jpg'
    # '/~Aquietzero/365wzs/img/ads/21.jpg'
    # '/~Aquietzero/365wzs/img/ads/22.png'
    # '/~Aquietzero/365wzs/img/ads/23.jpg'
    # '/~Aquietzero/365wzs/img/ads/24.png'
    # '/~Aquietzero/365wzs/img/ads/25.png'
    # '/~Aquietzero/365wzs/img/ads/26.png'
    # '/~Aquietzero/365wzs/img/ads/27.jpg'
    # '/~Aquietzero/365wzs/img/ads/28.jpg'
    # '/~Aquietzero/365wzs/img/ads/29.jpg'
    # '/~Aquietzero/365wzs/img/ads/30.jpg'
    # '/~Aquietzero/365wzs/img/ads/31.jpg'
    # '/~Aquietzero/365wzs/img/ads/32.jpg'
    # '/~Aquietzero/365wzs/img/ads/33.jpg'
    # '/~Aquietzero/365wzs/img/ads/33.png'
]

$ ->
    # Initialize show message widget.
    App.Helpers.showMessage App.Views.Lightbox

    # Adjustment
    adjustment()

    posts = []
    cols_num = 5
    for src, i in App.TEST_IMAGES
        row = Math.floor i/cols_num
        col = i % cols_num
        post =
            top: row * 200
            left: col * 200
            src: src
        posts.push post

    postsCollection = new App.Collections.Posts posts
    zexpo = new App.Views.ZExpo collection: postsCollection

    $(document.body).append zexpo.render().el

    $('.favor').click ->
        App.Helpers.createLikeForm App.Views.Lightbox, App
        App.Views.Lightbox.show()
    $('.at').click ->
        App.Helpers.createAtForm App.Views.Lightbox, App
        App.Views.Lightbox.show()

initCascade = ->
    # Initialize the cascade container.
    $container = $('#cascade-container')
    $container.imagesLoaded ->
        $container.masonry
            itemSelector: '.image-block'

adjustment = ->
    $first_block = $($('.image-block')[0])
    content_width = $('#cascade-container').width()
    unit_width = $first_block.width()
    margin = 10

    num = Math.floor(content_width / (unit_width + 2*margin))
    padding = (content_width - num * (unit_width + 2*margin)) / 2
    $('#cascade-container').css 'paddingLeft', padding - 5

resizeListener = ->
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
