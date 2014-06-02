FROM maxexcloo/java:latest
MAINTAINER Max Schaefer <max@excloo.com>
RUN useradd -r -s /usr/sbin/nologin minecraft
ADD init /config/init/02minecraft
ADD supervisord.conf /etc/supervisor/conf.d/minecraft.conf
EXPOSE 25565
