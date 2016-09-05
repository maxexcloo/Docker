FROM maxexcloo/debian:latest
MAINTAINER Max Schaefer <max@excloo.com>
RUN curl https://nginx.org/keys/nginx_signing.key | apt-key add - && \
	echo "deb http://nginx.org/packages/debian/ jessie nginx" > /etc/apt/sources.list.d/nginx.list && \
	apt-get update && \
	apt-get install -y nginx && \
	apt-get clean && \
	echo -n > /var/lib/apt/extended_states && \
	rm -rf /tmp/* /var/lib/apt/lists/* /var/tmp/*
RUN rm -rf /etc/nginx/*.d /etc/nginx/sites-* && \
	mkdir -p /etc/nginx/addon.d /etc/nginx/config.d /etc/nginx/host.d /etc/nginx/nginx.d
ADD etc /etc
ADD supervisord.conf /etc/supervisor/conf.d/nginx.conf
EXPOSE 80
