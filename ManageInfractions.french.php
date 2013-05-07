<?php
// Version: 2.0; ManageInfractions

$txt['infractions_desc'] = 'D\'ici, vous pouvez gérer les infractions que les modérateurs et administrateurs peuvent donner.';
$txt['infractionlevels_desc'] = 'D\'ici, vous pouvez gérer les niveaux d\'infraction, ainsi que leurs punitions associées.';
$txt['infractionsettings_desc'] = 'D\'ici, vous pouvez changer la façon dont le système d\'infractions se comporte.';

$txt['revoke_own_issued'] = 'L\'équipe peut annuler les infractions qu\'elle a envoyées';
$txt['revoke_any_issued'] = 'Groupes de membres pouvant annuler n\'importe quelle infraction';
$txt['no_warn_groups'] = 'Groupes de membres immunisés contre les infractions';

$txt['setting_warning_show'] = 'Utilisateurs pouvant voir le statut d\'avertissement';
$txt['setting_warning_show_subtext'] = 'Détermine qui peut voir le niveau d\'avertissement des utilisateurs du forum.';
$txt['setting_warning_show_none'] = 'Personne';
$txt['setting_warning_show_mods'] = 'Modérateurs';
$txt['setting_warning_show_user'] = 'Modérateurs et utilisateurs avertis';
$txt['setting_warning_show_all'] = 'Tout le monde';

$txt['infractionlevels_extra'] = 'The following are the different punishments that can be applied to user accounts. As users accumulate infractions, they will receive points - as they do so, you can use the following to set automatic penalties that apply just based on total points. The idea is that a given infraction may carry a given punishment, but users who consistently receive small punishments can also earn themselves a larger one.';
$txt['infraction_no_avatar'] = 'User\'s avatar is hidden';
$txt['infraction_no_sig'] = 'User\'s signature is hidden';
$txt['infraction_disemvowel'] = 'User\'s posts are disemvowelled';
$txt['infraction_disemvowel_help'] = 'The user\'s posts are shown, but missing vowels. The effect is that posts are still readable with effort, but that most users will simply ignore the posts.';
$txt['infraction_moderate'] = 'User\'s posts will require moderator approval';
$txt['infraction_post_ban'] = 'User will not be permitted to post';
$txt['infraction_pm_ban'] = 'User will not be permitted to send personal messages';
$txt['infraction_soft_ban'] = 'The user will be soft-banned';
$txt['infraction_hard_ban'] = 'The user will be hard-banned';

$txt['enact_infraction'] = 'Infraction to be applied&#8239;:';
$txt['points_infraction'] = 'When the user has accumulated&#8239;:';

$txt['enabled_infraction'] = 'Enabled?';

$txt['preset_infractions'] = 'Pre-Set Infractions';
$txt['preset_infractions_desc'] = 'Pre-set infractions are those defined by the administrator to be issued quickly and easily, sort of like defaults or templates. You may decide to let certain moderator groups only issue from this list, or you can give them additional power below.';
$txt['adhoc_infractions'] = 'Ad-Hoc Infractions';
$txt['adhoc_infractions_desc'] = 'You may be able to plan for the types of incident that might occur and give pre-set infractions for your moderators to issue but there are going to be times that moderators may just have to go "off-script". You can configure what the rules for those are here.';

$txt['add_infraction'] = 'Add New Infraction';
$txt['delete_infraction_confirm'] = 'Are you sure you wish to remove this infraction?';

$txt['infraction_name'] = 'Infraction Name';
$txt['infraction_points'] = 'Points';
$txt['infraction_duration'] = 'Duration';
$txt['infraction_sanctions'] = 'Punishments';
$txt['infraction_issuers'] = 'Can be issued by';
$txt['infraction_no_punishments'] = 'None';
$txt['no_infractions'] = 'There aren\'t any infractions set up right now.';

$txt['infraction_d'] = array(
	0 => '0 jour',
	1 => '1 jour',
	'n' => '%1$s jours',
);
$txt['infraction_w'] = array(
	0 => '0 semaine',
	1 => '1 semaine',
	'n' => '%1$s semaines',
);
$txt['infraction_m'] = array(
	'n' => '%1$s mois',
);
$txt['infraction_y'] = array(
	1 => '0 an',
	1 => '1 an',
	'n' => '%1$s ans',
);
$txt['infraction_i'] = 'Pour toujours';

$txt['infraction_duration_types'] = array(
	'd' => 'Jour(s)',
	'w' => 'Semaine(s)',
	'm' => 'Mois',
	'y' => 'An(s)',
	'i' => 'Pour toujours',
);

$txt['can_issue_adhoc'] = 'Peut émettre des infractions adaptées';
$txt['max_points'] = 'Maximum de points par infraction&#8239;:';
$txt['max_infractions_day'] = 'Maximum infractions to a single member per day&#8239;:';
$txt['punishments_issuable'] = 'Punishments that can be issued&#8239;:';

$txt['add_preset_infraction'] = 'Add Pre-set Infraction';
$txt['edit_preset_infraction'] = 'Edit Pre-set Infraction';
$txt['infraction_name_desc'] = 'This is an internal name for the infraction for your reference.';
$txt['for_the_duration'] = 'For the duration of the infraction';
$txt['issued_by_adhoc'] = 'Remember&#8239;: groups who can issue ad-hoc warnings will be able to customize what is set in this infraction. Groups who cannot issue ad-hoc warnings will only have the options you give them here.';
$txt['notification_text'] = 'Notification text to use';
$txt['notification_text_desc'] = 'If a staff member is not empowered to send ad-hoc infractions, any notification will use the wording set here.';
$txt['notification_use_none'] = 'Don\'t send a message';
$txt['notification_use_custom'] = 'Use custom wording (below)';
$txt['notification_subject'] = 'Subject&#8239;:';
$txt['notification_body'] = 'Message&#8239;:';
$txt['notification_body_note'] = '{PUNISHMENTS} will be automatically replaced with wording to describe the points and punishments given to the user from this infraction.';
$txt['notification_body_message'] = '{MESSAGE} will be automatically replaced with a link to the message someone is being warned for.';

$txt['tpl_infraction_bad_avatar'] = array(
	'desc' => 'Bad Avatar',
	'subject' => 'You have received an infraction about your avatar',
	'body' => 'You have received an infraction about your avatar being inappropriate for this forum.

It may be appropriate because:
* it contains rapidly moving or flashing images
* it contains inappropriate text
* it contains inappropriate pictures

{PUNISHMENTS}

Please note, any incidents in future may cause further infractions on your account and may limit what you may do on this site.',
);
$txt['tpl_infraction_bad_sig'] = array(
	'desc' => 'Bad Signature',
	'subject' => 'You have received an infraction about your signature',
	'body' => 'You have received an infraction about your signature being inappropriate for this forum.

It may be inappropriate because:
* it is very large and distracting for other members
* it contains too many links to external sites
* it contains content that is considered inappropriate here

{PUNISHMENTS}

Please note, any incidents in future may cause further infractions on your account and may limit what you may do on this site.',
);
$txt['tpl_infraction_bad_language'] = array(
	'desc' => 'Bad Language',
	'subject' => 'You have receive an infraction about your language',
	'body' => 'You have received an infraction about your language on this forum.

We do not permit use of profanity or back-attitude to staff or other members.

{PUNISHMENTS}

Please note, any incidents in future may cause further infractions on your account and may limit what you may do on this site.',
);
$txt['tpl_infraction_spam'] = array(
	'desc' => 'Spam',
	'subject' => 'You have received an infraction for spamming',
	'body' => 'You have received an infraction for spam messages on this forum.

Spam is a very widespread problem, it regularly requires a lot of effort to keep it at bay.
As such we do not appreciate you spamming this site.

{PUNISHMENTS}

Any future incidents may cause further infractions on your acconut.',
);

$txt['no_punishment'] = 'No action has been taken on this occasion but this has has been logged on your account.';
$txt['received_punishments'] = array(
	1 => 'On this occasion, you have received the following punishment&#8239;:',
	'n' => 'On this occasion, you have received the following punishments&#8239;:',
);
$txt['punishments_will_expire'] = array(
	1 => 'This punishment will last on your account until {EXPIRY}.',
	'n' => 'These punishments will last on your account until {EXPIRY}.',
);
$txt['punishments_no_expire'] = array(
	1 => 'This punishment is not set to expire.',
	'n' => 'These punishments are not set to expire.',
);

$txt['pun_infraction_no_avatar'] = 'Your avatar will be hidden';
$txt['pun_infraction_no_sig'] = 'Your signature will be hidden';
$txt['pun_infraction_disemvowel'] = 'Your posts will be disemvowelled';
$txt['pun_infraction_moderate'] = 'Your posts will require moderator approval';
$txt['pun_infraction_post_ban'] = 'You are not allowed to post';
$txt['pun_infraction_pm_ban'] = 'You are not allowed to send personal messages';
$txt['pun_infraction_soft_ban'] = 'Some aspects of the forum will be unavailable to you';
$txt['pun_infraction_hard_ban'] = 'You are banned from the forum';
$txt['pun_points'] = array(
	1 => 'You have accumulated an infraction point, bringing your total to {POINTS}. This may lead to further punishments in future.',
	'n' => 'You have accumulated %1$s infraction points, bringing your total to {POINTS}. This may lead to further punishments in future.',
);
$txt['pun_because_message'] = 'You received this infraction because of your post&#8239;: {LINK}';

$txt['error_no_name_given'] = 'Each infraction must have a name for reference purposes.';
$txt['error_no_text'] = 'You selected to add a custom warning notification but did not fill any text in.';
$txt['error_invalid_duration'] = 'You did not specify how long the warning should last for.';
