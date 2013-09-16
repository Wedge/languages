<?php
/**
 * Language file for notifications
 *
 * @package Wedge
 * @copyright 2010 René-Gilles Deberdt, wedge.org
 * @license http://wedge.org/license/
 * @author see contributors.txt
 */

$txt['notifications'] = 'Notifications';
$txt['notifications_short_unread'] = 'Non lues';
$txt['notifications_short_latest'] = 'Récentes';
$txt['notifications_short_all'] = 'Tout voir';
$txt['notifications_short_settings'] = 'Paramètres';
$txt['notifications_short_unread_pms'] = 'Non lus';
$txt['notifications_short_inbox'] = 'Reçus';
$txt['notifications_short_sent'] = 'Envoyés';
$txt['notifications_short_drafts'] = 'Brouillons';
$txt['notifications_short_write_pm'] = 'Écrire';

$txt['notification_unread_title'] = 'Notifications non lues';
$txt['notification_unread_none'] = 'Pas de notifications non lues.';
$txt['notification_none'] = 'Pas de notifications.';
$txt['notification_disable'] = 'Désactiver les notifications&#8239;?';
$txt['notification_profile_desc'] = 'Vous pouvez désactiver les notifications de sources spécifiques ici. La désactivation ne s\'applique pas aux notifications souscrites actuellement.';
$txt['scheduled_task_weNotif::scheduled_prune'] = 'Nettoyer les notifications lues';
$txt['scheduled_task_desc_weNotif::scheduled_prune'] = 'Nettoyer les notifications lues plus anciennes que le nombre de jours spécifié dans Admin &gt; Notifications';
$txt['notification_admin_desc'] = 'Paramètres des notifications';
$txt['notifications_prune_days'] = 'Nettoyer les notifications datées d\'il y a (X jours et avant)';
$txt['notifications_prune_days_subtext'] = 'Toutes les notifications lues plus anciennes que le nombre de jours spécifiés, seront supprimées de la base de données. Pour désactiver cette fonctionnalité, allez à la page Admin &gt; Serveur &amp; Maintenance &gt; Tâches Programmées';
$txt['notification_email'] = 'Notifier par e-mail&#8239;?';
$txt['enabled'] = 'Activé';
$txt['disabled'] = 'Désactivé';
$txt['notify_periodically'] = 'Notifier d\'un coup périodiquement';
$txt['notify_instantly'] = 'Notifier tout de suite et périodiquement';
$txt['notify_disable'] = 'Ne pas notifier par e-mail';
$txt['notify_period_desc'] = 'Nombre de jours entre l\'envoi de chaque notification périodique. Toutes les notifications non lues seront regroupées et envoyées par e-mail à ces intervalles.';
$txt['notify_period'] = 'Notification périodique';
$txt['scheduled_task_weNotif::scheduled_periodical'] = 'Envoyer les e-mails de notification périodiques';
$txt['scheduled_task_desc_weNotif::scheduled_periodical'] = 'Envoyer tous les e-mails de notification aux membres ayant des notifications non lues';
$txt['notification_email_periodical_subject'] = '%s, vous avez %d notification(s) non lues !';
$txt['notification_email_periodical_body'] = 'Il semble que vous ayez reçu des notifications ces derniers jours, en voici une liste. Passez sur le forum pour les consulter !';

$txt['notifier_likes_title'] = 'J\'aime';
$txt['notifier_likes_desc'] = 'Me notifier quand quelqu\'un a cliqué J\'aime sur une de mes contributions.';
$txt['notifier_likes_subject'] = 'Votre message a été aimé !';
$txt['notifier_likes_html'] = '<span class="like_button"></span>{MEMBER_LINK} a aimé votre message, "{OBJECT_LINK}".';
$txt['notifier_likes_text'] = '{MEMBER_NAME} a aimé votre message, "{OBJECT_NAME}", lisible ici :

{OBJECT_URL}';

$txt['notifier_move_title'] = 'Sujets déplacés';
$txt['notifier_move_desc'] = 'Recevoir des notifications quand quelqu\'un déplace un sujet que j\'ai créé';
$txt['notifier_move_subject'] = 'Quelqu\'un a déplacé votre sujet !';
$txt['notifier_move_noaccess_html'] = '{MEMBER_LINK} a déplacé votre sujet {TOPIC_LINK} vers une section à laquelle vous n\'avez pas accès.';
$txt['notifier_move_noaccess_text'] = '{MEMBER_NAME} a déplacé votre sujet {TOPIC_NAME} vers une section à laquelle vous n\'avez pas accès.';
$txt['notifier_move_html'] = '{MEMBER_LINK} a déplacé {TOPIC_LINK} vers {BOARD_LINK}.';
$txt['notifier_move_text'] = '{MEMBER_NAME} a déplacé {TOPIC_NAME} vers {BOARD_NAME}, consultable ici :

{BOARD_URL}';

$txt['notif_subs'] = 'Souscriptions';
$txt['notif_subs_start_time'] = 'Date';
$txt['notif_unsubscribe'] = 'Arrêter';
$txt['notif_subscribe'] = 'Souscrire';
$txt['notif_subs_desc'] = 'Vous pouvez gérer vos inscriptions aux diverses notifications ici. Notez que si vous avez souscrit à des notifications actuellement désactivées, elles ne seront pas listées.';

$txt['no_pms'] = 'Vous n\'avez pas de messages non lus.';
$txt['pm_sent_to_you'] = '%1$s vous a envoyé un message, "%2$s".';
$txt['pm_replied_to_pm'] = '%1$s a répondu à votre message, "%2$s".';
