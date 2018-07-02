<?php
// Version: 2.0; ManageMembers

$txt['groups'] = 'Группы';
$txt['members_list'] = 'Список пользователей';
$txt['viewing_groups'] = 'Просмотр групп пользователей';
$txt['visible_to_all'] = '(уже видимый для всех)';
$txt['viewing_members'] = 'Просмотр от %1$s до %2$s';
$txt['of_total_members'] = 'из %1$s пользователей';
$txt['view_all_members'] = 'Просмотр всех пользователей';

$txt['membergroups_title'] = 'Управление группами пользователей';
$txt['membergroups_description'] = 'Группы пользователей имеют определенные параметры и права доступа. Некоторые группы зависят от количества сообщений. Нужная группа назначается в профиле пользователя, в настройках учётной записи.';
$txt['membergroups_modify'] = 'Изменить';
$txt['membergroups'] = 'Группы пользователей';

$txt['membergroups_add_group'] = 'Добавить группу';
$txt['membergroups_regular'] = 'Основные группы';
$txt['membergroups_post'] = 'Группы, основанные на количестве сообщений';

$txt['membergroups_group_name'] = 'Название новой группы';
$txt['membergroups_new_board'] = 'Доступные разделы';
$txt['membergroups_board_see'] = 'Эта группа может видеть...';
$txt['membergroups_board_enter'] = 'Эта группа имеет доступ к...';
$txt['membergroups_new_board_post_groups'] = '<em>Примечание: обычно группы, основанные на количестве сообщений, не нуждаются в дополнительных настройках доступа, так как основная группа, в которую входят пользователи, уже предоставляет им необходимый доступ.</em>';
$txt['membergroups_new_as_inherit'] = 'наследовать от';
$txt['membergroups_new_as_type'] = 'по типу';
$txt['membergroups_new_as_copy'] = 'основанная на';
$txt['membergroups_new_copy_none'] = '(нет)';
$txt['membergroups_can_edit_later'] = 'Можно отредактировать их позже.';
$txt['membergroups_view_enter_same'] = 'Разделы, которые эта группа может видеть, также доступны для входа';
$txt['membergroups_need_deny_perm'] = 'Мне нужно запретить этой группе доступ к некоторым разделам';
$txt['group_boards_never'] = 'Никогда';
$txt['group_boards_everything'] = 'Все';
$txt['group_boards_everything_desc'] = 'Используйте эту опцию для быстрого выбора всех разделов ниже.';

$txt['membergroups_edit_group'] = 'Редактирование группы';
$txt['membergroups_edit_name'] = 'Название группы';
$txt['membergroups_edit_inherit_permissions'] = 'Наследуемые права доступа';
$txt['membergroups_edit_inherit_permissions_desc'] = 'Выберите «Нет», чтобы разрешить группе иметь свои права доступа.';
$txt['membergroups_edit_inherit_permissions_no'] = 'Нет - Использовать уникальные права доступа';
$txt['membergroups_edit_inherit_permissions_from'] = 'Наследовать от';
$txt['membergroups_edit_hidden'] = 'Видимость';
$txt['membergroups_edit_hidden_no'] = 'Видимая';
$txt['membergroups_edit_hidden_boardindex'] = 'Видимая (кроме списка групп)';
$txt['membergroups_edit_hidden_all'] = 'Невидимая';
$txt['membergroups_edit_hidden_warning'] = 'Хотите запретить назначение этой группы в качестве основной?<br><br>Это ограничит назначение группы только в качестве дополнительной.';
$txt['membergroups_edit_desc'] = 'Описание группы пользователей';
$txt['membergroups_edit_group_type'] = 'Тип группы пользователей';
$txt['membergroups_edit_select_group_type'] = 'Выбрать тип группы пользователей';
$txt['membergroups_group_type_private'] = 'Приватная <span class="smalltext">(Членство в группе присваивается вручную)</span>';
$txt['membergroups_group_type_protected'] = 'Защищено <span class="smalltext">(Только администраторы могут управлять составом группы)</span>';
$txt['membergroups_group_type_request'] = 'По запросу <span class="smalltext">(Пользователь может сделать запрос на членство в группе)</span>';
$txt['membergroups_group_type_free'] = 'Свободная <span class="smalltext">(Пользователь может сам присоединиться к данной группе)</span>';
$txt['membergroups_group_type_post'] = 'Основанная на количестве сообщений <span class="smalltext">(Членство в группе основано на количестве сообщений)</span>';
$txt['membergroups_min_posts'] = 'Требуемое количество сообщений';
$txt['membergroups_online_color'] = 'Цвет в списке онлайн';
$txt['membergroups_online_color_desc'] = 'например, #ffcc99';
$txt['membergroups_additional_formatting'] = 'Дополнительное форматирование для ссылок профиля';
$txt['membergroups_add_format_bold'] = 'Жирный';
$txt['membergroups_add_format_italic'] = 'Курсив';
$txt['membergroups_add_format_underline'] = 'Подчёркнутый';
$txt['membergroups_add_format_strike'] = 'Зачёркнутый';
$txt['membergroups_add_format_free'] = 'Свой стиль';
$txt['membergroups_star_count'] = 'Количество изображений (звёзд)';
$txt['membergroups_star_count_note'] = 'Или установите значение 1 для использования значка вместо звёзд, например.';
$txt['membergroups_star_image'] = 'Имя файла значка';
$txt['membergroups_star_image_note'] = 'Можно использовать параметр $language для указания языка, если требуется';
$txt['membergroups_max_messages'] = 'Максимальное количество личных сообщений';
$txt['membergroups_max_messages_note'] = '0 - неограниченно';
$txt['membergroups_edit_save'] = 'Сохранить';
$txt['membergroups_delete'] = 'Удалить';
$txt['membergroups_confirm_delete'] = 'Хотите удалить эту группу?!';

$txt['membergroups_members_title'] = 'Показать всех пользователей группы';
$txt['membergroups_members_group_members'] = 'Пользователи группы';
$txt['membergroups_members_no_members'] = 'Эта группа сейчас пуста';
$txt['membergroups_members_add_title'] = 'Добавить пользователя в эту группу';
$txt['membergroups_members_add_desc'] = 'Выбрать пользователей';
$txt['membergroups_members_add'] = 'Добавить';
$txt['membergroups_members_remove'] = 'Удалить из группы';
$txt['membergroups_members_last_active'] = 'Последняя активность';
$txt['membergroups_members_additional_only'] = 'Добавить только как дополнительную группу.';
$txt['membergroups_members_group_moderators'] = 'Модераторы группы';
$txt['membergroups_members_description'] = 'Описание';
$txt['membergroups_members_deadmin_confirm'] = 'Хотите удалить самого себя из группы администраторов?';

$txt['membergroups_postgroups'] = 'Группы пользователей, имеющие права на отсылку сообщений';
$txt['membergroups_settings'] = 'Свойства групп пользователей';
$txt['groups_manage_membergroups'] = 'Группы с правом изменять остальные';
$txt['group_text_show'] = 'Показывать названия групп под именами пользователей?';
$txt['group_show_none'] = 'Ничего';
$txt['group_show_all'] = 'Все группы';
$txt['group_show_normal'] = 'Обычные группы';
$txt['group_show_post'] = 'Группы, основанные на количестве сообщений';
$txt['group_show_cond'] = 'Обычные группы (если назначены)|По умолчанию показывать обычные группы. Но, если ни одна группа не назначена, отображать группы, основанные на количестве сообщений.';

$txt['membergroup_badges'] = 'Значки групп';
$txt['membergroup_badges_desc'] = 'Здесь вы можете настроить, в каких группах будут отображаться значки и в каком порядке они будут показаны, перетаскивая их вверх и вниз.';
$txt['membergroup_badges_nobadge'] = '(нет значка в списке)';

$txt['membergroup_badge_postcount'] = '(группа, основанная на количестве сообщений)';
$txt['membergroup_show_when_never'] = 'Никогда не показывать этот значок';
$txt['membergroup_show_when_always'] = 'Всегда показывать этот значок';
$txt['membergroup_show_when_primary'] = 'Только когда это основной значок пользователя';
$txt['membergroup_show_when_cond'] = 'Показывать, если нет других значков';
$txt['membergroup_show_when_desc_never'] = 'Даже если пользователь находится в этой группе, не показывать значок.';
$txt['membergroup_show_when_desc_always'] = 'Если пользователь входит в эту группу, показывать этот значок.';
$txt['membergroup_show_when_desc_primary'] = 'Показывать этот значок, только если эта группа является основной группой пользователя.';
$txt['membergroup_show_when_desc_cond'] = 'Показывать этот значок, только если пользователь входит в эту группу и у него нет других значков.';
$txt['show_group_key'] = 'Показывать метку группы в Информационном центре';
$txt['ban_group'] = 'Добавлять запрещенных пользователей в группу';
$txt['ban_group_subtext'] = 'Это относится только к пользователям с «жёстким» запретом и только для отображения.';
$txt['ban_group_none'] = 'Не добавлять запрещенных пользователей в какие-либо группы';

$txt['membergroups_select_permission_type'] = 'Установить права';
$txt['membergroups_select_visible_boards'] = 'Показать разделы';
$txt['membergroups_members_top'] = 'Пользователи';
$txt['membergroups_name'] = 'Название группы';
$txt['membergroups_stars'] = 'Значок';

$txt['admin_browse_approve'] = 'Пользователи, учётные записи которых ожидают одобрения';
$txt['admin_browse_approve_desc'] = 'Здесь можно управлять всеми пользователями, учётные записи которых ожидают одобрения.';
$txt['admin_browse_activate'] = 'Учётные записи пользователей, ожидающих активации';
$txt['admin_browse_activate_desc'] = 'Список пользователей, ожидающих активации.';

$txt['admin_browse_username'] = 'Имя пользователя';
$txt['admin_browse_email'] = 'E-mail';
$txt['admin_browse_ip'] = 'IP-адрес';
$txt['admin_browse_registered'] = 'Зарегистрирован';
$txt['admin_browse_login'] = 'Последний вход';
$txt['admin_browse_id'] = 'ID';
$txt['admin_browse_with_selected'] = 'С выделенными';
$txt['admin_browse_no_members_approval'] = 'Нет пользователей, ожидающих одобрения.';
$txt['admin_browse_no_members_activate'] = 'Нет пользователей, ожидающих активации.';

$txt['admin_browse_warn'] = 'всех выделенных пользователей?';
$txt['admin_browse_outstanding_warn'] = 'всех пользователей, к которым применимо?';
$txt['admin_browse_w_approve'] = 'Подтвердить';
$txt['admin_browse_w_activate'] = 'Активировать';
$txt['admin_browse_w_delete'] = 'Удалить';
$txt['admin_browse_w_reject'] = 'Отклонить';
$txt['admin_browse_w_remind'] = 'Уведомить';
$txt['admin_browse_w_approve_deletion'] = 'Подтвердить (удаление учётной записи)';
$txt['admin_browse_w_email'] = 'и отправить e-mail';
$txt['admin_browse_w_approve_require_activate'] = 'Одобрить и потребовать активацию';

$txt['admin_browse_filter_by'] = 'Фильтровать по';
$txt['admin_browse_filter_show'] = 'Отображение';
$txt['admin_browse_filter_type_0'] = 'Неактивированные учётные записи';
$txt['admin_browse_filter_type_2'] = 'Неактивированные изменения email';
$txt['admin_browse_filter_type_3'] = 'Неодобренные новые учётные записи';
$txt['admin_browse_filter_type_4'] = 'Неодобренные запросы на удаление учётных записей';
$txt['admin_browse_filter_type_5'] = 'Неодобренные учётные записи, не подходящие под возрастной ценз';

$txt['admin_browse_outstanding'] = 'Неактивированные пользователи';
$txt['admin_browse_outstanding_days_1'] = 'Со всеми пользователями, зарегистрированными более';
$txt['admin_browse_outstanding_days_2'] = 'дней назад';
$txt['admin_browse_outstanding_perform'] = 'Выполнить следующие действия';
$txt['admin_browse_outstanding_go'] = 'Выполнить действие';

$txt['check_for_duplicate'] = 'Проверить на двойников';
$txt['dont_check_for_duplicate'] = 'Не проверять на двойников';
$txt['duplicates'] = 'Двойники';

$txt['not_activated'] = 'Не активированы';
