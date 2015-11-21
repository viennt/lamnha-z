// Nav menu
$(function(){
    $(window).scroll(function(){
            if( $(window).scrollTop() > 36 && !window.matchMedia('(max-width: 1200px)').matches) {
            	$('.nav-bar').addClass("fixed-nav");
                $('.nav-alias').css('display', 'block');
                $('.logo-panel').css({'height': '72px', 'padding-top': '9px'});
                $('.nav-panel').css({'height': '72px'});
                $('.nav-bar .cover').css({'height': '72px'});
                $('.nav-bar .cover .container').css({'height': '72px'});
                $('.top').css('display', 'none');
                $('.rec').css({'border-top-width': '72px', 'border-right-width': '48px'});
                $('.logo-panel>a>img').css('height', '48px');
                $('#bottom').css('border-bottom', '2px solid #E5E5E5');
            } else {
            	$('.nav-bar').removeClass("fixed-nav");
                $('.nav-alias').css('display', 'none');
                $('.logo-panel').css({'height': '108px', 'padding-top': '18px'});
                $('.nav-panel').css({'height': '108px'});
                $('.nav-bar .cover').css({'height': '108px'});
                $('.nav-bar .cover .container').css({'height': '108px'});
                $('.top').css('display', 'block');
                $('.rec').css({'border-top-width': '108px', 'border-right-width': '72px'});
                $('.logo-panel>a>img').css('height', '72px');
                $('#bottom').css('border-bottom', '0px');
            }
    });
});

// Left menu
$(function(){
    $(document).ready(function(){

        $('#cssmenu li.active').addClass('open').children('ul').show();
            $('#cssmenu li.has-sub>a').on('click', function(){
                $(this).removeAttr('href');
                var element = $(this).parent('li');
                if (element.hasClass('open')) {
                    element.removeClass('open');
                    element.find('li').removeClass('open');
                    element.find('ul').slideUp(200);
                }
                else {
                    element.addClass('open');
                    element.children('ul').slideDown(200);
                    element.siblings('li').children('ul').slideUp(200);
                    element.siblings('li').removeClass('open');
                    element.siblings('li').find('li').removeClass('open');
                    element.siblings('li').find('ul').slideUp(200);
                }
            });

    });
});

// Drag drop
$(function(){
    // Check if have drag or drop element
    if(($('.drag-item').length <= 0) || ($('.drop-cart').length <= 0))
        return;
    $('.drag-item').draggable({
        revert: true,
        proxy:'clone',
        onStartDrag:function(){
            $(this).draggable('options').cursor = 'not-allowed';
            $(this).draggable('proxy').css('z-index',10);
            $(this).css({'opacity': '0'});
        },
        onStopDrag:function(){
            $(this).draggable('options').cursor='move';
            $(this).animate({'opacity': '1'});
        }
    });
    $('.drop-cart').droppable({
        onDragEnter:function(e, source){
            $(this).animate({'opacity': '0.1'});
            $(source).draggable('options').cursor='auto';
        },
        onDragLeave:function(e, source){
            $(this).animate({'opacity': '1'});
            $(source).draggable('options').cursor='not-allowed';
        },
        onDrop:function(e, source){
            $(this).animate({'opacity': '1'});
            var name = $(source).find('strong').html();
            $('#cart-items').append('<li class="list-group-item" style="padding: 15px;">' + name + '</li>');
        }
    });
});