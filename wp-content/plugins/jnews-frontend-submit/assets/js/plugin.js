(function($){
    "use strict";

    var $container = $('.jeg_post_editor');

    function selectize_control(element, options, ajax_load, action, multiple)
    {
        element.selectize({
            plugins: ['drag_drop', 'remove_button'],
            options: options,
            persist: true,
            create: true,
            hideSelected: true,
            render: {
                option: function(item)
                {
                    if ( ajax_load )
                    {
                        if ( item.text === undefined )
                        {
                            return '<div><span>' + item.value + '</span></div>';
                        } else {
                            return '<div><span>' + item.text + '</span></div>';
                        }
                    } else {
                        return '<div class="' + item.class + '"><span>' + item.text + '</span></div>';
                    }
                }
            },
            load: function(query, callback)
            {
                if ( ajax_load )
                {
                    if (!query.length || query.length < 3) return callback();

                    ajax_control(ajaxurl, encodeURIComponent(query), action).done(function(data) {
                        callback(data);
                    });
                }
            },
            onItemAdd: function()
            {
                if (!multiple)
                {
                    var value = this.items;

                    if (value.length > 1)
                    {
                        for ( var a = 0; a < value.length; a++ )
                        {
                            this.removeItem(value[a]);
                            this.refreshOptions();
                        }
                    }
                }
            }
        });
    }

    function ajax_control(url, value, action)
    {
        return $.ajax({
            url: url,
            type: 'POST',
            dataType: 'json',
            data: {
                'string' : value,
                'action'  : action
            },
        });
    }

    function multicategory_control()
    {
        $container.find('.multicategory-field').each(function(){
            var element = $(this),
                options = JSON.parse(element.parent().find('.data-option').text());

            if (element.hasClass('jeg-ajax-load'))
            {
                selectize_control(element, options, true, 'vp_find_ajax_post_category', true);
            } else {
                selectize_control(element, options, false, false, true);
            }
        });
    }

    function singlecategory_control()
    {
        $container.find('.singlecategory-field').each(function(){
            var element = $(this),
                options = JSON.parse(element.parent().find('.data-option').text());

            if (element.hasClass('jeg-ajax-load'))
            {
                selectize_control(element, options, true, 'vp_find_ajax_post_category', false);
            } else {
                selectize_control(element, options, false, false, false);
            }
        });
    }

    function multitag_control()
    {
        $container.find('.multitag-field').each(function(){
            var element = $(this),
                options = JSON.parse(element.parent().find('.data-option').text());

            if (element.hasClass('jeg-ajax-load'))
            {
                selectize_control(element, options, true, 'vp_find_ajax_post_tag', true);
            } else {
                selectize_control(element, options, false, false, true);
            }
        });
    }


	function post_format()
	{
		$container.find('.format-nav li a').each( function()
		{
			var element = $(this);

			if ( element.hasClass('active') )
			{
				if ( element.data('type') === 'video' )
				{
					$container.find('input[name="video"]').fadeIn('fast');
				}
				else if ( element.data('type') === 'image' )
				{
					$container.find('input[name="image"]').fadeIn('fast');
				} else {
					$container.find('input[name="gallery"]').fadeIn('fast');
				}
			}
		});

		$container.on('click', '.format-nav li a', function(e)
		{
			e.preventDefault();

			var element = $(this);

			if ( element.hasClass('active') )
			{
				// do nothing
			} else {
				$container.find('.format-nav li a').removeClass('active');
				element.addClass('active');
			}

			$container.find('.format-field input, .format-field .jeg_upload_wrapper').css({
				'display' : 'none'
			});

			if ( element.data('type') === 'video' )
			{
				$container.find('input[name="format"]').val('video');
				$container.find('input[name="video"]').fadeIn('fast');
			}
			else if ( element.data('type') === 'image' )
			{
				$container.find('input[name="format"]').val('image');
				$container.find('#featured_image').fadeIn('fast');
			} else {
				$container.find('input[name="format"]').val('gallery');
				$container.find('#featured_image_gallery').fadeIn('fast');
			}
		});
	}

    function post_list_filter()
    {
        $('.jeg_post_list_filter select[name="post-list-filter"]').on('change', function()
        {
            var order = $(this).val(),
                url   = $('input[name="current-page-url"]').val();

            if ( url.indexOf('?') > -1 )
            {
               url += '&order=' + order;
            }else{
               url += '?order=' + order;
            }
            window.location.href = url;
        });
    }

	function dispatch()
	{
		multicategory_control();
        singlecategory_control();
        multitag_control();
		post_format();
        post_list_filter();
	}

	$(document).ready(function()
	{
		dispatch();
	});

})(jQuery);
