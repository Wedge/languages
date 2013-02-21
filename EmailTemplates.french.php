<?php
// Version: 2.0; EmailTemplates

// Since all of these strings are being used in emails, numeric entities should be used.

// Do not translate anything that is between {}, they are used as replacement variables and MUST remain exactly how they are.

$txt['regards_team'] = 'Cordialement,
L\'&#233;quipe {FORUMNAME}';

$txt['scheduled_approval_email_topic'] = 'Les sujets suivants sont en attente d\'approbation :';
$txt['scheduled_approval_email_msg'] = 'Les messages suivants sont en attente d\'approbation :';

$txt['emailtemplate_resend_activate_message'] = array(
	'desc' => 'Le mail envoyé à l\'utilisateur après qu\'il s\'est enregistré, si son compte nécessite une activation par e-mail (e-mail qui viendra ensuite).',
	'subject' => 'Bienvenue sur {FORUMNAME}',
	'body' => 'Merci d\'avoir rejoint {FORUMNAME}. Votre nom d\'utilisateur est {USERNAME}. En cas d\'oubli de mot de passe, remettez-le &#224; z&#233;ro en allant sur {FORGOTPASSWORDLINK}.

Avant de pouvoir vous connecter, vous devez d\'abord activer votre compte en suivant ce lien :

{ACTIVATIONLINK}

Si vous avez un probl&#232;me quelconque avec l\'activation, allez sur {ACTIVATIONLINKWITHOUTCODE} et entrez-y le code "{ACTIVATIONCODE}".

{REGARDS}',
);

$txt['emailtemplate_mc_group_approve'] = array(
	'desc' => 'Le mail envoyé à l\'utilisateur après une demande si sa demande pour rejoindre un groupe a été approuvée.',
	'subject' => 'Approbation de l\'adh&#233;sion &#224; un groupe',
	'body' => '{REALNAME},

Nous sommes heureux de vous annoncer que votre demande pour rejoindre le groupe "{GROUPNAME}" sur {FORUMNAME} a &#233;t&#233; accept&#233;e, et que votre compte a &#233;t&#233; mis &#224; jour pour vous inclure dans ce groupe.

{REGARDS}',
);

$txt['emailtemplate_mc_group_reject'] = array(
	'desc' => 'Le mail envoyé à l'\utilisateur si sa demande pour rejoindre un groupe a été rejetée.',
	'subject' => 'Rejet d\'adh&#233;sion &#224; un groupe',
	'body' => '{REALNAME},

Nous sommes d&#233;sol&#233;s de vous annoncer que votre demande de rejoindre le groupe "{GROUPNAME}" sur {FORUMNAME} a &#233;t&#233; rejet&#233;e.

{REGARDS}',
);

$txt['emailtemplate_mc_group_reject_reason'] = array(
	'desc' => 'Le mail envoyé à l'\utilisateur si sa demande pour rejoindre un groupe a été rejetée, et expliquant les raisons du rejet.',
	'subject' => 'Rejet d\'adh&#233;sion &#224; un groupe',
	'body' => '{REALNAME},

Nous sommes d&#233;sol&#233;s de vous annoncer que votre demande pour rejoindre le groupe "{GROUPNAME}" sur {FORUMNAME} a &#233;t&#233; rejet&#233;e.

En voici la raison :
{REFUSEREASON}

{REGARDS}',
);

$txt['emailtemplate_admin_approve_accept'] = array(
	'desc' => 'Le mail envoyé à l'\utilisateur si son compte vient d\'être activé par un administrateur ou autre sans qu\'il ne soit intervenu.',
	'subject' => 'Bienvenue sur {FORUMNAME}',
	'body' => 'Bienvenue, {REALNAME} !

Votre compte a &#233;t&#233; activ&#233; manuellement par l\'administrateur et vous pouvez maintenant vous connecter et poster. Votre identifiant est : {USERNAME}
Si vous oubliez votre mot de passe, vous pouvez le r&#233;tablir sur {FORGOTPASSWORDLINK}.
Vous pouvez aussi consulter votre profil sur {PROFILELINK}.

{REGARDS}',
);

$txt['emailtemplate_admin_approve_activation'] = array(
	'desc' => 'Le mail envoyé à l'\utilisateur quand son compte a été approuvé par l\'administrateur.',
	'subject' => 'Bienvenue sur {FORUMNAME}',
	'body' => 'Bienvenue, {REALNAME} !

Votre compte sur {FORUMNAME} a &#233;t&#233; approuv&#233; par l\'administrateur du forum, et doit &#234;tre maintenant activ&#233; avant de pouvoir commencer &#224; poster. Veuillez utiliser le lien ci-dessous pour activer votre compte :

{ACTIVATIONLINK}

En cas de souci avec l\'activation, merci d\'aller sur {ACTIVATIONLINKWITHOUTCODE} et d\'y entrer le code "{ACTIVATIONCODE}".

{REGARDS}',
);

$txt['emailtemplate_admin_approve_reject'] = array(
	'desc' => 'Le mail envoyé à l'\utilisateur si son compte, après enregistrement et mise en attente d\'approbation, a été rejeté par l\'administrateur.',
	'subject' => 'Inscription rejet&#233;e',
	'body' => '{USERNAME},

Malheureusement, votre demande pour rejoindre {FORUMNAME} a &#233;t&#233; rejet&#233;e.

{REGARDS}',
);

$txt['emailtemplate_admin_approve_delete'] = array(
	'desc' => 'Le mail envoyé à l'\utilisateur quand son compte est supprimé.',
	'subject' => 'Compte supprim&#233;',
	'body' => '{USERNAME},

Votre compte sur {FORUMNAME} a &#233;t&#233; supprim&#233;. L\'une des raisons possibles peut &#234;tre que vous n\'avez jamais activ&#233; votre compte, auquel cas vous devriez pouvoir vous r&#233;inscrire.

{REGARDS}',
);

$txt['emailtemplate_admin_approve_remind'] = array(
	'desc' => 'Le mail envoyé à l'\utilisateur quand son compte est en attente de confirmation e-mail et qu\'aucune action n\'a été entreprise.',
	'subject' => 'Rappel d\'inscription',
	'body' => '{REALNAME},

Vous n\'avez pas encore activ&#233; votre compte sur {FORUMNAME}.

Veuillez utiliser le lien ci-dessous pour activer votre compte :
{ACTIVATIONLINK}

En cas de souci avec l\'activation, merci d\'aller sur {ACTIVATIONLINKWITHOUTCODE} et d\'y entrer le code "{ACTIVATIONCODE}".

{REGARDS}',
);

$txt['emailtemplate_admin_register_activate'] = array(
	'desc' => 'Le mail envoyé à l'\utilisateur si son compte a été créé par l\'administrateur mais nécessite une confirmation par e-mail.',
	'subject' => 'Bienvenue sur {FORUMNAME}',
	'body' => 'L\'administrateur de {FORUMNAME} vous a inscrit sur son forum. Votre identifiant est {USERNAME} et votre mot de passe est {PASSWORD}.

Avant de pouvoir vous connecter, vous devez d\'abord activer votre compte en suivant ce lien :

{ACTIVATIONLINK}

En cas de souci avec l\'activation, rendez-vous sur {ACTIVATIONLINKWITHOUTCODE} et entrez-y le code "{ACTIVATIONCODE}".

{REGARDS}',
);

$txt['emailtemplate_admin_register_immediate'] = array(
	'desc' => 'Le mail envoyé à l'\utilisateur si son compte a été créé par l\'administrateur et qu\'aucune action n\'est requise.',
	'subject' => 'Bienvenue sur {FORUMNAME}',
	'body' => 'L\'administrateur de {FORUMNAME} vous a inscrit sur son forum. Votre identifiant est {USERNAME} et votre mot de passe est {PASSWORD}.

Vous pouvez visiter {FORUMNAME} en vous rendant sur {SCRIPTURL} dans votre navigateur web.

{REGARDS}',
);

$txt['emailtemplate_new_announcement'] = array(
	'desc' => 'Le mail envoyé aux utilisateurs quand l\'administrateur ou un modérateur envoie une annonce au forum.',
	'subject' => 'Nouvelle annonce : {TOPICSUBJECT}',
	'body' => '{MESSAGE}

Pour vous d&#233;sabonner de ces annonces, connectez-vous au forum et d&#233;cochez la case "Recevoir les annonces du forum et les notifications importantes par e-mail." dans votre profil.

Vous pouvez voir l\'annonce compl&#232;te en suivant ce lien :
{TOPICLINK}

{REGARDS}',
);

$txt['emailtemplate_notify_boards_once_body'] = array(
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
);

$txt['emailtemplate_notify_boards_once'] = array(
	'subject' => 'Nouveau sujet : {TOPICSUBJECT}',
	'body' => 'Un nouveau sujet, \'{TOPICSUBJECT}\', a &#233;t&#233; cr&#233;&#233; sur une section que vous surveillez.

Vous pouvez le voir ici :
{TOPICLINK}

D\'autres sujets ont pu &#234;tre post&#233;s, mais vous ne recevrez pas d\'autres e-mails de notification tant que vous ne serez pas retourn&#233; sur cette section et que vous n\'en aurez pas lu quelques uns.

Pour vous d&#233;sabonner des nouveaux sujets de cette section, utilisez ce lien :
{UNSUBSCRIBELINK}

{REGARDS}',
);

$txt['emailtemplate_notify_boards_body'] = array(
	'subject' => 'Nouveau sujet : {TOPICSUBJECT}',
	'body' => 'Un nouveau sujet \'{TOPICSUBJECT}\', a &#233;t&#233; cr&#233;&#233; sur une section que vous surveillez.

Vous pouvez le voir ici
{TOPICLINK}

Le texte du sujet est affich&#233; ci-dessous :
{MESSAGE}

Pour vous d&#233;sabonner des nouveaux sujets de cette section, utilisez ce lien :
{UNSUBSCRIBELINK}

{REGARDS}',
);

$txt['emailtemplate_notify_boards'] = array(
	'subject' => 'Nouveau sujet : {TOPICSUBJECT}',
	'body' => 'Un nouveau sujet, \'{TOPICSUBJECT}\', a &#233;t&#233; cr&#233;&#233; sur une section que vous surveillez.

Vous pouvez le voir ici
{TOPICLINK}

Pour vous d&#233;sabonner des nouveaux sujets de cette section, utilisez ce lien :
{UNSUBSCRIBELINK}

{REGARDS}',
);

$txt['emailtemplate_request_membership'] = array(
	'subject' => 'Demande de nouveau groupe',
	'body' => '{RECPNAME},

{APPYNAME} a demand&#233; l\'adh&#233;sion au groupe "{GROUPNAME}". L\'utilisateur a donn&#233; la raison suivante :

{REASON}

Vous pouvez approuver ou rejeter cette demande en cliquant sur le lien ci-dessous :

{MODLINK}

{REGARDS}',
);

$txt['emailtemplate_paid_subscription_reminder'] = array(
	'subject' => 'Souscription sur le point d\'expirer {FORUMNAME}',
	'body' => '{REALNAME},

L\'une de vos souscriptions sur {FORUMNAME} est sur le point d\'expirer. Si vous aviez choisi un renouvellement automatique lors de votre souscription initiale, vous n\'avez pas besoin de faire quoique ce soit - sinon, vous souhaitez peut-&#234;tre renouveller votre souscription une fois de plus. Voici un peu plus de d&#233;tails :

Nom de la souscription : {SUBSCRNAME}
Date d\'expiration : {END_DATE}

Pour &#233;diter vos souscriptions, veuillez visiter l\'URL suivante :
{PROFILELINKSUBS}

{REGARDS}',
);

$txt['emailtemplate_activate_reactivate'] = array(
	'subject' => 'Bon retour sur {FORUMNAME}',
	'body' => 'Pour pouvoir valider &#224; nouveau votre adresse e-mail, votre compte a &#233;t&#233; d&#233;sactiv&#233;. Cliquez sur le lien suivant pour le r&#233;activer :
{ACTIVATIONLINK}

Si vous avez un probl&#232;me quelconque avec l\'activation, veuillez aller sur {ACTIVATIONLINKWITHOUTCODE} et utiliser le code "{ACTIVATIONCODE}".

{REGARDS}',
);

$txt['emailtemplate_forgot_password'] = array(
	'subject' => 'Nouveau mot de passe pour {FORUMNAME}',
	'body' => 'Cher {REALNAME},
Cet e-mail a &#233;t&#233; envoy&#233; car la fonction \'mot de passe oubli&#233;\' a &#233;t&#233; utilis&#233;e pour votre compte. Pour &#233;tablir un nouveau mot de passe, cliquez sur le lien suivant :
{REMINDLINK}

IP : {IP}
Username : {USERNAME}

{REGARDS}',
);

$txt['emailtemplate_scheduled_approval'] = array(
	'subject' => 'R&#233;sum&#233; des messages en attente d\'approbation sur {FORUMNAME}',
	'body' => '{REALNAME},

Cet e-mail contient un r&#233;sum&#233; de tous les items en attente d\'approbation sur {FORUMNAME}.

{MESSAGE}

Veuillez vous connecter au forum pour passer en revue ces items.
{SCRIPTURL}

{REGARDS}',
);

$txt['emailtemplate_send_topic'] = array(
	'subject' => 'Sujet : {TOPICSUBJECT} (par {SENDERNAMEMANUAL})',
	'body' => '{RECPNAMEMANUAL},

Je me permets de vous recommander le sujet intitul&#233; "{TOPICSUBJECT}" sur le forum {FORUMNAME}. Pour l\'afficher, veuillez cliquer sur le lien suivant :
{TOPICLINK}

Cordialement,

{SENDERNAMEMANUAL}',
);

$txt['emailtemplate_send_topic_comment'] = array(
	'subject' => 'Sujet : {TOPICSUBJECT} (par {SENDERNAMEMANUAL})',
	'body' => '{RECPNAMEMANUAL},

Je me permets de vous recommander le sujet intitul&#233; "{TOPICSUBJECT}" sur le forum {FORUMNAME}. Pour l\'afficher, veuillez cliquer sur le lien suivant :

{TOPICLINK}

Voici mon commentaire &#224; ce sujet :
{COMMENT}

Cordialement,

{SENDERNAMEMANUAL}',
);

$txt['emailtemplate_send_email'] = array(
	'subject' => '{EMAILSUBJECT}',
	'body' => '{EMAILBODY}',
);

$txt['emailtemplate_report_to_moderator'] = array(
	'subject' => 'Message rapport&#233; : {TOPICSUBJECT} par {POSTERNAME}',
	'body' => 'Le message suivant, "{TOPICSUBJECT}" par {POSTERNAME} a &#233;t&#233; rapport&#233; par {REPORTERNAME} sur une section que vous mod&#233;rez :

Le sujet : {TOPICLINK}
Centre de mod&#233;ration : {REPORTLINK}

Le rapporteur a fait le commentaire suivant :
{COMMENT}

{REGARDS}',
);

$txt['emailtemplate_change_password'] = array(
	'subject' => 'D&#233;tails du nouveau mot de passe',
	'body' => 'Bonjour, {REALNAME} !

Vos d&#233;tails de connexion sur {FORUMNAME} ont &#233;t&#233; chang&#233;s et votre mot de passe r&#233;initialis&#233;. Voici ci-dessous les d&#233;tails de votre nouvelle connexion.

Votre identifiant est "{USERNAME}" et votre mot de passe est "{PASSWORD}".

Une fois connect&#233;, vous pouvez changer votre mot de passe en allant sur la page de votre profil :

{SCRIPTURL}?action=profile

{REGARDS}',
);

$txt['emailtemplate_register_activate'] = array(
	'subject' => 'Bienvenue sur {FORUMNAME}',
	'body' => 'Vous &#234;tes maintenant inscrit sur {FORUMNAME}, {REALNAME} !

L\'identifiant de votre compte est {USERNAME} et son mot de passe est {PASSWORD} (vous pourrez le changer par la suite.)

Avant de pouvoir vous connecter, vous devez d\'abord activer votre compte. Pour ce faire, veuillez suivre ce lien :

{ACTIVATIONLINK}

Si vous avez un probl&#232;me quelconque avec l\'activation, veuillez utiliser le code "{ACTIVATIONCODE}".

{REGARDS}',
);

$txt['emailtemplate_register_activate_approve'] = array(
	'subject' => 'Bienvenue sur {FORUMNAME}',
	'body' => 'Merci de vous &#234;tre inscrit &#224; {FORUMNAME}. Votre nom d\'utilisateur est {USERNAME}. Si vous oubliez votre mot de passe, vous pouvez le changer en allant sur {FORGOTPASSWORDLINK}.

Avant de vous connecter, vous devrez d\'abord activer votre compte en cliquant sur ce lien :

{ACTIVATIONLINK}

Si vous avez des probl&#232;mes avec l\'activation, allez sur {ACTIVATIONLINKWITHOUTCODE} et entrez le code "{ACTIVATIONCODE}".

Une fois ce processus termin&#233;, l\'administrateur v&#233;rifiera votre inscription et l\'activera d&#233;finitivement le cas &#233;ch&#233;ant. Vous recevrez alors un nouvel e-mail pour vous pr&#233;venir.

{REGARDS}',
);

$txt['emailtemplate_register_coppa'] = array(
	'subject' => 'Bienvenue sur {FORUMNAME}',
	'body' => 'Vous &#234;tes maintenant inscrit sur {FORUMNAME}, {REALNAME} !

L\'identifiant de votre compte est {USERNAME} et son mot de passe est {PASSWORD} (que vous pourrez changer ensuite.)

Avant de pouvoir vous connecter, l\'administrateur de ce forum souhaite obtenir l\'approbation de votre parent/tuteur pour votre adh&#233;sion &#224; cette communaut&#233;. Pour plus d\'informations, veuillez consulter le lien ci-dessous :

{COPPALINK}

{REGARDS}',
);

$txt['emailtemplate_register_immediate'] = array(
	'subject' => 'Bienvenue sur {FORUMNAME}',
	'body' => 'Vous &#234;tes maintenant inscrit sur {FORUMNAME}, {REALNAME} !

L\'identifiant de votre compte est {USERNAME} et son mot de passe est {PASSWORD}.

Une fois connect&#233;, vous pouvez changer votre mot de passe en allant sur la page de votre profil :

{FORGOTPASSWORDLINK}

{REGARDS}',
);

$txt['emailtemplate_register_pending'] = array(
	'subject' => 'Bienvenue sur {FORUMNAME}',
	'body' => 'Votre demande d\'inscription sur {FORUMNAME} a &#233;t&#233; re&#231;ue, {REALNAME}.

L\'identifiant de votre compte est {USERNAME} et son mot de passe est {PASSWORD}.

Avant de pouvoir vous connecter, votre demande sera d\'abord &#233;tudi&#233;e et valid&#233;e. Vous recevrez ensuite un e-mail de confirmation.

{REGARDS}',
);

$txt['emailtemplate_notification_reply'] = array(
	'subject' => 'R&#233;ponse &#224; un sujet : {TOPICSUBJECT}',
	'body' => 'Une r&#233;ponse a &#233;t&#233; post&#233;e sur un sujet que vous surveillez par {POSTERNAME}.

Voir la r&#233;ponse :
{TOPICLINK}

Pour vous d&#233;sabonner de ce sujet, utilisez ce lien :
{UNSUBSCRIBELINK}

{REGARDS}',
);

$txt['emailtemplate_notification_reply_body'] = array(
	'subject' => 'R&#233;ponse &#224; un sujet : {TOPICSUBJECT}',
	'body' => 'Une r&#233;ponse a &#233;t&#233; post&#233;e par {POSTERNAME} sur un sujet que vous surveillez.

Voir la r&#233;ponse :
{TOPICLINK}

Pour vous d&#233;sabonner de ce sujet, utilisez ce lien :
{UNSUBSCRIBELINK}

Le texte de cette r&#233;ponse est affich&#233; ci-dessous :
{MESSAGE}

{REGARDS}',
);

$txt['emailtemplate_notification_reply_once'] = array(
	'subject' => 'R&#233;ponse &#224; un sujet : {TOPICSUBJECT}',
	'body' => 'Une r&#233;ponse a &#233;t&#233; post&#233;e par {POSTERNAME} sur un sujet que vous surveillez.

Voir la r&#233;ponse :
{TOPICLINK}

Pour vous d&#233;sabonner de ce sujet, utilisez ce lien :
{UNSUBSCRIBELINK}

D\'autres r&#233;ponses ont pu &#234;tre post&#233;es, mais vous ne recevrez pas d\'autres e-mails de notification tant que vous n\'aurez pas lu le sujet.

{REGARDS}',
);

$txt['emailtemplate_notification_reply_body_once'] = array(
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
);

$txt['emailtemplate_notification_pin'] = array(
	'subject' => 'Sujet &#233;pingl&#233; : {TOPICSUBJECT}',
	'body' => 'Un sujet que vous surveillez a &#233;t&#233; &#233;pingl&#233; ou d&#233;pingl&#233; par {POSTERNAME}.

Voir le sujet :
{TOPICLINK}

Pour vous d&#233;sabonner de ce sujet, utilisez ce lien :
{UNSUBSCRIBELINK}

{REGARDS}',
);

$txt['emailtemplate_notification_lock'] = array(
	'subject' => 'Sujet bloqu&#233; : {TOPICSUBJECT}',
	'body' => 'Un sujet que vous surveillez a &#233;t&#233; bloqu&#233; par {POSTERNAME}.

Voir le sujet :
{TOPICLINK}

Pour vous d&#233;sabonner de ce sujet, utilisez ce lien :
{UNSUBSCRIBELINK}

{REGARDS}',
);

$txt['emailtemplate_notification_unlock'] = array(
	'subject' => 'Sujet d&#233;bloqu&#233; : {TOPICSUBJECT}',
	'body' => 'Un sujet que vous surveillez a &#233;t&#233; d&#233;bloqu&#233; par {POSTERNAME}.

Voir le sujet :
{TOPICLINK}

Pour vous d&#233;sabonner de ce sujet, utilisez ce lien :
{UNSUBSCRIBELINK}

{REGARDS}',
);

$txt['emailtemplate_notification_remove'] = array(
	'subject' => 'Sujet supprim&#233; : {TOPICSUBJECT}',
	'body' => 'Un sujet que vous surveillez a &#233;t&#233; supprim&#233; par {POSTERNAME}.

{REGARDS}',
);

$txt['emailtemplate_notification_move'] = array(
	'subject' => 'Sujet d&#233;plac&#233; : {TOPICSUBJECT}',
	'body' => 'Un sujet que vous surveillez a &#233;t&#233; d&#233;plac&#233; dans une autre section par {POSTERNAME}.

Voir le sujet :
{TOPICLINK}

Pour vous d&#233;sabonner de ce sujet, utilisez ce lien :
{UNSUBSCRIBELINK}

{REGARDS}',
);

$txt['emailtemplate_notification_merge'] = array(
	'subject' => 'Sujet fusionn&#233; : {TOPICSUBJECT}',
	'body' => 'Un sujet que vous surveillez a &#233;t&#233; fusionn&#233; avec un autre sujet par {POSTERNAME}.

Voir le nouveau sujet fusionn&#233; :
{TOPICLINK}

Pour vous d&#233;sabonner de ce sujet, utilisez ce lien :
{UNSUBSCRIBELINK}

{REGARDS}',
);

$txt['emailtemplate_notification_split'] = array(
	'subject' => 'Sujet s&#233;par&#233; : {TOPICSUBJECT}',
	'body' => 'Un sujet que vous surveillez a &#233;t&#233; divis&#233; en deux sujets par {POSTERNAME}.

Pour voir ce qu\'il reste de ce sujet :
{TOPICLINK}

Pour vous d&#233;sabonner de ce sujet, utilisez ce lien :
{UNSUBSCRIBELINK}

{REGARDS}',
);

$txt['emailtemplate_admin_notify'] = array(
	'subject' => 'Un nouveau membre s\'est inscrit',
	'body' => '{USERNAME} vient juste de s\'inscrire comme nouveau membre sur votre forum. Cliquez sur le lien ci-dessous pour voir son profil.
{PROFILELINK}

{REGARDS}',
);

$txt['emailtemplate_admin_notify_approval'] = array(
	'subject' => 'Un nouveau membre s\'est inscrit',
	'body' => '{USERNAME} vient juste de s\'inscrire comme nouveau membre sur votre forum. Cliquez sur le lien ci-dessous pour voir son profil.
{PROFILELINK}

Avant que ce membre puisse commencer &#224; poster, son compte doit d\'abord &#234;tre approuv&#233;. Cliquez sur le lien ci-dessous pour aller sur la page d\'approbation.
{APPROVALLINK}

{REGARDS}',
);

$txt['emailtemplate_admin_attachments_full'] = array(
	'subject' => 'Urgent ! Le dossier des fichiers joints est presque plein',
	'body' => '{REALNAME},

Le dossier des fichiers joints sur {FORUMNAME} est presque plein. Veuillez visiter le forum pour apporter une solution.

Notez que, si le dossier des fichiers joints est plein, les utilisateurs de ce forum ne pourront plus ni poster de nouvelles pi&#232;ces jointes, ni poster de nouveaux avatars (si cela &#233;tait permis).

{REGARDS}',
);

$txt['emailtemplate_paid_subscription_refund'] = array(
	'subject' => 'Abonnement rembours&#233;',
	'body' => '{REALNAME},

Un membre a &#233;t&#233; rembours&#233; pour un abonnement. Voici les d&#233;tails de cet abonnement :

	Nom de l\'abonnement : {SUBSCRNAME}
	Nom de l\'utilisateur : {REFUNDNAME} ({REFUNDUSER})
	Date : {DATE}

Vous pouvez afficher le profil de cet utilisateur via le lien ci-dessous :
{PROFILELINK}

{REGARDS}',
);

$txt['emailtemplate_paid_subscription_new'] = array(
	'subject' => 'Nouvelle souscription',
	'body' => '{REALNAME},

Un membre s\'est abonn&#233; &#224; votre forum. Voici les d&#233;tails de cet abonnement :

	Nom de l\'abonnement : {SUBSCRNAME}
	Nom de l\'utilisateur : {SUBNAME} ({SUBUSER})
	Son adresse e-mail : {SUBEMAIL}
	Prix : {PRICE}
	Date : {DATE}

Vous pouvez afficher le profil de cet utilisateur via le lien ci-dessous :
{PROFILELINK}

{REGARDS}',
);

$txt['emailtemplate_paid_subscription_error'] = array(
	'subject' => 'Une erreur est survenue lors de la souscription',
	'body' => '{REALNAME},

L\'erreur suivante est survenue lors de cette souscription
----------------------------------------------------------
{SUBERROR}

{REGARDS}',
);
