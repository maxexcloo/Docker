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

            docker run --name="adminer" -d -e "VIRTUAL_HOST=adminer.example.com" --link mariadb:mariadb --link postgresql:postgresql maxexcloo/adminer

    - **phpMyAdmin**

            docker run --name="phpmyadmin" -d -e "VIRTUAL_HOST=phpmyadmin.example.com" --link mariadb:mariadb maxexcloo/phpmyadmin

    - **Tiny Tiny RSS**

            docker volume create --name="tiny-tiny-rss"
            docker run --name="tiny-tiny-rss" -it -e "VIRTUAL_HOST=tiny-tiny-rss.example.com" --link postgresql:postgresql -v tiny-tiny-rss:/data maxexcloo/tiny-tiny-rss

    - **Wordpress**

            docker volume create --name="wordpress"
            docker run --name="wordpress" -it -e "VIRTUAL_HOST=wordpress.example.com" --link mariadb:mariadb -v wordpress:/data maxexcloo/wordpress

- **Base**

    - **Debian**

            docker run --name="debian" -it maxexcloo/debian bash

    - **Ubuntu**

            docker run --name="ubuntu" -it maxexcloo/ubuntu bash

- **Frameworks**

    - **EasyEngine**

            docker run --name="easyengine" -it -p 80:80 -p 443:443 maxexcloo/easyengine
            docker exec -it easyengine bash

    - **Java**

            docker run --name="java" -it maxexcloo/java bash

    - **nginx**

            docker volume create --name="nginx"
            docker volume create --name="nginx-data"
            docker run --name="nginx" -it -e "VIRTUAL_HOST=example.com,www.example.com" -v nginx:/app -v nginx-data:/data maxexcloo/nginx

    - **nginx + PHP-FPM**

            docker volume create --name="nginx-php"
            docker volume create --name="nginx-php-data"
            docker run --name="nginx-php" -it -e "VIRTUAL_HOST=example.com,www.example.com" -v nginx-php:/app -v nginx-php-data:/data maxexcloo/nginx-php

    - **nginx + Phusion Passenger**

            docker volume create --name="nginx-passenger"
            docker volume create --name="nginx-passenger-data"
            docker run --name="nginx-passenger" -it -e "VIRTUAL_HOST=example.com,www.example.com" -v nginx-passenger:/app -v nginx-passenger-data:/data maxexcloo/nginx-passenger

    - **Node.js**

            docker run --name="node" -it maxexcloo/node bash

- **Services**

    - **Certbot**

            docker run --name="certbot" -it -e "EMAIL=mail@example.com"-v docker-gen:/data maxexcloo/certbot

    - **CouchPotato**

            docker volume create --name="couchpotato"
            docker run --name="couchpotato" -it -e "VIRTUAL_HOST=couchpotato.example.com" -e "VIRTUAL_PORT=5050" -v couchpotato:/data maxexcloo/couchpotato

    - **Directory Listing**

            docker volume create --name="directory-listing"
            docker run --name="directory-listing" -it -v directory-listing:/data maxexcloo/directory-listing

    - **Docker Gen**

            docker volume create --name="docker-gen"
            docker run --name="docker-gen" -it -v /var/run/docker.sock:/var/run/docker.sock -v docker-gen:/data maxexcloo/haproxy-config

    - **HAProxy**

            docker run --name="haproxy" -it -p 80:80 -p 43:443 -v docker-gen:/data maxexcloo/haproxy

    - **MariaDB**

            docker volume create --name="mariadb"
            docker run --name="mariadb" -it -e "MARIADB_USER=docker" -e "MARIADB_PASS=docker" -v mariadb:/data maxexcloo/mariadb

    - **Minecraft**

            docker volume create --name="minecraft"
            docker run --name="minecraft" -it -e "MEMORY=1024" -p 25565:25565 -v minecraft:/data maxexcloo/minecraft

    - **OpenSSH**

            docker run --name="openssh" -it -p 22:22 maxexcloo/openssh

    - **OpenVPN**

            docker volume create --name="openvpn"
            docker run --name="openvpn" -it -p 443:443 -p 1194:1194/udp -v openvpn:/data maxexcloo/openvpn
            docker run --name="openvpn" -it -e "VIRTUAL_HOST=openvpn.example.com" --rm maxexcloo/openvpn -v openvpn:/data /app/host

    - **Plex Media Server**

            docker volume create --name="plexmediaserver"
            docker run --name="plexmediaserver" -it -e "VIRTUAL_HOST=plexmediaserver.example.com" -e "VIRTUAL_PORT=32400" -p 32400:32400 -v plexmediaserver:/data maxexcloo/plexmediaserver

    - **PostgreSQL**

            docker volume create --name="postgresql"
            docker run --name="postgresql" -it -v postgresql:/data maxexcloo/postgresql

    - **ReadyMedia**

            docker volume create --name="readymedia"
            docker run --name="readymedia" -it -p 1900:1900/udp -p 8200:8200 -v readymedia:/data maxexcloo/readymedia

    - **SABnzbd**

            docker volume create --name="sabnzbd"
            docker run --name="sabnzbd" -it -e "VIRTUAL_HOST=sabnzbd.example.com" -e "VIRTUAL_PORT=8080" -v sabnzbd:/data maxexcloo/sabnzbd

    - **SickBeard**

            docker volume create --name="sickbeard"
            docker run --name="sickbeard" -it -e "VIRTUAL_HOST=sickbeard.example.com" -e "VIRTUAL_PORT=8081" -v sickbeard:/data maxexcloo/sickbeard

    - **ZNC**

            docker volume create --name="znc"
            docker run --name="znc" -it -e "VIRTUAL_HOST=znc.example.com" -e "VIRTUAL_PORT=6667" -p 6667:6667 -v znc:/data maxexcloo/znc
