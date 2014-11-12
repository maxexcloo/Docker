FROM maxexcloo/java:latest
MAINTAINER Max Schaefer <max@excloo.com>

ENV MEMORY 1024
ENV VERSION 1.7.10
ENV EULA false

ADD config /config
ADD supervisord.conf /etc/supervisor/conf.d/minecraft.conf

EXPOSE 25565
EXPOSE 25575
