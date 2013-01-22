<?php
// Version: 2.0; Packages

$txt['package_proceed'] = 'Procéder';
$txt['php_script'] = 'Le fichier d\'extension a été extrait, mais il est accompagné d\'un script PHP qui devrait être exécuté pour que tout fonctionne';
$txt['package_run'] = 'Exécuter';
$txt['package_read'] = 'Lire';
$txt['script_output'] = 'Sortie du script&nbsp;:';
$txt['additional_notes'] = 'Notes additionnelles';
$txt['notes_file'] = 'Fichier d\'instructions/notes additionnelles';
$txt['package_get'] = 'Récupérer des extensions';
$txt['package_servers'] = 'Serveurs d\'extensions';
$txt['package_browse'] = 'Parcourir';
$txt['add_server'] = 'Ajouter un serveur';
$txt['server_name'] = 'Nom du serveur';
$txt['serverurl'] = 'URL';
$txt['download'] = 'Télécharger';
$txt['package_downloaded_successfully'] = 'L\'extension a été téléchargée avec succès';
$txt['package_manager'] = 'Gestionnaire d\'Extensions';
$txt['sql_file'] = 'Le fichier d\'extension a été extrait, il est accompagné d\'un fichier SQL afin de modifier votre base de données. Il serait judicieux de l\'exécuter.';
$txt['sql_queries'] = 'Requêtes SQL';
$txt['no_mods_installed'] = 'Aucune extension installée actuellement';
$txt['browse_installed'] = 'Parcourir les extensions installées';
$txt['delete_list'] = 'Effacer la liste des modifications';
$txt['php_safe_mode'] = 'Votre serveur PHP est réglé en SAFE MODE.  Cette fonction est incompatible avec le SAFE MODE.  Désolé.';
$txt['lets_try_anyway'] = 'Essayons quand même.';

$txt['package_manager_desc'] = 'Depuis le gestionnaire d\'extensions, vous pouvez télécharger et installer des extensions pour votre forum à travers une interface facile à utiliser.';
$txt['download_packages_desc'] = 'Depuis cette rubrique, vous pouvez choisir de télécharger des extensions depuis les serveurs d\'extensions ou de transférer une extension directement sur le forum depuis votre ordinateur.';

$txt['create_package'] = 'Créer une nouvelle extension';
$txt['download_new_package'] = 'Récupérer de nouvelles extensions';
$txt['view_and_remove'] = 'Voir et retirer des extensions installées';

$txt['package_type'] = 'Type d\'extension';
$txt['archiving'] = 'Archivage';

$txt['author_website'] = 'Page web de l\'auteur';
$txt['package_no_description'] = 'Aucune description donnée';
$txt['package_description'] = 'Description';
$txt['file_location'] = 'Localisation du fichier';

$txt['package_upgrade'] = 'Mettre à jour';

$txt['package_action_missing'] = '<strong class="error">Fichier introuvable</strong>';

$txt['package_ftp_necessary'] = 'Informations FTP nécessaires';
$txt['package_ftp_why'] = 'Certains fichiers que le gestionnaire d\'extensions doit modifier ne sont pas accessibles en écriture. Cela doit être changé en vous connectant par FTP pour changer les droits d\'accès aux fichiers ou créer des dossiers. Vos informations de connexion FTP peuvent être temporairement conservées en cache du gestionnaire d\'extensions pour effectuer proprement les opérations. Notez que vous pouvez également faire ceci manuellement en utilisant un client FTP (pour voir une liste des fichiers concernés, veuillez cliquer <a href="#" onclick="%1$s">ici</a>)';
$txt['package_ftp_why_file_list'] = 'Les fichiers suivants ont besoin d\'être rendus inscriptibles pour continuer l\'installation&nbsp;:';
$txt['package_ftp_why_download'] = 'Pour transférer des extensions, le répertoire <tt>/Packages</tt> et les fichiers qu\'elles contiennent doivent être inscriptibles (et ils ne le sont pas actuellement). Le gestionnaire d\'extensions peut utiliser vos informations FTP pour rectifier cela.';
$txt['package_ftp_server'] = 'Serveur FTP';
$txt['package_ftp_port'] = 'Port';
$txt['package_ftp_username'] = 'Identifiant';
$txt['package_ftp_password'] = 'Mot de passe';
$txt['package_ftp_path'] = 'Chemin local vers Wedge';
$txt['package_ftp_test'] = 'Test';
$txt['package_ftp_test_connection'] = 'Test de Connexion';
$txt['package_ftp_test_success'] = 'Connexion FTP établie.';
$txt['package_ftp_test_failed'] = 'La connexion au serveur FTP a échoué.';

$txt['package_file_contents'] = 'Contenu du fichier';

$txt['package_upload_title'] = 'Uploader une extension';
$txt['package_upload_select'] = 'Extension à transférer';
$txt['package_upload'] = 'Transférer';
$txt['package_uploaded_successfully'] = 'L\'extension a été transférée avec succès';

$txt['package_modification_malformed'] = 'Fichier d\'extension erroné ou invalide.';
$txt['package_modification_missing'] = 'Le fichier ne peut pas être trouvé.';
$txt['package_no_zlib'] = 'Désolé, votre configuration de PHP n\'inclut pas le support pour <strong>zlib</strong>.  Sans cela, le gestionnaire d\'extensions ne peut pas fonctionner.  Veuillez contacter votre hébergeur pour plus d\'informations.';

$txt['package_cleanperms_title'] = 'Réinitialiser les droits d\'accès';
$txt['package_cleanperms_desc'] = 'Cette interface vous permet de réinitialiser les droits d\'accès des fichiers et répertoires de l\'installation de votre forum, afin d\'accroître la sécurité et de résoudre des éventuels problèmes liés aux droits d\'accès lors de l\'installation d\'extensions.';
$txt['package_cleanperms_type'] = 'Changer les droits d\'accès à travers le forum de façon à ce que';
$txt['package_cleanperms_standard'] = 'seuls les fichiers standards soient inscriptibles.';
$txt['package_cleanperms_free'] = 'tous les fichiers soient inscriptibles.';
$txt['package_cleanperms_restrictive'] = 'le moins de fichiers soient inscriptibles.';
$txt['package_cleanperms_go'] = 'Procéder au changement des droits sur les fichiers';

$txt['package_download_by_url'] = 'Télécharger une extension par son URL';
$txt['package_download_filename'] = 'Nom du fichier';
$txt['package_download_filename_info'] = 'Valeur facultative. Doit être utilisé lorsque l\'URL ne se finit pas par le nom du fichier. Par exemple&nbsp;: index.php?mod=5';

$txt['package_file_perms_desc'] = 'Vous pouvez utiliser cette section pour vérifier si les dossiers et fichiers critiques de votre forum sont inscriptibles. Notez que seuls sont pris en compte les répertoires et fichiers-clé du forum - utilisez un client FTP pour plus d\'options.';
$txt['package_file_perms_name'] = 'Nom de Fichier/Dossier';
$txt['package_file_perms_status'] = 'État actuel';
$txt['package_file_perms_new_status'] = 'Nouvel État';
$txt['package_file_perms_status_read'] = 'Lecture';
$txt['package_file_perms_status_write'] = 'Écriture';
$txt['package_file_perms_status_execute'] = 'Exécution';
$txt['package_file_perms_status_custom'] = 'Personnalisé';
$txt['package_file_perms_status_no_change'] = 'Pas de changement';
$txt['package_file_perms_writable'] = 'Inscriptible';
$txt['package_file_perms_not_writable'] = 'Non Inscriptible';
$txt['package_file_perms_chmod'] = 'chmod';
$txt['package_file_perms_more_files'] = 'Plus de Fichiers';

$txt['package_file_perms_change'] = 'Changer les Permissions';
$txt['package_file_perms_predefined'] = 'Utiliser un profil de permissions prédéfini';
$txt['package_file_perms_predefined_note'] = 'Notez que cela n\'applique le profil prédéfini que sur les répertoires et fichiers-clé de Wedge.';
$txt['package_file_perms_apply'] = 'Appliquer les permissions individuelles de fichiers choisies ci-dessus.';
$txt['package_file_perms_custom'] = 'Si &quot;Personnalisé&quot; a été sélectionné, utiliser la valeur chmod de';
$txt['package_file_perms_pre_restricted'] = 'Restreint - minimum de fichiers inscriptibles';
$txt['package_file_perms_pre_standard'] = 'Standard - fichiers-clé inscriptibles';
$txt['package_file_perms_pre_free'] = 'Libre - tous les fichiers sont inscriptibles';
$txt['package_file_perms_ftp_details'] = 'Sur la plupart des serveurs, il n\'est possible de changer les permissions des fichiers qu\'en utilisant un compte FTP. Veuillez entrer vos coordonnées FTP ci-dessous';
$txt['package_file_perms_ftp_retain'] = 'Note&nbsp;: Wedge ne stockera le mot de passe que temporairement, et ce uniquement pour faciliter l\'installation d\'extensions.';
$txt['package_file_perms_go'] = 'Appliquer les Changements';

$txt['package_file_perms_applying'] = 'Application des Changements';
$txt['package_file_perms_items_done'] = '%1$d éléments sur %2$d sont terminés';
$txt['package_file_perms_skipping_ftp'] = '<strong>Attention</strong>, impossible de se connecter au serveur FTP, tentative de modification des permissions sans passer par FTP. Cela va <em>probablement</em> échouer - veuillez contrôler les résultats à la fin et réessayez si nécessaire avec les coordonnées FTP correctes.';

$txt['package_file_perms_dirs_done'] = '%1$d répertoires sur %2$d sont terminés';
$txt['package_file_perms_files_done'] = '%1$d fichiers sur %2$d sont terminés dans le répertoire actuel';

$txt['chmod_value_invalid'] = 'Vous avez essayé d\'entrer une valeur de chmod invalide. Le chmod doit être entre les valeurs 0444 et 0777';

$txt['package_restore_permissions'] = 'Restaurer les Permissions de Fichier';
$txt['package_restore_permissions_desc'] = 'Les permissions des fichiers suivants ont été changées par Wedge pour installer le(s) extension(s) sélectionné(s). Vous pouvez revenir à l\'état original de ces fichiers en cliquant sur &quot;Restaurer&quot; ci-dessous.';
$txt['package_restore_permissions_restore'] = 'Restaurer';
$txt['package_restore_permissions_filename'] = 'Nom de Fichier';
$txt['package_restore_permissions_orig_status'] = 'État d\'origine';
$txt['package_restore_permissions_cur_status'] = 'État actuel';
$txt['package_restore_permissions_result'] = 'Résultat';
$txt['package_restore_permissions_pre_change'] = '%1$s (%3$s)';
$txt['package_restore_permissions_post_change'] = '%2$s (%3$s - précédemment %2$s)';
$txt['package_restore_permissions_action_skipped'] = '<em>Ignoré</em>';
$txt['package_restore_permissions_action_success'] = '<span style="color: green">Succès</span>';
$txt['package_restore_permissions_action_failure'] = '<span class="alert">Échec</span>';
$txt['package_restore_permissions_action_done'] = 'Wedge a tenté de restaurer les fichiers sélectionnés à leurs permissions d\'origine, les résultats peuvent être vus ci-dessous. Si un changement a échoué, ou pour plus de détail sur les permissions de fichier, veuillez regarder la section <a href="%1$s">Permissions de Fichier</a>.';

$txt['package_file_perms_warning'] = 'Attention';
$txt['package_file_perms_warning_desc'] = '
	<li>Faites attention lorsque vous changez les permissions de fichier à partir de cette section - des permissions incorrectes peuvent affecter défavorablement le fonctionnement de votre forum !</li>
	<li>Sur certaines configurations serveur, appliquer de mauvaises permissions peut empêcher Wedge de fonctionner.</li>
	<li>Certains répertoires comme <em>attachments</em> ont besoin d\'être inscriptibles pour pouvoir utiliser leur fonctionnalité associée (ici, les fichiers joints).</li>
	<li>Cette fonctionnalité s\'applique surtout pour des serveurs non basés sur Windows - elle ne marchera pas comme voulu sur Windows en raison de modes de permission différents.</li>
	<li>Avant de procéder, soyez sûr d\'avoir un client FTP d\'installé, au cas que vous ayez fait une erreur et que vous ayez besoin de passser par FTP au serveur pour y remédier.</li>';

$txt['package_confirm_view_package_content'] = 'Êtes-vous sûr de vouloir visionner le contenu de l\'extension située à cet endroit&nbsp;?<br><br>%1$s';
$txt['package_confirm_proceed'] = 'Oui';
$txt['package_confirm_go_back'] = 'Retour';
