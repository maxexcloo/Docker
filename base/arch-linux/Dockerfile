FROM base/archlinux:latest
MAINTAINER Max Schaefer <max@excloo.com>
ADD etc /etc
CMD /bin/bash
RUN pacman -Syy
RUN pacman -Suu --noconfirm
RUN pacman -S --asdeps --noconfirm $(pacman -Qq)
RUN pacman -S --asexplicit --noconfirm $(cat /etc/pacman.list)
RUN pacman -Rcns --noconfirm $(pacman -Qdqt)
RUN pacman -Scc
RUN find /etc/ -type f -name '*.pac*' -exec rm {} \;
RUN rm -rf /var/cache/pacman/pkg/*
