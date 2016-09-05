FROM maxexcloo/ubuntu:latest
MAINTAINER Max Schaefer <max@excloo.com>
RUN apt-key adv --keyserver keyserver.ubuntu.com --recv-keys 561F9B9CAC40B2F7 && \
	echo "deb https://oss-binaries.phusionpassenger.com/apt/passenger/ xenial main" > /etc/apt/sources.list.d/passenger.list && \
	apt-get update && \
	apt-get install -y build-essential libsqlite3-dev nginx-extras nodejs passenger ruby ruby-dev zlib1g-dev && \
	apt-get clean && \
	echo -n > /var/lib/apt/extended_states && \
	rm -rf /tmp/* /var/lib/apt/lists/* /var/tmp/*
RUN gem install rails
RUN rm -rf /etc/nginx/*.d /etc/nginx/sites-* && \
	mkdir -p /etc/nginx/addon.d /etc/nginx/config.d /etc/nginx/host.d /etc/nginx/nginx.d
ADD etc /etc
ADD supervisord.conf /etc/supervisor/conf.d/nginx.conf
EXPOSE 80
