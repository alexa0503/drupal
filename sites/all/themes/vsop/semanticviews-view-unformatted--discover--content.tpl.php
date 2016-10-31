<?php
$data = [];
foreach ($view->result as $row){
    $data[$row->field_field_discover_type[0]['raw']['value']][] = $row;
}
?>
<!--brand start-->
<div class="brandBlock">
    <div class="container containerBg" style="width:100%; max-width:1920px;">
    	<div class="container">
            <div class="indexTop">
                <?php foreach ($data[1] as $row):?>
                    <div class=" col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 indexVideo txtTopBg">
                        <div class="topTitle">
                            <div class="topEnTitle"></div>
                            <?php echo $row->node_title;?>
                        </div>
                        <div class="topContext">
                            <div class="innerDiv"><?php echo $row->field_body_1[0]['raw']['value'];?></div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                <?php endforeach;?>
            </div>

            <?php foreach ($data[2] as $key=>$row):?>
                    <div class="brandLine brandLine<?php echo $key+1;?>">
                        <div class="innerDiv">
                            <div class=" col-md-5 col-md-offset-2 col-sm-7 col-xs-12 brandLineLeft brandLine<?php echo $key+1;?>Left anmBlock">
                                <img src="<?php echo file_create_url(variable_get('file_public_path', conf_path() . '/files').'/'.$row->field_field_image[0]['raw']['filename'])?>" width="100%" class="needShowa" style="opacity:0;">
                            </div>
                            <div class=" col-md-4 col-sm-6 col-xs-12 brandLineRight brandLine<?php echo $key+1;?>Right anmBlock">
                                <div class="brandLineRightContent needShowb" style="opacity:0;">
                                    <div class="brandTitle">
                                        <div class="brandEnTitle"></div>
                                        <?php echo $row->node_title;?>
                                    </div>
                                    <div class="brandContext"><?php echo $row->field_body_1[0]['raw']['value'];?></div>
                                    <div class="brandBuyLink">
                                        立 即 购 买<?php if (null != $row->field_field_jd_link[0]['raw']['value']):?><a href="<?php echo $row->field_field_jd_link[0]['raw']['value'];?>" onclick="$row->field_field_jd_ga[0]['raw']['value']"><img src="/sites/all/themes/vsop/images/footIcon2.png" width="36"></a><?php endif;?>
                                        <?php if (null != $row->field_field_tmall_link[0]['raw']['value']):?><a href="<?php echo $row->field_field_tmall_link[0]['raw']['value'];?>" onclick="$row->field_field_jd_ga[0]['raw']['value']"><img src="/sites/all/themes/vsop/images/footIcon3.png" width="36"></a><?php endif;?>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
            <?php endforeach;?>



            <div class="brandLine brandLine4">
                <div class="innerDiv">
                    <div class=" col-md-5 col-md-offset-2 col-sm-7 col-xs-12 brandLineLeft brandLine4Left anmBlock">
                        <div class="brandLineLeftContent needShowa" style="opacity:0;">
                            <div class="brandTitle">
                                <div class="brandEnTitle"></div>
                                <?php echo $data[3][0]->node_title;?>
                            </div>
                            <div class="brandContext"><?php echo $data[3][0]->field_body_1[0]['raw']['value'];?></div>
                            <div class="brandBuyBtn">
                                <a href="javascript:void(0);" class="brandBtn">我 要 调 酒</a>
                            </div>
                        </div>
                    </div>
                    <div class=" col-md-4 col-sm-6 col-xs-12 brandLineRight brandLine4Right anmBlock brandLineRightHasGreen">
                    	<div class="innerDiv">
                        	<div class="brandRightGreen pcShow"></div>
                            <div class=" col-md-4 col-sm-6 col-xs-12 brandLineRightInner">
                                <div class="brandLineRightContent needShowb" style="opacity:0; z-index:100;">
                                    <div class="innerDiv">
                                        <div class="brandTitle">
                                            <div class="brandEnTitle"></div>
                                            <?php echo $data[4][0]->node_title;?>
                                        </div>
                                        <div class="brandContext"><?php echo $data[4][0]->field_body_1[0]['raw']['value'];?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>

            <div class="brandLine brandLine5">
                <div class="innerDiv">
                    <div class=" col-md-5 col-md-offset-2 col-sm-7 col-xs-12 brandLineLeft brandLine5Left anmBlock">
                        <div class="brandLineLeftContent needShowa" style="opacity:0;">
                            <div class="brandTitle">
                                <div class="brandEnTitle"></div>
                                <?php echo $data[5][0]->node_title;?>
                            </div>
                            <div class="brandContext"><?php echo $data[5][0]->field_body_1[0]['raw']['value'];?></div>
                        </div>
                    </div>
                    <div class=" col-md-4 col-sm-6 col-xs-12 brandLineRight brandLine5Right anmBlock brandLineRightHasGreen">
                    	<div class="innerDiv">
                            <div class=" col-md-4 col-sm-6 col-xs-12 brandLineRightInner" style="padding:0;">
                                <div class="brandLineRightContent needShowb" style="opacity:0; z-index:100;">
                                    <div class="innerDiv">
                                        <img src="<?php echo file_create_url(variable_get('file_public_path', conf_path() . '/files').'/'.$data[5][0]->field_field_image[0]['raw']['filename'])?>" width="100%">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>

            <div class="brandLine brandInfo">
                <div class="innerDiv">
                    <div class="col-md-8 col-md-offset-2 col-sm-12">
                        <div class="biTop anmBlock">
                            <div class="innerDiv">
                                <img src="/sites/all/themes/vsop/images/brand/infoTop.png" width="100%">
                                <div class="bitTxt">干邑并非酿造<br>而是创造</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-md-offset-2 col-sm-12 biBottom">
                        <div class="bibLeft anmBlock2">
                            <div class="bibTop">
                                <div class="innerDiv">
                                    <img src="<?php echo file_create_url(variable_get('file_public_path', conf_path() . '/files').'/'.$data[6][0]->field_field_image[0]['raw']['filename'])?>" width="100%">
                                    <div class="bibTxt"><span>Cognac</span><br><?php echo $data[6][0]->node_title;?></div>
                                </div>
                            </div>
                            <div class="bibBottom">
                                <?php echo $data[6][0]->field_body_1[0]['raw']['value'];?>
                            </div>
                        </div>

                        <div class="bibRight anmBlock">
                            <div class="bibTop">
                                <div class="innerDiv">
                                    <img src="<?php echo file_create_url(variable_get('file_public_path', conf_path() . '/files').'/'.$data[6][1]->field_field_image[0]['raw']['filename'])?>" width="100%">
                                    <div class="bibTxt"><span>Eau de Vie</span><br><?php echo $data[6][1]->node_title;?></div>
                                </div>
                            </div>
                            <div class="bibBottom">
                                <?php echo $data[6][1]->field_body_1[0]['raw']['value'];?>
                            </div>
                        </div>

                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            </div>
        </div>
</div>
    <!--brand end-->
