<?php
// Version: 2.0; ManageMail

$txt['mailqueue_desc'] = 'Vanuit deze pagina kun je je mailinstellingen configureren, alsmede de huidige mailwachtrij bekijken en beheren als deze ingeschakeld is.';
$txt['mailqueue_templates_desc'] = 'Vanaf dit gedeelte kunt u de sjablonen die door Wedge gebruikt worden om e-mails te verzenden naar gebruikers bijwerken.';

$txt['mail_type'] = 'Mailtype';
$txt['mail_type_default'] = '(PHP-standaard)';
$txt['smtp_host'] = 'SMTP-server';
$txt['smtp_port'] = 'SMTP-poort';
$txt['smtp_username'] = 'SMTP-gebruikersnaam';
$txt['smtp_password'] = 'SMTP-wachtwoord';

$txt['webmaster_email'] = 'Webmasters Email Addres';
$txt['mail_from'] = 'E-Mail van Adres';

$txt['mail_queue'] = 'Schakel mailwachtrij in';
$txt['mail_limit'] = 'Maximaal aantal e-mails verzenden per minuut';
$txt['mail_limit_desc'] = '(0 om uit te schakelen)';
$txt['mail_quantity'] = 'Maximum aantal e-mails verzenden laden van pagina';

$txt['mailqueue_stats'] = 'Mailwachtrij-statistieken';
$txt['mailqueue_oldest'] = 'Oudste mail';
$txt['mailqueue_oldest_not_available'] = 'n.v.t.';
$txt['mailqueue_size'] = 'Lengte wachtrij';

$txt['mailqueue_age'] = 'Ouderdom';
$txt['mailqueue_priority'] = 'Prioriteit';
$txt['mailqueue_recipient'] = 'Ontvanger';
$txt['mailqueue_subject'] = 'Onderwerp';
$txt['mailqueue_clear_list'] = 'Verstuur mailwachtrij nu';
$txt['mailqueue_send_these_items'] = 'Deze items verzenden';
$txt['mailqueue_no_items'] = 'De mailwachtrij is momenteel leeg';
$txt['mailqueue_clear_list_warning'] = 'Ben je zeker dat je de hele mailwachrij nu wilt verzenden? Dit zal geen rekening houden met enige limieten die je hebt ingesteld.';

$txt['mq_day'] = '%1.1f dag';
$txt['mq_days'] = '%1.1f dagen';
$txt['mq_hour'] = '%1.1f uur';
$txt['mq_hours'] = '%1.1f uren';
$txt['mq_minute'] = '%1$d minuut';
$txt['mq_minutes'] = '%1$d minuten';
$txt['mq_second'] = '%1$d seconde';
$txt['mq_seconds'] = '%1$d seconden';

$txt['mq_mpriority_5'] = 'zeer laag';
$txt['mq_mpriority_4'] = 'laag';
$txt['mq_mpriority_3'] = 'normaal';
$txt['mq_mpriority_2'] = 'hoog';
$txt['mq_mpriority_1'] = 'zeer hoog';

$txt['templates_register'] = 'Registratie E-mails';
$txt['templates_register_admin'] = 'Registratie E-mails voor beheer gebruik';
$txt['templates_account_changes'] = 'accountwijzigingen';
$txt['templates_notify_content'] = 'Notificaties over Inhoud';
$txt['templates_notify_moderation'] = 'Notificaties over Moderatie Acties';
$txt['templates_group_membership'] = 'Groeplidmaatschap';
$txt['templates_user_email'] = 'Gebruiker Email Functies';
$txt['templates_paid_subs'] = 'Betaalde abonnementen';
$txt['templates_moderator'] = 'moderator Emails';

$txt['template_edit_template'] = 'Sjabloon bewerken';
$txt['template_replacements'] = 'Vervangingen';
$txt['template_replacement_desc'] = 'Aangezien emails verschillende inhoud heeft voor verschillende situaties, zijn er plaatsaanduidingen die kunnen worden gebruikt. Degenen die beschikbaar zijn voor deze e-mail vindt u hieronder.';

$txt['template_email_desc'] = 'Beschrijving:';
$txt['template_email_subject'] = 'Onderwerp Email:';
$txt['template_email_body'] = 'Inhoud Email:';

// Don't translate the (%1$s) bits, they're used as placeholders. These are the standard ones.
$txt['template_repl_forumname'] = 'Forumnaam (%1$s)';
$txt['template_repl_scripturl'] = 'de link naar de voorpagina van de site (%1$s)';
$txt['template_repl_themeurl'] = 'De URL van de site (%1$s)';
$txt['template_repl_imagesurl'] = 'URL van de afbeeldingen map voor het thema die nu in gebruik zijn  (%1$s)';
$txt['template_repl_regards'] = 'Standaard begroeting (%1$s)';
// And these are the not so standard ones.
$txt['template_repl_username'] = 'gebruikersnaam (voor login toepassing) van de ontvanger van de email';
$txt['template_repl_realname'] = 'de getoonde naam van de ontvanger van de email';
$txt['template_repl_password'] = 'wachtwoord van de ontvanger van de email (meestal bij registratie)';
$txt['template_repl_forgotpasswordlink'] = 'Link naar de wachtwoord vergeten pagina';
$txt['template_repl_idmember'] = 'Gebruikers ID van de ontvanger van de email';
$txt['template_repl_emailsubject'] = 'onderwerp van de email die gebruiker wil gaan versturen';
$txt['template_repl_emailbody'] = 'de inhoud van de email die de gebruiker wil gaan versturen';
$txt['template_repl_sendername'] = 'de getoonde gebruikers naam van de verzender van de email';
$txt['template_repl_recpname'] = 'de getoonde gebruikers naam van de ontvanger van de email';
$txt['template_repl_appyname'] = 'de getoonde gebruikers naam van de gebruiker die een groepslidmaatschap aanvraagt ';
$txt['template_repl_groupname'] = 'de naam van de groep waarvan het lidmaatschap wordt aangevraagd';
$txt['template_repl_reason'] = 'de reden om toe te willen toetreden tot een groep';
$txt['template_repl_modlink'] = 'de link naar het desbetreffende gebied moderatie gedeelte';
$txt['template_repl_sendernamemanual'] = 'de naam van de afzender, kan gebruiker handmatig invoeren';
$txt['template_repl_recpnamemanual'] = 'de naam van de ontvanger van de e-mail,kan gebruiker handmatig invoeren';
$txt['template_repl_topicsubject'] = 'het onderwerp dat in de e-mail wordt besproken';
$txt['template_repl_topiclink'] = 'de link naar het onderwerp besproken in de e-mail';
$txt['template_repl_comment'] = 'een commentaar toegevoegd door de afzender van de e-mail';
$txt['template_repl_refusereason'] = 'een commentaar toegevoegd door de moderator om te verklaren waarom de aanvraag werd afgewezen';
$txt['template_repl_remindlink'] = 'de link naar de reset password gebied, met inbegrip van de reset-code';
$txt['template_repl_ip'] = 'het IP-adres van de gebruiker waarmee de e-mail is verzonden';
$txt['template_repl_activationlink'] = 'de link om een ​​account te activeren, inclusief de activeringscode';
$txt['template_repl_activationcode'] = 'de code die nodig is om een account te activeren, in het geval dat e-mail providers problemen geven';
$txt['template_repl_activationlinkwithoutcode'] = 'de basisvorm van activatie link zonder code, voor gebruik met de bovengenoemde';
$txt['template_repl_subscrname'] = 'de naam van een betaald abonnement';
$txt['template_repl_subname'] = 'de gebruikersnaam van een gebruiker, wiens betaald abonnement de email activeert.';
$txt['template_repl_subuser'] = 'de getoonde naam van de gebruiker,wiens betaald abonnement de email activeert.';
$txt['template_repl_subemail'] = 'email adres van de gebruiker';
$txt['template_repl_price'] = 'de prijs van het betaalde abonnement';
$txt['template_repl_profilelink'] = 'de link naar gebruikers profiel';
$txt['template_repl_profilelinksubs'] = 'de link naar het abonnementen gebied van het gebruikersprofiel';
$txt['template_repl_date'] = 'de datum waarop het abonnement is gewijzigd';
$txt['template_repl_end_date'] = 'de datum waarop het abonnement verloopt';
$txt['template_repl_suberror'] = 'de fouten details van het betalingssysteem';
$txt['template_repl_refundname'] = 'de gebruikersnaam van een gebruiker die een terugbetaling ontvangen op een betaald abonnement';
$txt['template_repl_refunduser'] = 'de getoonde naam van een gebruiker die een terugbetaling ontvangen';
$txt['template_repl_postername'] = 'de getoonde naam van de gebruiker die de post in kwestie maakte ';
$txt['template_repl_unsubscribelink'] = 'de link naar afmelden notificatie meldingen';
$txt['template_repl_message'] = 'berichten inhoud';
$txt['template_repl_reportername'] = 'de getoonde gebruikers naam van de gebruiker die een bericht rapporteerde';
$txt['template_repl_reportlink'] = 'de link naar het moderatie centrum waar het rapport volledig kan worden beoordeeld';
$txt['template_repl_approvallink'] = 'de link naar het leden goedkeuring gebied';
$txt['template_repl_coppalink'] = 'de link naar COPPA (toestemming van de ouders) formulier voor gebruikers om te downloaden en in te vullen';
$txt['template_repl_subject'] = 'het onderwerp van het bericht';
$txt['template_repl_replylink'] = 'de link naar de antwoord Persoonlijk bericht pagina';
