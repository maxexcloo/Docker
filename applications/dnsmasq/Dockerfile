FROM maxexcloo/debian:latest
MAINTAINER Max Schaefer <max@excloo.com>
RUN apt-get install -y dnsmasq iptables
ADD dnsmasq.conf /etc/dnsmasq.conf
ADD init /config/init/04dnsmasq
ADD supervisord.conf /etc/supervisor/conf.d/dnsmasq.conf
EXPOSE 53
