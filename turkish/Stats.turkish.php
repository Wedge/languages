<?php
// Version: 2.0; Stats

$txt['stats_center'] = 'İstatistik Merkezi';
$txt['general_stats'] = 'Genel İstatistikler';

// This is where we list all possible filter permutations for statistics. An empty line means a separator.
$txt['charts'] = array(
	'posts,topics,registers,most_on' => 'Everything|Except page hits',
	'topics,registers,most_on' => 'Everything|Except hits and posts',
	'',
	'posts,hits' => 'Yeni İleti &amp; Görüntüleme',
	'posts,topics' => 'Yeni İleti &amp; Konular',
	'',
	'topics' => 'Yeni Konular',
	'posts' => 'Yeni İletiler',
	'registers' => 'Yeni Üyeler',
	'most_on' => 'En Çok Çevrimiçi',
	'hits' => 'Sayfa Gösterimi',
);

$txt['group_monthly'] = 'Aylık istatistikler';
$txt['group_daily'] = 'Günlük istatistikler';
$txt['lifetime'] = 'Her Şey';
$txt['last_month'] = 'Son 31 gün';
$txt['last_year'] = 'Son 12 ay';
$txt['stat_sum'] = 'Toplam:';
$txt['stat_average'] = 'Ortalama:';

$txt['date_format'] = '%B %@, %Y';
$txt['date_format_this_year'] = '%B %@';

$txt['top_posters'] = 'En Aktif 10 Üye';
$txt['top_boards'] = 'En Aktif 10 Bölüm';
$txt['forum_history'] = 'Forum Tarihi';
$txt['stats_date'] = 'Tarih (yyyy/aa/gg)';
$txt['top_topics_replies'] = 'En Aktif 10 Konu (Yanıtlara göre)';
$txt['top_topics_views'] = 'En Aktif 10 Konu (Gösterime göre)';
$txt['top_liked'] = 'En çok beğenilen iletiler';
$txt['top_liked_posters'] = 'En çok beğenilen üyeler';
$txt['top_starters'] = 'En Çok Konu Açanlar';
$txt['most_time_online'] = 'En Çok Çevrimiçi Olanlar';
$txt['stats_more_detailed'] = 'daha ayrıntılı &raquo;';

$txt['average_registers'] = 'Average registrations per day';
$txt['average_posts'] = 'Günlük ortalama ileti sayısı';
$txt['average_topics'] = 'Günlük ortalama konu sayısı';
$txt['average_most_on'] = 'Average online per day';
$txt['users_online'] = 'Çevrimiçi Kullanıcılar';
$txt['gender_ratio'] = 'Erkek Bayan oranı';
$txt['users_online_today'] = 'Bugün Çeviriçi Olanlar';
$txt['num_hits'] = 'Toplam sayfa gösterimi';
$txt['average_hits'] = 'Ortalama günlük sayfa gösterimi';

$txt['ssi_comment'] = 'yorum';
$txt['ssi_comments'] = 'yorum';
$txt['ssi_write_comment'] = 'Yorum Yaz';
$txt['ssi_no_guests'] = 'You cannot specify a board that doesn\'t allow guests. Please check the board ID before trying again.';
$txt['xml_feed_desc'] = 'Live information from {forum_name}';

$txt['total_registers'] = 'Toplam Üye';
$txt['total_posts'] = 'Toplam İleti';
$txt['total_topics'] = 'Toplam Konu';
$txt['total_boards'] = 'Toplam Bölüm';
$txt['total_cats'] = 'Toplam Kategori';

$txt['totalTimeLogged_d_short'] = 'd ';
$txt['totalTimeLogged_h_short'] = 'h ';
$txt['totalTimeLogged_m_short'] = 'm';

// Debug related stats - when $db_show_debug is true.
$txt['debug_report'] = '
	<strong>Templates</strong> (%1$d): <em>%2$s</em>.
	<strong>Blocks</strong> (%3$d): <a href="#" onclick="%11$s">list</a><span class="hide"><em>%4$s</em></span>.
	<strong>Language files</strong> (%5$d): <a href="#" onclick="%11$s">list</a><span class="hide"><em>%6$s</em></span>.
	<strong>Style sheets</strong> (%7$d): <a href="#" onclick="%11$s">list</a><span class="hide"><em>%8$s</em></span>.
	<strong>Files included</strong> (%9$d): %10$sKB - <a href="#" onclick="%11$s">list</a><span class="hide"><em>%12$s</em></span>.
	<strong>Peak memory use</strong>: %13$dKB.';
$txt['debug_cache_hits'] = '
	<strong>Cache hits</strong> (%1$d): %2$ss for %3$s bytes - <a href="#" onclick="%4$s">list</a><span class="hide"><em>%5$s</em></span>.';
$txt['debug_cache_seconds_bytes'] = '%1$s %2$ss - %3$s bytes';
$txt['debug_queries_used'] = '<strong>Queries used</strong>: %1$d';
$txt['debug_queries_used_and_warnings'] = '<strong>Queries used</strong>: %1$d, %2$d warnings';
$txt['debug_query_in_line'] = 'in <em>%1$s</em> line <em>%2$s</em>, ';
$txt['debug_query_which_took'] = 'which took %1$s seconds.';
$txt['debug_query_which_took_at'] = 'which took %1$s seconds at %2$s into request.';
$txt['debug_show_queries'] = '<strong>Expand Queries</strong>';
$txt['debug_hide_queries'] = '<strong>Hide Queries</strong>';
$txt['html5_validation'] = '<strong>HTML5 Validation</strong>';
