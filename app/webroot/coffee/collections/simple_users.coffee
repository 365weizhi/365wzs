App = window.App ? {}
App.Collections = App.Collections ? {}

class SimpleUsers extends Backbone.Collection
    model: App.Models.SimpleUser

App.Collections.SimpleUsers = SimpleUsers
