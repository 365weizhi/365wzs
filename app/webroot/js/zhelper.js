var Zhelper = {
    create: function(dom, attrs, content) {
        var content = content || '';
        var $dom = $('<' + dom + '>' + '</' + dom + '>');

        for (var attr in attrs)
            $dom.attr(attr, attrs[attr]);

        if (dom == 'img')
            return $dom;
        else {
            $dom.html(content);
            return $dom;
        }
    },

    plural: function(noun, num) {
        if (num == 0)
            return 'No ' + noun;
        else if (num == 1)
            return '1 ' + noun;
        else
            return num + ' ' + noun;
    },

    createLoginForm: function(parent) {
        var login_form_template = $('#login-template').html();
        var $login_form = $(login_form_template);

        parent.setWidget($login_form);
        $login_form.trigger('spinner.stop');
    },

    createLikeForm: function(parent, button) {
        var item_id = $(button).parent().find('.item-id').val();
        $.ajax({
            url: baseurl + '/ajax/favor/' + item_id,
            success: function(data) {
                var $form = $(data);
                parent.setWidget($form);
                $form.trigger('spinner.stop');
            }
        });
    },

    createAtForm: function(parent, button) {
        var item_id = $(button).parent().find('.item-id').val();
        $.ajax({
            url: baseurl + '/ajax/message/' + item_id,
            success: function(data) {
                var $form = $(data);
                parent.setWidget($form);
                $form.trigger('spinner.stop');
            }
        });
    },

    showMessage: function(parent) {
        var $message = $('#message');
        if ($message.html() != '') {
            var $messagebox = this.create('div');
            $messagebox
                .width(300)
                .height(150)
                .addClass('messagebox')
                .html($message.html());
            parent.show();
            parent.setWidget($messagebox);
        }
    }
}