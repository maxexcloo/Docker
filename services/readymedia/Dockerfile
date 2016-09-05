FROM maxexcloo/debian:latest
MAINTAINER Max Schaefer <max@excloo.com>
RUN apt-get update && \
	apt-get install -y minidlna && \
	apt-get clean && \
	echo -n > /var/lib/apt/extended_states && \
	rm -rf /tmp/* /var/lib/apt/lists/* /var/tmp/*
ADD etc /etc
ADD supervisord.conf /etc/supervisor/conf.d/readymedia.conf
EXPOSE 1900/udp
EXPOSE 8200
