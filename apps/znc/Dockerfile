FROM maxexcloo/debian:latest
MAINTAINER Max Schaefer <max@excloo.com>
RUN apt-get install -y znc
RUN useradd -r -s /usr/sbin/nologin znc
ADD supervisord.conf /etc/supervisor/conf.d/znc.conf
EXPOSE 6667
