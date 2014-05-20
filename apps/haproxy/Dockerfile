FROM maxexcloo/debian-supervisord:latest
MAINTAINER Max Schaefer <max@excloo.com>
ENV DOCKER_HOST unix:///tmp/docker.sock
RUN apt-get install -y debian-keyring
RUN gpg --no-default-keyring --keyring=/usr/share/keyrings/debian-keyring.gpg --export bernat@debian.org | apt-key add -
RUN echo "deb http://cdn.debian.net/debian wheezy-backports main" > /etc/apt/sources.list.d/backports.list && echo "deb http://haproxy.debian.net wheezy-backports main" > /etc/apt/sources.list.d/haproxy.list
RUN apt-get update
RUN apt-get install -t wheezy-backports -y haproxy
RUN wget -O /tmp/docker-gen.tar.gz https://www.github.com/jwilder/docker-gen/releases/download/0.2.1/docker-gen-linux-amd64-0.2.1.tar.gz
RUN tar -C /usr/local/bin -f /tmp/docker-gen.tar.gz -x -z
ADD docker-gen.conf /etc/docker-gen.conf
ADD haproxy.cfg /etc/haproxy/haproxy.cfg
ADD haproxy.tmpl /usr/local/share/haproxy.tmpl
ADD supervisord.conf /etc/supervisor/conf.d/haproxy.conf
EXPOSE 80
EXPOSE 443
