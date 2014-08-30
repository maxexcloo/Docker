FROM debian:latest
MAINTAINER Max Schaefer <max@excloo.com>
CMD /config/loop
ENV DEBIAN_FRONTEND noninteractive
RUN apt-get update
RUN apt-get upgrade -y
RUN apt-get install -y ca-certificates inotify-tools nano pwgen supervisor tmux unzip wget
RUN apt-get clean
RUN mkdir -p /config/data /config/init /data /var/log/supervisor
ADD etc /etc
ADD loop /config/loop
RUN chmod +x /config/loop
