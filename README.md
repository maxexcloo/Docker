**Description**  
This repository contains a collection of Docker configurations I've put together to meet my needs.

**Usage**  
The following commands can be used to deploy some of the services offered by the Docker containers in this repository.

- **Applications**

  - **Adminer**

        docker run --name="adminer" --link mariadb:mariadb --link postgresql:postgresql -e VIRTUAL_HOST=adminer.example.com -i -t maxexcloo/adminer

  - **HAProxy Config**

        docker run --name="haproxy-config" -v /var/run/docker.sock:/tmp/docker.sock -i -t maxexcloo/haproxy-config

  - **HAProxy**

        docker run --name="haproxy" --volumes-from="haproxy-config" -p 80:80 -p 443:443 -i -t maxexcloo/haproxy

  - **Minecraft**

        docker run --name="minecraft-data" maxexcloo/data
        docker run --name="minecraft" --volumes-from="minecraft-data" -e MEMORY=1024 -p 25565:25565 -i -t maxexcloo/minecraft

  - **PHPMyAdmin**

        docker run --name="phpmyadmin" --link mariadb:mariadb -e VIRTUAL_HOST=phpmyadmin.example.com -i -t maxexcloo/phpmyadmin

  - **PHPPgAdmin**

        docker run --name="phppgadmin" --link postgresql:postgresql -e VIRTUAL_HOST=phppgadmin.example.com -i -t maxexcloo/phppgadmin

  - **Tiny Tiny RSS**

        docker run --name="tiny-tiny-rss" --link postgresql:postgresql -e VIRTUAL_HOST=reader.example.com -i -t maxexcloo/tiny-tiny-rss

  - **ZNC**

        docker run --name="znc-data" maxexcloo/data
        docker run --name="znc" --volumes-from="znc-data" -p 6667:6667 -i -t maxexcloo/znc

- **Services**

  - **Nginx**
	
        docker run --name="nginx-data-nginx.example.com" maxexcloo/data
        docker run --name="nginx-nginx.example.com" --volumes-from="nginx-data-nginx.example.com" -e VIRTUAL_HOST=nginx.example.com -i -t maxexcloo/nginx
	
  - **Nginx + PHP-FPM**
	
        docker run --name="php-data-php.example.com" maxexcloo/data
        docker run --name="php-php.example.com" --volumes-from="php-data-php.example.com" -e VIRTUAL_HOST=php.example.com -i -t maxexcloo/nginx-php
	
  - **MariaDB** 
	
        docker run --name="mariadb-data" maxexcloo/data
        docker run --name="mariadb" --volumes-from="mariadb-data" -i -t maxexcloo/mariadb
	
  - **PostgreSQL**
	
        docker run --name="postgresql-data" maxexcloo/data
        docker run --name="postgresql" --volumes-from="postgresql-data" -i -t maxexcloo/postgresql
