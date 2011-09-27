<?php
// Version: 2.0; ManageAddons

$txt['addon_manager_desc'] = 'Cette page vous permet de gérer toutes les extensions disponibles sur le serveur.';

$txt['fatal_not_valid_addon'] = 'L\'extension spécifiée est introuvable ou corrompue, et ne peut être activée.';
$txt['fatal_not_valid_addon_remove'] = 'L\'extension spécifiée n\'a pas pu être supprimée car elle semble être corrompue.';
$txt['install_errors'] = 'Cette extension ne peut être utilisée pour cette raison&nbsp;:';
$txt['fatal_already_enabled'] = 'Cette extension est déjà activée.';
$txt['fatal_already_disabled'] = 'Cette extension est déjà désactivée.';
$txt['install_error_minphp'] = 'PHP doit être mis à jour en version %1$s (version installée&nbsp;: %2$s)';
$txt['fatal_install_error_minphp'] = 'Cette extension n\'a pas pu être installée, car elle nécessite que PHP soit mis à jour en version %1$d. La version actuelle est %2$s.';
$txt['install_error_minmysql'] = 'MySQL doit être mis à jour en version %1$s (version installée&nbsp;:%2$s)';
$txt['fatal_install_error_minmysql'] = 'Cette extension n\'a pas pu être installée, car elle nécessite que MySQL soit mis à jour en version %1$d. La version actuelle est %2$s.';
$txt['install_error_missinghook'] = 'Au moins une des fonctionnalités requises par cette extension n\'est pas disponible.';
$txt['install_error_reqfunc'] = 'Cette fonction fait appel à des fonctions PHP inexistantes&nbsp;: %1$s';
$txt['fatal_install_error_reqfunc'] = 'Cette extension fait appel à des fonctionnalités non disponibles sur votre version de PHP, dont voici le nom des fonctions&nbsp;: %1$s. Contactez votre hébergeur pour plus d\'informations.';
$txt['fatal_install_error_missinghook'] = 'Cette extension fait appel à des fonctionnalités non disponibles sur votre serveur, sous les références suivantes&nbsp:: %1$s. Contactez l\'auteur de l\'extension pour plus d\'informations.';
$txt['fatal_install_enable_missing'] = 'Cette extension spécifie qu\'un fichier en particulier contient des instructions à exécuter au moment de son activation, %1$s, mais le fichier est introuvable à l\'endroit indiqué par l\'extension.';
$txt['fatal_install_disable_missing'] = 'Cette extension spécifie qu\'un fichier en particulier contient des instructions à exécuter au moment de sa désactivation, %1$s, mais le fichier est introuvable à l\'endroit indiqué par l\'extension.';
$txt['fatal_install_remove_missing'] = 'Cette extension spécifie qu\'un fichier en particulier contient des instructions à exécuter au moment de sa suppression, %1$s, mais le fichier est introuvable à l\'endroit indiqué par l\'extension.';
$txt['no_addons_found'] = 'Aucune extension.';

$txt['addon_written_by'] = 'Écrit par';
$txt['addon_author_url'] = 'Site web de l\'auteur';
$txt['addon_website'] = 'Visiter le site web de %1$s';
$txt['addon_author_email'] = 'Envoyer un e-mail à l\'auteur';
$txt['addon_readmes'] = 'Informations sur cette extension';

$txt['invalid_addon_readme'] = 'Aucun fichier lisez-moi lisible n\'accompagne cette extension. Quelle ironie.';
$txt['enable_addon'] = 'Activer l\'extension';
$txt['disable_addon'] = 'Désactiver l\'extension';
$txt['remove_addon'] = 'Supprimer l\'extension';

$txt['remove_addon_desc'] = 'Vous avez demandé à supprimer l\'extension %1$s.';
$txt['remove_addon_blurb'] = 'Il y a deux façons de supprimer une extension.';
$txt['remove_addon_nodelete'] = 'Sauvegarder les données';
$txt['remove_addon_nodelete_desc'] = 'L\'extension et ses fichiers seront supprimés, mais les données et préférences associées seront conservées. Pour plus d\'informations sur ce qui sera conservé, contactez l\'auteur de l\'extension.';
$txt['remove_addon_delete'] = 'Supprimer les données';
$txt['remove_addon_delete_desc'] = 'L\'extension, ses fichiers, ses données et préférences associées seront <strong>tous supprimés</strong>. Vous ne pourrez plus récupérer ces données par la suite&nbsp;! <strong>Ne faites cela que si vous êtes sûr de ne plus vouloir utiliser l\'extension par la suite.</strong>';
$txt['remove_addon_unsure'] = 'En cas de doute, choisissez toujours de "sauvegarder les données".';
$txt['remove_addon_already_enabled'] = 'Cette extension est actuellement activée. Vous devez l\'activer avant de pouvoir la supprimer.';
$txt['remove_addon_files_still_there'] = 'Les fichiers de cette extension n\'ont pas pu être supprimés. Vous devrez peut-être vous connecter par FTP à votre serveur pour en supprimer le dossier %1$s.';
$txt['remove_addon_files_pre_still_there'] = 'Cette extension n\'est pas encore supprimée. Les fichiers qui la constituent ne pourront être effacés que si vous vous connectez par FTP à votre serveur pour en changer les permissions.';

?>