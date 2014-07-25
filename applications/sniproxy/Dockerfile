FROM maxexcloo/debian:latest
MAINTAINER Max Schaefer <max@excloo.com>
ENV SNIPROXY_VERSION 0.3.4
ENV UDNS_VERSION 0.4
RUN apt-get install -y autotools-dev cdbs debhelper dh-autoreconf dpkg-dev libev-dev libpcre3-dev pkg-config
WORKDIR /tmp
RUN wget "http://archive.ubuntu.com/ubuntu/pool/universe/u/udns/udns_${UDNS_VERSION}-1.debian.tar.gz" "http://archive.ubuntu.com/ubuntu/pool/universe/u/udns/udns_${UDNS_VERSION}-1.dsc" "http://archive.ubuntu.com/ubuntu/pool/universe/u/udns/udns_${UDNS_VERSION}.orig.tar.gz" "https://www.github.com/dlundquist/sniproxy/archive/${SNIPROXY_VERSION}.tar.gz"
RUN tar fxz udns_*.orig.tar.gz; cd udns-*; tar fxz ../udns_*-1.debian.tar.gz; dpkg-buildpackage; cd ..; dpkg -i libudns-dev_*.deb libudns0_*.deb
RUN tar fxz ${SNIPROXY_VERSION}.tar.gz; cd sniproxy-*; dpkg-buildpackage; dpkg -i ../sniproxy_*.deb
RUN rm -rf *
ADD init /config/init/04sniproxy
ADD sniproxy.conf /etc/sniproxy.conf
ADD supervisord.conf /etc/supervisor/conf.d/sniproxy.conf
EXPOSE 80
EXPOSE 443
