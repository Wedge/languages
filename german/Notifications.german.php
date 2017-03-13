<?php
// Language file for notifications

$txt['notifications'] = 'Benachrichtigungen';
$txt['notifications_short_unread'] = 'Ungelesen';
$txt['notifications_short_latest'] = 'Neueste';
$txt['notifications_short_all'] = 'Alle ansehen';
$txt['notifications_short_mark_as_read'] = 'Gelesen!';
$txt['notifications_short_settings'] = 'Einstellungen';
$txt['notifications_short_unread_pms'] = 'Ungelesen';
$txt['notifications_short_inbox'] = 'Posteingang';
$txt['notifications_short_sent'] = 'Postausgang';
$txt['notifications_short_drafts'] = 'Entwürfe';
$txt['notifications_short_write_pm'] = 'Private Nachricht schreiben';

$txt['notification_unread_title'] = 'Ungelesene Benachrichtigungen';
$txt['notification_unread_none'] = 'Keine ungelesenen Benachrichtigungen.';
$txt['notification_none'] = 'Keine Benachrichtigungen.';
$txt['notification_disable'] = 'Benachrichtigungen deaktivieren?';
$txt['notification_profile_desc'] = 'Hier kannst du Benachrichtigungen von bestimmten Funktionen abstellen. Wenn du die Benachrichtigungen abstellst, werden keine neuen verschickt, aber die alten Benachrichtigungen bleiben erhalten';
$txt['scheduled_task_weNotif::scheduled_prune'] = 'Gelesene Benachrichtigungen löschen';
$txt['scheduled_task_desc_weNotif::scheduled_prune'] = 'Lösche Benachrichtigungen, die älter als die festgelegten Tage in Admin &gt; Benachrichtigungen sind';
$txt['notification_admin_desc'] = 'Einstellungen der Kernfunktionen von Benachrichtigungen';
$txt['notifications_prune_days'] = 'Lösche Benachrichtigungen die älter sind als (days) Tage';
$txt['notifications_prune_days_subtext'] = 'Jede gelesene Benachrichtigung, die älter als die festgesetzte Anzahl von Tagen ist, wird aus der Datenbank gelöscht. Wenn du diese Funktion deaktivieren möchtest, deaktiviere den Sheduled Task in Admin &gt; Server &amp; Wartung &gt; Scheduled Tasks';
$txt['notification_email'] = 'Benachrichtigung per Email?';
$txt['enabled'] = 'Aktiviert';
$txt['disabled'] = 'Deaktiviert';
$txt['notify_periodically'] = 'Regelmäßig benachrichtigen';
$txt['notify_instantly'] = 'Umgehend und Regelmäßig benachrichtigen';
$txt['notify_disable'] = 'Nicht per Email Benachrichtigen';
$txt['notify_period_desc'] = 'Die Anzahl von Tagen, nachdem die Benachrichtigungen zugestellt werden.';
$txt['notify_period'] = 'Regelmäßige Benachrichtigung';
$txt['scheduled_task_weNotif::scheduled_periodical'] = 'Schicke regelmäßige Benachrichtigungs-Emails';
$txt['scheduled_task_desc_weNotif::scheduled_periodical'] = 'Sendet alle regelmäßigen Benachrichtigungen an Mitglieder, die ungelesene Benachrichtigungen haben';
$txt['notification_email_periodical_subject'] = '%s, du hast %d ungelesene Benachrichtigungen!';
$txt['notification_email_periodical_body'] = 'Wie es scheint, haben sich eine Reihe von ungelesenen Benachrichtigungen über die letzten Tage angesammelt. Hier ist eine Zusammenfassung. Besuche das Forum, um sie zu lesen!';

$txt['notifier_likes_title'] = 'Gefällt mir von Mitgliedern';
$txt['notifier_likes_desc'] = 'Benachrichtigt dich, wenn ein Beitrag von dir mit gefällt mir markiert wird.';
$txt['notifier_likes_subject'] = 'Dein Beitrag gefällt jemanden!';
$txt['notifier_likes_html'] = '<span class="like_button"></span>{MEMBER_LINK} gefällt dein Beitrag, "{OBJECT_LINK}"';
$txt['notifier_likes_text'] = '{MEMBER_NAME} gefällt dein Beitrag, "{OBJECT_NAME}", der hier zu finden ist:

{OBJECT_URL}';

$txt['notifier_likes_thought_title'] = 'Gefällt mir von Gedanken';
$txt['notifier_likes_thought_desc'] = 'Benachrichtigt dich, wenn ein Gedanke von dir mit gefällt mir markiert wird.';
$txt['notifier_likes_thought_subject'] = 'Jemand gefällt einer deiner Gedanken!';
$txt['notifier_likes_thought_html'] = '<span class="like_button"></span>{MEMBER_LINK} gefällt dein Gedanke: "{OBJECT_NAME}"';
$txt['notifier_likes_thought_text'] = '{MEMBER_NAME} gefällt dein Gedanke: "{OBJECT_NAME}"';

$txt['notifier_move_title'] = 'Verschobene Themen';
$txt['notifier_move_desc'] = 'Erhalte Benachrichtigungen wenn jemand ein Thema verschiebt, dass du gestartet hast';
$txt['notifier_move_subject'] = 'Jemand hat dein Thema verschoben!';
$txt['notifier_move_noaccess_html']  = '{MEMBER_LINK} hat dein Thema {TOPIC_LINK} in ein Forum verschoben, auf das du keinen Zugriff hast.';
$txt['notifier_move_noaccess_text'] = '{MEMBER_NAME} hat dein Thema {TOPIC_NAME} in ein Forum verschoben, auf das du keinen Zugriff hast.';
$txt['notifier_move_html'] = '{MEMBER_LINK} hat {TOPIC_LINK} nach {BOARD_LINK} verschoben.';
$txt['notifier_move_text'] = '{MEMBER_NAME} hat {TOPIC_NAME} nach {BOARD_NAME} verschoben. Du findest das Forum hier:

{BOARD_URL}';

$txt['notif_subs'] = 'Abonnements';
$txt['notif_subs_start_time'] = 'Startzeit';
$txt['notif_unsubscribe'] = 'Austragen';
$txt['notif_subscribe'] = 'Eintragen';
$txt['notif_subs_desc'] = 'Du kannst deine bestehenden Abonnements über die verschiedenen Benachrichtigungen hier verwalten.';

$txt['no_pms'] = 'Du hast keine ungelesenen Nachrichten.';
$txt['pm_sent_to_you'] = '%1$s schickt dir eine Nachricht, "%2$s".';
$txt['pm_replied_to_pm'] = '%1$s hat auf deine Nachricht geantwortet, "%2$s".';
