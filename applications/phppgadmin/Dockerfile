FROM maxexcloo/nginx-php:latest
MAINTAINER Max Schaefer <max@excloo.com>
ENV VERSION 5.1
RUN mkdir -p /data/http
RUN wget -O - "http://www.sourceforge.net/projects/phppgadmin/files/phpPgAdmin%20%5Bstable%5D/phpPgAdmin-${VERSION}/phpPgAdmin-${VERSION}.tar.gz/download" | tar --strip-components=1 -C /data/http -x -z
RUN rm -rf /data/http/conf/config.inc.php-dist /data/http/CREDITS /data/http/DEVELOPERS /data/http/FAQ /data/http/HISTORY /data/http/INSTALL /data/http/TODO /data/http/TRANSLATORS
ADD data /data
