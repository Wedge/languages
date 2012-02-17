<?php
// Version: 2.0; ManageSettings

$txt['settings_desc'] = 'This page allows you to change the settings of features and basic options in your forum. Please see the <a href="%3$s?action=admin;area=theme;sa=settings;th=%1$s;%2$s">theme settings</a> for more options. Click the help icons for more information about a setting.';
$txt['security_settings_desc'] = 'This page allows you to set options specifically related to the security and moderation of your forum, including anti-spam options.';
$txt['modification_settings_desc'] = 'This page contains settings added by any plugins to your forum';

$txt['modification_no_misc_settings'] = 'There are no plugins installed that have added any settings to this area yet.';

$txt['pollMode'] = 'Poll mode';
$txt['disable_polls'] = 'Disable polls';
$txt['enable_polls'] = 'Enable polls';
$txt['polls_as_topics'] = 'Show existing polls as topics';
$txt['allow_guestAccess'] = 'Allow guests to browse the forum';
$txt['userLanguage'] = 'Enable user-selectable language support';
$txt['setting_time_offset'] = 'Overall time offset<dfn>(added to the member specific option.)</dfn>';
$txt['setting_default_timezone'] = 'Server timezone';
$txt['failed_login_threshold'] = 'Failed login threshold';
$txt['enable_quick_login'] = 'Show a quick login on every page';
$txt['age_restrictions'] = 'Minimum Age Restrictions';
$txt['lastActive'] = 'User online time threshold';
$txt['trackStats'] = 'Track daily statistics';
$txt['hitStats'] = 'Track daily page views (must have stats enabled)';
$txt['enableCompressedOutput'] = 'Enable compressed output';
$txt['enableCompressedData'] = 'Enable compressed JS/CSS';
$txt['obfuscate_filenames'] = 'Obfuscate JS/CSS filenames';
$txt['minify'] = 'Minify JavaScript files with...';
$txt['minify_none'] = 'Don\'t minify';
$txt['minify_jsmin'] = 'JSMin';
$txt['minify_packer'] = 'Packer|Please view the help popup before choosing this!';
$txt['jquery_origin'] = 'jQuery source location';
$txt['jquery_local'] = 'This server (merged with script.js)';
$txt['jquery_jquery'] = 'jQuery CDN';
$txt['jquery_google'] = 'Google CDN';
$txt['jquery_microsoft'] = 'Microsoft CDN';
$txt['disableTemplateEval'] = 'Disable evaluation of templates';
$txt['db_show_debug'] = 'Show debug information';
$txt['db_show_debug_who'] = 'Show debug information to which users:';
$txt['db_show_debug_who_log'] = 'Show debug query log to which users:';
$txt['db_show_debug_admin'] = 'Administrators only';
$txt['db_show_debug_admin_mod'] = 'Administrators and moderators';
$txt['db_show_debug_regular'] = 'All logged-in users';
$txt['db_show_debug_any'] = 'All users, including guests';

$txt['databaseSession_enable'] = 'Use database driven sessions';
$txt['databaseSession_loose'] = 'Allow browsers to go back to cached pages';
$txt['databaseSession_lifetime'] = 'Seconds before an unused session timeout';
$txt['enableErrorLogging'] = 'Enable error logging';
$txt['enableErrorQueryLogging'] = 'Include database query in the error log';
$txt['logPruning'] = 'Log Pruning';
$txt['log_enabled_moderate'] = 'Enable logging of moderation actions<dfn>This includes deleting posts, moving topics and so on.</dfn>';
$txt['log_enabled_admin'] = 'Enable logging of administrative actions<dfn>This includes things like creating new boards.</dfn>';
$txt['log_enabled_profile'] = 'Enable logging of edits made to members\'s profiles<dfn>This includes changes to display name and other fields.</dfn>';
$txt['pruningOptions'] = 'Enable pruning of log entries';
$txt['pruneErrorLog'] = 'Remove error log entries older than<dfn>(0 to disable)</dfn>';
$txt['pruneModLog'] = 'Remove moderation log entries older than<dfn>(0 to disable)</dfn>';
$txt['pruneReportLog'] = 'Remove report to moderator log entries older than<dfn>(0 to disable)</dfn>';
$txt['pruneScheduledTaskLog'] = 'Remove scheduled task log entries older than<dfn>(0 to disable)</dfn>';
$txt['pruneSpiderHitLog'] = 'Remove search engine hit logs older than<dfn>(0 to disable)</dfn>';
$txt['cookieTime'] = 'Default login cookies length (in minutes)';
$txt['localCookies'] = 'Enable local storage of cookies<dfn>(SSI won\'t work well with this on.)</dfn>';
$txt['globalCookies'] = 'Use subdomain independent cookies<dfn>(turn off local cookies first!)</dfn>';
$txt['secureCookies'] = 'Force cookies to be secure<dfn>(This only applies if you are using HTTPS - don\'t use otherwise!)</dfn>';
$txt['send_validation_onChange'] = 'Require reactivation after email change';
$txt['approveAccountDeletion'] = 'Require admin approval when member deletes account';
$txt['autoOptMaxOnline'] = 'Maximum users online when optimizing<dfn>(0 for no max.)</dfn>';
$txt['autoFixDatabase'] = 'Automatically fix broken tables';
$txt['allow_disableAnnounce'] = 'Allow users to disable announcements';
$txt['disallow_sendBody'] = 'Don\'t allow post text in notifications';
$txt['max_pm_recipients'] = 'Maximum number of recipients allowed in a personal message<dfn>(0 for no limit, admins are exempt)</dfn>';
$txt['pm_posts_verification'] = 'Post count under which users must pass verification when sending personal messages<dfn>(0 for no limit, admins are exempt)</dfn>';
$txt['pm_posts_per_hour'] = 'Number of personal messages a user may send in an hour<dfn>(0 for no limit, moderators are exempt)</dfn>';
$txt['todayMod'] = 'Enable shorthand date display';
$txt['today_disabled'] = 'Disabled';
$txt['today_only'] = 'Only Today';
$txt['yesterday_today'] = 'Today &amp; Yesterday';
$txt['timeLoadPageEnable'] = 'Display time taken to create every page';
$txt['disableHostnameLookup'] = 'Disable hostname lookups';
$txt['who_enabled'] = 'Enable who\'s online list';
$txt['display_who_viewing'] = 'Show who is viewing the board index and posts';
$txt['who_display_viewing_off'] = 'Don\'t show';
$txt['who_display_viewing_numbers'] = 'Show only numbers';
$txt['who_display_viewing_names'] = 'Show member names';

$txt['caching_information'] = '<div class="center" style="font-weight: bold; text-decoration: underline">Important! Read this first before enabling these features.</div><br>
	Wedge supports caching through the use of accelerators. The currently supported accelerators include:<br>
	<ul class="normallist">
		<li>APC</li>
		<li>eAccelerator</li>
		<li>Memcached</li>
		<li>Zend Platform/Performance Suite (Not Zend Optimizer)</li>
		<li>XCache</li>
	</ul>
	Caching will work best if you have PHP compiled with one of the above optimizers, or have memcache
	available. If you do not have any optimizer installed Wedge will do file based caching.<br><br>
	Wedge performs caching at a variety of levels. The higher the level of caching enabled the more CPU time will be spent
	retrieving cached information. If caching is available on your machine it is recommended that you try caching at level 1 first.
	<br><br>
	Note that if you use memcached you need to provide the server details in the setting below. This should be entered as a comma separated list
	as shown in the example below:<br>
	&quot;server1,server2,server3:port,server4&quot;<br><br>
	Note that if no port is specified, Wedge will use port 11211 and will attempt to perform rough/random load balancing across the servers.
	<br><br>
	%1$s';

$txt['detected_no_caching'] = '<strong class="alert">Wedge was unable to detect a compatible accelerator on your server.</strong>';
$txt['detected_APC'] = '<strong style="color: green">Wedge has detected that your server has APC installed.</strong>';
$txt['detected_eAccelerator'] = '<strong style="color: green">Wedge has detected that your server has eAccelerator installed.</strong>';
$txt['detected_Zend'] = '<strong style="color: green">Wedge has detected that your server has Zend installed.</strong>';
$txt['detected_Memcached'] = '<strong style="color: green">Wedge has detected that your server has Memcached installed.</strong>';
$txt['detected_XCache'] = '<strong style="color: green">Wedge has detected that your server has XCache installed.</strong>';

$txt['cache_enable'] = 'Caching Level';
$txt['cache_off'] = 'No caching';
$txt['cache_level1'] = 'Level 1 Caching (Recommended)';
$txt['cache_level2'] = 'Level 2 Caching';
$txt['cache_level3'] = 'Level 3 Caching (Not Recommended)';
$txt['cache_memcached'] = 'Memcache settings';

$txt['loadavg_warning'] = '<span class="error">Please note: the settings below are to be edited with care. Setting any of them too low may render your forum <strong>unusable</strong>! The current load average is <strong>%01.2f</strong></span>';
$txt['loadavg_enable'] = 'Enable load balancing by load averages';
$txt['loadavg_auto_opt'] = 'Threshold to disabling automatic database optimization';
$txt['loadavg_search'] = 'Threshold to disabling search';
$txt['loadavg_allunread'] = 'Threshold to disabling all unread topics';
$txt['loadavg_unreadreplies'] = 'Threshold to disabling unread replies';
$txt['loadavg_show_posts'] = 'Threshold to disabling showing user posts';
$txt['loadavg_forum'] = 'Threshold to disabling the forum <strong>completely</strong>';
$txt['loadavg_disabled_conf'] = '<span class="error">Load balancing support is disabled by your host configuration.</span>';

$txt['reverse_proxy'] = 'Enable reverse proxy support';
$txt['reverse_proxy_header'] = 'Proxy HTTP header with IP address';
$txt['reverse_proxy_ips'] = 'IP or CIDR block addresses of proxy servers';
$txt['reverse_proxy_one_per_line'] = 'Specify one address per line';

$txt['setting_password_strength'] = 'Required strength for user passwords';
$txt['setting_password_strength_low'] = 'Low - 4 character minimum';
$txt['setting_password_strength_medium'] = 'Medium - cannot contain username';
$txt['setting_password_strength_high'] = 'High - mixture of different characters';

$txt['antispam_Settings'] = 'Anti-Spam Verification';
$txt['antispam_Settings_desc'] = 'This section allows you to setup verification checks to ensure the user is a human (and not a bot), and tweak how and where these apply.';
$txt['setting_reg_verification'] = 'Require verification on registration page';
$txt['posts_require_captcha'] = 'Post count under which users must pass verification to make a post';
$txt['posts_require_captcha_desc'] = '(0 for no limit, moderators are exempt)';
$txt['search_enable_captcha'] = 'Require verification on all guest searches';
$txt['setting_guests_require_captcha'] = 'Guests must pass verification when making a post';
$txt['setting_guests_require_captcha_desc'] = '(Automatically set if you specify a minimum post count below)';
$txt['guests_report_require_captcha'] = 'Guests must pass verification when reporting a post';

$txt['configure_captcha'] = 'Configure CAPTCHA images';
$txt['configure_captcha_desc'] = '<span class="smalltext">A CAPTCHA is a form of anti-bot protection to help guard against automated robots posting nonsense on your forum.</span>';
$txt['use_captcha_images'] = 'Enable using CAPTCHA images?';
$txt['use_animated_captcha'] = 'Use the animated CAPTCHA images?';
$txt['use_animated_captcha_desc'] = 'Animated CAPTCHAs are particularly tricky for bots to beat, but they may be harder for normal users to solve, too.';

$txt['setting_qa_verification_number'] = 'Number of verification questions user must answer';
$txt['setting_qa_verification_number_desc'] = '(0 to disable; questions are set below)';
$txt['setup_verification_questions'] = 'Verification Questions';
$txt['setup_verification_questions_desc'] = '<span class="smalltext">If you want users to answer verification questions in order to stop spam bots you should setup a number of questions in the table below. You should pick relatively simple questions; answers are not case sensitive. You may use BBC in the questions for formatting, to remove a question simply delete the contents of that line.</span>';
$txt['setup_verification_question'] = 'Question';
$txt['setup_verification_answer'] = 'Answer';
$txt['setup_verification_add_more'] = 'Add another question';

$txt['moderation_settings'] = 'Moderation Settings';
$txt['setting_warning_watch'] = 'Warning level for user watch<dfn>The user warning level after which a user watch is put in place - 0 to disable.</dfn>';
$txt['setting_warning_moderate'] = 'Warning level for post moderation<dfn>The user warning level after which a user has all posts moderated - 0 to disable.</dfn>';
$txt['setting_warning_mute'] = 'Warning level for user muting<dfn>The user warning level after which a user cannot post any further - 0 to disable.</dfn>';
$txt['setting_user_limit'] = 'Maximum user warning points per day<dfn>This value is the maximum amount of warning points a single moderator can assign to a user in a 24 hour period - 0 for no limit.</dfn>';
$txt['setting_warning_decrement'] = 'Warning points to decrement from users every 24 hours<dfn>Only applies to users not warned within last 24 hours - set to 0 to disable.</dfn>';
$txt['setting_warning_show'] = 'Users who can see warning status<dfn>Determines who can see the warning level of users on the forum.</dfn>';
$txt['setting_warning_show_mods'] = 'Moderators Only';
$txt['setting_warning_show_user'] = 'Moderators and Warned Users';
$txt['setting_warning_show_all'] = 'All Users';

$txt['modfilter_norules'] = 'There are no filter rules set up.';
$txt['modfilter_addrule'] = 'Add a filter rule';
$txt['modfilter_editrule'] = 'Edit filter rule';
$txt['modfilter_rule_posts'] = 'When saving any post:';
$txt['modfilter_rule_topics'] = 'When starting a new topic:';
$txt['modfilter_action_prevent'] = 'Prevent the post being saved';
$txt['modfilter_action_moderate'] = 'Moderator must approve post (before being public)';
$txt['modfilter_action_pin'] = 'Pin the current topic';
$txt['modfilter_action_unpin'] = 'Unpin the current topic';
$txt['modfilter_action_lock'] = 'Lock the topic';
$txt['modfilter_action_unlock'] = 'Unlock the topic';
$txt['modfilter_conditions'] = 'If these rules are met:';
$txt['modfilter_cond_boards_in'] = 'Posting in these boards:';
$txt['modfilter_cond_boards_ex'] = 'Posting anywhere except in:';
$txt['modfilter_cond_groups_in'] = 'Member of any of these groups:';
$txt['modfilter_cond_groups_ex'] = 'Not a member of any of these groups:';
$txt['modfilter_cond_permissions_in'] = 'Has any of these permissions:';
$txt['modfilter_cond_permissions_ex'] = 'Has none of these permissions:';
$txt['modfilter_cond_userid_in'] = 'User is one of the following:';
$txt['modfilter_cond_userid_ex'] = 'User is not one of the following:';
$txt['modfilter_cond_subject_begins'] = 'Post subject begins with:';
$txt['modfilter_cond_subject_ends'] = 'Post subject ends with:';
$txt['modfilter_cond_subject_contains'] = 'Post subject contains:';
$txt['modfilter_cond_subject_matches'] = 'Post subject matches:';
$txt['modfilter_cond_subject_regex'] = 'Post subject matches regular expression:';
$txt['modfilter_cond_body_begins'] = 'Post body begins with:';
$txt['modfilter_cond_body_ends'] = 'Post body ends with:';
$txt['modfilter_cond_body_contains'] = 'Post body contains:';
$txt['modfilter_cond_body_matches'] = 'Post body matches:';
$txt['modfilter_cond_body_regex'] = 'Post body matches regular expression:';
$txt['modfilter_case_sensitive'] = '(exact match)';
$txt['modfilter_case_insensitive'] = '(upper/lower case doesn\'t matter)';
$txt['modfilter_cond_postcount'] = 'Post count:';
$txt['modfilter_cond_warning'] = 'Warning level (%):';
$txt['modfilter_range_lt'] = 'less than';
$txt['modfilter_range_lte'] = 'less than or equal to';
$txt['modfilter_range_eq'] = 'equal to';
$txt['modfilter_range_gt'] = 'greater than';
$txt['modfilter_range_gte'] = 'greater than or equal to';
$txt['modfilter_cond_unknownrule'] = 'Unknown rule type:';
$txt['modfilter_approve_title'] = 'Approve Outstanding Items';
$txt['modfilter_approve_desc'] = 'If there are outstanding items to be approved, or you are thinking of disabling moderation filters, you may wish to make sure all pending items get approved so that items are not just simply lost. You may wish to review moderated items before using this option, however, to make sure that nothing gets approved that should not be.';
$txt['modfilter_all_approved'] = 'All outstanding moderation items have been approved.';
$txt['modfilter_applies_legend'] = 'When this rule should be applied';
$txt['modfilter_applies_desc'] = 'Sometimes a filter rule might need to be applied to all posts, sometimes just to new topics.';
$txt['modfilter_applies_rule'] = 'When should this particular rule be applied?';
$txt['modfilter_applies_posts'] = 'when any new post is made';
$txt['modfilter_applies_topics'] = 'when a new topic is started';
$txt['modfilter_action_legend'] = 'What the rule will do';
$txt['modfilter_action_desc'] = 'Each rule has a single action that it performs when all of its conditions are met, with "preventing the post" and "moderating the post" excluding all other possible actions.';
$txt['modfilter_action_selectone'] = '--- select one ---';
$txt['modfilter_action_rule'] = 'What should happen if the conditions are met?';
$txt['modfilter_actionlist_prevent'] = 'Prevent the post from being made';
$txt['modfilter_actionlist_moderate'] = 'Moderate the post';
$txt['modfilter_actionlist_pin'] = 'Pin the topic to the top of its board';
$txt['modfilter_actionlist_unpin'] = 'Unpin the topic from the top of its board';
$txt['modfilter_actionlist_lock'] = 'Lock the topic from further posts';
$txt['modfilter_actionlist_unlock'] = 'Unlock the topic to allow further posts';
$txt['modfilter_conds_legend'] = 'Conditions for this rule';
$txt['modfilter_conds_desc'] = 'Any filter rule requires conditions, to know whether the rule should be applied. Here you add the conditions for this rule - all conditions must be met in order for the rule to be activated.';
$txt['modfilter_conds_item'] = 'Item';
$txt['modfilter_conds_criteria'] = 'Criteria';
$txt['modfilter_conds_no_conditions'] = 'There are no conditions set. Add one!';
$txt['modfilter_conds_new'] = 'Type of condition:';
$txt['modfilter_conds_add'] = 'Add new condition';
$txt['modfilter_conds_select'] = '--- select a condition type ---';
$txt['modfilter_condtype_boards'] = 'Applies to one or more boards';
$txt['modfilter_condtype_groups'] = 'Applies to one or more membergroups';
$txt['modfilter_condtype_userid'] = 'Applies to one or more users';
$txt['modfilter_condtype_postcount'] = 'Applies based on user postcount';
$txt['modfilter_condtype_warning'] = 'Applies based on user warning level';
$txt['modfilter_condtype_permission'] = 'Applies based on user permissions';
$txt['modfilter_condtype_subject'] = 'Depends on the post subject';
$txt['modfilter_condtype_body'] = 'Depends on the post contents';
$txt['modfilter_applies_all'] = 'Applies to the selected items:';
$txt['modfilter_applies_allexcept'] = 'Applies to <strong>all except</strong> the selected items:';
$txt['modfilter_condition_done'] = 'Add this condition';
$txt['modfilter_postcount_is'] = 'The user\'s post-count is:';
$txt['modfilter_warning_is'] = 'The user\'s warning level is:';
$txt['modfilter_the_post_subject'] = 'The post\'s subject';
$txt['modfilter_the_post_body'] = 'The post\'s body';
$txt['modfilter_regex_begins'] = 'begins with';
$txt['modfilter_regex_contains'] = 'contains';
$txt['modfilter_regex_ends'] = 'ends with';
$txt['modfilter_regex_matches'] = 'matches';
$txt['modfilter_regex_regex'] = 'matches regular expression';
$txt['modfilter_be_case_sensitive'] = 'Be case sensitive (treat UPPER and lower case differently)';
$txt['modfilter_save_this_rule'] = 'Save this rule';
$txt['modfilter_remove_this_rule'] = 'Remove this rule';
$txt['modfilter_error_saving'] = 'This rule could not be saved, there was something wrong in sending the data. Please go back and try again.';
$txt['modfilter_rule_not_found'] = 'The rule you are trying to edit does not exist.';

$txt['member_options_desc'] = 'From this page you can configure general options that apply to all members of your community.';
$txt['allow_editDisplayName'] = 'Allow members to edit their displayed name';
$txt['allow_hideOnline'] = 'Allow members to hide their online status';
$txt['titlesEnable'] = 'Enable custom titles';
$txt['enable_buddylist'] = 'Enable contacts &amp; ignore list';

$txt['signature_settings'] = 'Signature Settings';
$txt['signature_settings_desc'] = 'Use the settings on this page to decide what facilities members should have for their signatures.';
$txt['signature_settings_warning'] = 'Note that settings are not applied to existing signatures by default. Click <a href="%1$s?action=admin;area=memberoptions;sa=sig;apply;%2$s">here</a> to apply rules to all existing signatures.';
$txt['signature_enable'] = 'Enable signatures';
$txt['signature_max_length'] = 'Maximum allowed characters<dfn>(0 for no max.)</dfn>';
$txt['signature_max_lines'] = 'Maximum amount of lines<dfn>(0 for no max)</dfn>';
$txt['signature_max_images'] = 'Maximum image count<dfn>(0 for no max - excludes smileys)</dfn>';
$txt['signature_allow_smileys'] = 'Allow smileys in signatures';
$txt['signature_max_smileys'] = 'Maximum smiley count<dfn>(0 for no max)</dfn>';
$txt['signature_max_image_width'] = 'Maximum width of signature images (pixels)<dfn>(0 for no max)</dfn>';
$txt['signature_max_image_height'] = 'Maximum height of signature images (pixels)<dfn>(0 for no max)</dfn>';
$txt['signature_max_font_size'] = 'Maximum font size allowed in signatures<dfn>(0 for no max, in pixels)</dfn>';
$txt['signature_bbc'] = 'Enabled BBC tags';

$txt['custom_profile_title'] = 'Custom Profile Fields';
$txt['custom_profile_desc'] = 'From this page you can create your own custom profile fields that fit in with your own forum\'s requirements.';
$txt['custom_profile_active'] = 'Active';
$txt['custom_profile_fieldname'] = 'Field Name';
$txt['custom_profile_fieldtype'] = 'Field Type';
$txt['custom_profile_make_new'] = 'New Field';
$txt['custom_profile_none'] = 'You have not created any custom profile fields yet!';
$txt['custom_profile_icon'] = 'Icon';

$txt['custom_profile_type_text'] = 'Text';
$txt['custom_profile_type_textarea'] = 'Large Text';
$txt['custom_profile_type_select'] = 'Select Box';
$txt['custom_profile_type_radio'] = 'Radio Buttons';
$txt['custom_profile_type_check'] = 'Checkbox';

$txt['custom_add_title'] = 'Add Profile Field';
$txt['custom_edit_title'] = 'Edit Profile Field';
$txt['custom_edit_general'] = 'Display Settings';
$txt['custom_edit_input'] = 'Input Settings';
$txt['custom_edit_advanced'] = 'Advanced Settings';
$txt['custom_edit_name'] = 'Name';
$txt['custom_edit_desc'] = 'Description';
$txt['custom_edit_profile'] = 'Profile Section';
$txt['custom_edit_profile_desc'] = 'Section of profile this is edited in.';
$txt['custom_edit_profile_none'] = 'None';
$txt['custom_edit_registration'] = 'Show on Registration';
$txt['custom_edit_registration_disable'] = 'No';
$txt['custom_edit_registration_allow'] = 'Yes';
$txt['custom_edit_registration_require'] = 'Yes, and require entry';
$txt['custom_edit_display'] = 'Show on Topic View';
$txt['custom_edit_picktype'] = 'Field Type';

// Strings for the templates
$txt['your_icq'] = 'This is your ICQ number.';
$txt['your_aim'] = 'This is your AOL Instant Messenger nickname.';
$txt['your_yim'] = 'This is your Yahoo! Instant Messenger nickname.';
// In this string, please use +'s for spaces.
$txt['aim_default_message'] = 'Hello!+Are+you+there?';
$txt['msn_email_address'] = 'Your Live Messenger email address';
$txt['your_twitter'] = 'This is your Twitter username, without the @ at the front';
$txt['your_facebook'] = 'This is your Facebook account number, or vanity name (e.g. "wedgebook" in "facebook.com/wedgebook")';
$txt['your_steam'] = 'This is your id from the Steam Community';
$txt['custom_edit_tplgrp_social'] = 'Social Networking';
$txt['custom_edit_tplgrp_im'] = 'Instant Messaging';
$txt['custom_edit_tplgrp_gaming'] = 'Gaming';
$txt['custom_edit_templates'] = 'Template Fields';
$txt['custom_edit_templates_desc'] = 'You may also use as templates the following information fields for some common social networking services.';
$txt['custom_edit_a_template'] = 'Template to use';
$txt['custom_edit_templates_select'] = '-- Select a template --';

$txt['custom_edit_max_length'] = 'Maximum Length';
$txt['custom_edit_max_length_desc'] = '(0 for no limit)';
$txt['custom_edit_dimension'] = 'Dimensions';
$txt['custom_edit_dimension_row'] = 'Rows';
$txt['custom_edit_dimension_col'] = 'Columns';
$txt['custom_edit_bbc'] = 'Allow BBC';
$txt['custom_edit_options'] = 'Options';
$txt['custom_edit_options_desc'] = 'Leave option box blank to remove. Radio button selects default option.';
$txt['custom_edit_options_more'] = 'More';
$txt['custom_edit_default'] = 'Default State';
$txt['custom_edit_active'] = 'Active';
$txt['custom_edit_active_desc'] = 'If not selected this field will not be shown to anyone.';
$txt['custom_edit_privacy'] = 'Privacy';
$txt['custom_edit_privacy_desc'] = 'Who can see and edit this field.';
$txt['custom_edit_privacy_all'] = 'Users can see this field; owner can edit it';
$txt['custom_edit_privacy_see'] = 'Users can see this field; only admins can edit it';
$txt['custom_edit_privacy_owner'] = 'Users cannot see this field; owner and admins can edit it.';
$txt['custom_edit_privacy_none'] = 'This field is only visible to admins';
$txt['custom_edit_guest_access'] = 'Show this field to guests';
$txt['custom_edit_guest_access_desc'] = 'If the privacy would let regular users see this custom field, this option allows you to restrict whether guests can also see this field or not.';
$txt['custom_edit_can_search'] = 'Searchable';
$txt['custom_edit_can_search_desc'] = 'Can this field be searched from the members list.';
$txt['custom_edit_mask'] = 'Input Mask';
$txt['custom_edit_mask_desc'] = 'For text fields an input mask can be selected to validate the data.';
$txt['custom_edit_mask_email'] = 'Valid Email';
$txt['custom_edit_mask_number'] = 'Numeric';
$txt['custom_edit_mask_nohtml'] = 'No HTML';
$txt['custom_edit_mask_regex'] = 'Regex (Advanced)';
$txt['custom_edit_enclose'] = 'Show Enclosed Within Text (Optional)';
$txt['custom_edit_enclose_desc'] = 'We <strong>strongly</strong> recommend to use an input mask to validate the input supplied by the user.';

$txt['custom_edit_placement'] = 'Choose Placement';
$txt['custom_edit_placement_standard'] = 'Standard (with title)';
$txt['custom_edit_placement_withicons'] = 'With Icons';
$txt['custom_edit_placement_abovesignature'] = 'Above Signature';
$txt['custom_profile_placement'] = 'Placement';
$txt['custom_profile_placement_standard'] = 'Standard';
$txt['custom_profile_placement_withicons'] = 'With Icons';
$txt['custom_profile_placement_abovesignature'] = 'Above Signature';

$txt['custom_edit_delete_sure'] = 'Are you sure you wish to delete this field - all related user data will be lost!';

$txt['standard_profile_title'] = 'Standard Profile Fields';
$txt['standard_profile_field'] = 'Field';

$txt['languages_lang_name'] = 'Language Name (click to edit the language)';
$txt['languages_locale'] = 'Locale';
$txt['languages_default'] = 'Default';
$txt['languages_users'] = 'Users';
$txt['language_settings_writable'] = 'Warning: Settings.php is not writable so the default language setting cannot be saved.';
$txt['edit_languages'] = 'Edit Languages';
$txt['lang_file_not_writable'] = '<strong>Warning:</strong> The primary language file (%1$s) is not writable. You must make this writable before you can make any changes.';
$txt['lang_entries_not_writable'] = '<strong>Warning:</strong> The language file you wish to edit (%1$s) is not writable. You must make this writable before you can make any changes.';
$txt['languages_ltr'] = 'Right to Left';

$txt['add_language'] = 'Add Language';
$txt['add_language_wedge'] = 'Download from Wedge';
$txt['add_language_wedge_browse'] = 'Type name of language to search for or leave blank to search for all.';
$txt['add_language_wedge_install'] = 'Install';
$txt['add_language_wedge_found'] = 'The following languages were found. Click the install link next to the language you wish to install, you will then be taken to the plugin manager to install.';
$txt['add_language_error_no_response'] = 'The Wedge website is not responding. Please try again later.';
$txt['add_language_error_no_files'] = 'No files could be found.';
$txt['add_language_wedge_desc'] = 'Description';
$txt['add_language_wedge_version'] = 'Version';

$txt['edit_language_entries_primary'] = 'Below are the primary language settings for this language pack.';
$txt['edit_language_entries'] = 'Edit Language Entries';
$txt['edit_language_entries_file'] = 'Select entries to edit';
$txt['languages_dictionary'] = 'Dictionary';
$txt['languages_spelling'] = 'Spelling';
$txt['languages_for_pspell'] = 'This is for <a href="http://www.php.net/function.pspell-new" target="_blank" class="new_win">pSpell</a> - if installed';
$txt['languages_rtl'] = 'Enable &quot;Right to Left&quot; Mode';

$txt['lang_file_desc_index'] = 'General Strings';
$txt['lang_file_desc_EmailTemplates'] = 'Email Templates';

$txt['languages_download'] = 'Download Language Pack';
$txt['languages_download_note'] = 'This page lists all the files that are contained within the language pack and some useful information about each one. All files that have their associated check box marked will be copied.';
$txt['languages_download_info'] = '<strong>Note:</strong>
	<ul class="normallist">
		<li>Files which have the status &quot;Not Writable&quot; means Wedge will not be able to copy this file to the directory at the present and you must make the destination writable either using an FTP client or by filling in your details at the bottom of the page.</li>
		<li>The Version information for a file displays the last Wedge version which it was updated for. If it is indicated in green then this is a newer version than you have at current. If amber this indicates it\'s the same version number as at current, red indicates you have a newer version installed than contained in the pack.</li>
		<li>Where a file already exists on your forum the &quot;Already Exists&quot; column will have one of two values. &quot;Identical&quot; indicates that the file already exists in an identical form and need not be overwritten. &quot;Different&quot; means that the contents vary in some way and overwriting is probably the optimum solution.</li>
	</ul>';

$txt['languages_download_main_files'] = 'Primary Files';
$txt['languages_download_theme_files'] = 'Theme-related Files';
$txt['languages_download_filename'] = 'File Name';
$txt['languages_download_dest'] = 'Destination';
$txt['languages_download_writable'] = 'Writable';
$txt['languages_download_version'] = 'Version';
$txt['languages_download_older'] = 'You have a newer version of this file installed, overwriting is not recommended.';
$txt['languages_download_exists'] = 'Already Exists';
$txt['languages_download_exists_same'] = 'Identical';
$txt['languages_download_exists_different'] = 'Different';
$txt['languages_download_copy'] = 'Copy';
$txt['languages_download_not_chmod'] = 'You cannot proceed with the installation until all files selected to be copied are writable.';
$txt['languages_download_illegal_paths'] = 'Plugin contains illegal paths - please contact Wedge';
$txt['languages_download_complete'] = 'Installation Complete';
$txt['languages_download_complete_desc'] = 'Language pack installed successfully. Please click <a href="%1$s">here</a> to return to the languages page';
$txt['languages_delete_confirm'] = 'Are you sure you want to delete this language?';

?>