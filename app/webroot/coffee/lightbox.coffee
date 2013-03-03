@App = @App ? {}

@App.Lightbox = (->
    class Lightbox
        constructor: ->
            @$wrapper = Zhelper.create 'div', id:'lightbox-wrapper'
            @$content = Zhelper.create 'div', id:'lightbox'
            @$wrapper.append(@$content)
            @$el = @$wrapper
        
            @init()
    
        init: ->
            @$wrapper.click (e) =>
                @hide()
            @$content.click (e) ->
                e.stopPropagation()
            @$content.on
                'spinner.stop': (e) ->
                    App.ZSpinner.stop()
    
        show: ->
            @$content.empty()
            App.ZSpinner.spin()
            $('body').addClass 'ban-scroll'
        
            @$wrapper.fadeIn()
        
        hide: ->
            @$wrapper.fadeOut()
            $('body').removeClass 'ban-scroll'
        
        trigger: (event, data) ->
            @$content.trigger(event, data)
        
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
