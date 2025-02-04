<?php
/**
 * Plugin Name: Advanced Calculator
 * Plugin URI: https://github.com/liluwebdev/SimpleWPCalculator
 * Description: A WordPress calculator plugin with addition, subtraction, multiplication, and division.
 * Version: 1.1
 * Author: Lindsey Ussery
 * Author URI: https://www.lilumedia.com
 * License: GPL2
 */

if (!defined('ABSPATH')) {
    exit; // Prevent direct access.
}

// Register the shortcode
function advanced_calculator_shortcode() {
    ob_start();
    ?>
    <div id="calculator-container">
        <input type="number" id="num1" placeholder="Enter First Number">
        
        <select id="operation">
            <option value="add">+</option>
            <option value="subtract">−</option>
            <option value="multiply">×</option>
            <option value="divide">÷</option>
        </select>

        <input type="number" id="num2" placeholder="Enter Second Number">
        
        <button id="calculate-btn">Calculate</button>
        <p>Result: <span id="result">0</span></p>
    </div>
    <?php
    return ob_get_clean();
}
add_shortcode('advanced_calculator', 'advanced_calculator_shortcode');

// Enqueue JavaScript and CSS
function advanced_calculator_scripts() {
    wp_enqueue_script('advanced-calculator-js', plugin_dir_url(__FILE__) . 'calculator.js', array('jquery'), null, true);
    wp_enqueue_style('advanced-calculator-css', plugin_dir_url(__FILE__) . 'style.css');
}
add_action('wp_enqueue_scripts', 'advanced_calculator_scripts');
