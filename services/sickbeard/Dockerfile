FROM maxexcloo/debian:latest
MAINTAINER Max Schaefer <max@excloo.com>
RUN apt-get install -y git python-cheetah
RUN mkdir -p /opt/sickbeard
RUN git clone https://www.github.com/midgetspy/Sick-Beard.git /opt/sickbeard
RUN chown -R user:user /opt/sickbeard
ADD supervisord.conf /etc/supervisor/conf.d/sickbeard.conf
EXPOSE 8081
