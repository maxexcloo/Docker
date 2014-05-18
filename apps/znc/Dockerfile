FROM maxexcloo/debian-supervisord:latest
MAINTAINER Max Schaefer <max@excloo.com>
RUN apt-get install -y znc
RUN useradd znc
ADD supervisord.conf /etc/supervisor/conf.d/znc.conf
EXPOSE 6667
