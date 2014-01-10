<?php
// Version: 2.0; PersonalMessage

$txt['pm_inbox'] = 'Private Nachrichten - Posteingang';
$txt['send_message'] = 'Private Nachricht verschicken';
$txt['pm_add'] = 'Hinzufügen';
$txt['make_bcc'] = 'BCC hinzufügen';
$txt['pm_to'] = 'An';
$txt['pm_bcc'] = 'Bcc';
$txt['pm_contact_list'] = 'Kontaktliste';
$txt['inbox'] = 'Posteingang';
$txt['conversation'] = 'Unterhaltung';
$txt['messages'] = 'Nachrichten';
$txt['sent_items'] = 'Gesendete Nachrichten';
$txt['new_message'] = 'Neue Nachricht';
$txt['delete_message'] = 'Nachricht löschen';
// Don't translate "PMBOX" in this string.
$txt['delete_all'] = 'Alle Privaten Nachrichten löschen';
$txt['delete_all_confirm'] = 'Möchtest du wirklich alle Nachrichten löschen?';
$txt['recipient'] = 'Empfänger';
$txt['pm_multiple'] = '(mehrere Empfänger: \'Name1, Name2\')';

$txt['delete_selected_confirm'] = 'Möchtest du wirklich alle markierten Nachrichten löschen?';

$txt['pm_view'] = 'Lesen';
$txt['pm_display_mode'] = 'Private Nachrichten anzeigen';
$txt['pm_display_mode_all'] = 'Alle auf einmal';
$txt['pm_display_mode_one'] = 'Einzeln';
$txt['pm_display_mode_linked'] = 'Als Unterhaltung';

$txt['sent_to'] = 'Gesendet an';
$txt['reply_to_all'] = 'Allen antworten';
$txt['delete_conversation'] = 'Unterhaltung löschen';

$txt['pm_capacity'] = 'Kapazität';
$txt['pm_currently_using'] = '%1$s Nachrichten, zu %2$s%% voll.';
$txt['pm_sent'] = 'Deine Nachricht wurde erfolgreich verschickt.';

$txt['pm_receive_from'] = 'Erhalte Private Nachrichten von:';
$txt['pm_receive_from_everyone'] = 'Allen Mitgliedern';
$txt['pm_receive_from_ignore'] = 'Allen Mitgliedern, außer denen, die in meiner Ignorierliste stehen';
$txt['pm_receive_from_admins'] = 'Nur von Administratoren';
$txt['pm_receive_from_buddies'] = 'Nur von meinen Kontakten und Administratoren';
$txt['pm_remove_inbox_label'] = 'Den Posteingang entfernen wenn eine neuer Ordner angelegt wird';

$txt['pm_error_user_not_found'] = 'Kann das Mitglied \'%1$s\' nicht finden.';
$txt['pm_error_ignored_by_user'] = '\'%1$s\' hat Deine Private Nachricht blockiert.';
$txt['pm_error_data_limit_reached'] = 'PN konnte nicht an \'%1$s\' gesendet werden, da seine Mailbox voll ist.';
$txt['pm_error_user_cannot_read'] = '\'%1$s\' kann keine Privaten Nachrichten empfangen.';
$txt['pm_successfully_sent'] = 'PN an \'%1$s\' erfolgreich verschickt.';
$txt['pm_send_report'] = 'Bericht senden';
$txt['pm_undisclosed_recipients'] = 'Verdeckte Empfänger';
$txt['pm_too_many_recipients'] = array(1 => 'Du solltest nicht mehr als %1$s Empfänger auswählen.', 'n' => 'Du solltest nicht mehr als %1$s Empfänger gleichzeitig auswählen.');

$txt['pm_read'] = 'Gelesen';
$txt['pm_replied'] = 'Antwort an';

// Drafts.
$txt['pm_menu_drafts'] = 'Entwürfe';
$txt['showDrafts'] = 'Entwürfe anzeigen';
$txt['showDrafts_desc'] = 'Dieser Bereich listet alle deine gespeicherten Entwürfe auf.';
$txt['show_drafts_none'] = 'Du hast keine Entwürfe gespeichert.';
$txt['edit_draft'] = 'Entwurf bearbeiten';
$txt['draftAutoPurge'] = array(
	1 => 'Entwürfe werden für einen Tag auf dem Server gespeichert. Sollten die Entwürfe in dieser Zeit nicht bearbeitet, oder abgeschickt werden, werden diese gelöscht.',
	'n' => 'Entwürfe werden für %s Tage auf dem Server gespeichert. Sollten die Entwürfe in dieser Zeit nicht bearbeitet, oder abgeschickt werden, werden diese gelöscht.',
);
$txt['remove_all_drafts'] = 'Alle Entwürfe löschen';
$txt['remove_all_drafts_confirm'] = 'Mochtest du wirklich alle Entwürfe löschen? (Dies kann nicht rückgängig gemacht werden.)';
$txt['no_recipients'] = '(Keine Empfänger)';

// Message Pruning.
$txt['pm_prune'] = 'Nachrichten bereinigen';
$txt['pm_prune_desc1'] = 'Alle Privaten Nachrichten löschen, die älter sind als';
$txt['pm_prune_desc2'] = 'Tage.';
$txt['pm_prune_warning'] = 'Möchtest du wirklich deine Privaten Nachrichten bereinigen?';

// Actions Drop Down.
$txt['pm_actions_title'] = 'Weitere Aktionen';
$txt['pm_actions_delete_selected'] = 'Markierte löschen';
$txt['pm_actions_filter_by_label'] = 'Nach Ordner filtern';
$txt['pm_actions_go'] = 'Los';

// Manage Labels Screen. Just to make it a bit clearer in german, I named it Ordner.. Pandos
$txt['pm_manage_labels'] = 'Ordner verwalten';
$txt['pm_labels_delete'] = 'Möchtest du wirklich die ausgewählten Ordner löschen?';
$txt['pm_labels_desc'] = 'Hier kannst du Ordner für deine Privaten Nachrichten hinzufügen, bearbeiten und löschen.';
$txt['pm_label_add_new'] = 'Neuen Ordner hinzufügen';
$txt['pm_label_name'] = 'Name des Ordners';
$txt['pm_labels_no_exist'] = 'Du hast noch keinen Ordner erstellt!';

// Labeling Drop Down. ("Label Selected" means "Apply a label to the selection", in case it's unclear.)
$txt['pm_current_label'] = 'Ordner';
$txt['pm_sel_label_title'] = 'Ausgewählter Ordner...';
$txt['pm_msg_label_title'] = 'Ordner Name...';
$txt['pm_msg_label_apply'] = 'Ordner hinzufügen';
$txt['pm_msg_label_remove'] = 'Ordner löschen';
$txt['pm_msg_label_inbox'] = 'Posteingang';

// Sidebar Headings.
$txt['pm_labels'] = 'Ordner';
$txt['pm_messages'] = 'Nachrichten';
$txt['pm_actions'] = 'Aktionen';
$txt['pm_preferences'] = 'Einstellungen';

$txt['pm_is_replied_to'] = 'Du hast auf diese Nachricht geantwortet.';
$txt['pm_is_replied_to_sent'] = array(1 => 'Diese Nachricht wurde beantwortet.', 'n' => '%s Antworten auf diese Nachricht wurden verschickt.');

// Reporting messages.
$txt['pm_report_to_admin'] = 'Administrator melden';
$txt['pm_report_title'] = 'Private Nachricht melden';
$txt['pm_report_desc'] = 'Hier kannst du erhaltene Private Nachrichten an Administratoren und Moderatoren melden. Bitte vergiss nicht einen Grund für die Meldung anzugeben.';
$txt['pm_report_admins'] = 'Administrator an den die Nachricht gemeldet werden soll';
$txt['pm_report_all_admins'] = 'An alle Administratoren schicken';
$txt['pm_report_reason'] = 'der Grund warum du diese Nachricht melden möchtest';
$txt['pm_report_message'] = 'Nachricht melden';

// Important - The following strings should use numeric entities.
$txt['pm_report_pm_subject'] = '[MELDUNG] ';
// In the below string, do not translate "{REPORTER}" or "{SENDER}".
$txt['pm_report_pm_user_sent'] = '{REPORTER} hat eine Private Nachricht gemeldet. Diese Nachricht stammt von {SENDER}. Der Grund für die Meldung:';
$txt['pm_report_pm_other_recipients'] = 'Weitere Empfänger dieser Nachricht:';
$txt['pm_report_pm_hidden'] = array(1 => '%1$s versteckter Empfänger', 'n' => '%1$s versteckte Empfänger');
$txt['pm_report_pm_unedited_below'] = 'Hier ist der originale Inhalt der gemeldeten Nachricht:';
$txt['pm_report_pm_sent'] = 'Gesendet:';

$txt['pm_report_done'] = 'Vielen Dank für die Meldung. Du erhältst in Kürze eine Rückmeldung vom Administrations-Team.';
$txt['pm_report_return'] = 'Zurück zum Posteingang';

$txt['pm_search_title'] = 'Private Nachrichten suchen';
$txt['pm_search_bar_title'] = 'Nachrichten suchen';
$txt['pm_search_go'] = 'Suche';

$txt['pm_search_post_age'] = 'Alter der Nachricht';
$txt['pm_search_show_complete'] = 'Komplette Nachricht im Suchergebnis anzeigen.';
$txt['pm_search_subject_only'] = 'Nur nach Betreff und Autor suchen.';
$txt['pm_search_between'] = 'zwischen';
$txt['pm_search_between_and'] = 'und';
$txt['pm_search_between_days'] = 'Tagen';
$txt['pm_search_choose_label'] = 'Bitte Ordner auswählen, oder alle Ordner durchsuchen';

$txt['pm_search_results'] = 'Suchergebnis';
$txt['pm_search_none_found'] = 'Keine Nachrichten gefunden.';

$txt['pm_visual_verification_label'] = 'Bestätigung';
$txt['pm_visual_verification_desc'] = 'Bitte gebe den Bestätigungscode aus dem Bild ein um diese Nachricht zu versenden.';

$txt['pm_settings'] = 'Einstellungen bearbeiten';
$txt['pm_change_view'] = 'Ansicht ändern';

$txt['pm_manage_rules'] = 'Regeln bearbeiten';
$txt['pm_manage_rules_desc'] = 'Nachrichtenregeln erlauben die automatische Sortierung der erhaltenen Nachrichten. Hier findest du alle von dir erstellten Regeln. Klicke auf den Namen einer regel, um diese zu ändern.';
$txt['pm_rules_none'] = 'Du hast noch keine Regeln erstellt.';
$txt['pm_rule_title'] = 'Regel';
$txt['pm_add_rule'] = 'Neue Regel erstellen';
$txt['pm_apply_rules'] = 'Regeln aktivieren';
$txt['pm_js_apply_rules_confirm'] = 'Möchtest du wirklich diese Regeln auf alle Privaten Nachrichten anwenden?';
$txt['pm_edit_rule'] = 'Regel bearbeiten';
$txt['pm_rule_save'] = 'Regel speichern';
$txt['pm_delete_selected_rule'] = 'Markierte Regeln löschen';
$txt['pm_js_delete_rule_confirm'] = 'Möchtest du wirklich alle markierten Regeln löschen?';
$txt['pm_rule_name'] = 'Name';
$txt['pm_rule_name_desc'] = 'Name um dich an diese Regel zu erinnern';
$txt['pm_rule_name_default'] = '[NAME]';
$txt['pm_rule_description'] = 'Beschreibung';
$txt['pm_rule_not_defined'] = 'Füge einige Punkte hinzu, um die Regelbeschreibung zu erstellen.';
$txt['pm_rule_js_disabled'] = '<span class="alert"><strong>Achtung:</strong> Du scheinst JavaScript deaktiviert zu haben. Bitte aktiviere JavaScript, um diese Funktion zu verwenden.</span>';
$txt['pm_rule_criteria'] = 'Kriterium';
$txt['pm_rule_criteria_add'] = 'Kriterium hinzufügen';
$txt['pm_rule_criteria_pick'] = 'Kriterium auswählen';
$txt['pm_rule_mid'] = 'Name des Absenders';
$txt['pm_rule_gid'] = 'Gruppe des Absenders';
$txt['pm_rule_sub'] = 'Betreff enthält';
$txt['pm_rule_msg'] = 'Nachricht enthält';
$txt['pm_rule_bud'] = 'Absender ist ein Kontakt von mir';
$txt['pm_rule_sel_group'] = 'Gruppe auswählen';
$txt['pm_rule_logic'] = 'Wenn Kriterium ausgewählt wird';
$txt['pm_rule_logic_and'] = 'Alle Kriterien müssen zutreffen';
$txt['pm_rule_logic_or'] = 'Jedes Kriterium kann zutreffen';
$txt['pm_rule_actions'] = 'Aktionen';
$txt['pm_rule_sel_action'] = 'Wähle eine Aktion';
$txt['pm_rule_add_action'] = 'Aktion hinzufügen';
$txt['pm_rule_label'] = 'Nachricht in Ordner anzeigen';
$txt['pm_rule_sel_label'] = 'Ordner auswählen';
$txt['pm_rule_delete'] = 'Nachricht löschen';
$txt['pm_rule_no_name'] = 'Du hast vergessen einen Namen für diese Regel zu vergeben.';
$txt['pm_rule_no_criteria'] = 'Eine Regel muss mindestens auf ein Kriterium zutreffen und eine definierte Aktion haben.';
$txt['pm_rule_too_complex'] = 'Die von dir erstellte Regel ist zu lang und das Forum kann sie nicht speichern. Versuche es mit einer weniger komplexen Regel.';

$txt['pm_readable_and'] = '<strong>und</strong>';
$txt['pm_readable_or'] = '<strong>oder</strong>';
$txt['pm_readable_start'] = 'Wenn ';
$txt['pm_readable_end'] = '.';
$txt['pm_readable_member'] = 'Nachricht von &quot;{MEMBER}&quot; ist';
$txt['pm_readable_group'] = 'Absender aus der Gruppe &quot;{GROUP}&quot; ist';
$txt['pm_readable_subject'] = 'Betreff enthält &quot;{SUBJECT}&quot;';
$txt['pm_readable_body'] = 'Nachricht enthält &quot;{BODY}&quot;';
$txt['pm_readable_buddy'] = 'Absender ist in meiner Kontaktliste';
$txt['pm_readable_label'] = 'Zuordnen nach &quot;{LABEL}&quot;';
$txt['pm_readable_delete'] = 'Nachricht löschen';
$txt['pm_readable_then'] = '<strong>dann</strong>';
