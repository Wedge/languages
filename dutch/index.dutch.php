<?php
// Version: 2.0; Index

// Locale (strftime, pspell_new) and spelling. (pspell_new, can be left as '' normally.)
// For more information see:
//		http://www.php.net/function.pspell-new
//		http://www.php.net/function.setlocale
// Again, SPELLING SHOULD BE '' 99% OF THE TIME!! Please read this!
$txt['lang_name'] = 'Nederlands (NL)';
$txt['lang_locale'] = 'nl_Nl';
$txt['lang_paypal'] = 'NL';
$txt['lang_dictionary'] = 'nl';
$txt['lang_spelling'] = 'nederlands';

// Character set and right to left?
$txt['lang_rtl'] = false;

// Number formats?
$txt['number_format'] = '1,234.00';
$txt['time_format'] = '%d %B %Y, %H:%M';
$txt['time_format_this_year'] = '%d %B %Y, %H:%M';
// Some languages need punctuation before a colon.
$txt[':'] = ':';


// %@ is a special format that adds a suffix to a day (1-31), e.g. 1st, 2nd...
// If your language doesn't have any prefixes/suffixes it could use, just set it to $txt['day_suffix'] = '%s';
$txt['day_suffix'] = array(
	'n' => '%sth',
	1 => '1st',
	2 => '2nd',
	3 => '3rd',
	21 => '21st',
	22 => '22nd',
	23 => '23rd',
	31 => '31st',
);

$txt['just_now'] = 'zojuist';
$txt['seconds_ago'] = '{time} seconden geleden';
$txt['minutes_ago'] = '{time} minuten geleden';
$txt['hours_ago'] = '{time} uren geleden';
$txt['days_ago'] = '{time} dagen geleden';
$txt['months_ago'] = '{time} maanden geleden';
$txt['years_ago'] = '{time} jaren geleden';

$txt['page_indicator'] = '- pagina %s'; // can be turned into an array as needed (1 => '', 'n' => ...)

$txt['days'] = array('Zondag', 'Maandag', 'Dinsdag', 'Woensdag', 'Donderdag', 'Vrijdag', 'Zaterdag');
$txt['days_short'] = array('Zon', 'Maan', 'Din', 'Woens', 'Don', 'Vrij', 'Zat');
// Months must start with 1 => 'January'. (or translated, of course.)
$txt['months'] = array(1 => 'Januari', 'Februari', 'Maart', 'April', 'Mei', 'Juni', 'Juli', 'Augustus', 'September', 'October', 'November', 'December');
$txt['months_short'] = array(1 => 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');

$txt['admin'] = 'Beheer';
$txt['moderate'] = 'Moderatie';

$txt['save'] = 'Opslaan';
$txt['modify'] = 'Modificeren';

$txt['members'] = 'Leden';
$txt['board_name'] = 'Board naam';

$txt['member_postcount'] = 'Berichten';
$txt['no_subject'] = '(Geen onderwerp)';
$txt['view_profile'] = 'Bekijk profiel';
$txt['guest_title'] = 'Gast';
$txt['author'] = 'Auteur';
$txt['on_date'] = '%1$s';
$txt['remove'] = 'Verwijder';
$txt['start_new_topic'] = 'Start een nieuw topic';

$txt['login'] = 'Inloggen';
// Use numeric entities in the below string.
$txt['username'] = 'Gebruikersnaam';
$txt['password'] = 'Wachtwoord';
$txt['username_or_email'] = 'Gebruikersnaam of E-mail';

$txt['board_moderator'] = 'Board Moderator';
$txt['remove_topic'] = 'Verwijder Topic';
$txt['modify_msg'] = 'Bewerk bericht';
$txt['name'] = 'Naam';
$txt['email'] = 'E-mail';
$txt['subject'] = 'Onderwerp';
$txt['message'] = 'Bericht';
$txt['quick_modify'] = 'Snel bewerken';

$txt['posts'] = 'Berichten';
$txt['topics'] = 'Onderwerpen';
$txt['redirects'] = 'Doorverwijzingen';
$txt['replies'] = 'Reacties';
$txt['views'] = 'Bekeken';

$txt['num_posts'] = array(0 => 'Geen berichten', 1 => '1 bericht', 'n' => '%s berichten');
$txt['num_topics'] = array(0 => 'Geen onderwerpen', 1 => '1 onderwerp', 'n' => '%s onderwerpen');
$txt['num_redirects'] = array(0 => 'Geen doorverwijzingen', 1 => '1 doorverwijzing', 'n' => '%s doorverwijzingen');
$txt['num_replies'] = array(0 => 'Geen reacties', 1 => '1 reactie', 'n' => '%s reacties');
$txt['num_views'] = array(0 => 'Nooit bekeken', 1 => '1 keer bekeken', 'n' => '%s x bekeken');

// Likes. What you've done implied past tense, while when you haven't liked it thus far, implies a present tense for everyone else.
$txt['you_like_this'] = array(
	0 => 'Je vindt dit leuk.',
	1 => 'Jij en 1 ander persoon vinden dit leuk.',
	'n' => 'Jij en %1$s andere personen vinden dit leuk.',
);
$txt['like_this'] = array(
	1 => '1 persoon vindt dit chat-bericht leuk.',
	'n' => '%1$s personen vinden dit chat-bericht reactie niet leuk.',
);
$txt['like'] = 'Leuk';
$txt['unlike'] = 'Niet leuk';

$txt['nobody_likes_this'] = 'Niemand vindt dit leuk';
$txt['likes_header'] = array(1 => '1 persoon vindt dit leuk.', 'n' => '%s personen vinden dit leuk.');

$txt['choose_pass'] = 'Kies wachtwoord';
$txt['verify_pass'] = 'Bevestig wachtwoord';
$txt['position'] = 'Positie';

$txt['total'] = 'Totaal';
$txt['posts_made'] = 'Berichten';
$txt['website'] = 'Website';
$txt['register'] = 'Registreren';
$txt['warning_status'] = 'Waarschuwings niveau';
$txt['user_warn_warned'] = 'Gebruiker is gewaarschuwd';
$txt['user_warn_moderate'] = 'Gebruikersposts komen op goedkeuringslijst';
$txt['user_warn_mute'] = 'Gebruiker is verbannen van posten';
$txt['user_warn_soft_ban'] = 'Gebruiker is tijdelijk geband';
$txt['user_warn_hard_ban'] = 'Gebruiker is definitief geband';
$txt['warn_warned'] = 'Toezicht';
$txt['warn_moderate'] = 'Gemodereerd';
$txt['warn_mute'] = 'Opgeheven';
$txt['warn_soft_ban'] = '(Tijdelijke) Ban';
$txt['warn_hard_ban'] = '(Definitiefe) Ban';

// User menu strings
$txt['usermenu_profile'] = 'Profiel';
$txt['usermenu_profile_desc'] = 'Bekijk gebruiker profiel';
$txt['usermenu_website'] = 'Website';
$txt['usermenu_website_desc'] = 'Ga naar gebruikers website';
$txt['usermenu_sendpm'] = 'Bericht';
$txt['usermenu_sendpm_desc'] = 'Stuur een persoonlijk bericht';
$txt['usermenu_showposts'] = 'Berichten bekijken';
$txt['usermenu_showposts_desc'] = 'Bekijk laatste gebruikers bijdragen';
$txt['usermenu_addbuddy'] = '+Kontakten';
$txt['usermenu_addbuddy_desc'] = 'Voeg gebruiker toe aan mijn kontakten';
$txt['usermenu_removebuddy'] = '-Kontakten';
$txt['usermenu_removebuddy_desc'] = 'Verwijder gebruiker van mijn kontakten';
$txt['usermenu_ignore'] = 'Negeer';
$txt['usermenu_ignore_desc'] = 'Deze gebruiker negeren';
$txt['usermenu_unignore'] = 'Niet meer negeren';
$txt['usermenu_unignore_desc'] = 'Deze gebruiker niet meer negeren';
$txt['usermenu_seeip'] = '<span style="color: #aaa">IP: %2%</span>';
$txt['usermenu_seeip_desc'] = 'Vanaf dit IP adres gepost';
$txt['usermenu_trackip'] = '<span style="color: #aaa">IP: %2%</span>';
$txt['usermenu_trackip_desc'] = 'Traceer dit IP adres';

// Action menu strings (per post)
$txt['acme_like'] = 'Leuk';
$txt['acme_like_desc'] = 'Dit bericht is leuk';
$txt['acme_unlike'] = 'Niet leuk';
$txt['acme_unlike_desc'] = 'Dit bericht is niet leuk';
$txt['acme_quote'] = 'Quote';
$txt['acme_quote_desc'] = 'Op dit bericht reageren';
$txt['acme_modify'] = 'Bewerken';
$txt['acme_modify_desc'] = 'Dit bericht bewerken';
$txt['acme_report'] = 'Rapporteren';
$txt['acme_report_desc'] = 'Rapporteer dit bericht aan een moderator';
$txt['acme_restore'] = 'Herstellen';
$txt['acme_restore_desc'] = 'Herstel de zichtbaarheid van dit bericht';
$txt['acme_merge'] = 'Samenvoegen';
$txt['acme_merge_desc'] = 'Dit bericht samenvoegen met het vorige bericht';
$txt['acme_split'] = 'Splitsen';
$txt['acme_split_desc'] = 'Splits dit topic in een nieuw topic';
$txt['acme_remove'] = 'Verwijder';
$txt['acme_remove_desc'] = 'Bericht definitief verwijderen';
$txt['acme_approve'] = 'Goedkeuren';
$txt['acme_approve_desc'] = 'Dit bericht mag bekeken worden door andere goedkeuren';
$txt['acme_warn'] = 'Waarschuwen';
$txt['acme_warn_desc'] = 'Geef een waarschuwing n.a.v dit bericht';

$txt['actions_button'] = 'Acties&hellip;';
$txt['more_actions'] = 'Meer&hellip;';

$txt['board_index'] = 'Board index';
$txt['message_index'] = 'Berichten index';
$txt['news'] = 'Nieuws';
$txt['home'] = 'Inhoud';
$txt['community'] = 'Gemeenschap';

$txt['lock_unlock'] = 'Sluiten/Openen topic';
$txt['post'] = 'Verzenden';
$txt['error_occurred'] = 'Er is een fout opgetreden!';
$txt['logout'] = 'Uitloggen';
$txt['started_by'] = 'Gestart door';
$txt['last_post_author_link_time'] = '<strong>Laatste bericht</strong> door {author} in {link} {time}';
$txt['last_post_time_link'] = '{time} in {link}';
$txt['last_post_time_author'] = '{time} door {author}';
$txt['board_off_limits'] = 'Dit board is niet toegankelijk voor jou.';

$txt['last_post'] = 'Laatste bericht';
// Use numeric entities in the below string.
$txt['topic'] = 'Topic';
$txt['help'] = 'Help';
$txt['notify'] = 'Aankondigen';
$txt['unnotify'] = 'Onaangekondigd';
$txt['notify_request'] = 'Wilt u een e-mail notificatie als iemand reageert op dit onderwerp?';

$txt['move_topic'] = 'Verplaats topic';
$txt['move_to'] = 'Verplaatst naar';
$txt['pages'] = 'Pagina\'s';
$txt['users_active'] = 'gebruikers actief gedurende %1$d minuten';
$txt['personal_messages'] = 'Persoonlijke berichten';

$txt['quote_from'] = 'Quote van';
$txt['quote'] = 'Quote';
$txt['quote_noun'] = 'Quote';
$txt['reply'] = 'Reactie';
$txt['reply_number'] = 'Reactie #<strong>%1$d</strong>,';

$txt['approve'] = 'Goedgekeurd';
$txt['approve_all'] = 'Allen goedkeuren';
$txt['awaiting_approval'] = 'In afwachting van goedkeuring';
$txt['post_awaiting_approval'] = 'Opm: Dit bericht is in afwachting van goedkeuring door een moderator.';
$txt['there_are_unapproved_topics'] = 'Er zijn %1$s topics and %2$s berichten in afwachting van goedkeuring in dit board. Klik <a href="%3$s">hier</a> om deze te bekijken.';

$txt['msg_alert_none'] = 'Geen berichten';
// SSI - The {new} construct is used to add the (x new) area in a language-dependent manner, using unread_pms, as below.
$txt['you_have_msg'] = array(
	0 => 'Je hebt geen berichten',
	1 => 'Je hebt <a href="<URL>?action=pm">1</a> bericht {new}',
	'n' => 'Je hebt <a href="<URL>?action=pm">%s</a> berichten {new}',
);
$txt['unread_pms'] = array(0 => '(geen nieuwe)', 1 => '(1 nieuw)', 'n' => '(%s nieuw)');

$txt['remove_message'] = 'Verwijder dit bericht';
$txt['remove_message_confirm'] = 'Dit bericht verwijderen?';

$txt['online_users'] = 'Gebruikers online';
$txt['personal_message'] = 'Persoonlijk bericht';
$txt['jump_to'] = 'Snelle toegang';
$txt['are_sure_remove_topic'] = 'Weet u zeker dat u dit topic wilt verwijderen?';

$txt['go'] = 'Zoek';
$txt['ok'] = 'Oke';
$txt['yes'] = 'Ja';
$txt['no'] = 'Nee';

$txt['search'] = 'Zoek';
$txt['all_pages'] = 'Alle';

$txt['back'] = 'Terug';
$txt['topic_started'] = 'Topic gestart door';
$txt['title'] = 'Titel';
$txt['post_by'] = 'Geplaatst door';
$txt['welcome_member'] = 'A.u.b verwelkomd %1$s, ons nieuwste lid.';
$txt['notify_deactivate'] = 'Wilt u notificatie van dit topic uitschakelen?';

$txt['last_edit'] = 'Laatst bewerkt {date} door {name}';
$txt['last_edit_mine'] = 'Laatste bewerking {date}';

$txt['location'] = 'Locatie';
$txt['gender'] = 'Geslacht';
$txt['date_registered'] = 'Registratie datum';

$txt['recent_posts'] = 'Recente berichten';
$txt['recent_view'] = 'Bekijk de meest recente berichten op het forum';

$txt['male'] = 'Man';
$txt['female'] = 'Vrouw';

$txt['welcome_guest'] = 'Welkom, <strong>%1$s</strong>. A.u.b <a href="<URL>?action=login">inloggen</a> of anders <a href="<URL>?action=register">registreren</a>.';
$txt['welcome_guest_noregister'] = 'Welkom, <strong>%1$s</strong>. A.u.b <a href="<URL>?action=login">inloggen</a>.';
$txt['login_or_register'] = 'A.u.b <a href="<URL>?action=login">inloggen</a> of anders <a href="<URL>?action=register">registreren</a>.';
$txt['please_login'] = 'A.u.b <a href="<URL>?action=login">inloggen</a>.';
$txt['welcome_guest_activate'] = '<a href="<URL>?action=activate">Activerings e-mail</a><br>Gemist?';
$txt['hello_member'] = 'Hallo,';
$txt['hello_guest'] = 'Welkom,';
$txt['select_destination'] = 'Selecteer bestemming';

$txt['posted_by'] = 'Verzonden door';

$txt['moderator'] = 'Moderator';
$txt['moderators'] = 'Moderators';

// For the Short form, use '!' in case your language's 'New' is too long.
$txt['new'] = 'Nieuw';
$txt['new_short'] = 'Nieuw';

$txt['edited'] = 'Bewerkt';

$txt['forgot_your_password'] = 'Wachtwoord vergeten?';

$txt['date'] = 'Datum';
$txt['from'] = 'Van';
$txt['to'] = 'Naar';

$txt['members_title'] = 'Leden';

$txt['redirect_board'] = 'Doorverwijzings Board';

$txt['notification'] = 'Notificatie';

$txt['your_ban'] = 'Het spijt ons %1$s, u bent uitgesloten om het forum te gebruiken!<br>%2$s';
$txt['your_ban_expires'] = 'Deze ban is ingesteld op %1$s.';
$txt['your_ban_expires_never'] = 'Deze ban vervalt niet.';
$txt['ban_continue_browse'] = 'U mag als gast door het forum bladeren.';

$txt['mark_board_read'] = 'Markeer Topics als gelezen in dit board.';
$txt['mark_as_read'] = 'Markeer alle berichten als gelezen';

$txt['legend'] = 'Legenda';
$txt['locked_topic'] = 'Gesloten Topic';
$txt['normal_topic'] = 'Gewoon topic';
$txt['participation_caption'] = 'Topic waarin u berichten heeft gepost';

$txt['print'] = 'Print';
$txt['profile'] = 'Profiel';
$txt['not_applicable'] = 'N.v.t';
$txt['preview'] = 'Voorbeeld';
$txt['remove_draft'] = 'Kladje verwijderen';
$txt['ip'] = 'IP';
$txt['by'] = 'door';
$txt['days_word'] = 'dagen';
$txt['search_for'] = 'Zoeken naar';
$txt['maintain_mode_on'] = 'Herinnering,dit forum staat in de \'Onderhoudstand\'';

$txt['global_stats'] = 'Globale statistieken';
$txt['forum_stats'] = 'Board statistieken';
$txt['blog_stats'] = 'Blog statistieken';
$txt['topic_stats'] = 'Topic statistieken';

$txt['latest_member'] = 'Nieuwste forumlid';
$txt['latest_post'] = 'Nieuwste bericht';

$txt['youve_got_pms'] = array(0 => 'Er zijn geen berichten...', 1 => 'Er is 1 bericht...', 'n' => 'Er zijn %s berichten...');
$txt['click_to_view_them'] = 'Klik <a href="%1$s">hier</a> om deze te bekijken.';

$txt['print_page'] = 'print pagina';

$txt['info_center_title'] = 'Informatie Centrum';

$txt['send_topic'] = 'Plaats dit topic';

$txt['check_all'] = 'Controleer alles';

$txt['file'] = 'Bestand';

$txt['today'] = '<strong>Vandaag</strong> om ';
$txt['yesterday'] = '<strong>Gisteren</strong> om ';
$txt['new_poll'] = 'Nieuwe poll';
$txt['poll_vote'] = 'Stem uitbrengen';
$txt['poll_total_voters'] = 'Totaal aantal stemmen';
$txt['poll_results'] = 'Bekijk resultaat';
$txt['poll_lock'] = 'Sluit stemming';
$txt['poll_unlock'] = 'Open stemming';
$txt['poll_edit'] = 'Bewerk poll';
$txt['poll'] = 'poll';
$txt['poll_voters_guests_only'] = array(
	1 => '1 gast',
	'n' => '%1$s gasten',
);
$txt['poll_voters'] = array(
	1 => 'en 1 gast',
	'n' => 'en %1$s gasten',
);
$txt['poll_visibility_admin'] = 'Alleen beheerder kan zien waarop u gestemd heeft.';
$txt['poll_visibility_creator'] = 'Beheerder,en poll starter kunnen zien waarop u gestemd heeft.';
$txt['poll_visibility_members'] = 'Geen enkele ingelogd lid kan zien waarop u gestemd heeft.';
$txt['poll_visibility_anyone'] = 'Niemand,ook gasten niet,kunnen zien waarop u gestemd heeft.';
$txt['one_day'] = '1 Dag';
$txt['one_week'] = '1 Week';
$txt['one_month'] = '1 Maand';
$txt['forever'] = 'Altijd';
$txt['quick_login_desc'] = 'Inloggen met gebruikersnaam,wachtwoord en sessielengte';
$txt['one_hour'] = '1 Uur';
$txt['board'] = 'Board';
$txt['in'] = 'in';
$txt['pinned_topic'] = 'Vastgezet Topic';

$txt['delete'] = 'Verwijder';

$txt['kilobyte'] = 'kB';

$txt['more_stats'] = '[meer statistieken]';

$txt['code'] = 'Code';
$txt['code_select'] = '[selecteer]';

$txt['merge'] = 'Topics samenvoegen';
$txt['new_topic'] = 'Nieuw Topic';

$txt['set_pin'] = 'Topic vastzetten';
$txt['set_unpin'] = 'Topic los zetten';
$txt['set_lock'] = 'Topic sluiten';
$txt['set_unlock'] = 'Topic heropenen';
$txt['order_pinned_topic'] = 'Vastzetten herordenen';

$txt['page_created'] = 'Pagina gecreeerd in';
$txt['seconds_with_query'] = '%1$.2f seconden met 1 query.';
$txt['seconds_with_queries'] = '%1$.2f seconden met %2$d queries.';

$txt['online'] = 'Online';
$txt['offline'] = 'Offline';
$txt['pm_online'] = 'Persoonlijk bericht (Online)';
$txt['pm_offline'] = 'Persoonlijk bericht (Offline)';
$txt['online_status'] = 'Status';

$txt['go_up'] = 'Omhoog';
$txt['go_down'] = 'Omlaag';

$txt['site_credits'] = 'Team';
$txt['copyright'] = 'Forum software: <a href="https://github.com/Wedge/wedge" target="_blank" class="new_win">Wedge CMS</a>';
$txt['dynamic_replacements'] = '<abbr title="Dynamic Replacements">DR</abbr>';

$txt['template_block_error'] = 'Niet gevonden de "%1$s" sjabloonblokken.';
$txt['theme_template_error'] = 'Niet in staat om de "%1$s" sjablonen te laden.';
$txt['theme_language_error'] = 'Niet in staat om de  "%1$s" taalbestanden te laden.';

$txt['sub_boards'] = 'Sub-Boards';

$txt['smtp_no_connect'] = 'Kon niet verbinden met SMTP host';
$txt['smtp_port_ssl'] = 'SMTP-poort instelling onjuist; het zou moeten zijn 465 voor SSL servers.';
$txt['smtp_bad_response'] = 'Kon geen mailserver response codes krijgen';
$txt['smtp_error'] = 'Problemen bij verzenden post. fout:';

$txt['mlist_search'] = 'Zoeken naar Leden';
$txt['mlist_search_again'] = 'Opnieuw zoeken';
$txt['mlist_search_email'] = 'Zoeken op E-mail adres';
$txt['mlist_search_group'] = 'Zoeken op positie';
$txt['mlist_search_name'] = 'Zoeken naar naam';
$txt['mlist_search_website'] = 'Zoeken op Website';
$txt['mlist_search_results'] = 'Zoek naar resultaten';
$txt['mlist_search_by'] = 'Zoek door %1$s';
$txt['mlist_menu_view'] = 'Bekijk de Ledenlijst';

$txt['attach_downloaded'] = array(1 => 'downloaded 1 keer.', 'n' => 'downloaded %s keer.');
$txt['attach_viewed'] = array(1 => '1 keer bekeken.', 'n' => 'bekeken %s keer.');

$txt['settings'] = 'instellingen';
$txt['never'] = 'Nooit';
$txt['more'] = 'meer';

$txt['hostname'] = 'Hostnaam';
$txt['you_are_post_banned'] = 'Het spijt ons %1$s,je mag geen berichten plaatsen op dit forum..';
$txt['you_are_pm_banned'] = 'het spijt ons %1$s, je mag geen persoonlijke berichten plaatsen op dit forum..';
$txt['you_are_post_pm_banned'] = 'het spijt ons %1$s, je mag geen berichten en persoonlijke berichten plaatsen op dit forum.';

$txt['add_poll'] = 'Plaats poll';
$txt['poll_options6'] = 'Je kan alleen maar kiezen tot %1$s opties.';
$txt['poll_remove'] = 'Verwijder poll';
$txt['poll_remove_warn'] = 'Weet je zeker dat je deze poll wilt verijderen uit dit topic?';
$txt['poll_results_expire'] = 'Resultaten worden zichtbaar wanneer er niet meer gestemd mag worden';
$txt['poll_expires_on'] = 'Er kan niet meer gestemd worden!';
$txt['poll_expired_on'] = 'Er kan niet meer gestemd worden!';
$txt['poll_change_vote'] = 'Verwijder stem';
$txt['poll_return_vote'] = 'Stem opties';
$txt['poll_cannot_see'] = 'Momenteel kunt u niet de resultaten van deze poll zien.';

$txt['quick_mod_approve'] = 'Goedkeuren geselecteerd';
$txt['quick_mod_remove'] = 'selectie verwijderen';
$txt['quick_mod_lock'] = 'Geselecteerd vergrendelen/ontgrendelen';
$txt['quick_mod_pin'] = 'Geselecteerd vastzetten/loszetten';
$txt['quick_mod_move'] = 'Verplaatst geselecteerd naar';
$txt['quick_mod_merge'] = 'Selecteer samenvoegen';
$txt['quick_mod_markread'] = 'Markeer geselecteerd als gelezen';
$txt['quick_mod_go'] = 'Gaan!';

$txt['generic_confirm_request'] = 'Weet je zeker dat je dit wilt?';

$txt['reagree_reply'] = 'De site voorwaarden zijn veranderd. Voordat je berichten kunt plaatsen op de site, moet u de gebruikersovereenkomst opnieuw accepteren . U kunt dit doen door naar <a href="%1$s"> deze pagina </a> toe te gaan..';
$txt['quick_reply'] = 'Snelle reactie';
$txt['quick_reply_warning'] = 'Waarschuwing: dit onderwerp is op dit moment gesloten! Alleen moderators en administrators kunnen reageren.';
$txt['quick_reply_verification'] = 'Na het indienen van uw bericht wordt u doorverwezen naar de gewone post pagina om uw bericht controleren %1$s.';
$txt['quick_reply_verification_guests'] = '(vereist voor alle gasten)';
$txt['quick_reply_verification_posts'] = '(vereist voor alle gebruikers met minder dan %1$d berichten)';
$txt['wait_for_approval'] = 'Opm: Dit bericht wordt niet weergegeven totdat het door een moderator goedgekeurd.';

$txt['notification_enable_board'] = 'Weet u zeker dat u de notificatie van nieuwe onderwerpen in wilt schakelen voor dit board?';
$txt['notification_disable_board'] = 'Weet u zeker dat u de notificatie van nieuwe onderwerpen uit wilt schakelen voor nieuwe topics in dit board?';
$txt['notification_enable_topic'] = 'Weet u zeker dat u de notificatie van nieuwe reacties in wilt schakelen voor dit topic?';
$txt['notification_disable_topic'] = 'Weet u zeker dat u de notificatie van nieuwe reacties uit wilt schakelen voor dit topic?';

$txt['unread_topics'] = 'Ongelezen Topics';
$txt['unread_replies'] = 'Bijgewerkte Topics';

$txt['who_title'] = 'Wie is er online';
$txt['who_and'] = ' en ';
$txt['who_viewing_topic'] = ' bekijken dit topic.';
$txt['who_viewing_board'] = ' bekijken dit board.';
$txt['who_member'] = 'Lid';

// Feed block
$txt['feed'] = 'Laatste berichten Feed';
$txt['feed_current_topic'] = 'Dit topic:';
$txt['feed_current_forum'] = 'Dit forum:';
$txt['feed_current_blog'] = 'Dit blog:';
$txt['feed_everywhere'] = 'Allen:';
$txt['feed_posts'] = '<a href="%1$s">berichten</a>';
$txt['feed_topics'] = '<a href="%1$s">topics</a>';

// Footer strings
$txt['valid_html5'] = 'Geldig HTML5!';
$txt['html5'] = 'HTML5';

$txt['guest'] = 'Gast';
$txt['guests'] = 'Gasten';
$txt['user'] = 'Gebruiker';
$txt['users'] = 'Gebruikers';
$txt['hidden'] = 'Verborgen';

$txt['buddy'] = 'Kontakt';
$txt['buddies'] = 'Kontakten';
$txt['contacts_friends'] = 'Vrienden';
$txt['contacts_known'] = 'Kennissen bekenden';
$txt['contacts_work'] = 'Collega\'s';
$txt['contacts_family'] = 'Familie';
$txt['contacts_follow'] = 'Volgers';
$txt['contacts_restrict'] = 'Beperkt';
$txt['contacts_custom'] = '<em>Persoonlijke lijst</em>';
$txt['is_buddy'] = 'Bevindt zich in mijn kontaktlijst';
$txt['is_not_buddy'] = 'Bevindt zich niet in mijn kontaktlijst';

$txt['most_online_ever'] = 'Meeste online ooit!';
$txt['most_online_today'] = 'Meeste online vandaag!';

$txt['response_prefix'] = 'Re:';

$txt['approve_members_waiting'] = array(
	1 => 'Er wacht <a href="<URL>?action=admin;area=viewmembers;sa=browse;type=approve">een lid</a> op goedkeuring.',
	'n' => 'Er wachten <a href="<URL>?action=admin;area=viewmembers;sa=browse;type=approve">%s leden</a> op goedkeuring.',
);

$txt['notifyboard_turnon'] = 'Wilt u een notificatie e-mail als iemand een nieuw topic plaatst in dit board?';
$txt['notifyboard_turnoff'] = 'Weet je zeker dat je geen notificatie nieuw topic wil ontvangen voor dit board/';

$txt['show_unread'] = 'Ongelezen berichten';
$txt['show_unread_replies'] = 'Ongelezen reacties';

$txt['quickmod_delete_selected'] = 'Verwijder geselecteerd';

$txt['show_personal_messages'] = 'U hebt een of meerdere nieuwe persoonlijke berichten ontvangen. <br><br> Wilt u een nieuw venster openen om ze te bekijken?';

$txt['previous_next_back'] = '&laquo; vorige';
$txt['previous_next_forward'] = 'volgende &raquo;';

$txt['upshrink_description'] = 'Klap dit in of uit.';

$txt['mark_unread'] = 'Markeer als ongelezen';

$txt['error_while_submitting'] = 'De volgende fout of fouten zijn opgetreden bij het versturen van dit bericht:';
$txt['error_old_topic'] = 'Waarschuwing:. In dit onderwerp is in minstens%1$d dagen niets meer gepost.<br>Tenzij u zeker weet dat u wilt beantwoorden, anders is het beter om een nieuw onderwerp te starten.';

$txt['mark_read_short'] = 'Markeer als gelezen';

$txt['pm_short'] = 'Mijn berichten';

$txt['hello_member_ndt'] = 'Hallo, <span>%1$s</span>!';

$txt['unapproved_posts'] = 'Afgekeurde berichten (Topics: %1$d, Posts: %2$d)';

$txt['ajax_in_progress'] = 'Laden....';

$txt['verification'] = 'Verificatie';
$txt['visual_verification_description'] = 'Typ de letters over in de weergegeven afbeelding ';
$txt['visual_verification_sound'] = 'de letters laten voorlezen';
$txt['visual_verification_request_new'] = 'Vraag om een andere afbeelding ';
$txt['visual_verification_hidden'] = 'Dit vak moet leeg blijven';

// Sub menu labels
$txt['summary'] = 'Overzicht';
$txt['account'] = 'Account instellingen';
$txt['forumprofile'] = 'Forum Profiel';
$txt['change_skin'] = 'Skin Selectie';
$txt['draft_posts'] = 'Kladjes ';

$txt['skin_default'] = 'Standaard';
$txt['skin_default_mobile'] = 'Mobiel standaard ';

$txt['settings_title'] = 'Algemene opties';
$txt['plugin_manager'] = 'Plugins';
$txt['errlog'] = 'Foutenlog';
$txt['edit_permissions'] = 'Permissies';
$txt['mc_unapproved_poststopics'] = 'Niet goedgekeurde berichten';
$txt['mc_reported_posts'] = 'Gerapporteerde berichten';
$txt['modlog_view'] = 'Moderatielog';
$txt['unapproved_members'] = 'Niet goedgekeurde Leden';
$txt['admin_uncache'] = 'Cache leegmaken';

$txt['ignoring_user'] = 'U negeert deze gebruiker. Klik hier om de post te zien of te verbergen.';

$txt['spider'] = 'Spider';
$txt['spiders'] = 'Spiders';

$txt['downloads'] = 'Downloads';
$txt['filesize'] = 'Bestandgrootte';

$txt['sideshow'] = 'Klik hier, of met de middelste muisknop ergens op de pagina, om de zijbalk om te schakelen.';

// Restore topic
$txt['restore_topic'] = 'Topic herstellen';
$txt['quick_mod_restore'] = 'Geselecteerde herstellen';

$txt['autosuggest_delete_item'] = 'Verwijder item';

// Ignoring topics
$txt['ignoring_topic'] = 'Je negeert momenteel dit topic.';
$txt['ignore_topic'] = 'Negeer';
$txt['unignore_topic'] = 'Niet meer negeren';

// Site type.
$txt['b_type'] = array('blog' => 'blog', 'forum' => 'forum', 'media' => 'gallery', 'site' => 'site');
$txt['b_item'] = array('blog' => 'post', 'forum' => 'topic', 'media' => 'item', 'site' => 'article');

// Indicates the date of the first post when merging two posts.
$txt['search_date_posted'] = 'Geplaatst:';

// Spoiler tags. But you're smart, so you don't need me telling.
$txt['spoiler'] = 'Spoiler';
$txt['click_for_spoiler'] = '(klik voor tonen/verbergen)';

$txt['readmore'] = '(%1$d meer tekens)';
$txt['thoughts'] = 'Chat-berichten!!';
$txt['add_thought'] = '(Klik hier om chat te plaatsen)';
$txt['no_thoughts'] = 'Geen chat op dit moment';
$txt['thome_edit'] = 'Toevoegen';
$txt['thome_remove'] = 'Verwijder';
$txt['thome_reply'] = 'Reactie';
$txt['thome_context'] = 'context';
$txt['thome_personal'] = 'Andere na mij?';
$txt['thome_personal_desc'] = 'Toon deze chat onder mijn naam in onderwerpen, voor andere na mij.';

// Do not use double quotes in the following strings.
$txt['privacy'] = 'Prive';
$txt['privacy_default'] = 'Standaard';
$txt['privacy_public'] = 'Openbaar';
$txt['privacy_members'] = 'leden';
$txt['privacy_group'] = 'Ledengroep';
$txt['privacy_list'] = 'Kontakten';
$txt['privacy_author'] = 'Gewoon ik';
$txt['privacy_bubble'] = 'Zichtbaar voor: <strong>{PRIVACY}</strong>.';
$txt['privacy_can_edit'] = 'Klik om privacy te veranderen.';


// Do not use double quotes in the form_* text strings. (Why would you?)
$txt['form_submit'] = 'Aanbieden';
$txt['form_cancel'] = 'Annuleren';

// Media Gallery
$txt['media_gallery'] = 'Media sectie';
$txt['media_home'] = 'Inhoud';
$txt['media_unseen'] = 'Ongezien';
$txt['media_profile_sum'] = 'Overzicht';
$txt['media_view_items'] = 'Bekijk items';
$txt['media_view_coms'] = 'Bekijk commentaren';
$txt['media_view_votes'] = 'Bekijk stemmingen';
$txt['media_gotolink'] = 'Details';
$txt['media_zoom'] = 'Zoom';
