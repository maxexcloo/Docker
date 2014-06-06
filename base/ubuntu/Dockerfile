FROM ubuntu:latest
MAINTAINER Max Schaefer <max@excloo.com>
ENV DEBIAN_FRONTEND noninteractive
RUN apt-get update
RUN apt-get upgrade -y
RUN apt-get install -y ca-certificates cron inotify-tools nano pwgen supervisor tmux wget
RUN mkdir -p /config /config/init /data /var/log/supervisor
ADD loop /config/loop
RUN chmod +x /config/loop
CMD ["/config/loop"]
