FROM maxexcloo/debian:latest
MAINTAINER Max Schaefer <max@excloo.com>
RUN apt-get install -y git python
RUN mkdir -p /opt/couchpotato
RUN git clone https://www.github.com/RuudBurger/CouchPotatoServer.git /opt/couchpotato
RUN chown -R user:user /opt/couchpotato
ADD supervisord.conf /etc/supervisor/conf.d/couchpotato.conf
EXPOSE 5050
