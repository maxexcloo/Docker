FROM maxexcloo/debian:latest
MAINTAINER Max Schaefer <max@excloo.com>
RUN apt-get install -y curl iptables openvpn socat
ADD config /config
ADD supervisord.conf /etc/supervisor/conf.d/openvpn.conf
EXPOSE 25
EXPOSE 110
EXPOSE 443
EXPOSE 1194
EXPOSE 8080
