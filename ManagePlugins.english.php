<?php
// Version: 2.0; ManagePlugins

$txt['plugin_manager_desc'] = 'In this area, all of the plugins on the server can be managed.';

$txt['fatal_not_valid_plugin'] = 'The specified plugin cannot be enabled because it appears to be missing or damaged.';
$txt['fatal_not_valid_plugin_remove'] = 'The specified plugin cannot be removed because it appears to be damaged.';
$txt['install_errors'] = 'This plugin cannot be used because:';
$txt['fatal_already_enabled'] = 'This plugin is already enabled.';
$txt['fatal_already_disabled'] = 'This plugin is already disabled.';
$txt['install_error_minphp'] = 'PHP version %1$s is required (%2$s available)';
$txt['fatal_install_error_minphp'] = 'This plugin cannot be installed, it requires PHP version %1$s, but this server only has version %2$s installed.';
$txt['install_error_minmysql'] = 'MySQL version %1$s is required (%2$s available)';
$txt['fatal_install_error_minmysql'] = 'This plugin cannot be installed, it requires MySQL version %1$s, but this server only has version %2$s installed.';
$txt['install_error_missinghook'] = 'One or more features required by this plugin are not available.';
$txt['install_error_reqfunc'] = 'This function requires the following PHP functions to be accessible: %1$s';
$txt['install_error_duplicate_id'] = 'Another plugin with the same identification is already enabled.';
$txt['fatal_duplicate_id'] = 'Another plugin with the same plugin identification is already enabled, perhaps a different version of the same plugin. It needs to be disabled before this plugin can be enabled.';
$txt['fatal_install_error_reqfunc'] = 'This plugin makes use of features not currently supported by your PHP installation, that have the following function names: %1$s. You should contact your web-host for more information.';
$txt['fatal_install_error_missinghook'] = 'This plugin makes use of features not currently available in this install, that have the references: %1$s. You should probably contact the plugin\'s author for support.';
$txt['fatal_install_enable_missing'] =  'This plugin specifies that a certain file contains instructions to be carried out when enabling it, %1$s, but the file cannot be found where the plugin said it should be.';
$txt['fatal_install_disable_missing'] = 'This plugin specifies that a certain file contains instructions to be carried out when disabling it, %1$s, but the file cannot be found where the plugin said it should be.';
$txt['fatal_install_remove_missing'] =  'This plugin specifies that a certain file contains instructions to be carried out when removing it, %1$s, but the file cannot be found where the plugin said it should be.';
$txt['no_plugins_found'] = 'No plugins found.';

$txt['plugin_written_by'] = 'Written by';
$txt['plugin_author_url'] = 'Author\'s website';
$txt['plugin_website'] = 'Visit the website for %1$s';
$txt['plugin_author_email'] = 'Email the author';
$txt['plugin_readmes'] = 'Information about this plugin';

$txt['invalid_plugin_readme'] = 'No suitable readme could be found for this plugin.';
$txt['enable_plugin'] = 'Enable this plugin';
$txt['disable_plugin'] = 'Disable this plugin';
$txt['remove_plugin'] = 'Remove this plugin';

$txt['remove_plugin_desc'] = 'You have selected that you want to remove the plugin: %1$s.';
$txt['remove_plugin_blurb'] = 'There are two ways that a plugin can be removed.';
$txt['remove_plugin_nodelete'] = 'Saving the data';
$txt['remove_plugin_nodelete_desc'] = 'The plugin and its files will be removed, but any data and settings will be kept. For more information about what will be kept, please contact the plugin\'s author.';
$txt['remove_plugin_delete'] = 'Removing the data';
$txt['remove_plugin_delete_desc'] = 'The plugin, plus its data and settings will be <strong>removed</strong>. There is no undo facility for this! <strong>Only perform this if you are sure you do not want to use this plugin.</strong>';
$txt['remove_plugin_unsure'] = 'If you are not sure whether you want to keep the data or not, select to "not remove the data".';
$txt['remove_plugin_already_enabled'] = 'This plugin is currently enabled. You must disable it before attempting to remove it.';
$txt['remove_plugin_files_still_there'] = 'The files for your plugin could not be deleted. You may have to log into your server with FTP to remove the %1$s folder.';
$txt['remove_plugin_files_pre_still_there'] = 'Your plugin has not yet been removed; the files that make it up cannot be deleted without logging into FTP to change the permissions to make them deletable.';

$txt['plugin_filter'] = 'Filter plugins:';
$txt['plugin_filter_all'] = 'All (%1$d)';
$txt['plugin_filter_enabled'] = 'Enabled (%1$d)';
$txt['plugin_filter_disabled'] = 'Disabled (%1$d)';
$txt['plugin_filter_install_errors'] = 'Incompatible (%1$d)';

$txt['could_not_connect_remote'] = 'Wedge was unable to log in to the server to perform changes for you.<br>The server returned the following error: %1$s<br><br>You may wish to try going back and checking the login details provided.';

?>