-- met tout par defaut
DELETE FROM	mysql.user WHERE User='';
DROP DATABASE test;
DELETE FROM mysql.db WHERE Db='test';
DELETE FROM mysql.user WHERE User='root' AND Host NOT IN ('localhost', '127.0.0.1', '::1');

-- on set un mdp pour le root
SET PASSWORD FOR 'root'@'localhost' = PASSWORD('$MARIADB_ROOT_PWD');

-- premier utilisateur, le suivant est fait par le container wp
CREATE DATABASE $MARIADB_DB;
CREATE USER '$MARIADB_USER'@'%' IDENTIFIED by '$MARIADB_PWD';
GRANT ALL PRIVILEGES ON $MARIADB_DB.* TO $MARIADB_USER@'%';

FLUSH PRIVILEGES;
