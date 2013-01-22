<?php
// Version: 2.0; Packages

$txt['package_proceed'] = 'Proceed';
$txt['php_script'] = 'Plugin file was extracted, but this plugin also comes with a PHP script which should be executed before it will work';
$txt['package_run'] = 'Run';
$txt['package_read'] = 'Read';
$txt['script_output'] = 'Script output:';
$txt['additional_notes'] = 'Additional notes';
$txt['notes_file'] = 'Instruction/Additional notes file';
$txt['package_get'] = 'Plugin Get';
$txt['package_servers'] = 'Plugin servers';
$txt['package_browse'] = 'Browse';
$txt['add_server'] = 'Add server';
$txt['server_name'] = 'Server name';
$txt['serverurl'] = 'URL';
$txt['download'] = 'Download';
$txt['package_downloaded_successfully'] = 'Plugin has been downloaded successfully';
$txt['package_manager'] = 'Plugin Manager';
$txt['sql_file'] = 'Plugin file was extracted, this plugin also comes with a SQL file with modifications the database needs. It is a good idea to run it.';
$txt['sql_queries'] = 'SQL Queries';
$txt['no_mods_installed'] = 'No mods currently installed';
$txt['browse_installed'] = 'Browse installed mods';
$txt['delete_list'] = 'Delete Mod List';
$txt['php_safe_mode'] = 'Sorry, you server has PHP set to SAFE MODE. This feature is not compatible with SAFE MODE. Sorry.';
$txt['lets_try_anyway'] = 'Let me try anyway.';

$txt['package_manager_desc'] = 'From the plugin manager you can download and install plugins to your forum through an easy to use interface.';
$txt['download_packages_desc'] = 'From this section you can choose to either download new plugins from plugin servers, or upload a plugin file directly to the forum.';

$txt['create_package'] = 'Create a New Plugin';
$txt['download_new_package'] = 'Download New Plugins';
$txt['view_and_remove'] = 'View and Remove Installed Plugins';

$txt['package_type'] = 'Plugin Type';
$txt['archiving'] = 'Archiving';

$txt['author_website'] = 'Author\'s Homepage';
$txt['package_no_description'] = 'No Description Given';
$txt['package_description'] = 'Description';
$txt['file_location'] = 'Location of file';

$txt['package_upgrade'] = 'Upgrade';

$txt['package_action_missing'] = '<strong class="error">File not found</strong>';

$txt['package_ftp_necessary'] = 'FTP Information Required';
$txt['package_ftp_why'] = 'Some of the files the plugin manager needs to modify are not writable. This needs to be changed by logging into FTP and using it to chmod or create the files and folders. Your FTP information may be temporarily cached for proper operation of the plugin manager. Note you can also do this manually using an FTP client - to view a list of the affected files please click <a href="#" onclick="%1$s">here</a>.';
$txt['package_ftp_why_file_list'] = 'The following files need to made writable to continue installation:';
$txt['package_ftp_why_download'] = 'To download plugins, the Packages directory and files in it need to be writable - and they are not currently. The plugin manager can use your FTP information to fix this.';
$txt['package_ftp_server'] = 'FTP Server';
$txt['package_ftp_port'] = 'Port';
$txt['package_ftp_username'] = 'Username';
$txt['package_ftp_password'] = 'Password';
$txt['package_ftp_path'] = 'Local path to Wedge';
$txt['package_ftp_test'] = 'Test';
$txt['package_ftp_test_connection'] = 'Test Connection';
$txt['package_ftp_test_success'] = 'FTP connection established.';
$txt['package_ftp_test_failed'] = 'Could not connect to server.';

$txt['package_file_contents'] = 'Contents of file';

$txt['package_upload_title'] = 'Upload a Plugin';
$txt['package_upload_select'] = 'Plugin to Upload';
$txt['package_upload'] = 'Upload';
$txt['package_uploaded_successfully'] = 'The plugin has been uploaded successfully';

$txt['package_modification_malformed'] = 'Malformed or invalid plugin file.';
$txt['package_modification_missing'] = 'The file could not be found.';
$txt['package_no_zlib'] = 'Sorry, your PHP configuration doesn\'t have support for <strong>zlib</strong>. Without this, the plugin manager cannot function. Please contact your host about this for more information.';

$txt['package_cleanperms_title'] = 'Cleanup Permissions';
$txt['package_cleanperms_desc'] = 'This interface allows you to reset the permissions for files throughout your installation, so as to increase security or solve any permission problems you may encounter while installing plugins.';
$txt['package_cleanperms_type'] = 'Change all file permissions throughout the forum such that';
$txt['package_cleanperms_standard'] = 'Only the standard files are writable.';
$txt['package_cleanperms_free'] = 'All files are writable.';
$txt['package_cleanperms_restrictive'] = 'The minimum files are writable.';
$txt['package_cleanperms_go'] = 'Change file permissions';

$txt['package_download_by_url'] = 'Download a plugin by URL';
$txt['package_download_filename'] = 'Name of the file';
$txt['package_download_filename_info'] = 'Optional value. Should be used when the url does not end in the filename. For example: index.php?mod=5';

$txt['package_file_perms_desc'] = 'You can use this section to review the writable status of critical files and folders within your forum directory. Note this only considers key forum folders and files - use an FTP client for additional options.';
$txt['package_file_perms_name'] = 'File/Folder Name';
$txt['package_file_perms_status'] = 'Current Status';
$txt['package_file_perms_new_status'] = 'New Status';
$txt['package_file_perms_status_read'] = 'Read';
$txt['package_file_perms_status_write'] = 'Write';
$txt['package_file_perms_status_execute'] = 'Execute';
$txt['package_file_perms_status_custom'] = 'Custom';
$txt['package_file_perms_status_no_change'] = 'No Change';
$txt['package_file_perms_writable'] = 'Writable';
$txt['package_file_perms_not_writable'] = 'Not Writable';
$txt['package_file_perms_chmod'] = 'chmod';
$txt['package_file_perms_more_files'] = 'More Files';

$txt['package_file_perms_change'] = 'Change File Permissions';
$txt['package_file_perms_predefined'] = 'Use predefined permission profile';
$txt['package_file_perms_predefined_note'] = 'Note that this only applies the predefined profile to key Wedge folders and files.';
$txt['package_file_perms_apply'] = 'Apply individual file permissions settings selected above.';
$txt['package_file_perms_custom'] = 'If &quot;Custom&quot; has been selected use chmod value of';
$txt['package_file_perms_pre_restricted'] = 'Restricted - minimum files writable';
$txt['package_file_perms_pre_standard'] = 'Standard - key files writable';
$txt['package_file_perms_pre_free'] = 'Free - all files writable';
$txt['package_file_perms_ftp_details'] = 'On most servers it is only possible to change file permissions using an FTP account. Please enter your FTP details below';
$txt['package_file_perms_ftp_retain'] = 'Note, Wedge will only retain the password information temporarily to aid operation of the plugin manager.';
$txt['package_file_perms_go'] = 'Make Changes';

$txt['package_file_perms_applying'] = 'Applying Changes';
$txt['package_file_perms_items_done'] = '%1$d of %2$d items completed';
$txt['package_file_perms_skipping_ftp'] = '<strong>Warning:</strong> Failed to connect to FTP server, attempting to change permissions without. This is <em>likely</em> to fail - please check the results upon completion and try again with correct FTP details if necessary.';

$txt['package_file_perms_dirs_done'] = '%1$d of %2$d directories completed';
$txt['package_file_perms_files_done'] = '%1$d of %2$d files done in current directory';

$txt['chmod_value_invalid'] = 'You have tried to enter an invalid chmod value. Chmod must be between 0444 and 0777';

$txt['package_restore_permissions'] = 'Restore File Permissions';
$txt['package_restore_permissions_desc'] = 'The following file permissions were changed by Wedge to install the selected plugin(s). You can return these files back to their original status by clicking &quot;Restore&quot; below.';
$txt['package_restore_permissions_restore'] = 'Restore';
$txt['package_restore_permissions_filename'] = 'Filename';
$txt['package_restore_permissions_orig_status'] = 'Original Status';
$txt['package_restore_permissions_cur_status'] = 'Current Status';
$txt['package_restore_permissions_result'] = 'Result';
$txt['package_restore_permissions_pre_change'] = '%1$s (%3$s)';
$txt['package_restore_permissions_post_change'] = '%2$s (%3$s - was %2$s)';
$txt['package_restore_permissions_action_skipped'] = '<em>Skipped</em>';
$txt['package_restore_permissions_action_success'] = '<span style="color: green">Success</span>';
$txt['package_restore_permissions_action_failure'] = '<span class="error">Failed</span>';
$txt['package_restore_permissions_action_done'] = 'Wedge has attempted to restore the selected files back to their original permissions, the results can be seen below. If a change failed, or for a more detailed view of file permissions, please see the <a href="%1$s">File Permissions</a> section.';

$txt['package_file_perms_warning'] = 'Please Note';
$txt['package_file_perms_warning_desc'] = '
	<li>Be careful when changing file permissions from this section - incorrect permissions can adversely affect the operation of your forum!</li>
	<li>On some server configurations selecting the wrong permissions may stop Wedge from operating.</li>
	<li>Certain directories such as <em>attachments</em> need to be writable to use that functionality.</li>
	<li>This functionality is mainly applicable on non-Windows based servers - it will not work as expected on Windows in regards to permission flags.</li>
	<li>Before proceeding make sure you have an FTP client installed in case you do make an error and need to FTP into the server to remedy it.</li>';

$txt['package_confirm_view_package_content'] = 'Are you sure you want to view the plugin contents from this location:<br><br>%1$s';
$txt['package_confirm_proceed'] = 'Proceed';
$txt['package_confirm_go_back'] = 'Go back';
