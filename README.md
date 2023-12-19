### Explications pour le TP...

### Pour lancer index.html :

php -S 127.0.0.1:8000
(à la racine)

### php.ini :

Allez dans le dossier où vous avez décompressé le dossier de téléchargement de php, renomez le fichier "php.ini-developement" en "php.ini"

Faire les modifications dessus ci-dessous. (A la fin php.ini final sera dispo).

### Pour le TP1 : 

Dé-commenter la ligne "extension=mbstring" (avec ctrl+f) en enlevant le ; devant

### Pour faire afficher une image Jpeg en utilisant l'extension GD :

Rendez vous dans le fichier php.ini,
Ouvrez-le avec un éditeur de texte,
Faites ctrl + f et cherchez "extension=gd" puis enlevez le point virgule devant,
Refaites ctrl + f et cherchez "extension_dir = "ext" puis, encore une fois, enlevez le point virgule devant,
Relancez le serveur et tada ! ça marche.

Si vous ne trouvez pas le extension_dir = "ext", ajoutez le dans votre php.ini au niveau des extensions


### Pour faire des requêtes SQL

Dans php.ini, dé-commentez "extension=pdo_mysql",

Ensuite, allez sur : https://dev.mysql.com/downloads/installer/ 
Téléchargez la premiere version : Windows (x86, 32-bit), MSI Installer,
Exécutez l'installeur,
Choisissez "server only" puis cliquez sur next -> execute -> next
Les paramètres TCP/IP ne sont pas à toucher donc cliquez sur next -> next
En password mettre sa1@ (mdp qui permet de se connecter à my sql)
Cliquez sur add user pour ajouter un utilisateur 
Nommez l'utilisateur sa avec le mdp sa1@
Puis cliquez sur next -> next -> next -> execute
Après la fin de l'installation, cliquez sur finish

Allez dans MySQL command line et entrez le mdp présenté avant

!!! n'oubliez jamais de mettre un ";" en fin de requête sinon cela ne fonctionnera jamais dans MySQL command line !!!

Pour créer une BDD dans notre cas php : create database php;
Pour voir les bdd : show databases; si cela affiche une database nommé php c'est terminé
Pour voir les information dans une bdd : select [colonne] from [database].[tables];
Pour supprimer une database : drop database [database];
Pour supprimer une table : drop table [database].[tables];

### 
