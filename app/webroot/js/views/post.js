// Generated by CoffeeScript 1.4.0
(function() {
  var App, PostView, _ref, _ref1,
    __hasProp = {}.hasOwnProperty,
    __extends = function(child, parent) { for (var key in parent) { if (__hasProp.call(parent, key)) child[key] = parent[key]; } function ctor() { this.constructor = child; } ctor.prototype = parent.prototype; child.prototype = new ctor(); child.__super__ = parent.prototype; return child; };

  App = (_ref = window.App) != null ? _ref : {};

  App.Views = (_ref1 = App.Views) != null ? _ref1 : {};

  PostView = (function(_super) {

    __extends(PostView, _super);

    function PostView() {
      return PostView.__super__.constructor.apply(this, arguments);
    }

    PostView.prototype.tagName = 'div';

    PostView.prototype.className = 'expo-item';

    PostView.prototype.template = $('#expo-item').html();

    PostView.prototype.events = {
      'click .at': 'at',
      'click .share': 'share'
    };

    PostView.prototype.at = function() {
      return $.ajax({
        url: "" + App.BASEURL + "/ajax/message/" + (this.model.get('id')),
        success: function(data) {
          var $form;
          $form = $(data);
          return App.Views.Lightbox.show($form);
        }
      });
    };

    PostView.prototype.share = function() {
      return $.ajax({
        url: "" + App.BASEURL + "/ajax/favor/" + (this.model.get('id')),
        success: function(data) {
          var $form;
          $form = $(data);
          return App.Views.Lightbox.show($form);
        }
      });
    };

    PostView.prototype.render = function() {
      var _this = this;
      this.$el.html(_.template(this.template, this.model.toJSON()));
      this.$el.css({
        left: this.model.get('left')
      });
      this.$img = this.$el.find('.post-image');
      this.$img.load(function() {
        var height, width;
        width = _this.$img.width();
        height = _this.$img.height();
        if (width > height) {
          _this.$img.css({
            height: '100%'
          });
        } else {
          _this.$img.css({
            width: '100%'
          });
        }
        App.k;
        return App.Helpers.delay(Math.random() * 2000, function() {
          return _this.$el.animate({
            top: _this.model.get('top')
          });
        });
      });
      return this;
    };

    return PostView;

  })(Backbone.View);

  App.Views.Post = PostView;

}).call(this);
