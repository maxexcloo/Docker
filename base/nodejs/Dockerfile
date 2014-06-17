FROM maxexcloo/debian:latest
MAINTAINER Max Schaefer <max@excloo.com>
RUN echo "deb http://cdn.debian.net/debian/ wheezy-backports main" > /etc/apt/sources.list.d/backports.list
RUN apt-get update
RUN apt-get install -y curl nodejs
RUN ln -s /usr/bin/nodejs /usr/bin/node
RUN ln -s /usr/lib/nodejs /usr/lib/node
RUN wget --no-check-certificate -O - https://www.npmjs.org/install.sh | bash
