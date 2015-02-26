FROM maxexcloo/java:latest
MAINTAINER Max Schaefer <max@excloo.com>
ENV EULA true
ENV MEMORY 1024
ENV VERSION 1.8.3
ADD config /config
ADD supervisord.conf /etc/supervisor/conf.d/minecraft.conf
EXPOSE 25565
