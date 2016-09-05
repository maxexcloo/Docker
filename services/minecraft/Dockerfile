FROM maxexcloo/java:latest
MAINTAINER Max Schaefer <max@excloo.com>
ENV MEMORY 1024 \
    VERSION 1.10.2
ADD config /config
ADD supervisord.conf /etc/supervisor/conf.d/minecraft.conf
EXPOSE 25565
