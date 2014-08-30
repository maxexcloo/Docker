FROM maxexcloo/debian:latest
MAINTAINER Max Schaefer <max@excloo.com>
RUN apt-get install -y python-cheetah
RUN useradd -u 1000 user
RUN mkdir -p /opt/sickbeard
RUN wget -O - "https://www.github.com/midgetspy/Sick-Beard/tarball/master" | tar --strip-components=1 -C /opt/sickbeard -x -z midgetspy-Sick-Beard-*
RUN chown -R user:user /opt/sickbeard
ADD init /config/init/03sickbeard
ADD supervisord.conf /etc/supervisor/conf.d/sickbeard.conf
EXPOSE 8081
