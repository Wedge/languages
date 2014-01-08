<?php
// Version: 2.0; ManageSettings

$txt['settings_desc'] = 'Diese Seite erlaubt es dir Grundeinstellungen und Funktionen in diesem Forum zu verwalten. Verwende die Hilfebuttons um Informationen über die jeweilige Einstellung zu bekommen.';

$txt['allow_guestAccess'] = 'Gästen das betrachten des Forums erlauben';
$txt['userLanguage'] = 'Sprachauswahl für Benutzer aktivieren';
$txt['time_offset'] = 'Globale Zeitverschiebung';
$txt['time_offset_subtext'] = '(wird zu den Mitgliederoptionen hinzugefügt.)';
$txt['default_timezone'] = 'Zeitzone des Servers';
$txt['failed_login_threshold'] = 'Schwellenwert für fehlgeschlagene Loginversuche';
$txt['enable_quick_login'] = 'Schnell-Login auf jeder Seite anzeigen';
$txt['age_restrictions'] = 'Mindestalter für die Altersbeschränkung';
$txt['trackStats'] = 'Statistiken aktivieren';
$txt['hitStats'] = 'Seitenaufrufe zählen (setzt aktivierte Statistiken voraus)';
$txt['enableCompressedOutput'] = 'Komprimierte Ausgabe aktivieren';
$txt['enableCompressedData'] = 'Komprimierte Ausgabe von JS/CSS aktivieren';
$txt['obfuscate_filenames'] = 'Dateinamen von JS/CSS verschleiern';
$txt['minify'] = 'JavaScript minimieren durch...';
$txt['minify_none'] = 'Nicht minimieren|Hilfreich für die Fehlersuche.';
$txt['minify_jsmin'] = 'JSMin|Die sicherste Wahl.';
$txt['minify_packer'] = 'Packer|Beste Alternative. Bitte das&lt;br&gt;Hilfepopup beachten, bevor diese Funktion verwendet wird.';
$txt['minify_closure'] = 'Google Closure|Bitte das &lt;br&gt;Hilfepopup beachten, bevor diese Funktion aktiviert wird!';
$txt['jquery_origin'] = 'jQuery Quellpfad';
$txt['jquery_local'] = 'Dieser Server (zusammengeführt mit script.js)';
$txt['jquery_jquery'] = 'jQuery CDN';
$txt['jquery_google'] = 'Google CDN';
$txt['jquery_microsoft'] = 'Microsoft CDN';
$txt['disableTemplateEval'] = 'Analyse von Templates deaktivieren (template eval)';
$txt['db_show_debug'] = 'Informationen für die Fehlersuche anzeigen';
$txt['db_show_debug_who'] = 'Fehlerinformationen nur folgenden Benutzern anzeigen:';
$txt['db_show_debug_who_log'] = 'Fehlerprotokoll nur folgenden Benutzern anzeigen:';
$txt['db_show_debug_admin'] = 'Administratoren';
$txt['db_show_debug_admin_mod'] = 'Administratoren und Moderatoren';
$txt['db_show_debug_regular'] = 'Allen angemeldeten Benutzern';
$txt['db_show_debug_any'] = 'Allen Benutzern, inkl. Gäste';
$txt['db_show_debug_none'] = 'Niemanden';

$txt['databaseSession_enable'] = 'Datenbankgesteuerte Sitzungen verwenden';
$txt['databaseSession_loose'] = 'Browser dürfen Seiten zwischenspeichern';
$txt['databaseSession_lifetime'] = 'Zeit bevor eine ungenutzte Sitzung abläuft (in Sekunden)';
$txt['enableErrorLogging'] = 'Fehlerprotokollierung aktivieren';
$txt['enableErrorPasswordLogging'] = 'Anmeldungen mit falschem Passwort protokollieren';
$txt['enableError404Logging'] = '404 Fehler (Datei nicht gefunden) protokollieren';
$txt['enableErrorQueryLogging'] = 'Datenbankabfrage im Fehlerprotokoll einschließen';
$txt['logPruning'] = 'Protokoll-Bereinigung';
$txt['log_enabled_moderate'] = 'Aktionen von Moderatoren protokollieren';
$txt['log_enabled_moderate_subtext'] = 'Enthält das löschen von Beiträgen, verschieben von Themen, etc.';
$txt['log_enabled_admin'] = 'Aktionen von Administratoren protokollieren';
$txt['log_enabled_admin_subtext'] = 'Enthält Dinge wie das erstellen neuer Foren, etc.';
$txt['log_enabled_profile'] = 'Änderungen an Benutzerprofilen protokollieren';
$txt['log_enabled_profile_subtext'] = 'Enthält die Änderung des angezeigten Namens, etc.';
$txt['pruningOptions'] = 'Bereinigung von Protokolldateien aktivieren';
$txt['pruneZeroDisable'] = '(0 = deaktiviert)';
$txt['pruneErrorLog'] = 'Lösche Einträge die älter sind als';
$txt['pruneModLog'] = 'Lösche Einträge im Moderatorenprotokoll die älter sind als';
$txt['pruneReportLog'] = 'Lösche Einträge im Bericht an den Moderator die älter sind als';
$txt['pruneScheduledTaskLog'] = 'Lösche Einträge im Geplante Aufgaben-Protokoll die älter sind als';
$txt['pruneSpiderHitLog'] = 'Lösche Suchmaschinenstatistiken die älter sind als';
$txt['cookieTime'] = 'Gültigkeitsdauer des Login-Cookies (in Minuten)';
$txt['localCookies'] = 'Lokales speichern der Cookies aktivieren';
$txt['localCookies_subtext'] = '(SSI kann Probleme verursachen wenn diese Option aktiviert ist.)';
$txt['globalCookies'] = 'Subdomain unabhängige Cookies verwenden';
$txt['globalCookies_subtext'] = '(Achtung: Lokale Cookies müssen erst deaktiviert werden!)';
$txt['secureCookies'] = 'Erzwinge sichere Cookies';
$txt['secureCookies_subtext'] = '(Nur möglich bei Verwendung von HTTPS)';
$txt['send_validation_onChange'] = 'Reaktivierung nach Emailadressenänderung erforderlich';
$txt['approveAccountDeletion'] = 'Admin muss das löschen von Benutzerkonten bestätigen';
$txt['autoOptMaxOnline'] = 'Maximale Anzahl von Benutzern, um mit der Optimierung zu beginnen';
$txt['autoOptMaxOnline_subtext'] = '(0 = maximal.)';
$txt['autoFixDatabase'] = 'Defekte Tabellen automatisch reparieren';
$txt['allow_disableAnnounce'] = 'Benutzer dürfen die Benachrichtigungen bei Ankündigungen deaktivieren';
$txt['disallow_sendBody'] = 'Beitragstext nicht in Benachrichtigungen anzeigen';
$txt['max_pm_recipients'] = 'Maximale Anzahl von Empfängern in Privaten Nachrichten';
$txt['max_pm_recipients_subtext'] = '(0 = kein Limit. Administratoren sind von diesem Limit ausgeschlossen)';
$txt['pm_posts_verification'] = 'Beitragszahl, bis zu der Benutzer einen Bestätigungscode beim versenden von Privaten Nachrichten angeben muss';
$txt['pm_posts_verification_subtext'] = '(0 = kein Limit, Administratoren sind von diesem Limit ausgeschlossen)';
$txt['pm_posts_per_hour'] = 'Anzahl der Privaten Nachrichten, die ein Benutzer pro Stunde verschicken darf';
$txt['pm_posts_per_hour_subtext'] = '(0 = kein Limit, Moderatoren sind von diesem Limit ausgeschlossen)';
$txt['home_url'] = 'Startseite';
$txt['home_url_subtext'] = 'Falls dein Forum nur ein Teil deiner Webseite ist, kannst du hier die Adresse eingeben, die beim Klick auf Home geöffnet werden soll.';
$txt['home_link'] = 'Verlinke den Titel zur Startseite';
$txt['home_link_subtext'] = 'Der Titel des Links zur Hauptseite.';
$txt['site_slogan'] = 'Slogan der Seite';
$txt['site_slogan_desc'] = 'Füge einen Slogan hinzu. Leer lassen, wenn nur ein Logo angezeigt werden soll. Die Anzeige kann über CSS angepasst werden';
$txt['header_logo_url'] = 'URL des Logos';
$txt['header_logo_url_desc'] = 'Leer lassen, wenn der Slogan oder das Standardlogo angezeigt werden soll.';
$txt['todayMod'] = 'Verkürzte Datumsanzeige aktivieren';
$txt['today_disabled'] = 'Deaktiviert';
$txt['today_only'] = 'Nur heute';
$txt['yesterday_today'] = 'Heute &amp; Gestern';
$txt['timeLoadPageEnable'] = 'Seitengenerierungszeit auf jeder Seite im Footer anzeigen';
$txt['disableHostnameLookup'] = 'Abfrage von Hostnamen deaktivieren';
$txt['who_enabled'] = 'Anzeige von Wer ist online aktivieren';
$txt['display_who_viewing'] = 'Anzeigen, wer gerade das Forum oder den Beitrag betrachtet';
$txt['who_display_viewing_off'] = 'Nicht anzeigen';
$txt['who_display_viewing_numbers'] = 'Nur Nummern anzeigen';
$txt['who_display_viewing_names'] = 'Benutzernamen anzeigen';
$txt['show_stats_index'] = 'Statistiken auf der Forenhauptseite anzeigen';
$txt['show_latest_member'] = 'Neuestes Mitglied auf der Forenhauptseite anzeigen';
$txt['show_avatars'] = 'Benutzerbild im Beitrag anzeigen';
$txt['show_signatures'] = 'Signaturen im Beitrag anzeigen.';
$txt['show_blurb'] = 'Individuellen Text im Beitrag anzeigen';
$txt['show_gender'] = 'Geschlecht im Beitrag anzeigen';
$txt['show_board_desc'] = 'Forenbeschreibung innerhalb der Foren anzeigen.';
$txt['show_children'] = 'Alle untergeordneten Foren in den Hauptforen anzeigen';

$txt['pm_enabled'] = 'Private Nachrichten zwischen Mitgliedern aktivieren';
$txt['pm_read'] = 'Gruppen, die ihre Privaten Nachrichten lesen dürfen';
$txt['pm_send'] = 'Gruppen, die Private Nachrichten verschicken dürfen';
$txt['save_pm_draft'] = 'Gruppen, die Entwürfe speichern können';
$txt['auto_save_pm_draft'] = 'Gruppen, deren Entwürfe automatisch gespeichert werden';
$txt['pm_draft_other_settings'] = 'Es kann auch eingestellt werden, wie oft Entwürfe gespeichert, oder alte Entwürfe gelöscht werden. Diese Einstellungen können auf der Seite der <a href="<URL>?action=admin;area=postsettings;sa=drafts">Entwurf-Einstellungen</a> geändert werden.';

$txt['likes_enabled'] = 'Gefällt mir System aktivieren (Likes)';
$txt['likes_own_posts'] = 'Mitglieder dürfen ihre eigenen Beiträge liken';

$txt['boardurl'] = 'Forum URL';
$txt['boarddir'] = 'Wedge Stammordner';
$txt['sourcedir'] = 'Sources Ordner';
$txt['cachedir'] = 'Cache Ordner';
$txt['pluginsdir'] = 'Plugins Ordner';
$txt['pluginsurl'] = 'Plugins URL';
$txt['theme_dir'] = 'Das Verzeichnis dieses Themes';
$txt['theme_url'] = 'Die URL dieses Themes';
$txt['images_url'] = 'Die Bild-URL dieses Themes';

$txt['caching_information'] = '<div class="center" style="font-weight: bold; text-decoration: underline">Wichtig! Vor der Aktivierung dieser Funktionen bitte gründlich lesen.</div><br>
	Wedge unterstützt das Caching durch verschiedene Beschleuniger (OPC). Die zur Zeit unterstützen Beschleuniger:<br>
	<ul class="normallist">
		<li>APC</li>
		<li>Memcached</li>
		<li>Zend Platform/Performance Suite (Nicht mehr den Zend Optimizer)</li>
		<li>XCache</li>
	</ul>
	Das Zwischenspeichern von Dateien funktioniert am besten, wenn einer der oberen Beschleuniger zusammen mit PHP kompiliert wurde, oder PECL Memcached vorhanden ist.
	Solltest du keinen Beschleuniger installiert haben, wird Wedge Dateibasiertes Caching verwenden.<br><br>
	Wedge führt das Zwischenspeichern auf verschiedenen Leveln aus. Je höher der Level, desto höher ist auch die CPU-Last.
	Falls Caching auf deinem Server verfügbar ist, wird empfohlen die Cachingstufe auf Level 1 zu belassen.
	<br><br>
	Falls du Memcached verwenden solltest, ist es notwendig die Serverdetails anzugeben. Die Eingaben erfolgen als Kommaseparierte Liste:<br>
	&quot;Server1,Server2,Server3:port,Server4&quot;<br><br>
	Falls kein Port angegeben wurde, wird automatisch der Port 11211 verwendet.
	<br><br>
	%1$s';

$txt['detected_no_caching'] = '<strong class="alert">Wedge konnte keinen kompatiblem Beschleuiniger auf diesem Server finden.</strong>';
$txt['detected_APC'] = '<strong style="color: green">Wedge hat APC auf diesem Server lokalisieren können.</strong>';
$txt['detected_Zend'] = '<strong style="color: green">Wedge hat Zend auf diesem Server lokalisieren können.</strong>';
$txt['detected_Memcached'] = '<strong style="color: green">Wedge hat Memcached auf diesem Server lokalisieren können.</strong>';
$txt['detected_XCache'] = '<strong style="color: green">Wedge hat XCache auf diesem Server lokalisieren können.</strong>';

$txt['cache_enable'] = 'Caching Level';
$txt['cache_off'] = 'Kein Caching';
$txt['cache_level1'] = 'Level 1 Caching (Empfohlen)';
$txt['cache_level2'] = 'Level 2 Caching';
$txt['cache_level3'] = 'Level 3 Caching (Nicht zu empfehlen)';

$txt['cache_type'] = 'Caching Type';
$txt['cache_type_file'] = 'File-based caching';
$txt['cache_type_session'] = 'Session-based caching';
$txt['cache_memcached'] = 'Memcached Einstellungen';

$txt['loadavg_warning'] = '<span class="error">Bitte beachten: Die Einstellungen sollten mit größter Sorgfalt vorgenommen werden. Sollten einige Punkte zu niedrig eingestellt sein, kann dein Forum evtl. <strong>nicht mehr angezeigt werden</strong>! Der aktuelle Serverload liegt bei <strong>%01.2f</strong></span>';
$txt['loadavg_enable'] = 'Load Balancing bei Serverauslastung aktivieren';
$txt['loadavg_auto_opt'] = 'Vorgabewert um die automatische Datenbankoptimierung zu deaktivieren';
$txt['loadavg_search'] = 'Vorgabewert um die Suche zu deaktivieren';
$txt['loadavg_allunread'] = 'Vorgabewert um ungelesene Themen zu deaktivieren';
$txt['loadavg_unreadreplies'] = 'Vorgabewert um ungelesene Beiträge zu deaktivieren';
$txt['loadavg_show_posts'] = 'Vorgabewert um die Anzeige der Beiträge eines Benutzers zu deaktivieren';
$txt['loadavg_forum'] = 'Vorgabewert um das Forum <strong>komplett</strong> zu deaktivieren';
$txt['loadavg_disabled_conf'] = '<span class="error">Load Balancing Funktionen sind Hostseitig deaktiviert.</span>';

$txt['news_settings_submit'] = 'Speichern';
$txt['xmlnews_enable'] = 'Atom-Feeds aktivieren';
$txt['xmlnews_maxlen'] = 'Maximale Länge einer Nachricht:';
$txt['xmlnews_maxlen_subtext'] = '(0 = deaktiviert, schlechte Idee.)';
$txt['xmlnews_sidebar'] = 'Anzeige des Feeds der aktuellsten Beiträge in der Sitebar';
$txt['show_newsfader'] = 'News auf der Forenstartseite anzeigen';
$txt['newsfader_time'] = 'Verzögerung zwischen den Einblendungen der Newsbeiträge';

$txt['reverse_proxy'] = 'Unterstützung für Reverse Proxys aktivieren';
$txt['reverse_proxy_header'] = 'Proxy HTTP Header mit der IP Addresse';
$txt['reverse_proxy_ips'] = 'IP oder CIDR Blockadressen von Proxy Servern';
$txt['reverse_proxy_one_per_line'] = 'Eine Adresse pro Zeile angeben';

$txt['login_type'] = 'Womit kann sich ein Benutzer anmelden?';
$txt['login_username_or_email'] = 'Benutzername und/oder Emailadresse';
$txt['login_username_only'] = 'Nur mit dem Benutzernamen';
$txt['login_email_only'] = 'Nur mit der Emailadresse';

$txt['setting_password_strength'] = 'Benötigte Stärke der Benutzerpasswörter';
$txt['setting_password_strength_low'] = 'Niedrig - 4 Zeichen Minimum';
$txt['setting_password_strength_medium'] = 'Mittel - darf den Benutzernamen nicht enthalten';
$txt['setting_password_strength_high'] = 'Hoch - muss einen Mix aus verschiedenen Zeichen beinhalten';

$txt['antispam_settings'] = 'Anti-Spam Authentifizierung';
$txt['antispam_settings_desc'] = 'Dieser Bereich erlaubt es Überprüfungen festzulegen, um Bots von normalen Usern zu unterscheiden.';
$txt['setting_reg_verification'] = 'Authentifizierung bei der Registrierung wird benötigt';
$txt['posts_require_captcha'] = 'Anzahl von Beiträgen, in der Benutzer einen Verifizierungscode angeben müssen, um Beiträge zu schreiben';
$txt['posts_require_captcha_desc'] = '(0 = kein Limit, Moderatoren sind ausgenommen)';
$txt['search_enable_captcha'] = 'Verifizierung bei allen Suchanfragen erforderlich';
$txt['setting_guests_require_captcha'] = 'Gäste müssen einen Verifizierungscode eingeben, wenn die Beiträge posten wollen';
$txt['setting_guests_require_captcha_desc'] = '(Wird automatisch gesetzt, wenn eine Beitragszahl unten angegeben wurde)';
$txt['guests_report_require_captcha'] = 'Gäste müssen einen Verifizierungscode eingeben, wenn sie Beiträge melden möchten';

$txt['configure_captcha'] = 'CAPTCHA Bilder konfigurieren';
$txt['configure_captcha_desc'] = '<span class="smalltext">CAPTCHA ist ein Schutz vor Bots oder Robots, die nur Müll posten würden.</span>';
$txt['use_captcha_images'] = 'CAPTCHA aktivieren?';
$txt['use_animated_captcha'] = 'Animierte CAPTCHA Bilder verwenden?';
$txt['use_animated_captcha_desc'] = 'Animierte CAPTCHAs sind für Bots sehr schwer zu knacken. Allerdings haben manche User auch ihre Probleme bei dieser Art von Verifizierung.';

$txt['setting_qa_verification_number'] = 'Anzahl der Verifizierungsfragen die beantwortet werden müssen';
$txt['setting_qa_verification_number_desc'] = '(0 = deaktiviert; Fragen können unterhalb eingegeben werden)';
$txt['setup_verification_questions'] = 'Verifizierungs-Fragen';
$txt['setup_verification_questions_desc'] = '<span class="smalltext">Für den Fall, dass User bei ihrer Registrierung Verifiezirungsfragen beantworten sollen, um dich vor Spambots zu schützen, solltest du einige Fragen in die untenstehenden Felder eintragen. Du solltest relativ einfache Fragen auswählen. Antworten unterscheiden nicht zwischen Groß- und Kleinschreibung. Du kannst BBCode zur Formatierung verwenden. Zum löschen einer Frage, einfach nur das Feld leeren.</span>';
$txt['setup_verification_question'] = 'Frage';
$txt['setup_verification_answer'] = 'Antwort';
$txt['setup_verification_add'] = 'Frage hinzufügen';
$txt['setup_verification_add_answer'] = 'Antwort hinzufügen';

$txt['modfilter_norules'] = 'Es sind noch keine Filterregeln erstellt worden.';
$txt['modfilter_addrule'] = 'Füge eine Filterregel hinzu';
$txt['modfilter_editrule'] = 'Filterregel bearbeiten';
$txt['modfilter_rule_posts'] = 'Beim speichern der Beiträge:';
$txt['modfilter_rule_topics'] = 'Wenn ein neues Thema gestartet wird:';
$txt['modfilter_action_prevent'] = 'Die Speicherung des Beitrags verhindern';
$txt['modfilter_action_moderate'] = 'Moderator muss den Beitrag bestätigen (bevor er veröffentlicht wird)';
$txt['modfilter_action_pin'] = 'Das aktuelle Thema fixieren';
$txt['modfilter_action_unpin'] = 'Das aktuelle Thema lösen';
$txt['modfilter_action_lock'] = 'Thema sperren';
$txt['modfilter_action_unlock'] = 'Thema entsperren';
$txt['modfilter_conditions'] = 'Wenn diese Regeln zutreffen:';
$txt['modfilter_cond_boards_in'] = 'Schreibt in das Forum:';
$txt['modfilter_cond_boards_ex'] = 'Schreibt egal wo, außer:';
$txt['modfilter_cond_groups_in'] = 'Mitglieder dieser Gruppen:';
$txt['modfilter_cond_groups_ex'] = 'Kein Mitglied in einer dieser Gruppen:';
$txt['modfilter_cond_permissions_in'] = 'Hat eine der Berechtigungen:';
$txt['modfilter_cond_permissions_ex'] = 'Hat keiner der Berechtigungen:';
$txt['modfilter_cond_userid_in'] = 'Benutzer ist:';
$txt['modfilter_cond_userid_ex'] = 'Benutzer ist nicht:';
$txt['modfilter_cond_subject_begins'] = 'Betreff beginnt mit:';
$txt['modfilter_cond_subject_ends'] = 'Betreff endet mit:';
$txt['modfilter_cond_subject_contains'] = 'Betreff enthält:';
$txt['modfilter_cond_subject_matches'] = 'Betreff stimmt überein mit:';
$txt['modfilter_cond_subject_regex'] = 'Betreff entspricht RegEx:';
$txt['modfilter_cond_body_begins'] = 'Beitrag beginnt mit:';
$txt['modfilter_cond_body_ends'] = 'Beitrag endet mit:';
$txt['modfilter_cond_body_contains'] = 'Beitrag enthält:';
$txt['modfilter_cond_body_matches'] = 'Beitrag stimmt überein mit:';
$txt['modfilter_cond_body_regex'] = 'Beitrag entspricht RegEx:';
$txt['modfilter_case_sensitive'] = '(genaue Übereinstimmung)';
$txt['modfilter_case_insensitive'] = '(Groß- Kleinschreibung spielen keine Rolle)';
$txt['modfilter_cond_postcount'] = 'Beitragszahl:';
$txt['modfilter_cond_warning'] = 'Verstoß Punkte:';
$txt['modfilter_cond_links'] = 'Anzahl von Links in einem Beitrag:';
$txt['modfilter_range_lt'] = 'weniger als';
$txt['modfilter_range_lte'] = 'weniger als, oder ist gleich';
$txt['modfilter_range_eq'] = 'gleich wie';
$txt['modfilter_range_gt'] = 'größer als';
$txt['modfilter_range_gte'] = 'größer als, oder ist gleich';
$txt['modfilter_cond_unknownrule'] = 'Unbekannter Regeltyp:';
$txt['modfilter_approve_title'] = 'Offene Posten bestätigen';
$txt['modfilter_approve_desc'] = 'Falls es noch offene Posten (Beiträge, etc.) gibt und die Moderationsfilter ausgeschaltet wurden, solltest du sicherstellen, dass alle Beiträge genehmigt wurden, um sie nicht zu verlieren.';
$txt['modfilter_all_approved'] = 'Alle zu moderierenden Artikel wurden bestätigt.';
$txt['modfilter_applies_legend'] = 'Wenn diese Regel angewendet werden soll';
$txt['modfilter_applies_desc'] = 'Manchmal soll eine Filterregel bei neuen Beiträgen greifen, manchmal aber auch nur bei neuen Themen.';
$txt['modfilter_applies_rule'] = 'Wann soll diese Regel angewendet werden?';
$txt['modfilter_applies_posts'] = 'Wenn neue Beiträge geschrieben werden';
$txt['modfilter_applies_topics'] = 'Wenn ein neues Thema gestartet wird';
$txt['modfilter_action_legend'] = 'Was macht diese Regel';
$txt['modfilter_action_desc'] = 'Jeder Regel ist eine Aktion zugeordnet, die angewendet wird, wenn diese Regel zutrifft.';
$txt['modfilter_action_selectone'] = '--- bitte auswählen ---';
$txt['modfilter_action_rule'] = 'Was soll passieren, wenn die Bedingungen zutreffen?';
$txt['modfilter_actionlist_prevent'] = 'Das schreiben des Beitrags verhindern';
$txt['modfilter_actionlist_moderate'] = 'Beitrag muss durch einen Moderator überprüft werden';
$txt['modfilter_actionlist_pin'] = 'Fixiere das Thema an die Spitze des Forums';
$txt['modfilter_actionlist_unpin'] = 'Löse das Thema von der Spitze des Forums';
$txt['modfilter_actionlist_lock'] = 'Sperre das Thema für weitere Beiträge';
$txt['modfilter_actionlist_unlock'] = 'Entsperre das Thema um weitere Beiträge zuzulassen';
$txt['modfilter_conds_legend'] = 'Bedingungen für diese Regel';
$txt['modfilter_conds_desc'] = 'Jede Filterregel benötigt Bedingungen, damit die Regel auch angewendet werden kann. Hier kannst due die Bedingungen für diese Regel hinzufügen - Alle Bedingungen müssen zutreffen, damit diese Regel aktiv wird.';
$txt['modfilter_conds_item'] = 'Punkt';
$txt['modfilter_conds_criteria'] = 'Bedingung';
$txt['modfilter_conds_no_conditions'] = 'Es sind keine Bedingungen vergeben. Füge eine hinzu!';
$txt['modfilter_conds_new'] = 'Art der Bedingung:';
$txt['modfilter_conds_add'] = 'Neue Bedingung hinzufügen';
$txt['modfilter_conds_select'] = '--- wähle die zutreffende Bedingung ---';
$txt['modfilter_condtype_boards'] = 'Trifft ein oder mehrere Foren';
$txt['modfilter_condtype_groups'] = 'Trifft eine oder mehrere Mitgliedergruppen';
$txt['modfilter_condtype_userid'] = 'Trifft einen oder mehrere Benutzer';
$txt['modfilter_condtype_postcount'] = 'Trifft auf Beitragszahl zu';
$txt['modfilter_condtype_warning'] = 'Trifft auf Verstöße zu';
$txt['modfilter_condtype_permission'] = 'Trifft auf Berechtigungen zu';
$txt['modfilter_condtype_subject'] = 'Hängt vom Betreff ab';
$txt['modfilter_condtype_body'] = 'Hängt vom Inhalt des Beitrags ab';
$txt['modfilter_condtype_links'] = 'Hängt davon ab, wie viele Links im Beitrag verwendet wurden';
$txt['modfilter_applies_all'] = 'Trifft auf die ausgewählten Punkte zu:';
$txt['modfilter_applies_allexcept'] = 'Trifft auf <strong>alle außer</strong> den ausgewählten Punkten zu:';
$txt['modfilter_condition_done'] = 'Diese Bedingung hinzufügen';
$txt['modfilter_postcount_is'] = 'Die Beitragszahl des Users ist:';
$txt['modfilter_warning_is'] = 'Der User hat:';
$txt['modfilter_warning_is_post'] = 'Verstoßpunkte';
$txt['modfilter_links_is'] = 'Die Anzahl der links im Beitrag beträgt:';
$txt['modfilter_the_post_subject'] = 'Der Betreff des Beitrags';
$txt['modfilter_the_post_body'] = 'Der Beitrag selbst';
$txt['modfilter_regex_begins'] = 'beginnt mit';
$txt['modfilter_regex_contains'] = 'enthält';
$txt['modfilter_regex_ends'] = 'endet mit';
$txt['modfilter_regex_matches'] = 'trifft';
$txt['modfilter_regex_regex'] = 'trifft RegEx';
$txt['modfilter_be_case_sensitive'] = 'Groß- und Kleinschreibung beachten';
$txt['modfilter_save_this_rule'] = 'Regel abspeichern';
$txt['modfilter_remove_this_rule'] = 'Regel entfernen';
$txt['modfilter_error_saving'] = 'Diese Regel konnte nicht gespeichert werden. Bitte versuche es noch einmal.';
$txt['modfilter_rule_not_found'] = 'Die ausgewählte Regel existiert leider nicht.';
$txt['modfilter_msg'] = 'und zeigt folgende Nachricht';
$txt['modfilter_msg_popup_title'] = 'Informiere den User...';
$txt['modfilter_msg_no_lang'] = 'Es wurden keine eigenen Nachrichten für die Regel verfasst.';
$txt['modfilter_msg_popup'] = 'Wenn diese Regel aktiviert ist, wird der user folgende Nachricht sehen. (Wenn möglich versucht das Forum die Sprache des Mitglieds zu verwenden.)';
$txt['modfilter_lang_msg'] = 'Auch wenn dem User bekannt ist, dass sein Beitrag noch bearbeitet werden muss, ist nicht immer klar warum dies der Fall ist. Hier kannst du eine Nachricht für die User eingeben, warum diese Aktion durchgeführt wird. Du kannst HTML verwenden, um einen Link zu Regeln, etc. einzufügen';

$txt['allow_editDisplayName'] = 'Mitgliedern erlauben den angezeigten Namen zu ändern';
$txt['allow_hideOnline'] = 'Mitgliedern erlauben ihren Onlinestatus zu verstecken';
$txt['titlesEnable'] = 'Persönliche Titel aktivieren';
$txt['enable_buddylist'] = 'Kontakt- &amp; Ignorierliste aktivieren';

$txt['signature_settings'] = 'Signatur-Einstellungen';
$txt['signature_settings_desc'] = 'Verwende diese Einstellungen um festzulegen, welche Möglichkeiten die Mitglieder in ihrer Signatur haben.';
$txt['signature_settings_warning'] = 'Diese Einstellungen greifen nicht bei existierenden Signaturen. Klicke <a href="%1$s?action=admin;area=memberoptions;sa=sig;apply;%2$s">hier</a> um diese Regel auf alle existierenden Signaturen anzuwenden.';
$txt['signature_enable'] = 'Signaturen aktivieren';
$txt['signature_minposts'] = 'Minimum an Beiträgen, bevor die Signatur sichtbar wird';
$txt['signature_zero_no_max'] = '(0 = kein Maximum.)';
$txt['signature_max_length'] = 'Maximale Zeichenlänge';
$txt['signature_max_lines'] = 'Maximale Zeilenanzahl';
$txt['signature_max_images'] = 'Maximale Bilderanzahl';
$txt['signature_max_images_subtext'] = '(0 = unbegrenzt - Smileys sind ausgeschlossen)';
$txt['signature_allow_smileys'] = 'Erlaube Smileys in Signaturen';
$txt['signature_max_smileys'] = 'Maximale Anzahl von Smileys';
$txt['signature_max_image_width'] = 'Maximale Breite von Signaturbildern (px)';
$txt['signature_max_image_height'] = 'Maximale Höhe von Signaturbildern (px)';
$txt['signature_max_font_size'] = 'Maximal erlaubte Schriftgröße in Signaturen';
$txt['signature_max_font_size_subtext'] = '(0 = maximal, in px)';
$txt['signature_bbc'] = 'BBC-Tags aktivieren';

$txt['custom_profile_title'] = 'Angepasste Profilfelder';
$txt['custom_profile_desc'] = 'Hier kannst du eigene Profilfelder erstellen, die den Bedürfnissen deines Forums entsprechen.';
$txt['custom_profile_active'] = 'Aktiv';
$txt['custom_profile_inactive'] = 'Inaktiv';
$txt['custom_profile_make_new'] = 'Neues Feld';
$txt['custom_profile_none'] = 'Du hast noch keine eigenen Profilfelder erstellt!';
$txt['custom_profile_icon'] = 'Symbol';

$txt['custom_profile_type_text'] = 'Text';
$txt['custom_profile_type_textarea'] = 'Langer Text';
$txt['custom_profile_type_select'] = 'Auswahl-Box';
$txt['custom_profile_type_radio'] = 'Radio Buttons';
$txt['custom_profile_type_check'] = 'Checkbox';

$txt['custom_add_title'] = 'Profilfeld hinzufügen';
$txt['custom_edit_title'] = 'Profilfeld bearbeiten';
$txt['custom_edit_general'] = 'Anzeige Einstellungen';
$txt['custom_edit_input'] = 'Eingabewerte';
$txt['custom_edit_advanced'] = 'Erweiterte Einstellungen';
$txt['custom_edit_name'] = 'Name';
$txt['custom_edit_desc'] = 'Beschreibung';
$txt['custom_edit_profile'] = 'Profil Bereich';
$txt['custom_edit_profile_desc'] = 'Bereich des zu bearbeiteten Profils.';
$txt['custom_edit_profile_none'] = 'Keinen';
$txt['custom_edit_registration'] = 'Bei der Registrierung anzeigen';
$txt['custom_edit_registration_disable'] = 'Nein';
$txt['custom_edit_registration_allow'] = 'Ja';
$txt['custom_edit_registration_require'] = 'Ja und benötigt Eingabe';
$txt['custom_edit_mlist'] = 'Auf der Mitgliederliste anzeigen';
$txt['custom_edit_display'] = 'In der Themenansicht anzeigen';
$txt['custom_edit_picktype'] = 'Feldtyp';

$txt['whos_online_desc'] = 'Auf dieser Seite kann verwaltet werden, wie User andere User online sehen oder nicht.';
$txt['lastActive'] = 'Vorhaltezeit User Online ';
$txt['who_view'] = 'Mitgliedergruppen, denen es gestattet ist zu sehen wer online ist';
$txt['member_options_desc'] = 'Von dieser Seite aus können verschiedene Optionen festgelegt werden, die Mitglieder auch selber verändern können.';
$txt['member_options_default'] = 'Standard:';
$txt['member_options_change'] = 'Ändern';
$txt['no_change'] = '%s (aktuell)';
$txt['leave_alone'] = 'Behalte die Auswahl der Mitglieder bei';
$txt['member_options_guest'] = 'Für Gäste/Neue Mitglieder:';
$txt['member_options_members'] = 'Für existierende Mitglieder:';
$txt['member_options_override'] = 'Setze auf "%s" für alle';

// Strings for the templates
$txt['your_icq'] = 'Deine ICQ-Nummer.';
$txt['your_aim'] = 'Dein AOL Messenger Nickname.';
$txt['your_yim'] = 'Dein Yahoo Messenger Nickname.';
// In this string, please use +'s for spaces.
$txt['aim_default_message'] = 'Hallo!+bist+du+da?';
$txt['your_twitter'] = 'Dies ist dein Benutzername auf Twitter, ohne das @ am Anfang';
$txt['your_facebook'] = 'Dies ist deine Facebook Accountnumner, oder Name';
$txt['your_skype'] = 'Dies ist dein Skype Benutzername';
$txt['your_steam'] = 'Deine ID aus der Steam Community';
$txt['custom_edit_tplgrp_social'] = 'Social Networking';
$txt['custom_edit_tplgrp_im'] = 'Instant Messaging';
$txt['custom_edit_tplgrp_gaming'] = 'Gaming';
$txt['custom_edit_templates'] = 'Vorlagen-Felder';
$txt['custom_edit_templates_desc'] = 'Du kannst Vorlagen verwenden, um bestimmte Felder für Soziale Netzwerke zu definieren.';
$txt['custom_edit_a_template'] = 'Zu verwendende Vorlage';
$txt['custom_edit_templates_select'] = '-- Wähle eine Vorlage --';

$txt['custom_edit_max_length'] = 'Maximale Länge';
$txt['custom_edit_max_length_desc'] = '(0 = kein Limit)';
$txt['custom_edit_dimension'] = 'Abmessungen';
$txt['custom_edit_dimension_row'] = 'Reihen';
$txt['custom_edit_dimension_col'] = 'Zeilen';
$txt['custom_edit_bbc'] = 'BBC erlauben';
$txt['custom_edit_options'] = 'Optionen';
$txt['custom_edit_options_desc'] = 'Zum Entfernen Optionen leer lassen. Radio Button wählt die Standardaktion aus.';
$txt['custom_edit_options_more'] = 'Mehr';
$txt['custom_edit_default'] = 'Standardwert';
$txt['custom_edit_active'] = 'Aktiv';
$txt['custom_edit_active_desc'] = 'Wenn dieses Feld nicht ausgewählt wird, wird es nicht angezeigt.';
$txt['custom_edit_privacy'] = 'Privatsphäre';
$txt['custom_edit_privacy_desc'] = 'Wer kann das Feld sehen und bearbeiten.';
$txt['custom_edit_see_owner'] = 'Der Eigentümer (Betrifft die folgenden Gruppen)';
$txt['custom_edit_can_search'] = 'Kann gesucht werden';
$txt['custom_edit_can_search_desc'] = 'Kann dieses Feld von der Mitgliederliste aus gesucht werden.';
$txt['custom_edit_mask'] = 'Eingabemaske';
$txt['custom_edit_mask_desc'] = 'Für Textfelder kann eine Eingabemaske ausgewählt werden, um die Daten zu validieren.';
$txt['custom_edit_mask_email'] = 'Gültige Emailadresse';
$txt['custom_edit_mask_number'] = 'Nummerisch';
$txt['custom_edit_mask_nohtml'] = 'Kein HTML';
$txt['custom_edit_mask_regex'] = 'RegEx (Fortgeschritten)';
$txt['custom_edit_enclose'] = 'In Text eingebettet anzeigen (optional)';
$txt['custom_edit_enclose_desc'] = 'Wir empfehlen <strong>dringend</strong> eine Eingabemaske zu verwenden, um die Eingaben des Users zu validieren.';
$txt['custom_edit_can_see'] = 'Kann sehen';
$txt['custom_edit_can_edit'] = 'Kann bearbeiten';

$txt['custom_edit_placement'] = 'Platzierung wählen';
$txt['custom_edit_placement_standard'] = 'Standard (mit Title)';
$txt['custom_edit_placement_withicons'] = 'Mit Symbolen';
$txt['custom_edit_placement_abovesignature'] = 'Oberhalb der Signatur';
$txt['custom_profile_placement'] = 'Platzierung: %1$s';

$txt['custom_edit_delete_sure'] = 'Möchtest du wirklich dieses Feld löschen? - alle dazugehörigen Daten gehen verloren!';

$txt['standard_profile_title'] = 'Standard Profilfelder';
$txt['standard_profile_field'] = 'Feld';

$txt['languages_area_edit_desc'] = 'Dieser Bereich ermöglicht das bearbeiten der Sprachdateien. Für Übersetzungen ist dieser Bereich nicht geeignet. Falls du Wedge in eine andere Sprache übersetzen möchtest, trete einfach  mit dem Wedge Team in Kontakt.';
$txt['languages_lang_name'] = 'Name der Sprache (Zum ändern der Sprache anklicken)';
$txt['languages_locale'] = 'Lokal';
$txt['languages_available'] = 'Verfügbar';
$txt['languages_default'] = 'Standard';
$txt['languages_users'] = 'Mitglieder';
$txt['edit_languages'] = 'Sprachen editieren';
$txt['edit_languages_specific'] = 'Sprachen editieren - %1$s';
$txt['language_edit_master_value'] = '<em>Grundwert:</em> %1$s';
$txt['language_edit_master_value_array'] = '<em>Grundeinträge:</em>';
$txt['language_edit_current_value'] = '<em>Aktueller Eintrag:</em> %1$s';
$txt['language_edit_current_value_array'] = '<em>Aktuelle EInträge:</em>';
$txt['language_edit_new_value'] = '<em>Neuer Eintrag:</em>';
$txt['language_edit_new_value_array'] = '<em>Neue Einträge:</em>';
$txt['language_edit_add_entry'] = 'Füge einen Eintrag hinzu';
$txt['language_delete_value'] = 'Diesen Punkt löschen';
$txt['language_revert_value'] = 'Reset auf Standardwerte';
$txt['language_clear_cache'] = 'Sprachen-Cache leeren';
$txt['language_clear_cache_desc'] = 'Die Daten verwenden spezielle Dateien und die Datenbank. So ist es möglich die Sprachen zu editieren, ohne Änderung der Dateien vorzunehmen. Generell sollte der Spracheneditor aus dem Adminbereich verwendet werden, um Sprachen zu editieren. Manchmal ist es jedoch notwendig den Cache manuell zu leeren.';
$txt['language_clear_cache_btn'] = 'Cache leeren';
$txt['language_cache_cleared'] = 'Der Sprachen-Cache wurde geleert.';
$txt['language_no_entries'] = 'Diese Sprachdatei hat keine Einträge. Sie dient lediglich als Platzhalter. Du suchst bestimmt die <a href="%1$s">übergeordnete Sprachdatei</a>.';
$txt['language_search_results'] = 'Suchergebnisse - %1$s';
$txt['language_no_result_results'] = 'Leider wurden keine Ergebnisse gefunden.';
$txt['language_search_default'] = 'Treffer innerhalb der Standard-Dateien';
$txt['language_search_plugins'] = 'Treffer innerhalb von Plugins';
$txt['language_search_themes'] = 'Treffer innerhalb von Themes';

$txt['language_edit_main'] = 'Hauptdateien';
$txt['language_edit_admin'] = 'Admin-Panel';
$txt['language_edit_default'] = 'Standard Sprach-Dateien';
$txt['language_edit_other'] = 'Andere Sprach-Dateien';
$txt['language_edit_search'] = 'Suche nach Sprach-Dateien';
$txt['language_edit_search_plugins'] = 'Plugins einbeziehen?';
$txt['language_edit_search_themes'] = 'Themes einbeziehen?';
$txt['language_edit_search_keys'] = 'Suche nach Schlüsselwörtern';
$txt['language_edit_search_values'] = 'Suche nach Einträgen';
$txt['language_edit_search_both'] = 'Beides suchen';
$txt['language_edit_no_plugins'] = 'Plugins';
$txt['language_edit_no_plugins_desc'] = 'Es gibt keine editierbaren Sprachdateien für Plugins.';
$txt['language_edit_no_themes'] = 'Themes';
$txt['language_edit_no_themes_desc'] = 'Es gibt keine editierbaren Sprachdateien für Themes.';
$txt['language_edit_plugins_title'] = 'Plugin: %1$s';
$txt['language_edit_themes_title'] = 'Theme: %1$s';
$txt['language_edit_elsewhere'] = 'Konfiguriert irgendwo anders';
$txt['language_edit_email_templates'] = 'Email Vorlagen';
$txt['language_edit_reg_agreement'] = 'Nutzungsbedingungen';

$txt['edit_language_entries'] = 'Spracheinträge bearbeiten';
$txt['languages_dictionary'] = 'Verzeichnis';
$txt['languages_orientation'] = 'Orientierung';
$txt['languages_orients_ltr'] = 'Links nach rechts';
$txt['languages_orients_rtl'] = 'Rechts nach links';

$txt['lang_file_desc_index'] = 'Allgemeine Zeichenketten';
$txt['lang_file_desc_Modlog'] = 'Einträge im Moderatorenprotokoll';
