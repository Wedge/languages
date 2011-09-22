<?php
// Version: 2.0; ManageSettings

global $scripturl;

$txt['modSettings_desc'] = 'Cette page vous permet de paramétrer les caractéristiques et options de base de votre forum. Veuillez voir les <a href="' . $scripturl . '?action=admin;area=theme;sa=settings;th=%1$s;%3$s=%2$s">Réglages du thème</a> pour plus d\'options. Cliquez sur l\'icône d\'aide pour plus d\'informations à propos d\'un paramètre.';
$txt['security_settings_desc'] = 'Cette page vous permet de régler les options spécifiquement liées à la sécurité et la modération de votre forum, en incluant les options anti-spam.';
$txt['modification_settings_desc'] = 'Cette page contient les réglages ajoutés par les extensions à votre forum';

$txt['modification_no_misc_settings'] = 'Aucune des extensions installées n\'a encore ajouté de réglages à cet endroit.';

$txt['pollMode'] = 'Mode de sondage';
$txt['disable_polls'] = 'Désactiver les sondages';
$txt['enable_polls'] = 'Activer les sondages';
$txt['polls_as_topics'] = 'Montrer les sondages existants comme des sujets';
$txt['allow_guestAccess'] = 'Permettre aux invités de parcourir le forum';
$txt['userLanguage'] = 'Permettre aux utilisateurs de choisir la langue';
$txt['time_format'] = 'Format d\'heure par défaut';
$txt['setting_time_offset'] = 'Décalage horaire général<dfn>(ajouté aux options spécifiques des membres.)</dfn>';
$txt['setting_default_timezone'] = 'Fuseau horaire du serveur';
$txt['failed_login_threshold'] = 'Seuil de connexions dépassé';
$txt['lastActive'] = 'Seuil de temps de connexion en ligne';
$txt['trackStats'] = 'Suivi des statistiques au quotidien';
$txt['hitStats'] = 'Suivi des pages vues au quotidien (les stats doivent être activées)';
$txt['enableCompressedOutput'] = 'Activer la compression des pages';
$txt['enableCompressedData'] = 'Activer la compression des JS et CSS';
$txt['obfuscate_filenames'] = 'Crypter les noms des fichiers JS et CSS';
$txt['minify'] = 'Minification des fichiers JavaScript';
$txt['minify_none'] = 'Ne pas minifier';
$txt['minify_jsmin'] = 'Minifier avec JSMin';
$txt['minify_packer'] = 'Minifier avec Packer';
$txt['jquery_origin'] = 'Distribution du fichier jQuery';
$txt['jquery_local'] = 'Par mon site (fusionné avec script.js)';
$txt['jquery_jquery'] = 'Par le réseau de jQuery';
$txt['jquery_google'] = 'Par le réseau de Google';
$txt['jquery_microsoft'] = 'Par le réseau de Microsoft';
$txt['disableTemplateEval'] = 'Désactiver l\'évaluation des modèles (templates)';
$txt['db_show_debug'] = 'Montrer les informations de débogage';
$txt['db_show_debug_who'] = 'Montrer les informations de débogage à ces utilisateurs&nbsp;:';
$txt['db_show_debug_who_log'] = 'Montrer la liste des requêtes SQL exécutées à ces utilisateurs&nbsp;:';
$txt['db_show_debug_admin'] = 'Administrateurs uniquement';
$txt['db_show_debug_admin_mod'] = 'Administrateurs et modérateurs';
$txt['db_show_debug_regular'] = 'Tous les membres connectés';
$txt['db_show_debug_any'] = 'Tous les utilisateurs, y compris les invités';

$txt['databaseSession_enable'] = 'Faire gérer les sessions par la base de données';
$txt['databaseSession_loose'] = 'Permettre aux navigateurs de revenir sur les pages en cache';
$txt['databaseSession_lifetime'] = 'Secondes avant la fin d\'une session pour inutilisation';
$txt['enableErrorLogging'] = 'Enregistrer les erreurs dans le journal';
$txt['enableErrorQueryLogging'] = 'Inclure la requête de base de données dans le journal d\'erreurs';
$txt['logPruning'] = 'Délestage des journaux';
$txt['log_enabled_moderate'] = 'Enregistrer les actions de modération dans le journal dédié<dfn>Inclut la suppression de messages, le déplacement de sujets, etc.</dfn>';
$txt['log_enabled_admin'] = 'Enregistrer les actions d\'administration dans le journal dédié<dfn>Inclut par exemple la création de nouvelles sections.</dfn>';
$txt['log_enabled_profile'] = 'Enregistrer les modifications faites aux profils des membres<dfn>Inclut par exemple les changements de pseudonyme, de champs, etc.</dfn>';
$txt['pruningOptions'] = 'Activer le délestage des entrées de journal';
$txt['pruneErrorLog'] = 'Supprimer les entrées du journal d\'<strong>erreurs</strong> plus anciennes que...<dfn>(0 pour désactiver)</dfn>';
$txt['pruneModLog'] = 'Supprimer les entrées du journal de <strong>modération</strong> plus anciennes que...<dfn>(0 pour désactiver)</dfn>';
$txt['pruneReportLog'] = 'Supprimer les entrées du journal de <strong>modération</strong> plus anciennes que...<dfn>(0 pour désactiver)</dfn>';
$txt['pruneScheduledTaskLog'] = 'Supprimer les entrées du journal de <strong>tâches planifiées</strong> plus anciennes que...<dfn>(0 pour désactiver)</dfn>';
$txt['pruneSpiderHitLog'] = 'Supprimer les visites des <strong>moteurs de recherche</strong> plus anciennes que...<dfn>(0 pour désactiver)</dfn>';
$txt['cookieTime'] = 'Durée par défaut des témoins (<em>cookies</em>) - en minutes';
$txt['localCookies'] = 'Activer l\'archivage local des témoins<dfn>(SSI ne fonctionnera pas bien si ceci est activé.)</dfn>';
$txt['globalCookies'] = 'Utiliser des témoins valides pour tous les sous-domaines<dfn>(désactivez d\'abord l\'archivage local des cookies&nbsp;!)</dfn>';
$txt['secureCookies'] = 'Forcer la sécurisation des témoins<dfn>(Attention, à n\'utiliser que si votre site est en HTTPS&nbsp;!)</dfn>';
$txt['send_validation_onChange'] = 'Demander une réactivation après un changement d\'adresse e-mail';
$txt['approveAccountDeletion'] = 'Nécessiter l\'approbation d\'un admin quand un membre supprime son compte';
$txt['autoOptMaxOnline'] = 'Attendre pour l\'optimisation que le nombre d\'utilisateurs en ligne ne dépasse pas<dfn>(0 pour aucune limite.)</dfn>';
$txt['autoFixDatabase'] = 'Réparer automatiquement les tables contenant des erreurs';
$txt['allow_disableAnnounce'] = 'Permettre aux utilisateurs de désactiver les annonces';
$txt['disallow_sendBody'] = 'Ne pas inclure le corps des messages dans les notifications';
$txt['max_pm_recipients'] = 'Nombre maximal autorisé de destinataires dans un message personnel<dfn>(0 pour illimité, les admins sont exemptés)</dfn>';
$txt['pm_posts_verification'] = 'Nombre de messages de forum en dessous duquel les utilisateurs doivent entrer un code lorsqu\'ils envoient des messages personnels<dfn>(0 pour pas de limite, les admins sont exemptés)</dfn>';
$txt['pm_posts_per_hour'] = 'Nombre de messages personnels qu\'un utilisateur peut envoyer en une heure<dfn>(0 pour pas de limite, les modérateurs sont exemptés)</dfn>';
$txt['compactTopicPagesContiguous'] = 'Nombre de Pages adjacentes à afficher';
$txt['todayMod'] = 'Activer les dates abrégées';
$txt['today_disabled'] = 'Désactivé';
$txt['today_only'] = 'Seulement Aujourd\'hui';
$txt['yesterday_today'] = 'Aujourd\'hui &amp; Hier';
$txt['enableVBStyleLogin'] = 'Afficher un champ de connexion sur toutes les pages';
$txt['timeLoadPageEnable'] = 'Afficher le temps pris pour générer la page';
$txt['disableHostnameLookup'] = 'Désactiver la recherche du nom d\'hôte';
$txt['who_enabled'] = 'Activer &quot;Qui est en ligne&nbsp;?&quot;';

$txt['caching_information'] = '<div class="centertext" style="font-weight: bold; text-decoration: underline">Important&nbsp;! Veuillez lire ce qui suit avant d\'activer ces options.</div><br>
	Wedge peut mettre des données en cache en utilisant des accélérateurs. Les accélérateurs actuellement supportés sont les suivants&nbsp;:<br>
	<ul class="normallist">
		<li>APC</li>
		<li>eAccelerator</li>
		<li>Memcached</li>
		<li>Zend Platform/Performance Suite (pas Zend Optimizer)</li>
	</ul>
	Le système de cache fonctionnera mieux si PHP est compilé avec l\'un des accélérateurs susmentionnés, ou si memcache est disponible.
	<strong>Si aucun accélérateur n\'est installé, Wedge fera du cache fichier.</strong><br><br>
	Wedge gère plusieurs niveaux de cache. Plus le niveau est haut, plus le processeur de votre serveur sera utilisé
	pour récupérer les informations. Si un système de cache est disponible sur votre serveur, il est recommandé de le tester au niveau 1 avant tout.
	<br><br>
	Veuillez noter que l\'utilisation de memcache nécessite que vous donniez quelques indications sur votre serveur dans les réglages à effectuer ci-dessous. Elles doivent être entrées sous forme de liste, dont les éléments sont séparés par une virgule,
	comme dans l\'exemple suivant&nbsp;:<br>
	&quot;serveur1,serveur2,serveur3:port,serveur4&quot;<br>
	Si aucun port n\'est spécifié, Wedge utilisera le port 11211 par défaut, et équilibrera de manière aléatoire la charge sur les serveurs.
	<br><br>
	%1$s';

$txt['detected_no_caching'] = '<strong class="alert">Wedge n\'a pas pu détecter d\'accélérateur compatible sur votre serveur.</strong>';
$txt['detected_APC'] = '<strong style="color: green">Wedge a détecté qu\'APC est installé sur votre serveur.</strong>';
$txt['detected_eAccelerator'] = '<strong style="color: green">Wedge a détecté qu\'eAccelerator est installé sur votre serveur.</strong>';
$txt['detected_Zend'] = '<strong style="color: green">Wedge a détecté que Zend est installé sur votre serveur.</strong>';
$txt['detected_Memcached'] = '<strong style="color: green">Wedge a détecté que Memcached est installé sur votre serveur.</strong>';
$txt['detected_XCache'] = '<strong style="color: green">Wedge a détecté que XCache est installé sur votre serveur.</strong>';

$txt['cache_enable'] = 'Niveau de cache';
$txt['cache_off'] = 'Aucun cache';
$txt['cache_level1'] = 'Cache de niveau 1 (Recommandé)';
$txt['cache_level2'] = 'Cache de niveau 2';
$txt['cache_level3'] = 'Cache de niveau 3 (Non recommandé)';
$txt['cache_memcached'] = 'Réglages de Memcache';

$txt['loadavg_warning'] = '<span class="error">Attention, les paramètres ci-dessous doivent être modifiés avec prudence. Un paramètre trop bas pourrait rendre votre forum <strong>inutilisable</strong>&nbsp;! La charge moyenne actuelle est de <strong>%01.2f</strong></span>';
$txt['loadavg_enable'] = 'Activer la répartition de charge par moyennes';
$txt['loadavg_auto_opt'] = 'Limite pour désactiver l\'optimisation automatique de la base de données';
$txt['loadavg_search'] = 'Limite pour désactiver la recherche';
$txt['loadavg_allunread'] = 'Limite pour désactiver la liste des sujets non lus';
$txt['loadavg_unreadreplies'] = 'Limite pour désactiver la liste des réponses non lues';
$txt['loadavg_show_posts'] = 'Limite pour désactiver l\'affichage des messages';
$txt['loadavg_forum'] = 'Limite pour désactiver <strong>complètement</strong> le forum';
$txt['loadavg_disabled_conf'] = '<span class="error">La configuration de votre serveur ne supporte pas la répartition de charge.</span>';

$txt['reverse_proxy'] = 'Ajouter le support des proxies inverses';
$txt['reverse_proxy_header'] = 'Entête HTTP Proxy avec adresse IP';
$txt['reverse_proxy_ips'] = 'IP ou bloc d\'adresses CIDR de serveurs proxy';
$txt['reverse_proxy_one_per_line'] = 'N\'entrez qu\'adresse par ligne';

$txt['setting_password_strength'] = 'Protection requise pour les mots de passe utilisateur';
$txt['setting_password_strength_low'] = 'Basse - 4 caractères minimum';
$txt['setting_password_strength_medium'] = 'Moyenne - Ne doit pas contenir l\'identifiant';
$txt['setting_password_strength_high'] = 'Haute - mélange de différents caractères';

$txt['antispam_Settings'] = 'Vérification Anti-Spam';
$txt['antispam_Settings_desc'] = 'Cette section vous permet de régler les contrôles de vérification pour vous assurer que l\'utilisateur est un humain (et non un robot), et peaufiner comment et où ils doivent s\'appliquer.';
$txt['setting_reg_verification'] = 'Demander une vérification au moment de l\'inscription';
$txt['posts_require_captcha'] = 'Nombre de messages de forum en dessous duquel les utilisateurs doivent entrer un code pour poster un message';
$txt['posts_require_captcha_desc'] = '(0 pour pas de limite, les modérateurs sont exemptés)';
$txt['search_enable_captcha'] = 'Demander une vérification sur toutes les recherches des invités';
$txt['setting_guests_require_captcha'] = 'Les invités doivent passer la vérification pour envoyer un message';
$txt['setting_guests_require_captcha_desc'] = '(Activé d\'office si vous spécifiez un nombre minimum de messages ci-dessous)';
$txt['guests_report_require_captcha'] = 'Les invités doivent passer la vérification pour signaler un message aux modérateurs';

$txt['configure_captcha'] = 'Configurer les images CAPTCHA';
$txt['configure_captcha_desc'] = '<span class="smalltext">Un CAPTCHA est une forme de protection contre les robots spammeurs.</span>';
$txt['use_captcha_images'] = 'Autoriser l\'emploi d\'images CAPTCHA&nbsp;?';
$txt['use_animated_captcha'] = 'Utiliser des images animées pour les CAPTCHA&nbsp;?';
$txt['use_animated_captcha_desc'] = 'Les tests CAPTCHA animés sont beaucoup plus difficiles à passer pour les robots, mais peuvent aussi gêner les humains...';

$txt['setting_qa_verification_number'] = 'Nombre de questions de vérification auquel un utilisateur doit répondre';
$txt['setting_qa_verification_number_desc'] = '(0 pour désactiver; les questions sont réglées ci-dessous)';
$txt['setup_verification_questions'] = 'Questions de Vérification';
$txt['setup_verification_questions_desc'] = '<span class="smalltext">Si vous voulez que les utilisateurs répondent à des questions de vérification dans le but de stopper les robots spammeurs, vous pouvez mettre en place des questions dans la table ci-dessous. Choisissez des questions relativement simples; les réponses ne sont pas sensibles à la casse. Vous pouvez utiliser du BBCode dans les questions pour le formatage. Pour supprimer une question, effacez simplement le contenu de cette ligne.</span>';
$txt['setup_verification_question'] = 'Question';
$txt['setup_verification_answer'] = 'Réponse';
$txt['setup_verification_add_more'] = 'Ajouter une autre question';

$txt['moderation_settings'] = 'Réglages de Modération';
$txt['setting_warning_watch'] = 'Niveau de sanction pour la mise sous surveillance<dfn>Le niveau de sanction après lequel une surveillance de l\'utilisateur est mise en place - 0 pour désactiver.</dfn>';
$txt['setting_warning_moderate'] = 'Niveau de sanction pour la prémodération des messages<dfn>Le niveau de sanction après lequel un utilisateur voit tous ses messages modérés avant publication - 0 pour désactiver.</dfn>';
$txt['setting_warning_mute'] = 'Niveau de sanction pour réduire au silence l\'utilisateur<dfn>Le niveau de sanction après lequel un utilisateur ne peut plus rien poster - 0 pour désactiver.</dfn>';
$txt['setting_user_limit'] = 'Points de sanction maximum par jour<dfn>Cette valeur est le quota maximal de points de sanction qu\'un seul modérateur peut assigner à un utilisateur particulier en 24 heures - 0 pour pas de limite.</dfn>';
$txt['setting_warning_decrement'] = 'Points de sanction à enlever automatiquement par jour<dfn>Ne s\'applique qu\'aux utilisateurs non sanctionnés depuis au moins 24 heures - mettre à 0 pour désactiver.</dfn>';
$txt['setting_warning_show'] = 'Qui peut voir l\'état de sanction<dfn>Détermine qui peut voir le niveau de sanction d\'un utilisateur sous le coup d\'une, euh... sanction.</dfn>';
$txt['setting_warning_show_mods'] = 'Modérateurs seulement';
$txt['setting_warning_show_user'] = 'Modérateurs et l\'utilisateur concerné';
$txt['setting_warning_show_all'] = 'Tout le monde';

$txt['member_options_desc'] = 'Cette section vous permet de configurer les options générales qui s\'appliquent aux membres de votre communauté.';
$txt['allow_editDisplayName'] = 'Permettre aux membres de modifier leur pseudonyme';
$txt['allow_hideOnline'] = 'Permettre aux membres de cacher leur présence en ligne';
$txt['titlesEnable'] = 'Activer les titres personnalisés';
$txt['enable_buddylist'] = 'Activer les listes de contacts et d\'ignorés';
$txt['default_personal_text'] = 'Texte personnel par défaut<dfn>Ce texte sera assigné aux nouveaux membres à leur inscription.</dfn>';

$txt['signature_settings'] = 'Paramètres de Signature';
$txt['signature_settings_desc'] = 'Utilisez les paramètres de cette page pour décider des fonctionnalités offertes aux membres pour leurs signatures.';
$txt['signature_settings_warning'] = 'Notez que par défaut, ces paramètres ne sont pas appliqués sur les signatures existantes. Cliquez <a href="' . $scripturl . '?action=admin;area=memberoptions;sa=sig;apply;%2$s=%1$s">ici</a> pour appliquer les règles à toutes les signatures existantes.';
$txt['signature_enable'] = 'Activer les signatures';
$txt['signature_max_length'] = 'Nombre maximal de caractères autorisé<dfn>(0 pour pas de max.)</dfn>';
$txt['signature_max_lines'] = 'Nombre maximal de lignes<dfn>(0 pour pas de max)</dfn>';
$txt['signature_max_images'] = 'Nombre maximal d\'images<dfn>(0 pour pas de max - à l\'exception des smileys)</dfn>';
$txt['signature_allow_smileys'] = 'Autoriser les smileys dans les signatures';
$txt['signature_max_smileys'] = 'Nombre maximal de smileys<dfn>(0 pour pas de max)</dfn>';
$txt['signature_max_image_width'] = 'Taille maximale des images de signature (pixels)<dfn>(0 pour pas de max)</dfn>';
$txt['signature_max_image_height'] = 'Hauteur maximale des images de signature (pixels)<dfn>(0 pour pas de max)</dfn>';
$txt['signature_max_font_size'] = 'Taille de police maximale autorisée dans les signatures<dfn>(en pixels, 0 pour pas de max)</dfn>';
$txt['signature_bbc'] = 'Balises BBCode autorisées';

$txt['custom_profile_title'] = 'Champs de profil personnalisés';
$txt['custom_profile_desc'] = 'Sur cette page, vous pouvez créer vos propres champs de profil correspondant aux besoins de votre forum.';
$txt['custom_profile_active'] = 'Actif';
$txt['custom_profile_fieldname'] = 'Nom du champ';
$txt['custom_profile_fieldtype'] = 'Type de champ';
$txt['custom_profile_make_new'] = 'Nouveau champ';
$txt['custom_profile_none'] = 'Vous n\'avez pas encore créé de champ de profil personnalisé&nbsp;!';
$txt['custom_profile_icon'] = 'Icône';

$txt['custom_profile_type_text'] = 'Texte';
$txt['custom_profile_type_textarea'] = 'Zone de Texte';
$txt['custom_profile_type_select'] = 'Boîte de Sélection';
$txt['custom_profile_type_radio'] = 'Boutons Radio';
$txt['custom_profile_type_check'] = 'Case à Cocher';

$txt['custom_add_title'] = 'Ajouter un champ de profil';
$txt['custom_edit_title'] = 'Modifier un champ de profil';
$txt['custom_edit_general'] = 'Paramètres d\'affichage';
$txt['custom_edit_input'] = 'Paramètres d\'entrée';
$txt['custom_edit_advanced'] = 'Paramètres avancés';
$txt['custom_edit_name'] = 'Nom';
$txt['custom_edit_desc'] = 'Description';
$txt['custom_edit_profile'] = 'Section du Profil';
$txt['custom_edit_profile_desc'] = 'Section du profil dans laquelle on trouvera ce champ.';
$txt['custom_edit_profile_none'] = 'Aucun';
$txt['custom_edit_registration'] = 'Afficher à l\'inscription';
$txt['custom_edit_registration_disable'] = 'Non';
$txt['custom_edit_registration_allow'] = 'Oui';
$txt['custom_edit_registration_require'] = 'Oui, et réponse obligatoire';
$txt['custom_edit_display'] = 'Montrer dans les sujets';
$txt['custom_edit_picktype'] = 'Type de champ';

// Strings for the templates
$txt['your_icq'] = 'Votre numéro de compte ICQ.';
$txt['your_aim'] = 'Votre nom d\'utilisateur AOL Instant Messenger.';
$txt['your_yim'] = 'Votre nom d\'utilisateur Yahoo! Instant Messenger.';
// In this string, please use +'s for spaces.
$txt['aim_default_message'] = 'Bonjour,+on+peut+se+parler+?';
$txt['msn_email_address'] = 'Votre adresse e-mail Live Messenger';
$txt['your_twitter'] = 'Votre nom d\'utilisateur Twitter, sans le @ qui le précède';
$txt['your_facebook'] = 'Votre numéro de compte Facebook, ou son raccourci (par exemple "wedgebook" dans "facebook.com/wedgebook")';
$txt['your_steam'] = 'Votre ID sur la communauté Steam';
$txt['custom_edit_tplgrp_social'] = 'Réseaux sociaux';
$txt['custom_edit_tplgrp_im'] = 'Messagerie instantanée';
$txt['custom_edit_tplgrp_gaming'] = 'Jeux vidéo';
$txt['custom_edit_templates'] = 'Modèles de champs';
$txt['custom_edit_templates_desc'] = 'Voici quelques profils prédéfinis pour des réseaux sociaux populaires. Vous pouvez les utiliser en tant que modèles.';
$txt['custom_edit_a_template'] = 'Modèle à utiliser';
$txt['custom_edit_templates_select'] = '-- Choisissez un modèle --';

$txt['custom_edit_max_length'] = 'Longueur maximale';
$txt['custom_edit_max_length_desc'] = '(0 pour pas de limite)';
$txt['custom_edit_dimension'] = 'Dimensions';
$txt['custom_edit_dimension_row'] = 'Lignes';
$txt['custom_edit_dimension_col'] = 'Colonnes';
$txt['custom_edit_bbc'] = 'Autoriser les balises BBCode';
$txt['custom_edit_options'] = 'Options';
$txt['custom_edit_options_desc'] = 'Laisser vide la case à cocher de cette option pour la supprimer. Le bouton radio sélectionne l\'option par défaut.';
$txt['custom_edit_options_more'] = 'Plus';
$txt['custom_edit_default'] = 'État par défaut';
$txt['custom_edit_active'] = 'Actif';
$txt['custom_edit_active_desc'] = 'S\'il n\'est pas sélectionné, ce champ ne sera montré à personne.';
$txt['custom_edit_privacy'] = 'Accessibilité';
$txt['custom_edit_privacy_desc'] = 'Qui peut voir et modifier ce champ?<br>- Membres = utilisateurs enregistrés.<br>- Les admins peuvent modifier les champs dans tous les cas.';
$txt['custom_edit_privacy_all'] = 'Les membres peuvent le voir. Le propriétaire peut le modifier.';
$txt['custom_edit_privacy_see'] = 'Les membres peuvent le voir. Seuls les admins peuvent le modifier.';
$txt['custom_edit_privacy_owner'] = 'Les membres ne peuvent pas le voir. Le propriétaire peut le modifier.';
$txt['custom_edit_privacy_none'] = 'Ce champ n\'est visible qu\'aux admins.';
$txt['custom_edit_guest_access'] = 'Montrer ce champ aux invités';
$txt['custom_edit_guest_access_desc'] = 'Cette option vous permet cette fois de restreindre ou non la visibilité d\'un champ aux invités.';
$txt['custom_edit_can_search'] = 'Cherchable';
$txt['custom_edit_can_search_desc'] = 'Ce champ peut-il être utilisé dans les recherches sur la liste des membres&nbsp;?';
$txt['custom_edit_mask'] = 'Masque d\'entrée';
$txt['custom_edit_mask_desc'] = 'Pour les champs de texte, un masque d\'entrée peut être sélectionné pour valider les données.';
$txt['custom_edit_mask_email'] = 'Adresse e-mail valide';
$txt['custom_edit_mask_number'] = 'Numérique';
$txt['custom_edit_mask_nohtml'] = 'Pas de HTML';
$txt['custom_edit_mask_regex'] = 'Regex (Avancé)';
$txt['custom_edit_enclose'] = 'Montrer inséré dans du texte (Optionnel)';
$txt['custom_edit_enclose_desc'] = 'Nous vous recommandons <strong>fortement</strong> d\'utiliser un masque d\'entrée pour valider le contenu fourni par l\'utilisateur.';

$txt['custom_edit_placement'] = 'Choisir la position';
$txt['custom_edit_placement_standard'] = 'Standard (à côté du titre)';
$txt['custom_edit_placement_withicons'] = 'À côté des icônes';
$txt['custom_edit_placement_abovesignature'] = 'Au-dessus de la signature';
$txt['custom_profile_placement'] = 'Position';
$txt['custom_profile_placement_standard'] = 'Standard';
$txt['custom_profile_placement_withicons'] = 'À côté des icônes';
$txt['custom_profile_placement_abovesignature'] = 'Au-dessus de la signature';

$txt['custom_edit_delete_sure'] = 'Êtes-vous sûr de vouloir supprimer ce champ ? Toutes les données utilisateur liées seront perdues !';

$txt['standard_profile_title'] = 'Champs de profil standards';
$txt['standard_profile_field'] = 'Champ';

$txt['core_settings_welcome_msg'] = 'Bienvenue sur votre nouveau forum';
$txt['core_settings_welcome_msg_desc'] = 'Pour commencer, nous vous suggérons de choisir les fonctionnalités de Wedge que vous souhaitez activer. Nous vous recommendons de n\'activer que celles dont vous avez besoin&nbsp;!';
$txt['core_settings_item_m'] = 'Galerie Media';
$txt['core_settings_item_m_desc'] = '';
$txt['core_settings_item_pm'] = 'Modération de message';
$txt['core_settings_item_pm_desc'] = 'Permet de sélectionner les groupes et sections pour lesquels les messages doivent être approuvés avant d\'être publiés. N\'oubliez pas de mettre en place les permissions adéquates dans la section des Permissions.';
$txt['core_settings_item_sp'] = 'Suivi des Moteurs de recherche';
$txt['core_settings_item_sp_desc'] = 'Activer cette fonctionnalité permettra aux administrateurs de suivre les robots des moteurs de recherche lorsqu\'ils indexent votre forum.';
$txt['core_settings_switch_on'] = 'Cliquez pour activer';
$txt['core_settings_switch_off'] = 'Cliquez pour désactiver';
$txt['core_settings_enabled'] = 'Activé';
$txt['core_settings_disabled'] = 'Désactivé';

$txt['languages_lang_name'] = 'Langue (cliquez pour modifier la langue)';
$txt['languages_locale'] = 'Paramètres régionaux';
$txt['languages_default'] = 'Par défaut';
$txt['languages_users'] = 'Utilisateurs';
$txt['language_settings_writable'] = 'Attention&nbsp;: Settings.php n\'est pas inscriptible. Par conséquent, le réglage de la langue par défaut ne peut être sauvegardé.';
$txt['edit_languages'] = 'Modifier les Langues';
$txt['lang_file_not_writable'] = '<strong>Attention</strong>&nbsp;: le fichier de langue de base (%1$s) est protégé en écriture. Vous devez le rendre inscriptible avant de pouvoir faire des changements.';
$txt['lang_entries_not_writable'] = '<strong>Attention</strong>&nbsp;: le fichier langue que vous souhaitez modifier (%1$s) est protégé en écriture. Vous devez le rendre inscriptible avant de pouvoir faire des changements.';
$txt['languages_ltr'] = 'De droite à gauche';

$txt['add_language'] = 'Ajouter une Langue';
$txt['add_language_wedge'] = 'Télécharger à partir de Wedge';
$txt['add_language_wedge_browse'] = 'Nom de la langue à rechercher, ou laisser vide pour rechercher tout.';
$txt['add_language_wedge_install'] = 'Installer';
$txt['add_language_wedge_found'] = 'Les langues suivantes ont été trouvées. Cliquez sur le lien d\'installation à côté de la langue que vous souhaitez installer, vous serez redirigé vers le gestionnaire d\'extensions pour l\'installer.';
$txt['add_language_error_no_response'] = 'Le site web de Wedge ne répond pas. Veuillez réessayer plus tard.';
$txt['add_language_error_no_files'] = 'Aucun fichier n\'a été trouvé.';
$txt['add_language_wedge_desc'] = 'Description';
$txt['add_language_wedge_version'] = 'Version';

$txt['edit_language_entries_primary'] = 'Ci-dessous se trouvent les paramètres de base de langue pour ce pack de Langue.';
$txt['edit_language_entries'] = 'Modifier les entrées de langue';
$txt['edit_language_entries_file'] = 'Sélectionnez le fichier à modifier';
$txt['languages_dictionary'] = 'Dictionnaire';
$txt['languages_spelling'] = 'Orthographe';
$txt['languages_for_pspell'] = 'Nécessite l\'emploi de <a href="http://www.php.net/function.pspell-new" target="_blank" class="new_win">pSpell</a> - s\'il est installé';
$txt['languages_rtl'] = 'Activer le mode &quot;De gauche à droite&quot;';

$txt['lang_file_desc_index'] = 'Termes généraux';
$txt['lang_file_desc_EmailTemplates'] = 'Modèles d\'e-mail';

$txt['languages_download'] = 'Téléchargement de packs de Langue';
$txt['languages_download_note'] = 'Cette page recense tous les fichiers contenus dans le pack de Langue et des informations utiles à propos de chacun d\'entre eux. Tous les fichiers qui ont leur case associée cochée seront copiés.';
$txt['languages_download_info'] = '<strong>Note</strong>
	<ul class="normallist">
		<li>Si des fichiers ont le statut &quot;Non inscriptible&quot;, Wedge ne sera pas capable de les copier dans le répertoire actuel et vous devrez rendre la destination inscriptible en utilisant un client FTP ou en remplissant les renseignements en bas de page.</li>
		<li>L\'information de version pour un fichier indique la version de Wedge pour laquelle il a été mis à jour. Si elle est indiquée en vert, c\'est qu\'il existe une version plus récente que celle que vous avez actuellement. La couleur ambrée indique que c\'est le même numéro de version que l\'actuelle, et la couleur rouge signifie que vous avez déjà une version plus récente que celle contenue dans le pack.</li>
		<li>Si un fichier existe déjà sur votre forum, la colonne &quot;Existe déjà&quot; aura une de ces deux valeurs. &quot;Identique&quot; indique que le fichier existe déjà sous une forme identique et n\'a pas besoin d\'être écrasé. &quot;Différent&quot; veut dire que le contenu varie un peu et que l\'écrasement est probablement la meilleure solution.</li>
	</ul>';

$txt['languages_download_main_files'] = 'Fichiers de base';
$txt['languages_download_theme_files'] = 'Fichiers liés aux thèmes';
$txt['languages_download_filename'] = 'Nom du fichier';
$txt['languages_download_dest'] = 'Destination';
$txt['languages_download_writable'] = 'Inscriptible';
$txt['languages_download_version'] = 'Version';
$txt['languages_download_older'] = 'Vous avez une nouvelle version de ce fichier en place, l\'écrasement n\'est pas recommandé.';
$txt['languages_download_exists'] = 'Existe déjà';
$txt['languages_download_exists_same'] = 'Identique';
$txt['languages_download_exists_different'] = 'Différent';
$txt['languages_download_copy'] = 'Copier';
$txt['languages_download_not_chmod'] = 'Vous ne pouvez pas effectuer l\'installation tant que tous les fichiers à copier sélectionnés ne sont pas inscriptibles.';
$txt['languages_download_illegal_paths'] = 'L\'extension contient des chemins illégaux - veuillez contacter Wedge';
$txt['languages_download_complete'] = 'Installation terminée';
$txt['languages_download_complete_desc'] = 'Le pack de Langue a été installé avec succès. Veuillez cliquer <a href="%1$s">ici</a> pour retourner à la page de gestion des langues';
$txt['languages_delete_confirm'] = 'Êtes-vous sûr de vouloir supprimer cette langue ?';

?>