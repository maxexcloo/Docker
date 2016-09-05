FROM maxexcloo/debian:latest
MAINTAINER Max Schaefer <max@excloo.com>
RUN curl https://deb.nodesource.com/gpgkey/nodesource.gpg.key | apt-key add - && \
	echo "deb https://deb.nodesource.com/node_6.x/ jessie main" > /etc/apt/sources.list.d/node.list && \
	apt-get update && \
	apt-get install -y build-essential nodejs && \
	apt-get clean && \
	echo -n > /var/lib/apt/extended_states && \
	rm -rf /tmp/* /var/lib/apt/lists/* /var/tmp/*
