/*ajout utilisateur*/
INSERT INTO `utilisateur`(`util_nom`, `util_prenom`, `util_email`, `util_mdp`, `util_pseudo`, `util_avatar`, `util_notif`) 
VALUES ('value-1','value-2','value-3','value-4','value-5','value-6','value-7','value-8');

/*ajout projet*/
INSERT INTO `projet`(`pro_id`, `pro_nom`, `pro_description`, `pro_image`, `pro_deadline`, `pro_date`, `pro_statut`, `pro_util_id`)
VALUES ('value-1','value-2','value-3','value-4','value-5','value-6','value-7','value-8');

/*ajout tag*/
INSERT INTO `tag`(`tag_nom`) 
VALUES ('value-2');

/*récupération nom, prénom utilisateur avec l'email*/
SELECT util_nom, util_prenom 
FROM utilisateur 
WHERE util_email = 'andrieux.m@live.fr';

/*afficher le nom des projets d'un utilisateur*/
SELECT (pro_nom)
FROM projet
INNER JOIN utilisateur ON projet.pro_util_id = utilisateur.util_id
WHERE util_nom = 'Andrieux'

/*calcul du nombre de projet de l'utilisateur*/
SELECT COUNT (*)
FROM projet
INNER JOIN utilisateur ON projet.pro_util_id = utilisateur.util_id
WHERE util_nom = 'Andrieux';
