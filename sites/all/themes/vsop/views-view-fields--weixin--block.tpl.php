<?php

/**
 * @file
 * Default simple view template to all the fields as a row.
 *
 * - $view: The view in use.
 * - $fields: an array of $field objects. Each one contains:
 *   - $field->content: The output of the field.
 *   - $field->raw: The raw data for the field, if it exists. This is NOT output safe.
 *   - $field->class: The safe class id to use.
 *   - $field->handler: The Views field handler object controlling this field. Do not use
 *     var_export to dump this object, as it can't handle the recursion.
 *   - $field->inline: Whether or not the field should be inline.
 *   - $field->inline_html: either div or span based on the above flag.
 *   - $field->wrapper_prefix: A complete wrapper containing the inline_html to use.
 *   - $field->wrapper_suffix: The closing tag for the wrapper.
 *   - $field->separator: an optional separator that may appear before a field.
 *   - $field->label: The wrap label text to use.
 *   - $field->label_html: The full HTML of the label to use including
 *     configured element type.
 * - $row: The raw result object from the query, with all data it fetched.
 *
 * @ingroup views_templates
 */
$link = strip_tags($fields['field_link']->content,'<a>');
preg_match_all('/<img.*?src="(.*?)".*?>/is',$fields['field_wx_image']->content,$matches);
$img_url = $matches[1][0];
$title =  strip_tags($fields['title']->content);
$content =  strip_tags($fields['body']->content);
$ga = strip_tags($fields['field_ga']->content);
?>
<div class="col-sm-4 col-xs-12 footContent fc1">
    <div class="innerDiv"><a href="<?php echo $link;?>" onclick="<?php echo $ga;?>">
        <div class="fcTop"><img src="<?php echo $img_url;?>" width="100%" /></div>
        </a><div class="fcBottom"><a href="#1">
            <div class="fcbTitle">
                <div class="fcbt1"><?php echo $title;?></div>
                <div class="fcbt2"><?php echo $content;?></div>
            </div>
        </a><div class="fcbLink"><a href="<?php echo $link;?>" onclick="<?php echo $ga;?>"></a><a href="<?php echo $link;?>" class="fcbBtn1"  onclick="<?php echo $ga;?>">点击查看</a> <a href="javascript:void(0);" class="fcbBtn2" onclick="showNavQc();"><img src="<?php echo path_to_theme()?>/images/footWechat.png"></a>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
