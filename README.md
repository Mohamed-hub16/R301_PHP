## Eplication pour le tp ...

##php.ini
<br>
Aller dans le dossier ou vous avez décompresser le dossier de téléchargement de php, renomer le php.ini-developement en php.ini
et faire les modifications dessus ci-dessous. (A la fin php.ini final sera dispo).

### pour le tp1 : 
decommenter la ligne extension=mbstring (avec ctrl+f) en enlevant le ; devant

### pour faire afficher une image Jpeg en utilisant l'extension GD :
Rendez-vous dans le fichier php.ini
Ouvrez-le avec un éditeur de texte.
Faites ctrl + f et cherchez "extension=gd" puis enlevez le point virgule devant.
Refaites ctrl + f et cherchez "extension_dir = "ext" puis, encore une fois, enlevez le point virgule devant.
Relancez le serveur et tada ! ça marche.

Si vous ne trouvez pas le extension_dir = "ext", ajoutez le dans votre php.ini au niveau des extensions


### pour faire des requete sql
dans php.ini, decommenter extension=pdo_mysql

ensuite aller sur : https://dev.mysql.com/downloads/installer/ 
telecharger la premiere version: Windows (x86, 32-bit), MSI Installer
executer
choisir :server only, puis suivant, execute, next
les parametre tcp/ip ne sont pas a toucher donc next, next
en password mettre sa1@: mdp qui permet de se connecter a my sql
ajouter un utilisateur nomme : sa avec en mdp sa1@: pour notre cas
puis next,next,next,execute
apres la fin de l'instalation , finish

aller dans MySQL command line et entrer le mdp presenter avant

!!! n'oublier jamais de mettre un ";" en fin de requete sinon cela ne fonctionnera jamais dans MySQL command line !!!

créé une bdd dans notre cas php : create database php;
pour voir les bdd : show databases; si cela affiche une database nommé php c'est terminer 
pour voir les information dans une bdd  select [colonne] from [database].[tables];
pour supprimer une database : drop database [database];
pour supprimer une table : drop table [database].[tables];



### 
