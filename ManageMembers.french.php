<?php
// Version: 2.0; ManageMembers

$txt['groups'] = 'Groupes';
$txt['members_list'] = 'Liste des membres';
$txt['viewing_groups'] = 'Affichage des groupes de membres';
$txt['visible_to_all'] = '(déjà visible à tous les membres)';
$txt['viewing_members'] = 'Voir les membres de %1$s à %2$s';
$txt['of_total_members'] = 'sur %1$s au total';
$txt['view_all_members'] = 'Voir tous les membres';

$txt['membergroups_title'] = 'Gestion des Groupes de Membres';
$txt['membergroups_description'] = 'Ce sont des ensembles de membres qui ont les mêmes paramètres de permissions, apparence et droits d\'accès. Certains groupes sont basés sur le nombre de messages postés par le membre. Vous pouvez assigner quelqu\'un à un groupe en sélectionnant son profil et en modifiant le paramètre correspondant de son compte.';
$txt['membergroups_modify'] = 'Modifier';

$txt['membergroups_add_group'] = 'Ajouter un groupe de membres';
$txt['membergroups_regular'] = 'Groupes permanents';
$txt['membergroups_post'] = 'Groupes posteurs';

$txt['membergroups_group_name'] = 'Nom du groupe';
$txt['membergroups_new_board'] = 'Sections visibles';
$txt['membergroups_board_see'] = 'Ce groupe de membres peut voir...';
$txt['membergroups_board_enter'] = 'Ce groupe de membres peut accéder à...';
$txt['membergroups_new_board_post_groups'] = '<em>Note&#8239;: normalement, les groupes posteurs n\'ont pas besoin d\'un accés parce que le groupe dans lequel le membre est inclus lui donnera les autorisations nécessaires.</em>';
$txt['membergroups_new_as_inherit'] = 'hérité de';
$txt['membergroups_new_as_type'] = 'par type';
$txt['membergroups_new_as_copy'] = 'basé sur';
$txt['membergroups_new_copy_none'] = '(aucun)';
$txt['membergroups_can_edit_later'] = 'Vous pourrez les modifier plus tard.';
$txt['membergroups_view_enter_same'] = 'Les sections que ce groupe peut voir lui sont aussi accessibles';
$txt['membergroups_need_deny_perm'] = 'J\'ai besoin d\'empêcher à ce groupe l\'accès à des sections';
$txt['group_boards_never'] = 'Jamais';
$txt['group_boards_everything'] = 'Tout';
$txt['group_boards_everything_desc'] = 'Utilisez cette option pour sélectionner rapidement toutes les sections ci-dessous.';

$txt['membergroups_edit_group'] = 'Modifier le groupe de membres';
$txt['membergroups_edit_name'] = 'Nom du groupe';
$txt['membergroups_edit_inherit_permissions'] = 'Héritage des Permissions';
$txt['membergroups_edit_inherit_permissions_desc'] = 'Sélectionnez &quot;Aucun&quot; pour permettre à un groupe d\'avoir ses propres permissions.';
$txt['membergroups_edit_inherit_permissions_no'] = 'Aucun - Utiliser des permissions uniques';
$txt['membergroups_edit_inherit_permissions_from'] = 'Hériter de';
$txt['membergroups_edit_hidden'] = 'Visibilité';
$txt['membergroups_edit_hidden_no'] = 'Visible';
$txt['membergroups_edit_hidden_boardindex'] = 'Visible - Sauf dans la liste de la page d\'accueil';
$txt['membergroups_edit_hidden_all'] = 'Invisible';
$txt['membergroups_edit_hidden_warning'] = 'Êtes-vous sûr de vouloir interdire l\'assignation de ce groupe en tant que groupe principal&#8239;?<br><br>Il ne pourra plus être affecté qu\'en tant que groupe additionnel, et pour tous les membres l\'utilisant comme groupe principal, il sera converti en groupe additionnel.';
$txt['membergroups_edit_desc'] = 'Description du Groupe';
$txt['membergroups_edit_group_type'] = 'Type de Groupe';
$txt['membergroups_edit_select_group_type'] = 'Choisissez l\'un de ces types de groupe';
$txt['membergroups_group_type_private'] = 'Privé <span class="smalltext">(Les membres sont ajoutés manuellement)</span>';
$txt['membergroups_group_type_protected'] = 'Protégé <span class="smalltext">(Seuls les administrateurs peuvent le gérer)</span>';
$txt['membergroups_group_type_request'] = 'Sur demande <span class="smalltext">(Tout le monde peut demander à être membre du groupe)</span>';
$txt['membergroups_group_type_free'] = 'Libre <span class="smalltext">(Tout le monde peut rejoindre et quitter le groupe à tout moment)</span>';
$txt['membergroups_group_type_post'] = 'Basé sur les messages <span class="smalltext">(L\'appartenance au groupe dépend du nombre de messages postés)</span>';
$txt['membergroups_min_posts'] = 'Nombre de messages requis';
$txt['membergroups_online_color'] = 'Couleur des liens vers les profils';
$txt['membergroups_online_color_desc'] = 'Par exemple #ffcc99';
$txt['membergroups_additional_formatting'] = 'Mise en forme supplémentaire pour les liens de profil';
$txt['membergroups_add_format_bold'] = 'Gras';
$txt['membergroups_add_format_italic'] = 'Italiques';
$txt['membergroups_add_format_underline'] = 'Souligné';
$txt['membergroups_add_format_strike'] = 'Surligné';
$txt['membergroups_add_format_free'] = 'Libre';
$txt['membergroups_star_count'] = 'Nombre d\'images de grade';
$txt['membergroups_star_count_note'] = 'Ou mettez à 1 pour créer facilement un badge, par exemple.';
$txt['membergroups_star_image'] = 'Nom du fichier image';
$txt['membergroups_star_image_note'] = 'Vous pouvez utiliser $language pour pointer vers un dossier différent selon la langue du membre.';
$txt['membergroups_max_messages'] = 'Nombre de MP maximum';
$txt['membergroups_max_messages_note'] = '0 = illimité';
$txt['membergroups_edit_save'] = 'Sauvegarder';
$txt['membergroups_delete'] = 'Effacer';
$txt['membergroups_confirm_delete'] = 'Êtes-vous sûr de vouloir effacer ce groupe&#8239;?';

$txt['membergroups_members_title'] = 'Montrer tous les membres du groupe';
$txt['membergroups_members_group_members'] = 'Membres du Groupe';
$txt['membergroups_members_no_members'] = 'Ce groupe est actuellement vide';
$txt['membergroups_members_add_title'] = 'Ajouter un membre à ce groupe';
$txt['membergroups_members_add_desc'] = 'Liste des membres à ajouter';
$txt['membergroups_members_add'] = 'Ajouter les membres';
$txt['membergroups_members_remove'] = 'Enlever du groupe';
$txt['membergroups_members_last_active'] = 'Dernière Connexion';
$txt['membergroups_members_additional_only'] = 'Ajouter comme groupe additionnel seulement.';
$txt['membergroups_members_group_moderators'] = 'Modérateurs du Groupe';
$txt['membergroups_members_description'] = 'Description';
$txt['membergroups_members_deadmin_confirm'] = 'Êtes-vous sûr de vouloir vous retirer du groupe administrateur&#8239;?';

$txt['membergroups_postgroups'] = 'Groupes Posteurs';
$txt['membergroups_settings'] = 'Réglages des groupes de membres';
$txt['groups_manage_membergroups'] = 'Groupes autorisés à modifier les groupes de membres';
$txt['group_text_show'] = 'Montrer les noms de groupes sous les utilisateurs&#8239;?';
$txt['group_show_none'] = 'Aucun';
$txt['group_show_all'] = 'Tous les groupes';
$txt['group_show_normal'] = 'Groupes normaux';
$txt['group_show_post'] = 'Groupes posteurs|(Groupes basés sur le nombre de messages)';
$txt['group_show_cond'] = 'Groupes posteurs, sous condition|Montrer les groupes normaux. Si aucun groupe n\'est assigné, montrer le groupe posteur.';

$txt['membergroup_badges'] = 'Badges de groupe';
$txt['membergroup_badges_desc'] = 'Ici, vous pouvez configurer quels groupes verront un badge s\'afficher sous les noms de leurs membres, et dans quel ordre les montrer, en les déplaçant par glisser-déposer.';
$txt['membergroup_badges_nobadge'] = '(pas de badge listé)';

$txt['membergroup_badge_postcount'] = '(groupe posteur)';
$txt['membergroup_show_when_never'] = 'Ne jamais montrer ce badge';
$txt['membergroup_show_when_always'] = 'Toujours montrer ce badge';
$txt['membergroup_show_when_primary'] = 'Seulement quand c\'est le groupe principal';
$txt['membergroup_show_when_cond'] = 'Seulement si c\'est le seul badge disponible';
$txt['membergroup_show_when_desc_never'] = 'Ne jamais montrer ce badge, même si un membre appartient à ce groupe.';
$txt['membergroup_show_when_desc_always'] = 'Montrer ce badge si un membre appartient à ce groupe.';
$txt['membergroup_show_when_desc_primary'] = 'Ne montrer ce badge que si ce groupe est le groupe principal du membre.';
$txt['membergroup_show_when_desc_cond'] = 'Ne montrer ce badge que si le membre appartient à ce groupe et qu\'il n\'a pas d\'autres badges à montrer.';
$txt['show_group_key'] = 'Montrer la légende des groupes dans le centre d\'informations';
$txt['ban_group'] = 'Ajouter les bannis à un groupe';
$txt['ban_group_subtext'] = 'Ne s\'applique qu\'aux bannis "durs", et seulement pour des questions d\'affichage.';
$txt['ban_group_none'] = 'Ne pas les ajouter à un groupe';

$txt['membergroups_select_permission_type'] = 'Sélectionner un profil de permissions';
$txt['membergroups_images_url'] = '{URL du thème}/images/';
$txt['membergroups_select_visible_boards'] = 'Montrer les sections';
$txt['membergroups_members_top'] = 'Membres';
$txt['membergroups_name'] = 'Nom';
$txt['membergroups_stars'] = 'Grade';

$txt['admin_browse_approve'] = 'Membres dont le compte est en attente d\'approbation';
$txt['admin_browse_approve_desc'] = 'Ici vous pouvez gérer tous les membres en attente d\'approbation de leur compte.';
$txt['admin_browse_activate'] = 'Membres dont le compte est en attente d\'activation';
$txt['admin_browse_activate_desc'] = 'Cette interface liste tous les membres qui n\'ont pas encore activé leur compte sur votre forum.';

$txt['admin_browse_username'] = 'Identifiant';
$txt['admin_browse_email'] = 'Adresse e-mail';
$txt['admin_browse_ip'] = 'Adresse IP';
$txt['admin_browse_registered'] = 'Inscrit';
$txt['admin_browse_login'] = 'Dernière connexion';
$txt['admin_browse_id'] = 'ID';
$txt['admin_browse_with_selected'] = 'Avec la sélection';
$txt['admin_browse_no_members_approval'] = 'Aucun compte n\'est actuellement en attente d\'approbation.';
$txt['admin_browse_no_members_activate'] = 'Aucun compte n\'est actuellement en attente d\'activation.';

$txt['admin_browse_warn'] = 'tous les membres sélectionnés&#8239;?';
$txt['admin_browse_outstanding_warn'] = 'tous les membres affectés&#8239;?';
$txt['admin_browse_w_approve'] = 'Approuver';
$txt['admin_browse_w_activate'] = 'Activer';
$txt['admin_browse_w_delete'] = 'Supprimer';
$txt['admin_browse_w_reject'] = 'Rejeter';
$txt['admin_browse_w_remind'] = 'Rappeler';
$txt['admin_browse_w_approve_deletion'] = 'Approuver (Suppression de comptes)';
$txt['admin_browse_w_email'] = 'et envoyer un e-mail';
$txt['admin_browse_w_approve_require_activate'] = 'Approuver et requérir une activation';

$txt['admin_browse_filter_by'] = 'Filtrer par';
$txt['admin_browse_filter_show'] = 'Afficher';
$txt['admin_browse_filter_type_0'] = 'les nouveaux comptes non activés';
$txt['admin_browse_filter_type_2'] = 'les changements d\'adresse e-mail non vérifiés';
$txt['admin_browse_filter_type_3'] = 'les nouveaux comptes non approuvés';
$txt['admin_browse_filter_type_4'] = 'les suppressions de comptes non approuvées';
$txt['admin_browse_filter_type_5'] = 'les comptes non approuvés notés "Sous l\'âge minimum"';

$txt['admin_browse_outstanding'] = 'Membres exceptionnels';
$txt['admin_browse_outstanding_days_1'] = 'Avec tous les membres inscrits depuis plus longtemps que';
$txt['admin_browse_outstanding_days_2'] = 'jours';
$txt['admin_browse_outstanding_perform'] = 'Effectuer l\'action suivante';
$txt['admin_browse_outstanding_go'] = 'Effectuer l\'action';

$txt['check_for_duplicate'] = 'Chercher et afficher les doublons';
$txt['dont_check_for_duplicate'] = 'Ne pas afficher les doublons';
$txt['duplicates'] = 'Doublons';

$txt['not_activated'] = 'Pas activé';
