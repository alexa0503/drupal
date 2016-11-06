<!--drink start-->
<div class="drinkBlock">
    <div class="container hasBg">
        <!--drink nav start-->
        <div class="drinkNavOuter">
            <div class="drinkNav">
                <div class="container">
                    <div class="col-md-10 col-md-offset-1 col-sm-12 dnOuter">
                    	<div class="col-xs-12 dnTop">
                        	<div class="col-xs-12 dnTab dnTabActive"><a href="javascript:void(0);" onClick="changeDnTab(0);">经典主打</a></div>
                            <!--<div class="col-xs-6 dnTab"><a href="javascript:void(0);" onClick="changeDnTab(1);">季节特供</a></div>-->
                            <div class="clearfix"></div>
                        </div>
                        <div class="dtContent dtContent1">
        					<div class="col-sm-4 dnCol">
                        	       <div class="dnColTitle" onClick="showThisDirks(this);">清新脱俗基本款 <img src="/<?php echo path_to_theme()?>/images/drink/drinkIcon3.png" class="drinkIcon3 mobileShow anmBlock"></div>
                                <ul>
                                    <?php foreach ($view->result as $row):?>
                                        <?php if ( $row->field_field_type[0]['raw']['value'] == 1 ):?>
                                            <li>
                                                <a href="javascript:void(0);" at="#d<?php echo $row->nid;?>"><?php echo  $row->node_title;?>
                                                </a>
                                            </li>
                                        <?php endif;?>
                                    <?php endforeach;?>

                                </ul>
                            </div>
                            <div class="col-sm-4 dnCol dnColHaveBorder">
                                <div class="dnColTitle" onClick="showThisDirks(this);">气场全开进阶版 <img src="/<?php echo path_to_theme()?>/images/drink/drinkIcon3.png" class="drinkIcon3 mobileShow anmBlock"></div>
                                <ul>
                                    <?php foreach ($view->result as $row):?>
                                        <?php if ( $row->field_field_type[0]['raw']['value'] == 2 ):?>
                                            <li>
                                                <a href="javascript:void(0);" at="#d<?php echo $row->nid;?>"><?php echo  $row->node_title;?>
                                                </a>
                                            </li>
                                        <?php endif;?>
                                    <?php endforeach;?>
                                </ul>
                            </div>
                            <div class="col-sm-4 dnCol">
                                <div class="dnColTitle" onClick="showThisDirks(this);">创意巅峰终极版 <img src="/<?php echo path_to_theme()?>/images/drink/drinkIcon3.png" class="drinkIcon3 mobileShow anmBlock"></div>
                                <ul>
                                    <?php foreach ($view->result as $row):?>
                                        <?php if ( $row->field_field_type[0]['raw']['value'] == 3 ):?>
                                            <li>
                                                <a href="javascript:void(0);" at="#d<?php echo $row->nid;?>"><?php echo  $row->node_title;?>
                                                </a>
                                            </li>
                                        <?php endif;?>
                                    <?php endforeach;?>
                                </ul>
                            </div>
                        </div>
                        <div class="dtContent dtContent2" style="display:none;">
        					<div class="col-sm-4 dnCol">
                        	<div class="dnColTitle" onClick="showThisDirks(this);">清新脱俗基本款 <img src="/<?php echo path_to_theme()?>/images/drink/drinkIcon3.png" class="drinkIcon3 mobileShow anmBlock"></div>
                            <ul>
                                <?php foreach ($view->result as $row):?>
                                    <?php if ( $row->field_field_type[0]['raw']['value'] == 5 ):?>
                                        <li>
                                            <a href="javascript:void(0);" at="#d<?php echo $row->nid;?>"><?php echo  $row->node_title;?>
                                            </a>
                                        </li>
                                    <?php endif;?>
                                <?php endforeach;?>
                            </ul>
                        </div>
                            <div class="col-sm-4 dnCol dnColHaveBorder">
                                <div class="dnColTitle" onClick="showThisDirks(this);">气场全开进阶版 <img src="/<?php echo path_to_theme()?>/images/drink/drinkIcon3.png" class="drinkIcon3 mobileShow anmBlock"></div>
                                <ul>
                                    <?php foreach ($view->result as $row):?>
                                        <?php if ( $row->field_field_type[0]['raw']['value'] == 5 ):?>
                                            <li>
                                                <a href="javascript:void(0);" at="#d<?php echo $row->nid;?>"><?php echo  $row->node_title;?>
                                                </a>
                                            </li>
                                        <?php endif;?>
                                    <?php endforeach;?>
                                </ul>
                            </div>
                            <div class="col-sm-4 dnCol">
                                <div class="dnColTitle" onClick="showThisDirks(this);">创意巅峰终极版 <img src="/<?php echo path_to_theme()?>/images/drink/drinkIcon3.png" class="drinkIcon3 mobileShow anmBlock"></div>
                                <ul>
                                    <?php foreach ($view->result as $row):?>
                                        <?php if ( $row->field_field_type[0]['raw']['value'] == 6 ):?>
                                            <li>
                                                <a href="javascript:void(0);" at="#d<?php echo $row->nid;?>"><?php echo  $row->node_title;?>
                                                </a>
                                            </li>
                                        <?php endif;?>
                                    <?php endforeach;?>
                                </ul>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!--drink nav end-->
        <?php foreach ($view->result as $key=>$row):?>
        <div class=" col-md-10 col-md-offset-1 col-sm-12 col-xs-12 drinkLine drinkLine<?php echo $key+1;?>">
           <div class="innerDiv">
               <div class=" col-md-7 col-sm-8 col-xs-12 drinkLineLeft drinkLine<?php echo $key+1;?>Left anmBlock">
                   <div class="drinkLineLeftContent needShowa" style="opacity:0;" id="d<?php echo $row->nid;?>">
                       <div class="drinkSubTitle">
                           <div class="brandSubEnTitle"></div>
                           <?php echo  $row->node_title;//var_dump($row->field_body_1[0]['raw']['value']);?>
                       </div>
                       <div class="drinkContext"><?php echo  $row->field_body_1[0]['raw']['value'];?><br><br>
                       <font class="greenFont">调配方法：</font><br>
                       <?php echo $row->field_field_method[0]['raw']['value'];?>
                       <br><br><br></div>
                   </div>
               </div>
               <div class=" col-md-6 col-sm-6 col-xs-12 drinkLineRight drinkLine<?php echo $key+1;?>Right anmBlock">
                   <div class="brandLineRightContent needShowb" style="opacity:0;">
                       <div class="innerDiv">
                           <img src="<?php echo file_create_url(variable_get('file_public_path', conf_path() . '/files').'/'.$row->field_field_image[0]['raw']['filename'])?>" width="100%">
                           <?php if ($row->field_field_border_position[0]['raw']['value'] == 1) :?>
                           <div class="abs drinkBorder1 pcShow"></div>
                            <?php elseif ($row->field_field_border_position[0]['raw']['value'] == 2) :?>
                            <div class="abs drinkBorder2 pcShow"></div>
                           <?php endif;?>
                           <img src="<?php echo file_create_url(variable_get('file_public_path', conf_path() . '/files').'/'.$row->field_field_image[0]['raw']['filename']);?>" width="100%" class="coverImg">
                       </div>
                   </div>
               </div>
               <div class="clearfix"></div>
           </div>
        </div>
        <?php endforeach;?>
    </div>
</div>
<!--drink end-->
