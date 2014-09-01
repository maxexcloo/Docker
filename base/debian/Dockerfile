FROM debian:latest
MAINTAINER Max Schaefer <max@excloo.com>
ADD etc /etc
CMD /config/loop
ENV DEBIAN_FRONTEND noninteractive
RUN useradd -u 500 core
RUN apt-get update
RUN apt-get upgrade -y
RUN apt-get install -y ca-certificates inotify-tools nano pwgen supervisor tmux unzip wget
RUN apt-get clean
ADD init /config/init/01debian
ADD loop /config/loop
RUN chmod +x /config/loop
RUN mkdir -p /config/data /config/init /data /var/log/supervisor
