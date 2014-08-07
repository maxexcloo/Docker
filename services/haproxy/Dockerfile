FROM maxexcloo/debian:latest
MAINTAINER Max Schaefer <max@excloo.com>
RUN apt-key adv --keyserver keyserver.ubuntu.com --recv-keys 95A42FE8353525F9
RUN apt-key adv --keyserver keyserver.ubuntu.com --recv-keys CBCB082A1BB943DB
RUN echo "deb http://cdn.debian.net/debian/ wheezy-backports main" > /etc/apt/sources.list.d/backports.list
RUN echo "deb http://haproxy.debian.net/ wheezy-backports main" > /etc/apt/sources.list.d/haproxy.list
RUN apt-get update
RUN apt-get install -t wheezy-backports -y haproxy
ADD init /config/init/03haproxy
ADD supervisord.conf /etc/supervisor/conf.d/haproxy.conf
EXPOSE 80
EXPOSE 443
