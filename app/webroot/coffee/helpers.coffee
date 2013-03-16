App = window.App ? {}

App.Helpers =
    create: (dom, attrs, content) ->
        content = content ? ''
        $dom = $("<#{dom}></#{dom}>")

        for key, val of attrs
            $dom.attr key, val

        if dom is 'img'
            $dom
        else
            $dom.html(content)
            $dom

    plural: (noun, num) ->
        if num is 0
            "No #{noun}"
        else if num is 1
            "1 #{noun}"
        else
            "#{num} #{noun}"

    createLoginForm: (parent) ->
        login_form_template = $('#login-template').html()
        $login_form = $(login_form_template)

        parent.setWidget $login_form
        $login_form.trigger 'spinner.stop'

    createFavorForm: (item_id, button) ->
        $.ajax
            url: "#{App.BASEURL}/ajax/favor/#{item_id}"
            success: (data) ->
                $form = $(data)
                parent.setWidget $form
                $form.trigger 'spinner.stop'
            
    createAtForm: (parent, button) ->
        item_id = $(button).parent().find('.item-id').val()
        $.ajax
            url: "/ajax/message/#{item_id}"
            success: (data) ->
                $form = $(data)
                parent.setWidget $form
                $form.trigger 'spinner.stop'

    showMessage: (parent) ->
        $message = $('#message')
        unless $message.html() is ''
            $messagebox = @create 'div'
            $messagebox
                .width(300)
                .height(150)
                .addClass('messagebox')
                .html($message.html())
            parent.show()
            parent.setWidget $messagebox

    delay: (msec, func) ->
        setTimeout func, msec
