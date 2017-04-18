<?php
// Version: 2.0; ManageSettings

$txt['settings_desc'] = 'Op deze pagina kunt u de instellingen van de functies en fundamentele opties in je forum wijzigen. Klik op de help icoontjes voor meer informatie over een instelling.';

$txt['allow_guestAccess'] = 'Sta gasten toe het forum te bekijken';
$txt['userLanguage'] = 'Activeer voorkeur taalpakket';
$txt['time_offset'] = 'Totale tijd gecompenseerd';
$txt['time_offset_subtext'] = '(toegevoegd aan het lid specifieke opties)';
$txt['default_timezone'] = 'Tijdzone server';
$txt['failed_login_threshold'] = 'Drempel voor mislukte inlogpogingen';
$txt['enable_quick_login'] = 'Laat een snelle inlog op iedere pagina zien.';
$txt['age_restrictions'] = 'Minimale leeftijd restictie';
$txt['trackStats'] = 'Dagelijkse Statistieken activeren';
$txt['hitStats'] = 'Houdt het aantal pageviews bij (statistieken moet actief staan)';
$txt['enableCompressedOutput'] = 'Gecomprimeerde output activeren';
$txt['enableCompressedData'] = 'Gecomprimeerde JS/CSS ';
$txt['obfuscate_filenames'] = 'JS/CSS bestandsnamen schaduw effect';
$txt['minify'] = 'Javascript bestanden verkleinen met.....';
$txt['minify_none'] = 'Niets verkleinen|Nuttig voor debugging.';
$txt['minify_jsmin'] = 'JSMin|De veiligste keuze.';
$txt['minify_packer'] = 'Packer|Beste compromie.A.u.b bekijk eerst &lt;br&gt;help Popup functie.';
$txt['minify_closure'] = 'Google Closure|A.u.b bekijk eerst de help Popup functie &lt;br&gt:';
$txt['jquery_origin'] = 'jQuery locatie bron';
$txt['jquery_local'] = 'Deze server (samengevoegd met script.js)';
$txt['jquery_jquery'] = 'jQuery CDN';
$txt['jquery_google'] = 'Google CDN';
$txt['jquery_microsoft'] = 'Microsoft CDN';
$txt['db_show_debug'] = 'Toon debug informatie';
$txt['db_show_debug_who'] = 'Aan welke gebruikers debug informatie tonen:';
$txt['db_show_debug_who_log'] = 'Aan welke gebruikers debug query log tonen:';
$txt['db_show_debug_admin'] = 'Alleen Beheerder ';
$txt['db_show_debug_admin_mod'] = 'Beheerders en moderators';
$txt['db_show_debug_regular'] = 'Alle ingelogde gebruikers';
$txt['db_show_debug_any'] = 'Alle gebruikers,inclusief gasten';
$txt['db_show_debug_none'] = 'Aan niemand';

$txt['databaseSession_enable'] = 'Gebruik database-gebaseerde sessies';
$txt['databaseSession_loose'] = 'Browsers mogen terug naar pagina\'s uit de cache';
$txt['databaseSession_lifetime'] = 'Seconden voordat een ongebruikte sessie ongeldig wordt';
$txt['enableErrorLogging'] = 'Activeer het loggen van fouten';
$txt['enableErrorPasswordLogging'] = 'Verkeerd gebruikt gebruikers wachtwoorden log';
$txt['enableError404Logging'] = 'Log 404 (bestand niet gevonden) fouten in het fouten log';
$txt['enableErrorQueryLogging'] = 'Volledige query\'s in het foutenlog plaatsen';
$txt['logPruning'] = 'Pruning log';
$txt['log_enabled_moderate'] = 'Moderatie actielog inschakelen';
$txt['log_enabled_moderate_subtext'] = 'Di houdt in het verwijderen van berichten,topics verplaatsen etc.';
$txt['log_enabled_admin'] = 'Beheerder actielog inschakelen';
$txt['log_enabled_admin_subtext'] = 'Dit houdt in zaken zoals het aanmaken van nieuwe boards';
$txt['log_enabled_profile'] = 'Loggen van bewerkingen profielen van leden inschakelen';
$txt['log_enabled_profile_subtext'] = 'Dit houdt in veranderen van namen etc';
$txt['pruningOptions'] = 'Schakel het opschonen van logingangen in';
$txt['pruneZeroDisable'] = '(0 om uit te schakelen)';
$txt['pruneErrorLog'] = 'Verwijder ingangen uit het foutenlog ouder dan<div class="smalltext">(0 om uit te schakelen)</div>';
$txt['pruneModLog'] = 'Verwijder ingangen uit het moderatielog ouder dan<div class="smalltext">(0 om uit te schakelen)</div>';
$txt['pruneReportLog'] = 'Verwijder ingangen uit het moderatierapportagelog ouder dan<div class="smalltext">(0 om uit te schakelen)</div>';
$txt['pruneScheduledTaskLog'] = 'Verwijder ingangen uit het geplande taken-log ouder dan<div class="smalltext">(0 om uit te schakelen)</div>';
$txt['pruneSpiderHitLog'] = 'Verwijder ingangen uit het spiderlog ouder dan<div class="smalltext">(0 om uit te schakelen)</div>';
$txt['cookieTime'] = 'Standaardduur van het logincookie (in minuten, groter dan 5)';
$txt['localCookies'] = 'Sla cookies lokaal op<div class="smalltext">(SSI zal niet werken met deze optie aan)</div>';
$txt['localCookies_subtext'] = '(SSI zal niet goed werken als dit aan staat)';
$txt['globalCookies'] = 'Cookies onafhankelijk van het subdomein gebruiken<div class="smalltext">(schakel lokaal opslaan van cookies eerst uit!)</div>';
$txt['globalCookies_subtext'] = '(schakel lokale cookies eerst uit)';
$txt['secureCookies'] = 'Forceer veilige cookies<div class="smalltext">(Alleen voor gebruik in combinatie met HTTPS - anders niet gebruiken!)</div>';
$txt['secureCookies_subtext'] = '(Dit geldt alleen als u gebruik maakt van HTTPS-anders niet gebruiken!)';
$txt['send_validation_onChange'] = 'E-mail een nieuw wachtwoord als een lid zijn / haar e-mailadres wijzigt';
$txt['approveAccountDeletion'] = 'Vereis goedkeuring van een forumbeheerder wanneer een lid zijn account verwijdert';
$txt['autoOptMaxOnline'] = 'Maximaal aantal gebruikers online tijdens optimalisatie<div class="smalltext">(0 voor geen limiet)</div>';
$txt['autoOptMaxOnline_subtext'] = '(0 geen limiet)';
$txt['autoFixDatabase'] = 'Automatisch defecte tabellen repareren';
$txt['allow_disableAnnounce'] = 'Gebruikers toestaan om notificatie van aankondigingen uit te schakelen';
$txt['disallow_sendBody'] = 'Sta geen berichttekst in notificaties toe';
$txt['max_pm_recipients'] = 'Maximum toegestane aantal ontvangers per persoonlijk bericht';
$txt['max_pm_recipients_subtext'] = '(0 voor geen limiet,met uitzondering van beheerder)';
$txt['pm_posts_verification'] = 'Postaantal waaronder gebruikers verificatie moeten passeren alvorens ze persoonlijke berichten kunnen verzenden';
$txt['pm_posts_verification_subtext'] = '(0 voor geen limiet, moderators uitgezonderd)';
$txt['pm_posts_per_hour'] = 'Aantal persoonlijke berichten dat een gebruiker mag verzenden in een uur tijd';
$txt['pm_posts_per_hour_subtext'] = '(0 voor geen limiet, moderators uitgezonderd)';
$txt['home_url'] = 'Website adres';
$txt['home_url_subtext'] = 'Als uw forum onderdeel is van een grotere site, zet het adres van die site dan hier, en de tab Home zal daar dan naar verwijzen, in tegenstelling tot de voorpagina';
$txt['home_link'] = 'Link de titel naar de startpagina';
$txt['home_link_subtext'] = 'De forum titel aan de bovenkant van de pagina is ook een link terug naar de startpagina. Aanklikken van dit vak maakt het terug koppelen naar het algemene website adres mogelijk';
$txt['site_slogan'] = 'Website motto';
$txt['site_slogan_desc'] = 'Voeg uw eigen tekst voor een motto hier in. Leeg laten voor een leeg #logo, die u e.v.t via CSS kunt aanpassen tonen.';
$txt['header_logo_url'] = 'Logo URL van de afbeelding';
$txt['header_logo_url_desc'] = 'Laat leeg om forumnaam of standaard logo te tonen.';
$txt['todayMod'] = 'Schakel korte datumnotaties in';
$txt['today_disabled'] = 'Uitgeschakeld';
$txt['today_only'] = 'Alleen Vandaag';
$txt['yesterday_today'] = 'Vandaag &amp; Gisteren';
$txt['timeLoadPageEnable'] = 'Toon de tijd benodigd om de pagina op te bouwen';
$txt['disableHostnameLookup'] = 'Schakel het opzoeken van hostnamen uit';
$txt['who_enabled'] = 'Wie is online activeren';
$txt['display_who_viewing'] = 'Toon de huidige kijkers board index en onderwerpen';
$txt['who_display_viewing_off'] = 'Niet laten zien';
$txt['who_display_viewing_numbers'] = 'Alleen getallen laten zien';
$txt['who_display_viewing_names'] = 'Leden namen tonen';
$txt['show_stats_index'] = 'Statistieken board index tonen';
$txt['show_latest_member'] = 'Toon laatste lid in board index';
$txt['show_avatars'] = 'Toon gebruikers avatars in berichten';
$txt['show_signatures'] = 'Toon gebruikers handtekeningen in berichten';
$txt['show_blurb'] = 'Toon persoonlijke teksten in berichten';
$txt['show_gender'] = 'Toon geslachts indicatie in berichten';
$txt['show_board_desc'] = 'Toon board beschrijvingen ';
$txt['show_children'] = 'Toon sub-boards op elke pagina in het forums, niet alleen de eerste.';

$txt['pm_enabled'] = 'Persoonlijke berichten tussen de leden onderling inschakelen';
$txt['pm_read'] = 'Groepen toegestaan ​​om hun berichten te lezen';
$txt['pm_send'] = 'Groepen toegestaan ​​om berichten te verzenden';
$txt['save_pm_draft'] = 'Groepen toestaan om concepten op te slaan';
$txt['auto_save_pm_draft'] = 'Groepen waarvan concepten automatisch opgeslagen worden';
$txt['pm_draft_other_settings'] = 'U kunt ook instellen hoe vaak ontwerpen worden opgeslagen en of oude concepten worden verwijderd uit de <a href="<URL>?action=admin;area=postsettings;sa=drafts">Concepten instellingen</a> pagina.';

$txt['likes_enabled'] = '\'\'Like\'\' systeem inschakelen';
$txt['likes_own_posts'] = 'Gebruikers mogen hun eigen berichten \'\'Like¨';

$txt['boardurl'] = 'Forum URL';

$txt['caching_information'] = '<div class="aligncenter underline"><strong>Belangrijk! Lees dit eerst alvorens je de optie inschakeld.</strong></div><br />
	Wedge ondersteunt caching door middel van acceleratorsoftware. De accelerators die op dit moment ondersteund worden zijn:<br>
	<ul class="normallist">
		<li>APC</li>
		<li>Memcached</li>
		<li>Zend Platform/Performance Suite (niet Zend Optimizer)</li>
		<li>XCache</li>
	</ul>
	Caching zal alleen werken op je server als je PHP met &eacute;&eacute;n van bovenstaande optimalisatiesoftware hebt ge&iuml;nstalleerd, of Memcached server beschikbaar is.
	Als er geen optimalisatie software is,Wedge zal dan bestand gebaseerde caching doen <br><br>
	Wedge werkt met caching op verschillende niveaus. Hoe hoger het niveau dat ingeschakeld is, hoe meer CPU-tijd gebruikt zal worden om
	gecachete informatie te verkrijgen. Als caching op jouw server beschikbaar is, wordt het aangeraden om niveau 1 eerst te proberen.
	<br><br>
	NB: om Memcached te kunnen gebruiken, dien je de serverdetails als kommagescheiden lijst in te vullen in het onderstaande veld.
	Een mogelijke configuratie zou bijvoorbeeld zijn:<br>
	&quot;server1,server2,server3:port,server4&quot;<br><br>
	Merk op dat wanneer er geen poort gespecificeerd is, Wedge poort 11211 zal gebruiken. Wedge zal proberen de laadtijden over de servers te verdelen.
	<br><br>
	%1$s';

$txt['detected_no_caching'] = '<strong class="alert">Wedge heeft geen compatibele accelerator op jouw server kunnen vinden.</strong>';
$txt['detected_APC'] = '<strong style="color: green">Wedge heeft gedetecteerd dat APC op je server is ge&iuml;nstalleerd.</strong>';
$txt['detected_Zend'] = '<strong style="color: green">Wedge heeft gedetecteerd dat Zend op je server is ge&iuml;nstalleerd.</strong>';
$txt['detected_Memcached'] = '<strong style="color: green">Wedge heeft gedetecteerd dat Memcached op je server is ge&iuml;nstalleerd.</strong>';
$txt['detected_XCache'] = '<strong style="color: green">Wedge heeft gedetecteerd dat XCache op je server is ge&iuml;nstalleerd.</strong>';

$txt['cache_enable'] = 'Cachingniveau';
$txt['cache_off'] = 'Geen caching';
$txt['cache_level1'] = 'Niveau 1 caching (aanbevolen)';
$txt['cache_level2'] = 'Niveau 2 caching';
$txt['cache_level3'] = 'Niveau 3 caching (niet aanbevolen)';

$txt['cache_type'] = 'Caching soort';
$txt['cache_type_file'] = 'Bestandgebaseerde caching';
$txt['cache_memcached'] = 'Memcache-instellingen';

$txt['loadavg_warning'] = '<span class="error">Attentie: de instellingen hieronder dienen met zorg bewerkt te worden. Als deze te laag ingesteld worden, kan dat je forum <strong>onbruikbaar</strong> maken! Het loadaverage is momenteel <strong>%01.2f</strong></span>';
$txt['loadavg_enable'] = 'Schakel load-balancering middels load-gemiddelden in';
$txt['loadavg_auto_opt'] = 'Drempel voor het uitschakelen van automatische database-optimalisatie';
$txt['loadavg_search'] = 'Drempel voor het uitschakelen van de zoekfunctie';
$txt['loadavg_allunread'] = 'Drempel voor het uitschakelen van alle ongelezen topics';
$txt['loadavg_unreadreplies'] = 'Drempel voor het uitschakelen van alle ongelezen reacties';
$txt['loadavg_show_posts'] = 'Drempel voor het uitschakelen van weergave van berichten van &eacute;&eacute;n gebruiker';
$txt['loadavg_forum'] = 'Drempel voor het <strong>volledig</strong> afsluiten van het forum';
$txt['loadavg_disabled_conf'] = '<span class="error">Ondersteuning voor load-balancing is uitgeschakeld door de configuratie van je host.</span>';

$txt['news_settings_submit'] = 'Veilig';
$txt['xmlnews_enable'] = 'Inschakelen Atom feeds';
$txt['xmlnews_maxlen'] = 'Maximale lengte van een bericht:';
$txt['xmlnews_maxlen_subtext'] = '(0 om uit te schakelen, slecht idee.)';
$txt['xmlnews_sidebar'] = 'Laat de "Laatste berichten Feed" blok zien in de zijbalk';
$txt['enable_news'] = 'Toon een willekeurige nieuws lijn op alle pagina\'s';
$txt['show_newsfader'] = 'Toon nieuws fader in board index';
$txt['newsfader_time'] = 'Fading vertraging tussen items voor het nieuws fader';

$txt['reverse_proxy'] = 'Inschakelen omschakelen proxy ondersteuning';
$txt['reverse_proxy_header'] = 'Proxy HTTP rubriek met IP-adres';
$txt['reverse_proxy_ips'] = 'IP of CIDR blok adressen van proxy servers';
$txt['reverse_proxy_one_per_line'] = 'Geef één adres per regel';

$txt['login_type'] = 'Wat is toegestaan voor een gebruiker om in te loggen met?';
$txt['login_username_or_email'] = 'Ofwel hun gebruikersnaam of hun e-mailadres';
$txt['login_username_only'] = 'Alleen gebruikersnaam';
$txt['login_email_only'] = 'Alleen E-mail adres';

$txt['setting_password_strength'] = 'Vereiste kwaliteit van gebruikerswachtwoorden';
$txt['setting_password_strength_low'] = 'Laag - minimaal 4 karakters';
$txt['setting_password_strength_medium'] = 'Gemiddeld - mag niet de gebruiksnaam bevatten';
$txt['setting_password_strength_high'] = 'Hoog - mix van verschillende karakters';

$txt['antispam_settings'] = 'Anti-Spam Verificatie';
$txt['antispam_settings_desc'] = 'In deze sectie kunt u de setup verificatie controles instellen om ervoor te zorgen dat gebruiker een mens is (en niet een bot), en tweak hoe en waar deze van toepassing zijn.';
$txt['setting_reg_verification'] = 'Vereis verificatie op de registratiepagina';
$txt['posts_require_captcha'] = 'Aantal berichten waaronder gebruikers verificatie moeten passeren om een bericht te kunnen plaatsen';
$txt['posts_require_captcha_desc'] = '(0 voor geen limiet, moderators uitgezonderd)';
$txt['search_enable_captcha'] = 'Vereis verificatie bij alle zoekopdrachten van gasten';
$txt['setting_guests_require_captcha'] = 'Gasten moeten verificatie passeren voor ze een bericht kunnen plaatsen';
$txt['setting_guests_require_captcha_desc'] = '(Automatisch van toepassing wanneer een minimum aantal berichten voor gebruikers is ingesteld)';
$txt['guests_report_require_captcha'] = 'Gasten moeten een verificatiecode invullen wanneer ze een bericht rapporteren';

$txt['configure_captcha'] = 'Configureer CAPTCHA afbeeldingen';
$txt['configure_captcha_desc'] = '<span class="smalltext">Een CAPTCHA is een vorm van anti-bot bescherming,die helpt om te voorkomen dat geautomatiseerde robots onzin plaatsen op je forum. </span>';
$txt['use_captcha_images'] = 'Gebruik van CAPTCHA afbeelding inschakelen';
$txt['use_animated_captcha'] = 'Gebruik de geanimeerde CAPTCHA afbeeldingen?';
$txt['use_animated_captcha_desc'] = 'Geanimeerde CAPTCHAs zijn bijzonder lastig voor bots om op te lossen, maar ze kunnen ook moeilijker voor de gewone gebruikers zijn om ze op te lossen.';

$txt['setting_qa_verification_number'] = 'Aantal verificatievragen die een gebruiker moet beantwoorden';
$txt['setting_qa_verification_number_desc'] = '(0 om uit te schakelen; vragen kunnen hieronder ingesteld worden)';
$txt['setup_verification_questions'] = 'Verificatievragen';
$txt['setup_verification_questions_desc'] = '<span class="smalltext">Als je gebruikers een vraag wilt laten beantwoorden om spambots tegen te houden, kun je hieronder een aantal vragen instellen. De vragen mogen relatief eenvoudig zijn en antwoorden zijn niet hoofdlettergevoelig. Je kunt BBC-codes in de vragen gebruiken voor opmaakdoeleinden. Om een vraag te verwijderen, verwijder je simpelweg de inhoud van die regel.</span>';
$txt['setup_verification_question'] = 'Vraag';
$txt['setup_verification_answer'] = 'Antwoord';
$txt['setup_verification_add'] = 'Vraag toevoegen';
$txt['setup_verification_add_answer'] = 'Antwoord toevoegen';

$txt['modfilter_norules'] = 'Er zijn geen filter regels ingesteld.';
$txt['modfilter_addrule'] = 'Voeg een filter regel toe';
$txt['modfilter_editrule'] = 'Bewerk filter regel';
$txt['modfilter_rule_posts'] = 'Bij het opslaan van een forumbericht:';
$txt['modfilter_rule_topics'] = 'Bij het starten van een nieuw topic:';
$txt['modfilter_action_prevent'] = 'Voorkomen dat het bericht wordt opgeslagen';
$txt['modfilter_action_moderate'] = 'Moderator moet bericht eerst goedkeuren (voordat het wordt geplaatst)';
$txt['modfilter_action_pin'] = 'Zet huidige onderwerp vast';
$txt['modfilter_action_unpin'] = 'Onderwerp los maken';
$txt['modfilter_action_lock'] = 'Topic op slot zetten';
$txt['modfilter_action_unlock'] = 'Topic heropenen';
$txt['modfilter_conditions'] = 'Als aan deze regels is voldaan:';
$txt['modfilter_cond_boards_in'] = 'Plaatsen in deze boards:';
$txt['modfilter_cond_boards_ex'] = 'Plaatsen overal behalve in:';
$txt['modfilter_cond_groups_in'] = 'Lid van een van deze groepen:';
$txt['modfilter_cond_groups_ex'] = 'Geen lid van een van deze groepen:';
$txt['modfilter_cond_permissions_in'] = 'Heeft een van deze rechten:';
$txt['modfilter_cond_permissions_ex'] = 'Heeft geen van deze rechten:';
$txt['modfilter_cond_userid_in'] = 'Gebruiker is een van de volgende:';
$txt['modfilter_cond_userid_ex'] = 'Gebruiker is geen van de volgende;';
$txt['modfilter_cond_subject_begins'] = 'Onderwerp bericht begint met:';
$txt['modfilter_cond_subject_ends'] = 'Onderwerp bericht eindigt met:';
$txt['modfilter_cond_subject_contains'] = 'Onderwerp bericht bevat:';
$txt['modfilter_cond_subject_matches'] = 'Onderwerp bericht komt overeen met:';
$txt['modfilter_cond_subject_regex'] = 'Onderwerp bericht komt overeen met reguliere expressie:';
$txt['modfilter_cond_body_begins'] = 'Bericht ontwerp begint met:';
$txt['modfilter_cond_body_ends'] = 'Bericht ontwerp eindigt met:';
$txt['modfilter_cond_body_contains'] = 'Bericht ontwerp bevat:';
$txt['modfilter_cond_body_matches'] = 'Bericht ontwerp komt overeen met:';
$txt['modfilter_cond_body_regex'] = 'Bericht ontwerp komt overeen met reguliere expressie:';
$txt['modfilter_case_sensitive'] = '(exacte overeenkomst)';
$txt['modfilter_case_insensitive'] = '(hoofdletters/kleine letters maakt niet uit)';
$txt['modfilter_cond_postcount'] = 'Aantal berichten:';
$txt['modfilter_cond_warning'] = 'Overtredings punten:';
$txt['modfilter_cond_links'] = 'Aantal linken in berichten;';
$txt['modfilter_range_lt'] = 'Minder dan';
$txt['modfilter_range_lte'] = 'Minder dan of gelijk aan';
$txt['modfilter_range_eq'] = 'gelijk aan';
$txt['modfilter_range_gt'] = 'groter dan';
$txt['modfilter_range_gte'] = 'groter dan of gelijk aan';
$txt['modfilter_cond_unknownrule'] = 'Onbekende regelsoort:';
$txt['modfilter_approve_title'] = 'Goedkeuren openstaande items';
$txt['modfilter_approve_desc'] = 'Als er openstaande berichten moeten worden goedgekeurd, of u denkt aan het uitschakelen van matiging filters, is het wenselijk om ervoor te zorgen dat alle in behandeling zijnde items eerst goedgekeurd worden zodat de items niet zomaar kwijt raken. Misschien wilt u de bijdragen eerst modereren voordat u deze optie gebruikt, om ervoor te zorgen dat er niets wordt goedgekeurd zonder te zijn bekeken.';
$txt['modfilter_all_approved'] = 'Alle openstaande moderators items zijn goedgekeurd.';
$txt['modfilter_applies_legend'] = 'Wanneer deze regel is toegepast';
$txt['modfilter_applies_desc'] = 'Soms moet er een filter regel worden toegepast op alle berichten, soms alleen bij nieuwe topics';
$txt['modfilter_applies_rule'] = 'Wanneer moet deze uitzonderlijke egel worden toegepast?';
$txt['modfilter_applies_posts'] = 'wanneer er een nieuw bericht is gemaakt';
$txt['modfilter_applies_topics'] = 'wanneer een nieuw Topic is gemaakt';
$txt['modfilter_action_legend'] = 'Wat deze regel inhoud';
$txt['modfilter_action_desc'] = 'Elke regel heeft een enkele actie die hij presteert wanneer er aan alle gestelde voorwaarden wordt voldaan, met "het voorkomen van het bericht" en "modereren van het bericht" met uitsluiting van alle andere mogelijke acties';
$txt['modfilter_action_selectone'] = '--- selecteer er een ---';
$txt['modfilter_action_rule'] = 'Wat moet er gebeuren als aan de voorwaarden wordt voldaan/';
$txt['modfilter_actionlist_prevent'] = 'Voorkomen dat het bericht van wordt gemaakt';
$txt['modfilter_actionlist_moderate'] = 'Bericht eerst modereren';
$txt['modfilter_actionlist_pin'] = 'Topic vast zetten aan dit board';
$txt['modfilter_actionlist_unpin'] = 'Topic loskoppelen van dit board';
$txt['modfilter_actionlist_lock'] = 'Topic vergrendelen voor verdere berichten';
$txt['modfilter_actionlist_unlock'] = 'Topic ontgrendelen voor verdere berichten';
$txt['modfilter_conds_legend'] = 'Voorwaarden voor deze regel';
$txt['modfilter_conds_desc'] = 'Elke filter regel vereist voorwaarden, om te weten of de regel moet worden toegepast. Hier vindt u de voorwaarden die zijn toe te voegen aan deze regel -aan alle voorwaarden moeten worden voldaan voordat de regel zal worden geactiveerd.';
$txt['modfilter_conds_item'] = 'Item';
$txt['modfilter_conds_criteria'] = 'Criteria';
$txt['modfilter_conds_no_conditions'] = 'Er zijn geen voorwaarden ingesteld.Voeg er een toe!';
$txt['modfilter_conds_new'] = 'Type voorwaarde:';
$txt['modfilter_conds_add'] = 'Nieuwe voorwaarde toevoegen';
$txt['modfilter_conds_select'] = '--- Voorwaarde selecteren ---';
$txt['modfilter_condtype_boards'] = 'Toekennen aan een of meerdere boards';
$txt['modfilter_condtype_groups'] = 'Toekennen aan een of meerdere ledengroepen';
$txt['modfilter_condtype_userid'] = 'Toekennen aan een of meerdere gebruikers';
$txt['modfilter_condtype_postcount'] = 'Toekennen gebaseerd op aantal berichten van gebruikers';
$txt['modfilter_condtype_warning'] = 'Toekennen gebaseerd op gebruikers overtredingen';
$txt['modfilter_condtype_permission'] = 'Toekennen gebaseerd op gebruikers rechten';
$txt['modfilter_condtype_subject'] = 'Hangt af van het onderwerp van het bericht';
$txt['modfilter_condtype_body'] = 'Hangt af van bericht inhoud';
$txt['modfilter_condtype_links'] = 'Hangt af van de hoeveelheid linken in het bericht';
$txt['modfilter_applies_all'] = 'Toekennen aan de geselecteerde items:';
$txt['modfilter_applies_allexcept'] = 'Toekennen aan<strong>alles behalve</strong>de geselecteerde items:';
$txt['modfilter_condition_done'] = 'Voorwaarde toekennen';
$txt['modfilter_postcount_is'] = 'Aantal berichten gebruikers is:';
$txt['modfilter_warning_is'] = 'De gebruiker heeft;';
$txt['modfilter_warning_is_post'] = 'overtredings punten';
$txt['modfilter_links_is'] = 'De hoeveelheid linken in het bericht:';
$txt['modfilter_the_post_subject'] = 'Onderwerp berichten';
$txt['modfilter_the_post_body'] = 'Inhoud berichten';
$txt['modfilter_regex_begins'] = 'begint met';
$txt['modfilter_regex_contains'] = 'bevat';
$txt['modfilter_regex_ends'] = 'eindigt met';
$txt['modfilter_regex_matches'] = 'komt overeen met';
$txt['modfilter_regex_regex'] = 'komt overeen met reguliere uitdrukking';
$txt['modfilter_be_case_sensitive'] = 'Is hoofdlettergevoelig (hoofdletters en kleine letters worden verschillend behandeld)';
$txt['modfilter_save_this_rule'] = 'Deze regel opslaan';
$txt['modfilter_remove_this_rule'] = 'Deze regel verwijderen';
$txt['modfilter_error_saving'] = 'Deze regel kan niet worden opgeslagen, is er iets mis was in het verzenden van de data. Ga terug en probeer het opnieuw.';
$txt['modfilter_rule_not_found'] = 'De regel die je wilt toevoegen bestaat niet.';
$txt['modfilter_msg'] = 'en toont een aangepast bericht';
$txt['modfilter_msg_popup_title'] = 'Gebruiker informeren';
$txt['modfilter_msg_no_lang'] = 'Er zijn geen aangepaste berichten voor deze regel ingesteld.';
$txt['modfilter_msg_popup'] = 'Wanneer deze regel wordt geactiveerd, zal de gebruiker het volgende bericht te zien krijgen. (Waar mogelijk, zal het forum proberen om de door de gebruiker gekozen taal te gebruiken)';
$txt['modfilter_lang_msg'] = 'Terwijl het duidelijk is voor de gebruiker dat hun post is bewerkt, zal het niet altijd duidelijk zijn waarom dit het geval is. Hier kunt u in een boodschap aan uw gebruikers uitleggen waarom deze actie is ondernomen. U kunt ook gebruik maken van HTML, bijvoorbeeld om linken naar een regels te posten.';

$txt['allow_editDisplayName'] = 'Sta gebruikers toe om hun getoonde naam te wijzigen';
$txt['allow_hideOnline'] = 'Sta niet-beheerders toe om hun status te verbergen';
$txt['titlesEnable'] = 'Extra titels activeren';
$txt['enable_buddylist'] = 'Vrienden- en negeerlijsten activeren';

$txt['signature_settings'] = 'Handtekeningen';
$txt['signature_settings_desc'] = 'Met de instellingen op deze pagina kun je bepalen hoe profielhandtekeningen in SMF geregeld moeten worden.';
$txt['signature_settings_warning'] = 'Merk op dat de instellingen aan de bestaande handtekeningen standaard niet worden toegepast. Klik <a href="%1$s?action=admin;area=memberoptions;sa=sig;apply;%2$s">hier</a>om regels te laten gelden voor alle bestaande handtekeningen.';
$txt['signature_enable'] = 'Handtekeningen inschakelen';
$txt['signature_minposts'] = 'Minimum aantal berichten die nodig zijn voordat handtekeningen zichtbaar mogen zijn';
$txt['signature_zero_no_max'] = '(0 geen limiet)';
$txt['signature_max_length'] = 'Maximaal aantal karakters<div class="smalltext">(0 voor geen maximum)</div>';
$txt['signature_max_lines'] = 'Maximaal aantal regels<div class="smalltext">(0 voor geen limiet)</div>';
$txt['signature_max_images'] = 'Maximaal aantal afbeeldingen<div class="smalltext">(0 voor geen limiet - exclusief smileys)</div>';
$txt['signature_max_images_subtext'] = '(0 voor geen maximum - exclusief smileys)';
$txt['signature_allow_smileys'] = 'Sta gebruik van smileys in handtekeningen toe';
$txt['signature_max_smileys'] = 'Maximaal aantal smileys<div class="smalltext">(0 voor geen limiet)</div>';
$txt['signature_max_image_width'] = 'Maximaal breedte van afbeeldingen (pixels)<div class="smalltext">(0 voor geen limiet)</div>';
$txt['signature_max_image_height'] = 'Maximaal hoogte van afbeeldingen (pixels)<div class="smalltext">(0 voor geen limiet)</div>';
$txt['signature_max_font_size'] = 'Maximaal lettertypegrootte toegestaan<div class="smalltext">(in pixels, 0 voor geen limiet)</div>';
$txt['signature_max_font_size_subtext'] = '(0 voor geen maximum, in pixels)';
$txt['signature_bbc'] = 'Toegestane BBC-tags';

$txt['custom_profile_title'] = 'Aangepaste profielvelden';
$txt['custom_profile_desc'] = 'Vanaf deze pagina kun je zelf extra profielvelden aanmaken die aan de behoeften van je forum voldoen.';
$txt['custom_profile_active'] = 'Actief';
$txt['custom_profile_inactive'] = 'Niet actief';
$txt['custom_profile_make_new'] = 'Nieuw veld';
$txt['custom_profile_none'] = 'Je hebt nog geen aangepaste profielvelden aangemaakt.';
$txt['custom_profile_icon'] = 'Icoon';

$txt['custom_profile_type_text'] = 'Tekst';
$txt['custom_profile_type_textarea'] = 'Lange tekst';
$txt['custom_profile_type_select'] = 'Keuzelijst';
$txt['custom_profile_type_radio'] = 'Keuzebolletjes';
$txt['custom_profile_type_check'] = 'Aanvinkvakje';

$txt['custom_add_title'] = 'Voeg profielveld toe';
$txt['custom_edit_title'] = 'Bewerk profielveld';
$txt['custom_edit_general'] = 'Weergave-instellingen';
$txt['custom_edit_input'] = 'Invoerinstellingen';
$txt['custom_edit_advanced'] = 'Geavanceerde instellingen';
$txt['custom_edit_name'] = 'Naam';
$txt['custom_edit_desc'] = 'Omschrijving';
$txt['custom_edit_profile'] = 'Profielsectie';
$txt['custom_edit_profile_desc'] = 'Sectie van het profiel waarin dit veld bewerkt kan worden.';
$txt['custom_edit_profile_none'] = 'Geen';
$txt['custom_edit_registration'] = 'Toon bij registratie';
$txt['custom_edit_registration_disable'] = 'Nee';
$txt['custom_edit_registration_allow'] = 'Ja';
$txt['custom_edit_registration_require'] = 'Ja, en vereis invoer';
$txt['custom_edit_mlist'] = 'Weergeven op de Gebruikerslijst';
$txt['custom_edit_display'] = 'Toon bij topicweergave';
$txt['custom_edit_picktype'] = 'Veldtype';

$txt['whos_online_desc'] = 'Vanaf deze pagina kunt u bepalen hoe gebruikers de online status van leden kunnen zien.';
$txt['lastActive'] = 'Drempelwaarde voor activiteit gebruiker';
$txt['who_view'] = 'Ledengroepen die kunnen zien wie er ¨Online¨ is';
$txt['member_options_desc'] = 'Vanaf deze pagina kunt u een aantal opties die ook kunnen worden geconfigureerd door uw gebruikers instellen; instellen wat de normale optie is en resetten indien nodig.';
$txt['member_options_default'] = 'Standaarde waarde:';
$txt['member_options_change'] = 'Verander';
$txt['no_change'] = '%s (huidige)';
$txt['leave_alone'] = 'Eigen keuze\'s gebruiker bewaren';
$txt['member_options_guest'] = 'Voor gasten/nieuwe leden:';
$txt['member_options_members'] = 'Voor bestaande leden:';
$txt['member_options_override'] = 'Instellen op "%s" voor iedereen';

// Strings for the templates
$txt['your_icq'] = 'Je ICQ nummer.';
$txt['your_aim'] = 'Je gebruikers AOL Instant Messenger naam';
$txt['your_yim'] = 'Je gebruikers Yahoo! Instant Messenger naam.';
// In this string, please use +'s for spaces.
$txt['aim_default_message'] = 'Hallo!+ben+je+daar?';
$txt['your_twitter'] = 'Je gebruikers Twitter naam,zonder het apenstaartje aan het begin';
$txt['your_facebook'] = 'Je Facebook account wachtwoord';
$txt['your_skype'] = 'Je Skype gebruikersnaam';
$txt['your_steam'] = 'Je id nummer van de Steam Community';
$txt['custom_edit_tplgrp_social'] = 'Sociaal Netwerken';
$txt['custom_edit_tplgrp_im'] = 'Instant Messaging';
$txt['custom_edit_tplgrp_gaming'] = 'Gaming';
$txt['custom_edit_templates'] = 'Templates velden';
$txt['custom_edit_templates_desc'] = 'U kunt ook de volgende informatie velden voor een aantal gemeenschappelijke diensten gebruiken voor sociale netwerken.';
$txt['custom_edit_a_template'] = 'Template om te gebruiken';
$txt['custom_edit_templates_select'] = '-- Selecteer een template --';

$txt['custom_edit_max_length'] = 'Maximumlengte';
$txt['custom_edit_max_length_desc'] = '(0 voor geen limiet)';
$txt['custom_edit_dimension'] = 'Formaat';
$txt['custom_edit_dimension_row'] = 'Rijen';
$txt['custom_edit_dimension_col'] = 'Kolommen';
$txt['custom_edit_bbc'] = 'Sta BBC-tags toe';
$txt['custom_edit_options'] = 'Opties';
$txt['custom_edit_options_desc'] = 'Laat opties leeg om ze te verwijderen. Keuzebolletjes bepalen de standaardwaarde.';
$txt['custom_edit_options_more'] = 'Meer';
$txt['custom_edit_default'] = 'Standaardwaarde';
$txt['custom_edit_active'] = 'Actief';
$txt['custom_edit_active_desc'] = 'Als dit niet geselecteerd is, zal dit veld niet worden vertoond.';
$txt['custom_edit_privacy'] = 'Privacy';
$txt['custom_edit_privacy_desc'] = 'Wie mogen dit veld zien en/of bewerken?';
$txt['custom_edit_see_owner'] = 'De beheerder (met de volgende specifieke groepen)';
$txt['custom_edit_can_search'] = 'Doorzoekbaar';
$txt['custom_edit_can_search_desc'] = 'Kan dit veld doorzocht worden in de ledenlijst?';
$txt['custom_edit_mask'] = 'Invoermasker';
$txt['custom_edit_mask_desc'] = 'Voor tekstvelden kan een invoermasker ingegeven worden om invoer te valideren.';
$txt['custom_edit_mask_email'] = 'Geldig e-mailadres';
$txt['custom_edit_mask_number'] = 'Numeriek';
$txt['custom_edit_mask_nohtml'] = 'Geen HTML';
$txt['custom_edit_mask_regex'] = 'Regex (geavanceerd)';
$txt['custom_edit_enclose'] = 'Toon ingesloten tussen tekst (optioneel)';
$txt['custom_edit_enclose_desc'] = 'We raden <strong>ten zeerste</strong> aan om een invoermasker te gebruiken om de invoer van de gebruiker te valideren.';
$txt['custom_edit_can_see'] = 'kan bekijken';
$txt['custom_edit_can_edit'] = 'Kan toevoegen';

$txt['custom_edit_placement'] = 'Bepaal plaatsing';
$txt['custom_edit_placement_standard'] = 'Standaard (met titel)';
$txt['custom_edit_placement_withicons'] = 'Met iconen';
$txt['custom_edit_placement_abovesignature'] = 'Boven handtekening';
$txt['custom_profile_placement'] = 'Plaatsing';

$txt['custom_edit_delete_sure'] = 'Weet je zeker dat je dit veld wilt verwijderen? Alle gebruikerdata hiervan zal verloren gaan!';

$txt['standard_profile_title'] = 'Standaard profielvelden';
$txt['standard_profile_field'] = 'Veld';

$txt['languages_area_edit_desc'] = 'In dit gedeelte kunt je bladeren en de taal die wordt gebruikt door Wedge bewerken. Het is echter niet ontworpen voor vertalingen,als je Wedge zou willen vertalen in een nieuwe taal, dan kunt je beter contact opnemen met het Wedge Team en informeren of er al een vertaling beschikbaar is.';
$txt['languages_lang_name'] = 'Naam van de taal';
$txt['languages_locale'] = 'Landinstelling';
$txt['languages_available'] = 'Beschikbaar';
$txt['languages_default'] = 'Standaard';
$txt['languages_users'] = 'Gebruikers';
$txt['edit_languages'] = 'Talen bewerken';
$txt['edit_languages_specific'] = 'Taal bewerken - %1$s';
$txt['language_edit_master_value'] = '<em>Master waarde:</em> %1$s';
$txt['language_edit_master_value_array'] = '<em>Master value:</em>';
$txt['language_edit_current_value'] = '<em>Huidige waarde:</em> %1$s';
$txt['language_edit_current_value_array'] = '<em>huidige waarde:</em>';
$txt['language_edit_new_value'] = '<em>Nieuwe waarde:</em>';
$txt['language_edit_new_value_array'] = '<em>Nieuwe waarden:</em.';
$txt['language_edit_add_entry'] = 'Vermelding toevoegen';
$txt['language_delete_value'] = 'Item verwijderen';
$txt['language_revert_value'] = 'Naar master waarde resetten';
$txt['language_clear_cache'] = 'Taal cache legen';
$txt['language_clear_cache_desc'] = 'Het wordt gebruikt om de taal items gegevens te maken die worden weergegeven in het forum. dit zijn speciale bestanden die worden worden beheerd in de database, zodat ze kunt worden gewijzigd zonder de bestanden aan te passen. In het algemeen moet je de taal editor faciliteiten gebruiken van de administratie om taalitems te veranderen, maar soms kan het nodig zijn om het systeem te dwingen om de cache opnieuw op te bouwen. Dit stelt u in staat om dit te doen.';
$txt['language_clear_cache_btn'] = 'De cache wissen';
$txt['language_cache_cleared'] = 'Taal cache is gewist.';
$txt['language_no_entries'] = 'Dit taalbestand heeft geen vermelding, het is waarschijnlijk een tijdelijke aanduiding en je wilt echt het<a href="%1$s">bovenliggende taalbestand</a>.';
$txt['language_search_results'] = 'Zoek resultaten  - %1$s';
$txt['language_no_result_results'] = 'helaas,geen resultaten gevonden';
$txt['language_search_default'] = 'Komen overeen met de standaard bestanden';
$txt['language_search_plugins'] = 'Komen overeen met plugins';

$txt['language_edit_main'] = 'Hoofd bestanden';
$txt['language_edit_admin'] = 'Beheer paneel';
$txt['language_edit_default'] = 'Standaard taal bestanden';
$txt['language_edit_other'] = 'Andere taal bestanden';
$txt['language_edit_search'] = 'Taal bestanden zoeken';
$txt['language_edit_search_plugins'] = 'Inclusief Plugins?';
$txt['language_edit_search_keys'] = 'Sleutel zoeken';
$txt['language_edit_search_values'] = 'Waarde zoeken';
$txt['language_edit_search_both'] = 'Beide zoeken';
$txt['language_edit_no_plugins'] = 'Plugins';
$txt['language_edit_no_plugins_desc'] = 'Er zijn geen bewerkbare taalbestanden voor plugins';
$txt['language_edit_plugins_title'] = 'Plugin: %1$s';
$txt['language_edit_elsewhere'] = 'elders geconfigureerd';
$txt['language_edit_email_templates'] = 'Email templates';
$txt['language_edit_reg_agreement'] = 'Registratie overeenkomst';

$txt['edit_language_entries'] = 'Bewerk taalingangen';
$txt['languages_dictionary'] = 'Woordenboek';
$txt['languages_orientation'] = 'Oriëntatie';
$txt['languages_orients_ltr'] = 'Links-naar-Rechts';
$txt['languages_orients_rtl'] = 'Rechts-naar-Links';

$txt['lang_file_desc_index'] = 'Algemene strings';
$txt['lang_file_desc_Modlog'] = 'Moderatie log vermeldingen';

// Homepage
$txt['homepage_desc'] = 'This page allows you to determine what to show your users when they visit your forum\'s root.';

$txt['homepage_type'] = 'What should the home page show?';
$txt['homepage_boardlist'] = 'Board lijst';
$txt['homepage_board'] = 'Specifiek board';
$txt['homepage_action'] = 'Specificeke actie';
$txt['homepage_custom'] = 'Custom contents';
$txt['homepage_blurb_title'] = 'Blurb titel (%s)';
$txt['homepage_blurb'] = 'Blurb tekst (%s)';
// !! Don't translate the bits between <strong> tags!
$txt['homepage_message'] = 'Choose "Board list" to show the full list of available boards; "Specific board" to direct users to a specific board in the list (make sure to
	choose which board, of course!); "Specific action" to direct them to a custom page on your forum (for instance, create files /app/Mine.php and /html/Mine.template.php,
	then enter "Mine" in the specific action box); and finally, "Custom contents" will allow you to show multiple elements at the same time. Enter one element per line
	(they\'ll be shown in order of appearance), from the following list:<br>

		<br><strong>blurb</strong>: a custom text; an introduction, maybe.
		<br><strong>topics</strong>: a list of the latest updated topics. Add \':x\' to start with x topics instead of 5, e.g. \'topics:10\'.
		<br><strong>thoughts</strong>: a list of the latest thoughts. Add \':x\' to show x thoughts instead of 10, e.g. \'thoughts:5\'.
		<br><strong>boards</strong>: the full list of boards.
		<br><strong>info</strong>: the information center (statistics). Desktop browsers show it in the sidebar.
	';
