FROM maxexcloo/nginx-php:latest
MAINTAINER Max Schaefer <max@excloo.com>
ENV VERSION 4.1.0
RUN mkdir /data/http
RUN chown -R www-data:www-data /data
USER www-data
RUN wget -O /data/http/index.php "https://sourceforge.net/projects/adminer/files/Adminer/Adminer ${VERSION}/adminer-${VERSION}.php/download"
RUN wget -O /data/http/adminer.css https://raw.githubusercontent.com/vrana/adminer/master/designs/pokorny/adminer.css
