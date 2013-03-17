App = window.App ? {}
App.Views = App.Views ? {}

class DetailPosts extends Backbone.View
    el: '#tab-content'

    render: ->
        @$el.empty()
        @collection.each (detail_post) =>
            detail_post_view = new App.Views.DetailPost model: detail_post
            @$el.append detail_post_view.render().el
        @

App.Views.DetailPosts = DetailPosts
