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
preg_match_all('/<img.*?src="(.*?)".*?>/is',$fields['field_bkg']->content,$matches);
$bkg = $matches[1][0];
preg_match_all('/<img.*?src="(.*?)".*?>/is',$fields['field_image']->content,$matches);
$logo = $matches[1][0];
preg_match_all('/<img.*?src="(.*?)".*?>/is',$fields['field_bottle']->content,$matches);
$bottle = $matches[1][0];
?>
        	<div class="col-xs-12">
                <div class="innerDiv">
<img src="<?php echo $bkg;?>" class="mobileShow" width="1240" height="718">
<img src="<?php echo $logo;?>" class="abs bkLogo">
<img src="<?php echo $bottle;?>" class="abs bkBottle">
    </div>
</div>
