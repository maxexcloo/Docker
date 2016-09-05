FROM maxexcloo/debian:latest
MAINTAINER Max Schaefer <max@excloo.com>
RUN apt-get update && \
	apt-get install -y python python-lxml && \
	apt-get clean && \
	echo -n > /var/lib/apt/extended_states && \
	rm -rf /tmp/* /var/lib/apt/lists/* /var/tmp/*
RUN git clone https://github.com/RuudBurger/CouchPotatoServer.git /app
ADD supervisord.conf /etc/supervisor/conf.d/couchpotato.conf
EXPOSE 5050
