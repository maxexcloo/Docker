FROM maxexcloo/nginx-php:latest
MAINTAINER Max Schaefer <max@excloo.com>
ENV VERSION 4.2.2
RUN mkdir -p /data/http
WORKDIR /data/http
RUN wget -O - "http://www.sourceforge.net/projects/phpmyadmin/files/phpMyAdmin/${VERSION}/phpMyAdmin-${VERSION}-all-languages.tar.gz/download" | tar --strip-components=1 -x -z
ADD config.inc.php /data/http/config.inc.php
RUN rm -rf *.md .coveralls.yml ChangeLog composer.json config.sample.inc.php DCO doc doc examples LICENSE phpunit.* README RELEASE-DATE-* robots.txt setup
RUN sed -i "s/SECRET/$(pwgen -B -s 24 1)/g" config.inc.php
