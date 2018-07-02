<?php

$txt['ban_general_description'] = 'Здесь можно управлять банами пользователей, доставляющих неприятности (спамеры или другие негодяи).';
$txt['ban_description_hard'] = 'Здесь можно управлять «жёсткими» запретами, предотвращающими дальнейшее безобразие со стороны некоторых пользователей.';
$txt['ban_description_soft'] = 'Здесь можно управлять «мягкими» запретами, не мешающими пользоваться форумом.';
$txt['ban_description_add'] = 'Здесь можно добавить новый запрет.';
$txt['ban_description_edit'] = 'Здесь можно отредактировать уже созданный запрет.';
$txt['ban_description_settings'] = 'Здесь можно изменить параметры, применяющиеся ко всем банам, в основном с «мягким» запретом.';

$txt['ban_type'] = 'Тип';
$txt['ban_type_id_member'] = 'Пользователь';
$txt['ban_type_member_name'] = 'Имена пользователей';
$txt['ban_type_email'] = 'E-mail';
$txt['ban_type_ip_address'] = 'IP';
$txt['ban_type_hostname'] = 'Хост';

$txt['ban_content'] = 'Забанен';
$txt['ban_added'] = 'Когда';
$txt['ban_added_by'] = 'Добавлен';
$txt['ban_invalid_member'] = 'Пользователь с id %1$s был забанен, но не существует.';

$txt['ban_id_member_is'] = 'Пользователь: <a href="%1$s">%2$s</a>';

$txt['ban_member_names_beginning'] = 'Имена, начинающиеся с %1$s %2$s';
$txt['ban_member_names_ending'] = 'Имена, заканчивающиеся на %1$s %2$s';
$txt['ban_member_names_containing'] = 'Имена, содержащие %1$s %2$s';
$txt['ban_member_names_matching'] = 'Имена: %1$s %2$s';
$txt['ban_member_names_case_matters'] = '(с учётом регистра)';

$txt['ban_entire_domain'] = 'Любое письмо от %1$s';
$txt['ban_entire_tld'] = 'Любое письмо с домена %1$s';
$txt['ban_gmail_style_email'] = 'Любое изменение %1$s@%2$s';

$txt['ban_entire_hostname'] = 'Любые пользователи из %1$s';

$txt['ban_no_entries'] = 'Каких-либо запретов пока нет.';

$txt['ban_remove_selected'] = 'Удалить выбранное';
$txt['ban_remove_selected_confirm'] = 'Хотите удалить выбранные запреты?';
$txt['ban_remove_single'] = 'Удалить этот запрет';
$txt['ban_remove_single_confirm'] = 'Хотите удалить этот запрет?';

$txt['ban_hardness_header'] = 'Тип запрета';
$txt['ban_hardness_title'] = 'Какой тип запрета?';
$txt['ban_hardness_soft'] = '«Мягкий» запрет';
$txt['ban_hardness_hard'] = '«Жёсткий» запрет';
$txt['ban_hardnesses'] = '«Мягкие» запреты не блокируют доступ к форуму, они лишь притормаживают пользователей, а также запрещают регистрацию с заданных IP-адресов. «Жёсткие» запреты, напротив, сразу останавливают пользователей.';

$txt['ban_type_header'] = 'Критерии бана';
$txt['ban_type_title'] = 'На чём будет основываться запрет?';
$txt['ban_type_description'] = 'Будут доступны различные варианты, в зависимости от выбранного типа запрета.';
$txt['ban_type_title_id_member'] = 'Конкретный пользователь';
$txt['ban_type_title_member_name'] = 'Одно или несколько имён';
$txt['ban_type_title_email'] = 'E-mail или несколько доменов';
$txt['ban_type_title_ip_address'] = 'IP-адрес или диапазон адресов';
$txt['ban_type_title_hostname'] = 'Хост или диапазон хостов';

$txt['ban_type_id_member_type'] = 'Кого вы хотите забанить?';

$txt['ban_type_member_name'] = 'Какие имена вы хотите запретить?';
$txt['ban_member_names_select_beginning'] = 'Имена начинаются на:';
$txt['ban_member_names_select_ending'] = 'Имена заканчиваются на:';
$txt['ban_member_names_select_containing'] = 'Имена содержат:';
$txt['ban_member_names_select_matching'] = 'Имена совпадают с:';

$txt['ban_member_note'] = 'Примечание: это не заблокирует доступ к форуму тем пользователям, чьи имена уже как-то совпадают с установленным фильтром, но предотвратит использование подобных имён в дальнейшем.';

$txt['ban_member_case_sensitive'] = 'Зависимость от регистра?';
$txt['ban_member_case_sensitive_desc'] = 'Если включить чувствительность к регистру, имена "Admin" и "admin" будут считаться разными. Обычно не используется (оставьте настройку по умолчанию).';

$txt['ban_type_email_type'] = 'Электропочта для запрета';
$txt['ban_type_email_type_specific'] = 'Один или несколько заданных адресов';
$txt['ban_type_email_type_domain'] = 'Весь домен';
$txt['ban_type_email_type_tld'] = 'Диапазон доменов';
$txt['ban_type_email_content'] = 'Адрес(а) для запрета';
$txt['ban_email_gmail_style'] = 'GMail-стиль домена?';

$txt['ban_use_htaccess'] = 'При возможности используйте правила Allow/Deny (например, в файле .htaccess или в панели управления хостингом) вместо создания запретов, потому что эффективней заблокировать что-либо до того, как оно доберётся до Wedge, а не после.';
$txt['ban_type_ip_address_type'] = 'Тип IP-адресов для запрета?';
$txt['ban_type_ip_range'] = 'Запрет диапазона IP-адресов?';
$txt['ban_type_range_start'] = 'От:';
$txt['ban_type_range_end'] = 'До:';
$txt['ban_type_ip_address_details'] = 'IP-адрес(а) для запрета:';

$txt['ban_type_hostname'] = 'Имя хоста для запрета?';
$txt['ban_type_hostname_wildcard'] = 'Используйте * в качестве маски, например *.net — все адреса с хоста .net, или более выборочно, например *.comcast.net, или даже *.somebranch.example.com.';

$txt['ban_information'] = 'Примечание';
$txt['ban_reason'] = 'Причина запрета';
$txt['ban_reason_subtext'] = 'Необходимо, чтобы позже напомнить, из-за чего был наложен запрет.';
$txt['ban_message'] = 'Сообщение пользователю';
$txt['ban_message_subtext'] = 'Необязательно; будет показано пользователям, получившим запрет.';

$txt['ban_no_modify'] = 'Невозможно изменить имя хоста, если опция "Не отображать названия хостов пользователей" включена.';

$txt['ban_invalid_type'] = 'Вы не указали допустимый тип запрета.';
$txt['ban_invalid_member'] = 'Вы не указали существующего пользователя для запрета.';
$txt['ban_invalid_membername'] = 'Вы не указали допустимое имя для запрета.';
$txt['ban_invalid_email'] = 'Вы не указали допустимый адрес электропочты для запрета.';
$txt['ban_invalid_ip_address'] = 'Вы не указали допустимый IP-адрес или диапазон для запрета.';
$txt['ban_invalid_hostname'] = 'Вы не указали допустимое имя хоста для запрета.';
$txt['ban_invalid_reason'] = 'Вы не указали причину запрета.';

$txt['ban_membername_style'] = 'Когда применяется запрет имени пользователя, к чему его применять?';
$txt['ban_membername_style_username'] = 'Только к логинам';
$txt['ban_membername_style_display'] = 'Только к отображаемым именам';
$txt['ban_membername_style_both'] = 'Ко всем именам';

$txt['softban_blankpage'] = 'Шанс пользователя с «мягким» запретом на получение пустой страницы';
$txt['softban_percent_subtext'] = 'В процентах, от 0 до 100%.';
$txt['softban_nosearch'] = 'Шанс пользователя с «мягким» запретом на то, что поиск не сработает';

$txt['softban_disableregistration'] = 'Отключить регистрацию при «мягком» запрете?';
$txt['softban_disableregistration_desc'] = '«Мягкие» запреты могут включать IP-адреса, если вы хотите ограничить регистрацию таким образом.';

$txt['softban_redirect'] = 'Шанс перенаправления на другую страницу';
$txt['softban_redirect_subtext'] = 'Активно только при заполнении поля ниже.';
$txt['softban_redirect_url'] = 'URL для перенаправления пользователей';

$txt['softban_delay_min'] = 'Задержка загрузки в секундах - минимум';
$txt['softban_delay_max'] = 'Задержка загрузки в секундах - максимум';
$txt['softban_delay_max_subtext'] = 'Будет выбран случайный промежуток времени между двумя указанными параметрами, и пользователю с «мягким» запретом придется ожидать окончания времени загрузки страницы. Для предотвращения перегрузки сервера этот промежуток ограничен 15 секундами.';
