<?php
// Version: 2.0; Index

// Locale (strftime, pspell_new) and spelling. (pspell_new, can be left as '' normally.)
// For more information see:
//		http://www.php.net/function.pspell-new
//		http://www.php.net/function.setlocale
// Again, SPELLING SHOULD BE '' 99% OF THE TIME!! Please read this!
$txt['lang_locale'] = 'en_US';
$txt['lang_dictionary'] = 'en';
$txt['lang_spelling'] = 'american';

// Character set and right to left?
$txt['lang_rtl'] = false;
// Capitalize day and month names?
$txt['lang_capitalize_dates'] = true;
// Number formats?
$txt['number_format'] = '1,234.00';
$txt['time_format'] = '%B %e, %Y, %I:%M %p';
$txt['time_format_this_year'] = '%B %e, %I:%M %p';

$txt['days'] = array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
$txt['days_short'] = array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat');
// Months must start with 1 => 'January'. (or translated, of course.)
$txt['months'] = array(1 => 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
$txt['months_short'] = array(1 => 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');

$txt['admin'] = 'Admin';
$txt['moderate'] = 'Moderate';

$txt['save'] = 'Save';

$txt['modify'] = 'Modify';
$txt['forum_index'] = '%1$s - Index';
$txt['members'] = 'Members';
$txt['board_name'] = 'Board name';

$txt['member_postcount'] = 'Posts';
$txt['no_subject'] = '(No subject)';
$txt['view_profile'] = 'View profile';
$txt['guest_title'] = 'Guest';
$txt['author'] = 'Author';
$txt['on'] = 'on';
$txt['on_date'] = 'on %1$s';
$txt['remove'] = 'Remove';
$txt['start_new_topic'] = 'Start new topic';

$txt['login'] = 'Login';
// Use numeric entities in the below string.
$txt['username'] = 'Username';
$txt['password'] = 'Password';

$txt['username_no_exist'] = 'That username does not exist.';
$txt['no_user_with_email'] = 'There are no usernames associated with that email.';

$txt['board_moderator'] = 'Board Moderator';
$txt['remove_topic'] = 'Remove Topic';
$txt['modify_msg'] = 'Modify message';
$txt['name'] = 'Name';
$txt['email'] = 'Email';
$txt['subject'] = 'Subject';
$txt['message'] = 'Message';
$txt['quick_modify'] = 'Modify Inline';

$txt['posts'] = 'Posts';
$txt['posts_0'] = 'No posts';
$txt['posts_1'] = '%s post';
$txt['posts_n'] = '%s posts';
$txt['topics'] = 'Topics';
$txt['topics_0'] = 'No topics';
$txt['topics_1'] = '%s topic';
$txt['topics_n'] = '%s topics';
$txt['redirects'] = 'Redirects';
$txt['redirects_0'] = 'No redirections';
$txt['redirects_1'] = '%s redirection';
$txt['redirects_n'] = '%s redirections';
$txt['replies'] = 'Replies';
$txt['replies_0'] = 'No reply';
$txt['replies_1'] = '%s reply';
$txt['replies_n'] = '%s replies';
$txt['views'] = 'Views';
$txt['views_0'] = 'Never viewed';
$txt['views_1'] = '%s view';
$txt['views_n'] = '%s views';

$txt['choose_pass'] = 'Choose password';
$txt['verify_pass'] = 'Verify password';
$txt['position'] = 'Position';

$txt['total'] = 'Total';
$txt['posts_made'] = 'Posts';
$txt['website'] = 'Website';
$txt['register'] = 'Register';
$txt['warning_status'] = 'Warning Status';
$txt['user_warn_watch'] = 'User is on moderator watch list';
$txt['user_warn_moderate'] = 'User posts join approval queue';
$txt['user_warn_mute'] = 'User is banned from posting';
$txt['warn_watch'] = 'Watched';
$txt['warn_moderate'] = 'Moderated';
$txt['warn_mute'] = 'Muted';
$txt['warn_ban'] = 'Banned';

// User menu strings
$txt['usermenu_profile'] = 'Profile';
$txt['usermenu_profile_desc'] = 'View user profile';
$txt['usermenu_website'] = 'Website';
$txt['usermenu_website_desc'] = 'Go to user\'s website';
$txt['usermenu_sendpm'] = 'Message';
$txt['usermenu_sendpm_desc'] = 'Send user a personal message';
$txt['usermenu_showposts'] = 'View posts';
$txt['usermenu_showposts_desc'] = 'View user\'s latest contributions';
$txt['usermenu_addbuddy'] = '+ Contacts';
$txt['usermenu_addbuddy_desc'] = 'Add user to my contacts';
$txt['usermenu_removebuddy'] = '- Contacts';
$txt['usermenu_removebuddy_desc'] = 'Remove user from my contacts';

// Action menu strings (per post)
$txt['acme_report'] = 'Report';
$txt['acme_report_desc'] = 'Report this post to a moderator';
$txt['acme_restore'] = 'Restore';
$txt['acme_restore_desc'] = 'Restore this post\'s visibility';
$txt['acme_merge'] = 'Merge';
$txt['acme_merge_desc'] = 'Merge this post with the previous one';
$txt['acme_split'] = 'Split';
$txt['acme_split_desc'] = 'Split this topic into a new one';
$txt['acme_remove'] = 'Delete';
$txt['acme_remove_desc'] = 'Delete this post definitively';
$txt['acme_approve'] = 'Approve';
$txt['acme_approve_desc'] = 'Allow this post to be viewed by others';

$txt['more_actions'] = 'More&hellip;';

$txt['message_index'] = 'Message Index';
$txt['news'] = 'News';
$txt['home'] = 'Home';

$txt['lock_unlock'] = 'Lock/Unlock Topic';
$txt['post'] = 'Post';
$txt['error_occured'] = 'An Error Has Occurred!';
$txt['logout'] = 'Logout';
$txt['started_by'] = 'Started by';
$txt['board_index_last_post'] = '<strong>Last post</strong> by {member_link}<br>in {post_link}<br>{post_time}';

$txt['last_post'] = 'Last post';
$txt['admin_login'] = 'Administration Login';
// Use numeric entities in the below string.
$txt['topic'] = 'Topic';
$txt['help'] = 'Help';
$txt['notify'] = 'Notify';
$txt['unnotify'] = 'Unnotify';
$txt['notify_request'] = 'Do you want a notification email if someone replies to this topic?';
// Use numeric entities in the below string.
$txt['regards_team'] = 'Regards,' . "\n" . 'The {forum_name} Team.';
$txt['notify_replies'] = 'Notify of replies';
$txt['move_topic'] = 'Move Topic';
$txt['move_to'] = 'Move to';
$txt['pages'] = 'Pages';
$txt['users_active'] = 'Users active in past %1$d minutes';
$txt['personal_messages'] = 'Personal Messages';
$txt['reply_quote'] = 'Reply with quote';
$txt['reply'] = 'Reply';
$txt['reply_noun'] = 'Reply';
$txt['approve'] = 'Approve';
$txt['approve_all'] = 'approve all';
$txt['awaiting_approval'] = 'Awaiting Approval';
$txt['attach_awaiting_approve'] = 'Attachments awaiting approval';
$txt['post_awaiting_approval'] = 'Note: This message is awaiting approval by a moderator.';
$txt['there_are_unapproved_topics'] = 'There are %1$s topics and %2$s posts awaiting approval in this board. Click <a href="%3$s">here</a> to view them all.';

$txt['msg_alert_none'] = 'No messages...';
$txt['you_have_msg_0'] = 'you have no messages';
$txt['you_have_msg_1'] = 'you have <a href="<URL>?action=pm">1</a> message {new}';
$txt['you_have_msg_n'] = 'you have <a href="<URL>?action=pm">%1$s</a> messages {new}';
// The {new} construct is used to add the (x new) area in a language-dependent manner, using unread_pms, as below.
$txt['unread_pms_0'] = '(none new)';
$txt['unread_pms_1'] = '(1 new)';
$txt['unread_pms_n'] = '(%1$s new)';

$txt['remove_message'] = 'Remove this message';
$txt['remove_message_confirm'] = 'Remove this message?';

$txt['online_users'] = 'Users Online';
$txt['personal_message'] = 'Personal Message';
$txt['jump_to'] = 'Quick access';
$txt['go'] = 'Go';
$txt['are_sure_remove_topic'] = 'Are you sure you want to remove this topic?';
$txt['yes'] = 'Yes';
$txt['no'] = 'No';

$txt['search_end_results'] = 'End of results';
$txt['search_on'] = 'on';

$txt['search'] = 'Search';
$txt['all'] = 'All';

$txt['back'] = 'Back';
$txt['password_reminder'] = 'Password reminder';
$txt['topic_started'] = 'Topic started by';
$txt['title'] = 'Title';
$txt['post_by'] = 'Post by';
$txt['memberlist_searchable'] = 'Searchable list of all registered members.';
$txt['welcome_member'] = 'Please welcome';
$txt['admin_center'] = 'Administration Center';
$txt['last_edit'] = 'Last edited';
$txt['notify_deactivate'] = 'Would you like to deactivate notification on this topic?';

$txt['recent_posts'] = 'Recent Posts';

$txt['location'] = 'Location';
$txt['gender'] = 'Gender';
$txt['date_registered'] = 'Date Registered';

$txt['recent_view'] = 'View the most recent posts on the forum.';
$txt['recent_updated'] = 'is the most recently updated topic';

$txt['male'] = 'Male';
$txt['female'] = 'Female';

$txt['error_invalid_characters_username'] = 'Invalid character used in Username.';

$txt['welcome_guest'] = 'Welcome, <strong>%1$s</strong>. Please <a href="<URL>?action=login">login</a> or <a href="<URL>?action=register">register</a>.';
$txt['login_or_register'] = 'Please <a href="<URL>?action=login">login</a> or <a href="<URL>?action=register">register</a>.';
$txt['welcome_guest_activate'] = '<br>Did you miss your <a href="<URL>?action=activate">activation email</a>?';
$txt['hello_member'] = 'Hey,';
// Use numeric entities in the below string.
$txt['hello_guest'] = 'Welcome,';
$txt['select_destination'] = 'Select destination';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['posted_by'] = 'Posted by';

$txt['icon_smiley'] = 'Smile';
$txt['icon_angry'] = 'Angry';
$txt['icon_cheesy'] = 'Cheesy';
$txt['icon_sad'] = 'Sad';
$txt['icon_wink'] = 'Wink';
$txt['icon_grin'] = 'Grin';
$txt['icon_shocked'] = 'Shocked';
$txt['icon_cool'] = 'Cool!';
$txt['icon_huh'] = 'Huh?';
$txt['icon_rolleyes'] = 'Roll eyes';
$txt['icon_tongue'] = 'Tongue';
$txt['icon_embarrassed'] = 'Embarrassed';
$txt['icon_lips'] = 'Lips sealed';
$txt['icon_undecided'] = 'Undecided';
$txt['icon_kiss'] = 'Kiss';
$txt['icon_cry'] = 'Cry';
$txt['icon_edit'] = 'Edited';

$txt['moderator'] = 'Moderator';
$txt['moderators'] = 'Moderators';

$txt['mark_board_read'] = 'Mark Topics as Read for this Board';
$txt['new'] = 'New';

$txt['view_all_members'] = 'View All Members';
$txt['view'] = 'View';

$txt['viewing_members'] = 'Viewing Members %1$s to %2$s';
$txt['of_total_members'] = 'of %1$s total members';

$txt['forgot_your_password'] = 'Forgot your password?';

$txt['date'] = 'Date';
// Use numeric entities in the below string.
$txt['from'] = 'From';
$txt['check_new_messages'] = 'Check for new messages';
$txt['to'] = 'To';

$txt['members_title'] = 'Members';
$txt['members_list'] = 'Members List';
$txt['new_posts'] = 'New Posts';
$txt['old_posts'] = 'No New Posts';
$txt['redirect_board'] = 'Redirect Board';

$txt['sendtopic_send'] = 'Send';
$txt['report_sent'] = 'Your report has been sent successfully.';

$txt['time_offset'] = 'Time Offset';
$txt['or'] = 'or';

$txt['no_matches'] = 'Sorry, no matches were found';

$txt['notification'] = 'Notification';

$txt['your_ban'] = 'Sorry %1$s, you are banned from using this forum!<br>%2$s';
$txt['your_ban_expires'] = 'This ban is set to expire %1$s.';
$txt['your_ban_expires_never'] = 'This ban is not set to expire.';
$txt['ban_continue_browse'] = 'You may continue to browse the forum as a guest.';

$txt['mark_as_read'] = 'Mark ALL messages as read';

$txt['legend'] = 'Legend';
$txt['locked_topic'] = 'Locked Topic';
$txt['normal_topic'] = 'Normal Topic';
$txt['participation_caption'] = 'Topic you have posted in';

$txt['print'] = 'Print';
$txt['profile'] = 'Profile';
$txt['topic_summary'] = 'Topic Summary';
$txt['not_applicable'] = 'N/A';
$txt['message_lowercase'] = 'message';
$txt['name_in_use'] = 'This name is already in use by another member.';

$txt['total_members'] = 'Total Members';
$txt['total_posts'] = 'Total Posts';
$txt['total_topics'] = 'Total Topics';

$txt['mins_logged_in'] = 'Minutes to stay logged in';

$txt['switch_mode'] = 'Switch to full editor';
$txt['preview'] = 'Preview';
$txt['always_logged_in'] = 'Always stay logged in';

$txt['save_draft'] = 'Save as Draft';
$txt['save_draft_warning'] = 'Saving a draft will retain the basic post details (title, text, icon), but not attachments, poll options or calendar events. Are you happy to proceed with saving this draft?';
$txt['draft_saved'] = 'Your post has been saved as a draft. You can access it from <a href="{draft_link}">your profile</a>.';
$txt['pm_draft_saved'] = 'Your message has been saved as a draft. You can access it from <a href="{draft_link}">your drafts area</a>.';
$txt['remove_draft'] = 'Remove draft';
$txt['last_saved_on'] = 'Last saved';

// Use numeric entities in the below string.
$txt['ip'] = 'IP';

$txt['by'] = 'by';

$txt['days_word'] = 'days';

$txt['newest_member'] = ', our newest member.';

$txt['search_for'] = 'Search for';

$txt['maintain_mode_on'] = 'Remember, this forum is in \'Maintenance Mode\'.';

$txt['read'] = 'Read';
$txt['times'] = 'times';

$txt['forum_stats'] = 'Forum statistics';
$txt['board_stats'] = 'Board statistics';
$txt['blog_stats'] = 'Blog statistics';
$txt['topic_stats'] = 'Topic statistics';

$txt['latest_member'] = 'Latest Member';
$txt['total_cats'] = 'Total Categories';
$txt['latest_post'] = 'Latest Post';

$txt['youve_got_pms_0'] = 'You have no messages...';
$txt['youve_got_pms_1'] = 'You have 1 message...';
$txt['youve_got_pms_n'] = 'You have %1$s messages...';
$txt['click_to_view_them'] = 'Click <a href="%1$s">here</a> to view them.';

$txt['total_boards'] = 'Total Boards';

$txt['print_page'] = 'Print Page';

$txt['valid_email'] = 'This must be a valid email address.';

$txt['info_center_title'] = 'Info Center';

$txt['send_topic'] = 'Send this topic';
$txt['sendtopic_title'] = 'Send the topic &quot;%1$s&quot; to a friend.';
$txt['sendtopic_sender_name'] = 'Your name';
$txt['sendtopic_sender_email'] = 'Your email address';
$txt['sendtopic_receiver_name'] = 'Recipient\'s name';
$txt['sendtopic_receiver_email'] = 'Recipient\'s email address';
$txt['sendtopic_comment'] = 'Add a comment';

$txt['allow_user_email'] = 'Allow users to email me';

$txt['check_all'] = 'Check all';

// Use numeric entities in the below string.
$txt['database_error'] = 'Database Error';
$txt['try_again'] = 'Please try again. If you come back to this error screen, report the error to an administrator.';
$txt['file'] = 'File';
$txt['line'] = 'Line';
// Use numeric entities in the below string.
$txt['tried_to_repair'] = 'Wedge has detected and automatically tried to repair an error in your database. If you continue to have problems, or continue to receive these emails, please contact your host.';
$txt['database_error_versions'] = '<strong>Note:</strong> It appears that your database <em>may</em> require an upgrade. Your forum\'s files are currently at version %1$s, while your database is at version %2$s. The above error might possibly go away if you execute the latest version of upgrade.php.';
$txt['template_parse_error'] = 'Template Parse Error!';
$txt['template_parse_error_message'] = 'It seems something has gone sour on the forum with the template system. This problem should only be temporary, so please come back later and try again. If you continue to see this message, please contact the administrator.<br><br>You can also try <a href="javascript:location.reload();">refreshing this page</a>.';
$txt['template_parse_error_details'] = 'There was a problem loading the <tt><strong>%1$s</strong></tt> template or language file. Please check the syntax and try again - remember, single quotes (<tt>\'</tt>) often have to be escaped with a slash (<tt>\\</tt>). To see more specific error information from PHP, try <a href="{board_url}%1$s">accessing the file directly</a>.<br><br>You may want to try to <a href="javascript:location.reload();">refresh this page</a> or <a href="<URL>?theme=1">use the default theme</a>.';

$txt['today'] = '<strong>Today</strong> at ';
$txt['yesterday'] = '<strong>Yesterday</strong> at ';
$txt['new_poll'] = 'New poll';
$txt['poll_question'] = 'Question';
$txt['poll_vote'] = 'Submit Vote';
$txt['poll_total_voters'] = 'Total Members Voted';
$txt['shortcuts'] = 'shortcuts: hit alt+s to submit/post or alt+p to preview';
$txt['shortcuts_firefox'] = 'shortcuts: hit shift+alt+s to submit/post or shift+alt+p to preview';
$txt['poll_results'] = 'View results';
$txt['poll_lock'] = 'Lock Voting';
$txt['poll_unlock'] = 'Unlock Voting';
$txt['poll_edit'] = 'Edit Poll';
$txt['poll'] = 'Poll';
$txt['one_day'] = '1 Day';
$txt['one_week'] = '1 Week';
$txt['one_month'] = '1 Month';
$txt['forever'] = 'Forever';
$txt['quick_login_dec'] = 'Login with username, password and session length';
$txt['one_hour'] = '1 Hour';
$txt['moved'] = 'MOVED';
$txt['moved_why'] = 'Please enter a brief description as to<br>why this topic is being moved.';
$txt['board'] = 'Board';
$txt['in'] = 'in';
$txt['sticky_topic'] = 'Sticky Topic';

$txt['delete'] = 'Delete';

$txt['kilobyte'] = 'kB';

$txt['more_stats'] = '[More Stats]';

$txt['code'] = 'Code';
$txt['code_select'] = '[Select]';
$txt['quote_from'] = 'Quote from';
$txt['quote'] = 'Quote';
$txt['quote_noun'] = 'Quote';

$txt['merge_to_topic_id'] = 'ID of target topic';
$txt['split'] = 'Split current topic into another';
$txt['merge'] = 'Merge Topics';
$txt['subject_new_topic'] = 'Subject For New Topic';
$txt['split_this_post'] = 'Only split this post.';
$txt['split_after_and_this_post'] = 'Split topic after and including this post.';
$txt['select_split_posts'] = 'Select posts to split.';
$txt['new_topic'] = 'New Topic';
$txt['split_successful'] = 'Topic successfully split into two topics.';
$txt['origin_topic'] = 'Origin Topic';
$txt['please_select_split'] = 'Please select which posts you wish to split.';
$txt['merge_successful'] = 'Topics successfully merged.';
$txt['new_merged_topic'] = 'Newly Merged Topic';
$txt['topic_to_merge'] = 'Topic to be merged';
$txt['target_board'] = 'Target board';
$txt['target_topic'] = 'Target topic';
$txt['merge_desc'] = 'This function will merge the messages of two topics into one topic. The messages will be sorted according to the time of posting. Therefore the earliest posted message will be the first message of the merged topic.';

$txt['set_sticky'] = 'Set topic sticky';
$txt['set_nonsticky'] = 'Set topic non-sticky';
$txt['set_lock'] = 'Lock topic';
$txt['set_unlock'] = 'Unlock topic';

$txt['search_advanced'] = 'Advanced search';
$txt['search_simple'] = 'Simple search';

$txt['security_risk'] = 'MAJOR SECURITY RISK:';
$txt['not_removed'] = 'You haven\'t removed <strong>%1$s</strong>!';
$txt['not_removed_extra'] = '%1$s is a backup of %2$s that was not generated by Wedge. It can be accessed directly and used to gain unauthorized access to your forum. You should delete it immediately.';

$txt['cache_writable_head'] = 'Performance Warning';
$txt['cache_writable'] = 'The cache directory is not writable - this will adversely affect the performance of your forum.';

$txt['page_created'] = 'Page created in ';
$txt['seconds_with_query'] = '%1$.2f seconds with 1 query.';
$txt['seconds_with_queries'] = '%1$.2f seconds with %2$d queries.';

$txt['report_to_mod_func'] = 'Use this function to inform the moderators and administrators of an abusive or wrongly posted message.<br><em>Please note that your email address will be revealed to the moderators if you use this.</em>';

$txt['online'] = 'Online';
$txt['offline'] = 'Offline';
$txt['pm_online'] = 'Personal Message (Online)';
$txt['pm_offline'] = 'Personal Message (Offline)';
$txt['status'] = 'Status';

$txt['go_up'] = 'Go Up';
$txt['go_down'] = 'Go Down';

$txt['site_credits'] = 'Website credits';
$txt['copyright'] = 'Powered by <a href="http://wedge.org/" target="_blank" class="new_win">Wedge</a>, a work in progress. &copy; Wedgeward.';
$txt['dynamic_replacements'] = '<abbr title="Dynamic Replacements">DR</abbr>';

$txt['events'] = 'Events:';
$txt['events_upcoming'] = 'Upcoming Events:';
// Prompt for holidays in the calendar, leave blank to just display the holiday's name.
$txt['calendar_prompt'] = '';
$txt['calendar_month'] = 'Month:';
$txt['calendar_year'] = 'Year:';
$txt['calendar_day'] = 'Day:';
$txt['calendar_event_title'] = 'Event Title';
$txt['calendar_event_options'] = 'Event Options';
$txt['calendar_post_in'] = 'Post In:';
$txt['calendar_edit'] = 'Edit Event';
$txt['event_delete_confirm'] = 'Delete this event?';
$txt['event_delete'] = 'Delete Event';
$txt['calendar_post_event'] = 'Post Event';
$txt['calendar'] = 'Calendar';
$txt['calendar_link'] = 'Link to Calendar';
$txt['calendar_upcoming'] = 'Upcoming Calendar';
$txt['calendar_today'] = 'Today\'s Calendar';
$txt['calendar_week'] = 'Week';
$txt['calendar_week_title'] = 'Week %1$d of %2$d';
$txt['calendar_numb_days'] = 'Number of Days:';
$txt['calendar_how_edit'] = 'how do you edit these events?';
$txt['calendar_link_event'] = 'Link Event To Post:';
$txt['calendar_confirm_delete'] = 'Are you sure you want to delete this event?';
$txt['calendar_linked_events'] = 'Linked Events';
$txt['calendar_click_all'] = 'click to see all %1$s';

$txt['moveTopic1'] = 'Post a redirection topic';
$txt['moveTopic2'] = 'Change the topic\'s subject';
$txt['moveTopic3'] = 'New subject';
$txt['moveTopic4'] = 'Change every message\'s subject';
$txt['moveTopic_redirection_period'] = 'How long should the redirection topic<br>be left in place for?';
$txt['moveTopic_redirection_day_1'] = '1 day';
$txt['moveTopic_redirection_day_n'] = '%s days';
$txt['moveTopic_redirection_perm'] = 'Permanently';
$txt['move_topic_unapproved_js'] = 'Warning! This topic has not yet been approved.\\n\\nIt is not recommended that you create a redirection topic unless you intend to approve the post immediately following the move.';

$txt['theme_template_error'] = 'Unable to load the \'%1$s\' template.';
$txt['theme_language_error'] = 'Unable to load the \'%1$s\' language file.';

$txt['sub_boards'] = 'Sub-Boards';

$txt['smtp_no_connect'] = 'Could not connect to SMTP host';
$txt['smtp_port_ssl'] = 'SMTP port setting incorrect; it should be 465 for SSL servers.';
$txt['smtp_bad_response'] = 'Couldn\'t get mail server response codes';
$txt['smtp_error'] = 'Ran into problems sending Mail. Error: ';
$txt['mail_send_unable'] = 'Unable to send mail to the email address \'%1$s\'';

$txt['mlist_search'] = 'Search For Members';
$txt['mlist_search_again'] = 'Search again';
$txt['mlist_search_email'] = 'Search by email address';
$txt['mlist_search_group'] = 'Search by position';
$txt['mlist_search_name'] = 'Search by name';
$txt['mlist_search_website'] = 'Search by website';
$txt['mlist_search_results'] = 'Search results for';
$txt['mlist_search_by'] = 'Search by %1$s';
$txt['mlist_menu_view'] = 'View the memberlist';

$txt['attach_downloaded'] = 'downloaded';
$txt['attach_viewed'] = 'viewed';
$txt['attach_times'] = 'times';

$txt['settings'] = 'Settings';
$txt['never'] = 'Never';
$txt['more'] = 'more';

$txt['hostname'] = 'Hostname';
$txt['you_are_post_banned'] = 'Sorry %1$s, you are banned from posting and sending personal messages on this forum.';
$txt['ban_reason'] = 'Reason';

$txt['tables_optimized'] = 'Database tables optimized';

$txt['add_poll'] = 'Add poll';
$txt['poll_options6'] = 'You may only select up to %1$s options.';
$txt['poll_remove'] = 'Remove Poll';
$txt['poll_remove_warn'] = 'Are you sure you want to remove this poll from the topic?';
$txt['poll_results_expire'] = 'Results will be shown when voting has closed';
$txt['poll_expires_on'] = 'Voting closes';
$txt['poll_expired_on'] = 'Voting closed';
$txt['poll_change_vote'] = 'Remove Vote';
$txt['poll_return_vote'] = 'Voting options';
$txt['poll_cannot_see'] = 'You cannot see the results of this poll at the moment.';

$txt['quick_mod_approve'] = 'Approve selected';
$txt['quick_mod_remove'] = 'Remove selected';
$txt['quick_mod_lock'] = 'Lock/Unlock selected';
$txt['quick_mod_sticky'] = 'Sticky/Unsticky selected';
$txt['quick_mod_move'] = 'Move selected to';
$txt['quick_mod_merge'] = 'Merge selected';
$txt['quick_mod_markread'] = 'Mark selected read';
$txt['quick_mod_go'] = 'Go!';
$txt['quickmod_confirm'] = 'Are you sure you want to do this?';

$txt['spell_check'] = 'Spell Check';

$txt['quick_reply'] = 'Quick Reply';
$txt['quick_reply_desc'] = 'With <em>Quick-Reply</em> you can write a post when viewing a topic without loading a new page. You can still use bulletin board code and smileys as you would in a normal post.';
$txt['quick_reply_warning'] = 'Warning: this topic is currently locked! Only admins and moderators can reply.';
$txt['quick_reply_verification'] = 'After submitting your post you will be directed to the regular post page to verify your post %1$s.';
$txt['quick_reply_verification_guests'] = '(required for all guests)';
$txt['quick_reply_verification_posts'] = '(required for all users with less than %1$d posts)';
$txt['wait_for_approval'] = 'Note: this post will not display until it\'s been approved by a moderator.';

$txt['notification_enable_board'] = 'Are you sure you wish to enable notification of new topics for this board?';
$txt['notification_disable_board'] = 'Are you sure you wish to disable notification of new topics for this board?';
$txt['notification_enable_topic'] = 'Are you sure you wish to enable notification of new replies for this topic?';
$txt['notification_disable_topic'] = 'Are you sure you wish to disable notification of new replies for this topic?';

$txt['report_to_mod'] = 'Report this post to a moderator';
$txt['issue_warning_post'] = 'Issue a warning about this post';

$txt['unread_topics_all'] = 'All Unread Topics';
$txt['unread_replies'] = 'Updated Topics';

$txt['who_title'] = 'Who\'s Online';
$txt['who_and'] = ' and ';
$txt['who_viewing_topic'] = ' are viewing this topic.';
$txt['who_viewing_board'] = ' are viewing this board.';
$txt['who_member'] = 'Member';

// Feed block
$txt['feed'] = 'Latest Posts Feed';
$txt['feed_current_topic'] = 'This topic:';
$txt['feed_current_board'] = 'This board:';
$txt['feed_current_blog'] = 'This blog:';
$txt['feed_everywhere'] = 'Whole forum:';
$txt['feed_posts'] = '<a href="%1$s">posts</a>';
$txt['feed_topics'] = '<a href="%1$s">topics</a>';

// Footer strings
$txt['valid_html5'] = 'Valid HTML5!';
$txt['wap2'] = 'WAP2';
$txt['html5'] = 'HTML5';
$txt['html'] = 'HTML';

$txt['guest'] = 'Guest';
$txt['guests'] = 'Guests';
$txt['user'] = 'User';
$txt['users'] = 'Users';
$txt['hidden'] = 'Hidden';
$txt['buddy'] = 'Contact';
$txt['buddies'] = 'Contacts';
$txt['most_online_ever'] = 'Most Online Ever';
$txt['most_online_today'] = 'Most Online Today';

$txt['merge_select_target_board'] = 'Select the target board of the merged topic';
$txt['merge_select_poll'] = 'Select which poll the merged topic should have';
$txt['merge_topic_list'] = 'Select topics to be merged';
$txt['merge_select_subject'] = 'Select subject of merged topic';
$txt['merge_custom_subject'] = 'Custom subject';
$txt['merge_enforce_subject'] = 'Change the subject of all the messages';
$txt['merge_include_notifications'] = 'Include notifications?';
$txt['merge_check'] = 'Merge?';
$txt['merge_no_poll'] = 'No poll';

$txt['response_prefix'] = 'Re: ';
$txt['current_icon'] = 'Current Icon';
$txt['message_icon'] = 'Message Icon';

$txt['smileys_current'] = 'Current Smiley Set';
$txt['smileys_none'] = 'No Smileys';
$txt['smileys_forum_board_default'] = 'Forum/Board Default';

$txt['search_results'] = 'Search Results';
$txt['search_no_results'] = 'Sorry, no matches were found';

$txt['totalTimeLogged1'] = 'Total time logged in: ';
$txt['totalTimeLogged2'] = ' days, ';
$txt['totalTimeLogged3'] = ' hours and ';
$txt['totalTimeLogged4'] = ' minutes.';
$txt['totalTimeLogged5'] = 'd ';
$txt['totalTimeLogged6'] = 'h ';
$txt['totalTimeLogged7'] = 'm';

$txt['approve_members_waiting_1'] = 'There is <a href="<URL>?action=admin;area=viewmembers;sa=browse;type=approve">one member</a> awaiting approval.';
$txt['approve_members_waiting_n'] = 'There are <a href="<URL>?action=admin;area=viewmembers;sa=browse;type=approve">%1$s members</a> awaiting approval.';

$txt['notifyboard_turnon'] = 'Do you want a notification email when someone posts a new topic in this board?';
$txt['notifyboard_turnoff'] = 'Are you sure you do not want to receive new topic notifications for this board?';

$txt['activate_code'] = 'Your activation code is';

$txt['find_members'] = 'Find Members';
$txt['find_username'] = 'Name, username, or email address';
$txt['find_buddies'] = 'Show Buddies Only?';
$txt['find_wildcards'] = 'Allowed Wildcards: *, ?';
$txt['find_no_results'] = 'No results found';
$txt['find_results'] = 'Results';
$txt['find_close'] = 'Close';

$txt['show_unread'] = 'Unread posts';
$txt['show_unread_replies'] = 'Unread replies';

$txt['change_color'] = 'Change Color';

$txt['quickmod_delete_selected'] = 'Remove Selected';

// In this string, don't use entities. (&amp;, etc.)
$txt['show_personal_messages'] = 'You have received one or more new personal messages.\\nWould you like to open a new window to view them?';

$txt['previous_next_back'] = '&laquo; previous';
$txt['previous_next_forward'] = 'next &raquo;';

$txt['movetopic_auto_board'] = '[BOARD]';
$txt['movetopic_auto_topic'] = '[TOPIC LINK]';
$txt['movetopic_default'] = 'This topic has been moved to ' . $txt['movetopic_auto_board'] . ".\n\n" . $txt['movetopic_auto_topic'];

$txt['upshrink_description'] = 'Shrink or expand the header.';

$txt['mark_unread'] = 'Mark unread';

$txt['ssi_not_direct'] = 'Please don\'t access SSI.php by URL directly; you may want to use the path (%1$s) or add ?ssi_function=something.';
$txt['ssi_session_broken'] = 'SSI.php was unable to load a session! This may cause problems with logout and other functions - please make sure SSI.php is included before *anything* else in all your scripts!';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['preview_title'] = 'Preview post';
$txt['preview_fetch'] = 'Fetching preview...';
$txt['preview_new'] = 'New message';
$txt['error_while_submitting'] = 'The following error or errors occurred while posting this message:';
$txt['error_old_topic'] = 'Warning: this topic has not been posted in for at least %1$d days.<br>Unless you\'re sure you want to reply, please consider starting a new topic.';

$txt['split_selected_posts'] = 'Selected posts';
$txt['split_selected_posts_desc'] = 'The posts below will form a new topic after splitting.';
$txt['split_reset_selection'] = 'reset selection';

$txt['modify_cancel'] = 'Cancel';
$txt['mark_read_short'] = 'Mark Read';

$txt['pm_short'] = 'My Messages';
$txt['pm_menu_read'] = 'Read your messages';
$txt['pm_menu_send'] = 'Send a message';
$txt['pm_menu_drafts'] = 'Draft messages';

$txt['hello_member_ndt'] = 'Hello, <span>%1$s</span>!';

$txt['unapproved_posts'] = 'Unapproved Posts (Topics: %1$d, Posts: %2$d)';

$txt['ajax_in_progress'] = 'Loading...';

$txt['mod_reports_waiting_1'] = 'There is currently 1 moderator report open.';
$txt['mod_reports_waiting_n'] = 'There are currently %1$d moderator reports open.';

$txt['view_unread_category'] = 'Unread Posts';
$txt['verification'] = 'Verification';
$txt['visual_verification_description'] = 'Type the letters shown in the picture';
$txt['visual_verification_sound'] = 'Listen to the letters';
$txt['visual_verification_request_new'] = 'Request another image';
$txt['visual_verification_hidden'] = 'This box must be left blank';

// Sub menu labels
$txt['summary'] = 'Summary';
$txt['account'] = 'Account Settings';
$txt['forumprofile'] = 'Forum Profile';
$txt['change_skin'] = 'Skin Selector';
$txt['draft_posts'] = 'Draft Posts';

$txt['modSettings_title'] = 'Features and Options';
$txt['plugin_manager'] = 'Plugins';
$txt['errlog'] = 'Error Log';
$txt['edit_permissions'] = 'Permissions';
$txt['mc_unapproved_attachments'] = 'Unapproved Attachments';
$txt['mc_unapproved_poststopics'] = 'Unapproved Posts';
$txt['mc_reported_posts'] = 'Reported Posts';
$txt['modlog_view'] = 'Moderation Log';
$txt['calendar_menu'] = 'View Calendar';

//!!! Send email strings - should move?
$txt['send_email'] = 'Send an email';
$txt['send_email_disclosed'] = 'Note this will be visible to the recipient.';
$txt['send_email_subject'] = 'Email Subject';

$txt['ignoring_user'] = 'You are ignoring this user.';
$txt['show_ignore_user_post'] = 'Show me the post.';

$txt['spider'] = 'Spider';
$txt['spiders'] = 'Spiders';

$txt['downloads'] = 'Downloads';
$txt['filesize'] = 'Filesize';
$txt['footnote'] = 'Footnote';

// Restore topic
$txt['restore_topic'] = 'Restore Topic';
$txt['quick_mod_restore'] = 'Restore Selected';

// Editor prompt.
$txt['prompt_text_email'] = 'Please enter the email address.';
$txt['prompt_text_ftp'] = 'Please enter the ftp address.';
$txt['prompt_text_url'] = 'Please enter the URL you wish to link to.';
$txt['prompt_text_img'] = 'Enter image location';
$txt['prompt_text_desc'] = 'Please enter what text the link should say. Leave blank to show the URL.';

$txt['autosuggest_delete_item'] = 'Delete Item';

// Debug related - when $db_show_debug is true.
$txt['debug_templates'] = 'Templates: ';
$txt['debug_blocks'] = 'Blocks: ';
$txt['debug_language_files'] = 'Language files: ';
$txt['debug_stylesheets'] = 'Style sheets: ';
$txt['debug_files_included'] = 'Files included: ';
$txt['debug_kb'] = 'KB.';
$txt['debug_show'] = 'show';
$txt['debug_cache_hits'] = 'Cache hits: ';
$txt['debug_cache_seconds_bytes'] = '%1$ss - %2$s bytes';
$txt['debug_cache_seconds_bytes_total'] = '%1$ss for %2$s bytes';
$txt['debug_queries_used'] = 'Queries used: %1$d.';
$txt['debug_queries_used_and_warnings'] = 'Queries used: %1$d, %2$d warnings.';
$txt['debug_query_in_line'] = 'in <em>%1$s</em> line <em>%2$s</em>, ';
$txt['debug_query_which_took'] = 'which took %1$s seconds.';
$txt['debug_query_which_took_at'] = 'which took %1$s seconds at %2$s into request.';
$txt['debug_show_queries'] = '[Show Queries]';
$txt['debug_hide_queries'] = '[Hide Queries]';

// Ignoring topics
$txt['ignoring_topic'] = 'You\'re currently ignoring this topic.';
$txt['ignore_topic'] = 'Ignore';
$txt['unignore_topic'] = 'Unignore';

// Site type. (Not used for now.)
$txt['b_type']['blog'] = 'post';
$txt['b_type']['forum'] = 'topic';
$txt['b_type']['site'] = 'article';

// Indicates the date of the first post when merging two posts.
$txt['search_date_posted'] = 'Posted:';

// Spoiler tags. But you're smart, so you don't need me telling.
$txt['spoiler'] = 'Spoiler';
$txt['click_for_spoiler'] = '(click to show/hide)';

$txt['readmore'] = '(%1$d more chars)';

// Media Gallery
$txt['media_gallery'] = 'Media';
$txt['media_home'] = 'Home';
$txt['media_unseen'] = 'Unseen';
$txt['media_profile_sum'] = 'Summary';
$txt['media_view_items'] = 'View items';
$txt['media_view_coms'] = 'View comments';
$txt['media_view_votes'] = 'View votes';
$txt['media_gotolink'] = 'Details';
$txt['media_zoom'] = 'Zoom';

?>