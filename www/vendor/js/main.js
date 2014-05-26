$(document).on('change', '.select-button', function() {
    var href = $('.select-button option:selected').attr('data-url');
    window.location.href = href;
});

$(document).on('click', '.alert p',function() {
    $(this).addClass("hide");
});

$(function() {
    if (window.innerWidth >= 768) {
        var $options = $('.nav-mobile .select-button > option');
        if ($options.length) {
            var $menu = $('<div class="nav-area hidden-mobile"><div class="wrapper"><div class="row button-form"><div class="span-12"><div class="row"><ul class="flat"></ul></div></div></div></div></div>');
            var $ul = $menu.find('ul.flat');

            $options.each(function() {
                var $this = $(this);
                if ($this.attr('disabled')) {
                    $ul.append('<li class="separator">&nbsp;</li>');
                } else {

                    $ul.append('<li><a href="' + $this.attr('data-url') + '" class="button ' + ($this.attr('selected') ? 'active' : '') + '">' + $this.html() + '</a></li>');
                }
            });
            $('.nav-mobile').before($menu);
        }
    }
});