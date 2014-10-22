FROM maxexcloo/debian:latest
MAINTAINER Max Schaefer <max@excloo.com>
RUN apt-get install -y dnsmasq iptables
ADD config /config
ADD etc /etc
ADD supervisord.conf /etc/supervisor/conf.d/dnsmasq.conf
EXPOSE 53
