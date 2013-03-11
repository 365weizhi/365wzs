App = window.App ? {}
App.Views = App.Views ? {}

class PostView extends Backbone.View
    tagName: 'div'
    className: 'expo-item'
    template: $('#expo-item').html()

    render: ->
        @$el.html( _.template @template, @model.toJSON() )
        @$el.css
            left: @model.get 'left'
        @$img = @$el.find '.post-image'
        @$img.load =>
            App.Helpers.delay Math.random()*2000, =>
                @$el.animate top: @model.get 'top'
        @

App.Views.Post = PostView
