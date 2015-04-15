FROM maxexcloo/java:latest
MAINTAINER Max Schaefer <max@excloo.com>
ENV MEMORY 256
ENV VERSION 5.2.1
apt-get install -y ffmpeg lame && \
	apt-get clean && \
	echo -n > /var/lib/apt/extended_states
ADD config /config
ADD supervisord.conf /etc/supervisor/conf.d/subsonic.conf
EXPOSE 4040
