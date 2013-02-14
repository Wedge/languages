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
$txt['install_error_maint_mode'] = 'Vous devez activer le mode Maintenance pour installer cette extension.';
$txt['fatal_install_error_maint_mode'] = 'Cette extension effectue des changements conséquents sur la base de données de votre forum. Pour faciliter et accélérer son installation, elle demande l\'activation du mode Maintenance. C\'est une procédure de précaution qu\'il est préférable de ne pas ignorer.';
$txt['fatal_remove_error_maint_mode'] = 'Cette extension a effectué des changements conséquents sur la base de données de votre forum. Pour faciliter et accélérer sa suppression, elle demande l\'activation du mode Maintenance. C\'est une procédure de précaution qu\'il est préférable de ne pas ignorer.';
$txt['fatal_install_error_reqfunc'] = 'Cette extension fait appel à des fonctionnalités non disponibles sur votre version de PHP, dont voici le nom des fonctions&nbsp;: %1$s. Contactez votre hébergeur pour plus d\'informations.';
$txt['fatal_install_error_missinghook'] = 'Cette extension fait appel à des fonctionnalités non disponibles sur votre serveur, sous les références suivantes&nbsp:: %1$s. Contactez l\'auteur de l\'extension pour plus d\'informations.';
$txt['fatal_install_enable_missing'] =  'Cette extension spécifie qu\'un fichier en particulier contient des instructions à exécuter au moment de son activation, %1$s, mais le fichier est introuvable à l\'endroit indiqué par l\'extension.';
$txt['fatal_install_disable_missing'] = 'Cette extension spécifie qu\'un fichier en particulier contient des instructions à exécuter au moment de sa désactivation, %1$s, mais le fichier est introuvable à l\'endroit indiqué par l\'extension.';
$txt['fatal_install_remove_missing'] =  'Cette extension spécifie qu\'un fichier en particulier contient des instructions à exécuter au moment de sa suppression, %1$s, mais le fichier est introuvable à l\'endroit indiqué par l\'extension.';
$txt['fatal_conflicted_plugins'] = 'Cette extension ajoute des fonctionnalités à d\'autres extensions. Vous ne pourrez la désactiver qu\'après avoir désactivé la ou les extensions suivantes&nbsp;: %1$s';
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
$txt['remove_plugin_maint'] = 'Cette extension indique qu\'elle demande l\'activation du mode Maintenance avant de pouvoir être désinstallée, en raison des changements conséquents qu\'elle a opérés sur la base de données.';

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

$txt['plugins_invalid_upload'] = 'Il semblerait que vous ayez tenté d\'uploader une extension, mais le fichier n\'a pas pu être sauvé. Peut-être était-il trop gros pour votre serveur, ou que votre hébergeur a imposé une autre limite. Pour rappel, les extensions peuvent être extraites sur votre ordinateur et uploadées par FTP ou SFTP directement dans le dossier Plugins à la racine de votre forum.';
$txt['plugins_unable_read'] = 'L\'extension a été uploadée mais Wedge n\'a pas pu la lire. Cela peut être dû à une configuration inhabituelle de votre hébergement. Vous aurez peut-être besoin d\'uploader vos extensions manuellement vers le dossier Plugins par FTP ou SFTP plutôt que via cette interface web.';
$txt['plugins_unable_write'] = 'L\'extension a été uploadée mais Wedge n\'a pas pu décompresser ses fichiers sur votre serveur. C\'est peut-être dû à une configuration inhabituelle. Vous devrez probablement uploader vos extensions manuellement vers le dossier Plugins par FTP ou SFTP plutôt que via cette interface web.';
$txt['plugins_invalid_zip'] = 'L\'extension a été uploadée mais le fichier Zip semble être corrompu et n\'a pas pu être lu. Essayez de le re-télécharger là où vous l\'avez récupéré, ou décompressez-le manuellement sur votre ordinateur et envoyez-le par FTP ou SFTP dans le dossier Plugins à la racine de votre forum.';
$txt['plugins_generic_error'] = 'L\'extension a été uploadée mais l\'opération ne s\'est pas déroulée correctement. Merci de contacter le support de Wedge (en anglais de préférence), en indiquant la référence %1$s:%2$s quand vous décrirez votre problème.';
$txt['plugins_invalid_plugin_no_info'] = 'Votre extension a été uploadée, mais elle ne contient pas de fichier plugin-info.xml valid. Wedge en a besoin pour installer l\'extension. Contactez l\'auteur de l\'extension pour plus d\'aide.';
$txt['plugins_invalid_plugin_overinfo'] = 'Votre extension a été uploadée, mais elle contient plusieurs fichiers plugin-info.xml, et Wedge ne sait pas lequel utiliser. Contactez l\'auteur de l\'extension pour plus d\'aide.';
$txt['plugins_uploaded_error'] = 'Un problème a été détecté avec cette extension après l\'upload. Merci de réessayer l\'envoi.';
$txt['plugins_uploaded_tampering'] = 'Un problème a été détecté avec cette extension après l\'upload. Il semblerait qu\'elle ait été trafiquée, et a été supprimée pour votre propre protection.';

$txt['plugin_duplicate_detected_title'] = 'Extension en double détectée';
$txt['plugin_duplicate_detected'] = 'L\'extension que vous avez uploadée ($1$s) semble être identique à une extension déjà installée et active sur votre site (%2$s). Que faire&nbsp;?';
$txt['plugin_duplicate_cancel'] = 'Rien pour le moment';
$txt['plugin_duplicate_cancel_desc'] = 'L\'extension déjà active sera laissée comme telle, et le fichier que vous venez d\'uploader sera supprimé.';
$txt['plugin_duplicate_proceed'] = 'Remplacer l\'ancienne avec la nouvelle';
$txt['plugin_duplicate_proceed_desc'] = 'L\'extension déjà active sera désactivée et ses fichiers (mais pas ses données associées) retirés, et la nouvelle sera décompressée, et prête à être installée.';

$txt['plugin_upload_successful_title'] = 'Envoi réussi';
$txt['plugin_upload_successful'] = 'L\'extension a été correctement uploadée, et tout semble être en ordre. Wedge va maintenant décompresser le fichier, ce qui peut nécessiter plusieurs étapes pour éviter de surcharger le serveur.';

$txt['plugin_connection_successful_title'] = 'Connexion réussie';
$txt['plugin_connection_successful'] = 'Les identifiants indiqués semblent être corrects, Wedge va maintenant passer à la prochaine étape de l\'installation.';

$txt['plugin_connection_details_title'] = 'Détails de la connexion';
$txt['plugin_connection_details'] = 'Pour pouvoir continuer à installer l\'extension sur votre serveur, Wedge a besoin de ses identifiants FTP ou SFTP.';
$txt['plugin_connection_cancel_oops'] = 'Hum...';
$txt['plugin_connection_cancel'] = 'Si votre hébergeur ne vous a pas fourni d\'identifiants FTP ou SFTP, vous ne pourrez pas utiliser l\'interface web, contactez alors votre hébergeur pour savoir comment gérer vos fichiers. Vous aurez sans doute besoin de passer par un panneau de contrôle de l\'hébergeur.';
$txt['plugin_connection_button'] = 'Je ne les ai pas';
$txt['plugin_connection_required'] = 'Si vous connaissez ces éléments, voici ce que Wedge a besoin de savoir.';

$txt['plugin_connection'] = 'Voici mes identifiants';
$txt['plugin_ftp_server'] = 'Serveur&nbsp;:';
$txt['plugin_ftp_port'] = 'Port&nbsp;:';
$txt['plugin_ftp_username'] = 'Nom d\'utilisateur&nbsp;:';
$txt['plugin_ftp_password'] = 'Mot de passe&nbsp;:';
$txt['plugin_ftp_type'] = 'Type de connexion&nbsp;:';
$txt['plugin_ftp_path'] = 'Chemin vers le dossier Plugins&nbsp;:';
$txt['plugin_ftp_save'] = 'Se souvenir de mes identifiants';
$txt['plugin_ftp_error'] = 'Les éléments suivants sont à vérifier&nbsp;:';
$txt['plugin_ftp_error_bad_server'] = 'Le serveur ne semble pas être le bon.';
$txt['plugin_ftp_error_bad_response'] = 'Après avoir contacté le serveur FTP, une réponse inconnue a été reçue. Réessayez peut-être plus tard.';
$txt['plugin_ftp_error_bad_username'] = 'Le nom d\'utilisateur est incorrect.';
$txt['plugin_ftp_error_bad_password'] = 'Le mot de passe est incorrect.';
$txt['plugin_ftp_error_wrong_folder'] = 'Le dossier indiqué est incorrect, et les tentatives de trouver le bon dossier ont échoué.';

$txt['plugin_files_pruned_title'] = 'Ancienne extension supprimée';
$txt['plugin_files_pruned'] = 'L\'ancienne extension a été supprimée. Wedge va maintenant installer la nouvelle.';

$txt['plugin_folders_created_title'] = 'Dossiers créés';

$txt['plugin_files_unpacked_title'] = 'Fichiers décompressés';
$txt['plugin_files_unpacked'] = 'Tous les fichiers ont pu être décompressés. Vous devriez maintenant pouvoir activer cette extension&nbsp;!';
