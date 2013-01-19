var ZSpinner = (function() {
    var ZSpinner = function() {
        this.$el = Zhelper.create('div', { 'id':'indicator' });
        this.$el.css({
            position: 'fixed',
            top: $(window).height() / 2,
            left: $(window).width() / 2
        });
        this.settings = {
            lines: 12,     // The number of lines to draw
            length: 7,     // The length of each line
            width: 5,      // The line thickness
            radius: 10,    // The radius of the inner circle
            color: '#000', // #rbg or #rrggbb
            speed: 1,      // Rounds per second
            trail: 100,    // Afterglow percentage
            shadow: true   // Whether to render a shadow
        }
    }
    ZSpinner.prototype = {
        spin: function() {
            this.$el.spin(this.settings);
        },
        stop: function() {
            this.$el.spin(false);
        }
    }
    return new ZSpinner();
})();
