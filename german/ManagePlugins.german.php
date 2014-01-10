<?php
// Version: 2.0; ManagePlugins

$txt['plugin_manager_desc'] = 'In diesem Bereich kannst du alle Plugins auf diesem Server verwalten.';

$txt['fatal_not_valid_plugin'] = 'Das ausgewählte Plugin konnte nicht aktiviert werden. Entweder fehlt das Plugin, oder es ist beschädigt.';
$txt['fatal_not_valid_plugin_remove'] = 'Das ausgewählte Plugin konnte nicht entfernt werden. Vielleicht ist das Plugin beschädigt.';
$txt['install_errors'] = 'Dieses Plugin kann nicht verwendet werden, weil:';
$txt['fatal_already_enabled'] = 'Dieses Plugin bereits aktiviert ist.';
$txt['fatal_already_disabled'] = 'Dieses Plugin bereits deaktiviert ist.';
$txt['install_error_minphp'] = 'PHP Version %1$s wird benötigt, aber nur Version (%2$s ist verfügbar)';
$txt['fatal_install_error_minphp'] = 'Dieses Plugin kann nicht installiert werden, weil es PHP in Version %1$s benötigt, aber die auf dem Server installierte Version nur als %2$s vorliegt.';
$txt['install_error_minmysql'] = 'MySQL Version %1$s wird benötigt (%2$s verfügbar)';
$txt['fatal_install_error_minmysql'] = 'Dieses Plugin kann nicht installiert werden, da es MySQL in Version %1$s benötigt, aber die auf dem Server verfügbare Version nur als %2$s vorliegt.';
$txt['install_error_missinghook'] = 'Ein oder mehrere Funktionen die von diesem Plugin benötigt werden, sind nicht verfügbar.';
$txt['install_error_reqfunc'] = 'Diese Funktion benötigt Zugriff auf die folgenden PHP Funktionen: %1$s';
$txt['install_error_duplicate_id'] = 'Ein anderes Plugin mit der gleichen Identifizierung ist bereits installiert.';
$txt['fatal_duplicate_id'] = 'Ein anderes Plugin mit der gleichen Identifizierung ist bereits installiert. Vielleicht handelt es sich um eine andere Version dieses Plugins. Das Plugin muss deaktiviert werden, bevor das neue Plugin aktiviert werden kann.';
$txt['install_error_maint_mode'] = 'Du musst den Wartungsmodus verwenden, um dieses Plugin zu installieren.';
$txt['fatal_install_error_maint_mode'] = 'Dieses Plugin führt weitreichende Änderungen an der Datenbank durch. Um diesen Prozess zu vereinfachen, wird das Plugin erst zu installieren sein, wenn das Forum in den Wartungsmodus gebracht wurde. Dies ist eine Sicherheitsfunktion und sollte nicht ignoriert werden.';
$txt['fatal_remove_error_maint_mode'] = 'Dieses Plugin führt weitreichende Änderungen an der Datenbank während der Installation durch. Um diesen Prozess zu vereinfachen, wird das Plugin erst zu deinstallieren sein, wenn das Forum in den Wartungsmodus gebracht wurde. Dies ist eine Sicherheitsfunktion und sollte nicht ignoriert werden.';
$txt['fatal_install_error_reqfunc'] = 'Dieses Plugin verwendet einige Funktionen, die in der installierten PHP-Version nicht verfügbar sind: %1$s. Du solltest für weitergehnde Informationen deinen Anbieter kontaktieren.';
$txt['fatal_install_error_missinghook'] = 'Dieses Plugin verwendet Funktionen, die in der aktuell vorhandenen Installation nicht verfügbar sind: %1$s. Du solltest vielleicht den Autor des Plugins um Hilfe bitten.';
$txt['fatal_install_enable_missing'] = 'Dieses Plugin verwendet während der Aktivierungsphase eine bestimmte Datei mit Installationsanweisungen: %1$s. Jedoch konnte diese Datei nicht gefunden werden.';
$txt['fatal_install_disable_missing'] = 'Dieses Plugin verwendet während der Deaktivierungsphase eine bestimmte Datei mit Installationsanweisungen: %1$s. Jedoch konnte diese Datei nicht gefunden werden.';
$txt['fatal_install_remove_missing'] = 'Dieses Plugin verwendet während der Deinstallation eine bestimmte Datei mit Installationsanweisungen: %1$s. Jedoch konnte diese Datei nicht gefunden werden.';
$txt['fatal_conflicted_plugins'] = 'Dieses Plugin versorgt andere Plugins mit bestimmten Funktionen. Es kann nicht deaktiviert werden, bevor nicht folgende Plugins deaktiviert wurden: %1$s';
$txt['no_plugins_found'] = 'Keine Plugins gefunden.';

$txt['plugin_written_by'] = 'Geschrieben von';
$txt['plugin_author_url'] = 'Webseite des Autors';
$txt['plugin_website'] = 'Besuche die Webseite für %1$s';
$txt['plugin_author_email'] = 'Email an den Autor';
$txt['plugin_readmes'] = 'Information über das Plugin';

$txt['invalid_plugin_readme'] = 'Keine passende Readme-Datei konnte für dieses Plugin gefunden werden.';
$txt['enable_plugin'] = 'Aktiviere dieses Plugin';
$txt['disable_plugin'] = 'Deaktiviere dieses Plugin';
$txt['remove_plugin'] = 'Entferne dieses Plugin';

$txt['remove_plugin_desc'] = 'Du möchtest das folgende Plugin entfernen: %1$s.';
$txt['remove_plugin_blurb'] = 'Es gibt zwei Arten, wie ein Plugin entfernt werden kann.';
$txt['remove_plugin_nodelete'] = 'Sicherung der Daten';
$txt['remove_plugin_nodelete_desc'] = 'Das Plugin und dessen Dateien werden entfernt, aber alle Daten und Einstellungen bleiben erhalten.Um zu erfahren, was genau behalten wird, kontaktiere den Autor des Plugins.';
$txt['remove_plugin_delete'] = 'Entferne die Daten';
$txt['remove_plugin_delete_desc'] = 'Das Plugin, inkl. aller Daten und Einstellungen wird unwiderruflich <strong>entfernt</strong>. <strong>MAch davon nur Gebrauch, wenn du dieses Plugin nicht mehr verwenden möchtest.</strong>';
$txt['remove_plugin_unsure'] = 'Falls due unsicher bist, ob du die Daten und EInstellungen behalten oder löschen sollst, wähle "Daten nicht entfernen".';
$txt['remove_plugin_already_enabled'] = 'Dieses Plugin ist zur Zeit aktiviert. Es muss deaktiviert werden, bevor es entfernt werden kann.';
$txt['remove_plugin_files_still_there'] = 'Die Dateien des Plugins konnten nicht gelöscht werden. Du musst dich z.B. per FTP auf deinen Server einloggen, um das Verzeichnis: %1$s manuell zu löschen.';
$txt['remove_plugin_files_pre_still_there'] = 'Dein Plugin wurde noch nicht entfernt. Die Dateien die eine Entfernung verhindern, müssen manuell (z.B. per FTP) mit Schreibrechten versehen werden.';
$txt['remove_plugin_maint'] = 'Dieses Plugin erwartet das Forum im Wartungsmodus, bevor es gelöscht werden kann. Es werden weitreichende Datenbankänderungen durchgeführt.';

$txt['plugin_filter'] = 'Filter für Plugins:';
$txt['plugin_filter_all'] = 'Alle (%1$d)';
$txt['plugin_filter_enabled'] = 'Aktiviert (%1$d)';
$txt['plugin_filter_disabled'] = 'Deaktiviert (%1$d)';
$txt['plugin_filter_install_errors'] = 'Inkompatibel (%1$d)';

$txt['could_not_connect_remote'] = 'Wedge konnte sich nicht am Server anmelden, um die nötigen Änderungen vorzunehmen.<br>Der Server gab folgenden Fehler zurück: %1$s<br><br>Du solltest zurückgehen und die Logindaten überprüfen.';

$txt['plugins_no_gzinflate'] = 'Dein Server unterstützt kein gzinflate, dadurch sind die Upload/Download Plugin Möglichkeiten nicht verfügbar. Dein Anbieter kann das Problem lösen, wenn er die zlib Unterstützung in PHP einbettet.';
$txt['plugins_add_desc'] = 'In diesem Bereich kannst du neue Plugins hinzufügen.';
$txt['plugins_add_download'] = 'Download eines Plugins von einem Archiv';
$txt['plugins_add_download_desc'] = 'Es existieren Archive, die verschiedene Plugins für dein Forum bereithalten. Du kannst die Option unten verwenden, um ein entsprechendes Plugin zu finden.';
$txt['plugins_repository'] = 'Archiv';
$txt['plugins_active'] = 'Aktiv';
$txt['plugins_browse'] = 'Durchsuchen';
$txt['plugins_modify'] = 'Bearbeiten';
$txt['plugins_no_repos'] = 'Keine Archive gefunden.';
$txt['plugins_add_repo'] = 'Archiv hinzufügen';
$txt['plugins_repo_auth'] = 'Logindetails werden bei der Anfrage an dieses Archiv mit übermittelt..';
$txt['plugins_repo_error'] = 'Fehler';
$txt['plugins_add_upload'] = 'Ein Plugin von deinem Computer hochladen';
$txt['plugins_add_upload_desc'] = 'Du kannst ein Plugin im .zip Format in dein Forum hochladen.';
$txt['plugins_add_upload_file'] = 'Plugindatei zum hochladen:';
$txt['plugins_upload_plugin'] = 'Plugin hochladen';

$txt['plugins_browse_invalid_error'] = 'Du versuchst ein nicht existierendes Archiv zu durchstöbern.';
$txt['plugins_browse_could_not_connect'] = 'Das ausgewählte Plugin-Archiv konnte nicht gefunden werden. Vielleicht ist es nur temporär nicht verfügbar. Du kannst es manuell versuchen zu erreichen: <a href="%1$s">%1$s</a>';

$txt['plugins_edit_repo'] = 'Archive Bearbeiten';
$txt['plugins_edit_repo_desc'] = 'Auf dieser Seite kannst du die zusätzlichen Archive bearbeiten.';
$txt['plugins_edit_invalid'] = 'Du hast versucht ein nicht existierendes Plugin-Archiv zu bearbeiten. Du kannst ein neues Archiv unterhalb hinzufügen.';
$txt['plugins_edit_invalid_error'] = 'Du hast versucht ein nicht existierendes Plugin-Archiv zu bearbeiten.';
$txt['plugins_repo_details'] = 'Archiv Details';
$txt['plugins_repo_details_desc'] = 'Ein Archiv benötigt einen Namen und eine Adresse. Optional können Benutzername und Passwort hinterlegt werden.';

$txt['plugins_repo_name'] = 'Archiv-Name';
$txt['plugins_repo_address'] = 'Archiv-Adresse';
$txt['plugins_repo_active'] = 'Archiv ist aktiv';
$txt['plugins_repo_delete'] = 'Löschen';
$txt['plugins_repo_delete_confirm'] = 'Möchtest du wirklich dieses Archiv löschen? Dieser Schritt kann nicht rückgängig gemacht werden.';

$txt['plugins_repo_auth'] = 'Login Details';
$txt['plugins_repo_auth_desc'] = 'Falls dieses Archiv einen Benutzernamen und Passwort benötigen sollte, können die Daten hier hinterlegt werden. Sollte keine Loginfunktion erfordelich sein, die Felder einfach leer lassen.';
$txt['plugins_repo_username'] = 'Archiv-Benutzername';
$txt['plugins_repo_password'] = 'Archiv-Passwort';
$txt['plugins_repo_password_blank'] = 'Warum ist das Feld leer?';

$txt['plugins_repo_no_name'] = 'Es wurde kein Archivname eingegeben. Mindestens ein Archivname wird benötigt.';
$txt['plugins_repo_no_url'] = 'Es wurde keine Adresse für dieses Archiv angegeben. Die Adresse wird benötigt.';
$txt['plugins_repo_invalid_url'] = 'Es wurde eine ungültige Adresse für das Archiv eingegeben. Bitte Adresse überprüfen und erneut versuchen';
$txt['plugins_auth_pwd_nouser'] = 'Es wurde ein Passwort, aber kein Benutzername für ein Archiv angegeben - Falls du Benutzerkonteneinstellungen hinterlegen möchtest, sind beide Felder erforderlich.';
$txt['plugins_auth_diffuser'] = 'Es wurde ein Benutzername, aber kein Passwort für ein Archiv angegeben, oder du hast einen Benutzernamen verändert und das Passwort nicht erneut eingegeben. Beide Felder sind erforderlich.';

$txt['plugins_invalid_upload'] = 'Es scheint, du wolltest ein Plugin hochladen, aber die Datei konnte nicht gespeichert werden. Vielleicht überschreitet die Dateigröße das Serverlimit. Beachte: das Plugin kann jederzeit auf deinen Computer entpackt und per FTP/SFTP auf deinen Server in den Plugins Ordner geladen werden.';
$txt['plugins_unable_read'] = 'Das Plugin wurde hochgeladen, aber Wedge kann das Plugin nicht lesen. Die Ursache kann eine Fehlkonfiguration deines Servers sein. In diesme Fall müssen die Dateien per FTP/SFTP in den Plugins Ordner deines Forums geladen werden.';
$txt['plugins_unable_write'] = 'Das Plugin wurde hochgeladen, aber Wedge kann das Plugin nicht entpacken. Die Ursache kann eine Fehlkonfiguration deines Servers sein. In diesme Fall müssen die Dateien per FTP/SFTP in den Plugins Ordner deines Forums geladen werden.';
$txt['plugins_invalid_zip'] = 'Das Plugin wurde hochgeladen, aber die ZIP-Datei scheint beschädigt zu sein. Bitte die Datei nochmals hochladen. Falls alle Versuche fehlschlagen sollten, kann das Plugin auch auf deinem Computer entpackt werden und die Dateien per FTP/SFTP in das Plugin-Verzeichnis deines Forums geladen werden.';
$txt['plugins_generic_error'] = 'Das Plugin wurde hochgeladen, aber es ging etwas schief. Bitte kontaktiere den Wedge-Support und verwende die Referenz: %1$s:%2$s bei der Problembeschreibung.';
$txt['plugins_invalid_plugin_no_info'] = 'Dein Plugin wurde hochgeladen, aber enthält keine gültige plugin-info.xml Datei, die von Wedge benötigt wird. Kontaktiere den Autor des Plugins für Support.';
$txt['plugins_invalid_plugin_overinfo'] = 'Dein Plugin wurde hochgeladen, aber enthält mehrere Dateien mit dem Namen plugin-info.xml Wedge kann nicht entscheiden, welche Datei verwendet werden soll. Bitte kontaktieren den Autor des Plugins für Support.';
$txt['plugins_uploaded_error'] = 'Es gab ein Problem beim hochladen des Plugins. Bitte versuche es erneut.';
$txt['plugins_uploaded_tampering'] = 'Es gab ein Problem beim hochladen deines Plugins. Es wurden einige Signaturen gefunden, die sich mit den Dateien vermischt haben. Die Datei wurde aus Sicherheitsgründen gelöscht.';

$txt['plugin_duplicate_detected_title'] = 'Doppeltes Plugin entdeckt';
$txt['plugin_duplicate_detected'] = 'Das hochgeladene Plugin ($1$s) schein das Duplikat eines existierenden Plugins zu sein. (%2$s) Was möchtest du mit diesem Plugin anstellen?';
$txt['plugin_duplicate_cancel'] = 'Ich möchte zur Zeit nichts unternehmen';
$txt['plugin_duplicate_cancel_desc'] = 'Das existierende Plugin bleibt unberührt und installiert. Das hochgeladene Plugin wird bereinigt.';
$txt['plugin_duplicate_proceed'] = 'Ich möchte mein altes Plugin gegen das neue ersetzen.';
$txt['plugin_duplicate_proceed_desc'] = 'Das existierende Plugin wird deaktiviert und die entsprechenden Dateien (bis auf die Daten und Einstellungen) entfernt. Anschliessend wird das neue Plugin entpackt und kann aktiviert werden.';

$txt['plugin_upload_successful_title'] = 'Hochladen war erfolgreiche';
$txt['plugin_upload_successful'] = 'Dein Plugin wurde hochgeladen und scheint gültig zu sein. Im nächsten Schritt wird Wedge das Plugin entpacken. Dies kann in mehreren Schritten geschehen, um den Server-Load zu vermindern.';

$txt['plugin_connection_successful_title'] = 'Verbindung erfolgreich';
$txt['plugin_connection_successful'] = 'Die angegebenen Details für deinen Server scheinen gültig zu sein. Damit können wir zum nächsten Schritt des Uploads weitergehen.';

$txt['plugin_connection_details_title'] = 'Verbindungs-Details';
$txt['plugin_connection_details'] = 'Um fortzufahren benötigt Wedge FTP oder SFTP Zugangsdaten, damit die Plugins ordnungsgemäß auf den Server installiert werden können.';
$txt['plugin_connection_cancel_oops'] = 'Um...';
$txt['plugin_connection_cancel'] = 'Für den Fall, dass dein Anbieter keine FTP/SFTP Zugänge bereitstellt, frage bitte deinen Anbieter nach einer anderen Möglichkeit Dateien zu verwalten.';
$txt['plugin_connection_button'] = 'Ich habe die gar nicht?';
$txt['plugin_connection_required'] = 'Angenommen du hast die Details zur Hand. Hier steht was Wedge von dir benötigt.';

$txt['plugin_connection'] = 'Dies sind meine Details';
$txt['plugin_ftp_server'] = 'Server:';
$txt['plugin_ftp_port'] = 'Port:';
$txt['plugin_ftp_username'] = 'Benutzername:';
$txt['plugin_ftp_password'] = 'Passwort:';
$txt['plugin_ftp_type'] = 'Typ der Verbindung:';
$txt['plugin_ftp_path'] = 'Pfad zum Plugin-Verzeichnis:';
$txt['plugin_ftp_save'] = 'Diese Details für später speichern';
$txt['plugin_ftp_error'] = 'Die angegebenen Details sind nicht richtig:';
$txt['plugin_ftp_error_bad_server'] = 'Der angegebene Server scheint nicht zu stimmen.';
$txt['plugin_ftp_error_bad_response'] = 'Nach der Verbindungsanfrage zum FTP-Server wurde eine unbekannte Antwort empfangen. Vielleicht versuchst du es später erneut.';
$txt['plugin_ftp_error_bad_username'] = 'Der angegebene Benutzername ist falsch.';
$txt['plugin_ftp_error_bad_password'] = 'Das angegebene Passwort ist falsch.';
$txt['plugin_ftp_error_wrong_folder'] = 'Das angegebene Verzeichnis ist falsch. Alle Versuche den richtigen Ordner zu lokalisieren sind fehlgeschlagen';

$txt['plugin_files_pruned_title'] = 'Altes Plugin entfernt';
$txt['plugin_files_pruned'] = 'Das alte Plugin wurde erfolgreich entfernt. Wedge wird nun das neue Plugin installieren.';

$txt['plugin_folders_created_title'] = 'Verzeichnisse erstellt';
$txt['plugin_folders_created'] = 'Bevor die Dateien entpackt werden, muss Wedge alle relevanten Verzeichnisse in deinem Plugin erstellen. Dieser Schritt wurde erledigt. Alles was jetzt noch fehlt, ist die Dateien hochzuladen.';

$txt['plugin_files_unpacked_title'] = 'Dateien entpackt';
$txt['plugin_files_unpacked'] = 'Alle Dateien wurden entpackt. Du kannst nun dein Plugin aktivieren!';
