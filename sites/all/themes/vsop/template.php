<?php

/**
 * Override or insert variables into the maintenance page template.
 */
function vsop_preprocess_maintenance_page(&$vars) {
  // While markup for normal pages is split into page.tpl.php and html.tpl.php,
  // the markup for the maintenance page is all in the single
  // maintenance-page.tpl.php template. So, to have what's done in
  // vsop_preprocess_html() also happen on the maintenance page, it has to be
  // called here.
  vsop_preprocess_html($vars);
}
function vsop_css_alter(&$css){
    foreach ($css as $key => $value) {
        if ($value['group'] != CSS_THEME) {
            unset($css[$key]);
        }
    }
    //var_dump(array_keys($css));
}
//semanticviews-view-unformatted--cool--product-menu.tpl
function vsop_preprocess_semanticviews_view_unformatted(&$variables) {
    //var_dump($variables['view']->result[0]);
    //if( $variables['view'])
    //var_dump($variables['name'],$variables['display_id']);
}
function vsop_js_alter(&$javascript) {

    //drupal_static_reset('drupal_add_js');
    foreach ($javascript as $key => $value) {
        if( $value['group'] != CSS_THEME ){
            unset($javascript[$key]);
        }
    }
    /*
    drupal_add_js(path_to_theme().'/js/jquery-2.1.1.min.js');
    drupal_add_js(path_to_theme().'/js/bootstrap.min.js');
    drupal_add_js(path_to_theme().'/js/jquery.touchSwipe.min.js');
    drupal_add_js(path_to_theme().'/js/html5lightbox/html5lightbox.js');
    drupal_add_js(path_to_theme().'/js/jquery.mCustomScrollbar.concat.min.js');
    drupal_add_js('http://player.youku.com/jsapi');
    drupal_add_js(path_to_theme().'/js/bxslider/jquery.bxslider.min.js');
    drupal_add_js(path_to_theme().'/js/common.js');
    */

}


/**
 * Override or insert variables into the html template.
 */
function vsop_preprocess_html(&$vars) {
    if( arg(0) != 'agree' && $_COOKIE["has_read"] != 'yes' && arg(0) != 'user'){
        setcookie("redirect_url",$_SERVER['REQUEST_URI'],time()+365*24*3600);
        drupal_goto('agree');
    }
  // Add conditional CSS for IE8 and below.
  //drupal_add_css(path_to_theme() . '/ie.css', array('group' => CSS_THEME, 'browsers' => array('IE' => 'lte IE 8', '!IE' => FALSE), 'weight' => 999, 'preprocess' => FALSE));
  // Add conditional CSS for IE7 and below.
  //drupal_add_css(path_to_theme() . '/ie7.css', array('group' => CSS_THEME, 'browsers' => array('IE' => 'lte IE 7', '!IE' => FALSE), 'weight' => 999, 'preprocess' => FALSE));
  // Add conditional CSS for IE6.
  //drupal_add_css(path_to_theme() . '/ie6.css', array('group' => CSS_THEME, 'browsers' => array('IE' => 'lte IE 6', '!IE' => FALSE), 'weight' => 999, 'preprocess' => FALSE));
}

/**
 * Override or insert variables into the page template.
 */
function vsop_preprocess_page(&$vars) {
  $vars['primary_local_tasks'] = $vars['tabs'];
  unset($vars['primary_local_tasks']['#secondary']);
  $vars['secondary_local_tasks'] = array(
    '#theme' => 'menu_local_tasks',
    '#secondary' => $vars['tabs']['#secondary'],
  );
}

/**
 * Display the list of available node types for node creation.
 */
function vsop_node_add_list($variables) {
  $content = $variables['content'];
  $output = '';
  if ($content) {
    $output = '<ul class="admin-list">';
    foreach ($content as $item) {
      $output .= '<li class="clearfix">';
      $output .= '<span class="label">' . l($item['title'], $item['href'], $item['localized_options']) . '</span>';
      $output .= '<div class="description">' . filter_xss_admin($item['description']) . '</div>';
      $output .= '</li>';
    }
    $output .= '</ul>';
  }
  else {
    $output = '<p>' . t('You have not created any content types yet. Go to the <a href="@create-content">content type creation page</a> to add a new content type.', array('@create-content' => url('admin/structure/types/add'))) . '</p>';
  }
  return $output;
}

/**
 * Overrides theme_admin_block_content().
 *
 * Use unordered list markup in both compact and extended mode.
 */
function vsop_admin_block_content($variables) {
  $content = $variables['content'];
  $output = '';
  if (!empty($content)) {
    $output = system_admin_compact_mode() ? '<ul class="admin-list compact">' : '<ul class="admin-list">';
    foreach ($content as $item) {
      $output .= '<li class="leaf">';
      $output .= l($item['title'], $item['href'], $item['localized_options']);
      if (isset($item['description']) && !system_admin_compact_mode()) {
        $output .= '<div class="description">' . filter_xss_admin($item['description']) . '</div>';
      }
      $output .= '</li>';
    }
    $output .= '</ul>';
  }
  return $output;
}

/**
 * Override of theme_tablesort_indicator().
 *
 * Use our own image versions, so they show up as black and not gray on gray.
 */
function vsop_tablesort_indicator($variables) {
  $style = $variables['style'];
  $theme_path = drupal_get_path('theme', 'vsop');
  if ($style == 'asc') {
    return theme('image', array('path' => $theme_path . '/images/arrow-asc.png', 'alt' => t('sort ascending'), 'width' => 13, 'height' => 13, 'title' => t('sort ascending')));
  }
  else {
    return theme('image', array('path' => $theme_path . '/images/arrow-desc.png', 'alt' => t('sort descending'), 'width' => 13, 'height' => 13, 'title' => t('sort descending')));
  }
}






/**
 * Implements hook__preprocess_block().
 */
function vsop_preprocess_block(&$variables, $hook) {
  // allow to use block templates depend on delta
  // example: delta = main-menu ; template file: block--main-menu.tpl.php
     if ($variables['block']->delta == 'main-menu') {
        $variables['theme_hook_suggestions'][] = 'block__' . str_replace('-', '_', $variables['block']->delta);
     }
}

/**
 * Main menu
 * Implements theme__menu_tree().
 */
function vsop_menu_tree__main_menu($variables) {
    global $level;
    //$div = ($level == 1) ? '<!--<div></div>-->' : '';
    $ul = '<ul class="nav navbar-nav">' . $variables['tree'] . '
    <div class="snsLine">
        <a href="javascript:void(0);" onClick="showNavQc();"><img src="'.path_to_theme().'/images/navIcon1.png" width="23"></a>
        <a href="javascript:void(0);"><img src="'.path_to_theme().'/images/navIcon2.png" width="23"></a>
        <a href="javascript:void(0);"><img src="'.path_to_theme().'/images/navIcon3.png" width="23"></a>
    </div></ul>';
    return $ul;
}

/**
 * Main menu
 * Implements theme__menu_link().
 */
function vsop_menu_link__main_menu($variables) {

  $element = $variables['element'];
  $title = $element['#title'];
  $sub_menu = '';

  // global menu level variable.
  // within theme_menu_tree() at first level has always value = 1
  // but not here, that's why $depth will have to be defined separately
  global $level;
  $level = $element['#original_link']['depth'];

  // if you will need $depth, it must be defined separately
  // $depth = $element['#original_link']['depth'];

  // submenu
  if ($element['#below']) {
    $sub_menu = drupal_render($element['#below']);
  }

  // link output
  $element['#localized_options']['attributes']['class'] = [];
  $element['#localized_options']['attributes']['class'][] = 'centerA';
  $output = l($title, $element['#href'], $element['#localized_options']);

  // if link class is active, make li class as active too
  $element['#attributes']['class'] = [];
  if(strpos($output,"active")>0){
    $element['#attributes']['class'][] = "active";
  }
  //unset($element['#attributes'][0]);

  $attr = drupal_attributes($element['#attributes']);
  return  '<li' . $attr . '>' . $output .$sub_menu . "</li>\n";
}
