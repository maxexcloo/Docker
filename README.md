**Description**
This repository contains a collection of Docker configurations I've put together
to meet my needs.

**Directory Structure**
All frameworks have a simple directory structure that can be used to easily
deploy web applications. Try it for yourself. See below for an example (all
applications & services follow this basic structure).

    /app - application directory (web root, etc), not modified at runtime
        index.html - example application
    /config - configuration directory, not modified at runtime
        /init - init file directory, not modified at runtime
            application - executed at startup of application
        fastcgi-*.conf - included by nginx
        nginx-*.conf - included by nginx
        php-*.conf - included by php-fpm
    /data - data directory, modified at runtime (can be a volume)
        /logs
            nginx.log # nginx log file
            php-fpm.log # php-fpm log file

**Usage**
The following commands can be used to deploy some of the services offered by the
Docker containers in this repository.

- **Applications**

    - **Adminer**

            docker run --name="adminer" -d --env "VIRTUAL_HOST=adminer.example.com" --link mariadb:mariadb  --link postgresql:postgresql maxexcloo/adminer

    - **phpMyAdmin**

            docker run --name="phpmyadmin" -d --env "VIRTUAL_HOST=phpmyadmin.example.com" --link mariadb:mariadb maxexcloo/phpmyadmin

    - **phpPgAdmin**

            docker run --name="phppgadmin" -d --env "VIRTUAL_HOST=phppgadmin.example.com" --link postgresql:postgresql maxexcloo/phppgadmin

    - **Tiny Tiny RSS**

            docker volume create --name="tiny-tiny-rss"
            docker run --name="tiny-tiny-rss" -it --env "VIRTUAL_HOST=tiny-tiny-rss.example.com" --link postgresql:postgresql --volume tiny-tiny-rss:/data maxexcloo/tiny-tiny-rss

- **Base**

    - **Arch Linux**

            docker run --name="arch-linux" -it maxexcloo/arch-linux

    - **Debian**

            docker run --name="debian" -it maxexcloo/debian

    - **Ubuntu**

            docker run --name="ubuntu" -it maxexcloo/ubuntu

- **Frameworks**

    - **nginx**

            docker volume create --name="nginx"
            docker run --name="nginx" -it --env "VIRTUAL_HOST=example.com,www.example.com" --volume nginx:/data maxexcloo/nginx

    - **nginx + PHP-FPM**

            docker volume create --name="nginx-php"
            docker run --name="nginx-php" -it --env "VIRTUAL_HOST=example.com,www.example.com" --volume nginx-php:/data maxexcloo/nginx-php

    - **nginx + Phusion Passenger**

            docker volume create --name="nginx-passenger"
            docker run --name="nginx-passenger" -it --env "VIRTUAL_HOST=example.com,www.example.com" --volume nginx-passenger:/data maxexcloo/nginx-passenger

- **Services**

    - **HAProxy**

            docker volume create --name="haproxy"
            docker run --name="haproxy" -it --publish 80:80 --publish 43:443 --volume haproxy:/data maxexcloo/haproxy

    - **HAProxy Config**

            docker volume create --name="haproxy"
            docker run --name="haproxy-config" -it --volume /var/run/docker.sock:/var/run/docker.sock --volume haproxy:/data maxexcloo/haproxy-config

    - **MariaDB**

            docker volume create --name="mariadb"
            docker run --name="mariadb" -it --env "MARIADB_USER=docker" --env "MARIADB_PASS=docker" --volume mariadb:/data maxexcloo/mariadb

    - **Minecraft**

            docker volume create --name="minecraft"
            docker run --name="minecraft" -it --env "MEMORY=1024" --publish 25565:25565 --volume minecraft:/data maxexcloo/minecraft

    - **PostgreSQL**

            docker volume create --name="postgresql"
            docker run --name="postgresql" -it --volume postgresql:/data maxexcloo/postgresql

    - **ZNC**

            docker volume create --name="znc"
            docker run --name="znc" -it --env "VIRTUAL_HOST=znc.example.com" --env "VIRTUAL_PORT=6667" --publish 6667:6667 --volume znc:/data maxexcloo/znc
