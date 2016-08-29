FROM ubuntu:xenial
MAINTAINER Max Schaefer <max@excloo.com>
ADD etc /etc
CMD /config/main
ENV DEBIAN_FRONTEND noninteractive
RUN apt-get update && \
	apt-get upgrade -y && \
	apt-get install -y apt-transport-https ca-certificates curl git inotify-tools nano pwgen supervisor && \
	apt-get clean && \
	echo -n > /var/lib/apt/extended_states
RUN mkdir /app /config /data
RUN useradd -u 500 core
ADD config /config
RUN chmod +x /config/main
