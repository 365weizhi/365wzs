App = window.App ? {}
App.Views = App.Views ? {}

class UserDetailInfo extends Backbone.View
    el: '#user-detail-info'

    events:
        'click .shares': 'showShares'
        'click .favors': 'showFavors'

    showShares: ->
        console.log 'here'
        shares = new App.Collections.Posts
        shares.url = "#{App.BASEURL}/shares/items/#{@options.user_id}"
        shares.fetch
            success: ->
                sharesView = new App.Views.DetailPosts collection: shares
                sharesView.render()
            error: (obj, res) ->
                console.log res

    showFavors: ->

App.Views.UserDetailInfo = UserDetailInfo
