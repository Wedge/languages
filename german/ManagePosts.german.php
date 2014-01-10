<?php
// Version: 2.0; ManagePosts

// Post Settings
$txt['removeNestedQuotes'] = 'Entferne verschachtelte Zitate beim zitieren';
$txt['enableEmbeddedFlash'] = 'Erlaube die Einbettung von Flash in Beiträgen';
$txt['enableEmbeddedFlash_warning'] = 'Ist ein großes Sicherheitsrisiko!';
$txt['additional_options_collapsable'] = 'Aktiviere zusätzliche, ausklappbare Beitragsoptionen';

$txt['max_messageLength'] = 'Maximal erlaubte Beitragsgröße';
$txt['max_messageLength_zero'] = '0 für unbegrenzt.';
$txt['topicSummaryPosts'] = 'Beiträge die in der Themenzusammenfassung angezeigt werden';

$txt['max_image_width'] = 'Maximale Breite von angehangenen Bildern (0 = deaktivieren)';
$txt['max_image_height'] = 'Maximale Höhe von angehangenen Bildern (0 = deaktivieren)';

$txt['spamWaitTime'] = 'Zeit zwischen zwei Beiträgen von der selben IP-Adresse';
$txt['edit_wait_time'] = 'Wartezeit beim Editieren';
$txt['edit_disable_time'] = 'Maximale Zeit, die der Beitrag editiert werden kann';
$txt['edit_disable_time_zero'] = '0 = deaktiviert';
$txt['allow_non_mod_edit'] = 'Nicht-Moderatoren das Bearbeiten von Beiträgen gestatten, die ein Moderator bearbeitet hat?';

// Topic Settings
$txt['enableParticipation'] = 'Aktivire die Teilnahme Symbole';

$txt['correctExclamations'] = 'Korrigiere zu viele Ausrufezeichen im Betreff';
$txt['correctShouting'] = 'Maximale % von Großbuchstaben in der Betreffzeile';

$txt['oldTopicDays'] = 'Zeit bis ein Thema als veraltet gilt';
$txt['oldTopicDays_zero'] = '0 zum deaktivieren';
$txt['defaultMaxTopics'] = 'Anzahl der Themen pro Seite in der Beitragsübersicht';
$txt['defaultMaxMessages'] = 'Anzahl der Beiträge pro Seite in der Themenübersicht';

$txt['enableAllMessages'] = 'Maximale Anzahl von Beiträgen um &quot;Alle&quot; Beiträge anzeigen zu lassen';
$txt['enableAllMessages_zero'] = '0 um Alle Beiträge anzeigen zu deaktivieren;';
$txt['disableCustomPerPage'] = 'Deaktiviere die Benutzerdefinierte Einstellung der Anzahl von Themen und Beiträgen pro Seite';
$txt['enablePreviousNext'] = 'Aktiviere die vorherige/nächste Linkanzeige im Themenbereich';

$txt['ignoreMoveVsNew'] = 'Das verschieben von Beiträgen in jedes Forum zulassen';

// Bulletin Board Code
$txt['enableBBC'] = 'Aktiviere Bulletin Board Code (BBC)';
$txt['enablePostHTML'] = 'Aktiviere <em>einfaches</em> HTML in Beiträgen';
$txt['autoLinkUrls'] = 'Verlinke automatisch gepostete URLs';

$txt['disabledBBC'] = 'Aktivierte BBC Tags';
$txt['bbcTagsToUse'] = 'Aktivierte BBC Tags';
$txt['bbcTagsToUse_select'] = 'Wähle die erlaubten Tags aus, die verwendet werden dürfen';
$txt['bbcTagsToUse_select_all'] = 'Alle Tags auswählen';

// Post Editor
$txt['disable_wysiwyg'] = 'WYSIWYG Editor deaktivieren';
$txt['editorSizes'] = 'Schriftgrößen die im Editor verfügbar sind';
$txt['editorSizes_subtext'] = 'Eine pro Zeile';
$txt['editorFonts'] = 'Schriftarten die im Editor verfügbar sind';
$txt['editorFonts_subtext'] = 'Obwohl du alle Schriftarten hier einfügen kannst und diese auch im Editor aufgelistet werden, können diese nur funktionieren, wenn die User die Schriftart auch auf ihrem Computer installiert haben.';

// Censored Words
$txt['admin_censored_where'] = 'Gebe das zu sperrende Wort auf der linken Seite und das Wort, gegen das es ersetzt werden soll, auf die rechte Seite ein.';
$txt['censor_whole_words'] = 'Nur ganze Wörter prüfen';
$txt['censor_case'] = 'Ignoriere  den Fall beim sperren (wenn aktiviert, wird das gezielte Wort unabhängig vom Fall gesperrt).';
$txt['allow_no_censored'] = 'Gestatte Benutzern das Ausschalten der Sperrwortliste';

$txt['censor_test'] = 'Teste gesperrte Wörter';
$txt['censor_test_save'] = 'Testen';

// Draft Settings
$txt['masterSavePostDrafts'] = 'Aktiviere das Speichern von Beitragsentwürfen';
$txt['draftsave_subnote'] = 'Achtung: der User muss dazu die entsprechende Berechtigungen besitzen.';
$txt['masterAutoSavePostDrafts'] = 'Aktiviere das automatische Speichern von Beitragsentwürfen';
$txt['draftautosave_subnote'] = 'Diese Funktion überschreibt die obige Option. Sie erweitert sie nur. Also: Benutzer müssen die entsprechende Berechtigung haben';
$txt['masterAutoSaveDraftsDelay'] = 'Wie häufig sollen Beiträge automatisch abgespeichert werden?';
$txt['pruneSaveDrafts'] = 'Nach welcher Zeitspanne sollen die Entwürfe verworfen werden?';

// Merging
$txt['merge_post_header'] = 'Doppelte Beiträge zusammenführen';
$txt['merge_post_auto'] = 'Doppelte Beiträge automatisch zusammenführen';
$txt['merge_post_auto_time'] = 'Zeitversatz, nachdem Beiträge nicht mehr automatisch zusammengeführt werden.';
$txt['merge_post_auto_time_subtext'] = '(in Sekunden; auf 0 stellen, damit die Beiträge immer zusammengeführt werden)';

$txt['merge_post_admin_double_post'] = 'Führe doppelte Beiträge von Administratoren zusammen';

$txt['merge_post_no_time'] = 'Das Datum älterer Beiträge nach dem Trennzeichen nicht anzeigen';
$txt['merge_post_no_sep'] = 'Zeige weder das Trennzeichen, noch das Datum der älteren Beiträge.';
$txt['merge_post_separator'] = 'Trennzeichen zwischen zusammengeführten Beiträgen (aktiviere die Funktion oberhalb)';
$txt['merge_post_separator_subtext'] = 'Du solltest BBCode verwenden. Du kannst das Datum der älteren Beiträge anzeigen, wenn du die <strong>$date</strong> Variable in das Testfeld einbaust.<br>Standard ist: [size=1]$date[/size][hr][br]';
$txt['merge_post_custom_separator'] = 'Verwende ein bestimmtes Trennzeichen zwischen zusammengeführten Beiträgen.';
$txt['merge_post_custom_separator_subtext'] = 'Die Einstellungen oberhalb werden deaktiviert.';

$txt['merge_post_ignore_length'] = 'Maximal Länge der ignorierten Beiträge';
