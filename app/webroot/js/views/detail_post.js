// Generated by CoffeeScript 1.4.0
(function() {
  var App, DetailPost, _ref, _ref1,
    __hasProp = {}.hasOwnProperty,
    __extends = function(child, parent) { for (var key in parent) { if (__hasProp.call(parent, key)) child[key] = parent[key]; } function ctor() { this.constructor = child; } ctor.prototype = parent.prototype; child.prototype = new ctor(); child.__super__ = parent.prototype; return child; };

  App = (_ref = window.App) != null ? _ref : {};

  App.Views = (_ref1 = App.Views) != null ? _ref1 : {};

  DetailPost = (function(_super) {

    __extends(DetailPost, _super);

    function DetailPost() {
      return DetailPost.__super__.constructor.apply(this, arguments);
    }

    DetailPost.prototype.tagName = 'div';

    DetailPost.prototype.className = 'detail-post';

    DetailPost.prototype.template = $('#detail-post-template').html();

    DetailPost.prototype.render = function() {
      this.$el.html(_.template(this.template, this.model.toJSON()));
      return this;
    };

    return DetailPost;

  })(Backbone.View);

  App.Views.DetailPost = DetailPost;

}).call(this);
