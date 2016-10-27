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
preg_match_all('/<img.*?src="(.*?)".*?>/is',$fields['field_footer_qr']->content,$matches);
$qr = $matches[1][0];
preg_match_all('/<img.*?src="(.*?)".*?>/is',$fields['field_image']->content,$matches);
$logo = $matches[1][0];
$title =  strip_tags($fields['title']->content);
$content =  $fields['body']->content;
?>

        <div class="footQc"><img src="<?php echo $qr;?>">
            <div class="footQcTxt">关 注 轩 尼 诗 新 点 官 方 微 信</div>
            <div class="footLogo"><img src="<?php echo $logo;?>" width="157"></div>
        </div>
        <div class="footSns">
            <?php echo $fields['field_sns']->content;?>
        </div>
        <div class="footLink">
            <?php echo $content;?>
        </div>
        <div class="footIcp">&copy; 2016 酩悦轩尼诗帝亚吉欧洋酒（上海）<br class="mobileShow">有限公司版权所有. 保留一切权利 <br class="mobileShow"><br class="mobileShow">沪ICP备10018200号</div>
