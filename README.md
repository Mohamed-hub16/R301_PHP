## Eplication pour le tp ...

##php.ini
<br>
Pour la configuration du fichier php.ini prendre celui dans le git et le mettre à la place du php.ini-devlepoment
qui se trouve à l'endroit ou va savez télécharger php dans le dossier php82.

### pour faire afficher une image Jpeg en utilisant l'extension GD :
Rendez-vous dans le fichier php.ini
Ouvrez-le avec un éditeur de texte.
Faites ctrl + f et cherchez "extension=gd" puis enlevez le point virgule devant.
Refaites ctrl + f et cherchez "extension_dir" puis, encore une fois, enlevez le point virgule devant.
Relancez le serveur et tada ! ça marche.
