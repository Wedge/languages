<?php
// Version: 2.0; ManagePosts

// Post Settings
$txt['removeNestedQuotes'] = 'Supprimer les citations imbriquées en citant un message';
$txt['enableEmbeddedFlash'] = 'Autoriser l\'intégration d\'animations Flash dans les messages';
$txt['enableEmbeddedFlash_warning'] = 'Peut constituer un risque de sécurité&nbsp;!';
$txt['additional_options_collapsable'] = 'Activer les Options Supplémentaires (à l\'écriture des messages)';
$txt['disable_wysiwyg'] = 'Désactiver l\'éditeur WYSIWYG';

$txt['max_messageLength'] = 'Longueur maximale des messages';
$txt['max_messageLength_zero'] = '0 pour aucun max.';
$txt['topicSummaryPosts'] = 'Nombre de messages à afficher dans le résumé de la discussion';

$txt['max_image_width'] = 'Largeur max. des images postées (0 pour désactiver)';
$txt['max_image_height'] = 'Hauteur max. des images postées (0 pour désactiver)';

$txt['spamWaitTime'] = 'Temps d\'attente requis entre deux envois en provenance d\'une même adresse IP';
$txt['edit_wait_time'] = 'Période de révision';
$txt['edit_disable_time'] = 'Temps maximum après l\'envoi pour modifier un message';
$txt['edit_disable_time_zero'] = '0 pour désactiver';
$txt['allow_non_mod_edit'] = 'Permettre aux non-modérateurs de modifier des modifications de modérateurs&nbsp;?';

// Topic Settings
$txt['enableParticipation'] = 'Activer l\'icône de participation';

$txt['correctExclamations'] = 'Corriger le sujet s\'il a trop de points d\'exclamation';
$txt['correctShouting'] = 'Limiter le nombre de majuscules dans le sujet à ce pourcentage (x%)';

$txt['oldTopicDays'] = 'Délai avant qu\'un sujet ne soit mentionné comme ancien lors de l\'écriture d\'une réponse';
$txt['oldTopicDays_zero'] = '0 pour désactiver';
$txt['defaultMaxTopics'] = 'Nombre de sujets par page lors du visionnage d\'un site';
$txt['defaultMaxMessages'] = 'Nombre de messages à afficher lors du visionnage d\'un sujet';

$txt['enableAllMessages'] = 'Taille maximale d\'un sujet pour afficher &quot;Tous&quot; les messages';
$txt['enableAllMessages_zero'] = '0 pour ne jamais afficher &quot;Tous&quot;';
$txt['disableCustomPerPage'] = 'Empêcher les utilisateurs de changer le nombre de sujets/messages par page';
$txt['enablePreviousNext'] = 'Activer les liens &quot;Sujet précédent/suivant&quot;';

$txt['ignoreMoveVsNew'] = 'Par défaut, permettre n\'importe quelle section de destination pour déplacer les sujets';

// Bulletin Board Code
$txt['enableBBC'] = 'Activer les BBCodes';
$txt['enablePostHTML'] = 'Permettre l\'utilisation de balises HTML <em>basiques</em> dans les messages';
$txt['editorFonts'] = 'Polices à proposer dans l\'éditeur';
$txt['editorFonts_subtext'] = 'Vous pouvez indiquer n\'importe quelle fonte ici, elle sera listée dans la boîte déroulante "Police du texte" de l\'éditeur de messages. Assurez-vous que la fonte est installée sur l\'ordinateur de vos utilisateurs.';
$txt['autoLinkUrls'] = 'Reconnaissance automatique des URLs';

$txt['disabledBBC'] = 'Balises BBCode autorisées';
$txt['bbcTagsToUse'] = 'Balises BBCodes activées';
$txt['bbcTagsToUse_select'] = 'Sélectionnez toutes les balises pouvant être utilisées';
$txt['bbcTagsToUse_select_all'] = 'Sélectionner toutes les balises';

// Censored Words
$txt['admin_censored_where'] = 'Écrivez le mot à censurer à gauche, et ce par quoi il est remplacé à droite.';
$txt['censor_whole_words'] = 'Vérifier les mots entiers seulement';
$txt['censor_case'] = 'Ignorer la casse lors de la censure';
$txt['allow_no_censored'] = 'Autoriser les utilisateurs à désactiver la censure des mots';

$txt['censor_test'] = 'Tester les mots censurés';
$txt['censor_test_save'] = 'Test';

// Draft Settings
$txt['masterSavePostDrafts'] = 'Activer les brouillons';
$txt['draftsave_subnote'] = 'Veuillez noter que l\'utilisateur aura en plus besoin d\'avoir la permission correspondante activée pour son groupe.';
$txt['masterAutoSavePostDrafts'] = 'Activer la sauvegarde automatique des brouillons';
$txt['draftautosave_subnote'] = 'Cela ne remplace pas l\'option ci-dessus mais étend simplement son champ. De plus, l\'utilisateur doit avoir la permission associée.';
$txt['masterAutoSaveDraftsDelay'] = 'À quelle fréquence sauvegarder les brouillons automatiquement&nbsp;?';
$txt['pruneSaveDrafts'] = 'Purger les brouillons après combien de jours&nbsp;?';

// Merging
$txt['merge_post_header'] = 'Fusion des doublons';
$txt['merge_post_auto'] = 'Fusionner les doublons automatiquement<dfn>Dans un sujet, deux messages successifs d\'un même auteur sont considérés comme des doublons.</dfn>';
$txt['merge_post_auto_time'] = 'Temps maximum entre deux messages pour qu\'ils soient fusionnés automatiquement.';
$txt['merge_post_auto_time_subtext'] = '(en secondes&nbsp;; mettez 0 pour toujours fusionner)';

$txt['merge_post_admin_double_post'] = 'Fusionner les doublons des admins';

$txt['merge_post_no_time'] = 'Ne pas indiquer l\'ancienne date avant le séparateur';
$txt['merge_post_no_sep'] = 'Ne montrer ni le séparateur ni l\'ancienne date';
$txt['merge_post_separator'] = 'Séparateur entre les messages fusionnés (activez l\'option ci-dessus)';
$txt['merge_post_separator_subtext'] = 'Vous pouvez utiliser du code BBC. Pour la date de l\'ancien post, utilisez la variable <strong>$date</strong> dans le champ texte.<br>Exemple : [size=1]$date[/size][hr][br] (version par défaut)';
$txt['merge_post_custom_separator'] = 'Utiliser son propre séparateur pour distinguer les messages fusionnés.';
$txt['merge_post_custom_separator_subtext'] = 'Les options au-dessus seront désactivées.';

$txt['merge_post_ignore_length'] = 'Ignorer la longueur maximale des messages';
