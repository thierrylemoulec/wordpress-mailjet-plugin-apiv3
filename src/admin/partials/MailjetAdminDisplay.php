<?php
namespace MailjetPlugin\Admin\Partials;

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       http://example.com
 * @since      5.0.0
 *
 * @package    Mailjet
 * @subpackage Mailjet/admin/partials
 */
class MailjetAdminDisplay
{
    public static function getSettingsLeftMenu()
    {
        ?>
        <h1>Settings</h1>
        <?php
        $currentPage = !empty($_REQUEST['page']) ? $_REQUEST['page'] : null;
        ?>
        <ul>
            <li>
                <div class="settingsMenuLink">
                <?php
                echo '<a class="' . ($currentPage == 'mailjet_connect_account_page' ? 'active' : '') . '" href="admin.php?page=mailjet_connect_account_page">'; ?>
                <img src=" <?php echo plugin_dir_url(dirname(dirname(__FILE__))) . '/admin/images/connect_account_screen_icon.png'; ?>" alt="<?php echo __('Connect your Mailjet account', 'mailjet'); ?>" />
                <?php echo __('Connect your Mailjet account', 'mailjet'); ?>
                </a>
                </div>
            </li>
            <li>
                <div class="settingsMenuLink">
                <?php
                echo '<a class="' . ($currentPage == 'mailjet_sending_settings_page' ? 'active' : '') . '" href="admin.php?page=mailjet_sending_settings_page">'; ?>
                <img src=" <?php echo plugin_dir_url(dirname(dirname(__FILE__))) . '/admin/images/sending_options_screen_icon.png'; ?>" alt="<?php echo __('Sending settings', 'mailjet'); ?>" />
                <?php echo __('Sending settings', 'mailjet'); ?>
                </a>
                </div>
            </li>
            <li>
                <div class="settingsMenuLink">
                <?php
                echo '<a class="' . ($currentPage == 'mailjet_subscription_options_page' ? 'active' : '') . '" href="admin.php?page=mailjet_subscription_options_page">'; ?>
                <img src=" <?php echo plugin_dir_url(dirname(dirname(__FILE__))) . '/admin/images/subscription_options_screen_icon.png'; ?>" alt="<?php echo __('Subscription options', 'mailjet'); ?>" />
                <?php echo __('Subscription options', 'mailjet'); ?>
                </a>
                </div>
            </li>
            <li>
                <div class="settingsMenuLink">
                <?php
                echo '<a class="' . ($currentPage == 'mailjet_user_access_page' ? 'active' : '') . '" href="admin.php?page=mailjet_user_access_page">'; ?>
                <img src=" <?php echo plugin_dir_url(dirname(dirname(__FILE__))) . '/admin/images/user_access_screen_icon.png'; ?>" alt="<?php echo __('User access', 'mailjet'); ?>" />
                <?php echo __('User access', 'mailjet'); ?>
                </a>
                </div>
            </li>
        </ul>
        <?php
    }
}


