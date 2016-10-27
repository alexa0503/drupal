
<?php if ($page['help'] && arg(0) == 'user'): ?>
  <div id="help">
    <?php print render($page['help']); ?>
  </div>
<?php else: ?>
<?php print render($page['content']); ?>

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
<?php endif; ?>
