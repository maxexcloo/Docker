FROM maxexcloo/debian:latest
MAINTAINER Max Schaefer <max@excloo.com>
RUN apt-key adv --keyserver keyserver.ubuntu.com --recv-keys CBCB082A1BB943DB
RUN echo "deb http://shell.ninthgate.se/packages/debian/ wheezy main" > /etc/apt/sources.list.d/plexmediaserver.list
RUN apt-get update
RUN apt-get install -y plexmediaserver
ADD supervisord.conf /etc/supervisor/conf.d/plexmediaserver.conf
EXPOSE 32400
