<?php unset($page['content']['system_main']);?>
<?php if ($page['help'] && arg(0) == 'user'): ?>
  <div id="help">
    <?php echo render($page['help']); ?>
  </div>
<?php else: ?>
<?php echo render($page['content']);?>
<script src="/<?php echo path_to_theme();?>/js/bootstrap.min.js"></script>
    <?php if (arg(0) == 'discover'):?>
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
   <?php elseif (arg(0) == 'burst'):?>

<script src="/<?php echo path_to_theme();?>/js/preloadjs-0.6.2.min.js"></script>
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
    <?php elseif (arg(0) == 'play'):?>
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
<?php elseif(arg(0) == 'party'):?>
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
    <?php elseif(arg(0) == 'cool'):?>
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
