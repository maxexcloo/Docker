FROM maxexcloo/debian:latest
MAINTAINER Max Schaefer <max@excloo.com>
RUN apt-get install -y git openssh-server
RUN mkdir -p /var/run/sshd
ADD supervisord.conf /etc/supervisor/conf.d/sshd.conf
EXPOSE 22
