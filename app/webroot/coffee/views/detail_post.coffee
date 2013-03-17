App = window.App ? {}
App.Views = App.Views ? {}

class DetailPost extends Backbone.View
    tagName: 'div'
    className: 'detail-post'
    template: $('#detail-post-template').html()

    render: ->
        @$el.html _.template(@template, @model.toJSON())
        @

App.Views.DetailPost = DetailPost
