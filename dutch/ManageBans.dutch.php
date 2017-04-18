<?php

$txt['ban_general_description'] = 'In this area you can manage bans against users who are troublesome, be it spammers or other miscreants.';
$txt['ban_description_hard'] = 'This area allows you to manage "hard" bans, which stop users straight away and prevent them going further.';
$txt['ban_description_soft'] = 'This area allows you to manage "soft" bans to users, which will not prevent them from using the forum, but it does slow them down and gently discourages them from being troublemakers, with the forum appearing to have technical difficulties occasionally.';
$txt['ban_description_add'] = 'This area allows you to add a new ban to your forum.';
$txt['ban_description_edit'] = 'This area allows you to edit a ban in your forum.';
$txt['ban_description_settings'] = 'This area allows you to change the settings that apply to bans, predominantly that affect "soft" bans.';

$txt['ban_type'] = 'Soort';
$txt['ban_type_id_member'] = 'Gebruiker';
$txt['ban_type_member_name'] = 'Naam Gebruiker';
$txt['ban_type_email'] = 'Email';
$txt['ban_type_ip_address'] = 'IP';
$txt['ban_type_hostname'] = 'Hostname';

$txt['ban_content'] = 'Verbannen';
$txt['ban_added'] = 'Toegevoegd op';
$txt['ban_added_by'] = 'Toegevoegd door';
$txt['ban_invalid_member'] = 'Gebruikers id %1$s is verbannen maar bestaat niet.';

$txt['ban_id_member_is'] = 'De Gebruiker: <a href="%1$s">%2$s</a>';

$txt['ban_member_names_beginning'] = 'Gebruikers naam begint met %1$s %2$s';
$txt['ban_member_names_ending'] = 'Gebruikers naam eindigt op %1$s %2$s';
$txt['ban_member_names_containing'] = 'Gebruikers naam bevat %1$s %2$s';
$txt['ban_member_names_matching'] = 'Naam van de gebruiker: %1$s %2$s';
$txt['ban_member_names_case_matters'] = '(case matters)';

$txt['ban_entire_domain'] = 'Iedere email van %1$s';
$txt['ban_entire_tld'] = 'Iedere email van elk %1$s domein';
$txt['ban_gmail_style_email'] = 'Elke variatie van %1$s@%2$s';

$txt['ban_entire_hostname'] = 'Elke gebruiker van %1$s';

$txt['ban_no_entries'] = 'Er zijn momenteel geen bans van kracht.';

$txt['ban_remove_selected'] = 'Verwijder geselecteerde';
$txt['ban_remove_selected_confirm'] = 'Weet u zeker dat u de geselecteerde bans wilt verwijderen?';
$txt['ban_remove_single'] = 'Verwijder deze ban';
$txt['ban_remove_single_confirm'] = 'Weet u zeker dat u deze geselecteerde ban wilt verwijderen?';

$txt['ban_hardness_header'] = 'Soort ban';
$txt['ban_hardness_title'] = 'Welk soort ban?';
$txt['ban_hardness_soft'] = 'Soft ban';
$txt['ban_hardness_hard'] = 'Hard ban';
$txt['ban_hardnesses'] = 'Soft ban zal niet voorkomen dat een gebruiker toegang krijgt tot het forum,soft-ban op IP-adressen kunnen worden ingesteld om de registratie uit te schakelen. Harde bans zijn direct van kracht de gebruiker wordt direct verbannen zonder enige vertraging.';

$txt['ban_type_header'] = 'Ban criteria';
$txt['ban_type_title'] = 'Waarop is deze ban op gebaseerd ?';
$txt['ban_type_description'] = 'Verschillende opties zijn beschikbaar, afhankelijk van het soort ban .';
$txt['ban_type_title_id_member'] = 'Een specifieke gebruiker';
$txt['ban_type_title_member_name'] = 'Een of meerdere gebruikers namen';
$txt['ban_type_title_email'] = 'Een email adres of email domein';
$txt['ban_type_title_ip_address'] = 'Een ip adres of een reeks (serie) ip adressen';
$txt['ban_type_title_hostname'] = 'Een hostnaam of een reeks hostnamen';

$txt['ban_type_id_member_type'] = 'Wie wil je verbannen?';

$txt['ban_type_member_name'] = 'Welk soort gebruikersnamen wilt u verbannen?';
$txt['ban_member_names_select_beginning'] = 'Namen die beginnen met:';
$txt['ban_member_names_select_ending'] = 'Namen die eindigen met:';
$txt['ban_member_names_select_containing'] = 'Namen die bevatten:';
$txt['ban_member_names_select_matching'] = 'Namen die verwijzen naar:';

$txt['ban_member_note'] = 'Note: dit zal niet iedereen die toevallig deze naam heeft blokkeren om gebruik te maken van het forum ; Het is meer preventief om te voorkomen dat mensen dergelijke namen gaan gebruiken.';

$txt['ban_member_case_sensitive'] = 'Hoofdletter gevoelig?';
$txt['ban_member_case_sensitive_desc'] = 'Wanneer hoofdletter gevoelig , "Admin" is niet hetzelfde als "admin" Normaal gesproken zou dit geen problemen moeten geven (laat het uitgevinkt)';

$txt['ban_type_email_type'] = 'Welke soort email wil je verbannen?';
$txt['ban_type_email_type_specific'] = 'Een of meerdere specifieke email adressen';
$txt['ban_type_email_type_domain'] = 'Een geheel domein';
$txt['ban_type_email_type_tld'] = 'Een gehele reeks domeinen';
$txt['ban_type_email_content'] = 'Adres(sen) om te verbannen ';
$txt['ban_email_gmail_style'] = 'GMail style domein?';

$txt['ban_use_htaccess'] = 'Als het mogelijk is, moet u gebruik maken van de Toestaan / Weigeren regels in uw server (bijvoorbeeld in Apache .htaccess bestanden) omdat dit efficiënter is.';
$txt['ban_type_ip_address_type'] = 'Welke soort IP adres wil je uitsluiten verbannen?';
$txt['ban_type_ip_range'] = 'Een hele reeks IP adressen uitsluiten verbannen?';
$txt['ban_type_range_start'] = 'Begin:';
$txt['ban_type_range_end'] = 'Eind:';
$txt['ban_type_ip_address_details'] = 'IP addres(en) om uit te sluiten verbannen:';

$txt['ban_type_hostname'] = 'Welke Hostnaam wil je verbannen?';
$txt['ban_type_hostname_wildcard'] = 'U kunt * gebruiken om aan te geven om het even wat zal worden aanvaard in de plaats, bijvoorbeeld alle * .net hostnames, of meer selectief zo iets als * .comcast.net, of zelfs * .somebranch.example.com.';

$txt['ban_information'] = 'Opmerkingen omtrend de gegeven ban';
$txt['ban_reason'] = 'Reden voor deze  ban';
$txt['ban_reason_subtext'] = 'Dit is aan te bevelen zodat er later op terug gevallen kan worden.';
$txt['ban_message'] = 'Bericht die getoond word aan de gebruiker';
$txt['ban_message_subtext'] = 'Dit is optioneel,en indien van toepassing,zal worden getoond aan de gebruikers om hen te vertellen waarom.';

$txt['ban_no_modify'] = 'U kunt een hostname verbod niet wijzigen wanneer hostnaam lookups zijn uitgeschakeld.';

$txt['ban_invalid_type'] = 'U heeft niet een geldig soort verbod aangegeven.';
$txt['ban_invalid_member'] = 'U heeft niet een geldige gebruiker aangegeven.';
$txt['ban_invalid_membername'] = 'U heeft geen geldige naam aangegeven.';
$txt['ban_invalid_email'] = 'U heeft geen geldig email adres aangegeven.';
$txt['ban_invalid_ip_address'] = 'U heeft geen geldig Ip adres of IP reeks aangegeven.';
$txt['ban_invalid_hostname'] = 'U heeft geen geldige Hostnaam aangegeven.';
$txt['ban_invalid_reason'] = 'U heeft geen specifieke reden aangegeven.';

$txt['ban_membername_style'] = 'Bij het toepassen van lidnaams ban, waarop moet dit worden toegepast?';
$txt['ban_membername_style_username'] = 'User names onlyAlleen gebruikers namen';
$txt['ban_membername_style_display'] = 'Display names onlyDe te tonen naam';
$txt['ban_membername_style_both'] = 'Zowel gebruikersnaam als de te tonen naam';

$txt['softban_blankpage'] = 'Soft-bans worden na de opheffen opgeschoond';
$txt['softban_percent_subtext'] = 'In percentage, van 0 tnaar 100%.';
$txt['softban_nosearch'] = 'Soft-bans kunnen de zoekfunctie niet gebruiken';

$txt['softban_disableregistration'] = 'Moet de registratie worden uitgeschakeld voor soft-bans?';
$txt['softban_disableregistration_desc'] = 'Soft-bans kunnen IP-adressen bevatten,als je op deze manier de registratie wilt te beperken .';

$txt['softban_redirect'] = 'Verwijzen naar een andere pagina';
$txt['softban_redirect_subtext'] = 'Werkt alleen wanneer URL hieronder is ingevoerd.';
$txt['softban_redirect_url'] = 'URL waar gebruiker naar toe worden verwezen';

$txt['softban_delay_min'] = 'Laad vertraging in seconden - minimum';
$txt['softban_delay_max'] = 'Laad vertraging in seconden - maximum';
$txt['softban_delay_max_subtext'] = 'Een willekeurige tijd tussen de twee zal worden geselecteerd, en soft-verbannen gebruikers zal moeten wachten voor die periode van tijd voordat de pagina wordt geladen. Dit is beperkt tot 15 seconden nodig om server load problemen te voorkomen.';

