FROM maxexcloo/nginx-php:latest
MAINTAINER Max Schaefer <max@excloo.com>
ENV VERSION 1.12
ADD init /config/init/02tiny-tiny-rss
ADD nginx.conf /config/data/nginx-tiny-tiny-rss.conf
ADD supervisord.conf /etc/supervisor/conf.d/tiny-tiny-rss.conf
