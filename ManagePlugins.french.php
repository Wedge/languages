<?php
// Version: 2.0; ManagePlugins

$txt['plugin_manager_desc'] = 'Cette page vous permet de gérer toutes les extensions disponibles sur le serveur.';

$txt['fatal_not_valid_plugin'] = 'L\'extension spécifiée est introuvable ou corrompue, et ne peut être activée.';
$txt['fatal_not_valid_plugin_remove'] = 'L\'extension spécifiée n\'a pas pu être supprimée car elle semble être corrompue.';
$txt['install_errors'] = 'Cette extension ne peut être utilisée pour cette raison&nbsp;:';
$txt['fatal_already_enabled'] = 'Cette extension est déjà activée.';
$txt['fatal_already_disabled'] = 'Cette extension est déjà désactivée.';
$txt['install_error_minphp'] = 'PHP doit être mis à jour en version %1$s (version installée&nbsp;: %2$s)';
$txt['fatal_install_error_minphp'] = 'Cette extension n\'a pas pu être installée, car elle nécessite que PHP soit mis à jour en version %1$s. La version actuelle est %2$s.';
$txt['install_error_minmysql'] = 'MySQL doit être mis à jour en version %1$s (version installée&nbsp;:%2$s)';
$txt['fatal_install_error_minmysql'] = 'Cette extension n\'a pas pu être installée, car elle nécessite que MySQL soit mis à jour en version %1$s. La version actuelle est %2$s.';
$txt['install_error_missinghook'] = 'Au moins une des fonctionnalités requises par cette extension n\'est pas disponible.';
$txt['install_error_reqfunc'] = 'Cette fonction fait appel à des fonctions PHP inexistantes&nbsp;: %1$s';
$txt['install_error_duplicate_id'] = 'Une autre extension avec un identifiant identique est déjà activée.';
$txt['fatal_duplicate_id'] = 'Une autre extension partageant le même identifiant est déjà activée. Il s\'agit peut-être d\'une autre version de la même extension. Vous devrez la désactiver avant de pouvoir activer celle-ci.';
$txt['fatal_install_error_reqfunc'] = 'Cette extension fait appel à des fonctionnalités non disponibles sur votre version de PHP, dont voici le nom des fonctions&nbsp;: %1$s. Contactez votre hébergeur pour plus d\'informations.';
$txt['fatal_install_error_missinghook'] = 'Cette extension fait appel à des fonctionnalités non disponibles sur votre serveur, sous les références suivantes&nbsp:: %1$s. Contactez l\'auteur de l\'extension pour plus d\'informations.';
$txt['fatal_install_enable_missing'] =  'Cette extension spécifie qu\'un fichier en particulier contient des instructions à exécuter au moment de son activation, %1$s, mais le fichier est introuvable à l\'endroit indiqué par l\'extension.';
$txt['fatal_install_disable_missing'] = 'Cette extension spécifie qu\'un fichier en particulier contient des instructions à exécuter au moment de sa désactivation, %1$s, mais le fichier est introuvable à l\'endroit indiqué par l\'extension.';
$txt['fatal_install_remove_missing'] =  'Cette extension spécifie qu\'un fichier en particulier contient des instructions à exécuter au moment de sa suppression, %1$s, mais le fichier est introuvable à l\'endroit indiqué par l\'extension.';
$txt['no_plugins_found'] = 'Aucune extension.';

$txt['plugin_written_by'] = 'Écrit par';
$txt['plugin_author_url'] = 'Site web de l\'auteur';
$txt['plugin_website'] = 'Visiter le site web de %1$s';
$txt['plugin_author_email'] = 'Envoyer un e-mail à l\'auteur';
$txt['plugin_readmes'] = 'Informations sur cette extension';

$txt['invalid_plugin_readme'] = 'Aucun fichier lisez-moi lisible n\'accompagne cette extension. Quelle ironie.';
$txt['enable_plugin'] = 'Activer l\'extension';
$txt['disable_plugin'] = 'Désactiver l\'extension';
$txt['remove_plugin'] = 'Supprimer l\'extension';

$txt['remove_plugin_desc'] = 'Vous avez demandé à supprimer l\'extension %1$s.';
$txt['remove_plugin_blurb'] = 'Il y a deux façons de supprimer une extension.';
$txt['remove_plugin_nodelete'] = 'Sauvegarder les données';
$txt['remove_plugin_nodelete_desc'] = 'L\'extension et ses fichiers seront supprimés, mais les données et préférences associées seront conservées. Pour plus d\'informations sur ce qui sera conservé, contactez l\'auteur de l\'extension.';
$txt['remove_plugin_delete'] = 'Supprimer les données';
$txt['remove_plugin_delete_desc'] = 'L\'extension, ses fichiers, ses données et préférences associées seront <strong>tous supprimés</strong>. Vous ne pourrez plus récupérer ces données par la suite&nbsp;! <strong>Ne faites cela que si vous êtes sûr de ne plus vouloir utiliser l\'extension par la suite.</strong>';
$txt['remove_plugin_unsure'] = 'En cas de doute, choisissez toujours de "sauvegarder les données".';
$txt['remove_plugin_already_enabled'] = 'Cette extension est actuellement activée. Vous devez l\'activer avant de pouvoir la supprimer.';
$txt['remove_plugin_files_still_there'] = 'Les fichiers de cette extension n\'ont pas pu être supprimés. Vous devrez peut-être vous connecter par FTP à votre serveur pour en supprimer le dossier %1$s.';
$txt['remove_plugin_files_pre_still_there'] = 'Cette extension n\'est pas encore supprimée. Les fichiers qui la constituent ne pourront être effacés que si vous vous connectez par FTP à votre serveur pour en changer les permissions.';

$txt['plugin_filter'] = 'Filtrer&nbsp;:';
$txt['plugin_filter_all'] = 'Toutes (%1$d)';
$txt['plugin_filter_enabled'] = 'Actives (%1$d)';
$txt['plugin_filter_disabled'] = 'Inactives (%1$d)';
$txt['plugin_filter_install_errors'] = 'Incompatibles (%1$d)';

$txt['could_not_connect_remote'] = 'Wedge n\'a pas pu se connecter au serveur pour y effectuer les changements à votre place.<br>Le serveur a renvoyé ce message d\'erreur&nbsp;: %1$s<br><br>Essayez de revenir en arrière et de vérifier que vous avez fourni les bons identifiants de connexion.';

$txt['plugins_no_gzinflate'] = 'Votre serveur ne supportant pas gzinflate, les fonctionnalités de téléchargement/upload d\'extensions ne sont pas disponibles. Demandez à votre hébergeur s\'ils peuvent activer le support de la bibliothèque zlib dans leur installation de PHP.';
$txt['plugins_add_desc'] = 'Cette page vous permet d\'ajouter de nouvelles extensions à votre forum.';
$txt['plugins_add_download'] = 'Récupérer une Extension sur un Dépôt';
$txt['plugins_add_download_desc'] = 'Vous pouvez utiliser les options ci-dessous pour télécharger des extensions à partir de dépôts (serveurs distants servant de bibliothèques d\'extensions).';
$txt['plugins_repository'] = 'Dépôt';
$txt['plugins_active'] = 'Actif';
$txt['plugins_browse'] = 'Parcourir';
$txt['plugins_modify'] = 'Modifier';
$txt['plugins_no_repos'] = 'Pas de dépôts listés.';
$txt['plugins_add_repo'] = 'Ajouter un dépôt';
$txt['plugins_repo_auth'] = 'Des identifiants seront transmis à ce dépôt pour s\'y connecter.';
$txt['plugins_repo_error'] = 'Erreur';
$txt['plugins_add_upload'] = 'Transférer une Extension à partir de votre Ordinateur';
$txt['plugins_add_upload_desc'] = 'Vous pouvez utiliser cette fonctionnalité pour transférer une extension au format .zip ou .tar.gz vers votre forum.';
$txt['plugins_add_upload_file'] = 'Fichier à transférer&nbsp;:';
$txt['plugins_upload_plugin'] = 'Transmettre';

$txt['plugins_browse_invalid_error'] = 'Le dépôt d\'extensions auquel vous essayez d\'accéder n\'existe pas.';
$txt['plugins_browse_could_not_connect'] = 'Le dépôt d\'extensions demandé est introuvable. Il est peut-être temporairement indisponible. Essayez de le parcourir manuellement via ce lien&nbsp;: <a href="%1$s">%1$s</a>';

$txt['plugins_edit_repo'] = 'Modifier dépôt';
$txt['plugins_edit_repo_desc'] = 'Cette page vous permet de modifier les paramètres des dépôts supplémentaires.';
$txt['plugins_edit_invalid'] = 'Vous avez essayé de modifier un dépôt qui n\'existe pas. Utilisez la fonction un peu plus bas pour ajouter un nouveau dépôt.';
$txt['plugins_edit_invalid_error'] = 'Vous avez essayé de modifier un dépôt qui n\'existe pas.';
$txt['plugins_repo_details'] = 'Détails du Dépôt';
$txt['plugins_repo_details_desc'] = 'Vous devrez renseigner le nom et l\'adresse du dépôt pour s\'y connecter, et vous pouvez également lui fournir un identifiant et un mot de passe pour la connexion (facultatif).';

$txt['plugins_repo_name'] = 'Nom du Dépôt';
$txt['plugins_repo_address'] = 'Adresse du Dépôt';
$txt['plugins_repo_active'] = 'Le dépôt est actif';
$txt['plugins_repo_delete'] = 'Supprimer';
$txt['plugins_repo_delete_confirm'] = 'Êtes-vous sûr de vouloir supprimer ce dépôt ? Il ne sera pas possible d\'annuler cette opération.';

$txt['plugins_repo_auth'] = 'Détails d\'Authentification';
$txt['plugins_repo_auth_desc'] = 'Si ce dépôt nécessite un identifiant et un mot de passe, entrez-les ici. Sinon, laissez cet espace vide.';
$txt['plugins_repo_username'] = 'Nom d\'utilisateur';
$txt['plugins_repo_password'] = 'Mot de passe';
$txt['plugins_repo_password_blank'] = 'Pourquoi est-ce vide&nbsp;?';

$txt['plugins_repo_no_name'] = 'Vous n\'avez pas entré de nom pour le dépôt. Il est requis pour continuer.';
$txt['plugins_repo_no_url'] = 'Vous n\'avez pas entré d\'adresse nom pour le dépôt. Elle est requise pour continuer.';
$txt['plugins_repo_invalid_url'] = 'L\'adresse fournie pour le dépôt est invalide. Merci de la vérifier et de réessayer.';
$txt['plugins_auth_pwd_nouser'] = 'Vous avez entré un mot de passe pour le dépôt, mais pas d\'identifiant - les deux sont nécessaires, ou laissez vide si le dépôt ne demande pas d\'authentification.';
$txt['plugins_auth_diffuser'] = 'Vous avez entré un identifiant pour le dépôt, mais pas de mot de passe - les deux sont nécessaires, ou laissez vide si le dépôt ne demande pas d\'authentification.';

?>