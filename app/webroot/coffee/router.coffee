App = window.App ? {}

class Router extends Backbone.Router
    routes:
        "365wzs/": 'index'
        "365wzs/main": 'index'
        "365wzs/shares": 'index'
        "*actions": 'default'

    default: (actions) ->
        # doing nothing...

    index: ->
        posts = []
        cols_num = 7
        size = 1000 / cols_num
        for src, i in App.TEST_IMAGES
            row = Math.floor i/cols_num
            col = i % cols_num
            post =
                top: row * size
                left: col * size
                src: src
            posts.push post

        postsCollection = new App.Collections.Posts posts
        zexpo = new App.Views.ZExpo collection: postsCollection

        $(document.body).append zexpo.render().el

App.Router = Router
