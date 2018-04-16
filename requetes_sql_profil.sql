/*ajout utilisateur*/
INSERT INTO `utilisateur`(`util_nom`, `util_prenom`, `util_email`, `util_mdp`, `util_pseudo`, `util_avatar`, `util_notif`) 
VALUES ('value-1','value-2','value-3','value-4','value-5','value-6','value-7','value-8');

INSERT INTO table utilisateur(`util_nom`, `util_prenom`, `util_email`, `util_mdp`, `util_pseudo`, `util_avatar`, `util_notif`)
VALUES ('Robet', 'Mathieu','blabla@gmail.com', 'machin001', 'Math', 'images/banana_phone.jpg', '1');

/*ajout projet*/
INSERT INTO `projet`(pro_nom, pro_description, pro_image, pro_deadline, pro_date, pro_statut, pro_util_id)
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
SELECT COUNT(*) AS nbprojet
FROM projet 
INNER JOIN utilisateur ON projet.util_id=utilisateur.util_id
WHERE util_email='andrieux.m@live.fr';

/*calcul du nombre de contribution de l'utilisateur*/
SELECT COUNT(*) AS nbcontrib
FROM contribution
INNER JOIN utilisateur ON contribution.util_id=utilisateur.util_id
WHERE util_email='andrieux.m@live.fr';

/*affichage de la description utilisateur*/
SELECT util_description
FROM utilisateur
WHERE util_email='andrieux.m@live.fr';

/*affichage des tags utilisateur*/
SELECT tag_nom
FROM tag_util
INNER JOIN tag ON tag_util.tag_id=tag.tag_id
INNER JOIN utilisateur ON tag_util.util_id=utilisateur.util_id
WHERE util_nom='Andrieux';

/*ajout d'un tag utilisateur*/
INSERT INTO tag_util
VALUES (1,7);

/*modification des informations utilisateur*/
UPDATE utilisateur
SET util_pseudo='###', util_avatar='###', util_notif='###', util_email='###', util_mdp="###";
WHERE util_nom='Andrieux';

/*affichage de la photo de profil*/
SELECT util_avatar
FROM utilisateur
WHERE util_email='andrieux.m@live.fr';

/*supression d'un commentaire*/
DELETE FROM commentaire
WHERE comm_id=1;


