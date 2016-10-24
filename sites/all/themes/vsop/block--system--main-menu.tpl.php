<!--nav start-->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container" style="width:100%; max-width:1920px;">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <img src="<?php print path_to_theme();?>/images/navClose.png" class="navClose" style="display:none;">
            </button>
            <div class="navbar-brand"><img src="<?php print path_to_theme();?>/images/navLogo.png"></div>
        </div>
        <div id="navbar" class="collapse navbar-collapse">

            <?php print $content; ?>
            <ul class="nav navbar-nav navbar-right">
                <li class="navIcon navIcon1"><a href="#"></a></li>
                <li class="navIcon navIcon2"><a href="#"></a></li>
                <li class="navIcon navIcon3"><a href="#"></a></li>
                <li class="navIcon navIcon4"><a href="#"></a></li>
            </ul>
        </div>
    </div>

    <div class="navQcBlock" style="display:none;">
    	<div class="qcBg" onClick="closeNavQc();"></div>
        <img src="<?php print path_to_theme();?>/images/navQc.png" width="147" height="140" class="navQc">
        <a href="javascript:void(0);" class="navCloseBtn" onClick="closeNavQc();"><img src="<?php print path_to_theme();?>/images/navClose.png"></a>
    </div>
</nav>
<!--nav end-->
