FROM maxexcloo/debian:latest
MAINTAINER Max Schaefer <max@excloo.com>
RUN curl http://shell.ninthgate.se/packages/shell.ninthgate.se.gpg.key | apt-key add - && \
	echo "deb http://shell.ninthgate.se/packages/debian/ jessie main" > /etc/apt/sources.list.d/plexmediaserver.list && \
	apt-get update && \
	apt-get install -y plexmediaserver && \
	apt-get clean && \
	echo -n > /var/lib/apt/extended_states && \
	rm -rf /tmp/* /var/lib/apt/lists/* /var/tmp/*
RUN mkdir -p /var/run/dbus && \
	chown messagebus:messagebus /var/run/dbus && \
	dbus-uuidgen --ensure
ADD supervisord.conf /etc/supervisor/conf.d/plexmediaserver.conf
EXPOSE 32400
