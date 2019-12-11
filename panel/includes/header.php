<?php
/**
 * Mighty Addons
 * Home Sweet Home
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
?>
<div id="mtbody-content">
    <!-- MT Settings Wrap -->
    <div class="ma-settings-wrap">
        <!-- MT Settings Header -->
        <div class="ma-settings-header-bar">
            <!-- MT Settings Header Left -->
            <div class="ma-settings-header-left">
                <div class="ma-logo">
                    <img src="<?php echo MIGHTY_ADDONS_PLG_URL . 'assets/admin/images/mighty-addons-logo.svg' ?>" alt="">
                </div>
                <h2 class="title">Mighty Addons Settings | v<?php echo MIGHTY_ADDONS_VERSION; ?></h2>
            </div>
            <?php if ( $page == "widgets") : ?>
            <div class="ma-settings-header-right">
                <button type="submit" class="button ma-btn js-ma-settings-save ma-btn ma-save-button" disabled="disabled"><?php echo __('Save Settings', 'mighty-addons'); ?></button>
            </div>
            <?php endif; ?>
        </div>


        <div class="ma-settings-tabs">
        
            <?php include_once('tabs.php'); ?>