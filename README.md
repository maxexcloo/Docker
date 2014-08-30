**Description**
This repository contains a collection of Docker configurations I've put together to meet my needs.

**Directory Structure**
Nginx and Nginx + PHP-FPM have a simple directory structure that can be used to simply and easily deploy web applications using a volume binding on /data.

    /data
        /conf
            nginx-*.conf // included by nginx
            php-*.conf // included by php-fpm
        /http
            index.html // root web directory (index file is index.html or index.php)
        /logs
            nginx.log // nginx log file
            php-fpm.log // php-fpm log file
        /secure
            filename.ext // private files such as passwords or keys

**Instructions**
Instructions will be here when I get around to writing them!

**Usage**
The following commands can be used to deploy some of the services offered by the Docker containers in this repository.

- **Applications**

  - **Adminer**

          docker run --name="adminer" -d --link mariadb:mariadb --link postgresql:postgresql -e VIRTUAL_HOST=adminer.example.com maxexcloo/adminer

  - **Koken**

          docker run --name="koken-data" maxexcloo/data
          docker run --name="koken" -it --link mariadb:mariadb --volumes-from="koken-data" -e VIRTUAL_HOST=koken.example.com -h koken.example.com maxexcloo/koken

  - **phpMyAdmin**

          docker run --name="phpmyadmin" -d --link mariadb:mariadb -e VIRTUAL_HOST=phpmyadmin.example.com maxexcloo/phpmyadmin

  - **phpPgAdmin**

          docker run --name="phppgadmin" -d --link postgresql:postgresql -e VIRTUAL_HOST=phppgadmin.example.com maxexcloo/phppgadmin

  - **Tiny Tiny RSS**

          docker run --name="tiny-tiny-rss-data" maxexcloo/data
          docker run --name="tiny-tiny-rss" -it --link postgresql:postgresql --volumes-from="tiny-tiny-rss-data" -e VIRTUAL_HOST=tiny-tiny-rss.example.com maxexcloo/tiny-tiny-rss

  - **WebIRC**

          docker run --name="webirc" -it --link znc:znc -e VIRTUAL_HOST=webirc.example.com -e VIRTUAL_PORT=8080 -p 8080:8080 maxexcloo/webirc

  - **Wordpress**

          docker run --name="wordpress-data" maxexcloo/data
          docker run --name="wordpress" -it --link mariadb:mariadb --volumes-from="wordpress-data" -e VIRTUAL_HOST=wordpress.example.com maxexcloo/wordpress

  - **Vanilla**

          docker run --name="vanilla-data" maxexcloo/data
          docker run --name="vanilla" -it --link mariadb:mariadb --volumes-from="vanilla-data" -e VIRTUAL_HOST=vanilla.example.com maxexcloo/vanilla

- **Base**

  - **Arch Linux**

          docker run --name="arch-linux" -it maxexcloo/arch-linux /bin/bash

  - **Data**

          docker run --name="data" -it maxexcloo/data /bin/sh

  - **Debian**

          docker run --name="debian" -it maxexcloo/debian /bin/bash

  - **Ubuntu**

          docker run --name="ubuntu" -it maxexcloo/ubuntu /bin/bash

- **Frameworks**

  - **Apache**

          docker run --name="apache-data" maxexcloo/data
          docker run --name="apache" -it --volumes-from="apache-data" -e VIRTUAL_HOST=example.com,www.example.com maxexcloo/apache

  - **Apache + PHP**

          docker run --name="apache-php-data" maxexcloo/data
          docker run --name="apache-php" -it --volumes-from="apache-php-data" -e VIRTUAL_HOST=example.com,www.example.com maxexcloo/apache-php

  - **Nginx**

          docker run --name="nginx-data" maxexcloo/data
          docker run --name="nginx" -it --volumes-from="nginx-data" -e VIRTUAL_HOST=example.com,www.example.com maxexcloo/nginx

  - **Nginx + PHP-FPM**

          docker run --name="nginx-php-data" maxexcloo/data
          docker run --name="nginx-php" -it --volumes-from="nginx-php-data" -e VIRTUAL_HOST=example.com,www.example.com maxexcloo/nginx-php

- **Services**

  - **Bukkit**

          docker run --name="bukkit-data" maxexcloo/data
          docker run --name="bukkit" -it --volumes-from="bukkit-data" -e MEMORY=1024 -p 25565:25565 maxexcloo/bukkit

  - **Dnsmasq**

          docker run --name="dnsmasq-data" maxexcloo/data
          docker run --name="dnsmasq" -it --privileged --volumes-from="dnsmasq-data" -p 53:53 -p 53:53/udp maxexcloo/dnsmasq

  - **HAProxy**

          docker run --name="haproxy-data" maxexcloo/data
          docker run --name="haproxy" -it --volumes-from="haproxy-data" -p 80:80 -p 443:443 maxexcloo/haproxy

  - **HAProxy Config**

          docker run --name="haproxy-data" maxexcloo/data
          docker run --name="haproxy-config" -it --volumes-from="haproxy-data" -v /var/run/docker.sock:/var/run/docker.sock maxexcloo/haproxy-config

  - **MariaDB**

          docker run --name="mariadb-data" maxexcloo/data
          docker run --name="mariadb" -it --volumes-from="mariadb-data" maxexcloo/mariadb

  - **Minecraft**

          docker run --name="minecraft-data" maxexcloo/data
          docker run --name="minecraft" -it --volumes-from="minecraft-data" -e MEMORY=1024 -p 25565:25565 maxexcloo/minecraft

  - **PostgreSQL**

          docker run --name="postgresql-data" maxexcloo/data
          docker run --name="postgresql" -it --volumes-from="postgresql-data" maxexcloo/postgresql

  - **SNIProxy**

          docker run --name="sniproxy-data" maxexcloo/data
          docker run --name="sniproxy" -it --volumes-from="sniproxy-data" -p 80:80 -p 443:443 maxexcloo/sniproxy

  - **ZNC**

          docker run --name="znc-data" maxexcloo/data
          docker run --name="znc" -it --volumes-from="znc-data" -e VIRTUAL_HOST=znc.example.com -e VIRTUAL_PORT=6667 -p 6697:6697 -p 6667:6667 maxexcloo/znc
