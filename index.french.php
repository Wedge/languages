<?php
// Version: 2.0; Index

// Locale (strftime, pspell_new) and spelling. (pspell_new, can be left as '' normally.)
// For more information see:
//		http://www.php.net/function.pspell-new
//		http://www.php.net/function.setlocale
// Again, SPELLING SHOULD BE '' 99% OF THE TIME!! Please read this!
$txt['lang_name'] = 'Français';
$txt['lang_locale'] = 'fr_FR';
$txt['lang_paypal'] = 'FR';
$txt['lang_dictionary'] = 'fr';
$txt['lang_spelling'] = 'french';

// Character set and right to left?
$txt['lang_rtl'] = false;

// Number formats?
$txt['number_format'] = '1 234,00';
$txt['time_format'] = '%@ %B %Y à %H:%M';
$txt['time_format_this_year'] = '%@ %B à %H:%M';

// %@ is a special format that adds a suffix to a day (1-31), e.g. 1st, 2nd...
// If your language doesn't have any prefixes/suffixes it could use, just set it to $txt['day_suffix'] = '%s';
$txt['day_suffix'] = array(
	'n' => '%s',
	1 => '1er',
);

$txt['page_indicator'] = ' - page %s'; // can be turned into an array as needed (1 => '', 'n' => ...)

$txt['days'] = array('Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi');
$txt['days_short'] = array('Dim', 'Lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Sam');
// Months must start with 1 => 'January'. (or translated, of course.)
$txt['months'] = array(1 => 'Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre');
$txt['months_short'] = array(1 => 'Jan', 'Fév', 'Mars', 'Avr', 'Mai', 'Juin', 'Juil', 'Août', 'Sep', 'Oct', 'Nov', 'Déc');

$txt['admin'] = 'Admin';
$txt['moderate'] = 'Modérer';

$txt['save'] = 'Sauvegarder';
$txt['modify'] = 'Modifier';

$txt['members'] = 'Membres';
$txt['board_name'] = 'Nom de la section';

$txt['member_postcount'] = 'Messages';
$txt['no_subject'] = '(Pas de titre)';
$txt['view_profile'] = 'Voir profil';
$txt['guest_title'] = 'Invité';
$txt['author'] = 'Auteur';
$txt['on_date'] = 'le %1$s';
$txt['remove'] = 'Enlever';
$txt['start_new_topic'] = 'Nouveau sujet';

$txt['login'] = 'Identifiez-vous';
// Use numeric entities in the below string.
$txt['username'] = 'Identifiant';
$txt['password'] = 'Mot de passe';
$txt['username_or_email'] = 'Identifiant ou e-mail';

$txt['board_moderator'] = 'Modérateur';
$txt['remove_topic'] = 'Effacer';
$txt['modify_msg'] = 'Modifier le message';
$txt['name'] = 'Nom';
$txt['email'] = 'E-mail';
$txt['subject'] = 'Titre';
$txt['message'] = 'Message';
$txt['quick_modify'] = 'Modification rapide';

$txt['posts'] = 'Messages';
$txt['topics'] = 'Sujets';
$txt['redirects'] = 'Redirections';
$txt['replies'] = 'Réponses';
$txt['views'] = 'Vues';

$txt['num_posts'] = array(0 => 'Aucun message', 1 => '1 message', 'n' => '%s messages');
$txt['num_topics'] = array(0 => 'Aucun sujet', 1 => '1 sujet', 'n' => '%s sujets');
$txt['num_redirects'] = array(0 => 'Aucune redirection', 1 => '1 redirection', 'n' => '%s redirections');
$txt['num_replies'] = array(0 => 'Aucune réponse', 1 => '1 réponse', 'n' => '%s réponses');
$txt['num_views'] = array(0 => 'Jamais lu', 1 => '1 lecture', 'n' => '%s lectures');

// Likes. What you've done implied past tense, while when you haven't liked it thus far, implies a present tense for everyone else.
$txt['you_like_this'] = array(
	0 => 'Vous aimez cela.',
	1 => 'Vous et une autre personne aimez cela.',
	'n' => 'Vous et %1$s autres personnes aimez cela.',
);
$txt['like_this'] = array(
	1 => 'Une personne a aimé cela.',
	'n' => '%1$s personnes ont aimé cela.',
);
$txt['like'] = 'J\'aime';
$txt['unlike'] = 'Je n\'aime plus';

$txt['nobody_likes_this'] = 'Personne n\'aime ceci.';
$txt['likes_header'] = array(1 => '1 personne aime ceci.', 'n' => '%s personnes aiment ceci.');

$txt['choose_pass'] = 'Choisir un mot de passe';
$txt['verify_pass'] = 'Vérifier le mot de passe';
$txt['position'] = 'Rang';

$txt['total'] = 'Total';
$txt['posts_made'] = 'Messages';
$txt['website'] = 'Site Web';
$txt['register'] = 'Inscrivez-vous';
$txt['warning_status'] = 'Niveau de sanction';
$txt['user_warn_warned'] = 'L\'utilisateur a reçu un avertissement';
$txt['user_warn_moderate'] = 'Les messages de l\'utilisateur doivent être approuvés avant publication';
$txt['user_warn_mute'] = 'Suite à un bannissement, l\'utilisateur ne peut plus poster';
$txt['user_warn_soft_ban'] = 'L\'utilisateur a un ban léger';
$txt['user_warn_hard_ban'] = 'L\'utilisateur a un ban complet';
$txt['warn_warned'] = 'A reçu un avertissement';
$txt['warn_moderate'] = 'Modéré';
$txt['warn_mute'] = 'Mis au silence';
$txt['warn_soft_ban'] = 'Banni (léger)';
$txt['warn_hard_ban'] = 'Banni (complet)';

// User menu strings
$txt['usermenu_profile'] = 'Profil';
$txt['usermenu_profile_desc'] = 'Voir son Profil';
$txt['usermenu_website'] = 'Site web';
$txt['usermenu_website_desc'] = 'Visiter son Site web';
$txt['usermenu_sendpm'] = 'Contacter';
$txt['usermenu_sendpm_desc'] = 'Envoyer un message personnel';
$txt['usermenu_showposts'] = 'Messages';
$txt['usermenu_showposts_desc'] = 'Voir ses dernières Contributions';
$txt['usermenu_addbuddy'] = '+ Contacts';
$txt['usermenu_addbuddy_desc'] = 'Ajouter à mes contacts';
$txt['usermenu_removebuddy'] = '- Contacts';
$txt['usermenu_removebuddy_desc'] = 'Retirer de mes contacts';
$txt['usermenu_ignore'] = 'Ignorer';
$txt['usermenu_ignore_desc'] = 'Ignorer cette personne';
$txt['usermenu_unignore'] = 'Considérer';
$txt['usermenu_unignore_desc'] = 'Ne plus ignorer cette personne';
$txt['usermenu_seeip'] = '<span style="color: #aaa">IP : %2%</span>';
$txt['usermenu_seeip_desc'] = 'Posté à partir de cette adresse IP';
$txt['usermenu_trackip'] = '<span style="color: #aaa">IP : %2%</span>';
$txt['usermenu_trackip_desc'] = 'Analyser cette adresse IP';

// Action menu strings (per post)
$txt['acme_like'] = 'J\'aime';
$txt['acme_like_desc'] = 'J\'aime ce message';
$txt['acme_unlike'] = 'Je n\'aime plus';
$txt['acme_unlike_desc'] = 'Je n\'aime plus ce message';
$txt['acme_quote'] = 'Citer';
$txt['acme_quote_desc'] = 'Citer ce message en réponse';
$txt['acme_modify'] = 'Modifier';
$txt['acme_modify_desc'] = 'Modifier ce message';
$txt['acme_report'] = 'Avertir';
$txt['acme_report_desc'] = 'Avertir un modérateur à propos de ce message';
$txt['acme_restore'] = 'Restaurer';
$txt['acme_restore_desc'] = 'Restaurer ce message';
$txt['acme_merge'] = 'Fusionner';
$txt['acme_merge_desc'] = 'Fusionner ce doublon avec le précédent message';
$txt['acme_split'] = 'Séparer';
$txt['acme_split_desc'] = 'Séparer le sujet en deux';
$txt['acme_remove'] = 'Effacer';
$txt['acme_remove_desc'] = 'Effacer ce message définitivement';
$txt['acme_approve'] = 'Approuver';
$txt['acme_approve_desc'] = 'Autoriser la lecture de ce message';
$txt['acme_warn'] = 'Sanctionner';
$txt['acme_warn_desc'] = 'Sanctionner l\'auteur de ce message';

$txt['actions_button'] = 'Actions&hellip;';
$txt['more_actions'] = 'Plus&hellip;';

$txt['board_index'] = 'Liste des sections';
$txt['message_index'] = 'Liste des messages';
$txt['news'] = 'À la une';
$txt['home'] = 'Accueil';
$txt['community'] = 'Communauté';

$txt['lock_unlock'] = '(Dé)bloquer le sujet';
$txt['post'] = 'Soumettre';
$txt['error_occured'] = 'Une erreur s\'est produite&#8239;!';
$txt['logout'] = 'Déconnexion';
$txt['started_by'] = 'Démarré par';
$txt['last_post_author_link_time'] = '<strong>Dernier message</strong> par {author}<br>dans {link}<br>{time}';
$txt['last_post_time_author'] = '{time}<br>par {author}';
$txt['board_off_limits'] = 'Cette section ne vous est pas accessible.';

$txt['last_post'] = 'Dernier message';
// Use numeric entities in the below string.
$txt['topic'] = 'Sujet';
$txt['help'] = 'Aide';
$txt['notify'] = 'Notifier';
$txt['unnotify'] = 'Se désinscrire';
$txt['notify_request'] = 'Voulez-vous recevoir un e-mail de notification si quelqu\'un répond à ce sujet&#8239;?';

$txt['notify_replies'] = 'Notification de réponse';
$txt['move_topic'] = 'Déplacer';
$txt['move_to'] = 'Déplacer vers';
$txt['pages'] = 'Pages';
$txt['users_active'] = 'Membres actifs dans les %1$d dernières minutes';
$txt['personal_messages'] = 'Messages personnels';

$txt['quote_from'] = 'Citation de';
$txt['quote'] = 'Citer';
$txt['quote_noun'] = 'Citation';
$txt['reply'] = 'Répondre';
$txt['reply_number'] = 'Réponse #<strong>%1$d</strong>,';

$txt['approve'] = 'Approuver';
$txt['approve_all'] = 'Tout approuver';
$txt['awaiting_approval'] = 'En attente d\'approbation';
$txt['post_awaiting_approval'] = 'Ce message est en attente d\'approbation par un modérateur.';
$txt['there_are_unapproved_topics'] = 'Il y a %1$s sujets et %2$s messages en attente d\'approbation dans cette section. Cliquez <a href="%3$s">ici</a> pour tous les voir.';

$txt['msg_alert_none'] = 'Pas de message...';
// SSI - The {new} construct is used to add the (x new) area in a language-dependent manner, using unread_pms, as below.
$txt['you_have_msg'] = array(
	0 => 'votre messagerie est vide',
	1 => 'vous avez <a href="<URL>?action=pm">1</a> message {new}',
	'n' => 'vous avez <a href="<URL>?action=pm">%s</a> messages {new}',
);
$txt['unread_pms'] = array(0 => '(pas de nouveau)', 1 => '(1 nouveau)', 'n' => '(%s nouveaux)');

$txt['remove_message'] = 'Effacer ce message';
$txt['remove_message_confirm'] = 'Effacer ce message&#8239;?';

$txt['online_users'] = 'Membres en ligne';
$txt['personal_message'] = 'Message personnel';
$txt['jump_to'] = 'Accès rapide';
$txt['are_sure_remove_topic'] = 'Êtes-vous sûr de vouloir effacer ce sujet&#8239;?';

$txt['go'] = 'OK';
$txt['ok'] = 'OK';
$txt['yes'] = 'Oui';
$txt['no'] = 'Non';

$txt['search'] = 'Chercher';
$txt['all_pages'] = 'Toutes';

$txt['back'] = 'Retour';
$txt['topic_started'] = 'Discussion démarrée par';
$txt['title'] = 'Titre';
$txt['post_by'] = 'Posté par';
$txt['welcome_member'] = 'Bienvenue à %1$s, notre dernier membre.';
$txt['notify_deactivate'] = 'Voulez-vous désactiver la notification pour ce sujet&#8239;?';

$txt['last_edit'] = 'Modifié {date} par {name}';
$txt['last_edit_mine'] = 'Modifié {date}';

$txt['location'] = 'Localisation';
$txt['gender'] = 'Sexe';
$txt['date_registered'] = 'Inscrit le';

$txt['recent_posts'] = 'Messages récents';
$txt['recent_view'] = 'Voir les messages les plus récents du forum.';

$txt['male'] = 'Homme';
$txt['female'] = 'Femme';

$txt['welcome_guest'] = 'Bienvenue, <strong>%1$s</strong>. Merci de vous <a href="<URL>?action=login">connecter</a> ou de vous <a href="<URL>?action=register">inscrire</a>.';
$txt['welcome_guest_noregister'] = 'Bienvenue, <strong>%1$s</strong>. Merci de vous <a href="<URL>?action=login">connecter</a>.';
$txt['login_or_register'] = 'Merci de vous <a href="<URL>?action=login">connecter</a> ou de vous <a href="<URL>?action=register">inscrire</a>.';
$txt['please_login'] = 'Merci de vous <a href="<URL>?action=login">connecter</a>.';
$txt['welcome_guest_activate'] = '<br>Perdu votre <a href="<URL>?action=activate">e-mail d\'activation</a>&#8239;?';
$txt['hello_member'] = 'Coucou,';
$txt['hello_guest'] = 'Bienvenue,';
$txt['select_destination'] = 'Destination ?';

$txt['posted_by'] = 'Posté par';

$txt['moderator'] = 'Modérateur';
$txt['moderators'] = 'Modérateurs';

// For the Short form, use '!' in case your language's 'New' is too long.
$txt['new'] = 'Nouveau';
$txt['new_short'] = 'Nouv';

// Can be used in a title parameter, so stick to alphanumeric characters.
$txt['new_posts'] = 'Nouveaux messages';
$txt['old_posts'] = 'Pas de nouveau message';

$txt['forgot_your_password'] = 'Mot de passe oublié&#8239;?';

$txt['date'] = 'Date';
$txt['from'] = 'De';
$txt['to'] = 'à';

$txt['members_title'] = 'Membres';

$txt['redirect_board'] = 'Redirection';

$txt['notification'] = 'Notification';

$txt['your_ban'] = 'Désolé %1$s, vous êtes banni de ce forum&#8239;!<br>%2$s';
$txt['your_ban_expires'] = 'Ce bannissement devrait expirer le %1$s';
$txt['your_ban_expires_never'] = 'Ce bannissement n\'a pas de date d\'expiration prévue.';
$txt['ban_continue_browse'] = 'Vous pouvez cependant continuer à naviguer sur le forum en mode invité.';

$txt['mark_board_read'] = 'Marquer les sujets comme lus pour cette section';
$txt['mark_as_read'] = 'Marquer TOUS les messages comme lus';

$txt['legend'] = 'Légende';
$txt['locked_topic'] = 'Sujet bloqué';
$txt['normal_topic'] = 'Sujet normal';
$txt['participation_caption'] = 'Sujet dans lequel vous êtes intervenu';

$txt['print'] = 'Imprimer';
$txt['profile'] = 'Profil';
$txt['not_applicable'] = 'N/A';
$txt['preview'] = 'Prévisualiser';
$txt['remove_draft'] = 'Supprimer brouillon';
$txt['ip'] = 'IP';
$txt['by'] = 'par';
$txt['days_word'] = 'jours';
$txt['search_for'] = 'Rechercher';
$txt['maintain_mode_on'] = 'Attention, ce forum est en \'Mode Maintenance\'.';

$txt['forum_stats'] = 'Statistiques du site';
$txt['board_stats'] = 'Statistiques du forum';
$txt['blog_stats'] = 'Statistiques du blog';
$txt['topic_stats'] = 'Statistiques du sujet';

$txt['latest_member'] = 'Dernier membre';
$txt['latest_post'] = 'Dernier message';

$txt['youve_got_pms'] = array(0 => 'Pas de messages.', 1 => 'Vous avez un message.', 'n' => 'Vous avez %s messages.');
$txt['click_to_view_them'] = 'Cliquez <a href="%1$s">ici</a> pour consulter votre messagerie.';

$txt['print_page'] = 'Imprimer la page';

$txt['info_center_title'] = 'Centre d\'informations';

$txt['send_topic'] = 'Partager';

$txt['check_all'] = 'Tout cocher';

$txt['file'] = 'Fichier';

$txt['today'] = '<strong>Aujourd\'hui</strong> à ';
$txt['yesterday'] = '<strong>Hier</strong> à ';
$txt['new_poll'] = 'Nouveau sondage';
$txt['poll_vote'] = 'Soumettre ma voix';
$txt['poll_total_voters'] = 'Total des votants';
$txt['poll_results'] = 'Voir les résultats';
$txt['poll_lock'] = 'Bloquer les votes';
$txt['poll_unlock'] = 'Débloquer les votes';
$txt['poll_edit'] = 'Modifier le sondage';
$txt['poll'] = 'Sondage';
$txt['poll_voters_guests_only'] = array(
	1 => '1 invité',
	'n' => '%1$s invités',
);
$txt['poll_voters'] = array(
	1 => 'et 1 invité',
	'n' => 'et %1$s invités',
);
$txt['poll_visibility_admin'] = 'Seuls les administrateurs du forum pourront voir ce pour quoi vous avez voté.';
$txt['poll_visibility_creator'] = 'Les administrateurs du forum, et l\'auteur du sondage, pourront voir ce pour quoi vous avez voté.';
$txt['poll_visibility_members'] = 'Tous les membres connectés pourront voir ce pour quoi vous avez voté.';
$txt['poll_visibility_anyone'] = 'Tout le monde pourra voir ce pour quoi vous avez voté.';
$txt['one_day'] = '1 jour';
$txt['one_week'] = '1 semaine';
$txt['one_month'] = '1 mois';
$txt['forever'] = 'Toujours';
$txt['quick_login_desc'] = 'Connexion avec identifiant, mot de passe et durée de la session';
$txt['one_hour'] = '1 heure';
$txt['board'] = 'Section';
$txt['in'] = 'dans';
$txt['pinned_topic'] = 'Sujet épinglé';

$txt['delete'] = 'Effacer';

$txt['kilobyte'] = 'ko';

$txt['more_stats'] = '[plus de stats]';

$txt['code'] = 'Code';
$txt['code_select'] = '[Sélectionner]';

$txt['merge'] = 'Fusionner des sujets';
$txt['new_topic'] = 'Nouveau sujet';

$txt['set_pin'] = 'Épingler';
$txt['set_unpin'] = 'Dépingler';
$txt['set_lock'] = 'Bloquer';
$txt['set_unlock'] = 'Débloquer';
$txt['order_pinned_topic'] = 'Trier sujets épinglés';

$txt['page_created'] = 'Page générée en ';
$txt['seconds_with_query'] = '%1$.2f secondes avec 1 requête.';
$txt['seconds_with_queries'] = '%1$.2f secondes avec %2$d requêtes.';

$txt['online'] = 'En ligne';
$txt['offline'] = 'Hors ligne';
$txt['pm_online'] = 'Message personnel (En ligne)';
$txt['pm_offline'] = 'Message personnel (Hors ligne)';
$txt['online_status'] = 'État';

$txt['go_up'] = 'En haut';
$txt['go_down'] = 'En bas';

$txt['site_credits'] = 'Crédits du site';
$txt['copyright'] = 'Propulsé par <a href="http://wedge.org/" target="_blank" class="new_win">Wedge</a>, logiciel en construction. &copy; Wedgeward.';
$txt['dynamic_replacements'] = '<abbr title="Remplacements Dynamiques">RD</abbr>';

$txt['template_block_error'] = 'Impossible de trouver le bloc visuel "%1$s".';
$txt['theme_template_error'] = 'Impossible de charger le modèle "%1$s".';
$txt['theme_language_error'] = 'Impossible de charger le fichier de langues "%1$s".';

$txt['sub_boards'] = 'Sous-sections';

$txt['smtp_no_connect'] = 'Échec de connexion au serveur SMTP';
$txt['smtp_port_ssl'] = 'Le port SMTP est incorrect. Il doit être mis à 465 pour un serveur SSL.';
$txt['smtp_bad_response'] = 'Erreur en réception des codes de réponse du serveur mail';
$txt['smtp_error'] = 'Incident survenu lors de l\'envoi d\'e-mail. Erreur&#8239;: ';

$txt['mlist_search'] = 'Rechercher des membres';
$txt['mlist_search_again'] = 'Chercher à nouveau';
$txt['mlist_search_email'] = 'Recherche par adresse e-mail';
$txt['mlist_search_group'] = 'Recherche par rang';
$txt['mlist_search_name'] = 'Recherche par pseudonyme';
$txt['mlist_search_website'] = 'Recherche par site web';
$txt['mlist_search_results'] = 'Résultats de la recherche pour';
$txt['mlist_search_by'] = 'Rechercher par %1$s';
$txt['mlist_menu_view'] = 'Voir la liste des membres';

$txt['attach_downloaded'] = 'téléchargé %s fois.';
$txt['attach_viewed'] = 'vu %s fois.';

$txt['settings'] = 'Paramètres';
$txt['never'] = 'Jamais';
$txt['more'] = 'plus';

$txt['hostname'] = 'Nom d\'hôte';
$txt['you_are_post_banned'] = 'Desolé %1$s, vous n\'avez plus le droit de poster sur ce forum.';
$txt['you_are_pm_banned'] = 'Desolé %1$s, vous n\'avez plus le droit d\'envoyer des messages personnels sur ce forum.';
$txt['you_are_post_pm_banned'] = 'Desolé %1$s, vous n\'avez plus le droit de poster ni d\'envoyer des messages personnels sur ce forum.';

$txt['add_poll'] = 'Ajouter un sondage';
$txt['poll_options6'] = 'Vous ne pouvez pas choisir plus de %1$s options.';
$txt['poll_remove'] = 'Retirer le sondage';
$txt['poll_remove_warn'] = 'Êtes-vous sûr de vouloir retirer ce sondage du sujet&#8239;?';
$txt['poll_results_expire'] = 'Les résultats seront affichés à la clôture du vote';
$txt['poll_expires_on'] = 'Clôture du vote';
$txt['poll_expired_on'] = 'Vote clôturé';
$txt['poll_change_vote'] = 'Enlever ma voix';
$txt['poll_return_vote'] = 'Options de vote';
$txt['poll_cannot_see'] = 'Vous ne pouvez pas voir les résultats de ce sondage pour le moment.';

$txt['quick_mod_approve'] = 'Approuver la sélection';
$txt['quick_mod_remove'] = 'Supprimer la sélection';
$txt['quick_mod_lock'] = '(Dé)bloquer la sélection';
$txt['quick_mod_pin'] = '(D)épingler la sélection';
$txt['quick_mod_move'] = 'Déplacer la sélection vers';
$txt['quick_mod_merge'] = 'Fusionner la sélection';
$txt['quick_mod_markread'] = 'Marquer la sélection comme lue';
$txt['quick_mod_go'] = 'OK';

$txt['generic_confirm_request'] = 'Êtes-vous sûr de vouloir faire cela&#8239;?';

$txt['reagree_reply'] = 'Les conditions d\'utilisation du site ont été modifiées. Il est nécessaire de les accepter avant de pouvoir y poster de nouveau. Vous pouvez le faire en allant sur <a href="%1$s">cette page</a>.';
$txt['quick_reply'] = 'Réponse Rapide';
$txt['quick_reply_desc'] = 'En mode <em>Réponse Rapide</em>, vous pouvez utiliser du BBCode et des smileys comme sur un message normal, mais à partir d\'une interface plus rapide d\'accès.';
$txt['quick_reply_warning'] = 'Attention, ce sujet est actuellement bloqué ! Seuls les administrateurs et les modérateurs peuvent y répondre.';
$txt['quick_reply_verification'] = 'Après avoir soumis votre message, vous serez redirigé vers la page habituelle d\'écriture pour vérifier votre message %1$s.';
$txt['quick_reply_verification_guests'] = '(requis pour tous les invités)';
$txt['quick_reply_verification_posts'] = '(requis pour tous les utilisateurs ayant moins de %1$d messages)';
$txt['wait_for_approval'] = 'Note&#8239;: ce message ne s\'affichera qu\'après avoir été approuvé par un modérateur.';

$txt['notification_enable_board'] = 'Êtes-vous sûr de vouloir activer la notification des nouveaux sujets pour cette section&#8239;?';
$txt['notification_disable_board'] = 'Êtes-vous sûr de vouloir désactiver la notification des nouveaux sujets pour cette section&#8239;?';
$txt['notification_enable_topic'] = 'Êtes-vous sûr de vouloir activer la notification des nouvelles réponses pour ce sujet&#8239;?';
$txt['notification_disable_topic'] = 'Êtes-vous sûr de vouloir désactiver la notification des nouvelles réponses pour ce sujet&#8239;?';

$txt['report_to_mod'] = 'Avertir un modérateur à propos de ce message';

$txt['unread_topics'] = 'Sujets non lus';
$txt['unread_replies'] = 'Sujets mis à jour';

$txt['who_title'] = 'Qui est en ligne';
$txt['who_and'] = ' et ';
$txt['who_viewing_topic'] = ' sur ce sujet';
$txt['who_viewing_board'] = ' dans cette section.';
$txt['who_member'] = 'Membre';

// Feed block
$txt['feed'] = 'Flux de messages';
$txt['feed_current_topic'] = 'Ce sujet&#8239;:';
$txt['feed_current_board'] = 'Ce forum&#8239;:';
$txt['feed_current_blog'] = 'Ce blog&#8239;:';
$txt['feed_everywhere'] = 'Tout le site&#8239;:';
$txt['feed_posts'] = '<a href="%1$s">messages</a>';
$txt['feed_topics'] = '<a href="%1$s">sujets</a>';

// Footer strings
$txt['valid_html5'] = 'HTML5 valide&#8239;!';
$txt['html5'] = 'HTML5';

$txt['guest'] = 'Invité';
$txt['guests'] = 'Invités';
$txt['user'] = 'Membre';
$txt['users'] = 'Membres';
$txt['hidden'] = 'Caché';
$txt['buddy'] = 'Contact';
$txt['buddies'] = 'Contacts';
$txt['is_buddy'] = 'Fait partie de mes contacts';
$txt['is_not_buddy'] = 'Ne fait pas partie de mes contacts';
$txt['most_online_ever'] = 'Record de connexions absolu';
$txt['most_online_today'] = 'Record de connexions aujourd\'hui';

$txt['response_prefix'] = 'Re : ';
$txt['current_icon'] = 'Icône actuelle';
$txt['message_icon'] = 'Icône du message';

$txt['approve_members_waiting'] = array(
	1 => 'Il y a <a href="<URL>?action=admin;area=viewmembers;sa=browse;type=approve">un membre</a> en attente d\'approbation.',
	'n' => 'Il y a <a href="<URL>?action=admin;area=viewmembers;sa=browse;type=approve">%s membres</a> en attente d\'approbation.',
);

$txt['notifyboard_turnon'] = 'Voulez-vous recevoir un e-mail de notification quand quelqu\'un poste un nouveau sujet dans cette section&#8239;?';
$txt['notifyboard_turnoff'] = 'Êtes-vous sûr de vouloir désactiver les e-mails de notification des nouveaux sujet pour cette section&#8239;?';

$txt['show_unread'] = 'Messages non lus';
$txt['show_unread_replies'] = 'Réponses non lues';

$txt['quickmod_delete_selected'] = 'Effacer la sélection';

$txt['show_personal_messages'] = 'Vous avez reçu un ou plusieurs nouveaux messages personnels.<br><br>Voulez-vous ouvrir une nouvelle fenêtre pour les consulter&#8239;?';

$txt['previous_next_back'] = '&laquo; précédente';
$txt['previous_next_forward'] = 'suivante &raquo;';

$txt['upshrink_description'] = 'Cacher ou afficher cette zone.';

$txt['mark_unread'] = 'Marquer non lu';

$txt['error_while_submitting'] = 'L\'erreur ou les erreurs suivantes sont apparues durant la soumission de ce message&#8239;:';
$txt['error_old_topic'] = 'Veuillez noter qu\'il n\'y a pas eu de réponse à ce sujet depuis au moins %1$d jours.<br>À moins que vous ne soyez sûr de vouloir y répondre, créez plutôt un nouveau sujet.';

$txt['mark_read_short'] = 'Marquer lu';

$txt['pm_short'] = 'Messagerie';
$txt['pm_menu_read'] = 'Lire mes messages';
$txt['pm_menu_send'] = 'Envoyer un message';
$txt['pm_menu_drafts'] = 'Brouillons';

$txt['hello_member_ndt'] = 'Bonjour, <span>%1$s</span>&#8239;!';

$txt['unapproved_posts'] = 'Messages à approuver (Sujets: %1$d, Messages: %2$d)';

$txt['ajax_in_progress'] = 'Chargement...';

$txt['verification'] = 'Vérification';
$txt['visual_verification_description'] = 'Taper les lettres montrées dans l\'image';
$txt['visual_verification_sound'] = 'Écouter les lettres';
$txt['visual_verification_request_new'] = 'Demander une autre image';
$txt['visual_verification_hidden'] = 'Laissez cette boîte vide !';

// Sub menu labels
$txt['summary'] = 'Résumé';
$txt['account'] = 'Paramètres du Compte';
$txt['forumprofile'] = 'Profil de base et avatar';
$txt['change_skin'] = 'Changer de style';
$txt['draft_posts'] = 'Brouillons';

$txt['skin_default'] = 'Par défaut';
$txt['skin_default_mobile'] = 'Par défaut (mobile)';

$txt['settings_title'] = 'Options Générales';
$txt['plugin_manager'] = 'Extensions';
$txt['errlog'] = 'Journal d\'Erreurs';
$txt['edit_permissions'] = 'Permissions';
$txt['mc_unapproved_poststopics'] = 'Messages à approuver';
$txt['mc_reported_posts'] = 'Messages rapportés';
$txt['modlog_view'] = 'Journal de Modération';
$txt['unapproved_members'] = 'Membres à approuver';

$txt['ignoring_user'] = 'Vous ignorez cet utilisateur. Cliquez ici pour voir ou cacher son message.';

$txt['spider'] = 'Robot';
$txt['spiders'] = 'Robots';

$txt['downloads'] = 'Téléchargements';
$txt['filesize'] = 'Taille de fichier';

$txt['sideshow'] = 'Cliquez ici, ou cliquez sur la molette de la souris n\'importe où sur la page, pour ouvrir la barre de menu.';

// Restore topic
$txt['restore_topic'] = 'Restaurer ce sujet';
$txt['quick_mod_restore'] = 'Restaurer les messages sélectionnés';

$txt['autosuggest_delete_item'] = 'Supprimer cet élément';

// Ignoring topics
$txt['ignoring_topic'] = 'Vous ignorez actuellement ce sujet.';
$txt['ignore_topic'] = 'Ignorer';
$txt['unignore_topic'] = 'Ne plus ignorer';

// Site type. (Not used for now. Probably not ever.)
$txt['b_type'] = array('blog' => 'blog', 'forum' => 'forum', 'media' => 'media', 'site' => 'site');
$txt['b_item'] = array('blog' => 'billet', 'forum' => 'sujet', 'media' => 'élément', 'site' => 'article');

// Indicates the date of the first post when merging two posts.
$txt['search_date_posted'] = 'Posté&#8239;:';

// Spoiler tags. But you're smart, so you don't need me telling.
$txt['spoiler'] = 'Spoiler';
$txt['click_for_spoiler'] = '(cliquez pour montrer/cacher)';

$txt['readmore'] = '(Reste %1$d caractères)';
$txt['thoughts'] = 'Pensées';
$txt['add_thought'] = '(Cliquez ici pour écrire une pensée)';
$txt['thome_edit'] = 'Modifier';
$txt['thome_remove'] = 'Supprimer';
$txt['thome_reply'] = 'Répondre';
$txt['thome_context'] = 'Voir contexte';
$txt['thome_personal'] = 'Postérité ?';
$txt['thome_personal_desc'] = 'Utiliser cette pensée comme citation sous mon nom dans les messages.';

// Do not use double quotes in the following strings.
$txt['privacy'] = 'Confidentialité';
$txt['privacy_default'] = 'Par défaut';
$txt['privacy_public'] = 'Public';
$txt['privacy_members'] = 'Membres';
$txt['privacy_contacts'] = 'Mes contacts';
$txt['privacy_author'] = 'Juste moi';

// Do not use double quotes in the form_* text strings. (Why would you?)
$txt['form_submit'] = 'Envoyer';
$txt['form_cancel'] = 'Annuler';

// Media Gallery
$txt['media_gallery'] = 'Media';
$txt['media_home'] = 'Accueil';
$txt['media_unseen'] = 'À voir';
$txt['media_profile_sum'] = 'Résumé';
$txt['media_view_items'] = 'Voir les éléments';
$txt['media_view_coms'] = 'Voir les commentaires';
$txt['media_view_votes'] = 'Voir les votes';
$txt['media_gotolink'] = 'Détails';
$txt['media_zoom'] = 'Zoom';
