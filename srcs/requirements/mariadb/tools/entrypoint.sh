# check si le .setup exist
cat .setup 2> /dev/null

if [ $? -ne 0 ]; then # si setup existe pas
	#define direct et exec mysqld_safe
	usr/bin/mysqld_safe --datadir=/var/lib/mysql &

	#att que le serv soit pret
	while ! mysqladmin ping -h "$MARIADB_HOST" --silent; do
    	sleep 1
	done

	#exec le script sql dans mariadb
	eval "echo \"$(cat /tmp/create_db.sql)\"" | mariadb

	#cree le fichier
	touch .setup
fi

#define direct et exec mysqld_safe
usr/bin/mysqld_safe --datadir=/var/lib/mysql

#Correction
# docker container ls
# docker exec –it <container name> /bin/sh
# mysql -u root -p
# SHOW DATABASES;
# use 'wordpress';
# SHOW TABLES;
# SELECT wp_users.display_name FROM wp_users;
# SELECT *  FROM wp_users;
