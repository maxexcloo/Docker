FROM maxexcloo/debian:latest
MAINTAINER Max Schaefer <max@excloo.com>
ENV MARIADB_DB NONE
ENV MARIADB_USER docker
RUN apt-key adv --keyserver keyserver.ubuntu.com --recv-keys CBCB082A1BB943DB
RUN echo "deb http://ftp.osuosl.org/pub/mariadb/repo/10.0/debian/ wheezy main" > /etc/apt/sources.list.d/mariadb.list
RUN apt-get update
RUN apt-get install -y mariadb-server
RUN sed -i -e "s/^bind-address/#bind-address/" /etc/mysql/my.cnf
RUN sed -i -e "s/^datadir.*=.*/datadir = \/data/" /etc/mysql/my.cnf
RUN sed -i -e "s/^innodb_buffer_pool_size.*=.*/innodb_buffer_pool_size = 64M/" /etc/mysql/my.cnf
ADD config /config
ADD supervisord.conf /etc/supervisor/conf.d/mariadb.conf
EXPOSE 3306
