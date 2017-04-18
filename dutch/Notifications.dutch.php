<?php
// Language file for notifications

$txt['notifications'] = 'Notificaties';
$txt['notifications_short_unread'] = 'Ongelezen';
$txt['notifications_short_latest'] = 'Laatste';
$txt['notifications_short_all'] = 'Alles bekijken';
$txt['notifications_short_mark_as_read'] = 'Markeer als gelezen';
$txt['notifications_short_settings'] = 'Instellingen';
$txt['notifications_short_unread_pms'] = 'Ongelezen';
$txt['notifications_short_inbox'] = 'Postvak in';
$txt['notifications_short_sent'] = 'Postvak uit';
$txt['notifications_short_drafts'] = 'Concepten';
$txt['notifications_short_write_pm'] = 'Samenstellen';

$txt['notification_unread_title'] = 'Ongelezen notificaties';
$txt['notification_unread_none'] = 'Geen ongelezen notificaties';
$txt['notification_none'] = 'Geen notificaties';
$txt['notification_disable'] = 'Schakel notificaties uit';
$txt['notification_profile_desc'] = 'U kunt meldingen van specifieke kennisgevers hier uitschakelen, gelieve te noteren dat het uitschakelen van meldingen alleen zal voorkomen bij nieuwe meldingen, maar zal de bestaande behouden.';
$txt['scheduled_task_weNotif::scheduled_prune'] = 'Schrap gelezen notificaties';
$txt['scheduled_task_desc_weNotif::scheduled_prune'] = 'Schrap gelezen meldingen die ouder zijn dan de opgegeven dagen in Admin &gt;  meldingen';
$txt['notification_admin_desc'] = 'Instellingen notificaties';
$txt['notifications_prune_days'] = 'Schrap notificaties ouder dan (dagen)';
$txt['notifications_prune_days_subtext'] = 'Elke gelezen notificatie ouder dan het opgegeven aantal dagen zal worden verwijderd uit de database. Als u deze functie wilt uitschakelen, schakelt u de geplande taak uit te vinden onder Admin &gt; server &amp; onderhoud &gt; geplande taken';
$txt['notification_email'] = 'Notificatie via e-mail?';
$txt['enabled'] = 'Ingeschakeld';
$txt['disabled'] = 'Uitgeschakeld';
$txt['notify_periodically'] = 'Notificatie periodiek';
$txt['notify_instantly'] = 'Notificatie direct en periodiek';
$txt['notify_disable'] = 'Geen notificatie via e-mail';
$txt['notify_period_desc'] = 'Het aantal dagen waarna de periodieke notificaties worden verzonden. Al uw ongelezen meldingen zullen worden gegroepeerd en verzonden via e-mail na zoveel dagen';
$txt['notify_period'] = 'periodieke notificatie';
$txt['scheduled_task_weNotif::scheduled_periodical'] = 'Verzend periodieke notificatie via e-mails';
$txt['scheduled_task_desc_weNotif::scheduled_periodical'] = 'Stuurt alle periodieke notificatie e-mails voor de leden die ongelezen notificaties hebben';
$txt['notification_email_periodical_subject'] = '%s, er zijn %d ongelezen notificatie(s)!';
$txt['notification_email_periodical_body'] = 'Het lijkt alsof er een aantal ongelezen meldingen zich hebben verzameld in de afgelopen paar dagen, hier is een opsomming ervan. Ga naar het forums om ze te bekijken!';

$txt['notifier_likes_title'] = 'Berichten Likes';
$txt['notifier_likes_desc'] = 'Notificatie wanneer een van u berichten zijn ¨geliked¨';
$txt['notifier_likes_subject'] = 'Iemand vindt een van u berichten leuk!';
$txt['notifier_likes_html'] = '<span class="like_button"></span>{MEMBER_LINK} vindt u bericht leuk, "{OBJECT_LINK}"';
$txt['notifier_likes_text'] = '{MEMBER_NAME} vindt u bericht leuk, "{OBJECT_NAME}", bericht bevindt zich hier:

{OBJECT_URL}';

$txt['notifier_likes_thought_title'] = 'Leuke gedachten';
$txt['notifier_likes_thought_desc'] = 'Notificatie wanneer een gedachte leuk wordt gevonden.';
$txt['notifier_likes_thought_subject'] = 'iemand vindt u gedachten leuk!';
$txt['notifier_likes_thought_html'] = '<span class="like_button"></span>{MEMBER_LINK} vindt u gedachten leuk: "{OBJECT_NAME}"';
$txt['notifier_likes_thought_text'] = '{MEMBER_NAME} vindt u gedachten leuk: "{OBJECT_NAME}"';

$txt['notifier_move_title'] = 'Verplaatst Topics';
$txt['notifier_move_desc'] = 'Bericht ontvangen wanneer iemand een Topic verplaatst door u gestart.';
$txt['notifier_move_subject'] = 'iemand verplaatst u Topic!';
$txt['notifier_move_noaccess_html']  = '{MEMBER_LINK} verplaatst u topic {TOPIC_LINK} naar een Board waar u geen toegang heeft.';
$txt['notifier_move_noaccess_text'] = '{MEMBER_NAME} verplaatst u topic {TOPIC_NAME} naar een board waar u geen toegang toe heeft.';
$txt['notifier_move_html'] = '{MEMBER_LINK} verplaatst {TOPIC_LINK} naar {BOARD_LINK}.';
$txt['notifier_move_text'] = '{MEMBER_NAME} verplaatst {TOPIC_NAME} naar {BOARD_NAME}. u kunt het Board openen:

{BOARD_URL}';

$txt['notif_subs'] = 'Abonnementen';
$txt['notif_subs_start_time'] = 'Start tijd';
$txt['notif_unsubscribe'] = 'Opzeggen';
$txt['notif_subscribe'] = 'Abonneren';
$txt['notif_subs_desc'] = 'U kunt uw bestaande abonnementen hier beheren,houdt er rekening mee dat indien er abonnementen uitgeschakeld zijn deze niet worden weergegeven.';

$txt['no_pms'] = 'u heeft geen ongelezen berichten.';
$txt['pm_sent_to_you'] = '%1$s stuur u een bericht, "%2$s".';
$txt['pm_replied_to_pm'] = '%1$s beantwoord u bericht, "%2$s".';
