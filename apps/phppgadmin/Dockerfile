FROM maxexcloo/nginx-php:latest
MAINTAINER Max Schaefer <max@excloo.com>
RUN apt-get install --nodeps -y libjs-jquery phppgadmin
WORKDIR /data
RUN rmdir http
RUN ln -s /usr/share/phppgadmin http
