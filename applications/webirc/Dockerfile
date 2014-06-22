FROM maxexcloo/nodejs:latest
MAINTAINER Max Schaefer <max@excloo.com>
RUN useradd -m webirc
RUN git clone https://www.github.com/pavben/WebIRC.git /data
RUN rm /data/*.example
RUN cd /data && npm install
ADD config.json /data/config.json
ADD user.json /data/users/main.json
RUN sed -i "s/SECRET/$(pwgen -B -s 24 1)/g" /data/config.json
RUN chown -R webirc:webirc /data
ADD supervisord.conf /etc/supervisor/conf.d/webirc.conf
PORT 8080
