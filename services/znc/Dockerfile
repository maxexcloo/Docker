FROM maxexcloo/debian:latest
MAINTAINER Max Schaefer <max@excloo.com>
RUN apt-get install -y znc
ADD supervisord.conf /etc/supervisor/conf.d/znc.conf
EXPOSE 6667
EXPOSE 6697
