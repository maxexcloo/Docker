FROM maxexcloo/java:latest
MAINTAINER Max Schaefer <max@excloo.com>
ENV VERSION 1.7.9
RUN wget -O /data/minecraft_server.jar https://s3.amazonaws.com/Minecraft.Download/versions/${VERSION}/minecraft_server.${VERSION}.jar 
RUN useradd -r -s /usr/sbin/nologin minecraft
RUN chmod minecraft /data
ADD supervisord.conf /etc/supervisor/conf.d/minecraft.conf
EXPOSE 25565
