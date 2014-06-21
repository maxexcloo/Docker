FROM maxexcloo/nginx-php:latest
MAINTAINER Max Schaefer <max@excloo.com>
ENV VERSION 4.2.3
RUN mkdir -p /data/http
RUN wget -O - "http://www.sourceforge.net/projects/phpmyadmin/files/phpMyAdmin/${VERSION}/phpMyAdmin-${VERSION}-all-languages.tar.gz/download" | tar --strip-components=1 -C /data/http -x -z
RUN rm -rf /data/http/*.md /data/http/.coveralls.yml /data/http/ChangeLog /data/http/composer.json /data/http/config.sample.inc.php /data/http/DCO /data/http/doc /data/http/examples /data/http/LICENSE /data/http/phpunit.* /data/http/README /data/http/RELEASE-DATE-* /data/http/robots.txt /data/http/setup
RUN sed -i "s/SECRET/$(pwgen -B -s 24 1)/g" /data/http/config.inc.php
ADD config.inc.php /data/http/config.inc.php
