FROM maxexcloo/debian:latest
MAINTAINER Max Schaefer <max@excloo.com>
RUN apt-get install -y znc
RUN useradd -u 1000 user
ADD init /config/init/03znc
ADD supervisord.conf /etc/supervisor/conf.d/znc.conf
EXPOSE 6667
EXPOSE 6697
