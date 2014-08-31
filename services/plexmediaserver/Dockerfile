FROM maxexcloo/debian:latest
MAINTAINER Max Schaefer <max@excloo.com>
RUN apt-key adv --keyserver keyserver.ubuntu.com --recv-keys E639BFCB72740199
RUN echo "deb http://shell.ninthgate.se/packages/debian/ wheezy main" > /etc/apt/sources.list.d/plexmediaserver.list
RUN apt-get update
RUN apt-get install -y plexmediaserver
RUN mkdir -p /var/run/dbus
RUN chown messagebus:messagebus /var/run/dbus
RUN dbus-uuidgen --ensure
ADD etc /etc
ADD supervisord.conf /etc/supervisor/conf.d/plexmediaserver.conf
EXPOSE 32400
