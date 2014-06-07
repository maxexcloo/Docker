**Description**  
This repository contains a collection of Docker configurations I've put together to meet my needs.

**Usage**  
The following commands can be used to deploy some of the services offered by the Docker containers in this repository.

- **Applications**

  - **Adminer**

          docker run --name="adminer" --link mariadb:mariadb --link postgresql:postgresql -e VIRTUAL_DIRECTORY=/adminer -e VIRTUAL_HOST=adminer.example.com maxexcloo/adminer

  - **HAProxy Config**

          docker run --name="haproxy-config" -it -v /var/run/docker.sock:/tmp/docker.sock maxexcloo/haproxy-config

  - **HAProxy**

          docker run --name="haproxy-data" maxexcloo/data
          docker run --name="haproxy" -it --volumes-from="haproxy-config" --volumes-from="haproxy-data" -p 80:80 -p 443:443 -p 1936:1936 maxexcloo/haproxy

  - **Minecraft**

          docker run --name="minecraft-data" maxexcloo/data
          docker run --name="minecraft" -it --volumes-from="minecraft-data" -e MEMORY=1024 -p 25565:25565 maxexcloo/minecraft

  - **PHPMyAdmin**

          docker run --name="phpmyadmin" --link mariadb:mariadb -e VIRTUAL_DIRECTORY=/phpmyadmin -e VIRTUAL_HOST=phpmyadmin.example.com maxexcloo/phpmyadmin

  - **PHPPgAdmin**

          docker run --name="phppgadmin" --link postgresql:postgresql -e VIRTUAL_DIRECTORY=/phppgadmin -e VIRTUAL_HOST=phppgadmin.example.com maxexcloo/phppgadmin

  - **Tiny Tiny RSS**

          docker run --name="tiny-tiny-rss-data" maxexcloo/data
          docker run --name="tiny-tiny-rss" --link postgresql:postgresql --volumes-from="tiny-tiny-rss-data" -e VIRTUAL_DIRECTORY=/reader -e VIRTUAL_HOST=reader.example.com maxexcloo/tiny-tiny-rss

  - **ZNC**

          docker run --name="znc-data" maxexcloo/data
          docker run --name="znc" -it --volumes-from="znc-data" -p 6667:6667 maxexcloo/znc

- **Services**

  - **Nginx**
	
          docker run --name="nginx-data-nginx.example.com" maxexcloo/data
          docker run --name="nginx-nginx.example.com" -it --volumes-from="nginx-data-nginx.example.com" -e VIRTUAL_DIRECTORY=/nginx -e VIRTUAL_HOST=nginx.example.com maxexcloo/nginx
	
  - **Nginx + PHP-FPM**
	
          docker run --name="php-data-php.example.com" maxexcloo/data
          docker run --name="php-php.example.com" -it --volumes-from="php-data-php.example.com" -e VIRTUAL_DIRECTORY=/php -e VIRTUAL_HOST=php.example.com maxexcloo/nginx-php
	
  - **MariaDB** 
	
          docker run --name="mariadb-data" maxexcloo/data
          docker run --name="mariadb" -it --volumes-from="mariadb-data" maxexcloo/mariadb
	
  - **PostgreSQL**
	
          docker run --name="postgresql-data" maxexcloo/data
          docker run --name="postgresql" -it --volumes-from="postgresql-data" maxexcloo/postgresql
