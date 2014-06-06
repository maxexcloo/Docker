FROM maxexcloo/debian:latest
MAINTAINER Max Schaefer <max@excloo.com>
ENV DOCKER_HOST unix:///tmp/docker.sock
ENV VERSION 0.3.0
RUN touch /data/haproxy.cfg
RUN wget -O - https://www.github.com/jwilder/docker-gen/releases/download/${VERSION}/docker-gen-linux-amd64-${VERSION}.tar.gz | tar --directory=/usr/local/bin -x -z
ADD docker-gen.conf /config/docker-gen.conf
ADD haproxy.tmpl /config/haproxy.tmpl
ADD supervisord.conf /etc/supervisor/conf.d/docker-gen.conf
VOLUME /data
