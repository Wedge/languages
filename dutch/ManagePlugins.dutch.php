<?php
// Version: 2.0; ManagePlugins

$txt['plugin_manager_desc'] = 'In dit gebied, kunnen alle plugins op de server worden beheerd.';

$txt['fatal_not_valid_plugin'] = 'De opgegeven plugin kan niet worden geactiveerd, omdat het erop lijkt dat deze ontbreekt of beschadigd is.';
$txt['fatal_not_valid_plugin_remove'] = 'De opgegeven plugin kan niet worden verwijderd omdat deze beschadigd is.';
$txt['install_errors'] = 'Deze plugin kan niet worden gebruikt omdat:';
$txt['fatal_already_enabled'] = 'Deze plugin is al ingeschakeld.';
$txt['fatal_already_disabled'] = 'Deze plugin is al uitgeschakeld.';
$txt['install_error_minphp'] = 'PHP version %1$s is vereist (%2$s beschikbaar)';
$txt['fatal_install_error_minphp'] = 'Deze plugin kan niet worden geïnstalleerd, PHP versie vereist %1$s,maar op deze server is enkel versie %2$s geïnstalleerd.';
$txt['install_error_minmysql'] = 'MySQL versie %1$s is vereist (%2$s beschikbaar)';
$txt['fatal_install_error_minmysql'] = 'Deze plugin kan niet worden geïnstalleerd, MySQL versie vereist %1$s, maar op deze server is enkel versie %2$s geïnstalleerd';
$txt['install_error_missinghook'] = 'Een of meer functies die nodig zijn voor deze plugin zijn niet beschikbaar.';
$txt['install_error_reqfunc'] = 'Deze functie vereist de volgende PHP-functies om toegankelijk te zijn:%1$s';
$txt['install_error_duplicate_id'] = 'Een andere plugin met dezelfde identificatie is al ingeschakeld.';
$txt['fatal_duplicate_id'] = 'Een andere plugin met dezelfde identificatie is al ingeschakeld.misschien een andere versie van dezelfde plug.Deze moet worden uitgeschakeld voordat deze plugin kan worden ingeschakeld.';
$txt['install_error_maint_mode'] = 'Je moet in de onderhoud modus staan voordat u deze plugin kunt installeren.';
$txt['fatal_install_error_maint_mode'] = 'Deze plugin zal grootschalige wijzigingen in de database op uw forum maken. Om dat proces gemakkelijker en sneller uit te voeren, zal de plugin niet toestaan zelf te worden geïnstalleerd, voordat het forum in onderhoud modus staat. Dit is een veiligheidsfunctie en mag niet worden genegeerd.';
$txt['fatal_remove_error_maint_mode'] = 'Deze plugin heeft grootschalige wijzigingen in de database op uw forum aangebracht bij het installeren. Om het verwijderen van deze plugin makkelijker en sneller te verwerken, is het vereist dat het forum in de onderhoud mode wordt gezet voordat het wordt verwijderd. Dit is een veiligheidsfunctie en mag niet worden genegeerd.';
$txt['fatal_install_error_reqfunc'] = 'Deze plugin maakt gebruik van functies die op dit moment niet ondersteund worden door uw PHP-installatie, betreft de volgende functie namen: %1$s.Neem contact op met uw webhost provider voor meer informatie.';
$txt['fatal_install_error_missinghook'] = 'Deze plugin maakt gebruik van functies die op dit moment niet beschikbaar zijn om te installeren, betreft functies met de verwijzingen: %1$s. neem contact op met de plugin auteur voor ondersteuning.';
$txt['fatal_install_enable_missing'] = 'Deze plugin geeft aan dat een bepaald bestand instructies bevat om te worden uitgevoerd bij het inschakelen van het, %1$s, maar het bestand kan niet worden gevonden waar de plugin zei dat het zou moeten zijn.';
$txt['fatal_install_disable_missing'] = 'Deze plugin geeft aan dat een bepaald bestand instructies bevat om te worden uitgevoerd bij het uitschakelen van het, %1$s, maar het bestand kan niet worden gevonden waar de plugin zei dat het zou moeten zijn.';
$txt['fatal_install_remove_missing'] = 'Deze plugin geeft aan dat een bepaald bestand instructies bevat om te worden uitgevoerd bij het verwijderen van het, %1$s, maar het bestand kan niet worden gevonden waar de plugin zei dat het zou moeten zijn.';
$txt['fatal_conflicted_plugins'] = 'Deze plugin biedt functies voor andere plugins. Je kan het niet uitschakelen zonder het uitschakelen van de volgende plugin(s): %1$s';
$txt['no_plugins_found'] = 'Geen plugins gevonden';

$txt['plugin_written_by'] = 'Geschreven door';
$txt['plugin_author_url'] = 'Website auteur';
$txt['plugin_website'] = 'Bezoek de website voor %1$s';
$txt['plugin_author_email'] = 'Stuur de auteur een E-mail';
$txt['plugin_readmes'] = 'Informatie over deze plugin';

$txt['invalid_plugin_readme'] = 'Geen geschikte ¨lees mij¨ kon worden gevonden voor deze plugin.';
$txt['enable_plugin'] = 'Deze plugin inschakelen';
$txt['disable_plugin'] = 'Deze plugin uitschakelen';
$txt['remove_plugin'] = 'Deze plugin verwijderen';

$txt['remove_plugin_desc'] = 'U heeft geselecteerd dat u de plugin wilt verwijderen: %1$s.';
$txt['remove_plugin_blurb'] = 'Er zijn twee manieren waarop een plugin kan worden verwijderd.';
$txt['remove_plugin_nodelete'] = 'Data opslaan';
$txt['remove_plugin_nodelete_desc'] = 'De plug-in en de bestanden worden verwijderd, maar alle gegevens en instellingen worden bewaard. Voor meer informatie over wat er zal behouden worden, neem dan contact op met de auteur van de plugin.';
$txt['remove_plugin_delete'] = 'Data verwijderen';
$txt['remove_plugin_delete_desc'] = 'De plugin plus de gegevens en instellingen worden <strong>verwijderd</strong>.Er is geen ongedaan-faciliteit voor deze! <strong>Voer dit alleen uit als je absoluut zeker weet dat je deze plugin niet meer wilt gebruiken.</strong>';
$txt['remove_plugin_unsure'] = 'Als u niet zeker weet of u de gegevens wel of niet wilt behouden, selecteren dan om "de gegevens niet te verwijderen"';
$txt['remove_plugin_already_enabled'] = 'Deze plugin is momenteel ingeschakeld. U moet deze eerst uitschakelen voordat u probeert om het te verwijderen.';
$txt['remove_plugin_files_still_there'] = 'Plugin bestand kan niet verwijderd worden.Misschien moet je inloggen op je server met FTP om de %1$s map te verwijderen.';
$txt['remove_plugin_files_pre_still_there'] = 'Uw plugin is nog niet verwijderd; de bestanden kunnen niet worden verwijderd zonder in te loggen op FTP om de permissies te veranderen.';
$txt['remove_plugin_maint'] = 'Deze plugin vereist dat het forum in de onderhoudsmode wordt gezet voordat de uitgebreide gegevensbank veranderingen kunnen worden verwijderd.';

$txt['plugin_filter'] = 'Filter plugins:';
$txt['plugin_filter_all'] = 'Alle (%1$d)';
$txt['plugin_filter_enabled'] = 'Geactiveerd (%1$d)';
$txt['plugin_filter_disabled'] = 'Niet geactiveerd (%1$d)';
$txt['plugin_filter_install_errors'] = 'Incompatibel (%1$d)';

$txt['could_not_connect_remote'] = 'Wedge was niet in staat om in te loggen op de server om wijzigingen uit te voeren <br> De server gaf de volgende foutmelding:.%1$s<br><br> U kunt proberen terug te gaan om de verstrekte inloggegevens te controleren.';

$txt['plugins_no_gzinflate'] = 'Uw server biedt geen ondersteuning aan gzinflate, zodat de upload/download plugin faciliteiten niet beschikbaar zijn. Uw host kan in staat zijn om te helpen als ze zlib ondersteuning in PHP inschakelen.';
$txt['plugins_add_desc'] = 'Vanuit dit gebied, kunt u nieuwe plugins toe voegen aan je forum.';
$txt['plugins_add_download'] = 'Download een plugin van een Repository.';
$txt['plugins_add_download_desc'] = 'Er zijn repositories die verschillende plugins bevatten voor je forum,u kunt de onderstaande opties gebruiken om plugins te vinden.';
$txt['plugins_repository'] = 'Repository';
$txt['plugins_active'] = 'Actief';
$txt['plugins_browse'] = 'Doorbladeren';
$txt['plugins_modify'] = 'Modificeren';
$txt['plugins_no_repos'] = 'Geen repositories vermeld.';
$txt['plugins_add_repo'] = 'repository toevoegen';
$txt['plugins_repo_auth'] = 'Wanneer deze repository wordt benaderd,zullen de inloggegevens worden mee geleverd';
$txt['plugins_repo_error'] = 'Fout';
$txt['plugins_add_upload'] = 'Upload een plugin vanaf je PC';
$txt['plugins_add_upload_desc'] = 'U kunt deze faciliteit gebruiken om een plugin in zip-formaat te uploaden naar je forum.';
$txt['plugins_add_upload_file'] = 'Het plugin-bestand om te uploaden:';
$txt['plugins_upload_plugin'] = 'Upload Plugin';

$txt['plugins_browse_invalid_error'] = 'U probeerd een plugin repository te benaderen die niet bestaat.';
$txt['plugins_browse_could_not_connect'] = 'De geselecteerde plugin repository kon niet worden gevonden; het kan zijn dat deze tijdelijk niet beschikbaar is. U kunt proberen om deze handmatig te vinden via de link: <a href="%1$s">%1$s</a>';

$txt['plugins_edit_repo'] = 'repository bewerken';
$txt['plugins_edit_repo_desc'] = 'Vanaf deze pagina kunt u de details bepalen voor extra repositories voor plugins.';
$txt['plugins_edit_invalid'] = 'U heeft geprobeerd een plugin repository te bewerken die niet bestaat. U kunt een nieuwe repository hieronder toe voegen.';
$txt['plugins_edit_invalid_error'] = 'U heeft geprobeerd een plugin repository die niet bestaat te bewerken.';
$txt['plugins_repo_details'] = 'Repository beschrijving';
$txt['plugins_repo_details_desc'] = 'Een repository heeft een naam en een adres, en optioneel indien nodig,kunt u ook een gebruikersnaam en wachtwoord meegeven  dat wordt gebruikt wanneer u contact opneemt met de repository plugins.';

$txt['plugins_repo_name'] = 'Naam repository';
$txt['plugins_repo_address'] = 'Adres repository';
$txt['plugins_repo_active'] = 'Repository is actief';
$txt['plugins_repo_delete'] = 'Verwijder';
$txt['plugins_repo_delete_confirm'] = 'Weet je het zeker om deze repository te verwijderen ? Er is geen ongedaan optie aanwezig';

$txt['plugins_repo_auth'] = 'Wanneer deze repository wordt benaderd,zullen de inloggegevens worden mee geleverd';
$txt['plugins_repo_auth_desc'] = 'Als deze repository een gebruikersnaam en wachtwoord nodig heeft, moeten deze hier worden ingevoerd. Als er geen gegevens machtiging moeten worden gebruikt, laat beide vakken dan leeg.';
$txt['plugins_repo_username'] = 'Gebruikersnaam repository';
$txt['plugins_repo_password'] = 'Wachtwoord repository';
$txt['plugins_repo_password_blank'] = 'Waarom is het veld leeg?';

$txt['plugins_repo_no_name'] = 'Er is geen repository naam ingegeven; is vereist.';
$txt['plugins_repo_no_url'] = 'Geen adres ingegeven voor deze repository; is vereist';
$txt['plugins_repo_invalid_url'] = 'Ingegeven repository adrs is ongeldig, a.u.b nakijken en opnieuw proberen';
$txt['plugins_auth_pwd_nouser'] = 'U heeft een wachtwoord voor een repository ingegeven, maar geen gebruikersnaam - als u wenst om de accountgegevens voor een repository te geven, zijn zowel gebruikersnaam en wachtwoord vereist.';
$txt['plugins_auth_diffuser'] = 'U heeft een gebruikersnaam maar geen wachtwoord verstrekt (of, je hebt geprobeerd om de gebruikersnaam voor deze repository te wijzigen, en het wachtwoord niet opnieuw ingegeven), beide moeten worden ingegeven als gegevens worden gebruikt.';

$txt['plugins_invalid_upload'] = 'U lijkt een upload van een plugin te hebben geprobeerd, maar het bestand kan niet worden opgeslagen. Misschien was het te groot voor de server, of een andere hosting beperking. Vergeet niet: de plugin kan altijd worden opgeslagen op uw eigen computer en geupload via FTP of SFTP naar Plugins/map van uw forum.';
$txt['plugins_unable_read'] = 'De plugin is geüpload maar om wat voor reden dan ook, Wedge was niet in staat om de plugin te lezen. Dit kan worden veroorzaakt door een ongewone configuratie van de host, en kan betekenen dat plugins moeten worden geüpload via FTP of SFTP in plaats van uploaden via de webinterface ';
$txt['plugins_unable_write'] = 'De plugin is geüpload maar om wat voor reden dan ook, Wedge was niet in staat om de plugin uit pakken. Dit kan worden veroorzaakt door een ongewone configuratie van de host, en kan betekenen dat u nodig heeft om plugins te Plugins / folder van het forum via FTP of SFTP in plaats van via de webinterface te uploaden.';
$txt['plugins_invalid_zip'] = 'De plugin is geüpload maar om wat voor reden dan ook, het ZIP-bestand blijkt ongeldig te zijn en kan niet worden uitgepakt in een bruikbare plugin,als alternatief kunt u deze handmatig uit pakken op je computer en vervolgens uploaden naar Plugins / folder van het forum via FTP of SFTP .';
$txt['plugins_generic_error'] = 'De plugin is geüpload maar helaas ging er iets onverwachts mis. Neem contact op met Wedge ondersteuning en gebruik de referentie:%1$s:%2$s bij het beschrijven van uw probleem.';
$txt['plugins_invalid_plugin_no_info'] = 'Uw plugin is toegevoegd, maar bevat niet een geldige plugin-info.xml bestand dat Wedge nodig heeft om het te begrijpen.Neem contact op met de auteur van de plugin voor ondersteuning.';
$txt['plugins_invalid_plugin_overinfo'] = 'Uw plugin is toegevoegd, maar die bevat meerdere bestanden genaamd plugin-info.xml Wedge weet niet naar welke van deze moet worden door verwezen. Neem contact op met de auteur van de plugin voor ondersteuning.';
$txt['plugins_uploaded_error'] = 'Er was een probleem met de plug-in,sinds het is geüpload.Probeer opnieuw te uploaden.';
$txt['plugins_uploaded_tampering'] = 'Er was een probleem met de plug-in,sinds het is geüpload; er zijn enkele tekenen dat er mee gerommeld is en het is daarom verwijderd voor uw bescherming.';

$txt['plugin_duplicate_detected_title'] = 'Duplicate Plugin gedetecteerd';
$txt['plugin_duplicate_detected'] = 'De plugin die je hebt geüpload ($1$s) blijkt een duplicaat van een bestaande actieve plugin te zijn op uw website (%2$s) . Wat wil je ermee doen?';
$txt['plugin_duplicate_cancel'] = 'Ik wil er niets mee doen op dit moment';
$txt['plugin_duplicate_cancel_desc'] = 'De bestaande plugin zal intact blijven, en het bestand dat u zojuist heeft geüpload zal worden opgeruimd.';
$txt['plugin_duplicate_proceed'] = 'I wil mijn oude plugin vervangen voor de nieuwe';
$txt['plugin_duplicate_proceed_desc'] = 'De bestaande plugin zal worden uitgeschakeld en de bijbehorende bestanden (maar niet de gegevens) worden verwijderd,de nieuwe wordt uitgepakt en zijn klaar om in te schakelen.';

$txt['plugin_upload_successful_title'] = 'Upload geslaagd';
$txt['plugin_upload_successful'] = 'Uw plugin bestand is geüpload en tot nu toe lijkt deze geldig te zijn. Vervolgens zal Wedge het proces van het uitpakken van de plugin starten. Dit wordt in meerdere stappen uitgevoerd om serverbelasting beperken.';

$txt['plugin_connection_successful_title'] = 'Verbinding geslaagd';
$txt['plugin_connection_successful'] = 'De verstrekte gegevens voor uw server lijkt juist te zijn, dus kunnen we nu overgaan tot de volgende fase van de upload.';

$txt['plugin_connection_details_title'] = 'Verbindingsdetails';
$txt['plugin_connection_details'] = 'Om door te kunnen gaan, vereist Wedge FTP of SFTP referenties zodat uw plugin correct op de server kan worden geïnstalleerd.';
$txt['plugin_connection_cancel_oops'] = 'Uhh....';
$txt['plugin_connection_cancel'] = 'In het geval dat uw host u geen toegang heeft gegeven via FTP of SFTP zult u niet in staat zijn om de webinterface te gebruiken en moet u contact opnemen met uw host over andere manieren om bestanden te beheren; In deze gevallen moet u mogelijk uw hosting gebruikers paneel handmatig gebruiken.';
$txt['plugin_connection_button'] = 'Ik heb deze niet ';
$txt['plugin_connection_required'] = 'Ervan uitgaande dat je deze gegevens weet, hier is wat Wedge van je weten moet.';

$txt['plugin_connection'] = 'Dit zijn mijn gegevens';
$txt['plugin_ftp_server'] = 'Server:';
$txt['plugin_ftp_port'] = 'Poort:';
$txt['plugin_ftp_username'] = 'Gebruikersnaam:';
$txt['plugin_ftp_password'] = 'Wachtwoord:';
$txt['plugin_ftp_type'] = 'Verbindingstype:';
$txt['plugin_ftp_path'] = 'Pad naar de map Plugins:';
$txt['plugin_ftp_save'] = 'Bewaar deze gegevens voor later';
$txt['plugin_ftp_error'] = 'De gegevens zijn onjuist:';
$txt['plugin_ftp_error_bad_server'] = 'De server blijkt onjuist te zijn.';
$txt['plugin_ftp_error_bad_response'] = 'Na contact met de FTP-server, was er een vreemde reactie;probeer het later opnieuw.';
$txt['plugin_ftp_error_bad_username'] = 'De ingegeven gebruikersnaam is onjuist.';
$txt['plugin_ftp_error_bad_password'] = 'Het ingegeven wachtwoord is onjuist.';
$txt['plugin_ftp_error_wrong_folder'] = 'De ingegeven map is onjuist,alle pogingen om de juiste map te lokaliseren zijn mislukt.';

$txt['plugin_files_pruned_title'] = 'Verouderde Plugin verwijderd';
$txt['plugin_files_pruned'] = 'De oude plugin werd met succes verwijderd. Wedge zal nu beginnen met de nieuwe plugin te installeren.';

$txt['plugin_folders_created_title'] = 'Mappen aangemaakt';
$txt['plugin_folders_created'] = 'Voordat de bestanden worden uitgepakt,zal Wedge alle relevante mappen voor de bestanden in je plugin toevoegen. Dit is nu gedaan, zodat alles wat overblijft is om de bestanden te uploaden.';

$txt['plugin_files_unpacked_title'] = 'Bestanden uitgepakt';
$txt['plugin_files_unpacked'] = 'Alle bestanden zijn uitgepakt.Je moet nu in staat om de plugin te gebruiken!';
