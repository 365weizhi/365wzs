App = window.App ? {}
App.Views = App.Views ? {}

class PostView extends Backbone.View
    tagName: 'div'
    className: 'expo-item'
    template: $('#expo-item').html()

    events:
        'click .at': 'at'
        'click .share': 'share'

    at: ->
        App.Helpers.createAtForm App.Views.Lightbox, App
        App.Views.Lightbox.show()

    share: ->
        $.ajax
            url: "#{App.BASEURL}/ajax/favor/#{@model.get 'id'}"
            success: (data) ->
                $form = $(data)
                console.log $form
                App.Views.Lightbox.setWidget $form
                App.Views.Lightbox.show()

    render: ->
        @$el.html( _.template @template, @model.toJSON() )
        @$el.css
            left: @model.get 'left'

        @$img = @$el.find '.post-image'
        @$img.load =>
            width = @$img.width()
            height = @$img.height()
            if width > height
                @$img.css height: '100%'
            else
                @$img.css width: '100%'
            App.k
            App.Helpers.delay Math.random()*2000, =>
                @$el.animate top: @model.get 'top'
        @

App.Views.Post = PostView
