<?php
// Version: 2.0; EmailTemplates

// Since all of these strings are being used in emails, numeric entities should be used.

// Do not translate anything that is between {}, they are used as replacement variables and MUST remain exactly how they are.
// Additionally, do not translate the @additional_params: line or the variable names in the lines that follow it. You may
// translate the description of the variable. Do not translate @description:, however you may translate the rest of that line.

// Do not use block comments in this file, they will have special meaning.

$txt['scheduled_approval_email_topic'] = 'Les sujets suivants sont en attente d\'approbation :';
$txt['scheduled_approval_email_msg'] = 'Les messages suivants sont en attente d\'approbation :';

$txt['emails'] = array(
	'resend_activate_message' => array(
		/*
			@additional_params: resend_activate_message
				REALNAME: The display name for the member receiving the email.
				USERNAME: The user name for the member receiving the email.
				ACTIVATIONLINK: The url link to activate the member's account.
				ACTIVATIONCODE: The code needed to activate the member's account.
				ACTIVATIONLINKWITHOUTCODE: The url to the page where the activation code can be entered.
				FORGOTPASSWORDLINK: The url to the "forgot password" page.
			@description:
		*/
		'subject' => 'Bienvenue sur {FORUMNAME}',
		'body' => 'Merci d\'avoir rejoint {FORUMNAME}. Votre nom d\'utilisateur est {USERNAME}. En cas d\'oubli de mot de passe, remettez-le &#224; z&#233;ro en allant sur {FORGOTPASSWORDLINK}.

Avant de pouvoir vous connecter, vous devez d\'abord activer votre compte en suivant ce lien :

{ACTIVATIONLINK}

Si vous avez un probl&#232;me quelconque avec l\'activation, allez sur {ACTIVATIONLINKWITHOUTCODE} et entrez-y le code "{ACTIVATIONCODE}".

{REGARDS}',
	),

	'resend_pending_message' => array(
		/*
			@additional_params: resend_pending_message
				REALNAME: The display name for the member receiving the email.
				USERNAME: The user name for the member receiving the email.
			@description:
		*/
		'subject' => 'Bienvenue sur {FORUMNAME}',
		'body' => 'Votre demande d\'inscription sur {FORUMNAME} a &#233;t&#233; re&#231;ue, {REALNAME}.

L\'identifiant sous lequel vous vous &#234;tes inscrit &#233;tait {USERNAME}.

Avant de pouvoir se connecter et commencer &#224; utiliser le forum, votre demande sera revue et approuv&#233;e. Lorsque cela sera fait, vous recevrez un autre e-mail de la part de cette adresse.

{REGARDS}',
	),
	'mc_group_approve' => array(
		/*
			@additional_params: mc_group_approve
				USERNAME: The user name for the member receiving the email.
				GROUPNAME: The name of the membergroup that the user was accepted into.
			@description: The request to join a particular membergroup has been accepted.
		*/
		'subject' => 'Approbation de l\'adh&#233;sion &#224; un groupe',
		'body' => '{USERNAME},

Nous sommes heureux de vous annoncer que votre demande pour rejoindre le groupe "{GROUPNAME}" sur {FORUMNAME} a &#233;t&#233; accept&#233;e, et que votre compte a &#233;t&#233; mis &#224; jour pour vous inclure dans ce groupe.

{REGARDS}',
	),
	'mc_group_reject' => array(
		/*
			@additional_params: mc_group_reject
				USERNAME: The user name for the member receiving the email.
				GROUPNAME: The name of the membergroup that the user was rejected from.
			@description: The request to join a particular membergroup has been rejected.
		*/
		'subject' => 'Rejet d\'adh&#233;sion &#224; un groupe',
		'body' => '{USERNAME},

Nous sommes d&#233;sol&#233;s de vous annoncer que votre demande de rejoindre le groupe "{GROUPNAME}" sur {FORUMNAME} a &#233;t&#233; rejet&#233;e.

{REGARDS}',
	),
	'mc_group_reject_reason' => array(
		/*
			@additional_params: mc_group_reject_reason
				USERNAME: The user name for the member receiving the email.
				GROUPNAME: The name of the membergroup that the user was rejected from.
				REASON: Reason for the rejection.
			@description: The request to join a particular membergroup has been rejected with a reason given.
		*/
		'subject' => 'Rejet d\'adh&#233;sion &#224; un groupe',
		'body' => '{USERNAME},

Nous sommes d&#233;sol&#233;s de vous annoncer que votre demande pour rejoindre le groupe "{GROUPNAME}" sur {FORUMNAME} a &#233;t&#233; rejet&#233;e.

En voici la raison :
{REASON}

{REGARDS}',
	),
	'admin_approve_accept' => array(
		/*
			@additional_params: admin_approve_accept
				NAME: The display name of the member.
				USERNAME: The user name for the member receiving the email.
				PROFILELINK: The URL of the profile page.
				FORGOTPASSWORDLINK: The URL of the "forgot password" page.
			@description:
		*/
		'subject' => 'Bienvenue sur {FORUMNAME}',
		'body' => 'Bienvenue, {NAME} !

Votre compte a &#233;t&#233; activ&#233; manuellement par l\'administrateur et vous pouvez maintenant vous connecter et poster. Votre identifiant est : {USERNAME}
Si vous oubliez votre mot de passe, vous pouvez le r&#233;tablir sur {FORGOTPASSWORDLINK}.
Vous pouvez aussi consulter votre profil sur {PROFILELINK}.

{REGARDS}',
	),
	'admin_approve_activation' => array(
		/*
			@additional_params: admin_approve_activation
				USERNAME: The user name for the member receiving the email.
				ACTIVATIONLINK: The url link to activate the member's account.
				ACTIVATIONLINKWITHOUTCODE: The url to the page where the activation code can be entered.
				ACTIVATIONCODE: The activation code.
			@description:
		*/
		'subject' => 'Bienvenue sur {FORUMNAME}',
		'body' => 'Bienvenue, {USERNAME} !

Votre compte sur {FORUMNAME} a &#233;t&#233; approuv&#233; par l\'administrateur du forum, et doit &#234;tre maintenant activ&#233; avant de pouvoir commencer &#224; poster. Veuillez utiliser le lien ci-dessous pour activer votre compte :

{ACTIVATIONLINK}

En cas de souci avec l\'activation, merci d\'aller sur {ACTIVATIONLINKWITHOUTCODE} et d\'y entrer le code "{ACTIVATIONCODE}".

{REGARDS}',
	),
	'admin_approve_reject' => array(
		/*
			@additional_params: admin_approve_reject
				USERNAME: The user name for the member receiving the email.
			@description:
		*/
		'subject' => 'Inscription rejet&#233;e',
		'body' => '{USERNAME},

Malheureusement, votre demande pour rejoindre {FORUMNAME} a &#233;t&#233; rejet&#233;e.

{REGARDS}',
	),
	'admin_approve_delete' => array(
		/*
			@additional_params: admin_approve_delete
				USERNAME: The user name for the member receiving the email.
			@description:
		*/
		'subject' => 'Compte supprim&#233;',
		'body' => '{USERNAME},

Votre compte sur {FORUMNAME} a &#233;t&#233; supprim&#233;. L\'une des raisons possibles peut &#234;tre que vous n\'avez jamais activ&#233; votre compte, auquel cas vous devriez pouvoir vous r&#233;inscrire.

{REGARDS}',
	),
	'admin_approve_remind' => array(
		/*
			@additional_params: admin_approve_remind
				USERNAME: The user name for the member receiving the email.
				ACTIVATIONLINK: The url link to activate the member's account.
				ACTIVATIONLINKWITHOUTCODE: The url to the page where the activation code can be entered.
				ACTIVATIONCODE: The activation code.
			@description:
		*/
		'subject' => 'Rappel d\'inscription',
		'body' => '{USERNAME},

Vous n\'avez pas encore activ&#233; votre compte sur {FORUMNAME}.

Veuillez utiliser le lien ci-dessous pour activer votre compte :
{ACTIVATIONLINK}

En cas de souci avec l\'activation, merci d\'aller sur {ACTIVATIONLINKWITHOUTCODE} et d\'y entrer le code "{ACTIVATIONCODE}".

{REGARDS}',
	),
	'admin_register_activate' => array(
		/*
			@additional_params:
				USERNAME: The user name for the member receiving the email.
				ACTIVATIONLINK: The url link to activate the member's account.
				ACTIVATIONLINKWITHOUTCODE: The url to the page where the activation code can be entered.
				ACTIVATIONCODE: The activation code.
			@description:
		*/
		'subject' => 'Bienvenue sur {FORUMNAME}',
		'body' => 'Merci pour votre inscription sur {FORUMNAME}. Votre identifiant est {USERNAME} et votre mot de passe est {PASSWORD}.

Avant de pouvoir vous connecter, vous devez d\'abord activer votre compte en suivant ce lien :

{ACTIVATIONLINK}

En cas de souci avec l\'activation, rendez-vous sur {ACTIVATIONLINKWITHOUTCODE} et entrez-y le code "{ACTIVATIONCODE}".

{REGARDS}',
	),
	'admin_register_immediate' => array(
		'subject' => 'Bienvenue sur {FORUMNAME}',
		'body' => 'Merci d\'avoir rejoint {FORUMNAME}. Votre identifiant est {USERNAME} et votre mot de passe est {PASSWORD}.

Vous pouvez visiter {FORUMNAME} en vous rendant sur {SCRIPTURL} dans votre navigateur web.

{REGARDS}',
	),
	'new_announcement' => array(
		/*
			@additional_params: new_announcement
				TOPICSUBJECT: The subject of the topic being announced.
				MESSAGE: The message body of the first post of the announced topic.
				TOPICLINK: A link to the topic being announced.
			@description:

		*/
		'subject' => 'Nouvelle annonce : {TOPICSUBJECT}',
		'body' => '{MESSAGE}

Pour vous d&#233;sabonner de ces annonces, connectez-vous au forum et d&#233;cochez la case "Recevoir les annonces du forum et les notifications importantes par e-mail." dans votre profil.

Vous pouvez voir l\'annonce compl&#232;te en suivant ce lien :
{TOPICLINK}

{REGARDS}',
	),
	'notify_boards_once_body' => array(
		/*
			@additional_params: notify_boards_once_body
				TOPICSUBJECT: The subject of the topic causing the notification
				TOPICLINK: A link to the topic.
				MESSAGE: This is the body of the message.
				UNSUBSCRIBELINK: Link to unsubscribe from notifications.
			@description:
		*/
		'subject' => 'Nouveau sujet : {TOPICSUBJECT}',
		'body' => 'Un nouveau sujet, \'{TOPICSUBJECT}\', a &#233;t&#233; cr&#233;&#233; sur une section que vous surveillez.

Vous pouvez le voir ici :
{TOPICLINK}

D\'autres sujets ont pu &#234;tre post&#233;s, mais vous ne recevrez pas d\'autres e-mails de notification tant que vous ne serez pas retourn&#233; sur cette section et que vous n\'en aurez pas lus quelques-uns.

Le texte du sujet est affich&#233; ci-dessous :
{MESSAGE}

Pour vous d&#233;sabonner des nouveaux sujets de cette section, utilisez ce lien :
{UNSUBSCRIBELINK}

{REGARDS}',
	),
	'notify_boards_once' => array(
		/*
			@additional_params: notify_boards_once
				TOPICSUBJECT: The subject of the topic causing the notification
				TOPICLINK: A link to the topic.
				UNSUBSCRIBELINK: Link to unsubscribe from notifications.
			@description:
		*/
		'subject' => 'Nouveau sujet : {TOPICSUBJECT}',
		'body' => 'Un nouveau sujet, \'{TOPICSUBJECT}\', a &#233;t&#233; cr&#233;&#233; sur une section que vous surveillez.

Vous pouvez le voir ici :
{TOPICLINK}

D\'autres sujets ont pu &#234;tre post&#233;s, mais vous ne recevrez pas d\'autres e-mails de notification tant que vous ne serez pas retourn&#233; sur cette section et que vous n\'en aurez pas lu quelques uns.

Pour vous d&#233;sabonner des nouveaux sujets de cette section, utilisez ce lien :
{UNSUBSCRIBELINK}

{REGARDS}',
	),
	'notify_boards_body' => array(
		/*
			@additional_params: notify_boards_body
				TOPICSUBJECT: The subject of the topic causing the notification
				TOPICLINK: A link to the topic.
				MESSAGE: This is the body of the message.
				UNSUBSCRIBELINK: Link to unsubscribe from notifications.
			@description:
		*/
		'subject' => 'Nouveau sujet : {TOPICSUBJECT}',
		'body' => 'Un nouveau sujet \'{TOPICSUBJECT}\', a &#233;t&#233; cr&#233;&#233; sur une section que vous surveillez.

Vous pouvez le voir ici
{TOPICLINK}

Le texte du sujet est affich&#233; ci-dessous :
{MESSAGE}

Pour vous d&#233;sabonner des nouveaux sujets de cette section, utilisez ce lien :
{UNSUBSCRIBELINK}

{REGARDS}',
	),
	'notify_boards' => array(
		/*
			@additional_params: notify_boards
				TOPICSUBJECT: The subject of the topic causing the notification
				TOPICLINK: A link to the topic.
				UNSUBSCRIBELINK: Link to unsubscribe from notifications.
			@description:
		*/
		'subject' => 'Nouveau sujet : {TOPICSUBJECT}',
		'body' => 'Un nouveau sujet, \'{TOPICSUBJECT}\', a &#233;t&#233; cr&#233;&#233; sur une section que vous surveillez.

Vous pouvez le voir ici
{TOPICLINK}

Pour vous d&#233;sabonner des nouveaux sujets de cette section, utilisez ce lien :
{UNSUBSCRIBELINK}

{REGARDS}',
	),
	'request_membership' => array(
		/*
			@additional_params: request_membership
				RECPNAME: The name of the person recieving the email
				APPYNAME: The name of the person applying for group membership
				GROUPNAME: The name of the group being applied to.
				REASON: The reason given by the applicant for wanting to join the group.
				MODLINK: Link to the group moderation page.
			@description:
		*/
		'subject' => 'Demande de nouveau groupe',
		'body' => '{RECPNAME},

{APPYNAME} a demand&#233; l\'adh&#233;sion au groupe "{GROUPNAME}". L\'utilisateur a donn&#233; la raison suivante :

{REASON}

Vous pouvez approuver ou rejeter cette demande en cliquant sur le lien ci-dessous :

{MODLINK}

{REGARDS}',
	),
	'paid_subscription_reminder' => array(
		/*
			@additional_params: scheduled_approval
				REALNAME: The real (display) name of the person receiving the email.
				PROFILE_LINK: Link to profile of member receiving email where can renew.
				SUBSCRIPTION: Name of the subscription.
				END_DATE: Date it expires.
			@description:
		*/
		'subject' => 'Souscription sur le point d\'expirer {FORUMNAME}',
		'body' => '{REALNAME},

L\'une de vos souscriptions sur {FORUMNAME} est sur le point d\'expirer. Si vous aviez choisi un renouvellement automatique lors de votre souscription initiale, vous n\'avez pas besoin de faire quoique ce soit - sinon, vous souhaitez peut-&#234;tre renouveller votre souscription une fois de plus. Voici un peu plus de d&#233;tails :

Nom de la souscription : {SUBSCRIPTION}
Date d\'expiration : {END_DATE}

Pour &#233;diter vos souscriptions, veuillez visiter l\'URL suivante :
{PROFILE_LINK}

{REGARDS}',
	),
	'activate_reactivate' => array(
		/*
			@additional_params: activate_reactivate
				ACTIVATIONLINK: The url link to reactivate the member's account.
				ACTIVATIONCODE: The code needed to reactivate the member's account.
				ACTIVATIONLINKWITHOUTCODE: The url to the page where the activation code can be entered.
			@description:
		*/
		'subject' => 'Bon retour sur {FORUMNAME}',
		'body' => 'Pour pouvoir valider &#224; nouveau votre adresse e-mail, votre compte a &#233;t&#233; d&#233;sactiv&#233;. Cliquez sur le lien suivant pour le r&#233;activer :
{ACTIVATIONLINK}

Si vous avez un probl&#232;me quelconque avec l\'activation, veuillez aller sur {ACTIVATIONLINKWITHOUTCODE} et utiliser le code "{ACTIVATIONCODE}".

{REGARDS}',
	),
	'forgot_password' => array(
		/*
			@additional_params: forgot_password
				REALNAME: The real (display) name of the person receiving the reminder.
				REMINDLINK: The link to reset the password.
				IP: The IP address of the requester.
				MEMBERNAME:
			@description:
		*/
		'subject' => 'Nouveau mot de passe pour {FORUMNAME}',
		'body' => 'Cher {REALNAME},
Cet e-mail a &#233;t&#233; envoy&#233; car la fonction \'mot de passe oubli&#233;\' a &#233;t&#233; utilis&#233;e pour votre compte. Pour &#233;tablir un nouveau mot de passe, cliquez sur le lien suivant :
{REMINDLINK}

IP : {IP}
Username : {MEMBERNAME}

{REGARDS}',
	),
	'scheduled_approval' => array(
		/*
			@additional_params: scheduled_approval
				REALNAME: The real (display) name of the person receiving the email.
				BODY: The generated body of the mail.
			@description:
		*/
		'subject' => 'R&#233;sum&#233; des messages en attente d\'approbation sur {FORUMNAME}',
		'body' => '{REALNAME},

Cet e-mail contient un r&#233;sum&#233; de tous les items en attente d\'approbation sur {FORUMNAME}.

{BODY}

Veuillez vous connecter au forum pour passer en revue ces items.
{SCRIPTURL}

{REGARDS}',
	),
	'send_topic' => array(
		/*
			@additional_params: send_topic
				TOPICSUBJECT: The subject of the topic being sent.
				SENDERNAME: The name of the member sending the topic.
				RECPNAME: The name of the person receiving the email.
				TOPICLINK: A link to the topic being sent.
			@description:
		*/
		'subject' => 'Sujet : {TOPICSUBJECT} (par {SENDERNAME})',
		'body' => '{RECPNAME},

Je me permets de vous recommander le sujet intitul&#233; "{TOPICSUBJECT}" sur le forum {FORUMNAME}. Pour l\'afficher, veuillez cliquer sur le lien suivant :
{TOPICLINK}

Cordialement,

{SENDERNAME}',
	),
	'send_topic_comment' => array(
		/*
			@additional_params: send_topic_comment
				TOPICSUBJECT: The subject of the topic being sent.
				SENDERNAME: The name of the member sending the topic.
				RECPNAME: The name of the person receiving the email.
				TOPICLINK: A link to the topic being sent.
				COMMENT: A comment left by the sender.
			@description:
		*/
		'subject' => 'Sujet : {TOPICSUBJECT} (par {SENDERNAME})',
		'body' => '{RECPNAME},

Je me permets de vous recommander le sujet intitul&#233; "{TOPICSUBJECT}" sur le forum {FORUMNAME}. Pour l\'afficher, veuillez cliquer sur le lien suivant :

{TOPICLINK}

Voici mon commentaire &#224; ce sujet :
{COMMENT}

Cordialement,

{SENDERNAME}',
	),
	'send_email' => array(
		/*
			@additional_params: send_email
				EMAILSUBJECT: The subject the user wants to email.
				EMAILBODY: The body the user wants to email.
				SENDERNAME: The name of the member sending the email.
				RECPNAME: The name of the person receiving the email.
			@description:
		*/
		'subject' => '{EMAILSUBJECT}',
		'body' => '{EMAILBODY}',
	),
	'report_to_moderator' => array(
		/*
			@additional_params: report_to_moderator
				TOPICSUBJECT: The subject of the reported post.
				POSTERNAME: The report post's author's name.
				REPORTERNAME: The name of the person reporting the post.
				TOPICLINK: The url of the post that is being reported.
				REPORTLINK: The url of the moderation center report.
				COMMENT: The comment left by the reporter, hopefully to explain why they are reporting the post.
			@description: When a user reports a post this email is sent out to moderators and admins of that board.
		*/
		'subject' => 'Message rapport&#233; : {TOPICSUBJECT} par {POSTERNAME}',
		'body' => 'Le message suivant, "{TOPICSUBJECT}" par {POSTERNAME} a &#233;t&#233; rapport&#233; par {REPORTERNAME} sur une section que vous mod&#233;rez :

Le sujet : {TOPICLINK}
Centre de mod&#233;ration : {REPORTLINK}

Le rapporteur a fait le commentaire suivant :
{COMMENT}

{REGARDS}',
	),
	'change_password' => array(
		/*
			@additional_params: change_password
				USERNAME: The user name for the member receiving the email.
				PASSWORD: The password for the member.
			@description:
		*/
		'subject' => 'D&#233;tails du nouveau mot de passe',
		'body' => 'Bonjour, {USERNAME} !

Vos d&#233;tails de connexion sur {FORUMNAME} ont &#233;t&#233; chang&#233;s et votre mot de passe r&#233;initialis&#233;. Voici ci-dessous les d&#233;tails de votre nouvelle connexion.

Votre identifiant est "{USERNAME}" et votre mot de passe est "{PASSWORD}".

Une fois connect&#233;, vous pouvez changer votre mot de passe en allant sur la page de votre profil :

{SCRIPTURL}?action=profile

{REGARDS}',
	),
	'register_activate' => array(
		/*
			@additional_params: register_activate
				REALNAME: The display name for the member receiving the email.
				USERNAME: The user name for the member receiving the email.
				PASSWORD: The password for the member.
				ACTIVATIONLINK: The url link to reactivate the member's account.
				ACTIVATIONLINKWITHOUTCODE: The url to the page where the activation code can be entered.
				ACTIVATIONCODE: The code needed to reactivate the member's account.
				FORGOTPASSWORDLINK: The url to the "forgot password" page.
			@description:
		*/
		'subject' => 'Bienvenue sur {FORUMNAME}',
		'body' => 'Vous &#234;tes maintenant inscrit sur {FORUMNAME}, {REALNAME} !

L\'identifiant de votre compte est {USERNAME} et son mot de passe est {PASSWORD} (vous pourrez le changer par la suite.)

Avant de pouvoir vous connecter, vous devez d\'abord activer votre compte. Pour ce faire, veuillez suivre ce lien :

{ACTIVATIONLINK}

Si vous avez un probl&#232;me quelconque avec l\'activation, veuillez utiliser le code "{ACTIVATIONCODE}".

{REGARDS}',
	),
	'register_activate_approve' => array(
		/*
			@additional_params: register_activate
				REALNAME: The display name for the member receiving the email.
				USERNAME: The user name for the member receiving the email.
				PASSWORD: The password for the member.
				ACTIVATIONLINK: The url link to reactivate the member's account.
				ACTIVATIONLINKWITHOUTCODE: The url to the page where the activation code can be entered.
				ACTIVATIONCODE: The code needed to reactivate the member's account.
				FORGOTPASSWORDLINK: The url to the "forgot password" page.
			@description:
		*/
		'subject' => 'Bienvenue sur {FORUMNAME}',
		'body' => 'Merci de vous &#234;tre inscrit &#224; {FORUMNAME}. Votre nom d\'utilisateur est {USERNAME}. Si vous oubliez votre mot de passe, vous pouvez le changer en allant sur {FORGOTPASSWORDLINK}.

Avant de vous connecter, vous devrez d\'abord activer votre compte en cliquant sur ce lien :

{ACTIVATIONLINK}

Si vous avez des probl&#232;mes avec l\'activation, allez sur {ACTIVATIONLINKWITHOUTCODE} et entrez le code "{ACTIVATIONCODE}".

Une fois ce processus termin&#233;, l\'administrateur v&#233;rifiera votre inscription et l\'activera d&#233;finitivement le cas &#233;ch&#233;ant. Vous recevrez alors un nouvel e-mail pour vous pr&#233;venir.

{REGARDS}',
	),
	'register_coppa' => array(
		/*
			@additional_params: register_coppa
				REALNAME: The display name for the member receiving the email.
				USERNAME: The user name for the member receiving the email.
				PASSWORD: The password for the member.
				COPPALINK: The url link to the coppa form.
			@description:
		*/
		'subject' => 'Bienvenue sur {FORUMNAME}',
		'body' => 'Vous &#234;tes maintenant inscrit sur {FORUMNAME}, {REALNAME} !

L\'identifiant de votre compte est {USERNAME} et son mot de passe est {PASSWORD} (que vous pourrez changer ensuite.)

Avant de pouvoir vous connecter, l\'administrateur de ce forum souhaite obtenir l\'approbation de votre parent/tuteur pour votre adh&#233;sion &#224; cette communaut&#233;. Pour plus d\'informations, veuillez consulter le lien ci-dessous :

{COPPALINK}

{REGARDS}',
	),
	'register_immediate' => array(
		/*
			@additional_params: register_immediate
				REALNAME: The display name for the member receiving the email.
				USERNAME: The user name for the member receiving the email.
				PASSWORD: The password for the member.
				FORGOTPASSWORDLINK: The url to the "forgot password" page.
			@description:
		*/
		'subject' => 'Bienvenue sur {FORUMNAME}',
		'body' => 'Vous &#234;tes maintenant inscrit sur {FORUMNAME}, {REALNAME} !

L\'identifiant de votre compte est {USERNAME} et son mot de passe est {PASSWORD}.

Une fois connect&#233;, vous pouvez changer votre mot de passe en allant sur la page de votre profil :

{FORGOTPASSWORDLINK}

{REGARDS}',
	),
	'register_pending' => array(
		/*
			@additional_params: register_pending
				REALNAME: The display name for the member receiving the email.
				USERNAME: The user name for the member receiving the email.
				PASSWORD: The password for the member.
				FORGOTPASSWORDLINK: The url to the "forgot password" page.
			@description:
		*/
		'subject' => 'Bienvenue sur {FORUMNAME}',
		'body' => 'Votre demande d\'inscription sur {FORUMNAME} a &#233;t&#233; re&#231;ue, {REALNAME}.

L\'identifiant de votre compte est {USERNAME} et son mot de passe est {PASSWORD}.

Avant de pouvoir vous connecter, votre demande sera d\'abord &#233;tudi&#233;e et valid&#233;e. Vous recevrez ensuite un e-mail de confirmation.

{REGARDS}',
	),
	'notification_reply' => array(
		/*
			@additional_params: notification_reply
				TOPICSUBJECT:
				POSTERNAME:
				TOPICLINK:
				UNSUBSCRIBELINK:
			@description:
		*/
		'subject' => 'R&#233;ponse &#224; un sujet : {TOPICSUBJECT}',
		'body' => 'Une r&#233;ponse a &#233;t&#233; post&#233;e sur un sujet que vous surveillez par {POSTERNAME}.

Voir la r&#233;ponse :
{TOPICLINK}

Pour vous d&#233;sabonner de ce sujet, utilisez ce lien :
{UNSUBSCRIBELINK}

{REGARDS}',
	),
	'notification_reply_body' => array(
		/*
			@additional_params: notification_reply_body
				TOPICSUBJECT:
				POSTERNAME:
				TOPICLINK:
				UNSUBSCRIBELINK:
				MESSAGE:
			@description:
		*/
		'subject' => 'R&#233;ponse &#224; un sujet : {TOPICSUBJECT}',
		'body' => 'Une r&#233;ponse a &#233;t&#233; post&#233;e par {POSTERNAME} sur un sujet que vous surveillez.

Voir la r&#233;ponse :
{TOPICLINK}

Pour vous d&#233;sabonner de ce sujet, utilisez ce lien :
{UNSUBSCRIBELINK}

Le texte de cette r&#233;ponse est affich&#233; ci-dessous :
{MESSAGE}

{REGARDS}',
	),
	'notification_reply_once' => array(
		/*
			@additional_params: notification_reply_once
				TOPICSUBJECT:
				POSTERNAME:
				TOPICLINK:
				UNSUBSCRIBELINK:
			@description:
		*/
		'subject' => 'R&#233;ponse &#224; un sujet : {TOPICSUBJECT}',
		'body' => 'Une r&#233;ponse a &#233;t&#233; post&#233;e par {POSTERNAME} sur un sujet que vous surveillez.

Voir la r&#233;ponse :
{TOPICLINK}

Pour vous d&#233;sabonner de ce sujet, utilisez ce lien :
{UNSUBSCRIBELINK}

D\'autres r&#233;ponses ont pu &#234;tre post&#233;es, mais vous ne recevrez pas d\'autres e-mails de notification tant que vous n\'aurez pas lu le sujet.

{REGARDS}',
	),
	'notification_reply_body_once' => array(
		/*
			@additional_params: notification_reply_body_once
				TOPICSUBJECT:
				POSTERNAME:
				TOPICLINK:
				UNSUBSCRIBELINK:
				MESSAGE:
			@description:
		*/
		'subject' => 'R&#233;ponse &#224; un sujet : {TOPICSUBJECT}',
		'body' => 'Une r&#233;ponse a &#233;t&#233; post&#233;e par {POSTERNAME} &#224; un sujet que vous surveillez.

Voir la r&#233;ponse :
{TOPICLINK}

Pour vous d&#233;sabonner de ce sujet, utilisez ce lien :
{UNSUBSCRIBELINK}

Le texte du sujet est affich&#233; ci-dessous :
{MESSAGE}

D\'autres r&#233;ponses ont pu &#234;tre post&#233;es, mais vous ne recevrez pas d\'autres e-mails de notification tant que vous n\'aurez pas lu le sujet.

{REGARDS}',
	),
	'notification_pin' => array(
		/*
			@additional_params: notification_pin
			@description:
		*/
		'subject' => 'Sujet &#233;pingl&#233; : {TOPICSUBJECT}',
		'body' => 'Un sujet que vous surveillez a &#233;t&#233; &#233;pingl&#233; ou d&#233;pingl&#233; par {POSTERNAME}.

Voir le sujet :
{TOPICLINK}

Pour vous d&#233;sabonner de ce sujet, utilisez ce lien :
{UNSUBSCRIBELINK}

{REGARDS}',
	),
	'notification_lock' => array(
		/*
			@additional_params: notification_lock
			@description:
		*/
		'subject' => 'Sujet bloqu&#233; : {TOPICSUBJECT}',
		'body' => 'Un sujet que vous surveillez a &#233;t&#233; bloqu&#233; par {POSTERNAME}.

Voir le sujet :
{TOPICLINK}

Pour vous d&#233;sabonner de ce sujet, utilisez ce lien :
{UNSUBSCRIBELINK}

{REGARDS}',
	),
	'notification_unlock' => array(
		/*
			@additional_params: notification_unlock
			@description:
		*/
		'subject' => 'Sujet d&#233;bloqu&#233; : {TOPICSUBJECT}',
		'body' => 'Un sujet que vous surveillez a &#233;t&#233; d&#233;bloqu&#233; par {POSTERNAME}.

Voir le sujet :
{TOPICLINK}

Pour vous d&#233;sabonner de ce sujet, utilisez ce lien :
{UNSUBSCRIBELINK}

{REGARDS}',
	),
	'notification_remove' => array(
		/*
			@additional_params: notification_remove
			@description:
		*/
		'subject' => 'Sujet supprim&#233; : {TOPICSUBJECT}',
		'body' => 'Un sujet que vous surveillez a &#233;t&#233; supprim&#233; par {POSTERNAME}.

{REGARDS}',
	),
	'notification_move' => array(
		/*
			@additional_params: notification_move
			@description:
		*/
		'subject' => 'Sujet d&#233;plac&#233; : {TOPICSUBJECT}',
		'body' => 'Un sujet que vous surveillez a &#233;t&#233; d&#233;plac&#233; dans une autre section par {POSTERNAME}.

Voir le sujet :
{TOPICLINK}

Pour vous d&#233;sabonner de ce sujet, utilisez ce lien :
{UNSUBSCRIBELINK}

{REGARDS}',
	),
	'notification_merge' => array(
		/*
			@additional_params: notification_merged
			@description:
		*/
		'subject' => 'Sujet fusionn&#233; : {TOPICSUBJECT}',
		'body' => 'Un sujet que vous surveillez a &#233;t&#233; fusionn&#233; avec un autre sujet par {POSTERNAME}.

Voir le nouveau sujet fusionn&#233; :
{TOPICLINK}

Pour vous d&#233;sabonner de ce sujet, utilisez ce lien :
{UNSUBSCRIBELINK}

{REGARDS}',
	),
	'notification_split' => array(
		/*
			@additional_params: notification_split
			@description:
		*/
		'subject' => 'Sujet s&#233;par&#233; : {TOPICSUBJECT}',
		'body' => 'Un sujet que vous surveillez a &#233;t&#233; divis&#233; en deux sujets par {POSTERNAME}.

Pour voir ce qu\'il reste de ce sujet :
{TOPICLINK}

Pour vous d&#233;sabonner de ce sujet, utilisez ce lien :
{UNSUBSCRIBELINK}

{REGARDS}',
	),
	'admin_notify' => array(
		/*
			@additional_params: admin_notify
				USERNAME:
				PROFILELINK:
			@description:
		*/
		'subject' => 'Un nouveau membre s\'est inscrit',
		'body' => '{USERNAME} vient juste de s\'inscrire comme nouveau membre sur votre forum. Cliquez sur le lien ci-dessous pour voir son profil.
{PROFILELINK}

{REGARDS}',
	),
	'admin_notify_approval' => array(
		/*
			@additional_params: admin_notify_approval
				USERNAME:
				PROFILELINK:
				APPROVALLINK:
			@description:
		*/
		'subject' => 'Un nouveau membre s\'est inscrit',
		'body' => '{USERNAME} vient juste de s\'inscrire comme nouveau membre sur votre forum. Cliquez sur le lien ci-dessous pour voir son profil.
{PROFILELINK}

Avant que ce membre puisse commencer &#224; poster, son compte doit d\'abord &#234;tre approuv&#233;. Cliquez sur le lien ci-dessous pour aller sur la page d\'approbation.
{APPROVALLINK}

{REGARDS}',
	),
	'admin_attachments_full' => array(
		/*
			@additional_params: admin_attachments_full
				REALNAME:
			@description:
		*/
		'subject' => 'Urgent ! Le dossier des fichiers joints est presque plein',
		'body' => '{REALNAME},

Le dossier des fichiers joints sur {FORUMNAME} est presque plein. Veuillez visiter le forum pour apporter une solution.

Notez que, si le dossier des fichiers joints est plein, les utilisateurs de ce forum ne pourront plus ni poster de nouvelles pi&#232;ces jointes, ni poster de nouveaux avatars (si cela &#233;tait permis).

{REGARDS}',
	),
	'paid_subscription_refund' => array(
		/*
			@additional_params: paid_subscription_refund
				NAME: Subscription title.
				REALNAME: Recipients name
				REFUNDUSER: Username who took out the subscription.
				REFUNDNAME: User's display name who took out the subscription.
				DATE: Today's date.
				PROFILELINK: Link to members profile.
			@description:
		*/
		'subject' => 'Abonnement rembours&#233;',
		'body' => '{REALNAME},

Un membre a &#233;t&#233; rembours&#233; pour un abonnement. Voici les d&#233;tails de cet abonnement :

	Nom de l\'abonnement : {NAME}
	Nom de l\'utilisateur : {REFUNDNAME} ({REFUNDUSER})
	Date : {DATE}

Vous pouvez afficher le profil de cet utilisateur via le lien ci-dessous :
{PROFILELINK}

{REGARDS}',
	),
	'paid_subscription_new' => array(
		/*
			@additional_params: paid_subscription_new
				NAME: Subscription title.
				REALNAME: Recipients name
				SUBEMAIL: Email address of the user who took out the subscription
				SUBUSER: Username who took out the subscription.
				SUBNAME: User's display name who took out the subscription.
				DATE: Today's date.
				PROFILELINK: Link to members profile.
			@description:
		*/
		'subject' => 'Nouvelle souscription',
		'body' => '{REALNAME},

Un membre s\'est abonn&#233; &#224; votre forum. Voici les d&#233;tails de cet abonnement :

	Nom de l\'abonnement : {NAME}
	Nom de l\'utilisateur : {SUBNAME} ({SUBUSER})
	Son adresse e-mail : {SUBEMAIL}
	Prix : {PRICE}
	Date : {DATE}

Vous pouvez afficher le profil de cet utilisateur via le lien ci-dessous :
{PROFILELINK}

{REGARDS}',
	),
	'paid_subscription_error' => array(
		/*
			@additional_params: paid_subscription_error
				ERROR: Error message.
				REALNAME: Recipients name
			@description:
		*/
		'subject' => 'Une erreur est survenue lors de la souscription',
		'body' => '{REALNAME},

L\'erreur suivante est survenue lors de cette souscription
----------------------------------------------------------
{ERROR}

{REGARDS}',
	),
);
