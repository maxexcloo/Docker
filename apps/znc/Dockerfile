FROM maxexcloo/debian-supervisord:latest
MAINTAINER max@excloo.com
RUN apt-get install -y znc
ADD supervisord.conf /etc/supervisor/conf.d/supervisord.conf
EXPOSE 6667
VOLUME ["/data/znc"]
