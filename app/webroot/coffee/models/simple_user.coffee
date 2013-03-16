App = window.App ? {}
App.Models = App.Models ? {}

class SimpleUser extends Backbone.Model
    defaults:
        username: 'Aquietzero'
        pic_url: 'default-avatar.png'

App.Models.SimpleUser = SimpleUser
