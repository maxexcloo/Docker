FROM maxexcloo/nginx-php:latest
MAINTAINER Max Schaefer <max@excloo.com>
RUN apt-get download -y libjs-jquery phppgadmin
RUN dpkg --force-all -i *.deb
RUN rm *.deb
RUN ln -s /usr/share/phppgadmin /data/http
