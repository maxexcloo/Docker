FROM maxexcloo/java:latest
MAINTAINER Max Schaefer <max@excloo.com>
ENV MEMORY 256
ENV VERSION 4.9
apt-get install -y ffmpeg lame
ADD init /config/init/03subsonic
ADD supervisord.conf /etc/supervisor/conf.d/subsonic.conf
EXPOSE 4040
