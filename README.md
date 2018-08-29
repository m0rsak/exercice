# Exercice

##Après le clonage il faut :
## BDD commande :
- composer install
- php bin/console doctrine:database:create 
- php bin/console doctrine:schema:update --force

## parameter.yml :
  parameters:
      database_host: 127.0.0.1  
      database_port: null  
      database_name: BDDname  
      database_user: BDDuser  
      database_password: BDDpass  
      mailer_transport: gmail  
      mailer_host: 127.0.0.1  
      mailer_user: accountAddress 
      mailer_password: password  
      secret: ThisTokenIsNotSoSecretChangeIt  

Le paramètre 'mailer_user' est utilisé comme expéditeur d'email.

## Server:run :

- php bin/console server:run



A Symfony project created on August 27, 2018, 12:58 pm.
