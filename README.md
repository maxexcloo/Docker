**Description**
This repository contains a collection of Docker configurations I've put together to meet my needs.

**Directory Structure**

- **nginx**

    nginx based frameworks have a simple directory structure that can be used to easily deploy web applications using a volume on /app. Try it for yourself. See below for detailed commands.

        /app
            /config
                nginx-*.conf // included by nginx
                php-*.conf // included by php-fpm
            /root
                ... // root web directory (index file is index.html or index.php)
        /data
            /logs
                nginx.log // nginx log file
                php-fpm.log // php-fpm log file
            /secure
                ... // private files such as passwords or keys

**Usage**
The following commands can be used to deploy some of the services offered by the Docker containers in this repository.

- **Applications**

    - **Adminer**

            docker run --name="adminer" --env=["VIRTUAL_HOST=adminer.example.com"] --link=[mariadb:mariadb,postgresql:postgresql] -d maxexcloo/adminer

    - **phpMyAdmin**

            docker run --name="phpmyadmin" --env=["VIRTUAL_HOST=phpmyadmin.example.com"] --link=[mariadb:mariadb] -d maxexcloo/phpmyadmin

    - **phpPgAdmin**

            docker run --name="phppgadmin" --env=["VIRTUAL_HOST=phppgadmin.example.com"] --link=[postgresql:postgresql] -d maxexcloo/phppgadmin

    - **Tiny Tiny RSS**

            docker run --name="tiny-tiny-rss-data" maxexcloo/data
            docker run --name="tiny-tiny-rss" --env=["VIRTUAL_HOST=tiny-tiny-rss.example.com"] --link=[postgresql:postgresql] --volumes-from=[tiny-tiny-rss-data] -i -t maxexcloo/tiny-tiny-rss

- **Base**

    - **Arch Linux**

            docker run --name="arch-linux" -i -t maxexcloo/arch-linux

    - **Debian**

            docker run --name="debian" -i -t maxexcloo/debian

- **Frameworks**

    - **nginx**

            docker run --name="nginx-data" maxexcloo/data
            docker run --name="nginx" --env=["VIRTUAL_HOST=example.com,www.example.com"] --volumes-from=[nginx-data] -i -t maxexcloo/nginx

    - **nginx + PHP-FPM**

            docker run --name="nginx-php-data" maxexcloo/data
            docker run --name="nginx-php" --env=["VIRTUAL_HOST=example.com,www.example.com"] --volumes-from=[nginx-php-data] -i -t maxexcloo/nginx-php

- **Services**

    - **HAProxy**

            docker run --name="haproxy-data" maxexcloo/data
            docker run --name="haproxy" --publish=[80:80,443:443] --volumes-from=[haproxy-data] -i -t maxexcloo/haproxy

    - **HAProxy Config**

            docker run --name="haproxy-data" maxexcloo/data
            docker run --name="haproxy-config" --volume=[/var/run/docker.sock:/var/run/docker.sock] --volumes-from=[haproxy-data] -i -t maxexcloo/haproxy-config

    - **MariaDB**

            docker run --name="mariadb-data" maxexcloo/data
            docker run --name="mariadb" --volumes-from=[mariadb-data] -i -t maxexcloo/mariadb

    - **Minecraft**

            docker run --name="minecraft-data" maxexcloo/data
            docker run --name="minecraft" --env=["MEMORY=1024"] --publish=[25565:25565] --volumes-from=[minecraft-data] -i -t maxexcloo/minecraft

    - **PostgreSQL**

            docker run --name="postgresql-data" maxexcloo/data
            docker run --name="postgresql" --volumes-from=[postgresql-data] -i -t maxexcloo/postgresql

    - **ZNC**

            docker run --name="znc-data" maxexcloo/data
            docker run --name="znc" --env=["VIRTUAL_HOST=znc.example.com","VIRTUAL_PORT=6667"] --publish=[6667:6667,6697:6697] --volumes-from=[znc-data] -i -t maxexcloo/znc
