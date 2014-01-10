<?php
// Version: 2.0; ManagePaid

// Symbols.
$txt['usd_symbol'] = '$%1.2f';
$txt['eur_symbol'] = '%1.2f €';
$txt['gbp_symbol'] = '£ %1.2f';

$txt['usd'] = 'USD ($)';
$txt['eur'] = 'EURO (€)';
$txt['gbp'] = 'GBP (£)';
$txt['other'] = 'Andere';

$txt['paid_username'] = 'Benutzername';

$txt['paid_subscriptions_desc'] = 'Auf dieser Seite kannst du die Zahlungsmodalitäten der Abonnements bearbeiten.';
$txt['paid_subs_settings'] = 'Einstellungen';
$txt['paid_subs_settings_desc'] = 'Hier kannst due die Zahlungsmöglichkeiten verwalten.';
$txt['paid_subs_view_desc'] = 'Hier kannst du dir alle verfügbaren Abonnements anzeigen lassen.';

// Setting type strings.
$txt['paid_enabled'] = 'Abonnements aktivieren';
$txt['paid_enabled_desc'] = 'Dieses Feld muss markiert sein, um Abonnements für dein Forum zu aktivieren.';
$txt['paid_email'] = 'Benachrichtigungen';
$txt['paid_email_desc'] = 'Informiere den Administrator, wenn sich ein Abonnement automatisch ändert.';
$txt['paid_email_to'] = 'Email für Korrespondenz';
$txt['paid_email_to_desc'] = 'Mit einem Komma separierte Liste mit allen Adressen, die zusammen mit dem Administratorbenachrichtigungen verschickt werden sollen.';
$txt['paidsubs_test'] = 'Test Modus aktivieren';
$txt['paidsubs_test_desc'] = 'Stellt alle Abonnements in &quot;Test-Modus&quot;. Wo immer möglich, werden Bezahlmethoden in einer Sandbox ausgeführt (PayPal, Authorize.net etc.). Aktiviere diese FUnktion nur wenn du genau weisst, was du machst!';
$txt['paidsubs_test_confirm'] = 'Möchtest du wirklich den Test-Modus einschalten?';
$txt['paid_email_no'] = 'Keine Benachrichtigungen versenden';
$txt['paid_email_error'] = 'Informieren, falls ein Abonnement fehlschlägt';
$txt['paid_email_all'] = 'Über alle automatischen Änderungen der Abonnements informieren';
$txt['paid_currency'] = 'Währung auswählen';
$txt['paid_currency_code'] = 'Währungszeichen';
$txt['paid_currency_code_desc'] = 'Verwendete Codes von Bezahldiensten';
$txt['paid_currency_symbol'] = 'Symbol welches bei der Bezahlmethode verwendet wird';
$txt['paid_currency_symbol_desc'] = 'Verwende \'%1.2f\' um auszuwählen, wie die Zahlen angezeigt werden sollen. Z.B. $%1.2f, %1.2fDM etc.';
$txt['paid_allowed_groups'] = 'Gruppen, denen es erlaubt ist ein Abonnement zu erwerben.';
$txt['paid_allowed_groups_desc'] = 'Auswahl der Gruppen, die dieses Abonnement abschließen dürfen.';

// Payment-processor specific strings
$txt['paypal_email'] = 'Paypal Emailadresse';
$txt['paypal_email_desc'] = 'Leer lassen, wenn du Paypal nicht verwenden möchtest.';
$txt['worldpay_id'] = 'WorldPay Install ID';
$txt['worldpay_id_desc'] = 'Die Install ID, die von WorldPay generiert wurde. Leer lassen, wenn du WorldPay nicht verwenden möchtest';
$txt['worldpay_password'] = 'WorldPay Rückruf Passwort';
$txt['worldpay_password_desc'] = 'Stelle sicher, dass das verwendete Passwort nicht das selbe Passwort ist, welches für den WorldPay Account verwendet wird!';
$txt['authorize_id'] = 'Authorize.net Install ID';
$txt['authorize_id_desc'] = 'Die Install ID, die von Authorize.net generiert wurde. Leer lassen, wenn du Authorize.net nicht verwenden möchtest';
$txt['authorize_transid'] = 'Authorize.Net Transaction ID';
$txt['2co_id'] = '2co.com Install ID';
$txt['2co_id_desc'] = 'Die Install ID, die von 2co.com generiert wurde. Leer lassen, wenn du 2co.com nicht verwenden möchtest';
$txt['2co_password'] = '2co.com Geheimes Wort';
$txt['2co_password_desc'] = 'Dein geheimes Wort für 2checkout.';
$txt['nochex_email'] = 'Nochex Emailadresse';
$txt['nochex_email_desc'] = 'Emailadresse deines Accounts bei Nochex. Leer lassen, wenn du Nochex nicht verwenden möchtest';
$txt['paid_settings_save'] = 'Speichern';

$txt['paid_note'] = '<strong class="alert">Achtung:</strong><br>Damit Abonnements automatisch aktualisiert und verlängert werden können, muss für jede Zahlungsmethode eine Return-URl hinterlegt werden.
	Die URL muss wie folgt hinterlegt werden:<br><br>
	&nbsp;&nbsp;&bull;&nbsp;&nbsp;<strong>{board_url}/subscriptions.php</strong><br><br>
	Du kannst den Link für Paypal direkt ändern, wenn du <a href="https://www.paypal.com/us/cgi-bin/webscr?cmd=_profile-ipn-notify" target="_blank">hier klickst</a>.<br>
	Für alle anderen Gateways (sofern installiert) sind diese Angaben in deinem Profil des jeweiligen Anbieters zu finden.';

// View subscription strings.
$txt['paid_name'] = 'Name';
$txt['paid_status'] = 'Status';
$txt['paid_cost'] = 'Kosten';
$txt['paid_duration'] = 'Dauer';
$txt['paid_active'] = 'Aktiv';
$txt['paid_pending'] = 'Ausstehende Zahlung';
$txt['paid_finished'] = 'Beendet';
$txt['paid_total'] = 'Gesamt';
$txt['paid_is_active'] = 'Aktiviert';
$txt['paid_none_yet'] = 'Du hast noch keine Abonnements hinzugefügt.';
$txt['paid_payments_pending'] = 'Ausstehende Zahlungen';
$txt['paid_order'] = 'Bestellung';

// Add/Edit/Delete subscription.
$txt['paid_add_subscription'] = 'Abonnement hinzufügen';
$txt['paid_edit_subscription'] = 'Abonnement bearbeiten';
$txt['paid_delete_subscription'] = 'Abonnement löschen';

$txt['paid_mod_name'] = 'Name des Abonnements';
$txt['paid_mod_desc'] = 'Beschreibung';
$txt['paid_mod_reminder'] = 'Schicke eine Erinnerungsmail';
$txt['paid_mod_reminder_desc'] = 'Tage, bevor das Abonnement abläuft, um die Erinnerungsmail zu schicken. (In Tagen, 0 zum deaktivieren)';
$txt['paid_mod_email'] = 'Email die verschickt wird bei Abschluss';
$txt['paid_mod_email_desc'] = 'Der Name {NAME} ist der Mitgliedsname; {FORUM} ist der Name deiner Community. Email Betreff sollte in der ersten Reihe stehen. Leer lassen, wenn du keine Emailbestätigung verschicken möchtest.';
$txt['paid_mod_cost_usd'] = 'Preis (USD)';
$txt['paid_mod_cost_eur'] = 'Preis (EUR)';
$txt['paid_mod_cost_gbp'] = 'Preis (GBP)';
$txt['paid_mod_cost_blank'] = 'Leer lassen, um diese Währung nicht anzubieten.';
$txt['paid_mod_span'] = 'Dauer des Abonnements';
$txt['paid_mod_span_lifetime'] = 'Lebenszeit';
$txt['paid_mod_span_lifetime_expires'] = 'Niemals (auf Lebenszeit)';
$txt['paid_mod_span_days'] = 'Tage';
$txt['paid_mod_span_weeks'] = 'Wochen';
$txt['paid_mod_span_months'] = 'Monate';
$txt['paid_mod_span_years'] = 'Jahre';
$txt['paid_mod_active'] = 'Aktiv';
$txt['paid_mod_active_desc'] = 'Ein Abonnement muss aktiv sein, damit ein Mitglied dieses abschließen kann.';
$txt['paid_mod_prim_group'] = 'Primäre Gruppe nach Abschluss';
$txt['paid_mod_prim_group_desc'] = 'Primäre Mitgliedergruppe, die dem User nach Abschluss zugewiesen wird.';
$txt['paid_mod_add_groups'] = 'Zusätzliche Gruppen nach Abschluss';
$txt['paid_mod_add_groups_desc'] = 'Zusätzliche Mitgliedergruppen, die dem User nach Abschluss zugewiesen werden.';
$txt['paid_mod_no_group'] = 'Nicht ändern';
$txt['paid_mod_edit_note'] = 'Achtung: diese Gruppe hat bereits Abonnenten. Daher können die Einstellungen dieser Gruppe nicht verändert werden!';
$txt['paid_mod_delete_warning'] = '<strong>WARNUNG</strong><br><br>Falls du dieses Abonnement löschst, werden alle User, die dieses Abonnement angeschlossen haben alle Zugriffsrechte auf dieses Abonnement verlieren. Vielleicht ist es sinnvoller, ein Abonnement zu deaktivieren, statt zu löschen.<br>';
$txt['paid_mod_repeatable'] = 'Gestatte den Usern ein Abonnement automatisch zu verlängern';
$txt['paid_mod_allow_partial'] = 'Erlaube anteilige Abonnements';
$txt['paid_mod_allow_partial_desc'] = 'Wenn diese Option aktiviert ist, werden User, die nicht die vollständige Summe des Abonnements bezahlt haben nur für den Zeitraum der bezahlten Leistung freigeschaltet.';
$txt['paid_mod_fixed_price'] = 'Abonnement mit festem Preis und fester Dauer';
$txt['paid_mod_flexible_price'] = 'Preis des Abonnements ändert sich mit der Vertragslaufzeit';
$txt['paid_mod_price_breakdown'] = 'Abonnements mit flexiblen Preis';
$txt['paid_mod_price_breakdown_desc'] = 'Bitte gebe an, wie viel das Abonnement für einen definierten Zeitraum kostet. Als Beispiel: das Abonnement kostet 12 Euro für 1 Monat, aber nur 100 Euro für ein ganzes Jahr. Falls du keinen Preis für einen vordefinierten Zeitraum festlegen möchtest, kann dieses Feld leer bleiben.';
$txt['flexible'] = 'Flexibel';
$txt['paid_mod_lifetime_price'] = 'Abonnement gegen Einmalzahlung';

$txt['paid_per_day'] = 'Preis pro Tag';
$txt['paid_per_week'] = 'Preis pro Woche';
$txt['paid_per_month'] = 'Preis pro Monat';
$txt['paid_per_year'] = 'Preis pro Jahr';
$txt['day'] = 'Tag';
$txt['week'] = 'Woche';
$txt['month'] = 'Monat';
$txt['year'] = 'Jahr';
$txt['hour'] = 'Stunde';
$txt['minute'] = 'Minute';

// View subscribed users.
$txt['viewing_users_subscribed'] = 'Abonnementen anzeigen';
$txt['view_users_subscribed'] = 'Zeige die Abonnementen an für: &quot;%1$s&quot;';
$txt['no_subscribers'] = 'Es gibt für diesen Artikel keine Abonnementen!';
$txt['add_subscriber'] = 'Einen neuen Abonnenten hinzufügen';
$txt['edit_subscriber'] = 'Abonnent bearbeiten';
$txt['delete_selected'] = 'Ausgewählte löschen';
$txt['complete_selected'] = 'Ausgewählte komplettieren';

$txt['delete_are_sure'] = 'Bist du sicher, dass du alle Einträge für die ausgewählten Abonnements löschen möchtest?';
$txt['complete_are_sure'] = 'Bist du sicher, dass du die ausgewählten Abonnements komplettieren möchtest?';

$txt['start_date'] = 'Startdatum';
$txt['end_date'] = 'Ablaufdatum';
$txt['start_date_and_time'] = 'Startdatum und Zeit';
$txt['end_date_and_time'] = 'Ablaufdatum und Zeit';
$txt['edit'] = 'EDIT';
$txt['one_username'] = 'Bitte nur einen Benutzernamen eingeben.';
$txt['error_member_not_found'] = 'Das von dir eingegebene Mitglied konnte nicht gefunden werden';
$txt['member_already_subscribed'] = 'Dieses Mitglied hat diesen Artikel bereits abonniert. Bitte bearbeite sein Abonnement.';
$txt['search_sub'] = 'Benutzer finden';

// Make payment.
$txt['paid_confirm_payment'] = 'Zahlung bestätigen';
$txt['paid_confirm_desc'] = 'Um mit der Bezahlung fortzufahren, wähle aus dem unterem Menü und bestätige mit &quot;Jetzt kostenpflichtig bestellen&quot;';
$txt['paypal'] = 'PayPal';
$txt['paid_confirm_paypal'] = 'Um mit <a href="http://www.paypal.com">PayPal</a> zu bezahlen, klicke auf den Button unterhalb. Du wirst auf die PayPal-Seite umgeleitet, um die Transaktion abzuschließen.';
$txt['paid_paypal_order'] = 'Bezahlen mit PayPal';
$txt['worldpay'] = 'WorldPay';
$txt['paid_confirm_worldpay'] = 'Um mit <a href="http://www.worldpay.com">WorldPay</a> zu bezahlen, klicke auf den Button unterhalb. Du wirst auf die WorldPay-Seite umgeleitet, um die Transaktion abzuschließen.';
$txt['paid_worldpay_order'] = 'Bezahlen mit WorldPay';
$txt['nochex'] = 'Nochex';
$txt['paid_confirm_nochex'] = 'Um mit <a href="http://www.nochex.com">Nochex</a> zu bezahlen, klicke auf den Button unterhalb. Du wirst zur Nochex-Seite umgeleitet, um die Transaktion abzuschließen .';
$txt['paid_nochex_order'] = 'Bezahlen mit Nochex';
$txt['authorize'] = 'Authorize.Net';
$txt['paid_confirm_authorize'] = 'Um mit <a href="http://www.authorize.net">Authorize.Net</a> zu bezahlen, klicke bitte auf den Button unterhalb. Du wirst zur Authorize.Net-Seite umgeleitet, um die Transaktion abzuschließen.';
$txt['paid_authorize_order'] = 'Bezahlen mit Authorize.Net';
$txt['2co'] = '2checkout';
$txt['paid_confirm_2co'] = 'Um mit <a href="http://www.2co.com">2co.com</a> zu bezahlen, klicke bitte auf den Button unterhalb. Du wirst zur 2co.com-Seite umgeleitet, um die Transaktion abzuschließen.';
$txt['paid_2co_order'] = 'Bezahlen mit 2co.com';
$txt['paid_done'] = 'Bezahlvorgang abgeschlossen';
$txt['paid_done_desc'] = 'Vielen Dank für deine Zahlung.Nachdem die Transaktion bestätigt wurde, wird das Abonnement freigeschaltet.';
$txt['paid_sub_return'] = 'Zurück zu den Abonnements';
$txt['paid_current_desc'] = 'Übersicht aller aktuellen und ausgelaufenen Abonnements. Um die Details eines aktiven Abonnements einzusehen, wähle es aus der Liste aus.';
$txt['paid_admin_add'] = 'Dieses Abonnement hinzufügen';

$txt['paid_not_set_currency'] = 'Du hast die Währung noch nicht festgelegt. Bitte unter folgendem Link nachholen: <a href="%1$s">Einstellungen</a>.';
$txt['paid_no_cost_value'] = 'Du musst den Preis und die Laufzeit des Abonnements eingeben.';
$txt['paid_all_freq_blank'] = 'Du musst den Preis für eine der vier Laufzeiten eingeben.';

// Some error strings.
$txt['paid_no_data'] = 'Es wurden keine gültigen Daten an das Script übergeben.';

$txt['paypal_could_not_connect'] = 'Kann keine Verbindung zum PayPal-Server aufbauen';
$txt['paid_sub_not_active'] = 'Dieses Abonnement lässt keine neuen Abonnenten zu!';
$txt['paid_disabled'] = 'Abonnements sind zur Zeit deaktiviert!';
$txt['paid_unknown_transaction_type'] = 'Unbekannter Transaktionstyp.';
$txt['paid_empty_member'] = 'Konnte die Mitglieder ID nicht ermitteln';
$txt['paid_could_not_find_member'] = 'Konnte das Mitglied mit der ID: %1$d nicht finden';
$txt['paid_count_not_find_subscription'] = 'Es konnten keine Abonnements für das Mitglied mit der ID: %1$s und der Abonnement-ID: %2$s gefunden werden';
$txt['paid_count_not_find_subscription_log'] = 'Es konnten keine Protokolleinträge für das Mitglied mit der ID: %1$s und der Abonnement-ID: %2$s gefunden werden';
$txt['paid_count_not_find_outstanding_payment'] = 'Es konnten keine ausstehenden Zahlungen für die Mitglieder ID: %1$s und Abonnement-ID: %2$s gefunden werden';
$txt['paid_admin_not_setup_gateway'] = 'Sorry, der Administrator hat diesen Bereich noch nicht fertiggestellt. Versuche es später noch einmal.';
$txt['paid_make_recurring'] = 'Zu einer wiederkehrenden Zahlung machen';

$txt['subscriptions'] = 'Abonnements';
$txt['subscription'] = 'Abonnement';
$txt['paid_subs_desc'] = 'Hier findest du alle Abonnements, die auf dieser Seite verfügbar sind.';
$txt['paid_subs_none'] = 'Es sind zur Zeit keine Abonnements verfügbar!';
$txt['paid_subs_admin_override'] = 'Der Benutzer ist in keiner Mitgliedergruppe die es ihm gestattet Abonnements abzuschließen.';

$txt['paid_current'] = 'Existierende Abonnements';
$txt['pending_payments'] = 'Ausstehende Zahlungen';
$txt['pending_payments_desc'] = 'Das Mitglied hat versucht folgende Zahlungen für das Abonnement zu tätigen, aber wir haben keine Zahlungsbestätigung erhalten. Wenn du sicher bist, diese Zahlung erhalten zu haben, klicke auf &quot;Akzeptieren&quot;, um das Abonnement freizuschalten. Alternativ kannst du auch auf &quot;entfernen&quot; klicken, um alle Verknüpfungen zu der Zahlung zu löschen.';
$txt['pending_payments_value'] = 'Auswahl';
$txt['pending_payments_accept'] = 'Akzeptieren';
