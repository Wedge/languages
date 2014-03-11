<?php

$txt['http_error'] = 'HTTP Fehler';

// Titles for the errors
$txt['behav_400'] = 'Eine ungültige Anfrage wurde gestellt!';
$txt['behav_403'] = 'Dir fehlt die Berechtigung diesen Server zu betreten.';
$txt['behav_417'] = 'Erwarteter Wert fehlgeschlagen.';

$txt['behavior_admin'] = 'Sicherheits-Fehler';
$txt['behavior_header'] = 'Es tut uns leid, aber wir können die Anfrage aus Sicherheitsgründen nicht verarbeiten. Zum Schutz vor schädlicher Software und Spamaktivitäten wurde der Zugriff verwehrt, da einige Kriterien dafür sprechen, dass die Aktivitäten von einer bekannte Spamadresse, oder einem Malware-Verteiler kommen. Zum Glück ist dieses Problem leicht zu beheben.<br><br>Die Information wird bereitgestellt von <a href="http://bad-behavior.ioerror.us/">Bad Behavior</a>.';

$txt['behavior_false_ua'] = 'Bei jedem Seitenaufruf wird vom Browser eine Identifizierung (User-Agent) mitgesendet. Der User-Agent in in dieser Anfrage war falsch. Wenn du die Einstellungen des Browsers auf Normalwerte zurücksetzt, sollte die Seite wieder erreichbar sein.';
$txt['behavior_misconfigured_proxy'] = 'Dieses Problem tritt oft bei Proxy-Servern, oder Systemen auf, deren Einstellungen nicht korrekt sind. Du musst diese Software deinstallieren, oder deinen Serveradministrator um Hilfe bitten.';
$txt['behavior_misconfigured_privacy'] = 'Dieses Problem kann auftreten, wenn in persönlichen Firewalls die EInstellungen der Privatsphäre nicht richtig konfiguriert wurden. Um diese Seite zu betreten, müssen entweder die Probleme beseitigt, oder die Firewall deaktiviert werden. (Beispiel: wenn du Norton Internet Security verwendest, hat er einen Stealth Mode. Dieser verhindert die korrekte Verbindung.)';
$txt['behavior_malware'] = 'Dieses Problem kann durch Viren und Spyware auf deinem Computer verursacht worden sein. Stelle sicher, dass du wirklich ein Antivirusprogramm besitzt und dieses auch aktuell ist. Bitte führe eine komplette Systemprüfung durch.<br><br>Als erste Maßnahme kann, <a href="http://www.microsoft.com/security_essentials/">Microsoft Security Essentials</a> sehr hilfreich sein, wenn du keine solcher Programme installiert haben solltest.';
$txt['behavior_opera_bug'] = 'Einige ältere Browser der Opera-Reihe zeigen dieses Verhalten. Bitte zu einer aktuellen Version updaten.';
$txt['behavior_chrome_bug'] = 'Einige Versionen von Chrome haben ein Designfehler.Eine Möglichkeit wäre, den Browserverlauf und den Cache zu leeren und die Seite dann zu aktualisieren.';

$txt['behavior_footer'] = 'Sollten die obigen Vorschläge nicht greifen, kannst du den Webmaster unter: {email_address} erreichen. Bitte gebe folgenden Nummer mit an: {incident}.';
// Begin the rules as defined in Security.php
// Each rule has a _desc (the text to use, complete with <br> as appropriate) and _log (the text to display in the admin log)

$txt['behav_blacklist_desc'] = 'Du hast keine Berechtigung dieses Server zu betreten.';
$txt['behav_blacklist_log'] = 'Blacklisted User-Agent übermittelt';

$txt['behav_not_cloudflare_desc'] = 'Du hast keine Berechtigung dieses Server zu betreten';
$txt['behav_not_cloudflare_log'] = 'User-Agent identifizierte sich als Cloudflare. Kann nicht wirklich sein.';

$txt['behav_expect_header_desc'] = 'Die Anfrage enthält einen Ausnahmefehler - Bitte Anfrage wiederholen. Dies kommt meistens von installierter Software, die bekannt dafür ist, Malware zu verbreiten.';
$txt['behav_expect_header_log'] = 'Anfrage enthält \'Expect\' Header; Anfrage wurde neu gesendet.';

$txt['behav_no_ua_in_post_desc'] = 'Dein Browser hat eine ungültige Anfrage gesendet.';
$txt['behav_no_ua_in_post_log'] = 'User-Agent hat sich nicht selber identifiziert. Wird benötigt, um Beiträge schreiben zu können.';

$txt['behav_content_range_desc'] = 'Dein Browser hat eine ungültige Anfrage für diese Seite gestellt.';
$txt['behav_content_range_log'] = 'Anfrage enthält einen \'Bereich\' oder \'Content-Bereich\'. Sollte nicht enthalten sein';

$txt['behav_empty_refer_desc'] = 'Dein Browser hat eine ungültige Anfrage für diese Seite gestellt.';
$txt['behav_empty_refer_log'] = 'Anfrage nach \'Referer\', aber Referer war leer.';

$txt['behav_invalid_refer_desc'] = 'Dein Browser hat eine ungültige Anfrage für diese Seite gestellt.';
$txt['behav_invalid_refer_log'] = 'Anfrage nach \'Referer\', aber Referer erscheint beschädigt.';

$txt['behav_alive_close_desc'] = 'Dein Browser hat eine ungültige Anfrage für diese Seite gestellt.';
$txt['behav_alive_close_log'] = 'Anfrage nach \'Verbindung\', aber enthielt leider ungültige Eingaben.';

$txt['behav_wrong_keep_alive_desc'] = 'Dein Browser hat eine ungültige Anfrage für diese Seite gestellt.';
$txt['behav_wrong_keep_alive_log'] = 'Anfrage nach \'Keep-Alive\', aber Form beschädigt.';

$txt['behav_rogue_chars_desc'] = 'Dir wurde der Zutritt zu diesem Server verwehrt. Es wurde eine verdächtige Anfrage festgestellt.';
$txt['behav_rogue_chars_log'] = 'Schadcode wurde in der Anfrage gefunden.';

$txt['behav_invalid_via_desc'] = 'Du scheinst einen Proxy-Server zu verwenden, der auf diesem System nicht gestattet ist.';
$txt['behav_invalid_via_log'] = 'Anfrage beinhaltete ungültigen \'via\' Header.';

$txt['behav_banned_via_proxy_desc'] = 'Du scheinst einen Proxy-Server zu verwenden, der auf diesem System nicht gestattet ist.';
$txt['behav_banned_via_proxy_log'] = 'Anfrage von gesperrten Proxy-Server.';

$txt['behav_banned_xaa_proxy_desc'] = 'Du scheinst einen Proxy-Server zu verwenden, der auf diesem System nicht gestattet ist';
$txt['behav_banned_xaa_proxy_log'] = 'Ungültige Header \'X-Aaaaaaaaaa\' oder \'X-Aaaaaaaaaaaa\' gefunden.';

$txt['behav_bot_rfc2965_desc'] = 'Die empfangenen Cookies sind ungültig. Bitte aktualisere deine Software';
$txt['behav_bot_rfc2965_log'] = 'Bot nicht im Einklang mit RFC 2965.';

$txt['behav_proxy_connection_desc'] = 'Dein Browser hat eine ungültige Anfrage gestellt.';
$txt['behav_proxy_connection_log'] = 'Anfrage enthält verbotenen Header \'Proxy-Verbindung\'.';

$txt['behav_pragma_desc'] = 'Dein Browser hat eine ungültige Anfrage gestellt..';
$txt['behav_pragma_log'] = 'Header \'Pragma\' ohne \'Cache-Control\' verboten für HTTP/1.1 Anfragen.';

$txt['behav_te_error_desc'] = 'Dein Browser hat eine ungültige Anfrage gestellt.';
$txt['behav_te_error_log'] = 'Header \'TE\' vorhanden, aber TE nicht spezifiziert im \'Connection\' Header.';

$txt['behav_invalid_range_desc'] = 'Das Programm mit dem du diese Seite betreten möchtest, ist auf diesem Server nicht erlaubt. Bitte verwende ein anderes Programm. Idealerweise ein Standardbrowser wie: Firefox, Internet Explorer, Opera, Safari oder Chrome.';
$txt['behav_invalid_range_log'] = 'ANfrage enthält einen verbotenen Header \'Bereich\'.';

$txt['behav_no_accept_desc'] = 'Dein Browser hat eine ungültige Anfrage gestellt.';
$txt['behav_no_accept_log'] = 'Anfrage enthält keinen \'Accept\' Header.';

$txt['behav_invalid_win_desc'] = 'Anfrage wurde verwehrt. Die Details deines Browsers sind ungültig.';
$txt['behav_invalid_win_log'] = 'User-Agent gibt sich als IE aus, aber mit gefälschtem Header.';

$txt['behav_te_not_msie_desc'] = 'Anfrage war ungültig. Falls du einen Browser, wie z.B. Opera verwendest, sollte er sich auch als Opera zu erkennen geben und nicht unter einer anderen Identität.';
$txt['behav_te_not_msie_log'] = 'User-Agent gibt sich als IE aus, aber Verbindung: IE aktiv. Wird nicht von IE verwendet.';

$txt['behav_not_msnbot_desc'] = 'Ungültige Anfrage. Du gibst an eine große Suchmaschine zu sein, aber dieses konnte nicht bestätigt werden.';
$txt['behav_not_msnbot_log'] = 'User-Agent gibt sich als msnbot aus, kann es aber nicht beweisen.';

$txt['behav_not_yahoobot_desc'] = 'Ungültige Anfrage. Du gibst an eine große Suchmaschine zu sein, aber dieses konnte nicht bestätigt werden.';
$txt['behav_not_yahoobot_log'] = 'User-Agent gibt sich als Yahoo aus, kann es aber nicht beweisen.';

$txt['behav_not_googlebot_desc'] = 'Ungültige Anfrage. Du gibst an eine große Suchmaschine zu sein, aber dieses konnte nicht bestätigt werden.';
$txt['behav_not_googlebot_log'] = 'User-Agent gibt sich als Google aus, kann es aber nicht beweisen.';

$txt['behav_not_baidu_desc'] = 'Ungültige Anfrage. Du gibst an eine große Suchmaschine zu sein, aber dieses konnte nicht bestätigt werden.';
$txt['behav_not_baidu_log'] = 'User-Agent gibt sich als Baidu aus, kann es aber nicht beweisen.';

$txt['behav_offsite_form_desc'] = 'Daten wurden von außerhalb dieser Seite übermittelt. Diese Aktion ist nicht erlaubt.';
$txt['behav_offsite_form_log'] = 'Inhalt erscheint von außerhalb der Seite zu stammen.';
