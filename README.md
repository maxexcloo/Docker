**Description**  
This repository contains a collection of Docker configurations I've put together to meet my needs.

**Usage**  
The following commands can be used to deploy some of the services offered by the Docker containers in this repository.

- **Applications**

  - **Adminer**

          docker run --name="adminer" -d --link mariadb:mariadb --link postgresql:postgresql -e VIRTUAL_DIRECTORY=/adminer -e VIRTUAL_HOST=adminer.user.ransomit.excloo.net maxexcloo/adminer

  - **HAProxy Config**

          docker run --name="haproxy-config" -it -e DOMAIN=excloo.com,www.excloo.com -e HOSTNAME=$(hostname) -v /var/run/docker.sock:/tmp/docker.sock maxexcloo/haproxy-config

  - **HAProxy**

          docker run --name="haproxy-data" maxexcloo/data
          docker run --name="haproxy" -it --volumes-from="haproxy-config" --volumes-from="haproxy-data" -p 80:80 -p 443:443 -p 1936:1936 maxexcloo/haproxy

  - **Minecraft**

          docker run --name="minecraft-data" maxexcloo/data
          docker run --name="minecraft" -it --volumes-from="minecraft-data" -e MEMORY=1024 -p 25565:25565 maxexcloo/minecraft

  - **PHPMyAdmin**

          docker run --name="phpmyadmin" -d --link mariadb:mariadb -e VIRTUAL_DIRECTORY=/phpmyadmin -e VIRTUAL_HOST=phpmyadmin.user.ransomit.excloo.net maxexcloo/phpmyadmin

  - **PHPPgAdmin**

          docker run --name="phppgadmin" -d --link postgresql:postgresql -e VIRTUAL_DIRECTORY=/phppgadmin -e VIRTUAL_HOST=phppgadmin.user.ransomit.excloo.net maxexcloo/phppgadmin

  - **Tiny Tiny RSS**

          docker run --name="tiny-tiny-rss-data" maxexcloo/data
          docker run --name="tiny-tiny-rss" -it --link postgresql:postgresql --volumes-from="tiny-tiny-rss-data" -e VIRTUAL_DIRECTORY=/reader -e VIRTUAL_HOST=reader.excloo.com maxexcloo/tiny-tiny-rss

  - **ZNC**

          docker run --name="znc-data" maxexcloo/data
          docker run --name="znc" -it --volumes-from="znc-data" -p 6667:6667 maxexcloo/znc

- **Base**

  - **Debian**

          docker run --name="debian" -it maxexcloo/debian

  - **Ubuntu**

          docker run --name="debian" -it maxexcloo/ubuntu

  - **Java**

          docker run --name="java" -it maxexcloo/java

  - **OpenSSH**

          docker run --name="openssh" -it maxexcloo/openssh

- **Deploy**

  - **Debian**

          docker run -it --rm=true --volumes-from="" maxexcloo/debian

  - **Ubuntu**

          docker run -it --rm=true --volumes-from="" maxexcloo/ubuntu

- **Services**

  - **Nginx**
	
          docker run --name="nginx-data" maxexcloo/data
          docker run --name="nginx" -it --volumes-from="nginx-data" -e VIRTUAL_DIRECTORY=/nginx -e VIRTUAL_HOST=example.com,www.example.com maxexcloo/nginx
	
  - **Nginx + PHP-FPM**
	
          docker run --name="php-data" maxexcloo/data
          docker run --name="php" -it --volumes-from="php-data" -e VIRTUAL_DIRECTORY=/php -e VIRTUAL_HOST=example.com,www.example.com maxexcloo/nginx-php
	
  - **MariaDB** 
	
          docker run --name="mariadb-data" maxexcloo/data
          docker run --name="mariadb" -it --volumes-from="mariadb-data" maxexcloo/mariadb
	
  - **PostgreSQL**
	
          docker run --name="postgresql-data" maxexcloo/data
          docker run --name="postgresql" -it --volumes-from="postgresql-data" maxexcloo/postgresql
