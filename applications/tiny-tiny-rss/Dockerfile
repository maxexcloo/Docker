FROM maxexcloo/nginx-php:latest
MAINTAINER Max Schaefer <max@excloo.com>
RUN apt-get install -y git && \
	apt-get clean && \
	echo -n > /var/lib/apt/extended_states
ADD config /config
ADD supervisord.conf /etc/supervisor/conf.d/tiny-tiny-rss.conf
