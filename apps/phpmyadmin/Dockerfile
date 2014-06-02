FROM maxexcloo/nginx-php:latest
MAINTAINER Max Schaefer <max@excloo.com>
RUN apt-get install -y phpmyadmin
WORKDIR /data
RUN rmdir http
RUN ln -s /usr/share/phpmyadmin http
