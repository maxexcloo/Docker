FROM maxexcloo/debian-supervisord:latest
MAINTAINER Max Schaefer <max@excloo.com>
RUN apt-get update
RUN apt-get install -y znc
ADD znc.conf /etc/supervisor/conf.d/znc.conf
EXPOSE 6667
