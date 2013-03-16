App = window.App ? {}
App.Views = App.Views ? {}

class UserBasicInfo extends Backbone.View
    el: '#user-basic-info'

    events:
        'click .follows': 'showFollows'
        'click .fans': 'showFans'

    showFollows: ->
        follows = new App.Collections.SimpleUsers
        follows.url = "#{App.BASEURL}/hail/follows/#{@options.user_id}"
        follows.fetch
            success: ->
                followsView = new App.Views.SimpleUsers collection: follows
                followsView.render()
            error: (obj, res) ->
                console.log res

    showFans: ->
        fans = new App.Collections.SimpleUsers
        fans.url = "#{App.BASEURL}/hail/fans/#{@options.user_id}"
        fans.fetch
            success: ->
                console.log fans
                fansView = new App.Views.SimpleUsers collection: fans
                fansView.render()
            error: (obj, res) ->
                console.log res

App.Views.UserBasicInfo = UserBasicInfo
