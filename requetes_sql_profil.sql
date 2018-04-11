/*ajout utilisateur*/
INSERT INTO `utilisateur`(`util_nom`, `util_prenom`, `util_email`, `util_mdp`, `util_pseudo`, `util_avatar`, `util_notif`) 
VALUES ('value-1','value-2','value-3','value-4','value-5','value-6','value-7','value-8');

/*ajout projet*/
INSERT INTO `projet`(`pro_id`, `pro_nom`, `pro_description`, `pro_image`, `pro_deadline`, `pro_date`, `pro_statut`, `pro_util_id`)
VALUES ('value-1','value-2','value-3','value-4','value-5','value-6','value-7','value-8');

/*ajout tag*/
INSERT INTO `tag`(`tag_nom`) 
VALUES ('value-2');

/*récupération nom, prénom utilisateur avec l'email V*/
SELECT util_nom, util_prenom 
FROM utilisateur 
WHERE util_email = 'andrieux.m@live.fr';

/*afficher le nom des projets d'un utilisateur V*/
SELECT (pro_nom)
FROM projet
INNER JOIN utilisateur ON projet.pro_util_id = utilisateur.util_id
WHERE util_nom = 'Andrieux';

/*calcul du nombre de projet de l'utilisateur V*/
SELECT COUNT(*) AS nbprojet
FROM projet 
INNER JOIN utilisateur ON projet.pro_util_id=utilisateur.util_id
WHERE util_email='andrieux.m@live.fr';

/*calcul du nombre de contribution de l'utilisateur*/
SELECT COUNT(*) AS nbcontrib
FROM contribution
INNER JOIN utilisateur ON contribution.contrib_util_id=utilisateur.util_id
WHERE util_email='andrieux.m@live.fr';

/*affichage de la description utilisateur V*/
SELECT util_description
FROM utilisateur
WHERE util_email='andrieux.m@live.fr';

/*affichage des tags utilisateur V*/
SELECT tag_nom
FROM tag_util
INNER JOIN tag ON tag_util.tag_id=tag.tag_id
INNER JOIN utilisateur ON tag_util.tag_util_id=utilisateur.util_id
WHERE util_nom='Andrieux';

/*ajout d'un tag utilisateur V*/
INSERT INTO tag_util
VALUES (1,7);

/*modification des informations utilisateur V*/
UPDATE utilisateur
SET util_pseudo='###', util_avatar='###', util_notif='###', util_email='###', util_mdp="###";
WHERE util_nom='Andrieux';

/*affichage de la photo de profil V*/
SELECT util_avatar
FROM utilisateur
WHERE util_email='andrieux.m@live.fr';

/*ajout d'un commentaire V*/
INSERT INTO commentaire(comm_comment, comm_util_id_dest, comm_util_id_exp)
VALUES ("C'est naze ton projet!", "2", "1");


/*supression d'un commentaire V*/
DELETE FROM commentaire
WHERE comm_id=1;

/*affichage commentaires V*/
SELECT comm_comment, comm_util_id_dest, comm_util_id_exp
FROM commentaire
WHERE comm_util_id_dest='1';

/*affiche le pseudo de l'expéditeur et le contenu du commentaire V*/
SELECT comm_comment, util_pseudo
FROM utilisateur
INNER JOIN commentaire ON utilisateur.util_id=commentaire.comm_util_id_dest
where util_email='andrieux.m@live.fr';

