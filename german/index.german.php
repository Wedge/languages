<?php
// Version: 2.0; Index

// Locale (strftime, pspell_new) and spelling. (pspell_new, can be left as '' normally.)
// For more information see:
//		http://www.php.net/function.pspell-new
//		http://www.php.net/function.setlocale
// Again, SPELLING SHOULD BE '' 99% OF THE TIME!! Please read this!
$txt['lang_name'] = 'Deutsch';
$txt['lang_locale'] = 'de_DE';
$txt['lang_paypal'] = 'DE';
$txt['lang_dictionary'] = 'de';
$txt['lang_spelling'] = 'deutsch';

// Character set and right to left?
$txt['lang_rtl'] = false;

// Number formats?
$txt['number_format'] = '1.234,00';
$txt['time_format'] = '%@ %B %Y, %H:%M Uhr';
$txt['time_format_this_year'] = '%@ %B um %H:%M Uhr';

// %@ is a special format that adds a suffix to a day (1-31), e.g. 1st, 2nd...
// If your language doesn't have any prefixes/suffixes it could use, just set it to $txt['day_suffix'] = '%s';
$txt['day_suffix'] = array(
	'n' => '%s.',
	1 => '1.',
	2 => '2.',
	3 => '3.',
	21 => '21.',
	22 => '22.',
	23 => '23.',
	31 => '31.',
);

$txt['page_indicator'] = ' - Seite %s'; // can be turned into an array as needed (1 => '', 'n' => ...)

$txt['days'] = array('Sonntag', 'Montag', 'Dienstag', 'Mittwoch', 'Donnerstag', 'Freitag', 'Samstag');
$txt['days_short'] = array('So', 'Mo', 'Di', 'Mi', 'Do', 'Fr', 'Sa');
// Months must start with 1 => 'January'. (or translated, of course.)
$txt['months'] = array(1 => 'Januar', 'Februar', 'März', 'April', 'Mai', 'Juni', 'Juli', 'August', 'September', 'Oktober', 'November', 'Dezember');
$txt['months_short'] = array(1 => 'Jan', 'Feb', 'Mär', 'Apr', 'Mai', 'Jun', 'Jul', 'Aug', 'Sep', 'Okt', 'Nov', 'Dez');

$txt['just_now'] = 'jetzt';
$txt['seconds_ago'] = 'vor {time} Sekunden ';
$txt['minutes_ago'] = 'vor {time} Minuten';
$txt['hours_ago'] = 'vor {time} Stunden';
$txt['days_ago'] = 'vor {time} Tagen';
$txt['months_ago'] = 'vor {time} Monaten';
$txt['years_ago'] = 'vor {time} Jahren';


$txt['admin'] = 'Admin';
$txt['moderate'] = 'Moderation';

$txt['save'] = 'Speichern';
$txt['modify'] = 'Ändern';

$txt['members'] = 'Mitgliedern';
$txt['board_name'] = 'Foren Name';

$txt['member_postcount'] = 'Beiträge';
$txt['no_subject'] = '(Kein Betreff)';
$txt['view_profile'] = 'Profil anschauen';
$txt['guest_title'] = 'Gast';
$txt['author'] = 'Autor';
$txt['on_date'] = 'am %1$s';
$txt['remove'] = 'Löschen';
$txt['start_new_topic'] = 'Neues Thema starten';

$txt['login'] = 'Anmelden';
// Use numeric entities in the below string.
$txt['username'] = 'Benutzername';
$txt['password'] = 'Passwort';
$txt['username_or_email'] = 'Benutzername oder Email';

$txt['board_moderator'] = 'Foren-Moderator';
$txt['remove_topic'] = 'Thema löschen';
$txt['modify_msg'] = 'Nachricht editieren';
$txt['name'] = 'Name';
$txt['email'] = 'Email';
$txt['subject'] = 'Betreff';
$txt['message'] = 'Nachricht';
$txt['quick_modify'] = 'Inline Editieren';

$txt['posts'] = 'Beiträge';
$txt['topics'] = 'Themen';
$txt['redirects'] = 'Umleitungen';
$txt['replies'] = 'Antworten';
$txt['views'] = 'Ansichten';

$txt['num_posts'] = array(0 => 'Keine Beiträge', 1 => '1 Beitrag', 'n' => '%s Beiträge');
$txt['num_topics'] = array(0 => 'Keine Themen', 1 => '1 Thema', 'n' => '%s Themen');
$txt['num_redirects'] = array(0 => 'Keine Umleitungen', 1 => '1 Umleitung', 'n' => '%s Umleitungen');
$txt['num_replies'] = array(0 => 'Keine Antworten', 1 => '1 Antwort', 'n' => '%s Antworten');
$txt['num_views'] = array(0 => 'Keine Ansichten', 1 => '1 Ansicht', 'n' => '%s Ansichten');

// Likes. What you've done implied past tense, while when you haven't liked it thus far, implies a present tense for everyone else.
$txt['you_like_this'] = array(
	0 => 'Dir gefällt das.',
	1 => 'Dir und einer weiteren Person gefällt das.',
	'n' => 'Dir und %1$s weiteren gefällt das.',
);
$txt['like_this'] = array(
	1 => 'Einer Person gefällt das.',
	'n' => '%1$s Personen gefällt das.',
);
$txt['like'] = 'Gefällt mir';
$txt['unlike'] = 'Gefällt mir nicht mehr';

$txt['nobody_likes_this'] = 'Gefällt noch niemanden.';
$txt['likes_header'] = array(1 => 'Einer Person gefällt das.', 'n' => '%s Personen gefällt das.');

$txt['choose_pass'] = 'Passwort wählen';
$txt['verify_pass'] = 'Passwort wiederholen';
$txt['position'] = 'Position';

$txt['total'] = 'Gesamt';
$txt['posts_made'] = 'Beiträge';
$txt['website'] = 'Webseite';
$txt['register'] = 'Registrieren';
$txt['warning_status'] = 'Verwarn-Status';
$txt['user_warn_warned'] = 'Benutzer wurde verwarnt';
$txt['user_warn_moderate'] = 'Benutzerbeiträge wandern in den Bestätigungscontainer';
$txt['user_warn_mute'] = 'Benutzer ist für neue Beiträge gesperrt';
$txt['user_warn_soft_ban'] = 'Benutzer ist Soft-gesperrt';
$txt['user_warn_hard_ban'] = 'Benutzer ist Hart-gesperrt';
$txt['warn_warned'] = 'Verwarnt';
$txt['warn_moderate'] = 'Moderiert';
$txt['warn_mute'] = 'Ausgeblendet';
$txt['warn_soft_ban'] = '(Soft) Gesperrt';
$txt['warn_hard_ban'] = '(Hard) Gesperrt';

// User menu strings
$txt['usermenu_profile'] = 'Profil';
$txt['usermenu_profile_desc'] = 'Betrachte das Benutzerprofil';
$txt['usermenu_website'] = 'Website';
$txt['usermenu_website_desc'] = 'Besuche die Webseite des Mitglieds';
$txt['usermenu_sendpm'] = 'Nachricht';
$txt['usermenu_sendpm_desc'] = 'Schicke anderen Nutzern eine Private Nachricht';
$txt['usermenu_showposts'] = 'Beiträge ansehen';
$txt['usermenu_showposts_desc'] = 'Die letzten Beiträge des Mitglieds anschauen';
$txt['usermenu_addbuddy'] = '+ Kontakte';
$txt['usermenu_addbuddy_desc'] = 'Benutzer zu meinen Kontakten hinzufügen';
$txt['usermenu_removebuddy'] = '- Kontakte';
$txt['usermenu_removebuddy_desc'] = 'Mitglied aus meinen Kontakten entfernen';
$txt['usermenu_ignore'] = 'Ignorieren';
$txt['usermenu_ignore_desc'] = 'Dieses Mitglied ignorieren';
$txt['usermenu_unignore'] = 'Nicht mehr ignorieren';
$txt['usermenu_unignore_desc'] = 'Diesen Benutzer nicht mehr ignorieren';
$txt['usermenu_seeip'] = '<span style="color: #aaa">IP: %2%</span>';
$txt['usermenu_seeip_desc'] = 'Von dieser IP-Adresse geschrieben';
$txt['usermenu_trackip'] = '<span style="color: #aaa">IP: %2%</span>';
$txt['usermenu_trackip_desc'] = 'IP beobachten';

// Action menu strings (per post)
$txt['acme_like'] = 'Gefällt mir';
$txt['acme_like_desc'] = 'Gefällt mir';
$txt['acme_unlike'] = 'Gefällt mir nicht mehr';
$txt['acme_unlike_desc'] = 'Gefällt mir nicht mehr';
$txt['acme_quote'] = 'Zitieren';
$txt['acme_quote_desc'] = 'Antworte auf diesen Beitrag';
$txt['acme_modify'] = 'Editieren';
$txt['acme_modify_desc'] = 'Editiere diesen Beitrag';
$txt['acme_report'] = 'Melden';
$txt['acme_report_desc'] = 'Melde den Beitrag einen Moderator';
$txt['acme_restore'] = 'Wiederherstellen';
$txt['acme_restore_desc'] = 'Stelle die Sichtbarkeit dieses Beitrags wieder her';
$txt['acme_merge'] = 'Zusammenführen';
$txt['acme_merge_desc'] = 'Führe diesen Beitrag mit einem vorherigen zusammen';
$txt['acme_split'] = 'Teilen';
$txt['acme_split_desc'] = 'Teile das Thema in ein neues Thema auf';
$txt['acme_remove'] = 'Löschen';
$txt['acme_remove_desc'] = 'Lösche diesen Beitrag';
$txt['acme_approve'] = 'Bestätigen';
$txt['acme_approve_desc'] = 'Schalte diesen Beitrag frei, damit andere ihn sehen können';
$txt['acme_warn'] = 'Verwarnen';
$txt['acme_warn_desc'] = 'Erteile eine Verwarnung wegen des Beitrags';

$txt['actions_button'] = 'Aktionen&hellip;';
$txt['more_actions'] = 'Mehr&hellip;';

$txt['board_index'] = 'Foren-Hauptseite';
$txt['message_index'] = 'Nachrichten Übersicht';
$txt['news'] = 'News';
$txt['home'] = 'Home';
$txt['community'] = 'Community';

$txt['lock_unlock'] = 'Schließe/Öffne das Thema';
$txt['post'] = 'Schreiben';
$txt['error_occurred'] = 'Ein Fehler ist aufgetreten!';
$txt['logout'] = 'Logout';
$txt['started_by'] = 'Gestartet von';
$txt['last_post_author_link_time'] = '<strong>Letzter Beitrag</strong> von {author} in {link} {time}';
$txt['last_post_time_author'] = '{time} von {author}';
$txt['board_off_limits'] = 'Dieses Forum überschreitet Deine Berechtigungen.';

$txt['last_post'] = 'Letzter Beitrag';
// Use numeric entities in the below string.
$txt['topic'] = 'Thema';
$txt['help'] = 'Hilfe';
$txt['notify'] = 'Benachrichtigen';
$txt['unnotify'] = 'Nicht mehr benachrichtigen';
$txt['notify_request'] = 'Möchtest Du eine Benachrichtigung erhalten, wenn eine Antwort auf dieses Thema geschrieben wird?';

$txt['move_topic'] = 'Thema verschieben';
$txt['move_to'] = 'Verschiebe nach';
$txt['pages'] = 'Seiten';
$txt['users_active'] = 'Aktive Mitglieder in den vergangenen %1$d Minuten';
$txt['personal_messages'] = 'Private Nachrichten';

$txt['quote_from'] = 'Zitat von';
$txt['quote'] = 'Zitat';
$txt['quote_noun'] = 'Zitieren';
$txt['reply'] = 'Antworten';
$txt['reply_number'] = 'Antworten #<strong>%1$d</strong>,';

$txt['approve'] = 'Genehmigen';
$txt['approve_all'] = 'Alle genehmigen';
$txt['awaiting_approval'] = 'Warten auf Genehmigung';
$txt['post_awaiting_approval'] = 'HINWEIS: Die Nachricht wartet auf die Bestätigung eines Moderators.';
$txt['there_are_unapproved_topics'] = 'Es warten %1$s Themen und %2$s Beiträge auf Bestätigung in diesem Forum. Gehe zur <a href="%3$s">Übersicht</a> um die Beiträge anzuzeigen.';

$txt['msg_alert_none'] = 'Keine Nachrichten...';
// SSI - The {new} construct is used to add the (x new) area in a language-dependent manner, using unread_pms, as below.
$txt['you_have_msg'] = array(
	0 => 'Du hast keine Nachrichten',
	1 => 'Du hast <a href="<URL>?action=pm">1</a> Nachricht {new}',
	'n' => 'Du hast <a href="<URL>?action=pm">%s</a> Nachrichten {new}',
);
$txt['unread_pms'] = array(0 => '(keine neu)', 1 => '(1 Neu)', 'n' => '(%s Neu)');

$txt['remove_message'] = 'Nachricht löschen';
$txt['remove_message_confirm'] = 'Nachricht löschen?';

$txt['online_users'] = 'Benutzer Online';
$txt['personal_message'] = 'Private Nachricht';
$txt['jump_to'] = 'Schnellzugriff';
$txt['are_sure_remove_topic'] = 'Möchtest du wirklich dieses Thema löschen?';

$txt['go'] = 'Los';
$txt['ok'] = 'OK';
$txt['yes'] = 'Ja';
$txt['no'] = 'Nein';

$txt['search'] = 'Suche';
$txt['all_pages'] = 'Alle';

$txt['back'] = 'Zurück';
$txt['topic_started'] = 'Thema gestartet von';
$txt['title'] = 'Betreff';
$txt['post_by'] = 'Beitrag von';
$txt['welcome_member'] = 'Ein herzliches willkommen an %1$s, unserem neuesten Mitglied.';
$txt['notify_deactivate'] = 'Möchtest Du die Benachrichtigung für dieses Thema deaktivieren?';

$txt['last_edit'] = 'Editiert am {date} von {name}';
$txt['last_edit_mine'] = 'Zuletzt bearbeitet {date}';

$txt['location'] = 'Ort';
$txt['gender'] = 'Geschlecht';
$txt['date_registered'] = 'Registrierungsdatum';

$txt['recent_posts'] = 'Neue Beiträge';
$txt['recent_view'] = 'Schau dir die neuesten Beiträge an';

$txt['male'] = 'Männlich';
$txt['female'] = 'Weiblich';

$txt['welcome_guest'] = 'Willkommen, <strong>%1$s</strong>. Bitte <a href="<URL>?action=login">anmelden</a> oder <a href="<URL>?action=register">registrieren</a>.';
$txt['welcome_guest_noregister'] = 'Willkommen, <strong>%1$s</strong>. Bitte <a href="<URL>?action=login">anmelden</a>.';
$txt['login_or_register'] = 'Bitte <a href="<URL>?action=login">anmelden</a> oder <a href="<URL>?action=register">registrieren</a>.';
$txt['please_login'] = 'Bitte <a href="<URL>?action=login">anmelden</a>.';
$txt['welcome_guest_activate'] = '<br>Hast du die <a href="<URL>?action=activate">Aktivierungsmail</a> nicht erhalten?';
$txt['hello_member'] = 'Hallo';
$txt['hello_guest'] = 'Willkommen,';
$txt['select_destination'] = 'Gehe nach:';

$txt['posted_by'] = 'Geschrieben von';

$txt['moderator'] = 'Moderator';
$txt['moderators'] = 'Moderatoren';

// For the Short form, use '!' in case your language's 'New' is too long.
$txt['new'] = 'Neu';
$txt['new_short'] = 'Neu';

$txt['edited'] = 'Editiert';

$txt['forgot_your_password'] = 'Passwort vergessen?';

$txt['date'] = 'Datum';
$txt['from'] = 'Von';
$txt['to'] = 'An';

$txt['members_title'] = 'Mitglieder';

$txt['redirect_board'] = 'Weitergeleitetes Forum';

$txt['notification'] = 'Benachrichtigung';

$txt['your_ban'] = 'Sorry %1$s, Du bist in diesem Forum gesperrt!<br>%2$s';
$txt['your_ban_expires'] = 'Die Sperre ist gültig bis: %1$s .';
$txt['your_ban_expires_never'] = 'Die Sperre ist auf Lebenszeit gültig.';
$txt['ban_continue_browse'] = 'Du darfst das Forum gerne als Gast besuchen.';

$txt['mark_board_read'] = 'Alle Themen in diesem Forum als gelesen markieren';
$txt['mark_as_read'] = 'Alle Nachrichten als gelesen markieren';

$txt['legend'] = 'Legende';
$txt['locked_topic'] = 'Thema geschlossen';
$txt['normal_topic'] = 'Normales Thema';
$txt['participation_caption'] = 'Themen auf die du geantwortet hast';

$txt['print'] = 'Drucken';
$txt['profile'] = 'Profil';
$txt['not_applicable'] = 'N/A';
$txt['preview'] = 'Vorschau';
$txt['remove_draft'] = 'Entwurf löschen';
$txt['ip'] = 'IP';
$txt['by'] = 'von';
$txt['days_word'] = 'Tage';
$txt['search_for'] = 'Suche nach';
$txt['maintain_mode_on'] = 'Erinnerung: dieses Forum läuft im Wartungs-Modus.';

$txt['global_stats'] = 'Allgemeine Statistiken';
$txt['forum_stats'] = 'Foren-Statistik';
$txt['blog_stats'] = 'Blog-Statistik';
$txt['topic_stats'] = 'Themen-Statistik';

$txt['latest_member'] = 'Neuestes Mitglied';
$txt['latest_post'] = 'Letzter Beitrag';

$txt['youve_got_pms'] = array(0 => 'Du hast keine Nachrichten...', 1 => 'Du hast eine Nachricht...', 'n' => 'Du hast %s Nachrichten...');
$txt['click_to_view_them'] = 'Klicke <a href="%1$s">hier</a> um sie zu lesen.';

$txt['print_page'] = 'Druckerfreundliche Seite';

$txt['info_center_title'] = 'Info-Center';

$txt['send_topic'] = 'Thema versenden';

$txt['check_all'] = 'Alle auswählen';

$txt['file'] = 'Datei';

$txt['today'] = '<strong>Heute</strong> um ';
$txt['yesterday'] = '<strong>Gestern</strong> um ';
$txt['new_poll'] = 'Neue Umfrage';
$txt['poll_vote'] = 'Stimme abgeben';
$txt['poll_total_voters'] = 'Stimmen insgesamt';
$txt['poll_results'] = 'Ergebnis anschauen';
$txt['poll_lock'] = 'Umfrage schließen';
$txt['poll_unlock'] = 'Umfrage freigeben';
$txt['poll_edit'] = 'Unfrage editieren';
$txt['poll'] = 'Umfrage';
$txt['poll_voters_guests_only'] = array(
	1 => '1 Gast',
	'n' => '%1$s Gäste',
);
$txt['poll_voters'] = array(
	1 => 'und 1 Gast',
	'n' => 'und %1$s Gäste',
);
$txt['poll_visibility_admin'] = 'Nur Administratoren können sehen, wofür du abgestimmt hast.';
$txt['poll_visibility_creator'] = 'Die Administratoren und der Autor der Umfrage können sehen, wofür du abgestimmt hast.';
$txt['poll_visibility_members'] = 'Alle registrierten Mitglieder können sehen, wofür du abgestimmt hast.';
$txt['poll_visibility_anyone'] = 'Jeder, auch Gäste können sehen, wofür du abgestimmt hast.';
$txt['one_day'] = '1 Tag';
$txt['one_week'] = '1 Woche';
$txt['one_month'] = '1 Monat';
$txt['forever'] = 'Für immer';
$txt['quick_login_desc'] = 'Anmelden mit Benutzername, Passwort und Sitzungslänge';
$txt['one_hour'] = '1 Stunde';
$txt['board'] = 'Forum';
$txt['in'] = 'in';
$txt['pinned_topic'] = 'Fixiertes Thema';

$txt['delete'] = 'Löschen';

$txt['kilobyte'] = 'kB';

$txt['more_stats'] = '[Mehr Statistiken]';

$txt['code'] = 'Code';
$txt['code_select'] = '[Auswählen]';

$txt['merge'] = 'Themen zusammenführen';
$txt['new_topic'] = 'Neues Thema';

$txt['set_pin'] = 'Thema fixieren';
$txt['set_unpin'] = 'Fixierung des Themas entfernen';
$txt['set_lock'] = 'Thema schließen';
$txt['set_unlock'] = 'Thema öffnen';
$txt['order_pinned_topic'] = 'Fixierte Themen neu anordnen';

$txt['page_created'] = 'Seite erstellt in ';
$txt['seconds_with_query'] = '%1$.2f Sekunden mit 1 Datenbankabfrage.';
$txt['seconds_with_queries'] = '%1$.2f Sekunden mit %2$d Datenbankabfragen.';

$txt['online'] = 'Online';
$txt['offline'] = 'Offline';
$txt['pm_online'] = 'Private Nachricht (Online)';
$txt['pm_offline'] = 'Private Nachricht (Offline)';
$txt['online_status'] = 'Status';

$txt['go_up'] = 'Nach oben';
$txt['go_down'] = 'Nach unten';

$txt['site_credits'] = 'Website Credits';
$txt['copyright'] = 'Powered by <a href="http://wedge.org/" target="_blank" class="new_win">Wedge</a>';
$txt['dynamic_replacements'] = '<abbr title="Dynamic Replacements">DR</abbr>';

$txt['template_block_error'] = 'Kann den "%1$s" Template block nicht finden.';
$txt['theme_template_error'] = 'Kann das "%1$s" Template nicht laden.';
$txt['theme_language_error'] = 'Kann die "%1$s" Sprachdatei nicht laden.';

$txt['sub_boards'] = 'Untergeordnete Foren';

$txt['smtp_no_connect'] = 'Kann nicht zum SMTP Host verbinden';
$txt['smtp_port_ssl'] = 'SMTP-Port Einstellungen sind nicht korrekt. Für SSL-Server sollte es der Port 465 sein.';
$txt['smtp_bad_response'] = 'Kann die Antwort-Codes vom Mailserver nicht verarbeiten';
$txt['smtp_error'] = 'Probleme beim Mailversand. Fehler: ';

$txt['mlist_search'] = 'Suche nach Mitgliedern';
$txt['mlist_search_again'] = 'Suche wiederholen';
$txt['mlist_search_email'] = 'Suche nach Mailadresse';
$txt['mlist_search_group'] = 'Suche nach Rang';
$txt['mlist_search_name'] = 'Suche nach Name';
$txt['mlist_search_website'] = 'Suche nach Webseite';
$txt['mlist_search_results'] = 'Suchergebnisse für';
$txt['mlist_search_by'] = 'Suche nach %1$s';
$txt['mlist_menu_view'] = 'Mitgliederliste anschauen';

$txt['attach_downloaded'] = array(1 => 'downloaded once.', 'n' => '%s x heruntergeladen.');
$txt['attach_viewed'] = array(1 => 'viewed once.', 'n' => '%s x heruntergeladen.');

$txt['settings'] = 'Einstellungen';
$txt['never'] = 'Niemals';
$txt['more'] = 'Mehr';

$txt['hostname'] = 'Hostname';
$txt['you_are_post_banned'] = 'Sorry %1$s, du bist gesperrt und kannst keine neuen Beiträge verfassen.';
$txt['you_are_pm_banned'] = 'Sorry %1$s, du bist gesperrt worden und kannst keine Privaten Nachrichten verschicken.';
$txt['you_are_post_pm_banned'] = 'Sorry %1$s, du bist gesperrt worden und kannst keine Beiträge mehr schreiben und Private Nachrichten verschicken.';

$txt['add_poll'] = 'Umfrage hinzufügen';
$txt['poll_options6'] = 'Du solltest nur bis zu %1$s Antwortmöglichkeiten hinzufügen.';
$txt['poll_remove'] = 'Umfrage löschen';
$txt['poll_remove_warn'] = 'Möchtest du wirklich die Umfrage aus diesem Thema löschen?';
$txt['poll_results_expire'] = 'Die Ergebnisse werden nach Beendigung der Umfrage angezeigt.';
$txt['poll_expires_on'] = 'Umfrage endet';
$txt['poll_expired_on'] = 'Umfrage beendet';
$txt['poll_change_vote'] = 'Umfrage löschen';
$txt['poll_return_vote'] = 'Umfrage Optionen';
$txt['poll_cannot_see'] = 'Du kannst zur Zeit die Ergebnisse der Umfrage nicht sehen.';

$txt['quick_mod_approve'] = 'Ausgewählte bestätigen';
$txt['quick_mod_remove'] = 'Ausgewählte löschen';
$txt['quick_mod_lock'] = 'Ausgewählte schließen/öffnen';
$txt['quick_mod_pin'] = 'Fixieren/Fixierung lösen';
$txt['quick_mod_move'] = 'Ausgewählte verschieben nach';
$txt['quick_mod_merge'] = 'Ausgewählte zusammenführen';
$txt['quick_mod_markread'] = 'Ausgewählte als gelesen markieren';
$txt['quick_mod_go'] = 'Go!';

$txt['generic_confirm_request'] = 'Bist Du sicher?';

$txt['reagree_reply'] = 'Die Nutzungsbedingungen haben sich geändert. Bevor du neue Beiträge erstellen kannst, musst du den neuen Nutzungsbedingungen zustimmen: <a href="%1$s">Nutzungsbedingungen</a>.';
$txt['quick_reply'] = 'Schnellantwort';
$txt['quick_reply_warning'] = 'Warnung: Das Thema ist momentan geschlossen. Nur Administratoren und Moderatoren können hier antworten.';
$txt['quick_reply_verification'] = 'Nach dem abschicken wirst du automatisch auf die Beitrags-Seite umgeleitet,  um deinen Beitrag: %1$s zu kontrollieren.';
$txt['quick_reply_verification_guests'] = '(Benötigt für alle Gäste)';
$txt['quick_reply_verification_posts'] = '(Benötigt für alle User mit weniger als %1$d Beiträgen)';
$txt['wait_for_approval'] = 'Anmerkung: Dieser Beitrag wird erst angezeigt, wenn er durch einen Moderator freigegeben wurde.';

$txt['notification_enable_board'] = 'Möchtest du die Benachrichtigung über neue Themen in diesem Forum aktivieren?';
$txt['notification_disable_board'] = 'Möchtest du die Benachrichtigung über neue Themen in diesem Forum deaktivieren?';
$txt['notification_enable_topic'] = 'Möchtest du die Benachrichtigung über neue Antworten in diesem Beitrag aktivieren?';
$txt['notification_disable_topic'] = 'Möchtest du die Benachrichtigung über neue Antworten in diesem Beitrag deaktivieren?';

$txt['unread_topics'] = 'Ungelesene Themen';
$txt['unread_replies'] = 'Aktualisierte Themen';

$txt['who_title'] = 'Wer ist Online';
$txt['who_and'] = ' und ';
$txt['who_viewing_topic'] = ' lesen dieses Thema.';
$txt['who_viewing_board'] = ' betrachten dieses Forum.';
$txt['who_member'] = 'Mitglied';

// Feed block
$txt['feed'] = 'Feed neuer Beiträge';
$txt['feed_current_topic'] = 'Thema:';
$txt['feed_current_forum'] = 'Dieses Forum:';
$txt['feed_current_blog'] = 'Diesen Blog:';
$txt['feed_everywhere'] = 'Seite:';
$txt['feed_posts'] = '<a href="%1$s">Beiträge</a>';
$txt['feed_topics'] = '<a href="%1$s">Themen</a>';

// Footer strings
$txt['valid_html5'] = 'Gültiges HTML5!';
$txt['html5'] = 'HTML5';

$txt['guest'] = 'Gast';
$txt['guests'] = 'Gäste';
$txt['user'] = 'Mitglied';
$txt['users'] = 'Mitglieder';
$txt['hidden'] = 'Versteckt';

$txt['buddy'] = 'Kontakt';
$txt['buddies'] = 'Kontakte';
+$txt['contacts_friends'] = 'Freunde';
+$txt['contacts_known'] = 'Bekannte';
+$txt['contacts_work'] = 'Kollegen';
+$txt['contacts_family'] = 'Familie';
+$txt['contacts_follow'] = 'Gefolgt';
+$txt['contacts_restrict'] = 'Eingeschränkt';
+$txt['contacts_custom'] = '<em>Neue Liste</em>';
$txt['is_buddy'] = 'Befindet sich in meiner Kontaktliste';
$txt['is_not_buddy'] = 'Ist nicht in meiner Kontaktliste';
$txt['most_online_ever'] = 'Online-Rekord';
$txt['most_online_today'] = 'Online heute';

$txt['response_prefix'] = 'Aw: ';

$txt['approve_members_waiting'] = array(
	1 => 'Es wartet <a href="<URL>?action=admin;area=viewmembers;sa=browse;type=approve">ein Mitglied</a> auf Bestätigung.',
	'n' => 'Es warten <a href="<URL>?action=admin;area=viewmembers;sa=browse;type=approve">%s Mitglieder</a> auf Bestätigung.',
);

$txt['notifyboard_turnon'] = 'Möchtest du eine Benachrichtigung erhalten wenn jemand ein neues Thema in diesem Forum erstellt?';
$txt['notifyboard_turnoff'] = 'Möchtest du wirklich keine Benachrichtigung erhalten wenn jemand ein neues Thema in diesem Forum erstellt?';

$txt['show_unread'] = 'Ungelesene Beiträge';
$txt['show_unread_replies'] = 'Ungelesene Antworten';

$txt['quickmod_delete_selected'] = 'Ausgewählte löschen';

$txt['show_personal_messages'] = 'Du hast eine oder mehrere Private Nachrichten erhalten.<br><br>Möchtest du sie lesen?';

$txt['previous_next_back'] = '&laquo; Seite zurück';
$txt['previous_next_forward'] = 'Seite vor &raquo;';

$txt['upshrink_description'] = 'Ein- oder ausklappen.';

$txt['mark_unread'] = 'Alle Themen als ungelesen markieren';

$txt['error_while_submitting'] = 'Der folgende Fehler ist beim schreiben der Nachricht aufgetreten:';
$txt['error_old_topic'] = 'Warnung: In diesem Thema wurde schon seit mehr als %1$d Tagen nichts mehr geschrieben.';

$txt['mark_read_short'] = 'Ale Themen als gelesen markieren';

$txt['pm_short'] = 'Meine Nachrichten';

$txt['hello_member_ndt'] = 'Hallo, <span>%1$s</span>!';

$txt['unapproved_posts'] = 'Unbestätigte Beiträge (Themen: %1$d, Beiträge: %2$d)';

$txt['ajax_in_progress'] = 'Lade...';

$txt['verification'] = 'Überprüfung';
$txt['visual_verification_description'] = 'Bitte die Buchstaben aus dem Bild eingeben';
$txt['visual_verification_sound'] = 'Buchstaben vorlesen';
$txt['visual_verification_request_new'] = 'Bild neu laden';
$txt['visual_verification_hidden'] = 'Das Feld muss leer bleiben';

// Sub menu labels
$txt['summary'] = 'Zusammenfassung';
$txt['account'] = 'Benutzerkonten-Einstellung';
$txt['forumprofile'] = 'Forum-Profil';
$txt['change_skin'] = 'Skin-Auswahl';
$txt['draft_posts'] = 'Entwürfe';

$txt['skin_default'] = 'Standard';
$txt['skin_default_mobile'] = 'Mobil als Standard';

$txt['settings_title'] = 'Allgemeine-Optionen';
$txt['plugin_manager'] = 'Plugins';
$txt['errlog'] = 'Fehlerprotokoll';
$txt['edit_permissions'] = 'Berechtigungen';
$txt['mc_unapproved_poststopics'] = 'Noch nicht bestätigte Beiträge';
$txt['mc_reported_posts'] = 'Gemeldete Beiträge';
$txt['modlog_view'] = 'Moderatorenprotokoll';
$txt['unapproved_members'] = 'Noch nicht bestätigte Mitglieder';

$txt['ignoring_user'] = 'Du ignorierst diesen Benutzer. Klicke hier um den Beitrag anzuzeigen oder zu verstecken.';

$txt['spider'] = 'Suchmaschine';
$txt['spiders'] = 'Suchmaschinen';

$txt['downloads'] = 'Downloads';
$txt['filesize'] = 'Dateigröße';

$txt['sideshow'] = 'Hier klicken (oder Mittelklick), um die Sitebar zu verschieben.';

// Restore topic
$txt['restore_topic'] = 'Thema wiederherstellen';
$txt['quick_mod_restore'] = 'Ausgewählte wiederherstellen';

$txt['autosuggest_delete_item'] = 'Datei löschen';

// Ignoring topics
$txt['ignoring_topic'] = 'Du ignorierst dieses Thema zur Zeit.';
$txt['ignore_topic'] = 'Ignorieren';
$txt['unignore_topic'] = 'Nicht mehr ignorieren';

// Site type. (Not used for now. Probably not ever.)
$txt['b_type'] = array('blog' => 'Blog', 'forum' => 'Forum', 'media' => 'Galerie', 'site' => 'Seite');
$txt['b_item'] = array('blog' => 'Beitrag', 'forum' => 'Thema', 'media' => 'Datei', 'site' => 'Artikel');

// Indicates the date of the first post when merging two posts.
$txt['search_date_posted'] = 'Geschrieben:';

// Spoiler tags. But you're smart, so you don't need me telling.
$txt['spoiler'] = 'Spoiler';
$txt['click_for_spoiler'] = '(zum öffnen und schließen anklicken)';

$txt['readmore'] = '(%1$d weitere Zeichen)';
$txt['thoughts'] = 'Gedanken';
$txt['add_thought'] = '(Klicke hier um einen Gedanken zu posten)';
$txt['no_thoughts'] = 'Keiner macht sich Gedanken :).';
$txt['thome_edit'] = 'Editieren';
$txt['thome_remove'] = 'Löschen';
$txt['thome_reply'] = 'Antworten';
$txt['thome_context'] = 'Im Zusammenhang';
$txt['thome_personal'] = 'Nachwelt?';
$txt['thome_personal_desc'] = 'Diesen Gedanken unter meinen Theman anzeigen als Geschenk an die Nachwelt?';

// Do not use double quotes in the following strings.
$txt['privacy'] = 'Privatsphäre';
$txt['privacy_default'] = 'Standard';
$txt['privacy_public'] = 'Öffentlich';
$txt['privacy_members'] = 'Mitglieder';
$txt['privacy_list'] = 'Kontakte';
$txt['privacy_author'] = 'Nur ich';

// Do not use double quotes in the form_* text strings. (Why would you?)
$txt['form_submit'] = 'Abschicken';
$txt['form_cancel'] = 'Verwerfen';

// Media Gallery
$txt['media_gallery'] = 'Media';
$txt['media_home'] = 'Home';
$txt['media_unseen'] = 'Neu';
$txt['media_profile_sum'] = 'Zusammenfassung';
$txt['media_view_items'] = 'Dateien anschauen';
$txt['media_view_coms'] = 'Kommentare anschauen';
$txt['media_view_votes'] = 'Abstimmungen ansehen';
$txt['media_gotolink'] = 'Details';
$txt['media_zoom'] = 'Zoom';
