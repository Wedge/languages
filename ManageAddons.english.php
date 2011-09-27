<?php
// Version: 2.0; ManageAddons

$txt['addon_manager_desc'] = 'In this area, all of the add-ons on the server can be managed.';

$txt['fatal_not_valid_addon'] = 'The specified add-on cannot be enabled because it appears to be missing or damaged.';
$txt['fatal_not_valid_addon_remove'] = 'The specified add-on cannot be removed because it appears to be damaged.';
$txt['install_errors'] = 'This add-on cannot be used because:';
$txt['fatal_already_enabled'] = 'This add-on is already enabled.';
$txt['fatal_already_disabled'] = 'This add-on is already disabled.';
$txt['install_error_minphp'] = 'PHP version %1$s is required (%2$s available)';
$txt['fatal_install_error_minphp'] = 'This add-on cannot be installed, it requires PHP version %1$d, but this server only has version %2$s installed.';
$txt['install_error_minmysql'] = 'MySQL version %1$s is required (%2$s available)';
$txt['fatal_install_error_minmysql'] = 'This add-on cannot be installed, it requires MySQL version %1$d, but this server only has version %2$s installed.';
$txt['install_error_missinghook'] = 'One or more features required by this add-on are not available.';
$txt['install_error_reqfunc'] = 'This function requires the following PHP functions to be accessible: %1$s';
$txt['fatal_install_error_reqfunc'] = 'This add-on makes use of features not currently supported by your PHP installation, that have the following function names: %1$s. You should contact your web-host for more information.';
$txt['fatal_install_error_missinghook'] = 'This add-on makes use of features not currently available in this install, that have the references: %1$s. You should probably contact the add-on\'s author for support.';
$txt['fatal_install_enable_missing'] = 'This add-on specifies that a certain file contains instructions to be carried out when enabling it, %1$s, but the file cannot be found where the add-on said it should be.';
$txt['fatal_install_disable_missing'] = 'This add-on specifies that a certain file contains instructions to be carried out when disabling it, %1$s, but the file cannot be found where the add-on said it should be.';
$txt['fatal_install_remove_missing'] = 'This add-on specifies that a certain file contains instructions to be carried out when disabling it, %1$s, but the file cannot be found where the add-on said it should be.';
$txt['no_addons_found'] = 'No add-ons found.';

$txt['addon_written_by'] = 'Written by';
$txt['addon_author_url'] = 'Author\'s website';
$txt['addon_website'] = 'Visit the website for %1$s';
$txt['addon_author_email'] = 'Email the author';
$txt['addon_readmes'] = 'Information about this add-on';

$txt['invalid_addon_readme'] = 'No suitable readme could be found for this add-on.';
$txt['enable_addon'] = 'Enable this add-on';
$txt['disable_addon'] = 'Disable this add-on';
$txt['remove_addon'] = 'Remove this add-on';

$txt['remove_addon_desc'] = 'You have selected that you want to remove the add-on: %1$s.';
$txt['remove_addon_blurb'] = 'There are two ways that an add-on can be removed.';
$txt['remove_addon_nodelete'] = 'Saving the data';
$txt['remove_addon_nodelete_desc'] = 'The add-on and its files will be removed, but any data and settings will be kept. For more information about what will be kept, please contact the add-on\'s author.';
$txt['remove_addon_delete'] = 'Removing the data';
$txt['remove_addon_delete_desc'] = 'The add-on, plus its data and settings will be <strong>removed</strong>. There is no undo facility for this! <strong>Only perform this if you are sure you do not want to use this add-on.</strong>';
$txt['remove_addon_unsure'] = 'If you are not sure whether you want to keep the data or not, select to "not remove the data".';
$txt['remove_addon_already_enabled'] = 'This add-on is currently enabled. You must disable it before attempting to remove it.';
$txt['remove_addon_files_still_there'] = 'The files for your add-on could not be deleted. You may have to log into your server with FTP to remove the %1$s folder.';
$txt['remove_addon_files_pre_still_there'] = 'Your add-on has not yet been removed; the files that make it up cannot be deleted without logging into FTP to change the permissions to make them deleteable.';

?>