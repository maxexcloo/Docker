FROM maxexcloo/java:latest
MAINTAINER Max Schaefer <max@excloo.com>
ENV MEMORY 1024
ENV VERSION 1.7.10
ADD init /config/init/03minecraft
ADD supervisord.conf /etc/supervisor/conf.d/minecraft.conf
EXPOSE 25565
