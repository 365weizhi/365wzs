// Generated by CoffeeScript 1.4.0
(function() {
  var App, SimpleUsers, _ref, _ref1,
    __hasProp = {}.hasOwnProperty,
    __extends = function(child, parent) { for (var key in parent) { if (__hasProp.call(parent, key)) child[key] = parent[key]; } function ctor() { this.constructor = child; } ctor.prototype = parent.prototype; child.prototype = new ctor(); child.__super__ = parent.prototype; return child; };

  App = (_ref = window.App) != null ? _ref : {};

  App.Collections = (_ref1 = App.Collections) != null ? _ref1 : {};

  SimpleUsers = (function(_super) {

    __extends(SimpleUsers, _super);

    function SimpleUsers() {
      return SimpleUsers.__super__.constructor.apply(this, arguments);
    }

    SimpleUsers.prototype.model = App.Models.SimpleUser;

    return SimpleUsers;

  })(Backbone.Collection);

  App.Collections.SimpleUsers = SimpleUsers;

}).call(this);