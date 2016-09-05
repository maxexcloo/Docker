FROM maxexcloo/debian:latest
MAINTAINER Max Schaefer <max@excloo.com>
RUN apt-get update && \
	apt-get install -y openssh-server && \
	apt-get clean && \
	echo -n > /var/lib/apt/extended_states && \
	rm -rf /tmp/* /var/lib/apt/lists/* /var/tmp/*
RUN mkdir -p /var/run/sshd
ADD supervisord.conf /etc/supervisor/conf.d/sshd.conf
EXPOSE 22
