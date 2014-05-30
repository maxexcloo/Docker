FROM ubuntu:latest
MAINTAINER Max Schaefer <max@excloo.com>
ENV DEBIAN_FRONTEND noninteractive
RUN apt-get update
RUN apt-get upgrade -y
RUN apt-get install -y ca-certificates cron inotify-tools openssh-server nano pwgen supervisor wget
RUN mkdir -p /config /data /var/log/supervisor /var/run/sshd
ADD init /config/init
ADD loop /config/loop
ADD supervisord.conf /etc/supervisor/conf.d/sshd.conf
RUN chmod +x /config/*
CMD ["/config/loop"]
EXPOSE 22
VOLUME ["/data"]
