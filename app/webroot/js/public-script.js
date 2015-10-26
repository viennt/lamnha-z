$(function(){
        $(window).scroll(function(){
                if( $(window).scrollTop() > 36 && !window.matchMedia('(max-width: 1200px)').matches) {
                	$('.nav-bar').addClass("fixed-nav");
                    $('.nav-alias').css('display', 'block');
                    $('.logo-panel').css({'height': '72px', 'padding-top': '9px'});
                    $('.nav-panel').css({'height': '72px'});
                    $('.top').css('display', 'none');
                    $('.rec').css({'border-top-width': '72px', 'border-right-width': '48px'});
                    $('.logo-panel>a>img').css('height', '48px');
                    $('.nav-panel>.bottom').css('border-bottom', '2px solid #E5E5E5');
                } else {
                	$('.nav-bar').removeClass("fixed-nav");
                    $('.nav-alias').css('display', 'none');
                    $('.logo-panel').css({'height': '108px', 'padding-top': '18px'});
                    $('.nav-panel').css({'height': '108px'});
                    $('.top').css('display', 'block');
                    $('.rec').css({'border-top-width': '108px', 'border-right-width': '72px'});
                    $('.logo-panel>a>img').css('height', '72px');
                    $('.nav-panel>.bottom').css('border-bottom', '0px');
                }
        });
  });