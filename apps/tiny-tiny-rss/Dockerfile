FROM maxexcloo/nginx-php:latest
MAINTAINER Max Schaefer <max@excloo.com>
ENV VERSION 1.12
RUN mkdir -p /data/conf /data/http
RUN wget -O - "https://www.github.com/gothfox/Tiny-Tiny-RSS/archive/${VERSION}.tar.gz" | tar --directory=/data/http --strip-components=1 -x -z Tiny-Tiny-RSS-${VERSION}
RUN rm -rf /data/http/*.md /data/http/*.pot /data/http/*/*/.empty /data/http/*/.empty /data/http/.buildpath /data/http/.gitignore /data/http/.htaccess /data/http/.project /data/http/LICENSE /data/http/utils
ADD nginx.conf /data/conf/nginx-tiny-tiny-rss.conf
ADD supervisord.conf /etc/supervisor/conf.d/tiny-tiny-rss.conf
