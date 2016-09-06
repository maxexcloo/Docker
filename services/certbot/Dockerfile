FROM maxexcloo/debian:latest
MAINTAINER Max Schaefer <max@excloo.com>
RUN echo "deb http://http.debian.net/debian/ jessie-backports main" > /etc/apt/sources.list.d/backports.list && \
	apt-get update && \
	apt-get install -t jessie-backports -y certbot && \
	apt-get clean && \
	echo -n > /var/lib/apt/extended_states && \
	rm -rf /tmp/* /var/lib/apt/lists/* /var/tmp/*
ADD config /config
ADD supervisord.conf /etc/supervisor/conf.d/certbot.conf
EXPOSE 80
EXPOSE 443
