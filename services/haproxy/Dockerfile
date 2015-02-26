FROM maxexcloo/debian:latest
MAINTAINER Max Schaefer <max@excloo.com>
RUN apt-key adv --keyserver keyserver.ubuntu.com --recv-keys 95A42FE8353525F9 && \
	apt-key adv --keyserver keyserver.ubuntu.com --recv-keys CBCB082A1BB943DB && \
	echo "deb http://cdn.debian.net/debian/ wheezy-backports main" > /etc/apt/sources.list.d/backports.list && \
	echo "deb http://haproxy.debian.net/ wheezy-backports main" > /etc/apt/sources.list.d/haproxy.list && \
	apt-get update && \
	apt-get install -t wheezy-backports -y haproxy && \
	apt-get clean && \
	echo -n > /var/lib/apt/extended_states
ADD config /config
ADD supervisord.conf /etc/supervisor/conf.d/haproxy.conf
EXPOSE 80
EXPOSE 443
