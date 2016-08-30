FROM maxexcloo/ubuntu:latest
MAINTAINER Max Schaefer <max@excloo.com>
RUN curl https://deb.nodesource.com/gpgkey/nodesource.gpg.key | apt-key add - && \
	apt-key adv --keyserver keyserver.ubuntu.com --recv-keys 561F9B9CAC40B2F7 && \
	echo "deb https://deb.nodesource.com/node_6.x/ xenial main" > /etc/apt/sources.list.d/node.list && \
	echo "deb https://oss-binaries.phusionpassenger.com/apt/passenger/ xenial main" > /etc/apt/sources.list.d/passenger.list && \
	apt-get update && \
	apt-get install -y build-essential nginx-extras nodejs passenger ruby && \
	apt-get clean && \
	echo -n > /var/lib/apt/extended_states
RUN gem install rails
RUN rm -rf /etc/nginx/*.d /etc/nginx/sites-* && \
	mkdir -p /etc/nginx/addon.d /etc/nginx/config.d /etc/nginx/host.d /etc/nginx/nginx.d
ADD etc /etc
ADD supervisord.conf /etc/supervisor/conf.d/nginx.conf
EXPOSE 80
