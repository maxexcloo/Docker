FROM maxexcloo/debian:latest
MAINTAINER Max Schaefer <max@excloo.com>
ENV DOCKER_HOST unix:///tmp/docker.sock
ENV VERSION 0.2.1
RUN apt-get install -y debian-keyring
RUN gpg --no-default-keyring --keyring=/usr/share/keyrings/debian-keyring.gpg --export bernat@debian.org | apt-key add -
RUN echo "deb http://cdn.debian.net/debian/ wheezy-backports main" > /etc/apt/sources.list.d/backports.list
RUN echo "deb http://haproxy.debian.net/ wheezy-backports main" > /etc/apt/sources.list.d/haproxy.list
RUN apt-get update
RUN apt-get install -t wheezy-backports -y haproxy
RUN wget -O - https://www.github.com/jwilder/docker-gen/releases/download/${VERSION}/docker-gen-linux-amd64-${VERSION}.tar.gz | tar -C /usr/local/bin -x -z
ADD docker-gen.conf /config/
ADD haproxy.tmpl /config/
ADD supervisord.conf /etc/supervisor/conf.d/haproxy.conf
EXPOSE 80
EXPOSE 443
