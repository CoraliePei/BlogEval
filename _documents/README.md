Pour réaliser ce blog, j'ai utilisé XAMP avec Apache et mySQL.
J'ai installé avec composer le var-dump de symfony, et j'ai mis le dossier Vendor dans mon gitignore.

Modélisation BDD si import échoué : https://prnt.sc/hWXNFNP3aFq1

________________________________________________________________

Reste à faire

Liste des articles :
Edition : GETid article, formulaire avec champs pré rempli par le contenu, le nouveau contenu reste en mémoire dans le formulaire pour le maintenir affiché si les conditions de validation ne sont pas respectées, sinon post modifié avec new Sql -> update
UPDATE articles SET titre = :titre, (...) modified_at = NOW() WHERE id = :id 

Inscription : 
Insérer l'envoi de mail quand l'inscription est validée

Page de gestion des utilisateurs :
Tableau avec requête select * utilisateurs, qui affiche toutes les informations connues, et un bouton select options avec une requête qui liste les rôles disponibles, et qui offre la possibilité à l'admin de faire un update rôle sur l'utilisateur en question.
Bouton delete user, qui envoie potentiellement un mail à la personne concernée et/ou qui affiche un message de bannissement à la tentative de connexion. Pour cette dernière solution il me semblerait que je doive ajouter une colonne dans mon tableau utilisateur pour leur 'état', afin de ne pas le supprimer de la bdd directement.

utilisateurs_has_articles :
Faire le lien entre les utilisateurs et les articles postés, dans le formulaire d'inscription. Il manque le fait de récupérer l'utilisateur actuellement
- Récupérer le mail ou pseudo de la session, remonter avec jusqu'à l'id utilisateur, puis insérer dans la table les informations requises pour faire le lien

Articles : 
Aperçu d'un article, si GET id_article = $id, nouvelle page avec tout le détail de l'article

Ajouter les commentaires
- Formulaire de comm non visible pour les visiteurs, les relier à l'article concerné et à l'utilisateur qui commente.
- Liste des commentaires et réponses aux commentaires visibles par tout le monde
- Bouton modif delete visible et accessible par les modo/rédac/admin. Mettre une condition de role si role = moderateur, impossible de modif etc

Ajouter les avis 
- Possibilité de mettre une note de 1 à 5 étoiles, (système de clic sur des cases nummérotées de 1 à 5 qui récupèrent la note) si utilisateur inscrit minimum
- Select * avis puis fonction pour calculer la somme/nbr d'avis, affichage de ce résultat sous l'article pour les rédacs et admin

Relier le formulaire de contact

Page d'accueil :
- Sélectionner les articles les plus récents pour les afficher
- Inciter à la découverte des autres articles, CTA
