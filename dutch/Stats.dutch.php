<?php
// Version: 2.0; Stats

$txt['stats_center'] = 'Statistiekencentrum';
$txt['general_stats'] = 'Algemene statistieken';

// This is where we list all possible filter permutations for statistics. An empty line means a separator.
$txt['charts'] = array(
	'posts,topics,registers,most_on' => 'Alles|Behalve bladzijde treffers',
	'topics,registers,most_on' => 'Alles|Behalve treffers en berichten',
	'',
	'posts,hits' => 'Nieuwe berichten &amp; Pagina Treffers',
	'posts,topics' => 'Nieuwe Berichten &amp; Onderwerpen',
	'',
	'topics' => 'Nieuwe Onderwerpen',
	'posts' => 'Nieuwe Berichten',
	'registers' => 'Nieuwe leden',
	'most_on' => 'Meest Online',
	'hits' => 'Pagina treffers',
);

$txt['group_monthly'] = 'Maandelijkse statistieken';
$txt['group_daily'] = 'Dagelijkse statistieken';
$txt['lifetime'] = 'Alles';
$txt['last_month'] = 'Afgelopen 31 dagen';
$txt['last_year'] = 'Afgelopen 12 maanden';
$txt['stat_sum'] = 'Totaal:';
$txt['stat_average'] = 'Gemiddeld';

$txt['date_format'] = '%B %@, %Y';
$txt['date_format_this_year'] = '%B %@';

$txt['top_posters'] = 'Top 10 posters';
$txt['top_boards'] = 'Top 10 boards';
$txt['forum_history'] = 'Forumhistorie';
$txt['stats_date'] = 'Datum (jjjj/mm/dd)';
$txt['top_topics_replies'] = 'Top 10 topics (qua aantal reacties)';
$txt['top_topics_views'] = 'Top 10 topics (qua aantal keer bekeken)';
$txt['top_liked'] = 'Top \'\'liked\'\' berichten';
$txt['top_liked_posters'] = 'Top \'\'Liked\'\' berichtgevers';
$txt['top_starters'] = 'Top 10 topicstarters';
$txt['most_time_online'] = 'Top 10 meeste tijd online';
$txt['stats_more_detailed'] = 'meer gedetailleerd &raquo;';

$txt['average_registers'] = 'Registraties per dag gemiddeld';
$txt['average_posts'] = 'Gemiddeld aantal berichten per dag';
$txt['average_topics'] = 'Gemiddeld aantal topics per dag';
$txt['average_most_on'] = 'Online per dag gemiddeld';
$txt['users_online'] = 'Gebruikers online';
$txt['gender_ratio'] = 'Man/vrouw-verhouding';
$txt['users_online_today'] = 'Vandaag online';
$txt['num_hits'] = 'Totaal aantal bekeken bladzijde';
$txt['average_hits'] = 'Gemiddeld aantal bekeken bladzijde per dag';

$txt['ssi_comment'] = 'reactie';
$txt['ssi_comments'] = 'reacties';
$txt['ssi_write_comment'] = 'Schrijf een reactie';
$txt['ssi_no_guests'] = 'Je kunt geen board selecteren dat niet toegankelijk is voor gasten. Controleer het board-ID alvorens het opnieuw te proberen.';
$txt['xml_feed_desc'] = 'informatie \'\'Live\'\' vanaf {forum_name}';

$txt['total_registers'] = 'Totaal aantal leden';
$txt['total_posts'] = 'Totaal aantal berichten';
$txt['total_topics'] = 'totaal aantal Topics';
$txt['total_boards'] = 'Totaal aantal boards';
$txt['total_cats'] = 'Totaal aantal categorieen';

$txt['totalTimeLogged_d_short'] = 'd';
$txt['totalTimeLogged_h_short'] = 'u';
$txt['totalTimeLogged_m_short'] = 'm';

// Debug related stats - when $db_show_debug is true.
$txt['debug_report'] = '
⇥<strong>Templates</strong> (%1$d): <em>%2$s</em>.
⇥<strong>Blokken</strong> (%3$d): <a href="#" onclick="%11$s">list</a><span class="hide"><em>%4$s</em></span>.
⇥<strong>Taal bestanden</strong> (%5$d): <a href="#" onclick="%11$s">list</a><span class="hide"><em>%6$s</em></span>.
⇥<strong>Opmaak modellen</strong> (%7$d): <a href="#" onclick="%11$s">list</a><span class="hide"><em>%8$s</em></span>.
⇥<strong>bestanden inbegrepen</strong> (%9$d): %10$sKB - <a href="#" onclick="%11$s">list</a><span class="hide"><em>%12$s</em></span>.
⇥<strong>geheugengebruik peak</strong>: %13$dKB.';
$txt['debug_cache_hits'] = '
⇥<strong>Cache hits</strong> (%1$d): %2$ss for %3$s bytes - <a href="#" onclick="%4$s">list</a><span class="hide"><em>%5$s</em></span>.';
$txt['debug_cache_seconds_bytes'] = '%1$s %2$ss - %3$s bytes';
$txt['debug_queries_used'] = '<strong>Queries gebruikt</strong>: %1$d';
$txt['debug_queries_used_and_warnings'] = '<strong>Queries gebruikt</strong>: %1$d, %2$d waarschuwingen';
$txt['debug_query_in_line'] = 'in <em>%1$s</em> lijn <em>%2$s</em>,,';
$txt['debug_query_which_took'] = 'deze duurde %1$s seconden.';
$txt['debug_query_which_took_at'] = 'deze duurde %1$s seconden at %2$s in aanvraag.';
$txt['debug_show_queries'] = '<strong>Queries uitzetten</strong>';
$txt['debug_hide_queries'] = '<strong>Verberg Queries</strong>';
