FROM ubuntu:latest
MAINTAINER Max Schaefer <max@excloo.com>
ADD etc /etc
ENV DEBIAN_FRONTEND noninteractive
RUN apt-get update \
  && apt-get upgrade -y \
  && apt-get install -y ca-certificates inotify-tools nano pwgen supervisor unrar unzip wget \
  && apt-get clean
RUN mkdir /config /data
RUN useradd -u 500 core
ADD config /config
ADD loop /config/loop
RUN chmod +x /config/loop
CMD /config/loop
