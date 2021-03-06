// Generated by CoffeeScript 1.4.0
(function() {
  var App, SimpleUsers, _ref, _ref1,
    __hasProp = {}.hasOwnProperty,
    __extends = function(child, parent) { for (var key in parent) { if (__hasProp.call(parent, key)) child[key] = parent[key]; } function ctor() { this.constructor = child; } ctor.prototype = parent.prototype; child.prototype = new ctor(); child.__super__ = parent.prototype; return child; };

  App = (_ref = window.App) != null ? _ref : {};

  App.Views = (_ref1 = App.Views) != null ? _ref1 : {};

  SimpleUsers = (function(_super) {

    __extends(SimpleUsers, _super);

    function SimpleUsers() {
      return SimpleUsers.__super__.constructor.apply(this, arguments);
    }

    SimpleUsers.prototype.el = '#tab-content';

    SimpleUsers.prototype.render = function() {
      var $row, i, n, user_view, _i, _j, _ref2, _ref3;
      this.$el.empty();
      for (i = _i = 0, _ref2 = this.collection.length; _i < _ref2; i = _i += 8) {
        $row = App.Helpers.create('div', {
          "class": 'column-4'
        });
        for (n = _j = i, _ref3 = i + 8; i <= _ref3 ? _j < _ref3 : _j > _ref3; n = i <= _ref3 ? ++_j : --_j) {
          if (!(i + n < this.collection.length)) {
            continue;
          }
          user_view = new App.Views.SimpleUser({
            model: this.collection.at(i + n)
          });
          $row.append(user_view.render().el);
        }
        this.$el.append($row);
      }
      return this;
    };

    return SimpleUsers;

  })(Backbone.View);

  App.Views.SimpleUsers = SimpleUsers;

}).call(this);
