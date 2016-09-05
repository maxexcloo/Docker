FROM maxexcloo/debian:latest
MAINTAINER Max Schaefer <max@excloo.com>
RUN apt-get update && \
	apt-get install -y iptables netcat openvpn && \
	apt-get clean && \
	echo -n > /var/lib/apt/extended_states && \
	rm -rf /tmp/* /var/lib/apt/lists/* /var/tmp/*
ADD app /app
ADD config /config
ADD supervisord.conf /etc/supervisor/conf.d/openvpn.conf
EXPOSE 80
EXPOSE 443
EXPOSE 1194/udp
