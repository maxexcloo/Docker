FROM maxexcloo/debian-supervisord
MAINTAINER Max Schaefer <max@excloo.com>
RUN apt-get install -y znc
ADD znc.conf /etc/supervisor/conf.d/znc.conf
EXPOSE 6667
VOLUME ["/data/znc"]
