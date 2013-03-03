@App = @App ? {}

Zhelper =
    create: (dom, attrs, content) ->
        content = content ? ''
        $dom = $('<' + dom + '>' + '</' + dom + '>')
        $dom = $("<#{dom}></#{dom}>")

        for key, val of attrs
            $dom.attr key, val

        if dom is 'img'
            return $dom
        else
            $dom.html(content)
            return $dom

    plural: (noun, num) ->
        if num is 0
            return "No #{noun}"
        else if num is 1
            return "1 #{noun}"
        else
            return "#{num} #{noun}"

    createLoginForm: (parent) ->
        login_form_template = $('#login-template').html()
        $login_form = $(login_form_template)

        parent.setWidget $login_form
        $login_form.trigger 'spinner.stop'

    createLikeForm: (parent, button) ->
        item_id = $(button).parent().find('.item-id').val()
        $.ajax
            url: "#{App.BASEURL}/ajax/favor/#{item_id}"
            success: (data) ->
                $form = $(data)
                parent.setWidget $form
                $form.trigger 'spinner.stop'
            
    createAtForm: (parent, button) ->
        item_id = $(button).parent().find('.item-id').val()
        $.ajax
            url: "#{App.BASEURL}/ajax/message/#{item_id}"
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
            
@Zhelper = Zhelper
