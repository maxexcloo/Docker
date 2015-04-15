FROM maxexcloo/debian:latest
MAINTAINER Max Schaefer <max@excloo.com>
ENV SNIPROXY_VERSION 0.4.0
ENV UDNS_VERSION 0.4
RUN apt-get install -y autotools-dev cdbs debhelper dh-autoreconf dpkg-dev iptables libev-dev libpcre3-dev pkg-config && \
	apt-get clean && \
	echo -n > /var/lib/apt/extended_states
RUN cd /tmp && \
	wget "http://archive.ubuntu.com/ubuntu/pool/universe/u/udns/udns_${UDNS_VERSION}-1.debian.tar.gz" "http://archive.ubuntu.com/ubuntu/pool/universe/u/udns/udns_${UDNS_VERSION}-1.dsc" "http://archive.ubuntu.com/ubuntu/pool/universe/u/udns/udns_${UDNS_VERSION}.orig.tar.gz" "https://www.github.com/dlundquist/sniproxy/archive/${SNIPROXY_VERSION}.tar.gz" && \
	tar fxz udns_*.orig.tar.gz && \
	cd udns-* && \
	tar fxz ../udns_*-1.debian.tar.gz && \
	dpkg-buildpackage && \
	cd .. && \
	dpkg -i libudns-dev_*.deb libudns0_*.deb && \
	tar fxz ${SNIPROXY_VERSION}.tar.gz && \
	cd sniproxy-* && \
	dpkg-buildpackage && \
	dpkg -i ../sniproxy_*.deb && \
	rm -rf *
ADD config /config
ADD supervisord.conf /etc/supervisor/conf.d/sniproxy.conf
EXPOSE 80
EXPOSE 443
