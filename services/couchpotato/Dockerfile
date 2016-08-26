FROM maxexcloo/debian:latest
MAINTAINER Max Schaefer <max@excloo.com>
RUN apt-get install -y python && \
	apt-get clean && \
	echo -n > /var/lib/apt/extended_states
RUN git clone https://github.com/RuudBurger/CouchPotatoServer.git /app && \
	chown -R core:core /app
ADD supervisord.conf /etc/supervisor/conf.d/couchpotato.conf
EXPOSE 5050
