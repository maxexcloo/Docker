FROM maxexcloo/debian:latest
MAINTAINER Max Schaefer <max@excloo.com>
RUN apt-get install -y dnsmasq iptables
ADD etc /etc
ADD init /config/init/03dnsmasq
ADD supervisord.conf /etc/supervisor/conf.d/dnsmasq.conf
EXPOSE 53
