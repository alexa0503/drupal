<?php
hide($content['comments']);
hide($content['links']);
?>
<div class="articleBlock">
    <div class="container">
    	<div class="col-sm-8 col-sm-offset-2 col-xs-12">
        	<h2 class="title"><?php print $title; ?></h2>
            <div class="body"><?php print render($content);?></div>
        </div>
    </div>
</div>
