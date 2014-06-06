FROM maxexcloo/nginx-php:latest
MAINTAINER Max Schaefer <max@excloo.com>
ENV VERSION 1.12
RUN mkdir -p /data/conf /data/http
WORKDIR /data/http
RUN wget -O - https://github.com/gothfox/Tiny-Tiny-RSS/archive/$VERSION.tar.gz | tar --strip-components=1 -x -z Tiny-Tiny-RSS-$VERSION
RUN rm -rf *.md *.pot */*/.empty */.empty .buildpath .gitignore .htaccess .project LICENSE utils
ADD supervisord.conf /etc/supervisor/conf.d/tiny-tiny-rss.conf
