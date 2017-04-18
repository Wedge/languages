<?php
// Version: 2.0; Modlog

$txt['modlog_date'] = 'Datum';
$txt['modlog_member'] = 'Lid';
$txt['modlog_position'] = 'positie';
$txt['modlog_action'] = 'Actie';
$txt['modlog_ip'] = 'IP';
$txt['logged'] = 'Ingelogd';
$txt['modlog_search_result'] = 'Zoekresultaten';
$txt['modlog_total_entries'] = 'Totaal aantal ingangen';
$txt['modlog_ac_approve_topic'] = 'Topic &quot;{topic}&quot; door &quot;{member}&quot; goedgekeurd;';
$txt['modlog_ac_approve'] = 'Bericht &quot;{subject}&quot; in &quot;{topic}&quot; door &quot;{member}&quot; goedgekeurd;';
$txt['modlog_ac_lock'] = 'Topic &quot;{topic}&quot; gesloten;';
$txt['modlog_ac_warning'] = 'Lid {member} gewaarschuwd wegens &quot;{message}&quot;';
$txt['modlog_ac_unlock'] = 'Topic &quot;{topic}&quot; heropend';
$txt['modlog_ac_pin'] = 'Topic &quot;{topic}&quot; sticky gemaakt';
$txt['modlog_ac_unpin'] = 'Topic &quot;{topic}&quot; niet-sticky gemaakt';
$txt['modlog_ac_delete'] = 'Bericht &quot;{subject}&quot; door &quot;{member}&quot; in &quot;{topic}&quot; verwijderd';
$txt['modlog_ac_delete_member'] = 'Lid &quot;{name}&quot; verwijderd';
$txt['modlog_ac_merge_member'] = 'Samengevoegd Lid &quot;{name}&quot; with &quot;{member}&quot; ';
$txt['modlog_ac_remove'] = 'Topic &quot;{topic}&quot; uit &quot;{board}&quot; verwijderd';
$txt['modlog_ac_modify'] = 'Bericht &quot;{message}&quot; door &quot;{member}&quot; bewerkt';
$txt['modlog_ac_merge'] = 'Topics samengevoegd tot &quot;{topic}&quot;';
$txt['modlog_ac_split'] = 'Topic &quot;{topic}&quot; afgesplitst tot &quot;{new_topic}&quot;';
$txt['modlog_ac_move'] = 'Topic &quot;{topic}&quot; verplaatst uit &quot;{board_from}&quot; naar &quot;{board_to}&quot;';
$txt['modlog_ac_profile'] = 'Profiel van &quot;{member}&quot; bewerkt;';
$txt['modlog_ac_pruned'] = 'Berichten ouder dan {days} verwijderd';
$txt['modlog_ac_news'] = 'Nieuws bewerkt';
$txt['modlog_enter_comment'] = 'Plaats moderatiecommentaar';
$txt['modlog_moderation_log'] = 'Moderatielog';
$txt['modlog_moderation_log_desc'] = 'Hieronder staat een lijst met alle moderatieacties die zijn uitgevoerd door moderators van het forum.<br ><strong>Opmerking:</strong> ingangen kunnen niet uit dit log verwijderd worden totdat ze ten minste 24 uur oud zijn.';
$txt['modlog_no_entries_found'] = 'Er zijn momenteel geen ingangen in het moderatielog opgenomen.';
$txt['modlog_removeall'] = 'Verwijder alles';
$txt['modlog_go'] = 'Zoek';
$txt['modlog_add'] = 'Voeg toe';
$txt['modlog_search'] = 'Snel zoeken';
$txt['modlog_by'] = 'Door';
$txt['modlog_id'] = '<em>Verwijderd - ID:%1$d</em>';

$txt['modlog_ac_ban'] = 'Bantriggers toegevoegd:';
$txt['modlog_ac_ban_trigger_member'] = '<em>Lid:</em> {member}';
$txt['modlog_ac_ban_trigger_email'] = '<em>E-mail:</em> {email}';
$txt['modlog_ac_ban_trigger_ip_range'] = '<em>IP:</em> {ip_range}';
$txt['modlog_ac_ban_trigger_hostname'] = '<em>Providersnaam:</em> {hostname}';

$txt['modlog_admin_log'] = 'Beheerderslog';
$txt['modlog_admin_log_desc'] = 'Hieronder staat een lijst met administatieve acties die zijn bijgehouden op je forum.<br ><strong>Opmerking:</strong> ingangen uit dit log kunnen niet worden verwijderd totdat ze ten minste 24 uur oud zijn.';
$txt['modlog_admin_log_no_entries_found'] = 'Er zijn momenteel geen ingangen in het beheerderslog opgenomen.';

// Admin type strings.
$txt['modlog_ac_upgrade'] = 'Forum bijgewerkt naar versie {version}';
$txt['modlog_ac_install'] = ' Geïnstalleerde versie {version}';
$txt['modlog_ac_add_board'] = 'Nieuw board toegevoegd: &quot;{board}&quot;';
$txt['modlog_ac_edit_board'] = 'Board &quot;{board}&quot; gewijzigd';
$txt['modlog_ac_delete_board'] = 'Board &quot;{boardname}&quot; verwijderd';
$txt['modlog_ac_add_cat'] = 'Nieuwe categorie toegevoegd: &quot;{catname}&quot;';
$txt['modlog_ac_edit_cat'] = 'Categorie bewerkt: &quot;{catname}&quot;';
$txt['modlog_ac_delete_cat'] = 'Categorie verwijderd: &quot;{catname}&quot;';

$txt['modlog_ac_delete_group'] = 'Groep &quot;{group}&quot; verwijderd';
$txt['modlog_ac_add_group'] = 'Groep &quot;{group}&quot; toegevoegd';
$txt['modlog_ac_edited_group'] = 'Groep &quot;{group}&quot; bewerkt';
$txt['modlog_ac_added_to_group'] = 'Lid &quot;{member}&quot; aan groep &quot;{group}&quot; toegevoegd';
$txt['modlog_ac_removed_from_group'] = 'Lid &quot;{member}&quot; uit groep &quot;{group}&quot; gehaald';
$txt['modlog_ac_removed_all_groups'] = 'Lid &quot;{member}&quot; uit alle groepen gehaald';

$txt['modlog_ac_remind_member'] = 'Herinnering over accountactivatie verstuurd naar &quot;{member}&quot;';
$txt['modlog_ac_approve_member'] = 'Account van &quot;{member}&quot; goedgekeurd/geactiveerd';
$txt['modlog_ac_newsletter'] = 'Nieuwsbrief verstuurd';

$txt['modlog_ac_enable_plugin'] = 'Plugin ingeschakeld: &quot;{plugin}&quot;, version {version}';
$txt['modlog_ac_disable_plugin'] = 'Plugin uitgeschakeld: &quot;{plugin}&quot;, version {version}';

// Restore topic.
$txt['modlog_ac_restore_topic'] = 'Herstel topic &quot;{topic}&quot; van &quot;{board}&quot; naar &quot;{board_to}&quot;';
$txt['modlog_ac_restore_posts'] = 'Berichten hersteld van &quot;{subject}&quot; naar topic &quot;{topic}&quot; in het board &quot;{board}&quot;';

$txt['modlog_parameter_guest'] = '<em>Gast</em>';
