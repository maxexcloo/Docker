FROM maxexcloo/debian:latest
MAINTAINER Max Schaefer <max@excloo.com>
RUN apt-get install -y openssh-server && \
	apt-get clean && \
	echo -n > /var/lib/apt/extended_states
RUN mkdir -p /var/run/sshd
ADD supervisord.conf /etc/supervisor/conf.d/sshd.conf
EXPOSE 22
