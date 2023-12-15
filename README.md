## Eplication pour le tp ...

##php.ini
<br>
Aller dans le dossier ou bous avez décompresser le dossier de téléchargement de php, renomer le php.ini-developement en php.ini
et faire les modifications dessus ci-dessous. (A la fin php.ini final sera dispo).

### pour faire afficher une image Jpeg en utilisant l'extension GD :
Rendez-vous dans le fichier php.ini
Ouvrez-le avec un éditeur de texte.
Faites ctrl + f et cherchez "extension=gd" puis enlevez le point virgule devant.
Refaites ctrl + f et cherchez "extension_dir = "ext" puis, encore une fois, enlevez le point virgule devant.
Relancez le serveur et tada ! ça marche.

Si vous ne trouvez pas le extension_dir = "ext", ajoutez le dans votre php.ini au niveau des extensions
