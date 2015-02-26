FROM maxexcloo/debian:latest
MAINTAINER Max Schaefer <max@excloo.com>
RUN apt-key adv --keyserver keyserver.ubuntu.com --recv-keys E639BFCB72740199 && \
	echo "deb http://shell.ninthgate.se/packages/debian/ wheezy main" > /etc/apt/sources.list.d/plexmediaserver.list && \
	apt-get update && \
	apt-get install -y plexmediaserver && \
	apt-get clean && \
	echo -n > /var/lib/apt/extended_states
RUN mkdir -p /var/run/dbus && \
	chown messagebus:messagebus /var/run/dbus && \
	dbus-uuidgen --ensure
ADD etc /etc
ADD supervisord.conf /etc/supervisor/conf.d/plexmediaserver.conf
EXPOSE 32400
