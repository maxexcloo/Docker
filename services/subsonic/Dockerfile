FROM maxexcloo/java:latest
MAINTAINER Max Schaefer <max@excloo.com>
ENV MEMORY 256
ENV VERSION 5.0
apt-get install -y ffmpeg lame
ADD config /config
ADD supervisord.conf /etc/supervisor/conf.d/subsonic.conf
EXPOSE 4040
