workshop
========
c'est un petit sandbox contenant :


*sonataAdminBundle


*FosUserBundle


*sonataUserBundle


*sonataMediaBundle


vous n'avez qu'a suivre les étapes suivantes:


1- télécharger une copie du projet


<code> git clone https://github.com/fatmah/workshop.git </code>

cd workshop


2-télécharger le composer


<code> curl -s https://getcomposer.org/installer | php </code>

3- <code>cd app/config </code>


éditez parameters.yml

4- installez les dépendances


<code> php composer.phar install </code>

5-créez la base de donnée


 <code> php app/console doctrine:database:create </code>

6-créez le shéma de la base


<code> php app/console doctrine:schema:update --force </code>

7-créez un dossier pour sauvgarder les médias

<code> mkdir web/uploads</code>

<code> mkdir web/uploads/media</code>

<code> chmod 777 -R web/uploads</code>


8-créez un admin


<code> php app/console fos:user:create admin --super-admin </code>

c'est terminé !! 

vous avez maintenant un dashboard rendez vous sur


 http://localhost/workshop/web/app_dev.php/admin/dashboard




