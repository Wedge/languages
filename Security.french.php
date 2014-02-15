<?php

$txt['http_error'] = 'Erreur HTTP';

// Titles for the errors
$txt['behav_400'] = 'Une requête invalide a été reçue !';
$txt['behav_403'] = 'Accès interdit.';
$txt['behav_417'] = 'Erreur inattendue.';

$txt['behavior_admin'] = 'Erreur de Sécurité';
$txt['behavior_header'] = 'Nous nous excusons pour le désagrément, mais votre requête n\'a pas pu aboutir&#8239;; le mécanisme de défense du site contre le spam et les malwares a détecté un comportement suspicieux similaire à celui d\'un spammeur ou d\'un malware connu. Heureusement, ce problème est facile à régler.<br><br>Les règles de détection sont basées sur celles de <a href="http://www.bad-behavior.ioerror.us/">Bad Behavior</a>.';

$txt['behavior_false_ua'] = 'À chaque requête envoyée par le navigateur devrait être associée une entête User-Agent, qui l\'identifie auprès du serveur. L\'agent utilisateur fourni dans cette requête est mensonger. Vous devriez pouvoir accéder au site après avoir rétabli le paramètre par défaut dans votre logiciel.';
$txt['behavior_misconfigured_proxy'] = 'Ce problème est souvent dû à des serveurs proxy et autres systèmes mal configurés. En temps normal, vous devriez désinstaller le logiciel, le désactiver n\'étant pas suffisant. Si vous ne le pouvez pas, contactez l\'administrateur du serveur.';
$txt['behavior_misconfigured_privacy'] = 'Ce problème peut survenir en cas d\'utilisation d\'un pare-feu ou d\'un logiciel de sécurisation de navigation mal configuré ou buggué. Si vous utilisez ce type de logiciel, désactivez-le ou corrigez son paramétrage avant de réessayer. (Exemple&#8239;: Norton Internet Security possède un mode de navigation furtive qui empêche une navigation correcte.)';
$txt['behavior_malware'] = 'Ce problème peut être dû à la présence de virus ou de spywares sur votre ordinateur, ou de logiciels malveillants se présentant comme des antivirus ou des anti-spyware. Assurez-vous que vos logiciels de sécurisation sont authentiques, qu\'ils sont à jour, et que vous avez passé votre système au crible de ces logiciels. Une fois votre ordinateur assaini, réitérez votre demande.<br><br>Si vous n\'y connaissez rien, le logiciel gratuit <a href="http://www.microsoft.com/security_essentials/">Microsoft Security Essentials</a> est une bonne piste de départ, mais ne vous contentez pas de n\'utiliser que lui.';
$txt['behavior_opera_bug'] = 'Quelques versions anciennes du navigateur Opera sont connues pour ce type de comportement. Vous avez bon goût en matière de navigateur, mais mettez-le à jour quand même...';
$txt['behavior_chrome_bug'] = 'Quelques versions du navigateur Chrome ont un souci logiciel pouvant déclencher ce problème. Essayez de vider votre historique de navigation et de recharger la page.';

$txt['behavior_footer'] = 'Si les pistes mentionnées ne vous sont d\'aucune aide, contactez le webmestre par e-mail ({email_address}), et signalez-lui le numéro de l\'incident ({incident}).';

// Begin the rules as defined in Security.php
// Each rule has a _desc (the text to use, complete with <br> as appropriate) and _log (the text to display in the admin log)

$txt['behav_blacklist_desc'] = 'Vous n\'avez pas l\'autorisation d\'accéder au serveur.';
$txt['behav_blacklist_log'] = 'Un agent utilisateur interdit a été utilisé.';

$txt['behav_not_cloudflare_desc'] = 'Vous n\'avez pas l\'autorisation d\'accéder au serveur.';
$txt['behav_not_cloudflare_log'] = 'L\'agent utilisateur s\'est identifié comme étant CloudFlare, mais cela reste à prouver.';

$txt['behav_expect_header_desc'] = 'Le requête signalait une attente, mais celle-ci n\'a pu être comblée. Veuillez réessayer. Ce problème signale peut-être l\'utilisation d\'un logiciel interdit d\'utilisation sur ce site pour cause d\'activités frauduleuses. Nous vous conseillons de le désinstaller et de contacter son auteur&#8239;; remplacez-le en attendant par un navigateur tel qu\'Opera, Firefox, Chrome, Internet Explorer ou Safari.';
$txt['behav_expect_header_log'] = 'La requête contenait l\'entête \'Expect\'&#8239;; une demande de confirmation a été faite.';

$txt['behav_no_ua_in_post_desc'] = 'Votre navigateur a envoyé une requête invalide.';
$txt['behav_no_ua_in_post_log'] = 'L\'agent utilisateur ne s\'est pas identifié, ce qui est requis au moment de poster.';

$txt['behav_content_range_desc'] = 'Votre navigateur a envoyé une requête invalide.';
$txt['behav_content_range_log'] = 'La requête contenait \'Range\' ou \'Content-Range\', ce qui ne devrait pas être le cas.';

$txt['behav_empty_refer_desc'] = 'Votre navigateur a envoyé une requête invalide.';
$txt['behav_empty_refer_log'] = 'La requête spécifiait \'Referer\', mais le référant était vide.';

$txt['behav_invalid_refer_desc'] = 'Votre navigateur a envoyé une requête invalide.';
$txt['behav_invalid_refer_log'] = 'La requête spécifiait \'Referer\', mais le référant semble corrompu.';

$txt['behav_alive_close_desc'] = 'Votre navigateur a envoyé une requête invalide.';
$txt['behav_alive_close_log'] = 'La requête spécifiait \'Connection\' mais contenait des valeurs invalides.';

$txt['behav_wrong_keep_alive_desc'] = 'Votre navigateur a envoyé une requête invalide.';
$txt['behav_wrong_keep_alive_log'] = 'La requête spécifiait \'Keep-Alive\' mais sa forme était corrompue.';

$txt['behav_rogue_chars_desc'] = 'Vous n\'avez pas l\'autorisation d\'accéder au serveur. Des informations mal intentionnées ont été trouvées dans la requête.';
$txt['behav_rogue_chars_log'] = 'Du code malicieux a été trouvé dans la requête.';

$txt['behav_invalid_via_desc'] = 'Il semblerait que vous utilisiez un serveur proxy non autorisé ici.';
$txt['behav_invalid_via_log'] = 'La requête contenait une entête \'via\' invalide.';

$txt['behav_banned_via_proxy_desc'] = 'Il semblerait que vous utilisiez un serveur proxy non autorisé ici.';
$txt['behav_banned_via_proxy_log'] = 'Requête en provenance d\'un serveur proxy banni.';

$txt['behav_banned_xaa_proxy_desc'] = 'Il semblerait que vous utilisiez un serveur proxy non autorisé ici.';
$txt['behav_banned_xaa_proxy_log'] = 'Des entêtes invalides, \'X-Aaaaaaaaaa\' ou \'X-Aaaaaaaaaaaa\', ont été trouvées.';

$txt['behav_bot_rfc2965_desc'] = 'Les cookies reçus par le serveur ne sont pas valides. Mettez à jour votre logiciel, ou contactez son auteur et informez-le de la non-conformité de son logiciel avec les standards de l\'Internet (en particulier, la RFC 2965).';
$txt['behav_bot_rfc2965_log'] = 'Ce robot ne respecte pas la RFC 2965.';

$txt['behav_proxy_connection_desc'] = 'Votre navigateur a envoyé une requête invalide.';
$txt['behav_proxy_connection_log'] = 'La requête contenait une entête interdite, \'Proxy-Connection\'.';

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

$txt['behav_te_not_msie_desc'] = 'Votre requête est invalide&#8239;; si vous utilisez le navigateur Opera (et vous avez très bon goût), changez ses paramètres d\'identification navigateur en &quot;Opera&quot; dans les options.';
$txt['behav_te_not_msie_log'] = 'L\'entête User-agent se définissait comme IE, mais l\'entête Connection: TE indique que ce n\'est pas vraiment IE.';

$txt['behav_not_msnbot_desc'] = 'Votre requête est invalide&#8239;; elle indique que vous êtes associé à un moteur de recherche majeur, mais sans preuves tangibles.';
$txt['behav_not_msnbot_log'] = 'L\'entête User-agent se définissait comme msnbot, mais sans le prouver.';

$txt['behav_not_yahoobot_desc'] = 'Votre requête est invalide&#8239;; elle indique que vous êtes associé à un moteur de recherche majeur, mais sans preuves tangibles.';
$txt['behav_not_yahoobot_log'] = 'L\'entête User-agent se définissait comme Yahoo, mais sans le prouver.';

$txt['behav_not_googlebot_desc'] = 'Votre requête est invalide&#8239;; elle indique que vous êtes associé à un moteur de recherche majeur, mais sans preuves tangibles.';
$txt['behav_not_googlebot_log'] = 'L\'entête User-agent se définissait comme Google, mais sans le prouver.';

$txt['behav_not_baidu_desc'] = 'Votre requête est invalide&#8239;; elle indique que vous êtes associé à un moteur de recherche majeur, mais sans preuves tangibles.';
$txt['behav_not_baidu_log'] = 'L\'entête User-agent se définissait comme Baidu, mais sans le prouver.';

$txt['behav_offsite_form_desc'] = 'Des données en provenance d\'un autre site ont été soumises ici. Ce n\'est pas autorisé.';
$txt['behav_offsite_form_log'] = 'Un formulaire semble avoir été envoyé de l\'extérieur du site.';
