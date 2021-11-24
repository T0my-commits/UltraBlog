# UltraBlog

Bienvenue dans le projet ***UltraBlog*** !

Ce projet s'inscrit dans le cadre d'un excercice donné par *M .Salva* à effectuer en 3 semaines.

Le but du projet est de proposer la gestion complète d'un blog (journal de "news" ajoutées par date) en PHP.
La page principale du blog est composée d'une première partie supérieure (ou d'un menu), permettant d'administrer son blog, et d'une seconde partie composée des news affichées de la sorte: date : news. Cette page principale doit être découpée en plusieurs pages appelées par des liens, si le blog est trop important.

L'ensemble des news doivent être sauvegardées dans une base de données.
Une news peut être écrite par des administrateurs. Les utilisateurs normaux ne peuvent qu'ajouter des commentaires. Une news correspond à du texte écrit en HTML. La partie supérieure (ou le menu) est composée au moins:

- d'un lien ajout de commentaire: celui-ci fait appel à une nouvelle page demandant un pseudo et le message à ajouter dans le blog. Si le client ajoute plusieurs commentaires, le champ pseudo doit contenir le pseudo précédemment donné (utilisez une session)
- d'un lien administration: celui-ci fait appel à une page demandant un login et un mot de passe. La page suivante correspond soit à une page d'erreur (login, password erroné) soit à la page principale (c'est à dire l'ensemble des news par date) avec un bouton supplémentaire "effacer" par news qui permet de supprimer la news du blog et d'un boutton ajouter news.
- d'un bouton rechercher qui permet de rechercher et d'afficher une news par date
- de 2 compteurs donnant le nombre de messages du blog (appel bd) et le nombre de messages du client actuellement connecté (via un cookie)
- optionnel : les champs tels que login, mot de passe, titre de news, peuvent aussi etre vérifiés en javascript. Un news peut être écrite en BBcode (bbcode) qui doit être traduit en HTML(ex: <b> </b>doit afficher du texte en gras) et optionnellement des smileys
La gestion d'erreurs doit être complète. (champs vérifiés, connection à la BD,etc.)

Les collaborateurs du projet sont :

- Orillon Mathilde
- Devienne Thomas

Le projet utilise une patron d'architecture MVC. Les dossiers sont classés de la manière suivante :

- ***BD*** : contient la base de données sous la forme d'un script SQL
- ***controle*** : contient les Controlers chargés de traiter les actions et gérer les erreurs
- ***dall*** : contient les Gatways servant d'interfaces entre la BD (requêtes SQL) et le modele
- ***modele*** : contient les définitions de classes
- ***vues*** : contient les fichiers de vues du projet (HTML)
- ***css*** : contient la mise en page des vues (CSS)
- ***media*** : contient toutes les ressources du site (images, icones, etc.)

Le projet est soumis à la convention de nommage CamelCase pour le nommage des variables (premiereLettreDuPremierMotEnMinusculeApresInverse).
Le nom des fichiers de classe commencent par une majuscule, tout comme le nom de la classe et de ces méthodes (Classe.Methode).
Aucune variable ou nom de classe de possède d'accents !
 
*Bon courage !*
