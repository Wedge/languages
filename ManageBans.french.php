<?php
// Version: 0.1; ManageBans

$txt['ban_general_description'] = 'Cette section vous permet de gérer les bannissements (bans) des utilisateurs pénibles, spammeurs ou généralement empêcheurs de poster en rond.';
$txt['ban_description_hard'] = 'Cette section vous permet de gérer les bannissements (bans) "sévères", qui empêchent aux utilisateurs toute action, et immédiatement.';
$txt['ban_description_soft'] = 'Cette section vous permet de gérer les bannissements (bans) "légers", qui n\'empêchent pas aux utilisateurs d\'utiliser le forum, mais les décourage progressivement de causer des problèmes, en simulant des problèmes techniques sur le forum.';
$txt['ban_description_add'] = 'Cette section vous permet d\'ajouter de nouveaux bannissements (bans) à votre forum.';
$txt['ban_description_edit'] = 'Cette section vous permet de modifier un bannissement de votre forum.';
$txt['ban_description_settings'] = 'Cette section vous permet de changer les paramètres s\'appliquant aux bannissements (bans), principalement à ceux de type "léger".';

$txt['ban_type'] = 'Type';
$txt['ban_type_id_member'] = 'Membre';
$txt['ban_type_member_name'] = 'Noms des membres';
$txt['ban_type_email'] = 'E-mail';
$txt['ban_type_ip_address'] = 'IP';
$txt['ban_type_hostname'] = 'Nom d\'hôte';

$txt['ban_content'] = 'Banni';
$txt['ban_added'] = 'Ajouté le';
$txt['ban_added_by'] = 'Ajouté par';
$txt['ban_invalid_member'] = 'Le membre numéro #%1$s a été banni mais n\'existe pas.';

$txt['ban_id_member_is'] = 'Le membre&nbsp;: <a href="%1$s">%2$s</a>';

$txt['ban_member_names_beginning'] = 'Les noms de membre commençant par %1$s %2$s';
$txt['ban_member_names_ending'] = 'Les noms de membre se terminant par %1$s %2$s';
$txt['ban_member_names_containing'] = 'Les noms de membre contenant %1$s %2$s';
$txt['ban_member_names_matching'] = 'Le nom de membre de&nbsp;: %1$s %2$s';
$txt['ban_member_names_case_matters'] = '(sensible à la casse)';

$txt['ban_entire_domain'] = 'Toute adresse e-mail sur le domaine %1$s';
$txt['ban_entire_tld'] = 'Toute adresse e-mail dont le suffixe de domaine est %1$s';
$txt['ban_gmail_style_email'] = 'Toute variation de %1$s@%2$s';

$txt['ban_entire_hostname'] = 'Tous les utilisateurs du nom d\'hôte %1$s';

$txt['ban_no_entries'] = 'Aucun bannissement n\'est actuellement actif.';

$txt['ban_remove_selected'] = 'Supprimer la sélection';
$txt['ban_remove_selected_confirm'] = 'Êtes-vous sûr de vouloir supprimer les bannissements sélectionnés&nbsp;?';

$txt['ban_hardness_header'] = 'Type de ban';
$txt['ban_hardness_title'] = 'Quel type de ban&nbsp;?';
$txt['ban_hardness_soft'] = 'Ban léger';
$txt['ban_hardness_hard'] = 'Ban sévère';
$txt['ban_hardnesses'] = 'Les bans légers n\'empêchent pas à un utilisateur d\'utiliser le forum, ils se contentent de le gêner. On peut aussi empêcher aux adresses IP à ban léger de s\'inscrire. A contrario, les bans sévères mettent un terme immédiat aux activités de l\'utilisateur.';

$txt['ban_type_header'] = 'Critères de ban';
$txt['ban_type_title'] = 'Sur quoi doit se baser le ban&nbsp;?';
$txt['ban_type_description'] = 'Plusieurs options sont disponibles suivant le type de ban à implémenter.';
$txt['ban_type_title_id_member'] = 'Un membre spécifique de la communauté';
$txt['ban_type_title_member_name'] = 'Un ou plusieurs noms de membre';
$txt['ban_type_title_email'] = 'Une adresse e-mail ou des domaines';
$txt['ban_type_title_ip_address'] = 'Une adresse IP ou une plage d\'IP';
$txt['ban_type_title_hostname'] = 'Un nom d\'hôte ou une plage d\'hôtes';

$txt['ban_type_id_member_type'] = 'Qui voulez-vous bannir&nbsp;?';

$txt['ban_type_member_name'] = 'Quel type de noms de membre bannir&nbsp;?';
$txt['ban_member_names_select_beginning'] = 'Les noms commençant par...';
$txt['ban_member_names_select_ending'] = 'Les noms se terminant par...';
$txt['ban_member_names_select_containing'] = 'Les noms contenant...';
$txt['ban_member_names_select_matching'] = 'Les noms correspondant à...';

$txt['ban_member_note'] = 'Note&nbsp;: ne bannit pas un utilisateur du forum si son nom correspond à ce critère. Le seul effet est d\'empêcher les futurs membres d\'utiliser un nom.';

$txt['ban_member_case_sensitive'] = 'Sensible à la casse&nbsp;?';
$txt['ban_member_case_sensitive_desc'] = 'Si oui, <em>Admin</em> ne sera pas vu de la même manière qu\'<em>admin</em>. En temps normal, le nom doit être insensible à la casse, donc laissez décoché.';

$txt['ban_type_email_type'] = 'Quelle sorte d\'adresse e-mail bannir&nbsp;?';
$txt['ban_type_email_type_specific'] = 'Une ou plusieurs adresses spécifiques';
$txt['ban_type_email_type_domain'] = 'Un domaine entier';
$txt['ban_type_email_type_tld'] = 'Une plage entière de domaines';
$txt['ban_type_email_content'] = 'Adresse(s) à bannir';
$txt['ban_email_gmail_style'] = 'Domaine de type Gmail&nbsp;?';

$txt['ban_use_htaccess'] = 'Si possible, utilisez plutôt les règles Allow/Deny de votre serveur (par exemple dans un fichier .htaccess, httpd.conf ou via le panneau de contrôle de votre hébergeur). Il est plus rapide et efficace pour le serveur de traiter directement ces blocages plutôt que de passer par Wedge.';
$txt['ban_type_ip_address_type'] = 'Quel type d\'adresse IP bannir&nbsp;?';
$txt['ban_type_ip_range'] = 'Bannir une plage d\'adresses IP&nbsp;?';
$txt['ban_type_range_start'] = 'Début';
$txt['ban_type_range_end'] = 'Fin';
$txt['ban_type_ip_address_details'] = 'Adresse(s) IP à bannir&nbsp;:';

$txt['ban_type_hostname'] = 'Quel nom d\'hôte voulez-vous bannir&nbsp;?';
$txt['ban_type_hostname_wildcard'] = 'Vous pouvez utiliser * comme joker, par exemple *.net (tous les domaines en .net), ou *.comcast.net (tous les sous-domaines ayant comcast.net comme domaine).';

$txt['ban_information'] = 'Notes à propos du ban';
$txt['ban_reason'] = 'Raison du ban';
$txt['ban_reason_subtext'] = 'Requis pour vous rafraîchir la mémoire sur ce ban à l\'avenir, à vous ou à un autre administrateur.';
$txt['ban_message'] = 'Message à montrer à l\'utilisateur';
$txt['ban_message_subtext'] = 'Facultatif. Si vous remplissez ce champ, il sera montré aux utilisateurs bannis pour leur expliquer la raison du ban.';

$txt['ban_no_modify'] = 'Vous ne pouvez pas modifier un ban de nom d\'hôte si les lookups (recherches) de nom d\'hôte sont désactivés.';

$txt['ban_invalid_type'] = 'Vous n\'avez pas spécifié un type de ban valide.';
$txt['ban_invalid_member'] = 'Vous n\'avez pas spécifié de membre valide à bannir.';
$txt['ban_invalid_membername'] = 'Vous n\'avez pas spécifié de nom valide à bannir.';
$txt['ban_invalid_email'] = 'Vous n\'avez pas spécifié d\'e-mail valide à bannir.';
$txt['ban_invalid_ip_address'] = 'Vous n\'avez pas spécifié d\'adresse IP ou plage IP valide à bannir.';
$txt['ban_invalid_hostname'] = 'Vous n\'avez pas spécifié un nom d\'hôte valide à bannir.';
$txt['ban_invalid_reason'] = 'Vous n\'avez pas spécifié de raison pour le bannissement.';

$txt['ban_membername_style'] = 'Ä quoi appliquer les bans de nom de membre&nbsp;?';
$txt['ban_membername_style_username'] = 'Identifiants uniquement';
$txt['ban_membername_style_display'] = 'Noms affichés uniquement';
$txt['ban_membername_style_both'] = 'Les deux';

$txt['softban_blankpage'] = 'Chances qu\'un banni léger reçoive une page blanche';
$txt['softban_percent_subtext'] = 'En pourcentage, de 0 à 100.';
$txt['softban_nosearch'] = 'Chances qu\'un banni léger ne puisse pas lancer une recherche';

$txt['softban_disableregistration'] = 'L\'enregistrement doit-il être désactivé pour les bannis légers&nbsp;?';
$txt['softban_disableregistration_desc'] = 'Les bans légers peuvent inclure des adresses IP, si vous voulez empêcher les enregistrements de certaines zones géographiques.';

$txt['softban_redirect'] = 'Chances d\'être redirigé vers une autre page';
$txt['softban_redirect_subtext'] = 'Actif uniquement si vous entrez une URL ci-dessous.';
$txt['softban_redirect_url'] = 'Adresse vers laquelle rediriger';

$txt['softban_delay_min'] = 'Délai de chargement en secondes - minimal';
$txt['softban_delay_max'] = 'Délai de chargement en secondes - maximal';
$txt['softban_delay_max_subtext'] = 'Un délai aléatoire entre ces deux valeurs sera choisi, et les bannis légers devront patienter pendant ce temps supplémentaire avant le chargement de la page. Le délai maximal est de 15 secondes. Au-delà, la surchage du serveur devient importante.';
