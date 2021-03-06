// Generated by CoffeeScript 1.4.0
(function() {
  var App, UserDetailInfo, _ref, _ref1,
    __hasProp = {}.hasOwnProperty,
    __extends = function(child, parent) { for (var key in parent) { if (__hasProp.call(parent, key)) child[key] = parent[key]; } function ctor() { this.constructor = child; } ctor.prototype = parent.prototype; child.prototype = new ctor(); child.__super__ = parent.prototype; return child; };

  App = (_ref = window.App) != null ? _ref : {};

  App.Views = (_ref1 = App.Views) != null ? _ref1 : {};

  UserDetailInfo = (function(_super) {

    __extends(UserDetailInfo, _super);

    function UserDetailInfo() {
      return UserDetailInfo.__super__.constructor.apply(this, arguments);
    }

    UserDetailInfo.prototype.el = '#user-detail-info';

    UserDetailInfo.prototype.events = {
      'click .shares': 'showShares',
      'click .favors': 'showFavors'
    };

    UserDetailInfo.prototype.showShares = function() {
      var shares;
      console.log('here');
      shares = new App.Collections.Posts;
      shares.url = "" + App.BASEURL + "/shares/items/" + this.options.user_id;
      return shares.fetch({
        success: function() {
          var sharesView;
          sharesView = new App.Views.DetailPosts({
            collection: shares
          });
          return sharesView.render();
        },
        error: function(obj, res) {
          return console.log(res);
        }
      });
    };

    UserDetailInfo.prototype.showFavors = function() {};

    return UserDetailInfo;

  })(Backbone.View);

  App.Views.UserDetailInfo = UserDetailInfo;

}).call(this);
