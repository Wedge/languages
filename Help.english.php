<?php
// Version: 2.0; Help

$txt['close_window'] = 'Close window';

$helptxt['manage_boards'] = '
	In this menu you can create/reorder/remove boards, and the categories
	above them. For example, if you had a wide-ranging
	site that offered information on "Sports" and "Cars" and "Music", these
	would be the top-level Categories you\'d create. Under each of these
	categories you\'d likely want to create hierarchical "sub-categories",
	or "Boards" for topics within each. It\'s a simple hierarchy, with this structure: <br>
	<ul class="normallist">
		<li>
			<strong>Sports</strong>
			&nbsp;- A "category"
		</li>
		<ul class="normallist">
			<li>
				<strong>Baseball</strong>
				&nbsp;- A board under the category of "Sports"
			</li>
			<ul class="normallist">
				<li>
					<strong>Stats</strong>
					&nbsp;- A sub-board under the board of "Baseball"
				</li>
			</ul>
			<li><strong>Football</strong>
			&nbsp;- A board under the category of "Sports"</li>
		</ul>
	</ul>
	Categories allow you to break down the board into broad topics ("Cars,
	Sports"), and the "Boards" under them are the actual topics under which
	members can post. A user interested in Pintos
	would post a message under "Cars->Pinto". Categories allow people to
	quickly find what their interests are: Instead of a "Store" you have
	"Hardware" and "Clothing" stores you can go to. This simplifies your
	search for "pipe joint compound" because you can go to the Hardware
	Store "category" instead of the Clothing Store (where you\'re unlikely
	to find pipe joint compound).<br>
	As noted above, a Board is a key topic underneath a broad category.
	If you want to discuss "Pintos" you\'d go to the "Auto" category and
	jump into the "Pinto" board to post your thoughts in that board.<br>
	Administrative functions for this menu item are to create new boards
	under each category, to reorder them (put "Pinto" behind "Chevy"), or
	to delete the board entirely.';

$helptxt['need_deny_perm'] = '
	Normally, controlling access to boards is simple enough - users who
	should see a board are given access, and those who should not see
	it (or enter it) are not.<br><br>
	Sometimes, though, you may want to specifically prevent a group from
	seeing a board, but some users in that group may be in other groups
	that would normally allow them in. For example, you may have a group
	for troublemakers, that you want to put people into, so you can find
	them easily later. You may want to prevent users in this troublemakers
	group from accessing certain boards - this is what "deny" permission
	is used for.<br><br>
	A group that has been denied from viewing (or entering) a board will
	be prevented from doing so, regardless of any other groups they are
	members of, with the exception of administrators.';

$helptxt['edit_news'] = '
	<ul class="normallist">
		<li>
			<strong>News</strong><br>
			This section allows you to set the text for news items displayed on the Board Index page.
			Add any item you want (e.g., "Don\'t miss the conference this Tuesday"). Each news item is displayed randomly and should be placed in a separate box.
		</li>
		<li>
			<strong>Newsletters</strong><br>
			This section allows you to send out newsletters to the members of the forum via personal message or email. First select the groups that you want to receive the newsletter, and those you don\'t want to receive the newsletter. If you wish, you can add additional members and email addresses that will receive the newsletter. Finally, input the message you want to send and select whether you want it to be sent to members as a personal message or as an email.
		</li>
		<li>
			<strong>Settings</strong><br>
			This section contains a few settings that relate to news and newsletters, including selecting what groups can edit forum news or send newsletters.
		</li>
	</ul>';

$helptxt['view_members'] = '
	<ul class="normallist">
		<li>
			<strong>View all Members</strong><br>
			View all members in the board. You are presented with a hyperlinked list of member names. You may click
			on any of the names to find details of the members (homepage, age, etc.), and as Administrator
			you are able to modify these parameters. You have complete control over members, including the
			ability to delete them from the forum.<br><br>
		</li>
		<li>
			<strong>Awaiting Approval</strong><br>
			This section is only shown if you have enabled admin approval of all new registrations. Anyone who registers to join your
			forum will only become a full member once they have been approved by an admin. The section lists all those members who
			are still awaiting approval, along with their email and IP address. You can choose to either accept or reject (delete)
			any member on the list by checking the box next to the member and choosing the action from the drop-down box at the bottom
			of the screen. When rejecting a member you can choose to delete the member either with or without notifying them of your decision.<br><br>
		</li>
		<li>
			<strong>Awaiting Activation</strong><br>
			This section will only be visible if you have activation of member accounts enabled on the forum. This section will list all
			members who have still not activated their new accounts. From this screen you can choose to either accept, reject or remind
			members with outstanding registrations. As above you can also choose to email the member to inform them of the
			action you have taken.<br><br>
		</li>
	</ul>';

$helptxt['ban_members'] = '
	Wedge provides the ability to "ban" users, to prevent people who have violated the trust of the board
	by spamming, trolling, etc. This allows you to those users who are detrimental to your forum. As an admin,
	when you view messages, you can see each user\'s IP address used to post at that time. In the ban list,
	you simply type that IP address in, save, and they can no longer post from that location.<br>You can also
	ban people through their email address.';

$helptxt['featuresettings'] = '
	There are several features in this section that can be changed to your preference.';

$helptxt['time_format'] = '
	You have the power to adjust how the time and date look for yourself. There are a lot of weird little letters, but it\'s quite simple.
	The conventions follow PHP\'s <span class="bbc_tt">strftime</span> function and are described as below (more details at <a href="http://www.php.net/manual/function.strftime.php" target="_blank" class="new_win">php.net</a>).<br>
	<br>
	The format string recognizes the following characters, among others:
	<div style="padding: 5px 0 5px 30px">
		<span class="bbc_tt">%a</span> - weekday name (abbreviated)<br>
		<span class="bbc_tt">%A</span> - weekday name (full)<br>
		<span class="bbc_tt">%b</span> - month name (abbreviated)<br>
		<span class="bbc_tt">%B</span> - month name (full)<br>
		<span class="bbc_tt">%d</span> - day of the month (01 to 31)<br>
		<span class="bbc_tt" style="color: #999">%D</span> - short date, same as %m/%d/%y<br>
		<span class="bbc_tt">%e</span> - day of the month (1 to 31)<br>
		<span class="bbc_tt">%@</span> - day of the month and suffix (1st to 31st)<br>
		<span class="bbc_tt">%H</span> - hour using a 24-hour clock (range 00 to 23)<br>
		<span class="bbc_tt">%I</span> - hour using a 12-hour clock (range 01 to 12)<br>
		<span class="bbc_tt">%m</span> - month as a number (01 to 12)<br>
		<span class="bbc_tt">%M</span> - minute as a number (00 to 59)<br>
		<span class="bbc_tt">%p</span> - adds either "AM" or "PM", according to the given time<br>
		<span class="bbc_tt" style="color: #999">%R</span> - hour and minutes, same as %H:%M<br>
		<span class="bbc_tt">%S</span> - second as a number (00 to 59)<br>
		<span class="bbc_tt" style="color: #999">%T</span> - hours, minutes and seconds, same as %H:%M:%S<br>
		<span class="bbc_tt">%y</span> - 2-digit year (00 to 99)<br>
		<span class="bbc_tt">%Y</span> - 4-digit year<br>
		<span class="bbc_tt">%%</span> - a literal \'%\' character<br>
	</div>
	<em>* Grayed out characters do not work on Windows-based servers.</em>';

$helptxt['live_news'] = '
	This box shows recently updated announcements from <a href="http://wedge.org/" target="_blank" class="new_win">wedge.org</a>.
	You should check here every now and then for updates, new releases, and important information from Wedge.';

$helptxt['registrations'] = '
	This section contains all the functions that could be necessary to manage new registrations on the forum. It contains up to four
	sections which are visible depending on your forum settings. These are:<br><br>
	<ul class="normallist">
		<li>
			<strong>Register new member</strong><br>
			From this screen you can choose to register accounts for new members on their behalf. This can be useful in forums where registration is closed
			to new members, or in cases where the admin wishes to create a test account. If the option to require activation of the account
			is selected the member will be emailed a activation link which must be clicked before they can use the account. Similarly you can
			select to email the user\'s new password to the stated email address.<br><br>
		</li>
		<li>
			<strong>Edit Registration Agreement</strong><br>
			This allows you to set the text for the registration agreement displayed when members sign up for your forum.
			You can add or remove anything from the default registration agreement, which is included in Wedge.<br><br>
		</li>
		<li>
			<strong>Set Reserved Names</strong><br>
			Using this interface you can specify words or names which may not be used by your users.<br><br>
		</li>
		<li>
			<strong>Settings</strong><br>
			This section will only be visible if you have permission to administrate the forum. From this screen you can decide on the registration method
			is use on your forum, as well as other registration related settings.
		</li>
	</ul>';

$helptxt['modlog'] = '
	This section allows members of the moderation team to track all the moderation actions that the forum moderators have performed. To ensure that
	moderators cannot remove references to the actions they have performed, entries may not be deleted until 24 hours after the action was taken.';
$helptxt['adminlog'] = '
	This section allows members of the admin team to track some of the administrative actions that have occurred on the forum. To ensure that
	admins cannot remove references to the actions they have performed, entries may not be deleted until 24 hours after the action was taken.';
$helptxt['warning_enable'] = '
	This feature enables members of the admin and moderation team to issue warnings to members - and to use a members warning level to determine the
	actions available to them on the forum. Upon enabling this feature a permission will be available within the permissions section to define
	which groups may assign warnings to members. Warning levels can be adjusted from a members profile. Here are some of the options available:
	<ul class="normallist">
		<li>
			<strong>Warning Level for Member Watch</strong><br>
			This setting defines the percentage warning level a member must reach to automatically assign a "watch" to the member.
			Any member who is being "watched" will appear in the relevant area of the moderation center.
		</li>
		<li>
			<strong>Warning Level for Post Moderation</strong><br>
			Any member passing the value of this setting will find all their posts require moderator approval before they appear to the forum
			community. This will override any local board permissions which may exist related to post moderation.
		</li>
		<li>
			<strong>Warning Level for Member Muting</strong><br>
			If this warning level is passed by a member they will find themselves under a post ban. The member will lose all posting rights.
		</li>
		<li>
			<strong>Maximum Member Warning Point per Day</strong><br>
			This setting limits the amount of points a moderator may add/remove to any particular member in a 24-hour period. This will
			can be used to limit what a moderator can do in a small period of time. This setting can be disabled by setting to a value of zero.
			Note that any member with administrator permissions are not affected by this value.
		</li>
	</ul>';
$helptxt['error_log'] = '
	The error log tracks logs every serious error encountered by users using your forum. It lists all of these errors by date which can be sorted
	by clicking the black arrow next to each date. Additionally you can filter the errors by clicking the picture next to each error statistic. This
	allows you to filter, for example, by member. When a filter is active the only results that will be displayed will be those that match that filter.';
$helptxt['theme_settings'] = '
	The settings screen allows you to change settings specific to a theme. These settings include options such as the themes directory and URL information but
	also options that affect the layout of a theme on your forum. Most themes will have a variety of user configurable options, allowing you to adapt a theme
	to suit your individual forum needs.';
$helptxt['smileys'] = '
	Here you can add and remove smileys, and smiley sets. Note importantly that if a smiley is in one set, it\'s in all sets - otherwise, it might
	get confusing for your users using different sets.<br><br>

	You are also able to edit message icons from here, if you have them enabled on the settings page.';

$helptxt['serversettings'] = '
	Here you can perform the core configuration for your forum. This section includes the database and url settings, as well as other
	important configuration items such as mail settings and caching. Think carefully whenever editing these settings as an error may
	render the forum inaccessible';
$helptxt['manage_files'] = '
	<ul class="normallist">
		<li>
			<strong>Browse Files</strong><br>
			Browse through all the attachments, avatars and thumbnails stored by Wedge.<br><br>
		</li><li>
			<strong>Attachment Settings</strong><br>
			Configure where attachments are stored and set restrictions on the types of attachments.<br><br>
		</li><li>
			<strong>Avatar Settings</strong><br>
			Configure where avatars are stored and manage resizing of avatars.<br><br>
		</li><li>
			<strong>File Maintenance</strong><br>
			Check and repair any error in the attachment directory and delete selected attachments.<br><br>
		</li>
	</ul>';

$helptxt['topicSummaryPosts'] = 'This allows you to set the number of previous posts shown in the topic summary at the post reply screen, right below the text area.';
$helptxt['enableAllMessages'] = 'Set this to the <em>maximum</em> number of posts a topic can have to show the all link. Setting this lower than "Maximum messages to display in a topic page" will simply mean it never gets shown, and setting it too high could slow down your forum.';
$helptxt['pruneSavedDrafts'] = 'Drafts saved on the server do not have any normal limits, but the administrator can use this option to automatically clean out old drafts of users to keep the database smaller. If this is set to a number, any drafts older than the number of days given will be removed. If set to 0, drafts are always kept until the author decides to publish them or delete them from their profile.';
$helptxt['allow_guestAccess'] = 'Unchecking this box will stop guests from doing anything but very basic actions - login, register, password reminder, etc. - on your forum. This is not the same as disallowing guest access to boards.';
$helptxt['userLanguage'] = 'Turning this option on will allow users to select which language file they use. It will not affect the
		default selection.';
$helptxt['trackStats'] = 'Stats:<br>This will allow users to see the latest posts and the most popular topics on your forum.
		It will also show several statistics, like the most members online, new members and new topics.<hr>
		Page views:<br>Adds another column to the stats page with the number of pageviews on your forum.';
$helptxt['titlesEnable'] = 'Switching Custom Titles on will allow members with the relevant permission to create a special title for themselves.
		This will be shown underneath the name.<br><em>For example:</em><br>Pete<br>Cool Guy';
$helptxt['todayMod'] = 'This will show "Today" or "Yesterday" instead of the date.<br><br>
		<strong>Examples:</strong><br><br>
		<dt>
			<dt>Disabled</dt>
			<dd>October 3, 2009 at 12:59:18 am</dd>
			<dt>Only Today</dt>
			<dd>Today at 12:59:18 am</dd>
			<dt>Today &amp; Yesterday</dt>
			<dd>Yesterday at 09:36:55 pm</dd>
		</dt>';
$helptxt['disableCustomPerPage'] = 'Check this option to stop users from customizing the amount of messages and topics to display per page on the Message Index and Topic Display page respectively.';
$helptxt['enablePreviousNext'] = 'This will show a link to the next and previous topic.';
$helptxt['ignoreMoveVsNew'] = 'By default, when moving topics between boards, the user will be presented with a list of the
		boards that they could normally create topics in (so that they can\'t move topics into announcement boards, for example).
		<br><br>Enabling this will present them with a list of any board they could normally see as a possible destination
		for moving topics to.';
$helptxt['webmaster_email'] = 'This option allows you to specify the email address of the primary administrator. This address is used for urgent notifications (such as database errors),
		and as a result should <em>really</em> be a valid email address.';
$helptxt['mail_from'] = 'This option allows you to specify a separate email address as the sender for all out-going email (notifications, newsletters...)
		<br><br>If you leave it empty, Wedge will use the forum\'s administrative email (typically the webmaster\'s) address for all notifications.
		Which means the admin should also receive all bounces, delivery error notifications and errant replies.<br>Lots of fun.
		<br><br>Use a dummy sender address like "no-reply@my-domain.com" for instance, and if possible ensure that any emails sent to that address are bounced back to their sender.';
$helptxt['enableCompressedOutput'] = 'This option will compress output to lower bandwidth consumption, but it requires
		zlib to be installed.';
$helptxt['enableCompressedData'] = 'This option will compress CSS and JS files to gzip format after caching them. It requires zlib to be installed, and the correct .htaccess
		settings to be initialized. This will save your server the hassle of gzipping these files on the fly each time they are requested.
		If it doesn\'t work, the stylesheets and JavaScript will be inactive and you should immediately disable the setting.';
$helptxt['obfuscate_filenames'] = 'This option will modify the filenames for JavaScript and CSS files when they\'re being cached. Its only point is to allow JavaScript
		developers to make life harder for evil script thieves who\'re after your work, yes you, personally, it\'s a conspiracy, they want your head.<br><br>
		Anyway, if names are encrypted, they won\'t be able to find the unminified original files. Obviously, if minification is disabled, it\'s utterly pointless. Just saying.';
$helptxt['minify'] = 'This option will minify JavaScript files when they\'re being cached. If you allow Wedge to minify files, it will remove all comments and useless whitespace,
		speeding up your site\'s loading speed. Only cached files will be minified, the original files are of course left untouched.<br><br>
		Using Packer for minification is more efficient, with one caveat: if your scripts aren\'t tightly programmed, they will crash (use <a href="http://www.jslint.com/" target="_blank">JSLint</a>
		to fix them). Also, if gzip compression isn\'t available on your server (the agony!), Packer will compress the files as best at it can, but it will introduce
		a small delay at execution time because. Otherwise, use JSMin, which is a good compromise if your scripts won\'t run.<br><br>
		Disable the setting if you\'re currently working on your scripts, it will make it easier to debug them. Really, we don\'t want to make your life miserable.
		Well, I do, but I\'m not doing it. I just think of it so I can secretly practice my evil laugh, then I get a life and I add these silly settings everywhere.';
$helptxt['jquery_origin'] = 'This option allows you to choose which server to serve the jQuery script from. If you\'re trying to save bandwidth, you may want to use
		one of the CDNs (content delivery network) provided by Google or Microsoft. You may also want to serve it directly from jquery.com\'s official servers.
		<br><br>If bandwidth is not an issue, you may want to serve it from your website, where it will be compressed along with other scripts. This will ensure
		that jQuery is always available, as long as your website is up. Make sure to use a CDN if your server doesn\'t have the zlib library up and running (which most
		servers will have anyway), otherwise you\'ll be serving a really big file...';
$helptxt['disableTemplateEval'] = 'By default, templates are evaluated instead of just included. This helps with showing more useful debug information in case a template contains an error.<br><br>
		On large forums however, this customised inclusion process may be significantly slower. Therefore, advanced users may wish to disable it.';
$helptxt['db_show_debug'] = 'Enables query debugging features. This is very useful for debugging purposes, and the debug query information is shown at the bottom of each
		page when this setting is enabled.<br><br>
		The following items are displayed:
		<ul>
			<li>Template files that were loaded
			<li>Blocks that were executed (all the template functions used to build the entire page)
			<li>Language files that were loaded
			<li>Style sheets that were loaded (through the proper method, may not include ones added by plugins)
			<li>Number of files included (and which ones)
			<li>Cache hits (what they were and how much time was spent with cache items)
			<li>Queries used (including full details, this is restricted to admins only)
		</ul>';
$helptxt['db_show_debug_who'] = 'The debug information is very useful for debugging the state of the forum when there are problems, but often it is of
		little or no relevance to non administrators. This option lists who the debug information will be visible to, when it is enabled.';
$helptxt['db_show_debug_who_log'] = 'Part of the debug information is a list of every query made by the forum when running. For security reasons it is
		not displayed directly as part of the main debug information, and this setting ensures it is only made visible when appropriate - there are times
		when debugging, that queries need to be displayed to non administrative users too, and this allows it to happen.';
$helptxt['databaseSession_enable'] = 'This option makes use of the database for session storage - it is best for load balanced servers, but helps with all timeout issues and can make the forum faster.';
$helptxt['databaseSession_loose'] = 'Turning this on will decrease the bandwidth your forum uses, and make it so clicking back will not reload the page - the downside is that the (new) icons won\'t update, among other things. (unless you click to that page instead of going back to it.)';
$helptxt['databaseSession_lifetime'] = 'This is the number of seconds for sessions to last after they haven\'t been accessed. If a session is not accessed for too long, it is said to have "timed out". Anything higher than 2400 is recommended.';
$helptxt['enableErrorLogging'] = 'This will log any errors, like a failed login, so you can see what went wrong.';
$helptxt['enableErrorQueryLogging'] = 'This will include the full query sent to the database in the error log. Requires error logging to be turned on.<br><br><strong>Note: This will affect the ability to filter the error log by the error message.</strong>';
$helptxt['allow_disableAnnounce'] = 'This will allow users to opt out of notification of topics you announce by checking the "announce topic" checkbox when posting.';
$helptxt['disallow_sendBody'] = 'This option removes the option to receive the text of replies and posts in notification emails.<br><br>Often, members will reply to the notification email, which in most cases means the webmaster receives the reply.';
$helptxt['timeLoadPageEnable'] = 'This will show the time in seconds Wedge took to create that page at the bottom of the board.';
$helptxt['removeNestedQuotes'] = 'This will strip nested quotes from a post when citing the post in question via a quote link.';
$helptxt['simpleSearch'] = 'This will show a simple search form and a link to a more advanced form.';
$helptxt['max_image_width'] = 'This allows you to set a maximum size for posted pictures. Pictures smaller than the maximum will not be affected.';
$helptxt['mail_type'] = 'This setting allows you to choose either PHP\'s default settings, or to override those settings with SMTP. PHP doesn\'t support using authentication with SMTP (which many hosts require, now) so if you want that you should select SMTP. Please note that SMTP can be slower, and some servers will not take usernames and passwords.<br><br>You don\'t need to fill in the SMTP settings if this is set to PHP\'s default.';
$helptxt['attachment_manager_settings'] = 'Attachments are files that members can upload, and attach to a post.<br><br>
		<strong>Check attachment extension</strong>:<br> Do you want to check the extension of the files?<br>
		<strong>Allowed attachment extensions</strong>:<br> You can set the allowed extensions of attached files.<br>
		<strong>Attachments directory</strong>:<br> The path to your attachment folder<br>(example: /home/sites/yoursite/www/forum/attachments)<br>
		<strong>Max attachment folder space</strong> (in KB):<br> Select how large the attachment folder can be, including all files within it.<br>
		<strong>Max attachment size per post</strong> (in KB):<br> Select the maximum filesize of all attachments made per post. If this is lower than the per-attachment limit, this will be the limit.<br>
		<strong>Max size per attachment</strong> (in KB):<br> Select the maximum filesize of each separate attachment.<br>
		<strong>Max number of attachments per post</strong>:<br> Select the number of attachments a person can make, per post.<br>
		<strong>Display attachment as picture in posts</strong>:<br> If the uploaded file is a picture, this will show it underneath the post.<br>
		<strong>Resize images when showing under posts</strong>:<br> If the above option is selected, this will save a separate (smaller) attachment for the thumbnail to decrease bandwidth.<br>
		<strong>Maximum width and height of thumbnails</strong>:<br> Only used with the "Resize images when showing under posts" option, the maximum width and height to resize attachments down from. They will be resized proportionally.';
$helptxt['attachment_image_paranoid'] = 'Selecting this option will enable very strict security checks on image attachments. Warning! These extensive checks can fail on valid images too. It is strongly recommended to only use this option together with image re-encoding, in order to have Wedge try to resample the images which fail the security checks: if successful, they will be sanitized and uploaded. Otherwise, if image re-encoding is not enabled, all attachments failing checks will be rejected.';
$helptxt['attachment_image_reencode'] = 'Selecting this option will enable trying to re-encode the uploaded image attachments. Image re-encoding offers better security. Note however that image re-encoding also renders all animated images static.';
$helptxt['avatar_paranoid'] = 'Selecting this option will enable very strict security checks on avatars. Warning! These extensive checks can fail on valid images too. It is strongly recommended to only use this option together with avatars re-encoding, in order to have Wedge try to resample the images which fail the security checks: if successful, they will be sanitized and uploaded. Otherwise, if re-encoding of avatars is not enabled, all avatars failing checks will be rejected.';
$helptxt['avatar_reencode'] = 'Selecting this option will enable trying to re-encode the uploaded avatars. Image re-encoding offers better security. Note however that image re-encoding also renders all animated images static.';

$helptxt['localCookies'] = 'Wedge uses cookies to store login information on the client computer.
	Cookies can be stored globally (myserver.com) or locally (myserver.com/path/to/forum).<br>
	Check this option if you\'re experiencing problems with users getting logged out automatically.<hr>
	Globally stored cookies are less secure when used on a shared webserver (like Tripod).<hr>
	Local cookies don\'t work outside the forum folder so, if your forum is stored at www.myserver.com/forum, pages like www.myserver.com/index.php cannot access the account information.
	Especially when using SSI.php, global cookies are recommended.';
$helptxt['enableBBC'] = 'Selecting this option will allow your members to use Bulletin Board Code (BBC) throughout the forum, allowing users to format their posts with images, type formatting and more.';
$helptxt['time_offset'] = 'Not all forum administrators want their forum to use the same time zone as the server upon which it is hosted. Use this option to specify a time difference (in hours) from which the forum should operate from the server time. Negative and decimal values are permitted.';
$helptxt['default_timezone'] = 'The server timezone tells PHP where your server is located. You should ensure this is set correctly, preferably to the country/city in which the city is located. You can find out more information on the <a href="http://www.php.net/manual/en/timezones.php" target="_blank">PHP Site</a>.';
$helptxt['spamWaitTime'] = 'Here you can select the amount of time that must pass between postings. This can be used to stop people from "spamming" your forum by limiting how often they can post.';

$helptxt['enablePostHTML'] = 'This will allow the posting of some basic HTML tags:
	<ul class="normallist" style="margin-bottom: 0;">
		<li>&lt;b&gt;, &lt;u&gt;, &lt;i&gt;, &lt;s&gt;, &lt;em&gt;, &lt;ins&gt;, &lt;del&gt;</li>
		<li>&lt;a href=""&gt;</li>
		<li>&lt;img src="" alt="" /&gt;</li>
		<li>&lt;br /&gt;, &lt;hr /&gt;</li>
		<li>&lt;pre&gt;, &lt;blockquote&gt;</li>
	</ul>';

$helptxt['themes'] = 'Here you can select whether the default theme can be chosen, what theme guests will use,
	as well as other options. Click on a theme to the right to change the settings for it.';
$helptxt['theme_install'] = 'This allows you to install new themes. You can do this from an already created directory, by uploading an archive for the theme, or by copying the default theme.<br><br>Note that the archive or directory must have a <tt>theme_info.xml</tt> definition file.';
$helptxt['enableEmbeddedFlash'] = 'This option will allow your users to use Flash directly inside their posts,
	just like images. This could pose a security risk, although few have successfully exploited it.
	USE AT YOUR OWN RISK!';
// !!! Add more information about how to use them here.
$helptxt['xmlnews_enable'] = 'Atom feeds are like RSS feeds, but better.<br>
	This option allows users to get your forum news without having to visit it all the time, through RSS/Atom client software or web services like Google Reader.
	It is recommended that you limit the size of recent posts/news, because some clients such as Trillian expect the data they\'re displaying to be truncated.';
$helptxt['globalCookies'] = 'Makes log in cookies available across subdomains. For example, if...<br>
	Your site is at http://www.mysite.org/,<br>
	And your forum is at http://forum.mysite.org/,<br>
	Using this option will allow you to access the forum\'s cookie on your site, for instance through the SSI.php bridge. Do not enable this if there are other subdomains (like hacker.mysite.org) not controlled by you.';
$helptxt['secureCookies'] = 'Enabling this option will force the cookies created for users on your forum to be marked as secure. Only enable this option if you are using HTTPS throughout your site as it will break cookie handling otherwise!';
$helptxt['securityDisable_why'] = 'Enter your account\'s password (the same one you use to login.)<br><br>Having to type this helps ensure that you want to access the administration panel, and that it is <strong>you</strong> doing it.';
$helptxt['emailmembers'] = 'In this message you can use a few "variables". These are:<br>
	{$board_url} - The URL to your forum.<br>
	{$current_time} - The current time.<br>
	{$member.email} - The current member\'s email.<br>
	{$member.link} - The current member\'s link.<br>
	{$member.id} - The current member\'s id.<br>
	{$member.name} - The current member\'s name (for personalization.)<br>
	{$latest_member.link} - The most recently registered member\'s link.<br>
	{$latest_member.id} - The most recently registered member\'s id.<br>
	{$latest_member.name} - The most recently registered member\'s name.';
$helptxt['attachmentEncryptFilenames'] = 'Encrypting attachment filenames allows you to have more than one attachment of the
	same name, to safely use .php files for attachments, and heightens security. It, however, could make it more
	difficult to rebuild your database if something drastic happened.';

$helptxt['failed_login_threshold'] = 'Set the number of failed login attempts before directing the user to the password reminder screen.';
$helptxt['enable_quick_login'] = 'This will show a compact login in the sidebar for guests.';
$helptxt['oldTopicDays'] = 'If this option is enabled a warning will be displayed to the user when attempting to reply to a topic which has not had any new replies for the amount of time, in days, specified by this setting. Set this setting to 0 to disable the feature.';
$helptxt['edit_wait_time'] = 'Number of seconds allowed for a post to be edited before logging the last edit date.';
$helptxt['edit_disable_time'] = 'Number of minutes allowed to pass before a user can no longer edit a post they have made. Set to 0 disable. <br><br><em>Note: This will not affect any user who has permission to edit other people\'s posts.</em>';
$helptxt['posts_require_captcha'] = 'This setting will force users to pass anti-spam bot verification each time they make a post to a board. Only users with a post count below the number set will need to enter the code - this should help combat automated spamming scripts.';
$helptxt['enableSpellChecking'] = 'Enable spell checking. You MUST have the pspell library installed on your server and your PHP configuration set up to use the pspell library. Your server ' . (function_exists('pspell_new') ? 'DOES' : 'DOES NOT') . ' appear to have this set up.';
$helptxt['disable_wysiwyg'] = 'This setting disallows all users from using the WYSIWYG ("What You See Is What You Get") editor on the post page.';
$helptxt['lastActive'] = 'Set the number of minutes to show people are active in X number of minutes on the board index. Default is 15 minutes, maximum is one day.<br><br>Setting this too high is not recommended, not only because making it too high slows your forum down, but also it artificially inflates how busy your forum appears to be, and may put people off visiting.';

$helptxt['customoptions'] = 'This section defines the options that a user may choose from a drop down list. There are a few key points to note in this section:
	<ul class="normallist">
		<li><strong>Default Option:</strong> Whichever option box has the "radio button" next to it selected will be the default selection for the user when they enter their profile.</li>
		<li><strong>Removing Options:</strong> To remove an option simply empty the text box for that option - all users with that selected will have their option cleared.</li>
		<li><strong>Reordering Options:</strong> You can reorder the options by moving text around between the boxes. However - an important note - you must make sure you do <strong>not</strong> change the text when reordering options as otherwise user data will be lost.</li>
	</ul>';

$helptxt['autoOptDatabase'] = 'This option optimizes the database every so many days. Set it to 1 to make a daily optimization. You can also specify a maximum number of online users, so that you won\'t overload your server or inconvenience too many users.';
$helptxt['autoFixDatabase'] = 'This will automatically fix broken tables and resume like nothing happened. This can be useful, because the only way to fix it is to REPAIR the table, and this way your forum won\'t be down until you notice. It does email you when this happens.';

$helptxt['enableParticipation'] = 'This shows a little icon on the topics the user has posted in.';

$helptxt['db_persist'] = 'Keeps the connection active to increase performance. If you aren\'t on a dedicated server, this may cause you problems with your host.';
$helptxt['ssi_db_user'] = 'Optional setting to use a different database user and password when you are using SSI.php.';

$helptxt['countChildPosts'] = 'Checking this option will mean that posts and topics in a board\'s sub-board will count toward its totals on the index page.<br><br>This will make things notably slower, but means that a parent with no posts in it won\'t show \'0\'.';
$helptxt['allow_ignore_boards'] = 'Checking this option will allow users to select boards they wish to ignore.';
$helptxt['allow_ignore_topics'] = 'Checking this option will allow users to select topics they wish to ignore in <em>Unread replies</em> and <em>Unread posts</em>.';

$helptxt['display_flags'] = 'In addition to the general language for the forum, you can set a language for each individual board, which is used by default. This option controls whether or not a flag for that language is displayed on the list of boards:
	<ul class="normallist">
		<li><strong>No flags</strong> - do not display any of the language-based flags on the main forum.</li>
		<li><strong>Flags for boards that have a language set</strong> - if a given board has a language default set for it, display a flag for that language next to the board\'s name.</li>
		<li><strong>Flags for all boards</strong> - display a flag next to the name of every board, denoting what language will be shown to the user (unless they have chosen their own)</li>
	</ul>';

$helptxt['who_enabled'] = 'This option allows you to turn on or off the ability for users to see who is browsing the forum and what they are doing.';

$helptxt['recycle_enable'] = '"Recycles" deleted topics and posts to the specified board.';

$helptxt['max_pm_recipients'] = 'This option allows you to set the maximum amount of recipients allowed in a single personal message sent by a forum member. This may be used to help stop spam abuse of the PM system. Note that users with permission to send newsletters are exempt from this restriction. Set to zero for no limit.';
$helptxt['pm_posts_verification'] = 'This setting will force users to enter a code shown on a verification image each time they are sending a personal message. Only users with a post count below the number set will need to enter the code - this should help combat automated spamming scripts.';
$helptxt['pm_posts_per_hour'] = 'This will limit the number of personal messages which may be sent by a user in a one hour period. This does not affect admins or moderators.';

$helptxt['registration_method'] = 'This option determines what method of registration is used for people wishing to join your forum. You can select from:<br><br>
	<ul class="normallist">
		<li>
			<strong>Registration Disabled</strong><br>
				Disables the registration process, which means that no new members can register to join your forum.<br>
		</li><li>
			<strong>Immediate Registration</strong><br>
				New members can login and post immediately after registering on your forum.<br>
		</li><li>
			<strong>Email Activation</strong><br>
				When this option is enabled any members registering with the forum will have an activation link emailed to them which they must click before they can become full members.<br>
		</li><li>
			<strong>Admin Approval</strong><br>
				This option will make it so all new members registering to your forum will need to be approved by the admin before they become members.
		</li>
	</ul>';

$helptxt['send_validation_onChange'] = 'When this option is checked all members who change their email address in their profile will have to reactivate their account from an email sent to that address';
$helptxt['send_welcomeEmail'] = 'When this option is enabled all new members will be sent an email welcoming them to your community';
$helptxt['password_strength'] = 'This setting determines the strength required for passwords selected by your forum users. The stronger the password, the harder it should be to compromise member\'s accounts.
	Its possible options are:
	<ul class="normallist">
		<li><strong>Low</strong>: The password must be at least 4 characters long.</li>
		<li><strong>Medium</strong>: The password must be at least 8 characters long, and can not be part of a user\'s name or email address.</li>
		<li><strong>High</strong>: As for medium, except the password must also contain a mixture of upper and lower-case letters, and at least one number.</li>
	</ul>';

$helptxt['coppaAge'] = 'The value specified in this box will determine the minimum age that new members must be to be granted immediate access to the forums.
	On registration they will be prompted to confirm whether they are over this age, and if not will either have their application rejected or suspended awaiting parental approval - depending on the type of restriction chosen.
	If a value of 0 is chosen for this setting then all other age restriction settings shall be ignored.';
$helptxt['coppaType'] = 'If age restrictions are enabled, then this setting will define that happens when a user below the minimum age attempts to register with your forum. There are two possible choices:
	<ul class="normallist">
		<li>
			<strong>Reject Their Registration:</strong><br>
				Any new member below the minimum age will have their registration rejected immediately.<br>
		</li><li>
			<strong>Require Parent/Guardian Approval</strong><br>
				Any new member who attempts to register and is below the minimum permitted age will have their account marked as awaiting approval, and will be presented with a form upon which their parents must give permission to become a member of the forums.
				They will also be presented with the forum contact details entered on the settings page, so they can send the form to the administrator by mail or fax.
		</li>
	</ul>';
$helptxt['coppaPost'] = 'The contact boxes are required so that forms granting permission for underage registration can be sent to the forum administrator. These details will be shown to all new minors, and are required for parent/guardian approval. At the very least a postal address or fax number must be provided.';

$helptxt['allow_hideOnline'] = 'With this option enabled all members will be able to hide their online status from other users (except administrators). If disabled only users who can moderate the forum can hide their presence. Note that disabling this option will not change any existing member\'s status - it just stops them from hiding themselves in the future.';

$helptxt['latest_support'] = 'This panel shows you some of the most common problems and questions on your server configuration. Don\'t worry, this information isn\'t logged or anything.<br><br>If this stays as "Retrieving support information...", your computer probably cannot connect to <a href="http://wedge.org/" target="_blank" class="new_win">wedge.org</a>.';
$helptxt['latest_packages'] = 'Here you can see some of the most popular and some random plugins, with quick and easy installations.<br><br>If this section doesn\'t show up, your computer probably cannot connect to <a href="http://wedge.org/" target="_blank" class="new_win">wedge.org</a>.';
$helptxt['latest_themes'] = 'This area shows a few of the latest and most popular themes from <a href="http://wedge.org/" target="_blank" class="new_win">wedge.org</a>. It may not show up properly if your computer can\'t find <a href="http://wedge.org/" target="_blank" class="new_win">wedge.org</a>, though.';

$helptxt['error_plugin_repo'] = 'The last time this repository was called, to see if it had any updated plugins for your forum, it could not be contacted properly, and you should probably check the URL of the repository to make sure it still exists. Also, if it requires a username and password, you may wish to re-enter the details to check them.';
$helptxt['plugins_repo_active'] = 'If a repository is not marked active, you will still be able to select the browse function, but it will not be called automatically for updates, so you will not automatically be notified if any of your plugins has an available update.';
$helptxt['plugins_password_blank'] = 'A password has previously been supplied for this repository but it is encrypted on the server so that your password cannot be shared with another person.<br><br>If you want, you can change the username and/or password by entering the new details - or leave the boxes as they are to leave the details as they are currently.';

$helptxt['secret_why_blank'] = 'For your security, your password and the answer to your secret question are encrypted so that the Wedge software will never tell you, or anyone else, what they are.';
$helptxt['primary_membergroup'] = '
	Wedge allows you to define primary and additional membergroups. If no primary membergroup is set for a member, they will be considered to be in the <em>Regular Members</em> virtual membergroup. Setting a member\'s primary membergroup to something else may cause them to lose all permissions associated with Regular Members. It is <strong>best practice</strong> to consider assigning membergroups as additional as much as possible.
	<h6>Why is the Moderator group missing from here?</h6>
	Since moderation is done on a board-by-board basis, and the moderator membergroup is another virtual membergroup, you have to make members moderators from the <a href="<URL>?action=admin;area=manageboards">board management interface</a>.';

$helptxt['permissions'] = 'Permissions are how you either allow groups to, or deny groups from, doing specific things.<br><br>You can modify multiple boards at once with the checkboxes, or look at the permissions for a specific group by clicking \'Modify.\'';
$helptxt['permissions_board'] = 'If a board is set to \'Global,\' it means that the board will not have any special permissions. \'Local\' means it will have its own permissions - separate from the global ones. This allows you to have a board that has more or less permissions than another, without requiring you to set them for each and every board.';
$helptxt['permissions_quickgroups'] = 'These allow you to use the "default" permission setups - standard means \'nothing special\', restrictive means \'like a guest\', moderator means \'what a moderator has\', and lastly \'maintenance\' means permissions very close to those of an administrator.';
$helptxt['permissions_deny'] = 'Denying permissions can be useful when you want take away permission from certain members. You can add a membergroup with a \'deny\'-permission to the members you wish to deny a permission.<br><br>Use with care, a denied permission will stay denied no matter what other membergroups the member is in.';
$helptxt['permissions_postgroups'] = 'Enabling permissions for post count based groups will allow you to attribute permissions to members that have posted a certain amount of messages. The permissions of the post count based groups are <em>added</em> to the permissions of the regular membergroups.';
$helptxt['membergroup_guests'] = 'The Guests membergroup are all users that are not logged in.';
$helptxt['membergroup_regular_members'] = 'The Regular Members are all members that are logged in, but that have no primary membergroup assigned.';
$helptxt['membergroup_administrator'] = 'The administrator can, per definition, do anything and see any board. There are no permission settings for the administrator.';
$helptxt['membergroup_moderator'] = 'The Moderator membergroup is a special membergroup. Permissions and settings assigned to this group apply to moderators but only <em>on the boards they moderate</em>. Outside these boards they\'re just like any other member.';
$helptxt['membergroups'] = 'In Wedge, there are two types of groups that your members can be part of. These are:
	<ul class="normallist">
		<li><strong>Regular Groups:</strong> A regular group is a group to which members are not automatically put into. To assign a member to be in a group simply go to their profile and click "Account Settings". From here you can assign them any number of regular groups to which they will be part.</li>
		<li><strong>Post Groups:</strong> Unlike regular groups post based groups cannot be assigned. Instead, members are automatically assigned to a post based group when they reach the minimum number of posts required to be in that group.</li>
	</ul>';

$helptxt['maintenance_backup'] = 'This area allows you to save a copy of all the posts, settings, members, and other information in your forum to a very large file.<br><br>It is recommended that you do this often, perhaps weekly, for safety and security.';
$helptxt['maintenance_rot'] = 'This allows you to <strong>completely</strong> and <strong>irrevocably</strong> remove old topics. It is recommended that you try to make a backup first, just in case you remove something you didn\'t mean to.<br><br>Use this option with care.';
$helptxt['maintenance_members'] = 'This allows you to <strong>completely</strong> and <strong>irrevocably</strong> remove member accounts from your forum. It is <strong>highly</strong> recommended that you try to make a backup first, just in case you remove something you didn\'t mean to.<br><br>Use this option with care.';

$helptxt['avatar_server_stored'] = 'This allows your members to pick from avatars stored on your server itself. They are, generally, in the same place as Wedge under the avatars folder.<br>As a tip, if you create directories in that folder, you can make "categories" of avatars.';
$helptxt['avatar_external'] = 'With this enabled, your members can type in a URL to their own avatar. The downside of this is that, in some cases, they may use avatars that are overly large or portray images you don\'t want on your forum.';
$helptxt['avatar_download_external'] = 'With this option enabled, the URL given by the user is accessed to download the avatar at that location. On success, the avatar will be treated as uploadable avatar.';
$helptxt['avatar_upload'] = 'This option is much like "Allow members to select an external avatar", except that you have better control over the avatars, a better time resizing them, and your members do not have to have somewhere to put avatars.<br><br>However, the downside is that it can take a lot of space on your server.';
$helptxt['avatar_download_png'] = 'PNGs are larger, but offer better quality compression. If this is unchecked, JPEG will be used instead - which is often smaller, but also of lesser or blurry quality.';
$helptxt['gravatar_settings'] = 'Gravatars are a form of global avatar managed by <a href="http://www.gravatar.com/">Gravatar.com</a>, where you add your avatar once and it will be used in a variety of places automatically - particularly common for WordPress blogs, for example.';
$helptxt['gravatarEnabled'] = 'If this option is checked, Gravatars will be available for users - if unchecked, the option will not be available for any user.';
$helptxt['gravatarOverride'] = 'If this option is checked, users will not be able to upload or use other avatars in the forum, but will automatically use their Gravatar in its place.';
$helptxt['gravatarAllowExtraEmail'] = 'If this option is checked, a user will be able to use an alternative email address to their normal email address for selecting their Gravatar - many users do have multiple email addresses, and may use a particular one for their Gravatar, but not use the same one for their main forum sign-up.';
$helptxt['gravatarMaxRating'] = 'When creating a Gravatar, users can indicate a relative rating, similar to the <a href="http://en.wikipedia.org/wiki/Motion_Picture_Association_of_America_film_rating_system" target="_blank">MPAA-style</a> of ratings, for the Gravatar. For example whether it is G-rated, generally suitable, or whether it contains more offensive or explicit material, such that either R or X rating is applicable. This indicates the maximum rating that would be considered acceptable on this forum.';
$helptxt['avatar_defaults'] = 'These options allow you to set some more general things on your forum, for example an avatar for users who do not currently have one, or deal with the avatars of banned users.';
$helptxt['avatar_banned_hide'] = 'This will hide the avatar of banned users, as if they did not have one.<br><br>It is left in place in the event of the banned user subsequently being unbanned.';

$helptxt['disableHostnameLookup'] = 'This disables host name lookups, which on some servers are very slow. Note that this will make banning less effective.';

$helptxt['search_weight_frequency'] = 'Weight factors are used to determine the relevancy of a search result. Change these weight factors to match the things that are specifically important for your forum. For instance, a forum of a news site, might want a relatively high value for \'age of last matching message\'. All values are relative in relation to each other and should be positive integers.<br><br>This factor counts the amount of matching messages and divides them by the total number of messages within a topic.';
$helptxt['search_weight_age'] = 'Weight factors are used to determine the relevancy of a search result. Change these weight factors to match the things that are specifically important for your forum. For instance, a forum of a news site, might want a relatively high value for \'age of last matching message\'. All values are relative in relation to each other and should be positive integers.<br><br>This factor rates the age of the last matching message within a topic. The more recent this message is, the higher the score.';
$helptxt['search_weight_length'] = 'Weight factors are used to determine the relevancy of a search result. Change these weight factors to match the things that are specifically important for your forum. For instance, a forum of a news site, might want a relatively high value for \'age of last matching message\'. All values are relative in relation to each other and should be positive integers.<br><br>This factor is based on the topic size. The more messages are within the topic, the higher the score.';
$helptxt['search_weight_subject'] = 'Weight factors are used to determine the relevancy of a search result. Change these weight factors to match the things that are specifically important for your forum. For instance, a forum of a news site, might want a relatively high value for \'age of last matching message\'. All values are relative in relation to each other and should be positive integers.<br><br>This factor looks whether a search term can be found within the subject of a topic.';
$helptxt['search_weight_first_message'] = 'Weight factors are used to determine the relevancy of a search result. Change these weight factors to match the things that are specifically important for your forum. For instance, a forum of a news site, might want a relatively high value for \'age of last matching message\'. All values are relative in relation to each other and should be positive integers.<br><br>This factor looks whether a match can be found in the first message of a topic.';
$helptxt['search_weight_pinned'] = 'Weight factors are used to determine the relevancy of a search result. Change these weight factors to match the things that are specifically important for your forum. For instance, a forum of a news site, might want a relatively high value for \'age of last matching message\'. All values are relative in relation to each other and should be positive integers.<br><br>This factor looks whether a topic is pinned and increases the relevancy score if it is.';
$helptxt['search'] = 'Adjust all settings for the search function here.';
$helptxt['search_why_use_index'] = 'A search index can greatly improve the performance of searches on your forum. Especially when the number of messages on a forum grows bigger, searching without an index can take a long time and increase the pressure on your database. If your forum is bigger than 50.000 messages, you might want to consider creating a search index to assure peak performance of your forum.<br><br>Note that a search index can take up quite some space. A fulltext index is a built-in index of MySQL. It\'s relatively compact (approximately the same size as the message table), but a lot of words aren\'t indexed and it can, in some search queries, turn out to be very slow. The custom index is often bigger (depending on your configuration it can be up to 3 times the size of the messages table) but it\'s performance is better than fulltext and relatively stable.';

$helptxt['see_member_ip'] = 'Your IP address is shown only to you and those who have been given permission to do so by the administrator. Remember that this information is not identifying, and that most IPs change periodically.<br><br>You cannot see other members\' IP addresses, and they cannot see yours.';
$helptxt['whytwoip'] = 'Wedge uses various methods to detect user IP addresses. Usually these two methods result in the same address but in some cases more than one address may be detected. In this case Wedge logs both addresses, and uses them both for ban checks (etc). You can click on either address to track that IP and ban if necessary.';

$helptxt['ban_cannot_post'] = 'The \'cannot post\' restriction turns the forum into read-only mode for the banned user. The user cannot create new topics, or reply to existing ones, send personal messages or vote in polls. The banned user can however still read personal messages and topics.<br><br>A warning message is shown to the users that are banned this way.';

$helptxt['posts_and_topics'] = '
	<ul class="normallist">
		<li>
			<strong>Post Settings</strong><br>
			Modify the settings related to the posting of messages and the way messages are shown. You can also enable the spell check here.
		</li><li>
			<strong>Bulletin Board Code</strong><br>
			Enable the code that shows forum messages in the right layout. Also adjust which codes are allowed and which aren\'t.
		</li><li>
			<strong>Censored Words</strong>
			In order to keep the language on your forum under control, you can censor certain words. This function allows you to convert forbidden words into innocent versions.
		</li><li>
			<strong>Topic Settings</strong>
			Modify the settings related to topics. The number of topics per page, whether pinned topics are enabled or not, etc.
		</li>
	</ul>';
$helptxt['spider_group'] = 'By selecting a restrictive group, when a guest is detected as a search crawler it will automatically be assigned any "deny" deny permissions of this group in addition to the normal permissions of a guest. You can use this to provide lesser access to a search engine than you would a normal guest. You might for example wish to create a new group called "Spiders" and select that here. You could then deny permission for that group to view profiles to stop spiders indexing your members profiles.<br>Note: Spider detection is not perfect and can be simulated by users so this feature is not guaranteed to restrict content only to those search engines you have added.';
$helptxt['show_spider_online'] = 'This setting allows you to select whether spiders should be listed in the who\'s online list on the board index and "Who\'s Online" page. Options are:
	<ul class="normallist">
		<li>
			<strong>Not at All</strong><br>
			Spiders will simply appear as guests to all users.
		</li><li>
			<strong>Show Spider Quantity</strong><br>
			The Board Index will display the number of spiders currently visiting the forum.
		</li><li>
			<strong>Show Spider Names</strong><br>
			Each spider name will be revealed, so users can see how many of each spider is currently visiting the forum - this takes effect in both the Board Index and Who\'s Online page.
		</li><li>
			<strong>Show Spider Names - Admin Only</strong><br>
			As above except only Administrators can see spider status - to all other users, spiders appear as guests.
		</li>
	</ul>';

$helptxt['pm_bcc'] = 'When sending a personal message you can choose to add a recipient as BCC or "Blind Carbon Copy". BCC recipients do not have their identities revealed to other recipients of the message.';

$helptxt['move_topics_maintenance'] = 'This will allow you to move all the posts from one board to another board.';
$helptxt['maintain_reattribute_posts'] = 'You can use this function to attribute guest posts on your board to a registered member. This is useful if, for example, a user deleted their account and changed their mind and wished to have their old posts associated with their account.';
$helptxt['chmod_flags'] = 'You can manually set the permissions you wish to set the selected files to. To do this enter the chmod value as a numeric (octet) value. Note - these flags will have no effect on Microsoft Windows operating systems.';

$helptxt['postmod'] = 'This section allows members of the moderation team (with sufficient permissions) to approve any posts and topics before they are shown.';

$helptxt['field_show_enclosed'] = 'Encloses the user input between some text or html. This will allow you to add more instant message providers, images or an embed etc. For example:<br><br>
		&lt;a href="http://website.com/{INPUT}"&gt;&lt;img src="{DEFAULT_IMAGES_URL}/icon.gif" alt="{INPUT}" /&gt;&lt;/a&gt;<br><br>
		Note that you can use the following variables:<br>
		<ul class="normallist">
			<li>{INPUT} - The input specified by the user.</li>
			<li>{SCRIPTURL} - Web address of forum.</li>
			<li>{IMAGES_URL} - URL to the images folder in the user\'s current theme.</li>
			<li>{DEFAULT_IMAGES_URL} - URL to the images folder in the default theme.</li>
		</ul>';

$helptxt['custom_mask'] = 'The input mask is important for your forum\'s security. Validating the input from a user can help ensure that data is not used in a way you do not expect. We have provided some simple regular expressions as hints.<br><br>
	<div style="margin: 0 2em">
		<span class="bbc_tt">[A-Za-z]+</span> - Match all upper and lower case alphabet characters.<br>
		<span class="bbc_tt">[0-9]+</span> - Match all numeric characters.<br>
		<span class="bbc_tt">[A-Za-z0-9]{7}</span> - Match all upper and lower case alphabet and numeric characters seven times.<br>
		<span class="bbc_tt">[^0-9]*</span> - Forbid any number from being matched.<br>
		<span class="bbc_tt">^([A-Fa-f0-9]{3}|[A-Fa-f0-9]{6})$</span> - Only allow 3 or 6-character hex codes.<br>
	</div><br><br>
	Additionally, special metacharacters ? + * ^ $ \\ and {xx} can be defined.
	<div style="margin: 0 2em">
		? - None or one match of previous expression.<br>
		+ - One or more of previous expression.<br>
		* - None or more of previous expression.<br>
		{xx} - An exact number from previous expression.<br>
		{xx,} - An exact number or more from previous expression.<br>
		{,xx} - An exact number or less from previous expression.<br>
		{xx,yy} - An exact match between the two numbers from previous expression.<br>
		^ - Start of string.<br>
		$ - End of string.<br>
		\ - Escapes the next character.<br>
	</div><br><br>
	More information and advanced techniques may be found on the internet.';

$helptxt['reverse_proxy'] = 'If you are using Bad Behavior behind a reverse proxy, load balancer, HTTP accelerator, content cache or similar technology, enable this option.';
$helptxt['reverse_proxy_header'] = 'Your reverse proxy server(s) must set the IP address of the Internet client from which they received the request in a HTTP header. Typically, <a href="http://en.wikipedia.org/wiki/X-Forwarded-For">X-Forwarded-For</a> will be used, as this is supported by most proxy servers, though you will need to ensure that it is enabled on your proxy servers. Some other header names in common use include "X-Real-Ip" (nginx) and "Cf-Connecting-Ip" (CloudFlare).';
$helptxt['reverse_proxy_ips'] = 'This area needs to list the IP addresses (e.g. 127.0.0.1) or CIDR blocks (e.g. 127.0.0.0/8) style format. If you have a chain of two or more reverse proxies between your server and the public Internet, you must specify <em>all</em> of the IP address ranges (in CIDR format) of all of your proxy servers, load balancers, etc. Otherwise, it may not be possible to determine the client\'s true IP address.';

$helptxt['signature_minposts'] = 'While some sites may choose to use permissions to control signatures, others may decide to allow users to add signatures but not show them to users publicly. It can provide another deterrence against spammers.';

$helptxt['media_permissions'] = 'Here you can add/edit/delete the various permission profiles. The profiles can be assigned to one or multiple albums and the assigned albums will follow that permission set.';

// Help popup for the Media tag...
$helptxt['mediatag'] = '<h2>What\'s this [media] tag about anyway?</h2>
	It\'s here to make it easy for users to embed items into any place that accepts BBC tags, such as forum posts.
	Here are a couple of quick examples:
	<br><br><b>[media id=123 type=preview align=center width=400 caption="Hello, world!"]</b>
	<br>Show a center-aligned mid-size (preview) picture, resized to 400 pixels wide, with a caption below it. All parameters are optional, except for the item ID.
	<br>
	<br><b>[media id=1,2 type=album]</b>
	<br>Shows the latest items in your first two albums, using the box type (see below.)
	<br><br>
	<b>Possible values:</b>
	<br>- type=<i>normal, box, link, preview, full, album</i>
	<br>- align=<i>none, left, center, right</i>
	<br>- width=<i>123</i> (in pixels)
	<br>- caption=<i>"Caption text"</i> or caption=<i>SingleWordText</i>
	<br><br>
	<h2>Available parameters</h2>
	<b>id</b>
	<ul class="normallist">
		<li>All items are identified by a specific number which you can see in its URL. Just use it here. This is the only parameter that is <b>NOT</b> optional.
		You may specify several items by separating them with commas, as in "[media id=1,2,3 type=album]".</li>
	</ul>
	<br>
	<b>type</b>
	<ul class="normallist">
		<li><b>normal</b> (default, except if set up differently) - show the thumbnail. Click on it to show a preview.</li>
		<li><b>av</b> - embed an audio or video item within a player. If you do not use this parameter, the item\'s thumbnail will show up as expected, but clicking on it will load the file directly. You don\'t want that to happen. Really.</li>
		<li><b>box</b> - show the thumbnail box, with full details, as in the Media Gallery pages. Clicking on the thumbnail will lead you to the item page.</li>
		<li><b>link</b> - just like the default, except that the caption is clickable and leads you to the item page. If no caption is set, a default link will be shown instead.</li>
		<li><b>preview</b> (may be default if set up accordingly) - show the preview picture (halfway between thumbnail and full picture.)</li>
		<li><b>full</b> (may be default if set up accordingly) - show the full picture. Make sure you set the width parameter!</li>
		<li><b>album</b> - show the latest items from the album(s) indicated in id. They will be shown using the <b>box</b> type.</li>
	</ul>
	<br>
	<b>align</b>
	<ul class="normallist">
		<li><b>none</b> (default) - normal alignment. Will not allow thumbnails to its right or left.</li>
		<li><b>left</b> - left-align the thumbnail. Use several left-aligned [media] tags to show thumbnails next to each other.</li>
		<li><b>center</b> - center-align the thumbnail. Will not allow thumbnails to its right or left, except if showing them in this order: [media align=left][media align=right][media align=center]</li>
		<li><b>right</b> - same as <i>left</i>, but right-aligned. You got it.</li>
	</ul>
	<br>
	<b>width</b>
	<ul class="normallist">
		<li>Any number higher than zero will do. This parameter is only needed if you want to force a specific width.</li>
		<li>Set the tag type according to the desired size. For instance, if your thumbnails have a default width of 120, and previews are 500 pixels wide, use [media type=preview] if you\'re forcing a width of 300 to 500 pixels, otherwise the resulting thumbnail will be very blurry.</li>
	</ul>
	<br>
	<b>caption</b>
	<ul class="normallist">
		<li>Show a caption below the thumbnail (if type is set to link, the caption will be clickable and lead you to the item page.)</li>
		<li>Any string will do. If it contains spaces or brackets, be sure to enclose it between "double quotes".</li>
	</ul>';

?>