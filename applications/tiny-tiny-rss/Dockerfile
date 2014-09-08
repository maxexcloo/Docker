FROM maxexcloo/nginx-php:latest
MAINTAINER Max Schaefer <max@excloo.com>
ENV VERSION 1.13
ADD config /config
ADD init /config/init/04tiny-tiny-rss
ADD supervisord.conf /etc/supervisor/conf.d/tiny-tiny-rss.conf
