<?php
// Version: 2.0; Help

$txt['help_manage_boards'] = '
	In this menu you can create/reorder/remove boards, and the categories
	above them. For example, if you had a wide-ranging
	site that offered information on "Sports" and "Cars" and "Music", these
	would be the top-level Categories you\'d create. Under each of these
	categories you\'d likely want to create hierarchical "sub-categories",
	or "Boards" for topics within each. It\'s a simple hierarchy, with this structure: <br>
	<ul class="list">
		<li>
			<strong>Sports</strong>
			&nbsp;- A "category"
		</li>
		<ul class="list">
			<li>
				<strong>Cricket</strong>
				&nbsp;- A board under the category of "Sports"
			</li>
			<ul class="list">
				<li>
					<strong>Stats</strong>
					&nbsp;- A sub-board under the board of "Cricket"
				</li>
			</ul>
			<li><strong>Football</strong>
			&nbsp;- A board under the category of "Sports"</li>
		</ul>
	</ul>
	Categories allow you to break down the board into broad topics ("Cars,
	Sports"), and the "Boards" under them are the actual topics under which
	members can post. A user interested in Pintos
	would post a message under "Cars-&gtl;Pinto". Categories allow people to
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

$txt['help_ban_gmail_style'] = 'Google Mail, or GMail, offers features for convenience to its members for organising email, which can confuse
	typical ban filtering systems:
	<ul class="list">
		<li>Dots in the username are ignored - joe.bloggs@gmail.com is exactly the same as j.o.e.b.l.o.g.g.s@gmail.com and also joebloggs@gmail.com.</li>
		<li>Users can add +label to the "user" part of the address for filtering email, for example joebloggs+work@gmail.com will still deliver to
			joebloggs@gmail.com and that +work part can be used to organise mail.</li>
	</ul>
	By selecting a given ban as being on a "GMail style domain", these factors can be ignored. It is also not enough to apply these to googlemail.com and
		gmail.com type emails either, as Google Apps can run GMail with at least the +label feature for all different domains.';

$txt['help_disableCustomPerPage'] = 'Tick this option to stop users from customising the amount of messages and topics to display per page on the Message Index and Topic Display page respectively.';

$txt['help_disableTemplateEval'] = 'By default, templates are included directly, rather than evaluated. Evaluating helps with showing more useful debug information in case a template contains an error.<br><br>
		On large forums however, this customised inclusion process may be significantly slower. Therefore, advanced users may wish to disable it.';

$txt['help_attachment_image_paranoid'] = 'Selecting this option will enable very strict security checks on image attachments. Warning! These extensive checks can fail on valid images too. It is strongly recommended to only use this option together with image re-encoding, in order to have Wedge try to resample the images which fail the security checks: if successful, they will be sanitised and uploaded. Otherwise, if image re-encoding is not enabled, all attachments failing checks will be rejected.';

$txt['help_avatar_paranoid'] = 'Selecting this option will enable very strict security checks on avatars. Warning! These extensive checks can fail on valid images too. It is strongly recommended to only use this option together with avatars re-encoding, in order to have Wedge try to resample the images which fail the security checks: if successful, they will be sanitised and uploaded. Otherwise, if re-encoding of avatars is not enabled, all avatars failing checks will be rejected.';

$txt['help_emailmembers'] = 'In this message you can use a few "variables". These are:<br>
	{$board_url} - The URL to your forum.<br>
	{$current_time} - The current time.<br>
	{$member.email} - The current member\'s email.<br>
	{$member.link} - The current member\'s link.<br>
	{$member.id} - The current member\'s id.<br>
	{$member.name} - The current member\'s name (for personalisation.)<br>
	{$latest_member.link} - The most recently registered member\'s link.<br>
	{$latest_member.id} - The most recently registered member\'s id.<br>
	{$latest_member.name} - The most recently registered member\'s name.';

$txt['help_show_group_key'] = 'In the Who\'s Online area of the Info Centre, online users are shown and their name is shown in the colour of their group, as set in the group\'s own configuration. It can be useful to include a list of groups with their colours next to the list of names, to guide users as to whether more senior users are online - and this option enables that list. The order that names will be displayed in is the same as the order of badges as configured lower on this screen.';

$txt['help_reverse_proxy'] = 'If you are using Bad Behaviour behind a reverse proxy, load balancer, HTTP accelerator, content cache or similar technology, enable this option.';

// Help popup for the Media tag...
$txt['help_mediatag'] = '<h2>What\'s this [media] tag about anyway?</h2>
	It\'s here to make it easy for users to embed items into any place that accepts BBC tags, such as forum posts.
	Here are a couple of quick examples:
	<br><br><b>[media id=123 type=preview align=center width=400 caption="Hello, world!"]</b>
	<br>Show a centre-aligned mid-size (preview) picture, resized to 400 pixels wide, with a caption below it. All parameters are optional, except for the item ID.
	<br>
	<br><b>[media id=1,2 type=album]</b>
	<br>Shows the latest items in your first two albums, using the box type (see below.)
	<br><br>
	<b>Possible values:</b>
	<br>- type=<em>normal, box, link, preview, full, album</em>
	<br>- align=<em>none, left, center, right</em>
	<br>- width=<em>123</em> (in pixels)
	<br>- caption=<em>"Caption text"</em> or caption=<em>SingleWordText</em>
	<br><br>
	<h2>Available parameters</h2>
	<b>id</b>
	<ul class="list">
		<li>All items are identified by a specific number which you can see in its URL. Just use it here. This is the only parameter that is <b>NOT</b> optional.
		You may specify several items by separating them with commas, as in "[media id=1,2,3 type=album]".</li>
	</ul>
	<br>
	<b>type</b>
	<ul class="list">
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
	<ul class="list">
		<li><b>none</b> (default) - normal alignment. Will not allow thumbnails to its right or left.</li>
		<li><b>left</b> - left-align the thumbnail. Use several left-aligned [media] tags to show thumbnails next to each other.</li>
		<li><b>center</b> - centre-align the thumbnail. Will not allow thumbnails to its right or left, except if showing them in this order: [media align=left][media align=right][media align=center]</li>
		<li><b>right</b> - same as <em>left</em>, but right-aligned. You got it.</li>
	</ul>
	<br>
	<b>width</b>
	<ul class="list">
		<li>Any number higher than zero will do. This parameter is only needed if you want to force a specific width.</li>
		<li>Set the tag type according to the desired size. For instance, if your thumbnails have a default width of 120, and previews are 500 pixels wide, use [media type=preview] if you\'re forcing a width of 300 to 500 pixels, otherwise the resulting thumbnail will be very blurry.</li>
	</ul>
	<br>
	<b>caption</b>
	<ul class="list">
		<li>Show a caption below the thumbnail (if type is set to link, the caption will be clickable and lead you to the item page.)</li>
		<li>Any string will do. If it contains spaces or brackets, be sure to enclose it between "double quotes".</li>
	</ul>';
