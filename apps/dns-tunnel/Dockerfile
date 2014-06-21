FROM maxexcloo/debian:latest
MAINTAINER Max Schaefer <max@excloo.com>
ENV SNIPROXY_VERSION 0.3.4
ENV UDNS_VERSION 0.4
RUN apt-get install -y autotools-dev cdbs debhelper dh-autoreconf dnsmasq dpkg-dev iptables libev-dev libpcre3-dev pkg-config
WORKDIR /tmp
RUN wget http://archive.ubuntu.com/ubuntu/pool/universe/u/udns/udns_${UDNS_VERSION}-1.dsc http://archive.ubuntu.com/ubuntu/pool/universe/u/udns/udns_${UDNS_VERSION}.orig.tar.gz http://archive.ubuntu.com/ubuntu/pool/universe/u/udns/udns_${UDNS_VERSION}-1.debian.tar.gz https://www.github.com/dlundquist/sniproxy/archive/${SNIPROXY_VERSION}.tar.gz
RUN tar xfz udns_*.orig.tar.gz && cd udns-* && tar xfz ../udns_*-1.debian.tar.gz && dpkg-buildpackage
RUN dpkg -i libudns-dev_*.deb libudns0_*.deb
RUN tar xfz ${SNIPROXY_VERSION}.tar.gz && cd sniproxy-* && dpkg-buildpackage
RUN dpkg -i sniproxy_*.deb
ADD dns-tunnel /usr/local/bin/dns-tunnel
ADD dnsmasq.conf /data/dnsmasq/dnsmasq.conf
ADD sniproxy.conf /data/sniproxy/sniproxy.conf
ADD supervisord.conf /etc/supervisor/conf.d/dns-tunnel.conf
EXPOSE 53
EXPOSE 80
EXPOSE 443
