<?php
// Version: 2.0; ManageMail

$txt['mailqueue_desc'] = 'В этом разделе можно изменять конфигурацию отсылки сообщений, а также просматривать текущую очередь сообщений и управлять ею, если это разрешено.';
$txt['mailqueue_templates_desc'] = 'В этом разделе можно проверять и обновлять шаблоны, используемые Wedge для отправки почтовых уведомлений пользователям.';

$txt['mail_type'] = 'Тип почтового сервера';
$txt['mail_type_default'] = '(PHP по умолчанию)';
$txt['smtp_host'] = 'Сервер SMTP';
$txt['smtp_port'] = 'Порт SMTP';
$txt['smtp_username'] = 'Имя пользователя SMTP';
$txt['smtp_password'] = 'Пароль SMTP';

$txt['webmaster_email'] = 'E-mail администратора';
$txt['mail_from'] = 'E-mail для сообщений, рассылаемых форумом';

$txt['mail_queue'] = 'Разрешить очередь сообщений';
$txt['mail_limit'] = 'Максимум отправляемых сообщений в минуту';
$txt['mail_limit_desc'] = '(0 — запретить)';
$txt['mail_quantity'] = 'Максимум сообщений на странице';

$txt['mailqueue_stats'] = 'Статистика очереди сообщений';
$txt['mailqueue_oldest'] = 'Старые сообщения';
$txt['mailqueue_oldest_not_available'] = 'Недоступно';
$txt['mailqueue_size'] = 'Количество сообщений в очереди';

$txt['mailqueue_age'] = 'Возраст';
$txt['mailqueue_priority'] = 'Приоритет';
$txt['mailqueue_recipient'] = 'Получатель';
$txt['mailqueue_subject'] = 'Тема сообщения';
$txt['mailqueue_clear_list'] = 'Отправить сообщения сейчас';
$txt['mailqueue_send_these_items'] = 'Отправить эти элементы';
$txt['mailqueue_no_items'] = 'В очереди сообщений пусто';
$txt['mailqueue_clear_list_warning'] = 'Хотите отправить все текущие сообщения в очереди? Это превысит все установленные ограничения.';

$txt['mq_day'] = '%1.1f день';
$txt['mq_days'] = '%1.1f дней';
$txt['mq_hour'] = '%1.1f час';
$txt['mq_hours'] = '%1.1f часов';
$txt['mq_minute'] = '%1$d минуту';
$txt['mq_minutes'] = '%1$d минут';
$txt['mq_second'] = '%1$d секунду';
$txt['mq_seconds'] = '%1$d секунд';

$txt['mq_mpriority_5'] = 'Очень низкий';
$txt['mq_mpriority_4'] = 'Низкий';
$txt['mq_mpriority_3'] = 'Нормальный';
$txt['mq_mpriority_2'] = 'Высокий';
$txt['mq_mpriority_1'] = 'Очень высокий';

$txt['templates_register'] = 'Регистрационные письма';
$txt['templates_register_admin'] = 'Регистрационные письма для использования администратором';
$txt['templates_account_changes'] = 'Изменения учётной записи';
$txt['templates_notify_content'] = 'Уведомления о содержании';
$txt['templates_notify_moderation'] = 'Уведомления о модераторских действиях';
$txt['templates_group_membership'] = 'Членство в группах';
$txt['templates_user_email'] = 'Пользовательские функции';
$txt['templates_paid_subs'] = 'Платная подписка';
$txt['templates_moderator'] = 'Уведомления для модераторов';

$txt['template_edit_template'] = 'Изменить шаблон';
$txt['template_replacements'] = 'Замены';
$txt['template_replacement_desc'] = 'Поскольку письма различаются для разных ситуаций, вместо них рекомендуется использовать заполнители. Доступные переменные перечислены ниже.';

$txt['template_email_desc'] = 'Описание:';
$txt['template_email_subject'] = 'Заголовок:';
$txt['template_email_body'] = 'Текст:';

// Don't translate the (%1$s) bits, they're used as placeholders. These are the standard ones.
$txt['template_repl_forumname'] = 'название форума (%1$s)';
$txt['template_repl_scripturl'] = 'ссылка на главную страницу сайта (%1$s)';
$txt['template_repl_themeurl'] = 'URL-адрес темы сайта (%1$s)';
$txt['template_repl_imagesurl'] = 'URL-адрес директории изображений текущей используемой темы (%1$s)';
$txt['template_repl_regards'] = 'стандартное приветствие (%1$s)';
// And these are the not so standard ones.
$txt['template_repl_username'] = 'логин пользователя (для авторизации), получающего электропочту';
$txt['template_repl_realname'] = 'отображаемое имя пользователя, получающего электропочту';
$txt['template_repl_password'] = 'пароль пользователя, получающего электропочту (обычно при регистрации)';
$txt['template_repl_forgotpasswordlink'] = 'ссылка на страницу восстановления пароля';
$txt['template_repl_idmember'] = 'id пользователя, получающего электропочту';
$txt['template_repl_emailsubject'] = 'тема письма, которое пользователь хочет отправить';
$txt['template_repl_emailbody'] = 'текст письма, которое пользователь хочет отправить';
$txt['template_repl_sendername'] = 'отображаемое имя пользователя, отправляющего письмо';
$txt['template_repl_recpname'] = 'отображаемое имя пользователя, получающего письмо';
$txt['template_repl_appyname'] = 'отображаемое имя пользователя, запрашивающего членство в группе';
$txt['template_repl_groupname'] = 'название группы, в которую хочет вступить пользователь';
$txt['template_repl_reason'] = 'причина желания попасть в группу';
$txt['template_repl_modlink'] = 'ссылка на соответствующую область центра модерирования';
$txt['template_repl_sendernamemanual'] = 'имя отправителя, пользователь может ввести его вручную';
$txt['template_repl_recpnamemanual'] = 'имя получателя, отправитель может ввести его вручную';
$txt['template_repl_topicsubject'] = 'тема, обсуждаемая в письме';
$txt['template_repl_topiclink'] = 'ссылка на тему, обсуждаемую в письме';
$txt['template_repl_comment'] = 'комментарий, добавленный отправителем письма';
$txt['template_repl_refusereason'] = 'комментарий, добавленный модератором для объяснения причины отказа';
$txt['template_repl_remindlink'] = 'ссылка на страницу восстановления пароля, включая код';
$txt['template_repl_ip'] = 'IP-адрес пользователя, отправляющего письмо';
$txt['template_repl_activationlink'] = 'ссылка для активации учётной записи, включая активационный код';
$txt['template_repl_activationcode'] = 'код, необходимый для активации учётной записи, в случае проблем с активацией через e-mail';
$txt['template_repl_activationlinkwithoutcode'] = 'основная форма активационной ссылки без кода';
$txt['template_repl_subscrname'] = 'название платной подписки';
$txt['template_repl_subname'] = 'логин пользователя, платная подписка которого связана с электропочтой';
$txt['template_repl_subuser'] = 'отображаемое имя пользователя, платная подписка которого связана с электропочтой';
$txt['template_repl_subemail'] = 'электронный адрес пользователя';
$txt['template_repl_price'] = 'стоимость платной подписки';
$txt['template_repl_profilelink'] = 'ссылка на профиль пользователя';
$txt['template_repl_profilelinksubs'] = 'ссылка на раздел подписок в профиле пользователя';
$txt['template_repl_date'] = 'дата изменения подписки';
$txt['template_repl_end_date'] = 'дата окончания подписки';
$txt['template_repl_suberror'] = 'сведения об ошибке в платежной системе';
$txt['template_repl_refundname'] = 'логин пользователя, получившего возмещение по платной подписке';
$txt['template_repl_refunduser'] = 'отображаемое имя пользователя, получившего возмещение';
$txt['template_repl_postername'] = 'отображаемое имя пользователя, создавшего сообщение';
$txt['template_repl_unsubscribelink'] = 'ссылка для отписки от уведомлений';
$txt['template_repl_message'] = 'текст сообщения';
$txt['template_repl_reportername'] = 'отображаемое имя пользователя, подавшего жалобу на сообщение';
$txt['template_repl_reportlink'] = 'ссылка в центр модерации, где можно будет ознакомиться с полным текстом жалобы';
$txt['template_repl_approvallink'] = 'ссылка в раздел одобрения пользователей';
$txt['template_repl_coppalink'] = 'ссылка на форму COPPA (согласие родителей) для пользователей, чтобы загрузить и заполнить';
$txt['template_repl_subject'] = 'заголовок сообщения';
$txt['template_repl_replylink'] = 'ссылка на страницу с ответом на ЛС';
