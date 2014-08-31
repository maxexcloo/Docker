FROM debian:latest
MAINTAINER Max Schaefer <max@excloo.com>
ADD etc /etc
ENV DEBIAN_FRONTEND noninteractive
RUN apt-get update
RUN apt-get upgrade -y
RUN apt-get install -y ca-certificates inotify-tools nano pwgen supervisor tmux unzip wget
RUN apt-get clean
RUN mkdir -p /config/data /config/init /data /var/log/supervisor
RUN useradd -u 500 user
ADD init /config/init/01base
ADD loop /config/loop
RUN chmod +x /config/loop
CMD /config/loop
