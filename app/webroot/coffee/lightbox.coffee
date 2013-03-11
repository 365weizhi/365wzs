App = window.App ? {}
App.Views = App.Views ? {}

App.Views.Lightbox = (->
    class Lightbox extends Backbone.View
        el: '#lightbox-wrapper'

        events:
            'click': 'hide'
            'click #lightbox' : 'stopPropagation'

        initialize: ->
            @$content = @$el.find '#lightbox'
    
        show: ->
            @$content.empty()

            $('body').addClass 'ban-scroll'
            @$el.fadeIn()
        
        hide: ->
            @$el.fadeOut()
            $('body').removeClass 'ban-scroll'

        stopPropagation: (e) ->
            e.stopPropagation()
        
        setWidget: ($widget) ->
            width = $(window).width()
            height = $(window).height()
        
            @$content.append $widget
            @$content.css
                width: $widget.width()
                height: $widget.height()
                marginTop: (height - $widget.height()) / 2

    new Lightbox
)()
