FROM maxexcloo/debian:latest
MAINTAINER Max Schaefer <max@excloo.com>
RUN apt-get install -y dnsmasq iptables && \
	apt-get clean && \
	echo -n > /var/lib/apt/extended_states
ADD config /config
ADD etc /etc
ADD supervisord.conf /etc/supervisor/conf.d/dnsmasq.conf
EXPOSE 53
