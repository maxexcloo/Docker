FROM maxexcloo/debian:latest
MAINTAINER Max Schaefer <max@excloo.com>
RUN apt-get install -y znc && \
	apt-get clean && \
	echo -n > /var/lib/apt/extended_states
ADD supervisord.conf /etc/supervisor/conf.d/znc.conf
EXPOSE 6667
