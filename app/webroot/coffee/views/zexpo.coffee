App = window.App ? {}
App.Views = App.Views ? {}

class ZExpo extends Backbone.View
    el: '#zexpo'

    initialize: ->

    addOne: (post) ->
        postView = new App.Views.Post model: post
        @$el.append postView.render().el

    render: ->
        @collection.each @addOne, @
        @

App.Views.ZExpo = ZExpo
