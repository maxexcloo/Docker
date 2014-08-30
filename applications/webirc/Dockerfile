FROM maxexcloo/nodejs:latest
MAINTAINER Max Schaefer <max@excloo.com>
RUN apt-get install -y git
RUN useradd -u 1000 user
RUN git clone https://www.github.com/pavben/WebIRC.git /data
RUN rm /data/*.example
RUN cd /data && npm install
ADD data /data
RUN sed -i "s/SECRET/$(pwgen -B -s 24 1)/g" /data/config.json
RUN chown -R user:user /data
ADD supervisord.conf /etc/supervisor/conf.d/webirc.conf
PORT 8080
