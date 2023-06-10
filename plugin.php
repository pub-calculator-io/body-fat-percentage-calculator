<?php
/*
Plugin Name: Body Fat Percentage Calculator by Calculator.iO
Plugin URI: https://www.calculator.io/body-fat-percentage-calculator/
Description: This free body fat calculator uses the US Navy and BMI methods to approximate body fat percentage. It provides weight loss information to help you achieve your ideal body fat.
Version: 1.0.0
Author: Calculator.io
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: ci_body_fat_percentage_calculator
*/

if (!function_exists('add_shortcode')) die("No direct call");

function display_ci_body_fat_percentage_calculator(){
    $page = 'index.html';
    return '<h2><a href="https://www.calculator.io/body-fat-percentage-calculator/" target="_blank"><img src="' . plugins_url('assets/images/icon-48.png', __FILE__ ) . '" width="48" height="48"></a> Body Fat Percentage Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . plugins_url($page, __FILE__ ) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="ci_body_fat_percentage_calculator_iframe"></iframe></div>';
}

add_shortcode( 'ci_body_fat_percentage_calculator', 'display_ci_body_fat_percentage_calculator' );