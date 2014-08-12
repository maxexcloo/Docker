FROM base/archlinux:latest
MAINTAINER Max Schaefer <max@excloo.com>
ADD etc /etc
RUN pacman -Syy
RUN pacman -Suu
RUN pacman -S --asdeps --dbonly $(pacman -Qq)
RUN pacman -S --asexplicit $(cat /etc/pacman.list)
RUN pacman -Rcns $(pacman -Qdqt)
RUN pacman -Scc
RUN rm -rf /var/cache/pacman/pkg/*
