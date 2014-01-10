<?php
// Version: 2.0; Stats

$txt['stats_center'] = 'Statistik-Center';
$txt['general_stats'] = 'Allgemeine Statistiken';

// This is where we list all possible filter permutations for statistics. An empty line means a separator.
$txt['charts'] = array(
	'posts,topics,registers,most_on' => 'Alles|außer Seitenansichten',
	'topics,registers,most_on' => 'Alles|außer Seitenansichten &amp; Beiträge',
	'',
	'posts,hits' => 'Beiträge &amp; Seitenansichten',
	'posts,topics' => 'Beiträge &amp; Themen',
	'',
	'topics' => 'Neue Themen',
	'posts' => 'Neue Beiträge',
	'registers' => 'Neue Mitglieder',
	'most_on' => 'Online-Rekord',
	'hits' => 'Seitenansichten',
);

$txt['group_monthly'] = 'Monatliche Statistiken';
$txt['group_daily'] = 'Tägliche Statistiken';
$txt['lifetime'] = 'Alles';
$txt['last_month'] = 'Letzte 31 Tage';
$txt['last_year'] = 'Letzte 12 Monate';
$txt['stat_sum'] = 'Gesamt:';
$txt['stat_average'] = 'Durchschnittlich:';

$txt['date_format'] = '%B %@, %Y';
$txt['date_format_this_year'] = '%B %@';

$txt['top_posters'] = 'Top 10 Autoren';
$txt['top_boards'] = 'Top 10 Foren';
$txt['forum_history'] = 'Forum History (Lokale Zeit)';
$txt['stats_date'] = 'Datum (JJJJ/MM/TT)';
$txt['top_topics_replies'] = 'Top 10 Themen (nach Antworten)';
$txt['top_topics_views'] = 'Top 10 Themen (nach Aufrufen)';
$txt['top_liked'] = 'Top Liked Beiträge';
$txt['top_liked_posters'] = 'Top Liked Autoren';
$txt['top_starters'] = 'Top Themen Starter';
$txt['most_time_online'] = 'Meiste Zeit online';
$txt['stats_more_detailed'] = 'mehr Details &raquo;';

$txt['average_registers'] = 'Durchschnittliche Registrierungen pro Tag';
$txt['average_posts'] = 'Durchschnittliche Beiträge pro Tag';
$txt['average_topics'] = 'Durchschnittliche Themen pro Tag';
$txt['average_most_on'] = 'Durchschnittlich Online pro Tag';
$txt['users_online'] = 'User Online';
$txt['gender_ratio'] = 'Männlich zu Weiblich Rate';
$txt['users_online_today'] = 'Online heute';
$txt['num_hits'] = 'Seitenansichten insgesamt';
$txt['average_hits'] = 'Durchschnittliche Seitenaufrufe pro Tag';

$txt['ssi_comment'] = 'Kommentar';
$txt['ssi_comments'] = 'Kommentare';
$txt['ssi_write_comment'] = 'Schreibe einen Kommentar';
$txt['ssi_no_guests'] = 'Du kannst kein Forum auswählen, welches keine Gäste erlaubt. Bitte überprüfe die Board-ID vorher und versuche es nochmal.';
$txt['xml_feed_desc'] = 'Live Ticker von {forum_name}';

$txt['total_registers'] = 'Mitglieder insgesamt';
$txt['total_posts'] = 'Beiträge insgesamt';
$txt['total_topics'] = 'Themen insgesamt';
$txt['total_boards'] = 'Foren insgesamt';
$txt['total_cats'] = 'Kategorien insgesamt';

$txt['totalTimeLogged_d_short'] = 'T ';
$txt['totalTimeLogged_h_short'] = 'Std ';
$txt['totalTimeLogged_m_short'] = 'M';

// Debug related stats - when $db_show_debug is true.
$txt['debug_report'] = '
	<strong>Templates</strong> (%1$d): <em>%2$s</em>.
	<strong>Blöcke</strong> (%3$d): <a href="#" onclick="%11$s">list</a><span class="hide"><em>%4$s</em></span>.
	<strong>Sprachdateien</strong> (%5$d): <a href="#" onclick="%11$s">Auflisten</a><span class="hide"><em>%6$s</em></span>.
	<strong>Style sheets</strong> (%7$d): <a href="#" onclick="%11$s">Auflisten</a><span class="hide"><em>%8$s</em></span>.
	<strong>Eingebundene Dateien</strong> (%9$d): %10$sKB - <a href="#" onclick="%11$s">Auflisten</a><span class="hide"><em>%12$s</em></span>.
	<strong>Speicherverbrauch/Spitzenlast </strong>: %13$dKB.';
$txt['debug_cache_hits'] = '
	<strong>Cache Treffer</strong> (%1$d): %2$ss für %3$s bytes - <a href="#" onclick="%4$s">Auflisten</a><span class="hide"><em>%5$s</em></span>.';
$txt['debug_cache_seconds_bytes'] = '%1$s %2$ss - %3$s bytes';
$txt['debug_queries_used'] = '<strong>Datenbank abfragen</strong>: %1$d';
$txt['debug_queries_used_and_warnings'] = '<strong>Datenbank Abfragen</strong>: %1$d, %2$d Warnungen';
$txt['debug_query_in_line'] = 'in <em>%1$s</em> Zeile <em>%2$s</em>, ';
$txt['debug_query_which_took'] = 'beträgt %1$s Sekunden.';
$txt['debug_query_which_took_at'] = 'beträgt %1$s Sekunden bei %2$s der Abfrage.';
$txt['debug_show_queries'] = '<strong>Datenbankabfragen ausklappen</strong>';
$txt['debug_hide_queries'] = '<strong>Datenbankabfragen verstecken</strong>';
