<?php
// Version: 2.0; EmailTemplates

// Since all of these strings are being used in emails, numeric entities should be used.

// Do not translate anything that is between {}, they are used as replacement variables and MUST remain exactly how they are.

$txt['regards_team'] = 'Mit freundlichen Grüßen,
Das {FORUMNAME} Team.';

$txt['scheduled_approval_email_topic'] = 'Die folgenden Themen warten auf Bestätigung:';
$txt['scheduled_approval_email_msg'] = 'Die folgenden Beiträge warten auf Bestätigung:';

$txt['emailtemplate_resend_activate_message'] = array(
	'desc' => 'Diese Email wird an einen Benutzer gesendet, der sich registriert hat und dessen Account per Email bestätigt werden muss',
	'subject' => 'Willkommen auf {FORUMNAME}',
	'body' => 'Vielen Dank für deine Registrierung auf {FORUMNAME}. Dein Benutzername lautet {USERNAME}. Falls Du dein Passwort vergessen haben solltest, kannst du es jederzeit unter folgendem Link zurücksetzen: {FORGOTPASSWORDLINK}.

Bevor du dich anmelden kannst, muss dein Account noch durch Klick auf folgendem Link aktiviert werden:

{ACTIVATIONLINK}

Solltest du Probleme mit der Aktivierung haben, besuche bitte {ACTIVATIONLINKWITHOUTCODE} und gebe den folgenden Code ein: "{ACTIVATIONCODE}".

{REGARDS}',
);

$txt['emailtemplate_mc_group_approve'] = array(
	'desc' => 'Die Email, die an einen Benutzer verschickt wird, der eine Gruppenbeitrittsanfrage gestellt hat und akzeptiert wurde.',
	'subject' => 'Bestätigung der Gruppenmitgliedschaft',
	'body' => '{REALNAME},

Wir freuen uns dir mitteilen zu können, dass deine Anfrage zum Beitritt der Gruppe "{GROUPNAME}" auf {FORUMNAME} bestätigt wurde. Dein Account wurde entsprechend umgestellt.

{REGARDS}',
);

$txt['emailtemplate_mc_group_reject'] = array(
	'desc' => 'Die Email, die an einen Benutzer verschickt wird, der eine Gruppenbeitrittsanfrage gestellt hat und abgelehnt wurde.',
	'subject' => 'Ablehung der Gruppenmitgliedschaft',
	'body' => '{REALNAME},

Es tut uns leid dir mitteilen zu müssen, dass deine Anfrage zum Beitritt der Gruppe "{GROUPNAME}" auf {FORUMNAME} abgelehnt wurde.

{REGARDS}',
);

$txt['emailtemplate_mc_group_reject_reason'] = array(
	'desc' => 'Die Email, die an einen Benutzer verschickt wird, der eine Gruppenbeitrittsanfrage gestellt hat und abgelehnt wurde (mit Begründung).',
	'subject' => 'Ablehung der Gruppenmitgliedschaft',
	'body' => '{REALNAME},

Es tut uns leid dir mitteilen zu müssen, dass deine Anfrage zum Beitritt der Gruppe "{GROUPNAME}" auf {FORUMNAME} abgelehnt wurde.

Der Grund für die Ablehnung: {REFUSEREASON}

{REGARDS}',
);

$txt['emailtemplate_admin_approve_accept'] = array(
	'desc' => 'Die Email, die an einen Benutzer verschickt wird, wenn sein Account manuell aktiviert wurde (z.B. nicht durch Emailbestätigung) durch den Administrator.',
	'subject' => 'Willkommen auf {FORUMNAME}',
	'body' => 'Willkommen, {REALNAME}!

Dein Benutzerkonto wurde manuell vom Administrator aktiviert. Du kannst dich nun anmelden und Beiträge schreiben. Dein Benutzername lautet: {USERNAME}. Falls du dein Passwort vergessen solltest, kannst du jederzeit hier ein neues Passwort beantragen: {FORGOTPASSWORDLINK}.

{REGARDS}',
);

$txt['emailtemplate_admin_approve_activation'] = array(
	'desc' => 'Die Email, die an einen Benutzer verschickt wird, wenn sein Account vom Administrator bestätigt wurde',
	'subject' => 'Willkommen auf {FORUMNAME}',
	'body' => 'Willkommen, {REALNAME}!

Dein Benutzerkonto auf {FORUMNAME} wurde durch einen Administrator bestätigt. Bevor du dich anmelden kannst, musst du dein Benutzerkonto aktivieren:

{ACTIVATIONLINK}

Solltest du Probleme bei der Aktivierung haben, gehe zu folgender Adresse {ACTIVATIONLINKWITHOUTCODE} und gebe den folgenden Code ein: "{ACTIVATIONCODE}".

{REGARDS}',
);

$txt['emailtemplate_admin_approve_reject'] = array(
	'desc' => 'Die Email, die an einen Benutzer verschickt wird, wenn sein Account vom Administrator bestätigt werden muss, aber die Registrierung verweigert wurde.',
	'subject' => 'Anmeldung verwehrt',
	'body' => '{USERNAME},

Leider wurde deine Registrierung auf {FORUMNAME} abgewiesen.

{REGARDS}',
);

$txt['emailtemplate_admin_approve_delete'] = array(
	'desc' => 'Die Email, die an einen Benutzer verschickt wird, wenn sein Benutzerkonto gelöscht wurde.',
	'subject' => 'Benutzerkonto gelöscht',
	'body' => '{USERNAME},

Dein Benutzerkonto auf {FORUMNAME} wurde gelöscht. Die Ursache kann z.B. ein nicht aktivierter Account sein. In diesem Fall kannst du dich gerne neu registrieren.

{REGARDS}',
);

$txt['emailtemplate_admin_approve_remind'] = array(
	'desc' => 'Die Email, die an einen Benutzer verschickt wird, wenn die Mailbestätigung noch aussteht.',
	'subject' => 'Erinnerung über eine ausstehende Anmeldung',
	'body' => '{REALNAME},

Du hast dein Benutzerkonto noch nicht auf {FORUMNAME} aktiviert.

Bitte klicke auf den unten stehenden Link, um deinen Account zu aktivieren:
{ACTIVATIONLINK}

Solltest du Probleme bei der Aktivierung haben, gehe zu folgender Adresse {ACTIVATIONLINKWITHOUTCODE} und gebe den folgenden Code ein: "{ACTIVATIONCODE}".

{REGARDS}',
);

$txt['emailtemplate_admin_register_activate'] = array(
	'desc' => 'Die Email, die an einen Benutzer verschickt wird, dessen Account über das Adminpanel erstellt wurde und eine Mailbestätigung erfordert.',
	'subject' => 'Willkommen auf {FORUMNAME}',
	'body' => 'Ein Benutzerkonto wurde für dich auf {FORUMNAME} erstellt. Dein Benutzername lautet: {USERNAME} und dein Passwort lautet: {PASSWORD}.

Bevor du dich anmelden kannt, muss dein Benutzerkonto noch aktiviert werden:

{ACTIVATIONLINK}

Solltest du Probleme bei der Aktivierung haben, gehe zu folgender Adresse {ACTIVATIONLINKWITHOUTCODE} und gebe den folgenden Code ein: "{ACTIVATIONCODE}".

{REGARDS}',
);

$txt['emailtemplate_admin_register_immediate'] = array(
	'desc' => 'Die Email, die an einen Benutzer verschickt wird, dessen Account über das Adminpanel erstellt wurde und bei dem keine weitere Aktion erforderlich ist.',
	'subject' => 'Willkommen auf {FORUMNAME}',
	'body' => 'Ein Benutzerkonto wurde für dich auf {FORUMNAME} erstellt. Dein Benutzername lautet: {USERNAME} und dein Passwort lautet: {PASSWORD}.

Du kannst nun {FORUMNAME} mit Klick auf den Link: {SCRIPTURL} besuchen.

{REGARDS}',
);

$txt['emailtemplate_new_announcement'] = array(
	'desc' => 'Diese Email wird verwendet, wenn ein Administraor / Moderator eine Ankündigung postet.',
	'subject' => 'Neue Ankündigung: {TOPICSUBJECT}',
	'body' => '{MESSAGE}

Um die Benachrichtigung für Ankündigungen zu deaktivieren, melde dich im Forum an, gehe auf dein Profil und entferne die Auswahl bei: "Erhalte Ankündigungen und wichtige Informationen per Mail.".

Du kannst die komplette Ankündigung hier lesen:
{TOPICLINK}

{REGARDS}',
);

$txt['emailtemplate_notify_boards_once_body'] = array(
	'desc' => 'Die Email, die an einen Benutzer verschickt wird, die Benachrichtigungen für neue Themen in einem beobachteten Forum aktiviert haben (mit Body).',
	'subject' => 'Neues Thema: {TOPICSUBJECT}',
	'body' => 'Ein neues Thema wurde in einem von dir beobachteten Forum erstellt: \'{TOPICSUBJECT}\'

Du findest den Beitrag hier:
{TOPICLINK}

Es können mehrere Themen veröffentlicht worden sein. Du erhälst erst wieder Benachrichtigungen über neue Themen, wenn diese gelesen wurden.

Inhalt des Themas:
{MESSAGE}

Hier kannst du die Benachrichtigungen über neue Beiträge in diesem Forum abbestellen:
{UNSUBSCRIBELINK}

{REGARDS}',
);

$txt['emailtemplate_notify_boards_once'] = array(
	'desc' => 'Die Email, die an einen Benutzer verschickt wird, der Benachrichtigungen für neue Themen in einem beobachteten Forum aktiviert hat (eine Benachrichtigung).',
	'subject' => 'Neues Thema: {TOPICSUBJECT}',
	'body' => 'Ein neues Thema wurde in einem von dir beobachteten Forum erstellt: \'{TOPICSUBJECT}\'

Du findest den Beitrag hier:
{TOPICLINK}

Es können mehrere Themen veröffentlicht worden sein. Du erhälst erst wieder Benachrihtigungen über neue Themen, wenn diese gelesen wurden.

Hier kannst du die Benachrichtigungen über neue Beiträge aus diesem Forum abbestellen:
{UNSUBSCRIBELINK}

{REGARDS}',
);

$txt['emailtemplate_notify_boards_body'] = array(
	'desc' => 'Die Email, die an einen Benutzer verschickt wird, der Benachrichtigungen über neue Themen aktiviert hat (mit Body).',
	'subject' => 'Neues Thema: {TOPICSUBJECT}',
	'body' => 'Ein neues Thema wurde in einem von dir beobachteten Forum erstellt: \'{TOPICSUBJECT}\'

Du findest den Beitrag hier:
{TOPICLINK}

Inhalt des Themas:
{MESSAGE}

Hier kannst du die Benachrichtigungen über neue Themen in diesem Forum abbestellen:
{UNSUBSCRIBELINK}

{REGARDS}',
);

$txt['emailtemplate_notify_boards'] = array(
	'desc' => 'Die Mail, die an Benutzer verschickt wird, die Benachrichtigungen in Foren aktiviert haben.',
	'subject' => 'Neues Thema: {TOPICSUBJECT}',
	'body' => 'Ein neues Thema, \'{TOPICSUBJECT}\', wurde in einem von die beobachteten Forum erstellt.

Das Thema findest du hier
{TOPICLINK}

Hier kannst du die Benachrichtigungen über neue Beiträge in diesem Forum abbestellen:
{UNSUBSCRIBELINK}

{REGARDS}',
);

$txt['emailtemplate_request_membership'] = array(
	'desc' => 'Die Email, die an Moderatoren verschickt wird, wenn ein Benutzer eine Gruppenbeitrittsanfrage stellt.',
	'subject' => 'Neue Gruppenbeitrittsanfrage',
	'body' => '{RECPNAME},

{APPYNAME} hat eine Gruppenmitgliedschaft für die folgende Gruppe beantragt: "{GROUPNAME}". Der Antragsteller hat folgende Begründung abgegeben:

{REASON}

Du kannst diese Anfrage bestätigen oder verwerfen, wenn du auf den folgenden Link klickst:

{MODLINK}

{REGARDS}',
);

$txt['emailtemplate_paid_subscription_reminder'] = array(
	'desc' => 'Die Email, die an einen Benutzer verschickt wird, dessen bezahltes Abonnement bald ausläuft.',
	'subject' => 'Abonnement auf {FORUMNAME} endet bald',
	'body' => '{REALNAME},

Dein Abonnement auf {FORUMNAME} wird demnächst enden. Falls du die automatische Verlängerung aktiviert hast, sind keine weiteren Schritte erforderlich. Andernfalls möchtestt du vielleicht das Abonnement verlängern. Details:

Name des Abonnements: {SUBSCRNAME}
Ablaufdatum: {END_DATE}

Um die Einstellungen zu ändern, klicke hier:
{PROFILELINKSUBS}

{REGARDS}',
);

$txt['emailtemplate_activate_reactivate'] = array(
	'desc' => 'Die Email, die an einen Benutzer verschickt wird, der seine Mailadresse geändert hat und eine Bestätigung der Änderungen notwendig ist.',
	'subject' => 'Willkommen zurück auf {FORUMNAME}',
	'body' => 'Um deine neue Mailadresse zu bestätigen, wurde dein Benutzerkonto deaktiviert. Folge dem Link um dein Benutzerkonto wieder zu aktivieren und die neue Mailadresse zu bestätigen.
{ACTIVATIONLINK}

Solltest du Probleme bei der Aktivierung haben, gehe zu folgender Adresse {ACTIVATIONLINKWITHOUTCODE} und gebe den folgenden Code ein: "{ACTIVATIONCODE}.

{REGARDS}',
);

$txt['emailtemplate_forgot_password'] = array(
	'desc' => 'Die Email, die an einen Benutzer verschickt wird, der die Funktion "Passwort vergessen" verwendet.',
	'subject' => 'Neues Passwort für deinen Account auf {FORUMNAME}',
	'body' => 'Hallo {REALNAME},
Du erhälst diese Email, weil die Passwort vergessen Funktion für dein Benutzerkonto aufgerufen wurde. Klicke hier, um ein neues Passwort für dein Benutzerkonto zu vergeben:
{REMINDLINK}

IP: {IP}
Benutzername: {USERNAME}

{REGARDS}',
);

$txt['emailtemplate_scheduled_approval'] = array(
	'desc' => 'Die Email, die an Moderatoren verschickt wird, mit der Auflistung aller ausstehenden Bestätigungen.',
	'subject' => 'Zusammenfassung der auf Bestätigung wartenden Anfragen auf {FORUMNAME}',
	'body' => '{REALNAME},

Diese Email enthält eine Zusammenfassung über alle ausstehenden Anfragen auf {FORUMNAME}.

{MESSAGE}

Bitte logge dich ein, um fortzufahren.
{SCRIPTURL}

{REGARDS}',
);

$txt['emailtemplate_send_topic'] = array(
	'desc' => 'Die Email, die verschickt wird, wenn ein Benutzer auf "Thema versenden" klickt.',
	'subject' => 'Thema: {TOPICSUBJECT} (Von: {SENDERNAMEMANUAL})',
	'body' => 'Hallo {RECPNAMEMANUAL},
Ich möchte dir einen Link empfehlen: "{TOPICSUBJECT}" auf {FORUMNAME}. Um den Beitrag zu lesen, klicke auf den unten stehenden Link:

{TOPICLINK}

Vielen Dank,

{SENDERNAMEMANUAL}',
);

$txt['emailtemplate_send_topic_comment'] = array(
	'desc' => 'Die Email, die verschickt wird, wenn ein Benutzer auf "Thema versenden" klickt und ein Kommentar hinzugefügt wurde.',
	'subject' => 'Thema: {TOPICSUBJECT} (From: {SENDERNAMEMANUAL})',
	'body' => 'Hallo {RECPNAMEMANUAL},

Ich möchte dir einen Link empfehlen: "{TOPICSUBJECT}" auf {FORUMNAME}. Um den Beitrag zu lesen, klicke auf den unten stehenden Link:

{TOPICLINK}

Es wurde ein Kommentar zu diesem Thema hinzugefügt::
{COMMENT}

Vielen Dank,

{SENDERNAMEMANUAL}',
);

$txt['emailtemplate_send_email'] = array(
	'desc' => 'Ein Platzhalter für die "Email User" Funktion.',
	'subject' => '{EMAILSUBJECT}',
	'body' => '{EMAILBODY}',
);

$txt['emailtemplate_report_to_moderator'] = array(
	'desc' => 'Die Benachrichtigung, die an Moderatoren verschickt wird, wenn ein Beitrag gemeldet wird.',
	'subject' => 'Gemeldeter Beitrag: {TOPICSUBJECT} von {POSTERNAME}',
	'body' => 'Der folgende Beitrag, "{TOPICSUBJECT}" von {POSTERNAME} wurde von {REPORTERNAME} in einem Forum, welches du moderierst gemeldet:

Das Thema: {TOPICLINK}
Moderations-Center: {REPORTLINK}

Der Melder hat folgenden Kommentar geschrieben:
{COMMENT}

{REGARDS}',
);

$txt['emailtemplate_change_password'] = array(
	'desc' => 'Die Email, die verschickt wird, wenn sich das Passwort eines User geändert wurde. Inklusive Ausgabe des neuen Passworts.',
	'subject' => 'Details für dein neues Passwort',
	'body' => 'Hallo, {REALNAME}!

Deine Benutzerdaten auf {FORUMNAME} haben sich geändert und dein Passwort wurde zurückgesetzt. Hier kommen deine neuen Zugangsdaten:.

Dein Benutzername lautet: "{USERNAME}" und dein Passwort lautet: "{PASSWORD}".

Bitte ändere dein Passwort aus Sicherheitsgründen nachdem du dich angemeldet hast. Du findest die Funktion in deinem Profil:

{SCRIPTURL}?action=profile

{REGARDS}',
);

$txt['emailtemplate_register_activate'] = array(
	'desc' => 'Die Email, die verschickt wird, wenn sich ein Benutzer registriert und die Mailadresse validiert werden muss.',
	'subject' => 'Willkommen auf {FORUMNAME}',
	'body' => 'Vielen Dank für die Registrierung auf {FORUMNAME}. Dein Benutzername lautet: {USERNAME}. Falls du das Paswort vergessen solltest, kannst du dieses jederzeit unter folgenden Link zurücksetzen: {FORGOTPASSWORDLINK}.

Bevor du dich anmelden kannst, mußt du Dein Benutzerkonto aktivieren:

{ACTIVATIONLINK}

Solltest du Probleme bei der Aktivierung haben, gehe zu folgender Adresse {ACTIVATIONLINKWITHOUTCODE} und gebe den folgenden Code ein: "{ACTIVATIONCODE}.

{REGARDS}',
);

$txt['emailtemplate_register_activate_approve'] = array(
	'desc' => 'Die Email, die verschickt wird, wenn sich ein Benutzer registriert und der Administrator die Registrierung bestätigen muss.',
	'subject' => 'Willkommen auf {FORUMNAME}',
	'body' => 'Vielen Dank für die Registrierung auf {FORUMNAME}. Dein Benutzername lautet: {USERNAME}. Falls du das Passwort vergessen solltest, kannst du dieses jederzeit unter folgenden Link zurücksetzen: {FORGOTPASSWORDLINK}.

Bevor du dich anmelden kannst, musst du dein Benutzerkonto aktivieren:

{ACTIVATIONLINK}

Solltest du Probleme bei der Aktivierung haben, gehe zu folgender Adresse {ACTIVATIONLINKWITHOUTCODE} und gebe den folgenden Code ein: "{ACTIVATIONCODE}.

Nach deiner Bestätigung wird ein Administrator sich um dein Anliegen kümmern. Die Bestätigung erhälst du in einer separaten Mail.

{REGARDS}',
);

$txt['emailtemplate_register_coppa'] = array(
	'desc' => 'Die Email, die verschickt wird, wenn sich ein Benutzer registriert  aber die COPPA Erklärung von einem Erziehungsberechtigten ausgefüllt werden muss.',
	'subject' => 'Willkommen auf {FORUMNAME}',
	'body' => 'Vielen Dank für die Registrierung auf {FORUMNAME}. Dein Benutzername lautet: {USERNAME}. Falls du das Passwort vergessen solltest, kannst du dieses jederzeit unter folgenden Link zurücksetzen: {FORGOTPASSWORDLINK}.

Bevor du dich anmelden kannst, benötigen wir noch die Einwilligung deiner Eltern. Hier erfährst du mehr:

{COPPALINK}

{REGARDS}',
);

$txt['emailtemplate_register_immediate'] = array(
	'desc' => 'Die Email, die verschickt wird, wenn der Acount dierekt nach der Registrierung aktiv ist.',
	'subject' => 'Willkommen auf {FORUMNAME}',
	'body' => 'Vielen Dank für die Registrierung auf {FORUMNAME}.

Dein Benutzername lautet: {USERNAME}.

Falls du das Passwort vergessen solltest, kannst du dieses jederzeit unter folgenden Link zurücksetzen:

{FORGOTPASSWORDLINK}

{REGARDS}',
);

$txt['emailtemplate_register_pending'] = array(
	'desc' => 'Die Email, die verschickt wird, wenn sich ein Benutzer registriert und der Account noch vom Administrator verifiziert werden muss.',
	'subject' => 'Willkommen auf {FORUMNAME}',
	'body' => 'Deine Registrierung auf {FORUMNAME} haben wir erhalten, {REALNAME}.

Dein registrierter Benutzername lautet: {USERNAME}. Falls du das Passwort vergessen solltest, kannst du dieses jederzeit unter folgendem Link zurücksetzen: {FORGOTPASSWORDLINK}.

Bevor du dich anmelden kannst, muss dein Benutzerkonto noch durch den Administrator freigeschaltet werden. Du erhältst eine Benachrichtigung wenn der Registrierungsprozess abgeschlossen ist.

{REGARDS}',
);

$txt['emailtemplate_notification_reply'] = array(
	'desc' => 'Die Email, die verschickt wird, wenn ein Benutzer ein Thema verfolgt in dem eine Antwort geschrieben wurde.',
	'subject' => 'Antwort im Thema: {TOPICSUBJECT}',
	'body' => 'Eine neue Antwort wurde von {POSTERNAME} in einem Beitrag erstellt, den du beobachtest.

Antwort lesen:
{TOPICLINK}

Deaktiviere die Benachrichtigung über dieses Thema:
{UNSUBSCRIBELINK}

{REGARDS}',
);

$txt['emailtemplate_notification_reply_body'] = array(
	'desc' => 'Die Email, die verschickt wird, wenn ein Benutzer ein Thema verfolgt in dem eine Antwort geschrieben wurde. Der Text ist eingefügt.',
	'subject' => 'Antwort im Thema: {TOPICSUBJECT}',
	'body' => 'Eine neue Antwort wurde von {POSTERNAME} in einem Beitrag erstellt, den du beobachtest.

Antwort lesen:
{TOPICLINK}

Deaktiviere die Benachrichtigung über dieses Thema:
{UNSUBSCRIBELINK}

Die Antwort die erstellt wurde:
{MESSAGE}

{REGARDS}',
);

$txt['emailtemplate_notification_reply_once'] = array(
	'desc' => 'Die Email, die verschickt wird, wenn ein Benutzer ein Thema folgt und nur bei der ersten Antwort benachrichtigt wird.',
	'subject' => 'Antwort im Thema: {TOPICSUBJECT}',
	'body' => 'Eine neue Antwort wurde von {POSTERNAME} in einem Beitrag erstellt, den du beobachtest.

Antwort lesen:
{TOPICLINK}

Deaktiviere die Benachrichtigung über dieses Thema:
{UNSUBSCRIBELINK}

Es können mehrere Antworten in diesem Thema geschrieben worden sein. Du erhältst erst wieder Benachrichtigungen über neue Beiträge, wenn diese von dir gelesen wurden.

{REGARDS}',
);

$txt['emailtemplate_notification_reply_body_once'] = array(
	'desc' => 'Die Email, die verschickt wird, wenn ein Benutzer ein Thema folgt und nur bei der ersten Antwort benachrichtigt wird. Antwort ist enthalten.',
	'subject' => 'Antwort im Thema: {TOPICSUBJECT}',
	'body' => 'Eine neue Antwort wurde von {POSTERNAME} in einem Beitrag erstellt, den du beobachtest.

Antwort lesen:
{TOPICLINK}

Deaktiviere die Benachrichtigung über dieses Thema:
{UNSUBSCRIBELINK}

Die Antwort die erstellt wurde:
{MESSAGE}

Es können mehrere Antworten in diesem Thema geschrieben worden sein. Du erhältst erst wieder Benachrichtigungen über neue Beiträge, wenn diese von dir gelesen wurden.


{REGARDS}',
);

$txt['emailtemplate_notification_pin'] = array(
	'desc' => 'Die Email, die verschickt wird, wenn ein Benutzer einem Beitrag folgt, der fixiert oder wieder gelöst wurde.',
	'subject' => 'Fixiertes Thema: {TOPICSUBJECT}',
	'body' => 'Ein Thema, welches du beobachtest, wurde von {POSTERNAME} fixiert.

Thema lesen:
{TOPICLINK}

Deaktiviere die Benachrichtigung über dieses Thema:
{UNSUBSCRIBELINK}

{REGARDS}',
);

$txt['emailtemplate_notification_lock'] = array(
	'desc' => 'Die Email, die verschickt wird, wenn ein Benutzer ein Thema folgt und dieses Thema gesperrt wurde.',
	'subject' => 'Thema gesperrt: {TOPICSUBJECT}',
	'body' => 'Ein Thema, welches du beobachtest, wurde von {POSTERNAME} gesperrt.

Thema lesen:
{TOPICLINK}

Deaktiviere die Benachrichtigung über dieses Thema:
{UNSUBSCRIBELINK}

{REGARDS}',
);

$txt['emailtemplate_notification_unlock'] = array(
	'desc' => 'Die Email, die verschickt wird, wenn ein Benutzer ein Thema folgt und dieses Thema entsperrt wurde',
	'subject' => 'Thema entsperrt: {TOPICSUBJECT}',
	'body' => 'Ein Thema, welches du beobachtest, wurde von {POSTERNAME} entsperrt.

Thema lesen:
{TOPICLINK}

Deaktiviere die Benachrichtigung über dieses Thema:
{UNSUBSCRIBELINK}

{REGARDS}',
);

$txt['emailtemplate_notification_remove'] = array(
	'desc' => 'Die Email, die verschickt wird, wenn ein Benutzer ein Thema folgt und dieses Thema gelöscht wurde',
	'subject' => 'Thema gelöscht: {TOPICSUBJECT}',
	'body' => 'Ein Thema, welches du beobachtest, wurde von {POSTERNAME} gelöscht.

{REGARDS}',
);

$txt['emailtemplate_notification_move'] = array(
	'desc' => 'Die Email, die verschickt wird, wenn ein Benutzer ein Thema folgt und dieses Thema verschoben wurde.',
	'subject' => 'Thema verschoben: {TOPICSUBJECT}',
	'body' => 'Ein Thema, welches du beobachtest, wurde von {POSTERNAME} verschoben.

Thema verschoben nach:
{TOPICLINK}

Deaktiviere die Benachrichtigung über dieses Thema:
{UNSUBSCRIBELINK}

{REGARDS}',
);

$txt['emailtemplate_notification_merge'] = array(
	'desc' => 'Die Email, die verschickt wird, wenn ein Benutzer ein Thema folgt und dieses Thema mit einem anderen zusammengeführt wurde.',
	'subject' => 'Thema zusammengeführt: {TOPICSUBJECT}',
	'body' => 'Ein Thema, welches du beobachtest, wurde von {POSTERNAME} mit einem anderen Thema zusammengeführt.

Zusammengeführtes neues Thema:
{TOPICLINK}

Deaktiviere die Benachrichtigung über dieses Thema:
{UNSUBSCRIBELINK}

{REGARDS}',
);

$txt['emailtemplate_notification_split'] = array(
	'desc' => 'Die Email, die verschickt wird, wenn ein Benutzer ein Thema folgt und dieses Thema aufgeteilt wurde.',
	'subject' => 'Thema aufgeteilt: {TOPICSUBJECT}',
	'body' => 'Ein Thema, welches du beobachtest, wurde von {POSTERNAME} in mehrere Themen aufgeteilt.

Verbleibendes Thema:
{TOPICLINK}

Deaktiviere die Benachrichtigung über dieses Thema:
{UNSUBSCRIBELINK}

{REGARDS}',
);

$txt['emailtemplate_admin_notify'] = array(
	'desc' => 'Die Email, die an den Administrator verschickt wird, wenn sich ein neuer Benutzer registriert.',
	'subject' => 'Es hat sich ein neues Mitglied registriert',
	'body' => '{USERNAME} hat sich gerade registriert. Klicke auf sein Profil für weitere Details:
{PROFILELINK}

{REGARDS}',
);

$txt['emailtemplate_admin_notify_approval'] = array(
	'desc' => 'Die Email, die an den Administrator verschickt wird, wenn sich ein neuer Benutzer registriert und der Account bestätigt werden muss.',
	'subject' => 'Es hat sich ein neues Mitglied registriert',
	'body' => '{USERNAME} hat sich gerade registriert. Klicke auf sein Profil für weitere Details:
{PROFILELINK}

Bevor das Mitglied aktiv werden kann, muss sein Account freigeschaltet werden:
{APPROVALLINK}

{REGARDS}',
);

$txt['emailtemplate_admin_attachments_full'] = array(
	'desc' => 'Die Email, die an den Administrator verschickt wird, wenn der Speicherplatz der Dateianhänge das festgesetzte Limit erreicht.',
	'subject' => 'Dringend! Dateianhangverzeichnis ist fast voll!',
	'body' => '{REALNAME},

Das Dateianhangverzeichnis von {FORUMNAME} ist fast voll. Bitte gehe in den Administrationsbereich um dieses Problem zu beheben.

Sollte das Dateianhangverzeichnis sein Limit erreichen, können keine Bilder und Dateianhänge mehr hochgeladen werden.

{REGARDS}',
);

$txt['emailtemplate_paid_subscription_refund'] = array(
	'desc' => 'Die Email, die an den Administrator verschickt wird, um eine Erstattung eines bezahlten Abonnements zu überprüfen.',
	'subject' => 'Erstattung eines Abonnements',
	'body' => '{REALNAME},

Ein Mitglied hat eine Erstattung für ein kostenpflichtiges Abonnement erhalten. Hier sind die Details dieses Abonnements:

	Abonnement: {SUBSCRNAME}
	Benutzername: {REFUNDNAME} ({REFUNDUSER})
	Datum: {DATE}

Gehe zum Profil des Benutzers:
{PROFILELINK}

{REGARDS}',
);

$txt['emailtemplate_paid_subscription_new'] = array(
	'desc' => 'Die Email, die an den Administrator verschickt wird, um ihn über ein neues Abonnement zu informieren.',
	'subject' => 'Neues Abonnement',
	'body' => '{REALNAME},

Ein Mitglied hat ein neues Abonnement abgeschlossen. Hier findest Du die Details:

	Abonnement: {SUBSCRNAME}
	Benutzername: {SUBNAME} ({SUBUSER})
	User Email: {SUBEMAIL}
	Preis: {PRICE}
	Datum: {DATE}

Gehe zum Profil des Benutzers:
{PROFILELINK}

{REGARDS}',
);

$txt['emailtemplate_paid_subscription_error'] = array(
	'desc' => 'Die Email, die an den Administrator verschickt wird, um ihn über einen Fehler beim Abschluss eines neuen Abonnements zu informieren.',
	'subject' => 'Fehler bei Abonnemnt',
	'body' => '{REALNAME},

Der folgende Fehler ist bei einem Abonnemnt aufgetreten
----------------------------------------------------------------
{SUBERROR}

{REGARDS}',
);

$txt['emailtemplate_pm_email'] = array(
	'desc' => 'Die Vorlage zur Verwendung von Benachrichtigungen in Privaten Nachrichten.',
	'subject' => 'Neue Private Nachricht: {SUBJECT}',
	'body' => 'Du hast gerade eine neue Private Nachricht von {SENDERNAME} auf {FORUMNAME} erhalten.

Wichtig: Dies ist nur eine Benachrichtigung. Bitte nicht direkt auf diese Mail antworten!

Die Nachricht lautet:

{MESSAGE}

Auf diese Mitteilung antworten: {REPLYLINK}',
);
