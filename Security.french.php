<?php
// Version: 1.0 Alpha; Security

// Important! Before editing these language files please read the text at the top of index.english.php.

$txt['http_error'] = 'Erreur HTTP';

// Titles for the errors
$txt['behav_400'] = 'Une requête invalide a été reçue !';
$txt['behav_403'] = 'Accès interdit.';
$txt['behav_417'] = 'Erreur inattendue.';

$txt['behavior_admin'] = 'Erreur de Sécurité';
$txt['behavior_header'] = 'Nous nous excusons pour le désagrément, mais votre requête n\'a pas pu aboutir ; le mécanisme de défense du site contre le spam et les malwares a détecté un comportement suspicieux similaire à celui d\'un spammeur ou d\'un malware connu. Heureusement, ce problème est facile à régler.<br /><br />Les règles de détection sont basées sur celles de <a href="http://www.bad-behavior.ioerror.us/">Bad Behavior</a>.';

$txt['behavior_false_ua'] = 'Every page request your browser sends, it should be sending a User-Agent - a string to identify itself to the server. The user-agent supplied in this request was false; if you reset it to what the browser is supposed to send, you should be able to access this site.';
$txt['behavior_misconfigured_proxy'] = 'This problem is often associated with proxy servers and systems that are not set up properly. Normally you will need to uninstall the software, since invariably just disabling it is not enough. If this is not an option, please contact the server administrator.';
$txt['behavior_misconfigured_privacy'] = 'This problem can be happen when there is browser privacy software or personal firewall software that was not set-up properly, or has bugs in it. If you are using something like this, you need to either turn it off or change its settings before trying again. (Example: If you use Norton Internet Security, it has a Stealth Mode Browsing feature that interferes with proper Internet operation.)';
$txt['behavior_malware'] = 'This problem can be caused by viruses or spyware on your computer, or by malicious software that pretends to be anti-virus or anti-spyware software. Ensure that you have REAL anti-virus and anti-spyware software on your computer, that they are kept up-to-date, and that you have run a full system scan using each tool. Once your system is cleaned of viruses and spyware, please try your request again.<br /><br />As a first measure, <a href="http://www.microsoft.com/security_essentials/">Microsoft Security Essentials</a> can be a useful free addition if you do not have such tools installed or available, but it is no by means complete.';
$txt['behavior_opera_bug'] = 'Some older versions of the Opera browser have been known to show this behavior; please update to the current version.';
$txt['behavior_chrome_bug'] = 'Some versions of Chrome have a design flaw that can trigger this. One workaround appears to be to clear the browsing history, then reload the page.';

$txt['behavior_footer'] = 'If the above steps do not help, you can contact the webmaster via email: {email_address} and refer to incident number {incident}.';
// Begin the rules as defined in Security.php
// Each rule has a _desc (the text to use, complete with <br /> as appropriate) and _log (the text to display in the admin log)

$txt['behav_blacklist_desc'] = 'Vous n\'avez pas l\'autorisation d\'accéder au serveur.';
$txt['behav_blacklist_log'] = 'Blacklisted user-agent provided';

$txt['behav_not_cloudflare_desc'] = 'Vous n\'avez pas l\'autorisation d\'accéder au serveur.';
$txt['behav_not_cloudflare_log'] = 'User-agent identified itself as CloudFlare, cannot substantiate claim.';

$txt['behav_expect_header_desc'] = 'The request contained an expectation, unfortunately this could not be managed - please retry your request. This is mostly known to be associated with software that has been banned from accessing this site due to observed malicious activity. You are advised to uninstall it and contact the author; in the meantime a conventional browser should be suitable, such as Firefox, Chrome, Opera, Internet Explorer or Safari.';
$txt['behav_expect_header_log'] = 'Request contained \'Expect\' header; asked for resend.';

$txt['behav_no_ua_in_post_desc'] = 'Votre navigateur a envoyé une requête invalide.';
$txt['behav_no_ua_in_post_log'] = 'User-agent did not identify itself, required when posting.';

$txt['behav_content_range_desc'] = 'Votre navigateur a envoyé une requête invalide.';
$txt['behav_content_range_log'] = 'Request contained \'Range\' or \'Content-Range\', should not contain these.';

$txt['behav_empty_refer_desc'] = 'Votre navigateur a envoyé une requête invalide.';
$txt['behav_empty_refer_log'] = 'Request specified \'Referer\' but Referer was blank.';

$txt['behav_invalid_refer_desc'] = 'Votre navigateur a envoyé une requête invalide.';
$txt['behav_invalid_refer_log'] = 'Request specified \'Referer\' but Referer appeared corrupt.';

$txt['behav_alive_close_desc'] = 'Votre navigateur a envoyé une requête invalide.';
$txt['behav_alive_close_log'] = 'Request specified \'Connection\' but contained invalid values.';

$txt['behav_wrong_keep_alive_desc'] = 'Votre navigateur a envoyé une requête invalide.';
$txt['behav_wrong_keep_alive_log'] = 'Request specified \'Keep-Alive\' but form corrupted.';

$txt['behav_rogue_chars_desc'] = 'Vous n\'avez pas l\'autorisation d\'accéder au serveur. Des informations mal intentionnées ont été trouvées dans la requête.';
$txt['behav_rogue_chars_log'] = 'Malicious code found in request.';

$txt['behav_invalid_via_desc'] = 'Il semblerait que vous utilisiez un serveur proxy non autorisé ici.';
$txt['behav_invalid_via_log'] = 'Request contained invalid \'via\' header.';

$txt['behav_banned_via_proxy_desc'] = 'Il semblerait que vous utilisiez un serveur proxy non autorisé ici.';
$txt['behav_banned_via_proxy_log'] = 'Request from banned proxy server.';

$txt['behav_banned_xaa_proxy_desc'] = 'Il semblerait que vous utilisiez un serveur proxy non autorisé ici.';
$txt['behav_banned_xaa_proxy_log'] = 'Invalid headers \'X-Aaaaaaaaaa\' or \'X-Aaaaaaaaaaaa\' found.';

$txt['behav_bot_rfc2965_desc'] = 'The cookies received by the server were not valid. Please update your software, or contact the software author/publisher regarding it not conforming to current Internet standards (specifically, RFC 2965)';
$txt['behav_bot_rfc2965_log'] = 'Bot not compliant with RFC 2965.';

$txt['behav_proxy_connection_desc'] = 'Votre navigateur a envoyé une requête invalide.';
$txt['behav_proxy_connection_log'] = 'Request contained prohibited header \'Proxy-Connection\'.';

$txt['behav_pragma_desc'] = 'Votre navigateur a envoyé une requête invalide.';
$txt['behav_pragma_log'] = 'L\'entête \'Pragma\' est interdite dans les requêtes HTTP/1.1 si elle n\'est pas accompagnée de \'Cache-Control\'.';

$txt['behav_te_error_desc'] = 'Votre navigateur a envoyé une requête invalide.';
$txt['behav_te_error_log'] = 'L\'entête \'TE\' est présente, mais TE n\'est pas spécifié dans l\'entête \'Connection\'.';

$txt['behav_invalid_range_desc'] = 'Le programme que vous utilisez pour accéder à ce serveur n\'est pas autorisé. Utilisez un autre programme, dans l\'idéal un navigateur web standard comme Opera, Firefox, Internet Explorer, Safari ou Chrome.';
$txt['behav_invalid_range_log'] = 'La requête contient l\'entête interdite \'Range\'.';

$txt['behav_no_accept_desc'] = 'Votre navigateur a envoyé une requête invalide.';
$txt['behav_no_accept_log'] = 'La requête ne contenait pas d\'entête \'Accept\'.';

$txt['behav_invalid_win_desc'] = 'Votre requête a été refusée, car les informations concernant votre navigateur sont invalides.';
$txt['behav_invalid_win_log'] = 'L\'entête User-agent se définissait comme IE mais avec une entête trafiquée.';

$txt['behav_te_not_msie_desc'] = 'Votre requête est invalide ; si vous utilisez le navigateur Opera (et vous avez très bon goût), changez ses paramètres d\'identification navigateur en &quot;Opera&quot; dans les options.';
$txt['behav_te_not_msie_log'] = 'L\'entête User-agent se définissait comme IE, mais l\'entête Connection: TE indique que ce n\'est pas vraiment IE.';

$txt['behav_not_msnbot_desc'] = 'Votre requête est invalide ; elle indique que vous êtes associé à un moteur de recherche majeur, mais sans preuves tangibles.';
$txt['behav_not_msnbot_log'] = 'L\'entête User-agent se définissait comme msnbot, mais sans le prouver.';

$txt['behav_not_googlebot_desc'] = 'Votre requête est invalide ; elle indique que vous êtes associé à un moteur de recherche majeur, mais sans preuves tangibles.';
$txt['behav_not_googlebot_log'] = 'L\'entête User-agent se définissait comme Google, mais sans le prouver.';

$txt['behav_offsite_form_desc'] = 'Des données en provenance d\'un autre site ont été soumises ici. Ce n\'est pas autorisé.';
$txt['behav_offsite_form_log'] = 'Un formulaire semble avoir été envoyé de l\'extérieur du site.';

?>