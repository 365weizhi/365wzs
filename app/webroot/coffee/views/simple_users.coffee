App = window.App ? {}
App.Views = App.Views ? {}

class SimpleUsers extends Backbone.View
    el: '#tab-content'

    render: ->
        @$el.empty()

        console.log @collection.length
        for i in [0...@collection.length] by 8
            $row = App.Helpers.create 'div', class: 'column-4'

            for n in [i...i+8] when i+n < @collection.length
                user_view = new App.Views.SimpleUser model: @collection.at i+n
                $row.append user_view.render().el
            @$el.append $row

        @

App.Views.SimpleUsers = SimpleUsers
