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
    
        show: ($widget) ->
            @setWidget $widget

            $('body').addClass 'ban-scroll'
            @$el.fadeIn()
        
        hide: ->
            @$el.fadeOut()
            $('body').removeClass 'ban-scroll'

        stopPropagation: (e) ->
            e.stopPropagation()
        
        setWidget: ($widget) ->
            @$content.empty()

            width = $(window).width()
            height = $(window).height()
        
            @$content.append $widget
            @$content.css
                width: $widget.attr 'width'
                marginTop: '15%'

    new Lightbox
)()
