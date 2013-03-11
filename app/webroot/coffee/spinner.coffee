@App = @App ? {}

@App.ZSpinner = (->
    class Spinner
        constructor: ->
            @$el = Zhelper.create('div', { 'id':'indicator' })
            @$el.css
                position: 'fixed'
                top: $(window).height() / 2
                left: $(window).width() / 2
            @settings =
                lines: 12     # The number of lines to draw
                length: 7     # The length of each line
                width: 5      # The line thickness
                radius: 10    # The radius of the inner circle
                color: '#000' # #rbg or #rrggbb
                speed: 1      # Rounds per second
                trail: 100    # Afterglow percentage
                shadow: true  # Whether to render a shadow
    
        spin: ->
            @$el.spin @settings
    
        stop: ->
            @$el.spin false

    new Spinner
)()
console.log App, 'spinner'
