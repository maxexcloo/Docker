FROM maxexcloo/debian:latest
MAINTAINER Max Schaefer <max@excloo.com>
RUN apt-get install -y minidlna
ADD etc /etc
ADD supervisord.conf /etc/supervisor/conf.d/readymedia.conf
EXPOSE 80
EXPOSE 1900/udp
EXPOSE 8200
