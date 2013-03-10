// Generated by CoffeeScript 1.4.0
(function() {
  var adjustment, initCascade, resizeListener, _ref;

  this.App = (_ref = window.App) != null ? _ref : {};

  App.BASEURL = '/~Aquietzero/365wzs';

  App.TEST_IMAGES = ['/~Aquietzero/365wzs/img/ads/1.jpg', '/~Aquietzero/365wzs/img/ads/2.png', '/~Aquietzero/365wzs/img/ads/3.jpeg', '/~Aquietzero/365wzs/img/ads/4.jpg', '/~Aquietzero/365wzs/img/ads/5.png', '/~Aquietzero/365wzs/img/ads/6.png', '/~Aquietzero/365wzs/img/ads/7.jpg', '/~Aquietzero/365wzs/img/ads/8.png', '/~Aquietzero/365wzs/img/ads/9.jpg', '/~Aquietzero/365wzs/img/ads/10.jpg', '/~Aquietzero/365wzs/img/ads/11.jpg', '/~Aquietzero/365wzs/img/ads/12.png', '/~Aquietzero/365wzs/img/ads/13.png', '/~Aquietzero/365wzs/img/ads/14.png', '/~Aquietzero/365wzs/img/ads/15.jpg'];

  $(function() {
    var col, cols_num, i, post, posts, postsCollection, row, src, zexpo, _i, _len, _ref1;
    App.Helpers.showMessage(App.Views.Lightbox);
    adjustment();
    posts = [];
    cols_num = 5;
    _ref1 = App.TEST_IMAGES;
    for (i = _i = 0, _len = _ref1.length; _i < _len; i = ++_i) {
      src = _ref1[i];
      row = Math.floor(i / cols_num);
      col = i % cols_num;
      post = {
        top: row * 200,
        left: col * 200,
        src: src
      };
      posts.push(post);
    }
    postsCollection = new App.Collections.Posts(posts);
    zexpo = new App.Views.ZExpo({
      collection: postsCollection
    });
    $(document.body).append(zexpo.render().el);
    $('.favor').click(function() {
      App.Helpers.createLikeForm(App.Views.Lightbox, App);
      return App.Views.Lightbox.show();
    });
    return $('.at').click(function() {
      App.Helpers.createAtForm(App.Views.Lightbox, App);
      return App.Views.Lightbox.show();
    });
  });

  initCascade = function() {
    var $container;
    $container = $('#cascade-container');
    return $container.imagesLoaded(function() {
      return $container.masonry({
        itemSelector: '.image-block'
      });
    });
  };

  adjustment = function() {
    var $first_block, content_width, margin, num, padding, unit_width;
    $first_block = $($('.image-block')[0]);
    content_width = $('#cascade-container').width();
    unit_width = $first_block.width();
    margin = 10;
    num = Math.floor(content_width / (unit_width + 2 * margin));
    padding = (content_width - num * (unit_width + 2 * margin)) / 2;
    return $('#cascade-container').css('paddingLeft', padding - 5);
  };

  resizeListener = function() {
    var listenResizeEvent;
    listenResizeEvent = function() {
      var delta, resizeend, rtime, timeout;
      rtime = new Date(1, 1, 2000, 12, 0, 0);
      timeout = false;
      delta = 200;
      $(window).resize(function() {
        rtime = new Date();
        if (timeout === false) {
          timeout = true;
          return setTimeout(resizeend, delta);
        }
      });
      return resizeend = function() {
        if (new Date() - rtime < delta) {
          return setTimeout(resizeend, delta);
        } else {
          timeout = false;
          return adjustment();
        }
      };
    };
    return listenResizeEvent();
  };

}).call(this);
