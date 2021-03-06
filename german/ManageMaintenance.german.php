<?php
// Version: 2.0; ManageMaintenance

$txt['repair_zero_ids'] = 'Finde Themen und/oder Beiträge mit einer Themen/Beitrags-ID von 0.';
$txt['repair_missing_topics'] = 'Beitrag #%1$d gehört zu einem nicht existierenden Thema #%2$d.';
$txt['repair_missing_messages'] = 'Thema #%1$d enthält keine (aktuellen) Beiträge.';
$txt['repair_stats_topics_1'] = 'Thema #%1$d hat als erste Beitrags ID %2$d, was aber falsch ist.';
$txt['repair_stats_topics_2'] = 'Thema #%1$d hat als letzte Beitrags ID %2$d, was aber falsch ist.';
$txt['repair_stats_topics_3'] = 'Thema #%1$d hat die falsche Anzahl an Antworten: %2$d.';
$txt['repair_stats_topics_4'] = 'Thema #%1$d hat die falsche Anzahl von unbestätigten Beiträgen: %2$d.';
$txt['repair_stats_topics_5'] = 'Thema #%1$d hat die falsche Bestätigung gesetzt.';
$txt['repair_missing_boards'] = 'Thema #%1$d steht im Forum #%2$d, welches aber nicht vorhanden ist.';
$txt['repair_missing_categories'] = 'Das Forum #%1$d ist in Kategorie #%2$d, welche aber nicht vorhanden ist.';
$txt['repair_missing_posters'] = 'Die Nachricht #%1$d wurde von #%2$d geschrieben, aber das Mitglied ist nicht mehr vorhanden.';
$txt['repair_missing_parents'] = 'Das Forum #%1$d ist ein Unterforum von #%2$d, welches nicht mehr vorhanden ist.';
$txt['repair_missing_polls'] = 'Das Thema #%1$d ist mit einer nicht mehr existierenden Umfrage verknüpft: #%2$d.';
$txt['repair_polls_missing_topics'] = 'Die Umfrage #%1$d ist mit einem nicht mehr existierenden Thema verknüpft: #%2$d.';
$txt['repair_missing_log_topics'] = 'Das Thema #%1$d ist als gelesen für ein oder mehrere Mitglieder markiert, aber diese Thema existiert nicht mehr.';
$txt['repair_missing_log_topics_members'] = 'Das Mitglied #%1$d hat ein oder mehrere Themen als gelesen markiert, aber diese Themen existieren nicht mehr.';
$txt['repair_missing_log_mark_read'] = 'Das Forum #%1$d wurde von einem oder mehreren Benutzern als gelesen markiert, aber dieses Forum existiert nicht mehr.';
$txt['repair_missing_log_mark_read_members'] = 'Das Mitglied #%1$d hat ein oder mehrere Foren als gelesen markiert, aber diese Foren existieren nicht mehr.';
$txt['repair_missing_pms'] = 'Die Private Nachricht #%1$d wurde an einen oder mehrere Empfänger verschickt, aber existiert nicht mehr.';
$txt['repair_missing_recipients'] = 'Das Mitglied #%1$d hat eine oder mehrere Private Nachrichten empfangen, existiert aber nicht mehr.';
$txt['repair_missing_senders'] = 'Die Private Nachricht #%1$d wurde von dem Mitglied #%2$d verschickt, welches aber nicht mehr existiert.';
$txt['repair_missing_notify_members'] = 'Benachrichtigungen wurden von dem Mitglied #%1$d angefordert, aber das Mitglied existiert nicht mehr.';
$txt['repair_missing_cached_subject'] = 'Der Betreff des Themas #%1$d befindet sich aktuell nicht im Betreff-Cache .';
$txt['repair_missing_topic_for_cache'] = 'Zwischengespeichertes Wort \'%1$s\' ist zu einem nicht existierenden Thema verlinkt.';
$txt['repair_missing_log_poll_member'] = 'In der Umfrage #%1$d wurde eine Stimme von #%2$d abgegeben, der aber nicht mehr existiert.';
$txt['repair_missing_log_poll_vote'] = 'Eine Stimme wurde von #%1$d abgegeben, aber die Umfrage #%2$d existiert nicht mehr.';
$txt['repair_missing_thumbnail_parent'] = 'Es existiert ein Vorschaubild mit dem Namen %1$s, aber es gibt keine Originaldatei mehr dafür';
$txt['repair_report_missing_comments'] = 'Meldung #%1$d des Themas: &quot;%2$s&quot; hat keine Kommentare.';
$txt['repair_comments_missing_report'] = 'Kommentar einer Meldung #%1$d von %2$s hat keine dazugehörige Meldung.';
$txt['repair_group_request_missing_member'] = 'Es existiert eine Gruppenanfrage von einem gelöschten Mitglied: #%1$d.';
$txt['repair_group_request_missing_group'] = 'Es existiert eine Gruppenbeitrittsanfrage für eine gelöschte Gruppe: #%1$d.';

$txt['repair_currently_checking'] = 'Prüfe: &quot;%1$s&quot;';
$txt['repair_currently_fixing'] = 'Repariere: &quot;%1$s&quot;';
$txt['repair_operation_zero_topics'] = 'Themen deren id_topic fälschlicherweise auf 0 gesetzt wurden';
$txt['repair_operation_zero_messages'] = 'Beiträge deren id_msg fälschlicherweise auf 0 gesetzt wurden';
$txt['repair_operation_missing_topics'] = 'Beiträge die keine Themenzuordnungen haben';
$txt['repair_operation_missing_messages'] = 'Themen ohne einen Beitrag';
$txt['repair_operation_stats_topics'] = 'Themen mit falschen Beitragseinträgen';
$txt['repair_operation_stats_topics2'] = 'Themen mit der falschen Anzahl von Antworten';
$txt['repair_operation_stats_topics3'] = 'Themen mit falschem Beitragszähler für unbestätigte Themen';
$txt['repair_operation_missing_boards'] = 'Themen in Foren die nicht mehr existieren';
$txt['repair_operation_missing_categories'] = 'Foren in nicht mehr existierenden Kategorien';
$txt['repair_operation_missing_posters'] = 'Nachrichten, die mit nicht mehr existierenden Mitgliedern verknüpft sind';
$txt['repair_operation_missing_parents'] = 'Unterforen, die kein Hauptforum besitzen';
$txt['repair_operation_missing_polls'] = 'Themen die mit nicht mehr existierenden Umfragen verknüpft sind';
$txt['repair_operation_missing_log_topics'] = 'Themen Logs, die mit nicht mehr existierenden Themen verknüpft sind';
$txt['repair_operation_missing_log_topics_members'] = 'Themen Logs, die mit nicht mehr existierenden Mitgliedern verknüpft sind';
$txt['repair_operation_missing_log_mark_read'] = 'Gelesen Markierungen, die für ein nicht mehr existierendes Forum sind';
$txt['repair_operation_missing_log_mark_read_members'] = 'Gelesen Markierungen, die für ein nicht mehr existierendes Mitglied sind';
$txt['repair_operation_missing_pms'] = 'PN-Empfänger, denen die Master-PN fehlt';
$txt['repair_operation_missing_recipients'] = 'PN-Empfänger die nicht mehr registriert sind';
$txt['repair_operation_missing_senders'] = 'PNs die mit einem nicht mehr existierenden Benutzer verknüpft sind';
$txt['repair_operation_missing_notify_members'] = 'Benachrichtigungen, die mit einem nicht mehr existierenden Mitglied verknüpft sind';
$txt['repair_operation_missing_cached_subject'] = 'Themen die ihren Cache-Eintrag für die Suche vermissen';
$txt['repair_operation_missing_topic_for_cache'] = 'Einträge im Such-Cache, die zu einem nicht mehr existierenden Thema gehören';
$txt['repair_operation_missing_member_vote'] = 'Stimmen aus Umfragen, die zu einem nicht mehr existierenden Mitglied gehören';
$txt['repair_operation_missing_log_poll_vote'] = 'Stimmen aus Umfragen, die mit einer nicht mehr existierenden Umfrage verlinkt sind';
$txt['repair_operation_report_missing_comments'] = 'Gemeldete Themen ohne Kommentar';
$txt['repair_operation_comments_missing_report'] = 'Kommentare in Meldungen, zu denen die dazugehörige Meldung fehlt';
$txt['repair_operation_group_request_missing_member'] = 'Gruppenanfragen in denen das anfragende Mitglied fehlt';
$txt['repair_operation_group_request_missing_group'] = 'Gruppenanfragen für eine nicht mehr existierende Gruppe';

$txt['salvaged_category_name'] = 'Bergungs-Station';
$txt['salvaged_category_error'] = 'Konnte die Bergungs-Kategorie nicht erstellen!';
$txt['salvaged_board_name'] = 'Geborgene Themen';
$txt['salvaged_board_description'] = 'Erstellt Themen für Beiträge ohne Themenzuordnung';
$txt['salvaged_board_error'] = 'Konnte das Forum für geborgenen Themen nicht erstellen!';
$txt['salvaged_poll_topic_name'] = 'Geborgene Umfrage';
$txt['salvaged_poll_message_body'] = 'Diese Umfrage wurde ohne Thema aufgefunden.';

$txt['database_optimize'] = 'Datenbank optimieren';
$txt['database_numb_tables'] = 'Deine Datenbank enthält %1$d Tabellen.';
$txt['database_optimize_attempt'] = 'Versuche die Datenbank zu optimieren...';
$txt['database_optimizing'] = 'Optimiere %1$s... %2$01.2f kb optimiert.';
$txt['database_optimized'] = array(0 => 'Alle Tabellen wurden bereits optimiert.', 1 => '%1$d Tabelle optimiert.', 'n' => '%1$d Tabellen optimiert.');
$txt['database_no_id'] = 'has a non-existent member ID';

// Error and intrusion logs.
$txt['apply_filter'] = 'Filter einschalten';
$txt['applying_filter'] = 'Schalte Filter ein';
$txt['filter_only_member'] = 'Nur die Fehlermeldungen des Mitglieds anzeigen';
$txt['filter_only_ip'] = 'Nur die Fehlermeldungen dieser IP-Adresse anzeigen';
$txt['filter_only_url'] = 'Nur die Fehlermeldungen dieser URL anzeigen';
$txt['filter_only_message'] = 'Nur die Fehler mit der selben Nachricht anzeigen';
$txt['filter_only_ua'] = 'Nur Fehler dieses User-Agenten anzeigen';
$txt['error_url'] = 'URL der Seite, die den Fehler verursacht hat';
$txt['error_message'] = 'Fehlermeldung';
$txt['clear_filter'] = 'Filter löschen';
$txt['remove_selection'] = 'Auswahl entfernen';
$txt['remove_filtered_results'] = 'ALLE gefilterten Ergebnisse entfernen';
$txt['sure_about_errorlog_remove'] = 'Möchtest du wirklich alle Fehlermeldungen löschen?';
$txt['reverse_direction'] = 'Anordnung der Liste umkehren';
$txt['error_type'] = 'Fehler vom Typ';
$txt['filter_only_type'] = 'Nur Fehler diesen Typs anzeigen';
$txt['filter_only_file'] = 'Nur Fehler von dieser Datei anzeigen';
$txt['apply_filter_of_type'] = 'Filter vom Typ';
$txt['request_method'] = 'Anfragemethode';
$txt['request_protocol'] = 'Anfrageprotokoll';
$txt['user_agent'] = 'User-Agent';
$txt['http_headers'] = 'Andere HTTP Header:';
$txt['file_out_of_bounds'] = 'Diese Datei ist kürzer als die definierte Zeilennummer. Daher kann es nicht angezeigt werden. Hast du es vielleicht modifiziert?';

$txt['errortype_all'] = 'Alle Fehler';
$txt['errortype_general'] = 'Allgemein';
$txt['errortype_general_desc'] = 'Allgemeine Fehler die keiner Kategorie zugeordnet sind';
$txt['errortype_critical'] = '<span style="color: red">Kritisch</span>';
$txt['errortype_critical_desc'] = 'Kritische Fehler. Diese sollten so schnell wie möglich behoben werden. Wenn diese Fehler ignoriert werden, kann es zu ungewünschte Ergebnissen führen und evtl. ein Sicherheitsrisiko darstellen';
$txt['errortype_database'] = 'Datenbank';
$txt['errortype_database_desc'] = 'Fehler die durch ungültige Abfragen hervorgerufen wurden. Diese solten protokolliert und an das Wedge-Team weitergegeben werden.';
$txt['errortype_undefined_vars'] = 'Undefiniert';
$txt['errortype_undefined_vars_desc'] = 'Fehler die durch undefinierte Variablen, einen undefinierten Index oder einen falschen Offset hervorgerufen wurden.';
$txt['errortype_mail'] = 'Email';
$txt['errortype_mail_desc'] = 'Fehler die während des Sendevorgangs einer Email aufgetreten sind. Viele Fehlermeldungen durch Mails deuten auf eine fehlerhafte Konfiguration hin';
$txt['errortype_filenotfound'] = 'Datei nicht gefunden';
$txt['errortype_filenotfound_desc'] = 'Fehler die durch Dateien verursacht werden, die angefragt wurden, aber nicht auf dem Server vorhanden sind.';
$txt['errortype_template'] = 'Vorlage';
$txt['errortype_template_desc'] = 'Fehler beim laden von Vorlagen (Templates).';
$txt['errortype_password'] = 'Passwörter';
$txt['errortype_password_desc'] = 'Mitglieder die ein falsches Passwort eingegeben haben.';
$txt['errortype_user'] = 'Benutzer';
$txt['errortype_user_desc'] = 'Fehler die von Benutzern verursacht wurden. Beinhaltet auch die Anmeldeversuche von gesperrten Mitgliedern und Aktionen, zu denen sie keine Berechtigung haben.';

$txt['maintain_recount'] = 'Alle Forenstatistiken neu berechnen';
$txt['maintain_recount_info'] = 'Sollte die Gesamtmenge von Beiträgen oder die Anzahl der PNs nicht stimmen, kann diese Funktion diese Daten neu auswerten.';
$txt['maintain_errors'] = 'Finde und repariere alle Fehler';
$txt['maintain_errors_info'] = 'Falls zum Beispiel nach einem Serverabsturz Beiträge und Themen fehlen sollten, kann diese Funktion dir dabei helfen, diese Beiträge zu finden.';
$txt['maintain_logs'] = 'Unwichtige Protokoldateien leeren';
$txt['maintain_logs_info'] = 'Diese Funktion bereinigt alle unwichtigen Protokolle. Diese Aktion sollte vermieden werden, außer es läuft etwas gewaltig schief. Zumindest tut es dem Forum nicht weh.';
$txt['maintain_cache'] = 'Dateicache leeren';
$txt['maintain_cache_info'] = 'Diese Funktion leert den Dateicache falls es erforderlich sein sollte.';
$txt['maintain_optimize'] = 'Optimiere alle Tabellen';
$txt['maintain_optimize_info'] = 'Diese Aufgabe erlaubt es, alle Tabellen einer Datenbank zu optimieren. Die Größe der Tabellen wird dabei minimiert. In manchen Fällen kann diese Aktion zu einer Verlangsamung des Forums führen.';
$txt['maintain_version'] = 'Alle Dateien auf neue Versionen überprüfen';
$txt['maintain_version_info'] = 'Detaillierte Versionsprüfung aller Dateien im Forum.';
$txt['maintain_run_now'] = 'Aufgabe jetzt ausführen';
$txt['maintain_return'] = 'Zurück zum Wartungs-Center';

$txt['maintain_old'] = 'Alte Beiträge entfernen';
$txt['maintain_old_since'] = 'Entferne alle Themen, in denen seit %1$s Tagen keine Antwort erstellt wurde und welche:';
$txt['maintain_old_move_since'] = 'Verschiebe alle Themen, in denen seit  %1$s Tagen keine Antwort erstellt wurde und welche:';
$txt['maintain_old_nothing_else'] = 'jeglicher Art von Themen sind.';
$txt['maintain_old_are_moved'] = 'Umleitungshinweise sind.';
$txt['maintain_old_are_locked'] = 'geschlossen sind.';
$txt['maintain_old_are_not_pinned'] = 'fixierte Themen ausschließen.';
$txt['maintain_old_all'] = 'Alle Foren (einzelne Foren durch Klick auswählen)';
$txt['maintain_old_choose'] = 'Bestimmte Foren (Alle Foren durch Klick auswählen)';
$txt['maintain_old_remove'] = 'Jetzt entfernen';
$txt['maintain_old_confirm'] = 'Möchtest du wirklich die alten Nachrichten löschen??<br><br>Dieser Vorgang kann nicht rückgängig gemacht werden!';

$txt['maintain_members'] = 'Inaktive Mitglieder löschen';
$txt['maintain_members_ungrouped'] = 'Mitglieder ohne Gruppenzugehörigkeit <span class="smalltext">(Mitglieder, die keiner Gruppe angehören)</span>';
$txt['maintain_members_since1'] = 'Alle Mitglieder löschen,  die nicht';
$txt['maintain_members_since2'] = 'seit';
$txt['maintain_members_since3'] = 'Tag(en).';
$txt['maintain_members_activated'] = 'ihren Zugang aktiviert haben';
$txt['maintain_members_logged_in'] = 'angemeldet waren';
$txt['maintain_members_all'] = 'Alle Mitgliedergruppen';
$txt['maintain_members_choose'] = 'Ausgewählte Mitgliedergruppen';
$txt['maintain_members_confirm'] = 'Möchtest du wrklich diese Benutzerkonten löschen?<br><br>Dieser Schritt kann nicht rückgängig gemacht werden!';

$txt['maintain_recountposts'] = 'Aktualisierung der Beitragszahlen';
$txt['maintain_recountposts_desc'] = 'Diese Funktion berechnet die Beiträge aller Mitglieder neu.';

// Move topics out.
$txt['move_topics_maintenance'] = 'Themen verschieben';
$txt['move_topics_select_board'] = 'Forum auswählen';
$txt['move_topics_from'] = 'Verschiebe Themen von';
$txt['move_topics_to'] = 'nach';
$txt['move_topics_now'] = 'Jetzt verschieben';
$txt['move_topics_confirm'] = 'Möchtest du wirklich ALLE Themen von &quot;%board_from%&quot; nach &quot;%board_to%&quot; verschieben?';

$txt['maintain_reattribute_posts'] = 'Übertrtagen von Beiträgen:';
$txt['reattribute_guest_posts'] = 'Finde alle Beiträge von Gästen mit...';
$txt['reattribute_email'] = 'Dieser Emailadresse:';
$txt['reattribute_username'] = 'Oder diesem Benutzernamen:';
$txt['reattribute_user'] = 'Oder führe sie mit diesem Mitglied zusammen:';
$txt['reattribute_current_member'] = '...und ordne sie folgendem Mitglied zu';
$txt['reattribute_increase_posts'] = 'Beitragszahl dem User gutschreiben';
$txt['reattribute'] = 'Übertragen';
$txt['reattribute_confirm'] = 'Möchtest du wirklich alle Gastbeiträge mit %type% von "%find%" auf das Mitglied "%member_to%" übertragen?';
$txt['reattribute_confirm_merge'] = 'Möchtest du wirklich das Benutzerkonto "%find%" mit dem Mitglied "%member_to%" zusammenführen?';
$txt['reattribute_confirm_username'] = 'ein Benutzername';
$txt['reattribute_confirm_email'] = 'eine Emailadresse';
$txt['reattribute_cannot_find_member'] = 'Konnte das Mitglied nicht finden um die Beiträge zu übertragen.';
$txt['reattribute_cannot_find_member_from'] = 'Konnte das Mitglied von dem Zusammengeführt werden soll nicht finden.';
