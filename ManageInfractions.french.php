<?php
// Version: 2.0; ManageInfractions

$txt['infractions_desc'] = 'D\'ici, vous pouvez gérer les infractions que les modérateurs et administrateurs peuvent donner.';
$txt['infractionlevels_desc'] = 'D\'ici, vous pouvez gérer les niveaux d\'infraction, ainsi que leurs punitions associées.';
$txt['infractionsettings_desc'] = 'D\'ici, vous pouvez changer la façon dont le système d\'infractions se comporte.';

$txt['revoke_own_issued'] = 'L\'équipe peut annuler les infractions qu\'elle a envoyées';
$txt['revoke_any_issued'] = 'Groupes de membres pouvant annuler n\'importe quelle infraction';
$txt['no_warn_groups'] = 'Groupes de membres immunisés contre les infractions';

$txt['setting_warning_show'] = 'Utilisateurs pouvant voir le statut d\'avertissement';
$txt['setting_warning_show_subtext'] = 'Détermine qui peut voir le niveau d\'avertissement des utilisateurs du forum.';
$txt['setting_warning_show_none'] = 'Personne';
$txt['setting_warning_show_mods'] = 'Modérateurs';
$txt['setting_warning_show_user'] = 'Modérateurs et utilisateurs avertis';
$txt['setting_warning_show_all'] = 'Tout le monde';

$txt['infractionlevels_extra'] = 'Voici les différentes sanctions qui peuvent être appliquées aux comptes utilisateurs. Le cumul d\'infractions d\'un membre est matérialisé par un nombre de points. Vous pouvez mettre en place des pénalités automatiques basées sur le nombre de points (d\'infractions, donc). L\'idée est qu\'une infraction donnée peut amener à une sanction donnée, mais que les utilisateurs accumulant les petites sanctions peuvent s\'en voir attribuer de plus grosses.';
$txt['infraction_no_avatar'] = 'L\'avatar de l\'utilisateur est caché';
$txt['infraction_no_sig'] = 'La signature de l\'utilisateur est caché';
$txt['infraction_disemvowel'] = 'Les voyelles des messages de l\'utilisateurs sont cachées';
$txt['infraction_disemvowel_help'] = 'Les messages de l\'utilisateur sont visibles, mais sans leurs voyelles. De fait, ils sont encore lisibles, mais demandent un gros effort pour ce faire, et la plupart des gens ignoreront simplement leurs messages.';
$txt['infraction_moderate'] = 'Les messages de l\'utilisateur nécessitent l\'approbation d\'un modérateur';
$txt['infraction_post_ban'] = 'L\'utilisateur n\'a plus le droit de poster';
$txt['infraction_pm_ban'] = 'L\'utilisateur n\'a plus le droit d\'envoyer des MP';
$txt['infraction_soft_ban'] = 'L\'utilisateur est banni (léger)';
$txt['infraction_hard_ban'] = 'L\'utilisateur est caché (complet)';

$txt['enact_infraction'] = 'Sanction à appliquer&#8239;:';
$txt['points_infraction'] = 'Quand le membre a accumulé&#8239;:';

$txt['enabled_infraction'] = 'Activé&#8239;?';

$txt['preset_infractions'] = 'Sanctions prédéfinies';
$txt['preset_infractions_desc'] = 'Les sanctions prédéfinies sont celles définies par l\'administrateur pour faciliter leur application, un peu comme des modèles. Vous pouvez décider d\'autoriser certains groupes de modérateurs à n\'appliquer que des sanctions issues de cette liste, ou vous pouvez leur donner plus de pouvoir ci-après.';
$txt['adhoc_infractions'] = 'Infractions personnalisées';
$txt['adhoc_infractions_desc'] = 'En dehors des sanctions prédéfinies, vos modérateurs auront peut-être parfois besoin de faire preuve d\'originalité pour un cas particulier. Vous pouvez configurer ces options ici.';

$txt['add_infraction'] = 'Ajouter une sanction';
$txt['delete_infraction_confirm'] = 'Êtes-vous sûr de vouloir supprimer cette sanction&#8239;?';

$txt['infraction_name'] = 'Nom de l\'infraction';
$txt['infraction_points'] = 'Points';
$txt['infraction_duration'] = 'Durée';
$txt['infraction_sanctions'] = 'Sanctions';
$txt['infraction_issuers'] = 'Applicables par';
$txt['infraction_no_punishments'] = 'Personne';
$txt['no_infractions'] = 'Aucun type d\'infraction n\'a été mis en place.';

$txt['infraction_d'] = array(
	0 => '0 jour',
	1 => '1 jour',
	'n' => '%1$s jours',
);
$txt['infraction_w'] = array(
	0 => '0 semaine',
	1 => '1 semaine',
	'n' => '%1$s semaines',
);
$txt['infraction_m'] = array(
	'n' => '%1$s mois',
);
$txt['infraction_y'] = array(
	1 => '0 an',
	1 => '1 an',
	'n' => '%1$s ans',
);
$txt['infraction_i'] = 'Pour toujours';

$txt['infraction_duration_types'] = array(
	'd' => 'Jour(s)',
	'w' => 'Semaine(s)',
	'm' => 'Mois',
	'y' => 'An(s)',
	'i' => 'Pour toujours',
);

$txt['can_issue_adhoc'] = 'Peut émettre des infractions personnalisées';
$txt['max_points'] = 'Maximum de points par infraction&#8239;:';
$txt['max_infractions_day'] = 'Nombre maximal de sanctions sur un membre par jour&#8239;:';
$txt['punishments_issuable'] = 'Sanctions applicables&#8239;:';

$txt['add_preset_infraction'] = 'Ajouter une sanction prédéfinie';
$txt['edit_preset_infraction'] = 'Modifier une sanction prédéfinie';
$txt['infraction_name_desc'] = 'Le nom interne de la sanction, pour référence.';
$txt['for_the_duration'] = 'Pendant la durée de la sanction';
$txt['issued_by_adhoc'] = 'N\'oubliez pas&#8239;: les groupes qui peuvent émettre une sanction personnalisée pourront modifier toute la teneur de la sanction. Les groupes qui ne peuvent pas le faire, n\'auront accès qu\'aux sanctions prédéfinies établies ici.';
$txt['notification_text'] = 'Texte de notification à utiliser';
$txt['notification_text_desc'] = 'Si un membre de l\'équipe ne peut pas émettre une sanction personnalisée, les notifications de ses sanctions utiliseront ce texte.';
$txt['notification_use_none'] = 'Ne pas envoyer de message';
$txt['notification_use_custom'] = 'Personnaliser le texte (ci-dessous)';
$txt['notification_subject'] = 'Sujet&#8239;:';
$txt['notification_body'] = 'Message&#8239;:';
$txt['notification_body_note'] = '{PUNISHMENTS} sera automatiquement remplacé par une description des points et sanctions attribués à un utilisateur pour cette infraction.';
$txt['notification_body_message'] = '{MESSAGE} sera automatiquement remplacé par un lien vers le message incriminé.';

$txt['tpl_infraction_bad_avatar'] = array(
	'desc' => 'Avatar inapproprié',
	'subject' => 'Votre avatar est en infraction',
	'body' => 'Vous avez reçu une sanction liée à un avatar inapproprié utilisé sur ce forum.

Il peut être indésirable pour les raisons suivantes :
* il contient des images clignotantes ou à l\'animation trop rapide
* il contient du texte inapproprié
* il contient une image inappropriée

{PUNISHMENTS}

Veuillez noter que tout futur incident pourra se cumuler à cette sanction, et limiter votre interaction avec le forum.',
);
$txt['tpl_infraction_bad_sig'] = array(
	'desc' => 'Signature inappropriée',
	'subject' => 'Votre signature est en infraction',
	'body' => 'Vous avez reçu une sanction liée à une signature inappropriée utilisé sur ce forum.

Elle peut être indésirable pour les raisons suivantes :
* elle est trop grande et peut déconcentrer les autres utilisateurs
* elle contient trop de liens vers des sites externes
* son contenu est considéré comme inapproprié sur ce forum

{PUNISHMENTS}

Veuillez noter que tout futur incident pourra se cumuler à cette sanction, et limiter votre interaction avec le forum.',
);
$txt['tpl_infraction_bad_language'] = array(
	'desc' => 'Un peu de tenue !',
	'subject' => 'Vous avez reçu une sanction pour indélicatesse',
	'body' => 'Vous avez reçu une sanction pour indélicatesse sur le forum.

Nous n\'autorisons pas l\'usage de grossièretés, ni les comportements désagréables envers l\'équipe ou les autres membres du forum.

{PUNISHMENTS}

Veuillez noter que tout futur incident pourra se cumuler à cette sanction, et limiter votre interaction avec le forum.',
);
$txt['tpl_infraction_spam'] = array(
	'desc' => 'Flagrant déli de spam',
	'subject' => 'Vous avez reçu une sanction pour spamming',
	'body' => 'Vous avez reçu une sanction pour avoir spammé le forum.

Les publicités intrusives, ou spam, sont un souci constant pour nous, et ne sont pas autorisées sur le forum.
Votre comportement, similaire à celui d\'un spammeur, est donc sanctionné.

{PUNISHMENTS}

Veuillez noter que tout futur incident pourra se cumuler à cette sanction, et limiter votre interaction avec le forum.',
);

$txt['no_punishment'] = 'Aucune sanction effective n\'a été prise à votre encontre. Toutefois, l\'infraction a été enregistrée, et pourra être retenue contre vous en cas de récidive.';
$txt['received_punishments'] = array(
	1 => 'Pour cette raison, vous avez reçu la sanction suivante :',
	'n' => 'Pour cette raison, vous avez reçu les sanctions suivantes :',
);
$txt['punishments_will_expire'] = array(
	1 => 'Cette sanction restera appliquée à votre compte jusqu\'à cette date : {EXPIRY}.',
	'n' => 'Ces sanctions resteront appliquées à votre compte jusqu\'à cette date : {EXPIRY}.',
);
$txt['punishments_no_expire'] = array(
	1 => 'Cette sanction n\'a pas de date d\'expiration prévue.',
	'n' => 'Ces sanctions n\'ont pas de date d\'expiration prévues.',
);

$txt['pun_infraction_no_avatar'] = 'Votre avatar sera caché';
$txt['pun_infraction_no_sig'] = 'Votre signature sera cachée';
$txt['pun_infraction_disemvowel'] = 'Les voyelles dans vos messages seront cachées';
$txt['pun_infraction_moderate'] = 'Vos messages requerront l\'approbation d\'un modérateur avant publication';
$txt['pun_infraction_post_ban'] = 'Vous n\'avez plus l\'autorisation d\'envoyer de nouveaux messages';
$txt['pun_infraction_pm_ban'] = 'Vous n\'avez plus l\'autorisation d\'envoyer des messages personnels';
$txt['pun_infraction_soft_ban'] = 'Certaines fonctionnalités du forum seront désactivées pour vous';
$txt['pun_infraction_hard_ban'] = 'Vous êtes banni(e) du forum';
$txt['pun_points'] = array(
	1 => 'Vous avez reçu un point d\'infraction, votre cumul est de {POINTS} points. Cela pourrait amener d\'autres sanctions à l\'avenir.',
	'n' => 'Vous avez reçu %1$s points d\'infraction, votre cumul est de {POINTS} points. Cela pourrait amener d\'autres sanctions à l\'avenir.',
);
$txt['pun_because_message'] = 'Vous avez reçu une sanction liée à ce message : {LINK}';

$txt['error_no_name_given'] = 'Toutes les sanctions doivent avoir un nom pour référence ultérieure.';
$txt['error_no_text'] = 'Vous avez choisir d\'ajouter une notification d\'avertissement personnalisée, mais vous n\'avez pas rempli ce champ.';
$txt['error_invalid_duration'] = 'Vous n\'avez pas spécifié la durée désirée de la sanction.';
