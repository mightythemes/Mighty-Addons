<?php
/**
 * Mighty Addons
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

// All the Awesomeness
$widgets = self::$ma_get_settings['addons'];
$extensions = self::$ma_get_settings['extensions'];
?>

<?php include_once('includes/header.php'); ?>

<?php include_once('includes/boring-stuff.php'); ?>

<?php include_once('includes/widget-settings.php'); ?>

<?php include_once('includes/extension-settings.php'); ?>

<?php include_once('includes/go-pro.php'); ?>

<?php include_once('includes/footer.php'); ?>