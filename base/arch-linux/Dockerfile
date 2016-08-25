FROM base/archlinux:latest
MAINTAINER Max Schaefer <max@excloo.com>
ADD etc /etc
CMD /bin/bash
RUN pacman -Syy && \
	pacman -S --noconfirm pacman && \
	pacman-db-upgrade && \
	rm -rf /etc/pacman.d/gnupg && \
	pacman-key --init && \
	pacman-key --populate archlinux && \
	pacman -Suu --noconfirm && \
	pacman -S --asdeps --noconfirm $(pacman -Qq) && \
	pacman -S --asexplicit --noconfirm $(cat /etc/pacman.list) && \
	pacman -Rcns --noconfirm $(pacman -Qdqt) && \
	pacman -Scc && \
	find /etc/ -type f -name '*.pac*' -exec rm {} \; && \
	rm -rf /var/cache/pacman/pkg/*
