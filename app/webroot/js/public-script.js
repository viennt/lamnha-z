$(function(){
        $(window).scroll(function(){
                if( $(window).scrollTop() > 36 && !window.matchMedia('(max-width: 1200px)').matches) {
                	$('.nav-bar').addClass("fixed-nav");
                    $('.nav-alias').css('display', 'block');
                    $('.logo-panel').css({'height': '72px', 'padding-top': '9px'});
                    $('.nav-panel').css({'height': '72px'});
                    $('.top').css('display', 'none');
                    $('.rec').css({'border-top-width': '72px', 'border-right-width': '48px'});
                    $('.logo-panel>img').css('height', '48px');
                } else {
                	$('.nav-bar').removeClass("fixed-nav");
                    $('.nav-alias').css('display', 'none');
                    $('.logo-panel').css({'height': '108px', 'padding-top': '18px'});
                    $('.nav-panel').css({'height': '108px'});
                    $('.top').css('display', 'block');
                    $('.rec').css({'border-top-width': '108px', 'border-right-width': '72px'});
                    $('.logo-panel>img').css('height', '72px');
                }
        });
  });