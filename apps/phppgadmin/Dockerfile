FROM maxexcloo/nginx-php:latest
MAINTAINER Max Schaefer <max@excloo.com>
ENV VERSION 5.1
RUN mkdir -p /data/http
RUN wget -O - "http://www.sourceforge.net/projects/phppgadmin/files/phpPgAdmin%20%5Bstable%5D/phpPgAdmin-${VERSION}/phpPgAdmin-${VERSION}.tar.gz/download" | tar --directory=/data/http --strip-components=1 -x -z
RUN rm -rf /data/http/conf/config.inc.php-dist /data/http/CREDITS /data/http/DEVELOPERS /data/http/FAQ /data/http/HISTORY /data/http/INSTALL /data/http/LICENSE /data/http/robots.txt /data/http/TODO /data/http/TRANSLATORS
ADD config.inc.php /data/http/conf/config.inc.php
