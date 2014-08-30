FROM base/archlinux:latest
MAINTAINER Max Schaefer <max@excloo.com>
ADD etc /etc
RUN pacman -Syy
RUN pacman -Suu --noconfirm
RUN pacman -S --asdeps --dbonly --noconfirm $(pacman -Qq)
RUN pacman -S --asexplicit --noconfirm $(cat /etc/pacman.list)
RUN pacman -Rcns --noconfirm $(pacman -Qdqt)
RUN pacman -Scc
RUN rm -rf /etc/pacman.list /var/cache/pacman/pkg/*
