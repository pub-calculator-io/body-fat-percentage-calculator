<?php
/*
Plugin Name: Body Fat Percentage Calculator by Calculator.iO
Plugin URI: https://www.calculator.io/body-fat-percentage-calculator/
Description: Calculate your body fat percentage instantly with our free calculator. Using US Navy and BMI methods, get accurate results and actionable weight loss insights.
Version: 1.0.0
Author: www.calculator.io / Body Fat Percentage Calculator
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: calcio_body_fat_percentage_calculator
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for Body Fat Percentage Calculator by www.calculator.io";

function calcio_body_fat_percentage_calculator_shortcode(){
    $page = 'index.html';
    return '<h2><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48">Body Fat Percentage Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="calcio_body_fat_percentage_calculator_iframe"></iframe></div>';
}


add_shortcode( 'calcio_body_fat_percentage_calculator', 'calcio_body_fat_percentage_calculator_shortcode' );