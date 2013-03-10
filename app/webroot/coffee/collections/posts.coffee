App = window.App ? {}
App.Collections = App.Collections ? {}

class Posts extends Backbone.Collection
    model: App.Models.Post

App.Collections.Posts = Posts
