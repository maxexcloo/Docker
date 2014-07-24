FROM maxexcloo/debian:latest
MAINTAINER Max Schaefer <max@excloo.com>
RUN apt-get install -y dnsmasq
ADD dnsmasq.conf /etc/dnsmasq.conf
ADD supervisord.conf /etc/supervisor/conf.d/dnsmasq.conf
EXPOSE 53
