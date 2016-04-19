# Orthodontics
### Projet réalisé par la [WCS](http://www.wildcodeschool.fr) ![Logo Wild Code School][logo]

#### Membres du projet : 

* Mathilde Navet
* Ninon Pelaez
* Emilie Chartier
* Thomas Merlin

##### Pré-requis pour l'installation de l'application sur votre environnement de travail : 

* [Symfony](https://symfony.com/)
* [Composer](http://symfony.com/doc/current/cookbook/composer.html)
* [MySQL](https://www.mysql.fr/)

Si vous ne possédez pas tous ces pré-requis, ne passez pas à l'étape suivante.

##### Installation de l'application :

1. **Clonez** le dépôt GitHub sur votre PC 
> Nota : N'oubliez pas de cloner le dépôt au bon endroit.  
```sh
--> /var/www/html pour Linux.  
--> ~/Sites/ pour Mac OSX.
```

2. **Modifiez les droits** du fichier chmod.sh, via le terminal afin d'être sur que vous ayez tous les droits dessus (777).
```sh
--> sudo chmod -R 777 chmod.sh
```

3. **Executez** le script chmod.sh depuis le terminal
```sh
--> ./chmod.sh
```

4. **Installez** les dossiers manquants de l'application ("Vendor" et "Bin") avec Composer, en éxécutant la commande :
```sh
--> composer update
```

###### L'application est prête à l'emploi.

[logo]: http://tobook.wildcodeschool.fr/assets/img/logo_wcs.png "Logo Wild Code School"
