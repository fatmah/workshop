workshop
========
c'est un petit sandbox contenant :
*sonataAdminBundle
*FosUserBundle
*sonataUserBundle
*sonataMediaBundle
vous n'avez qu'a suivre les étapes suivantes:
1- télécharger une copie du projet
git clone https://github.com/fatmah/workshop.git

cd workshop
2_télécharger le composer
curl -s https://getcomposer.org/installer | php

3- cd app/config
éditez parameters.yml

4- installez les dépendances
php composer.phar install

5-créez la base de donnée
 php app/console doctrine:database:create

6-créez le shéma de la base
php app/console doctrine:schema:update --force

7-créez un admin
php app/console fos:user:create admin --super-admin 

c'est terminé !! 

vous avez maintenant un dashboard rendez vous sur
 http://localhost/workshop/web/app_dev.php/admin/dashboard



