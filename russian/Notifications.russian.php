<?php
// Language file for notifications

$txt['notifications'] = 'Оповещения';
$txt['notifications_short_unread'] = 'Непрочитанные';
$txt['notifications_short_latest'] = 'Последние';
$txt['notifications_short_all'] = 'Все';
$txt['notifications_short_mark_as_read'] = 'Пометить как прочитанное';
$txt['notifications_short_settings'] = 'Настройки';
$txt['notifications_short_unread_pms'] = 'Непрочитанные';
$txt['notifications_short_inbox'] = 'Входящие';
$txt['notifications_short_sent'] = 'Исходящие';
$txt['notifications_short_drafts'] = 'Черновики';
$txt['notifications_short_write_pm'] = 'Написать';

$txt['notification_unread_title'] = 'Непрочитанные оповещения';
$txt['notification_unread_none'] = 'Нет непрочитанных оповещений.';
$txt['notification_none'] = 'Нет оповещений.';
$txt['notification_disable'] = 'Отключить оповещения?';
$txt['notification_profile_desc'] = 'Ненужные оповещения отключаются здесь. Примечание: новые уведомления приходить не будут, но уже существующие сохранятся.';
$txt['scheduled_task_weNotif::scheduled_prune'] = 'Удаление прочитанных оповещений';
$txt['scheduled_task_desc_weNotif::scheduled_prune'] = 'Удалять прочитанные оповещения со сроком давности более указанных дней (см. Админка &gt; Оповещения)';
$txt['notification_admin_desc'] = 'Настройки оповещений';
$txt['notifications_prune_days'] = 'Удалять оповещения старше чем (дней)';
$txt['notifications_prune_days_subtext'] = 'Любое прочитанное оповещение старше указанного количества дней будет удалено из базы данных. Для отключения этой функции загляните в раздел Админка &gt; Сервер и обслуживание &gt; Диспетчер задач';
$txt['notification_email'] = 'Оповещать по электронной почте?';
$txt['enabled'] = 'Включено';
$txt['disabled'] = 'Выключено';
$txt['notify_periodically'] = 'Оповещать периодически';
$txt['notify_instantly'] = 'Оповещать немедленно и периодически';
$txt['notify_disable'] = 'Не оповещать по электронной почте';
$txt['notify_period_desc'] = 'Количество дней, по истечении которых ваши периодические уведомления будут отправляться. Все ваши непрочитанные уведомления будут сгруппированы и отправлены по электропочте через несколько дней';
$txt['notify_period'] = 'Периодическое оповещение';
$txt['scheduled_task_weNotif::scheduled_periodical'] = 'Отправка периодических уведомлений по электропочте';
$txt['scheduled_task_desc_weNotif::scheduled_periodical'] = 'Отправляет все электронные письма с периодическим уведомлением для пользователей, у которых есть непрочитанные уведомления';
$txt['notification_email_periodical_subject'] = '%s, у вас %d непрочитанных уведомлений!';
$txt['notification_email_periodical_body'] = 'Похоже, у вас накопились непрочитанные уведомления за несколько дней. Загляните на форум, чтобы узнать подробности!';

$txt['notifier_likes_title'] = 'Понравившиеся сообщения';
$txt['notifier_likes_desc'] = 'Оповещать, когда одно из моих сообщений кому-нибудь понравилось.';
$txt['notifier_likes_subject'] = 'Кому-то понравилось одно из ваших сообщений!';
$txt['notifier_likes_html'] = '<span class="like_button"></span>{MEMBER_LINK} понравилось ваще сообщение: "{OBJECT_LINK}"';
$txt['notifier_likes_text'] = 'Пользователю {MEMBER_NAME} понравилось ваше сообщение: "{OBJECT_NAME}", оставленное здесь:

{OBJECT_URL}';

$txt['notifier_likes_thought_title'] = 'Понравившиеся размышления';
$txt['notifier_likes_thought_desc'] = 'Оповещать, когда одно из моих размышлений кому-нибудь понравилось.';
$txt['notifier_likes_thought_subject'] = 'Кому-то пришлось по душе одно из ваших размышлений!';
$txt['notifier_likes_thought_html'] = '<span class="like_button"></span>{MEMBER_LINK} понравилось ваше размышление: "{OBJECT_NAME}"';
$txt['notifier_likes_thought_text'] = 'Пользователю {MEMBER_NAME} понравилось ваше размышление: "{OBJECT_NAME}"';

$txt['notifier_move_title'] = 'Перемещённые темы';
$txt['notifier_move_desc'] = 'Получать уведомления при перемещении ваших тем';
$txt['notifier_move_subject'] = 'Кто-то переместил вашу тему!';
$txt['notifier_move_noaccess_html']  = '{MEMBER_LINK} переместил вашу тему {TOPIC_LINK} в раздел, к которому у вас нет доступа.';
$txt['notifier_move_noaccess_text'] = '{MEMBER_NAME} переместил вашу тему {TOPIC_NAME} в раздел, к которому у вас нет доступа.';
$txt['notifier_move_html'] = '{MEMBER_LINK} переместил тему {TOPIC_LINK} в раздел {BOARD_LINK}.';
$txt['notifier_move_text'] = '{MEMBER_NAME} переместил тему {TOPIC_NAME} в раздел {BOARD_NAME}. Получить доступ к разделу:

{BOARD_URL}';

$txt['notif_subs'] = 'Подписки';
$txt['notif_subs_start_time'] = 'Время начала';
$txt['notif_unsubscribe'] = 'Отписаться';
$txt['notif_subscribe'] = 'Подписаться';
$txt['notif_subs_desc'] = 'Управляйте своими подписками здесь. Примечание: подписки от отключенных уведомителей отображаться не будут.';

$txt['no_pms'] = 'У вас нет непрочитанных сообщений.';
$txt['pm_sent_to_you'] = '%1$s отправил вам сообщение, "%2$s".';
$txt['pm_replied_to_pm'] = '%1$s ответил на ваше сообщение, "%2$s".';
