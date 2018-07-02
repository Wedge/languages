<?php
// Version: 2.0; ManagePermissions

$txt['permissions_title'] = 'Управление правами доступа пользователей';
$txt['permissions_modify'] = 'Изменить';
$txt['permissions_view'] = 'Просмотр';
$txt['permissions_allowed'] = 'Разрешить';
$txt['permissions_denied'] = 'Запретить';
$txt['permission_cannot_edit'] = '<strong>Обратите внимание:</strong> нельзя редактировать данный профиль прав доступа, поскольку это предопределенный профиль, включенный в состав программного обеспечения форума. Для изменения прав доступа в данном профиле необходимо создать дубликат данного профиля. Для выполнения данной задачи нажмите <a href="%1$s">здесь</a>.';

$txt['permissions_for_profile'] = 'Права доступа для профиля';
$txt['permissions_boards_desc'] = 'Ниже показан список прав доступа для каждого раздела форума. Можно изменить назначенные профиля прав доступа нажав на название раздела или выбрав «Изменить все» вверху страницы. Для изменения профиля просто нажмите на название профиля.';
$txt['permissions_board_all'] = 'Изменить все';
$txt['permission_profile'] = 'Профиль прав доступа';
$txt['permission_profile_desc'] = '<a href="%1$s">Установить права доступа</a> на раздел.';
$txt['permission_profile_inherit'] = 'Наследуются от родительского раздела';

$txt['permissions_profile'] = 'Профиль';
$txt['permissions_profiles_desc'] = 'Профили прав доступа назначаются индивидуально для каждого раздела для упрощения управления настройками безопасности. В данном разделе можно создавать, редактировать и удалять профили прав доступа.';
$txt['permissions_profiles_change_for_board'] = 'Изменить профиль прав доступа для: «%1$s»';
$txt['permissions_profile_default'] = 'По умолчанию';
$txt['permissions_profile_no_polls'] = 'Без голосований';
$txt['permissions_profile_reply_only'] = 'Только ответы';
$txt['permissions_profile_read_only'] = 'Только для чтения';

$txt['permissions_profile_rename'] = 'Переименовать';
$txt['permissions_profile_edit'] = 'Изменить профили';
$txt['permissions_profile_new'] = 'Новый профиль';
$txt['permissions_profile_new_create'] = 'Создать';
$txt['permissions_profile_name'] = 'Название профиля';
$txt['permissions_profile_used_by'] = 'Используется в';
$txt['permissions_profile_used_by_one'] = 'В одном разделе';
$txt['permissions_profile_used_by_many'] = '%1$d разделах';
$txt['permissions_profile_used_by_none'] = 'Не используется разделами';
$txt['permissions_profile_do_edit'] = 'Изменить';
$txt['permissions_profile_do_delete'] = 'Удалить';
$txt['permissions_profile_copy_from'] = 'Копировать права доступа из';

$txt['permissions_includes_inherited'] = 'Наследуемые группы';

$txt['permissions_all'] = 'все';
$txt['permissions_none'] = 'нет';
$txt['permissions_set_permissions'] = 'Установить';

$txt['permissions_advanced_options'] = 'Расширенные настройки';
$txt['permissions_with_selection'] = 'С выделенным';
$txt['permissions_apply_pre_defined'] = 'Применить предустановленный профиль прав доступа';
$txt['permissions_select_pre_defined'] = 'Выберите профиль';
$txt['permissions_copy_from_board'] = 'Копировать права доступа с этого раздела';
$txt['permissions_select_board'] = 'Выберите раздел';
$txt['permissions_like_group'] = 'Установить права доступа как у этой группы';
$txt['permissions_select_membergroup'] = 'Выбрать группу';
$txt['permissions_add'] = 'Разрешить';
$txt['permissions_remove'] = 'Сбросить права доступа';
$txt['permissions_deny'] = 'Запретить';
$txt['permissions_select_permission'] = 'Выберите права доступа';

$txt['permissions_only_one_option'] = 'Вы можете выбрать только одно действие при изменении прав доступа';
$txt['permissions_no_action'] = 'Действие не выбрано';
$txt['permissions_deny_dangerous'] = 'Вы собираетесь запретить одно или несколько действий.<br>Ещё раз всё проверьте, чтобы случайно не урезать кому-нибудь права.<br><br>Хотите продолжить?';

$txt['permissions_modify_group'] = 'Изменение прав пользователей';
$txt['permissions_general'] = 'Основные права';
$txt['permissions_board'] = 'Права для разделов с глобальными привилегиями';
$txt['permissions_board_desc'] = '<strong>Обратите внимание</strong>: изменение прав доступа для данного раздела затронет все разделы, которые используют профиль прав доступа «По умолчанию». Остальных разделов эти изменения НЕ коснутся.';
$txt['permissions_commit'] = 'Сохранить';
$txt['permissions_on'] = 'в профиле';
$txt['permissions_local_for'] = 'Локальные права доступа для группы';
$txt['permissions_option_on'] = '<span title="Разрешить" style="color: #0a0">+</span>';
$txt['permissions_option_off'] = '<span title="Запретить">-</span>';
$txt['permissions_option_deny'] = '<span title="Отклонить" style="color: red">Х</span>';
$txt['permissions_option_on_title'] = 'Разрешить';
$txt['permissions_option_off_title'] = 'Запретить';
$txt['permissions_option_deny_title'] = 'Отклонить';
$txt['permissions_option_desc'] = 'В качестве прав доступа можно установить следующие права <span style="color: #0a0">Разрешить (<strong>+</strong>)</span>, Запретить (<strong>-</strong>) или <span style="color: red">Отклонить (<strong>Х</strong>)</span>.<br><br>Помните, что если запретили права, любой пользователь — даже модератор или кто угодно, находящийся в этой группе, лишится этих прав. Поэтому следует пользоваться запретом прав с осторожностью, только когда это <strong>необходимо</strong>. Отклонение прав, в свою очередь, запрещает, если не перекрывается другим правом.';

$txt['permissiongroup_general'] = 'Общие';
$txt['permissionname_view_stats'] = 'Просмотр статистики форума';
$txt['permissionhelp_view_stats'] = 'Статистика пользователей отображает общую информацию о форуме, такую как общее количество пользователей, количество оставленных сообщений, созданных тем. Включение этого разрешения добавляет ссылку в нижней части главной страницы (\'[Подробная статистика]\').';
$txt['permissionname_view_mlist'] = 'Просмотр списков пользователей и групп';
$txt['permissionhelp_view_mlist'] = 'Список пользователей показывает всех пользователей, зарегистрированных на форуме. К списку может быть применена сортировка и поиск. Список пользователей доступен с главной страницы и со страницы со статистикой форума. Также, страницы групп пользователей являются мини списками пользователей входящих в них.';
$txt['permissionname_who_view'] = 'Просмотр списка «Сейчас на форуме»';
$txt['permissionhelp_who_view'] = 'В списке «Сейчас на форуме» отображаются пользователи, которые в данный момент находятся на форуме, а также их текущие действия или местоположение. Эти права доступа будут работать только если включить их в общих настройках форума. Чтобы просмотреть этот список, нажмите на ссылку <strong>Сейчас на форуме</strong>, на главной странице. Если запретить, пользователи смогут просматривать список, но не будут видеть, где находятся и что делают остальные пользователи.';
$txt['permissionname_search_posts'] = 'Поиск сообщений и тем';
$txt['permissionhelp_search_posts'] = 'Данные права позволяют пользователям использовать функцию поиска по форуму. Если разрешить эту функцию, на главной странице пользователи увидят кнопку «ПОИСК».';
$txt['permissionname_post_thought'] = 'Публикация размышлений';
$txt['permissionhelp_post_thought'] = 'Разрешает пользователям оставлять свои размышления и комментировать размышления других.';

$txt['permissiongroup_pm'] = 'Личные сообщения';
$txt['permissionname_pm_read'] = 'Чтение личных сообщений';
$txt['permissionhelp_pm_read'] = 'Данные права доступа дают пользователям доступ в раздел личных сообщений. Без этих прав пользователи не смогут читать личные сообщения.';
$txt['permissionname_pm_send'] = 'Отправка личных сообщений';
$txt['permissionhelp_pm_send'] = 'Возможность отправки личных сообщений другим пользователям форума. Необходимы права для чтения личных сообщений.';
$txt['permissionname_save_pm_draft'] = 'Сохранение черновиков личных сообщений';
$txt['permissionhelp_save_pm_draft'] = 'Разрешает пользователям сохранять черновики новых личных сообщений до их публикации.';
$txt['permissionname_auto_save_pm_draft'] = 'Автоматическое сохранение черновиков личных сообщений';
$txt['permissionhelp_auto_save_pm_draft'] = 'В комбинации с параметром выше включает автоматическое сохранение черновиков каждые 30 секунд, хотя это также настраивается на странице «Настройки черновиков» в админке.';

$txt['permissiongroup_maintenance'] = 'Администрирование форума';
$txt['permissionname_admin_forum'] = 'Администрирование форума и базы данных';
$txt['permissionhelp_admin_forum'] = 'Это право позволяет пользователю:<ul><li>изменять настройки форума, базы данных и тем оформления </li><li>управлять пакетами модификаций</li><li> использовать функцию обслуживания форума</li><li> просматривать ошибки форума и лог модераторских действий</li></ul> Используйте эти права доступа с осторожностью. Оно дает очень большие привилегии на форуме.';
$txt['permissionname_manage_boards'] = 'Управление разделами и категориями';
$txt['permissionhelp_manage_boards'] = 'Эти права доступа позволяют пользователям создавать, редактировать и удалять разделы и категории на форуме.';
$txt['permissionname_manage_attachments'] = 'Управление вложениями и аватарами';
$txt['permissionhelp_manage_attachments'] = 'Эти права доступа позволяют пользователям управлять вложениями и аватарами на форуме.';
$txt['permissionname_manage_smileys'] = 'Управление смайлами и иконками сообщений';
$txt['permissionhelp_manage_smileys'] = 'Эти права доступа позволяют пользователям управлять смайлами форума. Удалять, добавлять, редактировать смайлы и их наборы. Если разрешены дополнительные иконки сообщений, то добавлять и изменять их, тоже.';
$txt['permissionname_edit_news'] = 'Редактирование новостей';
$txt['permissionhelp_edit_news'] = 'Это право позволяет пользователям управлять новостями форума. Функция новостей должна быть включена в настройках форума.';
$txt['permissionname_access_mod_center'] = 'Доступ в центр модерации';
$txt['permissionhelp_access_mod_center'] = 'С данным правом доступа пользователи этой группы получат доступ в центр модерации, где будут иметь доступ ко всему функционалу. Обратите внимание данное право не даст привилегии модератора.';

$txt['permissiongroup_member_admin'] = 'Администрирование пользователей';
$txt['permissionname_moderate_forum'] = 'Управление пользователями форума';
$txt['permissionhelp_moderate_forum'] = 'Эти права доступа включают все важные функции модерирования, такие как:<ul class="list"><li>доступ к настройке регистрации</li><li>просмотр и удаление пользователей</li><li>просмотр информации пользователей, включающий проверку IP адреса и (скрытый) онлайн статус</li><li>активацию учётных записей</li><li>получение уведомлений об одобрении учётной записи и возможность одобрить учётную запись</li><li>отправку личных сообщений пользователям, которые отказались от получения личных сообщений</li><li>некоторые другие функции</li></ul>';
$txt['permissionname_manage_membergroups'] = 'Управление группами пользователей';
$txt['permissionhelp_manage_membergroups'] = 'Возможность редактировать группы пользователей, а также включать пользователей в эти группы.';
$txt['permissionname_manage_permissions'] = 'Управление правами доступа';
$txt['permissionhelp_manage_permissions'] = 'Это право позволяет пользователям менять права доступа у групп пользователей.';
$txt['permissionname_manage_bans'] = 'Редактирование списка банов';
$txt['permissionhelp_manage_bans'] = 'Это право позволяет пользователям редактировать список банов. Есть возможность очищать лог попыток обращения к форуму от забаненных пользователей.';
$txt['permissionname_send_mail'] = 'Отправка писем пользователям';
$txt['permissionhelp_send_mail'] = 'Это право позволяет делать массовую рассылку сообщений пользователям, либо некоторым группам пользователей. Можно отправлять электронные или личные сообщения.';
$txt['permissionname_issue_warning'] = 'Делать предупреждения пользователям';
$txt['permissionhelp_issue_warning'] = 'Это право позволяет делать предупреждения пользователям форума и изменять уровень предупреждения. Требуется включение системы предупреждений.';

$txt['permissiongroup_profile'] = 'Профили пользователей';
$txt['permissionname_profile_view'] = 'Просмотр профилей пользователей';
$txt['permissionhelp_profile_view'] = 'Это право позволяет просматривать профили зарегистрированных на форуме пользователей. Смотреть общую информацию, статистику и все сообщения пользователя.';
$txt['permissionname_profile_view_own'] = 'Собственный профиль';
$txt['permissionname_profile_view_any'] = 'Любой профиль';
$txt['permissionname_profile_identity'] = 'Изменение настроек учётной записи';
$txt['permissionhelp_profile_identity'] = 'Настройки учётной записи включают в себя основные настройки, такие как изменение пароля, e-mail, языка&nbsp;и&nbsp;т.&nbsp;д.';
$txt['permissionname_profile_identity_own'] = 'Собственный профиль';
$txt['permissionname_profile_identity_any'] = 'Любой профиль';
$txt['permissionname_profile_extra'] = 'Редактирование дополнительных настроек профиля';
$txt['permissionhelp_profile_extra'] = 'Дополнительные настройки учётной записи включают в себя настройку аватара, тем оформления, уведомлений и личных сообщений.';
$txt['permissionname_profile_extra_own'] = 'Собственный профиль';
$txt['permissionname_profile_extra_any'] = 'Любой профиль';
$txt['permissionname_profile_signature'] = 'Редактирование подписи';
$txt['permissionhelp_profile_signature'] = 'Это позволяет администратору ограничивать, какие группы могут иметь подписи, прикрепленные к своим сообщениям; часто предоставляется более высокопоставленным группам, чтобы ограничить других в размещении рекламы.';
$txt['permissionname_profile_signature_own'] = 'Собственная подпись';
$txt['permissionname_profile_signature_any'] = 'Любая подпись';
$txt['permissionname_profile_website'] = 'Редактирование ссылки на сайт';
$txt['permissionhelp_profile_website'] = 'Это позволяет администратору ограничивать, какие группы могут добавлять информацию о сайте, указанную в их сообщениях; часто предоставляется более высокопоставленным группам, чтобы ограничить других в размещении рекламных ссылок.';
$txt['permissionname_profile_website_own'] = 'Собственный сайт';
$txt['permissionname_profile_website_any'] = 'Любой сайт';
$txt['permissionname_profile_title'] = 'Установка надписи над аватаром';
$txt['permissionhelp_profile_title'] = 'Данная надпись отображается в каждой теме, над профилем каждого пользователя, естественно, если это поле не было оставлено пустым.';
$txt['permissionname_profile_title_own'] = 'Собственный профиль';
$txt['permissionname_profile_title_any'] = 'Любой профиль';
$txt['permissionname_profile_remove'] = 'Удаление учётной записи';
$txt['permissionhelp_profile_remove'] = 'Это право позволяет пользователям удалять собственные учётные записи с форума.';
$txt['permissionname_profile_remove_own'] = 'Собственный';
$txt['permissionname_profile_remove_any'] = 'Любой';
$txt['permissionname_profile_server_avatar'] = 'Использование аватаров форума';
$txt['permissionhelp_profile_server_avatar'] = 'Это право позволяет пользователям использовать аватары, установленные на форуме.';
$txt['permissionname_profile_upload_avatar'] = 'Загрузка аватаров на сервер';
$txt['permissionhelp_profile_upload_avatar'] = 'Это право позволяет пользователям загружать собственные аватары на сервер.';
$txt['permissionname_profile_remote_avatar'] = 'Установка удаленных аватаров';
$txt['permissionhelp_profile_remote_avatar'] = 'Это право позволит пользователям указывать ссылки на аватары, расположенные на другом сервере. В целях безопасности, не стоит разрешать использовать данную функцию непроверенным пользователям.';

$txt['permissiongroup_general_board'] = 'Общие';
$txt['permissionname_moderate_board'] = 'Модерирование раздела';
$txt['permissionhelp_moderate_board'] = 'Это право добавляет некоторые небольшие функции модерирования в разделах. Например, ответ в закрытую тему, изменение времени окончания голосования и просмотр результатов голосования.';

$txt['permissiongroup_topic'] = 'Темы';
$txt['permissionname_post_new'] = 'Создание новых тем';
$txt['permissionhelp_post_new'] = 'Это право позволяет пользователям создавать новые темы. По умолчанию, оно не позволяет отвечать в темы. То есть если у пользователя нет прав отвечать в теме, он сможет только ее создать.';
$txt['permissionname_merge_any'] = 'Объединение тем';
$txt['permissionhelp_merge_any'] = 'Это право позволяет пользователям объединять две темы в одну. Главной темой получится та, у которой первое сообщение создано раньше по времени.';
$txt['permissionname_split_any'] = 'Разделение тем';
$txt['permissionhelp_split_any'] = 'Это право позволяет пользователям разделять темы';
$txt['permissionname_send_topic'] = 'Отправка ссылок на темы друзьям и знакомым';
$txt['permissionhelp_send_topic'] = 'Это право позволяет пользователям отправлять ссылку на тему своим друзьям.';
$txt['permissionname_pin_topic'] = 'Закрепление тем';
$txt['permissionhelp_pin_topic'] = 'Это право позволяет пользователям закреплять темы в верхней части списка — это может пригодится для размещения рекламных сообщений и объявлений.';
$txt['permissionname_move'] = 'Перемещение тем';
$txt['permissionhelp_move'] = 'Это право позволяет перемещать тему из одного раздела в другой.';
$txt['permissionname_move_own'] = 'Собственная тема';
$txt['permissionname_move_any'] = 'Любая тема';
$txt['permissionname_lock'] = 'Закрытие тем';
$txt['permissionhelp_lock'] = 'Это право позволяет пользователям закрывать темы. После этого в них могут отписываться только модераторы или администратор.';
$txt['permissionname_lock_own'] = 'Собственная тема';
$txt['permissionname_lock_any'] = 'Любая тема';
$txt['permissionname_remove'] = 'Удаление тем';
$txt['permissionhelp_remove'] = 'Это право позволяет пользователям удалять темы.';
$txt['permissionname_remove_own'] = 'Собственная тема';
$txt['permissionname_remove_any'] = 'Любая тема';
$txt['permissionname_post_reply'] = 'Отправка сообщений в тему';
$txt['permissionhelp_post_reply'] = 'Это право позволяет пользователям отвечать в темы';
$txt['permissionname_post_reply_own'] = 'Собственная тема';
$txt['permissionname_post_reply_any'] = 'Любая тема';
$txt['permissionname_modify_replies'] = 'Редактирование любых ответов в собственной теме';
$txt['permissionhelp_modify_replies'] = 'Это право позволяет автору темы изменять ответы в собственной теме.';
$txt['permissionname_delete_replies'] = 'Удаление любых ответов в собственной теме';
$txt['permissionhelp_delete_replies'] = 'Это право позволяет автору темы удалять ответы в собственной теме.';
$txt['permissionname_announce_topic'] = 'Объявление пользователей о теме';
$txt['permissionhelp_announce_topic'] = 'Это право позволяет отправлять уведомления о теме по e-mail зарегистрированным пользователям или только выбранным группам пользователей.';

$txt['permissiongroup_post'] = 'Сообщения';
$txt['permissionname_delete'] = 'Удаление сообщений';
$txt['permissionhelp_delete'] = 'Это право позволяет пользователям удалять сообщение в темах, кроме самого первого сообщения.';
$txt['permissionname_delete_own'] = 'Собственное сообщение';
$txt['permissionname_delete_any'] = 'Любое сообщение';
$txt['permissionname_modify'] = 'Редактирование сообщений';
$txt['permissionhelp_modify'] = 'Редактирование сообщений';
$txt['permissionname_modify_own'] = 'Собственное сообщение';
$txt['permissionname_modify_any'] = 'Любое сообщение';
$txt['permissionname_report_any'] = 'Оповещение модераторов';
$txt['permissionhelp_report_any'] = 'Это право предоставляет в каждом ответе ссылку для оповещения модераторов. После оповещения все модераторы раздела получат уведомление на e-mail со ссылкой на тему и вашим комментарием.';
$txt['permissionname_bypass_edit_disable'] = 'Игнорирование времени отключения редактирования';
$txt['permissionhelp_bypass_edit_disable'] = 'Это разрешение позволяет пользователям редактировать свои собственные сообщения даже после окончания времени редактирования.';

$txt['permissionname_save_post_draft'] = 'Сохранение черновиков новых сообщений';
$txt['permissionhelp_save_post_draft'] = 'Это разрешение позволяет пользователям сохранять черновики новых сообщений до их публикации. Вложения и опросы НЕ сохраняются.';
$txt['permissionname_auto_save_post_draft'] = 'Автоматическое сохранение черновиков сообщений';
$txt['permissionhelp_auto_save_post_draft'] = 'В комбинации с параметром выше включает автоматическое сохранение черновиков каждые 30 секунд, хотя это также настраивается на странице «Настройки черновиков» в админке - как для новых тем, так и для ответов.';

$txt['permissiongroup_poll'] = 'Опросы';
$txt['permissionname_poll_view'] = 'Просмотр опросов';
$txt['permissionhelp_poll_view'] = 'Это право позволяет пользователям просматривать опросы. Без этого права они увидят одну тему (без голосования).';
$txt['permissionname_poll_vote'] = 'Возможность голосовать';
$txt['permissionhelp_poll_vote'] = 'Это право позволяет зарегистрированным пользователям голосовать в опросах.';
$txt['permissionname_poll_post'] = 'Создание опросов';
$txt['permissionhelp_poll_post'] = 'Это право позволяет пользователю создавать опросы. Пользователь также должен иметь право на создание новых тем.';
$txt['permissionname_poll_add'] = 'Добавление опросов в тему';
$txt['permissionhelp_poll_add'] = 'Это право позволяет добавлять опрос в тему, которая уже была создана. Это право требует права редактирования первого сообщения в теме.';
$txt['permissionname_poll_add_own'] = 'Собственная тема';
$txt['permissionname_poll_add_any'] = 'Любая тема';
$txt['permissionname_poll_edit'] = 'Редактирование опросов';
$txt['permissionhelp_poll_edit'] = 'Это право позволяет редактировать варианты ответов в опросе и сбрасывать счетчик голосов. Для установки количества максимальных сообщений и время голосования пользователь должен иметь права на «Модерирование раздела».';
$txt['permissionname_poll_edit_own'] = 'Собственный опрос';
$txt['permissionname_poll_edit_any'] = 'Любой опрос';
$txt['permissionname_poll_lock'] = 'Закрытие опросов';
$txt['permissionhelp_poll_lock'] = 'Это право позволяет пользователям закрывать опросы.';
$txt['permissionname_poll_lock_own'] = 'Собственный опрос';
$txt['permissionname_poll_lock_any'] = 'Любой опрос';
$txt['permissionname_poll_remove'] = 'Удаление опросов';
$txt['permissionhelp_poll_remove'] = 'Это право позволяет пользователям удалять опросы.';
$txt['permissionname_poll_remove_own'] = 'Собственный опрос';
$txt['permissionname_poll_remove_any'] = 'Любой опрос';

$txt['permissiongroup_approval'] = 'Премодерация сообщений';
$txt['permissionname_approve_posts'] = 'Одобрение элементов, ожидающих проверки';
$txt['permissionhelp_approve_posts'] = 'Это право позволяет пользователю одобрять все элементы в разделе, требующие проверки.';

$txt['permissiongroup_notification'] = 'Уведомления';
$txt['permissionname_mark_any_notify'] = 'Получение уведомлений о новых ответах';
$txt['permissionhelp_mark_any_notify'] = 'Это право позволяет пользователям получать уведомления о новых сообщениях в теме.';
$txt['permissionname_mark_notify'] = 'Получение уведомлений о новых темах';
$txt['permissionhelp_mark_notify'] = 'Это право позволяет пользователям получать уведомления о новых темах.';

$txt['permissiongroup_attachment'] = 'Вложения';
$txt['permissionname_view_attachments'] = 'Просмотр вложений';
$txt['permissionhelp_view_attachments'] = 'Вложения — это файлы, прикрепленные пользователями к своим сообщениям. Данную функцию можно включить и настроить в разделе <em>Вложения и аватары</em>. Поскольку вложения не доступны напрямую, их можно защитить от скачивания пользователями без соответствующих полномочий.';
$txt['permissionname_post_attachment'] = 'Отправка вложений';
$txt['permissionhelp_post_attachment'] = 'Вложения — это файлы, которые пользователь прикрепил к своему сообщению. Это право позволят прикреплять вложения к сообщению. В одном сообщении может быть несколько вложений.';

$txt['permissionicon'] = '';

$txt['permission_settings_title'] = 'Настройка прав доступа';
$txt['groups_manage_permissions'] = 'Группа пользователей, имеющая право изменять права доступа';
$txt['permission_settings_submit'] = 'Сохранить';
$txt['permission_by_board_desc'] = 'Здесь можно установить какие права будет использовать раздел, глобальные или локальные. Использование локальных разрешений подразумевает, что для групп пользователей в этом разделе действуют свои определенные права, возможно отличающиеся от глобальных.';
$txt['permission_settings_desc'] = 'Здесь можно выбрать, кто имеет право изменять права в разделах.';
$txt['permission_settings_enable_postgroups'] = 'Включить использование прав для групп, основанных на количестве сообщений';

$txt['auto_approve_topics'] = 'Создание новых тем, без запроса на одобрение';
$txt['auto_approve_replies'] = 'Создание сообщений, без запроса на одобрение';

$txt['permissiongroup_media'] = 'Медиатека';
$txt['permissionname_media_access'] = 'Доступ в Галерею';
$txt['permissionname_media_moderate'] = 'Модерация Галереи';
$txt['permissionname_media_manage'] = 'Управление Галереей';
$txt['permissionname_media_access_unseen'] = 'Доступ к странице новых элементов';
$txt['permissionname_media_search'] = 'Поиск в Галерее';
$txt['permissionname_media_add_user_album'] = 'Добавление альбомов';
$txt['permissionname_media_add_playlists'] = 'Добавление плейлистов';
$txt['permissionname_media_auto_approve_albums'] = 'Автоодобрение альбомов';
$txt['permissionname_media_moderate_own_albums'] = '<abbr title="Удаление любых комментариев и элементов в собственных альбомах, а также удаление своих альбомов.">Модерация собственных альбомов</abbr>';
$txt['permissionname_media_viewprofile'] = 'Просмотр профилей пользователей Галереи';
