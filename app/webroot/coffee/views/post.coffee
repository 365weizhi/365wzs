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
        $.ajax
            url: "#{App.BASEURL}/ajax/message/#{@model.get 'id'}"
            success: (data) ->
                $form = $(data)
                App.Views.Lightbox.show $form

    share: ->
        $.ajax
            type: 'POST'
            url: "#{App.BASEURL}/ajax/share/"
            data:
                id: @model.get 'id'
                pic_url: @model.get 'pic_url'
            success: (data) ->
                $form = $(data)
                App.Views.Lightbox.show $form

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
