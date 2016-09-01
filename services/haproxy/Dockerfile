FROM maxexcloo/debian:latest
MAINTAINER Max Schaefer <max@excloo.com>
RUN apt-get install -y haproxy && \
	apt-get clean && \
	echo -n > /var/lib/apt/extended_states
ADD config /config
ADD supervisord.conf /etc/supervisor/conf.d/haproxy.conf
EXPOSE 80
EXPOSE 443
