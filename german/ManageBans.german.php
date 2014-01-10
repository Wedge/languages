<?php
// Version: 0.1; ManageBans

$txt['ban_general_description'] = 'In diesem Bereich können Sperren gegen unliebsame User verwaltet werden.';
$txt['ban_description_hard'] = 'Dieser Bereich verwaltet die  "harten Sperren" und stoppt User bereits frühzeitig.';
$txt['ban_description_soft'] = 'Dieser Bereich verwaltet die "weichen Sperren" die zwar Beschränkungen für die betroffenen User bedeuten, aber die Seite trotzdem noch verwendet werden kann.';
$txt['ban_description_add'] = 'In diesem Bereich kannst du eine neue Sperre für dein Forum einrichten.';
$txt['ban_description_edit'] = 'Dieser Bereich ermöglicht das bearbeiten von Sperren in deinem Forum.';
$txt['ban_description_settings'] = 'Dieser Bereich verändert die Einstellungen für Sperren. Hauptsächlich für "weiche Sperren".';

$txt['ban_type'] = 'Typ';
$txt['ban_type_id_member'] = 'Mitglied';
$txt['ban_type_member_name'] = 'Benutzername';
$txt['ban_type_email'] = 'Email';
$txt['ban_type_ip_address'] = 'IP';
$txt['ban_type_hostname'] = 'Hostname';

$txt['ban_content'] = 'Gesperrt';
$txt['ban_added'] = 'Hinzugefügt am';
$txt['ban_added_by'] = 'Hinzugefügt von';
$txt['ban_invalid_member'] = 'User mit der ID %1$s wurde gesperrt, aber es existiert kein User mit dieser ID.';

$txt['ban_id_member_is'] = 'Der User: <a href="%1$s">%2$s</a>';

$txt['ban_member_names_beginning'] = 'Benutzername beginnt mit %1$s %2$s';
$txt['ban_member_names_ending'] = 'Benutzername endet mit %1$s %2$s';
$txt['ban_member_names_containing'] = 'Benutzername enthält %1$s %2$s';
$txt['ban_member_names_matching'] = 'Der Benutzername von: %1$s %2$s';
$txt['ban_member_names_case_matters'] = '(Groß- und Kleinschreibung beachten)';

$txt['ban_entire_domain'] = 'Jede Email von %1$s';
$txt['ban_entire_tld'] = 'Alle Emails von jeder %1$s Domain';
$txt['ban_gmail_style_email'] = 'Alle Variationen von %1$s@%2$s';

$txt['ban_entire_hostname'] = 'Alle User von %1$s';

$txt['ban_no_entries'] = 'Es gibt zur Zeit keine Sperren die greifen.';

$txt['ban_remove_selected'] = 'Ausgewählte entfernen';
$txt['ban_remove_selected_confirm'] = 'Möchtest du wirklich die ausgewählten Sperren entfernen?';
$txt['ban_remove_single'] = 'Diese Sperren entfernen';
$txt['ban_remove_single_confirm'] = 'Möchtest du wirklich diese Sperre entfernen?';

$txt['ban_hardness_header'] = 'Art der Sperre';
$txt['ban_hardness_title'] = 'Welche Art von Sperre?';
$txt['ban_hardness_soft'] = 'Weiche Sperre';
$txt['ban_hardness_hard'] = 'Harte Sperre';
$txt['ban_hardnesses'] = 'Weiche Sperren halten einen User nicht davon ab dein Forum zu betreten. Diese Sperre bremst den User nur etwas aus. Harte Sperren greifen sofort und können einen User das Betreten des Forums verbieten.';

$txt['ban_type_header'] = 'Sperrkriterium';
$txt['ban_type_title'] = 'Worauf basiert die Sperre?';
$txt['ban_type_description'] = 'Es sind unterschiedliche Optionen verfügbar. Je nach Sperrtyp.';
$txt['ban_type_title_id_member'] = 'Ein bestimmtes Mitglied der Community';
$txt['ban_type_title_member_name'] = 'Ein oder mehrere Benutzernamen';
$txt['ban_type_title_email'] = 'Eine Mailadresse oder Maildomain';
$txt['ban_type_title_ip_address'] = 'Eine IP-Adresse oder ein IP-Adressblock';
$txt['ban_type_title_hostname'] = 'Ein Hostname oder mehrere Hostnamen';

$txt['ban_type_id_member_type'] = 'Wen möchtest du sperren?';

$txt['ban_type_member_name'] = 'Welchen Typ von Benutzernamen möchtest du sperren?';
$txt['ban_member_names_select_beginning'] = 'Namen beginnen mit:';
$txt['ban_member_names_select_ending'] = 'Namen enden mit:';
$txt['ban_member_names_select_containing'] = 'Namen beinhalten:';
$txt['ban_member_names_select_matching'] = 'Namen stimmen überein:';

$txt['ban_member_note'] = 'Beachte: diese Aktion wird niemanden von der Verwendung der Seite ausschließen. Die angedachte Funktion ist es, den Namen für die Zukunft zu sperren.';

$txt['ban_member_case_sensitive'] = 'Groß- und Kleinschreibung beachten?';
$txt['ban_member_case_sensitive_desc'] = 'Wenn Groß- und Kleinschreibung beachtet wird, dann trifft z.B. Admin nicht auf admin zu. Normalerweise solltest du diese Funktion nicht verwenden.';

$txt['ban_type_email_type'] = 'Welche Art von Email möchtest du sperren?';
$txt['ban_type_email_type_specific'] = 'Eine oder mehrere Adressen';
$txt['ban_type_email_type_domain'] = 'Eine komplette Domain';
$txt['ban_type_email_type_tld'] = 'Einen kompletten Domainbereich';
$txt['ban_type_email_content'] = 'Adresse(n) die gesperrt werden sollen';
$txt['ban_email_gmail_style'] = 'GMail Domain?';

$txt['ban_use_htaccess'] = 'Wenn möglich sollten die Allow/Deny Regeln in deinem Server verwendet werden. Entweder in der .htaccess Datei, oder über dein Admin-Panel. Die Sperren sind effizienter, wenn sie direkt vom Server abgefangen werden, als das sie erst auf Wedge treffen.';
$txt['ban_type_ip_address_type'] = 'Welche Art von IP-Adressen möchtest du sperren?';
$txt['ban_type_ip_range'] = 'Einen IP-Adressbereich sperren?';
$txt['ban_type_range_start'] = 'Start:';
$txt['ban_type_range_end'] = 'Ende:';
$txt['ban_type_ip_address_details'] = 'Zu sperrende IP-Adresse(n):';

$txt['ban_type_hostname'] = 'Welchen Hostnamen möchtest du sperren?';
$txt['ban_type_hostname_wildcard'] = 'Du kannst den * als Platzhalter verwenden. Zum Beispiel *.net, sperrt alle Hostnamen mit .net. Oder *.comcast.net, oder einfach *.irgendetwas.example.com beschränken die Sperren auf bestimmte Hostadressen.';

$txt['ban_information'] = 'Bemerkungen für die Sperre';
$txt['ban_reason'] = 'Grund der Sperre';
$txt['ban_reason_subtext'] = 'Angabe ist notwendig, damit du sich später daran erinnerst, warum eine Sperre hinzugefügt wurde.';
$txt['ban_message'] = 'Nachricht, die dem User angezeigt wird';
$txt['ban_message_subtext'] = 'Optional. Wenn eine Nachricht eingegeben wird, wird diese dem entsprechenden User angezeigt, damit er weiß, warum er gesperrt wurde.';

$txt['ban_no_modify'] = 'Du kannst keine Sperren für Hostnamen setzen, wenn Lookups deaktiviert sind.';

$txt['ban_invalid_type'] = 'Du hast keinen gültigen Sperrtyp angegeben.';
$txt['ban_invalid_member'] = 'Du hast kein gültiges Mitglied angegeben, welches gesperrt werden soll.';
$txt['ban_invalid_membername'] = 'Du hast keinen gültigen Namen angegeben, welcher gesperrt werden soll.';
$txt['ban_invalid_email'] = 'Du hast keine gültige Emailadresse angegeben, die gesperrt werden soll.';
$txt['ban_invalid_ip_address'] = 'Du hast keine(n) gültige(n) IP-Adresse/IP-Adressbereich angegeben, der gesperrt werden soll.';
$txt['ban_invalid_hostname'] = 'Du hast keinen gültigen Hostnamen angegeben, der gesperrt werden soll.';
$txt['ban_invalid_reason'] = 'Du hast keinen Grund für die Sperre angegeben.';

$txt['ban_membername_style'] = 'Wenn eine Sperre auf Benutzernamen angewendet wird, auf welche Bedingung soll die Sperre zutreffen?';
$txt['ban_membername_style_username'] = 'Nur den Benutzernamen';
$txt['ban_membername_style_display'] = 'Nur auf den angezeigten Namen';
$txt['ban_membername_style_both'] = 'Auf Benutzername und Anzeigename';

$txt['softban_blankpage'] = 'Chance eines Users mit weicher Sperre, eine weiße Seite angezeigt zu bekommen';
$txt['softban_percent_subtext'] = 'Angaben in Prozent, von 0 bis 100%.';
$txt['softban_nosearch'] = 'Chance eines Users mit weicher Sperre, die Suche nicht zu verwenden';

$txt['softban_disableregistration'] = 'Soll die Registrierung bei weichen Sperren deaktiviert werden?';
$txt['softban_disableregistration_desc'] = 'Weiche Sperren können IP-Adressen enthalten, falls du die Registrierung auf diesem Weg blockieren möchtest.';

$txt['softban_redirect'] = 'Chance um auf eine andere Seite umgeleitet zu werden';
$txt['softban_redirect_subtext'] = 'Nur aktiv, wenn eine URL angegeben wurde.';
$txt['softban_redirect_url'] = 'URL zu der die User umgeleitet werden sollen';

$txt['softban_delay_min'] = 'Verzögerung des Seitenaufbaus in Sekunden - Minimum';
$txt['softban_delay_max'] = 'Verzögerung des Seitenaufbaus in Sekunden - Maximum';
$txt['softban_delay_max_subtext'] = 'Es wird eine zufällige Zeit zwischen den beiden ANgaben ausgewählt. User mit weichen Sperren müssen dann diese Zeit abwarten, bevor die Seite geladen wird. Die Zeit ist auf 15 Sekunden beschränkt, um Probleme mit dem Serverload aus dem Weg zu gehen.';
