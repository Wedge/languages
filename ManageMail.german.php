<?php
// Version: 2.0; ManageMail

$txt['mailqueue_desc'] = 'Auf dieser Seite kannst du die Einstellungen deines Mailservers und natürlich auch den Mailqueue bearbeiten.';
$txt['mailqueue_templates_desc'] = 'In diesem Bereich kannst du die Vorlagen überprüfen, die Wedge verwendet, um User zu benachrichtigen.';

$txt['mail_type'] = 'Mail-Typ';
$txt['mail_type_default'] = '(PHP Standard)';
$txt['smtp_host'] = 'SMTP-Server';
$txt['smtp_port'] = 'SMTP-Port';
$txt['smtp_username'] = 'SMTP Benutzername';
$txt['smtp_password'] = 'SMTP Passwort';

$txt['webmaster_email'] = 'Emailadresse des Webmasters';
$txt['mail_from'] = 'Email "Von" Adresse';

$txt['mail_queue'] = 'Mail Queue aktivieren';
$txt['mail_limit'] = 'Maximum an Mails die pro Minute verschickt werden dürfen';
$txt['mail_limit_desc'] = '(Zum deaktivieren auf 0 setzen)';
$txt['mail_quantity'] = 'Maximale Menge an Mails, die pro Seitenaktualisierung gesendet werden darf';

$txt['mailqueue_stats'] = 'Mail Queue Statistiken';
$txt['mailqueue_oldest'] = 'Älteste Mail';
$txt['mailqueue_oldest_not_available'] = 'N/A';
$txt['mailqueue_size'] = 'Queue Länge';

$txt['mailqueue_age'] = 'Alter';
$txt['mailqueue_priority'] = 'Priorität';
$txt['mailqueue_recipient'] = 'Empfänger';
$txt['mailqueue_subject'] = 'Betreff';
$txt['mailqueue_clear_list'] = 'Mail Queue versenden';
$txt['mailqueue_send_these_items'] = 'Nachrichten verschickt';
$txt['mailqueue_no_items'] = 'Es befinden sich keine nachrichten im Mail Queue';
$txt['mailqueue_clear_list_warning'] = 'Möchtest du wirklich den gesamten Mail Queue jetzt verschicken? Dieser Vorgang ignoriert alle voreingestellten Limits.';

$txt['mq_day'] = '%1.1f Tag';
$txt['mq_days'] = '%1.1f Tage';
$txt['mq_hour'] = '%1.1f Stunde';
$txt['mq_hours'] = '%1.1f Stunden';
$txt['mq_minute'] = '%1$d Minute';
$txt['mq_minutes'] = '%1$d Minuten';
$txt['mq_second'] = '%1$d Sekunde';
$txt['mq_seconds'] = '%1$d Sekunden';

$txt['mq_mpriority_5'] = 'Sehr niedrig';
$txt['mq_mpriority_4'] = 'Niedrig';
$txt['mq_mpriority_3'] = 'Normal';
$txt['mq_mpriority_2'] = 'Hoch';
$txt['mq_mpriority_1'] = 'Sehr hoch';

$txt['templates_register'] = 'Registrations Emails';
$txt['templates_register_admin'] = 'Registrations Emails für den Admingebrauch';
$txt['templates_account_changes'] = 'Benutzerkonten Änderungen';
$txt['templates_notify_content'] = 'Benachrichtigungen über Inhalte';
$txt['templates_notify_moderation'] = 'Benachrichtigungen über Moderatoren-Aktivitäten';
$txt['templates_group_membership'] = 'Gruppenmitgliedschaften';
$txt['templates_user_email'] = 'Benutzergesteuerte Emailfunktionen';
$txt['templates_paid_subs'] = 'Abonnements';
$txt['templates_moderator'] = 'Moderatoren Emails';

$txt['template_edit_template'] = 'Vorlage editieren';
$txt['template_replacements'] = '';
$txt['template_replacement_desc'] = 'Da Emails verschiedene Inhalte für verschiedene Situationen beinhalten, existieren Platzhalter die auch verwendet werden sollten. Hier werden die Platzhalter die für diesen Mailtyp  verfügbar sind angezeigt.';

$txt['template_email_desc'] = 'Beschreibung:';
$txt['template_email_subject'] = 'Email Betreff:';
$txt['template_email_body'] = 'Email Nachricht:';

// Don't translate the (%1$s) bits, they're used as placeholders. These are the standard ones.
$txt['template_repl_forumname'] = 'Name des Forums (%1$s)';
$txt['template_repl_scripturl'] = 'Der Link zur Homepge der Seite (%1$s)';
$txt['template_repl_themeurl'] = 'Der Link zum Theme, welches gerade verwendet wird (%1$s)';
$txt['template_repl_imagesurl'] = 'Der Link zum Ordner der Dateianhänge, den dieses Theme verwendet (%1$s)';
$txt['template_repl_default_themeurl'] = 'Der Link zum Standard Theme dieser Seite (%1$s)';
$txt['template_repl_regards'] = 'Die Standardbegrüßung (%1$s)';
// And these are the not so standard ones.
$txt['template_repl_username'] = 'Der Benutzername (für Anmeldezwecke) der Person, die diese Mail empfängt';
$txt['template_repl_realname'] = 'Der angezeigte Name der Person, die diese Mail empfängt';
$txt['template_repl_password'] = 'Das Passwort für den Benutzer, derdiese Mail erhält (normalerweise bei Registrierung)';
$txt['template_repl_forgotpasswordlink'] = 'Der Link zu der Passwort vergessen Seite';
$txt['template_repl_idmember'] = 'Die Benutzer-ID der Person, die diese Mail empfängt';
$txt['template_repl_emailsubject'] = 'Den Betreff der Mail, die der User senden möchte';
$txt['template_repl_emailbody'] = 'Der Inhalt der Mail, die der User senden möchte';
$txt['template_repl_sendername'] = 'Der angezeigte Name des Users, der die Mail senden möchte';
$txt['template_repl_recpname'] = 'Der angezeigte Name des Mailempfängers';
$txt['template_repl_appyname'] = 'Der angezeigte Name des Users, der eine Gruppenmitgliedschaft beantragt';
$txt['template_repl_groupname'] = 'Der Name der Gruppe deren Mitgliedschadt angefragt wurde';
$txt['template_repl_reason'] = 'Den Grund, warum jemand der Gruppe beitreten möchte';
$txt['template_repl_modlink'] = 'Der Link zur relevanten Seite im Moderations-Center';
$txt['template_repl_sendernamemanual'] = 'Der Name des Absenders, den der Absender manuell eingeben kann';
$txt['template_repl_recpnamemanual'] = 'Der Name des Empfängers, den der Absender manuell eintragen kann';
$txt['template_repl_topicsubject'] = 'Das Thema der Diskussion in der Email';
$txt['template_repl_topiclink'] = 'Der Link zum Thema, welches in der Email besprochen wurde';
$txt['template_repl_comment'] = 'Ein Kommentar vom Absender der Email';
$txt['template_repl_refusereason'] = 'Der Kommentar eines Moderators mit der Erklärung warum die Anfrage abgelehnt wurde';
$txt['template_repl_remindlink'] = 'Der Link zum Passwort zurücksetzen Bereich, inklusive Reset-Code';
$txt['template_repl_ip'] = 'Die IP Adresse des Absender';
$txt['template_repl_activationlink'] = 'Der Link um ein Benutzerkonto zu aktivieren, inklusive Aktivierungscode';
$txt['template_repl_activationcode'] = 'Der benötigte Code zum aktivieren eines Benutzerkontos';
$txt['template_repl_activationlinkwithoutcode'] = 'Die normale Vorlage des Aktivierungslinks ohne Code';
$txt['template_repl_subscrname'] = 'Der Name des Abonnements';
$txt['template_repl_subname'] = 'Der Benutzername eines Mitglieds, der die Bestellung ausgelöst hat';
$txt['template_repl_subuser'] = 'Der angezeigte Name des Benutzers, der die Bestellung ausgelöst hat';
$txt['template_repl_subemail'] = 'Die Mailadresse des Users';
$txt['template_repl_price'] = 'Der Preis des Abonnements';
$txt['template_repl_profilelink'] = 'Der Link zum Profil des Users';
$txt['template_repl_profilelinksubs'] = 'Der Link zum Abonnementsbereich im Profil des Mitglieds';
$txt['template_repl_date'] = 'Das Änderungsdatum des Abonnements';
$txt['template_repl_end_date'] = 'Das Ablaufdatum des Abonnements';
$txt['template_repl_suberror'] = 'Die Fehlermeldungen des Bezahlsystems';
$txt['template_repl_refundname'] = 'Der Benutzername des Users, der eine Rückerstattung erhalten hat';
$txt['template_repl_refunduser'] = 'Der angezeigte Name des Benutzers, der eine Rückerstattung erhalten hat';
$txt['template_repl_postername'] = 'Der Anzeigename des User, der eine Anfrage per Mail gestellt hat';
$txt['template_repl_unsubscribelink'] = 'Der Link um Benachrichtigungen zu löschen';
$txt['template_repl_message'] = 'Die Nachricht';
$txt['template_repl_reportername'] = 'der angezeigte Name des Users, der den Beitrag gemeldet hat';
$txt['template_repl_reportlink'] = 'Der Link zum Moderations-Center, in dem der vollständige Report angesehen werden kann';
$txt['template_repl_approvallink'] = 'Der Link zumr Bestätigungsseite für Mitglieder';
$txt['template_repl_coppalink'] = 'Der Link zur COPPA Erklärung zum Download und zum ausfüllen';
$txt['template_repl_subject'] = 'Der Betreff der Nachricht';
$txt['template_repl_replylink'] = 'Der Link zu der Antwort auf eine PN Seite';
