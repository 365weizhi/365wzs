App = window.App ? {}

class Router extends Backbone.Router
    routes:
        "365wzs/": 'index'
        "365wzs/main": 'index'
        "365wzs/shares": 'index'
        "*actions": 'default'

    default: (actions) ->
        # do nothing...

    index: ->
        postsCollection = new App.Collections.Posts
        postsCollection.url = '/365wzs/pipe/0/32'
        postsCollection.fetch
            success: ->
                App.zexpo = new App.Views.ZExpo collection: postsCollection
                cols_num = 7
                size = 1000 / cols_num
                for post, i in postsCollection.models
                    row = Math.floor i/cols_num
                    col = i % cols_num
                    post.set
                        top: row * size
                        left: col * size
                $(document.body).append App.zexpo.render().el
            error: ->
                postsCollection.add post for post in posts
                App.zexpo = new App.Views.ZExpo collection: postsCollection
                cols_num = 7
                size = 1000 / cols_num
                for post, i in postsCollection.models
                    row = Math.floor i/cols_num
                    col = i % cols_num
                    post.set
                        top: row * size
                        left: col * size
                        pic_url: post.get 'src'
                $(document.body).append App.zexpo.render().el

App.Router = Router
