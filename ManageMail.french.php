<?php
// Version: 2.0; ManageMail

$txt['mailqueue_desc'] = 'D\'ici, vous pouvez configurer vos paramètres E-mail, mais aussi consulter et gérer la File d\'attente E-mail si celle-ci est activée.';
$txt['mailqueue_templates_desc'] = 'D\'ici, vous pouvez voir et modifier les modèles utilisés par Wedge pour envoyer des e-mails à ses utilisateurs.';

$txt['mail_type'] = 'Type d\'E-mail';
$txt['mail_type_default'] = '(Comme pour PHP)';
$txt['smtp_host'] = 'Serveur SMTP';
$txt['smtp_port'] = 'Port SMTP';
$txt['smtp_username'] = 'Nom d\'utilisateur SMTP';
$txt['smtp_password'] = 'Mot de passe SMTP';

$txt['webmaster_email'] = 'Adresse e-mail du webmestre';
$txt['mail_from'] = 'Adresse e-mail du champ Expéditeur à l\'envoi';

$txt['mail_queue'] = 'Activer la File d\'attente E-mail';
$txt['mail_limit'] = 'Nombre maximal d\'e-mails à envoyer par minute';
$txt['mail_limit_desc'] = '(Mettez 0 pour désactiver)';
$txt['mail_quantity'] = 'Nombre maximal d\'e-mails à envoyer par page chargée';

$txt['mailqueue_stats'] = 'Statistiques de la File d\'attente E-mail';
$txt['mailqueue_oldest'] = 'E-mail le plus ancien';
$txt['mailqueue_oldest_not_available'] = 'N/A';
$txt['mailqueue_size'] = 'Longueur de la File d\'attente';

$txt['mailqueue_age'] = 'Âge';
$txt['mailqueue_priority'] = 'Priorité';
$txt['mailqueue_recipient'] = 'Destinataire';
$txt['mailqueue_subject'] = 'Sujet';
$txt['mailqueue_clear_list'] = 'Envoyer la File d\'attente maintenant';
$txt['mailqueue_no_items'] = 'La File d\'attente est actuellement vide';
$txt['mailqueue_clear_list_warning'] = 'Êtes-vous sûr de vouloir envoyer la file d\'attente entière maintenant, en ignorant les limites établies ?';

$txt['mq_day'] = '%1.1f jour';
$txt['mq_days'] = '%1.1f jours';
$txt['mq_hour'] = '%1.1f heure';
$txt['mq_hours'] = '%1.1f heures';
$txt['mq_minute'] = '%1$d minute';
$txt['mq_minutes'] = '%1$d minutes';
$txt['mq_second'] = '%1$d seconde';
$txt['mq_seconds'] = '%1$d secondes';

$txt['mq_mpriority_5'] = 'Très basse';
$txt['mq_mpriority_4'] = 'Basse';
$txt['mq_mpriority_3'] = 'Normale';
$txt['mq_mpriority_2'] = 'Haute';
$txt['mq_mpriority_1'] = 'Très haute';

$txt['templates_register'] = 'E-mails d\'enregistrement';
$txt['templates_register_admin'] = 'E-mails d\'enregistrement pour les admins';
$txt['templates_account_changes'] = 'Changements sur le compte';
$txt['templates_notify_content'] = 'Notifications de contenu';
$txt['templates_notify_moderation'] = 'Notifications d\'actions de modération';
$txt['templates_group_membership'] = 'Appartenance à un groupe';
$txt['templates_user_email'] = 'Fonctions e-mail utilisateur';
$txt['templates_paid_subs'] = 'Abonnements payants';
$txt['templates_moderator'] = 'E-mails modérateurs';

$txt['template_edit_template'] = 'Modifier le modèle';
$txt['template_replacements'] = 'Remplacements';
$txt['template_replacement_desc'] = 'Les e-mails ayant un contenu variable suivant la situation, des paramètres de substitution peuvent être utilisés pour vous simplifier la vie. Ceux disponibles pour cet e-mail sont montrés ci-dessous.';

$txt['template_email_desc'] = 'Description&#8239;:';
$txt['template_email_subject'] = 'Sujet du mail&#8239;:';
$txt['template_email_body'] = 'Contenu du mail&#8239;:';

// Don't translate the (%1$s) bits, they're used as placeholders. These are the standard ones.
$txt['template_repl_forumname'] = 'nom du forum (%1$s)';
$txt['template_repl_scripturl'] = 'lien vers la page d\'accueil du site (%1$s)';
$txt['template_repl_themeurl'] = 'URL du thème actuel (%1$s)';
$txt['template_repl_imagesurl'] = 'URL du dossier d\'images du thème actuel (%1$s)';
$txt['template_repl_default_themeurl'] = 'URL du thème par défaut du site (%1$s)';
$txt['template_repl_regards'] = 'salutation de base (%1$s)';
// And these are the not so standard ones.
$txt['template_repl_username'] = 'nom d\'utilisateur (identifiant de connexion) du destinataire du mail';
$txt['template_repl_realname'] = 'nom d\'utilisateur (affiché à l\'écran) du destinataire du mail';
$txt['template_repl_password'] = 'mot de passe du destinataire du mail (généralement au moment de l\'inscription)';
$txt['template_repl_forgotpasswordlink'] = 'lien vers la page d\'oubli du mot de passe';
$txt['template_repl_idmember'] = 'numéro de membre (ID) du destinataire du mail';
$txt['template_repl_emailsubject'] = 'sujet du mail que l\'utilisateur veut envoyer';
$txt['template_repl_emailbody'] = 'contenu du mail que l\'utilisateur veut envoyer';
$txt['template_repl_sendername'] = 'nom d\'utilisateur (affiché) de l\'expéditeur du mail';
$txt['template_repl_recpname'] = 'nom d\'utilisateur (affiché) du destinataire du mail';
$txt['template_repl_appyname'] = 'nom du membre demandant à rejoindre un groupe';
$txt['template_repl_groupname'] = 'nom du groupe sur lequel une demande a été faite';
$txt['template_repl_reason'] = 'raison donnée pour rejoindre le groupe';
$txt['template_repl_modlink'] = 'lien vers la section correspondante du centre de modération';
$txt['template_repl_sendernamemanual'] = 'nom de l\'expéditeur, modifiable par l\'utilisateur';
$txt['template_repl_recpnamemanual'] = 'nom du destinataire du mail, peut être inséré par l\'expéditeur';
$txt['template_repl_topicsubject'] = 'sujet de discussion mentionné dans le mail';
$txt['template_repl_topiclink'] = 'lien vers le sujet de discussion mentionné dans le mail';
$txt['template_repl_comment'] = 'commentaire ajouté par l\'expéditeur';
$txt['template_repl_refusereason'] = 'commentaire ajouté par le modérateur pour expliquer les raisons du refus';
$txt['template_repl_remindlink'] = 'lien vers la page de remise à zéro du mot de passe, incluant le code de remise à zéro';
$txt['template_repl_ip'] = 'adresse IP de l\'utilisateur ayant fait envoyer le mail';
$txt['template_repl_activationlink'] = 'lien d\'activation du compte, incluant le code d\'activation';
$txt['template_repl_activationcode'] = 'code requis pour activer un compte, en cas de problèmes techniques';
$txt['template_repl_activationlinkwithoutcode'] = 'lien d\'activation du compte, sans le code d\'activation, à utiliser conjointement au code';
$txt['template_repl_subscrname'] = 'nom de l\'abonnement';
$txt['template_repl_subname'] = 'nom de l\'utilisateur dont l\'abonnement a déclenché l\'envoi du mail';
$txt['template_repl_subuser'] = 'nom affiché de l\'utilisateur dont l\'abonnement a déclenché l\'envoi du mail';
$txt['template_repl_subemail'] = 'adresse e-mail de l\'utilisateur';
$txt['template_repl_price'] = 'prix de l\'abonnement';
$txt['template_repl_profilelink'] = 'lien vers le profil de l\'utilisateur';
$txt['template_repl_profilelinksubs'] = 'lien vers la page de gestion des abonnements du profil de l\'utilisateur';
$txt['template_repl_date'] = 'date à laquelle l\'abonnement a été modifié';
$txt['template_repl_end_date'] = 'date d\'expiration de l\'abonnement';
$txt['template_repl_suberror'] = 'rapport d\'erreurs du système de paiement';
$txt['template_repl_refundname'] = 'nom (identifiant) de l\'utilisateur ayant été remboursé de son abonnement';
$txt['template_repl_refunduser'] = 'nom (affiché) de l\'utilisateur ayant été remboursé de son abonnement';
$txt['template_repl_postername'] = 'nom (affiché) de l\'utilisateur ayant posté le message en question';
$txt['template_repl_unsubscribelink'] = 'lien pour se désinscrire des notifications';
$txt['template_repl_message'] = 'contenu du message';
$txt['template_repl_reportername'] = 'nom (affiché) de l\'utilisateur ayant signalé le message';
$txt['template_repl_reportlink'] = 'lien vers le centre de modération où le rapport complet peut être lu';
$txt['template_repl_approvallink'] = 'lien vers la page d\'approbation des membres';
$txt['template_repl_coppalink'] = 'lien vers le formulaire de consentement parental (COPPA) que l\'utilisateur doit télécharger et compléter';
$txt['template_repl_subject'] = 'sujet du message';
$txt['template_repl_replylink'] = 'lien vers la page de réponse au message personnel';
