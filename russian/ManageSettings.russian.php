<?php
// Version: 2.0; ManageSettings

$txt['settings_desc'] = 'Здесь настраиваются различные функции и базовые параметры форума. Нажмите на иконку справки для получения дополнительных сведений об интересующей настройке.';

$txt['allow_guestAccess'] = 'Разрешить гостям просматривать форум';
$txt['userLanguage'] = 'Разрешить пользователям выбирать язык форума';
$txt['time_offset'] = 'Принудительное смещение времени';
$txt['time_offset_subtext'] = '(изменяется и в профилях пользователей.)';
$txt['default_timezone'] = 'Часовой пояс сервера';
$txt['failed_login_threshold'] = 'Количество неудачных попыток входа';
$txt['enable_quick_login'] = 'Форма быстрой авторизации на каждой странице';
$txt['age_restrictions'] = 'Минимальные возрастные ограничения';
$txt['trackStats'] = 'Включить подробную статистику';
$txt['hitStats'] = 'Включить статистику просмотров (статистика должна быть включена)';
$txt['enableCompressedOutput'] = 'Использовать сжатие трафика';
$txt['enableCompressedData'] = 'Использовать сжатие JS/CSS';
$txt['obfuscate_filenames'] = 'Обфускация JS/CSS';
$txt['minify'] = 'Минимизировать файлы JavaScript с помощью...';
$txt['minify_none'] = 'Нет|Полезно для отладки.';
$txt['minify_jsmin'] = 'JSMin|Самый безопасный выбор.';
$txt['minify_packer'] = 'Packer|Лучший компромисс. Тем не менее, посмотрите&lt;br&gt;всплывающую подсказку, прежде чем выбрать.';
$txt['minify_closure'] = 'Google Closure|Пожалуйста, прочтите справочную информацию,&lt;br&gt;прежде чем выбрать!';
$txt['jquery_origin'] = 'Подключать jQuery';
$txt['jquery_local'] = 'С данного сервера (и объединять с script.js)';
$txt['jquery_jquery'] = 'jQuery CDN';
$txt['jquery_google'] = 'Google CDN';
$txt['jquery_microsoft'] = 'Microsoft CDN';
$txt['db_show_debug'] = 'Показывать отладочную информацию';
$txt['db_show_debug_who'] = 'Показывать отладочную информацию:';
$txt['db_show_debug_who_log'] = 'Показывать лог запросов к базе данных:';
$txt['db_show_debug_admin'] = 'Только администраторам';
$txt['db_show_debug_admin_mod'] = 'Администраторам и модераторам';
$txt['db_show_debug_regular'] = 'Всем залогиненным пользователям';
$txt['db_show_debug_any'] = 'Всем пользователям, включая гостей';
$txt['db_show_debug_none'] = 'Никому';

$txt['databaseSession_enable'] = 'Хранить сессии в базе данных';
$txt['databaseSession_loose'] = 'Разрешать браузерам возвращаться на кэшированную страницу';
$txt['databaseSession_lifetime'] = 'Продолжительность сессии в секундах:';
$txt['enableErrorLogging'] = 'Включить протоколирование ошибок';
$txt['enableErrorPasswordLogging'] = 'Отслеживать ввод неправильных паролей';
$txt['enableError404Logging'] = 'Отслеживать ошибки 404 (файл не найден)';
$txt['enableErrorQueryLogging'] = 'Записывать текст SQL-запроса к базе данных';
$txt['logPruning'] = 'Очистка логов';
$txt['log_enabled_moderate'] = 'Записывать действия модераторов';
$txt['log_enabled_moderate_subtext'] = 'Это включает удаление сообщений, перемещение тем и т. д.';
$txt['log_enabled_admin'] = 'Записывать действия администраторов';
$txt['log_enabled_admin_subtext'] = 'Это включает вещи типа создания новых разделов.';
$txt['log_enabled_profile'] = 'Отслеживать изменения профилей';
$txt['log_enabled_profile_subtext'] = 'Это включает смену отображаемого имени и других полей.';
$txt['pruningOptions'] = 'Разрешить выполнять очистку логов';
$txt['pruneZeroDisable'] = '(0 — отключить)';
$txt['pruneErrorLog'] = 'Удалять записи в логе ошибок старше';
$txt['pruneModLog'] = 'Удалять записи в  логе модерации старше';
$txt['pruneReportLog'] = 'Удалять записи в логе жалоб модератору старше';
$txt['pruneScheduledTaskLog'] = 'Удалять записи в логе диспетчера задач старше';
$txt['pruneSpiderHitLog'] = 'Удалять записи в логе активности поисковых машин старше';
$txt['cookieTime'] = 'Время действия куки (в минутах)';
$txt['localCookies'] = 'Использовать локальное хранение куки';
$txt['localCookies_subtext'] = '(SSI с этой функцией работать не будет.)';
$txt['globalCookies'] = 'Использовать отдельные куки для поддоменов';
$txt['globalCookies_subtext'] = '(сначала отключите локальное хранение куки!)';
$txt['secureCookies'] = 'Шифровать куки';
$txt['secureCookies_subtext'] = '(Применяется только при использовании HTTPS-соединений!)';
$txt['send_validation_onChange'] = 'Требовать одобрения учётной записи после смены электронного адреса';
$txt['approveAccountDeletion'] = 'Запрашивать одобрение администратора при попытке пользователя удалить свой аккаунт';
$txt['autoOptMaxOnline'] = 'Максимум пользователей онлайн во время оптимизации';
$txt['autoOptMaxOnline_subtext'] = '(0 — без ограничений.)';
$txt['autoFixDatabase'] = 'Автоматически восстанавливать поврежденные таблицы';
$txt['allow_disableAnnounce'] = 'Разрешить пользователям отключать уведомления';
$txt['disallow_sendBody'] = 'Не отправлять текст сообщений в уведомлениях';
$txt['max_pm_recipients'] = 'Максимальное количество получателей при отправке личного сообщения';
$txt['max_pm_recipients_subtext'] = '(0 — без ограничений, на администраторов не распространяется)';
$txt['pm_posts_verification'] = 'Количество сообщений, после которого не нужно вводить код при отправке ЛС';
$txt['pm_posts_verification_subtext'] = '(0 — без ограничений, на администраторов не распространяется)';
$txt['pm_posts_per_hour'] = 'Количество ЛС, которое может отослать пользователь в течение одного часа';
$txt['pm_posts_per_hour_subtext'] = '(0 — без ограничений, на модераторов не распространяется)';
$txt['home_url'] = 'Адрес сайта';
$txt['home_url_subtext'] = 'Если форум является частью большого сайта, укажите здесь его адрес, тогда пункт <strong>Главная</strong> в меню будет вести на сайт, а пункт <strong>Сообщество</strong> — на форум.';
$txt['home_link'] = 'Сделать заголовок ссылкой на главную страницу';
$txt['home_link_subtext'] = 'Заголовок форума в верхней части страницы является ссылкой на главную страницу форума. Включив эту опцию, вы перепишете эту ссылку адресом сайта, указанным выше.';
$txt['site_slogan'] = 'Девиз сайта';
$txt['site_slogan_desc'] = 'Добавьте свой текст сюда. Оставьте пустым для отображения пустого блока #logo, настроить который можно через CSS.';
$txt['header_logo_url'] = 'Адрес логотипа';
$txt['header_logo_url_desc'] = 'Оставьте пустым для отображения названия форума или логотипа по умолчанию.';
$txt['todayMod'] = 'Разрешить функцию &laquo;Сегодня&raquo;';
$txt['today_disabled'] = 'Запретить';
$txt['today_only'] = 'Только &laquo;Сегодня&raquo;';
$txt['yesterday_today'] = '&laquo;Сегодня&raquo; и &laquo;Вчера&raquo;';
$txt['timeLoadPageEnable'] = 'Отображать время создания страниц';
$txt['disableHostnameLookup'] = 'Не отображать названия хостов пользователей';
$txt['who_enabled'] = 'Отображать список &laquo;Сейчас на форуме&raquo;';
$txt['display_who_viewing'] = 'Отображать текущих читателей на страницах разделов и тем';
$txt['who_display_viewing_off'] = 'Нет';
$txt['who_display_viewing_numbers'] = 'Только количество';
$txt['who_display_viewing_names'] = 'Только имена пользователей';
$txt['show_stats_index'] = 'Отображать статистику на главной странице';
$txt['show_latest_member'] = 'Отображать последнего зарегистрированного пользователя на главной странице';
$txt['show_avatars'] = 'Отображать аватары пользователей в сообщениях';
$txt['show_signatures'] = 'Отображать подписи в сообщениях';
$txt['show_blurb'] = 'Отображать надписи под аватарами в сообщениях';
$txt['show_gender'] = 'Отображать индикатор пола в сообщения';
$txt['show_board_desc'] = 'Отображать описания внутри разделов';
$txt['show_children'] = 'Отображать подразделы на каждой странице раздела';

$txt['pm_enabled'] = 'Разрешить личную переписку между пользователями';
$txt['pm_read'] = 'Группы, которым разрешено читать сообщения';
$txt['pm_send'] = 'Группы, которым разрешено отправлять сообщения';
$txt['save_pm_draft'] = 'Группы, которым разрешено сохранять черновики';
$txt['auto_save_pm_draft'] = 'Группы, чьи черновики будут сохраняться автоматически';
$txt['pm_draft_other_settings'] = 'Вы также можете настроить периодичность сохранения черновиков и их удаление в <a href="<URL>?action=admin;area=postsettings;sa=drafts">настройках черновиков</a>.';

$txt['likes_enabled'] = 'Включить лайки («Нравится»/«Не нравится»)';
$txt['likes_own_posts'] = 'Пользователи могут оценивать свои сообщения';

$txt['boardurl'] = 'Адрес форума';

$txt['caching_information'] = '<div class="center" style="font-weight: bold; text-decoration: underline">Важно! Прочтите эту информацию перед включением данной функции.</div><br>
	Wedge поддерживает кэширование с помощью следующих акселераторов:<br>
	<ul class="list">
		<li>APC</li>
		<li>Memcached</li>
		<li>Zend Platform/Performance Suite (не Zend Optimizer)</li>
		<li>XCache</li>
	</ul>
	Кэширование будет работать лучше всего, если PHP скомпилирован с поддержкой одного из указанных оптимизаторов, или же доступен сервер Memcached (наряду с соответствующим расширением PHP.)
	Если никаких оптимизаторов не установлено, Wedge будет использовать кэширование, основанное на файлах.<br><br>
	Wedge выполняет кэширование на разных уровнях. Чем выше уровень кэширования, тем больше времени процессор затрачивает на получение кэшированной информации. Если кэширование доступно на вашем сервере, рекомендуется для начала попробовать задействовать 1 уровень.
	<br><br>
	Обратите внимание, что если вы используете Memcached, вам нужно предоставить данные о сервере в поле ниже. Wedge будет выполнять произвольную балансировку нагрузки между серверами.
	Разделяйте сервера запятыми, по образцу:<br>
	&quot;localhost,server2,server3:port,127.0.0.1&quot;<br><br>
	Если вы не укажете порт, будет использоваться порт по умолчанию (11211).
	<br><br>
	%1$s';

$txt['detected_no_caching'] = '<strong class="alert">Поддерживаемые акселераторы отсутствуют.</strong>';
$txt['detected_APC'] = '<strong style="color: green">На сервере установлен APC.</strong>';
$txt['detected_Zend'] = '<strong style="color: green">На сервере установлен Zend.</strong>';
$txt['detected_Memcached'] = '<strong style="color: green">На сервере установлен Memcached.</strong>';
$txt['detected_XCache'] = '<strong style="color: green">На сервере установлен XCache.</strong>';

$txt['cache_enable'] = 'Уровень кэширования';
$txt['cache_off'] = 'Кэширование отключено';
$txt['cache_level1'] = 'Уровень 1 (Рекомендуется)';
$txt['cache_level2'] = 'Уровень 2';
$txt['cache_level3'] = 'Уровень 3 (Не рекомендуется)';

$txt['cache_type'] = 'Тип кэширования';
$txt['cache_type_file'] = 'Кэширование на основе файлов';
$txt['cache_memcached'] = 'Настройка Memcached<dfn>Оставьте пустым для отключения</dfn>';

$txt['loadavg_warning'] = '<span class="error">Обратите внимание: приведенные ниже настройки необходимо изменять с осторожностью. Установка для любого из этих параметров слишком низкого значения может привести к полной <strong>неработоспособности</strong> форума! Текущая средняя нагрузка: <strong>%01.2f</strong></span>';
$txt['loadavg_enable'] = 'Включить балансировку нагрузки по среднему значению';
$txt['loadavg_auto_opt'] = 'Порог для отключения автоматической оптимизации базы данных';
$txt['loadavg_search'] = 'Порог для отключения поиска';
$txt['loadavg_allunread'] = 'Порог для отключения функции «Все непрочитанные сообщения»';
$txt['loadavg_unreadreplies'] = 'Порог для отключения функции «Непрочитанные ответы»';
$txt['loadavg_show_posts'] = 'Порог для отключения функции "Показать сообщения пользователя"';
$txt['loadavg_forum'] = 'Порог для <strong>полного</strong> отключения форума';
$txt['loadavg_disabled_conf'] = '<span class="error">Балансировка нагрузки отключена в настройках хостинга.</span>';

$txt['news_settings_submit'] = 'Сохранить';
$txt['xmlnews_enable'] = 'Включить Atom-ленты новостей';
$txt['xmlnews_maxlen'] = 'Максимальная длина сообщений:';
$txt['xmlnews_maxlen_subtext'] = '(0 — отключить, плохая идея.)';
$txt['xmlnews_sidebar'] = 'Показывать блок «RSS» в боковой панели';
$txt['enable_news'] = 'Отображать случайную новость на всех страницах';
$txt['show_newsfader'] = 'Показывать прокрутку новостей на главной странице форума';
$txt['newsfader_time'] = 'Задержка между новостями (в мс)';

$txt['reverse_proxy'] = 'Включить поддержку обратного прокси-сервера';
$txt['reverse_proxy_header'] = 'HTTP-заголовок прокси с IP-адресом';
$txt['reverse_proxy_ips'] = 'IP или CIDR-блоки адресов прокси-серверов';
$txt['reverse_proxy_one_per_line'] = 'Указывайте по одному адресу в строке';

$txt['login_type'] = 'Что разрешено использовать для авторизации?';
$txt['login_username_or_email'] = 'Либо имя пользователя, либо электронный адрес';
$txt['login_username_only'] = 'Только имя';
$txt['login_email_only'] = 'Только e-mail';

$txt['setting_password_strength'] = 'Требования к длине пароля пользователей';
$txt['setting_password_strength_low'] = 'Низкое — минимум 4 символа';
$txt['setting_password_strength_medium'] = 'Среднее — не может совпадать с именем пользователя';
$txt['setting_password_strength_high'] = 'Высокое — сочетание различных символов';

$txt['antispam_settings'] = 'Борьба со спамом';
$txt['antispam_settings_desc'] = 'Здесь можно настроить и активировать проверку контрольным кодом для защиты форума от ботов и спама.';
$txt['setting_reg_verification'] = 'Требовать проверку на странице регистрации';
$txt['posts_require_captcha'] = 'Количество сообщений, до достижения которого требуется проверка кодом';
$txt['posts_require_captcha_desc'] = '(0 — без ограничений, на модераторов не распространяется)';
$txt['search_enable_captcha'] = 'Использовать код проверки при поиске гостями';
$txt['setting_guests_require_captcha'] = 'Гости смогут воспользоваться поиском только после прохождения проверки';
$txt['setting_guests_require_captcha_desc'] = '(Устанавливается автоматически, если ниже указано минимальное количество сообщений)';
$txt['guests_report_require_captcha'] = 'Гости должны проходить визуальную проверку при каждой отправке сообщения';

$txt['configure_captcha'] = 'Настройка изображений капчи';
$txt['configure_captcha_desc'] = '<span class="smalltext">Капча — одна из форм защиты от ботов-спамеров, угрожающих форуму.</span>';
$txt['use_captcha_images'] = 'Задействовать изображения для капчи?';
$txt['use_animated_captcha'] = 'Использовать анимированные изображения?';
$txt['use_animated_captcha_desc'] = 'Анимированная капча представляет сложность не только для ботов, но и для некоторых пользователей.';

$txt['setting_qa_verification_number'] = 'Количество проверочных вопросов';
$txt['setting_qa_verification_number_desc'] = '(0 — отключить; вопросы настраиваются ниже)';
$txt['setup_verification_questions'] = 'Проверочные вопросы';
$txt['setup_verification_questions_desc'] = '<span class="smalltext">Настройте вопросы, чтобы остановить спамеров. Выбирайте простые вопросы, чтобы живые люди могли на них ответить; ответы нечувствительны к регистру. Можно использовать ББ-теги для оформления. Для удаления вопроса очистите соответствующее поле.</span>';
$txt['setup_verification_question'] = 'Вопрос';
$txt['setup_verification_answer'] = 'Ответ';
$txt['setup_verification_add'] = 'Добавить вопрос';
$txt['setup_verification_add_answer'] = 'Добавить ответ';

$txt['modfilter_norules'] = 'Не установлены правила фильтрации.';
$txt['modfilter_addrule'] = 'Добавить правило';
$txt['modfilter_editrule'] = 'Редактировать правило';
$txt['modfilter_rule_posts'] = 'При сохранении сообщения:';
$txt['modfilter_rule_topics'] = 'При создании новой темы:';
$txt['modfilter_action_prevent'] = 'Запретить публикацию сообщения';
$txt['modfilter_action_moderate'] = 'Модератор должен одобрить сообщение (до того, как оно будет опубликовано)';
$txt['modfilter_action_pin'] = 'Закрепить текущую тему';
$txt['modfilter_action_unpin'] = 'Открепить текущую тему';
$txt['modfilter_action_lock'] = 'Заблокировать тему';
$txt['modfilter_action_unlock'] = 'Разблокировать тему';
$txt['modfilter_conditions'] = 'Если эти правила соблюдены:';
$txt['modfilter_cond_boards_in'] = 'Отправка сообщений в данных разделах:';
$txt['modfilter_cond_boards_ex'] = 'Отправка сообщений в любом месте, кроме:';
$txt['modfilter_cond_groups_in'] = 'Входит в одну из этих групп:';
$txt['modfilter_cond_groups_ex'] = 'Не входит ни в одну из этих групп:';
$txt['modfilter_cond_permissions_in'] = 'Обладает любыми из указанных прав доступа:';
$txt['modfilter_cond_permissions_ex'] = 'Не обладает указанными правами доступа:';
$txt['modfilter_cond_userid_in'] = 'Пользователь является одним из следующих:';
$txt['modfilter_cond_userid_ex'] = 'Пользователь не входит в число следующих:';
$txt['modfilter_cond_subject_begins'] = 'Тема сообщения начинается с:';
$txt['modfilter_cond_subject_ends'] = 'Тема сообщения заканчивается на:';
$txt['modfilter_cond_subject_contains'] = 'Тема сообщения содержит:';
$txt['modfilter_cond_subject_matches'] = 'Тема сообщения совпадает с:';
$txt['modfilter_cond_subject_regex'] = 'Тема сообщения соответствует регулярному выражению:';
$txt['modfilter_cond_body_begins'] = 'Текст сообщения начинается с:';
$txt['modfilter_cond_body_ends'] = 'Текст сообщения заканчивается на:';
$txt['modfilter_cond_body_contains'] = 'Текст сообщения содержит:';
$txt['modfilter_cond_body_matches'] = 'Текст сообщения совпадает с:';
$txt['modfilter_cond_body_regex'] = 'Текст сообщения соответствует регулярному выражению:';
$txt['modfilter_case_sensitive'] = '(полное совпадение)';
$txt['modfilter_case_insensitive'] = '(верхний/нижний регистр не имеет значения)';
$txt['modfilter_cond_postcount'] = 'Количество сообщений:';
$txt['modfilter_cond_warning'] = 'Баллы предупреждений:';
$txt['modfilter_cond_links'] = 'Количество ссылок в сообщениях:';
$txt['modfilter_range_lt'] = 'меньше';
$txt['modfilter_range_lte'] = 'меньше или равно';
$txt['modfilter_range_eq'] = 'равно';
$txt['modfilter_range_gt'] = 'больше';
$txt['modfilter_range_gte'] = 'больше или равно';
$txt['modfilter_cond_unknownrule'] = 'Неизвестный тип правила:';
$txt['modfilter_approve_title'] = 'Одобрение нерассмотренных элементов';
$txt['modfilter_approve_desc'] = 'Если есть нерассмотренные элементы, требующие проверки, или вы решили отключить фильтры модерации, возможно, вы решите одобрить все элементы, ожидающие проверки, чтобы они не потерялись. Тем не менее, можно просмотреть каждый из этих элементов перед одобрением, чтобы не допустить ошибок.';
$txt['modfilter_all_approved'] = 'Все нерассмотренные элементы были одобрены.';
$txt['modfilter_applies_legend'] = 'Когда это правило следует применять';
$txt['modfilter_applies_desc'] = 'Иногда правило требуется применять ко всем постам, иногда — только к новым темам.';
$txt['modfilter_applies_rule'] = 'Когда данное правило будет применяться?';
$txt['modfilter_applies_posts'] = 'при создании нового сообщения';
$txt['modfilter_applies_topics'] = 'при создании новой темы';
$txt['modfilter_action_legend'] = 'Применение правила';
$txt['modfilter_action_desc'] = 'Каждое правило включает одно действие, выполняемое при соблюдении всех условий, с "предотвращением сообщения" и "модерацией сообщения", исключая все другие возможные действия.';
$txt['modfilter_action_selectone'] = '--- выберите ---';
$txt['modfilter_action_rule'] = 'Что должно произойти, если условия соблюдены?';
$txt['modfilter_actionlist_prevent'] = 'Запрет на публикацию сообщения';
$txt['modfilter_actionlist_moderate'] = 'Сообщение отправится на модерцию';
$txt['modfilter_actionlist_pin'] = 'Закрепление темы в верхней части раздела';
$txt['modfilter_actionlist_unpin'] = 'Открепление темы';
$txt['modfilter_actionlist_lock'] = 'Блокировка темы';
$txt['modfilter_actionlist_unlock'] = 'Разблокировка темы';
$txt['modfilter_conds_legend'] = 'Условия для этого правила';
$txt['modfilter_conds_desc'] = 'Любому правилу фильтрации требуются условия, чтобы знать, следует ли применять правило. Здесь вы добавляете условия для этого правила — все условия должны быть соблюдены для того, чтобы правило было активировано.';
$txt['modfilter_conds_item'] = 'Элемент';
$txt['modfilter_conds_criteria'] = 'Критерии';
$txt['modfilter_conds_no_conditions'] = 'Нет условий. Добавьте новое!';
$txt['modfilter_conds_new'] = 'Вид условия:';
$txt['modfilter_conds_add'] = 'Добавить условие';
$txt['modfilter_conds_select'] = '--- выберите вид условия ---';
$txt['modfilter_condtype_boards'] = 'Применяется к одному или нескольким разделам';
$txt['modfilter_condtype_groups'] = 'Применяется к одной или нескольким группам';
$txt['modfilter_condtype_userid'] = 'Применяется к одному или нескольким пользователям';
$txt['modfilter_condtype_postcount'] = 'Применяется в зависимости от количества сообщений';
$txt['modfilter_condtype_warning'] = 'Применяется в зависимости от количества баллов предупреждений';
$txt['modfilter_condtype_permission'] = 'Применяется в зависимости от прав доступа пользователя';
$txt['modfilter_condtype_subject'] = 'Зависит от темы сообщения';
$txt['modfilter_condtype_body'] = 'Зависит от содержимого сообщения';
$txt['modfilter_condtype_links'] = 'Зависит от количества ссылок в сообщении';
$txt['modfilter_applies_all'] = 'Применяется к выбранным элементам:';
$txt['modfilter_applies_allexcept'] = 'Применяется ко <strong>всем, кроме </strong> выбранных элементов:';
$txt['modfilter_condition_done'] = 'Добавить это условие';
$txt['modfilter_postcount_is'] = 'Количество сообщений пользователя:';
$txt['modfilter_warning_is'] = 'У пользователя:';
$txt['modfilter_warning_is_post'] = 'баллов предупреждений';
$txt['modfilter_links_is'] = 'Количество ссылок в сообщении:';
$txt['modfilter_the_post_subject'] = 'Тема сообщения';
$txt['modfilter_the_post_body'] = 'Текст сообщения';
$txt['modfilter_regex_begins'] = 'начинается с';
$txt['modfilter_regex_contains'] = 'содержит';
$txt['modfilter_regex_ends'] = 'заканчивается на';
$txt['modfilter_regex_matches'] = 'совпадает с';
$txt['modfilter_regex_regex'] = 'соответствует регулярному выражению';
$txt['modfilter_be_case_sensitive'] = 'Чувствительность к регистру (обработка ВЕРХНЕГО и нижнего регистров по-разному)';
$txt['modfilter_save_this_rule'] = 'Сохранить правило';
$txt['modfilter_remove_this_rule'] = 'Удалить правило';
$txt['modfilter_error_saving'] = 'Правило не удалось сохранить, ткак как при отправке данных что-то произошло. Вернитесь и попробуйте что-нибудь поменять.';
$txt['modfilter_rule_not_found'] = 'Правило, которое вы пытаетесь изменить, не существует.';
$txt['modfilter_msg'] = 'и вывести заданное сообщение';
$txt['modfilter_msg_popup_title'] = 'Информирование пользователя...';
$txt['modfilter_msg_no_lang'] = 'Для этого правила не настроено каких-либо сообщений.';
$txt['modfilter_msg_popup'] = 'Когда это правило активировано, пользователю будет показано следующее сообщение. (Там, где это возможно, форум будет пытаться использовать язык, выбранный пользователем.)';
$txt['modfilter_lang_msg'] = 'Не во всех случаях пользователю будет ясно, почему его сообщение попало под фильтр модерации. Здесь вы можете добавить сообщение с объяснением, почему было предпринято данное действие. Какой-либо язык указывать не обязательно — будет использоваться наиболее подходящий для пользователя (из установленных на форуме). Вы также можете использовать HTML — например, для оформления ссылки на правила форума.';

$txt['allow_editDisplayName'] = 'Разрешить пользователям изменять отображаемое имя';
$txt['allow_hideOnline'] = 'Разрешить пользователям скрывать свой онлайн-статус';
$txt['titlesEnable'] = 'Разрешить надписи над аватарами';
$txt['enable_buddylist'] = 'Разрешить списки контактов и игнорируемых';

$txt['signature_settings'] = 'Настройки подписей';
$txt['signature_settings_desc'] = 'Используйте данные настройки для определения вида подписей пользователей.';
$txt['signature_settings_warning'] = 'Обратите внимание, что по умолчанию эти настройки не применяются к уже существующим подписям. Нажмите <a href="%1$s?action=admin;area=memberoptions;sa=sig;apply;%2$s">сюда</a> для применения настроек ко всем существующим подписям.';
$txt['signature_enable'] = 'Разрешить подписи';
$txt['signature_minposts'] = 'Минимальное количество сообщений для отображения подписей';
$txt['signature_zero_no_max'] = '(0 — без ограничений.)';
$txt['signature_max_length'] = 'Максимальное количество символов';
$txt['signature_max_lines'] = 'Максимальное количество строк';
$txt['signature_max_images'] = 'Максимальное количество изображений';
$txt['signature_max_images_subtext'] = '(0 — без ограничений; смайлы не учитываются)';
$txt['signature_allow_smileys'] = 'Разрешать смайлы в подписях';
$txt['signature_max_smileys'] = 'Максимальное количество смайлов';
$txt['signature_max_image_width'] = 'Максимальная ширина изображения в подписях';
$txt['signature_max_image_height'] = 'Максимальная высота изображения в подписях';
$txt['signature_max_font_size'] = 'Максимальный размер шрифта в подписях';
$txt['signature_max_font_size_subtext'] = '(0 — без ограничений, в пикселях)';
$txt['signature_bbc'] = 'Разрешённые ББ-теги';

$txt['custom_profile_title'] = 'Расширенные поля';
$txt['custom_profile_desc'] = 'В данном разделе можно создавать индивидуальные поля профиля с учетом требований данного форума.';
$txt['custom_profile_active'] = 'Активное';
$txt['custom_profile_inactive'] = 'Неактивное';
$txt['custom_profile_make_new'] = 'Новое поле';
$txt['custom_profile_none'] = 'Ни одного поля пока не создано!';
$txt['custom_profile_icon'] = 'Иконка';

$txt['custom_profile_type_text'] = 'Текст';
$txt['custom_profile_type_textarea'] = 'Многострочный текст';
$txt['custom_profile_type_select'] = 'Список выбора';
$txt['custom_profile_type_radio'] = 'Выбор варианта';
$txt['custom_profile_type_check'] = 'Переключатель';

$txt['custom_add_title'] = 'Добавить поле профиля';
$txt['custom_edit_title'] = 'Изменить поле профиля';
$txt['custom_edit_general'] = 'Настройки отображения';
$txt['custom_edit_input'] = 'Настройки ввода';
$txt['custom_edit_advanced'] = 'Расширенные настройки';
$txt['custom_edit_name'] = 'Название';
$txt['custom_edit_desc'] = 'Описание';
$txt['custom_edit_profile'] = 'Раздел профиля';
$txt['custom_edit_profile_desc'] = 'Раздел профиля для изменения настроек.';
$txt['custom_edit_profile_none'] = 'Нет';
$txt['custom_edit_registration'] = 'Отображать при регистрации';
$txt['custom_edit_registration_disable'] = 'Нет';
$txt['custom_edit_registration_allow'] = 'Да';
$txt['custom_edit_registration_require'] = 'Да, обязательное';
$txt['custom_edit_mlist'] = 'Отображать в списке пользователей';
$txt['custom_edit_display'] = 'Отображать при просмотре темы';
$txt['custom_edit_picktype'] = 'Тип поля';

$txt['whos_online_desc'] = 'На этой странице настраивается видимость пользователей, находящихся сейчас на форуме.';
$txt['lastActive'] = 'Время, в течение которого пользователь считается активным';
$txt['who_view'] = 'Группы с правом просмотра списка «Активность»';
$txt['member_options_desc'] = 'На этой странице вы можете установить определенные параметры, которые также настраиваются вашими пользователями; можно сбросить все варианты, если это необходимо, или установить стандартные значения тех или иных параметров.';
$txt['member_options_default'] = 'Значение по умолчанию:';
$txt['member_options_change'] = 'Изменить';
$txt['no_change'] = '%s (сейчас)';
$txt['leave_alone'] = 'Сохранить настройки';
$txt['member_options_guest'] = 'Для гостей/новых пользователей:';
$txt['member_options_members'] = 'Для существующих пользователей:';
$txt['member_options_override'] = 'Установить "%s" для всех';

// Strings for the templates
$txt['your_icq'] = 'Номер ICQ.';
$txt['your_aim'] = 'Никнейм в AOL.';
$txt['your_yim'] = 'Никнейм в Yahoo!.';
// In this string, please use +'s for spaces.
$txt['aim_default_message'] = 'Привет!+Вы+тут?';
$txt['your_twitter'] = 'Имя пользователя в Twitter, без знака @ в начале';
$txt['your_facebook'] = 'Номер аккаунта Facebook или краткое имя (например, "wedgebook" — "facebook.com/wedgebook")';
$txt['your_skype'] = 'Логин Skype';
$txt['your_steam'] = 'ID аккаунта в Steam';
$txt['custom_edit_tplgrp_social'] = 'Социальные сети';
$txt['custom_edit_tplgrp_im'] = 'Обмен мгновенными сообщениями';
$txt['custom_edit_tplgrp_gaming'] = 'Игры';
$txt['custom_edit_templates'] = 'Шаблоны полей';
$txt['custom_edit_templates_desc'] = 'Попробуйте использовать предустановленные шаблоны для некоторых распространенных социальных сетей.';
$txt['custom_edit_a_template'] = 'Шаблон для использования';
$txt['custom_edit_templates_select'] = '-- Выберите шаблон --';

$txt['custom_edit_max_length'] = 'Максимальная длина';
$txt['custom_edit_max_length_desc'] = '(0 — без ограничений)';
$txt['custom_edit_dimension'] = 'Измерение';
$txt['custom_edit_dimension_row'] = 'Рядов';
$txt['custom_edit_dimension_col'] = 'Столбцов';
$txt['custom_edit_bbc'] = 'Разрешить ББ-теги';
$txt['custom_edit_options'] = 'Настройки';
$txt['custom_edit_options_desc'] = 'Оставьте поле выбора пустым для удаления. Будет выбран параметр по умолчанию.';
$txt['custom_edit_options_more'] = 'Дополнительно';
$txt['custom_edit_default'] = 'Значение по умолчанию';
$txt['custom_edit_active'] = 'Активное';
$txt['custom_edit_active_desc'] = 'Если не выбрать, данное поле никому отображаться не будет.';
$txt['custom_edit_privacy'] = 'Права на изменение и просмотр';
$txt['custom_edit_privacy_desc'] = 'Кто может просматривать и изменять данное поле.';
$txt['custom_edit_see_owner'] = 'Владелец (если входит в одну из указанных груп)';
$txt['custom_edit_can_search'] = 'Выдается в поиске';
$txt['custom_edit_can_search_desc'] = 'По данному полю можно искать в списке пользователей.';
$txt['custom_edit_mask'] = 'Маска';
$txt['custom_edit_mask_desc'] = 'Текстовым полям можно задать маску для проверки вводимых данных.';
$txt['custom_edit_mask_email'] = 'Проверка e-mail';
$txt['custom_edit_mask_number'] = 'Числовая';
$txt['custom_edit_mask_nohtml'] = 'Без HTML';
$txt['custom_edit_mask_regex'] = 'Регулярные выражения в маске (Для экспертов)';
$txt['custom_edit_enclose'] = 'Показывать с дополнительным текстом (По желанию)';
$txt['custom_edit_enclose_desc'] = '<strong>Настоятельно</strong> рекомендуется использовать маску для проверки вводимых данных.';
$txt['custom_edit_can_see'] = 'Могут редактировать';
$txt['custom_edit_can_edit'] = 'Могут видеть';

$txt['custom_edit_placement'] = 'Выберите размещение';
$txt['custom_edit_placement_standard'] = 'Стандартное (с названием поля)';
$txt['custom_edit_placement_withicons'] = 'Рядом с иконками';
$txt['custom_edit_placement_abovesignature'] = 'Над подписью';
$txt['custom_profile_placement'] = 'Размещение: %1$s';

$txt['custom_edit_delete_sure'] = 'Хотите удалить это поле? Все связанные данные пользователей будут потеряны!';

$txt['standard_profile_title'] = 'Стандартные поля';
$txt['standard_profile_field'] = 'Поле';

$txt['languages_area_edit_desc'] = 'В этом разделе доступны для просмотра и изменения языки, используемые Wedge. Раздел не предназначен для локализаторов, поэтому, если вы хотите перевести Wedge на какой-то новый язык, пожалуйста, свяжитесь с командой проекта.';
$txt['languages_lang_name'] = 'Название языка';
$txt['languages_locale'] = 'Локаль';
$txt['languages_available'] = 'Доступен';
$txt['languages_default'] = 'Выбран';
$txt['languages_users'] = 'Пользователей';
$txt['edit_languages'] = 'Изменение языка';
$txt['edit_languages_specific'] = 'Изменение языка - %1$s';
$txt['language_edit_master_value'] = '<em>Значение по умолчанию:</em> %1$s';
$txt['language_edit_master_value_array'] = '<em>Значения по умолчанию:</em>';
$txt['language_edit_current_value'] = '<em>Текущее значение:</em> %1$s';
$txt['language_edit_current_value_array'] = '<em>Текущие значения:</em>';
$txt['language_edit_new_value'] = '<em>Новое значение:</em>';
$txt['language_edit_new_value_array'] = '<em>Новые значения:</em>';
$txt['language_edit_add_entry'] = 'Добавить запись';
$txt['language_delete_value'] = 'Удалить пункт';
$txt['language_revert_value'] = 'Сбросить на значение по умолчанию';
$txt['language_clear_cache'] = 'Очистка кэша языков';
$txt['language_clear_cache_desc'] = 'Данные, используемые для создания языковых строчек, появляющихся на форуме, находятся в специальных файлах и базе данных, так что можете изменять их, не трогая исходные файлы. В большинстве случаев для изменения каких-либо строк хватит возможностей языкового редактора, но иногда вам может потребоваться очистить кэш.';
$txt['language_clear_cache_btn'] = 'Очистить кэш';
$txt['language_cache_cleared'] = 'Языковой кэш очищен.';
$txt['language_no_entries'] = 'Данный файл не содержит записей и, скорее всего, является заглушкой <a href="%1$s">родительского файла</a>.';
$txt['language_search_results'] = 'Результаты поиска - %1$s';
$txt['language_no_result_results'] = 'К сожалению, ничего не найдено.';
$txt['language_search_default'] = 'Совпадения в стандартных файлах';
$txt['language_search_plugins'] = 'Совпадения внутри плагинов';

$txt['language_edit_main'] = 'Основные файлы';
$txt['language_edit_admin'] = 'Админка';
$txt['language_edit_default'] = 'Языковые файлы по умолчанию';
$txt['language_edit_other'] = 'Другие языковые файлы';
$txt['language_edit_search'] = 'Поиск в языковых файлах';
$txt['language_edit_search_plugins'] = 'Включая плагины?';
$txt['language_edit_search_keys'] = 'Искать ключи';
$txt['language_edit_search_values'] = 'Искать значения';
$txt['language_edit_search_both'] = 'Искать всё';
$txt['language_edit_no_plugins'] = 'Плагины';
$txt['language_edit_no_plugins_desc'] = 'Редактируемые языковые файлы отсутствуют.';
$txt['language_edit_plugins_title'] = 'Плагин: %1$s';
$txt['language_edit_elsewhere'] = 'Настраивается в другом месте';
$txt['language_edit_email_templates'] = 'Шаблоны почтовых уведомлений';
$txt['language_edit_reg_agreement'] = 'Регистрационное соглашение';

$txt['edit_language_entries'] = 'Редактировать записи';
$txt['languages_dictionary'] = 'Язык';
$txt['languages_orientation'] = 'Ориентация';
$txt['languages_orients_ltr'] = 'Слева-Направо';
$txt['languages_orients_rtl'] = 'Справа-Налево';

$txt['lang_file_desc_index'] = 'Главный языковой файл, все общие строки';
$txt['lang_file_desc_Modlog'] = 'Записи журнала модерации';

// Homepage
$txt['homepage_desc'] = 'На этой странице можно установить, что показывать пользователям при посещении главной страницы форума.';

$txt['homepage_type'] = 'Главная страница форума';
$txt['homepage_boardlist'] = 'Список разделов';
$txt['homepage_board'] = 'Конкретный раздел';
$txt['homepage_action'] = 'Конкретная область';
$txt['homepage_custom'] = 'Настраиваемое содержание';
$txt['homepage_blurb_title'] = 'Произвольный заголовок (%s)';
$txt['homepage_blurb'] = 'Произвольный текст (%s)';
// !! Don't translate the bits between <strong> tags!
$txt['homepage_message'] = 'Выберите «Список разделов» для показа полного списка доступных разделов; «Конкретный раздел» для направления пользователей в конкретный раздел в списке; «Конкретная область» для направления пользователей на конкретную страницу форума (например, создайте файлы /app/Main.php и /html/Main.template.php,
	затем укажите «Main» в качестве настройки); и, наконец, «Настраиваемое содержание» позволит отобразить несколько элементов одновременно. Вводите по одному элементу в строке
	(они будут показаны в порядке появления), из следующего списка:<br>

		<br><strong>blurb</strong>: произвольный текст; приветствие, реклама и т. п.
		<br><strong>topics</strong>: список последних обновлённых тем. Добавьте \':x\' для вывода x тем вместо 5, например: \'topics:10\'.
		<br><strong>thoughts</strong>: список последних размышлений. Добавьте \':x\' для вывода x размышлений вместо 10, например:. \'thoughts:5\'.
		<br><strong>boards</strong>: полный список разделов.
		<br><strong>info</strong>: информационный центр (статистика). Настольные браузеры отобразят его в боковой панели.
	';
