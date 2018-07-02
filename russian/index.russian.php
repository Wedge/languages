<?php
// Version: 2.0; Index

// Locale (strftime, pspell_new) and spelling. (pspell_new, can be left as '' normally.)
// For more information see:
//		http://www.php.net/function.pspell-new
//		http://www.php.net/function.setlocale
// Again, SPELLING SHOULD BE '' 99% OF THE TIME!! Please read this!
$txt['lang_name'] = 'Russian (RU)';
$txt['lang_locale'] = 'ru_RU';
$txt['lang_paypal'] = 'RU';
$txt['lang_dictionary'] = 'ru';
$txt['lang_spelling'] = 'russian';

// Character set and right to left?
$txt['lang_rtl'] = false;

// Number formats?
$txt['number_format'] = '1,234.00';
$txt['time_format'] = '%@.%m.%Y г., %H:%M';
$txt['time_format_this_year'] = '%@.%m, %H:%M';

// Some languages need punctuation before a colon.
$txt[':'] = ':';

// %@ is a special format that adds a suffix to a day (1-31), e.g. 1st, 2nd...
// If your language doesn't have any prefixes/suffixes it could use, just set it to $txt['day_suffix'] = '%s';
$txt['day_suffix'] = '%s';

$txt['just_now'] = 'только что';
$txt['seconds_ago'] = '{time} сек. назад';
$txt['minutes_ago'] = '{time} мин. назад';
$txt['hours_ago'] = '{time} ч. назад';
$txt['days_ago'] = '{time} дн. назад';
$txt['months_ago'] = '{time} мес. назад';
$txt['years_ago'] = '{time} лет назад';

$txt['page_indicator'] = ' - страница %s'; // can be turned into an array as needed (1 => '', 'n' => ...)

$txt['days'] = array('Воскресенье', 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота');
$txt['days_short'] = array('Вс', 'Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб');
// Months must start with 1 => 'January'. (or translated, of course.)
$txt['months'] = array(1 => 'Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь');
$txt['months_short'] = array(1 => 'Янв.', 'Фев.', 'Март', 'Апр.', 'Май', 'Июнь', 'Июль', 'Авг.', 'Сен.', 'Окт.', 'Нояб.', 'Дек.');

$txt['admin'] = 'Админка';
$txt['moderate'] = 'Модерация';

$txt['save'] = 'Сохранить';
$txt['modify'] = 'Изменить';

$txt['members'] = 'Пользователи';
$txt['board_name'] = 'Название раздела';

$txt['member_postcount'] = 'Сообщений';
$txt['no_subject'] = '(Нет темы)';
$txt['view_profile'] = 'Просмотр профиля';
$txt['guest_title'] = 'Гость';
$txt['author'] = 'Автор';
$txt['on_date'] = '%1$s';
$txt['remove'] = 'Удалить';
$txt['start_new_topic'] = 'Новая тема';

$txt['login'] = 'Войти';
// Use numeric entities in the below string.
$txt['username'] = 'Имя пользователя';
$txt['password'] = 'Пароль';
$txt['username_or_email'] = 'Имя пользователя / e-mail';

$txt['board_moderator'] = 'Модератор раздела';
$txt['remove_topic'] = 'Удалить тему';
$txt['modify_msg'] = 'Изменить сообщение';
$txt['name'] = 'Имя';
$txt['email'] = 'E-mail';
$txt['subject'] = 'Заголовок';
$txt['message'] = 'Сообщение';
$txt['quick_modify'] = 'Изменить';

$txt['posts'] = 'Сообщений';
$txt['topics'] = 'Тем';
$txt['redirects'] = 'Перенаправлений';
$txt['replies'] = 'Ответов';
$txt['views'] = 'Просмотров';

$txt['num_posts'] = array(0 => 'Нет сообщений', 1 => '1 сообщение', 'n' => 'Сообщений: %s');
$txt['num_topics'] = array(0 => 'Нет тем', 1 => '1 тема', 'n' => 'Тем: %s');
$txt['num_redirects'] = array(0 => 'Нет перенаправлений', 1 => '1 перенаправление', 'n' => 'Перенаправлений: %s');
$txt['num_replies'] = array(0 => 'Нет ответов', 1 => '1 ответ', 'n' => 'Ответов: %s');
$txt['num_views'] = array(0 => 'Нет просмотров', 1 => '1 просмотр', 'n' => 'Просмотров: %s');

// Likes. What you've done implied past tense, while when you haven't liked it thus far, implies a present tense for everyone else.
$txt['you_like_this'] = array(
	0 => 'Вам понравилось это.',
	1 => 'Вам и ещё одному пользователю это понравилось.',
	'n' => 'Вам и ещё нескольким пользователям (%1$s) это понравилось.',
);
$txt['like_this'] = array(
	1 => 'Понравилось одному пользователю.',
	'n' => 'Понравилось нескольким пользователям (%1$s).',
);
$txt['like'] = 'Нравится';
$txt['unlike'] = 'Не нравится';

$txt['nobody_likes_this'] = 'Никому не понравилось.';
$txt['likes_header'] = array(1 => 'Понравилось одному пользователю.', 'n' => 'Понравилось нескольким пользователям (%s).');

$txt['choose_pass'] = 'Пароль';
$txt['verify_pass'] = 'Подтвердите пароль';
$txt['position'] = 'Группа';

$txt['total'] = 'Всего';
$txt['posts_made'] = 'сообщений';
$txt['website'] = 'Сайт';
$txt['register'] = 'Регистрация';
$txt['warning_status'] = 'Статус предупреждения';
$txt['user_warn_warned'] = 'Пользователь был предупрежден';
$txt['user_warn_moderate'] = 'Сообщения пользователя поставлены в очередь для одобрения';
$txt['user_warn_mute'] = 'Пользователь забанен из-за сообщения';
$txt['user_warn_soft_ban'] = 'Пользователь забанен (мягко)';
$txt['user_warn_hard_ban'] = 'Пользователь забанен (жёстко)';
$txt['warn_warned'] = 'Предупреждён';
$txt['warn_moderate'] = 'Модерируемый';
$txt['warn_mute'] = 'Отключен';
$txt['warn_soft_ban'] = 'Забанен (мягко)';
$txt['warn_hard_ban'] = 'Забанен (жёстко)';

// User menu strings
$txt['usermenu_profile'] = 'Профиль';
$txt['usermenu_profile_desc'] = 'Посмотреть профиль ползователя';
$txt['usermenu_website'] = 'Сайт';
$txt['usermenu_website_desc'] = 'Перейти на сайт пользователя';
$txt['usermenu_sendpm'] = 'Сообщение';
$txt['usermenu_sendpm_desc'] = 'Отправить личное сообщение пользователю';
$txt['usermenu_showposts'] = 'Просмотр сообщений';
$txt['usermenu_showposts_desc'] = 'Посмотреть последние записи пользователя';
$txt['usermenu_addbuddy'] = '+ Контакты';
$txt['usermenu_addbuddy_desc'] = 'Добавить пользователя в мой список контактов';
$txt['usermenu_removebuddy'] = '- Контакты';
$txt['usermenu_removebuddy_desc'] = 'Удалить пользователя из списка контактов';
$txt['usermenu_ignore'] = 'Игнорировать';
$txt['usermenu_ignore_desc'] = 'Игнорировать этого пользователя';
$txt['usermenu_unignore'] = 'Не игнорировать';
$txt['usermenu_unignore_desc'] = 'Не игнорировать этого пользователя';
$txt['usermenu_seeip'] = '<span style="color: #aaa">IP: %2%</span>';
$txt['usermenu_seeip_desc'] = 'Отправлено с этого IP-адреса';
$txt['usermenu_trackip'] = '<span style="color: #aaa">IP: %2%</span>';
$txt['usermenu_trackip_desc'] = 'Отследить этот IP-адрес';

// Action menu strings (per post)
$txt['acme_like'] = 'Нравится';
$txt['acme_like_desc'] = 'Оценить сообщение';
$txt['acme_unlike'] = 'Не нравится';
$txt['acme_unlike_desc'] = 'Оценить сообщение';
$txt['acme_quote'] = 'Цитировать';
$txt['acme_quote_desc'] = 'Ответить на сообщение';
$txt['acme_modify'] = 'Изменить';
$txt['acme_modify_desc'] = 'Отредактировать сообщение';
$txt['acme_report'] = 'Пожаловаться';
$txt['acme_report_desc'] = 'Отправить модератору жалобу на сообщение';
$txt['acme_restore'] = 'Восстановить';
$txt['acme_restore_desc'] = 'Вновь сделать сообщение видимым';
$txt['acme_merge'] = 'Объединить';
$txt['acme_merge_desc'] = 'Соединить текущее и предыдущее сообщения';
$txt['acme_split'] = 'Разделить';
$txt['acme_split_desc'] = 'Разделить тему, создав новую';
$txt['acme_remove'] = 'Удалить';
$txt['acme_remove_desc'] = 'Удалить сообщение окончательно';
$txt['acme_approve'] = 'Одобрить';
$txt['acme_approve_desc'] = 'Разрешить просмотр сообщения другим';
$txt['acme_warn'] = 'Предупредить';
$txt['acme_warn_desc'] = 'Выдать предупреждение';

$txt['actions_button'] = 'Действия&hellip;';
$txt['more_actions'] = 'Ещё&hellip;';

$txt['board_index'] = 'Список разделов';
$txt['message_index'] = 'Список тем';
$txt['news'] = 'Новости';
$txt['home'] = 'Главная';
$txt['community'] = 'Сообщество';

$txt['lock_unlock'] = 'Заблокировать/разблокировать тему';
$txt['post'] = 'Отправить';
$txt['error_occurred'] = 'Произошла какая-то ошибка!';
$txt['logout'] = 'Выйти';
$txt['started_by'] = 'Создано';
$txt['last_post_author_link_time'] = '<strong>Последнее сообщение</strong> от {author} в {link} {time}';
$txt['last_post_time_link'] = '{time} в {link}';
$txt['last_post_time_author'] = '{time} от {author}';
$txt['board_off_limits'] = 'Этот раздел для вас недоступен.';

$txt['last_post'] = 'Последнее сообщение';
// Use numeric entities in the below string.
$txt['topic'] = 'Тема';
$txt['help'] = 'Справка';
$txt['notify'] = 'Подписаться';
$txt['unnotify'] = 'Отписаться';
$txt['notify_request'] = 'Хотите получать уведомления при появлении ответов в этой теме?';

$txt['move_topic'] = 'Переместить тему';
$txt['move_to'] = 'Переместить в';
$txt['pages'] = 'Страницы';
$txt['users_active'] = 'Пользователи за последние %1$d минут';
$txt['personal_messages'] = 'Личные сообщения';

$txt['quote_from'] = 'Цитата';
$txt['quote'] = 'Цитата';
$txt['quote_noun'] = 'Процитировать';
$txt['reply'] = 'Ответить';
$txt['reply_number'] = 'Ответ #<strong>%1$d</strong>,';

$txt['approve'] = 'Одобрить';
$txt['approve_all'] = 'одобрить все';
$txt['awaiting_approval'] = 'Ожидает одобрения';
$txt['post_awaiting_approval'] = 'Примечание: Данное сообщение ожидает одобрения модератора.';
$txt['there_are_unapproved_topics'] = 'В данном разделе ожидают одобрения %1$s тем и %2$s сообщений. Нажмите <a href="%3$s">здесь</a> для просмотра.';

$txt['msg_alert_none'] = 'Нет сообщений...';
// SSI - The {new} construct is used to add the (x new) area in a language-dependent manner, using unread_pms, as below.
$txt['you_have_msg'] = array(
	0 => 'нет сообщений',
	1 => '<a href="<URL>?action=pm">1</a> сообщение {new}',
	'n' => '<a href="<URL>?action=pm">%s</a> сообщений {new}',
);
$txt['unread_pms'] = array(0 => '(нет новых)', 1 => '(1 новое)', 'n' => '(%s новых)');

$txt['remove_message'] = 'Удалить это сообщение';
$txt['remove_message_confirm'] = 'Удалить это сообщение?';

$txt['online_users'] = 'Сейчас на форуме';
$txt['personal_message'] = 'Личное сообщение';
$txt['jump_to'] = 'Быстрый переход';
$txt['are_sure_remove_topic'] = 'Хотите удалить эту тему?';

$txt['go'] = 'Перейти';
$txt['ok'] = 'OK';
$txt['yes'] = 'Да';
$txt['no'] = 'Нет';

$txt['search'] = 'Поиск';
$txt['all_pages'] = 'Все';

$txt['back'] = 'Назад';
$txt['topic_started'] = 'Тема создана пользователем';
$txt['title'] = 'Заголовок';
$txt['post_by'] = 'Сообщение';
$txt['welcome_member'] = 'Добро пожаловать, %1$s.';
$txt['notify_deactivate'] = 'Хотите отключить оповещения для этой темы?';

$txt['last_edit'] = 'Отредактировано {date} пользователем {name}';
$txt['last_edit_mine'] = 'Отредактировано {date}';

$txt['location'] = 'Местоположение';
$txt['gender'] = 'Пол';
$txt['date_registered'] = 'Дата регистрации';

$txt['recent_posts'] = 'Последние сообщения';
$txt['recent_view'] = 'Просмотр самых последних сообщений на форуме.';

$txt['male'] = 'Мужской';
$txt['female'] = 'Женский';

$txt['welcome_guest'] = 'Добро пожаловать, <strong>%1$s</strong>. Пожалуйста, <a href="<URL>?action=login">авторизуйтесь</a> или <a href="<URL>?action=register">зарегистрируйтесь</a>.';
$txt['welcome_guest_noregister'] = 'Добро пожаловать, <strong>%1$s</strong>. Пожалуйста, <a href="<URL>?action=login">авторизуйтесь</a>.';
$txt['login_or_register'] = 'Пожалуйста, <a href="<URL>?action=login">авторизуйтесь</a> или <a href="<URL>?action=register">зарегистрируйтесь</a>.';
$txt['please_login'] = 'Пожалуйста, <a href="<URL>?action=login">авторизуйтесь</a>.';
$txt['welcome_guest_activate'] = '<br>Не получили <a href="<URL>?action=activate">письмо с кодом активации</a>?';
$txt['hello_member'] = 'Здравствуйте,';
$txt['hello_guest'] = 'Добро пожаловать,';
$txt['select_destination'] = 'Выберите раздел';

$txt['posted_by'] = 'Автор';

$txt['moderator'] = 'Модератор';
$txt['moderators'] = 'Модераторы';

// For the Short form, use '!' in case your language's 'New' is too long.
$txt['new'] = 'Новый';
$txt['new_short'] = '!';

$txt['edited'] = 'Отредактировано';

$txt['forgot_your_password'] = 'Забыли пароль?';

$txt['date'] = 'Дата';
$txt['from'] = 'От';
$txt['to'] = 'Кому';

$txt['members_title'] = 'Пользователи';

$txt['redirect_board'] = 'Перенаправление';

$txt['notification'] = 'Уведомления';

$txt['your_ban'] = 'Извините, %1$s, вы забанены и не можете оставлять сообщения на форуме!<br>%2$s';
$txt['your_ban_expires'] = 'Ваш бан истекает через %1$s.';
$txt['your_ban_expires_never'] = 'Вы забанены навсегда.';
$txt['ban_continue_browse'] = 'Можно продолжать пользоваться форумом в качестве гостя.';

$txt['mark_board_read'] = 'Отметить все темы в этом разделе прочитанными';
$txt['mark_as_read'] = 'Отметить ВСЕ сообщения прочитанными';

$txt['legend'] = 'Обозначения';
$txt['locked_topic'] = 'Закрытая тема';
$txt['normal_topic'] = 'Обычная тема';
$txt['participation_caption'] = 'Тема с вашими сообщениями';

$txt['print'] = 'Печать';
$txt['profile'] = 'Профиль';
$txt['not_applicable'] = 'Н/Д';
$txt['preview'] = 'Превью';
$txt['remove_draft'] = 'Удалить черновик';
$txt['ip'] = 'IP';
$txt['by'] = '';
$txt['days_word'] = 'дней';
$txt['search_for'] = 'Искать';
$txt['maintain_mode_on'] = 'Форум находится на \'техобслуживании\'.';

$txt['global_stats'] = 'Общая статистика';
$txt['forum_stats'] = 'Статистика раздела';
$txt['blog_stats'] = 'Статистика блога';
$txt['topic_stats'] = 'Статистика темы';

$txt['latest_member'] = 'Последний пользователь';
$txt['latest_post'] = 'Последнее сообщение';

$txt['youve_got_pms'] = array(0 => 'Нет сообщений...', 1 => '1 сообщение...', 'n' => '%s сообщений...');
$txt['click_to_view_them'] = 'Нажмите <a href="%1$s">здесь</a> для просмотра.';

$txt['print_page'] = 'Печать страницы';

$txt['info_center_title'] = 'Информационный центр';

$txt['send_topic'] = 'Поделиться темой';

$txt['check_all'] = 'Выделить все';

$txt['file'] = 'Файл';

$txt['today'] = '<strong>Сегодня</strong> в ';
$txt['yesterday'] = '<strong>Вчера</strong> в ';
$txt['new_poll'] = 'Новое голосование';
$txt['poll_vote'] = 'Голосовать';
$txt['poll_total_voters'] = 'Проголосовало пользователей';
$txt['poll_results'] = 'Посмотреть результаты';
$txt['poll_lock'] = 'Заблокировать голосование';
$txt['poll_unlock'] = 'Разблокировать голосование';
$txt['poll_edit'] = 'Редактировать голосование';
$txt['poll'] = 'Голосование';
$txt['poll_voters_guests_only'] = array(
	1 => '1 гость',
	'n' => '%1$s гостей',
);
$txt['poll_voters'] = array(
	1 => 'и 1 гость',
	'n' => 'и %1$s гостей',
);
$txt['poll_visibility_admin'] = 'Только администраторы смогут увидеть участников опроса.';
$txt['poll_visibility_creator'] = 'Администраторы и автор голосования смогут увидеть участников опроса.';
$txt['poll_visibility_members'] = 'Любой зарегистрированный пользователь сможет увидеть участников опроса.';
$txt['poll_visibility_anyone'] = 'Кто угодно, даже гости, смогут увидеть участников опроса.';
$txt['one_day'] = 'На 1 день';
$txt['one_week'] = 'На 1 неделю';
$txt['one_month'] = 'На 1 месяц';
$txt['forever'] = 'Навсегда';
$txt['quick_login_desc'] = '';
$txt['one_hour'] = 'На 1 час';
$txt['board'] = 'Раздел';
$txt['in'] = 'в';
$txt['pinned_topic'] = 'Закреплённая тема';

$txt['delete'] = 'Удалить';

$txt['kilobyte'] = 'КБ';

$txt['more_stats'] = 'Подробная статистика';

$txt['code'] = 'Код';
$txt['code_select'] = '[Выделить]';

$txt['merge'] = 'Объединить темы';
$txt['new_topic'] = 'Новая тема';

$txt['set_pin'] = 'Закрепить тему';
$txt['set_unpin'] = 'Открепить тему';
$txt['set_lock'] = 'Заблокировать тему';
$txt['set_unlock'] = 'Разблокировать тему';
$txt['order_pinned_topic'] = 'Изменить порядок закрепления';

$txt['page_created'] = 'Страница создана за ';
$txt['seconds_with_query'] = '%1$.2f с, 1 запрос к базе';
$txt['seconds_with_queries'] = '%1$.2f с, запросов к базе: %2$d';

$txt['online'] = 'На форуме';
$txt['offline'] = 'Вне форума';
$txt['pm_online'] = 'Личное сообщение (онлайн)';
$txt['pm_offline'] = 'Личное сообщение (офлайн)';
$txt['online_status'] = 'Статус';

$txt['go_up'] = 'Вверх';
$txt['go_down'] = 'Вниз';

$txt['site_credits'] = 'Команда форума | Авторские права';
$txt['copyright'] = 'Движок — <a href="https://wedge.org/" target="_blank" class="new_win">Wedge</a>';
$txt['dynamic_replacements'] = '<abbr title="Динамические замены">ДЗ</abbr>';

$txt['template_block_error'] = 'Невозможно найти шаблон блока "%1$s".';
$txt['theme_template_error'] = 'Невозможно загрузить шаблон "%1$s".';
$txt['theme_language_error'] = 'Невозможно загрузить языковой файл "%1$s".';

$txt['sub_boards'] = 'Подразделы';

$txt['smtp_no_connect'] = 'Ошибка подключения к SMTP серверу';
$txt['smtp_port_ssl'] = 'Неверно указан SMTP порт; Для SSL серверов он должен быть 465.';
$txt['smtp_bad_response'] = 'Не получается получить ответ с почтового сервера';
$txt['smtp_error'] = 'Проблема с отправкой почты. Ошибка: ';

$txt['mlist_search'] = 'Поиск пользователей';
$txt['mlist_search_again'] = 'Искать ещё раз';
$txt['mlist_search_email'] = 'Искать по электронному адресу';
$txt['mlist_search_group'] = 'Искать по местоположению';
$txt['mlist_search_name'] = 'Искать по имени';
$txt['mlist_search_website'] = 'Искать по сайту';
$txt['mlist_search_results'] = 'Результаты поиска';
$txt['mlist_search_by'] = 'Искать по %1$s';
$txt['mlist_menu_view'] = 'Список пользователей';

$txt['attach_downloaded'] = array(1 => 'загружено 1 раз.', 'n' => 'загружено %s раз.');
$txt['attach_viewed'] = array(1 => 'просмотрено 1 раз.', 'n' => 'просмотрено %s раз.');

$txt['settings'] = 'Настройки';
$txt['never'] = 'Никогда';
$txt['more'] = 'ещё';

$txt['hostname'] = 'Хост';
$txt['you_are_post_banned'] = 'Извините, %1$s, но вы забанены и поэтому не можете оставлять сообщения на форуме.';
$txt['you_are_pm_banned'] = 'Извините, %1$s, но вы забанены и поэтому не можете использовать систему личных сообщений.';
$txt['you_are_post_pm_banned'] = 'Извините, %1$s, но вы забанены и поэтому не можете оставлять сообщения на форуме и пользоваться системой личных сообщений.';

$txt['add_poll'] = 'Добавить голосование';
$txt['poll_options6'] = 'Доступно вариантов ответа: %1$s.';
$txt['poll_remove'] = 'Удалить голосование';
$txt['poll_remove_warn'] = 'Хотите удалить голосование?';
$txt['poll_results_expire'] = 'Результаты будут показаны после окончания голосования';
$txt['poll_expires_on'] = 'Голосование заканчивается';
$txt['poll_expired_on'] = 'Голосование закончилось';
$txt['poll_change_vote'] = 'Удалить голос';
$txt['poll_return_vote'] = 'Настройка голосования';
$txt['poll_cannot_see'] = 'В данный момент просмотреть результаты голосования невозможно.';

$txt['quick_mod_approve'] = 'Одобрить выделенные';
$txt['quick_mod_remove'] = 'Удалить выделенные';
$txt['quick_mod_lock'] = 'Заблокировать/Разблокировать выделенные';
$txt['quick_mod_pin'] = 'Прикрепить/Открепить выделенные';
$txt['quick_mod_move'] = 'Переместить выделенные в';
$txt['quick_mod_merge'] = 'Соединить выделенные';
$txt['quick_mod_markread'] = 'Пометить выделенные как прочитанные';
$txt['quick_mod_go'] = 'Вперёд!';

$txt['generic_confirm_request'] = 'Действительно хотите это сделать?';

$txt['reagree_reply'] = 'Правила сайта изменены. Прежде чем вы сможете публиковать сообщения на сайте, вам нужно будет повторно принять <a href="%1$s">пользовательское соглашение</a>.';
$txt['quick_reply'] = 'Быстрый ответ';
$txt['quick_reply_warning'] = 'Внимание: эта тема заблокирована! Ответить в ней может только модератор или администратор форума.';
$txt['quick_reply_verification'] = 'После отправки сообщения произойдёт перенаправление на страницу полного ответа, чтобы подтвердить его %1$s.';
$txt['quick_reply_verification_guests'] = '(требуется для всех гостей)';
$txt['quick_reply_verification_posts'] = '(требуется для всех пользователей, у которых менее %1$d сообщений)';
$txt['wait_for_approval'] = 'Примечание: данное сообщение не будет отображаться, пока модератор не одобрит его.';

$txt['notification_enable_board'] = 'Хотите получать уведомления при создании новых тем в данном разделе форума?';
$txt['notification_disable_board'] = 'Хотите отключить уведомления при создании новых тем в данном разделе форума?';
$txt['notification_enable_topic'] = 'Хотите получать уведомления при появлении новых ответов в этой теме?';
$txt['notification_disable_topic'] = 'Хотите отключить уведомления при появлении новых ответов в этой теме?';

$txt['unread_topics'] = 'Непрочитанные темы';
$txt['unread_replies'] = 'Темы с непрочитанными ответами';

$txt['who_title'] = 'Активность';
$txt['who_and'] = ' и ';
$txt['who_viewing_topic'] = ' просматривают эту тему.';
$txt['who_viewing_board'] = ' просматривают этот раздел.';
$txt['who_member'] = 'Пользователь';

// Feed block
$txt['feed'] = 'RSS';
$txt['feed_current_topic'] = 'Эта тема:';
$txt['feed_current_forum'] = 'Этот раздел:';
$txt['feed_current_blog'] = 'Этот блог:';
$txt['feed_everywhere'] = 'Все:';
$txt['feed_posts'] = '<a href="%1$s">сообщения</a>';
$txt['feed_topics'] = '<a href="%1$s">темы</a>';

$txt['guest'] = 'Гость';
$txt['guests'] = 'Гостей';
$txt['user'] = 'Пользователь';
$txt['users'] = 'Пользователей';
$txt['hidden'] = 'Скрытых';

$txt['buddy'] = 'Контакт';
$txt['buddies'] = 'Контакты';
$txt['contacts_friends'] = 'Друзья';
$txt['contacts_known'] = 'Знакомые';
$txt['contacts_work'] = 'Коллеги';
$txt['contacts_family'] = 'Семья';
$txt['contacts_follow'] = 'Подписчики';
$txt['contacts_restrict'] = 'Игнорируемые';
$txt['contacts_custom'] = 'Другие';
$txt['contacts_new'] = 'Создать список';
$txt['is_buddy'] = 'В моем списке контактов';
$txt['is_not_buddy'] = 'Нет в моем списке контактов';

$txt['most_online_ever'] = 'Максимум онлайн за всё время';
$txt['most_online_today'] = 'Максимум онлайн сегодня';

$txt['response_prefix'] = '';

$txt['approve_members_waiting'] = array(
	1 => '1 пользователь <a href="<URL>?action=admin;area=viewmembers;sa=browse;type=approve">ожидает одобрения</a>.',
	'n' => 'Несколько пользователей (%s) <a href="<URL>?action=admin;area=viewmembers;sa=browse;type=approve">ожидают одобрения</a>.',
);

$txt['notifyboard_turnon'] = 'Хотите получать уведомления о новых темах в этом разделе?';
$txt['notifyboard_turnoff'] = 'Не хотите получать уведомления о новых темах в этом разделе?';

$txt['show_unread'] = 'Непрочитанные сообщения';
$txt['show_unread_replies'] = 'Непрочитанные ответы';

$txt['quickmod_delete_selected'] = 'Удалить выбранные';

$txt['show_personal_messages'] = 'У вас есть новые личные сообщения.<br><br>Перейти к их просмотру?';

$txt['previous_next_back'] = '&laquo; предыдущая тема';
$txt['previous_next_forward'] = 'следующая тема &raquo;';

$txt['upshrink_description'] = 'Свернуть/развернуть.';

$txt['mark_unread'] = 'Отметить непрочитанной';

$txt['error_while_submitting'] = 'Следующие ошибки возникли при попытке отправки сообщения:';
$txt['error_old_topic'] = 'Предупреждение: в данной теме не было сообщений более %1$d дней.<br>Если не уверены, что хотите ответить, то лучше создайте новую тему.';

$txt['mark_read_short'] = 'Пометить прочитанными';

$txt['pm_short'] = 'Личные сообщения';

$txt['hello_member_ndt'] = 'Здравствуйте, <span>%1$s</span>!';

$txt['unapproved_posts'] = 'Неодобренные сообщения (тем: %1$d, сообщений: %2$d)';

$txt['ajax_in_progress'] = 'Загружается...';

$txt['verification'] = 'Подтверждение';
$txt['visual_verification_description'] = 'Наберите символы, которые изображены на картинке';
$txt['visual_verification_sound'] = 'Прослушать';
$txt['visual_verification_request_new'] = 'Запросить другое изображение';
$txt['visual_verification_hidden'] = 'Это поле должно быть пустым';

// Sub menu labels
$txt['summary'] = 'Основная информация';
$txt['account'] = 'Настройки аккаунта';
$txt['forumprofile'] = 'Настройки профиля';
$txt['change_skin'] = 'Смена оформления';
$txt['draft_posts'] = 'Черновики сообщений';

$txt['skin_default'] = 'Шаблон по умолчанию';
$txt['skin_default_mobile'] = 'Шаблон по умолчанию (для мобильных устройств)';

$txt['settings_title'] = 'Основные настройки';
$txt['plugin_manager'] = 'Плагины';
$txt['errlog'] = 'Логи ошибок';
$txt['edit_permissions'] = 'Права доступа';
$txt['mc_unapproved_poststopics'] = 'Неодобренные сообщения';
$txt['mc_reported_posts'] = 'Жалобы на сообщения';
$txt['modlog_view'] = 'Логи модерации';
$txt['unapproved_members'] = 'Неодобренные пользователи';
$txt['admin_uncache'] = 'Очистить кэш';

$txt['ignoring_user'] = 'Вы игнорируете этого пользователя. Нажмите здесь для просмотра или скрытия сообщения.';

$txt['spider'] = 'Паук';
$txt['spiders'] = 'Пауки';

$txt['downloads'] = 'Загрузок';
$txt['filesize'] = 'Размер файла';

$txt['sideshow'] = 'Нажмите здесь или среднюю кнопку мышки в любом месте страницы, чтобы переключить боковую панель.';

// Restore topic
$txt['restore_topic'] = 'Восстановить тему';
$txt['quick_mod_restore'] = 'Восстановить выделенные сообщения';

$txt['autosuggest_delete_item'] = 'Удалить элемент';

// Ignoring topics
$txt['ignoring_topic'] = 'Вы игнорируете эту тему.';
$txt['ignore_topic'] = 'Игнорировать';
$txt['unignore_topic'] = 'Не игнорировать';

// Site type.
$txt['b_type'] = array('blog' => 'блог', 'forum' => 'форум', 'media' => 'галерея', 'site' => 'сайт');
$txt['b_item'] = array('blog' => 'пост', 'forum' => 'тема', 'media' => 'элемент', 'site' => 'статья');

// Indicates the date of the first post when merging two posts.
$txt['search_date_posted'] = 'Опубликовано:';

// Spoiler tags. But you're smart, so you don't need me telling.
$txt['spoiler'] = 'Спойлер';
$txt['click_for_spoiler'] = '(нажмите для показа/скрытия)';

$txt['readmore'] = '(Более %1$d символов)';
$txt['thoughts'] = 'Размышления';
$txt['add_thought'] = '(Поделиться мыслями)';
$txt['no_thoughts'] = 'Пока нет размышлений.';
$txt['thome_edit'] = 'Изменить';
$txt['thome_remove'] = 'Удалить';
$txt['thome_reply'] = 'Ответить';
$txt['thome_context'] = 'В контексте';
$txt['thome_personal'] = 'Отклики?';
$txt['thome_personal_desc'] = 'Показывать это размышление под моим ником в темах, для откликов.';

// Do not use double quotes in the following strings.
$txt['privacy'] = 'Конфиденциальность';
$txt['privacy_default'] = 'По умолчанию';
$txt['privacy_public'] = 'Все';
$txt['privacy_members'] = 'Пользователи';
$txt['privacy_group'] = 'Группы';
$txt['privacy_list'] = 'Контакты';
$txt['privacy_author'] = 'Только я';

$txt['privacy_bubble'] = 'Кто видит: <strong>{PRIVACY}</strong>.';
$txt['privacy_can_edit'] = 'Нажмите для изменения настроек приватности.';

// Do not use double quotes in the form_* text strings. (Why would you?)
$txt['form_submit'] = 'Отправить';
$txt['form_cancel'] = 'Отменить';

// Media Gallery
$txt['media_gallery'] = 'Медиатека';
$txt['media_home'] = 'Обзор';
$txt['media_unseen'] = 'Новинки';
$txt['media_profile_sum'] = 'Сводка';
$txt['media_view_items'] = 'Просмотр элементов';
$txt['media_view_coms'] = 'Просмотр комментариев';
$txt['media_view_votes'] = 'Просмотр оценок';
$txt['media_gotolink'] = 'Сведения';
$txt['media_zoom'] = 'Увеличить';
