FROM maxexcloo/debian:latest
MAINTAINER Max Schaefer <max@excloo.com>
RUN apt-get install -y git python && \
	apt-get clean && \
	echo -n > /var/lib/apt/extended_states
RUN mkdir -p /opt/couchpotato && \
	git clone https://www.github.com/RuudBurger/CouchPotatoServer.git /opt/couchpotato && \
	chown -R core:core /opt/couchpotato
ADD supervisord.conf /etc/supervisor/conf.d/couchpotato.conf
EXPOSE 5050
