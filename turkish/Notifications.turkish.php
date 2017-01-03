<?php
// Language file for notifications

$txt['notifications'] = 'Bildirimler';
$txt['notifications_short_unread'] = 'Okunmamış';
$txt['notifications_short_latest'] = 'Yeni';
$txt['notifications_short_all'] = 'Hepsini Görüntüle';
$txt['notifications_short_settings'] = 'Ayarlar';
$txt['notifications_short_unread_pms'] = 'Okunmamış';
$txt['notifications_short_inbox'] = 'Gelen';
$txt['notifications_short_sent'] = 'Giden';
$txt['notifications_short_drafts'] = 'Taslaklar';
$txt['notifications_short_write_pm'] = 'Oluştur';

$txt['notification_unread_title'] = 'Okunmamış Bildirimler';
$txt['notification_unread_none'] = 'Okunmamış Bildirim Yok.';
$txt['notification_none'] = 'Bildirim yok';
$txt['notification_disable'] = 'Bildirimleri Kapat?';
$txt['notification_profile_desc'] = 'Burada belirli bildirimleri devre dışı bırakabilir ve etkinleştire bilirsiniz. Bildirimleri devre dışı bırakma yalnızca yeni bildirimleri engeller mevcut olanların devam edeceğini lütfen unutmayın';
$txt['scheduled_task_weNotif::scheduled_prune'] = 'Prune read notifications';
$txt['scheduled_task_desc_weNotif::scheduled_prune'] = 'Prune read notifications which are older than the specified days in Admin &gt; Notifications';
$txt['notification_admin_desc'] = 'Settings for the notifications core';
$txt['notifications_prune_days'] = 'Prune notifications older than (days)';
$txt['notifications_prune_days_subtext'] = 'Any read notification older than the specified number of days will be deleted from the database. If you want to disable this feature, disable the scheduled task found under Admin &gt; Server &amp; Maintenance &gt; Scheduled Tasks';
$txt['notification_email'] = 'E-posta yoluyla haberdar et?';
$txt['enabled'] = 'Açık';
$txt['disabled'] = 'Kapalı';
$txt['notify_periodically'] = 'Periyodik zamanlamaya göre bildir';
$txt['notify_instantly'] = 'Anında ve periyodik zamanlamaya göre bildir';
$txt['notify_disable'] = 'E-posta yoluyla haberdar etmeyin';
$txt['notify_period_desc'] = 'Bildirimlerin E-Posta ile bildirileceği gün sayısın giriniz.';
$txt['notify_period'] = 'Periyodik bildirim zamanlaması ';
$txt['scheduled_task_weNotif::scheduled_periodical'] = 'Send periodical notification e-mails';
$txt['scheduled_task_desc_weNotif::scheduled_periodical'] = 'Sends all the periodical notification e-mails for the members who have unread notifications';
$txt['notification_email_periodical_subject'] = '%s, you have %d unread notification(s)!';
$txt['notification_email_periodical_body'] = 'It looks like you have gathered a bunch of unread notifications over the past few days, here is the gist of them. Head over to the forums to check them out!';

$txt['notifier_likes_title'] = 'Beğeni Aldığımda';
$txt['notifier_likes_desc'] = 'Mesajlarınıza beğeni yapıldığında bildirim yapılır';
$txt['notifier_likes_subject'] = 'Birisi mesajınızı beğendi!';
$txt['notifier_likes_html'] = '<span class="like_button"></span>{MEMBER_LINK} iletinizi beğendi, "{OBJECT_LINK}"';
$txt['notifier_likes_text'] = '{MEMBER_NAME} iletinizi beğendi, "{OBJECT_NAME}", which is located here:

{OBJECT_URL}';

$txt['notifier_likes_thought_title'] = 'Beğeniler düşünceler';
$txt['notifier_likes_thought_desc'] = 'Düşüncelerinizi biri beğendiğinde bildirim alırsınız';
$txt['notifier_likes_thought_subject'] = 'Someone liked one of your thoughts!';
$txt['notifier_likes_thought_html'] = '<span class="like_button"></span>{MEMBER_LINK} liked your thought: "{OBJECT_NAME}"';
$txt['notifier_likes_thought_text'] = '{MEMBER_NAME} düşüncenizi beğendi: "{OBJECT_NAME}"';

$txt['notifier_move_title'] = 'Konu Taşındığında';
$txt['notifier_move_desc'] = 'Size ait bir konu taşındığında bildirim yapılır';
$txt['notifier_move_subject'] = 'Konunuz taşındı!';
$txt['notifier_move_noaccess_html']  = '{MEMBER_LINK} moved your topic {TOPIC_LINK} to a board you cannot access.';
$txt['notifier_move_noaccess_email'] = '{MEMBER_NAME} moved your topic {TOPIC_NAME} to a board you cannot access.';
$txt['notifier_move_html'] = '{MEMBER_LINK} moved {TOPIC_LINK} to {BOARD_LINK}.';
$txt['notifier_move_text'] = '{MEMBER_NAME} moved {TOPIC_NAME} to {BOARD_NAME}. You can access the board here:

{BOARD_URL}';

$txt['notif_subs'] = 'Abonelikler';
$txt['notif_subs_start_time'] = 'Start time';
$txt['notif_unsubscribe'] = 'Aboneliği İptal et';
$txt['notif_subscribe'] = 'Subscribe';
$txt['notif_subs_desc'] = 'You can manage your existing subscriptions to various notifiers here, note that if you have subscriptions from disabled notifiers then they will not be displayed.';

$txt['no_pms'] = 'Okunmamış mesajınız yok.';
$txt['pm_sent_to_you'] = '%1$s mesaj gönderdi, "%2$s".';
$txt['pm_replied_to_pm'] = '%1$s mesajına yanıt verdi, "%2$s".';
