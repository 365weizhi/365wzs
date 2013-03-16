App = window.App ? {}
App.Views = App.Views ? {}

class SimpleUser extends Backbone.View
    tagName: 'div'
    className: 'user'
    template: $('#simple-user-template').html()

    render: ->
        @$el.html _.template(@template, @model.toJSON())
        @

App.Views.SimpleUser = SimpleUser
