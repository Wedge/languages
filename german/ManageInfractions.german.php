<?php
// Version: 2.0; ManageInfractions

$txt['infractions_desc'] = 'Hier kannst du die Verwarnungen verwalten, die dein Personal an andere Benutzer aussprechen kann.';
$txt['infractionlevels_desc'] = 'Hier kannst du voreingestellte Level für Verwarnungspunkte, wie auch die Strafen verwalten.';
$txt['infractionsettings_desc'] = 'Hier kannst du die Grundeinstellungen festlegen, wie Verstöße geahndet werden sollen.';

$txt['revoke_own_issued'] = 'Personal kann Verwarnungen zurücknehmen, die sie erteilt haben';
$txt['revoke_any_issued'] = 'Personalgruppen die alle ausgesprochenen Verwarnungen zurücknehmen können';
$txt['no_warn_groups'] = 'Gruppen die nicht verwarnt werden können';

$txt['setting_warning_show'] = 'Benutzer, die den Status der Verwarnung sehen können';
$txt['setting_warning_show_subtext'] = 'Legt fest, wer die Verwarnungen und deren Level von Benutzern in deinem Forum sehen kann.';
$txt['setting_warning_show_none'] = 'Niemand';
$txt['setting_warning_show_mods'] = 'Nur Moderatoren';
$txt['setting_warning_show_user'] = 'Moderatoren und verwarnte User';
$txt['setting_warning_show_all'] = 'Alle User';

$txt['infractionlevels_extra'] = 'Nachfolgend stehen einige Bestrafungen, die auf Benutzerkonten angewendet werden können. Mit jeder Verwarnung steigt das Punktekonto des Benutzers. Hier kannst du festlegen, welche Strafen für das erreichen einer Punktzahl vergeben werden. Die Grundidee ist, dass wenn ein Benutzer ständig neue Verstöße begeht, irgendwann eine Strafe erhält, die etwas größer ist als die ihm bereits bekannten.';
$txt['infraction_no_avatar'] = 'Der Avatar des Users ist versteckt';
$txt['infraction_no_sig'] = 'Die Signatur des Users ist versteckt';
$txt['infraction_scramble'] = 'Die Beiträge des Users sind verschlüsselt';
$txt['infraction_scramble_help'] = 'Der Beitrag des Users ist zu sehen, aber der Inhalt des Beitrags ist verschlüsselt. Der erste und letzte Buchstabe ist an seinem Platz, aber alle anderen Buchstaben sind wild durcheinander gewürfelt.';
$txt['infraction_disemvowel'] = 'Der Beitrag des Users ist ohne Vokale';
$txt['infraction_disemvowel_help'] = 'Der Beitrag ist zwar zu sehen, aber die Vokale fehlen. Der Beitrag ist zwar bedingt lesbar, aber viele User werden diesen Beitrag ignorieren.';
$txt['infraction_moderate'] = 'Beitrag des Users erfordert Genehmigung durch einen Moderator';
$txt['infraction_post_ban'] = 'Dem Benutzer ist es nicht gestattet Beiträge zu schreiben';
$txt['infraction_pm_ban'] = 'Der User kann keine Privaten Nachrichten schreiben';
$txt['infraction_soft_ban'] = 'Der User wird mit einer "weichen Sperre" belegt';
$txt['infraction_hard_ban'] = 'Der User wird mit einer "harten Sperre" belegt';

$txt['enact_infraction'] = 'Strafen die angewendet werden:';
$txt['points_infraction'] = 'Wenn der User Punkte angesammelt hat:';

$txt['enabled_infraction'] = 'Aktiviert?';

$txt['preset_infractions'] = 'Vordefinierte Strafen';
$txt['preset_infractions_desc'] = 'Vordefinierte Strafen werden vom Administrator festgelegt, um sie schnell und einfach anzuwenden. Du kannst die Moderatorengruppe aus einer Liste von Strafen wählen lassen, oder vergibst ihnen die Rechte, selber Strafen zu konfigurieren.';
$txt['adhoc_infractions'] = 'Ad-Hoc Strafen';
$txt['adhoc_infractions_desc'] = 'Meistens sind vordefinierte Strafen einfach anzuwenden und auch ausreichend. Es gibt aber auch Situationen, in denen Moderatoren  "off-script" arbeiten müssen. Hier kannst du die Regeln für diese Fälle festlegen.';

$txt['add_infraction'] = 'Neue Strafe hinzufügen';
$txt['delete_infraction_confirm'] = 'Möchtest du wirklich diese Strafe entfernen?';

$txt['infraction_name'] = 'Bezeichnung der Strafe';
$txt['infraction_points'] = 'Punkte';
$txt['infraction_duration'] = 'Dauer';
$txt['infraction_sanctions'] = 'Bestrafungen';
$txt['infraction_issuers'] = 'Kann ausgesprochen werden von';
$txt['infraction_no_punishments'] = 'Keine';
$txt['no_infractions'] = 'Es wurden noch keine Strafen hinterlegt.';

$txt['infraction_d'] = array(
	1 => '%1$s Tag',
	'n' => '%1$s Tage',
);
$txt['infraction_w'] = array(
	1 => '%1$s Woche',
	'n' => '%1$s Wochen',
);
$txt['infraction_m'] = array(
	1 => '%1$s Monat',
	'n' => '%1$s Monate',
);
$txt['infraction_y'] = array(
	1 => '%1$s Jahr',
	'n' => '%1$s Jahre',
);
$txt['infraction_i'] = 'Bis zur Unendlichkeit und noch viel weiter';

$txt['infraction_duration_types'] = array(
	'd' => 'Tag(e)',
	'w' => 'Woche(n)',
	'm' => 'Monat(e)',
	'y' => 'Jahr(e)',
	'i' => 'Unendlich',
);

$txt['can_issue_adhoc'] = 'Kann Ad-Hoc Strafen verhängen';
$txt['max_points'] = 'Maximale Punktzahl pro Verstoß:';
$txt['max_infractions_day'] = 'Maximale Verstöße eines Mitglieds pro Tag:';
$txt['punishments_issuable'] = 'Strafen die verhängt werden können:';

$txt['add_preset_infraction'] = 'Vordefinierten Verstoß hinzufügen';
$txt['edit_preset_infraction'] = 'Vordefinierte Verstöße bearbeiten';
$txt['infraction_name_desc'] = 'Hierbei handelt es sich um den internen Namen des Verstoßes als Referenz.';
$txt['for_the_duration'] = 'Für die dauer des Verstoßes';
$txt['issued_by_adhoc'] = 'Beachte: Gruppen die eine Ad-Hoc Verwarnung aussprechen können, haben die Möglichkeit den Inhalt zu verändern. Gruppen die keine Ad-Hoc Verwarnung aussprechen können, haben nur die von dir vorgegebenen Optionen.';
$txt['notification_text'] = 'Zu verwendender Benachrichtigungstext';
$txt['notification_text_desc'] = 'Falls ein Mitglied von deinem Personal keine Rechte besitzt, eine Ad-Hoc Verwarnung auszusprechen, werden diese vorgegebenen Benachrichtigungen verwendet.';
$txt['notification_use_none'] = 'Verschicke keine Benachrichtigung';
$txt['notification_use_custom'] = 'Verwende einen benutzerdefinerten Text (siehe unten)';
$txt['notification_subject'] = 'Betreff:';
$txt['notification_body'] = 'Nachricht:';
$txt['notification_body_note'] = '{PUNISHMENTS} werden automatisch durch Textbausteine ersetzt, um den User über die Punkte und Verstöße zu informieren.';
$txt['notification_body_message'] = '{MESSAGE} wird automatisch durch einen Link zu der Nachricht ersetzt, in dem jemand für den betreffenden Punkt verwarnt worden ist.';

$txt['tpl_infraction_bad_avatar'] = array(
	'desc' => 'Schlechter Avatar',
	'subject' => 'Du hast eine Verwarnung wegen deines Avatars erhalten',
	'body' => 'Du hast eine Verwarnung wegen deinem Avatars (Benutzerbild) erhalten. Dieses scheint nicht dem Forum angemessen zu sein.

Es scheint nicht angemessen zu sein weil:
* es animierte Inhalte enthält
* es unangemessenen Text enthält
* es ein unangemessenes oder urheberrechtlich geschützes Bild enthält

{PUNISHMENTS}

Bitte beachte, dass alle weiteren Verstöße die im laufe der Zeit angesammelt werden irgendwann zu einer Limitierung der Nutzungsrechte dieser Seite führen können.',
);
$txt['tpl_infraction_bad_sig'] = array(
	'desc' => 'Schlechte Signatur',
	'subject' => 'Du hast eine Verwarnung wegen deiner Signatur erhalten',
	'body' => 'Du hast eine Verwarnung wegen deiner Signatur erhalten, weil diese für diese Seite unangemessen ist.

Sie erscheint nicht angemessen weil:
* sie zu groß ist und damit andere Mitglieder stört
* sie zu viele Links auf externe Seiten beinhaltet
* der Inhalt der Signatur für diese Seite völlig unangemessen ist

{PUNISHMENTS}

Bitte beachte, dass alle weiteren Verstöße die im laufe der Zeit angesammelt werden irgendwann zu einer Limitierung der Nutzungsrechte dieser Seite führen können.',
);
$txt['tpl_infraction_bad_language'] = array(
	'desc' => 'Beleidigende und/oder ordinäre Ausdrucksweise',
	'subject' => 'Du hast eine Verwarnung wegen deiner Ausdrucksweise erhalten',
	'body' => 'Du hast eine Verwarnung wegen deiner Ausdrucksweise auf dieser Seite erhalten.

Wir dulden keine Rücksichtslosigkeit oder Obszönität gegenüber unseren Moderatoren und Mitgliedern.

{PUNISHMENTS}

Bitte beachte, dass alle weiteren Verstöße die im laufe der Zeit angesammelt werden irgendwann zu einer Limitierung der Nutzungsrechte dieser Seite führen können.',
);
$txt['tpl_infraction_spam'] = array(
	'desc' => 'Spam',
	'subject' => 'Du hast eine Verwarnung wegen spamming erhalten',
	'body' => 'Du hast eine Verwarnung aufgrund von Spambeiträgen in diesem Forum erhalten.

Spam ist leider ein sehr weit verbreitetes Problem und erfordert einen enormen Aufwand um ihn zu kontrollieren.
Darum schätzen wir es auch nicht, dass du unsere Seite mit Spam verseuchst.

{PUNISHMENTS}

Alle weiteren Verstöße können weitere Verwarnungen nach sich ziehen und sich auf dein Benutzerkonto auswirken.',
);

$txt['no_punishment'] = 'Es wurde keine Aktion durch dieses Ereignis hervorgerufen, wurde jedoch in deinem Benutzerkonto vermerkt.';
$txt['received_punishments'] = array(
	1 => 'Für dieses Ereignis hast du folgende Strafe auferlegt bekommen:',
	'n' => 'Für dieses Ereignis hast du folgende Strafen auferlegt bekommen:',
);
$txt['punishments_will_expire'] = array(
	1 => 'Diese Strafe bleibt in deinem Benutzerkonto gespeichert bis {EXPIRY}.',
	'n' => 'Diese Strafen bleiben in deinem Benutzerkonto gespeichert bis {EXPIRY}.',
);
$txt['punishments_no_expire'] = array(
	1 => 'Diese Strafe hat kein Ablaufdatum.',
	'n' => 'Diese Strafen haben kein Ablaufdatum.',
);

$txt['pun_infraction_no_avatar'] = 'Dein Avatar (Benutzerbild) wird versteckt';
$txt['pun_infraction_no_sig'] = 'Deine Signatur wird versteckt';
$txt['pun_infraction_scramble'] = 'Deine Beiträge werden verschlüsselt';
$txt['pun_infraction_disemvowel'] = 'Deinen Beiträgen werden die Vokale entzogen';
$txt['pun_infraction_moderate'] = 'Deine Beiträge erfordern zukünftig die Genehmigung durch einen Moderator';
$txt['pun_infraction_post_ban'] = 'Dir wird die Berechtigung um Beiträge schreiben zu können entzogen';
$txt['pun_infraction_pm_ban'] = 'Du darfst keine Privaten Nachrichten mehr verschicken';
$txt['pun_infraction_soft_ban'] = 'Einige Bereiche dieser Seite werden für dich nicht mehr verfügbar sein';
$txt['pun_infraction_hard_ban'] = 'Du bist auf dieser Seite komplett gesperrt';
$txt['pun_points'] = array(
	1 => 'Dein Punktestand hat sich durch einen Verstoß auf {POINTS} Punkte erhöht. Dies kann zukünftig zu weitreichenden Strafen führen.',
	'n' => 'Dein Punktestand hat sich durch einen Verstoß um %1$s Punkte erhöht. Deine Geamtpunktzahl durch Verstöße beträgt aktuell {POINTS} Punkte. Dies kann zukünftig zu weitreichenden Strafen führen.',
);
$txt['pun_because_message'] = 'Du erhältst eine Verwarnung aufgrund des folgenden Beitrags: {LINK}';

$txt['error_no_name_given'] = 'Jede Verwarnung muss eine Bezeichnung als Referenz aufweisen.';
$txt['error_no_text'] = 'Du hast eine benutzerdefinierte Verwarnungsnachricht ausgewählt, aber keinen Text eingegeben.';
$txt['error_invalid_duration'] = 'Du hast vergessen ein Ablaufdatum für diese Verwarnung anzugeben.';
