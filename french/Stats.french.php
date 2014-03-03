<?php
// Version: 2.0; Stats

$txt['stats_center'] = 'Centre de statistiques';
$txt['general_stats'] = 'Statistiques générales';

// This is where we list all possible filter permutations for statistics. An empty line means a separator.
$txt['charts'] = array(
	'posts,topics,registers,most_on' => 'Tout|Sauf visites',
	'topics,registers,most_on' => 'Tout|Sauf visites et messages',
	'',
	'posts,hits' => 'Messages &amp; Visites',
	'posts,topics' => 'Messages &amp; Sujets',
	'',
	'topics' => 'Sujets',
	'posts' => 'Messages',
	'registers' => 'Inscriptions',
	'most_on' => 'Connexions simultanées',
	'hits' => 'Visites',
);

$txt['group_monthly'] = 'Mensuelles';
$txt['group_daily'] = 'Quotidiennes';
$txt['lifetime'] = 'Depuis le début';
$txt['last_month'] = '31 derniers jours';
$txt['last_year'] = '12 derniers mois';
$txt['stat_sum'] = 'Total :';
$txt['stat_average'] = 'Moyenne :';

$txt['date_format'] = '%@ %B %Y';
$txt['date_format_this_year'] = '%@ %B';

$txt['top_posters'] = 'Top 10 des auteurs';
$txt['top_boards'] = 'Top 10 des sections';
$txt['forum_history'] = 'Historique du forum (basé sur l\'heure interne du forum)';
$txt['stats_date'] = 'Date (aaaa/mm/jj)';
$txt['top_topics_replies'] = 'Top 10 des sujets (par réponses)';
$txt['top_topics_views'] = 'Top 10 des sujets (par pages vues)';
$txt['top_liked'] = 'Messages les plus appréciés';
$txt['top_liked_posters'] = 'Auteurs les plus appréciés';
$txt['top_starters'] = 'Top lanceurs de sujets';
$txt['most_time_online'] = 'Temps de connexion cumulé';
$txt['stats_more_detailed'] = 'plus de détails &raquo;';

$txt['average_registers'] = 'Moyenne des inscriptions par jour';
$txt['average_posts'] = 'Moyenne des messages par jour';
$txt['average_topics'] = 'Moyenne des sujets par jour';
$txt['average_most_on'] = 'Moyenne d\'utilisateurs connectés par jour';
$txt['users_online'] = 'Membres en ligne';
$txt['gender_ratio'] = 'Ratio hommes/femmes';
$txt['users_online_today'] = 'En ligne aujourd\'hui';
$txt['num_hits'] = 'Pages vues au total';
$txt['average_hits'] = 'Pages vues en moyenne par jour';

$txt['ssi_comment'] = 'commentaire';
$txt['ssi_comments'] = 'commentaires';
$txt['ssi_write_comment'] = 'Écrire un commentaire';
$txt['ssi_no_guests'] = 'Vous ne pouvez pas spécifier une section interdite d\'accès aux invités. Merci de vérifier l\'ID de la section avant de réessayer.';
$txt['xml_feed_desc'] = 'Informations en direct de {forum_name}';

$txt['total_registers'] = 'Total des membres';
$txt['total_posts'] = 'Total des messages';
$txt['total_topics'] = 'Total des sujets';
$txt['total_boards'] = 'Total des sections';
$txt['total_cats'] = 'Total des catégories';

$txt['totalTimeLogged_d_short'] = 'j ';
$txt['totalTimeLogged_h_short'] = 'h ';
$txt['totalTimeLogged_m_short'] = 'm';

// Debug related stats - when $db_show_debug is true.
$txt['debug_report'] = '
	<strong>Modèles</strong> (%1$d): <em>%2$s</em>.
	<strong>Blocs</strong> (%3$d): <a href="#" onclick="%11$s">voir</a><span class="hide"><em>%4$s</em></span>.
	<strong>Fichiers de langue</strong> (%5$d): <a href="#" onclick="%11$s">voir</a><span class="hide"><em>%6$s</em></span>.
	<strong>Feuilles de style</strong> (%7$d): <a href="#" onclick="%11$s">voir</a><span class="hide"><em>%6$s</em></span>.
	<strong>Fichiers inclus</strong> (%9$d): %10$sko - <a href="#" onclick="%11$s">voir</a><span class="hide"><em>%12$s</em></span>.
	<strong>Mémoire max. utilisée</strong>: %13$dko.';
$txt['debug_cache_hits'] = '
	<strong>Appels au cache</strong> (%1$d): %2$ss pour %3$s octets - <a href="#" onclick="%4$s">voir</a><span class="hide"><em>%5$s</em></span>.';
$txt['debug_cache_seconds_bytes'] = '%1$s %2$ss - %3$s octets';
$txt['debug_queries_used'] = '<strong>Requêtes utilisées</strong>: %1$d';
$txt['debug_queries_used_and_warnings'] = '<strong>Requêtes utilisées</strong>: %1$d, %2$d avertissements';
$txt['debug_query_in_line'] = 'Appelée dans <em>%1$s</em>, à la ligne <em>%2$s</em>, ';
$txt['debug_query_which_took'] = 'et exécutée en %1$s secondes.';
$txt['debug_query_which_took_at'] = 'et exécutée en %1$s secondes, à %2$s secondes du lancement du script.';
$txt['debug_show_queries'] = '<strong>Développer la liste</strong>';
$txt['debug_hide_queries'] = '<strong>Cacher la liste</strong>';
