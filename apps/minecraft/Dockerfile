FROM maxexcloo/java:latest
MAINTAINER Max Schaefer <max@excloo.com>
ENV MEMORY 1024
ENV VERSION 1.7.9
RUN useradd -m minecraft
ADD init /config/init/02minecraft
ADD supervisord.conf /etc/supervisor/conf.d/minecraft.conf
EXPOSE 25565
