### Explications pour le TP...

### Pour lancer index.html :

php -S 127.0.0.1:8000
(à la racine)

### Pour configurer le php.ini :

Allez dans le dossier où vous avez décompressé le dossier de téléchargement de php,
Renomez le fichier "php.ini-developement" en "php.ini"

Les autres modifications seront faites au fur et à mesure de ce readme

### Pour le TP1 : 

Dans le fichier php.ini :

Dé-commenter la ligne "extension=mbstring" en enlevant le ; devant

### Pour faire afficher une image Jpeg en utilisant l'extension GD :

Dans le fichier php.ini :

Dé-commentez la ligne "extension=gd" en enlevant le ; devant
Dé-commentez la ligne "extension_dir = "ext"" en enlevant le ; devant

Relancez le serveur et tada ! ça marche.

Si vous ne trouvez pas le extension_dir = "ext", ajoutez le dans votre php.ini au niveau des extensions

### Pour faire des requêtes SQL :

Dans le fichier php.ini :

Dé-commentez la ligne "extension=fileinfo" en enlevant le ; devant
Dé-commentez la ligne "extension=zip" en enlevant le ; devant

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

Ouvrez MySQL Command Line (depuis le menu de Windows) et entrez le mdp présenté avant

!!! N'oubliez jamais de mettre un ";" en fin de requête sinon cela ne fonctionnera jamais dans MySQL command line !!!

Dans MySQL command line, entrez "create database php;" (pour créer une base de données),
Entrez "show databases;",
Si cela affiche une database nommé php, c'est terminé.

(Pour voir les information dans une bdd : select [colonne] from [database].[tables];
Pour supprimer une database : drop database [database];
Pour supprimer une table : drop table [database].[tables];)

!!! Si jamais vous avez un message d'erreur en rapport avec le port, faire :
Windows+r 
Saisissez "services.msc" 
Cherchez "Maria.db" 
Désactivez Maria.db (clique droit -> "désactiver") !!!


### Pour installer composer :

Dans le fichier php.ini :

Dé-commentez la ligne "extension=pdo_mysql" en enlevant le ; devant

Allez sur : https://getcomposer.org/download/
Cliquez sur "composer-setup.exe",
Lancez l'installeur,
Choisissez "pour tous les utilisateurs"
Choisissez le "mode developpeur" 
Cliquez sur next -> next -> install -> next -> finish

Pour vérifier, ouvrez un terminal et tapez la commande "composer -v".
Ce joli dessin devrait apparaître :
   ______
  / ____/___  ____ ___  ____  ____  ________  _____
 / /   / __ \/ __ `__ \/ __ \/ __ \/ ___/ _ \/ ___/
/ /___/ /_/ / / / / / / /_/ / /_/ (__  )  __/ /
\____/\____/_/ /_/ /_/ .___/\____/____/\___/_/


### Pour vérifier que composer fonctionne avec laravel :

Ouvrez un terminal dans votre répertoire perso,
Tappez ces commandes : 
    composer create-project laravel/laravel iut-pw-laravel
    cd iut-pw-laravel
    php artisan serve

Pour vérifier, cliquez sur le lien qui apparaît. Vous devriez arriver sur le site de laravel.

### Pour vérifier que composer fonctionne avec symfony : 

Ouvrez un terminal dans votre répertoire perso,
Tappez ces commandes : 
    composer create-project symfony/skeleton iut-pw-symfony
	cd iut-pw-symfony
	composer require webapp
    cd public
    php -S 127.0.0.1:8000

Pour vérifier, cliquez sur le lien qui apparaît. Vous devriez arriver sur le site de symfony.

### Pour installer PHPStan :

!!!Ne surtout pas push ce qui suis dans common!!! 
!!!Mettre dans le git ignore!!!

Ouvrez un terminal dans votre répertoire perso,
Tappez cette commande : 
    composer init (permet de gerer la configuration dans composer.json)
    si vous n'avez pas de vendor au même niveau que laravel et symphoni 
    déplacé le vendor du iut-pw-laravel au même niveau que celui-ci et symphoni
Donnez le nom au vendor sous la forme : prenom/s01e04 (remplacez prenom par votre prénom mdr)
Tappez cette commande : 
    composer require --dev phpstan/phpstan (permet d'ajouter phpstan en tant que dépendance)

Pour vérifier, ouvrez un terminal dans votre répertoire perso.
Tappez cette commande :
    php vendor/bin/phpstan analyse --level max iut-pw-part1
				
Des erreurs devraient apparaître, mais c'est normal, ne pas s'inquiéter !
PHPStan est un outil qui permet de verifier la qualité du code PHP (erreur de type, des probleme de retour de fonction et des probleme d'arguments, etc.).


### Pour installer PHPUnit :


Ouvrez un terminal dans votre répertoire perso,
Tappeze cette commande a la racine des fichier ou vous vouler faire vos teste (la ou il y a iut-pw-part1):
    composer require --dev phpunit/phpunit ;
ensuite pour executer les tests faire:
./vendor/bin/phpunit
Et voilà.
faite un teste dans iut-pw-part1 de cette comande.


