<?php
// Version: 2.0; EmailTemplates

// Since all of these strings are being used in emails, numeric entities should be used.

// Do not translate anything that is between {}, they are used as replacement variables and MUST remain exactly how they are.

$txt['regards_team'] = 'Groeten,
Het {FORUMNAME} Forumteam.';

$txt['scheduled_approval_email_topic'] = 'Deze topics wachten op goedkeuring:';
$txt['scheduled_approval_email_msg'] = 'Deze berichten wachten op goedkeuring:';

$txt['emailtemplate_resend_activate_message'] = array(
	'desc' => 'The email sent to a user when they have registered and their account needs activating through email (as the second or later email)',
	'subject' => 'Welkom bij {FORUMNAME}',
	'body' => 'Bedankt voor het registreren op het {FORUMNAME}. U gebruikersnaam is {USERNAME}. Wachtwoord vergeten, gebruik dan deze link {FORGOTPASSWORDLINK}.

Voordat u kunt inloggen,zal eerst u account moeten worden goedgekeurd door ons,dat zal zo snel als mogelijk worden uitgevoerd:

{ACTIVATIONLINK}

Problemen met het activeren, ga dan naar {ACTIVATIONLINKWITHOUTCODE} en geeft deze code in "{ACTIVATIONCODE}".

{REGARDS}',
);

$txt['emailtemplate_mc_group_approve'] = array(
	'desc' => 'The email sent to a user when they requested to join a group and the request was approved.',
	'subject' => 'Groep lidmaatschaps goedkeuring',
	'body' => '{REALNAME},

U aanvraag om zich aan te sluiten bij "{GROUPNAME}" op het {FORUMNAME} is geaccepteerd, en u account is bij deze aangepast.

{REGARDS}',
);

$txt['emailtemplate_mc_group_reject'] = array(
	'desc' => 'The email sent to a user when they requested to join a group and the request was not approved.',
	'subject' => 'Groep lidmaatschap aanvraag is afgewezen',
	'body' => '{REALNAME},

U aanvraag om zich aan te sluiten bij "{GROUPNAME}" op het {FORUMNAME} is afgewezen.

{REGARDS}',
);

$txt['emailtemplate_mc_group_reject_reason'] = array(
	'desc' => 'The email sent to a user when they requested to join a group and the request was not approved, including a reason why.',
	'subject' => 'Groep lidmaatschap afwijzing',
	'body' => '{REALNAME},

U aanvraag om zich aan te sluiten bij "{GROUPNAME}" op het {FORUMNAME} is afgewezen.

De reden daarvoor is: {REFUSEREASON}

{REGARDS}',
);

$txt['emailtemplate_admin_approve_accept'] = array(
	'desc' => 'The email sent to a user when their account was manually activated (e.g. not through email) by the administrator.',
	'subject' => 'Welkom op het {FORUMNAME}',
	'body' => 'Welkom, {REALNAME}!

U account is handmatig geactiveerd door ons. U gebruikersnaam is: {USERNAME}. Wachtwoord vergeten, volg deze link {FORGOTPASSWORDLINK}.

{REGARDS}',
);

$txt['emailtemplate_admin_approve_activation'] = array(
	'desc' => 'The email sent to a user when their account was approved by the administrator (e.g. through admin approval)',
	'subject' => 'Welkom bij het {FORUMNAME}',
	'body' => 'Welkom, {REALNAME}!

U account op het {FORUMNAME} is door ons goedgekeurd. Voordat u kunt inloggen, dient het account te worden geactiveerd volg deze link:

{ACTIVATIONLINK}

Zijn er problemen met het activeren, bezoek dan {ACTIVATIONLINKWITHOUTCODE} en geef de code in "{ACTIVATIONCODE}".

{REGARDS}',
);

$txt['emailtemplate_admin_approve_reject'] = array(
	'desc' => 'The email sent to a user when they registered, sat in admin approval and was subsequently rejected.',
	'subject' => 'Registratie afgewezen',
	'body' => '{USERNAME},

Helaas, u aanvraag bij {FORUMNAME} is afgewezen.

{REGARDS}',
);

$txt['emailtemplate_admin_approve_delete'] = array(
	'desc' => 'The email sent to a user when their account is deleted.',
	'subject' => 'Account verwijderd',
	'body' => '{USERNAME},

U account op het {FORUMNAME} is verwijderd. Mogelijk omdat u dit account nog nooit heeft geactiveerd, wanneer dit het geval is kunt u zich nogmaals opnieuw registreren.

{REGARDS}',
);

$txt['emailtemplate_admin_approve_remind'] = array(
	'desc' => 'The email sent to a user when their account is pending email registration but has not been completed.',
	'subject' => 'Registratie herinnering',
	'body' => '{REALNAME},

U account is nog niet geactiveerd op het {FORUMNAME}.

Gebruik onderstaande link om dit alsnog te doen:
{ACTIVATIONLINK}

Problemen met het activeren, bezoek dan {ACTIVATIONLINKWITHOUTCODE} en geef de code in "{ACTIVATIONCODE}".

{REGARDS}',
);

$txt['emailtemplate_admin_register_activate'] = array(
	'desc' => 'The email sent to users who have been registered in the administration panel, and it requires email validation.',
	'subject' => 'Welkom op het {FORUMNAME}',
	'body' => 'Lidmaatschap account is aangemaakt op het {FORUMNAME}. U gebruikersnaam is {USERNAME} u wachtwoord is {PASSWORD}.

Voordat u kunt inloggen, moet u eerst het account activeren volg onderstaande link:

{ACTIVATIONLINK}

Problemen met het activeren, bezoek dan {ACTIVATIONLINKWITHOUTCODE} en geef code in "{ACTIVATIONCODE}".

{REGARDS}',
);

$txt['emailtemplate_admin_register_immediate'] = array(
	'desc' => 'The email sent to users who have been registered in the administration panel and no further action is required.',
	'subject' => 'Welkom op het {FORUMNAME}',
	'body' => 'Lidmaatschap account is aangemaakt op het {FORUMNAME}. gebruikersnaam is {USERNAME} en het wachtwoord is {PASSWORD}.

Bezoeken van {FORUMNAME} kan door {SCRIPTURL} in u browser in te geven.

{REGARDS}',
);

$txt['emailtemplate_new_announcement'] = array(
	'desc' => 'The email used when an administrator or moderator makes a forum announcement.',
	'subject' => 'Niewe aankondiging: {TOPICSUBJECT}',
	'body' => '{MESSAGE}

Afmelden voor deze aankondiging, log in op het forum en haal het vinkje weg bij "Ontvang forum aankondigingen en belangrijke meldingen via e-mail." in u profiel.

Aankondiging bekijken :
{TOPICLINK}

{REGARDS}',
);

$txt['emailtemplate_notify_boards_once_body'] = array(
	'desc' => 'The email sent to users who have requested notifications on a given board, including the body, for the first new topic in that board (until they log in and read).',
	'subject' => 'Nieuw Topic: {TOPICSUBJECT}',
	'body' => 'Een nieuw topic, \'{TOPICSUBJECT}\', is geplaatst op in een catagorie die u volg.

Topic bekijken
{TOPICLINK}

More topics may be posted, but you won\'t receive more email notifications until you return to the board and read some of them.

The text of the topic is shown below:
{MESSAGE}

Unsubscribe to new topics from this board by using this link:
{UNSUBSCRIBELINK}

{REGARDS}',
);

$txt['emailtemplate_notify_boards_once'] = array(
	'desc' => 'The email sent to users who have requested notifications on a given board, for the first new topic in that board (until they log in and read).',
	'subject' => 'New Topic: {TOPICSUBJECT}',
	'body' => 'A new topic, \'{TOPICSUBJECT}\', has been made on a board you are watching.

You can see it at
{TOPICLINK}

More topics may be posted, but you won\'t receive more email notifications until you return to the board and read some of them.

Unsubscribe to new topics from this board by using this link:
{UNSUBSCRIBELINK}

{REGARDS}',
);

$txt['emailtemplate_notify_boards_body'] = array(
	'desc' => 'The email sent to users who have requested notifications on a given board, including the body.',
	'subject' => 'New Topic: {TOPICSUBJECT}',
	'body' => 'A new topic, \'{TOPICSUBJECT}\', has been made on a board you are watching.

You can see it at
{TOPICLINK}

The text of the topic is shown below:
{MESSAGE}

Unsubscribe to new topics from this board by using this link:
{UNSUBSCRIBELINK}

{REGARDS}',
);

$txt['emailtemplate_notify_boards'] = array(
	'desc' => 'The email sent to users who have requested notifications on a given board.',
	'subject' => 'New Topic: {TOPICSUBJECT}',
	'body' => 'A new topic, \'{TOPICSUBJECT}\', has been made on a board you are watching.

You can see it at
{TOPICLINK}

Unsubscribe to new topics from this board by using this link:
{UNSUBSCRIBELINK}

{REGARDS}',
);

$txt['emailtemplate_request_membership'] = array(
	'desc' => 'The email sent to moderators when a user applies to join another membergroup.',
	'subject' => 'Nieuwe Groep aanvraag',
	'body' => '{RECPNAME},

{APPYNAME} heeft een aanvraag ingediend voor toetreding tot "{GROUPNAME}" groep. Gebruiker geeft deze motivatie :

{REASON}

Aanvraag goedkeuren of afwijzen door te klikken op onderstaande link:

{MODLINK}

{REGARDS}',
);

$txt['emailtemplate_paid_subscription_reminder'] = array(
	'desc' => 'The email sent to a user when a paid subscription is due to expire.',
	'subject' => 'Subscription about to expire at {FORUMNAME}',
	'body' => '{REALNAME},

A subscription you are subscribed to at {FORUMNAME} is about to expire. If when you took out the subscription you selected to auto-renew you need take no action - otherwise you may wish to consider subscribing once more. Details are below:

Subscription Name: {SUBSCRNAME}
Expires: {END_DATE}

To edit your subscriptions visit the following URL:
{PROFILELINKSUBS}

{REGARDS}',
);

$txt['emailtemplate_activate_reactivate'] = array(
	'desc' => 'The email sent to a user that has changed their email address and requires it be re-validated.',
	'subject' => 'Welkom op het {FORUMNAME}',
	'body' => 'Om u email adres opnieuw te valideren, is u account gedeactiveerd. Klik op de link voor het heractiveren:
{ACTIVATIONLINK}

Problemen met het heractiveren, bezoek dan {ACTIVATIONLINKWITHOUTCODE} en gebruik de code "{ACTIVATIONCODE}".

{REGARDS}',
);

$txt['emailtemplate_forgot_password'] = array(
	'desc' => 'The email sent to a user when "forgot password" was used on their account.',
	'subject' => 'Nieuw wachtwoord voor {FORUMNAME}',
	'body' => 'Beste {REALNAME},
Deze mail is verstuurd ivm \'wachtwoord vergeten\' functie is toegewezen voor je account. Om een nieuw wachtwoord in te stellen, klik op de volgende link:
{REMINDLINK}

IP: {IP}
gebruikersnaam: {USERNAME}

{REGARDS}',
);

$txt['emailtemplate_scheduled_approval'] = array(
	'desc' => 'The email sent to moderators, listing all items awaiting approval that they can approve.',
	'subject' => 'Summary of posts awaiting approval at {FORUMNAME}',
	'body' => '{REALNAME},

This email contains a summary of all items awaiting approval at {FORUMNAME}.

{MESSAGE}

Please log in to the forum to review these items.
{SCRIPTURL}

{REGARDS}',
);

$txt['emailtemplate_send_topic'] = array(
	'desc' => 'The email sent out when a user uses "Send This Topic" to encourage sharing links.',
	'subject' => 'Topic: {TOPICSUBJECT} (From: {SENDERNAMEMANUAL})',
	'body' => 'Dear {RECPNAMEMANUAL},
I want you to check out "{TOPICSUBJECT}" on {FORUMNAME}. To view it, please click this link:

{TOPICLINK}

Thanks,

{SENDERNAMEMANUAL}',
);

$txt['emailtemplate_send_topic_comment'] = array(
	'desc' => 'The email sent out when a user uses "Send This Topic" and a comment was added.',
	'subject' => 'Topic: {TOPICSUBJECT} (From: {SENDERNAMEMANUAL})',
	'body' => 'Dear {RECPNAMEMANUAL},

I want you to check out "{TOPICSUBJECT}" on {FORUMNAME}. To view it, please click this link:

{TOPICLINK}

A comment has also been added regarding this topic:
{COMMENT}

Thanks,

{SENDERNAMEMANUAL}',
);

$txt['emailtemplate_send_email'] = array(
	'desc' => 'A placeholder for the "Email User" function.',
	'subject' => '{EMAILSUBJECT}',
	'body' => '{EMAILBODY}',
);

$txt['emailtemplate_report_to_moderator'] = array(
	'desc' => 'The email notification sent to moderators when a post is reported.',
	'subject' => 'Gemeld: {TOPICSUBJECT} door {POSTERNAME}',
	'body' => 'Betreft, "{TOPICSUBJECT}" door {POSTERNAME} is gemeld door {REPORTERNAME} aan het Forumteam:

Het topic: {TOPICLINK}
Moderatie centrum: {REPORTLINK}

De melder heeft de volgende opmerking toegevoegd:
{COMMENT}

{REGARDS}',
);

$txt['emailtemplate_change_password'] = array(
	'desc' => 'The email sent to users when their password has been changed, including their new password.',
	'subject' => 'Nieuw wachtwoord gegevens',
	'body' => 'Hey, {REALNAME}!

U wachtwoord gegevens op het {FORUMNAME} zijn gewijzigd en hersteld. Hieronder staan u nieuwe gegevens.

Gebruikersnaam is "{USERNAME}" en wachtwoord is "{PASSWORD}".

U kunt dit weer wijzigen in u profiel, of na inloggen onderstaande pagina te bezoeken:

{SCRIPTURL}?action=profile

{REGARDS}',
);

$txt['emailtemplate_register_activate'] = array(
	'desc' => 'The email sent to users when registering and need to activate their email address.',
	'subject' => 'Welkom op het {FORUMNAME}',
	'body' => 'Bedankt voor het registreren op het {FORUMNAME}. U gebruikersnaam is {USERNAME}. wachtwoord vergeten, u kunt dit herstellen door te gaan naar {FORGOTPASSWORDLINK}.

Voordat u kunt inloggen, dient u eerst het account te activeren. om dit te doen, ga naar deze link:

{ACTIVATIONLINK}

Problemen met activeren, ga naar {ACTIVATIONLINKWITHOUTCODE} en gebruik code "{ACTIVATIONCODE}".

{REGARDS}',
);

$txt['emailtemplate_register_activate_approve'] = array(
	'desc' => 'The email sent to users to activate their account, but when the administrator then has to approve their account.',
	'subject' => 'Welkom op het {FORUMNAME}',
	'body' => 'Bedankt voor het registreren op het {FORUMNAME}. u gebruikersnaam is {USERNAME}. wachtwoord vergeten, u kunt dit herstellen door te gaan naar {FORGOTPASSWORDLINK}.

Voordat u kunt inloggen, dient u eerst het account te activeren. om dit te doen, ga naar deze link:

{ACTIVATIONLINK}

Problemen met activeren, ga naar {ACTIVATIONLINKWITHOUTCODE} en gebruik code "{ACTIVATIONCODE}".

Wanneer dit is uitgevoerd,nemen wij de beslissing om dit goed te keuren dan wel af te wijzen.Wanneer deze beslissing is genomen versturen wij een email naar u.

{REGARDS}',
);

$txt['emailtemplate_register_coppa'] = array(
	'desc' => 'The email sent to users when registering but then need to fill out the COPPA form for parental consent.',
	'subject' => 'Welcome to {FORUMNAME}',
	'body' => 'Thank you for registering at {FORUMNAME}. Your username is {USERNAME}. If you forget your password, you can change it at {FORGOTPASSWORDLINK}

Before you can login, the admin requires consent from your parent/guardian for you to join the community. You can obtain more information at the link below:

{COPPALINK}

{REGARDS}',
);

$txt['emailtemplate_register_immediate'] = array(
	'desc' => 'The email sent to users when registering and their account is immediately active.',
	'subject' => 'Welcome to {FORUMNAME}',
	'body' => 'Thank you for registering at {FORUMNAME}.

Your username is {USERNAME}.

If you forget your password, you may change it at:

{FORGOTPASSWORDLINK}

{REGARDS}',
);

$txt['emailtemplate_register_pending'] = array(
	'desc' => 'The email sent to users when they have registered and their account is awaiting administrator approval.',
	'subject' => 'Welkom op het {FORUMNAME}',
	'body' => 'U registratie aanvraag op het {FORUMNAME} is ontvangen, {REALNAME}.

Gebruikersnaam waarmee u zich heeft aangemeld is {USERNAME}. wachtwoord vergeten, te veranderen mbv deze link {FORGOTPASSWORDLINK}.

Voordat u kunt inloggen op het forum, word u aanmelding eerst gecontroleerd. Als alles in orde is ontvangt u opnieuw een email.

{REGARDS}',
);

$txt['emailtemplate_notification_reply'] = array(
	'desc' => 'The email sent when a user is following a topic and it has been replied to.',
	'subject' => 'Topic reply: {TOPICSUBJECT}',
	'body' => 'A reply has been posted to a topic you are watching by {POSTERNAME}.

View the reply at:
{TOPICLINK}

Unsubscribe to this topic by using this link:
{UNSUBSCRIBELINK}

{REGARDS}',
);

$txt['emailtemplate_notification_reply_body'] = array(
	'desc' => 'The email sent when a user is following a topic and it has been replied to. The content of the post is included.',
	'subject' => 'Topic reply: {TOPICSUBJECT}',
	'body' => 'A reply has been posted to a topic you are watching by {POSTERNAME}.

View the reply at:
{TOPICLINK}

Unsubscribe to this topic by using this link:
{UNSUBSCRIBELINK}

The text of the reply is shown below:
{MESSAGE}

{REGARDS}',
);

$txt['emailtemplate_notification_reply_once'] = array(
	'desc' => 'The email sent when a user is following a topic, and will only receive it on the first new post.',
	'subject' => 'Topic reply: {TOPICSUBJECT}',
	'body' => 'A reply has been posted to a topic you are watching by {POSTERNAME}.

View the reply at:
{TOPICLINK}

Unsubscribe to this topic by using this link:
{UNSUBSCRIBELINK}

More replies may be posted, but you won\'t receive any more notifications until you read the topic.

{REGARDS}',
);

$txt['emailtemplate_notification_reply_body_once'] = array(
	'desc' => 'The email sent when a user is following a topic, and will only receive it on the first new post. The content of the post is included.',
	'subject' => 'Topic reply: {TOPICSUBJECT}',
	'body' => 'A reply has been posted to a topic you are watching by {POSTERNAME}.

View the reply at:
{TOPICLINK}

Unsubscribe to this topic by using this link:
{UNSUBSCRIBELINK}

The text of the reply is shown below:
{MESSAGE}

More replies may be posted, but you won\'t receive any more notifications until you read the topic.

{REGARDS}',
);

$txt['emailtemplate_notification_pin'] = array(
	'desc' => 'The email sent when a user is following a topic, and the topic is subsequently pinned or unpinned.',
	'subject' => 'Topic pinned: {TOPICSUBJECT}',
	'body' => 'A topic you are watching has been pinned or unpinned by {POSTERNAME}.

View the topic at:
{TOPICLINK}

Unsubscribe to this topic by using this link:
{UNSUBSCRIBELINK}

{REGARDS}',
);

$txt['emailtemplate_notification_lock'] = array(
	'desc' => 'The email sent when a user is following a topic, and the topic is subsequently locked.',
	'subject' => 'Topic locked: {TOPICSUBJECT}',
	'body' => 'A topic you are watching has been locked by {POSTERNAME}.

View the topic at:
{TOPICLINK}

Unsubscribe to this topic by using this link:
{UNSUBSCRIBELINK}

{REGARDS}',
);

$txt['emailtemplate_notification_unlock'] = array(
	'desc' => 'The email sent when a user is following a topic, and the topic is subsequently unlocked.',
	'subject' => 'Topic unlocked: {TOPICSUBJECT}',
	'body' => 'A topic you are watching has been unlocked by {POSTERNAME}.

View the topic at:
{TOPICLINK}

Unsubscribe to this topic by using this link:
{UNSUBSCRIBELINK}

{REGARDS}',
);

$txt['emailtemplate_notification_remove'] = array(
	'desc' => 'The email sent when a user is following a topic, and the topic is subsequently removed.',
	'subject' => 'Topic removed: {TOPICSUBJECT}',
	'body' => 'A topic you were watching has been removed by {POSTERNAME}.

{REGARDS}',
);

$txt['emailtemplate_notification_move'] = array(
	'desc' => 'The email sent when a user is following a topic, and the topic is subsequently moved elsewhere.',
	'subject' => 'Topic moved: {TOPICSUBJECT}',
	'body' => 'A topic you are watching has been moved to another board by {POSTERNAME}.

View the topic at:
{TOPICLINK}

Unsubscribe to this topic by using this link:
{UNSUBSCRIBELINK}

{REGARDS}',
);

$txt['emailtemplate_notification_merge'] = array(
	'desc' => 'The email sent when a user is following a topic, and the topic is subsequently merged with another.',
	'subject' => 'Topic merged: {TOPICSUBJECT}',
	'body' => 'A topic you are watching has been merged with another topic by {POSTERNAME}.

View the new merged topic at:
{TOPICLINK}

Unsubscribe to this topic by using this link:
{UNSUBSCRIBELINK}

{REGARDS}',
);

$txt['emailtemplate_notification_split'] = array(
	'desc' => 'The email sent when a user is following a topic, and the topic is subsequently split into more than one.',
	'subject' => 'Topic split: {TOPICSUBJECT}',
	'body' => 'A topic you are watching has been split into two or more topics by {POSTERNAME}.

View what remains of this topic at:
{TOPICLINK}

Unsubscribe to this topic by using this link:
{UNSUBSCRIBELINK}

{REGARDS}',
);

$txt['emailtemplate_admin_notify'] = array(
	'desc' => 'The email sent to administrators when a new member registers.',
	'subject' => 'Een nieuw forumlid heeft zich aangemeld',
	'body' => '{USERNAME} een nieuw lid heeft zich geregistreerd op ons forum. Klik op de link hieronder om zijn profiel te bekijken.
{PROFILELINK}

{REGARDS}',
);

$txt['emailtemplate_admin_notify_approval'] = array(
	'desc' => 'The email sent to administrators when a new member registers and they need to approve the account.',
	'subject' => 'Een nieuw forumlid heeft zich aangemeld',
	'body' => '{USERNAME} een nieuw lid heeft zich geregistreerd op ons forum. Klik op de link hieronder om zijn/haar profiel te bekijken.
{PROFILELINK}

Voordat deze gebruiker berichten kan gaan posten moet eerst zijn/haar account worden goedgekeurd. Klik op onderstaande link om naar het goedkeurings scherm te gaan.
{APPROVALLINK}

{REGARDS}',
);

$txt['emailtemplate_admin_attachments_full'] = array(
	'desc' => 'The email sent to warn administrators when the size of the attachments folder is close to the limit set in the admin panel.',
	'subject' => 'Belangrijk! Attachments folder is bijna vol',
	'body' => '{REALNAME},

The attachments folder at {FORUMNAME} is almost full. Please visit the forum to resolve this problem.

Once the attachments folder reaches it\'s maximum permitted size users will not be able to continue to post attachments or upload custom avatars (If enabled).

{REGARDS}',
);

$txt['emailtemplate_paid_subscription_refund'] = array(
	'desc' => 'The email sent to administrators to advise them of a refund on a paid subscription.',
	'subject' => 'Refunded Paid Subscription',
	'body' => '{REALNAME},

A member has received a refund on a paid subscription. Below are the details of this subscription:

	Subscription: {SUBSCRNAME}
	User Name: {REFUNDNAME} ({REFUNDUSER})
	Date: {DATE}

You can view this members profile by clicking the link below:
{PROFILELINK}

{REGARDS}',
);

$txt['emailtemplate_paid_subscription_new'] = array(
	'desc' => 'The email sent to administrators to advise them a new paid subscription has been taken out.',
	'subject' => 'New Paid Subscription',
	'body' => '{REALNAME},

A member has taken out a new paid subscription. Below are the details of this subscription:

	Subscription: {SUBSCRNAME}
	User Name: {SUBNAME} ({SUBUSER})
	User Email: {SUBEMAIL}
	Price: {PRICE}
	Date: {DATE}

You can view this members profile by clicking the link below:
{PROFILELINK}

{REGARDS}',
);

$txt['emailtemplate_paid_subscription_error'] = array(
	'desc' => 'The email sent to administrators to advise them of an error in processing a paid subscription.',
	'subject' => 'Paid Subscription Error Occurred',
	'body' => '{REALNAME},

The following error occurred when processing a paid subscription
----------------------------------------------------------------
{SUBERROR}

{REGARDS}',
);

$txt['emailtemplate_pm_email'] = array(
	'desc' => 'The template used when sending notification of personal messages.',
	'subject' => 'Nieuw Persoonlijk bericht: {SUBJECT}',
	'body' => 'persoonlijk bericht ontvangen van {SENDERNAME} op het {FORUMNAME}.

BELANGRIJK: Dit is een kennisgeving. A.u.b niet reageren op DEZE email.

Inhoud bericht:

{MESSAGE}

Reageren op dit bericht : {REPLYLINK}',
);
