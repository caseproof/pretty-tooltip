<?php
if(!defined('ABSPATH')) {die('You are not allowed to call this page directly.');}

class PrettyTooltip {
  public function __construct() {
    add_action('wp_enqueue_scripts', array($this,'enqueue_scripts'));
    add_shortcode('pretty-tooltip', array($this,'shortcode'));
  }

  public function enqueue_scripts() {
    wp_enqueue_script('pt-tooltipster', PRETTYTOOLTIP_JS_URL.'/jquery.tooltipster.min.js', array('jquery'));
    wp_enqueue_style('pt-tooltipster', PRETTYTOOLTIP_CSS_URL.'/tooltipster.css');
    wp_enqueue_style('pt-tooltipster-light', PRETTYTOOLTIP_CSS_URL.'/themes/tooltipster-light.css');
    wp_enqueue_style('pt-tooltipster-noir', PRETTYTOOLTIP_CSS_URL.'/themes/tooltipster-noir.css');
    wp_enqueue_style('pt-tooltipster-punk', PRETTYTOOLTIP_CSS_URL.'/themes/tooltipster-punk.css');
    wp_enqueue_style('pt-tooltipster-shadow', PRETTYTOOLTIP_CSS_URL.'/themes/tooltipster-shadow.css');
  }

  private static function atts() {
    return array(
      'title' => __('My Tooltip'),
      'contentAsHTML' => 'true',
      'position' => 'top',
      'trigger' => 'hover',
      'arrow' => 'true',
      'animation' => 'fade',
      'autoClose' => 'true',
      'debug' => 'true',
      'speed' => 350,
      'theme' => 'tooltipster-noir',
      'delay' => 200,
      'hideOnClick' => 'false',
      'icon' => '(?)',
      'iconCloning' => 'true',
      'iconDesktop' => 'false',
      'iconTheme' => 'tooltipster-icon',
      'iconTouch' => 'false',
      'interactive' => 'false',
      'interactiveTolerance' => 350,
      'minWidth' => 0,
      'maxWidth' => 'null',
      'multiple' => 'false',
      'offsetX' => 0,
      'offsetY' => 0,
      'onlyOne' => 'false',
      'timer' => 0,
      'touchDevices' => 'true',
      'updateAnimation' => 'true',
    );
  }

  public function shortcode($atts, $content='') {
    $atts = shortcode_atts( self::atts(), $atts, 'pretty-tooltip' );
    return self::get($atts['title'],$content,$atts);
  }

  public static function get($title, $text, $opts=array()) {
    $opts = array_merge( self::atts(), $opts );
    $id = "pretty_tooltip_" . uniqid();
    $opts = (object)$opts;

    ob_start();
    require(PRETTYTOOLTIP_VIEWS_PATH.'/tooltip.php');
    return ob_get_clean();
  }

  public static function render($title, $text, $options=array()) {
    echo self::get($title, $text, $options);
  }
}

