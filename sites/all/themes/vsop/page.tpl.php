<?php unset($page['content']['system_main']);?>
<?php if ($page['help'] && arg(0) == 'user'): ?>
  <div id="help">
    <?php echo render($page['help']); ?>
  </div>
<?php else: ?>
<?php echo render($page['content']);?>
<script src="/<?php echo path_to_theme();?>/js/preloadjs-0.6.2.min.js"></script>
<script src="/<?php echo path_to_theme();?>/js/bootstrap.min.js"></script>
    <?php if (arg(0) == 'brand'):?>
    <script type="text/javascript" src="/<?php echo path_to_theme();?>/js/jquery.touchSwipe.min.js"></script>
    <script type="text/javascript" src="/<?php echo path_to_theme();?>/js/html5lightbox/html5lightbox.js"></script>
    <script type="text/javascript" src="/<?php echo path_to_theme();?>/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script type="text/javascript" src="http://player.youku.com/jsapi"></script>
    <script type="text/javascript" src="/<?php echo path_to_theme();?>/js/bxslider/jquery.bxslider.min.js"></script>
    <script type="text/javascript" src="/<?php echo path_to_theme();?>/js/common.js"></script>
    <script>
   //单页加载完毕
   $(document).ready(function(){
       brandPos();
       brandScorll();
   });
   //单页窗口大小改变
   $(window).resize(function(){
       brandPos();
   });
   //单页滚动
   $(window).scroll(function(){
       brandScorll();
   });
   </script>
   <?php elseif (arg(0) == 'breakout'):?>

<script src="/<?php echo path_to_theme();?>/js/jquery.touchSwipe.min.js"></script>
<script src="/<?php echo path_to_theme();?>/js/html5lightbox/html5lightbox.js"></script>
<script src="/<?php echo path_to_theme();?>/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript" src="http://player.youku.com/jsapi"></script>
<script src="/<?php echo path_to_theme();?>/js/bxslider/jquery.bxslider.min.js"></script>
<script src="/<?php echo path_to_theme();?>/js/common.js"></script>
    <script>
    //单页加载完毕
    $(document).ready(function(){
    	indexPos();
    	indexScorll();

    	loadIndexImg();
    });
    //单页窗口大小改变
    $(window).resize(function(){
    	indexPos();
    });
    //单页滚动
    $(window).scroll(function(){
    	indexScorll();
    });
    </script>
    <?php elseif (arg(0) == 'event'):?>
    <script src="/<?php echo path_to_theme();?>/js/jquery.touchSwipe.min.js"></script>
    <script src="/<?php echo path_to_theme();?>/js/html5lightbox/html5lightbox.js"></script>
    <script src="/<?php echo path_to_theme();?>/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script type="text/javascript" src="http://player.youku.com/jsapi"></script>
    <script src="/<?php echo path_to_theme();?>/js/bxslider/jquery.bxslider.min.js"></script>
    <script src="/<?php echo path_to_theme();?>/js/common.js"></script>

    <script>
    //单页加载完毕
    $(document).ready(function(){
    	if($('.bxslider li').length==1){
    		$('.bxslider').bxSlider({
    			auto: false,
    			infiniteLoop:false,
    			responsive:true
    			});
    		$('.bx-controls').hide();
    		}
    		else{
    			$('.bxslider').bxSlider({
    				auto: true,
    				responsive:true
    				});
    			}
    	eventPos();
    	eventScorll();
    	});
    //单页窗口大小改变
    $(window).resize(function(){
    	eventPos();
    	});
    //单页滚动
    $(window).scroll(function(){
    	eventScorll();
    	});
    </script>
<?php elseif (arg(0) == 'partymaster'):?>
    <script src="/<?php echo path_to_theme();?>/js/jquery.touchSwipe.min.js"></script>
    <script src="/<?php echo path_to_theme();?>/js/html5lightbox/html5lightbox.js"></script>
    <script src="/<?php echo path_to_theme();?>/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script type="text/javascript" src="http://player.youku.com/jsapi"></script>
    <script src="/<?php echo path_to_theme();?>/js/bxslider/jquery.bxslider.min.js"></script>
    <script src="/<?php echo path_to_theme();?>/js/common.js"></script>

    <script>
    //单页加载完毕
    $(document).ready(function(){
    	if($('.bxslider li').length==1){
    		$('.bxslider').bxSlider({
    			auto: false,
    			infiniteLoop:false,
    			responsive:true
    			});
    		$('.bx-controls').hide();
    		}
    		else{
    			$('.bxslider').bxSlider({
    				auto: true,
    				responsive:true
    				});
    			}
    	});
    //单页窗口大小改变
    $(window).resize(function(){
    	});
    //单页滚动
    $(window).scroll(function(){
    	});
    </script>
    <?php elseif (arg(0) == 'longdrink'):?>
<script src="/<?php echo path_to_theme();?>/js/jquery.touchSwipe.min.js"></script>
<script src="/<?php echo path_to_theme();?>/js/html5lightbox/html5lightbox.js"></script>
<script src="/<?php echo path_to_theme();?>/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript" src="http://player.youku.com/jsapi"></script>
<script src="/<?php echo path_to_theme();?>/js/bxslider/jquery.bxslider.min.js"></script>
<script src="/<?php echo path_to_theme();?>/js/common.js"></script>

<script>
//单页加载完毕
$(document).ready(function(){
	drinkPos();
	drinkScorll();
	drinkNav();
	drinkNavInit();
});
//单页窗口大小改变
$(window).resize(function(){
	drinkPos();
	drinkNavInit();
});
//单页滚动
$(window).scroll(function(){
	drinkScorll();
});
</script>

<?php elseif (arg(0) == 'agree'):?>
    <script>
    $('body').css('padding',0);
    var wHeight;
    function noteSize(){
    	wHeight=$(window).height();
    	$('.noteBg').height(wHeight);
    	}

    function choseNote(){
    	if($('.noteSel').hasClass('noteSelOn')){
    		$('.noteSel').removeClass('noteSelOn');
    		}
    		else{
    			$('.noteSel').addClass('noteSelOn');
    			}
    	}

    function testAnim(t,x) {
        $(t).removeClass().addClass(x + ' animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend',
    	function(){
    		$(this).removeClass();
    		});
    	};

    function agreeNote(){
    	if($('.noteSel').hasClass('noteSelOn')){
    		//同意 加入缓存cookie 并跳转页面
                $.getJSON('/read.php',function(json){
                    window.location.href=json.url;
                })
    		}
    		else{
			testAnim('#noteBtn','shake');
			}
    	}

    //单页加载完毕
    $(document).ready(function(){
    	noteSize();
        setTimeout(agreeNote,3000);
	});
    //单页窗口大小改变
    $(window).resize(function(){
    	noteSize();
    	});
    //单页滚动
    $(window).scroll(function(){

    	});
    </script>
<?php else:?>
<script src="/<?php echo path_to_theme();?>/js/jquery.touchSwipe.min.js"></script>
<script src="/<?php echo path_to_theme();?>/js/html5lightbox/html5lightbox.js"></script>
<script src="/<?php echo path_to_theme();?>/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript" src="http://player.youku.com/jsapi"></script>
<script src="/<?php echo path_to_theme();?>/js/bxslider/jquery.bxslider.min.js"></script>
<script src="/<?php echo path_to_theme();?>/js/common.js"></script>


<script>
//单页加载完毕
$(document).ready(function(){
	});
//单页窗口大小改变
$(window).resize(function(){
	});
//单页滚动
$(window).scroll(function(){
	});
</script>
   <?php endif;?>
<?php endif; ?>
