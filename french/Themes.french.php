<?php
// Version: 2.0; Themes

$txt['themeadmin_explain'] = 'Les visuels <em>(parfois appelés \'skins\', \'styles\' ou \'habillages\')</em> sont des présentations graphiques pour votre forum. Ces paramètres affectent la sélection des visuels et quel visuel les invités et les autres membres utilisent.';

$txt['theme_allow'] = 'Autoriser les membres à choisir leur propre visuel&#8239;?';
$txt['theme_guests'] = 'Visuel par défaut pour les invités&#8239;';
$txt['theme_guests_mobile'] = 'Visuel par défaut pour les invités (mode mobile)&#8239;';
$txt['theme_select'] = 'choisir...';
$txt['theme_reset'] = 'Régler tout le monde sur&#8239;';
$txt['theme_nochange'] = 'Aucun changement';
$txt['theme_forum_default'] = 'Visuel par défaut';

$txt['theme_remove_confirm'] = 'Êtes-vous sûr de vouloir supprimer ce thème définitivement ?';

$txt['theme_install'] = 'Installer un Nouveau Thème';
$txt['theme_install_file'] = 'Depuis une archive sur votre ordinateur&#8239;';
$txt['theme_install_dir'] = 'Depuis un dossier sur le serveur&#8239;';
$txt['theme_install_error'] = 'Ce dossier de thème n\'existe pas, ou ne contient pas de thème&#8239;!';
$txt['theme_install_write_error'] = 'Le dossier des thèmes ne doit pas être en lecture seule pour continuer&#8239;!';
$txt['theme_install_go'] = 'Installer&#8239;!';
$txt['theme_install_new'] = 'Ou créer une copie du thème par défaut, nommée&#8239;';
$txt['theme_install_new_confirm'] = 'Êtes-vous sûr de vouloir installer ce nouveau thème ?';
$txt['theme_install_writable'] = 'Attention - vous ne pouvez pas créer ou installer un nouveau thème car votre dossier de thèmes est en lecture seule&#8239;!';
$txt['theme_installed'] = 'Installé avec succès';
$txt['theme_installed_message'] = 'a été installé avec succès.';

$txt['theme_latest'] = 'Les Visuels - les Derniers et les Plus Réussis';
$txt['theme_latest_fetch'] = 'Recherche des derniers visuels depuis wedge.org...';

$txt['theme_set'] = 'Utiliser le visuel par défaut';
$txt['skin_users'] = array(
	0 => 'Personne n\'utilise ce visuel.',
	1 => '1 personne utilise ce visuel.',
	'n' => '%s personnes utilisent ce visuel.',
);
$txt['current_theme'] = 'Visuel actuel';

$txt['theme_skins'] = 'Visuels';
$txt['theme_skin_preview'] = 'Prévisualiser ce visuel';
$txt['theme_skin_set'] = 'Utiliser ce visuel';

$txt['theme_edit'] = 'Modifier un Visuel';
$txt['theme_edit_style'] = 'Modifier les feuilles de style (couleurs, polices, etc.)';
$txt['theme_edit_index'] = 'Modifier index.template.php (le modèle principal)';
$txt['theme_edit_no_save'] = 'Ce fichier ne peut pas être sauveradé parce qu\'il n\'est pas inscriptible&#8239;! Veuillez vous assurer que le fichier suivant est en chmod 777 ou possède les permissions suffisantes.';
$txt['theme_edit_save'] = 'Sauvegarder les changements';

$txt['theme_global_description'] = 'Ceci est le visuel par défaut, ce qui signifie que votre visuel changera suivant les réglages de l\'administrateur et/ou la section que vous consultez.';

$txt['themeadmin_title'] = 'Options de visuels et disposition';
$txt['themeadmin_description'] = 'Ici vous pouvez modifier les paramètres de vos visuels, mettre à jour la liste des visuels, réinitialiser les options des membres et autres réglages du genre.';
$txt['themeadmin_admin_desc'] = 'Cette page vous permet de changer le visuel par défaut de votre forum, réinitialiser les membres pour utiliser un certain visuel et choisir d\'autres réglages relatifs à la sélection des visuels. Vous pouvez aussi installer des nouveaux visuels depuis cette interface.<br><br>N\'oubliez pas de jeter un oeil aux réglages du visuel pour des personnalisations de disposition.';
$txt['themeadmin_list_desc'] = 'Ici vous pouvez voir la liste des visuels actuellement installés, changer leur chemin et réglages, de même que les désinstaller.';
$txt['themeadmin_edit_desc'] = 'Modifiez la feuille de style et le code-source de vos visuels installés. Veuillez consulter la documentation pour plus d\'informations.';

$txt['themeadmin_list_heading'] = 'Aperçu des paramètres du visuel';
$txt['themeadmin_list_tip'] = 'Rappelez-vous, les paramètres de disposition peuvent différer d\'un visuel à l\'autre. Cliquez sur le nom du visuel ci-dessous pour paramétrer ses options, changer son répertoire ou son URL, ou trouvez d\'autres options.';
$txt['themeadmin_list_theme_dir'] = 'Répertoire des visuels (skins)';
$txt['themeadmin_list_invalid'] = '(attention, ce chemin est incorrect&#8239;!)';
$txt['themeadmin_list_theme_url'] = 'URL vers le répertoire ci-dessus';
$txt['themeadmin_list_reset'] = 'Réinitialiser l\'URL des visuels et leur répertoire';
$txt['themeadmin_list_reset_dir'] = 'Chemin absolu vers le répertoire des visuels';
$txt['themeadmin_list_reset_url'] = 'URL vers le répertoire de base commun';
$txt['themeadmin_list_reset_go'] = 'Tenter de réinitialiser tous les visuels';

$txt['themeadmin_edit_browse'] = 'Accéder à la liste des fichiers du visuel actuel.';
$txt['themeadmin_edit_style'] = 'Accéder aux feuilles de style du visuel actuel.';
$txt['themeadmin_edit_copy_template'] = 'Copier un modèle (template) depuis le visuel sur lequel celui-ci est basé.';
$txt['themeadmin_edit_exists'] = 'existe déjà';
$txt['themeadmin_edit_do_copy'] = 'copier';
$txt['themeadmin_edit_copy_warning'] = 'Quand Wedge a besoin d\'un modèle ou d\'un fichier de langue qui n\'existe pas dans le thème actuel, il regarde dans le dossier du thème sur lequel celui-ci est basé, ou dans le thème par défaut.<br>À moins que vous ne deviez modifier un modèle, il est plus prudent de ne pas le copier.';
$txt['themeadmin_edit_copy_confirm'] = 'Voulez-vous vraiment copier ce modèle&#8239;?';
$txt['themeadmin_edit_overwrite_confirm'] = 'Voulez-vous vraiment copier ce modèle par-dessus celui qui existe déjà&#8239;?<br>Ceci va ÉCRASER tous les changements que vous avez faits&#8239;!';
$txt['themeadmin_edit_no_copy'] = '<em>(ne peut copier)</em>';
$txt['themeadmin_edit_filename'] = 'Nom de fichier';
$txt['themeadmin_edit_modified'] = 'Dernière modification';
$txt['themeadmin_edit_size'] = 'Taille';
$txt['themeadmin_edit_bytes'] = 'o';
$txt['themeadmin_edit_kilobytes'] = 'Ko';
$txt['themeadmin_edit_error'] = 'Le fichier que vous tentiez de sauvegarder a généré l\'erreur suivante&#8239;:';
$txt['themeadmin_edit_on_line'] = 'Commence à la ligne';
$txt['themeadmin_edit_preview'] = 'Prévisualiser';
$txt['themeadmin_selectable'] = 'Visuels sélectionnables par l\'utilisateur&#8239;';
$txt['themeadmin_themelist_link'] = 'Montrer la liste des visuels';
