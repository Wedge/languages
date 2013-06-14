<?php
/**
 * Wedge
 *
 * Language file for notifications
 *
 * @package wedge
 * @copyright 2010-2013 Wedgeward, wedge.org
 * @license http://wedge.org/license/
 *
 * @version 0.1
 */

$txt['notifications'] = 'Notifications';
$txt['notifications_short_unread'] = 'Non lues';
$txt['notifications_short_latest'] = 'Récentes';
$txt['notifications_short_all'] = 'Tout voir';
$txt['notifications_short_settings'] = 'Paramètres';
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

$txt['welikes_title'] = 'J\'aime';
$txt['welikes_desc'] = 'Me notifier quand quelqu\'un a cliqué J\'aime sur une de mes contributions.';
$txt['welikes_subject'] = 'Votre message a été aimé&#8239;!';
$txt['welikes_notification'] = '%s a aimé votre message, "%s"';

$txt['notification_move'] = '{MEMBER} a déplacé {SUBJECT} vers {BOARD}';
$txt['motification_move_noaccess'] = '{MEMBER} a déplacé votre sujet {SUBJECT} vers une section à laquelle vous n\'avez pas accès.';
$txt['notification_move_profile'] = 'Sujets déplacés';
$txt['notification_move_profile_desc'] = 'Recevoir des notifications quand quelqu\'un déplace un sujet que j\'ai créé';
$txt['notification_move_email_subject'] = 'Quelqu\'un a déplacé votre sujet !';

$txt['notif_subs'] = 'Souscriptions';
$txt['notif_subs_start_time'] = 'Date';
$txt['notif_unsubscribe'] = 'Arrêter';
$txt['notif_subscribe'] = 'Souscrire';
$txt['notif_subs_desc'] = 'Vous pouvez gérer vos inscriptions aux diverses notifications ici. Notez que si vous avez souscrit à des notifications actuellement désactivées, elles ne seront pas listées.';
