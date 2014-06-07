FROM maxexcloo/nginx-php:latest
MAINTAINER Max Schaefer <max@excloo.com>
ENV VERSION 5.1
RUN mkdir -p /data/http
WORKDIR /data/http
RUN wget -O - "http://www.sourceforge.net/projects/phppgadmin/files/phpPgAdmin%20%5Bstable%5D/phpPgAdmin-${VERSION}/phpPgAdmin-${VERSION}.tar.gz/download" | tar --strip-components=1 -x -z
ADD config.inc.php /data/http/conf/config.inc.php
RUN rm -rf conf/config.inc.php-dist CREDITS DEVELOPERS FAQ HISTORY INSTALL LICENSE robots.txt TODO TRANSLATORS
