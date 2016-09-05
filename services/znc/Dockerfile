FROM maxexcloo/debian:latest
MAINTAINER Max Schaefer <max@excloo.com>
RUN apt-get update && \
	apt-get install -y znc && \
	apt-get clean && \
	echo -n > /var/lib/apt/extended_states && \
	rm -rf /tmp/* /var/lib/apt/lists/* /var/tmp/*
ADD supervisord.conf /etc/supervisor/conf.d/znc.conf
EXPOSE 6667
