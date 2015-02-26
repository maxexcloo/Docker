FROM maxexcloo/nginx-php:latest
MAINTAINER Max Schaefer <max@excloo.com>
ENV VERSION 4.3.10
RUN mkdir -p /data/http && \
	cd /data/http && \
	wget -O - "http://www.sourceforge.net/projects/phpmyadmin/files/phpMyAdmin/${VERSION}/phpMyAdmin-${VERSION}-all-languages.tar.gz/download" | tar --strip-components=1 -x -z && \
	rm -rf *.md .coveralls.yml ChangeLog composer.json config.sample.inc.php DCO doc examples phpunit.* README RELEASE-DATE-* setup
ADD data /data
