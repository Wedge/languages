<?php
// Version: 2.0; ManagePosts

// Post Settings
$txt['removeNestedQuotes'] = 'Verwijder geneste quotes tijdens het citeren';
$txt['enableEmbeddedFlash'] = 'Sta Flash embedding toe in berichten';
$txt['enableEmbeddedFlash_warning'] = 'Dit kan een veiligheidsrisico zijn!';
$txt['additional_options_collapsable'] = 'Schakel inklapbare extra bericht opties in';

$txt['max_subjectLength'] = 'Maximale toegestane onderwerp grootte';
$txt['max_subjectLength_zero'] = '0 voor geen max. Attentie: voor waardes > 255 moet het berichten tabel worden gewijzigd.';
$txt['max_messageLength'] = 'Maximum toegestane berichtgrootte';
$txt['max_messageLength_zero'] = '0 voor geen max.';
$txt['topicSummaryPosts'] = 'Berichten om te laten zien op topic overzicht';

$txt['max_image_width'] = 'Max breedte van geplaatste afbeeldingen (0 = uitschakelen)';
$txt['max_image_height'] = 'Max hoogte van geplaatste afbeeldingen (0 = uitschakelen)';

$txt['spamWaitTime'] = 'Tijd benodigd tussen het plaatsen van berichten van hetzelfde IP-adres';
$txt['edit_wait_time'] = 'Wachttijd inschakelen';
$txt['edit_disable_time'] = 'Maximum tijd na het plaatsen om aanpassen toe te staan';
$txt['edit_disable_time_zero'] = '0 om uit te schakelen';
$txt['allow_non_mod_edit'] = 'Toestaan dat niet-moderators moderator bewerkingen kunnen bewerken?';

// Topic Settings
$txt['enableParticipation'] = 'Schakel participatie iconen in';

$txt['correctExclamations'] = 'Corrigeer te veel uitroeptekens in het onderwerp';
$txt['correctShouting'] = 'Maximale % o aantal hoofdletters in het onderwerp';

$txt['oldTopicDays'] = 'Tijd voordat een wordt gemarkeerd als oud bij het geven van een reactie';
$txt['oldTopicDays_zero'] = '0 om uit te schakelen';
$txt['defaultMaxTopics'] = 'Aantal topics per pagina in het bericht index';
$txt['defaultMaxMessages'] = 'Aantal berichten per pagina in een pagina over dat onderwerp';

$txt['enableAllMessages'] = 'Maximale onderwerp grootte te tonen &quot;All&quot; berichten';
$txt['enableAllMessages_zero'] = '0 laat &quot;All&quot; niet zien';
$txt['disableCustomPerPage'] = 'Uitschakelen door de gebruiker gedefinieerde thema/aantal berichten per pagina';
$txt['enablePreviousNext'] = 'Schakel vorig/volgend topic in';

$txt['ignoreMoveVsNew'] = 'Wanneer topics worden verplaatst,verplaatsen naar ieder board toestaan standaard maken';

// Bulletin Board Code
$txt['enableBBC'] = 'Schakel bulletin board code (BCC) in';
$txt['enablePostHTML'] = 'Inschakelen <em>basis</em> HTML in berichten';
$txt['autoLinkUrls'] = 'Link geplaatste URLs automatisch';

$txt['disabledBBC'] = 'Toegestane BBC-tags';
$txt['bbcTagsToUse'] = 'Toegestane BBC-tags';
$txt['bbcTagsToUse_select'] = 'Selecteer de tags die toegestaan zijn';
$txt['bbcTagsToUse_select_all'] = 'Selectere alle tags';

// Post Editor
$txt['disable_wysiwyg'] = 'WYSIWHG editor uitschakelen';
$txt['editorSizes'] = 'Lettergroottes overzicht lijst in de editor';
$txt['editorSizes_subtext'] = 'Één per regel';
$txt['editorFonts'] = 'Lettertypes in lijst van de editor';
$txt['editorFonts_subtext'] = 'Terwijl u hier kunt een lijst van elk lettertype weergeeft, en het zal als " dropdown getoond worden echter zal het alleen werken als het lettertype is geïnstalleerd op de computers van gebruikers.';

// Censored Words
$txt['admin_censored_where'] = 'Zet het woord dat gecensureerd moet worden aan de linkerkant,en hoe dit woord moet worden weergegeven aan de rechterkant.';
$txt['censor_whole_words'] = 'Controleer alleen hele woorden';
$txt['censor_case'] = 'Negeren i.v.m censureren';
$txt['allow_no_censored'] = 'Sta gebruikers toe om woordcensuur uit te schakelen';

$txt['censor_test'] = 'Test Gecensureerde Woorden';
$txt['censor_test_save'] = 'Test';

// Draft Settings
$txt['masterSavePostDrafts'] = 'Schakel het opslaan van concept berichten in';
$txt['draftsave_subnote'] = 'Merk op dat de gebruiker nog toestemming moet hebben.';
$txt['masterAutoSavePostDrafts'] = 'Sta automatisch opslaan van concept berichten toe';
$txt['draftautosave_subnote'] = 'Dit heeft geen voorrang op de bovenstaande optie, alleen om het uit te breiden. Ook moet de gebruiker toestemming hebben.';
$txt['masterAutoSaveDraftsDelay'] = 'Hoe vaak moeten berichten automatisch opgeslagen worden?';
$txt['pruneSaveDrafts'] = 'Bewerk concepten na hoeveel dagen?';

// Merging
$txt['merge_post_header'] = 'Samenvoegen van dubbele berichten';
$txt['merge_post_auto'] = 'Voeg dubbele berichten automatisch samen';
$txt['merge_post_auto_time'] = 'Interval welke berichten niet meer automatisch worden samengevoegd.';
$txt['merge_post_auto_time_subtext'] = '(In seconden; 0 om altijd samen te voegen)';

$txt['merge_post_admin_double_post'] = 'Voeg berichten geplaatst door beheerders samen';

$txt['merge_post_no_time'] = 'Laat de oudere berichten datum niet zien voor het scheidingsteken';
$txt['merge_post_no_sep'] = 'Laat zowel het scheidingsteken als oudere berichten datum niet zien.';
$txt['merge_post_separator'] = 'Scheidingsteken tussen samengevoegde berichten (schakel bovenstaande instelling in)';
$txt['merge_post_separator_subtext'] = 'BBCode mogen gebruikt worden.U kunt de datum van de oudere berichten verkrijgen met behulp van de <strong>$datum</strong> variabele in het tekstveld <br>. Standaard is [size=1]$date[/size][hr][br]';
$txt['merge_post_custom_separator'] = 'Gebruik een aangepaste afscheider tussen samengevoegde berichten.';
$txt['merge_post_custom_separator_subtext'] = 'De instellingen hierboven worden uitgeschakeld';

$txt['merge_post_ignore_length'] = 'Negeer berichten \'maximale lengte';
