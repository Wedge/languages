<?php
// Version: 2.0; Help

$txt['close_window'] = 'Fenster schließen';

$txt['cannot_change_voter_visibility'] = '
	Mitglieder können abhängig von ihren Berechtigungen die abgegebenen Stimmen und die Sichtbarkeit der Umfrage verändern.
	Wenn die Sichtbarkeit in einer Umfrage eingestellt ist, kann sie nicht mehr verändert werden.';

$txt['admins_see_votes'] = '
	Administratoren können immer sehen, wer für was abgestimmt hat. Da sie natürlich auch Zugang zur Datenbank haben, können sie natürlich herausfiltern, wer für was abgestimmt hat.';

$txt['help_manage_boards'] = '
	In diesem Menü kannst du Foren entweder erstellen, anordnen oder löschen. Ebenfalls die Kategorien, denen sie zugeordnet sind.
	Ein Beispiel: du besitzt eine große Seite die Musik, Sport und Autos zum Thema hat.
	Diese Themen sind die Hauptkategorien, die du für dein Forum erstellen möchtest.
	Für jede Hauptkategorie können Unterkategorien und Foren erstellt werden.
	Es handelt sich um eine simple Hierarchie:<br>
	<ul class="list">
		<li>
			<strong>Sport</strong>
			&nbsp;- Eine "Kategorie"
		</li>
		<ul class="list">
			<li>
				<strong>Fußball</strong>
				&nbsp;- Ein Forum in der Kategorie "Sport"
			</li>
			<ul class="list">
				<li>
					<strong>Spielergebnisse</strong>
					&nbsp;- Ein Unterforum von "Fußball"
				</li>
			</ul>
			<li><strong>Handball</strong>
			&nbsp;- Ein Forum in der Kategorie "Sport"</li>
		</ul>
	</ul>
	Kategorien ermöglichen die die Unterteilung verschiedener Bereiche in Gruppen.
	Die in dieser Kategorie enthaltenen Foren beinhalten die aktuellen Themen,
	in denen Mitglieder Beiträge erstellen können.
	Ein Nutzer, der an Spielergebnissen interessiert ist, wird Beiträge
	unter: Sport->Fußball->Spielergebnisse einstellen.
	Zusammengefasst kann man sagen, dass ein Forum das Hauptthema einer Kategorie ist.';

$txt['help_need_deny_perm'] = '
	Den Zugang zu den Foren festzulegen ist eigentlich simpel.
	Benutzer, die Zugang haben sollen, bekommen die Berechtigung (evtl. durch Gruppenmitgliedschaft)
	und User die die Foren nicht sehen sollen, erhalten diese Berechtigung nicht.<br><br>
	Es gibt Situationen, in denen einer bestimmten Gruppe das Betreten des Forums verweigert werden soll,
	aber einige Mitglieder in dieser Gruppe gehören zusätzlich anderen gruppen an, die dieses Forum aber sehen können.
	Falls du z.B. eine Gruppe für Trolle erstellen möchtest, um die darin enthaltenen Mitglieder leichter zu kontrollieren,
	kannst du einfach die Gruppenberechtigung auf "verweigern" setzen.
	Unabhängig von den Gruppen, denen diese User angehören, haben sie keinen Zutritt mehr zu den verweigerten Foren.
	Mit Ausnahme von Administratoren.';

$txt['help_edit_news'] = '
	<ul class="list">
		<li>
	<strong>News</strong><br>
	Dieser Bereich erlaubt dir den Inhalt der News auf der Hauptseite des Forums festzulegen.
	Es können beliebige Elemente hinzugefügt werden. (z.B. "Wir haben ein neues Forum").
	Jeder Newsbeitrag wird in zufälliger Reihenfolge angezeigt.</li>
	<li><strong>Newsletter</strong><br/>
	Dieser Bereich erlaubt es dir Newsletter per Email oder Private Nachrichten an Benutzer zu versenden.
	Zunächst müssen die Gruppen als Empfänger ausgewählt werden.
	Es können zusätzliche Mailadressen angegeben werden, die die Nachricht erhalten sollen.
	Um eine Nachricht zu verschicken wird einfach die Nachricht in das entsprechende Feld eingetragen,
	ausgewählt wer diese erhalten soll und festgelegt, ob die Nachricht als Email oder Private Nachricht verschickt werden soll.</li>
		<li><strong>Einstellungen</strong><br />
	Dieser Bereich enthält alle wichtigen Einstellungen, die mit News und Newslettern zu tun haben.
	Zusätzlich kann ausgewählt werden, ob News für dieses Forum verfügbar sind oder nicht.</li>
	</ul>';

$txt['help_view_members'] = '
	<ul class="list">
		<li>
			<strong>Alle Mitglieder anzeigen</strong><br>
			Hier kannst du alle Mitglieder sehen, welche im Forum registriert sind. Durch den Klick auf 
			den Namen eines Mitglieds, gelangst du auf das Profil des Users. 
			Als Administrator hast du die Möglichkeit, alle
			Angaben innerhalb des Profils zu ändern bzw. das Benutzerkonto zu löschen.
			<br><br>
		</li>
		<li>
			<strong>Auf Bestätigung wartende Mitglieder</strong><br>
			Dieser Bereich wird nur angezeigt, wenn die Bestätigung aller neuen Registrierungen durch einen Administrator aktiviert ist.
			Jeder Benutzer der sich registriert, wird erst zu einem aktiven Mitglied, wenn ein Administrator das Benutzerkonto bestätigt hat.
			Der Bereich listet alle Mitglieder inkl. Email und IP-Adresse auf, die auf Bestätigung durch einen Administrator warten. 
			Du kannst wählen, ob das Mitglied bestätigt oder abgelehnt werden soll, indem das kleine Kästchen neben dem Benutzernamen
			ausgewählt wird und im Drop-Down Menü die entsprechende Aktion gewählt wird. Wenn du ein Mitglied ablehnen solltest,
			kann es wahlweise mit oder ohne Benachrichtigung gelöscht werden.<br><br>
		</li>
		<li>
			<strong>Auf Aktivierung wartend</strong><br>
			Dieser Bereich wird nur angezeigt, wenn die Aktivierung der Benutzerkonten eingeschaltet wurde.
			Hier können alle Benutzerkonten verwaltet werden, die ihren Account noch nicht aktiviert haben.
			Es können Mitglieder genehmigt, abgelehnt und auch gelöscht werden. Entweder mit oder ohne Angabe von Gründen.<br><br>
		</li>
	</ul>';

$txt['help_ban_gmail_style'] = 'Google Mail, oder GMail, bieten ihren Mitgliedern einige Bequemlichkeiten, ihre Mailkonten zu verwalten.
	Dies kann das sperren (Bannen) kompliziert machen:
	<ul class="list">
		<li>Punkte in Benutzernamen werden ignoriert - joe.bloggs@gmail.com ist exakt identisch mit j.o.e.b.l.o.g.g.s@gmail.com und ebenfalls joebloggs@gmail.com.</li>
		<li>Benutzer können ein "+" Label zu ihren Mailadressen hinzufügen, um Mails zu filtern. Zum Beispiel:  joebloggs+work@gmail.com 
			wird weiterhin nach joebloggs@gmail.com ausgeliefert und das +work Label kann dazu verwendet werden, eingehende Mails zu sortieren.</li>
	</ul>
	Wenn eine Sperre auf eine "GMail style domain" angewendet wird, können diese Faktoren ignoriert werden. Es reicht nicht aus, die Sperre einfach auf googlemail.com anzuwenden,
		da Google Apps GMail mit all den möglichen + Labels für alle verschiedenen Domains verwendet werden kann.';

$txt['help_no_hostname_ban'] = 'Die Suche nach Hostnamen wurde deaktiviert. Damit werden auch alle Sperren auf Hostnamen deaktiviert.';

$txt['help_ban_email_types'] = 'Emails können auf unterschiedliche Art und Weise gesperrt werden.
	<ul class="list">
		<li>Die Angabe von einer oder mehrerer Adressen - kann verwendet werden, um bestimmte Emailadressen zu sperren. Zum Beispiel: troublemaker@example. Auch die Verwendung von Wildcards sind möglich. Wenn die zu sperrende Emailadresse
		zum Beispiel: troublemaker1@example.com und troublemaker2@example.com enthält, können durch troublemaker*@example.com alle Emailadresse dieses Typs gesperrt werden.</li>
		<li>Eine komplette Domain - Sollte ein Störenfried einen eigenen Domainnamen verwenden, ist die Sperre relativ einfach anzuwenden. Sollte die Domain z.B. example.com sein, wird unabhängig vom vorangestellten @ alles von dieser Domain blockiert.
		Dazu muss einfach nur der Domainname (example.com) eingetragen werden.</li>
		<li>Einen kompletten Domainbereich - Viele Spampostings stammen von unterschiedlichen Emailadressen mit .ru Endung, aber besitzen keine bestimmte Domain. Diese Einstellung sperrt alles, was von.ru kommt.
		Dazu einfach .ru, .de, oder .com angeben. Aber Vorsicht: es können viele ehrliche User von dieser Sperre betroffen sein, sollte man z.B. .de als Sperre eingeben!</li>
	</ul>';

$txt['help_ban_membername_style'] = 'Bei der Sperre, oder Bestrafung von Mitgliedernamen, kann die Sperre nur auf den Benutzernamen, oder den angezeigten Namen angewendet werden. Da Benutzer ihren angezeigten Namen verändern können,
ist es ratsam die Sperre auf beide Namen zu setzen.';

$txt['help_featuresettings'] = '
	Es gibt viele Funktionen in diesem Bereich, die nach deinen Vorlieben angepasst werden können.';

$txt['help_time_format'] = '
	Du kannst frei entscheiden, welches Zeitformat verwendet und wie die Darstellung sein soll. Es gibt eine Vielzahl verwirrender Buchstaben, aber eigentlich ist es ganz einfach.
	Die Bedingungen richten sich nach der PHP\'s <span class="bbc_tt">strftime</span> Funktion und sind unterhalb aufgelistet (Weitere Informationen auf: <a href="http://www.php.net/manual/function.strftime.php" target="_blank" class="new_win">php.net</a>).<br>
	<br>
	Das Format akzeptiert folgende Zeichen:
	<div style="padding: 5px 0 5px 30px">
		<span class="bbc_tt">%a</span> - Name des Wochentags (abgekürzt)<br>
		<span class="bbc_tt">%A</span> - Name des Wochentags (ausgeschrieben)<br>
		<span class="bbc_tt">%b</span> - Name des Monats (abgekürzt)<br>
		<span class="bbc_tt">%B</span> - Name des Monats (ausgeschrieben)<br>
		<span class="bbc_tt">%d</span> - Tag des Monats (01 bis 31)<br>
		<span class="bbc_tt" style="color: #999">%D</span> - Verkürztes Datum, identisch mit %m/%d/%y<br>
		<span class="bbc_tt">%e</span> - Tag des Monats (1 bis 31)<br>
		<span class="bbc_tt">%@</span> - Tag des Monats mit Anhang (1. bis 31.)<br>
		<span class="bbc_tt">%H</span> - Stundenanzeige im 24 Stunden-Format (00 bis 23)<br>
		<span class="bbc_tt">%I</span> - Stundenanzeige im 12 Stunden-Format (01 bis 12)<br>
		<span class="bbc_tt">%m</span> - Monat als Zahl (01 bis 12)<br>
		<span class="bbc_tt">%M</span> - Minute als Zahl (00 bis 59)<br>
		<span class="bbc_tt">%p</span> - fügt "AM" oder "PM" je nach Zeit hinzu<br>
		<span class="bbc_tt" style="color: #999">%R</span> - Stunde und Minuten, identisch mit %H:%M<br>
		<span class="bbc_tt">%S</span> - Sekunden als Zahl (00 bis 59)<br>
		<span class="bbc_tt" style="color: #999">%T</span> - Stunden, Minuten und Sekunden, identisch mit %H:%M:%S<br>
		<span class="bbc_tt">%y</span> - Jahresanzeige mit 2 Ziffern (00 bis 99)<br>
		<span class="bbc_tt">%Y</span> - Jahresanzeige mit 4 Ziffern<br>
		<span class="bbc_tt">%%</span> - ein Befehl \'%\' <br>
	</div>
	<em>* Grau hinterlegte Zeichen funktionieren nicht auf Windows-basierten Servern.</em>';

$txt['help_live_news'] = '
	Diese Box zeigt die neuesten ANkündigungen von <a href="http://wedge.org/" target="_blank" class="new_win">wedge.org</a> an.
	Du solltest hin und wieder mal nachschauen, ob Updates oder wichtige Ankündigungen verfügbar sind.';

$txt['help_registrations'] = '
	Hier findest du alle Funktionen, die zur Verwaltung neuer Mitglieder benötigt werden. Es gibt verschiedene Bereiche,
	die je nach Einstellungen des Forums sichtbar sind::<br><br>
	<ul class="list">
		<li>
			<strong>Neues Mitglied registrieren</strong><br>
			Über diesen Bereich kannst du neue Mitglieder registrieren. Diese Funktion ist nützlich bei deaktivierter
			Registrierung, oder wenn der Administrator ein Testkonto erstellen möchte. Wenn die Aktivierung
			der Benutzerkonten eingeschaltet ist, erhalten die Mitglieder eine Email mit dem Aktivierungslink,
			welcher angeklickt werden muss, bevor sie sich anmelden können. Alternativ kann dem neuen Mitglied
			auch eine Email mit dem Passwort an die angegebene Adresse geschickt werden.<br><br>
		</li>
		<li>
			<strong>Nutzungsbedingungen bearbeiten</strong><br>
			Diese Funktion erlaubt das Bearbeiten der Nutzungsbedingungen, welche bei einer Registrierung angezeigt und bestätigt werden müssen.
			In Sie können zu dem Originaltext neue Bedingungen hinzufügen oder löschen.<br><br>
		</li>
		<li>
			<strong>Einstellungen</strong><br>
			Dieser Bereich ist nur sichtbar, wenn du die Berechtigung zum Administrieren des Forums hast. Hier können
			unter anderem Einstellungen zur Registrierungsmethode und natürlich auch der Altersbegrenzung gemacht werden.
		</li>
	</ul>';
$txt['help_login_type'] = 'Dieser Bereich ermöglicht es dir zu bestimmen, ob Mitglieder sich mit dem Benutzernamen, der Emailadresse oder beidem anmelden können.';

$txt['help_modlog'] = '
	In diesem Protokoll werden alla Aktivitäten von Moderatoren festgehalten. Das Team von Moderatoren hat so stets den Überblick über alle moderierten Beiträge und Aktionen.
	Um einen Missbrauch auszuschließen, können diese Protokolle erst nach 24 Stunden gelöscht werden.';
$txt['help_adminlog'] = '
	In diesem Protokoll werden alle administrativ durchgeführten Aktionen festgehalten. um einen Missbrauch auszuschließen, können diese Einträge erst nach 24 Stunden gelöscht werden.';
$txt['help_error_log'] = '
	Das Fehlerprotokoll listet alle Fehler auf, die von Benutzern im Forum hervorgerufen wurden. Um die aktuellsten Fehler
	zuerst anzuzeigen, einfach auf den schwarzen Pfeil neben dem Datum klicken. Die Fehlermeldungen können nach der Art des Fehlers gefiltert werden,
	wenn auf die Grafik neben der entsprechenden Angabe geklickt wird (z.B. filtern nach Benutzernamen).
	Wenn ein Filter aktiv ist, werden nur die übereinstimmenden Fehler angezeigt.';
$txt['help_smileys'] = '
	Hier können Smileys oder Smiley-Sets hinzugefügt, gelöscht und verwaltet werden. Jeder Smiley in einem Set ist auch in anderen sichtbar, da es sonst bei Verwendung verschiedener Sets zu Verwirrungen kommen könnte.<br /><br />
	Es können hier ebenfalls die Beitragssymbole verändert werden, wenn diese in den Einstellungen aktiviert wurden.<br><br>';

$txt['help_serversettings'] = '
	in diesem Bereich können die Zentral- und Zusatzkonfigurationen des Forums verwaltet werden. Dieser Bereich enthält Einstellungen zur Datenbank,
	die Verzeichnispfade, wie auch andere wichtige Einstellungen zu Email-Servern und dem Cache. Bitte diese Einstellungen nur mit äußerster Vorsicht vornehmen,
	da sonst das Forum unter Umständen nicht mehr funktionieren kann.';
$txt['help_manage_files'] = '
	<ul class="list">
		<li>
			<strong>Dateien durchsuchen</strong><br>
			Dateien und Bildanhänge durchsuchen, die auf diesem Server gespeichert wurden.<br><br>
		</li><li>
			<strong>Einstellungen der Dateianhänge</strong><br>
			Berechtigungen der erlaubten Dateitypen festlegen und die Verzeichnispfade für Dateianhänge ändern.<br><br>
		</li><li>
			<strong>Benutzerbild Einstellungen</strong><br>
			Festlegen wo die Benutzerbilder gespeichert werden und die Verkleinerung von Benutzerbildern verwalten.<br><br>
		</li><li>
			<strong>Wartung von Dateien</strong><br>
			Alle Fehler im Verzeichnis der Dateianhänge finden und reparieren. Ebenfalls können in diesem Bereich ausgewählte Dateianhänge gelöscht werden.<br><br>
		</li>
	</ul>';

$txt['help_topicSummaryPosts'] = 'Anzahl der Beiträge, die beim Antwort-Bildschirm in der Zusammenfassung angezeigt werden.';
$txt['help_enableAllMessages'] = 'Stelle in diesem Bereich die <em>maximale</em> Anzahl an Beiträgen ein, bei denen der "Alle anzeigen" Link angezeigt werden soll. Es ist klug, diese Wert auf weniger als die "Anzahl der Beiträge pro Seite im Thema" einzustellen, da sonst diese Funktion nie zum tragen kommt. Wird der Wert zu hoch angesetzt, kann das Forum sehr langsam werden.';
$txt['help_pruneSavedDrafts'] = 'Auf dem Server gespeicherte Entwürfe unterliegen keinen Beschränkungen. Der Administrator hat jedoch die Möglichkeit, diesen Berich zu nutzen, um bestimmte Entwürfe aus der Datenbank zu löschen, um Speicherplatz freizugeben. Sollte eine Zahl eingetragen sein, werden alle Entwürfe, die älter als diese Zahl an Tagen ist gelöscht. 0 bedeutet, dass die Entwürfe ohne Limit gespeichert bleiben.';
$txt['help_allow_guestAccess'] = 'Sollte diese Option deaktiviert sein, können Gäste nur noch rudimentäre Funktionen des Forums verwenden (Einloggen, Registrieren, Passworterinnerung etc.). Die Option hat nicht die gleichen Auswirkungen wie Gästen den Zugriff auf die Foren zu verbieten.';
$txt['help_userLanguage'] = 'Ermöglicht dem Benutzer die Auswahl einer individuellen Sprache im Forum. Wirkt sich nicht auf die Standardeinstellung aus.';
$txt['help_availableLanguage'] = 'Diese Funktion legt fest, ob Benutzer ihre eigene Sprache wählern können. Sprachen können zwar installiert sein, aber stehen nicht unbedingt zur Wahl für die Benutzer.';
$txt['help_trackStats'] = 'Statistiken aktivieren:<br />Erlaubt den Benutzern verschiedene Statistiken zu sehen, z.B. die neuesten Einträge, die meistbesuchten Themen, die neuesten Themen und vieles mehr.<hr />
		Seitenaufrufe zählen:<br />Fügt den Statistiken eine weitere Spalte mit den Seitenaufrufen des Forums hinzu.';
$txt['help_titlesEnable'] = 'Diese Option erlaubt den Mitgliedern, sich einen frei wählbaren Titel zu geben, welcher unter dem Namen angezeigt wird.<br />
<i>Beispiel:</i><br />Nao<br />Herr der Augenringe';
$txt['help_todayMod'] = 'Zeigt "Heute" und/oder "Gestern" statt des Datums an.<br /><br />
		<strong>Beispiele:</strong><br /><br />
		<dt>
		<dt>deakiviert</dt>
			<dd>7. November 2013 um 17:59:18 Uhr</dd>
		<dt>nur Heute</dt>
			<dd>Heute um 12:59:18 Uhr</dd>
		<dt>Heute und Gestern<dt>
			<dd>Gestern um 09:36:55 Uhr</dd>
		</dt>';
$txt['help_disableCustomPerPage'] = 'Diese Option verhindert, dass Benutzer die Anzahl von Themen oder Beiträgen pro Seite selbst festlegen können.';
$txt['help_enablePreviousNext'] = 'Zeigt einen Link zum nächsten bzw. vorherigen Betrag an.';
$txt['help_ignoreMoveVsNew'] = 'Standardmäßig wird dem Benutzer beim verschieben von Themen eine Auswahl an Foren angeboten, in der er diese Beiträge verschieben kann, mit Ausnahme von Ankündigungsforen, etc.
								Durch das deaktivieren dieser Funktion hat er nun die Möglichkeit, die Beiträge in ALLE Foren zu verschieben, die er mit seinen Benutzerrechten sehen kann.';
$txt['help_webmaster_email'] = 'Legt die Emailadresse des Administrators fest, an welche Benachrichtigungen über Datenbankfehler, etc. gesendet werden. Daher sollte diese Adresse auch wirklich gültig sein.';
$txt['help_mail_from'] = 'Erlaubt die Einstellung der Absenderadresse der verschickten Emails (Benachrichtigungen, Newsletter, etc.)
		<br><br>Wenn dieser Bereich nicht ausgefüllt wird, verwendet Wedge die Mailadresse des Administrators.
		Dies bedeutet, dass der Administrator auch alle Meldungen über fehlgeschlagene Sendeversuche erhält. Es wird dringend empfohlen eine "No Reply" Adresse anzugeben.';
$txt['help_enableCompressedOutput'] = 'Aktiviert die komprimierte Datenübertragung, um Bandbreite zu sparen. Erfordert ein installiertes zlib auf dem Server.';
$txt['help_enableCompressedData'] = 'Diese Funktion aktiviert die komprimierte Übertragung von CSS und JS Dateien im gzip-Format nach dem cachen. Diese Funktion erfordert ein installiertes zlib auf dem Server.
		Es wird ebenfalls eine korrekt konfigurierte .htaccess Datei erwartet.';
$txt['help_obfuscate_filenames'] = 'Diese Funktion verschleiert die Dateinamen von JavaScript und CSS Dateien.
		Diese Funktion soll es Scriptdieben erschweren, die Dateien zu klauen.';
$txt['help_minify'] = 'Diese Funktion minimiert JavaScript Dateien "on the fly". Wenn diese Funktion aktiviert ist, werden alle Leerzeichen und Kommentare aus den Dateien entfernt.
		Diese Funktion kann die Ladezeiten deiner Seite erheblich verbessern. Nur im Cache befindliche Dateien werden minimiert. Alle Originaldateien bleiben unberührt<br><br>
		Den Packer zur Minimierung zu verwenden ist die effizienteste Methode. Mit einer Ausnahme: sollten deine Scripte nicht ordentlich programmiert sein, werden diese abstürzen (kann mit <a href="http://www.jslint.com/" target="_blank">JSLint</a> überprüft werden.
		Falls  gzip nicht verfügbar sein sollte, wird Packer versuchen die Dateien bestmöglich zu komprimieren.
		Allerdings kommt es dabei zu einer kleinen Verzögerung, da die Dateien erst entpackt werden müssen. Du kannst auch JSMin verwenden, welches einen ordentlichen Kompromiss darstellt.<br><br>
		Eine Anmerkung zu Google Closure: Statt eine Datei mittels PHP zu minimieren, sendet dieses Script die Dateien an die Server von Google und
		liefert eine minimierte Version von ihnen aus. Closure ist etwas effizienter als Packer, aber der Prozess benötigt wesentlich länger (einige Sekunden pro Datei).
		Deshalb würden wir die Verwendung von Packer empfehlen. Zusätzlich gibt es eine Beschränkung, wie viele Dateien pro Stunde verkleinert werden dürfen.
		Wedge bemerkt diese Fehler und liefert ein automatisches Fallback auf Packer, sollte Google Closure nicht in der Lage sein die Dateien zu verkleinern.<br><br>
		Deaktiviere diese Einstellungen, wenn du aktuell an deinen Dateien arbeitest.';
$txt['help_jquery_origin'] = 'Diese Einstellung ermöglicht die Auswahl der Server, über die jQuery ausgeliefert werden soll. Wenn du Bandbreite sparen möchtest,
		verwende ein CDN (Content Delivery Network) von Google oder Microsoft. Du kannst es natürlich auch direkt von jquery.com laden lassen.
		<br><br>Sollte Bandbreite keine Rolle spielen, kann die Datei von deinem eigenen Server ausgeliefert werden, wo es zusätzlich noch mit anderen Dateien komprimiert wird.
		Dies stellt sicher, dass jQuery immer verfügbar ist, sofern deine Webseite online ist. Verwende unbedingt ein CDN, wenn dein Server nicht auf die zlib Bibliothek zurückgreifen kann.
		Andernfalls wirst du eine sehr große Datei ausliefern...';
$txt['help_disableTemplateEval'] = 'Standardmäßig werden Vorlagen (Templates) verarbeitet statt nur inkludiert. Dieses hilft dabei, Debug Informationen anzuzeigen, wenn das Template einen Fehler enthält.<br/>
<br/>
Bei großen Foren kann dieser Inkludierungs-Prozess wesentlich mehr Zeit in Anspruch nehmen. Deshalb sollten erfahrene Benutzer diese Funktion eventuell deaktivieren.';
$txt['help_db_show_debug'] = 'Aktiviert das Debugging für Abfragen. Sehr nützlich, wenn man Fehler finden möchte. Die Ausgabe erscheint unterhalb der Seite, wenn diese FUnktion aktiviert ist<br><br>
		Die folgenden Punkte werden angezeigt:
		<ul>
			<li>Die Anzahl der geladenen Vorlagen (Templates)
			<li>Blöcke die ausgeführt wurden (alle Funktionen, die für die Darstellung der Seite erforderlich sind)
			<li>Die Anzahl der geladenen Sprachdateien
			<li>Die Anzahl der geladenen CSS-Dateien (beinhaltet evtl. keine CSS-Dateien von Plugins))
			<li>Die Anzahl und die Namen der inkludierten Dateien
			<li>Cache-Treffer (welche und wie viel Zeit damit vergeudet wurde)
			<li>Anzahl der Abfragen (enthält alle Details. Diese FUnktion ist auf die Administratoren beschränkt)
		</ul>';
$txt['help_db_show_debug_who'] = 'Diese Debug-Information ist sehr nützlich, wenn es kleine Fehler im Forum gibt. Diese Funktion ist aber für die meisten Mitglieder nicht relevant.
		Diese Funktion ermöglicht es einzustellen, wer diese Meldungen zu sehen bekommt, wenn diese Funktion aktiviert ist.';
$txt['help_db_show_debug_who_log'] = 'Teil dieser Debug-Informationen ist die Ausgabe von jeder Datenbankabfrage, die dieses Forum im Betrieb ausübt. 
		Aus Sicherheitsgründen wird sie nicht direkt in die Hauptausgabe eingegliedert. Zusätzlich wird sichergestellt, dass diese Ausgabe nur sichtbar ist, wenn es nötig sein sollte.
		Es gibt Situationen, in denen die Anzeige von diesen Informationen auch für nicht Administratoren wichtig sein kann. Diese Funktion ermöglicht es.';
$txt['help_databaseSession_enable'] = 'Verwendet die Datenbank zum Speichern von Sitzungen und ist das Beste für eine ausgeglichene Last des Servers. Die Option hilft bei den sogenannten Timeouts und macht das Forum unter Umständen schneller.';
$txt['help_databaseSession_loose'] = 'Reduziert die Bandbreite des Forums, jedoch wird bei einem Klick auf den Zurück-Button im Browser die vorherige Seite nicht neu geladen. Neue Beiträge, Symbole und andere Werte werden daher nicht aktualisiert.';
$txt['help_databaseSession_lifetime'] = 'Anzahl der Sekunden für die Länge einer Datenbanksitzung. Sollte eine Sitzung eine Zeit lang nicht genutzt werden, wird sie als "verloren gegangen" bezeichnet. Empfohlen wird mindestens der Wert 2400.';
$txt['help_enableErrorLogging'] = 'Erfasst alle Fehlermeldungen im Forum (z.B. fehlerhafte Anmeldung etc.).';
$txt['help_enableErrorQueryLogging'] = 'Diese Option fügt die komplette Datenbankabfrage in das Fehlerprotokoll ein. Dazu muss das protokollieren von Fehlern aktiviert sein.<br /><br /><strong>Achtung: Damit geht die Möglichkeit verloren, das Fehlerprotokoll nach Fehlermeldungen zu filtern.';
$txt['help_allow_disableAnnounce'] = 'Diese Option erlaubt den Benutzern, die Benachrichtigung bei neuen Ankündigungen zu deaktivieren.';
$txt['help_disallow_sendBody'] = 'Verhindert das Versenden von Text mit Antworten oder neuen Beiträgen in den Benachrichtigungs-Emails.<br /><br />Oftmals antworten Mitglieder fälschlicherweise auf diese Emails, so dass der Webmaster eine Flut an E-Mails erhält.';
$txt['help_timeLoadPageEnable'] = 'Zeigt am unteren Bildschirmrand die Zeit in Sekunden an, die Wedge für das Erstellen der Seite benötigt hat.';
$txt['help_removeNestedQuotes'] = 'Dies wird alle verschachtelten Zitate eines Beitrags entfernen, wenn man einen solchen Beitrag über den entsprechenden Link zitiert.';
$txt['help_max_image_width'] = 'Erlaubt die Angabe einer maximalen Breite von Bildern. Bilder die kleiner sind, werden dadurch nicht beeinträchtigt.';
$txt['help_mail_type'] = 'Diese Option erlaubt das Wählen zwischen den Standardeinstellungen von PHP und den SMTP-Einstellungen. PHP unterstützt keine Authentifizierung mit SMTP (wie viele Hosts es heutzutage erfordern), so dass nur SMTP verwendet werden kann. SMTP kann in der Nutzung langsamer sein und manche Server nehmen keine Benutzernamen und Kennwörter an.<br /><br />
		Um den PHP-Standard zu verwenden, sind keine SMTP-Benutzerdaten erforderlich.';
$txt['help_attachment_image_paranoid'] = 'Diese Funktion führt Prüfungen für Bilder nach sehr strengen Vorgaben durch. Warnung! Die Prüfungen können manchmal auch gültige Bilder zurückweisen. Es wird dringend empfohlen, diese Funktion nur im Zusammenhang mit der Neucodierung von Dateien zu verwenden. Dabei versucht Wedge das beschädigte Bild neu zu erstellen. Sollte der Versuch fehlschlagen, wird das Bild zurückgewiesen.';
$txt['help_attachment_image_reencode'] = 'Diese Funktion versucht hochgeladene Bilddateien neu zu codieren. Das Neucodieren von Bilddateien ist eine sehr effinziente Sicherheitsmaßnahme. Beachte: alle animierten Bilder, die neu codiert wurden sind dann statisch!';
$txt['help_avatar_paranoid'] = 'Diese Funktion führt Prüfungen für Benutzerbilder nach sehr strengen Vorgaben durch. Warnung! Die Prüfungen können manchmal auch gültige Bilder zurückweisen. Es wird dringend empfohlen, diese Funktion nur im Zusammenhang mit der Neucodierung von Dateien zu verwenden. Dabei versucht Wedge das beschädigte Bild neu zu erstellen. Sollte der Versuch fehlschlagen, wird das Bild zurückgewiesen.';
$txt['help_avatar_reencode'] = 'Diese Funktion versucht hochgeladene Benutzerbilder neu zu codieren. Das Neucodieren von Bilddateien ist eine sehr effinziente Sicherheitsmaßnahme. Beachte: alle animierten Bilder, die neu codiert wurden sind dann statisch!';

$txt['help_localCookies'] = 'Wedge verwendet Cookies um die Anmeldeinformationen auf dem Client-PC zu speichern.
	Cookies können global (meineseite.de) oder lokal (meineseite.de/pfad/zum/forum) gespeichert werden.<br />
	Aktiviere diese Option, wenn du automatisch abgemeldet wirst.<hr />
	Global gespeicherte Cookies sind weniger sicher, wenn sie auf auf einem Shared-Server verwendet werden.<hr />
	Lokal gespeicherte Cookies funktionieren nicht außerhalb vom Forum-Verzeichnis. Wenn das Forum unter www.meineseite.de/forum liegt, können Dateien wie www.meineseite.de/index.php nicht auf die Cookie-Informationen zugreifen.
	Wenn die Datei SSI.php benutzt wird, werden globale Cookies zwingend (!) benötigt.';
$txt['help_allow_non_mod_edit'] = 'Normalerweise können Benutzer ihre Beiträge editieren. Zumindest für eine gewisse, festgelegte Zeit. Es gibt aber Umstände, bei denen diese Funktion nicht erwünscht ist (z.B. ein Moderator hat den Beitrag wegen illegaler Inhalte bearbeitet). Standardeinstellung ist, dass Benutzer keine Beiträge mehr bearbeiten dürfen, die von einem Moderator editiert wurden. Diese Einstellung würde diese Sperre widerrufen. Diese Funktion sollte wenn möglich nicht aktiviert werden';
$txt['help_enableBBC'] = 'Erlaubt den Mitgliedern die Benutzung von Bulletin Board Code (BBC) im Forum, welcher den Text formatiert, Bilder einfügt und vieles mehr.';
$txt['help_time_offset'] = 'Nicht immer ist die Serverzeit gleich der Zeit, die vom Forum genutzt werden soll. Hier können Sie die Zeitdifferenz in Stunden eintragen (positive/negative Zahl), welche den Unterschied zwischen dem Server und der Zeit im Forum macht.';
$txt['help_default_timezone'] = 'Die Server Zeitzone teilt PHP mit, in welcher Zeitzone der Server steht. Weiterführende Informationen findest du auf: <a href="http://www.php.net/manual/en/timezones.php" target="_blank">PHP.net</a>.';
$txt['help_spamWaitTime'] = 'Ein Zeitintervall, den ein Benutzer zwischen zwei Beiträgen einhalten muss. Dies kann Spammern das Leben etwas schwerer machen.';

$txt['help_enablePostHTML'] = 'Erlaubt die Verwendung von gängigen HTML Befehlen:
	<ul style="margin-bottom: 0;">
		<li>&lt;b&gt;, &lt;u&gt;, &lt;i&gt;, &lt;s&gt;, &lt;em&gt;, &lt;ins&gt;, &lt;del&gt;</li>
		<li>&lt;a href=""&gt;</li>
		<li>&lt;img src="" alt="" /&gt;</li>
		<li>&lt;br /&gt;, &lt;hr /&gt;</li>
		<li>&lt;pre&gt;, &lt;blockquote&gt;</li>
	</ul>';

$txt['help_themes'] = 'Hier kann das Standard- bzw. Gästelayout ausgewählt werden, Verzeichnisse der Themes ändern, Themes editieren, sowie individuelle Theme-Optionen eingestellt werden.';
$txt['help_theme_install'] = 'Hier können neue Themes installiert werden, indem ein schon vorhandenes Verzeichnis benutzt, ein Zip-Paket hochladen, oder das vorhandene Theme kopiert wird.<br /><br />Beachte: das Verzeichnis bzw. das Zip-Paket muss die Datei <tt>theme_info.xml</tt> enthalten.';
$txt['help_enableEmbeddedFlash'] = 'Diese Option erlaubt den Benutzern, Flash-Filme in ihren Beiträgen zu nutzen. Das kann ein Sicherheitsrisiko darstellen! DIE BENUTZUNG ERFOLGT AUF EIGENE GEFAHR!';
// !!! Add more information about how to use them here.
$txt['help_xmlnews_enable'] = 'Diese Option erlaubt den Benutzern, zu den <a href="%s?action=.xml;sa=news">Letzten Neuigkeiten</a> zu verlinken. Es wird empfohlen, die Größe der Neuesten Beiträge/News zu begrenzen, da es zu falschen Darstellungen in manchen Programmen wie Trillian kommen kann.';
$txt['help_globalCookies'] = 'Ermöglicht die Nutzung von Subdomain unabhängigen Cookies. Ein Beispiel:<br />
	Deine Seite besitzt die Domain http://www.wedge.org,<br />
	Dein Forum besitzt die Domain http://forum.wedge.org,<br />
	Diese Einstellung ermöglicht es, auf die Forum-Cookies der Seite zuzugreifen. <b>Aktiviere diese Einstellung nicht, wenn es noch andere Subdomains geben sollte, die nicht unter deiner Kontrolle stehen!</b>';
$txt['help_secureCookies'] = 'Wenn diese Option aktiviert ist, wird erzwungen, dass die Cookies, die für die Benutzer des Forums erstellt werden als sicher markiert werden.
Aktiviere diese Option nur, wenn HTTPS auf der gesamten Seite verwendet wird, da die Cookies sonst beschädigt und damit unbrauchbar werden!';
$txt['help_securityDisable_why'] = 'Das ist dein aktuelles Passwort (identisch mit dem, welches auch für die Anmeldung (Login) verwendet wird).<br /><br />Warum du das Paswort erneut eingeben solltest? Damit du dir darüber im klaren bist, dass <b>DU</b> Änderungen im Administrator-Center machen kannst und dafür alleine verantwortlich bist.';
$txt['help_emailmembers'] = 'In dieser Nachricht können folgende Variablen verwendet werden:<br />
	{\\$board_url} - URL zum Forum.<br />
	{\\$current_time} - Die aktuelle Zeit.<br />
	{\\$member.email} - Die aktuelle Emailadresse des Mitglieds.<br />
	{\\$member.link} - Den aktuellen Link zum betreffenden Mitglied.<br />
	{\\$member.id} - Die aktuelle Benutzer-ID.<br />
	{\\$member.name} - Den aktuellen Benutzernamen (für Private Mitteilungen).<br />
	{\\$latest_member.link} - Den Link zum neuesten Mitglied.<br />
	{\\$latest_member.id} - Die ID des neuesten Mitglieds.<br />
	{\\$latest_member.name} - Der Name des neuesten Mitglieds.';

$txt['help_failed_login_threshold'] = 'Anzahl der erfolglosen Login-Versuche, bevor der Benutzer zur "Passwort vergessen?" Seite weitergeleitet wird.';
$txt['help_enable_quick_login'] = 'Aktiviert eine kompakte Anmeldebox in der Sidebar für Gäste.';
$txt['help_oldTopicDays'] = 'Ist diese Option aktiviert, wird dem Benutzer eine Warnung ausgegeben, wenn er in einem Thema schreiben möchte, in welchem seit einer bestimmten Zeit (in Tagen) keiner mehr geantwortet hat. Den Wert auf 0 setzen, um die Funktion zu deaktivieren.';
$txt['help_edit_wait_time'] = 'Anzahl in Sekunden, bevor das Datum der letzten Bearbeitung von Beiträgen gespeichert wird.';
$txt['help_edit_disable_time'] = 'Anzahl in Minuten, nach denen ein Benutzer seine eigenen Beiträge noch bearbeiten kann. Den Wert auf 0 setzen, um die Funktion zu deaktivieren.<br /><br /><i>Beachte: diese Option hat keinen Einfluss auf die Benutzer, welche Beiträge anderer Mitglieder bearbeiten dürfen!</i>';
$txt['help_posts_require_captcha'] = 'Diese Option zwingt den Benutzer, einen Code von einem Bild einzugeben, bevor der Beitrag veröffentlicht wird. Dies betrifft nur die Benutzer, welche unter die angegebene Mindestanzahl von Beiträgen fallen und soll das Spammen durch automatische Skripte verhindern.';
$txt['help_disable_wysiwyg'] = 'Diese Option unterbindet die Verwendung des WYSIWYG-Editors ("What You See Is What You Get" - Was du siehst ist was du bekommen wirst) auf der Antwortseite.';
$txt['help_lastActive'] = 'Gibt die Minuten an, in denen die Besucher auf dem Foren-Index als aktiv gekennzeichnet werden. Die Standardzeit beträgt 15 Minuten.';

$txt['help_customoptions'] = 'Dieser Bereich definiert die Optionen, die ein Benutzer aus einem Drop-Down Menü wählen kann. Hier müssen ein paar Punkte beachtet werden:
	<ul>
		<li><b>Standardoption:</b> Das durch den Radio Button ausgewählte Textfeld ist die aktivierte Standardoption, wenn der Benutzer zum ersten Mal sein Profil anschaut.</li>
		<li><b>Optionen löschen:</b> Um eine Option zu löschen, einfach den Text aus dem betreffenden Textfeld entfernen. Bei allen Benutzer, die diese Option gewählt hatten, wird diese zurückgesetzt.</li>
		<li><b>Optionen neu ordnen:</b>Optionen können neu angeordnet werden, wenn der Text von einem Textfeld in ein anderes geschrieben wird. Sei dir absolut sicher, dass du den Text <b>nicht</b> veränderst, da sonst alle Benutzerdaten verlorengehen.</li>
	</ul>';

$txt['help_autoFixDatabase'] = 'Diese Funktion repariert automatisch auftretende Fehler in der Datenbank, wobei die Benutzer nichts davon merken werden. Das kann sinnvoll sein, andererseits ist das Forum bei Fehlern so lange funktionsuntüchtig, bis du von selbst darauf aufmerksam wirst. In diesem Fall wird eine E-Mail an dich geschickt.';

$txt['help_enableParticipation'] = 'Zeigt ein verändertes Symbol vor den Themen, in denen man selbst geantwortet hat.';
$txt['help_correctExclamations'] = 'Wenn diese Funktion aktiviert ist, hindert sie Benutzer daran, zu viele Ausrufe- oder Fragezeichen im Betreff-Feld zu verwenden und minimiert diese auf 1. Zum Beispiel: ein Thema mit dem Titel "Hilfe!!!!!!" wird zu "Hilfe!"';
$txt['help_correctShouting'] = 'Wenn der Wert auf über 0 gesetzt wird, werden Titel von Themen auf korrekte Schreibweise überprüft. Sollten mindestens 10 Buchstaben oder die angegebene Prozenthürde Großbuchstaben enthalten, werden diese Umgeschrieben. Zum Beispiel: "BITTE UM SCHNELLE HILFE" wird zu "Bitte Um Schnelle Hilfe" korrigiert. Die EInstellung von 0% deaktiviert diese Funktion.';

$txt['help_db_persist'] = 'Erhöht die Geschwindigkeit zur Datenbank, indem eine persistente Verbindung aufrecht erhalten wird. Wenn du einen dedizierten Server verwenden solltest, könnte dies eine tolle Option sein. Solltest du auf einem Shared Host vertrauen, könnte diese Funktion für Ärger sorgen.';
$txt['help_ssi_db_user'] = 'Optionale Einstellung. Erlaubt das Benutzen eines anderen Benutzernamens bzw. Passwortes für die Datenbank, wenn mit der Datei SSI.php gearbeitet wird.';

$txt['help_countChildPosts'] = 'Aktiviere diese Option, um die Beiträge und Themen der untergeordneten Foren zum Gesamtwert der Beiträge und Themen auf dem Board-Index zu addieren.<br /><br />Diese Funktion macht die Anzeige merklich langsamer, zeigt aber keine Boards mehr mit "0" an, wenn diese untergeordnete Boards mit Beiträgen enthalten..';
$txt['help_ignorable_boards'] = 'Diese Option erlaubt den Benutzern bestimmte Foren zu ignorieren. Ignorierte Foren erscheinen nicht in den neuen Beiträgen und den ungelesenen Themen.';
$txt['help_allow_ignore_topics'] = 'Diese Option erlaubt den Benutzern bestimmte Themen zu ignorieren, die nicht mehr in den <em>Ungelesenen Antworten</em> und <em>Ungelesenen Beiträgen</em> erscheinen.';

$txt['help_display_flags'] = 'Als Zusatz zur Standardsprache des Forums, können auch die verschiedenen Foren einer Sprache mit Anzeige einer Flagge zugeordnet werden:
	<ul class="list">
		<li><strong>Keine Flaggen</strong> - Es wird keine Flagge auf der Foren-Hauptseite angezeigt.</li>
		<li><strong>Flaggen für Foren, die einer Sprache zugeordnet sind</strong> - Wenn ein Forum eine vordefinierte Sprache eingestellt hat, wird eine Flagge auf der Foren-Hauptseite neben dem Namen des entsprechenden Forums angezeigt.</li>
		<li><strong>Flaggen für alle Foren</strong> - Zeigt Flaggen für alle Foren neben ihren Namen an. Abhängig von der Sprachauswahl der User</li>
	</ul>';

$txt['help_who_enabled'] = 'Aktiviert die "Wer ist online" Funktion, welche dem Benutzer anzeigt, wer online ist und was der Benutzer gerade macht.';

$txt['help_recycle_enable'] = '"Recycled"  gelöschte Themen und Beiträge in einem bestimmten Foren.';

$txt['help_max_pm_recipients'] = 'Diese Option erlaubt die Vergabe einer maximalen Anzahl von Empfängern, die ein Benutzer beim schreiben einer Privaten Mitteilung eingeben kann. Dies soll helfen, dass sogenannte Spammen im Forum zu vermeiden. Benutzer mit der Berechtigung zum Senden von Newslettern sind von dieser Beschränkung ausgenommen. 0 für kein Limit eingeben.';
$txt['help_pm_posts_verification'] = 'Diese Option zwingt den Benutzer, einen Code von einem Bild einzugeben, bevor die Private Mitteilung versendet werden kann. Dies betrifft nur die Benutzer, welche unter die angegebene mindestanzahl von Beiträgen fallen und soll das Spammen durch automatische Skripte verhindern.';
$txt['help_pm_posts_per_hour'] = 'Diese Einstellung limitiert die Anzahl der Privaten Mitteilungen, die von einem Benutzer in einer Stunde versendet werden können. Sie betrifft nicht Administratoren oder Moderatoren.';

$txt['help_registration_method'] = 'Diese Option stellt verschiedene Möglichkeiten der Registrierung zur Verfügung. Die Auswahl sieht wie folgt aus:<br /><br />
	<ul class="list">
		<li>
			<b>Sofortige Registrierung</b><br />
				Neue Mitglieder können sich sofort anmelden und Beiträge schreiben, nachdem Sie sich registriert haben.<br />
		</li><li>
			<b>Neue Mitglieder aktivieren</b><br />
				Nach der Registrierung erhalten neue Mitglieder eine Email mit einem Aktivierungslink, der angeklickt werden muss, bevor sie das Forum nutzen können.<br />
		</li><li>
			<b>Neue Mitglieder genehmigen</b><br />
				Alle neuen Mitglieder müssen zuerst vom Administrator genehmigt werden, bevor sie das Forum nutzen können.
		</li><li>
				<b>Registrierung deaktivieren:</b><br />
				Deaktiviert die Registrierung, so dass sich keine neuen Mitglieder im Forum registrieren können.<br />
		</li>
	</ul>';

$txt['help_send_validation_onChange'] = 'Alle Mitglieder müssen bei einer Änderung der Emailadresse diese bestätigen, bevor sie ihr Benutzerkonto wieder nutzen können.';
$txt['help_send_welcomeEmail'] = 'Diese Option versendet allen neuen Mitgliedern eine Willkommens Email, wenn diese sich im Forum registrieren.';
$txt['help_password_strength'] = 'Diese Einstellung bestimmt die "Qualität" der Passwörter aller Benutzer. Je komplexer das Passwort, desto schwieriger ist es zu erraten.
	Die verfügbaren Optionen sind:
	<ul>
		<li><b>Niedrig:</b> Das Passwort muss aus mindestens vier Zeichen bestehen.</li>
		<li><b>Mittel:</b> Das Passwort muss mindestens acht Zeichen haben und darf nicht aus Teilen des Benutzernamens oder der E-Mail-Adresse bestehen.</li>
		<li><b>Hoch:</b> Gleiche Voraussetzungen wie Mittel, das Passwort muss außerdem einen Mix aus Groß- und Kleinbuchstaben sowie mindestens eine Zahl enthalten.</li>
	</ul>';

$txt['help_coppaAge'] = 'Dieser Wert gibt das Mindestalter an, welches ein neues Mitglied haben muss, damit es sich im Forum registrieren darf. Während der Registrierung muss angegeben werden, ob der Benutzer älter oder jünger als das Mindestalter ist. Die Registrierung wird je nach Einstellung abgelehnt oder suspendiert, bis die Genehmigung der Eltern vorhanden ist.
	Sollte ein Wert von 0 eingeben sein, werden alle Funktionen bezüglich der Altersbeschränkung deaktiviert.';
$txt['help_coppaType'] = 'Sollte die Altersbeschränkung aktiviert sein, bestimmt diese Option, was mit den Registrierungen der Benutzer passiert, die jünger als das Mindestalter sind. Es gibt die folgenden zwei Möglichkeiten:
	<ul>
		<li>
			<b>Registrierung anlehnen:</b><br />
				Die Registrierung neuer Mitglieder unterhalb des Mindestalters wird sofort abgelehnt.<br />
		</li><li>
			<b>Erfordert Genehmigung von Eltern/Erziehungsberechtigten</b><br />
				Die Benutzerkonten neuer Mitglieder unterhalb des Mindestalters werden auf "Erwarte Genehmigung" gesetzt und es wird ein Formular angezeigt, mit dem die Eltern die Genehmigung für die Mitgliedschaft im Forum erteilen müssen.
				Ihnen werden ebenso die Kontaktmöglichkeiten angezeigt, mit denen das Formular an den Administrator geschickt werden kann (per Post oder per Fax).
		</li>
	</ul>';
$txt['help_coppaPost'] = 'Die Textfelder mit den Kontaktangaben sind erforderlich, damit das Formular an den Administrator geschickt werden kann. Die Angaben werden allen neuen Mitgliedern angezeigt, die das Mindestalter noch nicht erreicht haben und sind für die Genehmigung durch Eltern/Erziehungsberechtigte unbedingt notwendig. Es sollte mindestens eine Postadresse oder eine Faxnummer angegeben werden.';

$txt['help_allow_hideOnline'] = 'Mit Aktivierung dieser Option, können alle Mitglieder ihren Online-Status verstecken (außer vor Administratoren). Wenn diese Option deaktiviert wird, können nur Mitglieder den Status verstecken, welche die Berechtigung haben, das Forum zu administrieren. Das Deaktivieren ändert keinen Status eines Mitglieds, es verhindert nur das Verstecken des Status in der Zukunft';

$txt['help_latest_themes'] = 'Dieser Bereich zeigt die neuesten und beliebtesten Layouts (Themes) von <a href="http://www.wedge.org/" target="_blank">www.wedge.org</a> an. Sollte dieser Bereich nicht sichtbar sein, kann dein Server <a href="http://www.wedge.org/" target="_blank">www.wedge.org</a> wahrscheinlich nicht kontaktieren.';

$txt['help_error_plugin_repo'] = 'Der letzte Aufruf des Repositorys, um zu prüfen ob in der Zwischenzeit Updates zu den Plugins vorhanden sind ist fehlgeschlagen. Bitte überprüfe, ob dieses Verzeichnis besteht und /oder ob du evtl. Benutzername und Passwort angeben musst.';
$txt['help_plugins_repo_active'] = 'Sollte ein Repository nicht als aktiv gekennzeichnet sein, kannst du trotzdem noch die "Anzeigen" Funktion verwenden. Allerdings werden Updates nicht automatische angezeigt. Also muss für jedes Plugin der Status manuell überprüft werden.';
$txt['help_plugins_password_blank'] = 'Es wurde kürzlich ein Passwort für dieses Repository angegeben, aber das Passwort liegt verschlüsselt auf dem Server, so dass es mit keiner anderen Person geteilt werden kann.<br><br>Wenn du möchtest, kannst du die Zugangsdaten wie Benutzername und Passwort hier ändern. Oder nichts eintragen, um den jetzigen Zustand beizubehalten.';

$txt['help_secret_why_blank'] = 'Zu deiner Sicherheit wird die Antwort (genauso wie dein Passwort) zu deiner Frage verschlüsselt, so dass Wedge dir nur mitteilen kann, ob es richtig oder falsch ist. Die Antwort oder das Passwort selbst nennen kann Wedge dagegen nicht!';
$txt['help_primary_membergroup'] = '
	Wedge ermöglicht die Definition von primären und zusätzlichen Mitgliedergruppen. Wenn für ein Mitglied keine primäre Mitgliedergruppe vergeben wurde, werden sie in der <em>Regulären Mitgliedergruppe</em> eingeordnet. Wenn ein Mitglied einer anderen Gruppe zugeteilt wird, verliert er alle Rechte und Privilegien dieser Gruppe. Die <strong>beste Strategie</strong> ist es, zusätzliche Mitgliedergruppen einzurichten, wo es nur geht.
	<h6>Warum erscheint die Moderatorengruppe hier nicht?</h6>
	Da Moderation über eine Forum-zu-Forum Basis abgewickelt werden und es sich bei der Moderatorengruppe um eine virtuelle Gruppe handelt, müssen Mitglieder aus der <a href="<URL>?action=admin;area=manageboards">Foren-Verwaltung</a> heraus zum Moderator bestellt werden.';

$txt['help_permissions'] = 'Berechtigungen haben die Funktion, bestimmten Gruppen Aktionen zu erlauben oder zu verbieten<br /><br />Du kannst mithilfe der Checkboxen mehrere Foren gleichzeitig, oder die Berechtigungen einer bestimmten Gruppe ändern, indem du auf "Ändern" klickst.';
$txt['help_permissions_board'] = 'Wenn ein Forum auf "Global" gesetzt ist, hat es keine speziellen Berechtigungen. "Lokal" dagegen hat eigene Berechtigungen, welche sich von anderen Foren unterscheiden und somit unterschiedliche Berechtigungen zwischen den unterschiedlichen Foren erlauben.';
$txt['help_permissions_quickgroups'] = 'Erlaubt das Verwenden von "vordefinierten" Berechtigungen - Standard bedeutet: "nichts spezielles", Beschränkt bedeutet: "wie ein Gast", Moderator vergibt Rechte "wie bei einem Moderator" und "Wartungsmodus" bedeutet, dass die Berechtigungen einem Administrator sehr nahe kommen.';
$txt['help_permissions_deny'] = 'Das Verbieten von Berechtigungen erlaubt es , bestimmte Funktionen gewählten Mitgliedergruppen zu entziehen. Dazu wird z.B. eine Mitgliedergruppe erstellt und dieser eine bestimmte Berechtigung verboten.<br /><br />Diese Option ist mit großer Vorsicht zu verwenden, da verbotene Berechtigungen den Mitgliedern nicht mehr zur Verfügung stehen, selbst wenn die Berechtigungen in einer anderen Gruppe erlaubt sind, der dieses Mitglied angehört.';
$txt['help_permissions_postgroups'] = 'Das Aktivieren der Berechtigungen für beitragsbasierte Gruppen erlaubt das Zuweisen von Berechtigungen an Mitglieder mit einer bestimmten Beitragszahl. Diese Berechtigungen werden zu den bereits vorhanden <em>addiert</em>.';
$txt['help_membergroup_guests'] = 'Die Mitgliedergruppe "Gäste" enthält alle Benutzer, die nicht angemeldet sind.';
$txt['help_membergroup_regular_members'] = 'Die Mitgliedergruppe "Normale Mitglieder" bezeichnet alle Benutzer die angemeldet sind, jedoch keiner primären Mitgliedergruppe angehören.';
$txt['help_membergroup_administrator'] = 'Der Administrator kann alles im Forum machen und jedes Forum ansehen. Es gibt keine Berechtigungseinstellungen für den Administrator';
$txt['help_membergroup_moderator'] = 'Die Mitgliedergruppe "Moderator" ist eine spezielle Gruppe. Die zugewiesenen Berechtigungen und Einstellungen gelten <em>nur in den Foren, in denen die betroffenen Mitglieder als Moderator eingetragen sind</em>. Außerhalb dieser Foren werden sie wie normale Benutzer behandelt.';
$txt['help_membergroups'] = 'In Wedge gibt es zwei Arten von Gruppen, denen die Mitglieder zugeteilt sind:
	<ul>
		<li><b>Reguläre Gruppen:</b> In einer regulären Gruppe werden Mitglieder nicht automatisch eingeteilt. Um ein Mitglied einer dieser Gruppen zuzuordnen, gehe einfach in das Profil des Benutzers und klicke auf "Benutzerkonto". Von hier aus kann nun das Mitglied verschiedenen Gruppen zugeordnet werden.</li>
		<li><b>Beitragsbasierende Gruppen:</b> Im Gegenteil zu regulären Gruppen können beitragsabhängige Gruppen nicht zugeordnet werden. Stattdessen werden Mitglieder diesen automatisch zugeordnet, wenn sie eine bestimmte Zahl an Beiträgen geschrieben haben.</li>
	</ul>';

$txt['help_group_text_show'] = 'Wähle die Gruppentitel aus, die auf der Beitrags-Seite und im Profil angezeigt werden sollen. Wedge kann nur Namen aus zwei Gruppen anzeigen: primäre und Beitragsbasierte Gruppen. Standardmäßig wird nur der Titel der primären Mitgliedergruppe angezeigt.<br><br>Du kannst auch Bilder, Badges oder Sterne den Gruppen zuordnen. Dies geschieht auf der Seite der Gruppenmitgliedschaften im Adminbereich. Die Sichtbarkeit der Badges kann dort ebenfalls konfiguriert werden.';
$txt['help_show_group_key'] = 'In dem "Wer ist Online" Bereich im Info-Center werden alle User angezeigt, die angemeldet sind. Der Benutzername trägt die Farbe der jeweiligen Mitgliedergruppe des Benutzers. Es kann hilfreich sein, eine Liste mit Gruppennamen und deren Farben in diesem Bereich mit anzzuzeigen, so dass Benutzer unterscheiden können, wie viele Mitglieder einer bestimmten Gruppe gerade angemeldet sind. Diese Option wird auf der gleichen Seite verwaltet, in der auch die Badges konfigueriert werden.';

$txt['help_maintenance_rot'] = 'Diese Funktion erlaubt das <b>komplette</b> und <b>unwiderrufliche</b> Löschen alter Themen. Es wird <b>dringend empfohlen</b>, davor eine Sicherung der Daten durchzuführen, für den Fall, dass etwas gelöscht wird, was nicht gewollt war.<br /><br />Verwende diese Funktion mit entsprechender Vorsicht!';
$txt['help_maintenance_members'] = 'Diese Funktion erlaubt das <b>komplette</b> und <b>unwiderrufliche</b> Löschen von Benutzerkonten aus dem Forum. Es wird <b>dringend empfohlen</b>, davor eine Sicherung der Daten durchzuführen, für den Fall, dass etwas gelöscht wird, was Sie nicht gewollt war.<br /><br />Verwende diese Funktion mit entsprechender Vorsicht!';

$txt['help_avatar_server_stored'] = 'Erlaubt den betreffenden Mitgliedern, Benutzerbilder vom Server auszuwählen. Diese Bilder befinden sich im Unterordner "avatars" des Wedge-Verzeichnisses.<br />Ein Tipp: Wenn  Unterordner in Verzeichnis "avatars" angelegt werden, können verschiedenen Kategorien unter den Benutzerbildern eingerichtet werden.';
$txt['help_avatar_external'] = 'Erlaubt den betreffenden Mitgliedern, ihre Benutzerbilder von anderen Servern zu verlinken. Der Nachteil ist, dass Bilder verlinkt werden können, die nicht im Forum erwünscht sind (pornografische/gewalttätige Inhalte).';
$txt['help_avatar_download_external'] = 'Aktiviere diese Option, um das externe Benutzerbild auf deinen Server herunterzuladen. Sollte das herunterladen erfolgreich sein, wird es danach wie ein hochgeladenes Benutzerbild behandelt.';
$txt['help_avatar_upload'] = 'Diese Option gleicht dem externen Benutzerbild, hat aber den Vorteil, dass mehr Kontrolle über die Benutzerbilder möglich sind und die Mitglieder keine Möglichkeit benötigen, ihre Benutzerbilder selbst hochzuladen.<br /><br />Der Nachteil ist, dass entsprechend mehr Platz auf dem Server bereitgestellt werden muss.';
$txt['help_avatar_download_png'] = 'PNGs sind größer, bieten aber eine bessere Kompression (und damit Qualität). Sollte dies nicht aktiviert sein, werden stattdessen JPEG Bilder verwendet - welche meistens kleiner in der Größe sind, jedoch eine schlechtere Qualität bieten.';
$txt['help_gravatar_settings'] = 'Gravatare sind eine Form von Globalen Benutzerbildern. Diese werden verwaltet von <a href="http://www.gravatar.com/">Gravatar.com</a>. Dort kannst du deinen Gravatar hinzufügen und an vielen Stellen im Netz automatisch verwenden. Bestes Beispiel: Wordpress.';
$txt['help_gravatarEnabled'] = 'Wenn diese Option aktiviert ist, sind Gravatare für die Benutzer verfügbar. Falls deaktiviert, sind sie für keinen Benutzer verfügbar.';
$txt['help_gravatarOverride'] = 'Wenn diese Option ausgewählt ist, haben Mitglieder keine Möglichkeit, ein eigenes Benutzerbild auf diesen Server zu laden, können aber automatisch ihren Gravatar an dieser Stelle verwenden.';
$txt['help_gravatarAllowExtraEmail'] = 'Wenn diese Option ausgewählt ist, haben Mitglieder die Berechtigung eine alternative Emailadresse anzugeben, zusätzlich zu ihrer normalen Adresse. Viele User verwenden unterschiedliche Emailadressen für unterschiedliche Gravatare.';
$txt['help_gravatarMaxRating'] = 'Wenn ein Gravatar erstellt wird, können die Benutzer eine Bewertung dafür integrieren. Ähnlich wie der <a href="http://en.wikipedia.org/wiki/Motion_Picture_Association_of_America_film_rating_system" target="_blank">MPAA-style</a>. Zum Beispiel: wenn ein Gravatar mit G bewertet ist, ist er ganz OK. Enthält er obszönes Material, wird er mit  R oder X bewertet. Es kann festgelegt werden, welche Gravatare hier in diesem Forum verwendet werden dürfen.';
$txt['help_avatar_defaults'] = 'Diese Einstellungen erlauben ein paar Finetuning-Einstellungen für dein Forum. Zum Beispiel die Zuordnung eines Benutzerbildes für Mitglieder ohne eigenes Bild.';
$txt['help_avatar_banned_hide'] = 'Diese Funktion versteckt die Benutzerbilder von gesperrten Mitgliedern., als ob sie kein Benutzerbild besitzen würden.<br><br>Das Benutzerbild wird nicht gelöscht für den Fall, dass die Sperre gegen den User aufgehoben wird.';

$txt['help_disableHostnameLookup'] = 'Deaktiviert die Suche nach den Hostnamen, was manche Server sehr langsam macht. Beachte, dass dies Auswirkungen auf das sperren von Mitgliedern hat.';

$txt['help_search_weight_frequency'] = 'Gewichtungsfaktoren werden benutzt, um die Relevanz eines Suchresultates zu bestimmen. Veränderungen an diesen Gewichtungen werden vorgenommen, um die Resultate auf das Forum abzustimmen. Das Forum einer News-Seite zum Beispiel benötigt eine hohe Gewichtung auf \'Alter der neuesten Übereinstimmung\'. Alle Werte sind relativ zueinander und sollten positive Zahlen sein.<br /><br />Dieser Faktor zählt die Anzahl der übereinstimmenden Beiträge und teilt sie durch die gesamte Zahl der Beiträge innerhalb eines Themas.';
$txt['help_search_weight_age'] = 'Gewichtungsfaktoren werden benutzt, um die Relevanz eines Suchresultates zu bestimmen. Veränderungen an diesen Gewichtungen werden vorgenommen, um die Resultate auf das Forum abzustimmen. Das Forum einer News-Seite zum Beispiel benötigt eine hohe Gewichtung auf \'Alter der neuesten Übereinstimmung\'. Alle Werte sind relativ zueinander und sollten positive Zahlen sein.<br /><br />Dieser Faktor bewertet das Alter der neuesten Übereinstimmung innerhalb eines Themas. Je neuer der Beitrag, desto höher ist die Bewertung.';
$txt['help_search_weight_length'] = 'Gewichtungsfaktoren werden benutzt, um die Relevanz eines Suchresultates zu bestimmen. Veränderungen an diesen Gewichtungen werden vorgenommen, um die Resultate auf Ihr Forum abzustimmen. Das Forum einer News-Seite zum Beispiel benötigt eine hohe Gewichtung auf \'Alter der neuesten Übereinstimmung\'. Alle Werte sind relativ zueinander und sollten positive Zahlen sein.<br /><br />Dieser Faktor basiert auf der Themengröße. Je mehr Beiträge innerhalb eines Themas, desto höher ist die Bewertung.';
$txt['help_search_weight_subject'] = 'Gewichtungsfaktoren werden benutzt, um die Relevanz eines Suchresultates zu bestimmen. Veränderungen an diesen Gewichtungen werden vorgenommen, um die Resultate auf Ihr Forum abzustimmen. Das Forum einer News-Seite zum Beispiel benötigt eine hohe Gewichtung auf \'Alter der neuesten Übereinstimmung\'. Alle Werte sind relativ zueinander und sollten positive Zahlen sein.<br /><br />Dieser Faktor schaut nach dem Vorhandensein einer Suchanfrage innerhalb des Betreffs eines Themas.';
$txt['help_search_weight_first_message'] = 'Gewichtungsfaktoren werden benutzt, um die Relevanz eines Suchresultates zu bestimmen. Veränderungen an diesen Gewichtungen werden vorgenommen, um die Resultate auf Ihr Forum abzustimmen. Das Forum einer News-Seite zum Beispiel benötigt eine hohe Gewichtung auf \'Alter der neuesten Übereinstimmung\'. Alle Werte sind relativ zueinander und sollten positive Zahlen sein.<br /><br />Dieser Faktor schaut nach der Übereinstimmung des Suchbegriffs im ersten Beitrag eines Themas.';
$txt['help_search_weight_pinned'] = 'Gewichtungsfaktoren werden benutzt, um die Relevanz eines Suchresultates zu bestimmen. Veränderungen an diesen Gewichtungen werden vorgenommen, um die Resultate auf Ihr Forum abzustimmen. Das Forum einer News-Seite zum Beispiel benötigt eine hohe Gewichtung auf \'Alter der neuesten Übereinstimmung\'. Alle Werte sind relativ zueinander und sollten positive Zahlen sein.<br /><br />Dieser Faktor kontrolliert, ob das gefundene Theme fixiert ist und weist ihm bei Bedarf eine höhere Relevanz zu.';
$txt['help_search'] = 'Hier kannst du die EInstellungen für die Suche verändern.';
$txt['help_search_why_use_index'] = 'Ein Such-Index kann die Geschwindigkeit der Suche im Forum merklich erhöhen. Gerade bei einer großen Anzahl an Beiträgen kann die Suche ohne einen Index sehr lange dauern und die Datenbank stark belasten. Wenn das Forum mehr als 50.000 Beiträge enthält, sollte die Erstellung eines Index in Erwägung gezogen werden, um hohe Belastungsspitzen zu vermeiden.<br /><br />Beachten bitte, dass ein Index unter Umständen einiges an Platz einnehmen kann. Der Volltext-Index ist ein integrierter Index von MySQL, welcher relativ kompakt ist (ungefähr die gleiche Größe wie die Beitragstabelle), einige Wörter jedoch nicht indiziert und durchaus langsame Abfragen produzieren kann. Der benutzerdefinierte Index ist meistens größer (je nach Konfiguration bis zur 3-fachen Größe der Beitragstabelle), hat jedoch Geschwindigkeitsvorteile und ist relativ stabil.';

$txt['help_see_member_ip'] = 'Deine IP-Adresse wird nur dir und den Moderatoren dieser Seite angezeigt. Beachte, dass diese Daten nicht die Person identifizieren, da IP-Adressen häufig nach einer gewissen Zeit wechseln.<br /><br />Du kannst keine IP-Adressen anderer Benutzer sehen und diese können deine nicht sehen.';
$txt['help_whytwoip'] = 'Wedge verwendet mehrere Methoden, um die IP-Adressen zu bestimmen. Normalerweise finden beide Methoden ein und dieselbe Adresse. In manchen Fällen werden jedoch zwei Adressen gefunden, welche von Wedge protokolliert werden und zum Kontrollieren eines Banns etc. verwendet werden. Du kannst auf eine der beiden Adressen klicken, um diese zu verfolgen und ggf. zu sperren.';

$txt['help_posts_and_topics'] = '
	<ul>
		<li>
			<b>Beitrags-Einstellungen</b><br />
			Hier können die Einstellungen bezüglich des Schreibens und der Ansicht von Beiträgen geändert werden. Auch die Rechtschreibprüfung lässt sich hier aktivieren.
		</li><li>
			<b>Bulletin Board Code</b><br />
			De-/Aktivieren hier die Code-Tags für das Schreiben von Beiträgen. Wähle weiterhin, welche Codes erlaubt sind und welche nicht.
		</li><li>
			<b>Zensierte Wörter</b>
			Um die Ausdrücke in deinem Forum unter Kontrolle zu halten, können bestimmte Wörter gesperrt (zensiert) werden. Diese Funktion ersetzt das betroffene Wort mit einer - von dir gewählten - vernünftigen Variante.
		</li><li>
			<b>Themen-Einstellungen</b>
			Hier können die Einstellungen bezüglich der Themen verändert werden: Anzahl der Themen pro Seite, fixierte Themen deaktivieren und aktivieren, Anzahl der Beiträge ab der ein Thema heiß oder sehr heiß ist etc.
		</li>
	</ul>';
$txt['help_spider_group'] = 'Wenn ein Gast als Suchmaschine erkannt wird und einer Gruppe zugeordnet wird, kannst du den Umfang des Zugriffs bequem über die Berechtigungen steuern. So können Suchmaschinen einen erweiterten Zugriff ermöglicht werden, wie z.B. normalen Gästen. Du kannst z.B. eine neue Gruppe mit dem Namen "Bots" erstellen und diese hier auswählen. Danach entziehst du dieser Gruppe die Berechtigung um Profile anzuschauen, um die Benutzerdaten zu schützen.<br />Achtung: Das Erkennen der Suchmaschinen arbeitet nie perfekt und kann von anderen Benutzern simuliert werden, um trotzdem einen erweiterten Zugriff (wenn eingestellt) wie normale Gäste zu bekommen.';
$txt['help_show_spider_online'] = 'Diese Einstellung erlaubt dir zu wählen, ob "Spiders" (Bots, die z.B. deine Seiten für Suchmaschinen indexieren) in der Wer ist online Liste auf der Forums Hauptseite und "Wer ist online" Seite angezeigt werden.
Die Optionen sind:
<ul class="list">
<li>
<b>Überhaupt nicht</b><br />
Spider erscheinen als Gäste.</li>
<li><b>Zeige Spider Anzahl</b><br />
Die Forums Hauptseite zeigt die Anzahl der zur Zeit im Forum aktiven Spider.</li>
<li><b>Zeige Spider Namen</b><br />
Jeder Spider Name wird angezeigt, so dass jeder Benutzer sehen kann, wie viele von jedem Spider gerade das Forum besucht. Dies gilt sowohl für die Forums Hauptseite, wie auch für die Wer Ist Online Seite.</li>
<li><b>Zeige Spider Namen - Nur Administratoren</b><br />
Wie oben, nur dass lediglich Administratoren den Spider Status sehen können - alle anderen sehen sie als Gäste.</li>
</ul>';

$txt['help_pm_bcc'] = 'Wenn du eine Private Mitteilung versenden möchtest, kannst du einen weiteren Empfänger als BCC bzw. "Blindkopie" hinzufügen. Die Identität der BCC Empfänger wird den anderen Empfängern nicht mitgeteilt, er erhält die Mitteilungen anonym und ohne Wissen der anderen.';

$txt['help_move_topics_maintenance'] = 'Diese Funktion erlaubt es, alle Beiträge aus einem Board in ein anderes Board zu verschieben.';
$txt['help_maintain_reattribute_posts'] = 'Diese Funktion ordnet Beiträge von Gästen registrierten Mitgliedern zu. Das ist sinnvoll, wenn ein Mitglied das Benutzerkonto aus Versehen gelöscht hat und nach einer erneuten Registrierung die Beiträge zurückhaben möchte.';
$txt['help_chmod_flags'] = 'Du kannst die Dateiberechtigungen auf einen selbst bestimmten Wert setzen. Gebe dazu einen numerischen CHMOD-Wert an. Beachte: diese Einstellung hat keine Auswirkungen auf Mircosoft Windows Betriebssysteme.';

$txt['help_postmod'] = 'Diese Sektion erlaubt es Mitgliedern des Moderatoren-Teams (mit ausreichenden Berechtigungen) Beiträge und Themen zu akzeptieren bevor diese angezeigt werden.';

$txt['help_field_show_enclosed'] = 'Umschließt die Benutzereingaben mit Text oder HTML. Dies erlaubt es weitere Sofortnachrichtenquellen, Bilder, Einbettungen oder Ähnliches hinzuzufügen. Beispielsweise:<br/><br/>
		&lt;a href="http://www.wedge.org/{INPUT}"&gt;&lt;img src="{DEFAULT_IMAGES_URL}/icon.gif" alt="{INPUT}" /&gt;&lt;/a&gt;<br /><br />
		Beachte, dass folgende Variablen verwendet werden können:<br />
		<ul class="list">
			<li>{INPUT} - Die Eingabe des Benutzers.</li>
			<li>{SCRIPTURL} - Web-Adresse des Forums.</li>
			<li>{IMAGES_URL} - URL zum Bilder-Verzeichnis des vom Benutzer aktuell verwendeten Themes.</li>
			<li>{DEFAULT_IMAGES_URL} - URL zum Bilder-Verzeichnis des Standard-Themes.</li>
		</ul>';

$txt['help_custom_mask'] = 'Die Eingabemaske ist für die Forensicherheit wichtig. Das Validieren der Benutzereingaben stellt sicher, dass Daten nicht in einer Weise genutzt werden, die nicht erwartet werden. Wir haben einige einfache reguläre Ausdrücke als Hinweise gegeben.<br /><br />
	<div class="smalltext" style="margin: 0 2em"> &quot;[A-Za-z]+&quot; - Trifft auf alle Groß- und Kleinbuchstaben des Alphabets zu.<br />
	 &quot;[0-9]+&quot; - Trifft auf alle numerischen Ziffern zu.<br />
	 &quot;[A-Za-z0-9]{7}&quot;  - Trifft auf alle Groß- und Kleinbuchstaben des Alphabets sowie numerischen Ziffern in einer Länge von 7 Zeichen zu.<br />
	 &quot;[^0-9]?&quot; - Schließe alle numerischen Ziffern aus.<br />
	 &quot;^([A-Fa-f0-9]{3}|[A-Fa-f0-9]{6})$&quot; - Erlaube nur 3 oder 6 Hex-Ziffern.<br />
	 </div><br /><br />
	 Zusätzlich können spezielle Meta-Zeichen wie  ?+*^$ und {xx} definiert werden.
	 <div class="smalltext" style="margin: 0 2em"> ? - Ein oder kein Zutreffen des letzten Ausdrucks.<br />
	 + - Ein oder mehrere Vorkommnisse des vorigen Ausdrucks.<br />
	 * - Kein oder mehr Vorkommnisse des vorigen Ausdrucks.<br />
	 {xx} - Eine bestimmte Anzahl (xx) an aufeinander folgenden Vorkommnissen des vorigen Ausdrucks.<br />
	 {xx,} - Eine bestimmte Anzahl oder mehr Vorkommnisse des vorigen Ausdrucks.<br />
	 {,xx} - Eine bestimmte Anzahl oder weniger an aufeinanderfolgenden Vorkommnissen des vorigen Ausdrucks.<br />
	 {xx,yy} - Eine Anzahl an aufeinanderfolgenden Vorkommnissen zwischen den beiden Zahlen des vorigen Ausdrucks.<br />
	 ^ - Start des Textes.<br /> $ - Ende des Textes.<br />
	 \\ - Escapet das nächste Zeichen.<br />
	 </div><br /><br />
	 Weitere Informationen und Techniken können im Internet nachgelesen werden.';

$txt['help_reverse_proxy'] = 'Falls du Bad Behavior hinter einem Reverse Proxy, Load Balancer, HTTP Beschleuniger, Content Cache oder ähnliches verwendest, aktiviere diese Funtion.';
$txt['help_reverse_proxy_header'] = 'Dein Reverse Proxy Server muss die IP-Adresse vom Clienten im Header weitergeben. Typischerweise wird dafür: <a href="http://de.wikipedia.org/wiki/X-Forwarded-For">X-Forwarded-For</a> verwendet. Du musst sicherstellen, dass in deinem Proxy Server diese Funktion aktiviert ist. Einige andere Namen im Header können sein: "X-Real-Ip" (nginx) und "Cf-Connecting-Ip" (CloudFlare).';
$txt['help_reverse_proxy_ips'] = 'In diesem Bereich müssen die IP-Adressen (z.B. 127.0.0.1) oder Adressblöcke (z.B. 127.0.0.0/8) der Proxy Server angegeben werden. Solltest du einen vorgelagerten Proxy Server zusätzlich zu einem anderen verwenden, müssen <em>alle</em> verwendeten IP Adressen ud Adressbereiche angegeben werden. Andernfalls ist es unmöglich, die richtige IP-Adresse des Klienten herauszufiltern.';

$txt['help_signature_minposts'] = 'Einerseits können Berechtigungen verwendet werden um Signaturen zu kontrollieren, andererseits bietet sich auch die Möglichkeit, die Signatur vor anderen Mitgliedern zu verstecken. Diese Funktion ist ein wirksamer Schutz gegen Spammer.';

$txt['help_media_permissions'] = 'Hier kannst du die verschiedenen Berechtigungsprofile hinzufügen, bearbeiten, oder löschen. Das Profil kann einem einzelnen Album oder mehreren Alben zugeteilt werden. Alle neu erstellten oder zugeteilten Alben folgen den festgelegten Berechtigungen.';

// Help popup for the Media tag...
$txt['help_mediatag'] = '<h2>Was hat es mit dem [media] tag auf sich?</h2>
	Er ist da um das Einbetten von Dateien zu vereinfachen. In jedem Bereich, wo BBCode verwendet wird (z.B. in Forenbeiträgen), kann nun ganz einfach dieser Link eingefügt werden.
	Hier ein paar schnelle Beispiele:
	<br><br><b>[media id=123 type=preview align=center width=400 caption="Hallo, Welt!"]</b>
	<br>Zeigt ein zentriertes (Vorschau)Bild mittlerer Größe, verkleinert auf 400 Px Breite und einem Titel unterhalb. Alle Parameter sind optional, mit Ausnahme der Item-ID.
	<br>
	<br><b>[media id=1,2 type=album]</b>
	<br>Zeigt die letzten Dateien aus deinen ersten beiden Alben an. Verwendet den Box-Modus (siehe unterhalb).
	<br><br>
	<b>Mögliche Werte:</b>
	<br>- type=<em>normal, box, link, preview, full, album</em>
	<br>- align=<em>none, left, center, right</em>
	<br>- width=<em>123</em> (in Px)
	<br>- caption=<em>"Titel des Bildes"</em> or caption=<em>TextMitNurEinemWort</em>
	<br><br>
	<h2>Verfügbare Parameter</h2>
	<b>id</b>
	<ul class="list">
		<li>Alle Dateien werden durch eine bestimmte Nummer identifiziert, die in der URL sichtbar ist. Die ID ist der einzige Parameter, der <b>NICHT</b> optional ist.
		Du kannst verschiedene Dateien auf diese Art und Weise spezifizieren. Diese werden durch ein Komma als Trennzeichen voneinander getrennt: "[media id=1,2,3 type=album]".</li>
	</ul>
	<br>
	<b>Typ</b>
	<ul class="list">
		<li><b>normal</b> (Standard, außer bei entsprechender Einrichtung) - Schaue auf das Thumbnail. Klicke auf das Thumbnail um ein Vorschaubild zu erhalten.</li>
		<li><b>av</b> - Bettet eine Video- oder Audiodatei in einen Player ein. Wenn du diesen Parameter nicht verwenden solltest, wird das Thumbnail angezeigt (wie erwartet). Allerdings wird beim Klick auf das Thumbnail die komplette Datei heruntergeladen. Ist nicht wirklich schön...</li>
		<li><b>box</b> - Zeige die Thumbnail-Box. Mit allen Details wie in der Media-Galerie. Der Klick auf das Thumbnail leitet dich zu der entsprechenden Seite der Datei.</li>
		<li><b>link</b> - Wie die Standardvariante. Allerdings ist bei dieser Variante der Titel verlinkt und leitet dich zur Seite der Datei. Sollte kein Titel eingegeben sein, wird ein Standardlink eingeblendet.</li>
		<li><b>preview</b> (Möglicherweise Standard bei entsprechender Einrichtung) - Zeigt das Vorschaubild (Mischung aus Thumbnail und der Originaldatei.)</li>
		<li><b>full</b> (Möglicherweise Standard bei entsprechender Einrichtung) - Zeigt das Vollbild. Bitte sicherstellen, dass die Parameter für die Breite eingestellt sind!</li>
		<li><b>album</b> - Zeigt die aktuellsten Dateien der/des Alben/Albums (beschrieben in ID). Diese werden im <b>box</b> Modus angezeigt.</li>
	</ul>
	<br>
	<b>align</b>
	<ul class="list">
		<li><b>none</b> (Standard) - Normale Ausrichtung. Erlaubt keine Thumbnails rechts oder links daneben.</li>
		<li><b>left</b> - Richtet das Thumbnail links aus. Verwende mehrere left-aligned [media] Tags um Thumbnails nebeneinander anzuzeigen.</li>
		<li><b>center</b> - Zentriert das Thumbnail. Erlaubt keine Thumbnails rechts oder links daneben. Eine Ausnahme bildet die folgende Anordnung: [media align=left][media align=right][media align=center]</li>
		<li><b>right</b> - selbe Funktion wie <em>left</em>, nur rechts ausgerichtet. Alles klar?</li>
	</ul>
	<br>
	<b>width</b>
	<ul class="list">
		<li>Eine beliebige Zahl die größer als 0 ist. Dieser Parameter wird nur dann benötigt, wenn eine bestimmte Breite festgelegt werden soll.</li>
		<li>In den dementsprechenden Tag-Typ die gewünschte Größe eingeben. Zum Beispiel: wenn deine Thumbnails eine Breite von 120 Px haben und die Vorschaudateien sind 500 Px breit, verwende [media type=preview] wenn du eine Breite zwischen 300 bis 500 Px festkegen möchtest. Andernfalls sieht das Thumbnail sehr unscharf und verpixelt aus.</li>
	</ul>
	<br>
	<b>caption</b>
	<ul class="list">
		<li>Zeigt einen Titel unter dem Thumbnail (Wenn der Typ auf Link gesetzt wurde, wird der Titel anklickbar und leitet dich zur Seite der Datei.)</li>
		<li>Eine beliebige Zeichenfolge ist hier möglich. Wenn die Zeichenfolge Leerzeichen oder Klammern enthalten sollte, achte darauf sie in "doppelte Anführungszeichen" zu setzen.</li>
	</ul>';
