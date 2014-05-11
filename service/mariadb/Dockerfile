FROM maxexcloo/debian-supervisord
MAINTAINER Max Schaefer <max@excloo.com>
ENV DEBIAN_FRONTEND noninteractive
RUN apt-key adv --keyserver keyserver.ubuntu.com --recv-keys 0xcbcb082a1bb943db
RUN echo "deb http://ftp.osuosl.org/pub/mariadb/repo/10.0/debian wheezy main" > /etc/apt/sources.list.d/mariadb.list
RUN apt-get update
RUN apt-get install -y mariadb-server
RUN sed -i -e "s/^bind-address/#bind-address/" /etc/mysql/my.cnf
RUN sed -i -e "s/^datadir.*=.*/datadir = \/data/" /etc/mysql/my.cnf
ADD mariadb.conf /etc/supervisor/conf.d/mariadb.conf
EXPOSE 3306
VOLUME ["/data"]
