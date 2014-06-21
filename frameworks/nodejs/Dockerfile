FROM maxexcloo/build:latest
MAINTAINER Max Schaefer <max@excloo.com>
ENV VERSION v0.10.29
RUN mkdir /opt/nodejs
RUN wget -O - http://www.nodejs.org/dist/${VERSION}/node-${VERSION}-linux-x64.tar.gz | tar --strip-components=1 -C /opt/nodejs -x -z
ENV PATH $PATH:/opt/nodejs/bin
