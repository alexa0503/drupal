<?php
$data = null;
//var_dump($view->result);
foreach ($view->result as $row){
    if( $row->nid == arg(1) ){
        $data["body"] = $row->_field_data["nid"]["entity"]->body["und"][0]["value"];
        $data["title"] = $row->node_title;
        break;
    }
}
?>
<!--article start-->
<div class="articleBlock">
    <div class="container">
    	<div class="col-sm-8 col-sm-offset-2 col-xs-12">
        	<h2 class="title"><?php echo  $data["title"];?></h2>
            <div class="body"><?php echo $data["body"]?></div>
        </div>
    </div>
</div>
<!--article end-->
