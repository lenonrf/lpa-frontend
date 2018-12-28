(function($){
    // Multiproduct.js
    $('.multiproduct-input input.input-sortable').each(function()
    {
        var $parent = $(this).parent();
        var options = $parent.find('.data-option');
        options     = JSON.parse(options.text());

        $(this).selectize({
            plugins: ['drag_drop', 'remove_button'],
            options: options,
            persist: true,
            create: false,
            hideSelected: true,
            render: {
                option: function(item, escape) {
                    return '<div class="' + item.class + '"><span>' + item.text + '</span></div>';
                }
            }
        });
    });
})(window.jQuery);