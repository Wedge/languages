<?php
// Version: 2.0; Stats

$txt['stats_center'] = 'Центр статистики';
$txt['general_stats'] = 'Общая статистика';

// This is where we list all possible filter permutations for statistics. An empty line means a separator.
$txt['charts'] = array(
	'posts,topics,registers,most_on' => 'Всё|Кроме просмотров страниц',
	'topics,registers,most_on' => 'Всё|Кроме просмотров и сообщений',
	'',
	'posts,hits' => 'Новые сообщения и просмотры страниц',
	'posts,topics' => 'Новые сообщения и темы',
	'',
	'topics' => 'Новые темы',
	'posts' => 'Новые сообщения',
	'registers' => 'Новые пользователи',
	'most_on' => 'Наибольший онлайн',
	'hits' => 'Просмотров страниц',
);

$txt['group_monthly'] = 'Ежемесячная статистика';
$txt['group_daily'] = 'Ежедневная статистика';
$txt['lifetime'] = 'Всё';
$txt['last_month'] = 'За последний месяц';
$txt['last_year'] = 'За последний год';
$txt['stat_sum'] = 'Всего:';
$txt['stat_average'] = 'В среднем:';

$txt['date_format'] = '%d %b %Y г.';
$txt['date_format_this_year'] = '%d %b';

$txt['top_posters'] = 'Топ 10 пользователей';
$txt['top_boards'] = 'Топ 10 разделов';
$txt['forum_history'] = 'История форума (используется смещение времени)';
$txt['stats_date'] = 'Дата (гггг/мм/дд)';
$txt['top_topics_replies'] = 'Топ 10 тем (по количеству ответов)';
$txt['top_topics_views'] = 'Топ 10 тем (по количеству просмотров)';
$txt['top_liked'] = 'Топ понравившихся сообщений';
$txt['top_liked_posters'] = 'Топ понравившихся пользователей';
$txt['top_starters'] = 'Топ авторов тем';
$txt['most_time_online'] = 'Наибольшее время онлайн';
$txt['stats_more_detailed'] = 'подробней &raquo;';

$txt['average_registers'] = 'Среднее количество регистраций в день';
$txt['average_posts'] = 'Среднее количество сообщений в день';
$txt['average_topics'] = 'Среднее количество тем в день';
$txt['average_most_on'] = 'Средний онлайн в день';
$txt['users_online'] = 'Пользователей на форуме';
$txt['gender_ratio'] = 'Соотношение мужчин и женщин';
$txt['users_online_today'] = 'Сегодня на форуме';
$txt['num_hits'] = 'Всего просмотров страниц';
$txt['average_hits'] = 'Среднее количество просмотров страниц в день';

$txt['ssi_comment'] = 'комментарий';
$txt['ssi_comments'] = 'комментариев';
$txt['ssi_write_comment'] = 'Оставить комментарий';
$txt['ssi_no_guests'] = 'Нельзя указать раздел, недоступный гостям. Пожалуйста, проверьте ID раздела, прежде чем продолжить.';
$txt['xml_feed_desc'] = 'Свежие новости {forum_name}';

$txt['total_registers'] = 'Всего пользователей';
$txt['total_posts'] = 'Всего сообщений';
$txt['total_topics'] = 'Всего тем';
$txt['total_boards'] = 'Всего разделов';
$txt['total_cats'] = 'Всего категорий';

$txt['totalTimeLogged_d_short'] = 'д ';
$txt['totalTimeLogged_h_short'] = 'ч ';
$txt['totalTimeLogged_m_short'] = 'м';

// Debug related stats - when $db_show_debug is true.
$txt['debug_report'] = '
	<strong>Шаблоны</strong> (%1$d): <em>%2$s</em>.
	<strong>Блоки</strong> (%3$d): <a href="#" onclick="%11$s">список</a><span class="hide"><em>%4$s</em></span>.<br>
	<strong>Языковые файлы</strong> (%5$d): <a href="#" onclick="%11$s">список</a><span class="hide"><em>%6$s</em></span>.
	<strong>Таблицы стилей</strong> (%7$d): <a href="#" onclick="%11$s">список</a><span class="hide"><em>%8$s</em></span>.
	<strong>Подключенные файлы</strong> (%9$d): %10$s КБ - <a href="#" onclick="%11$s">список</a><span class="hide"><em>%12$s</em></span>.<br>
	<strong>Пик использования памяти</strong>: %13$d КБ.';
$txt['debug_cache_hits'] = '
	<strong>Попаданий в кэш</strong> (%1$d): %3$s байт за %2$s сек. - <a href="#" onclick="%4$s">список</a><span class="hide"><em>%5$s</em></span>.';
$txt['debug_cache_seconds_bytes'] = '%3$s байт - %1$s %2$s сек.';
$txt['debug_queries_used'] = '<strong>Запросов использовано</strong>: %1$d';
$txt['debug_queries_used_and_warnings'] = '<strong>Запросов использовано</strong>: %1$d, %2$d предупреждений';
$txt['debug_query_in_line'] = 'в <em>%1$s</em> строке <em>%2$s</em>, ';
$txt['debug_query_which_took'] = 'длительность: %1$s сек.';
$txt['debug_query_which_took_at'] = 'длительность: %1$s сек. и %2$s запросов.';
$txt['debug_show_queries'] = '<strong>Показать запросы</strong>';
$txt['debug_hide_queries'] = '<strong>Скрыть запросы</strong>';
$txt['html5_validation'] = '<strong>Валидация HTML5</strong>';
