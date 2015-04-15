FROM maxexcloo/debian:latest
MAINTAINER Max Schaefer <max@excloo.com>
ENV VERSION 0.3.9
RUN wget -O - "https://www.github.com/jwilder/docker-gen/releases/download/${VERSION}/docker-gen-linux-amd64-${VERSION}.tar.gz" | tar --directory=/usr/local/bin -x -z
ADD config /config
ADD supervisord.conf /etc/supervisor/conf.d/haproxy-config.conf
