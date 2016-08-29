FROM maxexcloo/nginx-php:latest
MAINTAINER Max Schaefer <max@excloo.com>
ENV VERSION 5.1
WORKDIR /app
RUN curl "https://sourceforge.net/projects/phppgadmin/files/phpPgAdmin%20%5Bstable%5D/phpPgAdmin-${VERSION}/phpPgAdmin-${VERSION}.tar.gz/download" | tar --strip-components=1 -x -z && \
	rm -rf conf/config.inc.php-dist CREDITS DEVELOPERS FAQ HISTORY INSTALL TODO TRANSLATORS
WORKDIR /
ADD app /app
