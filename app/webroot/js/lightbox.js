var Lightbox = (function() {
    var Lightbox = function() {
        this.$wrapper = Zhelper.create('div', { 'id':'lightbox-wrapper' });
        this.$content = Zhelper.create('div', { 'id':'lightbox' });
        this.$wrapper.append(this.$content);
        this.$el = this.$wrapper;
    
        this.init();
    }
    
    Lightbox.prototype = {
        init: function() {
            var self = this;
            this.$wrapper.click(function(e) {
                self.hide();
            });
            this.$content.click(function(e) {
                e.stopPropagation();
            });
            this.$content.on({
                'spinner.stop': function(e) {
                    ZSpinner.stop();
                }
            });
        },
    
        show: function() {
            this.$content.empty();
            ZSpinner.spin();
            $('body').addClass('ban-scroll');
    
            // this.blur();
            this.$wrapper.fadeIn();
        },
    
        hide: function() {
            // this.clear();
            this.$wrapper.fadeOut();
            $('body').removeClass('ban-scroll');
        },
    
        blur: function() {
            $('#zascade').addClass('blur');
            $('#menu-bar').addClass('blur');
            $('#logo-bar').addClass('blur');
            $('#header').addClass('blur');
        },
    
        clear: function() {
            $('#zascade').removeClass('blur');
            $('#menu-bar').removeClass('blur');
            $('#logo-bar').removeClass('blur');
            $('#header').removeClass('blur');
        },
    
        trigger: function(event, data) {
            this.$content.trigger(event, data);
        },
    
        setWidget: function($widget) {
            var width = $(window).width();
            var height = $(window).height();
    
            this.$content.append($widget);
            this.$content.css({
                width: $widget.width(),
                height: $widget.height(),
                marginTop: (height - $widget.height()) / 2
            });
        }
    }
    
    return new Lightbox();
})();

