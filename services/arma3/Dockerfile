FROM maxexcloo/steam

MAINTAINER Zenobius Jiricek <airtonix@gmail.com>

ENV DEBIAN_FRONTEND noninteractive
ENV STEAM_APPID 233780
ENV STEAM_USER anonymous
ENV STEAM_PASSWORD ''

ENV PORT 2306

RUN adduser arma3server --system
RUN addgroup arma3server
RUN adduser steam arma3server 

RUN chown arma3server:arma3server -R /
RUN chmod g+rw -R $APP_ROOT

RUN apt-get update && \
	apt-get install -y lib32stdc++6

ADD config /config
ADD /etc/supervisord.conf /etc/supervisor/conf.d/arma3server.conf

