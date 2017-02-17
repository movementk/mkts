// #gnb 대메뉴
(function($){
    $(document).on('mouseenter focus', '#gnb > .menu-list > li', function() {
        $(this).siblings().removeClass('active');
        $(this).addClass('active');
    });
    $(document).on('mouseleave', '#gnb > .menu-list > li', function() {
        $(this).removeClass('active');
    });
})(jQuery);