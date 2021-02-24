# php_auth
Sample auhtentication for symfony using MySQL

Instructions 
1. Install latest symfony version (project using Symfony 5.2.3)
2. >composer install
3. modify .env file :
  DATABASE_URL="mysql://(username):(password)@127.0.0.1:3306/(databasename)?serverVersion=5.7"
4. >php bin/console doctrine:fixtures:load (loading fixtures and add admin in your db)
5. >symfony server:start
6. /login (to authenticate use admin as a username and 0000 as a password)
                        
