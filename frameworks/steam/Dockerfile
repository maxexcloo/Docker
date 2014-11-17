FROM maxexcloo/ubuntu

MAINTAINER Zenobius Jiricek <airtonix@gmail.com>

ENV DEBIAN_FRONTEND noninteractive
ENV STEAM_CMD_URL http://media.steampowered.com/installer/steamcmd_linux.tar.gz

ADD config /config

RUN adduser steam --system && \
    addgroup steam

RUN apt-get update && \
    apt-get install -y lib32gcc1 build-essential


