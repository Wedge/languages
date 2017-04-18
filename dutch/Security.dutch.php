<?php

$txt['http_error'] = 'HTTP fout';

// Titles for the errors
$txt['behav_400'] = 'Een ongeldige aanvraag werd ontvangen!';
$txt['behav_403'] = 'Je hebt geen toegangsrechten tot deze server.';
$txt['behav_417'] = 'Verwachting faalde.';

$txt['behavior_admin'] = 'Veiligheidsfout';
$txt['behavior_header'] = 'Onze excuses voor dit ongemak, maar we kunnen uw aanvraag niet vervolledigen; als onderdeel van de beveiliging tegen het verspreiden slechte zaken zoals spam  en malware, vond het intern beveiligingssysteem van deze website mogelijks verdachte bewegingen die overeen komen met deze van gekende spammers en/of malware verdelers. Gelukkig is het probleem vrij gemakkelijk op te lossen,<br><br>Deze informatie werd voorgedragen door  <a href="http://bad-behavior.ioerror.us/">Bad Behavior</a>.';

$txt['behavior_false_ua'] = 'Bij iedere \'page request\' welke je browser verstuurt zou het een User-Agent - een tekenreeks om zich te identificeren bij de server - moeten versturen. De user-agent in deze aanvraag was vals; als je het instelt zoals de browser het verwacht, zou je deze site moeten kunnen benaderen.';
$txt['behavior_misconfigured_proxy'] = 'Dit probleem is meestal gekoppeld aan proxy servers en systemen die niet goed zijn ingesteld. Normaal gezien moet je de software verwijderen, gezien het simpelweg uitzetten meestal niet voldoende is. Als dat geen optie is contacteer de server administrator.';
$txt['behavior_misconfigured_privacy'] = 'Dat probleem kan voorkomen wanneer er browser privacy software of personal firewall software was die niet correct werd ingesteld, of welke bugs bevat. Als je iets zoals dat gebruikt, dan moet je het ofwel uitzetten of de instellingen aanpassen alvorens opnieuw te proberen. (Bv: als je Norton Internet Security gebruikt heeft het een Stealth Mode Browsing optie die problemen kan geven met normale internet operaties).';
$txt['behavior_malware'] = 'Dit probleem kan veroorzaakt zijn door virussen of spyware op je systeem, of door kwaadaardige code die beweert een anti-virus of anti-spyware programma te zijn. Vergewis je ervan dat je ECHTE anti-virus en anti-spyware software op je computer hebt, dat ze up-to-date zijn en dat je een volledige systeem scan hebt gerund met elk van hen. Eens je systeem vrij is van virussen en spyware probeer je je aanvraag opnieuw.<br><br>Als een eerste maatregel kan <a href="http://www.microsoft.com/security_essentials/">Microsoft Security Essentials</a> een nuttige en gratische toevoeging zijn als je nog geen zulke tools geïnstalleerd hebt of als die niet beschikbaar zijn, maar het is verre van compleet.';
$txt['behavior_opera_bug'] = 'Sommige oudere versies van de Opera browser hebben dit gedrag vertoond. Gelieve te updaten naar de recentste browser.';
$txt['behavior_chrome_bug'] = 'Sommige versies  van Chrome hebben een inherente fout die dat kan veroorzaken. Een mogelijke oplossing is om de browser geschiedenis te wissen en dan de pagina terug te laden.';

$txt['behavior_footer'] = 'Indien de vorige stappen niet hielpen, kan je de webmaster via e-mail - {email_address} - contacteren en verwijzen naar incident nummer {incident}.';
// Begin the rules as defined in Security.php
// Each rule has a _desc (the text to use, complete with <br> as appropriate) and _log (the text to display in the admin log)

$txt['behav_blacklist_desc'] = 'Je hebt geen toegangsrechten tot deze server.';
$txt['behav_blacklist_log'] = 'Een geblackliste user-agent vertoond';

$txt['behav_not_cloudflare_desc'] = 'Je hebt geen toegangsrechten tot deze server.';
$txt['behav_not_cloudflare_log'] = 'De user-agent identificeerde zichzelf als CloudFlare. Kan deze vordering niet onderbouwen.';

$txt['behav_expect_header_desc'] = 'De aanvraag bevatte een verwachting. Jammer genoeg kon die niet beheerd worden - gelieve opnieuw je aanvraag te proberen. Dat is meestal het gevolg van het gebruik van software die verbannen werd en de toegang tot de server ontzegd omdat er kwaadaardige activiteiten geobserveerd werden. Je wordt aangeraden deze software te verwijderen en de auteur ervan te verwittigen. Ondertussen doe je er best aan een conventionele browser zoals Firefox, Chrome, Opera, Internet Explorer of Safari te gebruiken.';
$txt['behav_expect_header_log'] = 'Aanvraag bevat \'Expect\' header; een herzenden aangevraagd.';

$txt['behav_no_ua_in_post_desc'] = 'Uw browser stuurde een aanvraag voor een pagina, die niet geldig is.';
$txt['behav_no_ua_in_post_log'] = 'User-agent identificeerde zichzelf niet, vereist bij posting.';

$txt['behav_content_range_desc'] = 'Uw browser stuurde een aanvraag voor een pagina, die niet geldig is.';
$txt['behav_content_range_log'] = 'Aanvraag bevatte \'Range\' of \'Content-Range\' en zou deze niet mogen bevatten.';

$txt['behav_empty_refer_desc'] = 'Uw browser stuurde een aanvraag voor een pagina, die niet geldig is.';
$txt['behav_empty_refer_log'] = 'Aanvraag specifieerde \'Referer\', maat Referer was blank.';

$txt['behav_invalid_refer_desc'] = 'Uw browser stuurde een aanvraag voor een pagina, die niet geldig is.';
$txt['behav_invalid_refer_log'] = 'Aanvraag specifieerde \'Referer\', maar Referer bleek corrupt.';

$txt['behav_alive_close_desc'] = 'Uw browser stuurde een aanvraag voor een pagina, die niet geldig is.';
$txt['behav_alive_close_log'] = 'Aanvraag specificeerde \'Connection\', maar bevatte ongeldige waardes.';

$txt['behav_wrong_keep_alive_desc'] = 'Uw browser stuurde een aanvraag voor een pagina, die niet geldig is.';
$txt['behav_wrong_keep_alive_log'] = 'Aanvraag specifieerde \'Keep-Alive\' maar vorm was corrupt.';

$txt['behav_rogue_chars_desc'] = 'Je hebt geen toestemming om deze server te benaderen. Kwaadaardige informatie werd gevonden in de aanvraag.';
$txt['behav_rogue_chars_log'] = 'Kwaadaardige code gevonden in aanvraag.';

$txt['behav_invalid_via_desc'] = 'Je blijkt een proxy server te gebruiken en die hier niet is toegelaten.';
$txt['behav_invalid_via_log'] = 'Aanvraag bevatte ongeldige \'via\' header.';

$txt['behav_banned_via_proxy_desc'] = 'Je blijkt een proxy server te gebruiken en dat is hier niet toegelaten.';
$txt['behav_banned_via_proxy_log'] = 'Aanvraag vanuit een verbannen proxy server.';

$txt['behav_banned_xaa_proxy_desc'] = 'Je blijkt een proxy server te gebruiken die hier niet is toegelaten.';
$txt['behav_banned_xaa_proxy_log'] = 'Ongeldige headers \'X-Aaaaaaaaaa\' of \'X-Aaaaaaaaaaaa\' gevonden.';

$txt['behav_bot_rfc2965_desc'] = 'De cookies ontvangen door de server waren niet geldig. Gelieve je software bij te werken, of contacteer de software maker/uitgever betreffende het niet conform zijn volgens de huidige internet standaarden (specifiek, RFC 2965)';
$txt['behav_bot_rfc2965_log'] = 'Bot niet conform RFC 2965.';

$txt['behav_proxy_connection_desc'] = 'Uw browser stuurde een aanvraag voor een pagina, die niet geldig is.';
$txt['behav_proxy_connection_log'] = 'Aanvraag bevatte verboden header \'Proxy-Connection\'.';

$txt['behav_pragma_desc'] = 'Uw browser stuurde een aanvraag voor een pagina, die niet geldig is.';
$txt['behav_pragma_log'] = 'Header \'Pragma\' zonder \'Cache-Control\' verboden voor HTTP/1.1 aanvragen.';

$txt['behav_te_error_desc'] = 'Uw browser stuurde een aanvraag voor een pagina, die niet geldig is.';
$txt['behav_te_error_log'] = 'Header \'TE\' aanwezig maar TE niet gespecifieerd in \'Connection\' header.';

$txt['behav_invalid_range_desc'] = 'Het programma dat gebruikt om deze server te benaderen is niet toegestaan. Gelieve een ander programma, ideaal zou zijn een browser zoals Firefox, Internet Explorer, Opera, Safari of Chrome te gebruiken.';
$txt['behav_invalid_range_log'] = 'Aanvraag bevatte verboden header \'Range\'.';

$txt['behav_no_accept_desc'] = 'Uw browser stuurde een aanvraag voor een pagina, die niet geldig is.';
$txt['behav_no_accept_log'] = 'Aanvraag bevatte \'Accept\' header niet.';

$txt['behav_invalid_win_desc'] = 'Uw aanvraag werd geweigerd; de details van je browser zijn ongeldig.';
$txt['behav_invalid_win_log'] = 'User-agent beweert IE te zijn maar met gemanipuleerde header.';

$txt['behav_te_not_msie_desc'] = 'Uw aanvraag was ongeldig; als je de Opera browser gebruikt zou het zich moeten identificeren als Opera in plaats van zich voor te doen als iets anders.';
$txt['behav_te_not_msie_log'] = 'User-agent beweert IE te zijn, maar Connection: TE is aanwezig echter niet gebruikt door MSIE.';

$txt['behav_not_msnbot_desc'] = 'Uw aanvraag is niet geldig: de bewering dat de aanvraag verbonden is met een grote zoek-engine kon niet worden bevestigd.';
$txt['behav_not_msnbot_log'] = 'User-agent identificeerde zichzelf als msnbot, kan de vordering niet onderbouwen.';

$txt['behav_not_yahoobot_desc'] = 'Uw aanvraag is niet geldig: de bewering dat de aanvraag verbonden is met een grote zoek-engine kon niet worden bevestigd.';
$txt['behav_not_yahoobot_log'] = 'User-agent identificeerde zichzelf als Yahoo, kan de vordering niet onderbouwen.';

$txt['behav_not_googlebot_desc'] = 'Uw aanvraag is niet geldig: de bewering dat de aanvraag verbonden is met een grote zoek-engine kon niet worden bevestigd.';
$txt['behav_not_googlebot_log'] = 'User-agent identificeerde zichzelf als Google, kan de vordering niet onderbouwen.';

$txt['behav_not_baidu_desc'] = 'Uw aanvraag is niet geldig: de bewering dat de aanvraag verbonden is met een grote zoek-engine kon niet worden bevestigd.';
$txt['behav_not_baidu_log'] = 'User-agent identificeerde zichzelf als Baidu, kan de vordering niet onderbouwen.';

$txt['behav_offsite_form_desc'] = 'Gegevens werden aangeboden aan deze website van buiten de website: dat is niet toegelaten.';
$txt['behav_offsite_form_log'] = 'Formulier blijkt van buiten de website om gestuurd te zijn.';
